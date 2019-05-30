<?php

/* Frontend/indexFront.html.twig */
class __TwigTemplate_7ab8ee0783c61ff6dde0b184b2681e0690b2695d9d34bdced34a4aaf4be740a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Frontend/indexFront.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Frontend/indexFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Frontend/indexFront.html.twig"));

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
        echo "
<section id=\"mod_a1\" class=\"row\">
    <div class=\"col-lg-7 col-md-6 col-sm-6 col-xs-12 left-container\">
        <article class=\"left-content\">
            <header>
                <h1>
                    FP Emplea
                </h1>
            </header>
            <p>
                FP Emplea es una aplicación que permite gestionar la bolsa de empleo de los centros educativos públicos de Aragón, que tienen entre su oferta formativa enseñanzas de Formación Profesional (FP) y/o Formación Para el Empleo (FPE).
            </p>
        </article>
    </div>
    <div class=\"col-lg-5 col-md-6 col-sm-6 col-xs-12 right-container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/intro/intro-1.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                <p>
                    FP Emplea es una plataforma para poner en contacto a empresas y trabajadores.
                </p>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/intro/intro-2.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                <p>
                    Facilita la contratación del mismo supervisando el proceso de principio a fin.
                </p>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/intro/intro-3.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                <p>
                    Búsqueda de competencias que mejor se adapten a las necesidades del puesto a cubrir.
                </p>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/intro/intro-4.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                <p>
                    Los alumnos crearán sus perfiles y podrán postularse a ofertas que más se ajusten a sus intereses.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Termina aqui -->

<!-- Parallax -->
<!-- FIXME: Setup with animatefy parallax -->
<section id=\"mod_a2\" class=\"row\">
    <header class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h2>
            Objetivo
        </h2>
    </header>
    <div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12 left-content\">
        <p>
            FP Emplea es una plataforma para <strong>poner en contacto a empresas y trabajadores</strong>. Su objetivo es la inserción laboral del alumnado que se ha formado en los <strong>Centros de Formación Profesional</strong>, y dar una herramienta eficiente a las empresas para encontrar candidatos idóneos para sus ofertas de empleo.
        </p>
        <p>
            Este servicio de intermediación ofrece una práctica búsqueda a ambas partes, a las que permite <strong>compartir información coordinando oferta y demanda de forma voluntaria.</strong>
        </p>
    </div>
    <div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-12 right-content\">
        <div class=\"right-container\">
            <p>
                <a href=\"\" class=\"cta cta-4\" data-toggle=\"modal\" data-target=\"#register\">
                  <span class=\"button-content\">
                    <i class=\"register icon\"></i>
                    Regístrate
                  </span>
                </a>
            </p>
            <p>
                <a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_login");
        echo "\" class=\"cta cta-4\">
                  <span class=\"button-content\">
                    <i class=\"login icon\"></i>
                    Inicio de sesión
                  </span>
                </a>
            </p>
        </div>
    </div>
</section>
<!-- Termina aqui -->

<section id=\"mod_a3\" class=\"row\">
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            ";
        // line 91
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["applicants"]) ? $context["applicants"] : $this->getContext($context, "applicants"))), "html", null, true);
        echo "
        </p>
        <p class=\"text\">
            Alumnos
        </p>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            ";
        // line 99
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["schools"]) ? $context["schools"] : $this->getContext($context, "schools"))), "html", null, true);
        echo "
        </p>
        <p class=\"text\">
            Centros
        </p>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            ";
        // line 107
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies"))), "html", null, true);
        echo "
        </p>
        <p class=\"text\">
            Empresas
        </p>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            ";
        // line 115
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers"))), "html", null, true);
        echo "
        </p>
        <p class=\"text\">
            Ofertas
        </p>
    </div>
</section>


