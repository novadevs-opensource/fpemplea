<?php

/* :Frontend:applicantOffers.html.twig */
class __TwigTemplate_077249b3caf52051a90c7b7d3ec498470870a9d71acbb0233aa75341d5b3999e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:applicantOffers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:applicantOffers.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">
        <button type=\"button\" class=\"button cta-1\">Ver detalles Oferta</button>
      </a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relacionOE'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  90 => 29,  85 => 27,  79 => 24,  73 => 21,  67 => 18,  64 => 17,  58 => 14,  55 => 13,  49 => 10,  46 => 9,  44 => 8,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for relacionOE in relacionOE %}
  {#{ dump(loop.index) }#}
  <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
    {% if relacionOE.ofertasid.tipo.id == 1 %}
      <h3>
        Prácticas: <strong>{{ relacionOE.ofertasid.title }}</strong>
      </h3>
    {% elseif relacionOE.ofertasid.tipo.id == 0 %}
      <h3>
        Empleo: <strong>{{ relacionOE.ofertasid.title }}</strong>
      </h3>
    {% else %}
      <h3>
        Oferta: <strong>{{ relacionOE.ofertasid.title }}</strong>
      </h3>
    {% endif %}
      <p>
        {{ relacionOE.ofertasid.idempresa.nombreempresa }} 
      </p>
      <p>
        Inscritos: {{ relacionOE.ofertasid.inscribed }}
      </p>
      <p>
        {{ relacionOE.ofertasid.categoria}}
      </p>
      <p>
        {{ relacionOE.ofertasid.descripcion }}
      </p>
      <a href=\"{{ path('ver_mi_oferta', {'id':relacionOE.ofertasid.id, 'idUser':app.user.id}) }}\">
        <button type=\"button\" class=\"button cta-1\">Ver detalles Oferta</button>
      </a>
</div>
{% endfor %}", ":Frontend:applicantOffers.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/applicantOffers.html.twig");
    }
}
