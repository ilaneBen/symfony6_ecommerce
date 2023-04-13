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

/* includes/header.html.twig */
class __TwigTemplate_73380293a5dc981fb4e9ab8c16aafd73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "
  <div class=\"hero_area\">

    <!-- header section strats -->



<header class=\"header_section\">
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">
            <span>
              La Grilladerie
            </span>
          </a>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\"> </span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  mx-auto \">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\" >accueil </a>
              </li>
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href=";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        echo ">Menu <span class=\"sr-only\">(current)</span> </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"about.html\">Contact</a>
              </li>
              <div>
              ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                 <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" >Deconnexion </a>
              </li>
              ";
        } else {
            // line 38
            echo "              <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" >Connexion </a>
              
              ";
        }
        // line 42
        echo "             </li>
             </div>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"book.html\">Book Table</a>
              </li>
            </ul>
            <div class=\"user_option\">
            ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "               <a href= ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_index");
            echo " class=\"user_link\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a>
               <a class=\"cart_link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo "\">
            ";
        } else {
            // line 53
            echo "            <a href= ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo " class=\"user_link\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a>
             <a class=\"cart_link\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
            ";
        }
        // line 56
        echo "         
             
                
             
             
                <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 456.029 456.029\" style=\"enable-background:new 0 0 456.029 456.029;\" xml:space=\"preserve\">
                  <g>
                    <g>
                      <path d=\"M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z\" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d=\"M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z\" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d=\"M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z\" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class=\"form-inline\">
                <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
                  <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
              </form>
              <a href=\"\" class=\"order_online\">
                Commander
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 56,  132 => 54,  127 => 53,  122 => 51,  117 => 50,  115 => 49,  106 => 42,  100 => 39,  97 => 38,  91 => 35,  88 => 34,  86 => 33,  77 => 27,  71 => 24,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
  <div class=\"hero_area\">

    <!-- header section strats -->



<header class=\"header_section\">
      <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg custom_nav-container \">
          <a class=\"navbar-brand\" href=\"{{ path('app_main') }}\">
            <span>
              La Grilladerie
            </span>
          </a>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"\"> </span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav  mx-auto \">
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_main') }}\" >accueil </a>
              </li>
              <li class=\"nav-item active\">
                <a class=\"nav-link\" href={{ path('app_menu') }}>Menu <span class=\"sr-only\">(current)</span> </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"about.html\">Contact</a>
              </li>
              <div>
              {% if app.user %}
                 <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('logout') }}\" >Deconnexion </a>
              </li>
              {% else %}
              <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_login') }}\" >Connexion </a>
              
              {% endif %}
             </li>
             </div>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"book.html\">Book Table</a>
              </li>
            </ul>
            <div class=\"user_option\">
            {% if app.user %}
               <a href= {{ path('profile_index') }} class=\"user_link\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a>
               <a class=\"cart_link\" href=\"{{path('cart_index')}}\">
            {% else %}
            <a href= {{ path('app_login') }} class=\"user_link\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i></a>
             <a class=\"cart_link\" href=\"{{path('app_login')}}\">
            {% endif %}
         
             
                
             
             
                <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 456.029 456.029\" style=\"enable-background:new 0 0 456.029 456.029;\" xml:space=\"preserve\">
                  <g>
                    <g>
                      <path d=\"M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z\" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d=\"M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z\" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d=\"M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z\" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class=\"form-inline\">
                <button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
                  <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                </button>
              </form>
              <a href=\"\" class=\"order_online\">
                Commander
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>", "includes/header.html.twig", "C:\\Users\\i\\symfony_site\\templates\\includes\\header.html.twig");
    }
}
