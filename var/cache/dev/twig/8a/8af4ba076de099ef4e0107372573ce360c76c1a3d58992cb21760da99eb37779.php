<?php

/* :Frontend/registration:wizardSchool.html.twig */
class __TwigTemplate_fce42ae466f9519af17ab1ea200c492a3db229ed6132c35f476b7ed3e354930e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:wizardSchool.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:wizardSchool.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:wizardSchool.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " FP Emplea - Mi perfil ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 0)) {
            // line 5
            echo "        <div class=\"container no-profile\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h2>
                    Creación de perfil básico
                    </h2>
                    <hr>
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "school_create")));
            echo "
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cif", array()), 'row', array("attr" => array("class" => "form-control disabled", "readonly" => "")));
            echo "
                            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 20
            echo "                            ";
            // line 21
            echo "                            ";
            // line 22
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechacreacion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                        </div>
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <hr>
                            <p>
                                <input type=\"submit\" class=\"button cta-1\" value=\"Dar de alta\"/>
                            </p>
                            <hr>
                        </div>
                        ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 47
            echo "        <div class=\"container-profile\">
            <p>¡Ya tienes un perfil de centro!</p>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/registration:wizardSchool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  147 => 41,  135 => 32,  131 => 31,  127 => 30,  123 => 29,  119 => 28,  115 => 27,  111 => 26,  105 => 23,  100 => 22,  98 => 21,  96 => 20,  92 => 18,  88 => 17,  83 => 15,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %} FP Emplea - Mi perfil {% endblock %}
{% block body %}
    {% if app.user.done == 0 %}
        <div class=\"container no-profile\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h2>
                    Creación de perfil básico
                    </h2>
                    <hr>
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        {{ form_start(form, {'attr': {'id': 'school_create'}}) }}
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            {{ form_row(form.cif, { 'attr': {'class': 'form-control disabled', 'readonly':''} }) }}
                            {{ form_row(form.nombre, { 'attr': {'class': 'form-control'} }) }}
                            {# {{ form_row(form.imagen, { 'attr': {'class': 'form-control-file', 'required': 'required'} }) }} #}
                            {# {{ form_row(form.familiaprof, { 'attr': {'class': 'form-control chosen-select'} }) }} #}
                            {# {{ form_row(form.subfamiliaprof, { 'attr': {'class': 'form-control chosen-select'} }) }} #}
                            {{ form_row(form.web, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            {{ form_row(form.telefono, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form.direccion, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form.cp, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form.localidad, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form.pais, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form.fechacreacion, { 'attr': {'class': 'form-control'} }) }}
                            {{ form_row(form._token) }}
                        </div>
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <hr>
                            <p>
                                <input type=\"submit\" class=\"button cta-1\" value=\"Dar de alta\"/>
                            </p>
                            <hr>
                        </div>
                        {{ form_end(form, {'render_rest': false}) }}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"container-profile\">
            <p>¡Ya tienes un perfil de centro!</p>
        </div>
    {% endif %}
{% endblock %}", ":Frontend/registration:wizardSchool.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/wizardSchool.html.twig");
    }
}
