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

/* components/pagination.html.twig */
class __TwigTemplate_6d6db8977437f9f36740bc38eaa67eca7a9d5dfbdd947952419e935e4facb70a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/pagination.html.twig"));

        // line 1
        echo "<nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        ";
        // line 3
        if ((0 !== twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 3, $this->source); })()), 1))) {
            // line 4
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 5, $this->source); })()) - 1)])), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => 1])), "html", null, true);
            echo "\">1</a></li>
        ";
        }
        // line 12
        echo "        ";
        if (((1 === twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 12, $this->source); })()), 3)) && (-1 === twig_compare((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 12, $this->source); })()) - 2) * (isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 12, $this->source); })())), (isset($context["countOfEntity"]) || array_key_exists("countOfEntity", $context) ? $context["countOfEntity"] : (function () { throw new RuntimeError('Variable "countOfEntity" does not exist.', 12, $this->source); })()))))) {
            // line 13
            echo "        <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 13, $this->source); })()) - 2)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 13, $this->source); })()) - 2), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 15
        echo "            ";
        if (((1 === twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 15, $this->source); })()), 2)) && (-1 === twig_compare((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 15, $this->source); })()) - 1) * (isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 15, $this->source); })())), (isset($context["countOfEntity"]) || array_key_exists("countOfEntity", $context) ? $context["countOfEntity"] : (function () { throw new RuntimeError('Variable "countOfEntity" does not exist.', 15, $this->source); })()))))) {
            // line 16
            echo "            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 16, $this->source); })()) - 1)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 16, $this->source); })()) - 1), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 18
        echo "        ";
        if ((1 === twig_compare((isset($context["countOfEntity"]) || array_key_exists("countOfEntity", $context) ? $context["countOfEntity"] : (function () { throw new RuntimeError('Variable "countOfEntity" does not exist.', 18, $this->source); })()), (isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 18, $this->source); })())))) {
            // line 19
            echo "            <li class=\"page-item disabled\"><a class=\"page-link\">";
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 21
        echo "        ";
        if ((1 === twig_compare(((isset($context["countOfEntity"]) || array_key_exists("countOfEntity", $context) ? $context["countOfEntity"] : (function () { throw new RuntimeError('Variable "countOfEntity" does not exist.', 21, $this->source); })()) - (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 21, $this->source); })()) + 1) * (isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 21, $this->source); })()))),  -(isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 21, $this->source); })())))) {
            // line 22
            echo "            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 22, $this->source); })()) + 1)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 22, $this->source); })()) + 1), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 24
        echo "        ";
        if ((1 === twig_compare(((isset($context["countOfEntity"]) || array_key_exists("countOfEntity", $context) ? $context["countOfEntity"] : (function () { throw new RuntimeError('Variable "countOfEntity" does not exist.', 24, $this->source); })()) - (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 24, $this->source); })()) + 2) * (isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 24, $this->source); })()))),  -(isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 24, $this->source); })())))) {
            // line 25
            echo "        <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 25, $this->source); })()) + 2)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 25, $this->source); })()) + 2), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 27
        echo "        ";
        if ((1 === twig_compare(((isset($context["countOfEntity"]) || array_key_exists("countOfEntity", $context) ? $context["countOfEntity"] : (function () { throw new RuntimeError('Variable "countOfEntity" does not exist.', 27, $this->source); })()) - (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 27, $this->source); })()) + 1) * (isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 27, $this->source); })()))),  -(isset($context["numItemsPerPage"]) || array_key_exists("numItemsPerPage", $context) ? $context["numItemsPerPage"] : (function () { throw new RuntimeError('Variable "numItemsPerPage" does not exist.', 27, $this->source); })())))) {
            // line 28
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 29, $this->source); })()) + 1)])), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
        }
        // line 35
        echo "
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "components/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  124 => 29,  121 => 28,  118 => 27,  110 => 25,  107 => 24,  99 => 22,  96 => 21,  90 => 19,  87 => 18,  79 => 16,  76 => 15,  68 => 13,  65 => 12,  60 => 10,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        {% if currentPage != 1 %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : currentPage-1}))) }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : 1}))) }}\">1</a></li>
        {% endif %}
        {% if currentPage > 3 and (currentPage-2)*numItemsPerPage < countOfEntity %}
        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : currentPage-2 }))) }}\">{{ currentPage-2 }}</a></li>
        {% endif %}
            {% if currentPage > 2 and (currentPage-1)*numItemsPerPage < countOfEntity %}
            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : currentPage-1 }))) }}\">{{ currentPage-1 }}</a></li>
        {% endif %}
        {% if countOfEntity>numItemsPerPage %}
            <li class=\"page-item disabled\"><a class=\"page-link\">{{ currentPage }}</a></li>
        {% endif %}
        {% if countOfEntity-(currentPage+1)*numItemsPerPage  > -numItemsPerPage %}
            <li class=\"page-item\"><a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : currentPage+1 }))) }}\">{{ currentPage+1 }}</a></li>
        {% endif %}
        {% if countOfEntity -(currentPage+2)*numItemsPerPage > -numItemsPerPage%}
        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : currentPage+2 }))) }}\">{{ currentPage+2 }}</a></li>
        {% endif %}
        {% if countOfEntity-(currentPage+1)*numItemsPerPage > -numItemsPerPage %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ (absolute_url(path('listeFront_evenements', {'currentPage' : currentPage+1 }))) }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        {% endif %}

    </ul>
</nav>", "components/pagination.html.twig", "C:\\Users\\Talla\\Bureau\\memoireastrolabe\\templates\\components\\pagination.html.twig");
    }
}
