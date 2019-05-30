<?php

/* :Frontend/profile:crudCentro.html.twig */
class __TwigTemplate_4c9a63db202462bedbaa88cf27c3f839a9a72633fe887fac1646d5a7643bd76d extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "school_edit")));
        echo "
<div class=\"profile clearfix\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3>Datos del centro</h3>
        <hr>
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cif", array()), 'row', array("attr" => array("class" => "form-control", "readonly" => "")));
        echo "
        ";
        // line 11
        echo "        ";
        // line 12
        echo "        ";
        // line 13
        echo "        ";
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
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechacreacion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "web", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
    </div>
</div>
";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudCentro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  60 => 19,  54 => 16,  50 => 15,  46 => 14,  41 => 13,  39 => 12,  37 => 11,  33 => 9,  29 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudCentro.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudCentro.html.twig");
    }
}
