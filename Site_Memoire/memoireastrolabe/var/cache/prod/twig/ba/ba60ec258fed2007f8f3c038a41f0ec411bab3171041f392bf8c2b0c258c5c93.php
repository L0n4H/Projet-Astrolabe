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

/* form/custom_event_ressources.html.twig */
class __TwigTemplate_7cac08d95f593867b1d2d282b1be5a84808f5547e0e192a8de41d147cd893cc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_evenement_ressources_entry_row' => [$this, 'block__evenement_ressources_entry_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_evenement_ressources_entry_row', $context, $blocks);
    }

    public function block__evenement_ressources_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context);
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 4
            echo "    <li>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
 ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ressources"]) {
            // line 8
            echo "        <div class=\"col-xs-4 js-genus-scientist-item\">
            <a href=\"#\" class=\"js-remove-scientist pull-right\">
                <span class=\"fa fa-close\"></span>
            </a>
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["ressources"], 'errors');
            echo "
            ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ressources"], "titre", [], "any", false, false, false, 13), 'row');
            echo "
            ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["ressources"], "lien", [], "any", false, false, false, 14), 'row');
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ressources'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form/custom_event_ressources.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 14,  78 => 13,  74 => 12,  68 => 8,  64 => 7,  61 => 6,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form/custom_event_ressources.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/form/custom_event_ressources.html.twig");
    }
}
