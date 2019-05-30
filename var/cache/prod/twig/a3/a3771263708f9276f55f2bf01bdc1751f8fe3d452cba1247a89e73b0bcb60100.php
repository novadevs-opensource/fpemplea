<?php

/* :Frontend:misOfertasEmpresa.html.twig */
class __TwigTemplate_52498d8e93ba67a96c06eb091609f3f3a0918d70291731006570b08be8e3f6b5 extends Twig_Template
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
        if ((($context["ofertas"] ?? null) != null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ofertas"] ?? null));
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
        return array (  160 => 83,  147 => 76,  145 => 74,  144 => 73,  128 => 61,  125 => 59,  122 => 58,  114 => 53,  107 => 50,  101 => 43,  90 => 35,  84 => 32,  78 => 28,  75 => 27,  69 => 23,  67 => 22,  61 => 19,  55 => 16,  49 => 12,  47 => 11,  41 => 8,  35 => 5,  27 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:misOfertasEmpresa.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/misOfertasEmpresa.html.twig");
    }
}
