<?php

/* :Frontend/profile:crudEmpresa.html.twig */
class __TwigTemplate_6d2b5f7bd46dc97d1463aeb74a9633d613a5f1aa0754979ca34732867fa87bab extends Twig_Template
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
        echo "<div class=\"profile row\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "company_edit")));
        echo "
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 5
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombreempresa", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 7
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "trabajadores", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sector", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 10
        echo "        <input type=\"hidden\" name=\"selected\" value=\"";
        echo twig_escape_filter($this->env, ($context["cat"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emailcontacto", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "horariocontacto", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "personacontacto", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "web", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 23
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <input type=\"submit\" class=\"button cta-2\" value=\"Guardar\"/>
    </div>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudEmpresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  84 => 23,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  41 => 10,  37 => 8,  32 => 7,  27 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudEmpresa.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudEmpresa.html.twig");
    }
}
