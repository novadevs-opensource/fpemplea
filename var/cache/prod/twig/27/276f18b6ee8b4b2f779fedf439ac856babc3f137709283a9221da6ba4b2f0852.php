<?php

/* :Frontend/profile:indexProfileCompany.html.twig */
class __TwigTemplate_78b88895cc0c34c2407dc4b8eb5c5cede8b4ea171984bc849e233e5f051e05e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/profile:indexProfileCompany.html.twig", 2);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " FP Emplea - Mi perfil ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) {
            // line 6
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 1)) {
                // line 7
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "pwdChanged"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 8
                    echo "              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 10
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 14
                    echo "              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 16
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 20
                    echo "              <div class=\"alert alert-danger alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "offerSucc"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 26
                    echo "              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 28
                    echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                    // line 32
                    echo "              <div class=\"alert alert-info alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["info"], "html", null, true);
                    echo "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            <section id=\"company\" class=\"row\">
                <button id=\"profile-menu-btn\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                    <ul class=\"menu-alumn\">
                        <li class=\"image-user profile-image\">
                            <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                ";
                // line 45
                if ( !(null === $this->getAttribute(($context["empresa"] ?? null), "imagen", array()))) {
                    // line 46
                    echo "                                    <div class=\"user-img\" style=\"background-image:url(";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "imagen", array()), "html", null, true);
                    echo ");\"></div>
                                ";
                } else {
                    // line 48
                    echo "                                    <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
                                ";
                }
                // line 50
                echo "                            </a>
                            <h3>
                                <span>
                                    ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "nombreempresa", array()), "html", null, true);
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
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Modificar\"  data-target=\"#edit\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-pencil icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Modificar
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Alertas\" data-target=\"#alerts\">
                                <span class=\"glyphicon glyphicon-envelope icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Alertas <span class=\"badge\">";
                // line 81
                echo twig_escape_filter($this->env, ($context["notRead"] ?? null), "html", null, true);
                echo "</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Ver mis ofertas\" data-target=\"#offers\" href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mis_ofertas_empresa", array("idPerf" => $this->getAttribute(($context["empresa"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-briefcase icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Ver mis ofertas
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Crear oferta\" data-target=\"#createOffer\" href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_oferta", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "idEmpresa" => $this->getAttribute(($context["empresa"] ?? null), "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-plus icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Crear Oferta
                                </span>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class=\"col-lg-9 col-md-8 col-sm-12 col-xs-12\">
                    <div class=\"tab-content clearfix\">
                        <div id=\"home\" class=\"tab-pane fade in active\">
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
                                           Datos empresa
                                        </h3>
                                        <hr>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Nombre empresa:
                                            <span>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "nombreempresa", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Sector de la empresa:
                                            <span> ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "sector", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            CIF/NIF:
                                            <span> ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "cif", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            Dirección:
                                            <span> ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "direccion", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "cp", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "localidad", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "pais", array()), "html", null, true);
                echo " </span>
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Correo electrónico:
                                            <span>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "emailcontacto", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Teléfono:
                                            <span>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "telefono", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Teléfono fijo:
                                            <span> -- </span>
                                        </p>
                                        <p>
                                            Redes Sociales:
                                        </p>
                                        <p>
                                        ";
                // line 162
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                echo "
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <hr>
                                        <h4>Descripción de la actividad empresarial</h4>
                                        <p>
                                            ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "description", array()), "html", null, true);
                echo "
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div id=\"offers\" class=\"tab-pane fade\">
                            <section id=\"mod_b6\" class=\"clearfix\">
                                <div class=\"col-lg-12 col-md-12 col-sm-12\">
                                    <h2>Mis ofertas</h2>
                                    <hr>
                                </div>
                                <div class=\"col-lg-12 col-md-12 col-sm-12 company-offers\">
                                        ";
                // line 182
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Company:listadoOfertasCompanyProfile", array("idPerf" => $this->getAttribute(                // line 183
($context["empresa"] ?? null), "id", array()))));
                // line 185
                echo "
                                </div>
                            </section>
                        </div>
                        <div id=\"edit\" class=\"tab-pane fade\">
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\"> 
                                <h2>
                                   Modificar perfil
                                </h2>
                                <hr>
                            </div>
                            <section class=\"edit-profile info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <h3>
                                           Datos empresa
                                            <hr>
                                        </h3>
                                        ";
                // line 203
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Company:modificarEmpresa", array("id" => $this->getAttribute($this->getAttribute(                // line 204
($context["app"] ?? null), "user", array()), "id", array()))));
                // line 206
                echo "
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"edit-profile info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                        ";
                // line 214
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snAdd", array("idUser" => $this->getAttribute($this->getAttribute(                // line 215
($context["app"] ?? null), "user", array()), "id", array()))));
                // line 217
                echo "
                                        ";
                // line 218
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))));
                echo "
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\"> 
                                        ";
                // line 221
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:resetPwd", array("idUser" => $this->getAttribute($this->getAttribute(                // line 222
($context["app"] ?? null), "user", array()), "id", array()))));
                // line 224
                echo "
                                    </div>
                                </div>
                            </section>
                            <hr>
                        </div>
                        <section id=\"createOffer\" class=\"tab-pane fade clearfix\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <h2>Crear nueva una oferta</h2>
                                <hr>
                                ";
                // line 234
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Offer:crearOferta", array("id" => $this->getAttribute($this->getAttribute(                // line 235
($context["app"] ?? null), "user", array()), "id", array()), "idEmpresa" => $this->getAttribute(($context["empresa"] ?? null), "id", array()))));
                // line 237
                echo "
                            </div>
                            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                <hr>
                            </div>
                        </section>
                        <section id=\"alerts\" class=\"tab-pane fade clearfix\">
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
                                          <b>Info:</b> Recibirás los mensajes en tu correo electrónico.
                                    </div>
                                </div>
                                
                                ";
                // line 261
                if ((twig_length_filter($this->env, ($context["alerts"] ?? null)) == 0)) {
                    // line 262
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
                    // line 276
                    echo "                                    <hr>
                                    ";
                    // line 277
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                        if (($this->getAttribute($context["a"], "status", array()) == 1)) {
                            // line 278
                            echo "                                    <div class=\"row disabled\">
                                        <div class=\"col-lg-9 col-md-8 col-sm-9 col-xs-6\">
                                            <a href=\"";
                            // line 280
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_alert", array("idAlert" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                            echo "\">
                                                ";
                            // line 281
                            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alertsubject", array()), "html", null, true);
                            echo "
                                            </a>
                                        </div>
                                        <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-4\">
                                            <span class=\"alert-date\">
                                                <i class=\"fa fa-calendar-o\"></i>
                                                ";
                            // line 287
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
                    // line 296
                    echo "                                    ";
                    if ((($context["notRead"] ?? null) == 0)) {
                        // line 297
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
                        // line 311
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
                                echo "                                        <div class=\"row\">
                                            <div class=\"col-lg-9 col-md-8 col-sm-9 col-xs-12\">
                                                <a href=\"";
                                // line 328
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("check_alert", array("idAlert" => $this->getAttribute($context["a"], "id", array()))), "html", null, true);
                                echo "\">
                                                    ";
                                // line 329
                                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "alertsubject", array()), "html", null, true);
                                echo "
                                                </a>
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-3 col-xs-12\">
                                                <span class=\"alert-date\">
                                                    <i class=\"fa fa-calendar-o\"></i>
                                                    ";
                                // line 335
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
                        // line 341
                        echo "                                    ";
                    }
                    // line 342
                    echo "                                ";
                }
                // line 343
                echo "                            </div>
                        </section>
                    </div>
                </div>
            </section>
            ";
            } else {
                // line 349
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">Crear perfil de empresa</a>
                <br>
            ";
            }
            // line 352
            echo "        ";
        }
        // line 353
        echo "        ";
        // line 354
        echo "      <div id=\"change-img\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Selecciona una imagen para tu perfil</h4>
            </div>
            <div class=\"modal-body\">
     
              ";
        // line 363
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
        return ":Frontend/profile:indexProfileCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 363,  596 => 354,  594 => 353,  591 => 352,  584 => 349,  576 => 343,  573 => 342,  570 => 341,  557 => 335,  548 => 329,  544 => 328,  540 => 326,  535 => 325,  528 => 321,  516 => 311,  500 => 297,  497 => 296,  481 => 287,  472 => 281,  468 => 280,  464 => 278,  459 => 277,  456 => 276,  440 => 262,  438 => 261,  412 => 237,  410 => 235,  409 => 234,  397 => 224,  395 => 222,  394 => 221,  388 => 218,  385 => 217,  383 => 215,  382 => 214,  372 => 206,  370 => 204,  369 => 203,  349 => 185,  347 => 183,  346 => 182,  330 => 169,  320 => 162,  307 => 152,  300 => 148,  285 => 142,  278 => 138,  271 => 134,  264 => 130,  237 => 110,  219 => 95,  207 => 86,  199 => 81,  183 => 68,  165 => 53,  160 => 50,  154 => 48,  146 => 46,  144 => 45,  134 => 37,  125 => 34,  121 => 32,  116 => 31,  107 => 28,  103 => 26,  98 => 25,  89 => 22,  85 => 20,  80 => 19,  71 => 16,  67 => 14,  62 => 13,  53 => 10,  49 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:indexProfileCompany.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileCompany.html.twig");
    }
}
