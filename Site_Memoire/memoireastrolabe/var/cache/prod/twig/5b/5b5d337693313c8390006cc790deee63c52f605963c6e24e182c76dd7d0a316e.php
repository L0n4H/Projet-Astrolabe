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

/* workflow/index.html.twig */
class __TwigTemplate_422f982346fa1aa8f4c1c8959de42f6033dfe5aa9c6d1aca501144db5f9cda76 extends Template
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
        return "admin/extend_admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/extend_admin/base.html.twig", "workflow/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Création d'un Evenement - ";
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("workflowcss");
        echo "
    ";
        // line 8
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("select2css");
        echo "
    ";
        // line 9
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("progressBarcss");
        echo "
    ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dropifycss");
        echo "
    ";
        // line 11
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("formRequired");
        echo "

";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <h1 class=\"main-title text-center color-dark-green\">Création d'un événement</h1>
    <div id=\"timeLine\">
        ";
        // line 19
        $this->loadTemplate("components/progressBar.html.twig", "workflow/index.html.twig", 19)->display([]);
        // line 20
        echo "    </div>
    <div class=\"responsive-carousel d-flex align-items-center pswp-gallery\" id=\"mainSlide\">
        ";
        // line 22
        $this->loadTemplate("workflow/slides/slide1.html.twig", "workflow/index.html.twig", 22)->display($context);
        // line 23
        echo "        ";
        $this->loadTemplate("workflow/slides/slide2.html.twig", "workflow/index.html.twig", 23)->display($context);
        // line 24
        echo "        ";
        $this->loadTemplate("workflow/slides/slide3.html.twig", "workflow/index.html.twig", 24)->display($context);
        // line 25
        echo "        ";
        $this->loadTemplate("workflow/slides/slide4.html.twig", "workflow/index.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
    <div id=\"afterMainSlide\" class=\"d-flex mx-auto justify-content-center m-3\">
        <button id=\"progress-prev\" type=\"button\" class=\"slick-btn btn btn-outline-primary m-3\">Précédent</button>
        <button id=\"progress-next\" type=\"button\" class=\"slick-btn btn btn-outline-success m-3\">Continuer</button>
    </div>
";
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 35
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("workflowjs");
        echo "
    ";
        // line 36
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("progressBarjs");
        echo "
    ";
        // line 37
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dropify");
        echo "
    <script>
        var routeAddEtiquette = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_etiquette")), "html", null, true);
        echo "\";
        var routeAddGenreMusic = \"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_genreMusical")), "html", null, true);
        echo "\";
        var routeAddTypeEvent = \"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_typeEvenement")), "html", null, true);
        echo "\";
        var routeAddLieu = \"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_lieu")), "html", null, true);
        echo "\";
        var routeAddLabel = \"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_label")), "html", null, true);
        echo "\";
        var routeAddNat = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_nationalite")), "html", null, true);
        echo "\";
        var routeAddInsrtument = \"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_instrument")), "html", null, true);
        echo "\";
        var routeAddMusicien = \"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_musicien")), "html", null, true);
        echo "\";
        var routeAddGroup = \"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_groupe")), "html", null, true);
        echo "\";
        var routeVerifEvent = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verif_evenement")), "html", null, true);
        echo "\";
        var routeVerifPassage = \"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verif_passage")), "html", null, true);
        echo "\";
        var routeVerifMedia = \"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verif_ressource")), "html", null, true);
        echo "\";
        var routeAddEvent = \"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_event")), "html", null, true);
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "workflow/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 51,  189 => 50,  185 => 49,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  165 => 44,  161 => 43,  157 => 42,  153 => 41,  149 => 40,  145 => 39,  140 => 37,  136 => 36,  132 => 35,  127 => 34,  123 => 33,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  103 => 22,  99 => 20,  97 => 19,  93 => 17,  89 => 16,  82 => 11,  78 => 10,  74 => 9,  70 => 8,  66 => 7,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workflow/index.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/index.html.twig");
    }
}
