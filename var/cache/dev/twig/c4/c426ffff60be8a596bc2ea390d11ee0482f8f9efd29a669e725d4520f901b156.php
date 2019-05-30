<?php

/* :Frontend/profile:crudEstudiante.html.twig */
class __TwigTemplate_14dbd2a8805e3b8a069adefeba81832a0985e33dc48def5fa8f251f6ec2e23a7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudEstudiante.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudEstudiante.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "applicant_edit")));
        echo "
<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "apellidos", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechanacimiento", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
            ";
        // line 9
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefonouno", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 13
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
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diponibilidad", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telefonodos", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <hr>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fexibilidadgeografica", array()), 'row', array("attr" => array("class" => "")));
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "intereses", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cvtxt", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 28
        echo "            ";
        // line 29
        echo "            <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
            ";
        // line 31
        echo "        </div>
    </div>
</div>
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudEstudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 31,  98 => 29,  96 => 28,  92 => 26,  88 => 25,  84 => 24,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  49 => 10,  44 => 9,  40 => 7,  36 => 6,  32 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': 'applicant_edit'}}) }}
<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_row(form.nombre, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.apellidos, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.fechanacimiento, { 'attr': {'class': 'form-control datepicker'} }) }}
            {# {{ form_row(form.dni, { 'attr': {'class': 'form-control'} }) }} #}
            {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.telefonouno, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"col-md-6\">
            {{ form_row(form.direccion, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.cp, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.localidad, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.pais, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.diponibilidad, { 'attr': {'class': 'form-control datepicker'} }) }}
            {{ form_row(form.telefonodos, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <hr>
        </div>
        <div class=\"col-md-12\">
            {{ form_row(form.fexibilidadgeografica, { 'attr': {'class': ''} }) }}
            {{ form_row(form.intereses, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.cvtxt, { 'attr': {'class': 'form-control'} }) }}
            {#{ form_row(form.cvpdf, { 'attr': {'class': 'form-control-file'} }) }#}
            {# {{ form_row(form.imagen, { 'attr': {'class': 'form-control-file'} }) }} #}
            <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
            {# <input type=\"submit\" class=\"button cta-3\" value=\"Cancelar\"/> #}
        </div>
    </div>
</div>
{{ form_end(form) }}", ":Frontend/profile:crudEstudiante.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudEstudiante.html.twig");
    }
}
