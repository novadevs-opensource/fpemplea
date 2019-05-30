<?php

/* :Frontend:listado.html.twig */
class __TwigTemplate_30d4949c76ea3180c9700615667497121b0081147fb4b37348b5de4e9f4236fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:listado.html.twig", 1);
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
        echo " FP Emplea ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) {
            // line 5
            echo "        <section class=\"container\">
            <div class=\"row\">
                <div class=\"\" id=\"mod_l1\">
                    <h2>
                        <strong>";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["res"] ?? null)), "html", null, true);
            echo "</strong>
                        <span>Empresas</span> 
                        registradas
                    </h2>
                </div>
            </div>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
                // line 16
                echo "            <article class=\"row mod_l3\">
                <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-12 avatar-wrapper\">
                    ";
                // line 18
                if ( !(null === $this->getAttribute($context["empresa"], "imagen", array()))) {
                    // line 19
                    echo "                        <!-- <img class=\"img-responsive avatar\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\"> -->
                        <div class=\"avatar\" style=\"background-image:url(";
                    // line 20
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "imagen", array()), "html", null, true);
                    echo ");\"></div>
                    ";
                } else {
                    // line 22
                    echo "                        <img class=\"img-responsive avatar\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Placeholder perfil candidato\">
                    ";
                }
                // line 24
                echo "                </div>
               <div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 \">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                            <span>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombreempresa", array()), "html", null, true);
                echo "</span>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                <span> 
                                    ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "sector", array()), "html", null, true);
                echo "
                                </span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["empresa"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                        <button type=\"button\" class=\"cta cta-1\">
                            <span class=\"button-content\">
                                Visitar perfil
                            </span>
                        </button>
                    </a>
                    <button type=\"button\" class=\"cta cta-2\" data-toggle=\"modal\" data-target=\"#companyContactModal";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
                echo "\">
                        <span class=\"button-content\">
                            Contactar
                        </span>    
                    </button>
                </div>
            </article>
      <!--       <article class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 item\">
                    <div class=\"profile-image col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                        ";
                // line 55
                if ( !(null === $this->getAttribute($context["empresa"], "imagen", array()))) {
                    // line 56
                    echo "                            <img class=\"img-circle\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
                        ";
                } else {
                    // line 58
                    echo "                            <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
                        ";
                }
                // line 60
                echo "                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-right\">
                        <h3>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombreempresa", array()), "html", null, true);
                echo "</h3>
                        <p>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "sector", array()), "html", null, true);
                echo "</p>
                        <p class=\"descof\">
                           ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "description", array()), "html", null, true);
                echo "
                        </p>
                        <div class=\"contact-area clearfix\">
                            <div class=\"buttons\">
                                <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["empresa"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                    <button type=\"button\" class=\"button cta-1\">Ver perfil completo</button>
                                </a>
                                <button type=\"button\" class=\"button cta-2\" data-toggle=\"modal\" data-target=\"#companyContactModal";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
                echo "\">
                                Contactar
                                </button>
                            </div>
                            ";
                // line 76
                if (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "applicant_search"))) {
                    echo " 
                            ";
                } else {
                    // line 78
                    echo "                            <div class=\"social-networks\">
                                ";
                    // line 79
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:snList", array("idUser" => $this->getAttribute(                    // line 80
$context["empresa"], "idusuario", array()))));
                    // line 82
                    echo "
                            </div>
                            ";
                }
                // line 85
                echo "                        </div>
                    </div>
                 </div>
                <hr> -->
            </article>
            <!-- <hr> -->
            <!-- Modal -->
            <div id=\"companyContactModal";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Contacta con ";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "nombreempresa", array()), "html", null, true);
                echo "</h4>
                        </div>
                        <div class=\"modal-body\">
                            ";
                // line 101
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:contactMail", array("idUser" => $this->getAttribute($this->getAttribute(                // line 102
$context["empresa"], "idusuario", array()), "id", array()), "senderId" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "senderMail" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "email", array()))));
                // line 104
                echo "
                        </div>
                        <div class=\"modal-footer\">
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                            &laquo;
                        </a>
                    </li>
                    ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 120
                echo "                        ";
                if (($context["i"] == ($context["current"] ?? null))) {
                    // line 121
                    echo "                            <li>
                                <a style=\"font-weight:600;\" href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                                    ";
                    // line 123
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "
                                </a>
                            </li>
                        ";
                } else {
                    // line 127
                    echo "                            <li>
                                <a href=\"";
                    // line 128
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                                    ";
                    // line 129
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "
                                </a>
                            </li>
                        ";
                }
                // line 133
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                    <li>
                        <a href=";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => ($context["pagesCount"] ?? null), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo ">
                            &raquo;
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 142
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes")) {
            // line 143
            echo "        <section class=\"container\">
                <div class=\"row\">
                    ";
            // line 145
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                // line 146
                echo "                    <div class=\"\" id=\"mod_l1\">
                        <h2>
                            <strong>";
                // line 148
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["res"] ?? null)), "html", null, true);
                echo "</strong>
                            <span>Aspirantes</span> 
                            registrados
                        </h2>
                    </div>
                    ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL"))) {
                // line 154
                echo "                    <div class=\"\" id=\"mod_l1\">
                        <h2>
                            <strong>";
                // line 156
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["res"] ?? null)), "html", null, true);
                echo "</strong>
                            <span>Aspirantes</span> 
                            registrados
                        </h2>
                    </div>
                    <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" id=\"mod_l2\">

                        <a class=\"cta cta-1\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse-search\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                            <span class=\"button-content\">
                                Agregar filtro
                            </span>
                        </a>
                        <div class=\"collapse\" id=\"collapse-search\">
                            <hr>
                            <!-- <div class=\"well\"> -->
                                <form action=\"";
                // line 171
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("applicant_search");
                echo "\" method=\"post\" class=\"clearfix\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label for=\"type\">Filtro por formación</label>
                                        <select name=\"education\" id=\"findEducation\" class=\"form-control chosen-select\">
                                            <option value=\"\" selected>Selecciona una opción</option>
                                            ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["education"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 177
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "titulo", array()), "html", null, true);
                    echo "</option>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "                                        </select>
                                    </div>
                                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                        <hr>
                                        <button type=\"submit\" class=\"cta cta-2 search\" value=\"Filtrar\">
                                            <span class=\"button-content\">
                                                Buscar
                                                <i class=\"fa fa-search icon\"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            <!-- </div> -->
                        </div>
                    </div>
                    ";
            }
            // line 195
            echo "                </div>
                ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
                // line 197
                echo "                <article class=\"row mod_l3\">
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-12 avatar-wrapper\">
                        ";
                // line 199
                if ( !(null === $this->getAttribute($context["estudiante"], "imagen", array()))) {
                    // line 200
                    echo "                            <!-- <img class=\"img-responsive avatar\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\"> -->
                            <div class=\"avatar\" style=\"background-image:url(";
                    // line 201
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "imagen", array()), "html", null, true);
                    echo ");\"></div>
                        ";
                } else {
                    // line 203
                    echo "                            <img class=\"img-responsive avatar\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Placeholder perfil candidato\">
                        ";
                }
                // line 205
                echo "                    </div>
                   <div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "apellidos", array()), "html", null, true);
                echo "</span>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                ";
                // line 212
                if ((twig_length_filter($this->env, $this->getAttribute($context["estudiante"], "localidad", array())) > 0)) {
                    // line 213
                    echo "                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        ";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "localidad", array()), "html", null, true);
                    echo "
                                    </span>
                                ";
                }
                // line 218
                echo "                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                        <a href=\"";
                // line 222
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["estudiante"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                            <button type=\"button\" class=\"cta cta-1\">
                                <span class=\"button-content\">
                                    Visitar perfil
                                </span>
                            </button>
                        </a>
                        <button type=\"button\" class=\"cta cta-2\" data-toggle=\"modal\" data-target=\"#applicantModal";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["estudiante"], "idusuario", array()), "id", array()), "html", null, true);
                echo "\">
                            <span class=\"button-content\">
                                Contactar
                            </span>    
                        </button>
                    </div>
                </article>
                <div id=\"applicantModal";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["estudiante"], "idusuario", array()), "id", array()), "html", null, true);
                echo "\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Envía un mensaje a ";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nombre", array()), "html", null, true);
                echo "</h4>
                            </div>
                            <div class=\"modal-body\">
                                ";
                // line 245
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:contactMail", array("idUser" => $this->getAttribute($this->getAttribute(                // line 249
$context["estudiante"], "idusuario", array()), "id", array()), "senderId" => $this->getAttribute($this->getAttribute(                // line 250
($context["app"] ?? null), "user", array()), "id", array()), "senderMail" => $this->getAttribute($this->getAttribute(                // line 251
($context["app"] ?? null), "user", array()), "email", array()))));
                // line 255
                echo "
                            </div>
                            <div class=\"modal-footer\">
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "                ";
            if ((twig_length_filter($this->env, ($context["res"] ?? null)) != 0)) {
                // line 264
                echo "                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination\">
                        <li><a href=\"";
                // line 266
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">&laquo;</a></li>
                        ";
                // line 267
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 268
                    echo "                            ";
                    if (($context["i"] == ($context["current"] ?? null))) {
                        // line 269
                        echo "                                <li>
                                    <a style=\"font-weight:600;\" href=\"";
                        // line 270
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                        ";
                        // line 271
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "
                                    </a>
                                </li>
                            ";
                    } else {
                        // line 275
                        echo "                                <li>
                                    <a href=\"";
                        // line 276
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                        ";
                        // line 277
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "
                                    </a>
                                </li>
                            ";
                    }
                    // line 281
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 282
                echo "                        <li>
                            <a href=";
                // line 283
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => ($context["pagesCount"] ?? null), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo ">
                                &raquo;
                            </a>
                        </li>
                    </ul>
                </nav>
                ";
            }
            // line 290
            echo "        </section>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 291
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) {
            // line 292
            echo "        <section class=\"container\">
            <div class=\"row\">
                <div class=\"\" id=\"mod_l1\">
                    <h2>
                        <strong>";
            // line 296
            echo "</strong>
                        <span>Ofertas</span> 
                        registradas
                    </h2>
                </div>
                <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" id=\"mod_l2\">
                    <a class=\"cta cta-1\" role=\"button\" data-toggle=\"collapse\" href=\"#collapse-search\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                        <span class=\"button-content\">
                            Agregar filtro
                        </span>
                    </a>
                    <div class=\"collapse\" id=\"collapse-search\">
                        <hr>
                        <!-- <div class=\"well\"> -->
                            <form action=\"";
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("offer_search");
            echo "\" method=\"get\" class=\"clearfix\">
                                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <label for=\"type\">Filtro por categorías</label>
                                    <select name=\"type\" id=\"findCategory\" class=\"form-control chosen-select\">
                                        <option value=\"\" selected>Selecciona una opción</option>
                                        ";
            // line 315
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 316
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombre", array()), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "                                    </select>
                                </div>
                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                    <hr>
                                    <button type=\"submit\" class=\"cta cta-2 search\" value=\"Filtrar\">
                                        <span class=\"button-content\">
                                            Buscar
                                            <i class=\"fa fa-search icon\"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        <!-- </div> -->
                    </div>
                </div>
               <!--  <form action=\"";
            // line 333
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("offer_search");
            echo "\" method=\"get\" class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                    
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 left\">
                        <p>
                            <label for=\"type\">Filtro por categorías</label>
                            <select name=\"type\" id=\"findCategory\" class=\"form-control chosen-select\">
                                <option value=\"\" selected>Selecciona una opción</option>
                                ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 341
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nombre", array()), "html", null, true);
                echo "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "                            </select>
                        </p>
                        <p>
                            <button type=\"submit\" class=\"button cta-2\" value=\"Filtrar\">
                                <span>buscar</span>
                                <i class=\"fa fa-search\"></i>
                            </button>
                        </p>
                    </div>
                </form> -->
            </div>
            ";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                if (((($this->getAttribute($context["oferta"], "validated", array()) == true) && ($this->getAttribute($context["oferta"], "active", array()) == true)) && ($this->getAttribute($context["oferta"], "finished", array()) == false))) {
                    // line 355
                    echo "            <article class=\"row mod_l3\">
                   <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>";
                    // line 359
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "title", array()), "html", null, true);
                    echo "</span>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                ";
                    // line 362
                    if (($this->getAttribute($this->getAttribute($context["oferta"], "tipo", array()), "id", array()) == 1)) {
                        // line 363
                        echo "                                    <span>Prácticas</span>
                                ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 364
$context["oferta"], "tipo", array()), "id", array()) == 0)) {
                        // line 365
                        echo "                                    <span>Empleo</span>
                                ";
                    }
                    // line 367
                    echo "                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                ";
                    // line 369
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array())) > 0)) {
                        // line 370
                        echo "                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        ";
                        // line 372
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array()), "html", null, true);
                        echo "
                                    </span>
                                ";
                    }
                    // line 375
                    echo "                            </div>
                            <div class=\"col-lg-2 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                ";
                    // line 377
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                        // line 378
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                        <button type=\"button\" class=\"cta cta-1\">
                                             <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                ";
                    } else {
                        // line 386
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                        echo "\">
                                        <button type=\"button\" class=\"cta cta-1 offer\">
                                            <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                ";
                    }
                    // line 394
                    echo "                            </div>
                           <!--  <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>";
                    // line 396
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "categoria", array()), "nombre", array()), "html", null, true);
                    echo "</span>
                            </div> -->
                        </div>
                    </div>
                   <!--  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                ";
                    // line 403
                    if ($this->getAttribute($context["oferta"], "idempresa", array())) {
                        // line 404
                        echo "                                    <span> 
                                        <i class=\"fa fa-building\"></i> 
                                        ";
                        // line 406
                        echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "idempresa", array()), "html", null, true);
                        echo "
                                    </span>
                                ";
                    }
                    // line 409
                    echo "                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                ";
                    // line 411
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array())) > 0)) {
                        // line 412
                        echo "                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        ";
                        // line 414
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array()), "html", null, true);
                        echo "
                                    </span>
                                ";
                    }
                    // line 417
                    echo "                            </div>
                            <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                ";
                    // line 419
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                        // line 420
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                        <button type=\"button\" class=\"cta cta-1\">
                                             <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                ";
                    } else {
                        // line 428
                        echo "                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                        echo "\">
                                        <button type=\"button\" class=\"cta cta-1 offer\">
                                            <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                ";
                    }
                    // line 436
                    echo "                            </div> 
                        </div>
                    </div>-->
                </article>
        <!--     <article class=\"row\">
                <hr>
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 item\">
                    <h3>
                        ";
                    // line 444
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "title", array()), "html", null, true);
                    echo "
                    </h3>
                    <hr>
                    <p>
                        ";
                    // line 448
                    if ($this->getAttribute($context["oferta"], "idempresa", array())) {
                        // line 449
                        echo "                            Empresa: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "idempresa", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 451
                    echo "                    </p>
                    <p>
                        Sector: <span>";
                    // line 453
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "categoria", array()), "nombre", array()), "html", null, true);
                    echo "</span>
                    </p>
                    <p>
                        ";
                    // line 456
                    if (($this->getAttribute($this->getAttribute($context["oferta"], "tipo", array()), "id", array()) == 1)) {
                        // line 457
                        echo "                            <span>Prácticas</span>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 458
$context["oferta"], "tipo", array()), "id", array()) == 0)) {
                        // line 459
                        echo "                            <span>Empleo</span>
                        ";
                    }
                    // line 461
                    echo "                    </p>
                    <p>
                        ";
                    // line 463
                    echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "descripcion", array()), "html", null, true);
                    echo "
                    </p>
                    ";
                    // line 465
                    if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                        // line 466
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                            <button type=\"button\" class=\"button cta-1\"> Ver oferta</button>
                        </a>
                    ";
                    } else {
                        // line 470
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                        echo "\">
                            <button type=\"button\" class=\"button cta-1\"> Ver oferta</button>
                        </a>
                    ";
                    }
                    // line 474
                    echo "                </div>
            </article> -->
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 477
            echo "            ";
            if ((twig_length_filter($this->env, ($context["res"] ?? null)) != 0)) {
                // line 478
                echo "            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    <li><a href=\"";
                // line 480
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">&laquo;</a></li>
                    ";
                // line 481
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 482
                    echo "                        ";
                    if (($context["i"] == ($context["current"] ?? null))) {
                        // line 483
                        echo "                            <li><a style=\"font-weight:600;\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                        ";
                    } else {
                        // line 485
                        echo "                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                        ";
                    }
                    // line 487
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 488
                echo "                    <li><a href=";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => ($context["pagesCount"] ?? null), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo ">&raquo;</a></li>
                </ul>
            </nav>
            ";
            }
            // line 492
            echo "        </section>
        <!--LISTADOS DE OFERTAS DE PERFIL Y CANDIDATO-->
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 494
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "mis_ofertas_empresa")) {
            // line 495
            echo "        <h1>
            Mis ofertas
        </h1>
        <h2>
            <a href=\"";
            // line 499
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Volver a Inicio</a>
        </h2>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Tipo de oferta</th>
                    <th>Campo</th>
                    <th>Empresa</th>
                    <th>Descripción</th>
                    <th>Requisitos</th>
                    <th>Vacantes</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 514
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ofertas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                // line 515
                echo "                    <tr>
                        ";
                // line 516
                if (($this->getAttribute($context["oferta"], "tipo", array()) == 1)) {
                    // line 517
                    echo "                            <td>Prácticas</td>
                        ";
                } elseif (($this->getAttribute(                // line 518
$context["oferta"], "tipo", array()) == 0)) {
                    // line 519
                    echo "                            <td>Empleo</td>
                        ";
                }
                // line 521
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "categoria", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 522
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "nombreempresa", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 523
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "descripcion", array()), "html", null, true);
                echo "</td>
                        <td>--</td>
                        <td>";
                // line 525
                echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "vacantes", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 527
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modificar_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                echo "\">Editar</a><br>
                            <a href=\"";
                // line 528
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                echo "\">Ver</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            echo "            </tbody>
        </table>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 534
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "mis_ofertas_candidato")) {
            // line 535
            echo "        <h1>
            Mis ofertas
        </h1>
        <h2>
            <a href=\"";
            // line 539
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Volver a Inicio</a>
        </h2>
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Tipo de oferta</th>
                    <th>Campo</th>
                    <th>Empresa</th>
                    <th>Descripción</th>
                    <th>Requisitos</th>
                    <th>Vacantes</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 554
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["relacionOE"]);
            foreach ($context['_seq'] as $context["_key"] => $context["relacionOE"]) {
                // line 555
                echo "                    <tr>
                        ";
                // line 556
                if (($this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "tipo", array()) == 1)) {
                    // line 557
                    echo "                            <td>Prácticas</td>
                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 558
$context["relacionOE"], "ofertasid", array()), "tipo", array()) == 0)) {
                    // line 559
                    echo "                            <td>Empleo</td>
                        ";
                }
                // line 561
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "categoria", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 562
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "idempresa", array()), "nombreempresa", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 563
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "descripcion", array()), "html", null, true);
                echo "</td>
                        <td>--</td>
                        <td>";
                // line 565
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "vacantes", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 567
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "id", array()), "idUser" => $this->getAttribute(($context["estudiante"] ?? null), "id", array()))), "html", null, true);
                echo "\">Ver</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relacionOE'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 571
            echo "            </tbody>
        </table>
        <!--LISTADO CURSOS CENTRO-->
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 574
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "list_education")) {
            // line 575
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend:listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1115 => 575,  1113 => 574,  1108 => 571,  1098 => 567,  1093 => 565,  1088 => 563,  1084 => 562,  1079 => 561,  1075 => 559,  1073 => 558,  1070 => 557,  1068 => 556,  1065 => 555,  1061 => 554,  1043 => 539,  1037 => 535,  1035 => 534,  1031 => 532,  1021 => 528,  1017 => 527,  1012 => 525,  1007 => 523,  1003 => 522,  998 => 521,  994 => 519,  992 => 518,  989 => 517,  987 => 516,  984 => 515,  980 => 514,  962 => 499,  956 => 495,  954 => 494,  950 => 492,  942 => 488,  936 => 487,  928 => 485,  920 => 483,  917 => 482,  913 => 481,  909 => 480,  905 => 478,  902 => 477,  893 => 474,  885 => 470,  877 => 466,  875 => 465,  870 => 463,  866 => 461,  862 => 459,  860 => 458,  857 => 457,  855 => 456,  849 => 453,  845 => 451,  839 => 449,  837 => 448,  830 => 444,  820 => 436,  808 => 428,  796 => 420,  794 => 419,  790 => 417,  784 => 414,  780 => 412,  778 => 411,  774 => 409,  768 => 406,  764 => 404,  762 => 403,  752 => 396,  748 => 394,  736 => 386,  724 => 378,  722 => 377,  718 => 375,  712 => 372,  708 => 370,  706 => 369,  702 => 367,  698 => 365,  696 => 364,  693 => 363,  691 => 362,  685 => 359,  679 => 355,  674 => 354,  661 => 343,  650 => 341,  646 => 340,  636 => 333,  619 => 318,  608 => 316,  604 => 315,  596 => 310,  580 => 296,  574 => 292,  572 => 291,  569 => 290,  559 => 283,  556 => 282,  550 => 281,  543 => 277,  539 => 276,  536 => 275,  529 => 271,  525 => 270,  522 => 269,  519 => 268,  515 => 267,  511 => 266,  507 => 264,  504 => 263,  491 => 255,  489 => 251,  488 => 250,  487 => 249,  486 => 245,  480 => 242,  471 => 236,  461 => 229,  451 => 222,  445 => 218,  439 => 215,  435 => 213,  433 => 212,  425 => 209,  419 => 205,  413 => 203,  406 => 201,  399 => 200,  397 => 199,  393 => 197,  389 => 196,  386 => 195,  368 => 179,  357 => 177,  353 => 176,  345 => 171,  327 => 156,  323 => 154,  314 => 148,  310 => 146,  308 => 145,  304 => 143,  302 => 142,  292 => 135,  289 => 134,  283 => 133,  276 => 129,  272 => 128,  269 => 127,  262 => 123,  258 => 122,  255 => 121,  252 => 120,  248 => 119,  241 => 115,  236 => 112,  223 => 104,  221 => 102,  220 => 101,  214 => 98,  205 => 92,  196 => 85,  191 => 82,  189 => 80,  188 => 79,  185 => 78,  180 => 76,  173 => 72,  167 => 69,  160 => 65,  155 => 63,  151 => 62,  147 => 60,  141 => 58,  133 => 56,  131 => 55,  118 => 45,  108 => 38,  99 => 32,  92 => 28,  86 => 24,  80 => 22,  73 => 20,  66 => 19,  64 => 18,  60 => 16,  56 => 15,  47 => 9,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:listado.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/listado.html.twig");
    }
}
