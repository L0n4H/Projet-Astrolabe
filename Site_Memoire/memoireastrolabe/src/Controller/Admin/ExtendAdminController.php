<?php

namespace App\Controller\Admin;

use App\Entity\Etat;
use App\Entity\Evenement;
use App\Entity\GenreMusical;
use App\Entity\Groupe;
use App\Entity\Lieu;
use App\Entity\Passage;
use App\Entity\TypeEvenement;
use App\Repository\TypeEvenementRepository;
use DateTime;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class ExtendAdminController extends AbstractController
{
    private $em;
    private $etatApi;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;   
        $this->etatApi = $this->em->getRepository(Etat::class)->find(4); 
    }
    /**
     * @Route("/donnees", name="extend_admin_data")
     */
    public function index(): Response
    {
        return $this->render('admin/extend_admin/donnees.html.twig');
    }
    /**
     * @Route("/heeds", name="heeds_csv_import")
     */
    public function heeds(Request $request)
    {
        $param=(json_decode($request->getContent(),true));
        $file_name = $param['file_name'];
        $file_content = $param['file_content'];

        $response = new Response();

        $file_location = ".".$this->getParameter('heedshMapCsv')."/".$file_name;
        
        file_put_contents($file_location, file_get_contents($file_content));

        $responseContent = $this->parseCSV($file_location);
        
        $response->setContent(json_encode( $responseContent));

        unlink($file_location);

        
        $response->headers->set('Content-Type', 'application/json');;
        return $response;
    }

    function notNullOrEmpty($str)
    {
        return !is_null($str) && !empty(trim($str));
    }

    public function parseCSV($file)
    {
        $datas = [];
        $lineCount = 1 ;

        $responseContent = array('status' => 'success');
        $row = 1;
        if (($handle = fopen($file, "r")) !== FALSE) 
        {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) 
            {
                $num = count($data);
                $row++;
                for ($c=0; $c < $num; $c++) {
                    $datas[$row][] =  utf8_encode($data[$c]);
                }
            }
            fclose($handle);
        }
        $format = true;
        foreach ($datas as $data) {
            try
            {
                $errorMes = "";
                if(count($data)>1)
                {
                    if($lineCount != 1 && $format )
                    {
                        $this->etatApi = $this->em->getRepository(Etat::class)->find(4); 
                        $evenement = new Evenement();
    
                        $titre = $this->getTitre($data);
                        $titre ? $evenement->setTitre($titre) : $errorMes.= "Titre manquant;";
                        
                        $dateDeb = $this->getDate($data);
                        $dateDeb ? $evenement->setDateDebut($dateDeb) :$errorMes.= "date de debut manquante;";
    
                       /*  if($dateDeb) 
                         echo($data[1].' '.$this->getOuverture($data).'  :  '.$dateDeb->format('d/m/Y H: i: s'). ' | '); */
    
                        $dateFin = $this->getDate_fin($data);
                        $dateFin ? $evenement->setDateFin($dateFin) :$errorMes.= "date de fin manquante;";
                    
                        $type = $this->getType($data);
                        $type ? $evenement->setTypeEvenement($type) : $errorMes.= "Type d'évenement manquant;";
                    
                        $lieu = $this->getLieu($data);
                        $lieu ? $evenement->setLieu($lieu) :  $errorMes.= "Lieu manquant ou incomplet (nom,adresse,code postal*,ville*);";
    
                        $description = $this->getDescription($data);
                        $description ? $evenement->setDescription($description) :  "";
    
                        if($errorMes != "")
                        {
                            if($responseContent['status'] != 'error')
                            {
                                $responseContent = array('status' => 'error');
                            }
                            $responseContent["e"][ ] = "Erreur(s) durant l'insertion de la ligne ( ".$lineCount." ) : " .$errorMes;
    
                            $this->em->clear();
    
    
                        }
                        else if($dateDeb && $titre && is_null($this->em->getRepository(Evenement::class)->findByTitreDate($titre,$dateDeb)))
                        {
                            $genreMusical =$this->getStyle($data);
                            $genreMusical ? $evenement->addGenreMusical($genreMusical) : "" ;
                        
                            $evenement->setEtat($this->etatApi);
                            $this->em->persist($evenement);
                            $this->getProg($data, $evenement);
                        }
                    }
                    else 
                    {
                        
                        if(implode(";", $data) != ";Date;Date fin;Titre;Type;Organisateur;Série;Style;Suivi;Commentaire;Lieu;Capacité paramétrée;Ouverture;Horaire annoncé;Fermeture;Commentaire technique;Début;Fin;Titre alternatif;Accroche;Description;Description courte;Partenariats;Périodicité;Url;Complet;Lien billetterie;Infos billetterie;Taux Sacem;Tx SSA;Tx taxe fiscale;Tx TVA billetterie;Type prod.;Avec;Info deal prod.;Numéro d objet;Nombre de groupes;Prog.;Titre traduction;Titre alternatif traduction;Accroche traduction;Description courte traduction;Description traduction;Description traduction;Description traduction;Description traduction;Adresse;Code postal;Ville;Pays;Bon de Commande;Communication sur l'évènement;Convention;Facturation;Mise en vente;Sécurité;Ménage;SSIAP;Parking;Restauration;Convention de mise a dispo;Facturation location")
                        {
                            $responseContent = array('status' => 'error');
                            $responseContent["e"][ ] = "Erreur format de fichier incorrect, veuillez utilisez un fichier CSV au format \"programmation\""; 
                            $format = false;
                        }
                    }
                }
            }
            catch(\Exception $e)
            {
                $responseContent["php_e"][] = $e;
               /*  echo ($e);
                echo (print_r($datas[$lineCount]));
                echo (print_r($data)); */
            }
            $this->em->flush();
            $lineCount ++;
        }
        return $responseContent;
        
    }

    
    public function getType($line){ 
        $type=false;
        $typeName = rtrim(ltrim($line[4]));
        
        if($this->notNullOrEmpty($typeName))
        {
            $type = $this->em->getRepository(TypeEvenement::class)->findByLabel($typeName);
            
            if(is_null($type))
            {
                $type = new TypeEvenement();
                $type->setLabel($typeName);
                $type->setEtat($this->etatApi);
                $this->em->persist($type);
               // $this->em->flush();
                
            }
        }
        return $type;
    }
    public function getStyle($line){ 
        $style=false;
        $styleName = rtrim(ltrim($line[7]));
        if($this->notNullOrEmpty($styleName))
        {
            $style = $this->em->getRepository(GenreMusical::class)->findByNom($styleName);

            if(is_null($style))
            {
                $style = new GenreMusical();
                $style->setNom($styleName);
                $style->setEtat($this->etatApi);
                $this->em->persist($style);
                $this->em->flush();
                
            }
        }
        return $style;
    }
    public function getLieu($line){
        $lieu=false;

        $cp =$this->getCode_postal($line);
        $ville = $this->getVille($line);
        $nomLieu = rtrim(ltrim($line[10]));

        if($this->notNullOrEmpty($cp) && $this->notNullOrEmpty($ville) && $this->notNullOrEmpty($nomLieu))
        {
            $lieu = $this->em->getRepository(Lieu::class)->findByNomBatiment($nomLieu);

            if(is_null($lieu))
            {
                $lieu = new Lieu();
                $lieu->setNomBatiment($nomLieu);
                $lieu->setAdresse($this->getAdresse($line));
                $lieu->setCP($this->getCode_postal($line));
                $lieu->setVille($this->getVille($line));
                $lieu->setEtat($this->etatApi);

                $this->em->persist($lieu);
                
            }
        }

        return $lieu;
    }
    public function getProg($line,$event){
        $groupes = explode("+",$line[37]);
        foreach($groupes as $groupe)
        {
            $groupeEnt = $this->em->getRepository(Groupe::class)->findByNom(rtrim(ltrim($groupe)));
            
            if(is_null($groupeEnt))
            {
                $groupeEnt = new Groupe();
                $groupeEnt->setNom(rtrim(ltrim($groupe)));
                $groupeEnt->setEtat($this->etatApi);
                $this->em->persist($groupeEnt);
            }

            $passage = new Passage();
            $passage->setGroupe($groupeEnt);
            $passage->setEvenement($event);

            $this->em->persist($passage);
           // $this->em->flush();

        }
    }
    
    public function getDateWithFormat($date){ return DateTime::createFromFormat("d/m/Y H: i: s", $date ,new DateTimeZone('Europe/Paris'));}
    public function getDate($line)
    {
        $date = false;
        if($this->notNullOrEmpty($line[1]))
        {
            $date = $line[1];
            $heure = $this->getOuverture($line);
            $heure ?  $date .= " ".$this->getOuverture($line): "";

            $date = $this->getDateWithFormat($date);
        }
        return $date ;
    }
    public function getDate_fin($line)
    {
        $date=false;

        if($this->notNullOrEmpty($line[2]))
        {
            $date = $line[2];
        }
        else if($this->notNullOrEmpty($line[1]))
        {
            $date = $line[1];
        }
        if($date)
        {
            $heure = $this->getFermeture($line);
            $heure ?  $date .= " ".$this->getFermeture($line): "";
            $date = $this->getDateWithFormat($date);
        }

        return $date ;
    }
    public function getDescription($line){ return $this->notNullOrEmpty($line[20])? $line[20]:false;}
    public function getOuverture($line){ return $this->notNullOrEmpty($line[12])? $line[12]:false;}
    public function getFermeture($line){ return $this->notNullOrEmpty($line[14])? $line[14]:false;}
    public function getTitre($line){ return $this->notNullOrEmpty($line[3])? rtrim(ltrim($line[3])):false;}
    public function getAdresse($line){ return rtrim(ltrim($line[46]));}
    public function getCode_postal($line){ return rtrim(ltrim($line[47]));}
    public function getVille($line){ return rtrim(ltrim($line[48]));}
    public function getPays($line){ return rtrim(ltrim($line[49]));}
    public function getDebut($line){ return $line[16];}
    public function getFin($line){ return $line[17];}

    public function getOrganisateur($line){ return $line[5];}
    public function getSerie($line){ return $line[6];}
    public function getSuivi($line){ return $line[8];}
    public function getCommentaire($line){ return $line[9];}
    public function getCapacite_parametree($line){ return $line[11];}
    public function getHoraire_annonce($line){ return $line[13];}
    public function getCommentaire_technique($line){ return $line[15];}
    public function getTitre_alternatif($line){ return $line[18];}
    public function getAccroche($line){ return $line[19];}
    public function getDescription_courte($line){ return $line[21];}
    public function getPartenariats($line){ return $line[22];}
    public function getPeriodicite($line){ return $line[23];}
    public function getUrl($line){ return $line[24];}
    public function getComplet($line){ return $line[25];}
    public function getLien_billetterie($line){ return $line[26];}
    public function getInfos_billetterie($line){ return $line[27];}
    public function getTaux_Sacem($line){ return $line[28];}
    public function getTx_SSA($line){ return $line[29];}
    public function getTx_taxe_fiscale($line){ return $line[30];}
    public function getTx_TVA_billetterie($line){ return $line[31];}
    public function getType_prod($line){ return $line[32];}
    public function getAvec($line){ return $line[33];}
    public function getInfo_deal_prod($line){ return $line[34];}
    public function getNumero_d_objet($line){ return $line[35];}
    public function getNombre_de_groupes($line){ return $line[36];}
    public function getTitre_traduction($line){ return $line[38];}
    public function getTitre_alternatif_traduction($line){ return $line[39];}
    public function getAccroche_traduction($line){ return $line[40];}
    public function getDescription_courte_traduction($line){ return $line[41];}
    public function getDescription_traduction1($line){ return $line[42];}
    public function getDescription_traduction2($line){ return $line[43];}
    public function getDescription_traduction3($line){ return $line[44];}
    public function getDescription_traduction4($line){ return $line[45];}
    public function getBon_de_Commande($line){ return $line[50];}
    public function getCommunication_sur_l_evenement($line){ return $line[51];}
    public function getConvention($line){ return $line[52];}
    public function getFacturation($line){ return $line[53];}
    public function getMise_en_vente($line){ return $line[54];}
    public function getSecurite($line){ return $line[55];}
    public function getMenage($line){ return $line[56];}
    public function getSSIAP($line){ return $line[57];}
    public function getParking($line){ return $line[58];}
    public function getRestauration($line){ return $line[59];}
    public function getConvention_de_mise_a_dispo($line){ return $line[60];}
    public function getFacturation_location($line){ return $line[61];}
}
