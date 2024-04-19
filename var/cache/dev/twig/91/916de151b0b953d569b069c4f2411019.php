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

/* certificat/index.html.twig */
class __TwigTemplate_fc90b9f583ea78b0b4c088e382d35bdf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/index.html.twig"));

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
          <span class=\"align-middle\">Formini.Tn</span>
        </a>

\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPages
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"admin.html.twig\">
              <i class=\"align-middle\" data-feather=\"sliders\"></i> <span class=\"align-middle\">certificat</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html.twig\">
              <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Certificats</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-in.html.twig\">
              <i class=\"align-middle\" data-feather=\"log-in\"></i> <span class=\"align-middle\">Utilisateur</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-up.html.twig\">
              <i class=\"align-middle\" data-feather=\"user-plus\"></i> <span class=\"align-middle\">Evenements</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-blank.html.twig\">
              <i class=\"align-middle\" data-feather=\"book\"></i> <span class=\"align-middle\">Formations</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Rym Razgui</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">Nam pretium turpis et arcu. Duis arcu tortor.</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted small mt-1\">15m ago</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row g-0 align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 170
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
        // line 182
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
        // line 194
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
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/img/avatars/avatar.jpg"), "html", null, true);
        echo "\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\" /> <span class=\"text-dark\">Rym Razgui</span>
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

\t\t\t\t\t<h1 class=\"h3 mb-3\"><strong>Certificats</strong></h1>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-5 d-flex\">
\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Totale des certificat</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"truck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">4</h1>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Top Certificats</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">Silver</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Certificats Attribués</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">100</h1>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Totale des personnes</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">64</h1>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-7\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Certificats/Mois</h5>
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 343
        $this->displayBlock('body', $context, $blocks);
        // line 410
        echo "\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</main>

\t\t\t
\t\t</div>
\t</div>

\t<script src=\"";
        // line 418
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
\t\t\t\t\t\tlabel: \"certificat\",
\t\t\t\t\t\tfill: true,
\t\t\t\t\t\tbackgroundColor: gradient,
\t\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\t\tdata: [
\t\t\t\t\t\t\t211,
\t\t\t\t\t\t\t156,
\t\t\t\t\t\t\t158,
\t\t\t\t\t\t\t189,
\t\t\t\t\t\t\t158,
\t\t\t\t\t\t\t192,
\t\t\t\t\t\t\t256,
\t\t\t\t\t\t\t244,
\t\t\t\t\t\t\t280,
\t\t\t\t\t\t\t343,
\t\t\t\t\t\t\t291,
\t\t\t\t\t\t\t332
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

    // line 343
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 344
        echo "    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-3\">certificat Information</h1>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
    <div class=\"card-header\">
        <div class=\"row justify-content-between align-items-center\">
            <div class=\"col\">
                <h5 class=\"card-title\">certificat Table</h5>
            </div>
            <div class=\"col-auto\">
                <a href=\"";
        // line 356
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_new");
        echo "\" class=\"btn btn-primary\">Ajouter une certificat</a>
            </div>
        </div>
    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Nom du certificat</th>
                                        <th>date du certificat</th>
                                        
                                       
                                        <th>Supprimer</th>
\t\t\t\t\t\t\t\t\t\t <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
    ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["certificats"]) || array_key_exists("certificats", $context) ? $context["certificats"] : (function () { throw new RuntimeError('Variable "certificats" does not exist.', 374, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["certificat"]) {
            // line 375
            echo "        <tr>
            <td>";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificat"], "nomCertif", [], "any", false, false, false, 376), "html", null, true);
            echo "</td>
             <td>";
            // line 377
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificat"], "dateCertif", [], "any", false, false, false, 377), "Y-m-d"), "html", null, true);
            echo "</td>
           
            

           
           <td>
                <form action=\"";
            // line 383
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_delete", ["idCertif" => twig_get_attribute($this->env, $this->source, $context["certificat"], "idCertif", [], "any", false, false, false, 383)]), "html", null, true);
            echo "\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to delete this certificat?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 385
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["certificat"], "idCertif", [], "any", false, false, false, 385))), "html", null, true);
            echo "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                </form>
            </td>

\t\t\t<td>
                <form action=\"";
            // line 391
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_certificat_edit", ["idCertif" => twig_get_attribute($this->env, $this->source, $context["certificat"], "idCertif", [], "any", false, false, false, 391)]), "html", null, true);
            echo "\" method=\"POST\" ;\">
                    <input type=\"hidden\" name=\"_method\" value=\"edit\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 393
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("edit" . twig_get_attribute($this->env, $this->source, $context["certificat"], "idCertif", [], "any", false, false, false, 393))), "html", null, true);
            echo "\">
                    <button type=\"submit\" class=\"btn btn-danger\">edit</button>
                </form>
            </td>


        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        echo "</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "certificat/index.html.twig";
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
        return array (  753 => 401,  739 => 393,  734 => 391,  725 => 385,  720 => 383,  711 => 377,  707 => 376,  704 => 375,  700 => 374,  679 => 356,  665 => 344,  655 => 343,  418 => 418,  408 => 410,  406 => 343,  275 => 215,  251 => 194,  236 => 182,  221 => 170,  67 => 19,  58 => 13,  44 => 1,);
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
          <span class=\"align-middle\">Formini.Tn</span>
        </a>

