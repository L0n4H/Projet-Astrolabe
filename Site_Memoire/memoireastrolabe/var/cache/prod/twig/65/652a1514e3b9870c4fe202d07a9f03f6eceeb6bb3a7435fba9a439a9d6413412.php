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
class __TwigTemplate_536be6c84ef34f668549f4add4699893aad9c678b9e5030b2741abbf9e9e619d extends Template
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
        // line 3
        $context["nbEnAttente"] = $this->extensions['App\Twig\CustomExtension']->getNbEtatEnAttente();
        // line 1
        $this->parent = $this->loadTemplate("@!EasyAdmin/layout.html.twig", "@EasyAdmin/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"d-flex align-items-center\">
        <div class=\"px-2 position-relative\">
            ";
        // line 8
        if ((0 !== twig_compare(($context["nbEnAttente"] ?? null), 0))) {
            // line 9
            echo "            <div id=\"validation\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        }
        // line 11
        echo "
                <i class=\"fas fa-bell text-dark\"></i>

                ";
        // line 14
        if ((0 !== twig_compare(($context["nbEnAttente"] ?? null), 0))) {
            // line 15
            echo "                <span id=\"notif\">";
            echo twig_escape_filter($this->env, ($context["nbEnAttente"] ?? null), "html", null, true);
            echo "</span>
                ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ((0 !== twig_compare(($context["nbEnAttente"] ?? null), 0))) {
            // line 19
            echo "            </div>

            <div class=\"dropdown-menu\" aria-labelledby=\"validation\">
                <h5 class=\"dropdown-title\">Notifications</h5>
                ";
            // line 23
            $context["entities_attente"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(3);
            // line 24
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities_attente"] ?? null)), 0))) {
                // line 25
                echo "                <div class=\"etat-notif pb-2\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-clock\"></i> En attente de validation</h6>
                    <ul class=\"list-group\">
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entities_attente"] ?? null));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 29
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 30
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_0 = $context["entites"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entities"] ?? null) : null)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["entites"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["lien"] ?? null) : null), "html", null, true);
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
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities_import"] ?? null)), 0))) {
                // line 39
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Importé et à valider</h6>
                    <ul class=\"list-group\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entities_import"] ?? null));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 43
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 44
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_2 = $context["entites"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities"] ?? null) : null)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["entites"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["lien"] ?? null) : null), "html", null, true);
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
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities_invalide"] ?? null)), 0))) {
                // line 53
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Ressources/Fichiers invalides</h6>
                    <ul class=\"list-group\">
                        ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entities_invalide"] ?? null));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 57
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_4 = $context["entites"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities"] ?? null) : null)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["entites"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["lien"] ?? null) : null), "html", null, true);
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
    }

    // line 72
    public function block_responsive_header($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if ((0 !== twig_compare(($context["nbEnAttente"] ?? null), 0))) {
            // line 86
            echo "            <div id=\"validation\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            ";
        }
        // line 88
        echo "
                <i class=\"fas fa-bell text-dark\"></i>

                ";
        // line 91
        if ((0 !== twig_compare(($context["nbEnAttente"] ?? null), 0))) {
            // line 92
            echo "                <span id=\"notif\">";
            echo twig_escape_filter($this->env, ($context["nbEnAttente"] ?? null), "html", null, true);
            echo "</span>
                ";
        }
        // line 94
        echo "
            ";
        // line 95
        if ((0 !== twig_compare(($context["nbEnAttente"] ?? null), 0))) {
            // line 96
            echo "            </div>
            
            <div class=\"dropdown-menu\" aria-labelledby=\"validation\">
                <h5 class=\"dropdown-title\">Notifications</h5>
                ";
            // line 100
            $context["entities_attente"] = $this->extensions['App\Twig\CustomExtension']->getEntitiesByEtat(3);
            // line 101
            echo "                ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities_attente"] ?? null)), 0))) {
                // line 102
                echo "                <div class=\"etat-notif pb-2\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-clock\"></i> En attente de validation</h6>
                    <ul class=\"list-group\">
                        ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entities_attente"] ?? null));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 106
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 107
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_6 = $context["entites"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["entities"] ?? null) : null)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["entites"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["lien"] ?? null) : null), "html", null, true);
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
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities_import"] ?? null)), 0))) {
                // line 116
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Importé et à valider</h6>
                    <ul class=\"list-group\">
                        ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entities_import"] ?? null));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 120
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 121
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_8 = $context["entites"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities"] ?? null) : null)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, (($__internal_compile_9 = $context["entites"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["lien"] ?? null) : null), "html", null, true);
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
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities_invalide"] ?? null)), 0))) {
                // line 130
                echo "                <div class=\"etat-notif pt-2 border-top\">
                    <h6 class=\"text-primary fw-normal dropdown-subtitle\"><i class=\"far fa-times-circle\"></i> Ressources/Fichiers invalides</h6>
                    <ul class=\"list-group\">
                        ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["entities_invalide"] ?? null));
                foreach ($context['_seq'] as $context["nomEntite"] => $context["entites"]) {
                    // line 134
                    echo "                            <li class=\"list-group-item\">
                                <span class=\"notif\">";
                    // line 135
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, (($__internal_compile_10 = $context["entites"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities"] ?? null) : null)), "html", null, true);
                    echo "</span>
                                <a href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, (($__internal_compile_11 = $context["entites"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["lien"] ?? null) : null), "html", null, true);
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
        return array (  380 => 144,  376 => 142,  371 => 139,  360 => 136,  356 => 135,  353 => 134,  349 => 133,  344 => 130,  341 => 129,  338 => 128,  333 => 125,  322 => 122,  318 => 121,  315 => 120,  311 => 119,  306 => 116,  303 => 115,  300 => 114,  295 => 111,  284 => 108,  280 => 107,  277 => 106,  273 => 105,  268 => 102,  265 => 101,  263 => 100,  257 => 96,  255 => 95,  252 => 94,  246 => 92,  244 => 91,  239 => 88,  235 => 86,  233 => 85,  219 => 73,  215 => 72,  208 => 68,  205 => 67,  201 => 65,  196 => 62,  185 => 59,  181 => 58,  178 => 57,  174 => 56,  169 => 53,  166 => 52,  163 => 51,  158 => 48,  147 => 45,  143 => 44,  140 => 43,  136 => 42,  131 => 39,  128 => 38,  125 => 37,  120 => 34,  109 => 31,  105 => 30,  102 => 29,  98 => 28,  93 => 25,  90 => 24,  88 => 23,  82 => 19,  80 => 18,  77 => 17,  71 => 15,  69 => 14,  64 => 11,  60 => 9,  58 => 8,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/bundles/EasyAdminBundle/layout.html.twig");
    }
}
