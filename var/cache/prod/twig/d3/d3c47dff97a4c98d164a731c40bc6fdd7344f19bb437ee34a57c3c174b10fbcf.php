<?php

/* :Alerts:offerApply.html.twig */
class __TwigTemplate_fbb805406d5c9d70b1e0ca2464c2b2f7508589dc91a05f8442501b73162a7082 extends Twig_Template
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
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? null), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "securityToken", array())))) {
            // line 3
            echo "<h3>Hola ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "nombreempresa", array()), "html", null, true);
            echo ",</h3>
<p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "nombre", array()), "html", null, true);
            echo " ha aplicado a tu oferta ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
            echo "<p>
<p>Para visitar su perfil, haz click en el siguiente enlace: <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute(($context["applicant"] ?? null), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["company"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
            echo "\">Enlace</a>

<p><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["company"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        }
    }

    public function getTemplateName()
    {
        return ":Alerts:offerApply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  32 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Alerts:offerApply.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/offerApply.html.twig");
    }
}
