<?php

/* :Emails:offerClosure.html.twig */
class __TwigTemplate_b49e645ec4cde7d0f495e1cbf4a80c0f2f6f860f250f6382b940ac2fc7f1831e extends Twig_Template
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
        echo "<h3>
\tHola ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? null), "nombre", array()), "html", null, true);
        echo ",
</h3>
<p>
\tLa empresa <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute(($context["company"] ?? null), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["school"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "nombreempresa", array()), "html", null, true);
        echo "</a> ha cerrado su oferta <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute(($context["offer"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
        echo "</a> el día ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "fechaborrado", array()), "Y-m-d"), "html", null, true);
        echo " ";
        if (($this->getAttribute(($context["offer"] ?? null), "engagement", array()) == true)) {
            echo " con contratación ";
        } else {
            echo " sin contratación ";
        }
        // line 7
        echo "<p>
<p>
\t<ul>
\t\t<li>
\t\t\tMotivo: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "closurereason", array()), "html", null, true);
        echo "
\t\t</li>
\t\t<li>
\t\t\tComentario: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "closureexplanation", array()), "html", null, true);
        echo "\t\t\t
\t\t</li>
\t</ul>
</p>
\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["school"] ?? null), "idusuario", array()), "id", array()))), "html", null, true);
        echo "\">
\t\tVolver a FP Emplea
\t</a>
<p>
";
    }

    public function getTemplateName()
    {
        return ":Emails:offerClosure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  56 => 14,  50 => 11,  44 => 7,  28 => 6,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Emails:offerClosure.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Emails/offerClosure.html.twig");
    }
}
