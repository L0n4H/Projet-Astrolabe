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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_19f52e7265eac8b2efadc556cf2c95058d49dd88c5fb6fcebe4d06d2494b6f44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'responsive_header' => [$this, 'block_responsive_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@!EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/layout.html.twig"));

        // line 3
        $context["nbEnAttente"] = $this->extensions['App\Twig\CustomExtension']->getNbEtatEnAttente();
        // line 1
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 6
        echo "    <div class=\"d-flex align-items-center\">
        <div class=\"px-2 position-relative\">
            ";
        // line 8
        if ((0 !== twig_compare((isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 8, $this->source); })()), 0))) {
            // line 9
            echo "            <div id=\"validation\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        }
        // line 11
        echo "
                <i class=\"fas fa-bell text-dark\"></i>

                ";
        // line 14
        if ((0 !== twig_compare((isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 14, $this->source); })()), 0))) {
            // line 15
            echo "                <span id=\"notif\">";
            echo twig_escape_filter($this->env, (isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "</span>
                ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ((0 !== twig_compare((isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 18, $this->source); })()), 0))) {
            // line 19
            echo "            </div>

            <div class=\"dropdown-menu\" aria-labelledby=\"validation\">
                <h5 class=\"dropdown-title\">Notifications</h5>
                ";
            // line 23
            $context["entities_attente"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(3);
            // line 24
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities_attente"]) || array_key_exists("entities_attente", $context) ? $context["entities_attente"] : (function () { throw new RuntimeError('Variable "entities_attente" does not exist.', 24, $this->source); })())), 0))) {
                // line 25
                echo "                <div class=\"etat-notif pb-2\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-clock\"></i> En attente de validation</h6>
                    <ul class=\"list-group\">
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities_attente"]) || array_key_exists("entities_attente", $context) ? $context["entities_attente"] : (function () { throw new RuntimeError('Variable "entities_attente" does not exist.', 28, $this->source); })()));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 29
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 30
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "entities", [], "array", false, false, false, 30)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "lien", [], "array", false, false, false, 31), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["nomEntite"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nomEntite'], $context['entites'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                    </ul>
                </div>
                ";
            }
            // line 37
            echo "                ";
            $context["entities_import"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(4);
            // line 38
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities_import"]) || array_key_exists("entities_import", $context) ? $context["entities_import"] : (function () { throw new RuntimeError('Variable "entities_import" does not exist.', 38, $this->source); })())), 0))) {
                // line 39
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Importé et à valider</h6>
                    <ul class=\"list-group\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities_import"]) || array_key_exists("entities_import", $context) ? $context["entities_import"] : (function () { throw new RuntimeError('Variable "entities_import" does not exist.', 42, $this->source); })()));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 43
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "entities", [], "array", false, false, false, 44)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "lien", [], "array", false, false, false, 45), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["nomEntite"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nomEntite'], $context['entites'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                    </ul>
                </div>
                ";
            }
            // line 51
            echo "                ";
            $context["entities_invalide"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(5);
            // line 52
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities_invalide"]) || array_key_exists("entities_invalide", $context) ? $context["entities_invalide"] : (function () { throw new RuntimeError('Variable "entities_invalide" does not exist.', 52, $this->source); })())), 0))) {
                // line 53
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Ressources/Fichiers invalides</h6>
                    <ul class=\"list-group\">
                        ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities_invalide"]) || array_key_exists("entities_invalide", $context) ? $context["entities_invalide"] : (function () { throw new RuntimeError('Variable "entities_invalide" does not exist.', 56, $this->source); })()));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 57
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "entities", [], "array", false, false, false, 58)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "lien", [], "array", false, false, false, 59), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["nomEntite"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nomEntite'], $context['entites'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                    </ul>
                </div>
                ";
            }
            // line 65
            echo "            </div>
            ";
        }
        // line 67
        echo "        </div>
        ";
        // line 68
        $this->displayParentBlock("header_custom_menu", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "responsive_header"));

        // line 73
        echo "    <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
        <i class=\"fa fa-fw fa-bars\"></i>
    </button>

    <div id=\"responsive-header-logo\" class=\"text-truncate\">
        <a class=\"responsive-logo\" title=\"\" href=\"/admin\">
            <img src=\"/build/images/logo-header.svg\">
        </a>
    </div>

    <div class=\"d-flex align-items-center\">
        <div class=\"px-2 position-relative\">
            ";
        // line 85
        if ((0 !== twig_compare((isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 85, $this->source); })()), 0))) {
            // line 86
            echo "            <div id=\"validation\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        }
        // line 88
        echo "
                <i class=\"fas fa-bell text-dark\"></i>

                ";
        // line 91
        if ((0 !== twig_compare((isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 91, $this->source); })()), 0))) {
            // line 92
            echo "                <span id=\"notif\">";
            echo twig_escape_filter($this->env, (isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "</span>
                ";
        }
        // line 94
        echo "
            ";
        // line 95
        if ((0 !== twig_compare((isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 95, $this->source); })()), 0))) {
            // line 96
            echo "            </div>
            
            <div class=\"dropdown-menu\" aria-labelledby=\"validation\">
                <h5 class=\"dropdown-title\">Notifications</h5>
                ";
            // line 100
            $context["entities_attente"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(3);
            // line 101
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities_attente"]) || array_key_exists("entities_attente", $context) ? $context["entities_attente"] : (function () { throw new RuntimeError('Variable "entities_attente" does not exist.', 101, $this->source); })())), 0))) {
                // line 102
                echo "                <div class=\"etat-notif pb-2\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-clock\"></i> En attente de validation</h6>
                    <ul class=\"list-group\">
                        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities_attente"]) || array_key_exists("entities_attente", $context) ? $context["entities_attente"] : (function () { throw new RuntimeError('Variable "entities_attente" does not exist.', 105, $this->source); })()));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 106
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 107
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "entities", [], "array", false, false, false, 107)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "lien", [], "array", false, false, false, 108), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["nomEntite"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nomEntite'], $context['entites'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                    </ul>
                </div>
                ";
            }
            // line 114
            echo "                ";
            $context["entities_import"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(4);
            // line 115
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities_import"]) || array_key_exists("entities_import", $context) ? $context["entities_import"] : (function () { throw new RuntimeError('Variable "entities_import" does not exist.', 115, $this->source); })())), 0))) {
                // line 116
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Importé et à valider</h6>
                    <ul class=\"list-group\">
                        ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities_import"]) || array_key_exists("entities_import", $context) ? $context["entities_import"] : (function () { throw new RuntimeError('Variable "entities_import" does not exist.', 119, $this->source); })()));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 120
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 121
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "entities", [], "array", false, false, false, 121)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "lien", [], "array", false, false, false, 122), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["nomEntite"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nomEntite'], $context['entites'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                    </ul>
                </div>
                ";
            }
            // line 128
            echo "                ";
            $context["entities_invalide"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(5);
            // line 129
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["entities_invalide"]) || array_key_exists("entities_invalide", $context) ? $context["entities_invalide"] : (function () { throw new RuntimeError('Variable "entities_invalide" does not exist.', 129, $this->source); })())), 0))) {
                // line 130
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Ressources/Fichiers invalides</h6>
                    <ul class=\"list-group\">
                        ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities_invalide"]) || array_key_exists("entities_invalide", $context) ? $context["entities_invalide"] : (function () { throw new RuntimeError('Variable "entities_invalide" does not exist.', 133, $this->source); })()));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 134
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 135
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "entities", [], "array", false, false, false, 135)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entites"], "lien", [], "array", false, false, false, 136), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["nomEntite"], "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nomEntite'], $context['entites'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                    </ul>
                </div>
                ";
            }
            // line 142
            echo "            </div>
            ";
        }
        // line 144
        echo "        </div>
        <div class=\"dropdown user-menu-wrapper \">
            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground fa fa-user fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            </a>    
            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>                            
                        <span class=\"user-avatar\">
                            <span class=\"fa-stack\">
                                <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                                <i class=\"user-avatar-icon-foreground fa fa-user fa-stack-1x fa-inverse\"></i>
                            </span>
                        </span>
                    </div>
                    <div>
                        <span class=\"user-label\">Connecté en tant que</span>
                        <span class=\"user-name\">admin</span>
                    </div>
                </li>
                <li><hr class=\"dropdown-divider\"></li>
                <li></li>
                <li>
                    <a href=\"/logout\" class=\"dropdown-item user-action \" target=\"_self\" rel=\"\" referrerpolicy=\"origin-when-cross-origin\">
                        <i class=\"fa fa-fw fa-sign-out\"></i>
                        <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 144,  406 => 142,  401 => 139,  390 => 136,  386 => 135,  383 => 134,  379 => 133,  374 => 130,  371 => 129,  368 => 128,  363 => 125,  352 => 122,  348 => 121,  345 => 120,  341 => 119,  336 => 116,  333 => 115,  330 => 114,  325 => 111,  314 => 108,  310 => 107,  307 => 106,  303 => 105,  298 => 102,  295 => 101,  293 => 100,  287 => 96,  285 => 95,  282 => 94,  276 => 92,  274 => 91,  269 => 88,  265 => 86,  263 => 85,  249 => 73,  239 => 72,  226 => 68,  223 => 67,  219 => 65,  214 => 62,  203 => 59,  199 => 58,  196 => 57,  192 => 56,  187 => 53,  184 => 52,  181 => 51,  176 => 48,  165 => 45,  161 => 44,  158 => 43,  154 => 42,  149 => 39,  146 => 38,  143 => 37,  138 => 34,  127 => 31,  123 => 30,  120 => 29,  116 => 28,  111 => 25,  108 => 24,  106 => 23,  100 => 19,  98 => 18,  95 => 17,  89 => 15,  87 => 14,  82 => 11,  78 => 9,  76 => 8,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@!EasyAdmin/layout.html.twig' %}

