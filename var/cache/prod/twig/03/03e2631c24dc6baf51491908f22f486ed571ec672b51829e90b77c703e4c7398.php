<?php

/* :Frontend/profile:crudFormacion.html.twig */
class __TwigTemplate_2b6a74add4cb331eeba50642ccd58a4325f68f3f77c3b3f79c8bd7cf64d88c98 extends Twig_Template
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
        echo "
<div class=\"clearfix\">
\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t<h3>Añadir cursos del centro</h3>
         <hr>
    </div>
\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "school_education_add")));
        echo "
\t    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
\t    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
\t    <button type=\"submit\" class=\"button cta-2\">
\t    \tGuardar
\t    </button>
\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
\t</div>
</div>";
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
        return array (  47 => 15,  43 => 14,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudFormacion.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudFormacion.html.twig");
    }
}
