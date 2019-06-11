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
class __TwigTemplate_6c3312719c529d0805b2d4e91dc7049d3c06e3fa129d0998727e4b0bd331e4a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageAdmin.html.twig", 1);
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
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href=";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tdb");
        echo ">Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAdmin");
        echo ">Administrateur</a>
                </li>
            </ul>
        </div>
    </nav>
<div align=\"center\" ><h2 >Page Administrateur</h2></div><br>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
               <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item \">
                    <a class=\"nav-link\" href= ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageGestionnaire_Insert");
        echo ">Ajout d'un gestionnaire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href= ";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageTechnicien_insert");
        echo ">Ajout d'un technicien</a>
                </li>
            </ul>
        </div>
    </nav>

    <h5 style=\"text-decoration:underline\">Liste des gestionnaires : </h5>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\"> Nom </th>
                <th scope=\"col\">Prénom</th>
             </tr>
        </thead>
        <tbody>

                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gestionnaires"]) || array_key_exists("gestionnaires", $context) ? $context["gestionnaires"] : (function () { throw new RuntimeError('Variable "gestionnaires" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["gestionnaire"]) {
            // line 43
            echo "            <tr>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "getNom", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "getPrenom", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestionnaire_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["gestionnaire"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Supprimer</a></td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['gestionnaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
<br>

 <h5 style=\"text-decoration:underline\">Liste des techniciens : </h5><br>
  <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\"> Nom </th>
                <th scope=\"col\">Prénom</th>
            </tr>
        </thead>
        <tbody>

                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["techniciens"]) || array_key_exists("techniciens", $context) ? $context["techniciens"] : (function () { throw new RuntimeError('Variable "techniciens" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["technicien"]) {
            // line 64
            echo "            <tr>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "getNom", [], "method", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "getPrenom", [], "method", false, false, false, 66), "html", null, true);
            echo "</td>
                <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technicien_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["technicien"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Supprimer</a></td>
            </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['technicien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
  <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pageAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 70,  176 => 67,  172 => 66,  168 => 65,  165 => 64,  161 => 63,  145 => 49,  136 => 46,  132 => 45,  128 => 44,  125 => 43,  121 => 42,  102 => 26,  96 => 23,  81 => 11,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item \">
                    <a class=\"nav-link\" href={{ path ('tdb') }}>Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href={{ path ('pageAdmin') }}>Administrateur</a>
                </li>
            </ul>
        </div>
    </nav>
<div align=\"center\" ><h2 >Page Administrateur</h2></div><br>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
               <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">

                <li class=\"nav-item \">
                    <a class=\"nav-link\" href= {{ path('pageGestionnaire_Insert') }}>Ajout d'un gestionnaire</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href= {{ path ('pageTechnicien_insert') }}>Ajout d'un technicien</a>
                </li>
            </ul>
        </div>
    </nav>

    <h5 style=\"text-decoration:underline\">Liste des gestionnaires : </h5>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\"> Nom </th>
                <th scope=\"col\">Prénom</th>
             </tr>
        </thead>
        <tbody>

                {% for key,gestionnaire in gestionnaires %}
            <tr>
                <td>{{ gestionnaire.getNom() }}</td>
                <td>{{ gestionnaire.getPrenom() }}</td>
                <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"{{ path('gestionnaire_remove_id', {'id': gestionnaire.id} ) }}\">Supprimer</a></td>
            </tr>
                {% endfor %}
        </tbody>
    </table>
<br>

 <h5 style=\"text-decoration:underline\">Liste des techniciens : </h5><br>
  <table class=\"table table-hover\">
        <thead>
            <tr>
                <th scope=\"col\"> Nom </th>
                <th scope=\"col\">Prénom</th>
            </tr>
        </thead>
        <tbody>

                {% for key,technicien in techniciens %}
            <tr>
                <td>{{ technicien.getNom() }}</td>
                <td>{{ technicien.getPrenom() }}</td>
                <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"{{ path('technicien_remove_id', {'id': technicien.id} ) }}\">Supprimer</a></td>
            </tr>
                {% endfor %}
        </tbody>
    </table>
  <br>
{% endblock %}", "pageAdmin.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageAdmin.html.twig");
    }
}
