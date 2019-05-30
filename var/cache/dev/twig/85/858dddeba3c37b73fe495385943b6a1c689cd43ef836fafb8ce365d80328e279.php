<?php

/* :Frontend/profile:crudFormacion.html.twig */
class __TwigTemplate_95a72a6afca0290310684740f6bf54aaca21c58d76faf05fcc607c6e65b005cf extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudFormacion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudFormacion.html.twig"));

        // line 1
        echo "
<div class=\"clearfix\">
\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t<h3>Añadir cursos del centro</h3>
         <hr>
    </div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "school_education_add")));
        echo "
\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
\t    <button type=\"submit\" class=\"button cta-2\">
\t    \tGuardar
\t    </button>
\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
\t</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudFormacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  49 => 14,  42 => 10,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"clearfix\">
\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t<h3>Añadir cursos del centro</h3>
         <hr>
    </div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t{{ form_start(form, {'attr': {'id': 'school_education_add'}}) }}
\t    {{ form_row(form.id, { 'attr': {'class': 'form-control chosen-select'} }) }}
\t    {{ form_row(form._token) }}
\t    <button type=\"submit\" class=\"button cta-2\">
\t    \tGuardar
\t    </button>
\t{{ form_end(form, {'render_rest': false}) }}
\t{{form_errors(form)}}
\t</div>
</div>", ":Frontend/profile:crudFormacion.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudFormacion.html.twig");
    }
}
