<?php

namespace App\Command;

use App\Entity\Etat;
use App\Entity\Evenement;
use App\Entity\Groupe;
use App\Entity\Label;
use App\Entity\Musicien;
use App\Entity\Ressource;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Repository\RessourceRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/*  @AsCommand(
 *      name: 'checklinks',
 *      description: 'Add a short description for your command',
 *  )   
 */
class ChecklinksCommand extends Command
{
    protected static $defaultName = 'app:checklinks';
    private $container;
    private $client;
    private $urlGenerator;
    private $baseURl;     
    private $io;         
    private $error;         


    public function __construct(ContainerInterface $container,HttpClientInterface $client,UrlGeneratorInterface $urlGenerator)
    {
        parent::__construct();
        $this->container = $container;
        $this->client = $client;
        $this->urlGenerator = $urlGenerator;
        $this->error ='';

        $this->baseURl =  $this->urlGenerator->generate('home', [],UrlGeneratorInterface::ABSOLUTE_URL);
        
    }

    protected function configure(): void
    {
        $this
            ->addArgument('port', InputArgument::OPTIONAL, 'port de connexion')
            ->addOption('port', null, InputOption::VALUE_NONE, 'spécification d\un port de connexion')
        ;
    }

    protected function checkRessources($em,$errorEtat)
    {   
        $ressourceRepository = $em->getRepository(Ressource::class);
        $listeRessources = $ressourceRepository->findAll();

        $imgURl = $this->container->getParameter('vichMapRessources');

        foreach($listeRessources as $ressource)
        {   
            if($ressource->getEtat() != $errorEtat && $this->linkIsDead($ressource->getLien(),$ressource->getNom(),$imgURl))
            {
                $ressource->setEtat($errorEtat);
                $em->persist($ressource);
            }
        }
        $em->flush();
    }
    protected function checkLabel($em,$errorEtat)
    {   
        $repository = $em->getRepository(Label::class);
        $listeEntité = $repository->findAll();

        $imgURl = $this->container->getParameter('vichMapLabel');

        foreach($listeEntité as $entité)
        {   
            if($entité->getEtat() != $errorEtat && $this->linkIsDead($entité->getLienLogo(),$entité->getLogo(),$imgURl))
            {
                $entité->setEtat($errorEtat);
                $em->persist($entité);
            }
        }
        $em->flush();
    }
    protected function checkMusicien($em,$errorEtat)
    {   
        $repository = $em->getRepository(Musicien::class);
        $listeEntité = $repository->findAll();

        $imgURl = $this->container->getParameter('vichMapMusicien');

        foreach($listeEntité as $entité)
        {   
            if($entité->getEtat() != $errorEtat && $this->linkIsDead($entité->getLienImage(),$entité->getImage(),$imgURl))
            {
                $entité->setEtat($errorEtat);
                $em->persist($entité);
            }
        }
        $em->flush();
    }
    protected function checkEvenement($em,$errorEtat)
    {   
        $repository = $em->getRepository(Evenement::class);
        $listeEntité = $repository->findAll();

        $imgURl = $this->container->getParameter('vichMapEvenement');

        foreach($listeEntité as $entité)
        {   
            if($entité->getEtat() != $errorEtat && $this->linkIsDead($entité->getLienImage(),$entité->getImage(),$imgURl))
            {
                $entité->setEtat($errorEtat);
                $em->persist($entité);
            }
        }
        $em->flush();
    }
    protected function checkGroupe($em,$errorEtat)
    {   
        $repository = $em->getRepository(Groupe::class);
        $listeEntité = $repository->findAll();

        $imgURl = $this->container->getParameter('vichMapGroupe');

        foreach($listeEntité as $entité)
        {   
            if($entité->getEtat() != $errorEtat && $this->linkIsDead($entité->getLienImage(),$entité->getImage(),$imgURl))
            {
                $entité->setEtat($errorEtat);
                $em->persist($entité);
            }
        }
        $em->flush();
    }
    
    protected function linkIsDead($lien,$image,$imgBaseUrl)
    {
        if(!is_null($lien) && !empty($lien))
        {
            try
            {
                $response = $this->client->request(
                    'GET',
                    $lien
                );        
                $statusCode = $response->getStatusCode();

                return ($statusCode != 200);

            }
            catch(\Exception $e)
            {
                return ($statusCode != 200);
                //$this->io->note(sprintf('error : : %s', $e));
            }

        }
        else if(!is_null($image) && !empty($image))
        {
            try
            {
                $response = $this->client->request(
                    'GET',
                    $this->baseURl.$imgBaseUrl.'/'.$image
                );       
                $statusCode = $response->getStatusCode();

                return ($statusCode != 200);
            } 
            catch(\Exception $e)
            {
                $this->error ='erreur connexion serveur ( verifier le port spécifié )';
            }

        }
        return (!is_null($image) && !empty($image) ) && (!is_null($lien) && !empty($lien));

    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->io = new SymfonyStyle($input, $output);
        $em = $this->container->get('doctrine')->getManager();

        $port = $input->getArgument('port');

        if ($input->getOption('port') && $port) {
            
            $this->baseURl = substr($this->baseURl, 0,-1).":".$port;
            $this->io->note(sprintf('Vous avez spécifié le port n° : %s', $port));
        }

        $errorEtat = $em->getRepository(Etat::class)->find(5);

        $this->checkRessources($em,$errorEtat);
        $this->checkLabel($em,$errorEtat);
        $this->checkMusicien($em,$errorEtat);
        $this->checkEvenement($em,$errorEtat);
        $this->checkGroupe($em,$errorEtat);

        if($this->error =='')
        {
            $this->io->success('Les liens morts ont été traités.');
    
            return Command::SUCCESS;

        }
        else
        {
            $this->io->error($this->error.' | lien serveur spécifié : '.$this->baseURl);
            return Command::FAILURE;

        }
    }
}
