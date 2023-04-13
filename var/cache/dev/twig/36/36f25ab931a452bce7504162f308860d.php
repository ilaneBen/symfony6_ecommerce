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

/* burgers/index.html.twig */
class __TwigTemplate_c9988d8b84cd51a136eeca9676642cb5 extends Template
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
        // line 35
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "burgers/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "burgers/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "burgers/index.html.twig", 35);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "   
    <h1 class='original mb-2'>Nos Burgers</h1>
<section class=\"container\">
 
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["burgers"]) || array_key_exists("burgers", $context) ? $context["burgers"] : (function () { throw new RuntimeError('Variable "burgers" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["burger"]) {
            // line 10
            echo "     <div class=\"form \">
    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["burger"], "photo", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"Card image cap\">
    
    <h3> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["burger"], "nom", [], "any", false, false, false, 13), "html", null, true);
            echo "</h3>
    
    <p> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["burger"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
    <p> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["burger"], "prix", [], "any", false, false, false, 16), "html", null, true);
            echo "€</p>
    
    <p>
        <a class='btn btn-danger' href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["burger"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Ajouter</a>
        <a class='btn btn-danger' href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_show", ["id" => twig_get_attribute($this->env, $this->source, $context["burger"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">show</a>
        <a class='btn btn-danger' href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["burger"], "id", [], "any", false, false, false, 21)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['burger'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    
 <div class='card'>
              <a class='btn btn-danger' href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_new");
        echo "\">Nouveau Burger</a>
</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "burgers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 31,  148 => 29,  139 => 25,  130 => 21,  126 => 20,  122 => 19,  116 => 16,  112 => 15,  107 => 13,  102 => 11,  99 => 10,  94 => 9,  88 => 5,  78 => 4,  59 => 2,  36 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block title %}Burgers index{% endblock %}

{% block body %}
   
    <h1 class='original mb-2'>Nos Burgers</h1>
<section class=\"container\">
 
        {% for burger in burgers %}
     <div class=\"form \">
    <img src=\"{{ burger.photo }}\" alt=\"Card image cap\">
    
    <h3> {{ burger.nom }}</h3>
    
    <p> {{ burger.description }}</p>
    <p> {{ burger.prix }}€</p>
    
    <p>
        <a class='btn btn-danger' href=\"{{ path('cart_add', {'id': burger.id}) }}\">Ajouter</a>
        <a class='btn btn-danger' href=\"{{ path('app_burgers_show', {'id': burger.id}) }}\">show</a>
        <a class='btn btn-danger' href=\"{{ path('app_burgers_edit', {'id': burger.id}) }}\">Modifier</a>
    </p>
   </div>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
    
 <div class='card'>
              <a class='btn btn-danger' href=\"{{ path('app_burgers_new') }}\">Nouveau Burger</a>
</div>
</section>
{% endblock %}
{% extends 'base.html.twig' %}", "burgers/index.html.twig", "C:\\Users\\i\\symfony_site\\templates\\burgers\\index.html.twig");
    }
}
