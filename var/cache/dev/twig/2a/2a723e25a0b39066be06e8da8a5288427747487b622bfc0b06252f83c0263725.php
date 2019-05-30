<?php

/* :Emails:offerCreation.html.twig */
class __TwigTemplate_255a8195562bb1665d28f978afc48e5c917006952373e2feede95e2d9e9709b4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:offerCreation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:offerCreation.html.twig"));

        // line 2
        echo "<h3>
\t¡Una nueva oportunidad!
</h3>
<p>
\tHola ";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "! Tenemos una nueva oferta pensada para ti
<p> 
<p>
\tLa empresa ";
        // line 9
        echo twig_escape_filter($this->env, ($context["company"] ?? $this->getContext($context, "company")), "html", null, true);
        echo " necesita candidatos como tu para su nueva oferta:
<p>
<h2>
\t";
        // line 12
        echo twig_escape_filter($this->env, ($context["offerTitle"] ?? $this->getContext($context, "offerTitle")), "html", null, true);
        echo "
</h2>
<p>
\t";
        // line 15
        echo twig_escape_filter($this->env, ($context["offerTitle"] ?? $this->getContext($context, "offerTitle")), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  67 => 27,  56 => 19,  49 => 15,  43 => 12,  37 => 9,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Emails/registration.html.twig #}
<h3>
\t¡Una nueva oportunidad!
</h3>
<p>
\tHola {{ name }}! Tenemos una nueva oferta pensada para ti
<p> 
<p>
\tLa empresa {{ company }} necesita candidatos como tu para su nueva oferta:
<p>
<h2>
\t{{ offerTitle }}
</h2>
<p>
\t{{ offerTitle }}
</p>
<p>
\tPara iniciar sesión, haz click en el enlace: 
\t<a href=\"{{ url('homepage_login') }}\">
\t\tEnlace login
\t</a>
<p>

<p>
\t¡Gracias!
</p>
<img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" width=\"150\">", ":Emails:offerCreation.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/offerCreation.html.twig");
    }
}
