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

/* evenements/detailEvenement.html.twig */
class __TwigTemplate_5e11f5d2a8801f3dec094785ea54ab362dc2c42d4dfc24b3a5588a7075f166e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/detailEvenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenements/detailEvenement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evenements/detailEvenement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 3, $this->source); })()), "getTitre", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("detailevementcss");
        echo "
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("select2css");
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dropifycss");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
<div class=\"container mx-auto\">
    <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
        ";
        // line 25
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 25, $this->source); })()), "imageFile", [], "any", false, false, false, 25), null))) {
            // line 26
            echo "            <div class=\"col-12 col-lg-5\">
                <img class=\"d-block img-responsive mx-auto mx-sm-0\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 27, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"col-12 mt-3 text-center text-sm-start mt-lg-0 col-lg-7\">
            <h1 class=\"title mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 32, $this->source); })()), "getTitre", [], "any", false, false, false, 32), "html", null, true);
        echo "</h1>
            <hr>
            <div class=\"tags\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 35, $this->source); })()), "genresMusicaux", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 36
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["genre"], "etat", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), 1))) {
                echo "                                               
                        <span>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 37), "html", null, true);
                echo "</span>
                    ";
            }
            // line 39
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
            <div>
                <p class=\"text-decoration-underline mb-0\">Description :</p>
                <span class=\"d-block text-decoration-none\">";
        // line 43
        echo twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 43, $this->source); })()), "getDescription", [], "any", false, false, false, 43);
        echo "</span>
           
            </div>
            <div class=\"col-12 text-center text-sm-start mt-3\">
                <p><i class=\"fa-solid fa-calendar-days\"></i> Début : ";
        // line 47
        (((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateDebut", [], "any", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 47, $this->source); })()), "getDateDebut", [], "any", false, false, false, 47)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 47, $this->source); })()), "getDateDebut", [], "any", false, false, false, 47), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 47), "html", null, true))) : (print ("")));
        echo "</p>
                <p><i class=\"fa-solid fa-calendar-days\"></i> Fin : ";
        // line 48
        (((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateFin", [], "any", true, true, false, 48) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "getDateFin", [], "any", false, false, false, 48)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 48, $this->source); })()), "getDateFin", [], "any", false, false, false, 48), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 48), "html", null, true))) : (print ("")));
        echo "</p>
                ";
        // line 49
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 49, $this->source); })()), "lieu", [], "any", false, false, false, 49), "etat", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), 1))) {
            // line 50
            echo "                    <p><i class=\"fa-solid fa-location-dot\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 50, $this->source); })()), "getVisibleLieu", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                ";
        }
        // line 52
        echo "            </div>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 53, $this->source); })()), "ressources", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["lienExterne"]) {
            // line 54
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "etat", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), 1))) {
                // line 55
                echo "                    ";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "type", [], "any", false, false, false, 55), "label", [], "any", false, false, false, 55), "Lien")) && twig_get_attribute($this->env, $this->source, $context["lienExterne"], "lien", [], "any", false, false, false, 55))) {
                    // line 56
                    echo "                        ";
                    $context["valid"] = $this->extensions['App\Twig\CustomExtension']->checkUrl(twig_get_attribute($this->env, $this->source, $context["lienExterne"], "lien", [], "any", false, false, false, 56));
                    // line 57
                    echo "                        ";
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 57, $this->source); })()), 0, [], "array", false, false, false, 57), false)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 57, $this->source); })()), 1, [], "array", false, false, false, 57), "")))) {
                        // line 58
                        echo "                            <div class=\"col-12 text-ce text-sm-start my-3 \">
                                <i class=\"fa-solid fa-earth-europe\"></i> <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 59, $this->source); })()), 1, [], "array", false, false, false, 59), "html", null, true);
                        echo "\" target='_blank' alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "titre", [], "any", false, false, false, 59), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "titre", [], "any", false, false, false, 59), "html", null, true);
                        echo "</a>
                            </div>
                        ";
                    }
                    // line 62
                    echo "                    ";
                }
                // line 63
                echo "                ";
            }
            // line 64
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lienExterne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            <div class=\"col-12 text-center text-sm-start logos\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 66, $this->source); })()), "ressources", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["lienExterne"]) {
            // line 67
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "etat", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), 1))) {
                // line 68
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "type", [], "any", false, false, false, 68), "label", [], "any", false, false, false, 68), "Facebook"))) {
                    // line 69
                    echo "                            <a class=\"text-decoration-none\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "lien", [], "any", false, false, false, 69), "html", null, true);
                    echo "\" target=\"_blank\">
                                <i class=\"fa-brands fa-facebook-f\"></i>
                            </a>
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 72
$context["lienExterne"], "type", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72), "Twitter"))) {
                    // line 73
                    echo "                            <a class=\"text-decoration-none\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "lien", [], "any", false, false, false, 73), "html", null, true);
                    echo "\" target=\"_blank\">
                                <i class=\"fa-brands fa-twitter\"></i>
                            </a>
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 76
$context["lienExterne"], "type", [], "any", false, false, false, 76), "label", [], "any", false, false, false, 76), "Instagram"))) {
                    // line 77
                    echo "                            <a class=\"text-decoration-none\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lienExterne"], "lien", [], "any", false, false, false, 77), "html", null, true);
                    echo "\" target=\"_blank\">
                                <i class=\"fa-brands fa-instagram\"></i>
                            </a>
                        ";
                }
                // line 81
                echo "                    ";
            }
            // line 82
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lienExterne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </div>
           
        </div>
    </div>
    <div class=\"row mt-2\">
        <div class=\"col-12 mt-3\">
            <h2>Groupes participants</h2>
            <hr>
            ";
        // line 91
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 91, $this->source); })()), "getVisiblePassages", [], "any", false, false, false, 91)), 0))) {
            // line 92
            echo "                <p>Aucun passage de prévu pour cet événement</p>
            ";
        } else {
            // line 93
            echo "  
                <table class=\"table d-none d-sm-block mx-auto\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Groupe</th>
                            <th scope=\"col\">Début</th>
                            <th scope=\"col\">Fin</th>
                        </tr>
                    </thead>   
                    <tbody>
                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 103, $this->source); })()), "getVisiblePassages", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                echo "            
                        <tr>
                            <td>
                            ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 106), "nationalite", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                                <img style=\"height:16px\" src=\"https://countryflagsapi.com/svg/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 107), "nationalite", [], "any", false, false, false, 107), "codeISO", [], "any", false, false, false, 107), "html", null, true);
                    echo "\" alt=\"\">
                            ";
                }
                // line 109
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 109), "html", null, true);
                echo "
                            </td>
                            <td>";
                // line 111
                (((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 111) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 111)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 111), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 111), "html", null, true))) : (print ("")));
                echo " </td>
                            <td>";
                // line 112
                (((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 112) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 112)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 112), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 112), "html", null, true))) : (print ("")));
                echo " </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                    </tbody>
                </table>

                <div class=\"accordion d-sm-none mb-4\" id=\"accordionPassage\"> 
                    ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 119, $this->source); })()), "getVisiblePassages", [], "any", false, false, false, 119));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["passage"]) {
                // line 120
                echo "                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"heading";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 121), "html", null, true);
                echo "\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122), "html", null, true);
                echo "\">
                                    ";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage"], "getVisibleGroupe", [], "any", false, false, false, 123), "html", null, true);
                echo "
                                </button>
                                </h2>
                                <div id=\"collapse";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 126), "html", null, true);
                echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 126), "html", null, true);
                echo "\" data-bs-parent=\"#accordionPassage\">
                                    <div class=\"accordion-body\">
                                        <p><i class=\"fa-solid fa-calendar-days\"></i> Début ";
                // line 128
                (((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", true, true, false, 128) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 128)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateDebut", [], "any", false, false, false, 128), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 128), "html", null, true))) : (print ("")));
                echo "</p>
                                        <p><i class=\"fa-solid fa-calendar-days\"></i> Fin ";
                // line 129
                (((twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", true, true, false, 129) &&  !(null === twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 129)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage"], "getDateFin", [], "any", false, false, false, 129), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 129), "html", null, true))) : (print ("")));
                echo "</p>
                                    </div>
                                </div>
                            </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                </div>
            ";
        }
        // line 136
        echo "        </div>

        <div class=\"col-12 mb-4 mt-3\">
            <h2>Galerie</h2>
            <hr>
            <button type=\"button\" class=\"btn btn-details mt-2 mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#addRessource\">Proposer une ressource</button>
            ";
        // line 142
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 142, $this->source); })()), "ressources", [], "any", false, false, false, 142)), 0))) {
            // line 143
            echo "                <p>Aucune ressource n'a été renseignée pour cet événement</p>
            ";
        } else {
            // line 144
            echo " 
            <div class=\"responsive-carousel d-flex align-items-center pswp-gallery mt-4\" id=\"gallery\">
                ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 146, $this->source); })()), "getVisibleRessources", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["ressource"]) {
                echo "}
                    ";
                // line 147
                if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ressource"], "lien", [], "any", false, false, false, 147), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["ressource"], "nom", [], "any", false, false, false, 147), null))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "type", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), 1)))) {
                    // line 148
                    echo "                        ";
                    $context["image"] = $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["ressource"], "file");
                    // line 149
                    echo "                        ";
                    $context["isValid"] = $this->extensions['App\Twig\CustomExtension']->checkUrl((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 149, $this->source); })()));
                    // line 150
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 150, $this->source); })()), 0, [], "array", false, false, false, 150)) {
                        echo " ";
                        // line 151
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 151, $this->source); })()), "html", null, true);
                        echo "\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <img class=\"img-fluid img-responsive mx-auto gallery-item px-2\" loading=\"lazy\" src=\"";
                        // line 155
                        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 155, $this->source); })()), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "nom", [], "any", false, false, false, 155), "html", null, true);
                        echo "\" />
                                ";
                        // line 156
                        if (twig_get_attribute($this->env, $this->source, $context["ressource"], "credits", [], "any", false, false, false, 156)) {
                            // line 157
                            echo "                                <span class=\"credits\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "credits", [], "any", false, false, false, 157), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 159
                        echo "                            </a>
                            ";
                    } else {
                        // line 160
                        echo " ";
                        // line 161
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 161, $this->source); })()), "html", null, true);
                        echo "\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <iframe src=\"";
                        // line 165
                        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 165, $this->source); })()), "html", null, true);
                        echo "\" sandbox loading=\"lazy\" allowfullscreen=\"true\"></iframe>
                                ";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["ressource"], "credits", [], "any", false, false, false, 166)) {
                            // line 167
                            echo "                                <span class=\"credits\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "credits", [], "any", false, false, false, 167), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 169
                        echo "                            </a>
                        ";
                    }
                    // line 171
                    echo "                    ";
                } elseif ((!twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ressource"], "type", [], "any", false, false, false, 171), "label", [], "any", false, false, false, 171), [0 => "Facebook", 1 => "Instagram", 2 => "Twitter"]) && twig_get_attribute($this->env, $this->source, $context["ressource"], "lien", [], "any", false, false, false, 171))) {
                    // line 172
                    echo "                        ";
                    $context["isValid"] = $this->extensions['App\Twig\CustomExtension']->checkUrl(twig_get_attribute($this->env, $this->source, $context["ressource"], "lien", [], "any", false, false, false, 172));
                    // line 173
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 173, $this->source); })()), 0, [], "array", false, false, false, 173)) {
                        echo " ";
                        // line 174
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "lien", [], "any", false, false, false, 174), "html", null, true);
                        echo "\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <img class=\"img-fluid img-responsive mx-auto gallery-item px-2\" loading=\"lazy\" src=\"";
                        // line 178
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "lien", [], "any", false, false, false, 178), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "nom", [], "any", false, false, false, 178), "html", null, true);
                        echo "\" />
                                ";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["ressource"], "credits", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "                                <span class=\"credits\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ressource"], "credits", [], "any", false, false, false, 180), "html", null, true);
                            echo "</span>
                                ";
                        }
                        // line 182
                        echo "                            </a>
                        ";
                    } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 183
