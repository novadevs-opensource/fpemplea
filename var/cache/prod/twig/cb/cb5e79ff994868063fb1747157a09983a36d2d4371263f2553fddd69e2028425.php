<?php

/* :Frontend/registration:wizardSchool.html.twig */
class __TwigTemplate_a4621f18cdb8322dbb2010db2a9ff36a91b3fcfb787f557effa5f5244a883189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:wizardSchool.html.twig", 1);
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
                    <h2>
                    Creación de perfil básico
                    </h2>
                    <hr>
                </div>
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"row\">
                        ";
            // line 15
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "school_create")));
            echo "
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cif", array()), 'row', array("attr" => array("class" => "form-control disabled", "readonly" => "")));
            echo "
                            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 20
            echo "                            ";
            // line 21
            echo "                            ";
            // line 22
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "web", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                            ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefono", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechacreacion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
                            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
            echo "
                        </div>
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <hr>
                            <p>
                                <input type=\"submit\" class=\"button cta-1\" value=\"Dar de alta\"/>
                            </p>
                            <hr>
                        </div>
                        ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
            echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 47
            echo "        <div class=\"container-profile\">
            <p>¡Ya tienes un perfil de centro!</p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend/registration:wizardSchool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  117 => 41,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  75 => 23,  70 => 22,  68 => 21,  66 => 20,  62 => 18,  58 => 17,  53 => 15,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/registration:wizardSchool.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/wizardSchool.html.twig");
    }
}
