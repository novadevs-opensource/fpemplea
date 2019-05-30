<?php

/* :Frontend/profile:schoolOfferList.html.twig */
class __TwigTemplate_1c2c88c0d97237122952eea096b1fc7f5142eb5087799206a141960be9d7e8f4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:schoolOfferList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:schoolOfferList.html.twig"));

        // line 1
        if ((($context["offers"] ?? $this->getContext($context, "offers")) != null)) {
            // line 2
            echo "\t<h2> Ofertas asignadas</h2>
\t<hr>
\t";
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? $this->getContext($context, "offers")));
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_offer", array("id" => $this->getAttribute($context["offer"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                        echo "#offers\">
\t\t\t\t\t\t<button class=\"button cta-2\">
\t\t\t\t\t\tValidar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discard_offer", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("discard_offer", array("id" => $this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["offer"], "offer", array()), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  228 => 127,  219 => 115,  208 => 110,  198 => 103,  190 => 98,  180 => 90,  178 => 89,  170 => 84,  162 => 79,  154 => 74,  148 => 70,  146 => 69,  138 => 64,  130 => 59,  122 => 54,  113 => 49,  107 => 44,  105 => 43,  97 => 38,  89 => 33,  83 => 29,  81 => 28,  74 => 24,  66 => 19,  60 => 16,  51 => 10,  40 => 7,  37 => 6,  31 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if offers != null %}
\t<h2> Ofertas asignadas</h2>
\t<hr>
\t{# FIX LAST OFFER CHECK #}
\t{% for offer in offers if offer.offer.active == true and offer.offer.validated == false %}
\t<div class=\"items col-xs-12 col-sm-12 col-md-12 col-lg-12 clearfix\">
\t\t<div class=\"info-block block-info {% if offer.offer.finished == 1 %} border-green disabled{% endif %}{% if offer.offer.active == false %}background-red{% endif %}\">
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<h3>
\t\t\t\t\t{{offer.offer.title}}
\t\t\t\t</h3>
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<p> Tipo de oferta:
\t\t\t\t\t\t{{ offer.offer.tipo.nombre }}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tSector: <span>{{ offer.offer.categoria}}</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t<p>
\t\t\t\t\tDescripción:<span>{{ offer.offer.descripcion }}</span>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t{% if (offer.offer.validated == false) and (offer.offer.active == false) %}
\t\t\t\t<p class=\"color-red\">
\t\t\t\t\t<i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
\t\t\t\t\tLa oferta ha sido rechazada y ha sido retirada
\t\t\t\t</p>
\t\t\t\t<a href=\"{{ path('ver_oferta', {'id':offer.offer.id}) }}\">
\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\tVer oferta
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t<a href=\"{{ path('publicProfile', {'idUser':offer.offer.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\tVer empresa
\t\t\t\t\t</button>
\t\t\t\t</a>
\t\t\t\t{% elseif (offer.offer.validated == false) and (offer.offer.active == true)  %}
\t\t\t\t\t<p class=\"color-yellow\">
\t\t\t\t\t\t<i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\tPendiente de validación.
\t\t\t\t\t</p>
\t\t\t\t\t{# <a href=\"{{ path('validate_offer', {'id':offer.offer.id, 'idUser':app.user.id}) }}\"> #}
\t\t\t\t\t<a href=\"{{ path('validate_offer', {'id':offer.id, 'idUser':app.user.id}) }}#offers\">
\t\t\t\t\t\t<button class=\"button cta-2\">
\t\t\t\t\t\tValidar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('discard_offer', {'id':offer.offer.id, 'idUser':app.user.id}) }}#offers\">
\t\t\t\t\t\t<button class=\"button cta-3\">
\t\t\t\t\t\tRechazar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('ver_oferta', {'id':offer.offer.id}) }}\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer oferta
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('publicProfile', {'idUser':offer.offer.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer empresa
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t{% elseif (offer.offer.validated == true) and (offer.offer.active == true) and (offer.offer.finished == 0) %}
\t\t\t\t\t<p class=\"color-green\">
\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tLa oferta es válida
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{ path('discard_offer', {'id':offer.offer.id, 'idUser':app.user.id}) }}#offers\">
\t\t\t\t\t\t<button class=\"button cta-3\">
\t\t\t\t\t\tRechazar
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('ver_oferta', {'id':offer.offer.id}) }}\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer oferta
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('publicProfile', {'idUser':offer.offer.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer empresa
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t{% elseif (offer.offer.finished == 1) and (offer.offer.active == 1) %}
\t\t\t\t\t\t<p class=\"color-green disabled\">
\t\t\t\t\t\t\t<i class=\"fa fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tLa oferta es válida
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"color-green\">
\t\t\t\t\t\t\t<i class=\"fa fa-calendar-times-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\tLa oferta ha finalizado
\t\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{ path('ver_oferta', {'id':offer.offer.id}) }}\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer oferta
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('publicProfile', {'idUser':offer.offer.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
\t\t\t\t\t\t<button class=\"button cta-1\">
\t\t\t\t\t\tVer empresa
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t 
\t\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endfor %}
{% else %}
\t<h2> Ofertas asignadas</h2>
\t<hr>
\t<div class=\"alert alert-info\">
\t\t<div class=\"container-fluid\">
\t\t\t<span class=\"alert-icon\">
\t\t\t\t<i class=\"fa fa-info\"></i>
\t\t\t</span>
\t\t\t\t {#  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t</button> #}
\t\t\t<b>Info:</b> No tienes ninguna oferta asignada
\t\t</div>
\t</div>
{% endif %}
", ":Frontend/profile:schoolOfferList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/schoolOfferList.html.twig");
    }
}
