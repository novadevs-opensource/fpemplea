<?php

/* :Emails:registration.html.twig */
class __TwigTemplate_a5a9e7b08205b32391ba14b93822ad47e0d4cdbecd8224e55fbaf52fe57752e0 extends Twig_Template
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
\t";
        // line 4
        echo "</h3>
<p>
 \tHola ";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "! ";
        // line 7
        echo "</p>
<p>
\t<ul>
\t\t<li>
 \t\t\tTu usuario es: ";
        // line 11
        echo twig_escape_filter($this->env, ($context["nif"] ?? null), "html", null, true);
        echo "
\t\t</li>
\t\t<li>
 \t\t\tTu contraseña es: ";
        // line 14
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "
\t\t</li>
\t</ul>
 <p>
<p>
\tPara iniciar sesión, haz click en el enlace: 
\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage_login");
        echo "\">
\t\tEnlace login
\t</a>
<p>
<p>
¡Gracias!
</p>
<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
        echo "\" width=\"150\">";
    }

    public function getTemplateName()
    {
        return ":Emails:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 27,  50 => 20,  41 => 14,  35 => 11,  29 => 7,  26 => 6,  22 => 4,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:registration.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/registration.html.twig");
    }
}
