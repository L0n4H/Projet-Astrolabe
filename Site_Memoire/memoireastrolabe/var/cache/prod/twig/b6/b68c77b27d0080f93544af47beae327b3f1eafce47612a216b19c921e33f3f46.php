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

/* base.html.twig */
class __TwigTemplate_2a8d76c6fdc71757bf27ffd8fc0e03cf8036fde8c46bcf2be7e42483563a286a extends Template
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
                <button class=\"ms-auto navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbar\">
                    <ul class=\"ms-auto navbar-nav\">
                    <li class=\"nav-item\"><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeFront_evenements");
        echo "\" class=\"nav-link text-nowrap\">EVENEMENTS</a></li>
                    <li class=\"nav-item\"><a href=\"https://www.lastrolabe.org/agenda/\" class=\"nav-link text-nowrap\">AGENDA</a></li>
                    <li class=\"nav-item\"><a href=\"https://www.lastrolabe.org/action-culturelle/\" class=\"nav-link text-nowrap\">ACTION CULTURELLE</a></li>
                    <li class=\"nav-item\"><a href=\"https://www.lastrolabe.org/residences/\" class=\"nav-link text-nowrap\">RESIDENCES</a></li>
                    <li class=\"nav-item\"><a href=\"https://www.lastrolabe.org/astro-tv/\" class=\"nav-link text-nowrap\">ASTRO TV</a></li>
                    <li class=\"nav-item\"><a href=\"https://www.lastrolabe.org/news-blog-actus/\" class=\"nav-link text-nowrap\">ACTUALITES</a></li>
                    <li class=\"nav-item\"><a href=\"https://www.lastrolabe.org/infos-pratiques/\" class=\"nav-link text-nowrap\">INFOS PRATIQUE</a></li>
                    </ul>
                    <div class=\"d-flex logos\">
                        <a href=\"https://www.facebook.com/AstrolabeOrleans/?fref=ts\" class=\"text-nowrap mx-2 my-2\" target=\"_blank\"><i class=\"fa-brands fa-facebook-f\"></i></a>
                        <a href=\"https://twitter.com/AstroOrleans\" class=\"text-nowrap mx-2 my-2\" target=\"_blank\"><i class=\"fa-brands fa-twitter\"></i></a>
                        <a href=\"https://www.instagram.com/astrolabe_orleans/\" class=\"text-nowrap mx-2 my-2\" target=\"_blank\"><i class=\"fa-brands fa-instagram\"></i></a>
                        <a href=\"https://www.youtube.com/c/ASTROTVORLEANS\" class=\"text-nowrap mx-2 my-2\" target=\"_blank\"><i class=\"fa-brands fa-youtube\"></i></a>
                    </div>
                    <a href=\"https://www.lastrolabe.org/billetterie/\" class=\"btn black-btn mx-2 rounded-0\" target=\"_blank\">BILLETERIE</a>
                    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                    <a class=\"btn white-btn mx-2 rounded-0 d-xl-none\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >DÉCONNEXION</a>
                    <div class=\"dropdown d-none d-xl-block\">
                        <button class=\"btn dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fa-solid fa-user-large\"></i>
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"dropdownMenuButton\">
                            <li><p class=\"dropdown-item disabled\">Connecté en tant que : ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "username", [], "any", false, false, false, 52), "html", null, true);
            echo "</p></li>
                            <li><a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                        </ul>
                    </div>
                    ";
        }
        // line 57
        echo "                </div>
            </nav>
        </header>

        <main class=\"custom-container container-fluid\">
            ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        </main>

        <footer class=\"custom-container main-footer\">
            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">        
                    <div class=\"col-12 my-3 text-center col-lg-2\">
                        <h5>AU PROGRAMME</h5>
                        <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/agenda/\" class=\"nav-link p-0\" target=\"_blank\">AGENDA</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/astro-tv/\" class=\"nav-link p-0\" target=\"_blank\">TV</a></li>
                        </ul>
                    </div>
        
                    <div class=\"col-12 my-3 text-center col-lg-2\">
                        <h5>L'ASTROLABE</h5>
                        <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/action-culturelle/\" class=\"nav-link p-0\" target=\"_blank\">ACTION CULTURELLE</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/residences/\" class=\"nav-link p-0\" target=\"_blank\">RESIDENCES</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/news-blog-actus/\" class=\"nav-link p-0\" target=\"_blank\">ACTUALITES</a></li>
                        </ul>
                    </div>
        
                    <div class=\"col-12 my-3 text-center col-lg-2\">
                        <h5>RETROUVEZ-NOUS</h5>
                        <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/infos-pratiques/\" class=\"nav-link p-0\" target=\"_blank\">INFOS PRATIQUE</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"https://www.lastrolabe.org/billetterie/\" class=\"nav-link p-0\" target=\"_blank\">BILLETERIE</a></li>
                        </ul>
                    </div>
                </div>
        
                <div class=\"d-flex flex-column text-center justify-content-between mt-4\">
                    <p>ASTROLABE © TOUS DROIT RÉSERVÉS - 
                        <a class=\"text-white text-decoration-none\" href=\"https://www.lastrolabe.org/mentions-legales/\" target=\"_blank\">MENTIONS LÉGALES</a> – 
                        <a class=\"text-white text-decoration-none\" href=\"https://www.lastrolabe.org/politique-de-confidentialite/\" target=\"_blank\">POLITIQUE DE CONFIDENTIALITÉ</a>
                    </p>
                    <ul class=\"list-unstyled d-flex justify-content-center\">
                        <li class=\"mx-2 my-2\"><a href=\"https://www.facebook.com/AstrolabeOrleans/?fref=ts\" class=\"text-nowrap text-white\" target=\"_blank\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>
                        <li class=\"mx-2 my-2\"><a href=\"https://twitter.com/AstroOrleans\" class=\"text-nowrap text-white\" target=\"_blank\"><i class=\"fa-brands fa-twitter\"></i></a></li>
                        <li class=\"mx-2 my-2\"><a href=\"https://www.instagram.com/astrolabe_orleans/\" class=\"text-nowrap text-white\" target=\"_blank\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
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

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 62,  212 => 15,  207 => 14,  203 => 13,  196 => 10,  192 => 9,  185 => 5,  135 => 63,  133 => 62,  126 => 57,  119 => 53,  115 => 52,  105 => 46,  103 => 45,  85 => 30,  75 => 23,  71 => 22,  64 => 17,  62 => 13,  59 => 12,  57 => 9,  53 => 8,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/base.html.twig");
    }
}
