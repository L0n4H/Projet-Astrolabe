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

/* admin/user_edit.html.twig */
class __TwigTemplate_60e74013620f38bfcc307dec70e408e2caa84aa7366d800d6e04b897dc4486d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'main' => [$this, 'block_main'],
            'page_content' => [$this, 'block_page_content'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/crud/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user_edit.html.twig"));

        // line 5
        $context["nbIndependantRoles"] = 4;
        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/crud/edit.html.twig", "admin/user_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    ";
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 9, $this->source); })()), "username", [], "any", false, false, false, 9), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 10, $this->source); })()), "email", [], "any", false, false, false, 10), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 11, $this->source); })()), "plainPassword", [], "any", false, false, false, 11), 'row');
        echo "
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 12, $this->source); })()), "roles", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "                ";
            if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), (isset($context["nbIndependantRoles"]) || array_key_exists("nbIndependantRoles", $context) ? $context["nbIndependantRoles"] : (function () { throw new RuntimeError('Variable "nbIndependantRoles" does not exist.', 13, $this->source); })())))) {
                // line 14
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14), 0))) {
                    // line 15
                    echo "                        <div class=\"row custom-ea-bloc my-3 roles-generiques\">
                            <h5 class=\"custom-ea-title mt-4\">Rôles Génériques</h5>
                    ";
                }
                // line 18
                echo "                        <div class=\"col-sm-6 col-lg-5 col-xl-3\">
                            ";
                // line 19
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["role"], 'row');
                echo "
                        </div>
                    ";
                // line 21
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), (isset($context["nbIndependantRoles"]) || array_key_exists("nbIndependantRoles", $context) ? $context["nbIndependantRoles"] : (function () { throw new RuntimeError('Variable "nbIndependantRoles" does not exist.', 21, $this->source); })())))) {
                    // line 22
                    echo "                        <div>
                    ";
                }
                // line 24
                echo "                ";
            } else {
                // line 25
                echo "                    ";
                if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25) % 4), 0))) {
                    // line 26
                    echo "                        <section class=\"row custom-ea-bloc my-3 roles-specs\">
                            <h5 class=\"custom-ea-title\">
                                Rôles
                                ";
                    // line 29
                    if (twig_in_filter("EVENEMENT", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["role"], "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29))) {
                        // line 30
                        echo "                                    Événements
                                ";
                    } elseif (twig_in_filter("LIEU", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 31
$context["role"], "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31))) {
                        // line 32
                        echo "                                    Lieux
                                ";
                    } elseif (twig_in_filter("GROUPE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 33
$context["role"], "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33))) {
                        // line 34
                        echo "                                    Groupes
                                ";
                    } elseif (twig_in_filter("LABEL", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 35
$context["role"], "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35))) {
                        // line 36
                        echo "                                    Labels
                                ";
                    } elseif (twig_in_filter("MUSICIEN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 37
$context["role"], "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37))) {
                        // line 38
                        echo "                                    Musiciens
                                ";
                    } elseif (twig_in_filter("INSTRUMENT", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 39
$context["role"], "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39))) {
                        // line 40
                        echo "                                    Instruments
                                ";
                    } elseif (twig_in_filter("NATIONALITE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 41
$context["role"], "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41))) {
                        // line 42
                        echo "                                    Nationalités
                                ";
                    } elseif (twig_in_filter("GENRE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 43
$context["role"], "vars", [], "any", false, false, false, 43), "value", [], "any", false, false, false, 43))) {
                        // line 44
                        echo "                                    Genres
                                ";
                    } elseif (twig_in_filter("CATEGORIE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 45
$context["role"], "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45))) {
                        // line 46
                        echo "                                    Catégories
                                ";
                    } elseif (twig_in_filter("RESSOURCES", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 47
$context["role"], "vars", [], "any", false, false, false, 47), "value", [], "any", false, false, false, 47))) {
                        // line 48
                        echo "                                    Ressources
                                ";
                    } elseif (twig_in_filter("ETIQUETTE", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 49
$context["role"], "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49))) {
                        // line 50
                        echo "                                    Étiquettes
                                ";
                    } elseif (twig_in_filter("TYPEEVENT", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 51
$context["role"], "vars", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51))) {
                        // line 52
                        echo "                                    Types d'événement
                                ";
                    } else {
                        // line 54
                        echo "                                    Autres
                                ";
                    }
                    // line 56
                    echo "                            </h5>
                    ";
                }
                // line 58
                echo "                    
                        <div class=\"col-sm-6 col-lg-5 col-xl-3\">
                            ";
                // line 60
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["role"], 'row');
                echo "
                        </div>
                
                    ";
                // line 63
                if ((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 63) % 4), 3))) {
                    // line 64
                    echo "                        </section>
                    ";
                }
                // line 66
                echo "                ";
            }
            // line 67
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 72
        echo "    <script type=\"text/javascript\">
        var nbIndependantRoles = \"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["nbIndependantRoles"]) || array_key_exists("nbIndependantRoles", $context) ? $context["nbIndependantRoles"] : (function () { throw new RuntimeError('Variable "nbIndependantRoles" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "\";
    </script>
    ";
        // line 75
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 75,  315 => 73,  312 => 72,  302 => 71,  289 => 68,  275 => 67,  272 => 66,  268 => 64,  266 => 63,  260 => 60,  256 => 58,  252 => 56,  248 => 54,  244 => 52,  242 => 51,  239 => 50,  237 => 49,  234 => 48,  232 => 47,  229 => 46,  227 => 45,  224 => 44,  222 => 43,  219 => 42,  217 => 41,  214 => 40,  212 => 39,  209 => 38,  207 => 37,  204 => 36,  202 => 35,  199 => 34,  197 => 33,  194 => 32,  192 => 31,  189 => 30,  187 => 29,  182 => 26,  179 => 25,  176 => 24,  172 => 22,  170 => 21,  165 => 19,  162 => 18,  157 => 15,  154 => 14,  151 => 13,  134 => 12,  130 => 11,  126 => 10,  122 => 9,  117 => 8,  97 => 7,  87 => 6,  74 => 3,  64 => 2,  53 => 1,  51 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyAdmin/crud/edit.html.twig' %}
{% block configured_stylesheets %}
    {{ parent() }}
{% endblock %}
{% set nbIndependantRoles = 4 %} {# without entity link like 'ROLE_USER' not like 'ROLE_EVENEMENT_READ' #}
{% block main %}
    {% block page_content %}
        {{ form_start(edit_form) }}
            {{ form_row(edit_form.username) }}
            {{ form_row(edit_form.email) }}
            {{ form_row(edit_form.plainPassword) }}
            {% for role in edit_form.roles %}
                {% if loop.index <= nbIndependantRoles %}
                    {% if loop.index0 == 0 %}
                        <div class=\"row custom-ea-bloc my-3 roles-generiques\">
                            <h5 class=\"custom-ea-title mt-4\">Rôles Génériques</h5>
                    {% endif %}
                        <div class=\"col-sm-6 col-lg-5 col-xl-3\">
                            {{ form_row(role) }}
                        </div>
                    {% if loop.index == nbIndependantRoles %}
                        <div>
                    {% endif %}
                {% else %}
                    {% if loop.index0 % 4 == 0 %}
                        <section class=\"row custom-ea-bloc my-3 roles-specs\">
                            <h5 class=\"custom-ea-title\">
                                Rôles
                                {% if 'EVENEMENT' in role.vars.value %}
                                    Événements
                                {% elseif 'LIEU' in role.vars.value %}
                                    Lieux
                                {% elseif 'GROUPE' in role.vars.value %}
                                    Groupes
                                {% elseif 'LABEL' in role.vars.value %}
                                    Labels
                                {% elseif 'MUSICIEN' in role.vars.value %}
                                    Musiciens
                                {% elseif 'INSTRUMENT' in role.vars.value %}
                                    Instruments
                                {% elseif 'NATIONALITE' in role.vars.value %}
                                    Nationalités
                                {% elseif 'GENRE' in role.vars.value %}
                                    Genres
                                {% elseif 'CATEGORIE' in role.vars.value %}
                                    Catégories
                                {% elseif 'RESSOURCES' in role.vars.value %}
                                    Ressources
                                {% elseif 'ETIQUETTE' in role.vars.value %}
                                    Étiquettes
                                {% elseif 'TYPEEVENT' in role.vars.value %}
                                    Types d'événement
                                {% else %}
                                    Autres
                                {% endif %}
                            </h5>
                    {% endif %}
                    
                        <div class=\"col-sm-6 col-lg-5 col-xl-3\">
                            {{ form_row(role) }}
                        </div>
                
                    {% if loop.index0 % 4 == 3 %}
                        </section>
                    {% endif %}
                {% endif %}
            {% endfor %}
        {{ form_end(edit_form) }}
    {% endblock %}
{% endblock %}
{% block body_javascript %}
    <script type=\"text/javascript\">
        var nbIndependantRoles = \"{{ nbIndependantRoles }}\";
    </script>
    {{ parent() }}
{% endblock %}", "admin/user_edit.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\admin\\user_edit.html.twig");
    }
}
