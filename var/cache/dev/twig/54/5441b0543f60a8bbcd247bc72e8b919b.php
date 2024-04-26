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

/* Front/teacher.html.twig */
class __TwigTemplate_aa5a44333536c52395b33da9d43965ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/teacher.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/teacher.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang=\"en\">
<head>

  <!-- Basic Page Needs
\t================================================== -->
  <meta charset=\"utf-8\">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
\t================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Construction Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Educenter HTML Template v1.0\">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/slick/slick.css"), "html", null, true);
        echo "\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/animate/animate.css"), "html", null, true);
        echo "\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/aos/aos.css"), "html", null, true);
        echo "\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/venobox/venobox.css"), "html", null, true);
        echo "\">

  <!-- Main Stylesheet -->
  <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/preloader.gif"), "html", null, true);
        echo "\" alt=\"preloader\">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class=\"fixed-top header\">
  <!-- top header -->
  <div class=\"top-header py-2 bg-white\">
    <div class=\"container\">
      <div class=\"row no-gutters\">
        <div class=\"col-lg-4 text-center text-lg-left\">
          <a class=\"text-color mr-3\" href=\"tel:+443003030266\"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class=\"list-inline d-inline\">
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://facebook.com/themefisher/\"><i class=\"ti-facebook\"></i></a></li>
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-github\"></i></a></li>
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-instagram\"></i></a></li>
          </ul>
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"notice.html.twig\">notice</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"research.html.twig\">research</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"scholarship.html.twig\">SCHOLARSHIP</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"#loginModal\" data-toggle=\"modal\" data-target=\"#loginModal\">login</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"#signupModal\" data-toggle=\"modal\" data-target=\"#signupModal\">register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class=\"navigation w-100\">
    <div class=\"container\">
      <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
        <a class=\"navbar-brand\" href=\"index.html.twig\"><img src=\"images/logo.png\" alt=\"logo\"></a>
        <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
          aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navigation\">
          <ul class=\"navbar-nav ml-auto text-center\">
            <li class=\"nav-item @@home\">
              <a class=\"nav-link\" href=\"index.html.twig\">Home</a>
            </li>
            <li class=\"nav-item @@about\">
              <a class=\"nav-link\" href=\"about.html.twig\">About</a>
            </li>
            <li class=\"nav-item @@courses\">
              <a class=\"nav-link\" href=\"courses.html.twig\">COURSES</a>
            </li>
            <li class=\"nav-item @@events\">
              <a class=\"nav-link\" href=\"events.html.twig\">EVENTS</a>
            </li>
            <li class=\"nav-item @@blog\">
              <a class=\"nav-link\" href=\"blog.html.twig\">BLOG</a>
            </li>
            <li class=\"nav-item dropdown view\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Pages
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"teacher.html.twig\">Teacher</a></li>
                <li><a class=\"dropdown-item\" href=\"teacher-single.html.twig\">Teacher Single</a></li>
                <li><a class=\"dropdown-item\" href=\"notice.html.twig\">Notice</a></li>
                <li><a class=\"dropdown-item\" href=\"notice-single.html.twig\">Notice Details</a></li>
                <li><a class=\"dropdown-item\" href=\"research.html.twig\">Research</a></li>
                <li><a class=\"dropdown-item\" href=\"scholarship.html.twig\">Scholarship</a></li>
                <li><a class=\"dropdown-item\" href=\"course-single.html.twig\">Course Details</a></li>
                <li><a class=\"dropdown-item\" href=\"event-single.html.twig\">Event Details</a></li>
                <li><a class=\"dropdown-item\" href=\"blog-single.html.twig\">Blog Details</a></li>
                
                <li class=\"dropdown-item dropdown dropleft\">
                  <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdownSubmenu\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Sub Menu
                  </a>
                  <ul class=\"dropdown-menu dropdown-submenu\" aria-labelledby=\"navbarDropdownSubmenu\">
                    <li><a class=\"dropdown-item\" href=\"#!\">Sub Menu 01</a></li>
                    <li><a class=\"dropdown-item\" href=\"#!\">Sub Menu 02</a></li>
                    <li><a class=\"dropdown-item\" href=\"#!\">Sub Menu 03</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"nav-item @@contact\">
              <a class=\"nav-link\" href=\"contact.html.twig\">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class=\"modal fade\" id=\"signupModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content rounded-0 border-0 p-4\">
            <div class=\"modal-header border-0\">
                <h3>Register</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"login\">
                    <form action=\"#\" class=\"row\">
                        <div class=\"col-12\">
                            <input type=\"text\" class=\"form-control mb-3\" id=\"signupPhone\" name=\"signupPhone\" placeholder=\"Phone\">
                        </div>
                        <div class=\"col-12\">
                            <input type=\"text\" class=\"form-control mb-3\" id=\"signupName\" name=\"signupName\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-12\">
                            <input type=\"email\" class=\"form-control mb-3\" id=\"signupEmail\" name=\"signupEmail\" placeholder=\"Email\">
                        </div>
                        <div class=\"col-12\">
                            <input type=\"password\" class=\"form-control mb-3\" id=\"signupPassword\" name=\"signupPassword\" placeholder=\"Password\">
                        </div>
                        <div class=\"col-12\">
                            <button type=\"submit\" class=\"btn btn-primary\">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content rounded-0 border-0 p-4\">
            <div class=\"modal-header border-0\">
                <h3>Login</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\" class=\"row\">
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control mb-3\" id=\"loginPhone\" name=\"loginPhone\" placeholder=\"Phone\">
                    </div>
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control mb-3\" id=\"loginName\" name=\"loginName\" placeholder=\"Name\">
                    </div>
                    <div class=\"col-12\">
                        <input type=\"password\" class=\"form-control mb-3\" id=\"loginPassword\" name=\"loginPassword\" placeholder=\"Password\">
                    </div>
                    <div class=\"col-12\">
                        <button type=\"submit\" class=\"btn btn-primary\">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class=\"page-title-section overlay\" data-background=\"images/backgrounds/page-title.jpg\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8\">
        <ul class=\"list-inline custom-breadcrumb mb-2\">
          <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" href=\"index.html.twig\">Home</a></li>
          <li class=\"list-inline-item text-white h3 font-secondary nasted\">Our teacher</li>
        </ul>
        <p class=\"text-lighten mb-0\">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- teacher category list -->
        <ul class=\"list-inline text-center filter-controls mb-5\">
          <li class=\"list-inline-item m-3 text-uppercase active\" data-filter=\"all\">All</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"arts\">arts</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"bio-science\">biological science</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"business-study\">business studies</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"law\">law</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"pharmacy\">pharmacy</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"science\">science</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"social-science\">social science</li>
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class=\"row filtr-container\">
      <!-- teacher -->
      <div data-category=\"arts, law\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-1.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Jacke Masito</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"bio-science\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Clark Malik</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"business-study\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">John Doe</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"bio-science, science arts\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-1.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Alex Rook</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"law\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Din Martin</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"science\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Raka Jim</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"bio-science\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-1.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Devid Luis</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"pharmacy, social-science, arts\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Zim Cook</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"business-study\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Duis Riu</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- footer -->
