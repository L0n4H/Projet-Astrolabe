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

/* admin/dashboard.html.twig */
class __TwigTemplate_f0e353d3197a558a754f925313bf6ebe08bc48b2820de51cf713be0dc13480bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'page_content' => [$this, 'block_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["url_evenement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\EvenementCrudController"], "method", false, false, false, 3), "setAction", [0 => "index"], "method", false, false, false, 3);
        // line 4
        $context["url_groupe"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\GroupeCrudController"], "method", false, false, false, 4), "setAction", [0 => "index"], "method", false, false, false, 4);
        // line 5
        $context["url_musique"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\GenreMusicalCrudController"], "method", false, false, false, 5), "setAction", [0 => "index"], "method", false, false, false, 5);
        // line 6
        $context["url_ressource"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\RessourceCrudController"], "method", false, false, false, 6), "setAction", [0 => "index"], "method", false, false, false, 6);
        // line 7
        $context["url_admin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setController", [0 => "App\\Controller\\Admin\\UserCrudController"], "method", false, false, false, 7), "setAction", [0 => "index"], "method", false, false, false, 7);
        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<title>Administration - MemoireAstrolabe</title>";
    }

    // line 13
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<h1 class=\"text-center mb-5\">Administration</h1>
<div class=\"custom-container row w-100 m-0\">
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["url_evenement"] ?? null), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/evenement.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Événement
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["url_groupe"] ?? null), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/groupe.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Groupe
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["url_musique"] ?? null), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/musique.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Musique
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["url_ressource"] ?? null), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/ressources.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Médias
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class=\"card col-12 col-sm-6 col-lg-4 g-0 custom-card\">
        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["url_admin"] ?? null), "html", null, true);
        echo "\" class=\"h-100 w-100\">
            <div style=\"background-image: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/administration.png"), "html", null, true);
        echo ")\" class=\"thumbnail-img h-100 w-100\">
                <div class=\"black-bg\">
                    <div class=\"text\">
                        Administration
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<hr class=\"mt-3\">
<p class=\"mb-0 text-center text-muted\">Projet réalisé dans le cadre d'un projet tutoré à l'IUT d'Orléans en Licence Professionnelle.</p>
<ul class=\"d-flex navbar-nav flex-wrap flex-row justify-content-center\">
    <li class=\"nav-item mx-2\">
        <a class=\"nav-link text-muted\" href=\"https://gitlab.com/nicotoine\">@Nicolas Devos</a>
    </li>
    <li class=\"nav-item mx-2\">
        <a class=\"nav-link text-muted\" href=\"https://gitlab.com/526f6d6172696e\">@Romain Durand</a>
    </li>
    <li class=\"nav-item mx-2\">
        <a class=\"nav-link text-muted\" href=\"https://gitlab.com/elieplr\">@Elie Plouy-Rossard</a>
    </li>
    <li class=\"nav-item mx-2\">
        <a class=\"nav-link text-muted\" href=\"https://gitlab.com/kevintld\">@Kevin Talland</a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  143 => 61,  130 => 51,  126 => 50,  113 => 40,  109 => 39,  96 => 29,  92 => 28,  79 => 18,  75 => 17,  70 => 14,  66 => 13,  62 => 10,  58 => 9,  53 => 1,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/dashboard.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/admin/dashboard.html.twig");
    }
}
