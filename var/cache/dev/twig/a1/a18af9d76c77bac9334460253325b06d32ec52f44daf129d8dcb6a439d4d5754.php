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

/* pageVehiculeId.html.twig */
class __TwigTemplate_a91a829abdcbac7d292a3865df9f66d9cc031578ab6ab75051fc12e4df4d0186 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageVehiculeId.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageVehiculeId.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageVehiculeId.html.twig", 1);
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
                    <a class=\"nav-link\" href=";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tdb");
        echo ">Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
             </ul>
        </div>
    </nav>
<h1>Le véhicule ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 13, $this->source); })()), "getType", [], "method", false, false, false, 13), "html", null, true);
        echo " est sélectionné : </h1>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Date d'achat</th>
            <th scope=\"col\">Opération</th>
            <th scope=\"col\">Problème</th>
        </tr>
        <tr class=\"table-light\">
            <th scope=\"row\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 23, $this->source); })()), "getType", [], "method", false, false, false, 23), "html", null, true);
        echo "</th>
            <td>C";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 24, $this->source); })()), "getDateAchat", [], "method", false, false, false, 24), "d/m/Y"), "html", null, true);
        echo "</td>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 25, $this->source); })()), "getOperation", [], "method", false, false, false, 25), "html", null, true);
        echo "</td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["vehicule"]) || array_key_exists("vehicule", $context) ? $context["vehicule"] : (function () { throw new RuntimeError('Variable "vehicule" does not exist.', 26, $this->source); })()), "getProbleme", [], "method", false, false, false, 26), "html", null, true);
        echo "</td>
        </tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pageVehiculeId.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  104 => 25,  100 => 24,  96 => 23,  83 => 13,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
             <ul class=\"navbar-nav mr-auto\">
                 <li class=\"nav-item active\">
                    <a class=\"nav-link\" href={{ path('tdb') }}>Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
             </ul>
        </div>
    </nav>
<h1>Le véhicule {{ vehicule.getType() }} est sélectionné : </h1>
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th scope=\"col\">Type</th>
            <th scope=\"col\">Date d'achat</th>
            <th scope=\"col\">Opération</th>
            <th scope=\"col\">Problème</th>
        </tr>
        <tr class=\"table-light\">
            <th scope=\"row\">{{ vehicule.getType() }}</th>
            <td>C{{ vehicule.getDateAchat()| date('d/m/Y') }}</td>
            <td>{{ vehicule.getOperation() }}</td>
            <td>{{ vehicule.getProbleme()  }}</td>
        </tr>
{% endblock %}", "pageVehiculeId.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageVehiculeId.html.twig");
    }
}
