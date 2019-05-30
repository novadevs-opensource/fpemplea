<?php

/* :Frontend/profile:crudOferta.html.twig */
class __TwigTemplate_cd220a79ecc651879aa19c59f943ae67e432fca3b49447a11395c7be2fb47e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/profile:crudOferta.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Mofificar oferta";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-edit-header\">
                <h2>Editar oferta</h2>
                <hr> 
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-edit\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                <div class=\"form-group\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tipo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categoria", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechainicio", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechafin", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "vacancies", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "descripcion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 28
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type=\"submit\" class=\"button cta-2\">
                        Guardar
                    </button>
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "#offers\" class=\"button cta-3\">Cancelar</a>
                </div>
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  99 => 36,  87 => 28,  83 => 26,  77 => 23,  73 => 22,  69 => 21,  63 => 18,  59 => 17,  55 => 16,  47 => 11,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:crudOferta.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudOferta.html.twig");
    }
}