<!-- Timeline -->
<section id=\"mod_a4\" class=\"row\">
    <header class=\"col-lg-8 col-md-9 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1\">
        <h2>
            ¿Cómo usar FP Emplea?
        </h2>
    </header>
    <div class=\"col-lg-8 col-md-9 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-1\">
        <p>
            Te resumimos a continuación en <strong>5 sencillos pasos</strong>, cómo sacar el máximo rendimiento a la bolsa de trabajo de FPEmplea. El objetivo es que encuentres, si eres alumn@, una propuesta de empleo idónea para tu perfil, y, si eres empresa, al alumnado más competente a nivel técnico y personal, para tu oferta.
        </p>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 items-container\">
        <div class=\"row\">
            <!-- 1 -->
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 col-lg-offset-3\">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/1.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 1.</strong> Regístrate
                </h4>
                <p>
                    Sólo tienes que ser alumnado de nuestro centro o empresa colaboradora para poder acceder a FPEmplea. El registro dura apenas unos segundos. Recibirás un correo para confirmar que lo has hecho con éxito.
                </p>
            </div>
        </div>

        <!-- 2 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9\">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/2.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 2.</strong> Perfil
                </h4>
                <p>
                    Necesitamos tu perfil como alumn@ o empresa, para poder gestionar mejor las ofertas de empleo que nos lleguen. Cuanto más completo sea ese perfil, más posibilidades de que las empresas afinen en su búsqueda y que tú puedas filtrar las ofertas más interesantes.
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 \">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/3.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 3.</strong> Busca
                </h4>
                <p>
                    Ahora que ya tienes perfil en la web, sólo tienes que empezar a buscar entre las ofertas publicadas y las empresas del sector que te interesen; por su parte, como empresa, también puedes filtrar las principales competencias técnicas y personales que estás buscando.
                </p>
            </div>
        </div>

        <!-- 4 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 \">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/4.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 4.</strong> Encuentra
                </h4>
                <p>
                    FPEmplea busca que alumnado y empresas podáis encontrar ese trabajo que buscáis o a la persona idónea que necesitáis para un puesto, en el menor tiempo posible, y de la forma más eficiente. También os ofrece la opción de contactar directamente para acelerar procesos.
                </p>
            </div>
        </div>

        <!-- 5 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 col-lg-offset-2\">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/5.png")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 5.</strong> Finaliza
                </h4>
                <p>
                    Y, eso sí, una vez que concluya el proceso de selección de una oferta, te pediremos que nos confirmes (con un simple click) si tu búsqueda ha acabado con una contratación o por el contrario no has encontrado a la persona candidata que buscabas.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Termina aqui -->

<section id=\"mod_a5\" class=\"row\">
    <div class=\" col-xs-12 col-sm-4 col-md-4 col-lg-4 item\">
        <img class=\"img-responsive\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto1.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        <div class=\"caption\">
            <h2>
                Empresas
            </h2>
            <p>
                Tiene la posibilidad de filtrar entre los perfiles del alumnado, para detectar las competencias personales y profesionales que mejor se adapten a las necesidades del puesto de trabajo que precisa cubrir.
            </p>
        </div>
    </div>

    <div class=\" col-xs-12 col-sm-4 col-md-4 col-lg-4 item\">
        <img class=\"img-responsive\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto2.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        <div class=\"caption\">
            <h2>
                Alumnos
            </h2>
            <p>
                Puede registrarse incorporando tanto sus capacidades profesionales como competencias personales, dentro de la ocupación que le gustaría desempeñar, a la vez que tendrán la opción de revisar y postularse a las ofertas que mejor se ajusten a sus intereses.
            </p>
        </div>
    </div>

    <div class=\" col-xs-12 col-sm-4 col-md-4 col-lg-4 item\">
        <img class=\"img-responsive\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto3.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        <div class=\"caption\">
            <h2>
                Centros educativos
            </h2>
            <p>
                Puede registrarse incorporando tanto sus capacidades profesionales como competencias personales, dentro de la ocupación que le gustaría desempeñar, a la vez que tendrán la opción de revisar y postularse a las ofertas que mejor se ajusten a sus intereses.
            </p>
        </div>
    </div>

</section>

<!-- Partners -->
<section id=\"mod_a6\" class=\"row\">
    <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
        <h2 class=\"text-center\">Empresas colaboradoras</h2>
    </div>
    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1\">
        <div class=\"row text-center\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                <a href=\"http://www.k-tuin.com/\" target=\"_blank\">
                    <img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/empresas/ktuin-2.png")), "html", null, true);
        echo "\" class=\"\" alt=\"\">
                </a>
            </div>

            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                <a href=\"https://novadevs.com/\" target=\"_blank\">
                    <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/empresas/novadevs.png")), "html", null, true);
        echo "\" class=\"\" alt=\"Desarrollo y diseño web en Zaragoza\" >
                </a>
            </div>

            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                <a href=\"http://www.entropystudio.net/\" target=\"_blank\">
                    <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/empresas/entropy.png")), "html", null, true);
        echo "\" class=\"\" alt=\"\" style=\"padding:20px;\">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Termina aqui -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontend/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 275,  389 => 269,  380 => 263,  355 => 241,  340 => 229,  325 => 217,  306 => 201,  288 => 186,  270 => 171,  252 => 156,  234 => 141,  205 => 115,  194 => 107,  183 => 99,  172 => 91,  154 => 76,  114 => 39,  105 => 33,  96 => 27,  87 => 21,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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

