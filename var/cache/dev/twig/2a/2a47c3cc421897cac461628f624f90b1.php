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

/* certificat/new.html.twig */
class __TwigTemplate_3ffa6db618090ffd6403d60eca061f9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "certificat/new.html.twig"));

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
\t\t\t\t\t\t\t<h1 class=\"h2\">Ajouter</h1>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\tAjouter une nouvelle certificat
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"m-sm-3\">
\t\t\t\t\t\t\t\t\t<form method=\"post\">
   
   
   ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "

<div class=\"mb-3\">
    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nomCertif", [], "any", false, false, false, 46), 'label', ["label" => "Nom du certificat"]);
        echo "
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nomCertif", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>

<div class=\"mb-3\">
    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateCertif", [], "any", false, false, false, 51), 'label', ["label" => "Date du certificat"]);
        echo "
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "dateCertif", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
</div>

<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>

";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "

</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<script src=\"";
        // line 70
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
        return "certificat/new.html.twig";
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
        return array (  138 => 70,  122 => 57,  114 => 52,  110 => 51,  103 => 47,  99 => 46,  93 => 43,  66 => 19,  57 => 13,  43 => 1,);
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
\t\t\t\t\t\t\t<h1 class=\"h2\">Ajouter</h1>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\tAjouter une nouvelle certificat
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"m-sm-3\">
\t\t\t\t\t\t\t\t\t<form method=\"post\">
   
   
   {{ form_start(form) }}

<div class=\"mb-3\">
    {{ form_label(form.nomCertif, 'Nom du certificat') }}
    {{ form_widget(form.nomCertif, {'attr': {'class': 'form-control'}}) }}
</div>

<div class=\"mb-3\">
    {{ form_label(form.dateCertif, 'Date du certificat') }}
    {{ form_widget(form.dateCertif, {'attr': {'class': 'form-control'}}) }}
</div>

<button type=\"submit\" class=\"btn btn-primary\">Ajouter</button>

{{ form_end(form) }}

</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>

\t<script src=\"{{asset('Back/js/app.js')}}\"></script>

</body>

</html>", "certificat/new.html.twig", "C:\\Users\\rymra\\IdeaProjects\\formini.tn\\templates\\certificat\\new.html.twig");
    }
}
