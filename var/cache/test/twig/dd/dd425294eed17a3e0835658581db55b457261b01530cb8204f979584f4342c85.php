<?php

/* base.html.twig */
class __TwigTemplate_d35318cafa4bc53a11e88e041853a4055fa4be697add218b2e3f8e4c5103dee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 user-scalable=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body ";
        // line 21
        if (((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "offer_search")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ver_mi_oferta"))) {
            echo " class=\"colored\" ";
        }
        echo ">
    <div id=\"preloader\">
      <div id=\"loader\">
        <p class=\"text-center\">
          <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/loader.gif"), "html", null, true);
        echo "\" height=\"200\">
        </p>
      </div>
    </div>
    ";
        // line 30
        echo "    <header>
      <div class=\"navigation-header visible-xs\">
          ";
        // line 32
        if (((isset($context["alerts"]) || array_key_exists("alerts", $context)) && (null === (isset($context["notRead"]) ? $context["notRead"] : $this->getContext($context, "notRead"))))) {
            // line 33
            echo "            ";
            if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 34
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 35
                    echo "                ";
                    if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                        // line 36
                        echo "                  ";
                        $context["notRead"] = ((isset($context["notRead"]) ? $context["notRead"] : $this->getContext($context, "notRead")) + 1);
                        // line 37
                        echo "                ";
                    }
                    // line 38
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_logged", array("idUser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
                echo "\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            ";
            } else {
                // line 43
                echo "              <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\">
                <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
                echo "\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            ";
            }
            // line 47
            echo "          ";
        } else {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
              <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
            echo "\" alt=\"FP Emplea, la llave a tu futuro\">
            </a>
          ";
        }
        // line 52
        echo "          <div class=\"container-burger\">
            <div class=\"bar1\"></div>
            <div class=\"bar2\"></div>
            <div class=\"bar3\"></div>
          </div>
        </div>
      <nav id=\"mobile-menu\" class=\"mobile-hidden\">
        <div class=\"navigation-header hidden-xs\">
          ";
        // line 60
        if (((isset($context["alerts"]) || array_key_exists("alerts", $context)) && (null === (isset($context["notRead"]) ? $context["notRead"] : $this->getContext($context, "notRead"))))) {
            // line 61
            echo "            ";
            if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 62
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 63
                    echo "                ";
                    if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                        // line 64
                        echo "                  ";
                        $context["notRead"] = ((isset($context["notRead"]) ? $context["notRead"] : $this->getContext($context, "notRead")) + 1);
                        // line 65
                        echo "                ";
                    }
                    // line 66
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_logged", array("idUser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                <img src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
                echo "\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            ";
            } else {
                // line 71
                echo "              <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\">
                <img src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
                echo "\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            ";
            }
            // line 75
            echo "          ";
        } else {
            // line 76
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
              <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/horizontal_cerradura_con_claim.png")), "html", null, true);
            echo "\" alt=\"FP Emplea, la llave a tu futuro\">
            </a>
          ";
        }
        // line 80
        echo "          <div class=\"container-burger\">
            <div class=\"bar1\"></div>
            <div class=\"bar2\"></div>
            <div class=\"bar3\"></div>
          </div>
        </div>
        <ul class=\"navigation-menu\">
          ";
        // line 87
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) != 1))) {
            // line 88
            echo "          ";
        } elseif ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL"))) {
            // line 89
            echo "            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") == false)) {
                // line 90
                echo "            <li ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) {
                    echo " class=\"active\" ";
                }
                echo ">
                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("idUser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">Empresas</a>
            </li>
            ";
            }
            // line 94
            echo "            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") == false)) {
                // line 95
                echo "            <li ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes")) {
                    echo " class=\"active\" ";
                }
                echo ">
                <a href=\"";
                // line 96
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_estudiantes");
                echo "\">Estudiantes</a>
            </li>
            ";
            }
            // line 99
            echo "            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") == false)) {
                // line 100
                echo "            <li ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) {
                    echo " class=\"active\" ";
                }
                echo ">
                <a href=\"";
                // line 101
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas");
                echo "\">Ofertas</a>
            </li>
            ";
            }
            // line 104
            echo "          ";
        }
        // line 105
        echo "        </ul>
        ";
        // line 106
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 1))) {
            // line 107
            echo "          ";
            // line 157
            echo "        ";
        }
        // line 158
        echo "        <ul class=\"log-actions\">
          <li class=\"divider\"></li>
          ";
        // line 160
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 161
            echo "            <li>
              <a href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\" class=\"fa fa-user-circle-o\">
                <span class=\"txto\">
                  Ir a BackOffice
                </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 169
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ($this->getAttribute($this->getAttribute(        // line 176
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 1))) {
            // line 177
            echo "            <li>
              <a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"cta cta-0\">
                ";
            // line 184
            echo "                <span class=\"button-content\">
                  <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                  Ir a mi cuenta
                </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 191
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ($this->getAttribute($this->getAttribute(        // line 198
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 0))) {
            // line 199
            echo "            <li>
              <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_estudiante", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"cta cta-0\">
                <span class=\"txto\">
                  <span class=\"button-content\">
                    <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                    Crear perfil
                  </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 209
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") && ($this->getAttribute($this->getAttribute(        // line 216
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 1))) {
            // line 217
            echo "            <li>
              <a href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"cta cta-0\">
                ";
            // line 224
            echo "                <span class=\"button-content\">
                  <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                  Ir a mi cuenta
                </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 231
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") && ($this->getAttribute($this->getAttribute(        // line 238
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 0))) {
            // line 239
            echo "            <li>
              <a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"fa fa-user-circle-o\">
                <span class=\"txto\">
                  Crear perfil
                </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 247
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL") && ($this->getAttribute($this->getAttribute(        // line 254
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 1))) {
            // line 255
            echo "            <li>
              <a href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                  Ir a mi cuenta
                </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL") && ($this->getAttribute($this->getAttribute(        // line 271
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "done", array()) == 0))) {
            // line 272
            echo "            <li>
              <a href=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_centro", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"fa fa-user-circle-o\">
                <span class=\"txto\">
                  Crear perfil
                </span>
              </a>
            </li>
            <li>
              <a href=\"";
            // line 280
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          ";
        } else {
            // line 288
            echo "            <li>
              <a href=\"";
            // line 289
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_login");
            echo "\" class=\"cta cta-0\">
                  <span class=\"button-content\">
                    <i class=\"login-gray icon\"></i>
                    Inicio de sesión
                  </span>
                </a>
            </li>
            <li>
              <a href=\"\" class=\"cta cta-0\" data-toggle=\"modal\" data-target=\"#register\">
                  <span class=\"button-content\">
                    <i class=\"register-gray icon\"></i>
                  <!-- <i class=\"fa fa-user-plus fa-circle\"></i> -->
                    Regístrate
                  </span>
              </a>
            </li>
          ";
        }
        // line 306
        echo "        </ul>
      </nav>
    </header>

    ";
        // line 311
        echo "    ";
        if (((isset($context["error"]) || array_key_exists("error", $context)) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 312
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 314
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 317
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "register"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 318
            echo "      <div class=\"alert alert-success alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 320
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "registerErr"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 324
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 326
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "    
   
    ";
        // line 332
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "educationAdd"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["addMsg"]) {
            // line 333
            echo "      <div class=\"alert alert-success alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 335
            echo twig_escape_filter($this->env, $context["addMsg"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addMsg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "educationDel"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["delMsg"]) {
            // line 339
            echo "      <div class=\"alert alert-info alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 341
            echo twig_escape_filter($this->env, $context["delMsg"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delMsg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "educationErr"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["failure"]) {
            // line 345
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 347
            echo twig_escape_filter($this->env, $context["failure"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['failure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "
    ";
        // line 352
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "snSucc"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 353
            echo "      <div class=\"alert alert-success alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 355
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
        echo "
    ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "snErr"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 360
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 362
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "    
    ";
        // line 366
        if (((((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "offer_search")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ver_mi_oferta")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "offer_admin")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ver_oferta"))) {
            // line 367
            echo "      <div id=\"site-content\" class=\"container\">
    ";
        } else {
            // line 369
            echo "      <div id=\"site-content\" class=\"container-fluid\">
    ";
        }
        // line 370
        echo " 
      ";
        // line 371
        $this->displayBlock('body', $context, $blocks);
        // line 374
        echo "    </div>

    ";
        // line 377
        echo "      <footer class=\"container-fluid\">
        <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/footer/key.png")), "html", null, true);
        echo "\" class=\"key hidden-xs\" alt=\"\" >
        <div class=\"row\">
          <div class=\"col-md-3 col-lg-3 col-sm-4 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2\">
            <h2>Enlaces de interés</h2>
            <ul>
              <li><a href=\"";
        // line 383
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("terms");
        echo "\">Privacidad</a></li>
              <li><a href=\"http://todofp.es/inicio.html\">Todo FP</a></li>
              <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#centros-register\">Registro centros</a></li>
            </ul>
          </div>

          <div class=\"col-md-3 col-lg-3 col-sm-2 col-xs-12\">
            <h2>Síguenos</h2>
            <div>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-facebook \"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
              </ul>
            </div>
          </div>

          <div class=\"col-md-4 col-lg-4 col-sm-3 col-xs-12 contact-block\">
            <h2>Contacto</h2>
            <ul>
              <li>
                <strong> CPIFP Los Enlaces </strong>
              </li>
              <li>
                <strong>Dirección:</strong> Jarque de Moncayo, nº 10. 50012 ZARAGOZA
              </li>
              <li>
                <strong>Teléfono:</strong> 976 300 804
              </li>
              <li>
                <strong>Fax:</strong> 976 314 403
              </li>
              <li>
                <strong>E-mail:</strong> <a href=\"mailto:formacionempleo@cpilosenlaces.com?Subject=[WEB]FP-Emplea\">formacionempleo@cpilosenlaces.com</a>
              </li>
            </ul>
                
              
              
              
              
            </p>
            
          </div>
        </div>
      </footer>
    ";
        // line 430
        echo " <!--      <footer class=\"container-fluid no-pbottom\">
        <h4 class=\"text-center color-white\">
          FP Emplea
        </h4>
      </footer> -->
    ";
        // line 436
        echo "

      <!--    Modal registro empresas y candidatos-->
      <div id=\"register\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Regístrate en FP Emplea</h4>
            </div>
            <div class=\"modal-body\">
              <ul class=\"nav nav-tabs center\">
                <li class=\"active col-md-4\">
                  <a id=\"reg-alumnos\" data-toggle=\"tab\" href=\"#alumnosregs\">
                    Registrar alumnos
                  </a>
                </li>
                <li class=\"col-md-4\">
                  <a id=\"reg-empresas\" data-toggle=\"tab\" href=\"#empresas\">
                    Registrar empresas
                  </a>
                </li>
              </ul>
              <div class=\"tab-content container-fluid\">
                ";
        // line 460
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Register:registerApplicant"));
        // line 462
        echo "
                ";
        // line 463
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Register:registerCompany"));
        // line 465
        echo "
              </div>
            </div>
            <div class=\"modal-footer\">
             
            </div>
          </div>
        </div>
      </div>

      <!--    Modal registro centros -->
      <div id=\"centros-register\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Registra tu centro en FP Emplea</h4>
            </div>
            <div class=\"modal-body\">
              <!-- Modal content-->
              ";
        // line 485
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Register:registerSchool"));
        // line 487
        echo "
            </div>
            <div class=\"modal-footer\">
            </div>
          </div>
        </div>
      </div>
      
      ";
        // line 495
        $this->displayBlock('javascripts', $context, $blocks);
        // line 509
        echo "    </body>
  </html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a0f0721_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_1_bootstrap.min_1.css");
            // line 15
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_1_bootstrap.min.css_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_2_font-awesome.min_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_3_chosen_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_3_chosen.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_4_base_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app_part_4_main_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
        } else {
            // asset "a0f0721"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/compiled/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
      ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "      ";
        // line 18
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 371
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 372
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 495
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 496
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0bd58a9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_jquery-3.2.1.min_1.js");
            // line 506
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_bootstrap-datepicker.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_chosen.jquery.min_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_main_5.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_ajax-methods_6.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_jquery.validate_7.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app_additional-methods_8.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "0bd58a9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/compiled/app.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 508
        echo "      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 508,  937 => 506,  932 => 496,  923 => 495,  912 => 372,  903 => 371,  893 => 18,  891 => 17,  841 => 15,  836 => 8,  827 => 7,  810 => 6,  799 => 509,  797 => 495,  787 => 487,  785 => 485,  763 => 465,  761 => 463,  758 => 462,  756 => 460,  730 => 436,  723 => 430,  674 => 383,  666 => 378,  663 => 377,  659 => 374,  657 => 371,  654 => 370,  650 => 369,  646 => 367,  644 => 366,  641 => 365,  632 => 362,  628 => 360,  624 => 359,  621 => 358,  612 => 355,  608 => 353,  603 => 352,  600 => 350,  591 => 347,  587 => 345,  582 => 344,  573 => 341,  569 => 339,  564 => 338,  555 => 335,  551 => 333,  546 => 332,  542 => 329,  533 => 326,  529 => 324,  524 => 323,  515 => 320,  511 => 318,  506 => 317,  500 => 314,  496 => 312,  493 => 311,  487 => 306,  467 => 289,  464 => 288,  453 => 280,  443 => 273,  440 => 272,  438 => 271,  428 => 264,  417 => 256,  414 => 255,  412 => 254,  402 => 247,  392 => 240,  389 => 239,  387 => 238,  377 => 231,  368 => 224,  364 => 218,  361 => 217,  359 => 216,  349 => 209,  337 => 200,  334 => 199,  332 => 198,  322 => 191,  313 => 184,  309 => 178,  306 => 177,  304 => 176,  294 => 169,  284 => 162,  281 => 161,  279 => 160,  275 => 158,  272 => 157,  270 => 107,  268 => 106,  265 => 105,  262 => 104,  256 => 101,  249 => 100,  246 => 99,  240 => 96,  233 => 95,  230 => 94,  224 => 91,  217 => 90,  214 => 89,  211 => 88,  209 => 87,  200 => 80,  194 => 77,  189 => 76,  186 => 75,  180 => 72,  175 => 71,  169 => 68,  164 => 67,  158 => 66,  155 => 65,  152 => 64,  149 => 63,  144 => 62,  141 => 61,  139 => 60,  129 => 52,  123 => 49,  118 => 48,  115 => 47,  109 => 44,  104 => 43,  98 => 40,  93 => 39,  87 => 38,  84 => 37,  81 => 36,  78 => 35,  73 => 34,  70 => 33,  68 => 32,  64 => 30,  57 => 25,  48 => 21,  42 => 19,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 user-scalable=no\">
    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}
      {% stylesheets
        'assets/vendor/bootstrap-3.3.7-dist/css/*'
        'assets/vendor/font-awesome-4.7.0/css/*'
        'assets/vendor/chosen_v1.8.2/*.css'
        'assets/css/*.css'
        'assets/css/*.scss'
        filter='cssrewrite' output='css/compiled/app.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
      {% endstylesheets %}
      {# <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css.map') }}\"> #}
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  </head>
  <body {% if app.request.get('_route') == \"listado_estudiantes\" or app.request.get('_route') == \"listado_empresas\"  or app.request.get('_route') == \"listado_ofertas\" or app.request.get('_route') ==\"offer_search\" or app.request.get('_route') ==\"ver_mi_oferta\" %} class=\"colored\" {% endif %}>
    <div id=\"preloader\">
      <div id=\"loader\">
        <p class=\"text-center\">
          <img src=\"{{ asset('assets/img/loader.gif') }}\" height=\"200\">
        </p>
      </div>
    </div>
    {# <p>Application Environment: {{ app.environment }}</p> #}
    <header>
      <div class=\"navigation-header visible-xs\">
          {% if alerts is defined and (notRead is null) %}
            {% if (is_granted('ROLE_STUDENT')) or (is_granted('ROLE_COMPANY')) or (is_granted('ROLE_SCHOOL')) or (is_granted('ROLE_ADMIN')) %}
              {% for a in alerts %}
                {% if a.status == 0 %}
                  {% set notRead = notRead + 1 %}
                {% endif %}
              {% endfor %}
              <a href=\"{{ path('homepage_logged', {'idUser':app.user.id}) }}\">
                <img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            {% else %}
              <a href=\"{{ path('homepage') }}\">
                <img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            {% endif %}
          {% else %}
            <a href=\"{{ path('homepage') }}\">
              <img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"FP Emplea, la llave a tu futuro\">
            </a>
          {% endif %}
          <div class=\"container-burger\">
            <div class=\"bar1\"></div>
            <div class=\"bar2\"></div>
            <div class=\"bar3\"></div>
          </div>
        </div>
      <nav id=\"mobile-menu\" class=\"mobile-hidden\">
        <div class=\"navigation-header hidden-xs\">
          {% if alerts is defined and (notRead is null) %}
            {% if (is_granted('ROLE_STUDENT')) or (is_granted('ROLE_COMPANY')) or (is_granted('ROLE_SCHOOL')) or (is_granted('ROLE_ADMIN')) %}
              {% for a in alerts %}
                {% if a.status == 0 %}
                  {% set notRead = notRead + 1 %}
                {% endif %}
              {% endfor %}
              <a href=\"{{ path('homepage_logged', {'idUser':app.user.id}) }}\">
                <img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            {% else %}
              <a href=\"{{ path('homepage') }}\">
                <img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"FP Emplea, la llave a tu futuro\">
              </a>
            {% endif %}
          {% else %}
            <a href=\"{{ path('homepage') }}\">
              <img src=\"{{ absolute_url(asset('assets/img/png/horizontal_cerradura_con_claim.png')) }}\" alt=\"FP Emplea, la llave a tu futuro\">
            </a>
          {% endif %}
          <div class=\"container-burger\">
            <div class=\"bar1\"></div>
            <div class=\"bar2\"></div>
            <div class=\"bar3\"></div>
          </div>
        </div>
        <ul class=\"navigation-menu\">
          {% if ((is_granted('ROLE_STUDENT')) or (is_granted('ROLE_COMPANY')) or (is_granted('ROLE_SCHOOL'))) and (app.user.done != 1) %}
          {% elseif (is_granted('ROLE_STUDENT')) or (is_granted('ROLE_COMPANY')) or (is_granted('ROLE_SCHOOL')) %}
            {% if is_granted('ROLE_COMPANY') == false %}
            <li {% if app.request.get('_route') == \"listado_empresas\" %} class=\"active\" {% endif %}>
                <a href=\"{{ path('listado_empresas', {'idUser':app.user.id}) }}\">Empresas</a>
            </li>
            {% endif %}
            {% if is_granted('ROLE_STUDENT') == false %}
            <li {% if app.request.get('_route') == \"listado_estudiantes\" %} class=\"active\" {% endif %}>
                <a href=\"{{ path('listado_estudiantes') }}\">Estudiantes</a>
            </li>
            {% endif %}
            {% if is_granted('ROLE_COMPANY') == false %}
            <li {% if app.request.get('_route') == \"listado_ofertas\" %} class=\"active\" {% endif %}>
                <a href=\"{{ path('listado_ofertas') }}\">Ofertas</a>
            </li>
            {% endif %}
          {% endif %}
        </ul>
        {% if is_granted('ROLE_STUDENT') and (app.user.done == 1)%}
          {# FIXME¿?}
          <ul class=\"navigation-menu visible-xs\">
            <li class=\"menu-user\">
              <a data-toggle=\"tab\" href=\"#inicio\">
                <span class=\"glyphicon glyphicon-home icon-menu\" aria-hidden=\"true\">
                </span>
                <span class=\"txt\">
                  Inicio
                </span>
              </a>
            </li>
            <li class=\"menu-user\">
              <a data-toggle=\"tab\" data-target=\"#perfil\" href=\"{{ path('modificar_estudiante', {'id':app.user.id}) }}\">
                <span class=\"glyphicon glyphicon-pencil icon-menu\" aria-hidden=\"true\">
                </span>
                <span class=\"txt\">
                  Modificar datos
                </span>
              </a>
            </li>
            <li class=\"menu-user\">
              <a data-toggle=\"tab\" href=\"#mensajes\">
                <span class=\"glyphicon glyphicon-envelope icon-menu\" aria-hidden=\"true\">
                </span>
                <span class=\"txt\">
                  Alertas(1)
                </span>
              </a>
            </li>
            <li class=\"menu-user\">
              <a data-toggle=\"tab\" data-target=\"#ofertas\" href=\"{{ path('mis_ofertas_candidato', {'idPerf':estudiante.id}) }}\">
                <span class=\"glyphicon glyphicon-briefcase icon-menu\" aria-hidden=\"true\">
                </span>
                <span class=\"txt\">
                  Mis ofertas de empleo
                </span>
              </a>
            </li>
            <li class=\"menu-user\">
              <a data-toggle=\"tab\" href=\"#cv\">
                <span class=\"glyphicon glyphicon-file icon-menu\" aria-hidden=\"true\">
                </span>
                <span class=\"txt\">
                  Actualiza tu curriculum
                </span>
              </a>
            </li>
            
          </ul>
          {#}
        {% endif %}
        <ul class=\"log-actions\">
          <li class=\"divider\"></li>
          {% if is_granted('ROLE_ADMIN') %}
            <li>
              <a href=\"{{ path('admin') }}\" class=\"fa fa-user-circle-o\">
                <span class=\"txto\">
                  Ir a BackOffice
                </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% elseif is_granted('ROLE_STUDENT') and (app.user.done == 1)%}
            <li>
              <a href=\"{{ path('profile', {'idUser':app.user.id}) }}\" class=\"cta cta-0\">
                {#}
                {% if notRead is defined %}
                  <span class=\"mini-circle\">{{notRead}}</span>
                {% endif %}
                {#}
                <span class=\"button-content\">
                  <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                  Ir a mi cuenta
                </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% elseif is_granted('ROLE_STUDENT') and (app.user.done == 0)%}
            <li>
              <a href=\"{{ path('crear_estudiante', {'id':app.user.id}) }}\" class=\"cta cta-0\">
                <span class=\"txto\">
                  <span class=\"button-content\">
                    <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                    Crear perfil
                  </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% elseif is_granted('ROLE_COMPANY') and (app.user.done == 1)%}
            <li>
              <a href=\"{{ path('profile', {'idUser':app.user.id}) }}\" class=\"cta cta-0\">
                {#}
                {% if notRead is defined %}
                  <span class=\"mini-circle\">{{notRead}}</span>
                {% endif %}
                {#}
                <span class=\"button-content\">
                  <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                  Ir a mi cuenta
                </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% elseif is_granted('ROLE_COMPANY') and (app.user.done == 0)%}
            <li>
              <a href=\"{{ path('crear_empresa', {'id':app.user.id}) }}\" class=\"fa fa-user-circle-o\">
                <span class=\"txto\">
                  Crear perfil
                </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% elseif is_granted('ROLE_SCHOOL') and (app.user.done == 1)%}
            <li>
              <a href=\"{{ path('profile', {'idUser':app.user.id}) }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-user-circle-o fa-2x icon\"></i>
                  Ir a mi cuenta
                </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% elseif is_granted('ROLE_SCHOOL') and (app.user.done == 0)%}
            <li>
              <a href=\"{{ path('crear_centro', {'id':app.user.id}) }}\" class=\"fa fa-user-circle-o\">
                <span class=\"txto\">
                  Crear perfil
                </span>
              </a>
            </li>
            <li>
              <a href=\"{{ path('logout') }}\" class=\"cta cta-0\">
                <span class=\"button-content\">
                  <i class=\"fa fa-sign-out fa-2x icon\"></i>
                  Cerrar sesión
                </span>
              </a>
            </li>
          {% else %}
            <li>
              <a href=\"{{ path('homepage_login') }}\" class=\"cta cta-0\">
                  <span class=\"button-content\">
                    <i class=\"login-gray icon\"></i>
                    Inicio de sesión
                  </span>
                </a>
            </li>
            <li>
              <a href=\"\" class=\"cta cta-0\" data-toggle=\"modal\" data-target=\"#register\">
                  <span class=\"button-content\">
                    <i class=\"register-gray icon\"></i>
                  <!-- <i class=\"fa fa-user-plus fa-circle\"></i> -->
                    Regístrate
                  </span>
              </a>
            </li>
          {% endif %}
        </ul>
      </nav>
    </header>

    {# START - Register user errors #}
    {% if error is defined and error %}
      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ error.messageKey|trans(error.messageData, 'security') }}
      </div>
    {% endif %}
    {% for message in app.session.flashbag.get('register') %}
      <div class=\"alert alert-success alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ message }}
      </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('registerErr') %}
      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ flashMessage }}
      </div>
    {% endfor %}
    
   
    {# START - Education add and delete errors from ApplicantProfile #}
    {% for addMsg in app.session.flashbag.get('educationAdd') %}
      <div class=\"alert alert-success alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ addMsg }}
      </div>
    {% endfor %}
    {% for delMsg in app.session.flashbag.get('educationDel') %}
      <div class=\"alert alert-info alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ delMsg }}
      </div>
    {% endfor %}
    {% for failure in app.session.flashbag.get('educationErr') %}
      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ failure }}
      </div>
    {% endfor %}

    {# START - Social network actions #}
    {% for flashMessage in app.session.flashbag.get('snSucc') %}
      <div class=\"alert alert-success alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ flashMessage }}
      </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.get('snErr') %}
      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        {{ flashMessage }}
      </div>
    {% endfor %}
    
    {% if app.request.get('_route') == \"listado_estudiantes\" or app.request.get('_route') == \"listado_empresas\"  or app.request.get('_route') == \"listado_ofertas\" or app.request.get('_route') ==\"offer_search\" or app.request.get('_route') ==\"ver_mi_oferta\" or app.request.get('_route') ==\"offer_admin\" or app.request.get('_route') ==\"ver_oferta\"%}
      <div id=\"site-content\" class=\"container\">
    {% else %}
      <div id=\"site-content\" class=\"container-fluid\">
    {% endif %} 
      {% block body %}

      {% endblock %}
    </div>

    {# {% if (app.request.get('_route') == 'homepage') or (app.request.get('_route') == 'homepage_logged') or (app.request.get('_route') == 'homepage_login') %} #}
      <footer class=\"container-fluid\">
        <img src=\"{{ absolute_url(asset('assets/img/png/footer/key.png')) }}\" class=\"key hidden-xs\" alt=\"\" >
        <div class=\"row\">
          <div class=\"col-md-3 col-lg-3 col-sm-4 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2\">
            <h2>Enlaces de interés</h2>
            <ul>
              <li><a href=\"{{ path('terms') }}\">Privacidad</a></li>
              <li><a href=\"http://todofp.es/inicio.html\">Todo FP</a></li>
              <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#centros-register\">Registro centros</a></li>
            </ul>
          </div>

          <div class=\"col-md-3 col-lg-3 col-sm-2 col-xs-12\">
            <h2>Síguenos</h2>
            <div>
              <ul>
                <li><a href=\"#\"><i class=\"fa fa-facebook \"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
              </ul>
            </div>
          </div>

          <div class=\"col-md-4 col-lg-4 col-sm-3 col-xs-12 contact-block\">
            <h2>Contacto</h2>
            <ul>
              <li>
                <strong> CPIFP Los Enlaces </strong>
              </li>
              <li>
                <strong>Dirección:</strong> Jarque de Moncayo, nº 10. 50012 ZARAGOZA
              </li>
              <li>
                <strong>Teléfono:</strong> 976 300 804
              </li>
              <li>
                <strong>Fax:</strong> 976 314 403
              </li>
              <li>
                <strong>E-mail:</strong> <a href=\"mailto:formacionempleo@cpilosenlaces.com?Subject=[WEB]FP-Emplea\">formacionempleo@cpilosenlaces.com</a>
              </li>
            </ul>
                
              
              
              
              
            </p>
            
          </div>
        </div>
      </footer>
    {# {% else %} #}
 <!--      <footer class=\"container-fluid no-pbottom\">
        <h4 class=\"text-center color-white\">
          FP Emplea
        </h4>
      </footer> -->
    {# {% endif %} #}


      <!--    Modal registro empresas y candidatos-->
      <div id=\"register\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Regístrate en FP Emplea</h4>
            </div>
            <div class=\"modal-body\">
              <ul class=\"nav nav-tabs center\">
                <li class=\"active col-md-4\">
                  <a id=\"reg-alumnos\" data-toggle=\"tab\" href=\"#alumnosregs\">
                    Registrar alumnos
                  </a>
                </li>
                <li class=\"col-md-4\">
                  <a id=\"reg-empresas\" data-toggle=\"tab\" href=\"#empresas\">
                    Registrar empresas
                  </a>
                </li>
              </ul>
              <div class=\"tab-content container-fluid\">
                {{ render(controller(
                'AppBundle:Register:registerApplicant'
                )) }}
                {{ render(controller(
                'AppBundle:Register:registerCompany'
                )) }}
              </div>
            </div>
            <div class=\"modal-footer\">
             
            </div>
          </div>
        </div>
      </div>

      <!--    Modal registro centros -->
      <div id=\"centros-register\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
              <h4 class=\"modal-title\">Registra tu centro en FP Emplea</h4>
            </div>
            <div class=\"modal-body\">
              <!-- Modal content-->
              {{ render(controller(
              'AppBundle:Register:registerSchool'
              )) }}
            </div>
            <div class=\"modal-footer\">
            </div>
          </div>
        </div>
      </div>
      
      {% block javascripts %}
        {% javascripts
            'assets/vendor/jquery-3.2.1.min.js'
            'assets/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js'
            'assets/vendor/bootstrap-datepicker.min.js'
            'assets/vendor/chosen_v1.8.2/chosen.jquery.min.js'
            'assets/js/main.js'
            'assets/js/ajax-methods.js'
            'assets/vendor/jquery-validation-1.17.0/dist/jquery.validate.js'
            'assets/vendor/jquery-validation-1.17.0/dist/additional-methods.js'
            output='js/compiled/app.js' %}
            <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
      {% endblock %}
    </body>
  </html>", "base.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/base.html.twig");
    }
}
