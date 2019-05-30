<?php

/* :Frontend/profile:createOffer.html.twig */
class __TwigTemplate_5a4a522519fe7415c92437231d8ab7d5fd48e769efdab2f76e1d4f18d592fb86 extends Twig_Template
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
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "create_offer")));
        echo "
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h3>
            Crear oferta
        </h3>
        <hr>
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tipo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categoria", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
    </div>
    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechainicio", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechafin", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vacancies", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descripcion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
        <input type=\"submit\" class=\"button cta-2\" value=\"Crear\"/>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"button cta-3\">Cancelar</a>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:createOffer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 24,  65 => 22,  61 => 20,  55 => 17,  51 => 16,  47 => 15,  41 => 12,  37 => 11,  33 => 10,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:createOffer.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/createOffer.html.twig");
    }
}
