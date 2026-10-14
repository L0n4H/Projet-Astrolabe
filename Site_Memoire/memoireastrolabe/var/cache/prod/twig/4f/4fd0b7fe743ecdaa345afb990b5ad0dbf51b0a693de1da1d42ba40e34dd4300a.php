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

/* reset_password/reset.html.twig */
class __TwigTemplate_62c98c7fe3006623a4ccd651ff5446e70dafef9c15ac5ddfa92146c66a794259 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("resetcss");
        echo "
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réinitialiser le mot de passe - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<div class =\"row m-5\">
    <div class=\"col d-none d-lg-block\">
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/build/images/evenement.png"), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Responsive image\">
    </div>
    <div class=\"col-12 col-lg-6 d-flex justify-content-center \">
        <div id=\"formReset\" class=\" d-flex flex-column justify-content-center mx-auto\">
        <h1>Réinitialiser votre mot de passe</h1>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_start');
        echo " 
                <div class=\"invalid-feedback d-block\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 19), "first", [], "any", false, false, false, 19), 'errors');
        echo "
                </div>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 21), "first", [], "any", false, false, false, 21), 'label');
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), 'widget');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 23), "second", [], "any", false, false, false, 23), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["resetForm"] ?? null), "plainPassword", [], "any", false, false, false, 24), "second", [], "any", false, false, false, 24), 'widget');
        echo "

                <button class=\"btn btn-primary\">Réinitialiser</button>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["resetForm"] ?? null), 'form_end');
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "reset_password/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  92 => 19,  87 => 17,  79 => 12,  75 => 10,  71 => 9,  63 => 7,  57 => 4,  52 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "reset_password/reset.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/reset_password/reset.html.twig");
    }
}