<footer>
  <!-- newsletter -->
  <div class=\"newsletter\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-9 ml-auto bg-primary py-5 newsletter-block\">
          <h3 class=\"text-white\">Subscribe Now</h3>
          <form action=\"#\">
            <div class=\"input-wrapper\">
              <input type=\"email\" class=\"form-control border-0\" id=\"newsletter\" name=\"newsletter\" placeholder=\"Enter Your Email...\">
              <button type=\"submit\" value=\"send\" class=\"btn btn-primary\">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class=\"footer bg-footer section border-bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-8 mb-5 mb-lg-0\">
          <!-- logo -->
          <a class=\"logo-footer\" href=\"index.html.twig\"><img class=\"img-fluid mb-4\" src=\"images/logo.png\" alt=\"logo\"></a>
          <ul class=\"list-unstyled\">
            <li class=\"mb-2\">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
            <li class=\"mb-2\">+1 (2) 345 6789</li>
            <li class=\"mb-2\">+1 (2) 345 6789</li>
            <li class=\"mb-2\">contact@yourdomain.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">COMPANY</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"about.html.twig\">About Us</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"teacher.html.twig\">Our Teacher</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"contact.html.twig\">Contact</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"blog.html.twig\">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">LINKS</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"courses.html.twig\">Courses</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"events.html.twig\">Events</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"notice.html.twig\">Notice</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"scholarship.html.twig\">Scholarship</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">SUPPORT</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/blog\">Forums</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://docs.themefisher.com/\">Documentation</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"#!\">Language</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"#!\">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">RECOMMEND</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">WordPress</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">LearnPress</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">WooCommerce</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">bbPress</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class=\"copyright py-4 bg-footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-7 text-sm-left text-center\">
          <p class=\"mb-0\">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            , designed & developed by <a href=\"https://themefisher.com/\" class=\"text-muted\">Themefisher</a>
          </p>
        </div>
        <div class=\"col-sm-5 text-sm-right text-center\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://facebook.com/themefisher/\"><i class=\"ti-facebook text-primary\"></i></a></li>
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt text-primary\"></i></a></li>
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://github.com/themefisher\"><i class=\"ti-github text-primary\"></i></a></li>
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-instagram text-primary\"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap JS -->
<script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- slick slider -->
<script src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<!-- aos -->
<script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- venobox popup -->
<script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/venobox/venobox.min.js"), "html", null, true);
        echo "\"></script>
