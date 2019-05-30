<?php

/* :Frontend/profile:crudApplicantEducation.html.twig */
class __TwigTemplate_7021f4932244dc5d6bd8f8df5a3afa37f474c030f88a87baaf1e3a67b5032771 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-8 col-md-12 col-sm-12 col-xs-12 ";
        // line 2
        echo "\">
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "applicant_education_add")));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "formacion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "school", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "finished", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                ";
        // line 21
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
    </div>
</div>
";
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
        return array (  73 => 30,  60 => 21,  55 => 18,  49 => 15,  43 => 12,  37 => 9,  31 => 6,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudApplicantEducation.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudApplicantEducation.html.twig");
    }
}
