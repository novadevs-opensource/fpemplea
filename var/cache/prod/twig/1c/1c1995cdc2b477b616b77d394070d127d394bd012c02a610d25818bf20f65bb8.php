<?php

/* :Frontend/login:login.html.twig */
class __TwigTemplate_e29907e1d8bc30ac791e37369d3e72692de152c6b4d8b5fa56fd9931cda25c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/login:login.html.twig", 2);
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
        echo " FP Emplea - Inicia sesión";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<section id=\"login-screen\">
    ";
        // line 6
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 7
            echo "        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-8 col-xs-10 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 box-login\">
                <h2>Bienvenido ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nif", array()), "html", null, true);
            echo "</h2>
                <p>
                ";
            // line 11
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 0))) {
                // line 12
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                        Crear perfil
                    </a>
                ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") && ($this->getAttribute($this->getAttribute(            // line 15
($context["app"] ?? null), "user", array()), "done", array()) == 0))) {
                // line 16
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                        <span class=\"txto\">
                          Crear perfil
                        </span>
                    </a>
                ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL") && ($this->getAttribute($this->getAttribute(            // line 21
($context["app"] ?? null), "user", array()), "done", array()) == 0))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_centro", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                        Crear perfil
                    </a>
                ";
            }
            // line 26
            echo "                </p>
                <p>
                ";
            // line 28
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "done", array()) == 1)) {
                // line 29
                echo "                    <span>
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">Ir a mi cuenta</a>
                    </span>
                </p>
                ";
            } else {
                // line 34
                echo "                    Haz click en el botón superior <b>\"Crear perfil\"</b> para empezar a utilizar FP-Emplea
                </p>
                ";
            }
            // line 37
            echo "            </div>
        </div>
    ";
        } else {
            // line 40
            echo "        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-8 col-xs-10 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 box-login-form\">
                <h2>Inicia sesión</h2>
                <form action=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
            echo "\" method=\"post\">
                    <p>
                        <label for=\"_username\">DNI/NIF</label>
                        <input type=\"text\" name=\"_username\" id=\"username\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
            echo "\" class=\"form-control\">
                    </p>
                    <p>
                        <label for=\"_password\">Contraseña</label>
                        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\">
                    </p>
                    <p>
                        <input type=\"submit\" class=\"button cta-1\" value=\"Iniciar sesión\">
                        <input type=\"hidden\" name=\"_target_path\" value=\"/login\">
                    </p>
                    
                </form>
                <p id=\"form-forgot\">
                    <a id=\"forgot-mail\" class=\"color-white\"";
            // line 59
            echo ">He olvidado la contraseña</a>
                    <form id=\"pass-form\" action=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgot_password");
            echo "\" style=\"display:none;\">
                        <label for=\"email\">Email/NIF</label>
                        <input type=\"text\" name=\"email\" id=\"mail-text\" class=\"form-control\">
                        <button class=\"button cta-1\" type=\"submit\">Enviar</button>
                    </form>
                </p>
            </div>
        </div>
    ";
        }
        // line 69
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return ":Frontend/login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 69,  138 => 60,  135 => 59,  119 => 46,  113 => 43,  108 => 40,  103 => 37,  98 => 34,  91 => 30,  88 => 29,  86 => 28,  82 => 26,  74 => 22,  72 => 21,  63 => 16,  61 => 15,  54 => 12,  52 => 11,  47 => 9,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/login:login.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/login/login.html.twig");
    }
}
