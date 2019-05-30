<?php

/* :Frontend/profile:schoolApplicantList.html.twig */
class __TwigTemplate_b356b431fe4d98e3c3702daa3954bb1a328942512d34a0454b16c124d0bc68f3 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["applicants"] ?? null));
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
        return array (  39 => 8,  29 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:schoolApplicantList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/schoolApplicantList.html.twig");
    }
}
