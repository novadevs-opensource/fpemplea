<?php

/* Frontend/registration/registerCompany.html.twig */
class __TwigTemplate_a814c5233f2e43a7ffa65c842f1bb83845b01a8bab5a8ecb9ac1c8fd222f2373 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Frontend/registration/registerCompany.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Frontend/registration/registerCompany.html.twig"));

        // line 1
        echo "<!-- Resources/views/registration/registerCompany.html.view -->
<div id=\"empresas\" class=\"tab-pane fade in\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "company_reg")));
        echo "
    <div class=\"form-group\">
        <hr>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'row', array("attr" => array("class" => "hidden", "value" => "ROLE_COMPANY")));
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nif", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 9
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechacreacion", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <p>
            <label>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\" target=\"_blank\">
                    Ver términos y condiciones
                </a>
            </label>
        </p>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "termsAccepted", array()), 'row', array("id" => "company_terms_accepted", "attr" => array("class" => "la_prueba")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        <hr>
        <input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta \"/>
    </div>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Frontend/registration/registerCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  74 => 21,  70 => 20,  62 => 15,  56 => 12,  52 => 11,  48 => 10,  43 => 9,  39 => 7,  35 => 6,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Resources/views/registration/registerCompany.html.view -->
<div id=\"empresas\" class=\"tab-pane fade in\">
    {{ form_start(form, {'attr': {'id': 'company_reg'}}) }}
    <div class=\"form-group\">
        <hr>
        {{ form_row(form.role, { 'attr': {'class': 'hidden', 'value': 'ROLE_COMPANY'} }) }}
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
        {{ form_row(form.termsAccepted, { 'id': 'company_terms_accepted', 'attr': {'class': 'la_prueba'} }) }}
        {{ form_row(form._token) }}
        <hr>
        <input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta \"/>
    </div>
    {{ form_end(form,{'render_rest':false}) }}
</div>", "Frontend/registration/registerCompany.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/registerCompany.html.twig");
    }
}
