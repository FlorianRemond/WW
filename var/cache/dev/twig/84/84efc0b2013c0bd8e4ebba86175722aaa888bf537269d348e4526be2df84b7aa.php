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

/* pageGestionnaire.html.twig */
class __TwigTemplate_f20fc8c6e8360801e45bc02f30eebab220aa4981f8355328dc6546d4701c1303 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageGestionnaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageGestionnaire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageGestionnaire.html.twig", 1);
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
                    <a class=\"nav-link\" href=";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageGestionnaire");
        echo ">Gestionnaire</a>
                </li>
            </ul>
        </div>
    </nav>

    <div align=\"center\" ><h2 >Page Gestionnaire</h2></div><br>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageVehicule_insert");
        echo ">Ajout d'un véhicule</a>
                </li>
            </ul>
        </div>
    </nav>


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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["vehicule"]) {
            // line 43
            echo "            <tr>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getType", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getDateAchat", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getOperation", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getProbleme", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
            <td><a type=\"button\" class=\"btn btn-outline-info\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_view_id", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Visualiser un véhicule</a></td>
            <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_remove_id", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Suppression d'un véhicule</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
    <br>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pageGestionnaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  119 => 43,  115 => 42,  91 => 21,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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
                    <a class=\"nav-link\" href={{ path('pageGestionnaire') }}>Gestionnaire</a>
                </li>
            </ul>
        </div>
    </nav>

    <div align=\"center\" ><h2 >Page Gestionnaire</h2></div><br>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href={{ path('pageVehicule_insert')}}>Ajout d'un véhicule</a>
                </li>
            </ul>
        </div>
    </nav>


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
            <tr>
            <td>{{ vehicule.getType()}}</td>
            <td>{{ vehicule.getDateAchat|date('d/m/Y') }}</td>
            <td>{{ vehicule.getOperation }}</td>
            <td>{{ vehicule.getProbleme() }}</td>
            <td><a type=\"button\" class=\"btn btn-outline-info\" href=\"{{ path('vehicule_view_id', {'id': vehicule.id} ) }}\">Visualiser un véhicule</a></td>
            <td><a type=\"button\" class=\"btn btn-outline-warning\" href=\"{{ path('vehicule_remove_id', {'id': vehicule.id} ) }}\">Suppression d'un véhicule</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <br>
    {% endblock %}








", "pageGestionnaire.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageGestionnaire.html.twig");
    }
}