<!-- filter -->
<script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/filterizr/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>

<!-- Main Script -->
<script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/script.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Front/teacher.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  628 => 533,  622 => 530,  616 => 527,  611 => 525,  606 => 523,  601 => 521,  596 => 519,  591 => 517,  123 => 52,  113 => 45,  109 => 44,  103 => 41,  97 => 38,  92 => 36,  87 => 34,  82 => 32,  77 => 30,  72 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang=\"en\">
<head>

  <!-- Basic Page Needs
\t================================================== -->
  <meta charset=\"utf-8\">
  <title>Educenter - Education HTML Template</title>

  <!-- Mobile Specific Metas
\t================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Construction Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Educenter HTML Template v1.0\">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"{{asset('Front/plugins/bootstrap/bootstrap.min.css')}}\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"{{asset('Front/plugins/slick/slick.css')}}\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"{{asset('Front/plugins/themify-icons/themify-icons.css')}}\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"{{asset('Front/plugins/animate/animate.css')}}\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"{{asset('Front/plugins/aos/aos.css')}}\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"{{asset('Front/plugins/venobox/venobox.css')}}\">

  <!-- Main Stylesheet -->
  <link href=\"{{asset('Front/css/style.css')}}\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"{{asset('Front/images/favicon.png')}}\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"{{asset('Front/images/favicon.png')}}\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"{{asset('Front/images/preloader.gif')}}\" alt=\"preloader\">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class=\"fixed-top header\">
  <!-- top header -->
  <div class=\"top-header py-2 bg-white\">
    <div class=\"container\">
      <div class=\"row no-gutters\">
        <div class=\"col-lg-4 text-center text-lg-left\">
          <a class=\"text-color mr-3\" href=\"tel:+443003030266\"><strong>CALL</strong> +44 300 303 0266</a>
          <ul class=\"list-inline d-inline\">
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://facebook.com/themefisher/\"><i class=\"ti-facebook\"></i></a></li>
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-github\"></i></a></li>
            <li class=\"list-inline-item mx-0\"><a class=\"d-inline-block p-2 text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-instagram\"></i></a></li>
          </ul>
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"notice.html.twig\">notice</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"research.html.twig\">research</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"scholarship.html.twig\">SCHOLARSHIP</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"#loginModal\" data-toggle=\"modal\" data-target=\"#loginModal\">login</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"#signupModal\" data-toggle=\"modal\" data-target=\"#signupModal\">register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class=\"navigation w-100\">
    <div class=\"container\">
      <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
        <a class=\"navbar-brand\" href=\"index.html.twig\"><img src=\"images/logo.png\" alt=\"logo\"></a>
        <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
          aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navigation\">
          <ul class=\"navbar-nav ml-auto text-center\">
            <li class=\"nav-item @@home\">
              <a class=\"nav-link\" href=\"index.html.twig\">Home</a>
            </li>
            <li class=\"nav-item @@about\">
              <a class=\"nav-link\" href=\"about.html.twig\">About</a>
            </li>
            <li class=\"nav-item @@courses\">
              <a class=\"nav-link\" href=\"courses.html.twig\">COURSES</a>
            </li>
            <li class=\"nav-item @@events\">
              <a class=\"nav-link\" href=\"events.html.twig\">EVENTS</a>
            </li>
            <li class=\"nav-item @@blog\">
              <a class=\"nav-link\" href=\"blog.html.twig\">BLOG</a>
            </li>
            <li class=\"nav-item dropdown view\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Pages
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"teacher.html.twig\">Teacher</a></li>
                <li><a class=\"dropdown-item\" href=\"teacher-single.html.twig\">Teacher Single</a></li>
                <li><a class=\"dropdown-item\" href=\"notice.html.twig\">Notice</a></li>
                <li><a class=\"dropdown-item\" href=\"notice-single.html.twig\">Notice Details</a></li>
                <li><a class=\"dropdown-item\" href=\"research.html.twig\">Research</a></li>
                <li><a class=\"dropdown-item\" href=\"scholarship.html.twig\">Scholarship</a></li>
                <li><a class=\"dropdown-item\" href=\"course-single.html.twig\">Course Details</a></li>
                <li><a class=\"dropdown-item\" href=\"event-single.html.twig\">Event Details</a></li>
                <li><a class=\"dropdown-item\" href=\"blog-single.html.twig\">Blog Details</a></li>
                
                <li class=\"dropdown-item dropdown dropleft\">
                  <a class=\"dropdown-toggle\" href=\"#\" id=\"navbarDropdownSubmenu\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Sub Menu
                  </a>
                  <ul class=\"dropdown-menu dropdown-submenu\" aria-labelledby=\"navbarDropdownSubmenu\">
                    <li><a class=\"dropdown-item\" href=\"#!\">Sub Menu 01</a></li>
                    <li><a class=\"dropdown-item\" href=\"#!\">Sub Menu 02</a></li>
                    <li><a class=\"dropdown-item\" href=\"#!\">Sub Menu 03</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class=\"nav-item @@contact\">
              <a class=\"nav-link\" href=\"contact.html.twig\">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class=\"modal fade\" id=\"signupModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content rounded-0 border-0 p-4\">
            <div class=\"modal-header border-0\">
                <h3>Register</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"login\">
                    <form action=\"#\" class=\"row\">
                        <div class=\"col-12\">
                            <input type=\"text\" class=\"form-control mb-3\" id=\"signupPhone\" name=\"signupPhone\" placeholder=\"Phone\">
                        </div>
                        <div class=\"col-12\">
                            <input type=\"text\" class=\"form-control mb-3\" id=\"signupName\" name=\"signupName\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-12\">
                            <input type=\"email\" class=\"form-control mb-3\" id=\"signupEmail\" name=\"signupEmail\" placeholder=\"Email\">
                        </div>
                        <div class=\"col-12\">
                            <input type=\"password\" class=\"form-control mb-3\" id=\"signupPassword\" name=\"signupPassword\" placeholder=\"Password\">
                        </div>
                        <div class=\"col-12\">
                            <button type=\"submit\" class=\"btn btn-primary\">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content rounded-0 border-0 p-4\">
            <div class=\"modal-header border-0\">
                <h3>Login</h3>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <form action=\"#\" class=\"row\">
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control mb-3\" id=\"loginPhone\" name=\"loginPhone\" placeholder=\"Phone\">
                    </div>
                    <div class=\"col-12\">
                        <input type=\"text\" class=\"form-control mb-3\" id=\"loginName\" name=\"loginName\" placeholder=\"Name\">
                    </div>
                    <div class=\"col-12\">
                        <input type=\"password\" class=\"form-control mb-3\" id=\"loginPassword\" name=\"loginPassword\" placeholder=\"Password\">
                    </div>
                    <div class=\"col-12\">
                        <button type=\"submit\" class=\"btn btn-primary\">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- page title -->
