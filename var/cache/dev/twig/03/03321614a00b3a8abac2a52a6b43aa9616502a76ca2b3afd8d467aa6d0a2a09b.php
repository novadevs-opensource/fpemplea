<?php

/* :Frontend:old-indexFront.html.twig */
class __TwigTemplate_396ed66144277a33c70caefe0d2c67b0c0b44eea046537f4fab667801656ba6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:old-indexFront.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:old-indexFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:old-indexFront.html.twig"));

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

        echo " 
  <section id=\"slider\" class=\"row\">
      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/slide1.jpg")), "html", null, true);
        echo "\"  >
            <div class=\"carousel-caption\">
              <h3>
                OBJETIVO GENERAL
              </h3>
              <p class=\"caption-desc\">
                FP Emplea es una plataforma para poner en contacto a empresas y trabajadores. Su objetivo es la inserción laboral del alumnado que se ha formado en los Centros de Formación Profesional, y dar una herramienta eficiente a las empresas para encontrar candidatos idóneos para sus ofertas de empleo.
                Este servicio de intermediación ofrece una práctica búsqueda a ambas partes, a las que permite compartir información coordinando oferta y demanda de forma voluntaria.
              </p>
            </div>
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/slide2.jpg")), "html", null, true);
        echo "\" >
            
            <div class=\"carousel-caption\">
              <h3>CENTRO EDUCATIVO</h3>
              <p class=\"caption-desc\">Hace de intermediario entre empresa y alumnado para facilitar la contratación del mismo supervisando el proceso de principio a fin, y ofreciendo a ambos una comunicación ágil y efectiva. Al final del proceso, controla las contrataciones efectivas que se realizan. </p>
            </div>
            
          </div>
          
          <div class=\"item\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/slide3.jpg")), "html", null, true);
        echo "\"  >
            <div class=\"carousel-caption\">
              <h3>EMPRESA</h3>
              <p class=\"caption-desc\">Tiene la posibilidad de filtrar entre los perfiles del alumnado, para detectar las competencias personales y profesionales que mejor se adapten a las necesidades del puesto de trabajo que precisa cubrir. </p>
            </div>
          </div>
          
          
          <div class=\"item\">
            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slider/slide4.jpg")), "html", null, true);
        echo "\" >
            
            <div class=\"carousel-caption\">
              <h3>ALUMNADO</h3>
              <p class=\"caption-desc\"><span>Puede registrarse incorporando tanto sus capacidades profesionales como competencias personales, dentro de la ocupación que le gustaría desempeñar, a la vez que tendrán la opción de revisar y postularse a las ofertas que mejor se ajusten a sus intereses. </span> </p>
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
  </section>
  <!-- Termina aqui -->
  <!-- Parallax -->
  <section id=\"mod_a1\" class=\"row\">
    <div class=\"center-block\">
      <div class=\"text-a1\">
        <h2 class=\"font1\">FPEMPLEA</h2>
        <p class=\"font1\">FPEmplea es una aplicación que permite gestionar la bolsa de empleo de los centros educativos públicos de Aragón, que tienen entre su oferta formativa enseñanzas de Formación Profesional (FP) y/o Formación Para el Empleo (FPE). </p>
        
      </div>
      
    </div>
    
    
  </section>
  <!-- Termina aqui -->
  <!-- Columnas -->
  <section id=\"info-links\" class=\"row\">
    
    
    <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \">
      
        <img class=\"img-col margin-bot-10\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto1.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        
        
        <h2 class=\"hidden-h2\"></h2>
        
     
    </div>
    
    <!-- /.col-lg-3 -->
    <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \">
     
        <img class=\"img-col margin-bot-10\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto2.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
        
        <h2 class=\"hidden-h2\"></h2>
        
    </div>
    
    <!-- /.col-lg-3 -->
    <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \"> 
      <img class=\"img-col margin-bot-10\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto3.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
      
      
      <h2 class=\"hidden-h2\"></h2>
  
  </div>
  
  <!-- /.col-lg-3 -->
  <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \">  
    <img class=\"img-col margin-bot-10\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/infolinks/foto4.jpg")), "html", null, true);
        echo "\" alt=\"Generic placeholder image\">
    
    
    <h2 class=\"hidden-h2\"></h2>
 
