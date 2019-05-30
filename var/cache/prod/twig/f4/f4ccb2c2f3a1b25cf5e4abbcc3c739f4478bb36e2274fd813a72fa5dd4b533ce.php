<?php

/* :Alerts:registerAlert.html.twig */
class __TwigTemplate_e8b65fe4bf83515e1763734d8597f1fdf3cc34d86acee9965df4be31230b32aa extends Twig_Template
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
        // line 2
        echo "Deprecated in Applicants
";
        // line 3
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? null), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "securityToken", array())))) {
            // line 4
            echo "\t<h3>Hola!</h3>
\t<p>>Te has registrado correctamente!
\t</ul>
\t<p>
\t\t¡Desde el quipo de FP Emplea deseamos un feliz día!
\t</p>
\t<p><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 12
            echo "\t<h1>Permiso denegado</h1>
\t<p><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Alerts:registerAlert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  41 => 13,  38 => 12,  36 => 11,  32 => 10,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Alerts:registerAlert.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/registerAlert.html.twig");
    }
}
