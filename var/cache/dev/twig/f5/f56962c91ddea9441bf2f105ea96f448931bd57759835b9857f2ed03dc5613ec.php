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

/* pageVehiculeInsert.html.twig */
class __TwigTemplate_07eeb6a707de3fed04af1cc3da6c03c028120b48c033d82f9bd79b8304d29e95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageVehiculeInsert.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageVehiculeInsert.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pageVehiculeInsert.html.twig", 1);
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
        echo " ";
        // line 4
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tdb");
        echo ">Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageGestionnaire");
        echo ">Gestionnaire</a>
                </li>
            </ul>
        </div>
    </nav>
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formVehicule"]) || array_key_exists("formVehicule", $context) ? $context["formVehicule"] : (function () { throw new RuntimeError('Variable "formVehicule" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVehicule"]) || array_key_exists("formVehicule", $context) ? $context["formVehicule"] : (function () { throw new RuntimeError('Variable "formVehicule" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18), 'row');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVehicule"]) || array_key_exists("formVehicule", $context) ? $context["formVehicule"] : (function () { throw new RuntimeError('Variable "formVehicule" does not exist.', 19, $this->source); })()), "dateAchat", [], "any", false, false, false, 19), 'row');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVehicule"]) || array_key_exists("formVehicule", $context) ? $context["formVehicule"] : (function () { throw new RuntimeError('Variable "formVehicule" does not exist.', 20, $this->source); })()), "operation", [], "any", false, false, false, 20), 'row');
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVehicule"]) || array_key_exists("formVehicule", $context) ? $context["formVehicule"] : (function () { throw new RuntimeError('Variable "formVehicule" does not exist.', 21, $this->source); })()), "probleme", [], "any", false, false, false, 21), 'row');
        echo "
    <input type=\"submit\" value = \"Enregistrer le véhicule\" />
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formVehicule"]) || array_key_exists("formVehicule", $context) ? $context["formVehicule"] : (function () { throw new RuntimeError('Variable "formVehicule" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pageVehiculeInsert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  107 => 21,  103 => 20,  99 => 19,  95 => 18,  91 => 17,  83 => 12,  77 => 9,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
 {#affichage des champs du formulaire un par un grace à la variable formTechnicien#}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href={{ path('tdb') }}>Tableau de bord <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href={{ path('pageGestionnaire') }}>Gestionnaire</a>
                </li>
            </ul>
        </div>
    </nav>
{{ form_start (formVehicule) }}
    {{ form_row (formVehicule.type) }}
    {{ form_row (formVehicule.dateAchat) }}
    {{ form_row (formVehicule.operation) }}
    {{ form_row (formVehicule.probleme) }}
    <input type=\"submit\" value = \"Enregistrer le véhicule\" />
{{ form_end (formVehicule) }}

{% endblock %}
", "pageVehiculeInsert.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\pageVehiculeInsert.html.twig");
    }
}
