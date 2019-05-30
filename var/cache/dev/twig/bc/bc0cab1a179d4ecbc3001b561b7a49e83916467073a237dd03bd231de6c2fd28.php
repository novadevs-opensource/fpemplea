<?php

/* :Frontend:applicantWorkexpList.html.twig */
class __TwigTemplate_770968ac1810ca9d72344e1f99433f10fa817cff9dd46a73f78c6bdeab4344e2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:applicantWorkexpList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:applicantWorkexpList.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["work"] ?? $this->getContext($context, "work")));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 2
            echo "<li class=\"formacionlist clearfix\" id=\"work-delete";
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "\">
    <span>
        ";
            // line 5
            echo "        ";
            if (($this->getAttribute($context["w"], "company", array()) != null)) {
                echo " 
            ";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "company", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "othercompany", array()), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "    </span> 
    - 
    <span>
        ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["w"], "start", array()), "m-d-Y"), "html", null, true);
            echo "
    </span>
    -
    <span>
        ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["w"], "end", array()), "m-d-Y"), "html", null, true);
            echo "
    </span>
    -
    <span>
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "position", array()), "html", null, true);
            echo "
    </span>
    <button class=\"nobutton pull-right\" onclick=\"applicantWorkDelete(";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_workexp", array("id" => $this->getAttribute($context["w"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "')\">
        <i class=\"fa fa-close\"></i>
    </button>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:applicantWorkexpList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  76 => 23,  71 => 21,  64 => 17,  57 => 13,  52 => 10,  46 => 8,  41 => 6,  36 => 5,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for w in work  %}
<li class=\"formacionlist clearfix\" id=\"work-delete{{w.id}}{{app.user.id}}\">
    <span>
        {# <i class=\"fa fa-bookmark-o\"></i>  #}
        {% if w.company != null %} 
            {{w.company}}
        {% else %}
            {{w.othercompany}}
        {% endif %}
    </span> 
    - 
    <span>
        {{ w.start|date('m-d-Y') }}
    </span>
    -
    <span>
        {{ w.end|date('m-d-Y')}}
    </span>
    -
    <span>
        {{ w.position}}
    </span>
    <button class=\"nobutton pull-right\" onclick=\"applicantWorkDelete({{w.id}}, {{app.user.id}}, '{{ path('applicant_delete_workexp', {'id':w.id, 'idUser':app.user.id}) }}')\">
        <i class=\"fa fa-close\"></i>
    </button>
</li>
{% endfor %}


", ":Frontend:applicantWorkexpList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/applicantWorkexpList.html.twig");
    }
}
