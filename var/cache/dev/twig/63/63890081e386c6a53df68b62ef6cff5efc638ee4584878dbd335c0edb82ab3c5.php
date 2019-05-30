<?php

/* :Frontend/profile:crudApplicantWork.html.twig */
class __TwigTemplate_6ce1eafa25529c07943424eb11b57aeacb79a08d66fe63aa1080de4e55297c68 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudApplicantWork.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudApplicantWork.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "applicant_work_add")));
        echo "
    <div class=\"form-group\">
        <div>
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "company", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "otherCompany", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
        <div>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "workexp", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "start", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        </div>
        <div>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "end", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        </div>
        <div>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "position", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        ";
        // line 21
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        <button type=\"submit\" class=\"button cta-2\">
            Guardar
        </button>
    </div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudApplicantWork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  65 => 21,  60 => 18,  54 => 15,  48 => 12,  42 => 9,  35 => 5,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': 'applicant_work_add'}}) }}
    <div class=\"form-group\">
        <div>
            {{ form_row(form.company, { 'attr': {'class': 'form-control chosen-select'} }) }}
            {{ form_row(form.otherCompany, { 'attr': {'class': 'form-control'} }) }}

        </div>
        <div>
            {{ form_row(form.workexp, { 'attr': {'class': 'form-control'} }) }}
        </div>
        <div>
            {{ form_row(form.start, { 'attr': {'class': 'form-control datepicker'} }) }}
        </div>
        <div>
            {{ form_row(form.end, { 'attr': {'class': 'form-control datepicker'} }) }}
        </div>
        <div>
            {{ form_row(form.position, { 'attr': {'class': 'form-control'} }) }}
        </div>
        {#{ form_row(form.perfilestudiante) }#}
        {{ form_row(form._token) }}
        <button type=\"submit\" class=\"button cta-2\">
            Guardar
        </button>
    </div>
{{ form_end(form, {'render_rest': false}) }}", ":Frontend/profile:crudApplicantWork.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudApplicantWork.html.twig");
    }
}
