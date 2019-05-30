<?php

/* :Frontend/profile:indexProfileCompany.html.twig */
class __TwigTemplate_a4860fd9302b445d966fd904344d6831c20f201c20bfdd8080a8de66c3db215e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:indexProfileCompany.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:indexProfileCompany.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) {
            // line 6
            echo "        ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 1)) {
                // line 7
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "pwdChanged"), "method"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "profileEditSucc"), "method"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "profileEditErr"), "method"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "offerSucc"), "method"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
                if ( !(null === $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "imagen", array()))) {
                    // line 46
                    echo "                                    <div class=\"user-img\" style=\"background-image:url(";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "imagen", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "nombreempresa", array()), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["notRead"] ?? $this->getContext($context, "notRead")), "html", null, true);
                echo "</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Ver mis ofertas\" data-target=\"#offers\" href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mis_ofertas_empresa", array("idPerf" => $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_oferta", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "idEmpresa" => $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "nombreempresa", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Sector de la empresa:
                                            <span> ";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "sector", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            CIF/NIF:
                                            <span> ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "cif", array()), "html", null, true);
                echo " </span>
                                        </p>
                                        <p>
                                            Dirección:
                                            <span> ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "direccion", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "cp", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "localidad", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "pais", array()), "html", null, true);
                echo " </span>
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Correo electrónico:
                                            <span>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "emailcontacto", array()), "html", null, true);
                echo "</span>
                                        </p>
                                        <p>
                                            Teléfono:
                                            <span>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "telefono", array()), "html", null, true);
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
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                echo "
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <hr>
                                        <h4>Descripción de la actividad empresarial</h4>
                                        <p>
                                            ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "description", array()), "html", null, true);
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
($context["empresa"] ?? $this->getContext($context, "empresa")), "id", array()))));
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                // line 217
                echo "
                                        ";
                // line 218
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
                echo "
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\"> 
                                        ";
                // line 221
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:resetPwd", array("idUser" => $this->getAttribute($this->getAttribute(                // line 222
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))));
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "idEmpresa" => $this->getAttribute(($context["empresa"] ?? $this->getContext($context, "empresa")), "id", array()))));
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
                if ((twig_length_filter($this->env, ($context["alerts"] ?? $this->getContext($context, "alerts"))) == 0)) {
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
                    $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? $this->getContext($context, "alerts")));
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
                    if ((($context["notRead"] ?? $this->getContext($context, "notRead")) == 0)) {
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  637 => 363,  626 => 354,  624 => 353,  621 => 352,  614 => 349,  606 => 343,  603 => 342,  600 => 341,  587 => 335,  578 => 329,  574 => 328,  570 => 326,  565 => 325,  558 => 321,  546 => 311,  530 => 297,  527 => 296,  511 => 287,  502 => 281,  498 => 280,  494 => 278,  489 => 277,  486 => 276,  470 => 262,  468 => 261,  442 => 237,  440 => 235,  439 => 234,  427 => 224,  425 => 222,  424 => 221,  418 => 218,  415 => 217,  413 => 215,  412 => 214,  402 => 206,  400 => 204,  399 => 203,  379 => 185,  377 => 183,  376 => 182,  360 => 169,  350 => 162,  337 => 152,  330 => 148,  315 => 142,  308 => 138,  301 => 134,  294 => 130,  267 => 110,  249 => 95,  237 => 86,  229 => 81,  213 => 68,  195 => 53,  190 => 50,  184 => 48,  176 => 46,  174 => 45,  164 => 37,  155 => 34,  151 => 32,  146 => 31,  137 => 28,  133 => 26,  128 => 25,  119 => 22,  115 => 20,  110 => 19,  101 => 16,  97 => 14,  92 => 13,  83 => 10,  79 => 8,  74 => 7,  71 => 6,  68 => 5,  59 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block title %} FP Emplea - Mi perfil {% endblock %}
{% block body %}
    {% if is_granted('ROLE_COMPANY') %}
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
            {% for flashMessage in app.session.flashbag.get('offerSucc') %}
              <div class=\"alert alert-success alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ flashMessage }}
              </div>
            {% endfor %}
            {% for info in app.session.flashbag.get('info') %}
              <div class=\"alert alert-info alert-dismissable\">
                <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                {{ info }}
              </div>
            {% endfor %}
            <section id=\"company\" class=\"row\">
                <button id=\"profile-menu-btn\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <aside class=\"col-lg-3 col-md-4 col-sm-5 col-xs-10\">
                    <ul class=\"menu-alumn\">
                        <li class=\"image-user profile-image\">
                            <a href=\"\" data-toggle=\"modal\" data-target=\"#change-img\">
                                {% if empresa.imagen is not null %}
                                    <div class=\"user-img\" style=\"background-image:url({{ url('homepage') }}../uploads/profileavatar/{{ empresa.imagen }});\"></div>
                                {% else %}
                                    <img class=\"img-circle\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Avatar perfil candidato\">
                                {% endif %}
                            </a>
                            <h3>
                                <span>
                                    {{ empresa.nombreempresa }}
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
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Modificar\"  data-target=\"#edit\" href=\"{{ path('modificar_empresa', {'id':app.user.id}) }}\">
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
                                    Alertas <span class=\"badge\">{{notRead}}</span>
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Ver mis ofertas\" data-target=\"#offers\" href=\"{{ path('mis_ofertas_empresa', {'idPerf':empresa.id}) }}\">
                                <span class=\"glyphicon glyphicon-briefcase icon-menu\" aria-hidden=\"true\">
                                </span>
                                <span class=\"txt\">
                                    Ver mis ofertas
                                </span>
                            </a>
                        </li>
                        <li class=\"menu-user\">
                            <a data-toggle=\"tab\" data-placement=\"right\" title=\"Crear oferta\" data-target=\"#createOffer\" href=\"{{ path('crear_oferta', {'id':app.user.id, 'idEmpresa':empresa.id}) }}\">
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
                                    Tienes ({% if notRead|length > 0 %}{{notRead}}{% else %} 0 {% endif %}) alertas nuevas.
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
                                            <span>{{ empresa.nombreempresa }}</span>
                                        </p>
                                        <p>
                                            Sector de la empresa:
                                            <span> {{ empresa.sector }} </span>
                                        </p>
                                        <p>
                                            CIF/NIF:
                                            <span> {{empresa.cif}} </span>
                                        </p>
                                        <p>
                                            Dirección:
                                            <span> {{ empresa.direccion }}, {{ empresa.cp }}, {{ empresa.localidad }}, {{ empresa.pais }} </span>
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">
                                        <p>
                                            Correo electrónico:
                                            <span>{{ empresa.emailcontacto }}</span>
                                        </p>
                                        <p>
                                            Teléfono:
                                            <span>{{ empresa.telefono }}</span>
                                        </p>
                                        <p>
                                            Teléfono fijo:
                                            <span> -- </span>
                                        </p>
                                        <p>
                                            Redes Sociales:
                                        </p>
                                        <p>
                                        {{ render(controller('AppBundle:Default:snList', {'idUser': app.user.id})) }}
                                        </p>
                                    </div>
                                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                        <hr>
                                        <h4>Descripción de la actividad empresarial</h4>
                                        <p>
                                            {{empresa.description}}
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
                                        {{ render(controller(
                                        'AppBundle:Company:listadoOfertasCompanyProfile', { 'idPerf': empresa.id }
                                        ))
                                        }}
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
                                        {{ render(controller(
                                        'AppBundle:Company:modificarEmpresa', { 'id': app.user.id }
                                        ))
                                        }}
                                    </div>
                                </div>
                            </section>
                            <hr>
                            <section class=\"edit-profile info col-xs-12 col-sm-12 col-md-12 col-lg-12\">
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
                            </section>
                            <hr>
                        </div>
                        <section id=\"createOffer\" class=\"tab-pane fade clearfix\">
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                <h2>Crear nueva una oferta</h2>
                                <hr>
                                {{ render(controller(
                                'AppBundle:Offer:crearOferta', { 'id': app.user.id, 'idEmpresa': empresa.id, }
                                ))
                                }}
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
                        </section>
                    </div>
                </div>
            </section>
            {% else %}
                <a href=\"{{ path('crear_empresa', {'id':app.user.id}) }}\">Crear perfil de empresa</a>
                <br>
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
    {% endblock %}", ":Frontend/profile:indexProfileCompany.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/indexProfileCompany.html.twig");
    }
}
