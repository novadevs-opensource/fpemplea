<?php

/* :Frontend:offerAdmin.html.twig */
class __TwigTemplate_0d41846fddd161f31a8827e30d1cf795be628c6ef31c206a1c3ea117c928eba7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:offerAdmin.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:offerAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:offerAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 4
            echo "\t\t<div class=\"alert alert-danger alert-dismissable\">
\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignSuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success"]) {
            // line 10
            echo "\t\t<div class=\"alert alert-success alert-dismissable\">
\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["success"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t<main class=\"offer-admin container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<h2 class=\"clearfix\">
\t\t\t\t\tGestionar oferta<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "#offers\" class=\"button cta-3 pull-right\">Volver a ofertas</a>
\t\t\t\t\t";
        // line 21
        echo "\t\t\t\t</h2>\t\t\t\t
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer\">
\t\t\t\t<div class=\"offer-info\">
\t\t\t\t\t<h3 class=\"clearfix\">
\t\t\t\t\t\tTítulo: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>
\t\t\t\t\t\tInscritos: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "inscribed", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVacantes: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "vacancies", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tDescripción: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? $this->getContext($context, "offer")), "descripcion", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-school\">
\t\t\t\t<div class=\"row school-management\">
\t\t\t\t\t<div class=\"associated-schools col-lg-7 col-md-7 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tCentros asociados
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"associated-schools clearfix skill-list\">
\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 50
            echo "\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "school", array()), "nombre", array()), "html", null, true);
            echo " 
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<a class=\"nobutton pull-right\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offerAdminDelAssign", array("idRel" => $this->getAttribute($context["s"], "id", array()), "id" => $this->getAttribute($this->getAttribute($context["s"], "offer", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"school-associate col-lg-5 col-md-5 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tAsociar centro
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
        // line 67
        echo "\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Offer:offerAdminAssign", array("id" => $this->getAttribute(        // line 68
($context["offer"] ?? $this->getContext($context, "offer")), "id", array()))));
        // line 70
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-applicants\">
\t\t\t\t<h3>Aspirantes</h3>
\t\t\t\t<hr>
\t\t\t";
        // line 77
        if ((twig_length_filter($this->env, ($context["applicants"] ?? $this->getContext($context, "applicants"))) > 0)) {
            // line 78
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applicants"] ?? $this->getContext($context, "applicants")));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 79
                echo "\t\t\t\t\t<div class=\"offer-applicant ";
                if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                    echo "rejected disabled";
                }
                echo " row\">
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-5\">
\t\t\t\t\t\t\t<img class=\"img-circle\" src=\"../../uploads/profileavatar/";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "imagen", array()), "html", null, true);
                echo "\" alt=\"Avatar perfil candidato\" style=\"width:100%;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-7 col-sm-8 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
                // line 85
                if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"color-red\">Aspirante descartado en fecha: ";
                    // line 87
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "modified", array()), "Y/m/d"), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"color-green text-uppercase\">En curso</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<p>Nombre: ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "apellidos", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p>Teléfono: ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "telefonouno", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<p>Localidad: ";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "localidad", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p>eMail: ";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "email", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 104
                if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                    // line 105
                    echo "\t\t\t\t\t\t<div class=\"col-lg-10 col-md-12 col-sm-12 col-xs-12 pull-left\">
\t\t\t\t\t\t\t\t<a class=\"button cta-1\" href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                    echo "\">Ver Perfil</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right text-right\">\t
\t\t\t\t\t\t\t\t<a class=\"button cta-1\" href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                    echo "\">Ver Perfil</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"button cta-3\" href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteApplicant", array("id" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                    echo "\">Rechazar</a>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button cta-2\" data-toggle=\"modal\" data-target=\"#mail-modal";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\tContactar
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t";
                }
                // line 116
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"mail-modal";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
\t\t\t\t        <div class=\"modal-dialog\">
\t\t\t\t            <!-- Modal content-->
\t\t\t\t            <div class=\"modal-content\">
\t\t\t\t                <div class=\"modal-header\">
\t\t\t\t                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t                    <h4 class=\"modal-title\">Envía un mensaje a ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "nombre", array()), "html", null, true);
                echo "</h4>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"modal-body\">
\t\t\t\t                    ";
                // line 127
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:contactMail", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 128
$context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "senderId" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "senderMail" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))));
                // line 130
                echo "
\t\t\t\t                </div>
\t\t\t\t                <div class=\"modal-footer\">
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t\t\t";
        } else {
            // line 139
            echo "\t\t\t\t<p>
\t\t\t\t\t<i class=\"disabled\">Nadie ha postulado a tu oferta por ahora</i>
\t\t\t\t</p>
\t\t\t";
        }
        // line 143
        echo "\t\t\t</div>
