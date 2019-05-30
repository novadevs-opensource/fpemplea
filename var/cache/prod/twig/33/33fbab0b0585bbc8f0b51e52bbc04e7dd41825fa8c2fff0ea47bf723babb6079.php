<?php

/* :Frontend/profile:SocialNetworkAdd.html.twig */
class __TwigTemplate_c9d5172bd9a0c72914d70abb6208e4c3832c50b2039172527995161e06bf19d4 extends Twig_Template
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
        echo "<h3>
\tRedes sociales
    <hr>
</h3>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "social_network_add")));
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sn", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "snurl", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
    <input type=\"hidden\" name=\"userid\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
        echo "\">

    <button type=\"submit\" class=\"button cta-2\" id=\"saveSocial\">
    \tGuardar
    </button>
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:SocialNetworkAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:SocialNetworkAdd.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/SocialNetworkAdd.html.twig");
    }
}
