<?php

/* :Frontend:forgot.html.twig */
class __TwigTemplate_9b9561a33ca3ec2770898e50518d9b8b0d92094796569b453ae6680edccc0f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:forgot.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:forgot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:forgot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if (((isset($context["errorPass"]) || array_key_exists("errorPass", $context)) && ($context["errorPass"] ?? $this->getContext($context, "errorPass")))) {
            // line 5
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 6
                echo "\t      <div class=\"alert alert-danger alert-dismissable\">
\t        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t        ";
                // line 8
                echo twig_escape_filter($this->env, ($context["errorPass"] ?? $this->getContext($context, "errorPass")), "html", null, true);
                echo "
\t      </div>
\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t    <h2 class=\"text-center\">
\t    \t<p><strong>";
            // line 12
            echo twig_escape_filter($this->env, ($context["errorPass"] ?? $this->getContext($context, "errorPass")), "html", null, true);
            echo "</strong>. Ponte en contacto con el administrador.</p>
\t    </h2>
\t";
        } else {
            // line 15
            echo "\t<h2 class=\"text-center\">
\t\t<p>Se ha mandado un mensaje de correo electrónico a </p>
\t\t<p><strong>";
            // line 17
            echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
            echo "</strong> con tus datos de acceso.</p>
\t</h2>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  79 => 15,  73 => 12,  70 => 11,  61 => 8,  57 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/default/new.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
\t{% if errorPass is defined and errorPass %}
\t\t{% for flashMessage in app.session.flashbag.get('error') %}
\t      <div class=\"alert alert-danger alert-dismissable\">
\t        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t        {{ errorPass }}
\t      </div>
\t    {% endfor %}
\t    <h2 class=\"text-center\">
\t    \t<p><strong>{{ errorPass }}</strong>. Ponte en contacto con el administrador.</p>
\t    </h2>
\t{% else %}
\t<h2 class=\"text-center\">
\t\t<p>Se ha mandado un mensaje de correo electrónico a </p>
\t\t<p><strong>{{email}}</strong> con tus datos de acceso.</p>
\t</h2>
\t{% endif %}
{% endblock %}", ":Frontend:forgot.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/forgot.html.twig");
    }
}
