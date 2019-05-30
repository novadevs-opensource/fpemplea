<?php

/* :Alerts:checkOfferApplyAlert.html.twig */
class __TwigTemplate_bd7c735c04e070ec1ee5d6fad561928254b0d9870ea4d022a0aa6e24f9ace9e0 extends Twig_Template
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
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? null), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "securityToken", array())))) {
            // line 2
            echo "\t";
            echo ($context["alert"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return ":Alerts:checkOfferApplyAlert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Alerts:checkOfferApplyAlert.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/checkOfferApplyAlert.html.twig");
    }
}
