<?php

/* :Frontend:verOferta.html.twig */
class __TwigTemplate_6d608035935cc7fb8908ebbaa930575a33650363d40f50f54941183b34b8d110 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend:verOferta.html.twig", 1);
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
        echo " FP Emplea ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<main id=\"offer-public\">
    <div class=\"row\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <div class=\"public-wrapper\">
                <h2 class=\"text-center\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "title", array()), "html", null, true);
        echo "
                </h2>
            </div>
            <h3 class=\"text-center t-gris\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "inscribed", array()), "html", null, true);
        echo " personas ya se han inscrito a esta oferta
            </h3>
            <hr>
        </div>
    </div>
    <div class=\"clearfix block-info\">
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <p> 
                Empresa: <strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "nombreempresa", array()), "html", null, true);
        echo "</strong>
            </p>
            <hr>
            <p>
                Tipo de contrato: <strong>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "tipo", array()), "nombre", array()), "html", null, true);
        echo "</strong>
            </p>
            <hr>
            <p>
                Sector profesional: <strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "categoria", array()), "html", null, true);
        echo "</strong>
            </p>
            <hr>
            <p>
                Plazas disponibles: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "vacancies", array()), "html", null, true);
        echo "
            </p>
        </div>
        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
            <p>
                Descripción de la oferta: <strong>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oferta"] ?? null), "descripcion", array()), "html", null, true);
        echo "</strong>
            </p>
        </div>
    </div>
    <hr>
    <div class=\"clearfix control-area block-info\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            <h3>
                Acciones
            </h3>   
            <hr>
            <p>
                ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STUDENT")) {
            // line 51
            echo "                    ";
            if (($context["relacionOE"] ?? null)) {
                // line 52
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relacionOE"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 53
                    echo "                        ";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "perfilestudianteid", array()), "idusuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "perfilestudianteid", array()), "idusuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["estudiante"] ?? null), "idusuario", array()), "id", array())))) {
                        // line 54
                        echo "                            Estás inscrito a esta oferta
                            <a class=\"button cta-1\" href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                ";
                        // line 57
                        echo "                                    Ver empresa
                                ";
                        // line 59
                        echo "                            </a>
                          ";
                    } else {
                        // line 61
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postular_oferta", array("id" => $this->getAttribute(($context["oferta"] ?? null), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\" class=\"button cta-2\">
                              ";
                        // line 63
                        echo "                                Postular
                              ";
                        // line 65
                        echo "                            </a>
                            <a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\" class=\"button cta-1\">
                              ";
                        // line 68
                        echo "                                Ver empresa
                              ";
                        // line 70
                        echo "                            </a>
                        ";
                    }
                    // line 72
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                    ";
            } else {
                // line 74
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postular_oferta", array("id" => $this->getAttribute(($context["oferta"] ?? null), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                          ";
                // line 76
                echo "                            Postular
                          ";
                // line 78
                echo "                        </a>
                        <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-1\">
                          ";
                // line 81
                echo "                            Ver empresa
                          ";
                // line 83
                echo "                        </a>
                    ";
            }
            // line 85
            echo "                        
                ";
            // line 87
            echo "                ";
            // line 93
            echo "                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) {
            // line 94
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"button cta-1\">
                       ";
            // line 96
            echo "                        Ver empresa
                      ";
            // line 98
            echo "                    </a>
                ";
        }
        // line 100
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "#offers\" class=\"button cta-1\">
                    ";
        // line 102
        echo "                        Ir a mi perfil
                    ";
        // line 104
        echo "                </a>
                <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listado_ofertas");
        echo "\" class=\"button cta-1\">
                    Listado de ofertas
                </a>
            </p>
        </div>
    </div>
    <hr>
</main>
";
    }

    public function getTemplateName()
    {
        return ":Frontend:verOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 105,  215 => 104,  212 => 102,  207 => 100,  203 => 98,  200 => 96,  195 => 94,  192 => 93,  190 => 87,  187 => 85,  183 => 83,  180 => 81,  176 => 79,  173 => 78,  170 => 76,  165 => 74,  162 => 73,  156 => 72,  152 => 70,  149 => 68,  145 => 66,  142 => 65,  139 => 63,  134 => 61,  130 => 59,  127 => 57,  123 => 55,  120 => 54,  117 => 53,  112 => 52,  109 => 51,  107 => 50,  92 => 38,  84 => 33,  77 => 29,  70 => 25,  63 => 21,  52 => 13,  45 => 9,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:verOferta.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/verOferta.html.twig");
    }
}
