<?php

/* :Frontend/profile:indexProfileSchool.html.twig */
class __TwigTemplate_240bcdc9cf43793df99d85e51ab05aa9bb205e2f4d0888942378e97b2f31f5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/profile:indexProfileSchool.html.twig", 1);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignError"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "            <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                // line 8
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignSuccess"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["success"]) {
                // line 12
                echo "            <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                // line 14
                echo twig_escape_filter($this->env, $context["success"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "pwdChanged"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 19
                echo "          <div class=\"alert alert-success alert-dismissable\">
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
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 25
                echo "          <div class=\"alert alert-success alert-dismissable\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            ";
                // line 27
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 31
                echo "          <div class=\"alert alert-danger alert-dismissable\">
            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
            ";
                // line 33
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        <section id=\"school\" class=\"row\">
            <button id=\"profile-menu-btn\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                <ul class=\"menu-alumn\">
                    <li class=\"image-user profile-image\">
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                ";
            // line 44
            if ( !(null === $this->getAttribute(($context["centro"] ?? null), "imagen", array()))) {
                // line 45
                echo "                                    <div class=\"user-img\" style=\"background-image:url(";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                echo "../uploads/profileavatar/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "imagen", array()), "html", null, true);
                echo ");\"></div>
                                ";
            } else {
                // line 47
                echo "                                    <img class=\"img-circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                echo "\" alt=\"Avatar perfil candidato\">
                                ";
            }
            // line 49
            echo "                        </a>
                        <h3>
                            <span>
                                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "nombre", array()), "html", null, true);
            echo "
                            </span>
                        </h3>
                    </li>
                    <hr>
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
                        <a data-toggle=\"tab\" data-placement=\"right\" title=\"Modificar\" href=\"#edit\">
                            <span class=\"glyphicon glyphicon-pencil icon-menu\" aria-hidden=\"true\">
                            </span>
                            <span class=\"txt\">
                                Modificar
                            </span>
                        </a>
                    </li>
                    <li class=\"menu-user\">
                        <a data-toggle=\"tab\" data-placement=\"right\" title=\"Alertas\" href=\"#alerts\">
                            <span class=\"glyphicon glyphicon-envelope icon-menu\" aria-hidden=\"true\">
                            </span>
                            <span class=\"txt\">
                                Alertas <span class=\"badge\">";
            // line 80
            echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
            echo "</span>
                            </span>
                        </a>
                    </li>
                    <li class=\"menu-user\">
                        <a data-toggle=\"tab\" data-placement=\"right\" title=\"Alumnos del centro\" href=\"#applicants\">
                            <span class=\"glyphicon glyphicon-user icon-menu\" aria-hidden=\"true\">
                            </span>
                            <span class=\"txt\">
                                Mis alumnos
                            </span>
                        </a>
                    </li>
                    <li class=\"menu-user\">
                        <a data-toggle=\"tab\" data-placement=\"right\" title=\"Alumnos del centro\" href=\"#offers\">
                            <span class=\"glyphicon glyphicon-eye-open icon-menu\" aria-hidden=\"true\">
                            </span>
                            <span class=\"txt\">
                                Ver ofertas asignadas
                            </span>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class=\"col-lg-9 col-md-8 col-sm-12 col-xs-12\">
                <div class=\"tab-content\">
                    
                    <div id=\"home\" class=\"tab-pane fade in active clearfix\">
                        <div class=\"notifications\">
                            <p class=\"alerts\">
                                Tienes (";
            // line 110
            if ((twig_length_filter($this->env, ($context["notRead"] ?? null)) > 0)) {
                echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
            } else {
                echo " 0 ";
            }
            echo ") alertas nuevas.
                            </p>
                        </div>
                        ";
            // line 114
            echo "                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                            <h2>
                                Inicio
                            </h2>
                            <hr>
                        </div>
                        <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <h3>
                                        Datos del centro
                                    </h3>
                                    <hr>
                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                    
                                    <p>
                                        Nombre centro:
                                        <span>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "nombre", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        CIF/NIF:
                                        <span>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "cif", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        Dirección:
                                        <span>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "direccion", array()), "html", null, true);
            echo "</span>
                                    </p>
                                </div>

                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                    <p>
                                        Correo electrónico:
                                        <span>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "email", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        Teléfono:
                                        <span>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "telefono", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        Teléfono fijo:
                                        <span>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? null), "telefono", array()), "html", null, true);
            echo "</span>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class=\"courses col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <h3>
                                        Cursos del centro
                                    </h3>
                                    <hr>
                                    <p>
                                        ";
            // line 168
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Education:schoolEducationList", array("idSchool" => $this->getAttribute(            // line 169
($context["centro"] ?? null), "id", array()))));
            // line 171
            echo "
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div id=\"edit\" class=\"tab-pane fade clearfix\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <h2>Editar perfil</h2>
                            <hr>
                        </div>
                        <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                ";
            // line 185
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:School:schoolModify", array("id" => $this->getAttribute($this->getAttribute(            // line 186
($context["app"] ?? null), "user", array()), "id", array()))));
            // line 188
            echo "
                            </div>
                        </section>
                        <hr>
                        <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                ";
            // line 194
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Education:educationAdd", array("idSchool" => $this->getAttribute(            // line 195
($context["centro"] ?? null), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
            // line 197
            echo "
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <h3>Lista de cursos del centro</h3>
                                    <hr>
                                    <ul class=\"schoolEducationList\">
                                        ";
            // line 202
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Education:schoolEducationList", array("idSchool" => $this->getAttribute(            // line 203
($context["centro"] ?? null), "id", array()))));
            // line 205
            echo "
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                    ";
            // line 214
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:resetPwd", array("idUser" => $this->getAttribute($this->getAttribute(            // line 215
($context["app"] ?? null), "user", array()), "id", array()))));
            // line 217
            echo "
                                </div>
                            </div>
                        </section>
                    </div>

                    <div id=\"applicants\" class=\"tab-pane fade clearfix\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-sm-12\">
                                <h2>Alumnos del centro</h2>
                                <hr>
                                ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applicantSchool"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 229
                echo "                                <div class=\"row school-applicants text-center\">
                                    <div class=\"col-lg-4 col-md-3 col-sm-7 col-xs-6\">
                                        <i class=\"fa fa-user-o\"></i>
                                        <span class=\"nameal\">";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudiante", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "perfilestudiante", array()), "apellidos", array()), "html", null, true);
                echo "</span>
                                    </div>
                                    <div class=\"col-lg-5 col-md-6 hidden-sm hidden-xs\">
                                        <i class=\"fa fa-book\"></i>
                                        <span class=\"formal\">";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "formacion", array()), "titulo", array()), "html", null, true);
                echo "</span>
                                    </div>
                                    <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-6\">
                                        <a class=\"button cta-1\" href=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudiante", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">Ver Perfil</a>
                                    </div>
                                </div>
                                <hr>
                                    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                            </div>
                        </div>
                    </div>

                    <div id=\"alerts\" class=\"tab-pane fade clearfix\">
                        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                            <h2>Alertas</h2>
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
                                      <b>Info:</b> Recibiras los mensajes en tu correo electronico.
                                </div>
                            </div>
                            
                            ";
            // line 267
            if ((twig_length_filter($this->env, ($context["alerts"] ?? null)) == 0)) {
                // line 268
                echo "                            <div class=\"alert alert-info\">
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
                // line 282
                echo "                                <hr>
                                ";
                // line 283
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    if (($this->getAttribute($context["a"], "status", array()) == 1)) {
                        // line 284
                        echo "                                <p class=\"disabled\">
                                    <a href=\"";
                        // line 285
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_alert", array("idAlert" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                        echo "\">
                                        ";
                        // line 286
                        echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alertsubject", array()), "html", null, true);
                        echo "
                                    </a>
                                    <span class=\"alert-date\">
                                        <i class=\"fa fa-calendar-o\"></i>
                                        ";
                        // line 290
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "generationdate", array()), "Y-m-d"), "html", null, true);
                        echo " 
                                    </span>
                                    Leído <i class=\"fa fa-check color-green\"></i>
                                </p>
                                <hr>
                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                                ";
                if ((($context["notRead"] ?? null) == 0)) {
                    // line 297
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
                                          <b>Info:</b> Has revisado todas tus alertas
                                    </div>
                                </div>
                                ";
                } else {
                    // line 311
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
                                          <b>Info:</b> ";
                    // line 321
                    echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
                    echo " Alertas sin leer
                                    </div>
                                </div>
                            
                                    ";
                    // line 325
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                            // line 326
                            echo "                                    <p>
                                        <a href=\"";
                            // line 327
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_alert", array("idAlert" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                            echo "\">
                                            ";
                            // line 328
                            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alertsubject", array()), "html", null, true);
                            echo "
                                        </a>
                                        - ";
                            // line 330
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["a"], "generationdate", array()), "Y-m-d"), "html", null, true);
                            echo "
                                    </p>
                                    <hr>
                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 334
                    echo "                                ";
                }
                // line 335
                echo "                            ";
            }
            // line 336
            echo "                        </div>
                    </div>

                    <div id=\"offers\" class=\"tab-pane fade clearfix\">
                        ";
            // line 340
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Offer:schoolOfferList", array("idProf" => $this->getAttribute(            // line 341
($context["centro"] ?? null), "id", array()))));
            // line 343
            echo "
                    </div>
                </div>
            </div>
        </section>
    ";
        }
        // line 349
        echo "    ";
        // line 350
        echo "      <div id=\"change-img\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Selecciona una imagen para tu perfil</h4>
            </div>
            <div class=\"modal-body\">
     
              ";
        // line 359
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
        return ":Frontend/profile:indexProfileSchool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 359,  586 => 350,  584 => 349,  576 => 343,  574 => 341,  573 => 340,  567 => 336,  564 => 335,  561 => 334,  550 => 330,  545 => 328,  541 => 327,  538 => 326,  533 => 325,  526 => 321,  514 => 311,  498 => 297,  495 => 296,  482 => 290,  475 => 286,  471 => 285,  468 => 284,  463 => 283,  460 => 282,  444 => 268,  442 => 267,  418 => 245,  406 => 239,  400 => 236,  391 => 232,  386 => 229,  382 => 228,  369 => 217,  367 => 215,  366 => 214,  355 => 205,  353 => 203,  352 => 202,  345 => 197,  343 => 195,  342 => 194,  334 => 188,  332 => 186,  331 => 185,  315 => 171,  313 => 169,  312 => 168,  296 => 155,  289 => 151,  282 => 147,  272 => 140,  265 => 136,  258 => 132,  238 => 114,  228 => 110,  195 => 80,  164 => 52,  159 => 49,  153 => 47,  145 => 45,  143 => 44,  133 => 36,  124 => 33,  120 => 31,  115 => 30,  106 => 27,  102 => 25,  97 => 24,  88 => 21,  84 => 19,  80 => 18,  77 => 17,  68 => 14,  64 => 12,  59 => 11,  50 => 8,  46 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:indexProfileSchool.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileSchool.html.twig");
    }
}
