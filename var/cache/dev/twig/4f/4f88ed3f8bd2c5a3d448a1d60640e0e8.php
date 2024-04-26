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

/* Front/base.html.twig */
class __TwigTemplate_b83e30ff79f0a26c7e63300bbf79a239 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/base.html.twig"));

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
  <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- Mobile Specific Metas
\t================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Construction Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Educenter HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"educenter\" />
";
        // line 28
        $this->displayBlock('css', $context, $blocks);
        // line 50
        echo "</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"";
        // line 55
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

  ";
        // line 91
        $this->displayBlock('header', $context, $blocks);
        // line 156
        echo "<!-- /header -->

<!-- Modal -->
";
        // line 159
        $this->displayBlock('body', $context, $blocks);
        // line 194
        echo "<!-- Modal -->
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

<!-- hero slider -->
<section class=\"hero-section overlay bg-cover\" data-background=\"images/banner/banner-1.jpg\">
  <div class=\"container\">
    <div class=\"hero-slider\">
      <!-- slider item -->
      <div class=\"hero-slider-item\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <h1 class=\"text-white\" data-animation-out=\"fadeOutRight\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInLeft\" data-delay-in=\".1\">Your bright future is our mission</h1>
            <p class=\"text-muted mb-4\" data-animation-out=\"fadeOutRight\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInLeft\" data-delay-in=\".4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href=\"contact.html.twig\" class=\"btn btn-primary\" data-animation-out=\"fadeOutRight\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInLeft\" data-delay-in=\".7\">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class=\"hero-slider-item\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <h1 class=\"text-white\" data-animation-out=\"fadeOutUp\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">Your bright future is our mission</h1>
            <p class=\"text-muted mb-4\" data-animation-out=\"fadeOutUp\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href=\"contact.html.twig\" class=\"btn btn-primary\" data-animation-out=\"fadeOutUp\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".7\">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class=\"hero-slider-item\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <h1 class=\"text-white\" data-animation-out=\"fadeOutDown\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">Your bright future is our mission</h1>
            <p class=\"text-muted mb-4\" data-animation-out=\"fadeOutDown\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/contact.html.twig"), "html", null, true);
        echo "\" class=\"btn btn-primary\" data-animation-out=\"fadeOutDown\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"zoomIn\" data-delay-in=\".7\">Apply now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class=\"bg-gray overflow-md-hidden\">
  <div class=\"container-fluid p-0\">
    <div class=\"row no-gutters\">
      <div class=\"col-xl-4 col-lg-5 align-self-end\">
        <img class=\"img-fluid w-100\" src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/banner/banner-feature.png"), "html", null, true);
        echo "\" alt=\"banner-feature\">
      </div>
      <div class=\"col-xl-8 col-lg-7\">
        <div class=\"row feature-blocks bg-gray justify-content-between\">
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Scholorship News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Our Notice Board</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Our Achievements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Admission Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-6 order-2 order-md-1\">
        <h2 class=\"section-title\">About Educenter</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>
        <p>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        <a href=\"about.html.twig\" class=\"btn btn-outline-primary\">Learn more</a>
      </div>
      <div class=\"col-md-6 order-1 order-md-2 mb-4 mb-md-0\">
        <img class=\"img-fluid w-100\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/about/about-us.jpg"), "html", null, true);
        echo "\" alt=\"about image\">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class=\"section-sm\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"d-flex align-items-center section-title justify-content-between\">
          <h2 class=\"mb-0 text-nowrap mr-3\">Our Course</h2>
          <div class=\"border-top w-100 border-primary d-none d-sm-block\"></div>
          <div>
            <a href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/courses.html.twig"), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block\">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class=\"row justify-content-center\">
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/courses/course-1.jpg"), "html", null, true);
        echo "\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/course-single.html.twig"), "html", null, true);
        echo "\">Humanities</a></li>
        </ul>
        <a href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/course-single.html.twig"), "html", null, true);
        echo "\">
          <h4 class=\"card-title\">Photography</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-2.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Programming</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-3.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Lifestyle Archives</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-4.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Complete Freelancing</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-5.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Branding Design</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-6.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Art Design</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <a href=\"courses.html.twig\" class=\"btn btn-sm btn-outline-primary d-sm-none d-inline-block\">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class=\"section bg-primary\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h6 class=\"text-white font-secondary mb-0\">Click to Join the Advance Workshop</h6>
        <h2 class=\"section-title text-white\">Training In Advannce Networking</h2>
        <a href=\"contact.html.twig\" class=\"btn btn-light\">join now</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class=\"section bg-cover\" data-background=\"images/backgrounds/success-story.jpg\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-sm-4 position-relative success-video\">
        <a class=\"play-btn venobox\" href=\"https://youtu.be/nA1Aqp0sPQo\" data-vbtype=\"video\">
          <i class=\"ti-control-play\"></i>
        </a>
      </div>
      <div class=\"col-lg-6 col-sm-8\">
        <div class=\"bg-white p-5\">
          <h2 class=\"section-title\">Success Stories</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->
