<?php

/* :Frontend:applicantSkillList.html.twig */
class __TwigTemplate_fa02a954f7c07c5d9381b075b7297decfe77ac99c8f2841cef6da7b59bd9b455 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:applicantSkillList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:applicantSkillList.html.twig"));

        // line 1
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
    <h3>
        Competencias profesionales:
        <hr>
    </h3>
    ";
        // line 6
        if ((twig_length_filter($this->env, ($context["skills"] ?? $this->getContext($context, "skills"))) == 0)) {
            // line 7
            echo "    <p class=\"technical-skill-empty>
        <i class=\"disabled\">Aún no has añadido ninguna competencia profesional</i>
    </p>
    <div class=\"clearfix skill-list\"></div>
    ";
        } else {
            // line 12
            echo "        <div class=\"clearfix technical-skill-list skill-list\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? $this->getContext($context, "skills")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 14
                echo "            ";
                if ( !(null === $this->getAttribute($context["s"], "skill", array()))) {
                    // line 15
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["s"], "skill", array()), "skillcategory", array()), "id", array()) == 1)) {
                        // line 16
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 skill";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo "\">
                    <span>
                        <i class=\"fa fa-gear\" aria-hidden=\"true\"></i>
                        ";
                        // line 19
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "skill", array()), "skill", array()), "html", null, true);
                        echo " 
                    </span>
                    <button class=\"nobutton pull-right\" onclick=\"applicantSkillDelete(";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_skill", array("id" => $this->getAttribute($context["s"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                        echo "')\">
                            <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                ";
                    }
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
    ";
        }
        // line 30
        echo "
    <h3>
        Competencias personales:
        <hr>
    </h3>
    ";
        // line 35
        if ((twig_length_filter($this->env, ($context["skills"] ?? $this->getContext($context, "skills"))) == 0)) {
            // line 36
            echo "    <p class=\"personal-skill-empty\">
        <i class=\"disabled\">Aún no has añadido ninguna competencia personal</i>
    </p>
    ";
        } else {
            // line 40
            echo "    <div class=\"clearfix personal-skill-list skill-list\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? $this->getContext($context, "skills")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 42
                echo "            ";
                if ( !(null === $this->getAttribute($context["s"], "skill", array()))) {
                    // line 43
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["s"], "skill", array()), "skillcategory", array()), "id", array()) == 2)) {
                        // line 44
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 skill";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo "\">
                    <span>
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                        ";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "skill", array()), "skill", array()), "html", null, true);
                        echo " 
                    </span>
                    <button class=\"nobutton pull-right\" onclick=\"applicantSkillDelete(";
                        // line 49
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_skill", array("id" => $this->getAttribute($context["s"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                        echo "')\">
                            <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                ";
                    }
                    // line 54
                    echo "            ";
                }
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </div>
    ";
        }
        // line 58
        echo "    

    <h3>
        Competencias comunes:
        <hr>
    </h3>
    ";
        // line 64
        if ((twig_length_filter($this->env, ($context["skills"] ?? $this->getContext($context, "skills"))) == 0)) {
            // line 65
            echo "    <p class=\"common-skill-empty\">
        <i class=\"disabled\">Aún no has añadido ninguna competencia personal</i>
    </p>
    ";
        } else {
            // line 69
            echo "    <div class=\"clearfix common-skill-list skill-list\">
    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? $this->getContext($context, "skills")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 71
                echo "            ";
                if ( !(null === $this->getAttribute($context["s"], "skill", array()))) {
                    // line 72
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["s"], "skill", array()), "skillcategory", array()), "id", array()) == 3)) {
                        // line 73
                        echo "                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 skill";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo "\">
                    <span>
                        <i class=\"fa fa-star i-col\" aria-hidden=\"true\"></i>
                        ";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "skill", array()), "skill", array()), "html", null, true);
                        echo " 
                    </span>
                    <button class=\"nobutton pull-right\" onclick=\"applicantSkillDelete(";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_skill", array("id" => $this->getAttribute($context["s"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                        echo "')\">
                            <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                ";
                    }
                    // line 83
                    echo "            ";
                }
                // line 84
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </div>
    ";
        }
        // line 87
        echo "    <div class=\"clearfix skill-list-new\">
    </div>
