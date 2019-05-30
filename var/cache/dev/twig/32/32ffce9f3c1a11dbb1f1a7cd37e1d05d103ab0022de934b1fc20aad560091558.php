<?php

/* :Frontend:indexPublicProfile.html.twig */
class __TwigTemplate_9dba1d1c3527390f7174ce3a9d30c4ce68548cfdc5bb626980080ae8df701d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:indexPublicProfile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:indexPublicProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:indexPublicProfile.html.twig"));

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

        echo " FP Emplea - Perfil público de applicant.nombre ";
        
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
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "publicProfile")) {
            // line 5
            echo "    ";
            if ((($context["applicant"] ?? $this->getContext($context, "applicant")) != null)) {
                // line 6
                echo "    <main id=\"public-applicant\" class=\"row\">
      <div class=\"public-wrapper clearfix\">
        <!--                OK-->
        <h2>Perfil público de ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "nombre", array()), "html", null, true);
                echo "</h2>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center\">
            ";
                // line 12
                if ( !(null === $this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "imagen", array()))) {
                    // line 13
                    echo "                <img class=\"img-circle\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                } else {
                    // line 15
                    echo "                ";
                    // line 16
                    echo "                <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                }
                // line 18
                echo "          </div>
          <h3>Datos personales:</h3>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
            <p>
              Nombre completo:
              <span>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "nombre", array()), "html", null, true);
                echo "</span>
              <span>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "apellidos", array()), "html", null, true);
                echo "</span>
            </p>
       ";
                // line 34
                echo "          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
         ";
                // line 48
                echo "          </div>
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Formación:</h4>
          ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["applicantEdu"] ?? $this->getContext($context, "applicantEdu")));
                foreach ($context['_seq'] as $context["_key"] => $context["ae"]) {
                    // line 54
                    echo "            <div class=\" col-xs-12 col-sm-12 col-md-6 col-lg-6\">
              <p>
                <span>
                  ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ae"], "school", array()), "html", null, true);
                    echo "
                </span>
                --
                <span>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ae"], "formacion", array()), "titulo", array()), "html", null, true);
                    echo "</span>
                <br>
                <span>Duración: </span>
                <span>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ae"], "start", array()), "m-d-Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ae"], "end", array()), "m-d-Y"), "html", null, true);
                    echo " </span>
                <br>
                Finalizado:
                ";
                    // line 66
                    if (($this->getAttribute($context["ae"], "finished", array()) == true)) {
                        // line 67
                        echo "                  Si
                ";
                    } else {
                        // line 69
                        echo "                  No
                ";
                    }
                    // line 71
                    echo "                <br>
              </p>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ae'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Experiencia laboral:</h4>
          ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["applicantWork"] ?? $this->getContext($context, "applicantWork")));
                foreach ($context['_seq'] as $context["_key"] => $context["aw"]) {
                    // line 80
                    echo "            <div class=\" col-xs-12 col-sm-12 col-md-6 col-lg-6\">
              <p>
                <span>Empresas</span> -
                <span> ";
                    // line 83
                    if (($this->getAttribute($context["aw"], "company", array()) != null)) {
                        echo " 
                                                        ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "company", array()), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 86
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "othercompany", array()), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 87
                    echo " </span>
                <br>Puesto:
                <span> ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "position", array()), "html", null, true);
                    echo " </span>
                <br>Duración:
                <span> ";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "workexp", array()), "html", null, true);
                    echo " </span>
                <br>
                <span>Fechas:</span>
                <span>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aw"], "start", array()), "m-d-Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aw"], "end", array()), "m-d-Y"), "html", null, true);
                    echo "</span>
                <br>
              </p>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Aptitudes </h4>
          ";
                // line 103
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantSkillList", array("idApplicant" => $this->getAttribute(                // line 104
($context["applicant"] ?? $this->getContext($context, "applicant")), "id", array()))));
                // line 106
                echo "
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Otros datos de interés </h4>
            ";
                // line 111
                if (($this->getAttribute(($context["applicant"] ?? $this->getContext($context, "applicant")), "fexibilidadgeografica", array()) == 1)) {
                    // line 112
                    echo "                <p class=\"common-skills\">
                    <span>
                        <i class=\"fa fa-plane i-col\" aria-hidden=\"true\"> </i>
                        Disponibilidad para viajar
                    </span>
                </p>
            ";
                }
                // line 119
                echo "          </span>
        </div>
      </div>
    </main>
    ";
            }
            // line 124
            echo "    <!--OK EMPRESAS-->
    ";
            // line 125
            if ((($context["empresa"] ?? $this->getContext($context, "empresa")) != null)) {
                // line 126
                echo "    <main id=\"public-company\" class=\"row\">
      <div class=\"public-wrapper clearfix\">
        <h2>Perfil público de ";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "nombreempresa", array()), "html", null, true);
                echo "</h2>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center\">
            ";
                // line 131
                if ( !(null === $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "imagen", array()))) {
                    // line 132
                    echo "                <img class=\"img-circle\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                } else {
                    // line 134
                    echo "                ";
                    // line 135
                    echo "                <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                }
                // line 137
                echo "          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
            <h4>Datos de la empresa:</h4>
            <p>
              Nombre empresa: <span>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "nombreempresa", array()), "html", null, true);
                echo "</span>
            </p>
            <p>
              Trabajadores: ";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "trabajadores", array()), "html", null, true);
                echo "
            </p>
            <p>
              Sector de la empresa: <span> ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "sector", array()), "html", null, true);
                echo " </span>
            </p>
            <p>
              CIF/NIF: <span> ";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "cif", array()), "html", null, true);
                echo " </span>
            </p>
            <p>
              Dirección: <span> ";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "direccion", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "cp", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "localidad", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "pais", array()), "html", null, true);
                echo " </span>
            </p>
            <p>
              Correo electrónico: <span>  ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "emailcontacto", array()), "html", null, true);
                echo "</span>
            </p>
            <p>
              Teléfono: <span>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "telefono", array()), "html", null, true);
                echo "</span>
            </p>
          </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 wrap\">
            <h4>Descripción de la actividad empresarial</h4>
            <p>
              ";
                // line 166
                echo $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "description", array());
                echo "
            </p>
          </div>
      </div>
    </main>
  ";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:indexPublicProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 166,  351 => 159,  345 => 156,  333 => 153,  327 => 150,  321 => 147,  315 => 144,  309 => 141,  303 => 137,  297 => 135,  295 => 134,  287 => 132,  285 => 131,  279 => 128,  275 => 126,  273 => 125,  270 => 124,  263 => 119,  254 => 112,  252 => 111,  245 => 106,  243 => 104,  242 => 103,  236 => 99,  223 => 94,  217 => 91,  212 => 89,  208 => 87,  202 => 86,  197 => 84,  193 => 83,  188 => 80,  184 => 79,  178 => 75,  169 => 71,  165 => 69,  161 => 67,  159 => 66,  151 => 63,  145 => 60,  139 => 57,  134 => 54,  130 => 53,  123 => 48,  119 => 34,  114 => 24,  110 => 23,  103 => 18,  97 => 16,  95 => 15,  87 => 13,  85 => 12,  79 => 9,  74 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %} FP Emplea - Perfil público de applicant.nombre {% endblock %}
{% block body %}
  {% if app.request.get('_route') == 'publicProfile'%}
    {% if applicant != null %}
    <main id=\"public-applicant\" class=\"row\">
      <div class=\"public-wrapper clearfix\">
        <!--                OK-->
        <h2>Perfil público de {{ applicant.nombre }}</h2>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center\">
            {% if applicant.imagen is not null %}
                <img class=\"img-circle\" src=\"{{ url('homepage') }}../uploads/profileavatar/{{ applicant.imagen }}\" alt=\"Avatar perfil candidato\">
            {% else %}
                {# <img class=\"img-circle\" src=\"../../../src/AppBundle/Resources/public/img/default-user.png')) }}\" alt=\"Avatar perfil candidato\"> #}
                <img class=\"img-circle\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Avatar perfil candidato\">
            {% endif %}
          </div>
          <h3>Datos personales:</h3>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
            <p>
              Nombre completo:
              <span>{{ applicant.nombre }}</span>
              <span>{{ applicant.apellidos }}</span>
            </p>
       {#      <p>
              DNI/NIE:
              <span>{{ applicant.dni }}</span>
            </p>
            <p>
              Dirección:
              <span>{{ applicant.direccion }}, {{ applicant.localidad }}</span>
            </p> #}
          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
         {#    <p>
              Correo electrónico:
              <span> {{applicant.email}} </span>
            </p>
            <p>
              Teléfono:
              <span>{{applicant.telefonouno}}</span>
            </p>
            <p>
              Teléfono fijo:
              <span>{{applicant.telefonodos}}</span>
            </p> #}
          </div>
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Formación:</h4>
          {% for ae in applicantEdu %}
            <div class=\" col-xs-12 col-sm-12 col-md-6 col-lg-6\">
              <p>
                <span>
                  {{ ae.school}}
                </span>
                --
                <span>{{ ae.formacion.titulo }}</span>
                <br>
                <span>Duración: </span>
                <span>{{ ae.start|date('m-d-Y') }} - {{ ae.end|date('m-d-Y') }} </span>
                <br>
                Finalizado:
                {% if ae.finished == true %}
                  Si
                {% else %}
                  No
                {% endif %}
                <br>
              </p>
            </div>
          {% endfor %}
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Experiencia laboral:</h4>
          {% for aw in applicantWork %}
            <div class=\" col-xs-12 col-sm-12 col-md-6 col-lg-6\">
              <p>
                <span>Empresas</span> -
                <span> {% if aw.company != null %} 
                                                        {{aw.company}}
                                                    {% else %}
                                                        {{aw.othercompany}}
                                                    {% endif %} </span>
                <br>Puesto:
                <span> {{aw.position}} </span>
                <br>Duración:
                <span> {{aw.workexp}} </span>
                <br>
                <span>Fechas:</span>
                <span>{{aw.start|date('m-d-Y')}} - {{aw.end|date('m-d-Y')}}</span>
                <br>
              </p>
            </div>
          {% endfor %}
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Aptitudes </h4>
          {{ render(controller('AppBundle:Skill:applicantSkillList',
          { 'idApplicant': applicant.id }
          ))
          }}
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Otros datos de interés </h4>
            {% if applicant.fexibilidadgeografica == 1 %}
                <p class=\"common-skills\">
                    <span>
                        <i class=\"fa fa-plane i-col\" aria-hidden=\"true\"> </i>
                        Disponibilidad para viajar
                    </span>
                </p>
            {% endif %}
          </span>
        </div>
      </div>
    </main>
    {% endif %}
    <!--OK EMPRESAS-->
    {% if empresa != null %}
    <main id=\"public-company\" class=\"row\">
      <div class=\"public-wrapper clearfix\">
        <h2>Perfil público de {{ empresa.nombreempresa }}</h2>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center\">
            {% if empresa.imagen is not null %}
                <img class=\"img-circle\" src=\"{{ url('homepage') }}../uploads/profileavatar/{{ empresa.imagen }}\" alt=\"Avatar perfil candidato\">
            {% else %}
                {# <img class=\"img-circle\" src=\"../../../src/AppBundle/Resources/public/img/default-user.png')) }}\" alt=\"Avatar perfil candidato\"> #}
                <img class=\"img-circle\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Avatar perfil candidato\">
            {% endif %}
          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
            <h4>Datos de la empresa:</h4>
            <p>
              Nombre empresa: <span>{{ empresa.nombreempresa }}</span>
            </p>
            <p>
              Trabajadores: {{ empresa.trabajadores }}
            </p>
            <p>
              Sector de la empresa: <span> {{ empresa.sector }} </span>
            </p>
            <p>
              CIF/NIF: <span> {{empresa.cif}} </span>
            </p>
            <p>
              Dirección: <span> {{ empresa.direccion }}, {{ empresa.cp }}, {{ empresa.localidad }}, {{ empresa.pais }} </span>
            </p>
            <p>
              Correo electrónico: <span>  {{ empresa.emailcontacto }}</span>
            </p>
            <p>
              Teléfono: <span>{{ empresa.telefono }}</span>
            </p>
          </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 wrap\">
            <h4>Descripción de la actividad empresarial</h4>
            <p>
              {{empresa.description|raw}}
            </p>
          </div>
      </div>
    </main>
  {% endif %}
{% endif %}
{% endblock %}", ":Frontend:indexPublicProfile.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/indexPublicProfile.html.twig");
    }
}
