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
class __TwigTemplate_483316fb423e01b480a8febd979e124b99bfd28056b5d40a7dd0e900b699999d extends Template
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
        // line 5
        $context["nbIndependantRoles"] = 4;
        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/crud/edit.html.twig", "admin/user_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayBlock('page_content', $context, $blocks);
    }

    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "username", [], "any", false, false, false, 9), 'row');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "email", [], "any", false, false, false, 10), 'row');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "plainPassword", [], "any", false, false, false, 11), 'row');
        echo "
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "roles", [], "any", false, false, false, 12));
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
            if ((0 >= twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 13), ($context["nbIndependantRoles"] ?? null)))) {
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
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), ($context["nbIndependantRoles"] ?? null)))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
    ";
    }

    // line 71
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    <script type=\"text/javascript\">
        var nbIndependantRoles = \"";
        // line 73
        echo twig_escape_filter($this->env, ($context["nbIndependantRoles"] ?? null), "html", null, true);
        echo "\";
    </script>
    ";
        // line 75
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "
";
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
        return array (  266 => 75,  261 => 73,  258 => 72,  254 => 71,  247 => 68,  233 => 67,  230 => 66,  226 => 64,  224 => 63,  218 => 60,  214 => 58,  210 => 56,  206 => 54,  202 => 52,  200 => 51,  197 => 50,  195 => 49,  192 => 48,  190 => 47,  187 => 46,  185 => 45,  182 => 44,  180 => 43,  177 => 42,  175 => 41,  172 => 40,  170 => 39,  167 => 38,  165 => 37,  162 => 36,  160 => 35,  157 => 34,  155 => 33,  152 => 32,  150 => 31,  147 => 30,  145 => 29,  140 => 26,  137 => 25,  134 => 24,  130 => 22,  128 => 21,  123 => 19,  120 => 18,  115 => 15,  112 => 14,  109 => 13,  92 => 12,  88 => 11,  84 => 10,  80 => 9,  75 => 8,  67 => 7,  63 => 6,  56 => 3,  52 => 2,  47 => 1,  45 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user_edit.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/admin/user_edit.html.twig");
    }
}
