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

/* test/about.html */
class __TwigTemplate_9ff8c82641de3c2ce0bbe00e6df1249e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/about.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/about.html"));

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
  <link rel=\"stylesheet\" href=\"plugins/bootstrap/bootstrap.min.css\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"plugins/slick/slick.css\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"plugins/themify-icons/themify-icons.css\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"plugins/animate/animate.css\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"plugins/aos/aos.css\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"plugins/venobox/venobox.css\">

  <!-- Main Stylesheet -->
  <link href=\"css/style.css\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"images/preloader.gif\" alt=\"preloader\">
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
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"notice.html\">notice</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"research.html\">research</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"scholarship.html\">SCHOLARSHIP</a></li>
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
        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"images/logo.png\" alt=\"logo\"></a>
        <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
          aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navigation\">
          <ul class=\"navbar-nav ml-auto text-center\">
            <li class=\"nav-item @@home\">
              <a class=\"nav-link\" href=\"index.html\">Home</a>
            </li>
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"about.html\">About</a>
            </li>
            <li class=\"nav-item @@courses\">
              <a class=\"nav-link\" href=\"courses.html\">COURSES</a>
            </li>
            <li class=\"nav-item @@events\">
              <a class=\"nav-link\" href=\"events.html\">EVENTS</a>
            </li>
            <li class=\"nav-item @@blog\">
              <a class=\"nav-link\" href=\"blog.html\">BLOG</a>
            </li>
            <li class=\"nav-item dropdown view\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Pages
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"teacher.html\">Teacher</a></li>
                <li><a class=\"dropdown-item\" href=\"teacher-single.html\">Teacher Single</a></li>
                <li><a class=\"dropdown-item\" href=\"notice.html\">Notice</a></li>
                <li><a class=\"dropdown-item\" href=\"notice-single.html\">Notice Details</a></li>
                <li><a class=\"dropdown-item\" href=\"research.html\">Research</a></li>
                <li><a class=\"dropdown-item\" href=\"scholarship.html\">Scholarship</a></li>
                <li><a class=\"dropdown-item\" href=\"course-single.html\">Course Details</a></li>
                <li><a class=\"dropdown-item\" href=\"event-single.html\">Event Details</a></li>
                <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Details</a></li>
                
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
              <a class=\"nav-link\" href=\"contact.html\">CONTACT</a>
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
          <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" href=\"index.html\">Home</a></li>
          <li class=\"list-inline-item text-white h3 font-secondary nasted\">About Us</li>
        </ul>
        <p class=\"text-lighten mb-0\">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <img class=\"img-fluid w-100 mb-4\" src=\"images/about/about-page.jpg\" alt=\"about image\">
        <h2 class=\"section-title\">ABOUT OUR JOURNY</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe ipsa illo quod veritatis, magni debitis fugiat dolore voluptates! Consequatur, aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat perferendis sint optio similique. Et amet magni facilis vero corporis quos.</p>
        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum a, facere fugit error accusamus est officiis vero in, nostrum laboriosam corrupti explicabo, cumque repudiandae deleniti perspiciatis quae consectetur enim. Laboriosam!</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->
