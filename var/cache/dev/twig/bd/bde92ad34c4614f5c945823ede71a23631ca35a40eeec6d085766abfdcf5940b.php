<?php

/* :Frontend:misOfertasEmpresa.html.twig */
class __TwigTemplate_fa14aff9ee94a5fba34ed981b05fb73b0869b0c1a654a08a662e053498c773b7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:misOfertasEmpresa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:misOfertasEmpresa.html.twig"));

        // line 1
        if ((($context["ofertas"] ?? $this->getContext($context, "ofertas")) != null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ofertas"] ?? $this->getContext($context, "ofertas")));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                if (($this->getAttribute($context["oferta"], "finished", array()) != 1)) {
                    // line 3
                    echo "    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 offer ";
                    if ((($this->getAttribute($context["oferta"], "finished", array()) == 1) || ($this->getAttribute($context["oferta"], "active", array()) == 0))) {
                        echo "disabled";
                    }
                    echo "\">      
        <p>
          ";
                    // line 5
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "title", array()), "html", null, true);
                    echo "
        </p>
        <p>
         Inscritos: ";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "inscribed", array()), "html", null, true);
                    echo "
        </p>

      ";
                    // line 11
                    if (($this->getAttribute($context["oferta"], "active", array()) == false)) {
                        // line 12
                        echo "        <p class=\"color-red\">
          <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
          Tu oferta ha sido rechazada y ha sido retirada
        </p>
        <a class=\"button cta-1\" href=\"";
                        // line 16
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                        echo "\">
            Modificar
        </a>
        <a class=\"button cta-1\" href=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_admin", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                        echo "\">
            Gestionar
        </a>
      ";
                    } elseif (($this->getAttribute(                    // line 22
$context["oferta"], "finished", array()) == 1)) {
                        // line 23
                        echo "        <p class=\"color-green\">
            <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> Has cerrado tu oferta
        </p>
      ";
                    } else {
                        // line 27
                        echo "        ";
                        if (($this->getAttribute($context["oferta"], "validated", array()) == false)) {
                            // line 28
                            echo "        <p class=\"color-yellow\">
            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Pendiente de validación.
        </p>
        <div>
            <a class=\"button cta-1\" href=\"";
                            // line 32
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_admin", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                            echo "\">
                Gestionar
            </a>
            <a class=\"button cta-1\" href=\"";
                            // line 35
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                            echo "\">
                Modificar
            </a>
        </div>
        <p class=\"disabled\">
            <em><i class=\"fa fa-info\"></i> Recuerda que debes asignar tus ofertas a un centro o varios para que sean verificadas</em>
        </p>
        ";
                        } else {
                            // line 43
                            echo "        <p class=\"color-green\">
            <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Tu oferta está publicada
        </p>
        <div>
            ";
                            // line 50
                            echo "            <a class=\"button cta-1\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offer_admin", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                            echo "\">
                Gestionar
            </a>
            <button type=\"button\" class=\"button cta-3\" data-toggle=\"modal\" data-target=\"#closeOfferModal";
                            // line 53
                            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "id", array()), "html", null, true);
                            echo "\">
                Cerrar
            </button>
        </div>
        ";
                        }
                        // line 58
                        echo "      ";
                    }
                    // line 59
                    echo "    </div>
    ";
                    // line 61
                    echo "    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"closeOfferModal";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "id", array()), "html", null, true);
                    echo "\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3 class=\"modal-title\">
                        Cerrar oferta
                    </h3>
                </div>
                <div class=\"modal-body\">
                    ";
                    // line 73
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Offer:closeOffer", array("id" => $this->getAttribute(                    // line 74
$context["oferta"], "id", array()))));
                    // line 76
                    echo "
                </div>
            </div>
        </div>
    </div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 83
            echo "<p class=\"empty-offers\">
  Aún no has creado ninguna oferta.
</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:misOfertasEmpresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 83,  153 => 76,  151 => 74,  150 => 73,  134 => 61,  131 => 59,  128 => 58,  120 => 53,  113 => 50,  107 => 43,  96 => 35,  90 => 32,  84 => 28,  81 => 27,  75 => 23,  73 => 22,  67 => 19,  61 => 16,  55 => 12,  53 => 11,  47 => 8,  41 => 5,  33 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if ofertas != null %}
    {% for oferta in ofertas if oferta.finished != 1 %}
    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 offer {% if oferta.finished == 1 or oferta.active == 0 %}disabled{% endif %}\">      
        <p>
          {{ oferta.title}}
        </p>
        <p>
         Inscritos: {{ oferta.inscribed }}
        </p>

      {% if oferta.active == false %}
        <p class=\"color-red\">
          <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
          Tu oferta ha sido rechazada y ha sido retirada
        </p>
        <a class=\"button cta-1\" href=\"{{ path('modificar_oferta', {'id':oferta.id}) }}\">
            Modificar
        </a>
        <a class=\"button cta-1\" href=\"{{ path('offer_admin', {'id':oferta.id}) }}\">
            Gestionar
        </a>
      {% elseif oferta.finished == 1 %}
        <p class=\"color-green\">
            <i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> Has cerrado tu oferta
        </p>
      {% else %}
        {% if oferta.validated == false %}
        <p class=\"color-yellow\">
            <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Pendiente de validación.
        </p>
        <div>
            <a class=\"button cta-1\" href=\"{{ path('offer_admin', {'id':oferta.id}) }}\">
                Gestionar
            </a>
            <a class=\"button cta-1\" href=\"{{ path('modificar_oferta', {'id':oferta.id}) }}\">
                Modificar
            </a>
        </div>
        <p class=\"disabled\">
            <em><i class=\"fa fa-info\"></i> Recuerda que debes asignar tus ofertas a un centro o varios para que sean verificadas</em>
        </p>
        {% else %}
        <p class=\"color-green\">
            <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Tu oferta está publicada
        </p>
        <div>
            {# <a class=\"button cta-1\" href=\"{{ path('modificar_oferta', {'id':oferta.id}) }}\">
                Modificar
            </a> #}
            <a class=\"button cta-1\" href=\"{{ path('offer_admin', {'id':oferta.id}) }}\">
                Gestionar
            </a>
            <button type=\"button\" class=\"button cta-3\" data-toggle=\"modal\" data-target=\"#closeOfferModal{{oferta.id}}\">
                Cerrar
            </button>
        </div>
        {% endif %}
      {% endif %}
    </div>
    {# CLOSE OFFER MODAL #}
    <div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"closeOfferModal{{oferta.id}}\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3 class=\"modal-title\">
                        Cerrar oferta
                    </h3>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('AppBundle:Offer:closeOffer',
                    { 'id': oferta.id }
                    ))
                    }}
                </div>
            </div>
        </div>
    </div>
{% endfor %}
{% else %}
<p class=\"empty-offers\">
  Aún no has creado ninguna oferta.
</p>
{% endif %}", ":Frontend:misOfertasEmpresa.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/misOfertasEmpresa.html.twig");
    }
}
