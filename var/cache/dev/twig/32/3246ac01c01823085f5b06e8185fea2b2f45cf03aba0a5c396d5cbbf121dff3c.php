<?php

/* :Alerts:registerAlert.html.twig */
class __TwigTemplate_9d08d57547bed4ae411ba11b439091e4b1c02d0218dc45353ee1f4bd6c345a81 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:registerAlert.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:registerAlert.html.twig"));

        // line 2
        echo "Deprecated in Applicants
";
        // line 3
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? $this->getContext($context, "alert")), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "securityToken", array())))) {
            // line 4
            echo "\t<h3>Hola!</h3>
\t<p>>Te has registrado correctamente!
\t</ul>
\t<p>
\t\t¡Desde el quipo de FP Emplea deseamos un feliz día!
\t</p>
\t<p><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 12
            echo "\t<h1>Permiso denegado</h1>
\t<p><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        }
        // line 15
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Alerts:registerAlert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  47 => 13,  44 => 12,  42 => 11,  38 => 10,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Alerts/registerAlert.html.twig #}
Deprecated in Applicants
{% if alert is defined and alert.userid.securityToken == app.user.securityToken %}
\t<h3>Hola!</h3>
\t<p>>Te has registrado correctamente!
\t</ul>
\t<p>
\t\t¡Desde el quipo de FP Emplea deseamos un feliz día!
\t</p>
\t<p><a href=\"{{ path('profile', {'idUser':app.user.id})}}#alerts\">Volver</a><p>
{% elseif app.user.id is defined %}
\t<h1>Permiso denegado</h1>
\t<p><a href=\"{{ path('profile', {'idUser':app.user.id})}}#alerts\">Volver</a><p>
{% endif %}

", ":Alerts:registerAlert.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/registerAlert.html.twig");
    }
}
