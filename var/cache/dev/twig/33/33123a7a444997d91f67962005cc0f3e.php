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

/* main/index.html.twig */
class __TwigTemplate_5490fe0bffb49f9099cf3de2d58f477d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "  

  <!-- Basic -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <!-- Mobile Metas -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <!-- Site Metas -->
  <meta name=\"keywords\" content=\"\" />
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"\" />
  <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/snack/fonts/favicon.png"), "html", null, true);
        echo "\" type=\"\">

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\" />

  <!--owl slider stylesheet -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" />
  <!-- nice select  -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css\" integrity=\"sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==\" crossorigin=\"anonymous\" />
  <!-- font awesome style -->
  <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\" />

  <!-- Custom styles for this template -->
  <link href=\"css/style.css\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"css/responsive.css\" rel=\"stylesheet\" />

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "  

    <!-- end header section -->
    <!-- slider section -->
    <section class=\"slider_section \">
      <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 col-lg-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
\t\t\t\t\tLa grilladerie votre nouveau snack a ecully vous propose de la vainde cuite a la braise avec de delicieuse de frite maison decouper et cuite sur place.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Commander Maintenant
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item \">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 col-lg-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
\t\t\t\t\tLa grilladerie votre nouveau snack a ecully vous propose de la vainde cuite a la braise avec de delicieuse de frite maison decouper et cuite sur place.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Commander Maintenant
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 col-lg-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
\t\t\t\t\tLa grilladerie votre nouveau snack a ecully vous propose de la vainde cuite a la braise avec de delicieuse de frite maison decouper et cuite sur place.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_index");
        echo "\" class=\"btn1\">
                        Commander Maintenant avec le click and collect
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

 
  <!-- end food section -->

  <!-- about section -->

  <section class=\"about_section layout_padding\">
    <div class=\"container  \">

      <div class=\"row\">
        <div class=\"col-md-6 \">
          <div class=\"img-box\">
            <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/about-img.png"), "html", null, true);
        echo "\" alt=\"\">
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"detail-box\">
            <div class=\"heading_container\">
              <h2>
                La Grilladerie
              </h2>
            </div>
            <p>
              Tous nouveau concept de fast-food, nous proposons des produits de qualité premium pour une explosion de saveur. Manger est avant ou un plaisir et nous tenons a vous faire vivre une expérience de fast-food hors du commun.
            </p>
            <a href=\"\">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section class='mb-5'>
        <div class=\"heading_container heading_center psudo_white_primary mb-3\">
        <h2>
          Click and Collect
        </h2>
        </div>
        <div class=\"original\">
        <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_burgers_index");
        echo "\">
        <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/c1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
</div>
</section>
  <!-- end book section -->

  <!-- client section -->

      <div class=\"heading_container heading_center psudo_white_primary mb-3\">
        <h2 class=\"mb_3\">
         Nos contacts
        </h2>
      </div>
              <div class=\"maps\">
                
                 <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2782.2461632572085!2d4.790561300000001!3d45.786295869307786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebeec2b9f47b%3A0xe87f06f648cb2f8e!2sLa%20Grilladerie!5e0!3m2!1sfr!2sfr!4v1681398056286!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                
              </div>
              <div class=\"img-box\">
                <img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"box-img\">
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"detail-box\">
                <p>

                </p>
                <h6>

                </h6>
                <p>

                </p>
              </div>
              <div class=\"img-box\">
                <img src=\"images/client2.jpg\" alt=\"\" class=\"box-img\">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class=\"footer_section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 footer-col\">
          <div class=\"footer_contact\">
            <h4>
              Contact Us
            </h4>
            <div class=\"contact_link_box\">
              <a href=\"\">
                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                <span>
                  Location
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4 footer-col\">
          <div class=\"footer_detail\">
            <a href=\"\" class=\"footer-logo\">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class=\"footer_social\">
              <a href=\"\">
                <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4 footer-col\">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class=\"footer-info\">
        <p>
          &copy; <span id=\"displayYear\"></span> All Rights Reserved By
          <a href=\"https://html.design/\">Free Html Templates</a><br><br>
          &copy; <span id=\"displayYear\"></span> Distributed By
          <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src=\"js/jquery-3.4.1.min.js\"></script>
  <!-- popper js -->
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
  </script>
  <!-- bootstrap js -->
  <script src=\"js/bootstrap.js\"></script>
  <!-- owl slider -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\">
  </script>
  <!-- isotope js -->
  <script src=\"https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js\"></script>
  <!-- nice select -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
  <!-- custom js -->
  <script src=\"js/custom.js\"></script>
  <!-- Google Map -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\">
  </script>
  <!-- End Google Map -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 186,  263 => 168,  259 => 167,  224 => 135,  185 => 99,  122 => 38,  112 => 37,  82 => 16,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block head %}
  

  <!-- Basic -->
  <meta charset=\"utf-8\" />
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
  <!-- Mobile Metas -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
  <!-- Site Metas -->
  <meta name=\"keywords\" content=\"\" />
  <meta name=\"description\" content=\"\" />
  <meta name=\"author\" content=\"\" />
  <link rel=\"shortcut icon\" href=\"{{ asset('bundles/snack/fonts/favicon.png') }}\" type=\"\">

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.css\" />

  <!--owl slider stylesheet -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\" />
  <!-- nice select  -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css\" integrity=\"sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==\" crossorigin=\"anonymous\" />
  <!-- font awesome style -->
  <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\" />

  <!-- Custom styles for this template -->
  <link href=\"css/style.css\" rel=\"stylesheet\" />
  <!-- responsive style -->
  <link href=\"css/responsive.css\" rel=\"stylesheet\" />