</div> 

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:applicantSkillList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 87,  221 => 85,  215 => 84,  212 => 83,  200 => 78,  195 => 76,  187 => 73,  184 => 72,  181 => 71,  177 => 70,  174 => 69,  168 => 65,  166 => 64,  158 => 58,  154 => 56,  148 => 55,  145 => 54,  133 => 49,  128 => 47,  120 => 44,  117 => 43,  114 => 42,  110 => 41,  107 => 40,  101 => 36,  99 => 35,  92 => 30,  88 => 28,  82 => 27,  79 => 26,  67 => 21,  62 => 19,  54 => 16,  51 => 15,  48 => 14,  44 => 13,  41 => 12,  34 => 7,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
    <h3>
        Competencias profesionales:
        <hr>
    </h3>
    {% if skills|length == 0 %}
    <p class=\"technical-skill-empty>
        <i class=\"disabled\">Aún no has añadido ninguna competencia profesional</i>
    </p>
    <div class=\"clearfix skill-list\"></div>
    {% else %}
        <div class=\"clearfix technical-skill-list skill-list\">
        {% for s in skills  %}
            {% if s.skill is not null %}
                {% if s.skill.skillcategory.id == 1 %}
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 skill{{s.id}}{{app.user.id}}\">
                    <span>
                        <i class=\"fa fa-gear\" aria-hidden=\"true\"></i>
                        {{s.skill.skill}} 
                    </span>
                    <button class=\"nobutton pull-right\" onclick=\"applicantSkillDelete({{s.id}}, {{app.user.id}}, '{{ path('applicant_delete_skill', {'id':s.id, 'idUser':app.user.id}) }}')\">
                            <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                {% endif %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

    <h3>
        Competencias personales:
        <hr>
    </h3>
    {% if skills|length == 0 %}
    <p class=\"personal-skill-empty\">
        <i class=\"disabled\">Aún no has añadido ninguna competencia personal</i>
    </p>
    {% else %}
    <div class=\"clearfix personal-skill-list skill-list\">
        {% for s in skills  %}
            {% if s.skill is not null %}
                {% if s.skill.skillcategory.id == 2 %}
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 skill{{s.id}}{{app.user.id}}\">
                    <span>
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
                        {{s.skill.skill}} 
                    </span>
                    <button class=\"nobutton pull-right\" onclick=\"applicantSkillDelete({{s.id}}, {{app.user.id}}, '{{ path('applicant_delete_skill', {'id':s.id, 'idUser':app.user.id}) }}')\">
                            <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
    {% endif %}
    

    <h3>
        Competencias comunes:
        <hr>
    </h3>
    {% if skills|length == 0 %}
    <p class=\"common-skill-empty\">
        <i class=\"disabled\">Aún no has añadido ninguna competencia personal</i>
    </p>
    {% else %}
    <div class=\"clearfix common-skill-list skill-list\">
    {% for s in skills  %}
            {% if s.skill is not null %}
                {% if s.skill.skillcategory.id == 3 %}
                <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 skill{{s.id}}{{app.user.id}}\">
                    <span>
                        <i class=\"fa fa-star i-col\" aria-hidden=\"true\"></i>
                        {{s.skill.skill}} 
                    </span>
                    <button class=\"nobutton pull-right\" onclick=\"applicantSkillDelete({{s.id}}, {{app.user.id}}, '{{ path('applicant_delete_skill', {'id':s.id, 'idUser':app.user.id}) }}')\">
                            <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
    {% endif %}
    <div class=\"clearfix skill-list-new\">
    </div>
</div> 

", ":Frontend:applicantSkillList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/applicantSkillList.html.twig");
    }
}
