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

/* tdb.html.twig */
class __TwigTemplate_e93920c8d5f22d8d06d55d7775fc479e0aab355aa176718a25eb9c8d318f5d86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tdb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tdb.html.twig"));

        // line 1
        echo "Page Tableau de bord<br>

<a href=\"pageAdmin\">Lien vers page administrateur</a><br>
<a href=\"pageGestionnaire\">Lien vers page gestionnaire</a><br>
<a href=\"pageTechnicien\">Lien vers page technicien</a><br>
<a href=\"pageVoiture\">Lien vers liste des voitures</a><br>
<a href=\"pageOperation\">Lien vers liste des opérations</a><br>


Liste des voitures <br>
Liste opérations en cours / à venir<br>
Graphique des opérations<br>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tdb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Page Tableau de bord<br>

<a href=\"pageAdmin\">Lien vers page administrateur</a><br>
<a href=\"pageGestionnaire\">Lien vers page gestionnaire</a><br>
<a href=\"pageTechnicien\">Lien vers page technicien</a><br>
<a href=\"pageVoiture\">Lien vers liste des voitures</a><br>
<a href=\"pageOperation\">Lien vers liste des opérations</a><br>


Liste des voitures <br>
Liste opérations en cours / à venir<br>
Graphique des opérations<br>
", "tdb.html.twig", "C:\\xampp\\htdocs\\PHP\\Projet perso\\WW\\app\\Resources\\views\\tdb.html.twig");
    }
}
