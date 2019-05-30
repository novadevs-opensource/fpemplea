<?php

/* :Alerts:profileVisitor.html.twig */
class __TwigTemplate_8414db0d3264f23e673af0d54da73895c5d264c2709acef86ef9bd1afdd750fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Alerts:profileVisitor.html.twig", 2);
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
        echo "\t";
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? null), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "securityToken", array())))) {
            // line 5
            echo "\t\t<h2>
\t\t\t";
            // line 6
            echo $this->getAttribute(($context["alert"] ?? null), "alertBody", array());
            echo "
\t\t</h2>
\t\t<p>
\t\t\t<a class=\"button cta-2\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a>
\t\t<p>
\t";
        } else {
            // line 12
            echo "\t\t<h1>Permiso denegado</h1>
\t\t<p><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
\t";
        }
    }

    public function getTemplateName()
    {
        return ":Alerts:profileVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  49 => 12,  43 => 9,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Alerts:profileVisitor.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/profileVisitor.html.twig");
    }
}
