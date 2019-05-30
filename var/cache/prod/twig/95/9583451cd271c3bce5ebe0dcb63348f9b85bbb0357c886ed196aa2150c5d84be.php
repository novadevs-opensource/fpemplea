<?php

/* :Alerts:offerAssign.html.twig */
class __TwigTemplate_b812fe79477890e9e0b4f9953cf1a418c936fa0237684a05de694c0cec05a26c extends Twig_Template
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
            echo "<h3>
\tHola ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? null), "nombre", array()), "html", null, true);
            echo ",
</h3>
<p>
\tLa empresa <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute(($context["company"] ?? null), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["school"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "nombreempresa", array()), "html", null, true);
            echo "</a> te ha asignado su oferta <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute(($context["offer"] ?? null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
            echo "</a> el día ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "fechaborrado", array()), "Y-m-d"), "html", null, true);
            echo "
<p>
<p>
\t<ul>
\t\t<li>
\t\t\tTítulo: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
            echo "
\t\t</li>
\t\t<li>
\t\t\tComentario: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "descriptions", array()), "html", null, true);
            echo "\t\t\t
\t\t</li>
\t</ul>
</p>
\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["school"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
            echo "#alerts\">
\t\tVolver a FP Emplea
\t</a>
<p>
";
        }
    }

    public function getTemplateName()
    {
        return ":Alerts:offerAssign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  52 => 15,  46 => 12,  30 => 7,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Alerts:offerAssign.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/offerAssign.html.twig");
    }
}
