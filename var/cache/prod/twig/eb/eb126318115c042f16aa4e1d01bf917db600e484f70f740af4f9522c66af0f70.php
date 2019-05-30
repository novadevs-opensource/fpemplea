<?php

/* :Frontend:searchResult.html.twig */
class __TwigTemplate_7823180745da68499e0c628338b4edaf1ea2dc8d4ea14bf8e5e852332871506f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:searchResult.html.twig", 1);
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
        echo " FP Emplea - Resultado de la búsqueda";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "applicant_search")) {
            // line 5
            echo "        <!-- <section class=\"applicant-list\"> -->
            <div class=\"container\">
                <div class=\"row\">
                    ";
            // line 8
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL"))) {
                // line 9
                echo "                    <div id=\"mod_l1\">
                        <h2>
                            <strong>";
                // line 11
                echo twig_escape_filter($this->env, ($context["registeredApplicants"] ?? null), "html", null, true);
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
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("applicant_search");
                echo "\" method=\"post\" class=\"clearfix\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label for=\"type\">Filtro por formación</label>
                                        <select name=\"education\" id=\"findEducation\" class=\"form-control chosen-select\">
                                            <option value=\"\" selected>Selecciona una opción</option>
                                            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["education"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    // line 31
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
                // line 33
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
            // line 49
            echo "                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" id=\"mod_s1\">
                        ";
            // line 52
            if ((twig_length_filter($this->env, ($context["res"] ?? null)) > 0)) {
                // line 53
                echo "                            <!-- <div class=\"applicant-list container-fluid\"> -->
                                <div class=\"row\">
                                    <h2>Resultado de la búsqueda:</h2>
                                    <h3>
                                        <strong>";
                // line 57
                echo twig_escape_filter($this->env, ($context["totalItems"] ?? null), "html", null, true);
                echo "</strong> 
                                        <span>Aspirantes</span> 
                                    </h3>
                                </div>
                                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["applicant"]) {
                    // line 62
                    echo "                                    <article class=\"row mod_l3\">
                                        <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-12 avatar-wrapper\">
                                            ";
                    // line 64
                    if ( !(null === $this->getAttribute($context["applicant"], "imagen", array()))) {
                        // line 65
                        echo "                                                <!-- <img class=\"img-responsive avatar\" src=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                        echo "../uploads/profileavatar/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "imagen", array()), "html", null, true);
                        echo "\" alt=\"Avatar perfil candidato\"> -->
                                                <div class=\"avatar\" style=\"background-image:url(";
                        // line 66
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                        echo "../uploads/profileavatar/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "imagen", array()), "html", null, true);
                        echo ");\"></div>
                                            ";
                    } else {
                        // line 68
                        echo "                                                <img class=\"img-responsive avatar\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                        echo "\" alt=\"Placeholder perfil candidato\">
                                            ";
                    }
                    // line 70
                    echo "                                        </div>
                                       <div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 \">
                                            <div class=\"row\">
                                                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                                    <span>";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "nombre", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "apellidos", array()), "html", null, true);
                    echo "</span>
                                                </div>
                                                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                                    ";
                    // line 77
                    if ((twig_length_filter($this->env, $this->getAttribute($context["applicant"], "localidad", array())) > 0)) {
                        // line 78
                        echo "                                                        <span> 
                                                            <i class=\"fa fa-map-marker\"></i> 
                                                            ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["applicant"], "localidad", array()), "html", null, true);
                        echo "
                                                        </span>
                                                    ";
                    }
                    // line 83
                    echo "                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                            <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["applicant"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                    echo "\">
                                                <button type=\"button\" class=\"cta cta-1\">
                                                    <span class=\"button-content\">
                                                        Visitar perfil
                                                    </span>
                                                </button>
                                            </a>
                                            <button type=\"button\" class=\"cta cta-2\" data-toggle=\"modal\" data-target=\"#applicantModal";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["applicant"], "idusuario", array()), "id", array()), "html", null, true);
                    echo "\">
                                                <span class=\"button-content\">
                                                    Contactar
                                                </span> 
                                            </button>
                                        </div>
                                    </article>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['applicant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "                            <!-- </div> -->
                            ";
                // line 103
                if ((twig_length_filter($this->env, ($context["res"] ?? null)) != 0)) {
                    // line 104
                    echo "                                <nav aria-label=\"Page navigation\">
                                    <ul class=\"pagination\">
                                        ";
                    // line 106
                    if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))) {
                        // line 107
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
                        echo "\">&laquo;</a></li>
                                        ";
                    } else {
                        // line 109
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
                        echo "\">&laquo;</a></li>
                                        ";
                    }
                    // line 111
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                                            ";
                        if (($context["i"] == ($context["current"] ?? null))) {
                            // line 113
                            echo "                                                <li>
                                                ";
                            // line 114
                            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))) {
                                // line 115
                                echo "                                                    <a style=\"font-weight:600;\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
                                echo "\">
                                                        ";
                                // line 116
                                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                echo "
                                                    </a>
                                                ";
                            } else {
                                // line 119
                                echo "                                                    <a style=\"font-weight:600;\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
                                echo "\">
                                                        ";
                                // line 120
                                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                echo "
                                                    </a>
                                                ";
                            }
                            // line 123
                            echo "                                                </li>
                                            ";
                        } else {
                            // line 125
                            echo "                                                <li>
                                                ";
                            // line 126
                            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))) {
                                // line 127
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
                                echo "\">
                                                        ";
                                // line 128
                                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                echo "
                                                    </a>
                                                ";
                            } else {
                                // line 131
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
                                echo "\">
                                                        ";
                                // line 132
                                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                echo "
                                                    </a>
                                                ";
                            }
                            // line 135
                            echo "                                                </li>
                                            ";
                        }
                        // line 137
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "                                        <li>
                                            ";
                    // line 139
                    if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))) {
                        // line 140
                        echo "                                            <a href=";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => ($context["pagesCount"] ?? null), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
                        echo ">
                                                &raquo;
                                            </a>
                                            ";
                    } else {
                        // line 144
                        echo "                                            <a href=";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => ($context["pagesCount"] ?? null), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
                        echo ">
                                                &raquo;
                                            </a>
                                            ";
                    }
                    // line 148
                    echo "                                        </li>
                                    </ul>
                                </nav>
                            ";
                }
                // line 152
                echo "                        ";
            } else {
                // line 153
                echo "                            <h2>Resultado de la búsqueda:</h2>
                            <h3>No existen resultados</h3>
                        ";
            }
            // line 156
            echo "                    </div>
                </div>
            </div>
        <!-- </section> -->
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 160
($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "offer_search")) {
            // line 161
            echo "        <section class=\"container\">
            <div class=\"row\">
                <div class=\"\" id=\"mod_l1\">
                    <h2>
                        <strong>";
            // line 165
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
            // line 179
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("offer_search");
            echo "\" method=\"get\" class=\"clearfix\">
                                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <label for=\"type\">Filtro por categorías</label>
                                    <select name=\"type\" id=\"findCategory\" class=\"form-control chosen-select\">
                                        <option value=\"\" selected>Selecciona una opción</option>
                                        ";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 185
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
            // line 187
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
            // line 202
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("offer_search");
            echo "\" method=\"get\" class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 left\">
                        <p>
                            <label for=\"type\">Filtro por categorías</label>
                            <select name=\"type\" id=\"findCategory\" class=\"form-control\">
                                <option value=\"\" selected>Selecciona una opción</option>
                                ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 209
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
            // line 211
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
            // line 222
            if ((twig_length_filter($this->env, ($context["res"] ?? null)) > 0)) {
                // line 223
                echo "                <div class=\"row\" id=\"mod_s1\">
                    <h2>Resultado de la búsqueda:</h2>
                    <h3>
                        <strong>";
                // line 226
                echo "</strong> 
                        <span>Ofertas</span> 
                    </h3>
                </div>
                ";
                // line 230
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["res"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
                    if (((($this->getAttribute($context["oferta"], "validated", array()) == true) && ($this->getAttribute($context["oferta"], "active", array()) == true)) && ($this->getAttribute($context["oferta"], "finished", array()) == false))) {
                        // line 231
                        echo "                <article class=\"row mod_l3\">
                   <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>";
                        // line 235
                        echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "title", array()), "html", null, true);
                        echo "</span>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                ";
                        // line 238
                        if (($this->getAttribute($this->getAttribute($context["oferta"], "tipo", array()), "id", array()) == 1)) {
                            // line 239
                            echo "                                    <span>Prácticas</span>
                                ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 240
$context["oferta"], "tipo", array()), "id", array()) == 0)) {
                            // line 241
                            echo "                                    <span>Empleo</span>
                                ";
                        }
                        // line 243
                        echo "                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                ";
                        // line 245
                        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array())) > 0)) {
                            // line 246
                            echo "                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        ";
                            // line 248
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array()), "html", null, true);
                            echo "
                                    </span>
                                ";
                        }
                        // line 251
                        echo "                            </div>
                            <div class=\"col-lg-2 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                ";
                        // line 253
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                            // line 254
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
                            // line 262
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
                        // line 270
                        echo "                            </div>
                           <!--  <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>";
                        // line 272
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "categoria", array()), "nombre", array()), "html", null, true);
                        echo "</span>
                            </div> -->
                        </div>
                    </div>
                   <!--  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                ";
                        // line 279
                        if ($this->getAttribute($context["oferta"], "idempresa", array())) {
                            // line 280
                            echo "                                    <span> 
                                        <i class=\"fa fa-building\"></i> 
                                        ";
                            // line 282
                            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "idempresa", array()), "html", null, true);
                            echo "
                                    </span>
                                ";
                        }
                        // line 285
                        echo "                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                ";
                        // line 287
                        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array())) > 0)) {
                            // line 288
                            echo "                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        ";
                            // line 290
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "idempresa", array()), "localidad", array()), "html", null, true);
                            echo "
                                    </span>
                                ";
                        }
                        // line 293
                        echo "                            </div>
                            <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                ";
                        // line 295
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                            // line 296
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
                            // line 304
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
                        // line 312
                        echo "                            </div> 
                        </div>
                    </div>-->
                </article>
                   <!--  <article class=\"row\">
                        <hr>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 item\">
                            <h3>
                                ";
                        // line 320
                        echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "title", array()), "html", null, true);
                        echo "
                            </h3>
                            <p>
                                ";
                        // line 323
                        if ($this->getAttribute($context["oferta"], "idempresa", array())) {
                            // line 324
                            echo "                                    Empresa: ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "idempresa", array()), "html", null, true);
                            echo "
                                ";
                        }
                        // line 326
                        echo "                            </p>
                            <p>
                                Sector: <span>";
                        // line 328
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "categoria", array()), "nombre", array()), "html", null, true);
                        echo "</span>
                            </p>
                            <p>
                                ";
                        // line 331
                        if (($this->getAttribute($this->getAttribute($context["oferta"], "tipo", array()), "id", array()) == 1)) {
                            // line 332
                            echo "                                    <span>Prácticas</span>
                                ";
                        } elseif (($this->getAttribute($this->getAttribute(                        // line 333
$context["oferta"], "tipo", array()), "id", array()) == 0)) {
                            // line 334
                            echo "                                    <span>Empleo</span>
                                ";
                        }
                        // line 336
                        echo "                            </p>
                            <p>
                                ";
                        // line 338
                        echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "descripcion", array()), "html", null, true);
                        echo "
                            </p>
                            ";
                        // line 340
                        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
                            // line 341
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                            echo "\">
                                    <button type=\"button\" class=\"button cta-1\"> Ver oferta</button>
                                </a>
                            ";
                        } else {
                            // line 345
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                            echo "\">
                                    <button type=\"button\" class=\"button cta-1\"> Ver oferta</button>
                                </a>
                            ";
                        }
                        // line 349
                        echo "                        </div>
                    </article> -->
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 352
                echo "            ";
            } else {
                // line 353
                echo "                <h2>0 Ofertas coinciden con tu criterio de búsqueda</h2>
            ";
            }
            // line 355
            echo "        </section>
    ";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  704 => 355,  700 => 353,  697 => 352,  688 => 349,  680 => 345,  672 => 341,  670 => 340,  665 => 338,  661 => 336,  657 => 334,  655 => 333,  652 => 332,  650 => 331,  644 => 328,  640 => 326,  634 => 324,  632 => 323,  626 => 320,  616 => 312,  604 => 304,  592 => 296,  590 => 295,  586 => 293,  580 => 290,  576 => 288,  574 => 287,  570 => 285,  564 => 282,  560 => 280,  558 => 279,  548 => 272,  544 => 270,  532 => 262,  520 => 254,  518 => 253,  514 => 251,  508 => 248,  504 => 246,  502 => 245,  498 => 243,  494 => 241,  492 => 240,  489 => 239,  487 => 238,  481 => 235,  475 => 231,  470 => 230,  464 => 226,  459 => 223,  457 => 222,  444 => 211,  433 => 209,  429 => 208,  420 => 202,  403 => 187,  392 => 185,  388 => 184,  380 => 179,  364 => 165,  358 => 161,  356 => 160,  350 => 156,  345 => 153,  342 => 152,  336 => 148,  328 => 144,  320 => 140,  318 => 139,  315 => 138,  309 => 137,  305 => 135,  299 => 132,  294 => 131,  288 => 128,  283 => 127,  281 => 126,  278 => 125,  274 => 123,  268 => 120,  263 => 119,  257 => 116,  252 => 115,  250 => 114,  247 => 113,  244 => 112,  239 => 111,  233 => 109,  227 => 107,  225 => 106,  221 => 104,  219 => 103,  216 => 102,  202 => 94,  192 => 87,  186 => 83,  180 => 80,  176 => 78,  174 => 77,  166 => 74,  160 => 70,  154 => 68,  147 => 66,  140 => 65,  138 => 64,  134 => 62,  130 => 61,  123 => 57,  117 => 53,  115 => 52,  110 => 49,  92 => 33,  81 => 31,  77 => 30,  69 => 25,  52 => 11,  48 => 9,  46 => 8,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:searchResult.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/searchResult.html.twig");
    }
}
