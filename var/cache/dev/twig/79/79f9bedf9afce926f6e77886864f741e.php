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

/* Back/ui-cards.html.twig */
class __TwigTemplate_b8c1390bd91c82d6fd7f6b4cb692a362 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/ui-cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/ui-cards.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"description\" content=\"Responsive Admin &amp; Dashboard Template based on Bootstrap 5\">
\t<meta name=\"author\" content=\"AdminKit\">
\t<meta name=\"keywords\" content=\"adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web\">

\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t<link rel=\"shortcut icon\" href=\"img/icons/icon-48x48.png\" />

\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/ui-cards.html\" />

\t<title>Cards | AdminKit Demo</title>

\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
</head>

<body>
\t<div class=\"wrapper\">
\t\t<nav id=\"sidebar\" class=\"sidebar js-sidebar\">
\t\t\t<div class=\"sidebar-content js-simplebar\">
\t\t\t\t<a class=\"sidebar-brand\" href=\"indexadmin.html.twig\">
          <span class=\"align-middle\">AdminKit</span>
        </a>

\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPages
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"indexadmin.htmltwig\">
              <i class=\"align-middle\" data-feather=\"sliders\"></i> <span class=\"align-middle\">Dashboard</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html.twig\">
              <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Profile</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-in.html.twig\">
              <i class=\"align-middle\" data-feather=\"log-in\"></i> <span class=\"align-middle\">Sign In</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-up.html.twig\">
              <i class=\"align-middle\" data-feather=\"user-plus\"></i> <span class=\"align-middle\">Sign Up</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-blank.html.twig\">
              <i class=\"align-middle\" data-feather=\"book\"></i> <span class=\"align-middle\">Blank</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tTools & Components
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-buttons.html.twig\">
              <i class=\"align-middle\" data-feather=\"square\"></i> <span class=\"align-middle\">Buttons</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-forms.html.twig\">
              <i class=\"align-middle\" data-feather=\"check-square\"></i> <span class=\"align-middle\">Forms</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-cards.html.twig\">
              <i class=\"align-middle\" data-feather=\"grid\"></i> <span class=\"align-middle\">Cards</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-typography.html.twig\">
              <i class=\"align-middle\" data-feather=\"align-left\"></i> <span class=\"align-middle\">Typography</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"icons-feather.html.twig\">
              <i class=\"align-middle\" data-feather=\"coffee\"></i> <span class=\"align-middle\">Icons</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPlugins & Addons
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"charts-chartjs.html.twig\">
              <i class=\"align-middle\" data-feather=\"bar-chart-2\"></i> <span class=\"align-middle\">Charts</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"maps-google.html.twig\">
              <i class=\"align-middle\" data-feather=\"map\"></i> <span class=\"align-middle\">Maps</span>
            </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"sidebar-cta\">
\t\t\t\t\t<div class=\"sidebar-cta-content\">
\t\t\t\t\t\t<strong class=\"d-inline-block mb-2\">Upgrade to Pro</strong>
\t\t\t\t\t\t<div class=\"mb-3 text-sm\">
\t\t\t\t\t\t\tAre you looking for more components? Check out our premium version.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t<a href=\"upgrade-to-pro.html.twig\" class=\"btn btn-primary\">Upgrade to Pro</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t<div class=\"main\">
\t\t\t<nav class=\"navbar navbar-expand navbar-light navbar-bg\">
\t\t\t\t<a class=\"sidebar-toggle js-sidebar-toggle\">
          <i class=\"hamburger align-self-center\"></i>
        </a>

\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"navbar-nav navbar-align\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t4 New Notifications
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">30m ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.8</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Christina accepted your request.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">14h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-square\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t4 New Messages
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Vanessa Tucker</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/avatar-2.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">William Harris</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Christina Mason</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/avatar-3.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Sharon Lessman</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
                <i class=\"align-middle\" data-feather=\"settings\"></i>
              </a>

