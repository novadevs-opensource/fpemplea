<?php

/* :Frontend:offerAdmin.html.twig */
class __TwigTemplate_a752f21fe47158b3ad9b3c7717a1867085e2046d9c4720e6e04b8bd6a4ad7af9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignError"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignSuccess"), "method"));
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "title", array()), "html", null, true);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t<p>
\t\t\t\t\t\tInscritos: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "inscribed", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tVacantes: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "vacancies", array()), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tDescripción: ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["offer"] ?? null), "descripcion", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? null));
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
($context["offer"] ?? null), "id", array()))));
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
        if ((twig_length_filter($this->env, ($context["applicants"] ?? null)) > 0)) {
            // line 78
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applicants"] ?? null));
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                    echo "\">Ver Perfil</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right text-right\">\t
\t\t\t\t\t\t\t\t<a class=\"button cta-1\" href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
$context["a"], "perfilestudianteid", array()), "idusuario", array()), "id", array()), "senderId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "senderMail" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))));
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
        return array (  303 => 143,  297 => 139,  294 => 138,  281 => 130,  279 => 128,  278 => 127,  272 => 124,  263 => 118,  259 => 116,  252 => 112,  248 => 111,  243 => 109,  240 => 108,  235 => 106,  232 => 105,  230 => 104,  223 => 100,  219 => 99,  213 => 96,  207 => 95,  204 => 94,  198 => 90,  192 => 87,  189 => 86,  187 => 85,  180 => 81,  172 => 79,  167 => 78,  165 => 77,  156 => 70,  154 => 68,  152 => 67,  143 => 59,  131 => 53,  126 => 51,  123 => 50,  119 => 49,  104 => 37,  98 => 34,  92 => 31,  85 => 27,  77 => 21,  73 => 19,  67 => 15,  58 => 12,  54 => 10,  49 => 9,  40 => 6,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:offerAdmin.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/offerAdmin.html.twig");
    }
}