<section class=\"page-title-section overlay\" data-background=\"images/backgrounds/page-title.jpg\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8\">
        <ul class=\"list-inline custom-breadcrumb mb-2\">
          <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" href=\"index.html.twig\">Home</a></li>
          <li class=\"list-inline-item text-white h3 font-secondary nasted\">Our teacher</li>
        </ul>
        <p class=\"text-lighten mb-0\">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <!-- teacher category list -->
        <ul class=\"list-inline text-center filter-controls mb-5\">
          <li class=\"list-inline-item m-3 text-uppercase active\" data-filter=\"all\">All</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"arts\">arts</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"bio-science\">biological science</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"business-study\">business studies</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"law\">law</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"pharmacy\">pharmacy</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"science\">science</li>
          <li class=\"list-inline-item m-3 text-uppercase\" data-filter=\"social-science\">social science</li>
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class=\"row filtr-container\">
      <!-- teacher -->
      <div data-category=\"arts, law\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-1.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Jacke Masito</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"bio-science\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Clark Malik</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"business-study\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">John Doe</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"bio-science, science arts\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-1.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Alex Rook</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"law\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Din Martin</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"science\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Raka Jim</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"bio-science\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-1.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Devid Luis</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"pharmacy, social-science, arts\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Zim Cook</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-category=\"business-study\" class=\"col-lg-4 col-sm-6 mb-5 filtr-item\">
        <div class=\"card border-0 rounded-0 hover-shadow\">
          <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
          <div class=\"card-body\">
            <a href=\"teacher-single.html.twig\">
              <h4 class=\"card-title\">Duis Riu</h4>
            </a>
            <p>Teacher</p>
            <ul class=\"list-inline\">
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://facebook.com/themefisher\"><i class=\"ti-facebook\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://github.com/themefisher\"><i class=\"ti-google\"></i></a></li>
              <li class=\"list-inline-item\"><a class=\"text-color\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- footer -->
