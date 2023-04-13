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

/* registration/register.html.twig */
class __TwigTemplate_7414c438b7fcc9326ad78dd5ae49a364 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <meta charset=\"UTF-8\">
  <title>Form Design</title>
  
  
  
      <link rel=\"stylesheet\" href=\"css/style.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <body>
  <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\" ></script>
<body>


<div id=\"form\">
<div class=\"logo\">
<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/l.png"), "html", null, true);
        echo "\" alt=\"\"></a>

</div>
<div class=\"form1\">
<h3 class='mb-4'>S'inscrire</h3>
        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_start');
        echo "

        <div class= \"col mb-3\">
<div class= \"form-group\">
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
\t</div>
\t
\t\t<div class= \"col mb-3\">
<div class= \"form-group\">
\t\t\t ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "plainPassword", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
             </div>
\t</div>
\t\t\t<!-- <div class=\"pw-view\"><i class=\"fa fa-eye\"></i></div> -->
\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "agreeTerms", [], "any", false, false, false, 39), 'row');
        echo "
\t\t<div class=\"form-item\">
\t\t <button type=\"submit\" class=\"btn btn-primary mt-2\">S'inscrire</button>
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_end');
        echo "\t
    </div>
\t\t<div class=\"clear-fix\"></div>
\t\t</div>
</div>
</div>
</body>
</html>
 
    

</body>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  135 => 39,  128 => 35,  119 => 29,  112 => 25,  104 => 20,  95 => 13,  85 => 12,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
    <meta charset=\"UTF-8\">
  <title>Form Design</title>
  
  
  
      <link rel=\"stylesheet\" href=\"css/style.css\">
{% endblock %}  

  {% block body %}
    <body>
  <script src=\"http://code.jquery.com/jquery-2.1.0.min.js\" ></script>
<body>


<div id=\"form\">
<div class=\"logo\">
<img src=\"{{ asset('assets/images/l.png') }}\" alt=\"\"></a>

</div>
<div class=\"form1\">
<h3 class='mb-4'>S'inscrire</h3>
        {{ form_start(registrationForm) }}

        <div class= \"col mb-3\">
<div class= \"form-group\">
\t\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
\t</div>
\t</div>
\t
\t\t<div class= \"col mb-3\">
<div class= \"form-group\">
\t\t\t {{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control'}})}}
             </div>
\t</div>
\t\t\t<!-- <div class=\"pw-view\"><i class=\"fa fa-eye\"></i></div> -->
\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t<div class=\"form-item\">
\t\t <button type=\"submit\" class=\"btn btn-primary mt-2\">S'inscrire</button>
    {{ form_end(registrationForm) }}\t
    </div>
\t\t<div class=\"clear-fix\"></div>
\t\t</div>
</div>
</div>
</body>
</html>
 
    

</body>
  {% endblock %}








 {#{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
    <section class='form1'>
    <h1>S'inscrire</h1>

    <div class= \"form-control\">{{ form_start(registrationForm) }}
    

     <div class= \"form-control\">
   {{ form_row(registrationForm.email) }}
        </div>
  
     <div class= \"form-control\">
   {{ form_row(registrationForm.plainPassword, {
            label: 'Mot de passe'
        }) }}</div>
       <div class= \"form-control\">
 {{ form_row(registrationForm.agreeTerms) }}
 </div>

        <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
    {{ form_end(registrationForm) }}
    </section>
    
{% endblock %} #}
", "registration/register.html.twig", "C:\\Users\\i\\symfony_site\\templates\\registration\\register.html.twig");
    }
}
