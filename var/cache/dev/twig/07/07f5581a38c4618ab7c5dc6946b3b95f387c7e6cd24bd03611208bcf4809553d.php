<?php

/* :Frontend/registration:registerApplicantFromErr.html.twig */
class __TwigTemplate_b28774701fb92e01e17a683b81dd9b599f54ce8a82d077a87d95539a1e560be6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:registerApplicantFromErr.html.twig", 2);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:registerApplicantFromErr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/registration:registerApplicantFromErr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"alumnosregs\" class=\"tab-pane fade in active\">
    <h3>Registro de aspirante</h3>
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "applicant_reg")));
        echo "
    <div class=\"form-group\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'row', array("attr" => array("class" => "hidden", "value" => "ROLE_STUDENT")));
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nif", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechacreacion", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <p>
            <label>
                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\" target=\"_blank\">
                    Ver términos y condiciones
                </a>
            </label>
        </p>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "termsAccepted", array()), 'row', array("attr" => array("class" => "")));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        <input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta \"/>
    </div>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/registration:registerApplicantFromErr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  97 => 23,  93 => 22,  85 => 17,  79 => 14,  75 => 13,  71 => 12,  66 => 11,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Resources/views/registration/registerApplicantFromErr.html.view #}
{% extends 'base.html.twig' %}
{% block body %}
<div id=\"alumnosregs\" class=\"tab-pane fade in active\">
    <h3>Registro de aspirante</h3>
    {{ form_start(form, {'attr': {'id': 'applicant_reg'}}) }}
    <div class=\"form-group\">
        {{ form_row(form.role, { 'attr': {'class': 'hidden', 'value': 'ROLE_STUDENT'} }) }}
        {{ form_row(form.nif, { 'attr': {'class': 'form-control'} }) }}
        {# {{ form_row(form.username, { 'attr': {'class': 'form-control'} }) }} #}
        {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.fechacreacion) }}
        {{ form_row(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}
        <p>
            <label>
                <a href=\"{{ path('terms') }}\" target=\"_blank\">
                    Ver términos y condiciones
                </a>
            </label>
        </p>
        {{ form_row(form.termsAccepted, { 'attr': {'class': ''} }) }}
        {{ form_row(form._token) }}
        <input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta \"/>
    </div>
    {{ form_end(form,{'render_rest':false}) }}
</div>
{% endblock %}", ":Frontend/registration:registerApplicantFromErr.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/registerApplicantFromErr.html.twig");
    }
}
