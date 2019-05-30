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
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relacionOE"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 53
                    echo "                            ";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["r"], "perfilestudianteid", array()), "idusuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 54
$context["r"], "perfilestudianteid", array()), "idusuario", array()), "id", array()) == $this->getAttribute($this->getAttribute(($context["estudiante"] ?? null), "idusuario", array()), "id", array())))) {
                        // line 55
                        echo "                                Estás inscrito a esta oferta
                                <a class=\"button cta-1\" href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                        echo "\">
                                    ";
                        // line 58
                        echo "                                        Ver empresa
                                    ";
                        // line 60
                        echo "                                </a>
                            ";
                    }
                    // line 62
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("postular_oferta", array("id" => $this->getAttribute(($context["oferta"] ?? null), "id", array()), "idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-2\">
                          ";
                // line 65
                echo "                            Postular
                          ";
                // line 67
                echo "                        </a>
                        <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"button cta-1\">
                          ";
                // line 70
                echo "                            Ver empresa
                          ";
                // line 72
                echo "                        </a>
                        
                    ";
            }
            // line 75
            echo "                        
                ";
            // line 77
            echo "                ";
            // line 83
            echo "                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SCHOOL")) {
            // line 84
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("publicProfile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["oferta"] ?? null), "idempresa", array()), "idusuario", array()), "id", array()), "idVisitor" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\" class=\"button cta-1\">
                       ";
            // line 86
            echo "                        Ver empresa
                      ";
            // line 88
            echo "                    </a>
                ";
        }
        // line 90
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "#offers\" class=\"button cta-1\">
                    ";
        // line 92
        echo "                        Ir a mi perfil
                    ";
        // line 94
        echo "                </a>
                <a href=\"";
        // line 95
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
        return array (  195 => 95,  192 => 94,  189 => 92,  184 => 90,  180 => 88,  177 => 86,  172 => 84,  169 => 83,  167 => 77,  164 => 75,  159 => 72,  156 => 70,  152 => 68,  149 => 67,  146 => 65,  141 => 63,  135 => 62,  131 => 60,  128 => 58,  124 => 56,  121 => 55,  119 => 54,  117 => 53,  112 => 52,  109 => 51,  107 => 50,  92 => 38,  84 => 33,  77 => 29,  70 => 25,  63 => 21,  52 => 13,  45 => 9,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
