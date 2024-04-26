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

/* Back/admin.html.twig */
class __TwigTemplate_8eb3f5c0b4435cef6d2540190af2dfcc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/admin.html.twig"));

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
\t<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/icons/icon-48x48.png"), "html", null, true);
        echo "\" />

\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/\" />

\t<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

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
\t\t\t\t<a class=\"sidebar-brand\" href=\"admin.html.twig\">
          <span class=\"align-middle\">AdminKit</span>
        </a>

\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPages
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"admin.html.twig\">
              <i class=\"align-middle\" data-feather=\"sliders\"></i> <span class=\"align-middle\">Dashboard</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html.twig\">
              <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Utilisateurs</span>
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
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"/evenement\">
              <i class=\"align-middle\" data-feather=\"book\"></i> <span class=\"align-middle\">Evenement</span>
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

\t\t\t\t\t<li class=\"sidebar-item\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/avatars/avatar-5.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
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

\t\t\t\t\t<h1 class=\"h3 mb-3\"><strong>Analytics</strong> Dashboard</h1>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-5 d-flex\">
\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Sales</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"truck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">2.382</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> -3.65% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Visitors</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">14.212</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> 5.25% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Earnings</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">\$21.300</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> 6.65% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Orders</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">64</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> -2.25% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-7\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Recent Movement</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"chart chart-sm\">
\t\t\t\t\t\t\t\t\t\t<canvas id=\"chartjs-dashboard-line\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Browser Usage</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-center w-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"py-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart chart-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"chartjs-dashboard-pie\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<table class=\"table mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Chrome</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">4306</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Firefox</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">3801</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>IE</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">1689</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Real-Time</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body px-4\">
\t\t\t\t\t\t\t\t\t<div id=\"world_map\" style=\"height:350px;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1\">
\t\t\t\t\t\t\t<div class=\"card flex-fill\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Calendar</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-center w-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"datetimepicker-dashboard\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-8 col-xxl-9 d-flex\">
\t\t\t\t\t\t\t<div class=\"card flex-fill\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Latest Projects</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-hover my-0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"d-none d-xl-table-cell\">Start Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"d-none d-xl-table-cell\">End Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"d-none d-md-table-cell\">Assignee</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Apollo</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Vanessa Tucker</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Fireball</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-danger\">Cancelled</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">William Harris</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Hades</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Sharon Lessman</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Nitro</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-warning\">In progress</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Vanessa Tucker</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Phoenix</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">William Harris</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project X</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Sharon Lessman</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Romeo</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Christina Mason</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Wombat</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-warning\">In progress</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">William Harris</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-4 col-xxl-3 d-flex\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Monthly Sales</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-center chart chart-lg\">
\t\t\t\t\t\t\t\t\t\t<canvas id=\"chartjs-dashboard-bar\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
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
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/js/app.js"), "html", null, true);
        echo "\"></script>

