<?php

/* :Frontend/profile:crudEstudiante.html.twig */
class __TwigTemplate_4e6e6f49b8d2772e4f4ebae71ad3c5435245d5c70680a50ad0a82691de3a870e extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "applicant_edit")));
        echo "
<div class=\"form-group\">
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apellidos", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechanacimiento", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
            ";
        // line 9
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefonouno", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-md-6\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "diponibilidad", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefonodos", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <hr>
        </div>
        <div class=\"col-md-12\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fexibilidadgeografica", array()), 'row', array("attr" => array("class" => "")));
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intereses", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cvtxt", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 28
        echo "            ";
        // line 29
        echo "            <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
            ";
        // line 31
        echo "        </div>
    </div>
</div>
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudEstudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  95 => 31,  92 => 29,  90 => 28,  86 => 26,  82 => 25,  78 => 24,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  43 => 10,  38 => 9,  34 => 7,  30 => 6,  26 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudEstudiante.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudEstudiante.html.twig");
    }
}
