<?php

/* :Frontend/profile:crudCentro.html.twig */
class __TwigTemplate_ae60b57a99aa3321befccb2522d0697bf2be4affc3383dcebde3d925a07bb9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudCentro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudCentro.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "school_edit")));
        echo "
<div class=\"profile clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3>Datos del centro</h3>
        <hr>
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cif", array()), 'row', array("attr" => array("class" => "form-control", "readonly" => "")));
        echo "
        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechacreacion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
    </div>
</div>
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudCentro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  66 => 19,  60 => 16,  56 => 15,  52 => 14,  47 => 13,  45 => 12,  43 => 11,  39 => 9,  35 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': 'school_edit'}}) }}
<div class=\"profile clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3>Datos del centro</h3>
        <hr>
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        {{ form_row(form.nombre, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.cif, { 'attr': {'class': 'form-control', 'readonly':''} }) }}
        {# {{ form_row(form.imagen, { 'attr': {'class': 'form-control-file'} }) }} #}
        {# {{ form_row(form.familiaprof, { 'attr': {'class': 'chosen-select', 'novalidate': ''} }) }} #}
        {# {{ form_row(form.subfamiliaprof, { 'attr': {'class': 'form-control chosen-select', 'novalidate': ''} }) }} #}
        {{ form_row(form.direccion, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.cp, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.localidad, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.pais, { 'attr': {'class': 'form-control'} }) }}
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        {{ form_row(form.telefono, { 'attr': {'class': 'form-control'} }) }}
        
        {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.fechacreacion, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.web, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form._token) }}
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
    </div>
</div>
{{ form_end(form, {'render_rest': false}) }}
", ":Frontend/profile:crudCentro.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudCentro.html.twig");
    }
}