<section class=\"section bg-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"d-flex align-items-center section-title justify-content-between\">
          <h2 class=\"mb-0 text-nowrap mr-3\">Upcoming Events</h2>
          <div class=\"border-top w-100 border-primary d-none d-sm-block\"></div>
          <div>
            <a href=\"events.html.twig\" class=\"btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block\">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row justify-content-center\">
  <!-- event -->
  <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card border-0 rounded-0 hover-shadow\">
      <div class=\"card-img position-relative\">
        <img class=\"card-img-top rounded-0\" src=\"images/events/event-1.jpg\" alt=\"event thumb\">
        <div class=\"card-date\"><span>18</span><br>December</div>
      </div>
      <div class=\"card-body\">
        <!-- location -->
        <p><i class=\"ti-location-pin text-primary mr-2\"></i>Dhanmondi Lake, Dhaka</p>
        <a href=\"event-single.html.twig\"><h4 class=\"card-title\">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card border-0 rounded-0 hover-shadow\">
      <div class=\"card-img position-relative\">
        <img class=\"card-img-top rounded-0\" src=\"images/events/event-2.jpg\" alt=\"event thumb\">
        <div class=\"card-date\"><span>21</span><br>December</div>
      </div>
      <div class=\"card-body\">
        <!-- location -->
        <p><i class=\"ti-location-pin text-primary mr-2\"></i>Dhanmondi Lake, Dhaka</p>
        <a href=\"event-single.html.twig\"><h4 class=\"card-title\">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card border-0 rounded-0 hover-shadow\">
      <div class=\"card-img position-relative\">
        <img class=\"card-img-top rounded-0\" src=\"images/events/event-3.jpg\" alt=\"event thumb\">
        <div class=\"card-date\"><span>23</span><br>December</div>
      </div>
      <div class=\"card-body\">
        <!-- location -->
        <p><i class=\"ti-location-pin text-primary mr-2\"></i>Dhanmondi Lake, Dhaka</p>
        <a href=\"event-single.html.twig\"><h4 class=\"card-title\">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
      </div>
    </div>
  </div>
</div>
    <!-- mobile see all button -->
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <a href=\"course.html.twig\" class=\"btn btn-sm btn-outline-primary d-sm-none d-inline-block\">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12\">
        <h2 class=\"section-title\">Our Teachers</h2>
      </div>
      <!-- teacher -->
      <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
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
      <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
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
      <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
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
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- blog -->
<section class=\"section pt-0\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"section-title\">Latest News</h2>
      </div>
    </div>
    <div class=\"row justify-content-center\">
  <!-- blog post -->
  <article class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/blog/post-1.jpg\" alt=\"Post thumb\">
      <div class=\"card-body\">
        <!-- post meta -->
        <ul class=\"list-inline mb-3\">
          <!-- post date -->
          <li class=\"list-inline-item mr-3 ml-0\">August 28, 2018</li>
          <!-- author -->
          <li class=\"list-inline-item mr-3 ml-0\">By Somrat Sorkar</li>
        </ul>
        <a href=\"blog-single.html.twig\">
          <h4 class=\"card-title\">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href=\"blog-single.html.twig\" class=\"btn btn-primary btn-sm\">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/blog/post-2.jpg\" alt=\"Post thumb\">
      <div class=\"card-body\">
        <!-- post meta -->
        <ul class=\"list-inline mb-3\">
          <!-- post date -->
          <li class=\"list-inline-item mr-3 ml-0\">August 13, 2018</li>
          <!-- author -->
          <li class=\"list-inline-item mr-3 ml-0\">By Jonathon Drew</li>
        </ul>
        <a href=\"blog-single.html.twig\">
          <h4 class=\"card-title\">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href=\"blog-single.html.twig\" class=\"btn btn-primary btn-sm\">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/blog/post-3.jpg"), "html", null, true);
        echo "\" alt=\"Post thumb\">
      <div class=\"card-body\">
        <!-- post meta -->
        <ul class=\"list-inline mb-3\">
          <!-- post date -->
          <li class=\"list-inline-item mr-3 ml-0\">August 24, 2018</li>
          <!-- author -->
          <li class=\"list-inline-item mr-3 ml-0\">By Alex Pitt</li>
        </ul>
        <a href=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/blog-single.html.twig"), "html", null, true);
        echo "\">
          <h4 class=\"card-title\">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/blog-single.html.twig"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm\">read more</a>
      </div>
    </div>
  </article>