</div>

<!-- /.col-lg-3 -->
</section>
<!-- Termina aqui -->
<!-- Timeline -->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
        <h2 class=\"text-center howtitle \">Cómo usar FP Emplea</h2>
        <p>
          Te resumimos a continuación en 5 sencillos pasos, cómo sacar el máximo rendimiento a la bolsa de trabajo de FPEmplea. El objetivo es que encuentres, si eres alumn@, una propuesta de empleo idónea para tu perfil, y, si eres empresa, al alumnado más competente a nivel técnico y personal, para tu oferta.
        </p>
        <ul class=\"timeline\">
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"timeline-image imagen1\">
                  <img class=\"img-circle img-responsive \" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/registro.png")), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  ";
        // line 143
        echo "                    <h4>PASO 1</h4>
                    <h4 class=\"subheading\">REGÍSTRATE</h4>
                  ";
        // line 146
        echo "                  ";
        // line 147
        echo "                    <p class=\"text-muted\">
                      Sólo tienes que ser alumnado de nuestro centro o empresa colaboradora para poder acceder a FPEmplea. El registro dura apenas unos segundos. Recibirás un correo para confirmar que lo has hecho con éxito.
                    </p>
                  ";
        // line 151
        echo "                </div>
                <div class=\"line\"></div>
              </div>
            </div>
          </li>
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-right\">
                <div class=\"timeline-image imagen2\">
                  <img class=\"img-circle img-responsive \" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/jpg/perfil.jpg")), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 2</h4>
                    <h4 class=\"subheading\">PERFIL</h4>
                    <p class=\"text-muted\">
                      Necesitamos tu perfil como alumn@ o empresa, para poder gestionar mejor las ofertas de empleo que nos lleguen. Cuanto más completo sea ese perfil, más posibilidades de que las empresas afinen en su búsqueda y que tú puedas filtrar las ofertas más interesantes.
                    </p>
                </div>
                <div class=\"line\"></div>
              </div>
            </div>

          </li>
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"timeline-image imagen3\">
                  <img class=\"img-circle img-responsive \" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/busca.png")), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 3</h4>
                    <h4 class=\"subheading\">BUSCA</h4>
                    <p class=\"text-muted\">
                      Ahora que ya tienes perfil en la web, sólo tienes que empezar a buscar entre las ofertas publicadas y las empresas del sector que te interesen; por su parte, como empresa, también puedes filtrar las principales competencias técnicas y personales que estás buscando.
                    </p>
                </div>
                <div class=\"line\"></div>
              </div>
            </div>
          </li>
          <li class=\"timeline-inverted container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-right\">
                <div class=\"timeline-image imagen4\">
                  <img class=\"img-circle img-responsive \" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/encuentra.png")), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 4</h4>
                    <h4 class=\"subheading\">ENCUENTRA</h4>
                    <p class=\"text-muted\">
                      FPEmplea busca que alumnado y empresas podáis encontrar ese trabajo que buscáis o a la persona idónea que necesitáis para un puesto, en el menor tiempo posible, y de la forma más eficiente. También os ofrece la opción de contactar directamente para acelerar procesos.
                    </p>
                </div>
                <div class=\"line\"></div>
              </div>
            </div>
          </li>
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"timeline-image  imagen5\">
                  <img class=\"img-circle img-responsive\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/jpg/finaliza.jpg")), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 5</h4>
                    <h4 class=\"subheading\">FINALIZA</h4>
                    <p class=\"text-muted\">
                      Y, eso sí, una vez que concluya el proceso de selección de una oferta, te pediremos que nos confirmes (con un simple click) si tu búsqueda ha acabado con una contratación o por el contrario no has encontrado a la persona candidata que buscabas.
                    </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Termina aqui -->