\t\t</div>
\t</main>
\t<hr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend:offerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 143,  315 => 139,  312 => 138,  299 => 130,  297 => 128,  296 => 127,  290 => 124,  281 => 118,  277 => 116,  270 => 112,  266 => 111,  261 => 109,  258 => 108,  253 => 106,  250 => 105,  248 => 104,  241 => 100,  237 => 99,  231 => 96,  225 => 95,  222 => 94,  216 => 90,  210 => 87,  207 => 86,  205 => 85,  198 => 81,  190 => 79,  185 => 78,  183 => 77,  174 => 70,  172 => 68,  170 => 67,  161 => 59,  149 => 53,  144 => 51,  141 => 50,  137 => 49,  122 => 37,  116 => 34,  110 => 31,  103 => 27,  95 => 21,  91 => 19,  85 => 15,  76 => 12,  72 => 10,  67 => 9,  58 => 6,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% block body %}
\t{% for error in app.session.flashbag.get('offerAssignError') %}
\t\t<div class=\"alert alert-danger alert-dismissable\">
\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t{{ error }}
\t\t</div>
\t{% endfor %}
\t{% for success in app.session.flashbag.get('offerAssignSuccess') %}
\t\t<div class=\"alert alert-success alert-dismissable\">
\t\t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
\t\t\t{{ success }}
\t\t</div>
\t{% endfor %}
\t<main class=\"offer-admin container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t<h2 class=\"clearfix\">
\t\t\t\t\tGestionar oferta<a href=\"{{ path('profile', {'idUser': app.user.id}) }}#offers\" class=\"button cta-3 pull-right\">Volver a ofertas</a>
\t\t\t\t\t{# <a class=\"button cta-3 pull-right\" href=\"{{ path('profile', {'idUser':app.user.id}) }}\"> Volver</a> #}
\t\t\t\t</h2>\t\t\t\t
\t\t\t\t<hr>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer\">
\t\t\t\t<div class=\"offer-info\">
\t\t\t\t\t<h3 class=\"clearfix\">
\t\t\t\t\t\tTítulo: {{offer.title}}
\t\t\t\t\t</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>
\t\t\t\t\t\tInscritos: {{offer.inscribed}}
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVacantes: {{offer.vacancies}}
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tDescripción: {{offer.descripcion}}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-school\">
\t\t\t\t<div class=\"row school-management\">
\t\t\t\t\t<div class=\"associated-schools col-lg-7 col-md-7 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tCentros asociados
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<div class=\"associated-schools clearfix skill-list\">
\t\t\t\t\t\t{% for s in schools %}
\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t{{s.school.nombre}} 
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<a class=\"nobutton pull-right\" href=\"{{ path('offerAdminDelAssign', {'idRel':s.id, 'id':s.offer.id} ) }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"school-associate col-lg-5 col-md-5 col-sm-12 col-xs-12\">
\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\tAsociar centro
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t{#<a href=\"{{ path('offerAdminAssign', {'id':offer.id}) }}\">Asignar oferta a centro</a>#}
\t\t\t\t\t\t{{ render(controller('AppBundle:Offer:offerAdminAssign',
\t\t\t\t\t\t\t{'id': offer.id}
\t\t\t\t\t\t\t))
\t\t\t\t\t\t}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-applicants\">
\t\t\t\t<h3>Aspirantes</h3>
\t\t\t\t<hr>
\t\t\t{% if applicants|length > 0%}
\t\t\t\t{% for a in applicants %}
\t\t\t\t\t<div class=\"offer-applicant {% if a.status == 0 %}rejected disabled{% endif %} row\">
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-5\">
\t\t\t\t\t\t\t<img class=\"img-circle\" src=\"../../uploads/profileavatar/{{ a.perfilestudianteid.imagen }}\" alt=\"Avatar perfil candidato\" style=\"width:100%;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 col-md-7 col-sm-8 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{% if a.status == 0 %}
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"color-red\">Aspirante descartado en fecha: {{a.modified|date('Y/m/d')}}</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"color-green text-uppercase\">En curso</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<p>Nombre: {{a.perfilestudianteid.nombre}} {{a.perfilestudianteid.apellidos}}</p>
\t\t\t\t\t\t\t\t\t<p>Teléfono: {{a.perfilestudianteid.telefonouno}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t<p>Localidad: {{a.perfilestudianteid.localidad}}</p>
\t\t\t\t\t\t\t\t\t<p>eMail: {{a.perfilestudianteid.email}}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if a.status == 0 %}
\t\t\t\t\t\t<div class=\"col-lg-10 col-md-12 col-sm-12 col-xs-12 pull-left\">
\t\t\t\t\t\t\t\t<a class=\"button cta-1\" href=\"{{ path('publicProfile', {'idUser':a.perfilestudianteid.idusuario.id, 'idVisitor':app.user.id}) }}\">Ver Perfil</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right text-right\">\t
\t\t\t\t\t\t\t\t<a class=\"button cta-1\" href=\"{{ path('publicProfile', {'idUser':a.perfilestudianteid.idusuario.id, 'idVisitor':app.user.id}) }}\">Ver Perfil</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"button cta-3\" href=\"{{ path('deleteApplicant', {'id':a.id} ) }}\">Rechazar</a>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button cta-2\" data-toggle=\"modal\" data-target=\"#mail-modal{{a.perfilestudianteid.idusuario.id}}\">
\t\t\t\t\t\t\t\t\tContactar
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"mail-modal{{a.perfilestudianteid.idusuario.id}}\" class=\"modal fade\" role=\"dialog\">
\t\t\t\t        <div class=\"modal-dialog\">
\t\t\t\t            <!-- Modal content-->
\t\t\t\t            <div class=\"modal-content\">
\t\t\t\t                <div class=\"modal-header\">
\t\t\t\t                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t                    <h4 class=\"modal-title\">Envía un mensaje a {{a.perfilestudianteid.nombre}}</h4>
\t\t\t\t                </div>
\t\t\t\t                <div class=\"modal-body\">
\t\t\t\t                    {{ render(controller('AppBundle:Default:contactMail',
\t\t\t\t                    {'idUser': a.perfilestudianteid.idusuario.id, 'senderId': app.user.id, 'senderMail': app.user.email }
\t\t\t\t                    ))
\t\t\t\t                    }}
\t\t\t\t                </div>
\t\t\t\t                <div class=\"modal-footer\">
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<p>
\t\t\t\t\t<i class=\"disabled\">Nadie ha postulado a tu oferta por ahora</i>
\t\t\t\t</p>
\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</main>
\t<hr>
{% endblock %}", ":Frontend:offerAdmin.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/offerAdmin.html.twig");
    }
}
