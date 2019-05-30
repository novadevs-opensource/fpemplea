<?php

/* :Frontend:list.html.twig */
class __TwigTemplate_14821b4c030843066c1b7de7493bec0d39ad74c14d39a00abbef9a483f42f92b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " FP Emplea ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 11
        echo "   
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nombre", array()), "html", null, true);
            echo "<br>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Frontend:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  48 => 13,  44 => 12,  41 => 11,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:list.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/list.html.twig");
    }
}