<section class=\"section-sm bg-primary\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"60\">0</h2>
          <h5 class=\"text-white\">TEACHERS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"50\">0</h2>
          <h5 class=\"text-white\">COURSES</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"1000\">0</h2>
          <h5 class=\"text-white\">STUDENTS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"3737\">0</h2>
          <h5 class=\"text-white\">SATISFIED CLIENT</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /funfacts -->

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
              <a href=\"teacher-single.html\">
                <h4 class=\"card-title\">Jacke Masito</h4>
              </a>
              <div class=\"d-flex justify-content-between\">
                <span>Teacher</span>
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
        <!-- teacher -->
        <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
          <div class=\"card border-0 rounded-0 hover-shadow\">
            <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
            <div class=\"card-body\">
              <a href=\"teacher-single.html\">
                <h4 class=\"card-title\">Clark Malik</h4>
              </a>
              <div class=\"d-flex justify-content-between\">
                <span>Teacher</span>
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
        <!-- teacher -->
        <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
          <div class=\"card border-0 rounded-0 hover-shadow\">
            <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
            <div class=\"card-body\">
              <a href=\"teacher-single.html\">
                <h4 class=\"card-title\">John Doe</h4>
              </a>
              <div class=\"d-flex justify-content-between\">
                <span>Teacher</span>
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
          <a class=\"logo-footer\" href=\"index.html\"><img class=\"img-fluid mb-4\" src=\"images/logo.png\" alt=\"logo\"></a>
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
            <li class=\"mb-3\"><a class=\"text-color\" href=\"about.html\">About Us</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"teacher.html\">Our Teacher</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"contact.html\">Contact</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"blog.html\">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">LINKS</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"courses.html\">Courses</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"events.html\">Events</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"notice.html\">Notice</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"scholarship.html\">Scholarship</a></li>
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
<script src=\"plugins/jQuery/jquery.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"plugins/bootstrap/bootstrap.min.js\"></script>
<!-- slick slider -->
<script src=\"plugins/slick/slick.min.js\"></script>
<!-- aos -->
<script src=\"plugins/aos/aos.js\"></script>
<!-- venobox popup -->
<script src=\"plugins/venobox/venobox.min.js\"></script>
<!-- filter -->
<script src=\"plugins/filterizr/jquery.filterizr.min.js\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"plugins/google-map/gmap.js\"></script>

<!-- Main Script -->
<script src=\"js/script.js\"></script>

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
        return "test/about.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
  <link rel=\"stylesheet\" href=\"plugins/bootstrap/bootstrap.min.css\">
  <!-- slick slider -->
  <link rel=\"stylesheet\" href=\"plugins/slick/slick.css\">
  <!-- themefy-icon -->
  <link rel=\"stylesheet\" href=\"plugins/themify-icons/themify-icons.css\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"plugins/animate/animate.css\">
  <!-- aos -->
  <link rel=\"stylesheet\" href=\"plugins/aos/aos.css\">
  <!-- venobox popup -->
  <link rel=\"stylesheet\" href=\"plugins/venobox/venobox.css\">

  <!-- Main Stylesheet -->
  <link href=\"css/style.css\" rel=\"stylesheet\">

  <!--Favicon-->
  <link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

</head>

<body>
  <!-- preloader start -->
  <div class=\"preloader\">
    <img src=\"images/preloader.gif\" alt=\"preloader\">
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
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"notice.html\">notice</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"research.html\">research</a></li>
            <li class=\"list-inline-item\"><a class=\"text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block\" href=\"scholarship.html\">SCHOLARSHIP</a></li>
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
        <a class=\"navbar-brand\" href=\"index.html\"><img src=\"images/logo.png\" alt=\"logo\"></a>
        <button class=\"navbar-toggler rounded-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
          aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navigation\">
          <ul class=\"navbar-nav ml-auto text-center\">
            <li class=\"nav-item @@home\">
              <a class=\"nav-link\" href=\"index.html\">Home</a>
            </li>
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"about.html\">About</a>
            </li>
            <li class=\"nav-item @@courses\">
              <a class=\"nav-link\" href=\"courses.html\">COURSES</a>
            </li>
            <li class=\"nav-item @@events\">
              <a class=\"nav-link\" href=\"events.html\">EVENTS</a>
            </li>
            <li class=\"nav-item @@blog\">
              <a class=\"nav-link\" href=\"blog.html\">BLOG</a>
            </li>
            <li class=\"nav-item dropdown view\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Pages
              </a>
              <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"teacher.html\">Teacher</a></li>
                <li><a class=\"dropdown-item\" href=\"teacher-single.html\">Teacher Single</a></li>
                <li><a class=\"dropdown-item\" href=\"notice.html\">Notice</a></li>
                <li><a class=\"dropdown-item\" href=\"notice-single.html\">Notice Details</a></li>
                <li><a class=\"dropdown-item\" href=\"research.html\">Research</a></li>
                <li><a class=\"dropdown-item\" href=\"scholarship.html\">Scholarship</a></li>
                <li><a class=\"dropdown-item\" href=\"course-single.html\">Course Details</a></li>
                <li><a class=\"dropdown-item\" href=\"event-single.html\">Event Details</a></li>
                <li><a class=\"dropdown-item\" href=\"blog-single.html\">Blog Details</a></li>
                
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
              <a class=\"nav-link\" href=\"contact.html\">CONTACT</a>
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
          <li class=\"list-inline-item\"><a class=\"h2 text-primary font-secondary\" href=\"index.html\">Home</a></li>
          <li class=\"list-inline-item text-white h3 font-secondary nasted\">About Us</li>
        </ul>
        <p class=\"text-lighten mb-0\">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <img class=\"img-fluid w-100 mb-4\" src=\"images/about/about-page.jpg\" alt=\"about image\">
        <h2 class=\"section-title\">ABOUT OUR JOURNY</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe ipsa illo quod veritatis, magni debitis fugiat dolore voluptates! Consequatur, aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat perferendis sint optio similique. Et amet magni facilis vero corporis quos.</p>
        <p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum a, facere fugit error accusamus est officiis vero in, nostrum laboriosam corrupti explicabo, cumque repudiandae deleniti perspiciatis quae consectetur enim. Laboriosam!</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->