{% set nbEnAttente = nbEtatEnAttente() %}

{% block header_custom_menu %}
    <div class=\"d-flex align-items-center\">
        <div class=\"px-2 position-relative\">
            {% if nbEnAttente != 0 %}
            <div id=\"validation\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {% endif %}

                <i class=\"fas fa-bell text-dark\"></i>

                {% if nbEnAttente != 0 %}
                <span id=\"notif\">{{ nbEnAttente }}</span>
                {% endif %}

            {% if nbEnAttente != 0 %}
            </div>

            <div class=\"dropdown-menu\" aria-labelledby=\"validation\">
                <h5 class=\"dropdown-title\">Notifications</h5>
                {% set entities_attente = getEntitiesByEtat(3) %}
                {% if entities_attente|length > 0 %}
                <div class=\"etat-notif pb-2\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-clock\"></i> En attente de validation</h6>
                    <ul class=\"list-group\">
                        {% for nomEntite, entites in entities_attente %}
                            <li class=\"list-group-item\">
                                <span class=\"notif\">{{entites[\"entities\"]|length}}</span>
                                <a href=\"{{entites[\"lien\"]}}\">{{nomEntite}}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
                {% set entities_import = getEntitiesByEtat(4) %}
                {% if entities_import|length > 0 %}
                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Importé et à valider</h6>
                    <ul class=\"list-group\">
                        {% for nomEntite, entites in entities_import %}
                            <li class=\"list-group-item\">
                                <span class=\"notif\">{{entites[\"entities\"]|length}}</span>
                                <a href=\"{{entites[\"lien\"]}}\">{{nomEntite}}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
                {% set entities_invalide = getEntitiesByEtat(5) %}
                {% if entities_invalide|length > 0 %}
                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Ressources/Fichiers invalides</h6>
                    <ul class=\"list-group\">
                        {% for nomEntite, entites in entities_invalide %}
                            <li class=\"list-group-item\">
                                <span class=\"notif\">{{entites[\"entities\"]|length}}</span>
                                <a href=\"{{entites[\"lien\"]}}\">{{nomEntite}}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
            </div>
            {% endif %}
        </div>
        {{parent()}}
    </div>
{% endblock header_custom_menu %}

