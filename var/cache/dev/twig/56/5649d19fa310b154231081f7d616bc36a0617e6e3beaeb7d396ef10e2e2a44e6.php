<?php

/* :Frontend/login:login.html.twig */
class __TwigTemplate_1e64908edcab61f27b5f6871dd02f50911d779e6bf5f2b0507cc3e55e11d8178 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/login:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/login:login.html.twig"));

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

        echo " FP Emplea - Inicia sesión";
        
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
        echo "<section id=\"login-screen\">
    ";
        // line 6
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 7
            echo "        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-8 col-xs-10 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 box-login\">
                <h2>Bienvenido ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nif", array()), "html", null, true);
            echo "</h2>
                <p>
                ";
            // line 11
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT") && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 0))) {
                // line 12
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_estudiante", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                        Crear perfil
                    </a>
                ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMPANY") && ($this->getAttribute($this->getAttribute(            // line 15
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 0))) {
                // line 16
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_empresa", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                        <span class=\"txto\">
                          Crear perfil
                        </span>
                    </a>
                ";
            } elseif (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL") && ($this->getAttribute($this->getAttribute(            // line 21
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 0))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crear_centro", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "done", array()) == 1)) {
                // line 29
                echo "                    <span>
                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  180 => 69,  168 => 60,  165 => 59,  149 => 46,  143 => 43,  138 => 40,  133 => 37,  128 => 34,  121 => 30,  118 => 29,  116 => 28,  112 => 26,  104 => 22,  102 => 21,  93 => 16,  91 => 15,  84 => 12,  82 => 11,  77 => 9,  73 => 7,  71 => 6,  68 => 5,  59 => 4,  41 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/login/login.html.twig #}
{% extends \"base.html.twig\" %}
{% block title %} FP Emplea - Inicia sesión{% endblock %}
{% block body %}
<section id=\"login-screen\">
    {% if (is_granted('ROLE_COMPANY')) or (is_granted('ROLE_STUDENT')) or (is_granted('ROLE_SCHOOL')) or (is_granted('ROLE_ADMIN')) %}
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-8 col-xs-10 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 box-login\">
                <h2>Bienvenido {{ app.user.nif }}</h2>
                <p>
                {% if is_granted('ROLE_STUDENT') and (app.user.done == 0)%}
                    <a href=\"{{ path('crear_estudiante', {'id':app.user.id}) }}\" class=\"button cta-2\">
                        Crear perfil
                    </a>
                {% elseif is_granted('ROLE_COMPANY') and (app.user.done == 0)%}
                    <a href=\"{{ path('crear_empresa', {'id':app.user.id}) }}\" class=\"button cta-2\">
                        <span class=\"txto\">
                          Crear perfil
                        </span>
                    </a>
                {% elseif is_granted('ROLE_SCHOOL') and (app.user.done == 0)%}
                    <a href=\"{{ path('crear_centro', {'id':app.user.id}) }}\" class=\"button cta-2\">
                        Crear perfil
                    </a>
                {% endif %}
                </p>
                <p>
                {% if app.user.done == 1 %}
                    <span>
                        <a href=\"{{ path('profile', {'idUser':app.user.id}) }}\" class=\"button cta-2\">Ir a mi cuenta</a>
                    </span>
                </p>
                {% else %}
                    Haz click en el botón superior <b>\"Crear perfil\"</b> para empezar a utilizar FP-Emplea
                </p>
                {% endif %}
            </div>
        </div>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-8 col-xs-10 col-lg-offset-4 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 box-login-form\">
                <h2>Inicia sesión</h2>
                <form action=\"{{ path('login_check') }}\" method=\"post\">
                    <p>
                        <label for=\"_username\">DNI/NIF</label>
                        <input type=\"text\" name=\"_username\" id=\"username\" value=\"{{ last_username }}\" class=\"form-control\">
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
                    <a id=\"forgot-mail\" class=\"color-white\"{# href=\"{{ path('forgot_password') }}\" #}>He olvidado la contraseña</a>
                    <form id=\"pass-form\" action=\"{{ path('forgot_password') }}\" style=\"display:none;\">
                        <label for=\"email\">Email/NIF</label>
                        <input type=\"text\" name=\"email\" id=\"mail-text\" class=\"form-control\">
                        <button class=\"button cta-1\" type=\"submit\">Enviar</button>
                    </form>
                </p>
            </div>
        </div>
    {% endif %}
</section>
{% endblock %}", ":Frontend/login:login.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/login/login.html.twig");
    }
}
