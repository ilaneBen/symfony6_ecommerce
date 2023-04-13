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

/* cart/index.html.twig */
class __TwigTemplate_4882689e17f60e48bb49d2015ff5f4a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class='slider_section'>
<div class=\"form1\">
    <h1>Votre panier</h1>
  <table class='table'>
  <thead class='text-dark'>
  <th>Produit</th>
  <th>prix</th>
  <th>Quantité</th>
  <th>total</th>
  <th>Action</th>

  </thead>
  <tbody class= \"text-light\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datapanier"]) || array_key_exists("datapanier", $context) ? $context["datapanier"] : (function () { throw new RuntimeError('Variable "datapanier" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 17
            echo "        <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "burger", [], "any", false, false, false, 18), "nom", [], "any", false, false, false, 18), "html", null, true);
            echo " </td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "burger", [], "any", false, false, false, 19), "prix", [], "any", false, false, false, 19), "html", null, true);
            echo "€ </td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantite", [], "any", false, false, false, 21) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "burger", [], "any", false, false, false, 21), "prix", [], "any", false, false, false, 21)), "html", null, true);
            echo "€</td>
        <td>
        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "burger", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class='btn btn-primary'>+</a>
        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "burger", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class='btn btn-warning'>-</a>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "burger", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class='btn btn-danger'>Supprimer</a>
        </td>
        </tr>


      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <tr>
        <td colspan='5' class='text-center'> votre panier est vide
        </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </tbody>
  <tfoot>
  <tr class='text-light'>
     <td colspan=\"3\">Total</td>
     <td class=\"text-end\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "€</td>
     <td colspan=\"3\"></td>
  </tr>
  </tfoot>
  </table>
  ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "     <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
            echo "\" class=\"btn btn-primary mb-2\">Commander</a>
     ";
        } else {
            // line 48
            echo "     <a class=\"btn btn-primary mb-2\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" >Commander </a>
  ";
        }
        // line 50
        echo "  
    </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  159 => 48,  153 => 46,  151 => 45,  143 => 40,  137 => 36,  127 => 31,  116 => 25,  112 => 24,  108 => 23,  103 => 21,  99 => 20,  95 => 19,  91 => 18,  88 => 17,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<section class='slider_section'>
<div class=\"form1\">
    <h1>Votre panier</h1>
  <table class='table'>
  <thead class='text-dark'>
  <th>Produit</th>
  <th>prix</th>
  <th>Quantité</th>
  <th>total</th>
  <th>Action</th>

  </thead>
  <tbody class= \"text-light\">
      {% for element in datapanier %}
        <tr>
        <td>{{element.burger.nom}} </td>
        <td>{{element.burger.prix}}€ </td>
        <td>{{element.quantite}}</td>
        <td>{{element.quantite * element.burger.prix}}€</td>
        <td>
        <a href=\"{{path('cart_add', {'id':element.burger.id}) }}\" class='btn btn-primary'>+</a>
        <a href=\"{{path('cart_remove', {'id':element.burger.id}) }}\" class='btn btn-warning'>-</a>
        <a href=\"{{path('cart_delete', {'id':element.burger.id}) }}\" class='btn btn-danger'>Supprimer</a>
        </td>
        </tr>


      {% else %}
        <tr>
        <td colspan='5' class='text-center'> votre panier est vide
        </td>
        </tr>
      {% endfor %}
  </tbody>
  <tfoot>
  <tr class='text-light'>
     <td colspan=\"3\">Total</td>
     <td class=\"text-end\">{{total}}€</td>
     <td colspan=\"3\"></td>
  </tr>
  </tfoot>
  </table>
  {% if app.user %}
     <a href=\"{{path('app_checkout')}}\" class=\"btn btn-primary mb-2\">Commander</a>
     {% else %}
     <a class=\"btn btn-primary mb-2\" href=\"{{ path('app_login') }}\" >Commander </a>
  {% endif %}
  
    </div>
    </section>
{% endblock %}
", "cart/index.html.twig", "C:\\Users\\i\\symfony_site\\templates\\cart\\index.html.twig");
    }
}
