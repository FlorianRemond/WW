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

/* pageAdmin.html.twig */
class __TwigTemplate_a350d4d0977d62c99ad4e18cfa98cde6faea2cb8ce662dfc60ed493ded8e4c75 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageAdmin.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "Page Administrateur<br>
Liste des gestionnaires<br>
    <table>
            <tr >
                <th>Nom</th>
                <th>Prénom</th>
            <tr>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gestionnaires"]) || array_key_exists("gestionnaires", $context) ? $context["gestionnaires"] : (function () { throw new RuntimeError('Variable "gestionnaires" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["gestionnaire"]) {
            // line 10
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "getNom", [], "method", false, false, false, 10), "html", null, true);
            echo "</td>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "getPrenom", [], "method", false, false, false, 11), "html", null, true);
            echo "</td>
            <td> <a class=\"btn btn-danger\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionnaire_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" role=\"button\"> Suppression d'un gestionnaire en base</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['gestionnaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </table>
<br>

<a href=\"pageGestionnaireInsert\">  Ajout d'un gestionnaire</a><br>

Liste des techniciens<br>
    <table>
        <tr >
            <th>Nom</th>
            <th>Prénom</th>
        <tr>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["techniciens"]) || array_key_exists("techniciens", $context) ? $context["techniciens"] : (function () { throw new RuntimeError('Variable "techniciens" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["technicien"]) {
            // line 27
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "getNom", [], "method", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "getPrenom", [], "method", false, false, false, 28), "html", null, true);
            echo "</td>
            <td> <a class=\"btn btn-danger\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technicien_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["technicien"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" role=\"button\"> Suppression d'un techncien en base</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['technicien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </table>
    <br>
<a href=\"pageTechnicienInsert\">  Ajout d'un technicien tech</a><br>
<a href=\"tdb\">Retour au tableau de bord</a><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pageAdmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  120 => 29,  116 => 28,  111 => 27,  107 => 26,  94 => 15,  85 => 12,  81 => 11,  76 => 10,  72 => 9,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
Page Administrateur<br>
Liste des gestionnaires<br>
    <table>
            <tr >
                <th>Nom</th>
                <th>Prénom</th>
            <tr>
                {% for key,gestionnaire in gestionnaires %}
                <td>{{ gestionnaire.getNom() }}</td>
                <td>{{ gestionnaire.getPrenom() }}</td>
            <td> <a class=\"btn btn-danger\" href=\"{{ path('gestionnaire_remove_id', {'id': gestionnaire.id} ) }}\" role=\"button\"> Suppression d'un gestionnaire en base</a></td>
            </tr>
        {% endfor %}
    </table>
<br>

<a href=\"pageGestionnaireInsert\">  Ajout d'un gestionnaire</a><br>

Liste des techniciens<br>
    <table>
        <tr >
            <th>Nom</th>
            <th>Prénom</th>
        <tr>
            {% for key,technicien in techniciens %}
            <td>{{ technicien.getNom() }}</td>
            <td>{{ technicien.getPrenom() }}</td>
            <td> <a class=\"btn btn-danger\" href=\"{{ path('technicien_remove_id', {'id': technicien.id} ) }}\" role=\"button\"> Suppression d'un techncien en base</a></td>
        </tr>
        {% endfor %}
    </table>
    <br>
<a href=\"pageTechnicienInsert\">  Ajout d'un technicien tech</a><br>
<a href=\"tdb\">Retour au tableau de bord</a><br>

{% endblock %}", "pageAdmin.html.twig", "C:\\xampp\\htdocs\\PHP\\Projet perso\\WW\\app\\Resources\\views\\pageAdmin.html.twig");
    }
}
