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
class __TwigTemplate_301b223c7eb24fddbc359093c106ed7a63bab0f37ffe270a1ebc57b7da7553d5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/slides/slide2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/slides/slide2.html.twig"));

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
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 8, $this->source); })()), "passages", [], "any", false, false, false, 8)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 8, $this->source); })()), "passages", [], "any", false, false, false, 8)), "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8) + 1), "html", null, true))) : (print (0)));
        echo "\"
                data-prototype=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 9, $this->source); })()), "passages", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "prototype", [], "any", false, false, false, 9), 'rest'), "html_attr");
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["id" => "groupForm"]]);
        echo " 
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 36, $this->source); })()), "imageFile", [], "any", false, false, false, 36), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 42, $this->source); })()), "lienImage", [], "any", false, false, false, 42), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 48, $this->source); })()), "nationalite", [], "any", false, false, false, 48), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une Nationalité</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 53, $this->source); })()), "genresMusicaux", [], "any", false, false, false, 53), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un Genre Musical</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 60, $this->source); })()), "dateCreation", [], "any", false, false, false, 60), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 64, $this->source); })()), "labels", [], "any", false, false, false, 64), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienLabel vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un label</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 71, $this->source); })()), "etiquettes", [], "any", false, false, false, 71), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                        </div>
                    </div>
                    <div id=\"groupeMembres\">
                        <div class=\"membres\"
                        data-index=\"";
        // line 78
        (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 78, $this->source); })()), "membres", [], "any", false, false, false, 78)), 0))) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 78, $this->source); })()), "membres", [], "any", false, false, false, 78)), "vars", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78) + 1), "html", null, true))) : (print (0)));
        echo "\"
                        data-prototype=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 79, $this->source); })()), "membres", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "prototype", [], "any", false, false, false, 79), 'rest'), "html_attr");
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 88, $this->source); })()), "biographie", [], "any", false, false, false, 88), 'row');
        echo "
                                <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 92, $this->source); })()), "_token", [], "any", false, false, false, 92), 'row');
        echo "
                ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["groupForm"]) || array_key_exists("groupForm", $context) ? $context["groupForm"] : (function () { throw new RuntimeError('Variable "groupForm" does not exist.', 93, $this->source); })()), 'form_end', ["render_rest" => false]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 109, $this->source); })()), 'form_start', ["attr" => ["id" => "labelForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 112, $this->source); })()), "nom", [], "any", false, false, false, 112), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 118, $this->source); })()), "dateCreation", [], "any", false, false, false, 118), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 130, $this->source); })()), "logoFile", [], "any", false, false, false, 130), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 136, $this->source); })()), "lienLogo", [], "any", false, false, false, 136), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 140, $this->source); })()), "_token", [], "any", false, false, false, 140), 'row');
        echo "
                ";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["labelForm"]) || array_key_exists("labelForm", $context) ? $context["labelForm"] : (function () { throw new RuntimeError('Variable "labelForm" does not exist.', 141, $this->source); })()), 'form_end', ["render_rest" => false]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 155, $this->source); })()), 'form_start', ["attr" => ["id" => "musicienForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 158, $this->source); })()), "nomScene", [], "any", false, false, false, 158), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 164, $this->source); })()), "nom", [], "any", false, false, false, 164), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 170, $this->source); })()), "prenom", [], "any", false, false, false, 170), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 176, $this->source); })()), "dateNaissance", [], "any", false, false, false, 176), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 182, $this->source); })()), "imageFile", [], "any", false, false, false, 182), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 188, $this->source); })()), "lienImage", [], "any", false, false, false, 188), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 194, $this->source); })()), "etiquettes", [], "any", false, false, false, 194), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                        <button type=\"button\" class=\"lienParamSuppMusicien vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 201, $this->source); })()), "nationalite", [], "any", false, false, false, 201), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                        <button type=\"button\" class=\"lienParamSuppMusicien vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une nationalité</button>
                    </div>
                </div>
                ";
        // line 206
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["musicienForm"]) || array_key_exists("musicienForm", $context) ? $context["musicienForm"] : (function () { throw new RuntimeError('Variable "musicienForm" does not exist.', 206, $this->source); })()), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nationaliteForm"]) || array_key_exists("nationaliteForm", $context) ? $context["nationaliteForm"] : (function () { throw new RuntimeError('Variable "nationaliteForm" does not exist.', 222, $this->source); })()), 'form_start', ["attr" => ["id" => "nationaliteForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"inputCol\">
                        ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm"]) || array_key_exists("nationaliteForm", $context) ? $context["nationaliteForm"] : (function () { throw new RuntimeError('Variable "nationaliteForm" does not exist.', 225, $this->source); })()), "nom", [], "any", false, false, false, 225), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span>
                    </div>
                    <div class=\"col-lg-6 inputCol\">              
                        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm"]) || array_key_exists("nationaliteForm", $context) ? $context["nationaliteForm"] : (function () { throw new RuntimeError('Variable "nationaliteForm" does not exist.', 229, $this->source); })()), "codeISO", [], "any", false, false, false, 229), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm"]) || array_key_exists("nationaliteForm", $context) ? $context["nationaliteForm"] : (function () { throw new RuntimeError('Variable "nationaliteForm" does not exist.', 231, $this->source); })()), "codeISO", [], "any", false, false, false, 231), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm"]) || array_key_exists("nationaliteForm", $context) ? $context["nationaliteForm"] : (function () { throw new RuntimeError('Variable "nationaliteForm" does not exist.', 243, $this->source); })()), "_token", [], "any", false, false, false, 243), 'row');
        echo "
                ";
        // line 244
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nationaliteForm"]) || array_key_exists("nationaliteForm", $context) ? $context["nationaliteForm"] : (function () { throw new RuntimeError('Variable "nationaliteForm" does not exist.', 244, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo " 
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création d'Instrument</h4>
                ";
        // line 248
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 248, $this->source); })()), 'form_start', ["attr" => ["id" => "instrForm"]]);
        echo "
                ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 249, $this->source); })()), "nom", [], "any", false, false, false, 249), 'label');
        echo "
                <div class=\"input-group\">
                    ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 251, $this->source); })()), "nom", [], "any", false, false, false, 251), 'widget');
        echo "
                    <button id=\"addInstr\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                        <i class=\"fas fa-plus\"></i>
                    </button>
                </div>
                <span class=\"invalid-feedback\"></span> 
                ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 257, $this->source); })()), "_token", [], "any", false, false, false, 257), 'row');
        echo "
                ";
        // line 258
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["instrForm"]) || array_key_exists("instrForm", $context) ? $context["instrForm"] : (function () { throw new RuntimeError('Variable "instrForm" does not exist.', 258, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo " 
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-0 mt-3\">Création de genre musical</h4>
                ";
        // line 262
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["typeMusicForm2"]) || array_key_exists("typeMusicForm2", $context) ? $context["typeMusicForm2"] : (function () { throw new RuntimeError('Variable "typeMusicForm2" does not exist.', 262, $this->source); })()), 'form_start', ["attr" => ["id" => "typeMusicForm2"]]);
        echo "
                    ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["typeMusicForm2"]) || array_key_exists("typeMusicForm2", $context) ? $context["typeMusicForm2"] : (function () { throw new RuntimeError('Variable "typeMusicForm2" does not exist.', 263, $this->source); })()), "nom", [], "any", false, false, false, 263), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["typeMusicForm2"]) || array_key_exists("typeMusicForm2", $context) ? $context["typeMusicForm2"] : (function () { throw new RuntimeError('Variable "typeMusicForm2" does not exist.', 265, $this->source); })()), "nom", [], "any", false, false, false, 265), 'widget');
        echo "
                        <button id=\"addGenreMusic2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 271
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["typeMusicForm2"]) || array_key_exists("typeMusicForm2", $context) ? $context["typeMusicForm2"] : (function () { throw new RuntimeError('Variable "typeMusicForm2" does not exist.', 271, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Ajout d'étiquettes</h4>
                ";
        // line 275
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm2"]) || array_key_exists("etiquetteForm2", $context) ? $context["etiquetteForm2"] : (function () { throw new RuntimeError('Variable "etiquetteForm2" does not exist.', 275, $this->source); })()), 'form_start', ["attr" => ["id" => "etiquetteForm2"]]);
        echo "
                    ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm2"]) || array_key_exists("etiquetteForm2", $context) ? $context["etiquetteForm2"] : (function () { throw new RuntimeError('Variable "etiquetteForm2" does not exist.', 276, $this->source); })()), "motsCles", [], "any", false, false, false, 276), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm2"]) || array_key_exists("etiquetteForm2", $context) ? $context["etiquetteForm2"] : (function () { throw new RuntimeError('Variable "etiquetteForm2" does not exist.', 278, $this->source); })()), "motsCles", [], "any", false, false, false, 278), 'widget');
        echo "
                        <button id=\"addEtiquette2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 284
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm2"]) || array_key_exists("etiquetteForm2", $context) ? $context["etiquetteForm2"] : (function () { throw new RuntimeError('Variable "etiquetteForm2" does not exist.', 284, $this->source); })()), 'form_end');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm3"]) || array_key_exists("etiquetteForm3", $context) ? $context["etiquetteForm3"] : (function () { throw new RuntimeError('Variable "etiquetteForm3" does not exist.', 294, $this->source); })()), 'form_start', ["attr" => ["id" => "etiquetteForm3"]]);
        echo "
                    ";
        // line 295
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm3"]) || array_key_exists("etiquetteForm3", $context) ? $context["etiquetteForm3"] : (function () { throw new RuntimeError('Variable "etiquetteForm3" does not exist.', 295, $this->source); })()), "motsCles", [], "any", false, false, false, 295), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm3"]) || array_key_exists("etiquetteForm3", $context) ? $context["etiquetteForm3"] : (function () { throw new RuntimeError('Variable "etiquetteForm3" does not exist.', 297, $this->source); })()), "motsCles", [], "any", false, false, false, 297), 'widget');
        echo "
                        <button id=\"addEtiquette3\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 303
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm3"]) || array_key_exists("etiquetteForm3", $context) ? $context["etiquetteForm3"] : (function () { throw new RuntimeError('Variable "etiquetteForm3" does not exist.', 303, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 \">
                <h4 class=\"h5 mb-1 mt-3\">Création de Nationalité</h4>
                ";
        // line 307
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nationaliteForm2"]) || array_key_exists("nationaliteForm2", $context) ? $context["nationaliteForm2"] : (function () { throw new RuntimeError('Variable "nationaliteForm2" does not exist.', 307, $this->source); })()), 'form_start', ["attr" => ["id" => "nationaliteForm2"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm2"]) || array_key_exists("nationaliteForm2", $context) ? $context["nationaliteForm2"] : (function () { throw new RuntimeError('Variable "nationaliteForm2" does not exist.', 310, $this->source); })()), "nom", [], "any", false, false, false, 310), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span>
                    </div>
                    <div class=\"col-lg-6 inputCol\">              
                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm2"]) || array_key_exists("nationaliteForm2", $context) ? $context["nationaliteForm2"] : (function () { throw new RuntimeError('Variable "nationaliteForm2" does not exist.', 314, $this->source); })()), "codeISO", [], "any", false, false, false, 314), 'label');
        echo "
                        <div class=\"input-group\">
                            ";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm2"]) || array_key_exists("nationaliteForm2", $context) ? $context["nationaliteForm2"] : (function () { throw new RuntimeError('Variable "nationaliteForm2" does not exist.', 316, $this->source); })()), "codeISO", [], "any", false, false, false, 316), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nationaliteForm2"]) || array_key_exists("nationaliteForm2", $context) ? $context["nationaliteForm2"] : (function () { throw new RuntimeError('Variable "nationaliteForm2" does not exist.', 324, $this->source); })()), "_token", [], "any", false, false, false, 324), 'row');
        echo "
                ";
        // line 325
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nationaliteForm2"]) || array_key_exists("nationaliteForm2", $context) ? $context["nationaliteForm2"] : (function () { throw new RuntimeError('Variable "nationaliteForm2" does not exist.', 325, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo " 
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienMusicien vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  555 => 325,  551 => 324,  540 => 316,  535 => 314,  528 => 310,  522 => 307,  515 => 303,  506 => 297,  501 => 295,  497 => 294,  484 => 284,  475 => 278,  470 => 276,  466 => 275,  459 => 271,  450 => 265,  445 => 263,  441 => 262,  434 => 258,  430 => 257,  421 => 251,  416 => 249,  412 => 248,  405 => 244,  401 => 243,  386 => 231,  381 => 229,  374 => 225,  368 => 222,  349 => 206,  341 => 201,  331 => 194,  322 => 188,  313 => 182,  304 => 176,  295 => 170,  286 => 164,  277 => 158,  271 => 155,  254 => 141,  250 => 140,  243 => 136,  234 => 130,  225 => 124,  216 => 118,  207 => 112,  201 => 109,  182 => 93,  178 => 92,  171 => 88,  159 => 79,  155 => 78,  145 => 71,  135 => 64,  128 => 60,  118 => 53,  110 => 48,  101 => 42,  92 => 36,  83 => 30,  77 => 27,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nested-slide\" id=\"Slide2\">
    <h2 class=\"slide-title slide-component\">Passage du/des groupe(s)</h2>
    <div id=\"Slide2-slide\">
        <div id=\"Slide2-slide-child-1\">
            <h2 class=\"nested-slide-child-title\">Création des Passages</h2>
            <div id=\"eventPassage\">
                <div class=\"passages\"
                data-index=\"{{ eventForm.passages|length > 0 ? eventForm.passages|last.vars.name + 1 : 0 }}\"
                data-prototype=\"{{ form_rest(eventForm.passages.vars.prototype)|e('html_attr') }}\"
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
                {{ form_start(groupForm,{ 'attr' : { 'id': 'groupForm' }})}} 
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.nom)}}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.imageFile)}}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.lienImage)}}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.nationalite)}}
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une Nationalité</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.genresMusicaux)}}
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un Genre Musical</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.dateCreation)}}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.labels)}}
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienLabel vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un label</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(groupForm.etiquettes)}}
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienParamSuppGroup vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                        </div>
                    </div>
                    <div id=\"groupeMembres\">
                        <div class=\"membres\"
                        data-index=\"{{ groupForm.membres|length > 0 ? groupForm.membres|last.vars.name + 1 : 0 }}\"
                        data-prototype=\"{{ form_rest(groupForm.membres.vars.prototype)|e('html_attr') }}\"
                        >                              
                            <div class=\"accordion\"></div>
                        </div>
                        <button type=\"button\" class=\"add_item_link btn\" data-collection-holder-class=\"membres\"><i class=\"fas fa-plus color-green\"></i> Ajouter un Membre</button>
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"row\">
                        <div class=\"inputCol\">
                                {{ form_row(groupForm.biographie)}}
                                <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    {{ form_row(groupForm._token)}}
                {{ form_end(groupForm,{'render_rest' : false})}}
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
                {{ form_start(labelForm,{ 'attr' : { 'id': 'labelForm' }}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(labelForm.nom) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(labelForm.dateCreation) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(labelForm.description) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(labelForm.logoFile) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(labelForm.lienLogo) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                {{ form_row(labelForm._token)}}
                {{ form_end(labelForm, {'render_rest' : false}) }}
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
                {{ form_start(musicienForm,{ 'attr' : { 'id': 'musicienForm' }}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.nomScene) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.nom) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.prenom) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.dateNaissance) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.imageFile) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.lienImage) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.etiquettes) }}
                        <span class=\"invalid-feedback\"></span> 
                        <button type=\"button\" class=\"lienParamSuppMusicien vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(musicienForm.nationalite) }}
                        <span class=\"invalid-feedback\"></span> 
                        <button type=\"button\" class=\"lienParamSuppMusicien vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une nationalité</button>
                    </div>
                </div>
                {{ form_end(musicienForm) }}
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
                {{ form_start(nationaliteForm,{ 'attr' : { 'id': 'nationaliteForm' }}) }}
                <div class=\"row\">
                    <div class=\"inputCol\">
                        {{ form_row(nationaliteForm.nom) }}
                        <span class=\"invalid-feedback\"></span>
                    </div>
                    <div class=\"col-lg-6 inputCol\">              
                        {{ form_label(nationaliteForm.codeISO) }}
                        <div class=\"input-group\">
                            {{ form_widget(nationaliteForm.codeISO) }}
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
                {{ form_row(nationaliteForm ._token) }}
                {{ form_end(nationaliteForm , {'render_rest': false}) }} 
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création d'Instrument</h4>
                {{ form_start(instrForm,{ 'attr' : { 'id': 'instrForm' }}) }}
                {{ form_label(instrForm.nom) }}
                <div class=\"input-group\">
                    {{ form_widget(instrForm.nom) }}
                    <button id=\"addInstr\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                        <i class=\"fas fa-plus\"></i>
                    </button>
                </div>
                <span class=\"invalid-feedback\"></span> 
                {{ form_row(instrForm ._token) }}
                {{ form_end(instrForm , {'render_rest': false}) }} 
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-0 mt-3\">Création de genre musical</h4>
                {{ form_start(typeMusicForm2,{ 'attr' : { 'id': 'typeMusicForm2' }}) }}
                    {{ form_label(typeMusicForm2.nom) }}
                    <div class=\"input-group\">
                        {{ form_widget(typeMusicForm2.nom) }}
                        <button id=\"addGenreMusic2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                {{ form_end(typeMusicForm2) }}
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Ajout d'étiquettes</h4>
                {{ form_start(etiquetteForm2,{ 'attr' : { 'id': 'etiquetteForm2' }}) }}
                    {{ form_label(etiquetteForm2.motsCles) }}
                    <div class=\"input-group\">
                        {{ form_widget(etiquetteForm2.motsCles) }}
                        <button id=\"addEtiquette2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                {{ form_end(etiquetteForm2) }}
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienGroup vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
        <div id=\"Slide2-slide-child-6\">
            <h2 class=\"nested-slide-child-title\">Informations complémentaires Musicien</h2>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Ajout d'étiquettes</h4>
                {{ form_start(etiquetteForm3,{ 'attr' : { 'id': 'etiquetteForm3' }}) }}
                    {{ form_label(etiquetteForm3.motsCles) }}
                    <div class=\"input-group\">
                        {{ form_widget(etiquetteForm3.motsCles) }}
                        <button id=\"addEtiquette3\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                {{ form_end(etiquetteForm3) }}
            </div>
            <div class=\"col-lg-6 \">
                <h4 class=\"h5 mb-1 mt-3\">Création de Nationalité</h4>
                {{ form_start(nationaliteForm2,{ 'attr' : { 'id': 'nationaliteForm2' }}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(nationaliteForm2.nom) }}
                        <span class=\"invalid-feedback\"></span>
                    </div>
                    <div class=\"col-lg-6 inputCol\">              
                        {{ form_label(nationaliteForm2.codeISO) }}
                        <div class=\"input-group\">
                            {{ form_widget(nationaliteForm2.codeISO) }}
                            <button id=\"addNationalite2\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                                <i class=\"fas fa-plus\"></i>
                            </button>
                        </div>
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                {{ form_row(nationaliteForm2 ._token) }}
                {{ form_end(nationaliteForm2 , {'render_rest': false}) }} 
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienMusicien vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
    </div>
</div>", "workflow/slides/slide2.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/slides/slide2.html.twig");
    }
}