\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
                <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/avatar.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\" /> <span class=\"text-dark\">Charles Hall</span>
              </a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html.twig\"><i class=\"align-middle me-1\" data-feather=\"user\"></i> Profile</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i> Analytics</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"indexadmin.html.twig\"><i class=\"align-middle me-1\" data-feather=\"settings\"></i> Settings & Privacy</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"align-middle me-1\" data-feather=\"help-circle\"></i> Help Center</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log out</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"content\">
\t\t\t\t<div class=\"container-fluid p-0\">

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<h1 class=\"h3 d-inline align-middle\">Cards</h1>
\t\t\t\t\t\t<a class=\"badge bg-dark text-white ms-2\" href=\"upgrade-to-pro.html.twig\">
      Get more card examples
  </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/photos/unsplash-1.jpg"), "html", null, true);
        echo "\" alt=\"Unsplash\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with image and links</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/photos/unsplash-2.jpg"), "html", null, true);
        echo "\" alt=\"Unsplash\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with image and button</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with links</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with button</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</main>

\t\t\t<footer class=\"footer\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row text-muted\">
\t\t\t\t\t\t<div class=\"col-6 text-start\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\"><strong>AdminKit</strong></a> - <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\"><strong>Bootstrap Admin Template</strong></a>\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 text-end\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Help Center</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Privacy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Terms</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</div>

\t<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/app.js"), "html", null, true);
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
        return "Back/ui-cards.html.twig";
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
        return array (  457 => 389,  384 => 319,  367 => 305,  336 => 277,  312 => 256,  297 => 244,  282 => 232,  267 => 220,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"description\" content=\"Responsive Admin &amp; Dashboard Template based on Bootstrap 5\">
\t<meta name=\"author\" content=\"AdminKit\">
\t<meta name=\"keywords\" content=\"adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web\">

\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t<link rel=\"shortcut icon\" href=\"img/icons/icon-48x48.png\" />

\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/ui-cards.html\" />

\t<title>Cards | AdminKit Demo</title>

\t<link href=\"{{asset('Back/css/app.css')}}\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
</head>

<body>
\t<div class=\"wrapper\">
\t\t<nav id=\"sidebar\" class=\"sidebar js-sidebar\">
\t\t\t<div class=\"sidebar-content js-simplebar\">
\t\t\t\t<a class=\"sidebar-brand\" href=\"indexadmin.html.twig\">
          <span class=\"align-middle\">AdminKit</span>
        </a>

\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPages
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"indexadmin.htmltwig\">
              <i class=\"align-middle\" data-feather=\"sliders\"></i> <span class=\"align-middle\">Dashboard</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html.twig\">
              <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Profile</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-in.html.twig\">
              <i class=\"align-middle\" data-feather=\"log-in\"></i> <span class=\"align-middle\">Sign In</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-up.html.twig\">
              <i class=\"align-middle\" data-feather=\"user-plus\"></i> <span class=\"align-middle\">Sign Up</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-blank.html.twig\">
              <i class=\"align-middle\" data-feather=\"book\"></i> <span class=\"align-middle\">Blank</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tTools & Components
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-buttons.html.twig\">
              <i class=\"align-middle\" data-feather=\"square\"></i> <span class=\"align-middle\">Buttons</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-forms.html.twig\">
              <i class=\"align-middle\" data-feather=\"check-square\"></i> <span class=\"align-middle\">Forms</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-cards.html.twig\">
              <i class=\"align-middle\" data-feather=\"grid\"></i> <span class=\"align-middle\">Cards</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"ui-typography.html.twig\">
              <i class=\"align-middle\" data-feather=\"align-left\"></i> <span class=\"align-middle\">Typography</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"icons-feather.html.twig\">
              <i class=\"align-middle\" data-feather=\"coffee\"></i> <span class=\"align-middle\">Icons</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPlugins & Addons
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"charts-chartjs.html.twig\">
              <i class=\"align-middle\" data-feather=\"bar-chart-2\"></i> <span class=\"align-middle\">Charts</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"maps-google.html.twig\">
              <i class=\"align-middle\" data-feather=\"map\"></i> <span class=\"align-middle\">Maps</span>
            </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<div class=\"sidebar-cta\">
\t\t\t\t\t<div class=\"sidebar-cta-content\">
\t\t\t\t\t\t<strong class=\"d-inline-block mb-2\">Upgrade to Pro</strong>
\t\t\t\t\t\t<div class=\"mb-3 text-sm\">
\t\t\t\t\t\t\tAre you looking for more components? Check out our premium version.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-grid\">
\t\t\t\t\t\t\t<a href=\"upgrade-to-pro.html.twig\" class=\"btn btn-primary\">Upgrade to Pro</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t\t<div class=\"main\">
\t\t\t<nav class=\"navbar navbar-expand navbar-light navbar-bg\">
\t\t\t\t<a class=\"sidebar-toggle js-sidebar-toggle\">
          <i class=\"hamburger align-self-center\"></i>
        </a>

\t\t\t\t<div class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"navbar-nav navbar-align\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"indicator\">4</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t4 New Notifications
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-danger\" data-feather=\"alert-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Update completed</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Restart server 12 to complete the update.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">30m ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-warning\" data-feather=\"bell\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Lorem ipsum</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-primary\" data-feather=\"home\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Login from 192.186.1.8</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"text-success\" data-feather=\"user-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">New connection</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Christina accepted your request.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">14h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all notifications</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"message-square\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-end py-0\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header\">
\t\t\t\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t\t\t\t4 New Messages
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('Back/img/avatars/avatar-5.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Vanessa Tucker</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('Back/img/avatars/avatar-2.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"William Harris\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">William Harris</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Curabitur ligula sapien euismod vitae.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">2h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('Back/img/avatars/avatar-4.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Christina Mason\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Christina Mason</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Pellentesque auctor neque nec urna.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">4h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('Back/img/avatars/avatar-3.jpg')}}\" class=\"avatar img-fluid rounded-circle\" alt=\"Sharon Lessman\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 ps-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Sharon Lessman</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">5h ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">Show all messages</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-icon dropdown-toggle d-inline-block d-sm-none\" href=\"#\" data-bs-toggle=\"dropdown\">
                <i class=\"align-middle\" data-feather=\"settings\"></i>
              </a>

