<?php

/* :Alerts:offerAssign.html.twig */
class __TwigTemplate_e0d292b5ee602b19cb275ab98b145861d07cfdc795f8454ec8237db10f1e6cae extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:offerAssign.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Alerts:offerAssign.html.twig"));

        // line 2
        if (((isset($context["alert"]) || array_key_exists("alert", $context)) && ($this->getAttribute($this->getAttribute(($context["alert"] ?? $this->getContext($context, "alert")), "userid", array()), "securityToken", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "securityToken", array())))) {
            // line 3
            echo "<h3>
\tHola ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "nombre", array()), "html", null, true);
            echo ",
</h3>
<p>
\tLa empresa <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "idusuario", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? $this->getContext($context, "company")), "nombreempresa", array()), "html", null, true);
            echo "</a> te ha asignado su oferta <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "title", array()), "html", null, true);
            echo "</a> el día ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "fechaborrado", array()), "Y-m-d"), "html", null, true);
            echo "
<p>
<p>
\t<ul>
\t\t<li>
\t\t\tTítulo: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "title", array()), "html", null, true);
            echo "
\t\t</li>
\t\t<li>
\t\t\tComentario: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "descriptions", array()), "html", null, true);
            echo "\t\t\t
\t\t</li>
\t</ul>
</p>
\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "idusuario", array()), "id", array()))), "html", null, true);
            echo "#alerts\">
\t\tVolver a FP Emplea
\t</a>
<p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Alerts:offerAssign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  58 => 15,  52 => 12,  36 => 7,  30 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/Alerts/offerAssign.html.twig #}
{% if alert is defined and alert.userid.securityToken == app.user.securityToken %}
<h3>
\tHola {{ school.nombre }},
</h3>
<p>
\tLa empresa <a href=\"{{ path('publicProfile', {'idUser':company.idusuario.id, 'idVisitor':school.idusuario.id}) }}\">{{ company.nombreempresa }}</a> te ha asignado su oferta <a href=\"{{ path('ver_oferta', {'id':offer.id}) }}\">{{offer.title}}</a> el día {{ offer.fechaborrado|date('Y-m-d') }}
<p>
<p>
\t<ul>
\t\t<li>
\t\t\tTítulo: {{ offer.title }}
\t\t</li>
\t\t<li>
\t\t\tComentario: {{ offer.descriptions }}\t\t\t
\t\t</li>
\t</ul>
</p>
\t<a href=\"{{ path('profile', {'idUser':school.idusuario.id}) }}#alerts\">
\t\tVolver a FP Emplea
\t</a>
<p>
{% endif %}
", ":Alerts:offerAssign.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Alerts/offerAssign.html.twig");
    }
}
