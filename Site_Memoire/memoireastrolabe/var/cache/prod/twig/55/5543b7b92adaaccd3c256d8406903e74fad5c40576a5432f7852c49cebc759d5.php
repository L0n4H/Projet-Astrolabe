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
class __TwigTemplate_df88ed793b646b593f32ceb43718a038187cf69be6aae6e5290eccb8285b7c83 extends Template
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
        echo "<nav aria-label=\"Page navigation example\">
    <ul class=\"pagination\">
        ";
        // line 3
        if ((0 !== twig_compare(($context["currentPage"] ?? null), 1))) {
            // line 4
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
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
        if (((1 === twig_compare(($context["currentPage"] ?? null), 3)) && (-1 === twig_compare(((($context["currentPage"] ?? null) - 2) * ($context["numItemsPerPage"] ?? null)), ($context["countOfEntity"] ?? null))))) {
            // line 13
            echo "        <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => (($context["currentPage"] ?? null) - 2)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) - 2), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 15
        echo "            ";
        if (((1 === twig_compare(($context["currentPage"] ?? null), 2)) && (-1 === twig_compare(((($context["currentPage"] ?? null) - 1) * ($context["numItemsPerPage"] ?? null)), ($context["countOfEntity"] ?? null))))) {
            // line 16
            echo "            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) - 1), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 18
        echo "        ";
        if ((1 === twig_compare(($context["countOfEntity"] ?? null), ($context["numItemsPerPage"] ?? null)))) {
            // line 19
            echo "            <li class=\"page-item disabled\"><a class=\"page-link\">";
            echo twig_escape_filter($this->env, ($context["currentPage"] ?? null), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 21
        echo "        ";
        if ((1 === twig_compare((($context["countOfEntity"] ?? null) - ((($context["currentPage"] ?? null) + 1) * ($context["numItemsPerPage"] ?? null))),  -($context["numItemsPerPage"] ?? null)))) {
            // line 22
            echo "            <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) + 1), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 24
        echo "        ";
        if ((1 === twig_compare((($context["countOfEntity"] ?? null) - ((($context["currentPage"] ?? null) + 2) * ($context["numItemsPerPage"] ?? null))),  -($context["numItemsPerPage"] ?? null)))) {
            // line 25
            echo "        <li class=\"page-item\"><a class=\"page-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => (($context["currentPage"] ?? null) + 2)])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($context["currentPage"] ?? null) + 2), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 27
        echo "        ";
        if ((1 === twig_compare((($context["countOfEntity"] ?? null) - ((($context["currentPage"] ?? null) + 1) * ($context["numItemsPerPage"] ?? null))),  -($context["numItemsPerPage"] ?? null)))) {
            // line 28
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements", ["currentPage" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
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
        return array (  127 => 35,  118 => 29,  115 => 28,  112 => 27,  104 => 25,  101 => 24,  93 => 22,  90 => 21,  84 => 19,  81 => 18,  73 => 16,  70 => 15,  62 => 13,  59 => 12,  54 => 10,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/pagination.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/components/pagination.html.twig");
    }
}
