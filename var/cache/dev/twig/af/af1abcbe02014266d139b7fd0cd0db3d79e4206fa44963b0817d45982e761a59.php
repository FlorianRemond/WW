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

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTechnicien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageTechnicien.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageTechnicien.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "Page Technicien

Liste des opérations<br>
<table>
    <tr >
        <td>Sujet</td>
        <td>Date de début d'intervention</td>
        <td>Date de fin d'intervention</td>
        <td>Description de l'intervention</td>
        <td>Pièce</td>
        <td>Note du technicien</td>

    <tr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["operation"]) {
            // line 17
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getSujet", [], "method", false, false, false, 17), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateDebut", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateFin", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDescription", [], "method", false, false, false, 20), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getPiece", [], "method", false, false, false, 21), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getNoteTech", [], "method", false, false, false, 22), "html", null, true);
            echo "</td>
        <td> <a class=\"btn btn-danger\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" role=\"button\"> Suppression d'une opération en base</a></td>
        <td><a class=\"btn btn-danger\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" role=\"button\"> Sélection d'une opération en base</a>

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["vehicule"]) {
            // line 40
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getType", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getdateAchat", [], "any", false, false, false, 41), "d/m/Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getOperation", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getProbleme", [], "method", false, false, false, 43), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</table>

<a href=\"tdb\"> Retour au tableau de bord</a><br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  165 => 46,  156 => 43,  152 => 42,  148 => 41,  143 => 40,  139 => 39,  126 => 28,  116 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  87 => 17,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
Page Technicien

Liste des opérations<br>
<table>
    <tr >
        <td>Sujet</td>
        <td>Date de début d'intervention</td>
        <td>Date de fin d'intervention</td>
        <td>Description de l'intervention</td>
        <td>Pièce</td>
        <td>Note du technicien</td>

    <tr>
        {% for key,operation in operations %}
        <td>{{ operation.getSujet() }}</td>
        <td>{{ operation.getDateDebut | date (\"d/m/Y\") }}</td>
        <td>{{ operation.getDateFin | date (\"d/m/Y\") }}</td>
        <td>{{ operation.getDescription() }}</td>
        <td>{{ operation.getPiece() }}</td>
        <td>{{ operation.getNoteTech() }}</td>
        <td> <a class=\"btn btn-danger\" href=\"{{ path('operation_remove_id', {'id': operation.id} ) }}\" role=\"button\"> Suppression d'une opération en base</a></td>
        <td><a class=\"btn btn-danger\" href=\"{{ path('operation_edit', {'id': operation.id} ) }}\" role=\"button\"> Sélection d'une opération en base</a>

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
{% endblock %}
", "pageTechnicien.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageTechnicien.html.twig");
    }
}
