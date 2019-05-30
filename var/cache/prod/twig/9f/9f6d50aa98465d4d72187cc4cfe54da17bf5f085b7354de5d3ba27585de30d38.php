<?php

/* ::base.html.twig */
class __TwigTemplate_438dff083b52d81796d5e49c40acb3fb65b41f7ab2802df12990828cc14c1790 extends Twig_Template
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
        if (((((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "offer_search")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "ver_mi_oferta"))) {
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
        if (((isset($context["alerts"]) || array_key_exists("alerts", $context)) && (null === ($context["notRead"] ?? null)))) {
            // line 33
            echo "            ";
            if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 34
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 35
                    echo "                ";
                    if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                        // line 36
                        echo "                  ";
                        $context["notRead"] = (($context["notRead"] ?? null) + 1);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_logged", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        if (((isset($context["alerts"]) || array_key_exists("alerts", $context)) && (null === ($context["notRead"] ?? null)))) {
            // line 61
            echo "            ";
            if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 62
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 63
                    echo "                ";
                    if (($this->getAttribute($context["a"], "status", array()) == 0)) {
                        // line 64
                        echo "                  ";
                        $context["notRead"] = (($context["notRead"] ?? null) + 1);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_logged", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) && ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) != 1))) {
            // line 88
            echo "          ";
        } elseif ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL"))) {
            // line 89
            echo "            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") == false)) {
                // line 90
                echo "            <li ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) {
                    echo " class=\"active\" ";
                }
                echo ">
                <a href=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_empresas", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\">Empresas</a>
            </li>
            ";
            }
            // line 94
            echo "            ";
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") == false)) {
                // line 95
                echo "            <li ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes")) {
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
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) {
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
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 1))) {
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
($context["app"] ?? null), "user", array()), "done", array()) == 1))) {
            // line 177
            echo "            <li>
              <a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? null), "user", array()), "done", array()) == 0))) {
            // line 199
            echo "            <li>
              <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? null), "user", array()), "done", array()) == 1))) {
            // line 217
            echo "            <li>
              <a href=\"";
            // line 218
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? null), "user", array()), "done", array()) == 0))) {
            // line 239
            echo "            <li>
              <a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? null), "user", array()), "done", array()) == 1))) {
            // line 255
            echo "            <li>
              <a href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
($context["app"] ?? null), "user", array()), "done", array()) == 0))) {
            // line 272
            echo "            <li>
              <a href=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_centro", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
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
        if (((isset($context["error"]) || array_key_exists("error", $context)) && ($context["error"] ?? null))) {
            // line 312
            echo "      <div class=\"alert alert-danger alert-dismissable\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
        ";
            // line 314
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 317
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "register"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "registerErr"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "educationAdd"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "educationDel"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "educationErr"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "snSucc"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "snErr"), "method"));
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
        if (((((((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_estudiantes") || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_empresas")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "listado_ofertas")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "offer_search")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "ver_mi_oferta")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "offer_admin")) || ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "ver_oferta"))) {
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a0f0721_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_1_bootstrap.min_1.css");
            // line 15
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_1_bootstrap.min.css_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_2_font-awesome.min_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_3_chosen_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_3_chosen.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_4_base_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
            // asset "a0f0721_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app_part_4_main_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
        } else {
            // asset "a0f0721"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a0f0721") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/compiled/app.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" />
      ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "      ";
        // line 18
        echo "    ";
    }

    // line 371
    public function block_body($context, array $blocks = array())
    {
        // line 372
        echo "
      ";
    }

    // line 495
    public function block_javascripts($context, array $blocks = array())
    {
        // line 496
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0bd58a9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_jquery-3.2.1.min_1.js");
            // line 506
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_bootstrap-datepicker.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_chosen.jquery.min_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_main_5.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_ajax-methods_6.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_jquery.validate_7.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
            // asset "0bd58a9_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app_additional-methods_8.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "0bd58a9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0bd58a9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/compiled/app.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 508
        echo "      ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  939 => 508,  883 => 506,  878 => 496,  875 => 495,  870 => 372,  867 => 371,  863 => 18,  861 => 17,  811 => 15,  806 => 8,  803 => 7,  798 => 6,  793 => 509,  791 => 495,  781 => 487,  779 => 485,  757 => 465,  755 => 463,  752 => 462,  750 => 460,  724 => 436,  717 => 430,  668 => 383,  660 => 378,  657 => 377,  653 => 374,  651 => 371,  648 => 370,  644 => 369,  640 => 367,  638 => 366,  635 => 365,  626 => 362,  622 => 360,  618 => 359,  615 => 358,  606 => 355,  602 => 353,  597 => 352,  594 => 350,  585 => 347,  581 => 345,  576 => 344,  567 => 341,  563 => 339,  558 => 338,  549 => 335,  545 => 333,  540 => 332,  536 => 329,  527 => 326,  523 => 324,  518 => 323,  509 => 320,  505 => 318,  500 => 317,  494 => 314,  490 => 312,  487 => 311,  481 => 306,  461 => 289,  458 => 288,  447 => 280,  437 => 273,  434 => 272,  432 => 271,  422 => 264,  411 => 256,  408 => 255,  406 => 254,  396 => 247,  386 => 240,  383 => 239,  381 => 238,  371 => 231,  362 => 224,  358 => 218,  355 => 217,  353 => 216,  343 => 209,  331 => 200,  328 => 199,  326 => 198,  316 => 191,  307 => 184,  303 => 178,  300 => 177,  298 => 176,  288 => 169,  278 => 162,  275 => 161,  273 => 160,  269 => 158,  266 => 157,  264 => 107,  262 => 106,  259 => 105,  256 => 104,  250 => 101,  243 => 100,  240 => 99,  234 => 96,  227 => 95,  224 => 94,  218 => 91,  211 => 90,  208 => 89,  205 => 88,  203 => 87,  194 => 80,  188 => 77,  183 => 76,  180 => 75,  174 => 72,  169 => 71,  163 => 68,  158 => 67,  152 => 66,  149 => 65,  146 => 64,  143 => 63,  138 => 62,  135 => 61,  133 => 60,  123 => 52,  117 => 49,  112 => 48,  109 => 47,  103 => 44,  98 => 43,  92 => 40,  87 => 39,  81 => 38,  78 => 37,  75 => 36,  72 => 35,  67 => 34,  64 => 33,  62 => 32,  58 => 30,  51 => 25,  42 => 21,  36 => 19,  34 => 7,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/base.html.twig");
    }
}
