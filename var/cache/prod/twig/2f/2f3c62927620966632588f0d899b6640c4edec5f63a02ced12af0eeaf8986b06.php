<?php

/* :Frontend:applicantWorkexpList.html.twig */
class __TwigTemplate_1b19a287287a5a7d74bad03c9a733314f2303cd536e82ccebf69d4f0d5427c10 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["work"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 2
            echo "<li class=\"formacionlist clearfix\" id=\"work-delete";
            echo twig_escape_filter($this->env, $this->getAttribute($context["w"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_delete_workexp", array("id" => $this->getAttribute($context["w"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        return array (  85 => 28,  70 => 23,  65 => 21,  58 => 17,  51 => 13,  46 => 10,  40 => 8,  35 => 6,  30 => 5,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:applicantWorkexpList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/applicantWorkexpList.html.twig");
    }
}