$context["ressource"], "type", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183), 3))) {
                        echo " ";
                        // line 184
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 184, $this->source); })()), 1, [], "array", false, false, false, 184), "html", null, true);
                        echo "\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <iframe src=\"";
                        // line 188
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 188, $this->source); })()), 1, [], "array", false, false, false, 188), "html", null, true);
                        echo "\" loading=\"lazy\" allowfullscreen=\"true\"></iframe>
                            </a>
                        ";
                    }
                    // line 191
                    echo "                    ";
                }
                // line 192
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "            </div>
            ";
        }
        // line 195
        echo "        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"addRessource\" role=\"dialog\" aria-labelledby=\"addRessourceLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"addRessourceLabel\">Proposer une ressource</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
            ";
        // line 207
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 207, $this->source); })()), 'form_start', ["attr" => ["id" => "ressourceForm"]]);
        echo "
                ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 208, $this->source); })()), "titre", [], "any", false, false, false, 208), 'row', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 209, $this->source); })()), "lien", [], "any", false, false, false, 209), 'row', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 210, $this->source); })()), "file", [], "any", false, false, false, 210), 'row', ["attr" => ["class" => "form-control dropify"]]);
        echo "
                <span class=\"invalid-feedback mb-3\" id=\"error_file\"></span>
                ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 212, $this->source); })()), "type", [], "any", false, false, false, 212), 'row', ["attr" => ["class" => "form-control select2  mb-3"]]);
        echo "
                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 213, $this->source); })()), "credits", [], "any", false, false, false, 213), 'row');
        echo "
                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 214, $this->source); })()), "_token", [], "any", false, false, false, 214), 'row');
        echo "
            ";
        // line 215
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRessource"]) || array_key_exists("formRessource", $context) ? $context["formRessource"] : (function () { throw new RuntimeError('Variable "formRessource" does not exist.', 215, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
        </div>
        <div class=\"modal-footer\">
            <span class=\"invalid-feedback\"></span> 
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-main\" form=\"ressourceForm\" >Envoyer</button>
        </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 228
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 229
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 230
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("detailevenementjs");
        echo "
    ";
        // line 231
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dropify");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenements/detailEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 231,  699 => 230,  694 => 229,  684 => 228,  662 => 215,  658 => 214,  654 => 213,  650 => 212,  645 => 210,  641 => 209,  637 => 208,  633 => 207,  619 => 195,  615 => 193,  609 => 192,  606 => 191,  600 => 188,  592 => 184,  589 => 183,  586 => 182,  580 => 180,  578 => 179,  572 => 178,  564 => 174,  560 => 173,  557 => 172,  554 => 171,  550 => 169,  544 => 167,  542 => 166,  538 => 165,  530 => 161,  528 => 160,  524 => 159,  518 => 157,  516 => 156,  510 => 155,  502 => 151,  498 => 150,  495 => 149,  492 => 148,  490 => 147,  484 => 146,  480 => 144,  476 => 143,  474 => 142,  466 => 136,  462 => 134,  443 => 129,  439 => 128,  432 => 126,  426 => 123,  420 => 122,  416 => 121,  413 => 120,  396 => 119,  390 => 115,  381 => 112,  377 => 111,  371 => 109,  365 => 107,  363 => 106,  355 => 103,  343 => 93,  339 => 92,  337 => 91,  327 => 83,  321 => 82,  318 => 81,  310 => 77,  308 => 76,  301 => 73,  299 => 72,  292 => 69,  289 => 68,  286 => 67,  282 => 66,  279 => 65,  273 => 64,  270 => 63,  267 => 62,  257 => 59,  254 => 58,  251 => 57,  248 => 56,  245 => 55,  242 => 54,  238 => 53,  235 => 52,  229 => 50,  227 => 49,  223 => 48,  219 => 47,  212 => 43,  207 => 40,  201 => 39,  196 => 37,  191 => 36,  187 => 35,  181 => 32,  177 => 30,  171 => 27,  168 => 26,  166 => 25,  163 => 24,  157 => 23,  147 => 19,  142 => 18,  137 => 17,  133 => 16,  128 => 13,  118 => 12,  106 => 9,  102 => 8,  98 => 7,  93 => 6,  83 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{evenement.getTitre}} - {{ parent() }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('detailevementcss')}}
    {{ encore_entry_link_tags('select2css')}}
    {{ encore_entry_link_tags('dropifycss')}}
{% endblock %}

