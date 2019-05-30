<?php

/* :Emails:applicantRejected.html.twig */
class __TwigTemplate_db4f4a01b4663841e44126205956916f3573f74ae92a0b341d4efff421968104 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:applicantRejected.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:applicantRejected.html.twig"));

        // line 2
        echo "<h3>
\tHola ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo ", lo sentimos pero...
</h3>
<p>
\tLa empresa ";
        // line 6
        echo twig_escape_filter($this->env, ($context["company"] ?? $this->getContext($context, "company")), "html", null, true);
        echo " ha rechazado tu candidatura para la oferta:
<p>
<h2>
\t";
        // line 9
        echo twig_escape_filter($this->env, ($context["offerTitle"] ?? $this->getContext($context, "offerTitle")), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  58 => 21,  47 => 13,  40 => 9,  34 => 6,  28 => 3,  25 => 2,);
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
\tHola {{ name }}, lo sentimos pero...
</h3>
<p>
\tLa empresa {{ company }} ha rechazado tu candidatura para la oferta:
<p>
<h2>
\t{{ offerTitle }}
</h2>
<p>
\tPara iniciar sesión, haz click en el enlace: 
\t<a href=\"{{ absolute_url('homepage_login') }}\">
\t\tEnlace login
\t</a>
<p>

<p>
\t¡Ánimo, y a seguir intentándolo!
</p>
<img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" width=\"150\">", ":Emails:applicantRejected.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/applicantRejected.html.twig");
    }
}