\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle d-none d-sm-inline-block\" href=\"#\" data-bs-toggle=\"dropdown\">
                <img src=\"{{asset('Back/img/avatars/avatar.jpg')}}\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\" /> <span class=\"text-dark\">Charles Hall</span>
              </a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"pages-profile.html.twig\"><i class=\"align-middle me-1\" data-feather=\"user\"></i> Profile</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"align-middle me-1\" data-feather=\"pie-chart\"></i> Analytics</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"indexadmin.html.twig\"><i class=\"align-middle me-1\" data-feather=\"settings\"></i> Settings & Privacy</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"><i class=\"align-middle me-1\" data-feather=\"help-circle\"></i> Help Center</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log out</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<main class=\"content\">
\t\t\t\t<div class=\"container-fluid p-0\">

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<h1 class=\"h3 d-inline align-middle\">Cards</h1>
\t\t\t\t\t\t<a class=\"badge bg-dark text-white ms-2\" href=\"upgrade-to-pro.html.twig\">
      Get more card examples
  </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"{{asset('Back/img/photos/unsplash-1.jpg')}}\" alt=\"Unsplash\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with image and links</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<img class=\"card-img-top\" src=\"{{asset('Back/img/photos/unsplash-2.jpg')}}\" alt=\"Unsplash\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with image and button</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with links</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Card with button</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</main>

\t\t\t<footer class=\"footer\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row text-muted\">
\t\t\t\t\t\t<div class=\"col-6 text-start\">
\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\"><strong>AdminKit</strong></a> - <a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\"><strong>Bootstrap Admin Template</strong></a>\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 text-end\">
\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Help Center</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Privacy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t<a class=\"text-muted\" href=\"https://adminkit.io/\" target=\"_blank\">Terms</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t</div>

\t<script src=\"{{asset('Back/js/app.js')}}\"></script>

</body>

</html>", "Back/ui-cards.html.twig", "C:\\Users\\rymra\\IdeaProjects\\formini.tn\\templates\\Back\\ui-cards.html.twig");
    }
}