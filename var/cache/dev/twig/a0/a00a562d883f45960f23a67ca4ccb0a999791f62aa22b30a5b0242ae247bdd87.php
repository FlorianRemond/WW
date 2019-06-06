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
        echo "Page Administrateur<br>
";
        // line 2
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

        // line 3
        echo "liste des gestionnaires<br>
    <table>
            <tr >
                <th>Nom</th>
            <tr>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gestionnaires"]) || array_key_exists("gestionnaires", $context) ? $context["gestionnaires"] : (function () { throw new RuntimeError('Variable "gestionnaires" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["gestionnaire"]) {
            // line 9
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "getNom", [], "method", false, false, false, 9), "html", null, true);
            echo "</td>
                <td> <a> Suppression d'un gestionnaire en base</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['gestionnaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </table>
<br>

<a href=\"pageGestionnaireInsert\">suppression ou gestionnaire</a><br>

liste des techniciens<br>

    <table>
        <tr >
            <th>Nom</th>
        <tr>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["techniciens"]) || array_key_exists("techniciens", $context) ? $context["techniciens"] : (function () { throw new RuntimeError('Variable "techniciens" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["technicien"]) {
            // line 25
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "getNom", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
            <td><a> Suppression d'un technicien en base</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['technicien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
    <br>

<a href=\"pageTechnicienInsert\">suppression ou ajout tech</a><br>
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
        return array (  116 => 29,  105 => 25,  101 => 24,  88 => 13,  77 => 9,  73 => 8,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Page Administrateur<br>
{% block body %}
liste des gestionnaires<br>
    <table>
            <tr >
                <th>Nom</th>
            <tr>
                {% for key,gestionnaire in gestionnaires %}
                <td>{{ gestionnaire.getNom() }}</td>
                <td> <a> Suppression d'un gestionnaire en base</a></td>
            </tr>
        {% endfor %}
    </table>
<br>

<a href=\"pageGestionnaireInsert\">suppression ou gestionnaire</a><br>

liste des techniciens<br>

    <table>
        <tr >
            <th>Nom</th>
        <tr>
            {% for key,technicien in techniciens %}
            <td>{{ technicien.getNom() }}</td>
            <td><a> Suppression d'un technicien en base</a></td>
        </tr>
        {% endfor %}
    </table>
    <br>

<a href=\"pageTechnicienInsert\">suppression ou ajout tech</a><br>
{% endblock %}", "pageAdmin.html.twig", "C:\\xampp\\htdocs\\PHP\\Projet perso\\WW\\app\\Resources\\views\\pageAdmin.html.twig");
    }
}
