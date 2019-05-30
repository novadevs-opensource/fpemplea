<?php

/* :Alerts:applicantRejected.html.twig */
class __TwigTemplate_50c7b2097c575fd94c3afed61841174dd462e9132736ba28b5c4c7e413646cc1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:applicantRejected.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:applicantRejected.html.twig"));

        // line 2
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? $this->getContext($context, "alert")), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "securityToken", array())))) {
            // line 3
            echo "\t<h3>Hola ";
            echo twig_escape_filter($this->env, ($context["user"] ?? $this->getContext($context, "user")), "html", null, true);
            echo ", lo sentimos pero...</h3>
\t<p>La empresa ";
            // line 4
            echo twig_escape_filter($this->env, ($context["company"] ?? $this->getContext($context, "company")), "html", null, true);
            echo " ha rechazado tu candidatura para la oferta:<p>
\t<h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "title", array()), "html", null, true);
            echo "</h2>

\t<p>Para iniciar sesión, haz click en el enlace: <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("homepage_login"), "html", null, true);
            echo "\">Enlace login</a>.<p>

\t<p>¡Ánimo, y a seguir intentándolo!</p>
\t<p><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        } else {
            // line 12
            echo "\t<h1>Permiso denegado</h1>
\t<p><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        }
        // line 15
        echo "\t";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  60 => 15,  55 => 13,  52 => 12,  47 => 10,  41 => 7,  36 => 5,  32 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Alerts/registration.html.twig #}
{% if alert is defined and alert.userid.securityToken == app.user.securityToken %}
\t<h3>Hola {{ user }}, lo sentimos pero...</h3>
\t<p>La empresa {{ company }} ha rechazado tu candidatura para la oferta:<p>
\t<h2>{{ offer.title }}</h2>

\t<p>Para iniciar sesión, haz click en el enlace: <a href=\"{{ absolute_url('homepage_login') }}\">Enlace login</a>.<p>

\t<p>¡Ánimo, y a seguir intentándolo!</p>
\t<p><a href=\"{{ path('profile', {'idUser':app.user.id})}}#alerts\">Volver</a><p>
{% else %}
\t<h1>Permiso denegado</h1>
\t<p><a href=\"{{ path('profile', {'idUser':app.user.id})}}#alerts\">Volver</a><p>
{% endif %}
\t", ":Alerts:applicantRejected.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/applicantRejected.html.twig");
    }
}
