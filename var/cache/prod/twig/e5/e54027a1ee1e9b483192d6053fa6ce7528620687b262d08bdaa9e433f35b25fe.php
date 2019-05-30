<?php

/* :Frontend/profile:schoolOfferList.html.twig */
class __TwigTemplate_20abe2c75bf5a6739becc911e32e87a686909f94f28824ef34d800a9c7f22a77 extends Twig_Template
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
        if ((($context["offers"] ?? null) != null)) {
            // line 2
            echo "\t<h2> Ofertas asignadas</h2>
\t<hr>
\t";
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
                if ((($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "active", array()) == true) && ($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "validated", array()) == false))) {
                    // line 6
                    echo "\t<div class=\"items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix\">
\t\t<div class=\"info-block block-info ";
                    // line 7
                    if (($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "finished", array()) == 1)) {
                        echo " border-green disabled";
                    }
                    if (($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "active", array()) == false)) {
                        echo "background-red";
                    }
                    echo "\">
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<h3>
\t\t\t\t\t";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "title", array()), "html", null, true);
                    echo "
\t\t\t\t</h3>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<p> Tipo de oferta:
\t\t\t\t\t\t";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "tipo", array()), "nombre", array()), "html", null, true);
                    echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tSector: <span>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "categoria", array()), "html", null, true);
                    echo "</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<p>
\t\t\t\t\tDescripción:<span>";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "descripcion", array()), "html", null, true);
                    echo "</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t";
                    // line 28
                    if ((($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "validated", array()) == false) && ($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "active", array()) == false))) {
                        // line 29
                        echo "\t\t\t\t<p class=\"color-red\">
\t\t\t\t\t<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
\t\t\t\t\tLa oferta ha sido rechazada y ha sido retirada
\t\t\t\t</p>
\t\t\t\t<a href=\"";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\tVer oferta
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t<a href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\tVer empresa
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 43
$context["offer"], "offer", array()), "validated", array()) == false) && ($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "active", array()) == true))) {
                        // line 44
                        echo "\t\t\t\t\t<p class=\"color-yellow\">
\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\tPendiente de validación.
\t\t\t\t\t</p>
\t\t\t\t\t";
                        // line 49
                        echo "\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_offer", array("id" => $this->getAttribute($context["offer"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "#offers\">
\t\t\t\t\t\t<button class=\"button cta-2\">
\t\t\t\t\t\tValidar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discard_offer", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "#offers\">
\t\t\t\t\t\t<button class=\"button cta-3\">
\t\t\t\t\t\tRechazar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer oferta
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer empresa
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
                    } elseif (((($this->getAttribute($this->getAttribute(                    // line 69
$context["offer"], "offer", array()), "validated", array()) == true) && ($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "active", array()) == true)) && ($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "finished", array()) == 0))) {
                        // line 70
                        echo "\t\t\t\t\t<p class=\"color-green\">
\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tLa oferta es válida
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discard_offer", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "#offers\">
\t\t\t\t\t\t<button class=\"button cta-3\">
\t\t\t\t\t\tRechazar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 79
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer oferta
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 84
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer empresa
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 89
$context["offer"], "offer", array()), "finished", array()) == 1) && ($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "active", array()) == 1))) {
                        // line 90
                        echo "\t\t\t\t\t\t<p class=\"color-green disabled\">
\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tLa oferta es válida
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"color-green\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar-times-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tLa oferta ha finalizado
\t\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer oferta
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 103
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer empresa
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t 
\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t</div>
\t\t</div>
\t</div>
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 115
            echo "\t<h2> Ofertas asignadas</h2>
\t<hr>
\t<div class=\"alert alert-info\">
\t\t<div class=\"container-fluid\">
\t\t\t<span class=\"alert-icon\">
\t\t\t\t<i class=\"fa fa-info\"></i>
\t\t\t</span>
\t\t\t\t ";
            // line 127
            echo "\t\t\t<b>Info:</b> No tienes ninguna oferta asignada
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:schoolOfferList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 127,  213 => 115,  202 => 110,  192 => 103,  184 => 98,  174 => 90,  172 => 89,  164 => 84,  156 => 79,  148 => 74,  142 => 70,  140 => 69,  132 => 64,  124 => 59,  116 => 54,  107 => 49,  101 => 44,  99 => 43,  91 => 38,  83 => 33,  77 => 29,  75 => 28,  68 => 24,  60 => 19,  54 => 16,  45 => 10,  34 => 7,  31 => 6,  25 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:schoolOfferList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/schoolOfferList.html.twig");
    }
}
