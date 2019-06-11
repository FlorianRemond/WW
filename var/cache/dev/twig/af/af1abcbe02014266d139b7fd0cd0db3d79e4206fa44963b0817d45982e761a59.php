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
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"tdb\">Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"pageTechnicien\">Technicien</a>
                </li>
            </ul>
        </div>
    </nav>

    <div align=\"center\" ><h2 >Page Technicien</h2></div><br>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"pageOperationInsert\">Ajout d'une opération</a>
                </li>
            </ul>
        </div>
    </nav>

    <h5 style=\"text-decoration:underline\">Liste des opérations : </h5><br>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Sujet</th>
            <th scope=\"col\">Date de début d'intervention</th>
            <th scope=\"col\">Date de fin d'intervention</th>
            <th scope=\"col\">Description de l'intervention</th>
            <th scope=\"col\">Pièce</th>
            <th scope=\"col\">Note du technicien</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["operation"]) {
            // line 45
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getSujet", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateDebut", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateFin", [], "any", false, false, false, 47), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDescription", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getPiece", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getNoteTech", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                <td><a type=\"button\" class=\"btn btn-outline-info\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Sélection d'une opération</a></td>
                <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operation_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["operation"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Suppression d'une opération</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
    <br>
</table>
<br>

    <h5 style=\"text-decoration:underline\">Liste des véhicules : </h5><br>
    <table class=\"table table-hover\">
        <thead>
             <tr>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Date d'achat du véhicule</th>
                <th scope=\"col\">Opération en cours</th>
                <th scope=\"col\">Problème</th>
             </tr>
        </thead>

        <tbody>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["vehicule"]) {
            // line 74
            echo "            <tr class=\"table-secondary\">
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getType", [], "method", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getDateAchat", [], "any", false, false, false, 76), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getOperation", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getProbleme", [], "method", false, false, false, 78), "html", null, true);
            echo "</td>
                <td> <a class=\"btn btn-outline-success\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_view_id", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" role=\"button\"> Sélectionner ce véhicule</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>
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
        return array (  205 => 82,  196 => 79,  192 => 78,  188 => 77,  184 => 76,  180 => 75,  177 => 74,  173 => 73,  153 => 55,  144 => 52,  140 => 51,  136 => 50,  132 => 49,  128 => 48,  124 => 47,  120 => 46,  115 => 45,  111 => 44,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"tdb\">Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"pageTechnicien\">Technicien</a>
                </li>
            </ul>
        </div>
    </nav>

    <div align=\"center\" ><h2 >Page Technicien</h2></div><br>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"pageOperationInsert\">Ajout d'une opération</a>
                </li>
            </ul>
        </div>
    </nav>

    <h5 style=\"text-decoration:underline\">Liste des opérations : </h5><br>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Sujet</th>
            <th scope=\"col\">Date de début d'intervention</th>
            <th scope=\"col\">Date de fin d'intervention</th>
            <th scope=\"col\">Description de l'intervention</th>
            <th scope=\"col\">Pièce</th>
            <th scope=\"col\">Note du technicien</th>
        </tr>
        </thead>

        <tbody>
        {% for key,operation in operations %}
                <td>{{ operation.getSujet() }}</td>
                <td>{{ operation.getDateDebut | date (\"d/m/Y\") }}</td>
                <td>{{ operation.getDateFin | date (\"d/m/Y\") }}</td>
                <td>{{ operation.getDescription() }}</td>
                <td>{{ operation.getPiece() }}</td>
                <td>{{ operation.getNoteTech() }}</td>
                <td><a type=\"button\" class=\"btn btn-outline-info\" href=\"{{ path('operation_edit', {'id': operation.id} ) }}\">Sélection d'une opération</a></td>
                <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"{{ path('operation_remove_id', {'id': operation.id} ) }}\">Suppression d'une opération</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br>
</table>
<br>

    <h5 style=\"text-decoration:underline\">Liste des véhicules : </h5><br>
    <table class=\"table table-hover\">
        <thead>
             <tr>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Date d'achat du véhicule</th>
                <th scope=\"col\">Opération en cours</th>
                <th scope=\"col\">Problème</th>
             </tr>
        </thead>

        <tbody>
        {% for key,vehicule in vehicules %}
            <tr class=\"table-secondary\">
                <td>{{ vehicule.getType()}}</td>
                <td>{{ vehicule.getDateAchat|date('d/m/Y') }}</td>
                <td>{{ vehicule.getOperation }}</td>
                <td>{{ vehicule.getProbleme() }}</td>
                <td> <a class=\"btn btn-outline-success\" href=\"{{ path('vehicule_view_id', {'id': vehicule.id} ) }}\" role=\"button\"> Sélectionner ce véhicule</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "pageTechnicien.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageTechnicien.html.twig");
    }
}
