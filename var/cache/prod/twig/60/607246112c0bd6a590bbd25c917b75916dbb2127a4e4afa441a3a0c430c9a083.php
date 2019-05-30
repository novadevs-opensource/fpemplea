<?php

/* :Frontend/registration:wizardApplicant.html.twig */
class __TwigTemplate_34f71cc00d1d6b0d6c40f0fafb42930bc81e8a02841fc71c3fa51fbdbb554a71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:wizardApplicant.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 0) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT"))) {
            // line 4
            echo "\t\t<section id=\"wizard\">
\t\t\t<h3>Crea tu perfil</h3>
\t\t\t<div class=\"wizard\">
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "applicant_create")));
            echo "
\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nombre", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "apellidos", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechanacimiento", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
            echo "
\t\t\t\t\t\t\t";
            // line 15
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefonouno", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "telefonodos", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "direccion", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cp", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "localidad", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "pais", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "intereses", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 sepline\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "diponibilidad", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
            echo "
\t\t\t\t\t\t\t";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fexibilidadgeografica", array()), 'row', array("attr" => array("class" => "")));
            echo "
\t\t\t\t\t\t\t";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cvtxt", array()), 'row', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t";
            // line 32
            echo "\t\t\t\t\t\t\t";
            // line 33
            echo "\t\t\t\t\t\t\t<input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta\"/>
\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"button cta-3\">Cancelar</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend/registration:wizardApplicant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  113 => 34,  110 => 33,  108 => 32,  104 => 30,  100 => 29,  96 => 28,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  67 => 17,  63 => 16,  58 => 15,  54 => 13,  50 => 12,  46 => 11,  40 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/registration:wizardApplicant.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/wizardApplicant.html.twig");
    }
}
