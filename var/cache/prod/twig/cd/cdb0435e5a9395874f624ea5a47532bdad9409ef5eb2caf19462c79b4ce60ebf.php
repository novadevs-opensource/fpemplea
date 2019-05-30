<?php

/* :Alerts:applicantRejected.html.twig */
class __TwigTemplate_f5a8f7a83517622124c93625a1f9a710c24f6f1e0d7b9bb6f6dde75bfc7bf665 extends Twig_Template
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
            echo "\t<h3>Hola ";
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo ", lo sentimos pero...</h3>
\t<p>La empresa ";
            // line 4
            echo twig_escape_filter($this->env, ($context["company"] ?? null), "html", null, true);
            echo " ha rechazado tu candidatura para la oferta:<p>
\t<h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
            echo "</h2>

\t<p>Para iniciar sesión, haz click en el enlace: <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("homepage_login"), "html", null, true);
            echo "\">Enlace login</a>.<p>

\t<p>¡Ánimo, y a seguir intentándolo!</p>
\t<p><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        } else {
            // line 12
            echo "\t<h1>Permiso denegado</h1>
\t<p><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        }
        // line 15
        echo "\t";
    }

    public function getTemplateName()
    {
        return ":Alerts:applicantRejected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  49 => 13,  46 => 12,  41 => 10,  35 => 7,  30 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Alerts:applicantRejected.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/applicantRejected.html.twig");
    }
}
