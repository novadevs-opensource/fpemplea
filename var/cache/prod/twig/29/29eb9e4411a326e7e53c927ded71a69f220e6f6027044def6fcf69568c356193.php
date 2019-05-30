<?php

/* :Frontend:indexPublicProfile.html.twig */
class __TwigTemplate_2e75f5c743f13bc5c577f7fb4f0ba9a7d2b1800f8058ed399e1b02891febdf3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:indexPublicProfile.html.twig", 1);
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
        echo " FP Emplea - Perfil público de applicant.nombre ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "publicProfile")) {
            // line 5
            echo "    ";
            if ((($context["applicant"] ?? null) != null)) {
                // line 6
                echo "    <main id=\"public-applicant\" class=\"row\">
      <div class=\"public-wrapper clearfix\">
        <!--                OK-->
        <h2>Perfil público de ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "nombre", array()), "html", null, true);
                echo "</h2>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center\">
            ";
                // line 12
                if ( !(null === $this->getAttribute(($context["applicant"] ?? null), "imagen", array()))) {
                    // line 13
                    echo "                <img class=\"img-circle\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                } else {
                    // line 15
                    echo "                ";
                    // line 16
                    echo "                <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                }
                // line 18
                echo "          </div>
          <h3>Datos personales:</h3>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
            <p>
              Nombre completo:
              <span>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "nombre", array()), "html", null, true);
                echo "</span>
              <span>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "apellidos", array()), "html", null, true);
                echo "</span>
            </p>
       ";
                // line 34
                echo "          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
         ";
                // line 48
                echo "          </div>
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Formación:</h4>
          ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["applicantEdu"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ae"]) {
                    // line 54
                    echo "            <div class=\" col-xs-12 col-sm-12 col-md-6 col-lg-6\">
              <p>
                <span>
                  ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["ae"], "school", array()), "html", null, true);
                    echo "
                </span>
                --
                <span>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ae"], "formacion", array()), "titulo", array()), "html", null, true);
                    echo "</span>
                <br>
                <span>Duración: </span>
                <span>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ae"], "start", array()), "m-d-Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ae"], "end", array()), "m-d-Y"), "html", null, true);
                    echo " </span>
                <br>
                Finalizado:
                ";
                    // line 66
                    if (($this->getAttribute($context["ae"], "finished", array()) == true)) {
                        // line 67
                        echo "                  Si
                ";
                    } else {
                        // line 69
                        echo "                  No
                ";
                    }
                    // line 71
                    echo "                <br>
              </p>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ae'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Experiencia laboral:</h4>
          ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["applicantWork"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["aw"]) {
                    // line 80
                    echo "            <div class=\" col-xs-12 col-sm-12 col-md-6 col-lg-6\">
              <p>
                <span>Empresas</span> -
                <span> ";
                    // line 83
                    if (($this->getAttribute($context["aw"], "company", array()) != null)) {
                        echo " 
                                                        ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "company", array()), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 86
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "othercompany", array()), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 87
                    echo " </span>
                <br>Puesto:
                <span> ";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "position", array()), "html", null, true);
                    echo " </span>
                <br>Duración:
                <span> ";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["aw"], "workexp", array()), "html", null, true);
                    echo " </span>
                <br>
                <span>Fechas:</span>
                <span>";
                    // line 94
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aw"], "start", array()), "m-d-Y"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aw"], "end", array()), "m-d-Y"), "html", null, true);
                    echo "</span>
                <br>
              </p>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Aptitudes </h4>
          ";
                // line 103
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Skill:applicantSkillList", array("idApplicant" => $this->getAttribute(                // line 104
($context["applicant"] ?? null), "id", array()))));
                // line 106
                echo "
        </div>
        <hr>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <h4>Otros datos de interés </h4>
            ";
                // line 111
                if (($this->getAttribute(($context["applicant"] ?? null), "fexibilidadgeografica", array()) == 1)) {
                    // line 112
                    echo "                <p class=\"common-skills\">
                    <span>
                        <i class=\"fa fa-plane i-col\" aria-hidden=\"true\"> </i>
                        Disponibilidad para viajar
                    </span>
                </p>
            ";
                }
                // line 119
                echo "          </span>
        </div>
      </div>
    </main>
    ";
            }
            // line 124
            echo "    <!--OK EMPRESAS-->
    ";
            // line 125
            if ((($context["empresa"] ?? null) != null)) {
                // line 126
                echo "    <main id=\"public-company\" class=\"row\">
      <div class=\"public-wrapper clearfix\">
        <h2>Perfil público de ";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "nombreempresa", array()), "html", null, true);
                echo "</h2>
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap\">
          <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center\">
            ";
                // line 131
                if ( !(null === $this->getAttribute(($context["empresa"] ?? null), "imagen", array()))) {
                    // line 132
                    echo "                <img class=\"img-circle\" src=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("homepage");
                    echo "../uploads/profileavatar/";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "imagen", array()), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                } else {
                    // line 134
                    echo "                ";
                    // line 135
                    echo "                <img class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/png/default-user.png")), "html", null, true);
                    echo "\" alt=\"Avatar perfil candidato\">
            ";
                }
                // line 137
                echo "          </div>
          <div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6 section1\">
            <h4>Datos de la empresa:</h4>
            <p>
              Nombre empresa: <span>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "nombreempresa", array()), "html", null, true);
                echo "</span>
            </p>
            <p>
              Trabajadores: ";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "trabajadores", array()), "html", null, true);
                echo "
            </p>
            <p>
              Sector de la empresa: <span> ";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "sector", array()), "html", null, true);
                echo " </span>
            </p>
            <p>
              CIF/NIF: <span> ";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "cif", array()), "html", null, true);
                echo " </span>
            </p>
            <p>
              Dirección: <span> ";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "direccion", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "cp", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "localidad", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "pais", array()), "html", null, true);
                echo " </span>
            </p>
            <p>
              Correo electrónico: <span>  ";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "emailcontacto", array()), "html", null, true);
                echo "</span>
            </p>
            <p>
              Teléfono: <span>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute(($context["empresa"] ?? null), "telefono", array()), "html", null, true);
                echo "</span>
            </p>
          </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 wrap\">
            <h4>Descripción de la actividad empresarial</h4>
            <p>
              ";
                // line 166
                echo $this->getAttribute(($context["empresa"] ?? null), "description", array());
                echo "
            </p>
          </div>
      </div>
    </main>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return ":Frontend:indexPublicProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 166,  321 => 159,  315 => 156,  303 => 153,  297 => 150,  291 => 147,  285 => 144,  279 => 141,  273 => 137,  267 => 135,  265 => 134,  257 => 132,  255 => 131,  249 => 128,  245 => 126,  243 => 125,  240 => 124,  233 => 119,  224 => 112,  222 => 111,  215 => 106,  213 => 104,  212 => 103,  206 => 99,  193 => 94,  187 => 91,  182 => 89,  178 => 87,  172 => 86,  167 => 84,  163 => 83,  158 => 80,  154 => 79,  148 => 75,  139 => 71,  135 => 69,  131 => 67,  129 => 66,  121 => 63,  115 => 60,  109 => 57,  104 => 54,  100 => 53,  93 => 48,  89 => 34,  84 => 24,  80 => 23,  73 => 18,  67 => 16,  65 => 15,  57 => 13,  55 => 12,  49 => 9,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:indexPublicProfile.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/indexPublicProfile.html.twig");
    }
}
