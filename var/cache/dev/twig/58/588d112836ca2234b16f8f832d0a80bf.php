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

/* profile/profil.html.twig */
class __TwigTemplate_84d460161b7cca1e219997c9bf95c704 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <section class=\"vh-100\" style=\"background-color: #f4f5f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-lg-6 mb-4 mb-lg-0\">
        <div class=\"card mb-3\" style=\"border-radius: .5rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-4 gradient-custom text-center text-white\"
              style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">
              <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp\"
                alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class=\"far fa-edit mb-5\"></i>
            </div>
            <div class=\"col-md-8\">
              <div class=\"card-body p-4\">
                <h6>Information</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
        echo " </p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Phone</h6>
                    <p class=\"text-muted\">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Recent</h6>
                    <p class=\"text-muted\">Lorem ipsum</p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Most Viewed</h6>
                    <p class=\"text-muted\">Dolor sit amet</p>
                  </div>
                </div>
                <div class=\"d-flex justify-content-start\">
                  <a href=\"#!\"><i class=\"fab fa-facebook-f fa-lg me-3\"></i></a>
                  <a href=\"#!\"><i class=\"fab fa-twitter fa-lg me-3\"></i></a>
                  <a href=\"#!\"><i class=\"fab fa-instagram fa-lg\"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <section class=\"vh-100\" style=\"background-color: #f4f5f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-lg-6 mb-4 mb-lg-0\">
        <div class=\"card mb-3\" style=\"border-radius: .5rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-4 gradient-custom text-center text-white\"
              style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">
              <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp\"
                alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class=\"far fa-edit mb-5\"></i>
            </div>
            <div class=\"col-md-8\">
              <div class=\"card-body p-4\">
                <h6>Information</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\">{{app.user.email}} </p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Phone</h6>
                    <p class=\"text-muted\">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Recent</h6>
                    <p class=\"text-muted\">Lorem ipsum</p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Most Viewed</h6>
                    <p class=\"text-muted\">Dolor sit amet</p>
                  </div>
                </div>
                <div class=\"d-flex justify-content-start\">
                  <a href=\"#!\"><i class=\"fab fa-facebook-f fa-lg me-3\"></i></a>
                  <a href=\"#!\"><i class=\"fab fa-twitter fa-lg me-3\"></i></a>
                  <a href=\"#!\"><i class=\"fab fa-instagram fa-lg\"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}

", "profile/profil.html.twig", "C:\\Users\\i\\symfony_site\\templates\\profile\\profil.html.twig");
    }
}
