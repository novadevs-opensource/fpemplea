<?php

/* :Frontend:applicantOffers.html.twig */
class __TwigTemplate_de76627613d47543e408816825faa28865ffc4287387ae24c57be0368f3f9092 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($context["relacionOE"]);
        foreach ($context['_seq'] as $context["_key"] => $context["relacionOE"]) {
            // line 2
            echo "  ";
            // line 3
            echo "  <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    ";
            // line 4
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "tipo", array()), "id", array()) == 1)) {
                // line 5
                echo "      <h3>
        Prácticas: <strong>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "title", array()), "html", null, true);
                echo "</strong>
      </h3>
    ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 8
$context["relacionOE"], "ofertasid", array()), "tipo", array()), "id", array()) == 0)) {
                // line 9
                echo "      <h3>
        Empleo: <strong>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "title", array()), "html", null, true);
                echo "</strong>
      </h3>
    ";
            } else {
                // line 13
                echo "      <h3>
        Oferta: <strong>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "title", array()), "html", null, true);
                echo "</strong>
      </h3>
    ";
            }
            // line 17
            echo "      <p>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "idempresa", array()), "nombreempresa", array()), "html", null, true);
            echo " 
      </p>
      <p>
        Inscritos: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "inscribed", array()), "html", null, true);
            echo "
      </p>
      <p>
        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "categoria", array()), "html", null, true);
            echo "
      </p>
      <p>
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "descripcion", array()), "html", null, true);
            echo "
      </p>
      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\">
        <button type=\"button\" class=\"button cta-1\">Ver detalles Oferta</button>
      </a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relacionOE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return ":Frontend:applicantOffers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  79 => 27,  73 => 24,  67 => 21,  61 => 18,  58 => 17,  52 => 14,  49 => 13,  43 => 10,  40 => 9,  38 => 8,  33 => 6,  30 => 5,  28 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:applicantOffers.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/applicantOffers.html.twig");
    }
}
