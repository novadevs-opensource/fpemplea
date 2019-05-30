<?php

/* :Emails:offerCreation.html.twig */
class __TwigTemplate_79f855f90fa01714d6b474e10ad638c643067bec81ba0f49c9fc90f58886c28f extends Twig_Template
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
\t¡Una nueva oportunidad!
</h3>
<p>
\tHola ";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "! Tenemos una nueva oferta pensada para ti
<p> 
<p>
\tLa empresa ";
        // line 9
        echo twig_escape_filter($this->env, ($context["company"] ?? null), "html", null, true);
        echo " necesita candidatos como tu para su nueva oferta:
<p>
<h2>
\t";
        // line 12
        echo twig_escape_filter($this->env, ($context["offerTitle"] ?? null), "html", null, true);
        echo "
</h2>
<p>
\t";
        // line 15
        echo twig_escape_filter($this->env, ($context["offerTitle"] ?? null), "html", null, true);
        echo "
</p>
<p>
\tPara iniciar sesión, haz click en el enlace: 
\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage_login");
        echo "\">
\t\tEnlace login
\t</a>
<p>

<p>
\t¡Gracias!
</p>
<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
        echo "\" width=\"150\">";
    }

    public function getTemplateName()
    {
        return ":Emails:offerCreation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  50 => 19,  43 => 15,  37 => 12,  31 => 9,  25 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:offerCreation.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/offerCreation.html.twig");
    }
}