<section id=\"mod_a1\" class=\"row\">
    <div class=\"col-lg-7 col-md-6 col-sm-6 col-xs-12 left-container\">
        <article class=\"left-content\">
            <header>
                <h1>
                    FP Emplea
                </h1>
            </header>
            <p>
                FP Emplea es una aplicación que permite gestionar la bolsa de empleo de los centros educativos públicos de Aragón, que tienen entre su oferta formativa enseñanzas de Formación Profesional (FP) y/o Formación Para el Empleo (FPE).
            </p>
        </article>
    </div>
    <div class=\"col-lg-5 col-md-6 col-sm-6 col-xs-12 right-container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/png/intro/intro-1.png')) }}\" alt=\"Generic placeholder image\">
                <p>
                    FP Emplea es una plataforma para poner en contacto a empresas y trabajadores.
                </p>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/png/intro/intro-2.png')) }}\" alt=\"Generic placeholder image\">
                <p>
                    Facilita la contratación del mismo supervisando el proceso de principio a fin.
                </p>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/png/intro/intro-3.png')) }}\" alt=\"Generic placeholder image\">
                <p>
                    Búsqueda de competencias que mejor se adapten a las necesidades del puesto a cubrir.
                </p>
            </div>
            <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/png/intro/intro-4.png')) }}\" alt=\"Generic placeholder image\">
                <p>
                    Los alumnos crearán sus perfiles y podrán postularse a ofertas que más se ajusten a sus intereses.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Termina aqui -->

<!-- Parallax -->
<!-- FIXME: Setup with animatefy parallax -->
<section id=\"mod_a2\" class=\"row\">
    <header class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
        <h2>
            Objetivo
        </h2>
    </header>
    <div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12 left-content\">
        <p>
            FP Emplea es una plataforma para <strong>poner en contacto a empresas y trabajadores</strong>. Su objetivo es la inserción laboral del alumnado que se ha formado en los <strong>Centros de Formación Profesional</strong>, y dar una herramienta eficiente a las empresas para encontrar candidatos idóneos para sus ofertas de empleo.
        </p>
        <p>
            Este servicio de intermediación ofrece una práctica búsqueda a ambas partes, a las que permite <strong>compartir información coordinando oferta y demanda de forma voluntaria.</strong>
        </p>
    </div>
    <div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-12 right-content\">
        <div class=\"right-container\">
            <p>
                <a href=\"\" class=\"cta cta-4\" data-toggle=\"modal\" data-target=\"#register\">
                  <span class=\"button-content\">
                    <i class=\"register icon\"></i>
                    Regístrate
                  </span>
                </a>
            </p>
            <p>
                <a href=\"{{ path('homepage_login') }}\" class=\"cta cta-4\">
                  <span class=\"button-content\">
                    <i class=\"login icon\"></i>
                    Inicio de sesión
                  </span>
                </a>
            </p>
        </div>
    </div>
</section>
<!-- Termina aqui -->

<section id=\"mod_a3\" class=\"row\">
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            {{ applicants|length }}
        </p>
        <p class=\"text\">
            Alumnos
        </p>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            {{ schools|length }}
        </p>
        <p class=\"text\">
            Centros
        </p>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            {{ companies|length }}
        </p>
        <p class=\"text\">
            Empresas
        </p>
    </div>
    <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12 item\">
        <p class=\"number\">
            {{offers|length}}
        </p>
        <p class=\"text\">
            Ofertas
        </p>
    </div>
</section>


