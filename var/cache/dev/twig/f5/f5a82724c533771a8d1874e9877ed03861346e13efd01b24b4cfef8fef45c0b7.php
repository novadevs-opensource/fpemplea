<?php

/* :Frontend/profile:schoolApplicantList.html.twig */
class __TwigTemplate_ca8728c3f0d796912e42df0c979043e352905a59f7dbd30af99435128b45f9b8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:schoolApplicantList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:schoolApplicantList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["applicants"] ?? $this->getContext($context, "applicants")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 2
            echo "\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudiante", array()), "nombre", array()), "html", null, true);
            echo "
\t<br>
\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "school", array()), "nombre", array()), "html", null, true);
            echo "

\tasdasd
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:schoolApplicantList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for a in applicants %}
\t{{a.perfilestudiante.nombre}}
\t<br>
\t{{a.school.nombre}}

\tasdasd
{% endfor %}

", ":Frontend/profile:schoolApplicantList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/schoolApplicantList.html.twig");
    }
}
