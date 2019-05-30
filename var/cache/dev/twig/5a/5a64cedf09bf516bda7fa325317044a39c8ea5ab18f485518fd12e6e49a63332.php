<?php

/* :Frontend/profile:crudEmpresa.html.twig */
class __TwigTemplate_87c14eeb97b66a014c36ebcfa964b2801afa807ae7e1bd291112952b3eee8a7f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudEmpresa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudEmpresa.html.twig"));

        // line 1
        echo "<div class=\"profile row\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "company_edit")));
        echo "
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 5
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombreempresa", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 7
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trabajadores", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sector", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 10
        echo "        <input type=\"hidden\" name=\"selected\" value=\"";
        echo twig_escape_filter($this->env, ($context["cat"] ?? $this->getContext($context, "cat")), "html", null, true);
        echo "\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "emailcontacto", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "horariocontacto", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "personacontacto", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "web", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 23
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
    </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudEmpresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  90 => 23,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  47 => 10,  43 => 8,  38 => 7,  33 => 5,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"profile row\">
    {{ form_start(form, {'attr': {'id': 'company_edit'}}) }}
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        {#} {{ form_row(form.save, {'label':'Actualizar Perfil'}) }} {#}
        {{ form_row(form.nombreempresa, { 'attr': {'class': 'form-control'} }) }}
        {# {{ form_row(form.cif, { 'attr': {'class': 'form-control'} }) }} #}
        {{ form_row(form.trabajadores, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.sector, { 'attr': {'class': 'form-control'} }) }}
        {# TODO: Use this value to select with JS the default selected option #}
        <input type=\"hidden\" name=\"selected\" value=\"{{cat}}\">
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
        {# {{ form_row(form.imagen, { 'attr': {'class': 'form-control-file'} }) }} #}
        {{ form_row(form.description, { 'attr': {'class': 'form-control'} }) }}
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
    </div>
    {{ form_end(form) }}
</div>", ":Frontend/profile:crudEmpresa.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudEmpresa.html.twig");
    }
}
