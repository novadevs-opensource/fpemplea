<?php

/* :Frontend/profile:indexProfileSchool.html.twig */
class __TwigTemplate_e8c5a75a752bcf7db397be4fb6ca37642e40e310befcfdefd6c95f4f4a6a08f2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:indexProfileSchool.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:indexProfileSchool.html.twig"));

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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignError"), "method"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "offerAssignSuccess"), "method"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "pwdChanged"), "method"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
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
            if ( !(null === $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "imagen", array()))) {
                // line 45
                echo "                                    <div class=\"user-img\" style=\"background-image:url(";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                echo "../uploads/profileavatar/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "imagen", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "nombre", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
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
            if ((twig_length_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead"))) > 0)) {
                echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "nombre", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        CIF/NIF:
                                        <span>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "cif", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        Dirección:
                                        <span>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "direccion", array()), "html", null, true);
            echo "</span>
                                    </p>
                                </div>

                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                    <p>
                                        Correo electrónico:
                                        <span>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "email", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        Teléfono:
                                        <span>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "telefono", array()), "html", null, true);
            echo "</span>
                                    </p>
                                    <p>
                                        Teléfono fijo:
                                        <span>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute(($context["centro"] ?? $this->getContext($context, "centro")), "telefono", array()), "html", null, true);
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
($context["centro"] ?? $this->getContext($context, "centro")), "id", array()))));
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
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
($context["centro"] ?? $this->getContext($context, "centro")), "id", array()), "id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
            // line 197
            echo "
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <h3>Lista de cursos del centro</h3>
                                    <hr>
                                    <ul class=\"schoolEducationList\">
                                        ";
            // line 202
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Education:schoolEducationList", array("idSchool" => $this->getAttribute(            // line 203
($context["centro"] ?? $this->getContext($context, "centro")), "id", array()))));
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
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
            $context['_seq'] = twig_ensure_traversable(($context["applicantSchool"] ?? $this->getContext($context, "applicantSchool")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($context["a"], "perfilestudiante", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
            if ((twig_length_filter($this->env, ($context["alerts"] ?? $this->getContext($context, "alerts"))) == 0)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? $this->getContext($context, "alerts")));
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
                if ((($context["notRead"] ?? $this->getContext($context, "notRead")) == 0)) {
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
                    echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
                    echo " Alertas sin leer
                                    </div>
                                </div>
                            
                                    ";
                    // line 325
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? $this->getContext($context, "alerts")));
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
($context["centro"] ?? $this->getContext($context, "centro")), "id", array()))));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  627 => 359,  616 => 350,  614 => 349,  606 => 343,  604 => 341,  603 => 340,  597 => 336,  594 => 335,  591 => 334,  580 => 330,  575 => 328,  571 => 327,  568 => 326,  563 => 325,  556 => 321,  544 => 311,  528 => 297,  525 => 296,  512 => 290,  505 => 286,  501 => 285,  498 => 284,  493 => 283,  490 => 282,  474 => 268,  472 => 267,  448 => 245,  436 => 239,  430 => 236,  421 => 232,  416 => 229,  412 => 228,  399 => 217,  397 => 215,  396 => 214,  385 => 205,  383 => 203,  382 => 202,  375 => 197,  373 => 195,  372 => 194,  364 => 188,  362 => 186,  361 => 185,  345 => 171,  343 => 169,  342 => 168,  326 => 155,  319 => 151,  312 => 147,  302 => 140,  295 => 136,  288 => 132,  268 => 114,  258 => 110,  225 => 80,  194 => 52,  189 => 49,  183 => 47,  175 => 45,  173 => 44,  163 => 36,  154 => 33,  150 => 31,  145 => 30,  136 => 27,  132 => 25,  127 => 24,  118 => 21,  114 => 19,  110 => 18,  107 => 17,  98 => 14,  94 => 12,  89 => 11,  80 => 8,  76 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    {% if is_granted('ROLE_SCHOOL') %}
        {% for error in app.session.flashbag.get('offerAssignError') %}
            <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ error }}
            </div>
        {% endfor %}
        {% for success in app.session.flashbag.get('offerAssignSuccess') %}
            <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ success }}
            </div>
        {% endfor %}
        
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
        <section id=\"school\" class=\"row\">
            <button id=\"profile-menu-btn\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                <ul class=\"menu-alumn\">
                    <li class=\"image-user profile-image\">
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                {% if centro.imagen is not null %}
                                    <div class=\"user-img\" style=\"background-image:url({{ url('homepage') }}../uploads/profileavatar/{{ centro.imagen }});\"></div>
                                {% else %}
                                    <img class=\"img-circle\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Avatar perfil candidato\">
                                {% endif %}
                        </a>
                        <h3>
                            <span>
                                {{centro.nombre}}
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
                                Alertas <span class=\"badge\">{{notRead}}</span>
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
                                Tienes ({% if notRead|length > 0 %}{{notRead}}{% else %} 0 {% endif %}) alertas nuevas.
                            </p>
                        </div>
                        {# <h1>Inicio</h1> #}
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
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
                                        <span>{{ centro.nombre }}</span>
                                    </p>
                                    <p>
                                        CIF/NIF:
                                        <span>{{ centro.cif }}</span>
                                    </p>
                                    <p>
                                        Dirección:
                                        <span>{{ centro.direccion }}</span>
                                    </p>
                                </div>

                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                    <p>
                                        Correo electrónico:
                                        <span>{{ centro.email }}</span>
                                    </p>
                                    <p>
                                        Teléfono:
                                        <span>{{ centro.telefono }}</span>
                                    </p>
                                    <p>
                                        Teléfono fijo:
                                        <span>{{ centro.telefono }}</span>
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
                                        {{ render(controller('AppBundle:Education:schoolEducationList',
                                        {'idSchool': centro.id}
                                        ))
                                        }}
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
                                {{ render(controller('AppBundle:School:schoolModify',
                                        {'id': app.user.id}
                                        ))
                                }}
                            </div>
                        </section>
                        <hr>
                        <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                {{ render(controller('AppBundle:Education:educationAdd',
                                {'idSchool': centro.id, 'id': app.user.id}
                                ))
                                }}
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <h3>Lista de cursos del centro</h3>
                                    <hr>
                                    <ul class=\"schoolEducationList\">
                                        {{ render(controller('AppBundle:Education:schoolEducationList',
                                        {'idSchool': centro.id}
                                        ))
                                        }}
                                    </ul>
                                </div>
                            </div>
                        </section>
                        <hr>
                        <section class=\"info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                    {{ render(controller('AppBundle:Default:resetPwd',
                                        { 'idUser': app.user.id }
                                        ))
                                    }}
                                </div>
                            </div>
                        </section>
                    </div>

                    <div id=\"applicants\" class=\"tab-pane fade clearfix\">
                        <div class=\"row\">
                            <div class=\"col-lg-12 col-sm-12\">
                                <h2>Alumnos del centro</h2>
                                <hr>
                                {% for a in applicantSchool %}
                                <div class=\"row school-applicants text-center\">
                                    <div class=\"col-lg-4 col-md-3 col-sm-7 col-xs-6\">
                                        <i class=\"fa fa-user-o\"></i>
                                        <span class=\"nameal\">{{a.perfilestudiante.nombre}} {{a.perfilestudiante.apellidos}}</span>
                                    </div>
                                    <div class=\"col-lg-5 col-md-6 hidden-sm hidden-xs\">
                                        <i class=\"fa fa-book\"></i>
                                        <span class=\"formal\">{{a.formacion.titulo}}</span>
                                    </div>
                                    <div class=\"col-lg-3 col-md-3 col-sm-5 col-xs-6\">
                                        <a class=\"button cta-1\" href=\"{{ path('publicProfile', {'idUser':a.perfilestudiante.idusuario.id, 'idVisitor':app.user.id} ) }}\">Ver Perfil</a>
                                    </div>
                                </div>
                                <hr>
                                    
                                {% endfor %}
                            </div>
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
                                <p class=\"disabled\">
                                    <a href=\"{{ path('check_alert', {'idAlert':a.id}) }}\">
                                        {{a.alertsubject}}
                                    </a>
                                    <span class=\"alert-date\">
                                        <i class=\"fa fa-calendar-o\"></i>
                                        {{a.generationdate|date('Y-m-d')}} 
                                    </span>
                                    Leído <i class=\"fa fa-check color-green\"></i>
                                </p>
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
                                    <p>
                                        <a href=\"{{ path('check_alert', {'idAlert':a.id}) }}\">
                                            {{a.alertsubject}}
                                        </a>
                                        - {{a.generationdate|date('Y-m-d')}}
                                    </p>
                                    <hr>
                                    {% endfor %}
                                {% endif %}
                            {% endif %}
                        </div>
                    </div>

                    <div id=\"offers\" class=\"tab-pane fade clearfix\">
                        {{ render(controller(
                        'AppBundle:Offer:schoolOfferList', { 'idProf': centro.id }
                        ))
                        }}
                    </div>
                </div>
            </div>
        </section>
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
{% endblock %}", ":Frontend/profile:indexProfileSchool.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileSchool.html.twig");
    }
}