<footer>
  <!-- newsletter -->
  <div class=\"newsletter\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-9 ml-auto bg-primary py-5 newsletter-block\">
          <h3 class=\"text-white\">Subscribe Now</h3>
          <form action=\"#\">
            <div class=\"input-wrapper\">
              <input type=\"email\" class=\"form-control border-0\" id=\"newsletter\" name=\"newsletter\" placeholder=\"Enter Your Email...\">
              <button type=\"submit\" value=\"send\" class=\"btn btn-primary\">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class=\"footer bg-footer section border-bottom\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-8 mb-5 mb-lg-0\">
          <!-- logo -->
          <a class=\"logo-footer\" href=\"index.html.twig\"><img class=\"img-fluid mb-4\" src=\"images/logo.png\" alt=\"logo\"></a>
          <ul class=\"list-unstyled\">
            <li class=\"mb-2\">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
            <li class=\"mb-2\">+1 (2) 345 6789</li>
            <li class=\"mb-2\">+1 (2) 345 6789</li>
            <li class=\"mb-2\">contact@yourdomain.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">COMPANY</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"about.html.twig\">About Us</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"teacher.html.twig\">Our Teacher</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"contact.html.twig\">Contact</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"blog.html.twig\">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">LINKS</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"courses.html.twig\">Courses</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"events.html.twig\">Events</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"notice.html.twig\">Notice</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"scholarship.html.twig\">Scholarship</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">SUPPORT</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/blog\">Forums</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://docs.themefisher.com/\">Documentation</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"#!\">Language</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"#!\">Release Status</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">RECOMMEND</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">WordPress</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">LearnPress</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">WooCommerce</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"https://themefisher.com/\">bbPress</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class=\"copyright py-4 bg-footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-7 text-sm-left text-center\">
          <p class=\"mb-0\">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            , designed & developed by <a href=\"https://themefisher.com/\" class=\"text-muted\">Themefisher</a>
          </p>
        </div>
        <div class=\"col-sm-5 text-sm-right text-center\">
          <ul class=\"list-inline\">
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://facebook.com/themefisher/\"><i class=\"ti-facebook text-primary\"></i></a></li>
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://twitter.com/themefisher\"><i class=\"ti-twitter-alt text-primary\"></i></a></li>
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://github.com/themefisher\"><i class=\"ti-github text-primary\"></i></a></li>
            <li class=\"list-inline-item\"><a class=\"d-inline-block p-2\" href=\"https://instagram.com/themefisher/\"><i class=\"ti-instagram text-primary\"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src=\"{{asset('Front/plugins/jQuery/jquery.min.js')}}\"></script>
<!-- Bootstrap JS -->
<script src=\"{{asset('Front/plugins/bootstrap/bootstrap.min.js')}}\"></script>
<!-- slick slider -->
<script src=\"{{asset('Front/plugins/slick/slick.min.js')}}\"></script>
<!-- aos -->
<script src=\"{{asset('Front/plugins/aos/aos.js')}}\"></script>
<!-- venobox popup -->
<script src=\"{{asset('Front/plugins/venobox/venobox.min.js')}}\"></script>
<!-- filter -->
<script src=\"{{asset('Front/plugins/filterizr/jquery.filterizr.min.js')}}\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"{{asset('Front/plugins/google-map/gmap.js')}}\"></script>

<!-- Main Script -->
<script src=\"{{asset('Front/js/script.js')}}\"></script>

</body>
</html>", "Front/teacher.html.twig", "C:\\Users\\user\\Desktop\\formini crud\\formini.tn\\templates\\Front\\teacher.html.twig");
    }
}
