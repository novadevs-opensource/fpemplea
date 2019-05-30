<?php

/* :Emails:profileVisitor.html.twig */
class __TwigTemplate_6ea76f0de01ff71fd84a99485ae336ecd07619ebdab421d066e87f595b9fb224 extends Twig_Template
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
        echo ",
</h3>
<p>
\t";
        // line 6
        echo twig_escape_filter($this->env, ($context["visitor"] ?? null), "html", null, true);
        echo " ha visitado tu perfil
<p>

<p>
\tContacta iniciando sesión, ¡haz click en el enlace!: 
\t<a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage_login");
        echo "\">
\t\tEnlace login
\t</a>
<p>
<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
        echo "\" width=\"150\">";
    }

    public function getTemplateName()
    {
        return ":Emails:profileVisitor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  36 => 11,  28 => 6,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:profileVisitor.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/profileVisitor.html.twig");
    }
}
