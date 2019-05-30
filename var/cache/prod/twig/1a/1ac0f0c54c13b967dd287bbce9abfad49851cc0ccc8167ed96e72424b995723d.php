<?php

/* :Frontend/profile:indexProfileApplicant.html.twig */
class __TwigTemplate_e9f59514a610dc97f7673746cc2569f67aa9f0f294839771815ab081fbd10d73 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " FP Emplea - Mi perfil ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 5
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 1)) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "pwdChanged"), "method"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
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
                if ( !(null === $this->getAttribute(($context["estudiante"] ?? null), "imagen", array()))) {
                    // line 33
                    echo "                                    <div class=\"user-img\" style=\"background-image:url(";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . $this->getAttribute(($context["estudiante"] ?? null), "imagen", array())))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "apellidos", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
                echo "</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Mis ofertas de empleo\" data-target=\"#offers\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mis_ofertas_candidato", array("idPerf" => $this->getAttribute(($context["estudiante"] ?? null), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv-edit", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
                if ((twig_length_filter($this->env, ($context["notRead"] ?? null)) > 0)) {
                    echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "nombre", array()), "html", null, true);
                echo "</span>
                                            <span>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "apellidos", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            DNI/NIE:
                                            <span>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "dni", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Dirección:
                                            <span>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "direccion", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Teléfono:
                                            <span> ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "telefonouno", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            Teléfono fijo:
                                            <span> ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "telefonodos", array()), "html", null, true);
                echo " </span>
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Correo electrónico:
                                            <span> ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute(($context["estudiante"] ?? null), "email", array()), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["sn"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    // line 150
                    echo "                                            ";
                    if (($this->getAttribute($this->getAttribute($context["s"], "sn", array()), "nombre", array()) == "facebook")) {
                        // line 151
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                        echo "\" class=\"socialLink\" id=\"social";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                if ((twig_length_filter($this->env, ($context["applicantEdu"] ?? null)) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable(($context["applicantEdu"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["ae"]) {
                        // line 210
                        echo "                                        <div class=\"education-items clearfix\">
                                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"education";
                        // line 211
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ae"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
                if ((twig_length_filter($this->env, ($context["applicantWork"] ?? null)) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable(($context["applicantWork"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["aw"]) {
                        // line 259
                        echo "                                    <div class=\"work-items clearfix\">
                                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"work-list";
                        // line 260
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "id", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
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
($context["estudiante"] ?? null), "id", array()))));
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
($context["app"] ?? null), "user", array()), "id", array()))));
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
($context["app"] ?? null), "user", array()), "id", array()))));
                // line 330
                echo "
                                                ";
                // line 331
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                echo "
                                            </div>
                                            <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\"> 
                                                ";
                // line 334
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:resetPwd", array("idUser" => $this->getAttribute($this->getAttribute(                // line 335
($context["app"] ?? null), "user", array()), "id", array()))));
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
                if ((twig_length_filter($this->env, ($context["alerts"] ?? null)) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
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
                    if ((($context["notRead"] ?? null) == 0)) {
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
                        echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
                        echo " Alertas sin leer
                                        </div>
                                    </div>
                                        ";
                        // line 426
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
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
($context["estudiante"] ?? null), "id", array()))));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        return array (  851 => 484,  840 => 475,  838 => 474,  835 => 473,  827 => 468,  822 => 465,  812 => 457,  810 => 455,  809 => 454,  797 => 444,  794 => 443,  791 => 442,  778 => 436,  769 => 430,  765 => 429,  761 => 427,  756 => 426,  750 => 423,  738 => 413,  722 => 399,  719 => 398,  703 => 389,  694 => 383,  690 => 382,  686 => 380,  681 => 379,  678 => 378,  662 => 364,  660 => 363,  632 => 337,  630 => 335,  629 => 334,  623 => 331,  620 => 330,  618 => 328,  617 => 327,  605 => 317,  603 => 315,  602 => 314,  580 => 294,  578 => 292,  577 => 291,  570 => 286,  566 => 284,  554 => 278,  547 => 274,  542 => 271,  536 => 269,  531 => 267,  527 => 266,  518 => 262,  512 => 260,  509 => 259,  505 => 258,  502 => 257,  494 => 251,  492 => 250,  478 => 238,  475 => 237,  466 => 233,  462 => 231,  458 => 229,  456 => 228,  450 => 225,  446 => 223,  441 => 217,  432 => 213,  426 => 211,  423 => 210,  418 => 209,  410 => 203,  408 => 202,  391 => 187,  385 => 186,  381 => 184,  372 => 181,  370 => 180,  367 => 179,  358 => 176,  356 => 175,  353 => 174,  344 => 171,  342 => 170,  339 => 169,  330 => 166,  328 => 165,  325 => 164,  316 => 161,  314 => 160,  311 => 159,  302 => 156,  300 => 155,  297 => 154,  288 => 151,  285 => 150,  281 => 149,  271 => 142,  262 => 136,  255 => 132,  248 => 128,  241 => 124,  234 => 120,  230 => 119,  203 => 99,  185 => 84,  173 => 75,  165 => 70,  149 => 57,  127 => 40,  122 => 37,  116 => 35,  110 => 33,  108 => 32,  98 => 24,  89 => 21,  85 => 19,  80 => 18,  71 => 15,  67 => 13,  62 => 12,  53 => 9,  49 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:indexProfileApplicant.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileApplicant.html.twig");
    }
}
