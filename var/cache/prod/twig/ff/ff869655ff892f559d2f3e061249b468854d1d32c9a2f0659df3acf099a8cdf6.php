<?php

/* EasyAdminBundle:default:paginator.html.twig */
class __TwigTemplate_088c444d7391e8bd3f8b4b3f09da87347fec2ff175c5583ccd4e7d40933ea177 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("referer" => null));
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["paginator"] ?? null), "haveToPaginate", array())) {
            // line 6
            echo "    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs list-pagination-counter\">
                ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.counter", array("%start%" => $this->getAttribute(($context["paginator"] ?? null), "currentPageOffsetStart", array()), "%end%" => $this->getAttribute(($context["paginator"] ?? null), "currentPageOffsetEnd", array()), "%results%" => $this->getAttribute(($context["paginator"] ?? null), "nbResults", array())), "EasyAdminBundle");
            echo "
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator ";
            // line 13
            echo (((1 == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) ? ("first-page") : (""));
            echo " ";
            echo (($this->getAttribute(($context["paginator"] ?? null), "hasNextPage", array())) ? ("") : ("last-page"));
            echo "\">
                    ";
            // line 14
            if ((1 == $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) {
                // line 15
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            } else {
                // line 21
                echo "                        <li>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), array("page" => 1))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 27
            echo "
                    ";
            // line 28
            if ($this->getAttribute(($context["paginator"] ?? null), "hasPreviousPage", array())) {
                // line 29
                echo "                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), array("page" => $this->getAttribute(($context["paginator"] ?? null), "previousPage", array())))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            } else {
                // line 35
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if ($this->getAttribute(($context["paginator"] ?? null), "hasNextPage", array())) {
                // line 43
                echo "                        <li>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), array("page" => $this->getAttribute(($context["paginator"] ?? null), "nextPage", array())))), "html", null, true);
                echo "\">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 49
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 55
            echo "
                    ";
            // line 56
            if (($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) < $this->getAttribute(($context["paginator"] ?? null), "nbPages", array()))) {
                // line 57
                echo "                        <li>
                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? null), array("page" => $this->getAttribute(($context["paginator"] ?? null), "nbPages", array())))), "html", null, true);
                echo "\">
                                ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 63
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 69
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 69,  157 => 65,  153 => 63,  146 => 59,  142 => 58,  139 => 57,  137 => 56,  134 => 55,  127 => 51,  123 => 49,  116 => 45,  112 => 44,  109 => 43,  107 => 42,  104 => 41,  97 => 37,  93 => 35,  86 => 31,  82 => 30,  79 => 29,  77 => 28,  74 => 27,  67 => 23,  63 => 22,  60 => 21,  53 => 17,  49 => 15,  47 => 14,  41 => 13,  34 => 9,  29 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:paginator.html.twig", "/Users/blorente/Sites/fpemplea/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
