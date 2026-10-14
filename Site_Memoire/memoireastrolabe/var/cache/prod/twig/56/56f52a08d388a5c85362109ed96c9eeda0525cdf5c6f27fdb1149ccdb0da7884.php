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

/* components/progressBar.html.twig */
class __TwigTemplate_ecd3f6fdcccc7e20c4663d09e81f9c119b62e59af35e8debc1806179cd1b6848 extends Template
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
        echo "

    <div id=\"progress\">
    <div id=\"progress-bar\"></div>
    <ul id=\"progress-num\">
        <li class=\"step active\">       
            <span>Evenement</span>
        </li>
        <li class=\"step\">
            <span>Groupe</span>
        </li>
        <li class=\"step\" >
            <span>Médias</span>
        </li>
        <li class=\"step\">
            <span>Récapitulatif</span>
        </li>
    </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "components/progressBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/progressBar.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/components/progressBar.html.twig");
    }
}
