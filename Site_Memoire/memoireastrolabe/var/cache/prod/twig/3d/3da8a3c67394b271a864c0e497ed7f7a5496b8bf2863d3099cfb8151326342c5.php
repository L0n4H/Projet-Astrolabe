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

/* workflow/slides/slide4.html.twig */
class __TwigTemplate_943b1b273a5a5b1614a84e216990966bfb98b4dd3158b85bca4c1a0f06e8f069 extends Template
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
        echo "<div id=\"Slide4\">
    <h2 class=\"slide-title slide-component mx-auto\" style=\"width:fit-content;\"> Récapitulatif </h2>
    <section class=\"recap\">
        <div class=\"col-lg-10 mx-auto\">
            <h4 class=\"event-title title\">Mon event</h4>
            <hr>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">A l'affiche</h5>
            <span class=\"event-image\"></span>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Type</h5>
            <span class=\"event-type\"></span>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Lieu</h5>
            <span class=\"event-lieu\"></span>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Date</h5>
            Du <span class=\"event-date-debut\"></span> au <span class=\"event-date-fin\"></span>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Genres musicaux</h5>
            <span class=\"event-genres\"></span>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Etiquettes</h5>
            <span class=\"event-etiquettes\"></span>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Description</h5>
            <fieldset class=\"event-description\">

            </fieldset>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Passages</h5>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <td>Début</td>
                        <td>Fin</td>
                        <td>Groupe</td>
                    </tr>
                </thead>
                <tbody class=\"event-passages\">
                </tbody>
            </table>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <h5 class=\"subtitle\">Ressources</h5>
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <td>Nom</td>
                        <td>Type</td>
                        <td>Etiquettes</td>
                    </tr>
                </thead>
                <tbody class=\"event-ressources\">
                    <tr>
                        <td><a href=\"base64\">Média</a></td>
                        <td>Image</td>
                        <td>Chill</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class=\"recap mt-5\">
        <div class=\"col-lg-10 mx-auto\">
            <h4 class=\"title\">Les éléments suivants ont été ajoutés :</h4>
            <hr>
        </div>
        <div class=\"col-lg-10 mx-auto\">
            <ul class=\"entities\">
                <li>Lieu : <a href=\"#\">return un url easy admin généré sur l'id de l'entité ajoutée lors de l'ajout en base</a></li>
                <li>Genre Musical : <a href=\"#\">return un url easy admin généré sur l'id de l'entité ajoutée lors de l'ajout en base</a></li>
                <li>Genre Musical : <a href=\"#\">return un url easy admin généré sur l'id de l'entité ajoutée lors de l'ajout en base</a></li>
            </ul>
        </div>
    </section>
    <div class=\"d-flex justify-content-center m-3\">
        <button type=\"button\" class=\"slick-btn btn btn-outline-primary m-3 goBack\">Précédent</button>
        <button type=\"button\" class=\"slick-btn btn btn-outline-success m-3 finalSubmit\">Valider</button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "workflow/slides/slide4.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "workflow/slides/slide4.html.twig", "/home/lastrolalx-mem/memoireastrolabe/templates/workflow/slides/slide4.html.twig");
    }
}