{% block responsive_header %}
    <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
        <i class=\"fa fa-fw fa-bars\"></i>
    </button>

    <div id=\"responsive-header-logo\" class=\"text-truncate\">
        <a class=\"responsive-logo\" title=\"\" href=\"/admin\">
            <img src=\"/build/images/logo-header.svg\">
        </a>
    </div>

    <div class=\"d-flex align-items-center\">
        <div class=\"px-2 position-relative\">
            {% if nbEnAttente != 0 %}
            <div id=\"validation\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            {% endif %}

                <i class=\"fas fa-bell text-dark\"></i>

                {% if nbEnAttente != 0 %}
                <span id=\"notif\">{{ nbEnAttente }}</span>
                {% endif %}

            {% if nbEnAttente != 0 %}
            </div>
            
            <div class=\"dropdown-menu\" aria-labelledby=\"validation\">
                <h5 class=\"dropdown-title\">Notifications</h5>
                {% set entities_attente = getEntitiesByEtat(3) %}
                {% if entities_attente|length > 0 %}
                <div class=\"etat-notif pb-2\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-clock\"></i> En attente de validation</h6>
                    <ul class=\"list-group\">
                        {% for nomEntite, entites in entities_attente %}
                            <li class=\"list-group-item\">
                                <span class=\"notif\">{{entites[\"entities\"]|length}}</span>
                                <a href=\"{{entites[\"lien\"]}}\">{{nomEntite}}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
                {% set entities_import = getEntitiesByEtat(4) %}
                {% if entities_import|length > 0 %}
                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Importé et à valider</h6>
                    <ul class=\"list-group\">
                        {% for nomEntite, entites in entities_import %}
                            <li class=\"list-group-item\">
                                <span class=\"notif\">{{entites[\"entities\"]|length}}</span>
                                <a href=\"{{entites[\"lien\"]}}\">{{nomEntite}}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
                {% set entities_invalide = getEntitiesByEtat(5) %}
                {% if entities_invalide|length > 0 %}
                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Ressources/Fichiers invalides</h6>
                    <ul class=\"list-group\">
                        {% for nomEntite, entites in entities_invalide %}
                            <li class=\"list-group-item\">
                                <span class=\"notif\">{{entites[\"entities\"]|length}}</span>
                                <a href=\"{{entites[\"lien\"]}}\">{{nomEntite}}</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
                {% endif %}
            </div>
            {% endif %}
        </div>
        <div class=\"dropdown user-menu-wrapper \">
            <a class=\"user-details\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-offset=\"0,5\" aria-expanded=\"false\">
                <span class=\"user-avatar\">
                    <span class=\"fa-stack\">
                        <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                        <i class=\"user-avatar-icon-foreground fa fa-user fa-stack-1x fa-inverse\"></i>
                    </span>
                </span>
            </a>    
            <ul class=\"dropdown-menu dropdown-menu-end\">
                <li class=\"dropdown-user-details\">
                    <div>                            
                        <span class=\"user-avatar\">
                            <span class=\"fa-stack\">
                                <i class=\"user-avatar-icon-background fas fa-square fa-stack-2x\"></i>
                                <i class=\"user-avatar-icon-foreground fa fa-user fa-stack-1x fa-inverse\"></i>
                            </span>
                        </span>
                    </div>
                    <div>
                        <span class=\"user-label\">Connecté en tant que</span>
                        <span class=\"user-name\">admin</span>
                    </div>
                </li>
                <li><hr class=\"dropdown-divider\"></li>
                <li></li>
                <li>
                    <a href=\"/logout\" class=\"dropdown-item user-action \" target=\"_self\" rel=\"\" referrerpolicy=\"origin-when-cross-origin\">
                        <i class=\"fa fa-fw fa-sign-out\"></i>
                        <span>Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
{% endblock responsive_header %}
", "@EasyAdmin/layout.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/bundles/EasyAdminBundle/layout.html.twig");
    }
}
