<?php

/* :Frontend/profile:crudApplicantSkill.html.twig */
class __TwigTemplate_89cb742986254da1810c5233b97a1f06a5ab48a1e61517c0b2dcb98308aadf84 extends Twig_Template
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
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "applicant_skill_add")));
        echo "
    <div class=\"form-group\">
        <p>
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "skill", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
        </p>
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
        <div>
        \t<button type=\"submit\" class=\"button cta-2\">
\t        \tGuardar
\t        </button>
        </div>
    </div>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudApplicantSkill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  33 => 7,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudApplicantSkill.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudApplicantSkill.html.twig");
    }
}
