<?php

/* :Frontend:verOferta.html.twig */
class __TwigTemplate_439780b0919aec8485643b7a0913c190ee5286a1a0206f4be318d1be2e65af0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:verOferta.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:verOferta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:verOferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " FP Emplea ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<main id=\"offer-public\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"public-wrapper\">
                <h2 class=\"text-center\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "title", array()), "html", null, true);
        echo "
                </h2>
            </div>
            <h3 class=\"text-center t-gris\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "inscribed", array()), "html", null, true);
        echo " personas ya se han inscrito a esta oferta
            </h3>
            <hr>
        </div>
    </div>
    <div class=\"clearfix block-info\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <p> 
                Empresa: <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "idempresa", array()), "nombreempresa", array()), "html", null, true);
        echo "</strong>
            </p>
            <hr>
            <p>
                Tipo de contrato: <strong>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "tipo", array()), "nombre", array()), "html", null, true);
        echo "</strong>
            </p>
            <hr>
            <p>
                Sector profesional: <strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "categoria", array()), "html", null, true);
        echo "</strong>
            </p>
            <hr>
            <p>
                Plazas disponibles: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "vacancies", array()), "html", null, true);
        echo "
            </p>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <p>
                Descripción de la oferta: <strong>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "descripcion", array()), "html", null, true);
        echo "</strong>
            </p>
        </div>
    </div>
    <hr>
    <div class=\"clearfix control-area block-info\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h3>
                Acciones
            </h3>   
            <hr>
            <p>
                ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 51
            echo "                    ";
            if (($context["relacionOE"] ?? $this->getContext($context, "relacionOE"))) {
                // line 52
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relacionOE"] ?? $this->getContext($context, "relacionOE")));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 53
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "perfilestudianteid", array()), "idusuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 54
$context["r"], "perfilestudianteid", array()), "idusuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "idusuario", array()), "id", array())))) {
                        // line 55
                        echo "                                Estás inscrito a esta oferta
                                <a class=\"button cta-1\" href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                    ";
                        // line 58
                        echo "                                        Ver empresa
                                    ";
                        // line 60
                        echo "                                </a>
                            ";
                    }
                    // line 62
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postular_oferta", array("id" => $this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                          ";
                // line 65
                echo "                            Postular
                          ";
                // line 67
                echo "                        </a>
                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-1\">
                          ";
                // line 70
                echo "                            Ver empresa
                          ";
                // line 72
                echo "                        </a>
                        
                    ";
            }
            // line 75
            echo "                        
                ";
            // line 77
            echo "                ";
            // line 83
            echo "                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) {
            // line 84
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? $this->getContext($context, "oferta")), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"button cta-1\">
                       ";
            // line 86
            echo "                        Ver empresa
                      ";
            // line 88
            echo "                    </a>
                ";
        }
        // line 90
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "#offers\" class=\"button cta-1\">
                    ";
        // line 92
        echo "                        Ir a mi perfil
                    ";
        // line 94
        echo "                </a>
                <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas");
        echo "\" class=\"button cta-1\">
                    Listado de ofertas
                </a>
            </p>
        </div>
    </div>
    <hr>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:verOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 95,  222 => 94,  219 => 92,  214 => 90,  210 => 88,  207 => 86,  202 => 84,  199 => 83,  197 => 77,  194 => 75,  189 => 72,  186 => 70,  182 => 68,  179 => 67,  176 => 65,  171 => 63,  165 => 62,  161 => 60,  158 => 58,  154 => 56,  151 => 55,  149 => 54,  147 => 53,  142 => 52,  139 => 51,  137 => 50,  122 => 38,  114 => 33,  107 => 29,  100 => 25,  93 => 21,  82 => 13,  75 => 9,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %} FP Emplea {% endblock %}
{% block body %}
<main id=\"offer-public\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"public-wrapper\">
                <h2 class=\"text-center\">
                    {{ oferta.title }}
                </h2>
            </div>
            <h3 class=\"text-center t-gris\">
                {{ oferta.inscribed }} personas ya se han inscrito a esta oferta
            </h3>
            <hr>
        </div>
    </div>
    <div class=\"clearfix block-info\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <p> 
                Empresa: <strong>{{ oferta.idempresa.nombreempresa }}</strong>
            </p>
            <hr>
            <p>
                Tipo de contrato: <strong>{{oferta.tipo.nombre}}</strong>
            </p>
            <hr>
            <p>
                Sector profesional: <strong>{{ oferta.categoria}}</strong>
            </p>
            <hr>
            <p>
                Plazas disponibles: {{ oferta.vacancies }}
            </p>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <p>
                Descripción de la oferta: <strong>{{ oferta.descripcion }}</strong>
            </p>
        </div>
    </div>
    <hr>
    <div class=\"clearfix control-area block-info\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h3>
                Acciones
            </h3>   
            <hr>
            <p>
                {% if is_granted('ROLE_STUDENT') %}
                    {% if relacionOE %}
                        {% for r in relacionOE%}
                            {% if r.perfilestudianteid.idusuario.id == app.user.id 
                                and r.perfilestudianteid.idusuario.id == estudiante.idusuario.id %}
                                Estás inscrito a esta oferta
                                <a class=\"button cta-1\" href=\"{{ path('publicProfile', {'idUser':oferta.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
                                    {# <button class=\"button cta-1\"> #}
                                        Ver empresa
                                    {# </button> #}
                                </a>
                            {% endif %}
                        {% endfor %}
                        <a href=\"{{ path('postular_oferta', {'id':oferta.id, 'idUser':app.user.id} ) }}\" class=\"button cta-2\">
                          {# <button class=\"button cta-2\"> #}
                            Postular
                          {# </button> #}
                        </a>
                        <a href=\"{{ path('publicProfile', {'idUser':oferta.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\" class=\"button cta-1\">
                          {# <button class=\"btn btn-primary button cta-1\"> #}
                            Ver empresa
                          {# </button> #}
                        </a>
                        
                    {% endif %}
                        
                {# FIXME: Solve offer management controls problems inside offer view #}
                {#}  
                {% elseif is_granted('ROLE_COMPANY') %}
                    <td>
                        <a href=\"{{ path('modificar_oferta', {'id':oferta.id} ) }}\">Gestionar</a>
                    </td>
                {#}
                {% elseif is_granted('ROLE_SCHOOL') %}
                    <a href=\"{{ path('publicProfile', {'idUser':oferta.idempresa.idusuario.id, 'idVisitor':app.user.id}) }}\" class=\"button cta-1\">
                       {# <button> #}
                        Ver empresa
                      {# </button> #}
                    </a>
                {% endif %}
                <a href=\"{{ path('profile', {'idUser':app.user.id}) }}#offers\" class=\"button cta-1\">
                    {# <button type=\"button\" class=\"button cta-1\">  #}
                        Ir a mi perfil
                    {# </button> #}
                </a>
                <a href=\"{{ path('listado_ofertas') }}\" class=\"button cta-1\">
                    Listado de ofertas
                </a>
            </p>
        </div>
    </div>
    <hr>
</main>
{% endblock %}", ":Frontend:verOferta.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/verOferta.html.twig");
    }
}
