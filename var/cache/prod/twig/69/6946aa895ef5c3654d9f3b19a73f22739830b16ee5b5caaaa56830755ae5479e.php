<?php

/* :Frontend:forgot.html.twig */
class __TwigTemplate_52fc1f84327d28abf715881f7cc1442480ffabb1ab78c02236701fac8f5a5e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:forgot.html.twig", 2);
        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if (((isset($context["errorPass"]) || array_key_exists("errorPass", $context)) && ($context["errorPass"] ?? null))) {
            // line 5
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 6
                echo "\t      <div class=\"alert alert-danger alert-dismissable\">
\t        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t        ";
                // line 8
                echo twig_escape_filter($this->env, ($context["errorPass"] ?? null), "html", null, true);
                echo "
\t      </div>
\t    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t    <h2 class=\"text-center\">
\t    \t<p><strong>";
            // line 12
            echo twig_escape_filter($this->env, ($context["errorPass"] ?? null), "html", null, true);
            echo "</strong>. Ponte en contacto con el administrador.</p>
\t    </h2>
\t";
        } else {
            // line 15
            echo "\t<h2 class=\"text-center\">
\t\t<p>Se ha mandado un mensaje de correo electrónico a </p>
\t\t<p><strong>";
            // line 17
            echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
            echo "</strong> con tus datos de acceso.</p>
\t</h2>
\t";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend:forgot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  61 => 15,  55 => 12,  52 => 11,  43 => 8,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:forgot.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/forgot.html.twig");
    }
}