<!-- Partners -->
<section id=\"partners\">
        <div class=\"row b-w\">
            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                <h2 class=\"text-center\">Empresas colaboradoras</h2>
                <hr>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"fff\">
                            <a href=\"http://www.k-tuin.com/\" target=\"_blank\">
                              <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/empresas/ktuin.png")), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <div class=\"caption hidden-xs\">
                                <h4>K-tuin</h4>
                                <a class=\"btn btn-mini\" target=\"_blank\" href=\"http://www.k-tuin.com/\">Visitar web</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"fff\">
                            <a href=\"http://grubsolutions.es/\" target=\"_blank\">
                              <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/empresas/grub.png")), "html", null, true);
        echo "\" alt=\"\" style=\"padding:5px;\">
                            </a>
                            <div class=\"caption hidden-xs\">
                                <h4>Grub Solutions</h4>
                                <a class=\"btn btn-mini\" target=\"_blank\" href=\"http://grubsolutions.es/\" target=\"_blank\">Visitar web</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"fff\">
                            <a href=\"http://www.entropystudio.net/\" target=\"_blank\">
                              <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/empresas/entropy.png")), "html", null, true);
        echo "\" alt=\"\" style=\"padding:10px;\">
                            </a>
                            <div class=\"caption hidden-xs\">
                                <h4>Entropy Studio</h4>
                                <a class=\"btn btn-mini\" target=\"_blank\" href=\"http://www.entropystudio.net/\">Visitar web</a>
                            </div>
                        </div>
                    </div>
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
        return ":Frontend:old-indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 266,  366 => 254,  351 => 242,  318 => 212,  298 => 195,  278 => 178,  257 => 160,  246 => 151,  241 => 147,  239 => 146,  235 => 143,  229 => 139,  202 => 115,  190 => 106,  179 => 98,  165 => 87,  122 => 47,  110 => 38,  97 => 28,  82 => 16,  59 => 3,  41 => 2,  11 => 1,);
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
  <section id=\"slider\" class=\"row\">
      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
          <div class=\"item active\">
            <img src=\"{{ absolute_url(asset('assets/img/slider/slide1.jpg')) }}\"  >
            <div class=\"carousel-caption\">
              <h3>
                OBJETIVO GENERAL
              </h3>
              <p class=\"caption-desc\">
                FP Emplea es una plataforma para poner en contacto a empresas y trabajadores. Su objetivo es la inserción laboral del alumnado que se ha formado en los Centros de Formación Profesional, y dar una herramienta eficiente a las empresas para encontrar candidatos idóneos para sus ofertas de empleo.
                Este servicio de intermediación ofrece una práctica búsqueda a ambas partes, a las que permite compartir información coordinando oferta y demanda de forma voluntaria.
              </p>
            </div>
          </div>
          <div class=\"item\">
            <img src=\"{{ absolute_url(asset('assets/img/slider/slide2.jpg')) }}\" >
            
            <div class=\"carousel-caption\">
              <h3>CENTRO EDUCATIVO</h3>
              <p class=\"caption-desc\">Hace de intermediario entre empresa y alumnado para facilitar la contratación del mismo supervisando el proceso de principio a fin, y ofreciendo a ambos una comunicación ágil y efectiva. Al final del proceso, controla las contrataciones efectivas que se realizan. </p>
            </div>
            
          </div>
          
          <div class=\"item\">
            <img src=\"{{ absolute_url(asset('assets/img/slider/slide3.jpg')) }}\"  >
            <div class=\"carousel-caption\">
              <h3>EMPRESA</h3>
              <p class=\"caption-desc\">Tiene la posibilidad de filtrar entre los perfiles del alumnado, para detectar las competencias personales y profesionales que mejor se adapten a las necesidades del puesto de trabajo que precisa cubrir. </p>
            </div>
          </div>
          
          
          <div class=\"item\">
            <img src=\"{{ absolute_url(asset('assets/img/slider/slide4.jpg')) }}\" >
            
            <div class=\"carousel-caption\">
              <h3>ALUMNADO</h3>
              <p class=\"caption-desc\"><span>Puede registrarse incorporando tanto sus capacidades profesionales como competencias personales, dentro de la ocupación que le gustaría desempeñar, a la vez que tendrán la opción de revisar y postularse a las ofertas que mejor se ajusten a sus intereses. </span> </p>
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
  </section>
  <!-- Termina aqui -->
  <!-- Parallax -->
  <section id=\"mod_a1\" class=\"row\">
    <div class=\"center-block\">
      <div class=\"text-a1\">
        <h2 class=\"font1\">FPEMPLEA</h2>
        <p class=\"font1\">FPEmplea es una aplicación que permite gestionar la bolsa de empleo de los centros educativos públicos de Aragón, que tienen entre su oferta formativa enseñanzas de Formación Profesional (FP) y/o Formación Para el Empleo (FPE). </p>
        
      </div>
      
    </div>
    
    
  </section>
  <!-- Termina aqui -->
  <!-- Columnas -->
  <section id=\"info-links\" class=\"row\">
    
    
    <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \">
      
        <img class=\"img-col margin-bot-10\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto1.jpg')) }}\" alt=\"Generic placeholder image\">
        
        
        <h2 class=\"hidden-h2\"></h2>
        
     
    </div>
    
    <!-- /.col-lg-3 -->
    <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \">
     
        <img class=\"img-col margin-bot-10\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto2.jpg')) }}\" alt=\"Generic placeholder image\">
        
        <h2 class=\"hidden-h2\"></h2>
        
    </div>
    
    <!-- /.col-lg-3 -->
    <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \"> 
      <img class=\"img-col margin-bot-10\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto3.jpg')) }}\" alt=\"Generic placeholder image\">
      
      
      <h2 class=\"hidden-h2\"></h2>
  
  </div>
  
  <!-- /.col-lg-3 -->
  <div class=\" col-xs-6 col-sm-6 col-md-3 col-lg-3 show-text \">  
    <img class=\"img-col margin-bot-10\" src=\"{{ absolute_url(asset('assets/img/infolinks/foto4.jpg')) }}\" alt=\"Generic placeholder image\">
    
    
    <h2 class=\"hidden-h2\"></h2>
 
