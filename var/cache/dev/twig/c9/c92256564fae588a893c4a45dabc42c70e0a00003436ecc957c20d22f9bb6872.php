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
class __TwigTemplate_6208964f6c0d0f95690f1e11115176f04df8f8049c3feb6f4a5595d6632e0fb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tdb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tdb.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tdb.html.twig", 1);
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
        echo "      <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">

          <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
              <ul class=\"navbar-nav mr-auto\">
                  <li class=\"nav-item active\">
                      <a class=\"nav-link\" href=\"tdb\">Tableau de bord <span class=\"sr-only\">(current)</span></a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"pageAdmin\">Administrateur</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"pageGestionnaire\">Gestionnaire</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"pageTechnicien\">Technicien</a>
                  </li>
              </ul>
          </div>
      </nav>

      <div align=\"center\"><h2>Tableau de bord</h2></div><br>
      <h5>Graphique des opérations : </h5><br>
      <h5>Liste des opérations : </h5><br>

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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operations"]) || array_key_exists("operations", $context) ? $context["operations"] : (function () { throw new RuntimeError('Variable "operations" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["operation"]) {
            // line 41
            echo "                <tr class=\"table-active\">
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getSujet", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateDebut", [], "any", false, false, false, 43), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDateFin", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getDescription", [], "method", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getPiece", [], "method", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["operation"], "getNoteTech", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
                 </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['operation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "           </tbody>
        </table>
      <br>

      <h5>Liste des véhicules : </h5><br>
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicules"]) || array_key_exists("vehicules", $context) ? $context["vehicules"] : (function () { throw new RuntimeError('Variable "vehicules" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["vehicule"]) {
            // line 67
            echo "          <tr class=\"table-secondary\">
              <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getType", [], "method", false, false, false, 68), "html", null, true);
            echo "</td>
              <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getDateAchat", [], "any", false, false, false, 69), "d/m/Y"), "html", null, true);
            echo "</td>
              <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getOperation", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
              <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["vehicule"], "getProbleme", [], "method", false, false, false, 71), "html", null, true);
            echo "</td>
              <td> <a class=\"btn btn-danger\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vehicule_view_id", ["id" => twig_get_attribute($this->env, $this->source, $context["vehicule"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" role=\"button\"> Sélectionner ce véhicule</a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['vehicule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </tbody>
    </table>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  193 => 75,  184 => 72,  180 => 71,  176 => 70,  172 => 69,  168 => 68,  165 => 67,  161 => 66,  143 => 50,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  111 => 41,  107 => 40,  68 => 3,  58 => 2,  35 => 1,);
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
                      <a class=\"nav-link\" href=\"pageAdmin\">Administrateur</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"pageGestionnaire\">Gestionnaire</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"pageTechnicien\">Technicien</a>
                  </li>
              </ul>
          </div>
      </nav>

      <div align=\"center\"><h2>Tableau de bord</h2></div><br>
      <h5>Graphique des opérations : </h5><br>
      <h5>Liste des opérations : </h5><br>

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
                <tr class=\"table-active\">
                    <td>{{ operation.getSujet() }}</td>
                    <td>{{ operation.getDateDebut | date (\"d/m/Y\") }}</td>
                    <td>{{ operation.getDateFin | date (\"d/m/Y\") }}</td>
                    <td>{{ operation.getDescription() }}</td>
                    <td>{{ operation.getPiece() }}</td>
                    <td>{{ operation.getNoteTech() }}</td>
                 </tr>
            {% endfor %}
           </tbody>
        </table>
      <br>

      <h5>Liste des véhicules : </h5><br>
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
              <td> <a class=\"btn btn-danger\" href=\"{{ path('vehicule_view_id', {'id': vehicule.id} ) }}\" role=\"button\"> Sélectionner ce véhicule</a></td>
          </tr>
          {% endfor %}
      </tbody>
    </table>
  {% endblock %}
", "tdb.html.twig", "C:\\xampp\\htdocs\\php\\WW\\WW\\app\\Resources\\views\\tdb.html.twig");
    }
}