{% block body %}

<div class=\"container mx-auto\">
    <div class=\"row\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        {% if evenement.imageFile != null %}
            <div class=\"col-12 col-lg-5\">
                <img class=\"d-block img-responsive mx-auto mx-sm-0\" src=\"{{ vich_uploader_asset(evenement, 'imageFile') }}\" />
            </div>
        {% endif %}

        <div class=\"col-12 mt-3 text-center text-sm-start mt-lg-0 col-lg-7\">
            <h1 class=\"title mb-0\">{{evenement.getTitre}}</h1>
            <hr>
            <div class=\"tags\">
                {% for genre in evenement.genresMusicaux %}
                    {% if genre.etat.id == 1 %}                                               
                        <span>{{genre.nom}}</span>
                    {% endif %}
                {% endfor %}
            </div>
            <div>
                <p class=\"text-decoration-underline mb-0\">Description :</p>
                <span class=\"d-block text-decoration-none\">{{evenement.getDescription|raw}}</span>
           
            </div>
            <div class=\"col-12 text-center text-sm-start mt-3\">
                <p><i class=\"fa-solid fa-calendar-days\"></i> Début : {{ evenement.getDateDebut is defined and  evenement.getDateDebut is not null ? evenement.getDateDebut.format(\"d.m.Y - H:i\") : \"\"}}</p>
                <p><i class=\"fa-solid fa-calendar-days\"></i> Fin : {{ evenement.getDateFin is defined and  evenement.getDateFin is not null ? evenement.getDateFin.format(\"d.m.Y - H:i\") : \"\"}}</p>
                {% if evenement.lieu.etat.id == 1 %}
                    <p><i class=\"fa-solid fa-location-dot\"></i> {{evenement.getVisibleLieu}}</p>
                {% endif %}
            </div>
            {% for lienExterne in evenement.ressources %}
                {% if lienExterne.etat.id == 1 %}
                    {% if lienExterne.type.label == \"Lien\" and lienExterne.lien %}
                        {% set valid = checkUrl(lienExterne.lien) %}
                        {% if valid[0] == false and valid[1] != \"\" %}
                            <div class=\"col-12 text-ce text-sm-start my-3 \">
                                <i class=\"fa-solid fa-earth-europe\"></i> <a href=\"{{valid[1]}}\" target='_blank' alt=\"{{lienExterne.titre}}\">{{lienExterne.titre}}</a>
                            </div>
                        {% endif %}
                    {% endif %}
                {% endif %}
            {% endfor %}
            <div class=\"col-12 text-center text-sm-start logos\">
                {% for lienExterne in evenement.ressources %}
                    {% if lienExterne.etat.id == 1 %}
                        {% if lienExterne.type.label == \"Facebook\" %}
                            <a class=\"text-decoration-none\" href=\"{{lienExterne.lien}}\" target=\"_blank\">
                                <i class=\"fa-brands fa-facebook-f\"></i>
                            </a>
                        {% elseif (lienExterne.type.label == \"Twitter\") %}
                            <a class=\"text-decoration-none\" href=\"{{lienExterne.lien}}\" target=\"_blank\">
                                <i class=\"fa-brands fa-twitter\"></i>
                            </a>
                        {% elseif (lienExterne.type.label == \"Instagram\") %}
                            <a class=\"text-decoration-none\" href=\"{{lienExterne.lien}}\" target=\"_blank\">
                                <i class=\"fa-brands fa-instagram\"></i>
                            </a>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </div>
           
        </div>
    </div>
    <div class=\"row mt-2\">
        <div class=\"col-12 mt-3\">
            <h2>Groupes participants</h2>
            <hr>
            {% if evenement.getVisiblePassages|length == 0 %}
                <p>Aucun passage de prévu pour cet événement</p>
            {% else %}  
                <table class=\"table d-none d-sm-block mx-auto\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Groupe</th>
                            <th scope=\"col\">Début</th>
                            <th scope=\"col\">Fin</th>
                        </tr>
                    </thead>   
                    <tbody>
                    {% for passage in evenement.getVisiblePassages %}            
                        <tr>
                            <td>
                            {% if passage.getVisibleGroupe.nationalite %}
                                <img style=\"height:16px\" src=\"https://countryflagsapi.com/svg/{{passage.getVisibleGroupe.nationalite.codeISO}}\" alt=\"\">
                            {% endif %}
                                {{passage.getVisibleGroupe}}
                            </td>
                            <td>{{ passage.getDateDebut is defined and  passage.getDateDebut is not null ? passage.getDateDebut.format(\"d.m.Y - H:i\") : \"\"}} </td>
                            <td>{{ passage.getDateFin is defined and  passage.getDateFin is not null ? passage.getDateFin.format(\"d.m.Y - H:i\") : \"\"}} </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <div class=\"accordion d-sm-none mb-4\" id=\"accordionPassage\"> 
                    {% for passage in evenement.getVisiblePassages %}
                            <div class=\"accordion-item\">
                                <h2 class=\"accordion-header\" id=\"heading{{loop.index}}\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse{{loop.index}}\" aria-expanded=\"true\" aria-controls=\"collapse{{loop.index}}\">
                                    {{passage.getVisibleGroupe}}
                                </button>
                                </h2>
                                <div id=\"collapse{{loop.index}}\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading{{loop.index}}\" data-bs-parent=\"#accordionPassage\">
                                    <div class=\"accordion-body\">
                                        <p><i class=\"fa-solid fa-calendar-days\"></i> Début {{ passage.getDateDebut is defined and  passage.getDateDebut is not null ? passage.getDateDebut.format(\"d.m.Y - H:i\") : \"\"}}</p>
                                        <p><i class=\"fa-solid fa-calendar-days\"></i> Fin {{ passage.getDateFin is defined and  passage.getDateFin is not null ? passage.getDateFin.format(\"d.m.Y - H:i\") : \"\"}}</p>
                                    </div>
                                </div>
                            </div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        <div class=\"col-12 mb-4 mt-3\">
            <h2>Galerie</h2>
            <hr>
            <button type=\"button\" class=\"btn btn-details mt-2 mb-3\" data-bs-toggle=\"modal\" data-bs-target=\"#addRessource\">Proposer une ressource</button>
            {% if evenement.ressources|length == 0 %}
                <p>Aucune ressource n'a été renseignée pour cet événement</p>
            {% else %} 
            <div class=\"responsive-carousel d-flex align-items-center pswp-gallery mt-4\" id=\"gallery\">
                {% for ressource in evenement.getVisibleRessources %}}
                    {% if (ressource.lien == null and ressource.nom != null) and (ressource.type.id == 1) %}
                        {% set image = vich_uploader_asset(ressource, 'file') %}
                        {% set isValid = checkUrl(image) %}
                        {% if isValid[0] %} {# If image #}
                            <a href=\"{{image}}\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <img class=\"img-fluid img-responsive mx-auto gallery-item px-2\" loading=\"lazy\" src=\"{{image}}\" alt=\"{{ressource.nom}}\" />
                                {% if ressource.credits %}
                                <span class=\"credits\">{{ressource.credits}}</span>
                                {% endif %}
                            </a>
                            {% else %} {# If video #}
                            <a href=\"{{image}}\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <iframe src=\"{{image}}\" sandbox loading=\"lazy\" allowfullscreen=\"true\"></iframe>
                                {% if ressource.credits %}
                                <span class=\"credits\">{{ressource.credits}}</span>
                                {% endif %}
                            </a>
                        {% endif %}
                    {% elseif (ressource.type.label not in ['Facebook', 'Instagram', 'Twitter']) and ressource.lien %}
                        {% set isValid = checkUrl(ressource.lien) %}
                        {% if isValid[0] %} {# If link and http #}
                            <a href=\"{{ressource.lien}}\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <img class=\"img-fluid img-responsive mx-auto gallery-item px-2\" loading=\"lazy\" src=\"{{ ressource.lien }}\" alt=\"{{ressource.nom}}\" />
                                {% if ressource.credits %}
                                <span class=\"credits\">{{ressource.credits}}</span>
                                {% endif %}
                            </a>
                        {% elseif (ressource.type.id == 3) %} {# If file and youtube link #}
                            <a href=\"{{ isValid[1]}}\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <iframe src=\"{{isValid[1]}}\" loading=\"lazy\" allowfullscreen=\"true\"></iframe>
                            </a>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </div>
            {% endif %}
        </div>
    </div>
</div>

<div class=\"modal fade\" id=\"addRessource\" role=\"dialog\" aria-labelledby=\"addRessourceLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"addRessourceLabel\">Proposer une ressource</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body\">
            {{ form_start(formRessource, { 'attr' : { 'id': 'ressourceForm' }} ) }}
                {{ form_row(formRessource.titre, { 'attr' : { 'class' : 'form-control mb-3'}}) }}
                {{ form_row(formRessource.lien, { 'attr' : { 'class' : 'form-control mb-3'}}) }}
                {{ form_row(formRessource.file, { 'attr' : { 'class' : 'form-control dropify'}}) }}
                <span class=\"invalid-feedback mb-3\" id=\"error_file\"></span>
                {{ form_row(formRessource.type, { 'attr' : { 'class' : 'form-control select2  mb-3'}}) }}
                {{ form_row(formRessource.credits) }}
                {{ form_row(formRessource._token) }}
            {{ form_end(formRessource, {'render_rest': false}) }}
        </div>
        <div class=\"modal-footer\">
            <span class=\"invalid-feedback\"></span> 
            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
            <button type=\"submit\" class=\"btn btn-main\" form=\"ressourceForm\" >Envoyer</button>
        </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags('detailevenementjs') }}
    {{ encore_entry_script_tags('dropify')}}
{% endblock %}", "evenements/detailEvenement.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/evenements/detailEvenement.html.twig");
    }
}
