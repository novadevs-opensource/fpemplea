<?php

/* :Emails:applicantRejected.html.twig */
class __TwigTemplate_005137dcc983579543c8cb62db53cf9cc6b6a8cae36860847abe634284e97262 extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo ", lo sentimos pero...
</h3>
<p>
\tLa empresa ";
        // line 6
        echo twig_escape_filter($this->env, ($context["company"] ?? null), "html", null, true);
        echo " ha rechazado tu candidatura para la oferta:
<p>
<h2>
\t";
        // line 9
        echo twig_escape_filter($this->env, ($context["offerTitle"] ?? null), "html", null, true);
        echo "
</h2>
<p>
\tPara iniciar sesión, haz click en el enlace: 
\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("homepage_login"), "html", null, true);
        echo "\">
\t\tEnlace login
\t</a>
<p>

<p>
\t¡Ánimo, y a seguir intentándolo!
</p>
<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
        echo "\" width=\"150\">";
    }

    public function getTemplateName()
    {
        return ":Emails:applicantRejected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  41 => 13,  34 => 9,  28 => 6,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:applicantRejected.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/applicantRejected.html.twig");
    }
}