</div>

<!-- /.col-lg-3 -->
</section>
<!-- Termina aqui -->
<!-- Timeline -->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
        <h2 class=\"text-center howtitle \">Cómo usar FP Emplea</h2>
        <p>
          Te resumimos a continuación en 5 sencillos pasos, cómo sacar el máximo rendimiento a la bolsa de trabajo de FPEmplea. El objetivo es que encuentres, si eres alumn@, una propuesta de empleo idónea para tu perfil, y, si eres empresa, al alumnado más competente a nivel técnico y personal, para tu oferta.
        </p>
        <ul class=\"timeline\">
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"timeline-image imagen1\">
                  <img class=\"img-circle img-responsive \" src=\"{{ absolute_url(asset('assets/img/png/registro.png')) }}\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                  {# <div class=\"timeline-heading\"> #}
                    <h4>PASO 1</h4>
                    <h4 class=\"subheading\">REGÍSTRATE</h4>
                  {# </div> #}
                  {# <div class=\"timeline-body\"> #}
                    <p class=\"text-muted\">
                      Sólo tienes que ser alumnado de nuestro centro o empresa colaboradora para poder acceder a FPEmplea. El registro dura apenas unos segundos. Recibirás un correo para confirmar que lo has hecho con éxito.
                    </p>
                  {# </div> #}
                </div>
                <div class=\"line\"></div>
              </div>
            </div>
          </li>
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-right\">
                <div class=\"timeline-image imagen2\">
                  <img class=\"img-circle img-responsive \" src=\"{{ absolute_url(asset('assets/img/jpg/perfil.jpg')) }}\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 2</h4>
                    <h4 class=\"subheading\">PERFIL</h4>
                    <p class=\"text-muted\">
                      Necesitamos tu perfil como alumn@ o empresa, para poder gestionar mejor las ofertas de empleo que nos lleguen. Cuanto más completo sea ese perfil, más posibilidades de que las empresas afinen en su búsqueda y que tú puedas filtrar las ofertas más interesantes.
                    </p>
                </div>
                <div class=\"line\"></div>
              </div>
            </div>

          </li>
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"timeline-image imagen3\">
                  <img class=\"img-circle img-responsive \" src=\"{{ absolute_url(asset('assets/img/png/busca.png')) }}\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 3</h4>
                    <h4 class=\"subheading\">BUSCA</h4>
                    <p class=\"text-muted\">
                      Ahora que ya tienes perfil en la web, sólo tienes que empezar a buscar entre las ofertas publicadas y las empresas del sector que te interesen; por su parte, como empresa, también puedes filtrar las principales competencias técnicas y personales que estás buscando.
                    </p>
                </div>
                <div class=\"line\"></div>
              </div>
            </div>
          </li>
          <li class=\"timeline-inverted container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12 pull-right\">
                <div class=\"timeline-image imagen4\">
                  <img class=\"img-circle img-responsive \" src=\"{{ absolute_url(asset('assets/img/png/encuentra.png')) }}\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 4</h4>
                    <h4 class=\"subheading\">ENCUENTRA</h4>
                    <p class=\"text-muted\">
                      FPEmplea busca que alumnado y empresas podáis encontrar ese trabajo que buscáis o a la persona idónea que necesitáis para un puesto, en el menor tiempo posible, y de la forma más eficiente. También os ofrece la opción de contactar directamente para acelerar procesos.
                    </p>
                </div>
                <div class=\"line\"></div>
              </div>
            </div>
          </li>
          <li class=\"container-fluid\">
            <div class=\"row\">
              <div class=\"col-lg-6 col-md-7 col-sm-12 col-xs-12\">
                <div class=\"timeline-image  imagen5\">
                  <img class=\"img-circle img-responsive\" src=\"{{ absolute_url(asset('assets/img/jpg/finaliza.jpg')) }}\" alt=\"\">
                </div>
                <div class=\"timeline-panel\">
                    <h4>PASO 5</h4>
                    <h4 class=\"subheading\">FINALIZA</h4>
                    <p class=\"text-muted\">
                      Y, eso sí, una vez que concluya el proceso de selección de una oferta, te pediremos que nos confirmes (con un simple click) si tu búsqueda ha acabado con una contratación o por el contrario no has encontrado a la persona candidata que buscabas.
                    </p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Termina aqui -->
<!-- Partners -->
<section id=\"partners\">
        <div class=\"row b-w\">
            <div class=\"col-lg-12 col-sm-12 col-md-12 col-xs-12\">
                <h2 class=\"text-center\">Empresas colaboradoras</h2>
                <hr>
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"fff\">
                            <a href=\"http://www.k-tuin.com/\" target=\"_blank\">
                              <img src=\"{{ absolute_url(asset('assets/img/empresas/ktuin.png')) }}\" alt=\"\">
                            </a>
                            <div class=\"caption hidden-xs\">
                                <h4>K-tuin</h4>
                                <a class=\"btn btn-mini\" target=\"_blank\" href=\"http://www.k-tuin.com/\">Visitar web</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"fff\">
                            <a href=\"http://grubsolutions.es/\" target=\"_blank\">
                              <img src=\"{{ absolute_url(asset('assets/img/empresas/grub.png')) }}\" alt=\"\" style=\"padding:5px;\">
                            </a>
                            <div class=\"caption hidden-xs\">
                                <h4>Grub Solutions</h4>
                                <a class=\"btn btn-mini\" target=\"_blank\" href=\"http://grubsolutions.es/\" target=\"_blank\">Visitar web</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                        <div class=\"fff\">
                            <a href=\"http://www.entropystudio.net/\" target=\"_blank\">
                              <img src=\"{{ absolute_url(asset('assets/img/empresas/entropy.png')) }}\" alt=\"\" style=\"padding:10px;\">
                            </a>
                            <div class=\"caption hidden-xs\">
                                <h4>Entropy Studio</h4>
                                <a class=\"btn btn-mini\" target=\"_blank\" href=\"http://www.entropystudio.net/\">Visitar web</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Termina aqui -->
        {% endblock %}", ":Frontend:old-indexFront.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/old-indexFront.html.twig");
    }
}
