<?php

/* :Frontend/profile:crudApplicantWork.html.twig */
class __TwigTemplate_f987517782768c48f7c30aa601fd9e71ef661961d0b32c90c20bc90304a4ead8 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "applicant_work_add")));
        echo "
    <div class=\"form-group\">
        <div>
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "company", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "otherCompany", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "

        </div>
        <div>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "workexp", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "start", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        </div>
        <div>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "end", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        </div>
        <div>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "position", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        ";
        // line 21
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
        <button type=\"submit\" class=\"button cta-2\">
            Guardar
        </button>
    </div>
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
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
        return array (  68 => 26,  59 => 21,  54 => 18,  48 => 15,  42 => 12,  36 => 9,  29 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudApplicantWork.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudApplicantWork.html.twig");
    }
}
