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

/* admin/extend_admin/base.html.twig */
class __TwigTemplate_e9e833cc967fdd9de8d48f6f522a7a0eb50927408baea883ffd22ce42abd9b7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        <header class=\"main-header\">
            <div class=\"bg-color\"></div>
            <nav class=\"custom-container container-fluid main-nav navbar navbar-expand-xl\">
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"navbar-brand d-flex align-items-center text-decoration-none\">
                    <img class=\"img-responsive\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/logo-header.svg"), "html", null, true);
        echo "\">
                </a>
                <div class=\"d-flex ms-auto\">
                    <a class=\"btn black-btn mx-2 rounded-0\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">RETOUR</a>
                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                    <a class=\"btn white-btn mx-2 rounded-0 d-xl-none\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >DÉCONNEXION</a>
                    <div class=\"dropdown d-none d-xl-block\">
                        <button class=\"btn dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa-solid fa-user-large\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"dropdownMenuButton\">
                            <li><p class=\"dropdown-item disabled\">Connecté en tant que : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
            echo "</p></li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                        </ul>
                    </div>
                    ";
        }
        // line 39
        echo "                </div>
            </nav>
        </header>

        <main class=\"custom-container container-fluid\">
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "        </main>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "MemoireAstrolabe";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
            ";
        // line 15
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("jquery");
        echo "
        ";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/extend_admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  151 => 15,  146 => 14,  142 => 13,  135 => 10,  131 => 9,  124 => 5,  117 => 45,  115 => 44,  108 => 39,  101 => 35,  97 => 34,  87 => 28,  85 => 27,  81 => 26,  75 => 23,  71 => 22,  64 => 17,  62 => 13,  59 => 12,  57 => 9,  53 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/extend_admin/base.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/admin/extend_admin/base.html.twig");
    }
}