</div>
  </div>
</section>
<!-- /blog -->

<!-- footer -->

";
        // line 711
        $this->displayBlock('footer', $context, $blocks);
        // line 814
        $this->displayBlock('js', $context, $blocks);
        // line 834
        echo "


</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ForminiTN";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 29
        echo "    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- slick slider -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/slick/slick.css"), "html", null, true);
        echo "\">
    <!-- themefy-icon -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
    <!-- animation css -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/animate/animate.css"), "html", null, true);
        echo "\">
    <!-- aos -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/aos/aos.css"), "html", null, true);
        echo "\">
    <!-- venobox popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/venobox/venobox.css"), "html", null, true);
        echo "\">

    <!-- Main Stylesheet -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 92
        echo "  <div class=\"navigation w-100\">
    <div class=\"container\">
      <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
        <a class=\"navbar-brand\" href=\"index.html.twig\"><img src=\"images/logo.png\" alt=\"logo\"></a>
        <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
          aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navigation\">
          <ul class=\"navbar-nav ml-auto text-center\">
            <li class=\"nav-item active\">
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
                <li><a class=\"dropdown-item\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/teacher.html.twig"), "html", null, true);
        echo "\">Teacher</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/teacher-single.html.twig"), "html", null, true);
        echo "\">Teacher Single</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/notice.html.twig"), "html", null, true);
        echo "\">Notice</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/notice-single.html.twig"), "html", null, true);
        echo "\">Notice Details</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/research.html.twig"), "html", null, true);
        echo "\">Research</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/scholarship.html.twig"), "html", null, true);
        echo "\">Scholarship</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/course-single.html.twig"), "html", null, true);
        echo "\">Course Details</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/event-single.html.twig"), "html", null, true);
        echo "\">Event Details</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/blog-single.html.twig"), "html", null, true);
        echo "\">Blog Details</a></li>
                
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
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 159
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 160
        echo "<div class=\"modal fade\" id=\"signupModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 711
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 712
        echo "<footer>
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
            , designed & developed by <a href=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themefisher.com/"), "html", null, true);
        echo "\"> class=\"text-muted\">Themefisher</a>
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 814
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 815
        echo "    <!-- jQuery -->
    <script src=\"Front/plugins/jQuery/jquery.min.js\"></script>
    <!-- Bootstrap JS -->
    <script src=\"Front/plugins/bootstrap/bootstrap.min.js\"></script>
    <!-- slick slider -->
    <script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- aos -->
    <script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <!-- venobox popup -->
    <script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/venobox/venobox.min.js"), "html", null, true);
        echo "\"></script>
    <!-- filter -->
    <script src=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/filterizr/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
    <!-- google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY\"></script> ";
        // line 829
        echo "   <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>

<!-- Main Script -->
<script src=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Front/base.html.twig";
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
        return array (  1123 => 832,  1116 => 829,  1111 => 826,  1106 => 824,  1101 => 822,  1096 => 820,  1089 => 815,  1079 => 814,  1051 => 796,  965 => 712,  955 => 711,  912 => 160,  902 => 159,  867 => 131,  863 => 130,  859 => 129,  855 => 128,  851 => 127,  847 => 126,  843 => 125,  839 => 124,  835 => 123,  802 => 92,  792 => 91,  780 => 48,  776 => 47,  770 => 44,  764 => 41,  759 => 39,  754 => 37,  749 => 35,  744 => 33,  739 => 31,  735 => 29,  725 => 28,  706 => 16,  691 => 834,  689 => 814,  687 => 711,  673 => 700,  666 => 696,  654 => 687,  319 => 355,  314 => 353,  307 => 349,  294 => 339,  275 => 323,  226 => 277,  209 => 263,  138 => 194,  136 => 159,  131 => 156,  129 => 91,  90 => 55,  83 => 50,  81 => 28,  66 => 16,  49 => 1,);
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
  <title>{% block title %}ForminiTN{% endblock %}</title>

  <!-- Mobile Specific Metas
