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

/* pageTechnicien.html.twig */
class __TwigTemplate_62894dc1d56317d827b256eafd806894959342e072b7bf547161cb3ea68f0f10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTechnicien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTechnicien.html.twig"));

        // line 1
        echo "Page Technicien

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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["operation"]) {
            // line 15
            echo "

        <td> <a class=\"btn btn-danger\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PageOperationInsert", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" role=\"button\"> Sélection d'une opération en base</a>

        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getSujet", [], "method", false, false, false, 19), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateDebut", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateFin", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDescription", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getPiece", [], "method", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getNoteTech", [], "method", false, false, false, 24), "html", null, true);
            echo "</td>
        <td> <a class=\"btn btn-danger\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" role=\"button\"> Suppression d'une opération en base</a></td>

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>
<br>
<a href=\"pageOperationInsert\">ajout</a><br>

<table>
    <tr >
        <th>Type</th>
        <th>Date d'achat du véhicule</th>
        <th>Opération en cours </th>
        <th>Problème</th>
    <tr>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["vehicule"]) {
            // line 41
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getType", [], "method", false, false, false, 41), "html", null, true);
            echo "</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getdateAchat", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getOperation", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getProbleme", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</table>

<a href=\"tdb\"> Retour au tableau de bord</a><br>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pageTechnicien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  135 => 44,  131 => 43,  127 => 42,  122 => 41,  118 => 40,  105 => 29,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  66 => 17,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Page Technicien

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


        <td> <a class=\"btn btn-danger\" href=\"{{ path('PageOperationInsert', {'id': operation.id} ) }}\" role=\"button\"> Sélection d'une opération en base</a>

        <td>{{ operation.getSujet() }}</td>
        <td>{{ operation.getDateDebut | date (\"d/m/Y\") }}</td>
        <td>{{ operation.getDateFin | date (\"d/m/Y\") }}</td>
        <td>{{ operation.getDescription() }}</td>
        <td>{{ operation.getPiece() }}</td>
        <td>{{ operation.getNoteTech() }}</td>
        <td> <a class=\"btn btn-danger\" href=\"{{ path('operation_remove_id', {'id': operation.id} ) }}\" role=\"button\"> Suppression d'une opération en base</a></td>

    </tr>
    {% endfor %}
</table>
<br>
<a href=\"pageOperationInsert\">ajout</a><br>

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

<a href=\"tdb\"> Retour au tableau de bord</a><br>

", "pageTechnicien.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageTechnicien.html.twig");
    }
}
