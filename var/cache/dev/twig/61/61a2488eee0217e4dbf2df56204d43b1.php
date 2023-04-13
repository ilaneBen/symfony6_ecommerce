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

/* sandwichs/index.html.twig */
class __TwigTemplate_ac3ba80e26e3ab53f45c5ea84c76eb67 extends Template
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
        // line 34
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sandwichs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sandwichs/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sandwichs/index.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Burgers index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   
    <h1 class='original mb-2'>Nos Burgers</h1>

 
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sandwichs"]) || array_key_exists("sandwichs", $context) ? $context["sandwichs"] : (function () { throw new RuntimeError('Variable "sandwichs" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sandwich"]) {
            // line 9
            echo "     <div class=\"form\">
    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "photo", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"Card image cap\">
    
    <h3> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</h3>
    
    <p> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "description", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
    <p> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sandwich"], "prix", [], "any", false, false, false, 15), "html", null, true);
            echo "€</p>
    
    <p>
        <a class='btn btn-danger' href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["sandwich"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Ajouter</a>
        <a class='btn btn-danger' href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sandwichs_show", ["id" => twig_get_attribute($this->env, $this->source, $context["sandwich"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">show</a>
        <a class='btn btn-danger' href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sandwichs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["sandwich"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Modifier</a>
    </p>
    </div>
   
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sandwich'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    
 <div class='card'>
              <a class='btn btn-danger' href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sandwichs_new");
        echo "\">Nouveau sandwich</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "sandwichs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 31,  149 => 29,  140 => 25,  130 => 20,  126 => 19,  122 => 18,  116 => 15,  112 => 14,  107 => 12,  102 => 10,  99 => 9,  94 => 8,  88 => 4,  78 => 3,  59 => 1,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}Burgers index{% endblock %}

{% block body %}
   
    <h1 class='original mb-2'>Nos Burgers</h1>

 
        {% for sandwich in sandwichs %}
     <div class=\"form\">
    <img src=\"{{ sandwich.photo }}\" alt=\"Card image cap\">
    
    <h3> {{ sandwich.nom }}</h3>
    
    <p> {{ sandwich.description }}</p>
    <p> {{ sandwich.prix }}€</p>
    
    <p>
        <a class='btn btn-danger' href=\"{{ path('cart_add', {'id': sandwich.id}) }}\">Ajouter</a>
        <a class='btn btn-danger' href=\"{{ path('app_sandwichs_show', {'id': sandwich.id}) }}\">show</a>
        <a class='btn btn-danger' href=\"{{ path('app_sandwichs_edit', {'id': sandwich.id}) }}\">Modifier</a>
    </p>
    </div>
   
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
    
 <div class='card'>
              <a class='btn btn-danger' href=\"{{ path('app_sandwichs_new') }}\">Nouveau sandwich</a>
</div>
{% endblock %}
{% extends 'base.html.twig' %}
", "sandwichs/index.html.twig", "C:\\Users\\i\\symfony_site\\templates\\sandwichs\\index.html.twig");
    }
}
