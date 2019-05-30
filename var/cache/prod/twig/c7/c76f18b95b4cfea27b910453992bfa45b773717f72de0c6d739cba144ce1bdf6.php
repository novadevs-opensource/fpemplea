<?php

/* :Frontend/registration:wizardCompany.html.twig */
class __TwigTemplate_d8e264eb87b51cd74a107aa434901573b39625589d7f008a5a0556568c115f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:wizardCompany.html.twig", 1);
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
        echo " FP Emplea - Mi perfil ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 0)) {
            // line 5
            echo "        <div class=\"container no-profile\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h2>Crear Perfil</h2>
                    <hr>
                </div>
                <div class=\"row\">
                    ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "company_create")));
            echo "
                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">

                        ";
            // line 16
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombreempresa", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sector", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
            echo "
                        ";
            // line 19
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "trabajadores", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                        ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "emailcontacto", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "horariocontacto", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "personacontacto", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "web", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        ";
            // line 32
            echo "                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                    </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                        <button class=\"button cta-2\">
                            Dar de alta
                        </button>
                        <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"button cta-3\">Cancelar</a>
                        <hr>
                    </div>
                    ";
            // line 43
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                </div>

            </div>
        </div>
    ";
        } else {
            // line 49
            echo "        <p>¡Ya tienes un perfil de Empresa creado!</p>
    ";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend/registration:wizardCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  127 => 43,  121 => 40,  112 => 34,  108 => 32,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  65 => 19,  61 => 17,  56 => 16,  50 => 12,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/registration:wizardCompany.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/wizardCompany.html.twig");
    }
}
