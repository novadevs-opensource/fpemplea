<?php

/* :Frontend:applicantSkillList.html.twig */
class __TwigTemplate_78dd110f333ea2f6bb3b5c41d7330601d0457b94509ba3a10d65bf7a5a2d2c51 extends Twig_Template
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
        // line 1
        echo "<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
    <h3>
        Competencias profesionales:
        <hr>
    </h3>
    ";
        // line 6
        if ((twig_length_filter($this->env, ($context["skills"] ?? null)) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_skill", array("id" => $this->getAttribute($context["s"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        if ((twig_length_filter($this->env, ($context["skills"] ?? null)) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_skill", array("id" => $this->getAttribute($context["s"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        if ((twig_length_filter($this->env, ($context["skills"] ?? null)) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["skills"] ?? null));
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                        echo ", '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_skill", array("id" => $this->getAttribute($context["s"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        return array (  219 => 87,  215 => 85,  209 => 84,  206 => 83,  194 => 78,  189 => 76,  181 => 73,  178 => 72,  175 => 71,  171 => 70,  168 => 69,  162 => 65,  160 => 64,  152 => 58,  148 => 56,  142 => 55,  139 => 54,  127 => 49,  122 => 47,  114 => 44,  111 => 43,  108 => 42,  104 => 41,  101 => 40,  95 => 36,  93 => 35,  86 => 30,  82 => 28,  76 => 27,  73 => 26,  61 => 21,  56 => 19,  48 => 16,  45 => 15,  42 => 14,  38 => 13,  35 => 12,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:applicantSkillList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/applicantSkillList.html.twig");
    }
}