{% endblock %}

{% block body %}
  

    <!-- end header section -->
    <!-- slider section -->
    <section class=\"slider_section \">
      <div id=\"customCarousel1\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 col-lg-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
\t\t\t\t\tLa grilladerie votre nouveau snack a ecully vous propose de la vainde cuite a la braise avec de delicieuse de frite maison decouper et cuite sur place.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Commander Maintenant
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item \">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 col-lg-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
\t\t\t\t\tLa grilladerie votre nouveau snack a ecully vous propose de la vainde cuite a la braise avec de delicieuse de frite maison decouper et cuite sur place.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"\" class=\"btn1\">
                        Commander Maintenant
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container \">
              <div class=\"row\">
                <div class=\"col-md-7 col-lg-6 \">
                  <div class=\"detail-box\">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
\t\t\t\t\tLa grilladerie votre nouveau snack a ecully vous propose de la vainde cuite a la braise avec de delicieuse de frite maison decouper et cuite sur place.
                    </p>
                    <div class=\"btn-box\">
                      <a href=\"{{ path('app_burgers_index') }}\" class=\"btn1\">
                        Commander Maintenant avec le click and collect
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <ol class=\"carousel-indicators\">
            <li data-target=\"#customCarousel1\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"1\"></li>
            <li data-target=\"#customCarousel1\" data-slide-to=\"2\"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

 
  <!-- end food section -->

  <!-- about section -->

  <section class=\"about_section layout_padding\">
    <div class=\"container  \">

      <div class=\"row\">
        <div class=\"col-md-6 \">
          <div class=\"img-box\">
            <img src=\"{{ asset('assets/images/about-img.png') }}\" alt=\"\">
          </div>
        </div>
        <div class=\"col-md-6\">
          <div class=\"detail-box\">
            <div class=\"heading_container\">
              <h2>
                La Grilladerie
              </h2>
            </div>
            <p>
              Tous nouveau concept de fast-food, nous proposons des produits de qualité premium pour une explosion de saveur. Manger est avant ou un plaisir et nous tenons a vous faire vivre une expérience de fast-food hors du commun.
            </p>
            <a href=\"\">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section class='mb-5'>
        <div class=\"heading_container heading_center psudo_white_primary mb-3\">
        <h2>
          Click and Collect
        </h2>
        </div>
        <div class=\"original\">
        <a href=\"{{ path('app_burgers_index') }}\">
        <img src=\"{{ asset('assets/images/c1.png') }}\" alt=\"\"></a>
</div>
</section>
  <!-- end book section -->

  <!-- client section -->

      <div class=\"heading_container heading_center psudo_white_primary mb-3\">
        <h2 class=\"mb_3\">
         Nos contacts
        </h2>
      </div>
              <div class=\"maps\">
                
                 <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2782.2461632572085!2d4.790561300000001!3d45.786295869307786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebeec2b9f47b%3A0xe87f06f648cb2f8e!2sLa%20Grilladerie!5e0!3m2!1sfr!2sfr!4v1681398056286!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                
              </div>
              <div class=\"img-box\">
                <img src=\"{{ asset('assets/images/client1.png') }}\" alt=\"\" class=\"box-img\">
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"box\">
              <div class=\"detail-box\">
                <p>

                </p>
                <h6>

                </h6>
                <p>

                </p>
              </div>
              <div class=\"img-box\">
                <img src=\"images/client2.jpg\" alt=\"\" class=\"box-img\">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class=\"footer_section\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 footer-col\">
          <div class=\"footer_contact\">
            <h4>
              Contact Us
            </h4>
            <div class=\"contact_link_box\">
              <a href=\"\">
                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                <span>
                  Location
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href=\"\">
                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4 footer-col\">
          <div class=\"footer_detail\">
            <a href=\"\" class=\"footer-logo\">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
            </p>
            <div class=\"footer_social\">
              <a href=\"\">
                <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
              </a>
              <a href=\"\">
                <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-md-4 footer-col\">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class=\"footer-info\">
        <p>
          &copy; <span id=\"displayYear\"></span> All Rights Reserved By
          <a href=\"https://html.design/\">Free Html Templates</a><br><br>
          &copy; <span id=\"displayYear\"></span> Distributed By
          <a href=\"https://themewagon.com/\" target=\"_blank\">ThemeWagon</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src=\"js/jquery-3.4.1.min.js\"></script>
  <!-- popper js -->
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
  </script>
  <!-- bootstrap js -->
  <script src=\"js/bootstrap.js\"></script>
  <!-- owl slider -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\">
  </script>
  <!-- isotope js -->
  <script src=\"https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js\"></script>
  <!-- nice select -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js\"></script>
  <!-- custom js -->
  <script src=\"js/custom.js\"></script>
  <!-- Google Map -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap\">
  </script>
  <!-- End Google Map -->

{% endblock %}

", "main/index.html.twig", "C:\\Users\\i\\symfony_site\\templates\\main\\index.html.twig");
    }
}
