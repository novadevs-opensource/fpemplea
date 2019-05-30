<?php

/* :Frontend/profile:assignOffer.html.twig */
class __TwigTemplate_f1cbd421cd20c408a449ed6c753c03dd2dfe16d1c47770e12e7de23adfa06fde extends Twig_Template
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
\t<div>
\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "school", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
\t\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
\t</div>
\t<input type=\"submit\" class=\"button cta-1\" value=\"Guardar\"/>

</div>
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:assignOffer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  29 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:assignOffer.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/assignOffer.html.twig");
    }
}
