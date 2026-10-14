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

/* admin/extend_admin/donnees.html.twig */
class __TwigTemplate_0df82f25007c72ef441314cb7593b4ba2a2295aafb51c470cf90e43c65100bdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'head_javascript' => [$this, 'block_head_javascript'],
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
        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/extend_admin/donnees.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
    ";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("apiHeedscss");
        echo "
    ";
        // line 6
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("dropifycss");
        echo "
";
    }

    // line 9
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->displayParentBlock("head_javascript", $context, $blocks);
        echo "
    ";
        // line 11
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("admin-apiHeeds");
        echo "
    ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("dropify");
        echo "
      <script>
        var routeAddCsv = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("heeds_csv_import")), "html", null, true);
        echo "\";
    </script>
";
    }

    // line 18
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<title>Import Heeds - MemoireAstrolabe</title>";
    }

    // line 22
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "<div class=\"custom-container\">
    <h2 class=\"text-center mb-3\">Ajout de données</h2>
    <div id=\"heeds_form\" class=\"d-flex flex-column justify-content-center align-items-center\">
        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/base_donnees.png"), "html", null, true);
        echo "\" class=\"img-bd mx-2\" alt=\"Icône base de données\">
        <p>L'ajout de données requiert un fichier d'export CSV au format \"programmation\"</p>
      ";
        // line 45
        echo "        <div class=\"col-6\">
            <input type=\"file\" class=\"dropify\" data-allowed-file-extensions=\"csv\"  accept=\".csv\"/>
        </div>
        <div class=\"m-2\">
            <button type=\"button\" disabled class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">Récupérer les données</button>
        </div>
    </div>
    
    <div class=\"d-flex justify-content-center d-none\" id=\"spinner\">
        <div class=\"spinner-border text-light\" role=\"status\">
            <span class=\"visually-hidden\">Loading...</span>
        </div>
    </div>
   
</div>


<div class=\"modal fade\" id=\"staticBackdrop\" data-bs-backdrop=\"static\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Ajout de nouvelles données</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p class=\"text-danger\">L'ajout de nouvelles données fait appel à l'application Heeds. En continuant, vous vous engagez à ne pas utiliser à tort et à travers cette fonctionnalité.</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" id=\"getData\" data-bs-dismiss=\"modal\">Continuer</button>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/extend_admin/donnees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  110 => 26,  105 => 23,  101 => 22,  97 => 19,  93 => 18,  86 => 14,  81 => 12,  77 => 11,  72 => 10,  68 => 9,  62 => 6,  58 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/extend_admin/donnees.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/admin/extend_admin/donnees.html.twig");
    }
}
