<?php

/* :Frontend/registration:wizardApplicant.html.twig */
class __TwigTemplate_b7e2811224586f0775c7d9531d774b23ec9fd6cb6cf446a7051c8126f614f331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:wizardApplicant.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:wizardApplicant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:wizardApplicant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 0) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT"))) {
            // line 4
            echo "\t\t<section id=\"wizard\">
\t\t\t<h3>Crea tu perfil</h3>
\t\t\t<div class=\"wizard\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "applicant_create")));
            echo "
\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellidos", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechanacimiento", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
            echo "
\t\t\t\t\t\t\t";
            // line 15
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefonouno", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefonodos", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "intereses", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 sepline\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diponibilidad", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
            echo "
\t\t\t\t\t\t\t";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fexibilidadgeografica", array()), 'row', array("attr" => array("class" => "")));
            echo "
\t\t\t\t\t\t\t";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cvtxt", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 32
            echo "\t\t\t\t\t\t\t";
            // line 33
            echo "\t\t\t\t\t\t\t<input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta\"/>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"button cta-3\">Cancelar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/registration:wizardApplicant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  131 => 34,  128 => 33,  126 => 32,  122 => 30,  118 => 29,  114 => 28,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  85 => 17,  81 => 16,  76 => 15,  72 => 13,  68 => 12,  64 => 11,  58 => 8,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
\t{% if (app.user.done == 0) and (is_granted('ROLE_STUDENT')) %}
\t\t<section id=\"wizard\">
\t\t\t<h3>Crea tu perfil</h3>
\t\t\t<div class=\"wizard\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t{{ form_start(form, {'attr': {'id': 'applicant_create'}}) }}
\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t{{ form_row(form.nombre, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.apellidos, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.fechanacimiento, { 'attr': {'class': 'form-control datepicker'} }) }}
\t\t\t\t\t\t\t{# {{ form_row(form.dni, { 'attr': {'class': 'form-control'} }) }} #}
\t\t\t\t\t\t\t{{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.telefonouno, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.telefonodos, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t{{ form_row(form.direccion, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.cp, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.localidad, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.pais, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.intereses, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 sepline\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{{ form_row(form.diponibilidad, { 'attr': {'class': 'form-control datepicker'} }) }}
\t\t\t\t\t\t\t{{ form_row(form.fexibilidadgeografica, { 'attr': {'class': ''} }) }}
\t\t\t\t\t\t\t{{ form_row(form.cvtxt, { 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t{#}{{ form_row(form.cvpdf, { 'attr': {'class': 'form-control-file'} }) }}{#}
\t\t\t\t\t\t\t{# {{ form_row(form.imagen, { 'attr': {'class': 'form-control-file', 'required': 'required'} }) }} #}
\t\t\t\t\t\t\t<input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta\"/>
\t\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\" class=\"button cta-3\">Cancelar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t{% endif %}
{% endblock %}", ":Frontend/registration:wizardApplicant.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/wizardApplicant.html.twig");
    }
}
