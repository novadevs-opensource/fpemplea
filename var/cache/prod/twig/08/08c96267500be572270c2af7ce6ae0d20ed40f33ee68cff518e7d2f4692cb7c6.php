<?php

/* :Frontend/registration:registerCompany.html.twig */
class __TwigTemplate_1d61f41047f4d622169bd2ca8b860c1b21012c0f593c89e19d3885d3913cb401 extends Twig_Template
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
        echo "<!-- Resources/views/registration/registerCompany.html.view -->
<div id=\"empresas\" class=\"tab-pane fade in\">
    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "company_reg")));
        echo "
    <div class=\"form-group\">
        <hr>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "role", array()), 'row', array("attr" => array("class" => "hidden", "value" => "ROLE_COMPANY")));
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nif", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 9
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechacreacion", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <p>
            <label>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\" target=\"_blank\">
                    Ver términos y condiciones
                </a>
            </label>
        </p>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "termsAccepted", array()), 'row', array("id" => "company_terms_accepted", "attr" => array("class" => "la_prueba")));
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
        <hr>
        <input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta \"/>
    </div>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return ":Frontend/registration:registerCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  68 => 21,  64 => 20,  56 => 15,  50 => 12,  46 => 11,  42 => 10,  37 => 9,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/registration:registerCompany.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/registerCompany.html.twig");
    }
}
