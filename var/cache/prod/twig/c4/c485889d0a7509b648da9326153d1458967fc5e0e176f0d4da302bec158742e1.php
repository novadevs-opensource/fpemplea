<?php

/* :Frontend/registration:registerCompanyFromErr.html.twig */
class __TwigTemplate_d25760916ad61a618635c500ef6861cfb14275e8f3a132307ee5aac37d34ef6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/registration:registerCompanyFromErr.html.twig", 2);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>Registro de empresa</h3>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "company_reg")));
        echo "
    <div class=\"form-group\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "role", array()), 'row', array("attr" => array("class" => "hidden", "value" => "ROLE_COMPANY")));
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nif", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 10
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fechacreacion", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "first", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", array()), "second", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
        <p>
            <label>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\" target=\"_blank\">
                    Ver términos y condiciones
                </a>
            </label>
        </p>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "termsAccepted", array()), 'row', array("attr" => array("class" => "")));
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
        <input type=\"submit\" class=\"button cta-2\" value=\"Dar de alta \"/>
    </div>
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Frontend/registration:registerCompanyFromErr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  78 => 22,  74 => 21,  66 => 16,  60 => 13,  56 => 12,  52 => 11,  47 => 10,  43 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/registration:registerCompanyFromErr.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/registration/registerCompanyFromErr.html.twig");
    }
}