<!-- Timeline -->
<section id=\"mod_a4\" class=\"row\">
    <header class=\"col-lg-8 col-md-9 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1\">
        <h2>
            ¿Cómo usar FP Emplea?
        </h2>
    </header>
    <div class=\"col-lg-8 col-md-9 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-1\">
        <p>
            Te resumimos a continuación en <strong>5 sencillos pasos</strong>, cómo sacar el máximo rendimiento a la bolsa de trabajo de FPEmplea. El objetivo es que encuentres, si eres alumn@, una propuesta de empleo idónea para tu perfil, y, si eres empresa, al alumnado más competente a nivel técnico y personal, para tu oferta.
        </p>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 items-container\">
        <div class=\"row\">
            <!-- 1 -->
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 col-lg-offset-3\">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/icons/1.png')) }}\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 1.</strong> Regístrate
                </h4>
                <p>
                    Sólo tienes que ser alumnado de nuestro centro o empresa colaboradora para poder acceder a FPEmplea. El registro dura apenas unos segundos. Recibirás un correo para confirmar que lo has hecho con éxito.
                </p>
            </div>
        </div>

        <!-- 2 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9\">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/icons/2.png')) }}\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 2.</strong> Perfil
                </h4>
                <p>
                    Necesitamos tu perfil como alumn@ o empresa, para poder gestionar mejor las ofertas de empleo que nos lleguen. Cuanto más completo sea ese perfil, más posibilidades de que las empresas afinen en su búsqueda y que tú puedas filtrar las ofertas más interesantes.
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 \">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/icons/3.png')) }}\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 3.</strong> Busca
                </h4>
                <p>
                    Ahora que ya tienes perfil en la web, sólo tienes que empezar a buscar entre las ofertas publicadas y las empresas del sector que te interesen; por su parte, como empresa, también puedes filtrar las principales competencias técnicas y personales que estás buscando.
                </p>
            </div>
        </div>

        <!-- 4 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 \">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/icons/4.png')) }}\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 4.</strong> Encuentra
                </h4>
                <p>
                    FPEmplea busca que alumnado y empresas podáis encontrar ese trabajo que buscáis o a la persona idónea que necesitáis para un puesto, en el menor tiempo posible, y de la forma más eficiente. También os ofrece la opción de contactar directamente para acelerar procesos.
                </p>
            </div>
        </div>

        <!-- 5 -->
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-9 col-lg-offset-2\">
                <div class=\"number\">
                    <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/icons/5.png')) }}\" alt=\"Generic placeholder image\">
                </div>
                <h4>
                    <strong>Paso 5.</strong> Finaliza
                </h4>
                <p>
                    Y, eso sí, una vez que concluya el proceso de selección de una oferta, te pediremos que nos confirmes (con un simple click) si tu búsqueda ha acabado con una contratación o por el contrario no has encontrado a la persona candidata que buscabas.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Termina aqui -->

<section id=\"mod_a5\" class=\"row\">
    <div class=\" col-xs-12 col-sm-4 col-md-4 col-lg-4 item\">
        <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto1.jpg')) }}\" alt=\"Generic placeholder image\">
        <div class=\"caption\">
            <h2>
                Empresas
            </h2>
            <p>
                Tiene la posibilidad de filtrar entre los perfiles del alumnado, para detectar las competencias personales y profesionales que mejor se adapten a las necesidades del puesto de trabajo que precisa cubrir.
            </p>
        </div>
    </div>

    <div class=\" col-xs-12 col-sm-4 col-md-4 col-lg-4 item\">
        <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto2.jpg')) }}\" alt=\"Generic placeholder image\">
        <div class=\"caption\">
            <h2>
                Alumnos
            </h2>
            <p>
                Puede registrarse incorporando tanto sus capacidades profesionales como competencias personales, dentro de la ocupación que le gustaría desempeñar, a la vez que tendrán la opción de revisar y postularse a las ofertas que mejor se ajusten a sus intereses.
            </p>
        </div>
    </div>

    <div class=\" col-xs-12 col-sm-4 col-md-4 col-lg-4 item\">
        <img class=\"img-responsive\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto3.jpg')) }}\" alt=\"Generic placeholder image\">
        <div class=\"caption\">
            <h2>
                Centros educativos
            </h2>
            <p>
                Puede registrarse incorporando tanto sus capacidades profesionales como competencias personales, dentro de la ocupación que le gustaría desempeñar, a la vez que tendrán la opción de revisar y postularse a las ofertas que mejor se ajusten a sus intereses.
            </p>
        </div>
    </div>

</section>

<!-- Partners -->
<section id=\"mod_a6\" class=\"row\">
    <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
        <h2 class=\"text-center\">Empresas colaboradoras</h2>
    </div>
    <div class=\"col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1\">
        <div class=\"row text-center\">
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                <a href=\"http://www.k-tuin.com/\" target=\"_blank\">
                    <img src=\"{{ absolute_url(asset('assets/img/empresas/ktuin-2.png')) }}\" class=\"\" alt=\"\">
                </a>
            </div>

            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                <a href=\"https://novadevs.com/\" target=\"_blank\">
                    <img src=\"{{ absolute_url(asset('assets/img/empresas/novadevs.png')) }}\" class=\"\" alt=\"Desarrollo y diseño web en Zaragoza\" >
                </a>
            </div>

            <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                <a href=\"http://www.entropystudio.net/\" target=\"_blank\">
                    <img src=\"{{ absolute_url(asset('assets/img/empresas/entropy.png')) }}\" class=\"\" alt=\"\" style=\"padding:20px;\">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Termina aqui -->
{% endblock %}
", "Frontend/indexFront.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/indexFront.html.twig");
    }
}
