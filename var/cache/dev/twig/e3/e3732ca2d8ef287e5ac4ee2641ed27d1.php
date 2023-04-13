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

/* burgers/show.html.twig */
class __TwigTemplate_d57f44909adffbdd0cad71708133af16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "burgers/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "burgers/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "burgers/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Burgers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Burgers</h1>
                
              <div class=\"card\" style=\"width: 25rem;\";>
  <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["burger"]) || array_key_exists("burger", $context) ? $context["burger"] : (function () { throw new RuntimeError('Variable "burger" does not exist.', 9, $this->source); })()), "photo", [], "any", false, false, false, 9), "html", null, true);
        echo "\" alt=\"Card image cap\">
  <div >
    <h5 >";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["burger"]) || array_key_exists("burger", $context) ? $context["burger"] : (function () { throw new RuntimeError('Variable "burger" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        echo "</h5>
    <p >";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["burger"]) || array_key_exists("burger", $context) ? $context["burger"] : (function () { throw new RuntimeError('Variable "burger" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
  
                
                <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["burger"]) || array_key_exists("burger", $context) ? $context["burger"] : (function () { throw new RuntimeError('Variable "burger" does not exist.', 15, $this->source); })()), "prix", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
               
                <p>
                    <a class='btn btn-danger' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["burger"]) || array_key_exists("burger", $context) ? $context["burger"] : (function () { throw new RuntimeError('Variable "burger" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">edit</a>
                ";
        // line 19
        echo twig_include($this->env, $context, "burgers/_delete_form.html.twig");
        echo "</p> 
                <a class='btn btn-danger' href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_index");
        echo "\">back to list</a>
                
     </div>       
 
        
   


    
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "burgers/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 20,  118 => 19,  114 => 18,  108 => 15,  102 => 12,  98 => 11,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Burgers{% endblock %}

{% block body %}
    <h1>Burgers</h1>
                
              <div class=\"card\" style=\"width: 25rem;\";>
  <img src=\"{{ burger.photo }}\" alt=\"Card image cap\">
  <div >
    <h5 >{{ burger.nom }}</h5>
    <p >{{ burger.description }}</p>
  
                
                <p>{{ burger.prix }}</p>
               
                <p>
                    <a class='btn btn-danger' href=\"{{ path('app_burgers_edit', {'id': burger.id}) }}\">edit</a>
                {{ include('burgers/_delete_form.html.twig') }}</p> 
                <a class='btn btn-danger' href=\"{{ path('app_burgers_index') }}\">back to list</a>
                
     </div>       
 
        
   


    
      {% endblock %}

            
        

    

", "burgers/show.html.twig", "C:\\Users\\i\\symfony_site\\templates\\burgers\\show.html.twig");
    }
}
