<?php

/* :Emails:registration.html.twig */
class __TwigTemplate_27325f641a12711a6c41bbebfb928d37944ad80badec01a0475f3a5b8f27d38d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Emails:registration.html.twig"));

        // line 2
        echo "<h3>
\t";
        // line 4
        echo "</h3>
<p>
 \tHola ";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "! ";
        // line 7
        echo "</p>
<p>
\t<ul>
\t\t<li>
 \t\t\tTu usuario es: ";
        // line 11
        echo twig_escape_filter($this->env, ($context["nif"] ?? $this->getContext($context, "nif")), "html", null, true);
        echo "
\t\t</li>
\t\t<li>
 \t\t\tTu contraseña es: ";
        // line 14
        echo twig_escape_filter($this->env, ($context["password"] ?? $this->getContext($context, "password")), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  66 => 27,  56 => 20,  47 => 14,  41 => 11,  35 => 7,  32 => 6,  28 => 4,  25 => 2,);
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
\t{# ¡Lo has hecho! ¡Te has registrado! #}
</h3>
<p>
 \tHola {{ name }}! {# Te has registrado satisfactoriamente. #}
</p>
<p>
\t<ul>
\t\t<li>
 \t\t\tTu usuario es: {{ nif }}
\t\t</li>
\t\t<li>
 \t\t\tTu contraseña es: {{ password }}
\t\t</li>
\t</ul>
 <p>
<p>
\tPara iniciar sesión, haz click en el enlace: 
\t<a href=\"{{ url('homepage_login') }}\">
\t\tEnlace login
\t</a>
<p>
<p>
¡Gracias!
</p>
<img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" width=\"150\">", ":Emails:registration.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/registration.html.twig");
    }
}
