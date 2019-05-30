<?php

/* :Frontend:listado.html.twig */
class __TwigTemplate_9cd81d7f005259ca21ffd954b3f174b45663b21a2576df00915af2f8fe3d6168 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:listado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:listado.html.twig"));

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

        echo " FP Emplea ";
        
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) {
            // line 5
            echo "        <section class=\"container\">
            <div class=\"row\">
                <div class=\"\" id=\"mod_l1\">
                    <h2>
                        <strong>";
            // line 9
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))), "html", null, true);
            echo "</strong>
                        <span>Empresas</span> 
                        registradas
                    </h2>
                </div>
            </div>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["empresa"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["empresa"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                if (((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas") || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "applicant_search"))) {
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
$context["empresa"], "idusuario", array()), "id", array()), "senderId" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "senderMail" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                            &laquo;
                        </a>
                    </li>
                    ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? $this->getContext($context, "pagesCount"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 120
                echo "                        ";
                if (($context["i"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                    // line 121
                    echo "                            <li>
                                <a style=\"font-weight:600;\" href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("page" => ($context["pagesCount"] ?? $this->getContext($context, "pagesCount")), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo ">
                            &raquo;
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 142
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes")) {
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
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(($context["education"] ?? $this->getContext($context, "education")));
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
            $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($context["estudiante"], "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "senderMail" => $this->getAttribute($this->getAttribute(                // line 251
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()))));
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
            if ((twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))) != 0)) {
                // line 264
                echo "                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination\">
                        <li><a href=\"";
                // line 266
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">&laquo;</a></li>
                        ";
                // line 267
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? $this->getContext($context, "pagesCount"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 268
                    echo "                            ";
                    if (($context["i"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                        // line 269
                        echo "                                <li>
                                    <a style=\"font-weight:600;\" href=\"";
                        // line 270
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes", array("page" => ($context["pagesCount"] ?? $this->getContext($context, "pagesCount")), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) {
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
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
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
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
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
            $context['_seq'] = twig_ensure_traversable(($context["res"] ?? $this->getContext($context, "res")));
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($context["oferta"], "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
            if ((twig_length_filter($this->env, ($context["res"] ?? $this->getContext($context, "res"))) != 0)) {
                // line 478
                echo "            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    <li><a href=\"";
                // line 480
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => 1, "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">&laquo;</a></li>
                    ";
                // line 481
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["pagesCount"] ?? $this->getContext($context, "pagesCount"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 482
                    echo "                        ";
                    if (($context["i"] == ($context["current"] ?? $this->getContext($context, "current")))) {
                        // line 483
                        echo "                            <li><a style=\"font-weight:600;\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                        ";
                    } else {
                        // line 485
                        echo "                            <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => $context["i"], "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas", array("page" => ($context["pagesCount"] ?? $this->getContext($context, "pagesCount")), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "mis_ofertas_empresa")) {
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
            $context['_seq'] = twig_ensure_traversable(($context["ofertas"] ?? $this->getContext($context, "ofertas")));
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
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "mis_ofertas_candidato")) {
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ver_mi_oferta", array("id" => $this->getAttribute($this->getAttribute($context["relacionOE"], "ofertasid", array()), "id", array()), "idUser" => $this->getAttribute(($context["estudiante"] ?? $this->getContext($context, "estudiante")), "id", array()))), "html", null, true);
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
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_education")) {
            // line 575
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  1145 => 575,  1143 => 574,  1138 => 571,  1128 => 567,  1123 => 565,  1118 => 563,  1114 => 562,  1109 => 561,  1105 => 559,  1103 => 558,  1100 => 557,  1098 => 556,  1095 => 555,  1091 => 554,  1073 => 539,  1067 => 535,  1065 => 534,  1061 => 532,  1051 => 528,  1047 => 527,  1042 => 525,  1037 => 523,  1033 => 522,  1028 => 521,  1024 => 519,  1022 => 518,  1019 => 517,  1017 => 516,  1014 => 515,  1010 => 514,  992 => 499,  986 => 495,  984 => 494,  980 => 492,  972 => 488,  966 => 487,  958 => 485,  950 => 483,  947 => 482,  943 => 481,  939 => 480,  935 => 478,  932 => 477,  923 => 474,  915 => 470,  907 => 466,  905 => 465,  900 => 463,  896 => 461,  892 => 459,  890 => 458,  887 => 457,  885 => 456,  879 => 453,  875 => 451,  869 => 449,  867 => 448,  860 => 444,  850 => 436,  838 => 428,  826 => 420,  824 => 419,  820 => 417,  814 => 414,  810 => 412,  808 => 411,  804 => 409,  798 => 406,  794 => 404,  792 => 403,  782 => 396,  778 => 394,  766 => 386,  754 => 378,  752 => 377,  748 => 375,  742 => 372,  738 => 370,  736 => 369,  732 => 367,  728 => 365,  726 => 364,  723 => 363,  721 => 362,  715 => 359,  709 => 355,  704 => 354,  691 => 343,  680 => 341,  676 => 340,  666 => 333,  649 => 318,  638 => 316,  634 => 315,  626 => 310,  610 => 296,  604 => 292,  602 => 291,  599 => 290,  589 => 283,  586 => 282,  580 => 281,  573 => 277,  569 => 276,  566 => 275,  559 => 271,  555 => 270,  552 => 269,  549 => 268,  545 => 267,  541 => 266,  537 => 264,  534 => 263,  521 => 255,  519 => 251,  518 => 250,  517 => 249,  516 => 245,  510 => 242,  501 => 236,  491 => 229,  481 => 222,  475 => 218,  469 => 215,  465 => 213,  463 => 212,  455 => 209,  449 => 205,  443 => 203,  436 => 201,  429 => 200,  427 => 199,  423 => 197,  419 => 196,  416 => 195,  398 => 179,  387 => 177,  383 => 176,  375 => 171,  357 => 156,  353 => 154,  344 => 148,  340 => 146,  338 => 145,  334 => 143,  332 => 142,  322 => 135,  319 => 134,  313 => 133,  306 => 129,  302 => 128,  299 => 127,  292 => 123,  288 => 122,  285 => 121,  282 => 120,  278 => 119,  271 => 115,  266 => 112,  253 => 104,  251 => 102,  250 => 101,  244 => 98,  235 => 92,  226 => 85,  221 => 82,  219 => 80,  218 => 79,  215 => 78,  210 => 76,  203 => 72,  197 => 69,  190 => 65,  185 => 63,  181 => 62,  177 => 60,  171 => 58,  163 => 56,  161 => 55,  148 => 45,  138 => 38,  129 => 32,  122 => 28,  116 => 24,  110 => 22,  103 => 20,  96 => 19,  94 => 18,  90 => 16,  86 => 15,  77 => 9,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %} FP Emplea {% endblock %}
{% block body %}
    {% if app.request.get('_route') == 'listado_empresas' %}
        <section class=\"container\">
            <div class=\"row\">
                <div class=\"\" id=\"mod_l1\">
                    <h2>
                        <strong>{{res|length}}</strong>
                        <span>Empresas</span> 
                        registradas
                    </h2>
                </div>
            </div>
            {% for empresa in res %}
            <article class=\"row mod_l3\">
                <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-12 avatar-wrapper\">
                    {% if empresa.imagen is not null %}
                        <!-- <img class=\"img-responsive avatar\" src=\"{{ url('homepage') }}../uploads/profileavatar/{{ empresa.imagen }}\" alt=\"Avatar perfil candidato\"> -->
                        <div class=\"avatar\" style=\"background-image:url({{ url('homepage') }}../uploads/profileavatar/{{ empresa.imagen }});\"></div>
                    {% else %}
                        <img class=\"img-responsive avatar\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Placeholder perfil candidato\">
                    {% endif %}
                </div>
               <div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 \">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                            <span>{{ empresa.nombreempresa }}</span>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                <span> 
                                    {{ empresa.sector }}
                                </span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                    <a href=\"{{ path('publicProfile', {'idUser':empresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
                        <button type=\"button\" class=\"cta cta-1\">
                            <span class=\"button-content\">
                                Visitar perfil
                            </span>
                        </button>
                    </a>
                    <button type=\"button\" class=\"cta cta-2\" data-toggle=\"modal\" data-target=\"#companyContactModal{{empresa.id}}\">
                        <span class=\"button-content\">
                            Contactar
                        </span>    
                    </button>
                </div>
            </article>
      <!--       <article class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 item\">
                    <div class=\"profile-image col-lg-2 col-md-3 col-sm-3 col-xs-12\">
                        {% if empresa.imagen is not null %}
                            <img class=\"img-circle\" src=\"{{ url('homepage') }}../uploads/profileavatar/{{ empresa.imagen }}\" alt=\"Avatar perfil candidato\">
                        {% else %}
                            <img class=\"img-circle\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Avatar perfil candidato\">
                        {% endif %}
                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-9 col-xs-12 pull-right\">
                        <h3>{{ empresa.nombreempresa }}</h3>
                        <p>{{ empresa.sector }}</p>
                        <p class=\"descof\">
                           {{empresa.description}}
                        </p>
                        <div class=\"contact-area clearfix\">
                            <div class=\"buttons\">
                                <a href=\"{{ path('publicProfile', {'idUser':empresa.idusuario.id, 'idVisitor':app.user.id}) }}\">
                                    <button type=\"button\" class=\"button cta-1\">Ver perfil completo</button>
                                </a>
                                <button type=\"button\" class=\"button cta-2\" data-toggle=\"modal\" data-target=\"#companyContactModal{{empresa.id}}\">
                                Contactar
                                </button>
                            </div>
                            {% if (app.request.get('_route') == 'listado_empresas') or (app.request.get('_route') == 'listado_estudiantes') or (app.request.get('_route') == 'applicant_search') %} 
                            {% else %}
                            <div class=\"social-networks\">
                                {{ render(controller('AppBundle:Default:snList',
                                    {'idUser': empresa.idusuario}
                                    ))
                                }}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                 </div>
                <hr> -->
            </article>
            <!-- <hr> -->
            <!-- Modal -->
            <div id=\"companyContactModal{{empresa.id}}\" class=\"modal fade\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            <h4 class=\"modal-title\">Contacta con {{empresa.nombreempresa}}</h4>
                        </div>
                        <div class=\"modal-body\">
                            {{ render(controller('AppBundle:Default:contactMail',
                                        {'idUser': empresa.idusuario.id, 'senderId': app.user.id, 'senderMail': app.user.email }
                                    ))
                            }}
                        </div>
                        <div class=\"modal-footer\">
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"{{ path('listado_empresas', {'page': 1, 'idUser':app.user.id}) }}\">
                            &laquo;
                        </a>
                    </li>
                    {% for i in 1..pagesCount %}
                        {% if i == current %}
                            <li>
                                <a style=\"font-weight:600;\" href=\"{{ path('listado_empresas', {'page': i, 'idUser':app.user.id}) }}\">
                                    {{ i }}
                                </a>
                            </li>
                        {% else %}
                            <li>
                                <a href=\"{{ path('listado_empresas', {'page': i, 'idUser':app.user.id}) }}\">
                                    {{ i }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                    <li>
                        <a href={{ path('listado_empresas', {'page': pagesCount, 'idUser':app.user.id}) }}>
                            &raquo;
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    {% elseif app.request.get('_route') == 'listado_estudiantes' %}
        <section class=\"container\">
                <div class=\"row\">
                    {% if is_granted('ROLE_STUDENT') %}
                    <div class=\"\" id=\"mod_l1\">
                        <h2>
                            <strong>{{res|length}}</strong>
                            <span>Aspirantes</span> 
                            registrados
                        </h2>
                    </div>
                    {% elseif is_granted('ROLE_COMPANY') or is_granted('ROLE_SCHOOL') %}
                    <div class=\"\" id=\"mod_l1\">
                        <h2>
                            <strong>{{res|length}}</strong>
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
                {% for estudiante in res %}
                <article class=\"row mod_l3\">
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-12 avatar-wrapper\">
                        {% if estudiante.imagen is not null %}
                            <!-- <img class=\"img-responsive avatar\" src=\"{{ url('homepage') }}../uploads/profileavatar/{{ estudiante.imagen }}\" alt=\"Avatar perfil candidato\"> -->
                            <div class=\"avatar\" style=\"background-image:url({{ url('homepage') }}../uploads/profileavatar/{{ estudiante.imagen }});\"></div>
                        {% else %}
                            <img class=\"img-responsive avatar\" src=\"{{ absolute_url(asset('assets/img/png/default-user.png')) }}\" alt=\"Placeholder perfil candidato\">
                        {% endif %}
                    </div>
                   <div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 \">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 name-wrapper\">
                                <span>{{ estudiante.nombre }} {{ estudiante.apellidos }}</span>
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 location-wrapper\">
                                {% if estudiante.localidad|length > 0 %}
                                    <span> 
                                        <i class=\"fa fa-map-marker\"></i> 
                                        {{ estudiante.localidad }}
                                    </span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-12 col-xs-12 action-wrapper\">
                        <a href=\"{{ path('publicProfile', {'idUser':estudiante.idusuario.id, 'idVisitor':app.user.id}) }}\">
                            <button type=\"button\" class=\"cta cta-1\">
                                <span class=\"button-content\">
                                    Visitar perfil
                                </span>
                            </button>
                        </a>
                        <button type=\"button\" class=\"cta cta-2\" data-toggle=\"modal\" data-target=\"#applicantModal{{estudiante.idusuario.id}}\">
                            <span class=\"button-content\">
                                Contactar
                            </span>    
                        </button>
                    </div>
                </article>
                <div id=\"applicantModal{{estudiante.idusuario.id}}\" class=\"modal fade\" role=\"dialog\">
                    <div class=\"modal-dialog\">
                        <!-- Modal content-->
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                <h4 class=\"modal-title\">Envía un mensaje a {{estudiante.nombre}}</h4>
                            </div>
                            <div class=\"modal-body\">
                                {{ render(
                                        controller(
                                            'AppBundle:Default:contactMail',
                                            {
                                                'idUser': estudiante.idusuario.id, 
                                                'senderId': app.user.id, 
                                                'senderMail': app.user.email 
                                            }
                                        )
                                    )
                                }}
                            </div>
                            <div class=\"modal-footer\">
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
                {% if res|length != 0 %}
                <nav aria-label=\"Page navigation\">
                    <ul class=\"pagination\">
                        <li><a href=\"{{ path('listado_estudiantes', {'page': 1, 'idUser':app.user.id}) }}\">&laquo;</a></li>
                        {% for i in 1..pagesCount %}
                            {% if i == current %}
                                <li>
                                    <a style=\"font-weight:600;\" href=\"{{ path('listado_estudiantes', {'page': i, 'idUser':app.user.id}) }}\">
                                        {{ i }}
                                    </a>
                                </li>
                            {% else %}
                                <li>
                                    <a href=\"{{ path('listado_estudiantes', {'page': i, 'idUser':app.user.id}) }}\">
                                        {{ i }}
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                        <li>
                            <a href={{ path('listado_estudiantes', {'page': pagesCount, 'idUser':app.user.id}) }}>
                                &raquo;
                            </a>
                        </li>
                    </ul>
                </nav>
                {% endif %}
        </section>
    {% elseif app.request.get('_route') == 'listado_ofertas'%}
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
                            <select name=\"type\" id=\"findCategory\" class=\"form-control chosen-select\">
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
            {% for oferta in res  if (oferta.validated == true) and (oferta.active == true) and (oferta.finished == false) %}
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
        <!--     <article class=\"row\">
                <hr>
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 item\">
                    <h3>
                        {{oferta.title}}
                    </h3>
                    <hr>
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
            {% if res|length != 0 %}
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    <li><a href=\"{{ path('listado_ofertas', {'page': 1, 'idUser':app.user.id}) }}\">&laquo;</a></li>
                    {% for i in 1..pagesCount %}
                        {% if i == current %}
                            <li><a style=\"font-weight:600;\" href=\"{{ path('listado_ofertas', {'page': i, 'idUser':app.user.id}) }}\">{{ i }}</a></li>
                        {% else %}
                            <li><a href=\"{{ path('listado_ofertas', {'page': i, 'idUser':app.user.id}) }}\">{{ i }}</a></li>
                        {% endif %}
                    {% endfor %}
                    <li><a href={{ path('listado_ofertas', {'page': pagesCount, 'idUser':app.user.id}) }}>&raquo;</a></li>
                </ul>
            </nav>
            {% endif %}
        </section>
        <!--LISTADOS DE OFERTAS DE PERFIL Y CANDIDATO-->
    {% elseif app.request.get('_route') == 'mis_ofertas_empresa'%}
        <h1>
            Mis ofertas
        </h1>
        <h2>
            <a href=\"{{ path('homepage') }}\">Volver a Inicio</a>
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
                {% for oferta in ofertas %}
                    <tr>
                        {% if oferta.tipo == 1 %}
                            <td>Prácticas</td>
                        {% elseif oferta.tipo == 0 %}
                            <td>Empleo</td>
                        {% endif %}
                        <td>{{ oferta.categoria}}</td>
                        <td>{{ oferta.idempresa.nombreempresa }}</td>
                        <td>{{ oferta.descripcion }}</td>
                        <td>--</td>
                        <td>{{ oferta.vacantes }}</td>
                        <td>
                            <a href=\"{{ path('modificar_oferta', {'id':oferta.id}) }}\">Editar</a><br>
                            <a href=\"{{ path('ver_oferta', {'id':oferta.id}) }}\">Ver</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% elseif app.request.get('_route') == 'mis_ofertas_candidato'%}
        <h1>
            Mis ofertas
        </h1>
        <h2>
            <a href=\"{{ path('homepage') }}\">Volver a Inicio</a>
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
                {% for relacionOE in relacionOE %}
                    <tr>
                        {% if relacionOE.ofertasid.tipo == 1 %}
                            <td>Prácticas</td>
                        {% elseif relacionOE.ofertasid.tipo == 0 %}
                            <td>Empleo</td>
                        {% endif %}
                        <td>{{ relacionOE.ofertasid.categoria}}</td>
                        <td>{{ relacionOE.ofertasid.idempresa.nombreempresa }}</td>
                        <td>{{ relacionOE.ofertasid.descripcion }}</td>
                        <td>--</td>
                        <td>{{ relacionOE.ofertasid.vacantes }}</td>
                        <td>
                            <a href=\"{{ path('ver_mi_oferta', {'id':relacionOE.ofertasid.id, 'idUser':estudiante.id}) }}\">Ver</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
        <!--LISTADO CURSOS CENTRO-->
    {% elseif app.request.get('_route') == 'list_education'%}
    {% endif %}
{% endblock %}", ":Frontend:listado.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/listado.html.twig");
    }
}
