<?php

/* :Frontend:socialNetworkList.html.twig */
class __TwigTemplate_8b63a78df6149028f2eb92f9f53be4171421f609ed8d995ea514bf6228ee631d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, ($context["sn"] ?? null)) == 0)) {
            // line 2
            echo "    <div class=\"social-list-edit empty \">
        <hr class=\"color-white\">
        <p class=\"empty\">
            <i class=\"disabled\">
                Todavía no has agregado ninguna red social    
            </i>
        </p>
    </div>
";
        } else {
            // line 11
            echo "    <div class=\"social-list-edit\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sn"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 13
                echo "        ";
                if (($this->getAttribute($this->getAttribute($context["s"], "sn", array()), "nombre", array()) == "facebook")) {
                    // line 14
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-facebook socialIcon facebook\"></i>
                <span class=\"social-url\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 23
$context["s"], "sn", array()), "nombre", array()) == "twitter")) {
                    // line 24
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-twitter socialIcon twitter\"></i>
                <span class=\"social-url\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 33
$context["s"], "sn", array()), "nombre", array()) == "instagram")) {
                    // line 34
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-instagram socialIcon instagram\"></i>
                <span class=\"social-url\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 43
$context["s"], "sn", array()), "nombre", array()) == "vimeo")) {
                    // line 44
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-vimeo socialIcon vimeo\"></i>
                <span class=\"social-url\">";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 53
$context["s"], "sn", array()), "nombre", array()) == "youtube")) {
                    // line 54
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-youtube socialIcon youtube\"></i>
                <span class=\"social-url\">";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 63
$context["s"], "sn", array()), "nombre", array()) == "linkedin")) {
                    // line 64
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-linkedin socialIcon linkedin\"></i>
                <span class=\"social-url\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 73
$context["s"], "sn", array()), "nombre", array()) == "google+")) {
                    // line 74
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\" class=\"social-item\">
            <a href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "\" class=\"socialLink\">
                <i class=\"fa fa-google socialIcon google\"></i>
                <span class=\"social-url\">";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "snurl", array()), "html", null, true);
                    echo "</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn(";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                }
                // line 84
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return ":Frontend:socialNetworkList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 85,  244 => 84,  232 => 79,  227 => 77,  222 => 75,  216 => 74,  214 => 73,  203 => 69,  198 => 67,  193 => 65,  187 => 64,  185 => 63,  174 => 59,  169 => 57,  164 => 55,  158 => 54,  156 => 53,  145 => 49,  140 => 47,  135 => 45,  129 => 44,  127 => 43,  116 => 39,  111 => 37,  106 => 35,  100 => 34,  98 => 33,  87 => 29,  82 => 27,  77 => 25,  71 => 24,  69 => 23,  58 => 19,  53 => 17,  48 => 15,  42 => 14,  39 => 13,  35 => 12,  32 => 11,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend:socialNetworkList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/socialNetworkList.html.twig");
    }
}
