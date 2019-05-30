<?php

/* :Frontend/profile:indexProfileApplicant.html.twig */
class __TwigTemplate_54fa210f1a788f112f1a69defc80b837442da2039a09afb6eb001fa59a6bfac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/profile:indexProfileApplicant.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:indexProfileApplicant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:indexProfileApplicant.html.twig"));

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

        echo " FP Emplea - Mi perfil ";
        
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
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 5
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 1)) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "pwdChanged"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 7
                    echo "              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 13
                    echo "              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 15
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 19
                    echo "              <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "            <section id=\"applicant\" class=\"row\">
                <button id=\"profile-menu-btn\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                    <ul class=\"menu-alumn\">
                        <li class=\"image-user profile-image\">
                            <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                ";
                // line 32
                if ( !(null === $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "imagen", array()))) {
                    // line 33
                    echo "                                    <div class=\"user-img\" style=\"background-image:url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "imagen", array())))), "html", null, true);
                    echo ");\"></div>
                                ";
                } else {
                    // line 35
                    echo "                                    <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
                                ";
                }
                // line 37
                echo "                            </a>
                            <h3>
                                <span>
                                    ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "apellidos", array()), "html", null, true);
                echo "
                                </span>
                            </h3>
                        </li>
                        <hr>
                        <!--                OK-->
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Inicio\" href=\"#home\">
                                <span class=\"glyphicon glyphicon-home icon-menu\" aria-hidden=\"true\">
                                </span>
                                
                                <span class=\"txt\">
                                    Inicio
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Modificar datos\" data-target=\"#edit\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-pencil icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Modificar datos
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" title=\"Alertas\" href=\"#alerts\">
                                <span class=\"glyphicon glyphicon-envelope icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Alertas <span class=\"badge\">";
                // line 70
                echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
                echo "</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Mis ofertas de empleo\" data-target=\"#offers\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mis_ofertas_candidato", array("idPerf" => $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-briefcase icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Mis ofertas de empleo
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-placement=\"right\" title=\"Actualiza tu curriculum\" href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv-edit", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "#cv\">
                                <span class=\"glyphicon glyphicon-file icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Actualiza tu curriculum
                                </span>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class=\"col-lg-9 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"tab-content\">
                        <div id=\"home\" class=\"tab-pane fade in active\">
                            <div class=\"notifications\">
                                <p class=\"alerts\">
                                    Tienes (";
                // line 99
                if ((twig_length_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead"))) > 0)) {
                    echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
                } else {
                    echo " 0 ";
                }
                echo ") alertas nuevas.
                                </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                <h2>
                                    Inicio
                                </h2>
                            </div>
                            <hr>
                            <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <h3>
                                            Datos personales
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Nombre completo:
                                            <span>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
                echo "</span>
                                            <span>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "apellidos", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            DNI/NIE:
                                            <span>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "dni", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Dirección:
                                            <span>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "direccion", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Teléfono:
                                            <span> ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "telefonouno", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            Teléfono fijo:
                                            <span> ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "telefonodos", array()), "html", null, true);
                echo " </span>
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Correo electrónico:
                                            <span> ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "email", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            Redes Sociales:
                                        </p>
                                        <p>
                                            <div class=\"social-profiles\">
                                        ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["sn"] ?? $this->getContext($context, "sn")));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 150
                    echo "                                            ";
                    if (($this->getAttribute($this->getAttribute($context["s"], "sn", array()), "nombre", array()) == "facebook")) {
                        // line 151
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-facebook socialIcon facebook\"></i>
                                                    ";
                        // line 154
                        echo "                                                </a>
                                            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 155
$context["s"], "sn", array()), "nombre", array()) == "twitter")) {
                        // line 156
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-twitter socialIcon twitter\"></i>
                                                    ";
                        // line 159
                        echo "                                                </a>
                                            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 160
$context["s"], "sn", array()), "nombre", array()) == "instagram")) {
                        // line 161
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-instagram socialIcon instagram\"></i>
                                                    ";
                        // line 164
                        echo "                                                </a>
                                            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 165
$context["s"], "sn", array()), "nombre", array()) == "vimeo")) {
                        // line 166
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-vimeo socialIcon vimeo\"></i>
                                                    ";
                        // line 169
                        echo "                                                </a>
                                            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 170
$context["s"], "sn", array()), "nombre", array()) == "youtube")) {
                        // line 171
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-youtube socialIcon youtube\"></i>
                                                    ";
                        // line 174
                        echo "                                                </a>
                                            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 175
$context["s"], "sn", array()), "nombre", array()) == "linkedin")) {
                        // line 176
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-linkedin socialIcon linkedin\"></i>
                                                    ";
                        // line 179
                        echo "                                                </a>
                                            ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 180
$context["s"], "sn", array()), "nombre", array()) == "google+")) {
                        // line 181
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                        echo "\">
                                                    <i class=\"fa fa-google socialIcon google\"></i>
                                                    ";
                        // line 184
                        echo "                                                </a>
                                            ";
                    }
                    // line 186
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"education col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <h3>
                                        Formación
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class=\"education-list\">
                                    ";
                // line 202
                if ((twig_length_filter($this->env, ($context["applicantEdu"] ?? $this->getContext($context, "applicantEdu"))) == 0)) {
                    // line 203
                    echo "                                        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                            <p>
                                                <i class=\"disabled\">Todavía no has añadido ninguna formación</i>
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 209
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["applicantEdu"] ?? $this->getContext($context, "applicantEdu")));
                    foreach ($context['_seq'] as $context["_key"] => $context["ae"]) {
                        // line 210
                        echo "                                        <div class=\"education-items clearfix\">
                                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"education";
                        // line 211
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ae"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo "\">
                                                <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right pull-right\">
                                                   <strong><i class=\"fa fa-calendar-check-o\"></i> ";
                        // line 213
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ae"], "start", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ae"], "end", array()), "d/m/Y"), "html", null, true);
                        echo " </strong>
                                                </div>
                                                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                                    <i class=\"fa fa-university\"></i> 
                                                    ";
                        // line 217
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ae"], "school", array()), "html", null, true);
                        echo "
                                                </div>
                                                ";
                        // line 223
                        echo "                                                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                    <i class=\"fa fa-graduation-cap\"></i>
                                                    <strong>";
                        // line 225
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ae"], "formacion", array()), "titulo", array()), "html", null, true);
                        echo "</strong>
                                                </div>
                                                <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-12\">                                            
                                                ";
                        // line 228
                        if (($this->getAttribute($context["ae"], "finished", array()) == true)) {
                            // line 229
                            echo "                                                    <i class=\"fa fa-check\"></i> Finalizado
                                                ";
                        } else {
                            // line 231
                            echo "                                                    <i class=\"fa fa-close\"></i> No finalizado
                                                ";
                        }
                        // line 233
                        echo "                                                </div>
                                            </div>
                                        </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ae'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 237
                    echo "                                    ";
                }
                // line 238
                echo "                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"work-experience col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                                    
                                        <h3>
                                            Experiencia laboral:
                                        </h3>
                                        <hr>
                                    </div>
                                ";
                // line 250
                if ((twig_length_filter($this->env, ($context["applicantWork"] ?? $this->getContext($context, "applicantWork"))) == 0)) {
                    // line 251
                    echo "                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            <i class=\"disabled\">Todavía no has añadido ninguna experiencia</i>
                                        </p>
                                    </div>
                                ";
                } else {
                    // line 257
                    echo "                                <div class=\"work-list col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    ";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["applicantWork"] ?? $this->getContext($context, "applicantWork")));
                    foreach ($context['_seq'] as $context["_key"] => $context["aw"]) {
                        // line 259
                        echo "                                    <div class=\"work-items clearfix\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"work-list";
                        // line 260
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                        echo "\"> 
                                            <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right pull-right\">
                                               <strong><i class=\"fa fa-calendar-check-o\"></i> Desde ";
                        // line 262
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aw"], "start", array()), "d/m/Y"), "html", null, true);
                        echo " a ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aw"], "end", array()), "d/m/Y"), "html", null, true);
                        echo "</strong>
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <i class=\"fa fa-building\"></i>
                                                    ";
                        // line 266
                        if (($this->getAttribute($context["aw"], "company", array()) != null)) {
                            echo " 
                                                        ";
                            // line 267
                            echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "company", array()), "html", null, true);
                            echo "
                                                    ";
                        } else {
                            // line 269
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "othercompany", array()), "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 271
                        echo "                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <i class=\"fa fa-bookmark-o\"></i> 
                                                    ";
                        // line 274
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "position", array()), "html", null, true);
                        echo "
                                            </div>
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <p>
                                                    <i class=\"fa fa-rocket\"></i>";
                        // line 278
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "workexp", array()), "html", null, true);
                        echo "
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aw'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 284
                    echo "                                </div>
                                ";
                }
                // line 286
                echo "                                </div>
                            </section>
                            <hr>
                            <section class=\"skills col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    ";
                // line 291
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantSkillList", array("idApplicant" => $this->getAttribute(                // line 292
($context["estudiante"] ?? $this->getContext($context, "estudiante")), "id", array()))));
                // line 294
                echo "
                                </div>
                            </section>
                            <hr>
                        </div>
                        <!-- OK -->
                        <div id=\"edit\" class=\"tab-pane fade clearfix\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                <h2>
                                    Editar perfil
                                </h2>
                            </div>
                            <hr>
                            <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                        <h3>
                                            Editar datos personales
                                        </h3>
                                        <hr>
                                        ";
                // line 314
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Applicant:modificarEstudiante", array("id" => $this->getAttribute($this->getAttribute(                // line 315
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                // line 317
                echo "
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                                ";
                // line 327
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snAdd", array("idUser" => $this->getAttribute($this->getAttribute(                // line 328
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                // line 330
                echo "
                                                ";
                // line 331
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                echo "
                                            </div>
                                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\"> 
                                                ";
                // line 334
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:resetPwd", array("idUser" => $this->getAttribute($this->getAttribute(                // line 335
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                // line 337
                echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <hr>
                        </div>

                        <div id=\"alerts\" class=\"tab-pane fade\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <h2>Tus alertas</h2>
                                <hr>
                                <div class=\"alert alert-info\">
                                    <div class=\"container-fluid\">
                                          <span class=\"alert-icon\">
                                            <i class=\"fa fa-info\"></i>
                                          </span>
                                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">
                                                <i class=\"fa fa-close\"></i>
                                                </span>
                                          </button>
                                          <b>Info:</b> Recibirás los mensajes en tu correo electrónico.
                                    </div>
                                </div>
                                ";
                // line 363
                if ((twig_length_filter($this->env, ($context["alerts"] ?? $this->getContext($context, "alerts"))) == 0)) {
                    // line 364
                    echo "                                <div class=\"alert alert-info\">
                                    <div class=\"container-fluid\">
                                          <span class=\"alert-icon\">
                                            <i class=\"fa fa-info\"></i>
                                          </span>
                                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">
                                                <i class=\"fa fa-close\"></i>
                                                </span>
                                          </button>
                                          <b>Info:</b> No tienes alertas
                                    </div>
                                </div>
                                ";
                } else {
                    // line 378
                    echo "                                    <hr>
                                    ";
                    // line 379
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? $this->getContext($context, "alerts")));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        if (($this->getAttribute($context["a"], "status", array()) == 1)) {
                            // line 380
                            echo "                                    <div class=\"row disabled\">
                                        <div class=\"col-lg-9 col-md-8 col-sm-9 col-xs-6\">
                                            <a href=\"";
                            // line 382
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_alert", array("idAlert" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                            echo "\">
                                                ";
                            // line 383
                            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alertsubject", array()), "html", null, true);
                            echo "
                                            </a>
                                        </div>
                                        <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-4\">
                                            <span class=\"alert-date\">
                                                <i class=\"fa fa-calendar-o\"></i>
                                                ";
                            // line 389
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "generationdate", array()), "Y-m-d"), "html", null, true);
                            echo " 
                                            </span>
                                        </div>
                                        <div class=\"col-lg-1 col-md-1 hidden-sm col-xs-2\">
                                            Leído <i class=\"fa fa-check color-green\"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 398
                    echo "                                    ";
                    if ((($context["notRead"] ?? $this->getContext($context, "notRead")) == 0)) {
                        // line 399
                        echo "                                    <div class=\"alert alert-info\">
                                        <div class=\"container-fluid\">
                                              <span class=\"alert-icon\">
                                                <i class=\"fa fa-info\"></i>
                                              </span>
                                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">
                                                    <i class=\"fa fa-close\"></i>
                                                    </span>
                                              </button>
                                              <b>Info:</b> Has revisado todas tus alertas
                                        </div>
                                    </div>
                                    ";
                    } else {
                        // line 413
                        echo "                                    <div class=\"alert alert-info\">
                                        <div class=\"container-fluid\">
                                              <span class=\"alert-icon\">
                                                <i class=\"fa fa-info\"></i>
                                              </span>
                                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">
                                                    <i class=\"fa fa-close\"></i>
                                                    </span>
                                              </button>
                                              <b>Info:</b> ";
                        // line 423
                        echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
                        echo " Alertas sin leer
                                        </div>
                                    </div>
                                        ";
                        // line 426
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? $this->getContext($context, "alerts")));
                        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                            if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                                // line 427
                                echo "                                        <div class=\"row\">
                                            <div class=\"col-lg-9 col-md-8 col-sm-9 col-xs-12\">
                                                <a href=\"";
                                // line 429
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_alert", array("idAlert" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                                echo "\">
                                                    ";
                                // line 430
                                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alertsubject", array()), "html", null, true);
                                echo "
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-3 col-xs-12\">
                                                <span class=\"alert-date\">
                                                    <i class=\"fa fa-calendar-o\"></i>
                                                    ";
                                // line 436
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "generationdate", array()), "Y-m-d"), "html", null, true);
                                echo "
                                                </span>
                                            </div>
                                        </div>
                                        <hr>
                                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 442
                        echo "                                    ";
                    }
                    // line 443
                    echo "                                ";
                }
                // line 444
                echo "                            </div>
                        </div>
                        <!-- OK -->
                        <div id=\"offers\" class=\"tab-pane fade\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <h2>Mis ofertas de empleo</h2>
                                        <hr>
                                    </div>
                                        ";
                // line 454
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Applicant:listadoOfertasProfileEstudiante", array("idPerf" => $this->getAttribute(                // line 455
($context["estudiante"] ?? $this->getContext($context, "estudiante")), "id", array()))));
                // line 457
                echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ";
            } else {
                // line 465
                echo "            <hr>
            <p class=\"text-center\">
                <button class=\"button cta-2\">
                    <a href=\"";
                // line 468
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">Crear perfil de estudiante</a>
                </button>
            </p>
            <hr>
        ";
            }
            // line 473
            echo "    ";
        }
        // line 474
        echo "    ";
        // line 475
        echo "      <div id=\"change-img\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Selecciona una imagen para tu perfil</h4>
            </div>
            <div class=\"modal-body\">
     
              ";
        // line 484
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:AvatarEdit"));
        echo "

            </div>
            <div class=\"modal-footer\">
            </div>
          </div>
        </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:indexProfileApplicant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  881 => 484,  870 => 475,  868 => 474,  865 => 473,  857 => 468,  852 => 465,  842 => 457,  840 => 455,  839 => 454,  827 => 444,  824 => 443,  821 => 442,  808 => 436,  799 => 430,  795 => 429,  791 => 427,  786 => 426,  780 => 423,  768 => 413,  752 => 399,  749 => 398,  733 => 389,  724 => 383,  720 => 382,  716 => 380,  711 => 379,  708 => 378,  692 => 364,  690 => 363,  662 => 337,  660 => 335,  659 => 334,  653 => 331,  650 => 330,  648 => 328,  647 => 327,  635 => 317,  633 => 315,  632 => 314,  610 => 294,  608 => 292,  607 => 291,  600 => 286,  596 => 284,  584 => 278,  577 => 274,  572 => 271,  566 => 269,  561 => 267,  557 => 266,  548 => 262,  542 => 260,  539 => 259,  535 => 258,  532 => 257,  524 => 251,  522 => 250,  508 => 238,  505 => 237,  496 => 233,  492 => 231,  488 => 229,  486 => 228,  480 => 225,  476 => 223,  471 => 217,  462 => 213,  456 => 211,  453 => 210,  448 => 209,  440 => 203,  438 => 202,  421 => 187,  415 => 186,  411 => 184,  402 => 181,  400 => 180,  397 => 179,  388 => 176,  386 => 175,  383 => 174,  374 => 171,  372 => 170,  369 => 169,  360 => 166,  358 => 165,  355 => 164,  346 => 161,  344 => 160,  341 => 159,  332 => 156,  330 => 155,  327 => 154,  318 => 151,  315 => 150,  311 => 149,  301 => 142,  292 => 136,  285 => 132,  278 => 128,  271 => 124,  264 => 120,  260 => 119,  233 => 99,  215 => 84,  203 => 75,  195 => 70,  179 => 57,  157 => 40,  152 => 37,  146 => 35,  140 => 33,  138 => 32,  128 => 24,  119 => 21,  115 => 19,  110 => 18,  101 => 15,  97 => 13,  92 => 12,  83 => 9,  79 => 7,  74 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %} FP Emplea - Mi perfil {% endblock %}
{% block body %}
    {% if is_granted('ROLE_STUDENT') %}
        {% if app.user.done == 1 %}
            {% for flashMessage in app.session.flashbag.get('pwdChanged') %}
              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ flashMessage }}
              </div>
            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('profileEditSucc') %}
              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ flashMessage }}
              </div>
            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('profileEditErr') %}
              <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ flashMessage }}
              </div>
            {% endfor %}
            <section id=\"applicant\" class=\"row\">
                <button id=\"profile-menu-btn\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                    <ul class=\"menu-alumn\">
                        <li class=\"image-user profile-image\">
                            <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                {% if estudiante.imagen is not null %}
                                    <div class=\"user-img\" style=\"background-image:url({{ absolute_url(asset('uploads/profileavatar/' ~  estudiante.imagen)) }});\"></div>
                                {% else %}
                                    <img class=\"img-circle\" src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"Avatar perfil candidato\">
                                {% endif %}
                            </a>
                            <h3>
                                <span>
                                    {{ estudiante.nombre }} {{ estudiante.apellidos}}
                                </span>
                            </h3>
                        </li>
                        <hr>
                        <!--                OK-->
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Inicio\" href=\"#home\">
                                <span class=\"glyphicon glyphicon-home icon-menu\" aria-hidden=\"true\">
                                </span>
                                
                                <span class=\"txt\">
                                    Inicio
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Modificar datos\" data-target=\"#edit\" href=\"{{ path('modificar_estudiante', {'id':app.user.id}) }}\">
                                <span class=\"glyphicon glyphicon-pencil icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Modificar datos
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" title=\"Alertas\" href=\"#alerts\">
                                <span class=\"glyphicon glyphicon-envelope icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Alertas <span class=\"badge\">{{notRead}}</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Mis ofertas de empleo\" data-target=\"#offers\" href=\"{{ path('mis_ofertas_candidato', {'idPerf':estudiante.id}) }}\">
                                <span class=\"glyphicon glyphicon-briefcase icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Mis ofertas de empleo
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-placement=\"right\" title=\"Actualiza tu curriculum\" href=\"{{ path('cv-edit', {'idUser':app.user.id}) }}#cv\">
                                <span class=\"glyphicon glyphicon-file icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Actualiza tu curriculum
                                </span>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class=\"col-lg-9 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"tab-content\">
                        <div id=\"home\" class=\"tab-pane fade in active\">
                            <div class=\"notifications\">
                                <p class=\"alerts\">
                                    Tienes ({% if notRead|length > 0 %}{{notRead}}{% else %} 0 {% endif %}) alertas nuevas.
                                </p>
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                <h2>
                                    Inicio
                                </h2>
                            </div>
                            <hr>
                            <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <h3>
                                            Datos personales
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Nombre completo:
                                            <span>{{ estudiante.nombre }}</span>
                                            <span>{{ estudiante.apellidos }}</span>
                                        </p>
                                        <p>
                                            DNI/NIE:
                                            <span>{{ estudiante.dni }}</span>
                                        </p>
                                        <p>
                                            Dirección:
                                            <span>{{ estudiante.direccion }}</span>
                                        </p>
                                        <p>
                                            Teléfono:
                                            <span> {{ estudiante.telefonouno }} </span>
                                        </p>
                                        <p>
                                            Teléfono fijo:
                                            <span> {{ estudiante.telefonodos }} </span>
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Correo electrónico:
                                            <span> {{ estudiante.email }} </span>
                                        </p>
                                        <p>
                                            Redes Sociales:
                                        </p>
                                        <p>
                                            <div class=\"social-profiles\">
                                        {% for s in sn %}
                                            {% if s.sn.nombre == 'facebook' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-facebook socialIcon facebook\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% elseif s.sn.nombre == 'twitter' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-twitter socialIcon twitter\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% elseif s.sn.nombre == 'instagram' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-instagram socialIcon instagram\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% elseif s.sn.nombre == 'vimeo' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-vimeo socialIcon vimeo\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% elseif s.sn.nombre == 'youtube' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-youtube socialIcon youtube\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% elseif s.sn.nombre == 'linkedin' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-linkedin socialIcon linkedin\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% elseif s.sn.nombre == 'google+' %}
                                                <a href=\"{{s.snurl}}\" class=\"socialLink\" id=\"social{{app.user.id}}{{s.id}}\">
                                                    <i class=\"fa fa-google socialIcon google\"></i>
                                                    {#<span>{{s.snurl}}</span>#}
                                                </a>
                                            {% endif %}
                                        {% endfor %}
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"education col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <h3>
                                        Formación
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class=\"education-list\">
                                    {% if applicantEdu|length == 0 %}
                                        <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                            <p>
                                                <i class=\"disabled\">Todavía no has añadido ninguna formación</i>
                                            </p>
                                        </div>
                                    {% else %}
                                        {% for ae in applicantEdu %}
                                        <div class=\"education-items clearfix\">
                                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"education{{ae.id}}{{app.user.id}}\">
                                                <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right pull-right\">
                                                   <strong><i class=\"fa fa-calendar-check-o\"></i> {{ ae.start|date('d/m/Y') }} - {{ ae.end|date('d/m/Y') }} </strong>
                                                </div>
                                                <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                                    <i class=\"fa fa-university\"></i> 
                                                    {{ ae.school}}
                                                </div>
                                                {# <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                                                    <i class=\"fa fa-calendar-o\"></i>
                                                    {{ ae.start|date('d/m/Y') }} - {{ ae.end|date('d/m/Y') }} 
                                                </div> #}
                                                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                                                    <i class=\"fa fa-graduation-cap\"></i>
                                                    <strong>{{ ae.formacion.titulo }}</strong>
                                                </div>
                                                <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-12\">                                            
                                                {% if ae.finished == true %}
                                                    <i class=\"fa fa-check\"></i> Finalizado
                                                {% else %}
                                                    <i class=\"fa fa-close\"></i> No finalizado
                                                {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        {% endfor %}
                                    {% endif %}
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"work-experience col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">                                    
                                        <h3>
                                            Experiencia laboral:
                                        </h3>
                                        <hr>
                                    </div>
                                {% if applicantWork|length == 0 %}
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            <i class=\"disabled\">Todavía no has añadido ninguna experiencia</i>
                                        </p>
                                    </div>
                                {% else %}
                                <div class=\"work-list col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    {% for aw in applicantWork %}
                                    <div class=\"work-items clearfix\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"work-list{{aw.id}}{{app.user.id}}\"> 
                                            <div class=\"col-lg-7 col-md-7 col-sm-7 col-xs-12 text-right pull-right\">
                                               <strong><i class=\"fa fa-calendar-check-o\"></i> Desde {{aw.start|date('d/m/Y')}} a {{aw.end|date('d/m/Y')}}</strong>
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <i class=\"fa fa-building\"></i>
                                                    {% if aw.company != null %} 
                                                        {{aw.company}}
                                                    {% else %}
                                                        {{aw.othercompany}}
                                                    {% endif %}
                                            </div>
                                            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                                <i class=\"fa fa-bookmark-o\"></i> 
                                                    {{aw.position}}
                                            </div>
                                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                                <p>
                                                    <i class=\"fa fa-rocket\"></i>{{aw.workexp}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {% endfor %}
                                </div>
                                {% endif %}
                                </div>
                            </section>
                            <hr>
                            <section class=\"skills col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    {{ render(controller('AppBundle:Skill:applicantSkillList',
                                    { 'idApplicant': estudiante.id }
                                    ))
                                    }}
                                </div>
                            </section>
                            <hr>
                        </div>
                        <!-- OK -->
                        <div id=\"edit\" class=\"tab-pane fade clearfix\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                <h2>
                                    Editar perfil
                                </h2>
                            </div>
                            <hr>
                            <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                        <h3>
                                            Editar datos personales
                                        </h3>
                                        <hr>
                                        {{ render(controller('AppBundle:Applicant:modificarEstudiante',
                                                {'id': app.user.id}
                                            ))
                                        }}
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                                {{ render(controller('AppBundle:Default:snAdd',
                                                {'idUser': app.user.id}
                                                ))
                                                }}
                                                {{ render(controller('AppBundle:Default:snList', {'idUser': app.user.id})) }}
                                            </div>
                                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\"> 
                                                {{ render(controller('AppBundle:Default:resetPwd',
                                                { 'idUser': app.user.id }
                                                ))
                                                }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <hr>
                        </div>

                        <div id=\"alerts\" class=\"tab-pane fade\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <h2>Tus alertas</h2>
                                <hr>
                                <div class=\"alert alert-info\">
                                    <div class=\"container-fluid\">
                                          <span class=\"alert-icon\">
                                            <i class=\"fa fa-info\"></i>
                                          </span>
                                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">
                                                <i class=\"fa fa-close\"></i>
                                                </span>
                                          </button>
                                          <b>Info:</b> Recibirás los mensajes en tu correo electrónico.
                                    </div>
                                </div>
                                {% if alerts|length == 0 %}
                                <div class=\"alert alert-info\">
                                    <div class=\"container-fluid\">
                                          <span class=\"alert-icon\">
                                            <i class=\"fa fa-info\"></i>
                                          </span>
                                          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">
                                                <i class=\"fa fa-close\"></i>
                                                </span>
                                          </button>
                                          <b>Info:</b> No tienes alertas
                                    </div>
                                </div>
                                {% else %}
                                    <hr>
                                    {% for a in alerts if a.status == 1 %}
                                    <div class=\"row disabled\">
                                        <div class=\"col-lg-9 col-md-8 col-sm-9 col-xs-6\">
                                            <a href=\"{{ path('check_alert', {'idAlert':a.id}) }}\">
                                                {{a.alertsubject}}
                                            </a>
                                        </div>
                                        <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-4\">
                                            <span class=\"alert-date\">
                                                <i class=\"fa fa-calendar-o\"></i>
                                                {{a.generationdate|date('Y-m-d')}} 
                                            </span>
                                        </div>
                                        <div class=\"col-lg-1 col-md-1 hidden-sm col-xs-2\">
                                            Leído <i class=\"fa fa-check color-green\"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    {% endfor %}
                                    {% if notRead == 0 %}
                                    <div class=\"alert alert-info\">
                                        <div class=\"container-fluid\">
                                              <span class=\"alert-icon\">
                                                <i class=\"fa fa-info\"></i>
                                              </span>
                                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">
                                                    <i class=\"fa fa-close\"></i>
                                                    </span>
                                              </button>
                                              <b>Info:</b> Has revisado todas tus alertas
                                        </div>
                                    </div>
                                    {% else %}
                                    <div class=\"alert alert-info\">
                                        <div class=\"container-fluid\">
                                              <span class=\"alert-icon\">
                                                <i class=\"fa fa-info\"></i>
                                              </span>
                                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">
                                                    <i class=\"fa fa-close\"></i>
                                                    </span>
                                              </button>
                                              <b>Info:</b> {{notRead}} Alertas sin leer
                                        </div>
                                    </div>
                                        {% for a in alerts if a.status == 0 %}
                                        <div class=\"row\">
                                            <div class=\"col-lg-9 col-md-8 col-sm-9 col-xs-12\">
                                                <a href=\"{{ path('check_alert', {'idAlert':a.id}) }}\">
                                                    {{a.alertsubject}}
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-3 col-xs-12\">
                                                <span class=\"alert-date\">
                                                    <i class=\"fa fa-calendar-o\"></i>
                                                    {{a.generationdate|date('Y-m-d')}}
                                                </span>
                                            </div>
                                        </div>
                                        <hr>
                                        {% endfor %}
                                    {% endif %}
                                {% endif %}
                            </div>
                        </div>
                        <!-- OK -->
                        <div id=\"offers\" class=\"tab-pane fade\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <h2>Mis ofertas de empleo</h2>
                                        <hr>
                                    </div>
                                        {{ render(controller('AppBundle:Applicant:listadoOfertasProfileEstudiante',
                                        { 'idPerf': estudiante.id }
                                        ))
                                        }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {% else %}
            <hr>
            <p class=\"text-center\">
                <button class=\"button cta-2\">
                    <a href=\"{{ path('crear_estudiante', {'id':app.user.id}) }}\">Crear perfil de estudiante</a>
                </button>
            </p>
            <hr>
        {% endif %}
    {% endif %}
    {# Modal cambio de imagen #}
      <div id=\"change-img\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Selecciona una imagen para tu perfil</h4>
            </div>
            <div class=\"modal-body\">
     
              {{ render( controller( 'AppBundle:Default:AvatarEdit' ) ) }}

            </div>
            <div class=\"modal-footer\">
            </div>
          </div>
        </div>
      </div>
{% endblock %}", ":Frontend/profile:indexProfileApplicant.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileApplicant.html.twig");
    }
}
