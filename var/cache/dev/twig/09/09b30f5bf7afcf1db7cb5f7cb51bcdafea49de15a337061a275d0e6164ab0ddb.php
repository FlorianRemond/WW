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


Graphique des opérations<br>

Liste des opérations<br>
<table>
    <tr >
        <th>Sujet</th>
        <th>Date de début d'intervention</th>
        <th>Date de fin d'intervention</th>
        <th>Description de l'intervention</th>
        <th>Pièce</th>
        <th>Note du technicien</th>

    <tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["operation"]) {
            // line 22
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getSujet", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateDebut", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateFin", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDescription", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getPiece", [], "method", false, false, false, 26), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getNoteTech", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
<br>


<table>
    <tr >
        <th>Type</th>
        <th>Date d'achat du véhicule</th>
        <th>Opération en cours </th>
        <th>Problème</th>

    <tr>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["vehicule"]) {
            // line 43
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getType", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getdateAchat", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getOperation", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getProbleme", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tdb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 50,  130 => 46,  126 => 45,  122 => 44,  117 => 43,  113 => 42,  99 => 30,  90 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  69 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Page Tableau de bord<br>

<a href=\"pageAdmin\">Lien vers page administrateur</a><br>
<a href=\"pageGestionnaire\">Lien vers page gestionnaire</a><br>
<a href=\"pageTechnicien\">Lien vers page technicien</a><br>


Graphique des opérations<br>

Liste des opérations<br>
<table>
    <tr >
        <th>Sujet</th>
        <th>Date de début d'intervention</th>
        <th>Date de fin d'intervention</th>
        <th>Description de l'intervention</th>
        <th>Pièce</th>
        <th>Note du technicien</th>

    <tr>
        {% for key,operation in operations %}
        <td>{{ operation.getSujet() }}</td>
        <td>{{ operation.getDateDebut | date (\"d/m/Y\") }}</td>
        <td>{{ operation.getDateFin | date (\"d/m/Y\") }}</td>
        <td>{{ operation.getDescription() }}</td>
        <td>{{ operation.getPiece() }}</td>
        <td>{{ operation.getNoteTech() }}</td>
    </tr>
    {% endfor %}
</table>
<br>


<table>
    <tr >
        <th>Type</th>
        <th>Date d'achat du véhicule</th>
        <th>Opération en cours </th>
        <th>Problème</th>

    <tr>
        {% for key,vehicule in vehicules %}
        <td>{{ vehicule.getType() }}</td>
        <td>{{ vehicule.getdateAchat | date (\"d/m/Y\") }}</td>
        <td>{{ vehicule.getOperation }}</td>
        <td>{{ vehicule.getProbleme() }}</td>

    </tr>
    {% endfor %}
</table>

", "tdb.html.twig", "C:\\xampp\\htdocs\\PHP\\Projet perso\\WW\\app\\Resources\\views\\tdb.html.twig");
    }
}
