<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_b32a4fb76a75f6d60de4da8bb54f3da7396e7bc868968657a6dc1e5b4e281f27 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? null) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_boolean.html.twig", "/Users/blorente/Sites/fpemplea/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
