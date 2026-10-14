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
class __TwigTemplate_54941c56bab0567c075aacd94e5a3a9a66b43634741c702af9e14db7b78b4ac4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/card.html.twig"));

        // line 1
        echo "<div class=\"program col-12 col-sm-6 col-lg-3 custom-card\">
    <a class=\"program-link\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_evenement", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)])), "html", null, true);
        echo "\">
        <div style=\"background-image: url(
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 4, $this->source); })()), "image", [], "any", false, false, false, 4)) {
            // line 5
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 5, $this->source); })()), "imageFile"), "html", null, true);
            echo "
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 6, $this->source); })()), "lienImage", [], "any", false, false, false, 6)) {
            // line 7
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["lienImage"]) || array_key_exists("lienImage", $context) ? $context["lienImage"] : (function () { throw new RuntimeError('Variable "lienImage" does not exist.', 7, $this->source); })()), "html", null, true);
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
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 18, $this->source); })()), "getVisibleGenresMusicaux", [], "any", false, false, false, 18))) {
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 19, $this->source); })()), "getVisibleGenresMusicaux", [], "any", false, false, false, 19));
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
                    $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 21, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 21), 1 => " - "]);
                    // line 22
                    echo "                            ";
                } else {
                    // line 23
                    echo "                                ";
                    $context["genres"] = twig_array_merge((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 23, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["genre"], "nom", [], "any", false, false, false, 23)]);
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
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 28, $this->source); })())), 0))) {
            echo "bg-color-white";
        }
        echo " 
                        \">
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 30, $this->source); })()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 34, $this->source); })()), "dateDebut", [], "any", false, false, false, 34), "format", [0 => "d.m.Y - H:i"], "method", false, false, false, 34), "html", null, true);
        echo "</div>
                        <div class=\"title color-white xs-font-x300 md-font-x160 lg-font-x220 bold\">
                            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new RuntimeError('Variable "evenement" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  170 => 36,  165 => 34,  162 => 33,  153 => 31,  149 => 30,  142 => 28,  139 => 27,  122 => 25,  119 => 24,  116 => 23,  113 => 22,  110 => 21,  107 => 20,  89 => 19,  87 => 18,  84 => 17,  82 => 16,  75 => 12,  72 => 11,  66 => 9,  60 => 7,  58 => 6,  53 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"program col-12 col-sm-6 col-lg-3 custom-card\">
    <a class=\"program-link\" href=\"{{ (absolute_url(path('detail_evenement', {'id' : evenement.id}))) }}\">
        <div style=\"background-image: url(
            {% if evenement.image %}
                {{ vich_uploader_asset(evenement, 'imageFile') }}
            {% elseif evenement.lienImage %}
                {{ lienImage }}
            {% else %}
                {{ asset('build/images/img-thumbnail.png') }}
            {% endif %}
            )\" class=\"thumbnail-img card-img\">
            <img src=\"{{ asset('build/images/img-thumbnail.png') }}\" class=\"img-responsive full-width\">
            <div class=\"random-background\">
                <div class=\"bg-default \">
                    <div class=\"program-text-position\">
                    {% set genres = {} %}
                    
                    {% if evenement.getVisibleGenresMusicaux is not null %}
                        {% for genre in evenement.getVisibleGenresMusicaux %}
                            {% if not loop.last %}
                                {% set genres = genres|merge([genre.nom,' - '])  %}
                            {% else %}
                                {% set genres = genres|merge([genre.nom])  %}
                            {% endif %}
                        {% endfor %}                                                     
                    {% endif %}
                        <div class=\"tags color-black inline-block xs-font-x150 xs-padding-v-xs xs-padding-h-sm xs-margin-bottom-xs xs-margin-right-md
                            {% if genres|length > 0 %}bg-color-white{% endif %} 
                        \">
                            {% for genre in genres %}
                                {{genre}}
                            {% endfor %}
                        </div>
                        <div class=\"date color-white xs-font-x200 bold\">{{evenement.dateDebut.format(\"d.m.Y - H:i\")}}</div>
                        <div class=\"title color-white xs-font-x300 md-font-x160 lg-font-x220 bold\">
                            {{ evenement.titre }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
", "components/card.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\components\\card.html.twig");
    }
}
