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

/* evenement/_form.html.twig */
class __TwigTemplate_d2b65425709c35be097b99e5cb4413ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate", "enctype" => "multipart/form-data"]]);
        echo "

<div class=\"mb-3\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nomEvent", [], "any", false, false, false, 4), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de l'événement"]);
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nomEvent", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nomEvent", [], "any", false, false, false, 5), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 6
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nomEvent", [], "any", false, false, false, 6), 'errors')) > 0)) {
            // line 7
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nomEvent", [], "any", false, false, false, 7), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 14
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'errors')) > 0)) {
            // line 15
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 17
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "dateEvent", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de l'événement"]);
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateEvent", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateEvent", [], "any", false, false, false, 21), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 22
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "dateEvent", [], "any", false, false, false, 22), 'errors')) > 0)) {
            // line 23
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "dateEvent", [], "any", false, false, false, 23), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 25
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "heureDeb", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Heure de début"]);
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "heureDeb", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "heureDeb", [], "any", false, false, false, 29), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 30
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "heureDeb", [], "any", false, false, false, 30), 'errors')) > 0)) {
            // line 31
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "heureDeb", [], "any", false, false, false, 31), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 33
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix"]);
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 38
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prix", [], "any", false, false, false, 38), 'errors')) > 0)) {
            // line 39
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 41
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nbrP", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de participants"]);
        echo "
    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nbrP", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nbrP", [], "any", false, false, false, 45), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 46
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nbrP", [], "any", false, false, false, 46), 'errors')) > 0)) {
            // line 47
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nbrP", [], "any", false, false, false, 47), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 49
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "lieu", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Lieu"]);
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lieu", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => ("form-control" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lieu", [], "any", false, false, false, 53), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 54
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "lieu", [], "any", false, false, false, 54), 'errors')) > 0)) {
            // line 55
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "lieu", [], "any", false, false, false, 55), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 57
        echo "</div>

<div class=\"mb-3\">
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "imageEvent", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image de l'événement"]);
        echo "
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "imageEvent", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => ("form-control-file" . (((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "imageEvent", [], "any", false, false, false, 61), 'errors')) > 0)) ? (" is-invalid") : ("")))]]);
        echo "
    ";
        // line 62
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "imageEvent", [], "any", false, false, false, 62), 'errors')) > 0)) {
            // line 63
            echo "        <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "imageEvent", [], "any", false, false, false, 63), 'errors')), "html", null, true);
            echo "</div>
    ";
        }
        // line 65
        echo "</div>

<button type=\"submit\" class=\"btn btn-primary\">Save</button>

";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evenement/_form.html.twig";
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
        return array (  218 => 69,  212 => 65,  206 => 63,  204 => 62,  200 => 61,  196 => 60,  191 => 57,  185 => 55,  183 => 54,  179 => 53,  175 => 52,  170 => 49,  164 => 47,  162 => 46,  158 => 45,  154 => 44,  149 => 41,  143 => 39,  141 => 38,  137 => 37,  133 => 36,  128 => 33,  122 => 31,  120 => 30,  116 => 29,  112 => 28,  107 => 25,  101 => 23,  99 => 22,  95 => 21,  91 => 20,  86 => 17,  80 => 15,  78 => 14,  74 => 13,  70 => 12,  65 => 9,  59 => 7,  57 => 6,  53 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate', 'enctype': 'multipart/form-data'}}) }}

<div class=\"mb-3\">
    {{ form_label(form.nomEvent, 'Nom de l\\'événement', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.nomEvent, {'attr': {'class': 'form-control' ~ (form_errors(form.nomEvent)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.nomEvent)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.nomEvent)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.description, {'attr': {'class': 'form-control' ~ (form_errors(form.description)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.description)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.description)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.dateEvent, 'Date de l\\'événement', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.dateEvent, {'attr': {'class': 'form-control' ~ (form_errors(form.dateEvent)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.dateEvent)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.dateEvent)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.heureDeb, 'Heure de début', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.heureDeb, {'attr': {'class': 'form-control' ~ (form_errors(form.heureDeb)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.heureDeb)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.heureDeb)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.prix, 'Prix', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.prix, {'attr': {'class': 'form-control' ~ (form_errors(form.prix)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.prix)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.prix)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.nbrP, 'Nombre de participants', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.nbrP, {'attr': {'class': 'form-control' ~ (form_errors(form.nbrP)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.nbrP)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.nbrP)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.lieu, 'Lieu', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.lieu, {'attr': {'class': 'form-control' ~ (form_errors(form.lieu)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.lieu)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.lieu)|first }}</div>
    {% endif %}
</div>

<div class=\"mb-3\">
    {{ form_label(form.imageEvent, 'Image de l\\'événement', {'label_attr': {'class': 'form-label'}}) }}
    {{ form_widget(form.imageEvent, {'attr': {'class': 'form-control-file' ~ (form_errors(form.imageEvent)|length > 0 ? ' is-invalid' : '')}}) }}
    {% if form_errors(form.imageEvent)|length > 0 %}
        <div class=\"invalid-feedback\">{{ form_errors(form.imageEvent)|first }}</div>
    {% endif %}
</div>

<button type=\"submit\" class=\"btn btn-primary\">Save</button>

{{ form_end(form) }}
", "evenement/_form.html.twig", "C:\\Users\\user\\Desktop\\formini crud\\formini.tn\\templates\\evenement\\_form.html.twig");
    }
}
