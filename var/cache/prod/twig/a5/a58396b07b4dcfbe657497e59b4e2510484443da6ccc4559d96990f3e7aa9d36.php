<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_cc752781deeef9d20f71fa7d9452843d92c7c4defbf28468820125ae1cf1ed40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] = $this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? null), "name", array()), array(),         // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["_entity_config"] ?? null), "label", array()), array(),         // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null)));
        // line 7
        $context["_request_parameters"] = twig_array_merge(twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), (((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context))) ? (_twig_default_filter(($context["_request_parameters"] ?? null), array())) : (array()))), array("action" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
($context["_entity_config"] ?? null), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? null), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? null), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
($context["app"] ?? null), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("query" => (($this->getAttribute($this->getAttribute(            // line 19
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? null), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ($context["_request_parameters"] ?? null)))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute(($context["_entity_config"] ?? null), "name", array())), "html", null, true);
    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute(($context["paginator"] ?? null), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array()), "title", array()), $this->getAttribute(($context["paginator"] ?? null), "nbResults", array()), array(),             // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null))) : (            // line 34
($context["_default_title"] ?? null)));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array()), "title", array()), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null))) : (            // line 37
($context["_default_title"] ?? null)));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        // line 53
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), $this->getAttribute(($context["_request_parameters"] ?? null), "sortField", array()))) : ($this->getAttribute(($context["_request_parameters"] ?? null), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), $this->getAttribute(($context["_request_parameters"] ?? null), "sortDirection", array()))) : ($this->getAttribute(($context["_request_parameters"] ?? null), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? null), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? null), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null)), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), array("action" => $this->getAttribute(($context["_action"] ?? null), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? null), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if ($this->getAttribute(($context["_action"] ?? null), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? null), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["_action"] ?? null), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_action"] ?? null), "label", array()), ($context["_trans_parameters"] ?? null),         // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? null)) ? (((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),             // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null));
            // line 110
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? null)) ? ((((($context["nextSortDirection"] ?? null) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? null), array("page" => 1, "sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? null)))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo ($context["_column_label"] ?? null);
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo ($context["_column_label"] ?? null);
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? null), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute(($context["_entity_config"] ?? null), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? null),                 // line 2
($context["__internal_da507482ca8699a758b0b5a64a61631784e7cd026c6dc7de641fd63efc8fa82d"] ?? null));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? null), "html", null, true);
                echo "\" class=\"";
                echo ((($context["isSortingField"] ?? null)) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? null), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? null)) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? null)) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? null)))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
($context["_list_item_actions"] ?? null), "request_parameters" =>         // line 154
($context["_request_parameters"] ?? null), "translation_domain" => $this->getAttribute(        // line 155
($context["_entity_config"] ?? null), "translation_domain", array()), "trans_parameters" =>         // line 156
($context["_trans_parameters"] ?? null), "item_id" =>         // line 157
($context["_item_id"] ?? null)), false);
        // line 158
        echo "
                        ";
    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        // line 176
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array()), "paginator", array()));
        echo "
    ";
    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        // line 180
        echo "        ";
        $context["referer"] = ((((($this->getAttribute(($context["paginator"] ?? null), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? null), "nbPages", array())) && (1 != $this->getAttribute(($context["paginator"] ?? null), "currentPage", array()))) && (1 == twig_length_filter($this->env, $this->getAttribute(($context["paginator"] ?? null), "currentPageResults", array()))))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 181
($context["app"] ?? null), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 182
($context["app"] ?? null), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
($context["referer"] ?? null)), "delete_form" =>         // line 188
($context["delete_form_template"] ?? null), "_translation_domain" => $this->getAttribute(        // line 189
($context["_entity_config"] ?? null), "translation_domain", array()), "_trans_parameters" =>         // line 190
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 191
($context["_entity_config"] ?? null)), false);
        // line 192
        echo "
    ";
    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute(($context["_entity_config"] ?? null), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 242,  630 => 241,  628 => 240,  594 => 209,  578 => 197,  575 => 196,  570 => 192,  568 => 191,  567 => 190,  566 => 189,  565 => 188,  564 => 187,  563 => 185,  560 => 184,  558 => 182,  557 => 181,  555 => 180,  552 => 179,  545 => 176,  542 => 175,  537 => 158,  535 => 157,  534 => 156,  533 => 155,  532 => 154,  531 => 153,  529 => 152,  526 => 151,  522 => 170,  512 => 166,  508 => 165,  505 => 164,  491 => 162,  487 => 160,  485 => 151,  480 => 150,  477 => 149,  475 => 148,  472 => 147,  463 => 144,  453 => 143,  450 => 142,  448 => 2,  446 => 141,  443 => 140,  439 => 139,  434 => 138,  431 => 137,  429 => 136,  410 => 135,  407 => 134,  402 => 129,  396 => 126,  393 => 125,  391 => 124,  388 => 123,  381 => 121,  375 => 119,  369 => 116,  365 => 115,  360 => 114,  358 => 113,  346 => 112,  343 => 111,  340 => 110,  338 => 2,  336 => 109,  333 => 108,  330 => 107,  326 => 106,  323 => 105,  320 => 104,  316 => 179,  313 => 178,  311 => 175,  305 => 171,  303 => 134,  298 => 131,  296 => 104,  290 => 100,  287 => 99,  284 => 98,  277 => 87,  275 => 2,  273 => 87,  267 => 86,  259 => 85,  256 => 84,  253 => 83,  245 => 71,  243 => 2,  242 => 71,  237 => 69,  232 => 67,  227 => 65,  223 => 64,  219 => 63,  215 => 62,  211 => 61,  208 => 60,  205 => 59,  199 => 76,  197 => 59,  193 => 58,  188 => 57,  185 => 56,  181 => 92,  178 => 91,  175 => 83,  172 => 82,  170 => 81,  167 => 80,  164 => 79,  162 => 56,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  143 => 46,  140 => 45,  133 => 93,  131 => 52,  125 => 48,  123 => 45,  119 => 43,  116 => 42,  108 => 37,  107 => 2,  105 => 37,  102 => 36,  97 => 34,  96 => 2,  94 => 34,  91 => 33,  88 => 32,  86 => 31,  83 => 30,  77 => 28,  71 => 27,  67 => 5,  65 => 25,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  57 => 17,  55 => 14,  54 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  46 => 2,  45 => 3,  44 => 2,  43 => 3,  41 => 2,  39 => 1,  33 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:list.html.twig", "/Users/blorente/Sites/fpemplea/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
