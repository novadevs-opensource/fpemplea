<?php

/* :Frontend/profile:crudApplicantEducation.html.twig */
class __TwigTemplate_07647e942ceff2a5ac21eef4f28cf6e8a398cb293ecf0a91e61ab08aa117fe62 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudApplicantEducation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudApplicantEducation.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12 ";
        // line 2
        echo "\">
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "applicant_education_add")));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formacion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "school", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "start", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "end", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finished", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 21
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <hr>
                    <button type=\"submit\" class=\"button cta-2\">
                        Guardar
                    </button>
                    <hr>
                </div>
            </div>
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudApplicantEducation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  66 => 21,  61 => 18,  55 => 15,  49 => 12,  43 => 9,  37 => 6,  31 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12 {# col-lg-offset-3 col-md-offset-3 #}\">
{{ form_start(form, {'attr': {'id': 'applicant_education_add'}}) }}
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {{ form_row(form.formacion, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {{ form_row(form.school, { 'attr': {'class': 'form-control'} }) }}
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    {{ form_row(form.start, { 'attr': {'class': 'form-control datepicker'} }) }}
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    {{ form_row(form.end, { 'attr': {'class': 'form-control datepicker'} }) }}
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    {{ form_row(form.finished, { 'attr': {'class': 'form-control'} }) }}
                </div>
                {#{ form_row(form.perfilestudiante) }#}
                {{ form_row(form._token) }}
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <hr>
                    <button type=\"submit\" class=\"button cta-2\">
                        Guardar
                    </button>
                    <hr>
                </div>
            </div>
        {{ form_end(form, {'render_rest': false}) }}
    </div>
</div>
", ":Frontend/profile:crudApplicantEducation.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudApplicantEducation.html.twig");
    }
}