\t================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"Construction Html5 Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Educenter HTML Template v1.0\">
  
  <!-- theme meta -->
  <meta name=\"theme-name\" content=\"educenter\" />
{% block css %}
    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins/bootstrap/bootstrap.min.css') }}\">
    <!-- slick slider -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins/slick/slick.css') }}\">
    <!-- themefy-icon -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins/themify-icons/themify-icons.css') }}\">
    <!-- animation css -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins/animate/animate.css') }}\">
    <!-- aos -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins/aos/aos.css') }}\">
    <!-- venobox popup -->
    <link rel=\"stylesheet\" href=\"{{ asset('Front/plugins/venobox/venobox.css') }}\">

    <!-- Main Stylesheet -->
    <link href=\"{{ asset('Front/css/style.css') }}\" rel=\"stylesheet\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('Front/images/favicon.png') }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{ asset('Front/images/favicon.png') }}\" type=\"image/x-icon\">
{% endblock %}
</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"{{ asset('Front/images/preloader.gif') }}\" alt=\"preloader\">
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

  {%block header%}
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
            <li class=\"nav-item active\">
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
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/teacher.html.twig')}}\">Teacher</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/teacher-single.html.twig')}}\">Teacher Single</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/notice.html.twig')}}\">Notice</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/notice-single.html.twig')}}\">Notice Details</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/research.html.twig')}}\">Research</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/scholarship.html.twig')}}\">Scholarship</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/course-single.html.twig')}}\">Course Details</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/event-single.html.twig')}}\">Event Details</a></li>
                <li><a class=\"dropdown-item\" href=\"{{asset ('Front/blog-single.html.twig')}}\">Blog Details</a></li>
                
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
 {%endblock%}
<!-- /header -->

<!-- Modal -->
{% block body %}
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
{% endblock %}
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

