<?php

/* :Emails:offerApply.html.twig */
class __TwigTemplate_0a343f01642ca997b642f4b768124f2c823641033f7fa00500a176d2a5362cc0 extends Twig_Template
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
        echo "<h3>
\tHola ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "nombreempresa", array()), "html", null, true);
        echo ",
</h3>
<p>
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "nombre", array()), "html", null, true);
        echo " ha aplicado a tu oferta ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
        echo "
<p>
<p>
\t<span>
\t\tPara visitar su perfil, haz click en el siguiente enlace:
\t</span>
\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute(($context["applicant"] ?? null), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["company"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
        echo "\">\t\tEnlace
\t</a>
<p>
\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["company"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
        echo "\">
\t\tVolver
\t</a>
<p>
";
    }

    public function getTemplateName()
    {
        return ":Emails:offerApply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  39 => 12,  28 => 6,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:offerApply.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/offerApply.html.twig");
    }
}
