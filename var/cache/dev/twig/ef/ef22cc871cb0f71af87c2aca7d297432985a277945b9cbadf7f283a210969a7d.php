<?php

/* :Alerts:offerApply.html.twig */
class __TwigTemplate_4ef7e44997afd6051e6a1a4b639157de91b80e18e58722fe02bdf53fc0be20fe extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:offerApply.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:offerApply.html.twig"));

        // line 2
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? $this->getContext($context, "alert")), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "securityToken", array())))) {
            // line 3
            echo "<h3>Hola ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "nombreempresa", array()), "html", null, true);
            echo ",</h3>
<p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "nombre", array()), "html", null, true);
            echo " ha aplicado a tu oferta ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "title", array()), "html", null, true);
            echo "<p>
<p>Para visitar su perfil, haz click en el siguiente enlace: <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "idusuario", array()), "id", array()))), "html", null, true);
            echo "\">Enlace</a>

<p><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "idusuario", array()), "id", array()))), "html", null, true);
            echo "#alerts\">Volver</a><p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Alerts:offerApply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  38 => 5,  32 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Alerts/offerApply.html.twig #}
{% if alert is defined and alert.userid.securityToken == app.user.securityToken %}
<h3>Hola {{ company.nombreempresa }},</h3>
<p>{{ applicant.nombre }} ha aplicado a tu oferta {{offer.title}}<p>
<p>Para visitar su perfil, haz click en el siguiente enlace: <a href=\"{{ path('publicProfile', {'idUser':applicant.idusuario.id, 'idVisitor':company.idusuario.id}) }}\">Enlace</a>

<p><a href=\"{{ path('profile', {'idUser':company.idusuario.id}) }}#alerts\">Volver</a><p>
{% endif %}
", ":Alerts:offerApply.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/offerApply.html.twig");
    }
}
