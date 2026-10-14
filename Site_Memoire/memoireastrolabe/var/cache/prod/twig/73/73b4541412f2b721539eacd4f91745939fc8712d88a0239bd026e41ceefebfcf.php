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
class __TwigTemplate_ebf7f8765794da5e99582915ee7018a8027b8727fc68d2638764be7244228c79 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "evenements/detailEvenement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getTitre", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
<div class=\"container mx-auto\">
    <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 16));
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
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "imageFile", [], "any", false, false, false, 25), null))) {
            // line 26
            echo "            <div class=\"col-12 col-lg-5\">
                <img class=\"d-block img-responsive mx-auto mx-sm-0\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["evenement"] ?? null), "imageFile"), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 30
        echo "
        <div class=\"col-12 mt-3 text-center text-sm-start mt-lg-0 col-lg-7\">
            <h1 class=\"title mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getTitre", [], "any", false, false, false, 32), "html", null, true);
        echo "</h1>
            <hr>
            <div class=\"tags\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "genresMusicaux", [], "any", false, false, false, 35));
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
        echo twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDescription", [], "any", false, false, false, 43);
        echo "</span>
           
            </div>
            <div class=\"col-12 text-center text-sm-start mt-3\">
                <p><i class=\"fa-solid fa-calendar-days\"></i> Début : ";
        // line 47
        (((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateDebut", [], "any", true, true, false, 47) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateDebut", [], "any", false, false, false, 47)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateDebut", [], "any", false, false, false, 47), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 47), "html", null, true))) : (print ("")));
        echo "</p>
                <p><i class=\"fa-solid fa-calendar-days\"></i> Fin : ";
        // line 48
        (((twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateFin", [], "any", true, true, false, 48) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateFin", [], "any", false, false, false, 48)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getDateFin", [], "any", false, false, false, 48), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 48), "html", null, true))) : (print ("")));
        echo "</p>
                ";
        // line 49
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "lieu", [], "any", false, false, false, 49), "etat", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), 1))) {
            // line 50
            echo "                    <p><i class=\"fa-solid fa-location-dot\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisibleLieu", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                ";
        }
        // line 52
        echo "            </div>
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "ressources", [], "any", false, false, false, 53));
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
                    if (((0 === twig_compare((($__internal_compile_0 = ($context["valid"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), false)) && (0 !== twig_compare((($__internal_compile_1 = ($context["valid"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "")))) {
                        // line 58
                        echo "                            <div class=\"col-12 text-ce text-sm-start my-3 \">
                                <i class=\"fa-solid fa-earth-europe\"></i> <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["valid"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "ressources", [], "any", false, false, false, 66));
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
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisiblePassages", [], "any", false, false, false, 91)), 0))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisiblePassages", [], "any", false, false, false, 103));
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisiblePassages", [], "any", false, false, false, 119));
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
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "ressources", [], "any", false, false, false, 142)), 0))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisibleRessources", [], "any", false, false, false, 146));
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
                    $context["isValid"] = $this->extensions['App\Twig\CustomExtension']->checkUrl(($context["image"] ?? null));
                    // line 150
                    echo "                        ";
                    if ((($__internal_compile_3 = ($context["isValid"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) {
                        echo " ";
                        // line 151
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
                        echo "\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <img class=\"img-fluid img-responsive mx-auto gallery-item px-2\" loading=\"lazy\" src=\"";
                        // line 155
                        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
                        echo "\" class=\"text-center\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <iframe src=\"";
                        // line 165
                        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
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
                    if ((($__internal_compile_4 = ($context["isValid"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null)) {
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
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["isValid"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), "html", null, true);
                        echo "\"
                                data-pswp-height=\"800\"
                                data-pswp-width=\"800\"
                                target=\"_blank\">
                                <iframe src=\"";
                        // line 188
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["isValid"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRessource"] ?? null), 'form_start', ["attr" => ["id" => "ressourceForm"]]);
        echo "
                ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRessource"] ?? null), "titre", [], "any", false, false, false, 208), 'row', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRessource"] ?? null), "lien", [], "any", false, false, false, 209), 'row', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRessource"] ?? null), "file", [], "any", false, false, false, 210), 'row', ["attr" => ["class" => "form-control dropify"]]);
        echo "
                <span class=\"invalid-feedback mb-3\" id=\"error_file\"></span>
                ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRessource"] ?? null), "type", [], "any", false, false, false, 212), 'row', ["attr" => ["class" => "form-control select2  mb-3"]]);
        echo "
                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRessource"] ?? null), "credits", [], "any", false, false, false, 213), 'row');
        echo "
                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRessource"] ?? null), "_token", [], "any", false, false, false, 214), 'row');
        echo "
            ";
        // line 215
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRessource"] ?? null), 'form_end', ["render_rest" => false]);
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
    }

    // line 228
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  649 => 231,  645 => 230,  640 => 229,  636 => 228,  620 => 215,  616 => 214,  612 => 213,  608 => 212,  603 => 210,  599 => 209,  595 => 208,  591 => 207,  577 => 195,  573 => 193,  567 => 192,  564 => 191,  558 => 188,  550 => 184,  547 => 183,  544 => 182,  538 => 180,  536 => 179,  530 => 178,  522 => 174,  518 => 173,  515 => 172,  512 => 171,  508 => 169,  502 => 167,  500 => 166,  496 => 165,  488 => 161,  486 => 160,  482 => 159,  476 => 157,  474 => 156,  468 => 155,  460 => 151,  456 => 150,  453 => 149,  450 => 148,  448 => 147,  442 => 146,  438 => 144,  434 => 143,  432 => 142,  424 => 136,  420 => 134,  401 => 129,  397 => 128,  390 => 126,  384 => 123,  378 => 122,  374 => 121,  371 => 120,  354 => 119,  348 => 115,  339 => 112,  335 => 111,  329 => 109,  323 => 107,  321 => 106,  313 => 103,  301 => 93,  297 => 92,  295 => 91,  285 => 83,  279 => 82,  276 => 81,  268 => 77,  266 => 76,  259 => 73,  257 => 72,  250 => 69,  247 => 68,  244 => 67,  240 => 66,  237 => 65,  231 => 64,  228 => 63,  225 => 62,  215 => 59,  212 => 58,  209 => 57,  206 => 56,  203 => 55,  200 => 54,  196 => 53,  193 => 52,  187 => 50,  185 => 49,  181 => 48,  177 => 47,  170 => 43,  165 => 40,  159 => 39,  154 => 37,  149 => 36,  145 => 35,  139 => 32,  135 => 30,  129 => 27,  126 => 26,  124 => 25,  121 => 24,  115 => 23,  105 => 19,  100 => 18,  95 => 17,  91 => 16,  86 => 13,  82 => 12,  76 => 9,  72 => 8,  68 => 7,  63 => 6,  59 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "evenements/detailEvenement.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/evenements/detailEvenement.html.twig");
    }
}
