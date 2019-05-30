<?php

/* :Frontend:schoolEducationList.html.twig */
class __TwigTemplate_04d4ca25770aa78067d8fb11afcf2cacc8ba9badaf7466516ee3f5af6a5ef4bb extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["education"] ?? null)) == 0)) {
            // line 2
            echo "<li class=\"formationlist empty\">
    <p class=\"empty-message\">
        <i class=\"disabled\">No has añadido nungún curso todavía</i>
    </p>  
</li>  
";
        } else {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["education"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 9
                echo "    <li class=\"formation-list clearfix\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                echo "\">
        <span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "formacion", array()), "titulo", array()), "html", null, true);
                echo "</span>
        <span>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "formacion", array()), "familiaprof", array()), "html", null, true);
                echo "</span>
        <button class=\"nobutton\" onclick=\"schoolEducationDelete(";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_delete_education", array("id" => $this->getAttribute($context["e"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "')\">
            <i class=\"fa fa-close\"></i>
        </button>
     ";
                // line 18
                echo "    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Frontend:schoolEducationList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  58 => 18,  48 => 12,  44 => 11,  40 => 10,  34 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:schoolEducationList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/schoolEducationList.html.twig");
    }
}