<!-- hero slider -->
<section class=\"hero-section overlay bg-cover\" data-background=\"images/banner/banner-1.jpg\">
  <div class=\"container\">
    <div class=\"hero-slider\">
      <!-- slider item -->
      <div class=\"hero-slider-item\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <h1 class=\"text-white\" data-animation-out=\"fadeOutRight\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInLeft\" data-delay-in=\".1\">Your bright future is our mission</h1>
            <p class=\"text-muted mb-4\" data-animation-out=\"fadeOutRight\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInLeft\" data-delay-in=\".4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href=\"contact.html.twig\" class=\"btn btn-primary\" data-animation-out=\"fadeOutRight\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInLeft\" data-delay-in=\".7\">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class=\"hero-slider-item\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <h1 class=\"text-white\" data-animation-out=\"fadeOutUp\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">Your bright future is our mission</h1>
            <p class=\"text-muted mb-4\" data-animation-out=\"fadeOutUp\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href=\"contact.html.twig\" class=\"btn btn-primary\" data-animation-out=\"fadeOutUp\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".7\">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class=\"hero-slider-item\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            <h1 class=\"text-white\" data-animation-out=\"fadeOutDown\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">Your bright future is our mission</h1>
            <p class=\"text-muted mb-4\" data-animation-out=\"fadeOutDown\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".4\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor
              incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
            <a href=\"{{asset('Front/contact.html.twig')}}\" class=\"btn btn-primary\" data-animation-out=\"fadeOutDown\" data-delay-out=\"5\" data-duration-in=\".3\" data-animation-in=\"zoomIn\" data-delay-in=\".7\">Apply now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class=\"bg-gray overflow-md-hidden\">
  <div class=\"container-fluid p-0\">
    <div class=\"row no-gutters\">
      <div class=\"col-xl-4 col-lg-5 align-self-end\">
        <img class=\"img-fluid w-100\" src=\"{{asset('Front/images/banner/banner-feature.png')}}\" alt=\"banner-feature\">
      </div>
      <div class=\"col-xl-8 col-lg-7\">
        <div class=\"row feature-blocks bg-gray justify-content-between\">
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Scholorship News</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Our Notice Board</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Our Achievements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class=\"col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left\">
            <i class=\"ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon\"></i>
            <h3 class=\"mb-xl-4 mb-lg-3 mb-4\">Admission Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-md-6 order-2 order-md-1\">
        <h2 class=\"section-title\">About Educenter</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>
        <p>cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        <a href=\"about.html.twig\" class=\"btn btn-outline-primary\">Learn more</a>
      </div>
      <div class=\"col-md-6 order-1 order-md-2 mb-4 mb-md-0\">
        <img class=\"img-fluid w-100\" src=\"{{asset('Front/images/about/about-us.jpg')}}\" alt=\"about image\">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class=\"section-sm\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"d-flex align-items-center section-title justify-content-between\">
          <h2 class=\"mb-0 text-nowrap mr-3\">Our Course</h2>
          <div class=\"border-top w-100 border-primary d-none d-sm-block\"></div>
          <div>
            <a href=\"{{asset ('Front/courses.html.twig')}}\" class=\"btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block\">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class=\"row justify-content-center\">
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"{{asset('Front/images/courses/course-1.jpg')}}\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"{{asset('Front/course-single.html.twig')}}\">Humanities</a></li>
        </ul>
        <a href=\"{{asset('Front/course-single.html.twig')}}\">
          <h4 class=\"card-title\">Photography</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-2.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Programming</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-3.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Lifestyle Archives</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-4.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Complete Freelancing</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-5.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Branding Design</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class=\"col-lg-4 col-sm-6 mb-5\">
    <div class=\"card p-0 border-primary rounded-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/courses/course-6.jpg\" alt=\"course thumb\">
      <div class=\"card-body\">
        <ul class=\"list-inline mb-2\">
          <li class=\"list-inline-item\"><i class=\"ti-calendar mr-1 text-color\"></i>02-14-2018</li>
          <li class=\"list-inline-item\"><a class=\"text-color\" href=\"course-single.html.twig\">Humanities</a></li>
        </ul>
        <a href=\"course-single.html.twig\">
          <h4 class=\"card-title\">Art Design</h4>
        </a>
        <p class=\"card-text mb-4\"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna.</p>
        <a href=\"course-single.html.twig\" class=\"btn btn-primary btn-sm\">Apply now</a>
      </div>
    </div>
  </div>
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <a href=\"courses.html.twig\" class=\"btn btn-sm btn-outline-primary d-sm-none d-inline-block\">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class=\"section bg-primary\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h6 class=\"text-white font-secondary mb-0\">Click to Join the Advance Workshop</h6>
        <h2 class=\"section-title text-white\">Training In Advannce Networking</h2>
        <a href=\"contact.html.twig\" class=\"btn btn-light\">join now</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class=\"section bg-cover\" data-background=\"images/backgrounds/success-story.jpg\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 col-sm-4 position-relative success-video\">
        <a class=\"play-btn venobox\" href=\"https://youtu.be/nA1Aqp0sPQo\" data-vbtype=\"video\">
          <i class=\"ti-control-play\"></i>
        </a>
      </div>
      <div class=\"col-lg-6 col-sm-8\">
        <div class=\"bg-white p-5\">
          <h2 class=\"section-title\">Success Stories</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->
<section class=\"section bg-gray\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"d-flex align-items-center section-title justify-content-between\">
          <h2 class=\"mb-0 text-nowrap mr-3\">Upcoming Events</h2>
          <div class=\"border-top w-100 border-primary d-none d-sm-block\"></div>
          <div>
            <a href=\"events.html.twig\" class=\"btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block\">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row justify-content-center\">
  <!-- event -->
  <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card border-0 rounded-0 hover-shadow\">
      <div class=\"card-img position-relative\">
        <img class=\"card-img-top rounded-0\" src=\"images/events/event-1.jpg\" alt=\"event thumb\">
        <div class=\"card-date\"><span>18</span><br>December</div>
      </div>
      <div class=\"card-body\">
        <!-- location -->
        <p><i class=\"ti-location-pin text-primary mr-2\"></i>Dhanmondi Lake, Dhaka</p>
        <a href=\"event-single.html.twig\"><h4 class=\"card-title\">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card border-0 rounded-0 hover-shadow\">
      <div class=\"card-img position-relative\">
        <img class=\"card-img-top rounded-0\" src=\"images/events/event-2.jpg\" alt=\"event thumb\">
        <div class=\"card-date\"><span>21</span><br>December</div>
      </div>
      <div class=\"card-body\">
        <!-- location -->
        <p><i class=\"ti-location-pin text-primary mr-2\"></i>Dhanmondi Lake, Dhaka</p>
        <a href=\"event-single.html.twig\"><h4 class=\"card-title\">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card border-0 rounded-0 hover-shadow\">
      <div class=\"card-img position-relative\">
        <img class=\"card-img-top rounded-0\" src=\"images/events/event-3.jpg\" alt=\"event thumb\">
        <div class=\"card-date\"><span>23</span><br>December</div>
      </div>
      <div class=\"card-body\">
        <!-- location -->
        <p><i class=\"ti-location-pin text-primary mr-2\"></i>Dhanmondi Lake, Dhaka</p>
        <a href=\"event-single.html.twig\"><h4 class=\"card-title\">Lorem ipsum dolor amet, consectetur adipisicing.</h4></a>
      </div>
    </div>
  </div>
