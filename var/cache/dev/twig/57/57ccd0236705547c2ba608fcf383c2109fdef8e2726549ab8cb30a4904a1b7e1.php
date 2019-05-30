<?php

/* :Frontend:socialNetworkList.html.twig */
class __TwigTemplate_e9ea64c97725a6ad1722f72b15726641720cd403a0a2423de64f2017516cdf8c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:socialNetworkList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend:socialNetworkList.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ($context["sn"] ?? $this->getContext($context, "sn"))) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["sn"] ?? $this->getContext($context, "sn")));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 13
                echo "        ";
                if (($this->getAttribute($this->getAttribute($context["s"], "sn", array()), "nombre", array()) == "facebook")) {
                    // line 14
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 23
$context["s"], "sn", array()), "nombre", array()) == "twitter")) {
                    // line 24
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 33
$context["s"], "sn", array()), "nombre", array()) == "instagram")) {
                    // line 34
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 43
$context["s"], "sn", array()), "nombre", array()) == "vimeo")) {
                    // line 44
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 53
$context["s"], "sn", array()), "nombre", array()) == "youtube")) {
                    // line 54
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 63
$context["s"], "sn", array()), "nombre", array()) == "linkedin")) {
                    // line 64
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 73
$context["s"], "sn", array()), "nombre", array()) == "google+")) {
                    // line 74
                    echo "        <span id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sn_del", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "usRelationId" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  256 => 85,  250 => 84,  238 => 79,  233 => 77,  228 => 75,  222 => 74,  220 => 73,  209 => 69,  204 => 67,  199 => 65,  193 => 64,  191 => 63,  180 => 59,  175 => 57,  170 => 55,  164 => 54,  162 => 53,  151 => 49,  146 => 47,  141 => 45,  135 => 44,  133 => 43,  122 => 39,  117 => 37,  112 => 35,  106 => 34,  104 => 33,  93 => 29,  88 => 27,  83 => 25,  77 => 24,  75 => 23,  64 => 19,  59 => 17,  54 => 15,  48 => 14,  45 => 13,  41 => 12,  38 => 11,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sn|length == 0 %}
    <div class=\"social-list-edit empty \">
        <hr class=\"color-white\">
        <p class=\"empty\">
            <i class=\"disabled\">
                Todavía no has agregado ninguna red social    
            </i>
        </p>
    </div>
{% else %}
    <div class=\"social-list-edit\">
    {% for s in sn %}
        {% if s.sn.nombre == 'facebook' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-facebook socialIcon facebook\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% elseif s.sn.nombre == 'twitter' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-twitter socialIcon twitter\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% elseif s.sn.nombre == 'instagram' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-instagram socialIcon instagram\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% elseif s.sn.nombre == 'vimeo' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-vimeo socialIcon vimeo\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% elseif s.sn.nombre == 'youtube' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-youtube socialIcon youtube\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% elseif s.sn.nombre == 'linkedin' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-linkedin socialIcon linkedin\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% elseif s.sn.nombre == 'google+' %}
        <span id=\"{{app.user.id}}{{s.id}}\" class=\"social-item\">
            <a href=\"{{s.snurl}}\" class=\"socialLink\">
                <i class=\"fa fa-google socialIcon google\"></i>
                <span class=\"social-url\">{{s.snurl}}</span>
            </a>
            <button class=\"nobutton\" onclick=\"deleteSn({{app.user.id}}, {{s.id}}, '{{ path('sn_del', {'idUser':app.user.id, 'usRelationId': s.id}) }}')\">
                <i class=\"fa fa-close\"></i>
            </button>
        </span>
        {% endif %}
    {% endfor %}
    </div>
{% endif %}", ":Frontend:socialNetworkList.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/socialNetworkList.html.twig");
    }
}
