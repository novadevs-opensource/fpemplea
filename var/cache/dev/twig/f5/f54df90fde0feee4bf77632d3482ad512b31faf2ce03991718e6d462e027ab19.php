<?php

/* :Frontend/profile:closeOffer.html.twig */
class __TwigTemplate_eb957c649e67665cddb009cf2a45ffd3fccb4c5731c6418f4f3efada48a14d41 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:closeOffer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:closeOffer.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-group\">
\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "closureReason", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "closureExplanation", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "engagement", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
\t<button type=\"submit\" class=\"button cta-1\">
\t\tCerrar oferta
\t</button>
\t<button type=\"button\" class=\"button cta-2\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\tCancelar cierre
\t</button>
</div>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:closeOffer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  42 => 6,  38 => 5,  34 => 4,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
<div class=\"form-group\">
\t{{ form_row(form.closureReason, { 'attr': {'class': 'form-control'} }) }}
\t{{ form_row(form.closureExplanation, { 'attr': {'class': 'form-control'} }) }}
\t{{ form_row(form.engagement, { 'attr': {'class': 'form-control'} }) }}
\t{{ form_row(form._token) }}
\t<button type=\"submit\" class=\"button cta-1\">
\t\tCerrar oferta
\t</button>
\t<button type=\"button\" class=\"button cta-2\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\tCancelar cierre
\t</button>
</div>
{{ form_end(form, {'render_rest': false}) }}", ":Frontend/profile:closeOffer.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/closeOffer.html.twig");
    }
}
