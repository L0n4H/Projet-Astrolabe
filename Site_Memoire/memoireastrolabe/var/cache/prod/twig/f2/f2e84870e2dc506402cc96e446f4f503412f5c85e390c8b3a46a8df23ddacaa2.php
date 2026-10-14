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

/* components/card.html.twig */
class __TwigTemplate_fa821122980a74851a4b1d568dcd76ef9e07362ef9cd8b78e29bbe0d0f18727b extends Template
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
        echo "<div class=\"program col-12 col-sm-6 col-lg-3 custom-card\">
    <a class=\"program-link\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_evenement", ["id" => twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "id", [], "any", false, false, false, 2)])), "html", null, true);
        echo "\">
        <div style=\"background-image: url(
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "image", [], "any", false, false, false, 4)) {
            // line 5
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["evenement"] ?? null), "imageFile"), "html", null, true);
            echo "
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 6
($context["evenement"] ?? null), "lienImage", [], "any", false, false, false, 6)) {
            // line 7
            echo "                ";
            echo twig_escape_filter($this->env, ($context["lienImage"] ?? null), "html", null, true);
            echo "
            ";
        } else {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/img-thumbnail.png"), "html", null, true);
            echo "
            ";
        }
        // line 11
        echo "            )\" class=\"thumbnail-img card-img\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/img-thumbnail.png"), "html", null, true);
        echo "\" class=\"img-responsive full-width\">
            <div class=\"random-background\">
                <div class=\"bg-default \">
                    <div class=\"program-text-position\">
                    ";
        // line 16
        $context["genres"] = [];
        // line 17
        echo "                    
                    ";
        // line 18
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisibleGenresMusicaux", [], "any", false, false, false, 18))) {
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "getVisibleGenresMusicaux", [], "any", false, false, false, 19));
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
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 20
                echo "                            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                                ";
                    $context["genres"] = twig_array_merge(($context["genres"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 21), 1 => " - "]);
                    // line 22
                    echo "                            ";
                } else {
                    // line 23
                    echo "                                ";
                    $context["genres"] = twig_array_merge(($context["genres"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 23)]);
                    // line 24
                    echo "                            ";
                }
                // line 25
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                                                     
                    ";
        }
        // line 27
        echo "                        <div class=\"tags color-black inline-block xs-font-x150 xs-padding-v-xs xs-padding-h-sm xs-margin-bottom-xs xs-margin-right-md
                            ";
        // line 28
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["genres"] ?? null)), 0))) {
            echo "bg-color-white";
        }
        echo " 
                        \">
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 31
            echo "                                ";
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </div>
                        <div class=\"date color-white xs-font-x200 bold\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "dateDebut", [], "any", false, false, false, 34), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 34), "html", null, true);
        echo "</div>
                        <div class=\"title color-white xs-font-x300 md-font-x160 lg-font-x220 bold\">
                            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["evenement"] ?? null), "titre", [], "any", false, false, false, 36), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 36,  159 => 34,  156 => 33,  147 => 31,  143 => 30,  136 => 28,  133 => 27,  116 => 25,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  83 => 19,  81 => 18,  78 => 17,  76 => 16,  69 => 12,  66 => 11,  60 => 9,  54 => 7,  52 => 6,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/card.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/components/card.html.twig");
    }
}
