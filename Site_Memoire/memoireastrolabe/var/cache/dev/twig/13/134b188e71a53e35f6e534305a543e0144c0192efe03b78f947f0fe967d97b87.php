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

/* workflow/slides/slide1.html.twig */
class __TwigTemplate_37923347c78282eb16095a1ed22daf950ac76cdd929493c19260e470a5aa42f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/slides/slide1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workflow/slides/slide1.html.twig"));

        // line 1
        echo "<div class=\"nested-slide\" id=\"Slide1\">
    <h2 class=\"slide-title slide-component event\">Informations sur l'événement</h2>
    <div id=\"Slide1-slide\">
        <div id=\"Slide1-slide-child-1\">
            <div>
                ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 15, $this->source); })()), "imageFile", [], "any", false, false, false, 15), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 21, $this->source); })()), "lien", [], "any", false, false, false, 21), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 27, $this->source); })()), "typeEvenement", [], "any", false, false, false, 27), 'row');
        echo "
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un type d'événement</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 31, $this->source); })()), "lieu", [], "any", false, false, false, 31), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienLieu vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un Lieu</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6 inputCol\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 38, $this->source); })()), "dateDebut", [], "any", false, false, false, 38), 'row');
        echo "
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                        <div class=\"col-sm-6 inputCol\">
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 42, $this->source); })()), "dateFin", [], "any", false, false, false, 42), 'row');
        echo "                               
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 48, $this->source); })()), "genresMusicaux", [], "any", false, false, false, 48), 'row');
        echo "
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un genre musical</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 52, $this->source); })()), "etiquettes", [], "any", false, false, false, 52), 'row');
        echo "
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                        </div>
                    </div>
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), 'row');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 57, $this->source); })()), "_token", [], "any", false, false, false, 57), 'row');
        echo "
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["eventForm"]) || array_key_exists("eventForm", $context) ? $context["eventForm"] : (function () { throw new RuntimeError('Variable "eventForm" does not exist.', 58, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button id=\"verifEvent\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide1-slide-child-2\">
            <h2 class=\"nested-slide-child-title\">Création de Lieu</h2>
            <div>
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["lieuForm"]) || array_key_exists("lieuForm", $context) ? $context["lieuForm"] : (function () { throw new RuntimeError('Variable "lieuForm" does not exist.', 71, $this->source); })()), 'form_start', ["attr" => ["id" => "lieuForm"]]);
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lieuForm"]) || array_key_exists("lieuForm", $context) ? $context["lieuForm"] : (function () { throw new RuntimeError('Variable "lieuForm" does not exist.', 74, $this->source); })()), "ville", [], "any", false, false, false, 74), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lieuForm"]) || array_key_exists("lieuForm", $context) ? $context["lieuForm"] : (function () { throw new RuntimeError('Variable "lieuForm" does not exist.', 78, $this->source); })()), "CP", [], "any", false, false, false, 78), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lieuForm"]) || array_key_exists("lieuForm", $context) ? $context["lieuForm"] : (function () { throw new RuntimeError('Variable "lieuForm" does not exist.', 84, $this->source); })()), "nomBatiment", [], "any", false, false, false, 84), 'row');
        echo "
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"col-lg-6 inputCol\">
                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lieuForm"]) || array_key_exists("lieuForm", $context) ? $context["lieuForm"] : (function () { throw new RuntimeError('Variable "lieuForm" does not exist.', 88, $this->source); })()), "adresse", [], "any", false, false, false, 88), 'row');
        echo "
                            <span class=\"invali-feedback\"></span> 
                    </div>
                </div>
                ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["lieuForm"]) || array_key_exists("lieuForm", $context) ? $context["lieuForm"] : (function () { throw new RuntimeError('Variable "lieuForm" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienRetourEvent vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addLieu\" type=\"button\" class=\" slick-btn btn btn-outline-success m-3\">Ajouter ce lieu</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide1-slide-child-3\">
            <h2 class=\"nested-slide-child-title\">Informations complémentaires</h2>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création de type d'événement</h4>
                ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["typeEventForm"]) || array_key_exists("typeEventForm", $context) ? $context["typeEventForm"] : (function () { throw new RuntimeError('Variable "typeEventForm" does not exist.', 107, $this->source); })()), 'form_start', ["attr" => ["id" => "typeEventForm"]]);
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["typeEventForm"]) || array_key_exists("typeEventForm", $context) ? $context["typeEventForm"] : (function () { throw new RuntimeError('Variable "typeEventForm" does not exist.', 108, $this->source); })()), "label", [], "any", false, false, false, 108), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["typeEventForm"]) || array_key_exists("typeEventForm", $context) ? $context["typeEventForm"] : (function () { throw new RuntimeError('Variable "typeEventForm" does not exist.', 110, $this->source); })()), "label", [], "any", false, false, false, 110), 'widget');
        echo "
                        <button id=\"addTypeEvent\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["typeEventForm"]) || array_key_exists("typeEventForm", $context) ? $context["typeEventForm"] : (function () { throw new RuntimeError('Variable "typeEventForm" does not exist.', 116, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création d'étiquettes</h4>
                ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm"]) || array_key_exists("etiquetteForm", $context) ? $context["etiquetteForm"] : (function () { throw new RuntimeError('Variable "etiquetteForm" does not exist.', 120, $this->source); })()), 'form_start', ["attr" => ["id" => "etiquetteForm"]]);
        echo "
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm"]) || array_key_exists("etiquetteForm", $context) ? $context["etiquetteForm"] : (function () { throw new RuntimeError('Variable "etiquetteForm" does not exist.', 121, $this->source); })()), "motsCles", [], "any", false, false, false, 121), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["etiquetteForm"]) || array_key_exists("etiquetteForm", $context) ? $context["etiquetteForm"] : (function () { throw new RuntimeError('Variable "etiquetteForm" does not exist.', 123, $this->source); })()), "motsCles", [], "any", false, false, false, 123), 'widget');
        echo "
                        <button id=\"addEtiquette\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["etiquetteForm"]) || array_key_exists("etiquetteForm", $context) ? $context["etiquetteForm"] : (function () { throw new RuntimeError('Variable "etiquetteForm" does not exist.', 129, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-0 mt-3\">Création de genre musical</h4>
                ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["typeMusicForm"]) || array_key_exists("typeMusicForm", $context) ? $context["typeMusicForm"] : (function () { throw new RuntimeError('Variable "typeMusicForm" does not exist.', 133, $this->source); })()), 'form_start', ["attr" => ["id" => "typeMusicForm"]]);
        echo "
                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["typeMusicForm"]) || array_key_exists("typeMusicForm", $context) ? $context["typeMusicForm"] : (function () { throw new RuntimeError('Variable "typeMusicForm" does not exist.', 134, $this->source); })()), "nom", [], "any", false, false, false, 134), 'label');
        echo "
                    <div class=\"input-group\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["typeMusicForm"]) || array_key_exists("typeMusicForm", $context) ? $context["typeMusicForm"] : (function () { throw new RuntimeError('Variable "typeMusicForm" does not exist.', 136, $this->source); })()), "nom", [], "any", false, false, false, 136), 'widget');
        echo "
                        <button id=\"addGenreMusic\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["typeMusicForm"]) || array_key_exists("typeMusicForm", $context) ? $context["typeMusicForm"] : (function () { throw new RuntimeError('Variable "typeMusicForm" does not exist.', 142, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienRetourEvent vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "workflow/slides/slide1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 142,  267 => 136,  262 => 134,  258 => 133,  251 => 129,  242 => 123,  237 => 121,  233 => 120,  226 => 116,  217 => 110,  212 => 108,  208 => 107,  190 => 92,  183 => 88,  176 => 84,  167 => 78,  160 => 74,  154 => 71,  138 => 58,  134 => 57,  130 => 56,  123 => 52,  116 => 48,  107 => 42,  100 => 38,  90 => 31,  83 => 27,  74 => 21,  65 => 15,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nested-slide\" id=\"Slide1\">
    <h2 class=\"slide-title slide-component event\">Informations sur l'événement</h2>
    <div id=\"Slide1-slide\">
        <div id=\"Slide1-slide-child-1\">
            <div>
                {{ form_start(eventForm) }}
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.titre) }}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.imageFile) }}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.lien) }}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.typeEvenement) }}
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un type d'événement</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.lieu) }}
                            <span class=\"invalid-feedback\"></span> 
                            <button type=\"button\" class=\"lienLieu vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un Lieu</button>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-6 inputCol\">
                            {{ form_row(eventForm.dateDebut) }}
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                        <div class=\"col-sm-6 inputCol\">
                            {{ form_row(eventForm.dateFin) }}                               
                            <span class=\"invalid-feedback\"></span> 
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.genresMusicaux) }}
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter un genre musical</button>
                        </div>
                        <div class=\"col-lg-6 inputCol\">
                            {{ form_row(eventForm.etiquettes) }}
                            <button type=\"button\" class=\"lienParamSupp vertical-next btn\"><i class=\"fas fa-plus color-green\"></i>Ajouter une étiquette</button>
                        </div>
                    </div>
                    {{ form_row(eventForm.description) }}
                    {{ form_row(eventForm._token) }}
                {{ form_end(eventForm,{'render_rest' : false})}}
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button id=\"verifEvent\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide1-slide-child-2\">
            <h2 class=\"nested-slide-child-title\">Création de Lieu</h2>
            <div>
                {{ form_start(lieuForm,{ 'attr' : { 'id': 'lieuForm' }}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(lieuForm.ville) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(lieuForm.CP) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(lieuForm.nomBatiment) }}
                        <span class=\"invalid-feedback\"></span> 
                    </div>
                    <div class=\"col-lg-6 inputCol\">
                        {{ form_row(lieuForm.adresse) }}
                            <span class=\"invali-feedback\"></span> 
                    </div>
                </div>
                {{ form_end(lieuForm) }}
            </div>
            <div class=\"d-flex justify-content-center m-3\">
                <button type=\"button\" class=\"lienRetourEvent vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
                <button id=\"addLieu\" type=\"button\" class=\" slick-btn btn btn-outline-success m-3\">Ajouter ce lieu</button>
            </div>
            <div class=\"feedbacks slide-component\">
                <span class=\"valid-feedback-up\"></span>
                <span class=\"invalid-feedback-up\"></span>
            </div>
        </div>
        <div id=\"Slide1-slide-child-3\">
            <h2 class=\"nested-slide-child-title\">Informations complémentaires</h2>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création de type d'événement</h4>
                {{ form_start(typeEventForm,{ 'attr' : { 'id': 'typeEventForm' }}) }}
                    {{ form_label(typeEventForm.label) }}
                    <div class=\"input-group\">
                        {{ form_widget(typeEventForm.label) }}
                        <button id=\"addTypeEvent\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                {{ form_end(typeEventForm) }}
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-1 mt-3\">Création d'étiquettes</h4>
                {{ form_start(etiquetteForm,{ 'attr' : { 'id': 'etiquetteForm' }}) }}
                    {{ form_label(etiquetteForm.motsCles) }}
                    <div class=\"input-group\">
                        {{ form_widget(etiquetteForm.motsCles) }}
                        <button id=\"addEtiquette\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                {{ form_end(etiquetteForm) }}
            </div>
            <div class=\"col-lg-6 inputCol\">
                <h4 class=\"h5 mb-0 mt-3\">Création de genre musical</h4>
                {{ form_start(typeMusicForm,{ 'attr' : { 'id': 'typeMusicForm' }}) }}
                    {{ form_label(typeMusicForm.nom) }}
                    <div class=\"input-group\">
                        {{ form_widget(typeMusicForm.nom) }}
                        <button id=\"addGenreMusic\" type=\"button\" class=\"slick-btn vertical-next btn btn-outline-success input-group-text\">
                            <i class=\"fas fa-plus\"></i>
                        </button>
                    </div>
                    <span class=\"invalid-feedback\"></span> 
                {{ form_end(typeMusicForm) }}
            </div>
            <div class=\"m-3\">
                <button type=\"button\" class=\"lienRetourEvent vertical-prev slick-btn btn btn-outline-secondary m-3\">Retour</button>
            </div>
        </div>
    </div>
</div>", "workflow/slides/slide1.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\workflow\\slides\\slide1.html.twig");
    }
}
