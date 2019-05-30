<?php

/* :Frontend/registration:wizardCompany.html.twig */
class __TwigTemplate_abf00bcfac6fefd457ded0136d3b9218bbe70af0aa843ed17f588876f801bd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:wizardCompany.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:wizardCompany.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:wizardCompany.html.twig"));

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
                    <h2>Crear Perfil</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "company_create")));
            echo "
                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">

                        ";
            // line 16
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreempresa", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sector", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
            echo "
                        ";
            // line 19
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trabajadores", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                        ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailcontacto", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horariocontacto", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personacontacto", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 32
            echo "                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <button class=\"button cta-2\">
                            Dar de alta
                        </button>
                        <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"button cta-3\">Cancelar</a>
                        <hr>
                    </div>
                    ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "
                </div>

            </div>
        </div>
    ";
        } else {
            // line 49
            echo "        <p>¡Ya tienes un perfil de Empresa creado!</p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/registration:wizardCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  157 => 43,  151 => 40,  142 => 34,  138 => 32,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  95 => 19,  91 => 17,  86 => 16,  80 => 12,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                    <h2>Crear Perfil</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    {{ form_start(form, {'attr': {'id': 'company_create'}}) }}
                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">

                        {#} {{ form_row(form.save, {'label':'Actualizar Perfil'}) }} {#}
                        {{ form_row(form.nombreempresa, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.sector, { 'attr': {'class': 'form-control chosen-select'} }) }}
                        {# {{ form_row(form.cif, { 'attr': {'class': 'form-control' } }) }} #}
                        {{ form_row(form.trabajadores, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.direccion, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.cp, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.localidad, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.pais, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                        {{ form_row(form.emailcontacto, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.horariocontacto, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.personacontacto, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.telefono, { 'attr': {'class': 'form-control'} }) }}
                        {{ form_row(form.web, { 'attr': {'class': 'form-control'} }) }}
                        {# {{ form_row(form.imagen, { 'attr': {'class': 'form-control-file', 'required': 'required'} }) }} #}
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        {{ form_row(form.description, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <button class=\"button cta-2\">
                            Dar de alta
                        </button>
                        <a href=\"{{ path('homepage') }}\" class=\"button cta-3\">Cancelar</a>
                        <hr>
                    </div>
                    {{ form_end(form) }}
                </div>

            </div>
        </div>
    {% else %}
        <p>¡Ya tienes un perfil de Empresa creado!</p>
    {% endif %}
{% endblock %}", ":Frontend/registration:wizardCompany.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/wizardCompany.html.twig");
    }
}