</div>
    <!-- mobile see all button -->
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <a href=\"course.html.twig\" class=\"btn btn-sm btn-outline-primary d-sm-none d-inline-block\">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12\">
        <h2 class=\"section-title\">Our Teachers</h2>
      </div>
      <!-- teacher -->
      <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
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
      <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
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
      <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
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
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- blog -->
<section class=\"section pt-0\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"section-title\">Latest News</h2>
      </div>
    </div>
    <div class=\"row justify-content-center\">
  <!-- blog post -->
  <article class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/blog/post-1.jpg\" alt=\"Post thumb\">
      <div class=\"card-body\">
        <!-- post meta -->
        <ul class=\"list-inline mb-3\">
          <!-- post date -->
          <li class=\"list-inline-item mr-3 ml-0\">August 28, 2018</li>
          <!-- author -->
          <li class=\"list-inline-item mr-3 ml-0\">By Somrat Sorkar</li>
        </ul>
        <a href=\"blog-single.html.twig\">
          <h4 class=\"card-title\">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href=\"blog-single.html.twig\" class=\"btn btn-primary btn-sm\">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"images/blog/post-2.jpg\" alt=\"Post thumb\">
      <div class=\"card-body\">
        <!-- post meta -->
        <ul class=\"list-inline mb-3\">
          <!-- post date -->
          <li class=\"list-inline-item mr-3 ml-0\">August 13, 2018</li>
          <!-- author -->
          <li class=\"list-inline-item mr-3 ml-0\">By Jonathon Drew</li>
        </ul>
        <a href=\"blog-single.html.twig\">
          <h4 class=\"card-title\">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href=\"blog-single.html.twig\" class=\"btn btn-primary btn-sm\">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
    <div class=\"card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow\">
      <img class=\"card-img-top rounded-0\" src=\"{{asset ('Front/images/blog/post-3.jpg')}}\" alt=\"Post thumb\">
      <div class=\"card-body\">
        <!-- post meta -->
        <ul class=\"list-inline mb-3\">
          <!-- post date -->
          <li class=\"list-inline-item mr-3 ml-0\">August 24, 2018</li>
          <!-- author -->
          <li class=\"list-inline-item mr-3 ml-0\">By Alex Pitt</li>
        </ul>
        <a href=\"{{asset ('Front/blog-single.html.twig')}}\">
          <h4 class=\"card-title\">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
        </a>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href=\"{{asset ('Front/blog-single.html.twig')}}\" class=\"btn btn-primary btn-sm\">read more</a>
      </div>
    </div>
  </article>
</div>
  </div>
</section>
<!-- /blog -->

<!-- footer -->

{%block footer %}
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
            , designed & developed by <a href=\"{{ asset('https://themefisher.com/') }}\"> class=\"text-muted\">Themefisher</a>
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

{%endblock%}
{% block js %}
    <!-- jQuery -->
    <script src=\"Front/plugins/jQuery/jquery.min.js\"></script>
    <!-- Bootstrap JS -->
    <script src=\"Front/plugins/bootstrap/bootstrap.min.js\"></script>
    <!-- slick slider -->
    <script src=\"{{asset('Front/plugins/slick/slick.min.js')}}\"></script>
    <!-- aos -->
    <script src=\"{{asset('Front/plugins/aos/aos.js')}}\"></script>
    <!-- venobox popup -->
    <script src=\"{{asset('Front/plugins/venobox/venobox.min.js')}}\"></script>
    <!-- filter -->
    <script src=\"{{asset('Front/plugins/filterizr/jquery.filterizr.min.js')}}\"></script>
    <!-- google map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY\"></script> {# Replace YOUR_API_KEY with your actual Google Maps API key #}
   <script src=\"{{asset('Front/plugins/google-map/gmap.js')}}\"></script>

<!-- Main Script -->
<script src=\"{{asset('Front/js/script.js')}}\"></script>
{% endblock %}



</body>
</html>
", "Front/base.html.twig", "C:\\Users\\user\\Desktop\\formini crud\\formini.tn\\templates\\Front\\base.html.twig");
    }
}
