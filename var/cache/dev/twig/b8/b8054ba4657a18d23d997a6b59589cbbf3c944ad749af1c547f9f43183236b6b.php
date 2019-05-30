<?php

/* :Frontend:schoolEducationList.html.twig */
class __TwigTemplate_2a97c94eca113592a9b4b058eb596e9bad0d7152d0efda9ff5d61d1080f36e39 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:schoolEducationList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:schoolEducationList.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["education"] ?? $this->getContext($context, "education"))) == 0)) {
            // line 2
            echo "<li class=\"formationlist empty\">
    <p class=\"empty-message\">
        <i class=\"disabled\">No has añadido nungún curso todavía</i>
    </p>  
</li>  
";
        } else {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["education"] ?? $this->getContext($context, "education")));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 9
                echo "    <li class=\"formation-list clearfix\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                echo "\">
        <span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "formacion", array()), "titulo", array()), "html", null, true);
                echo "</span>
        <span>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "formacion", array()), "familiaprof", array()), "html", null, true);
                echo "</span>
        <button class=\"nobutton\" onclick=\"schoolEducationDelete(";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_delete_education", array("id" => $this->getAttribute($context["e"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "')\">
            <i class=\"fa fa-close\"></i>
        </button>
     ";
                // line 18
                echo "    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:schoolEducationList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  64 => 18,  54 => 12,  50 => 11,  46 => 10,  40 => 9,  35 => 8,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if education|length == 0 %}
<li class=\"formationlist empty\">
    <p class=\"empty-message\">
        <i class=\"disabled\">No has añadido nungún curso todavía</i>
    </p>  
</li>  
{% else %}
    {% for e in education  %}
    <li class=\"formation-list clearfix\" id=\"{{e.id}}{{app.user.id}}\">
        <span>{{ e.formacion.titulo }}</span>
        <span>{{ e.formacion.familiaprof }}</span>
        <button class=\"nobutton\" onclick=\"schoolEducationDelete({{e.id}}, {{app.user.id}}, '{{ path('school_delete_education', {'id':e.id, 'idUser':app.user.id}) }}')\">
            <i class=\"fa fa-close\"></i>
        </button>
     {# <a href=\"{{ path('school_delete_education', {'id':e.id, 'idUser':app.user.id}) }}\">
\t       <i class=\"fa fa-close\"></i>
\t    </a> #}
    </li>
    {% endfor %}
{% endif %}

", ":Frontend:schoolEducationList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/schoolEducationList.html.twig");
    }
}
