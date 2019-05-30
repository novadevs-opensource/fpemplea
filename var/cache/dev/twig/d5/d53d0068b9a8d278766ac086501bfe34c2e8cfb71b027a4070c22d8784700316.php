<?php

/* :Frontend:searchResult.html.twig */
class __TwigTemplate_17de410893c32f3cbbe1f56a0dda012ba9ebb2b232f8d02c3708aacf9870f36b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:searchResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:searchResult.html.twig"));

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

        echo " FP Emplea - Resultado de la búsqueda";
        
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "applicant_search")) {
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
                echo twig_escape_filter($this->env, ($context["registeredApplicants"] ?? $this->getContext($context, "registeredApplicants")), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["education"] ?? $this->getContext($context, "education")));
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
            if ((twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))) > 0)) {
                // line 53
                echo "                            <!-- <div class=\"applicant-list container-fluid\"> -->
                                <div class=\"row\">
                                    <h2>Resultado de la búsqueda:</h2>
                                    <h3>
                                        <strong>";
                // line 57
                echo twig_escape_filter($this->env, ($context["totalItems"] ?? $this->getContext($context, "totalItems")), "html", null, true);
                echo "</strong> 
                                        <span>Aspirantes</span> 
                                    </h3>
                                </div>
                                ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["applicant"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                if ((twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))) != 0)) {
                    // line 104
                    echo "                                <nav aria-label=\"Page navigation\">
                                    <ul class=\"pagination\">
                                        ";
                    // line 106
                    if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))) {
                        // line 107
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
                        echo "\">&laquo;</a></li>
                                        ";
                    } else {
                        // line 109
                        echo "                                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
                        echo "\">&laquo;</a></li>
                                        ";
                    }
                    // line 111
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? $this->getContext($context, "pagesCount"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        echo "                                            ";
                        if (($context["i"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                            // line 113
                            echo "                                                <li>
                                                ";
                            // line 114
                            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))) {
                                // line 115
                                echo "                                                    <a style=\"font-weight:600;\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
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
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
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
                            if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))) {
                                // line 127
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
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
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
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
                    if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))) {
                        // line 140
                        echo "                                            <a href=";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => ($context["pagesCount"] ?? $this->getContext($context, "pagesCount")), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "parm1"), "method"))), "html", null, true);
                        echo ">
                                                &raquo;
                                            </a>
                                            ";
                    } else {
                        // line 144
                        echo "                                            <a href=";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("applicant_search", array("page" => ($context["pagesCount"] ?? $this->getContext($context, "pagesCount")), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "parm1" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "education"), "method"))), "html", null, true);
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
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "offer_search")) {
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
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
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
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
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
            if ((twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))) > 0)) {
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
                $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
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
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  734 => 355,  730 => 353,  727 => 352,  718 => 349,  710 => 345,  702 => 341,  700 => 340,  695 => 338,  691 => 336,  687 => 334,  685 => 333,  682 => 332,  680 => 331,  674 => 328,  670 => 326,  664 => 324,  662 => 323,  656 => 320,  646 => 312,  634 => 304,  622 => 296,  620 => 295,  616 => 293,  610 => 290,  606 => 288,  604 => 287,  600 => 285,  594 => 282,  590 => 280,  588 => 279,  578 => 272,  574 => 270,  562 => 262,  550 => 254,  548 => 253,  544 => 251,  538 => 248,  534 => 246,  532 => 245,  528 => 243,  524 => 241,  522 => 240,  519 => 239,  517 => 238,  511 => 235,  505 => 231,  500 => 230,  494 => 226,  489 => 223,  487 => 222,  474 => 211,  463 => 209,  459 => 208,  450 => 202,  433 => 187,  422 => 185,  418 => 184,  410 => 179,  394 => 165,  388 => 161,  386 => 160,  380 => 156,  375 => 153,  372 => 152,  366 => 148,  358 => 144,  350 => 140,  348 => 139,  345 => 138,  339 => 137,  335 => 135,  329 => 132,  324 => 131,  318 => 128,  313 => 127,  311 => 126,  308 => 125,  304 => 123,  298 => 120,  293 => 119,  287 => 116,  282 => 115,  280 => 114,  277 => 113,  274 => 112,  269 => 111,  263 => 109,  257 => 107,  255 => 106,  251 => 104,  249 => 103,  246 => 102,  232 => 94,  222 => 87,  216 => 83,  210 => 80,  206 => 78,  204 => 77,  196 => 74,  190 => 70,  184 => 68,  177 => 66,  170 => 65,  168 => 64,  164 => 62,  160 => 61,  153 => 57,  147 => 53,  145 => 52,  140 => 49,  122 => 33,  111 => 31,  107 => 30,  99 => 25,  82 => 11,  78 => 9,  76 => 8,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %} FP Emplea - Resultado de la búsqueda{% endblock %}
{% block body %}
    {% if app.request.get('_route') == 'applicant_search'%}
        <!-- <section class=\"applicant-list\"> -->
            <div class=\"container\">
                <div class=\"row\">
                    {% if is_granted('ROLE_COMPANY') or is_granted('ROLE_SCHOOL') %}
                    <div id=\"mod_l1\">
                        <h2>
                            <strong>{{registeredApplicants}}</strong>
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
                                <form action=\"{{ url('applicant_search') }}\" method=\"post\" class=\"clearfix\">
                                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                        <label for=\"type\">Filtro por formación</label>
                                        <select name=\"education\" id=\"findEducation\" class=\"form-control chosen-select\">
                                            <option value=\"\" selected>Selecciona una opción</option>
                                            {% for e in education %}
                                                <option value=\"{{e.id}}\">{{e.titulo}}</option>
                                            {% endfor %}
                                        </select>
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
                    {% endif %}
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\" id=\"mod_s1\">
                        {% if res|length > 0 %}
                            <!-- <div class=\"applicant-list container-fluid\"> -->
                                <div class=\"row\">
                                    <h2>Resultado de la búsqueda:</h2>
                                    <h3>
                                        <strong>{{totalItems}}</strong> 
                                        <span>Aspirantes</span> 
                                    </h3>
                                </div>
                                {% for applicant in res %}
                                    <article class=\"row mod_l3\">
                                        <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-12 avatar-wrapper\">
                                            {% if applicant.imagen is not null %}
                                                <!-- <img class=\"img-responsive avatar\" src=\"{{ url('homepage') }}../uploads/profileavatar/{{ applicant.imagen }}\" alt=\"Avatar perfil candidato\"> -->
                                                <div class=\"avatar\" style=\"background-image:url({{ url('homepage') }}../uploads/profileavatar/{{ applicant.imagen }});\"></div>
                                            {% else %}
                                                <img class=\"img-responsive avatar\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Placeholder perfil candidato\">
                                            {% endif %}
                                        </div>
                                       <div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 \">
                                            <div class=\"row\">
                                                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                                    <span>{{ applicant.nombre }} {{ applicant.apellidos }}</span>
                                                </div>
                                                <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                                    {% if applicant.localidad|length > 0 %}
                                                        <span> 
                                                            <i class=\"fa fa-map-marker\"></i> 
                                                            {{ applicant.localidad }}
                                                        </span>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                            <a href=\"{{ path('publicProfile', {'idUser':applicant.idusuario.id, 'idVisitor':app.user.id}) }}\">
                                                <button type=\"button\" class=\"cta cta-1\">
                                                    <span class=\"button-content\">
                                                        Visitar perfil
                                                    </span>
                                                </button>
                                            </a>
                                            <button type=\"button\" class=\"cta cta-2\" data-toggle=\"modal\" data-target=\"#applicantModal{{applicant.idusuario.id}}\">
                                                <span class=\"button-content\">
                                                    Contactar
                                                </span> 
                                            </button>
                                        </div>
                                    </article>
                                {% endfor %}
                            <!-- </div> -->
                            {% if res|length != 0 %}
                                <nav aria-label=\"Page navigation\">
                                    <ul class=\"pagination\">
                                        {% if app.request.get(\"education\") is null %}
                                            <li><a href=\"{{ path('applicant_search', {'page': 1, 'idUser':app.user.id, 'parm1':app.request.get(\"parm1\")}) }}\">&laquo;</a></li>
                                        {% else %}
                                            <li><a href=\"{{ path('applicant_search', {'page': 1, 'idUser':app.user.id, 'parm1':app.request.get(\"education\")}) }}\">&laquo;</a></li>
                                        {% endif %}
                                        {% for i in 1..pagesCount %}
                                            {% if i == current %}
                                                <li>
                                                {% if app.request.get(\"education\") is null %}
                                                    <a style=\"font-weight:600;\" href=\"{{ path('applicant_search', {'page': i, 'idUser':app.user.id, 'parm1':app.request.get(\"parm1\")}) }}\">
                                                        {{ i }}
                                                    </a>
                                                {% else %}
                                                    <a style=\"font-weight:600;\" href=\"{{ path('applicant_search', {'page': i, 'idUser':app.user.id, 'parm1':app.request.get(\"education\")}) }}\">
                                                        {{ i }}
                                                    </a>
                                                {% endif %}
                                                </li>
                                            {% else %}
                                                <li>
                                                {% if app.request.get(\"education\") is null %}
                                                    <a href=\"{{ path('applicant_search', {'page': i, 'idUser':app.user.id, 'parm1':app.request.get(\"parm1\")}) }}\">
                                                        {{ i }}
                                                    </a>
                                                {% else %}
                                                    <a href=\"{{ path('applicant_search', {'page': i, 'idUser':app.user.id, 'parm1':app.request.get(\"education\")}) }}\">
                                                        {{ i }}
                                                    </a>
                                                {% endif %}
                                                </li>
                                            {% endif %}
                                        {% endfor %}
                                        <li>
                                            {% if app.request.get(\"education\") is null %}
                                            <a href={{ path('applicant_search', {'page': pagesCount, 'idUser':app.user.id, 'parm1':app.request.get(\"parm1\")}) }}>
                                                &raquo;
                                            </a>
                                            {% else %}
                                            <a href={{ path('applicant_search', {'page': pagesCount, 'idUser':app.user.id, 'parm1':app.request.get(\"education\")}) }}>
                                                &raquo;
                                            </a>
                                            {% endif %}
                                        </li>
                                    </ul>
                                </nav>
                            {% endif %}
                        {% else %}
                            <h2>Resultado de la búsqueda:</h2>
                            <h3>No existen resultados</h3>
                        {% endif %}
                    </div>
                </div>
            </div>
        <!-- </section> -->
    {% elseif app.request.get('_route') == 'offer_search'%}
        <section class=\"container\">
            <div class=\"row\">
                <div class=\"\" id=\"mod_l1\">
                    <h2>
                        <strong>{#{res|length}#}</strong>
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
                            <form action=\"{{ url('offer_search') }}\" method=\"get\" class=\"clearfix\">
                                <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                                    <label for=\"type\">Filtro por categorías</label>
                                    <select name=\"type\" id=\"findCategory\" class=\"form-control chosen-select\">
                                        <option value=\"\" selected>Selecciona una opción</option>
                                        {% for e in categories %}
                                            <option value=\"{{e.id}}\">{{e.nombre}}</option>
                                        {% endfor %}
                                    </select>
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
               <!--  <form action=\"{{ url('offer_search') }}\" method=\"get\" class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                    <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12 left\">
                        <p>
                            <label for=\"type\">Filtro por categorías</label>
                            <select name=\"type\" id=\"findCategory\" class=\"form-control\">
                                <option value=\"\" selected>Selecciona una opción</option>
                                {% for e in categories %}
                                    <option value=\"{{e.id}}\">{{e.nombre}}</option>
                                {% endfor %}
                            </select>
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
            {% if res|length > 0 %}
                <div class=\"row\" id=\"mod_s1\">
                    <h2>Resultado de la búsqueda:</h2>
                    <h3>
                        <strong>{#{totalItems}#}</strong> 
                        <span>Ofertas</span> 
                    </h3>
                </div>
                {% for oferta in res if (oferta.validated == true) and (oferta.active == true) and (oferta.finished == false) %}
                <article class=\"row mod_l3\">
                   <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>{{oferta.title}}</span>
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                {% if oferta.tipo.id == 1 %}
                                    <span>Prácticas</span>
                                {% elseif oferta.tipo.id == 0 %}
                                    <span>Empleo</span>
                                {% endif %}
                            </div>
                            <div class=\"col-lg-3 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                {% if oferta.idempresa.localidad|length > 0 %}
                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        {{ oferta.idempresa.localidad }}
                                    </span>
                                {% endif %}
                            </div>
                            <div class=\"col-lg-2 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                {% if is_granted('ROLE_STUDENT') %}
                                    <a href=\"{{ path('ver_mi_oferta', {'id':oferta.id, 'idUser':app.user.id}) }}\">
                                        <button type=\"button\" class=\"cta cta-1\">
                                             <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                {% else %}
                                    <a href=\"{{ path('ver_oferta', {'id':oferta.id}) }}\">
                                        <button type=\"button\" class=\"cta cta-1 offer\">
                                            <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                {% endif %}
                            </div>
                           <!--  <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>{{oferta.categoria.nombre}}</span>
                            </div> -->
                        </div>
                    </div>
                   <!--  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                {% if oferta.idempresa %}
                                    <span> 
                                        <i class=\"fa fa-building\"></i> 
                                        {{oferta.idempresa}}
                                    </span>
                                {% endif %}
                            </div>
                            <div class=\"col-lg-4 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                {% if oferta.idempresa.localidad|length > 0 %}
                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        {{ oferta.idempresa.localidad }}
                                    </span>
                                {% endif %}
                            </div>
                            <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                                {% if is_granted('ROLE_STUDENT') %}
                                    <a href=\"{{ path('ver_mi_oferta', {'id':oferta.id, 'idUser':app.user.id}) }}\">
                                        <button type=\"button\" class=\"cta cta-1\">
                                             <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                {% else %}
                                    <a href=\"{{ path('ver_oferta', {'id':oferta.id}) }}\">
                                        <button type=\"button\" class=\"cta cta-1 offer\">
                                            <span class=\"button-content\">
                                                Ver oferta
                                            </span>
                                        </button>
                                    </a>
                                {% endif %}
                            </div> 
                        </div>
                    </div>-->
                </article>
                   <!--  <article class=\"row\">
                        <hr>
                        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 item\">
                            <h3>
                                {{oferta.title}}
                            </h3>
                            <p>
                                {% if oferta.idempresa %}
                                    Empresa: {{oferta.idempresa}}
                                {% endif %}
                            </p>
                            <p>
                                Sector: <span>{{oferta.categoria.nombre}}</span>
                            </p>
                            <p>
                                {% if oferta.tipo.id == 1 %}
                                    <span>Prácticas</span>
                                {% elseif oferta.tipo.id == 0 %}
                                    <span>Empleo</span>
                                {% endif %}
                            </p>
                            <p>
                                {{ oferta.descripcion }}
                            </p>
                            {% if is_granted('ROLE_STUDENT') %}
                                <a href=\"{{ path('ver_mi_oferta', {'id':oferta.id, 'idUser':app.user.id}) }}\">
                                    <button type=\"button\" class=\"button cta-1\"> Ver oferta</button>
                                </a>
                            {% else %}
                                <a href=\"{{ path('ver_oferta', {'id':oferta.id}) }}\">
                                    <button type=\"button\" class=\"button cta-1\"> Ver oferta</button>
                                </a>
                            {% endif %}
                        </div>
                    </article> -->
                {% endfor %}
            {% else %}
                <h2>0 Ofertas coinciden con tu criterio de búsqueda</h2>
            {% endif %}
        </section>
    {% endif %}
{% endblock %}
", ":Frontend:searchResult.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/searchResult.html.twig");
    }
}
