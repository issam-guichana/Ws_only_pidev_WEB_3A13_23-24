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

/* Back/pages-sign-up.html.twig */
class __TwigTemplate_f9f70ffb3b87b685d77ce54f2f077942 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/pages-sign-up.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/pages-sign-up.html.twig"));

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

\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/pages-sign-up.html\" />

\t<title>Sign Up | AdminKit Demo</title>

\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
</head>

<body>
\t<main class=\"d-flex w-100\">
\t\t<div class=\"container d-flex flex-column\">
\t\t\t<div class=\"row vh-100\">
\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100\">
\t\t\t\t\t<div class=\"d-table-cell align-middle\">

\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t<h1 class=\"h2\">Get started</h1>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\tStart creating the best possible user experience for you customers.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"m-sm-3\">
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Full name</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"text\" name=\"name\" placeholder=\"Enter your name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"email\" name=\"email\" placeholder=\"Enter your email\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"password\" name=\"password\" placeholder=\"Enter password\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-grid gap-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"indexadmin.html.twig\" class=\"btn btn-lg btn-primary\">Sign up</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center mb-3\">
\t\t\t\t\t\t\tAlready have account? <a href=\"pages-sign-in.html.twig\">Log In</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<script src=\"";
        // line 69
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
        return "Back/pages-sign-up.html.twig";
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
        return array (  119 => 69,  66 => 19,  57 => 13,  43 => 1,);
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
\t<link rel=\"shortcut icon\" href=\"{{asset('Back/img/icons/icon-48x48.png')}}\" />

\t<link rel=\"canonical\" href=\"https://demo-basic.adminkit.io/pages-sign-up.html\" />

\t<title>Sign Up | AdminKit Demo</title>

\t<link href=\"{{asset('Back/css/app.css')}}\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap\" rel=\"stylesheet\">
</head>

<body>
\t<main class=\"d-flex w-100\">
\t\t<div class=\"container d-flex flex-column\">
\t\t\t<div class=\"row vh-100\">
\t\t\t\t<div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100\">
\t\t\t\t\t<div class=\"d-table-cell align-middle\">

\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t<h1 class=\"h2\">Get started</h1>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\tStart creating the best possible user experience for you customers.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"m-sm-3\">
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Full name</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"text\" name=\"name\" placeholder=\"Enter your name\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Email</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"email\" name=\"email\" placeholder=\"Enter your email\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control form-control-lg\" type=\"password\" name=\"password\" placeholder=\"Enter password\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-grid gap-2 mt-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"indexadmin.html.twig\" class=\"btn btn-lg btn-primary\">Sign up</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center mb-3\">
\t\t\t\t\t\t\tAlready have account? <a href=\"pages-sign-in.html.twig\">Log In</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<script src=\"{{asset('Back/js/app.js')}}\"></script>

</body>

</html>", "Back/pages-sign-up.html.twig", "C:\\Users\\user\\Desktop\\formini crud\\formini.tn\\templates\\Back\\pages-sign-up.html.twig");
    }
}
