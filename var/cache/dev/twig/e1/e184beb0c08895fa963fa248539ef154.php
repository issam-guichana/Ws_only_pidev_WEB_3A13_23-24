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

/* Front/event-single.html.twig */
class __TwigTemplate_ec04c3ebca4ba06885435e82a2cdf8c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/event-single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/event-single.html.twig"));

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

   <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/slick/slick.css"), "html", null, true);
        echo "\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/animate/animate.css"), "html", null, true);
        echo "\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/aos/aos.css"), "html", null, true);
        echo "\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/venobox/venobox.css"), "html", null, true);
        echo "\">

  <!-- Main Stylesheet -->
  <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"uploads/preloader.gif\" alt=\"preloader\">
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
        <a class=\"navbar-brand\" href=\"index.html.twig\"><img src=\"uploads/logo.png\" alt=\"logo\"></a>
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
          <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" href=\"events.html.twig\">Upcoming Events</a></li>
          <li class=\"list-inline-item text-white h3 font-secondary nasted\">Event Details</li>
        </ul>
        <p class=\"text-lighten mb-0\">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class=\"section-sm\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"section-title\">";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 231, $this->source); })()), "nomEvent", [], "any", false, false, false, 231), "html", null, true);
        echo "</h2>
      </div>
      <!-- event image -->
      <div class=\"col-12 mb-4\">
        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/events/" . twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 235, $this->source); })()), "imageEvent", [], "any", false, false, false, 235))), "html", null, true);
        echo "\" alt=\"event thumb\" class=\"img-fluid w-100\">
      </div>
    </div>
    <!-- event info -->
    <div class=\"row align-items-center mb-5\">
      <div class=\"col-lg-9\">
        <ul class=\"list-inline\">
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-location-pin text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">LOCATION</h6>
                <p class=\"mb-0\">";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 247, $this->source); })()), "lieu", [], "any", false, false, false, 247), "html", null, true);
        echo "</p>
              </div>
            </div>
          </li>
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-calendar text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">DATE</h6>
                <p class=\"mb-0\">";
        // line 256
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 256, $this->source); })()), "dateEvent", [], "any", false, false, false, 256), "F d, Y"), "html", null, true);
        echo "</p>
              </div>
            </div>
          </li>
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-time text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">TIME</h6>
                <p class=\"mb-0\">";
        // line 265
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 265, $this->source); })()), "heureDeb", [], "any", false, false, false, 265), "h:i a"), "html", null, true);
        echo "</p>
              </div>
            </div>
          </li>
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-wallet text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">ENTRY FEE</h6>
                <p class=\"mb-0\">\$";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 274, $this->source); })()), "prix", [], "any", false, false, false, 274), "html", null, true);
        echo "</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class=\"col-lg-3 text-lg-right text-left\">
        <a href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_es", ["idEvent" => twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 281, $this->source); })()), "idEvent", [], "any", false, false, false, 281)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Apply now</a>
      </div>
      <!-- border -->
      <div class=\"col-12 mt-4 order-4\">
        <div class=\"border-bottom border-primary\"></div>
      </div>
    </div>
    <!-- event details -->
    <div class=\"row\">
      <div class=\"col-12 mb-50\">
        <h3>About Event</h3>
        <p>";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 292, $this->source); })()), "description", [], "any", false, false, false, 292), "html", null, true);
        echo "</p>
      </div>
    </div>
  </div>
</section>
<!-- /event single -->
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/jQuery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap JS -->
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- slick slider -->
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<!-- aos -->
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/aos/aos.js"), "html", null, true);
        echo "\"></script>
<!-- venobox popup -->
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/venobox/venobox.min.js"), "html", null, true);
        echo "\"></script>
<!-- filter -->
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/filterizr/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>

<!-- Main Script -->
<script src=\"";
        // line 318
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
        return "Front/event-single.html.twig";
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
        return array (  434 => 318,  428 => 315,  422 => 312,  417 => 310,  412 => 308,  407 => 306,  402 => 304,  397 => 302,  384 => 292,  370 => 281,  360 => 274,  348 => 265,  336 => 256,  324 => 247,  309 => 235,  302 => 231,  112 => 44,  108 => 43,  102 => 40,  96 => 37,  91 => 35,  86 => 33,  81 => 31,  76 => 29,  71 => 27,  43 => 1,);
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
  <link rel=\"shortcut icon\" href=\"{{asset('favicon.png')}}\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"{{asset('favicon.png')}}\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"uploads/preloader.gif\" alt=\"preloader\">
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
        <a class=\"navbar-brand\" href=\"index.html.twig\"><img src=\"uploads/logo.png\" alt=\"logo\"></a>
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
          <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" href=\"events.html.twig\">Upcoming Events</a></li>
          <li class=\"list-inline-item text-white h3 font-secondary nasted\">Event Details</li>
        </ul>
        <p class=\"text-lighten mb-0\">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class=\"section-sm\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"section-title\">{{ event.nomEvent }}</h2>
      </div>
      <!-- event image -->
      <div class=\"col-12 mb-4\">
        <img src=\"{{ asset('uploads/events/' ~ event.imageEvent) }}\" alt=\"event thumb\" class=\"img-fluid w-100\">
      </div>
    </div>
    <!-- event info -->
    <div class=\"row align-items-center mb-5\">
      <div class=\"col-lg-9\">
        <ul class=\"list-inline\">
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-location-pin text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">LOCATION</h6>
                <p class=\"mb-0\">{{ event.lieu }}</p>
              </div>
            </div>
          </li>
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-calendar text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">DATE</h6>
                <p class=\"mb-0\">{{ event.dateEvent|date('F d, Y') }}</p>
              </div>
            </div>
          </li>
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-time text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">TIME</h6>
                <p class=\"mb-0\">{{ event.heureDeb|date('h:i a') }}</p>
              </div>
            </div>
          </li>
          <li class=\"list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0\">
            <div class=\"d-flex align-items-center\">
              <i class=\"ti-wallet text-primary icon-md mr-2\"></i>
              <div class=\"text-left\">
                <h6 class=\"mb-0\">ENTRY FEE</h6>
                <p class=\"mb-0\">\${{ event.prix }}</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class=\"col-lg-3 text-lg-right text-left\">
        <a href=\"{{ path('app_es', {'idEvent': event.idEvent}) }}\" class=\"btn btn-primary\">Apply now</a>
      </div>
      <!-- border -->
      <div class=\"col-12 mt-4 order-4\">
        <div class=\"border-bottom border-primary\"></div>
      </div>
    </div>
    <!-- event details -->
    <div class=\"row\">
      <div class=\"col-12 mb-50\">
        <h3>About Event</h3>
        <p>{{ event.description }}</p>
      </div>
    </div>
  </div>
</section>
<!-- /event single -->
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
</html>", "Front/event-single.html.twig", "C:\\Users\\user\\Desktop\\formini crud\\formini.tn\\templates\\Front\\event-single.html.twig");
    }
}
