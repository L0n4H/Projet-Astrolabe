<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* workflow/slides/slide2.html.twig */
class __TwigTemplate_92ac9738b598c3696ec56094458e407a5e2f8b6c1e39f13f2aa9518cf7d30c5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"nested-slide\" id=\"Slide2\">
    <h2 class=\"slide-title slide-component\">Passage du/des groupe(s)</h2>
    <div id=\"Slide2-slide\">
        <div id=\"Slide2-slide-child-1\">
            <h2 class=\"nested-slide-child-title\">Création des Passages</h2>
            <div id=\"eventPassage\">
                <div class=\"passages\"
                data-index=\"";
        // line 8
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "passages", [], "any", false, false, false, 8)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "passages", [], "any", false, false, false, 8)), "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8) + 1), "html", null, true))) : (print (0)));
        echo "\"
                data-prototype=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventForm"] ?? null), "passages", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "prototype", [], "any", false, false, false, 9), 'rest'), "html_attr");
        echo "\"
                >
                    <div class=\"accordion\"></div>
                </div>
                <button type=\"button\" class=\"add_item_link btn\" data-collection-holder-class=\"passages\"><i class=\"fas fa-plus color-green\"></i> Ajouter un Passage</button>
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"slick-btn btn btn-outline-primary m-3 goBack\">Précédent</button>
                <button id=\"verifPassage\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide2-slide-child-2\">
            <h2 class=\"nested-slide-child-title\">Création de Groupe</h2>
            <div>
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["groupForm"] ?? null), 'form_start', ["attr" => ["id" => "groupForm"]]);
        echo " 
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "nom", [], "any", false, false, false, 30), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "imageFile", [], "any", false, false, false, 36), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "lienImage", [], "any", false, false, false, 42), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "nationalite", [], "any", false, false, false, 48), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une Nationalité</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "genresMusicaux", [], "any", false, false, false, 53), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un Genre Musical</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "dateCreation", [], "any", false, false, false, 60), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "labels", [], "any", false, false, false, 64), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienLabel vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un label</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "etiquettes", [], "any", false, false, false, 71), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                        </div>
                    </div>
                    <div id=\"groupeMembres\">
                        <div class=\"membres\"
                        data-index=\"";
        // line 78
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "membres", [], "any", false, false, false, 78)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "membres", [], "any", false, false, false, 78)), "vars", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78) + 1), "html", null, true))) : (print (0)));
        echo "\"
                        data-prototype=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "membres", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "prototype", [], "any", false, false, false, 79), 'rest'), "html_attr");
        echo "\"
                        >                              
                            <div class=\"accordion\"></div>
                        </div>
                        <button type=\"button\" class=\"add_item_link btn\" data-collection-holder-class=\"membres\"><i class=\"fas fa-plus color-green\"></i> Ajouter un Membre</button>
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"row\">
                        <div class=\"inputCol\">
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "biographie", [], "any", false, false, false, 88), 'row');
        echo "
                                <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["groupForm"] ?? null), "_token", [], "any", false, false, false, 92), 'row');
        echo "
                ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["groupForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
                <span class=\"invalid-feedback\"></span> 

            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button  type=\"button\" class=\"lienRetourPassage vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button  id=\"addGroup\" type=\"button\" class=\"vertical-prev slick-btn btn btn-outline-success m-3\">Valider</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide2-slide-child-3\">
            <h2 class=\"nested-slide-child-title\">Création de Label</h2>
            <div>
                ";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["labelForm"] ?? null), 'form_start', ["attr" => ["id" => "labelForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["labelForm"] ?? null), "nom", [], "any", false, false, false, 112), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["labelForm"] ?? null), "dateCreation", [], "any", false, false, false, 118), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["labelForm"] ?? null), "description", [], "any", false, false, false, 124), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["labelForm"] ?? null), "logoFile", [], "any", false, false, false, 130), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["labelForm"] ?? null), "lienLogo", [], "any", false, false, false, 136), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["labelForm"] ?? null), "_token", [], "any", false, false, false, 140), 'row');
        echo "
                ";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["labelForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienGroup vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addLabel\" type=\"button\" class=\"vertical-prev slick-btn btn btn-outline-success m-3\">Ajouter ce label</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide2-slide-child-4\">
            <h2 class=\"nested-slide-child-title\">Création de Musicien</h2>
            <div>
                ";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["musicienForm"] ?? null), 'form_start', ["attr" => ["id" => "musicienForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "nomScene", [], "any", false, false, false, 158), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "nom", [], "any", false, false, false, 164), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "prenom", [], "any", false, false, false, 170), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "dateNaissance", [], "any", false, false, false, 176), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "imageFile", [], "any", false, false, false, 182), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "lienImage", [], "any", false, false, false, 188), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "etiquettes", [], "any", false, false, false, 194), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                        <button type=\"button\" class=\"lienParamSuppMusicien vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["musicienForm"] ?? null), "nationalite", [], "any", false, false, false, 201), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                        <button type=\"button\" class=\"lienParamSuppMusicien vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une nationalité</button>
                    </div>
                </div>
                ";
        // line 206
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["musicienForm"] ?? null), 'form_end');
        echo "
                <span class=\"invalid-feedback\"></span>
            </div>
            <div class=\"d-flex justify-content-start m-3\">
                <button type=\"button\" class=\"lienGroup vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addMusicien\" type=\"button\" class=\"vertical-prev slick-btn btn btn-outline-success m-3\">Ajouter ce musicien</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide2-slide-child-5\">
            <h2 class=\"nested-slide-child-title\">Informations complémentaires Groupe</h2>
            <div class=\"col-lg-6\">
                <h4 class=\"h5 mb-1 mt-3\">Création de Nationalité</h4>
                ";
        // line 222
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nationaliteForm"] ?? null), 'form_start', ["attr" => ["id" => "nationaliteForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"inputCol\">
                        ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm"] ?? null), "nom", [], "any", false, false, false, 225), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span>
                    </div>
                    <div class=\"col-lg-6 inputCol\">              
                        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm"] ?? null), "codeISO", [], "any", false, false, false, 229), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm"] ?? null), "codeISO", [], "any", false, false, false, 231), 'widget');
        echo "
                            <button id=\"addNationalite\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                                <i class=\"fas fa-plus\"></i>
                            </button>
                        </div>
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"feedbacks slide-component\">
                    <span class=\"valid-feedback-up\"></span>
                    <span class=\"invalid-feedback-up\"></span>
                </div>
                ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm"] ?? null), "_token", [], "any", false, false, false, 243), 'row');
        echo "
                ";
        // line 244
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nationaliteForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo " 
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création d'Instrument</h4>
                ";
        // line 248
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["instrForm"] ?? null), 'form_start', ["attr" => ["id" => "instrForm"]]);
        echo "
                ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["instrForm"] ?? null), "nom", [], "any", false, false, false, 249), 'label');
        echo "
                <div class=\"input-group\">
                    ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["instrForm"] ?? null), "nom", [], "any", false, false, false, 251), 'widget');
        echo "
                    <button id=\"addInstr\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                        <i class=\"fas fa-plus\"></i>
                    </button>
                </div>
                <span class=\"invalid-feedback\"></span> 
                ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["instrForm"] ?? null), "_token", [], "any", false, false, false, 257), 'row');
        echo "
                ";
        // line 258
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["instrForm"] ?? null), 'form_end', ["render_rest" => false]);
        echo " 
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-0 mt-3\">Création de genre musical</h4>
                ";
        // line 262
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeMusicForm2"] ?? null), 'form_start', ["attr" => ["id" => "typeMusicForm2"]]);
        echo "
                    ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["typeMusicForm2"] ?? null), "nom", [], "any", false, false, false, 263), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["typeMusicForm2"] ?? null), "nom", [], "any", false, false, false, 265), 'widget');
        echo "
                        <button id=\"addGenreMusic2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 271
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["typeMusicForm2"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Ajout d'étiquettes</h4>
                ";
        // line 275
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm2"] ?? null), 'form_start', ["attr" => ["id" => "etiquetteForm2"]]);
        echo "
                    ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm2"] ?? null), "motsCles", [], "any", false, false, false, 276), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm2"] ?? null), "motsCles", [], "any", false, false, false, 278), 'widget');
        echo "
                        <button id=\"addEtiquette2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 284
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm2"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienGroup vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
        <div id=\"Slide2-slide-child-6\">
            <h2 class=\"nested-slide-child-title\">Informations complémentaires Musicien</h2>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Ajout d'étiquettes</h4>
                ";
        // line 294
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm3"] ?? null), 'form_start', ["attr" => ["id" => "etiquetteForm3"]]);
        echo "
                    ";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm3"] ?? null), "motsCles", [], "any", false, false, false, 295), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["etiquetteForm3"] ?? null), "motsCles", [], "any", false, false, false, 297), 'widget');
        echo "
                        <button id=\"addEtiquette3\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 303
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["etiquetteForm3"] ?? null), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 \">
                <h4 class=\"h5 mb-1 mt-3\">Création de Nationalité</h4>
                ";
        // line 307
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nationaliteForm2"] ?? null), 'form_start', ["attr" => ["id" => "nationaliteForm2"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm2"] ?? null), "nom", [], "any", false, false, false, 310), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span>
                    </div>
                    <div class=\"col-lg-6 inputCol\">              
                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm2"] ?? null), "codeISO", [], "any", false, false, false, 314), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm2"] ?? null), "codeISO", [], "any", false, false, false, 316), 'widget');
        echo "
                            <button id=\"addNationalite2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                                <i class=\"fas fa-plus\"></i>
                            </button>
                        </div>
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nationaliteForm2"] ?? null), "_token", [], "any", false, false, false, 324), 'row');
        echo "
                ";
        // line 325
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nationaliteForm2"] ?? null), 'form_end', ["render_rest" => false]);
        echo " 
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienMusicien vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "workflow/slides/slide2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 325,  545 => 324,  534 => 316,  529 => 314,  522 => 310,  516 => 307,  509 => 303,  500 => 297,  495 => 295,  491 => 294,  478 => 284,  469 => 278,  464 => 276,  460 => 275,  453 => 271,  444 => 265,  439 => 263,  435 => 262,  428 => 258,  424 => 257,  415 => 251,  410 => 249,  406 => 248,  399 => 244,  395 => 243,  380 => 231,  375 => 229,  368 => 225,  362 => 222,  343 => 206,  335 => 201,  325 => 194,  316 => 188,  307 => 182,  298 => 176,  289 => 170,  280 => 164,  271 => 158,  265 => 155,  248 => 141,  244 => 140,  237 => 136,  228 => 130,  219 => 124,  210 => 118,  201 => 112,  195 => 109,  176 => 93,  172 => 92,  165 => 88,  153 => 79,  149 => 78,  139 => 71,  129 => 64,  122 => 60,  112 => 53,  104 => 48,  95 => 42,  86 => 36,  77 => 30,  71 => 27,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workflow/slides/slide2.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/slides/slide2.html.twig");
    }
}
