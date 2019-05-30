<?php

/* :Frontend:misCursosAspirante.html.twig */
class __TwigTemplate_3d52d0e081724f751bd7bac42a84e1c1ce2f26cdeebe42039ffffcb1edabefd3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:misCursosAspirante.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:misCursosAspirante.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["education"] ?? $this->getContext($context, "education")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 3
            echo "    <div class=\"row\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "\">
        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <span>
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "school", array()), "html", null, true);
            echo "
            </span> 
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-6 col-xs-12\">
            <span>
                ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "formacion", array()), "titulo", array()), "html", null, true);
            echo "
            </span> 
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <span>
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "formacion", array()), "familiaprof", array()), "html", null, true);
            echo "
            </span>
        </div>
        <div class=\"col-lg-2 col-md-3 col-sm-6 col-xs-12\">
            <span>
                ";
            // line 21
            if (($this->getAttribute($context["e"], "finished", array()) == true)) {
                // line 22
                echo "                    Finalizado
                ";
            } else {
                // line 24
                echo "                    Cursando
                ";
            }
            // line 26
            echo "            </span>
            <button class=\"nobutton pull-right\" onclick=\"applicantEducationDelete(";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_education", array("id" => $this->getAttribute($context["e"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:misCursosAspirante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  77 => 27,  74 => 26,  70 => 24,  66 => 22,  64 => 21,  56 => 16,  48 => 11,  40 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container-fluid\">
{% for e in education  %}
    <div class=\"row\" id=\"{{e.id}}{{app.user.id}}\">
        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <span>
                {{ e.school}}
            </span> 
        </div>
        <div class=\"col-lg-4 col-md-3 col-sm-6 col-xs-12\">
            <span>
                {{ e.formacion.titulo }}
            </span> 
        </div>
        <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <span>
                {{ e.formacion.familiaprof }}
            </span>
        </div>
        <div class=\"col-lg-2 col-md-3 col-sm-6 col-xs-12\">
            <span>
                {% if e.finished == true %}
                    Finalizado
                {% else %}
                    Cursando
                {% endif %}
            </span>
            <button class=\"nobutton pull-right\" onclick=\"applicantEducationDelete({{e.id}}, {{app.user.id}}, '{{ path('applicant_delete_education', {'id':e.id, 'idUser':app.user.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
{% endfor %}
</div>", ":Frontend:misCursosAspirante.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/misCursosAspirante.html.twig");
    }
}