<!-- funfacts -->
<section class=\"section-sm bg-primary\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"60\">0</h2>
          <h5 class=\"text-white\">TEACHERS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"50\">0</h2>
          <h5 class=\"text-white\">COURSES</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"1000\">0</h2>
          <h5 class=\"text-white\">STUDENTS</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class=\"col-md-3 col-sm-6 mb-4 mb-md-0\">
        <div class=\"text-center\">
          <h2 class=\"count text-white\" data-count=\"3737\">0</h2>
          <h5 class=\"text-white\">SATISFIED CLIENT</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /funfacts -->

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
              <a href=\"teacher-single.html\">
                <h4 class=\"card-title\">Jacke Masito</h4>
              </a>
              <div class=\"d-flex justify-content-between\">
                <span>Teacher</span>
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
        <!-- teacher -->
        <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
          <div class=\"card border-0 rounded-0 hover-shadow\">
            <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-2.jpg\" alt=\"teacher\">
            <div class=\"card-body\">
              <a href=\"teacher-single.html\">
                <h4 class=\"card-title\">Clark Malik</h4>
              </a>
              <div class=\"d-flex justify-content-between\">
                <span>Teacher</span>
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
        <!-- teacher -->
        <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\">
          <div class=\"card border-0 rounded-0 hover-shadow\">
            <img class=\"card-img-top rounded-0\" src=\"images/teachers/teacher-3.jpg\" alt=\"teacher\">
            <div class=\"card-body\">
              <a href=\"teacher-single.html\">
                <h4 class=\"card-title\">John Doe</h4>
              </a>
              <div class=\"d-flex justify-content-between\">
                <span>Teacher</span>
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
          <a class=\"logo-footer\" href=\"index.html\"><img class=\"img-fluid mb-4\" src=\"images/logo.png\" alt=\"logo\"></a>
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
            <li class=\"mb-3\"><a class=\"text-color\" href=\"about.html\">About Us</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"teacher.html\">Our Teacher</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"contact.html\">Contact</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"blog.html\">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0\">
          <h4 class=\"text-white mb-5\">LINKS</h4>
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\"><a class=\"text-color\" href=\"courses.html\">Courses</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"events.html\">Events</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"notice.html\">Notice</a></li>
            <li class=\"mb-3\"><a class=\"text-color\" href=\"scholarship.html\">Scholarship</a></li>
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
<script src=\"plugins/jQuery/jquery.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"plugins/bootstrap/bootstrap.min.js\"></script>
<!-- slick slider -->
<script src=\"plugins/slick/slick.min.js\"></script>
<!-- aos -->
<script src=\"plugins/aos/aos.js\"></script>
<!-- venobox popup -->
<script src=\"plugins/venobox/venobox.min.js\"></script>
<!-- filter -->
<script src=\"plugins/filterizr/jquery.filterizr.min.js\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"plugins/google-map/gmap.js\"></script>

<!-- Main Script -->
<script src=\"js/script.js\"></script>

</body>
</html>", "test/about.html", "C:\\Users\\rymra\\IdeaProjects\\formini.tn\\templates\\test\\about.html");
    }
}
