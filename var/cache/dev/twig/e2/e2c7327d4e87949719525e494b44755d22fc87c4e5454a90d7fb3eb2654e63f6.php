<?php

/* :Frontend/profile:createOffer.html.twig */
class __TwigTemplate_f4f635ac1b4d63860bca0b28494bc5b8a3702f7550c5453a635535d938ad52fa extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:createOffer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:createOffer.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "create_offer")));
        echo "
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3>
            Crear oferta
        </h3>
        <hr>
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categoria", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechainicio", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechafin", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vacancies", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        <input type=\"submit\" class=\"button cta-2\" value=\"Crear\"/>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"button cta-3\">Cancelar</a>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:createOffer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  77 => 24,  71 => 22,  67 => 20,  61 => 17,  57 => 16,  53 => 15,  47 => 12,  43 => 11,  39 => 10,  28 => 2,  25 => 1,);
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
    {{ form_start(form, {'attr': {'id': 'create_offer'}}) }}
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3>
            Crear oferta
        </h3>
        <hr>
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.tipo, { 'attr': {'class': 'form-control'} }) }}
        {{ form_row(form.categoria, { 'attr': {'class': 'form-control chosen-select'} }) }}
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        {{ form_row(form.fechainicio, { 'attr': {'class': 'form-control datepicker'} }) }}
        {{ form_row(form.fechafin, { 'attr': {'class': 'form-control datepicker'} }) }}
        {{ form_row(form.vacancies, { 'attr': {'class': 'form-control'} }) }}
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        {{ form_row(form.descripcion, { 'attr': {'class': 'form-control'} }) }}
        {#{ form_row(form.idempresa, { 'attr': {'class': ''} }) }#}
        {{ form_row(form._token) }}
        <input type=\"submit\" class=\"button cta-2\" value=\"Crear\"/>
        <a href=\"{{ path('homepage') }}\" class=\"button cta-3\">Cancelar</a>
    {{ form_end(form, {'render_rest': false}) }}
</div>
", ":Frontend/profile:createOffer.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/createOffer.html.twig");
    }
}