\t\t\t\t<ul class=\"sidebar-nav\">
\t\t\t\t\t<li class=\"sidebar-header\">
\t\t\t\t\t\tPages
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item active\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"admin.html.twig\">
              <i class=\"align-middle\" data-feather=\"sliders\"></i> <span class=\"align-middle\">certificat</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-profile.html.twig\">
              <i class=\"align-middle\" data-feather=\"user\"></i> <span class=\"align-middle\">Certificats</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-in.html.twig\">
              <i class=\"align-middle\" data-feather=\"log-in\"></i> <span class=\"align-middle\">Utilisateur</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-sign-up.html.twig\">
              <i class=\"align-middle\" data-feather=\"user-plus\"></i> <span class=\"align-middle\">Evenements</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"sidebar-item\">
\t\t\t\t\t\t<a class=\"sidebar-link\" href=\"pages-blank.html.twig\">
              <i class=\"align-middle\" data-feather=\"book\"></i> <span class=\"align-middle\">Formations</span>
            </a>
\t\t\t\t\t</li>

\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-dark\">Rym Razgui</div>
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
                <img src=\"{{asset('Back/img/avatars/avatar.jpg')}}\" class=\"avatar img-fluid rounded me-1\" alt=\"Charles Hall\" /> <span class=\"text-dark\">Rym Razgui</span>
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

\t\t\t\t\t<h1 class=\"h3 mb-3\"><strong>Certificats</strong></h1>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-5 d-flex\">
\t\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Totale des certificat</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"truck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">4</h1>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Top Certificats</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"users\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">Silver</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Certificats Attribués</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"dollar-sign\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">100</h1>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mt-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Totale des personnes</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"stat text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"align-middle\" data-feather=\"shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mt-1 mb-3\">64</h1>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-6 col-xxl-7\">
\t\t\t\t\t\t\t<div class=\"card flex-fill w-100\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">

\t\t\t\t\t\t\t\t\t<h5 class=\"card-title mb-0\">Certificats/Mois</h5>
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"h3 mb-3\">certificat Information</h1>

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
    <div class=\"card-header\">
        <div class=\"row justify-content-between align-items-center\">
            <div class=\"col\">
                <h5 class=\"card-title\">certificat Table</h5>
            </div>
            <div class=\"col-auto\">
                <a href=\"{{ path('app_certificat_new') }}\" class=\"btn btn-primary\">Ajouter une certificat</a>
            </div>
        </div>
    </div>
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th>Nom du certificat</th>
                                        <th>date du certificat</th>
                                        
                                       
                                        <th>Supprimer</th>
\t\t\t\t\t\t\t\t\t\t <th>Modifier</th>
                                    </tr>
                                </thead>
                                <tbody>
    {% for certificat in certificats %}
        <tr>
            <td>{{ certificat.nomCertif }}</td>
             <td>{{ certificat.dateCertif|date('Y-m-d') }}</td>
           
            

           
           <td>
                <form action=\"{{ path('app_certificat_delete', {'idCertif': certificat.idCertif}) }}\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to delete this certificat?');\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ certificat.idCertif) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                </form>
            </td>

\t\t\t<td>
                <form action=\"{{ path('app_certificat_edit', {'idCertif': certificat.idCertif}) }}\" method=\"POST\" ;\">
                    <input type=\"hidden\" name=\"_method\" value=\"edit\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit' ~ certificat.idCertif) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">edit</button>
                </form>
            </td>


        </tr>
    {% endfor %}
</tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</main>

\t\t\t
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
\t\t\t\t\t\tlabel: \"certificat\",
\t\t\t\t\t\tfill: true,
\t\t\t\t\t\tbackgroundColor: gradient,
\t\t\t\t\t\tborderColor: window.theme.primary,
\t\t\t\t\t\tdata: [
\t\t\t\t\t\t\t211,
\t\t\t\t\t\t\t156,
\t\t\t\t\t\t\t158,
\t\t\t\t\t\t\t189,
\t\t\t\t\t\t\t158,
\t\t\t\t\t\t\t192,
\t\t\t\t\t\t\t256,
\t\t\t\t\t\t\t244,
\t\t\t\t\t\t\t280,
\t\t\t\t\t\t\t343,
\t\t\t\t\t\t\t291,
\t\t\t\t\t\t\t332
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

</html>", "certificat/index.html.twig", "C:\\Users\\rymra\\IdeaProjects\\formini.tn\\templates\\certificat\\index.html.twig");
    }
}