\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tvar ctx = document.getElementById(\"chartjs-dashboard-line\").getContext(\"2d\");
\t\t\tvar gradient = ctx.createLinearGradient(0, 0, 0, 225);
\t\t\tgradient.addColorStop(0, \"rgba(215, 227, 244, 1)\");
\t\t\tgradient.addColorStop(1, \"rgba(215, 227, 244, 0)\");
\t\t\t// Line chart
\t\t\tnew Chart(document.getElementById(\"chartjs-dashboard-line\"), {
\t\t\t\ttype: \"line\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tlabel: \"Sales (\$)\",
\t\t\t\t\t\tfill: true,
\t\t\t\t\t\tbackgroundColor: gradient,
\t\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\t\tdata: [
\t\t\t\t\t\t\t2115,
\t\t\t\t\t\t\t1562,
\t\t\t\t\t\t\t1584,
\t\t\t\t\t\t\t1892,
\t\t\t\t\t\t\t1587,
\t\t\t\t\t\t\t1923,
\t\t\t\t\t\t\t2566,
\t\t\t\t\t\t\t2448,
\t\t\t\t\t\t\t2805,
\t\t\t\t\t\t\t3438,
\t\t\t\t\t\t\t2917,
\t\t\t\t\t\t\t3327
\t\t\t\t\t\t]
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tmaintainAspectRatio: false,
\t\t\t\t\tlegend: {
\t\t\t\t\t\tdisplay: false
\t\t\t\t\t},
\t\t\t\t\ttooltips: {
\t\t\t\t\t\tintersect: false
\t\t\t\t\t},
\t\t\t\t\thover: {
\t\t\t\t\t\tintersect: true
\t\t\t\t\t},
\t\t\t\t\tplugins: {
\t\t\t\t\t\tfiller: {
\t\t\t\t\t\t\tpropagate: false
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tscales: {
\t\t\t\t\t\txAxes: [{
\t\t\t\t\t\t\treverse: true,
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tcolor: \"rgba(0,0,0,0.0)\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}],
\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\tstepSize: 1000
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdisplay: true,
\t\t\t\t\t\t\tborderDash: [3, 3],
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tcolor: \"rgba(0,0,0,0.0)\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}]
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t// Pie chart
\t\t\tnew Chart(document.getElementById(\"chartjs-dashboard-pie\"), {
\t\t\t\ttype: \"pie\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [\"Chrome\", \"Firefox\", \"IE\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tdata: [4306, 3801, 1689],
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\twindow.theme.primary,
\t\t\t\t\t\t\twindow.theme.warning,
\t\t\t\t\t\t\twindow.theme.danger
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 5
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tresponsive: !window.MSInputMethodContext,
\t\t\t\t\tmaintainAspectRatio: false,
\t\t\t\t\tlegend: {
\t\t\t\t\t\tdisplay: false
\t\t\t\t\t},
\t\t\t\t\tcutoutPercentage: 75
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t// Bar chart
\t\t\tnew Chart(document.getElementById(\"chartjs-dashboard-bar\"), {
\t\t\t\ttype: \"bar\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tlabel: \"This year\",
\t\t\t\t\t\tbackgroundColor: window.theme.primary,
\t\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\t\thoverBackgroundColor: window.theme.primary,
\t\t\t\t\t\thoverBorderColor: window.theme.primary,
\t\t\t\t\t\tdata: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
\t\t\t\t\t\tbarPercentage: .75,
\t\t\t\t\t\tcategoryPercentage: .5
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tmaintainAspectRatio: false,
\t\t\t\t\tlegend: {
\t\t\t\t\t\tdisplay: false
\t\t\t\t\t},
\t\t\t\t\tscales: {
\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tdisplay: false
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstacked: false,
\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\tstepSize: 20
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}],
\t\t\t\t\t\txAxes: [{
\t\t\t\t\t\t\tstacked: false,
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tcolor: \"transparent\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}]
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tvar markers = [{
\t\t\t\t\tcoords: [31.230391, 121.473701],
\t\t\t\t\tname: \"Shanghai\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [28.704060, 77.102493],
\t\t\t\t\tname: \"Delhi\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [6.524379, 3.379206],
\t\t\t\t\tname: \"Lagos\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [35.689487, 139.691711],
\t\t\t\t\tname: \"Tokyo\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [23.129110, 113.264381],
\t\t\t\t\tname: \"Guangzhou\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [40.7127837, -74.0059413],
\t\t\t\t\tname: \"New York\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [34.052235, -118.243683],
\t\t\t\t\tname: \"Los Angeles\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [41.878113, -87.629799],
\t\t\t\t\tname: \"Chicago\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [51.507351, -0.127758],
\t\t\t\t\tname: \"London\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [40.416775, -3.703790],
\t\t\t\t\tname: \"Madrid \"
\t\t\t\t}
\t\t\t];
\t\t\tvar map = new jsVectorMap({
\t\t\t\tmap: \"world\",
\t\t\t\tselector: \"#world_map\",
\t\t\t\tzoomButtons: true,
\t\t\t\tmarkers: markers,
\t\t\t\tmarkerStyle: {
\t\t\t\t\tinitial: {
\t\t\t\t\t\tr: 9,
\t\t\t\t\t\tstrokeWidth: 7,
\t\t\t\t\t\tstokeOpacity: .4,
\t\t\t\t\t\tfill: window.theme.primary
\t\t\t\t\t},
\t\t\t\t\thover: {
\t\t\t\t\t\tfill: window.theme.primary,
\t\t\t\t\t\tstroke: window.theme.primary
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tzoomOnScroll: false
\t\t\t});
\t\t\twindow.addEventListener(\"resize\", () => {
\t\t\t\tmap.updateSize();
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tvar date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
\t\t\tvar defaultDate = date.getUTCFullYear() + \"-\" + (date.getUTCMonth() + 1) + \"-\" + date.getUTCDate();
\t\t\tdocument.getElementById(\"datetimepicker-dashboard\").flatpickr({
\t\t\t\tinline: true,
\t\t\t\tprevArrow: \"<span title=\\\"Previous month\\\">&laquo;</span>\",
\t\t\t\tnextArrow: \"<span title=\\\"Next month\\\">&raquo;</span>\",
\t\t\t\tdefaultDate: defaultDate
\t\t\t});
\t\t});
\t</script>

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
        return "Back/admin.html.twig";
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
        return array (  656 => 594,  336 => 277,  312 => 256,  297 => 244,  282 => 232,  66 => 19,  57 => 13,  43 => 1,);
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
\t<link rel=\"shortcut icon\" href=\"{{ asset ('Back/img/icons/icon-48x48.png')}}\" />

\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/\" />

\t<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

\t<link href=\"{{ asset ('Back/css/app.css')}}\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
</head>

<body>
\t<div class=\"wrapper\">
\t\t<nav id=\"sidebar\" class=\"sidebar js-sidebar\">
\t\t\t<div class=\"sidebar-content js-simplebar\">
\t\t\t\t<a class=\"sidebar-brand\" href=\"admin.html.twig\">
          <span class=\"align-middle\">AdminKit</span>
        </a>

\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPages
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"admin.html.twig\">
              <i class=\"align-middle\" data-feather=\"sliders\"></i> <span class=\"align-middle\">Dashboard</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html.twig\">
              <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Utilisateurs</span>
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
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"/evenement\">
              <i class=\"align-middle\" data-feather=\"book\"></i> <span class=\"align-middle\">Evenement</span>
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

\t\t\t\t\t<li class=\"sidebar-item\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/avatars/avatar-5.jpg\" class=\"avatar img-fluid rounded-circle\" alt=\"Vanessa Tucker\">
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

\t\t\t\t\t<h1 class=\"h3 mb-3\"><strong>Analytics</strong> Dashboard</h1>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-5 d-flex\">
\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Sales</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"truck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">2.382</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> -3.65% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Visitors</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">14.212</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> 5.25% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Earnings</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">\$21.300</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> 6.65% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Orders</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">64</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger\"> <i class=\"mdi mdi-arrow-bottom-right\"></i> -2.25% </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Since last week</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-7\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Recent Movement</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body py-3\">
\t\t\t\t\t\t\t\t\t<div class=\"chart chart-sm\">
\t\t\t\t\t\t\t\t\t\t<canvas id=\"chartjs-dashboard-line\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Browser Usage</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-center w-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"py-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart chart-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"chartjs-dashboard-pie\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<table class=\"table mb-0\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Chrome</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">4306</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>Firefox</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">3801</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>IE</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">1689</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Real-Time</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body px-4\">
\t\t\t\t\t\t\t\t\t<div id=\"world_map\" style=\"height:350px;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1\">
\t\t\t\t\t\t\t<div class=\"card flex-fill\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Calendar</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-center w-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"datetimepicker-dashboard\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-8 col-xxl-9 d-flex\">
\t\t\t\t\t\t\t<div class=\"card flex-fill\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Latest Projects</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<table class=\"table table-hover my-0\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"d-none d-xl-table-cell\">Start Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"d-none d-xl-table-cell\">End Date</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"d-none d-md-table-cell\">Assignee</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Apollo</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Vanessa Tucker</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Fireball</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-danger\">Cancelled</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">William Harris</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Hades</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Sharon Lessman</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Nitro</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-warning\">In progress</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Vanessa Tucker</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Phoenix</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">William Harris</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project X</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Sharon Lessman</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Romeo</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success\">Done</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">Christina Mason</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Project Wombat</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">01/01/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-xl-table-cell\">31/06/2023</td>
\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-warning\">In progress</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"d-none d-md-table-cell\">William Harris</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-4 col-xxl-3 d-flex\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Monthly Sales</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body d-flex w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-center chart chart-lg\">
\t\t\t\t\t\t\t\t\t\t<canvas id=\"chartjs-dashboard-bar\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
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

\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tvar ctx = document.getElementById(\"chartjs-dashboard-line\").getContext(\"2d\");
\t\t\tvar gradient = ctx.createLinearGradient(0, 0, 0, 225);
\t\t\tgradient.addColorStop(0, \"rgba(215, 227, 244, 1)\");
\t\t\tgradient.addColorStop(1, \"rgba(215, 227, 244, 0)\");
\t\t\t// Line chart
\t\t\tnew Chart(document.getElementById(\"chartjs-dashboard-line\"), {
\t\t\t\ttype: \"line\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tlabel: \"Sales (\$)\",
\t\t\t\t\t\tfill: true,
\t\t\t\t\t\tbackgroundColor: gradient,
\t\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\t\tdata: [
\t\t\t\t\t\t\t2115,
\t\t\t\t\t\t\t1562,
\t\t\t\t\t\t\t1584,
\t\t\t\t\t\t\t1892,
\t\t\t\t\t\t\t1587,
\t\t\t\t\t\t\t1923,
\t\t\t\t\t\t\t2566,
\t\t\t\t\t\t\t2448,
\t\t\t\t\t\t\t2805,
\t\t\t\t\t\t\t3438,
\t\t\t\t\t\t\t2917,
\t\t\t\t\t\t\t3327
\t\t\t\t\t\t]
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tmaintainAspectRatio: false,
\t\t\t\t\tlegend: {
\t\t\t\t\t\tdisplay: false
\t\t\t\t\t},
\t\t\t\t\ttooltips: {
\t\t\t\t\t\tintersect: false
\t\t\t\t\t},
\t\t\t\t\thover: {
\t\t\t\t\t\tintersect: true
\t\t\t\t\t},
\t\t\t\t\tplugins: {
\t\t\t\t\t\tfiller: {
\t\t\t\t\t\t\tpropagate: false
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tscales: {
\t\t\t\t\t\txAxes: [{
\t\t\t\t\t\t\treverse: true,
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tcolor: \"rgba(0,0,0,0.0)\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}],
\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\tstepSize: 1000
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tdisplay: true,
\t\t\t\t\t\t\tborderDash: [3, 3],
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tcolor: \"rgba(0,0,0,0.0)\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}]
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t// Pie chart
\t\t\tnew Chart(document.getElementById(\"chartjs-dashboard-pie\"), {
\t\t\t\ttype: \"pie\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [\"Chrome\", \"Firefox\", \"IE\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tdata: [4306, 3801, 1689],
\t\t\t\t\t\tbackgroundColor: [
\t\t\t\t\t\t\twindow.theme.primary,
\t\t\t\t\t\t\twindow.theme.warning,
\t\t\t\t\t\t\twindow.theme.danger
\t\t\t\t\t\t],
\t\t\t\t\t\tborderWidth: 5
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tresponsive: !window.MSInputMethodContext,
\t\t\t\t\tmaintainAspectRatio: false,
\t\t\t\t\tlegend: {
\t\t\t\t\t\tdisplay: false
\t\t\t\t\t},
\t\t\t\t\tcutoutPercentage: 75
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\t// Bar chart
\t\t\tnew Chart(document.getElementById(\"chartjs-dashboard-bar\"), {
\t\t\t\ttype: \"bar\",
\t\t\t\tdata: {
\t\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
\t\t\t\t\tdatasets: [{
\t\t\t\t\t\tlabel: \"This year\",
\t\t\t\t\t\tbackgroundColor: window.theme.primary,
\t\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\t\thoverBackgroundColor: window.theme.primary,
\t\t\t\t\t\thoverBorderColor: window.theme.primary,
\t\t\t\t\t\tdata: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
\t\t\t\t\t\tbarPercentage: .75,
\t\t\t\t\t\tcategoryPercentage: .5
\t\t\t\t\t}]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tmaintainAspectRatio: false,
\t\t\t\t\tlegend: {
\t\t\t\t\t\tdisplay: false
\t\t\t\t\t},
\t\t\t\t\tscales: {
\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tdisplay: false
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstacked: false,
\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\tstepSize: 20
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}],
\t\t\t\t\t\txAxes: [{
\t\t\t\t\t\t\tstacked: false,
\t\t\t\t\t\t\tgridLines: {
\t\t\t\t\t\t\t\tcolor: \"transparent\"
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}]
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tvar markers = [{
\t\t\t\t\tcoords: [31.230391, 121.473701],
\t\t\t\t\tname: \"Shanghai\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [28.704060, 77.102493],
\t\t\t\t\tname: \"Delhi\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [6.524379, 3.379206],
\t\t\t\t\tname: \"Lagos\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [35.689487, 139.691711],
\t\t\t\t\tname: \"Tokyo\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [23.129110, 113.264381],
\t\t\t\t\tname: \"Guangzhou\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [40.7127837, -74.0059413],
\t\t\t\t\tname: \"New York\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [34.052235, -118.243683],
\t\t\t\t\tname: \"Los Angeles\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [41.878113, -87.629799],
\t\t\t\t\tname: \"Chicago\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [51.507351, -0.127758],
\t\t\t\t\tname: \"London\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tcoords: [40.416775, -3.703790],
\t\t\t\t\tname: \"Madrid \"
\t\t\t\t}
\t\t\t];
\t\t\tvar map = new jsVectorMap({
\t\t\t\tmap: \"world\",
\t\t\t\tselector: \"#world_map\",
\t\t\t\tzoomButtons: true,
\t\t\t\tmarkers: markers,
\t\t\t\tmarkerStyle: {
\t\t\t\t\tinitial: {
\t\t\t\t\t\tr: 9,
\t\t\t\t\t\tstrokeWidth: 7,
\t\t\t\t\t\tstokeOpacity: .4,
\t\t\t\t\t\tfill: window.theme.primary
\t\t\t\t\t},
\t\t\t\t\thover: {
\t\t\t\t\t\tfill: window.theme.primary,
\t\t\t\t\t\tstroke: window.theme.primary
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tzoomOnScroll: false
\t\t\t});
\t\t\twindow.addEventListener(\"resize\", () => {
\t\t\t\tmap.updateSize();
\t\t\t});
\t\t});
\t</script>
\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
\t\t\tvar date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
\t\t\tvar defaultDate = date.getUTCFullYear() + \"-\" + (date.getUTCMonth() + 1) + \"-\" + date.getUTCDate();
\t\t\tdocument.getElementById(\"datetimepicker-dashboard\").flatpickr({
\t\t\t\tinline: true,
\t\t\t\tprevArrow: \"<span title=\\\"Previous month\\\">&laquo;</span>\",
\t\t\t\tnextArrow: \"<span title=\\\"Next month\\\">&raquo;</span>\",
\t\t\t\tdefaultDate: defaultDate
\t\t\t});
\t\t});
\t</script>

</body>

</html>", "Back/admin.html.twig", "C:\\Users\\user\\Desktop\\formini crud\\formini.tn\\templates\\Back\\admin.html.twig");
    }
}
