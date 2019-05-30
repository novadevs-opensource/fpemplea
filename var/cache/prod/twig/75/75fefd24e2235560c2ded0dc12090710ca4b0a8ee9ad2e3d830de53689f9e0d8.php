<?php

/* :Frontend/profile:closeOffer.html.twig */
class __TwigTemplate_ef03fa18aa2dc2646d8cc9d1ba9a730f3afe14561bc47ba44fe767652e3fc302 extends Twig_Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div class=\"form-group\">
\t";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closureReason", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "closureExplanation", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "engagement", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
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
        return array (  47 => 14,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:closeOffer.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/closeOffer.html.twig");
    }
}
