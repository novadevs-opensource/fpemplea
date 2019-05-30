<?php

/* :Frontend:misCursosAspirante.html.twig */
class __TwigTemplate_cec8c76affd9218f99d6a59f950d1b389202755c1d171c3c2aa34262fdd2d9b3 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["education"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 3
            echo "    <div class=\"row\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_education", array("id" => $this->getAttribute($context["e"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        return array (  87 => 33,  71 => 27,  68 => 26,  64 => 24,  60 => 22,  58 => 21,  50 => 16,  42 => 11,  34 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:misCursosAspirante.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/misCursosAspirante.html.twig");
    }
}
