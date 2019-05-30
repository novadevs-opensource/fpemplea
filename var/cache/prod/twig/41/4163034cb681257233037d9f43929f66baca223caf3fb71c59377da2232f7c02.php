<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_5b251df9baa79eebb642ccb7bda44f7dd055dd88796bf5a81e2ea9b4075fb537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_join_filter(array(0 => (((((            // line 7
(isset($context["_easyadmin_form_type"]) || array_key_exists("_easyadmin_form_type", $context))) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? null), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? null), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? null), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? null), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? null), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 57
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 76
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if (($context["prepend"] ?? null)) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 94
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        // line 108
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 120
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 121
                echo "</div>";
            }
        }
    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        // line 127
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 136
                echo "</div>";
            }
        }
    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 142
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 192
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 194
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 203
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 237
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo ($context["widget"] ?? null);
            // line 248
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ((($context["translation_domain"] ?? null)) ? (($context["translation_domain"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 261
        if ((twig_in_filter(($context["_field_type"] ?? null), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo ($context["js_add_item"] ?? null);
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 317
        echo "</div>";
    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 344
        echo "</div>";
    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        // line 348
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 351
        echo "</div>";
    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? null));
        // line 357
        echo "    ";
        if ((($context["error_count"] ?? null) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? null), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if ((($context["error_count"] ?? null) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? null)), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 376
        echo "    ";
        if ((twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null)))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? null), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
($context["easyadmin"] ?? null), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
($context["easyadmin"] ?? null), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? null), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
($context["easyadmin"] ?? null), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
($context["_entity_actions"] ?? null), "request_parameters" =>         // line 481
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 482
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 483
($context["_trans_parameters"] ?? null), "item_id" =>         // line 484
($context["_entity_id"] ?? null)), false);
        // line 485
        echo "
";
    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? null)) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if ((($this->getAttribute($context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if (($this->getAttribute($context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", $this->getAttribute($context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !$this->getAttribute($context["group_config"], "form_tab", array()) || ($this->getAttribute($context["group_config"], "form_tab", array()) == ($context["tab_name"] ?? null)))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? null));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? null)), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? null)))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? null))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        // line 572
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
($context["attr"] ?? null), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
($context["autocomplete_entity_name"] ?? null)))))));
        // line 579
        echo "
";
    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        // line 583
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        // line 596
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? null)), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1589 => 608,  1583 => 606,  1581 => 605,  1578 => 604,  1571 => 601,  1565 => 600,  1562 => 599,  1560 => 598,  1555 => 597,  1552 => 596,  1549 => 595,  1542 => 589,  1539 => 588,  1535 => 584,  1532 => 583,  1529 => 582,  1524 => 579,  1522 => 576,  1521 => 573,  1519 => 572,  1516 => 571,  1508 => 567,  1498 => 564,  1493 => 563,  1487 => 562,  1477 => 557,  1470 => 556,  1464 => 553,  1459 => 552,  1456 => 551,  1451 => 550,  1447 => 548,  1441 => 546,  1439 => 545,  1435 => 543,  1427 => 539,  1421 => 537,  1419 => 536,  1415 => 534,  1413 => 533,  1407 => 531,  1400 => 530,  1397 => 529,  1392 => 526,  1386 => 524,  1380 => 520,  1362 => 516,  1352 => 514,  1335 => 513,  1331 => 511,  1323 => 508,  1317 => 505,  1312 => 504,  1310 => 503,  1305 => 502,  1299 => 500,  1297 => 499,  1291 => 498,  1284 => 497,  1280 => 496,  1275 => 493,  1273 => 492,  1270 => 491,  1267 => 490,  1264 => 489,  1259 => 485,  1257 => 484,  1256 => 483,  1255 => 482,  1254 => 481,  1253 => 480,  1252 => 479,  1249 => 478,  1247 => 477,  1244 => 476,  1242 => 475,  1241 => 473,  1238 => 472,  1236 => 471,  1235 => 470,  1234 => 469,  1228 => 466,  1225 => 465,  1222 => 463,  1219 => 462,  1216 => 461,  1213 => 460,  1205 => 454,  1203 => 453,  1198 => 449,  1196 => 448,  1193 => 447,  1187 => 443,  1181 => 440,  1177 => 439,  1171 => 436,  1167 => 435,  1164 => 434,  1161 => 433,  1159 => 432,  1156 => 431,  1150 => 429,  1148 => 428,  1144 => 427,  1141 => 426,  1139 => 425,  1136 => 424,  1129 => 421,  1126 => 420,  1123 => 419,  1113 => 412,  1108 => 411,  1102 => 408,  1099 => 407,  1097 => 406,  1093 => 404,  1085 => 402,  1082 => 401,  1080 => 400,  1077 => 399,  1075 => 398,  1072 => 397,  1065 => 394,  1062 => 393,  1059 => 392,  1052 => 388,  1049 => 387,  1046 => 386,  1042 => 383,  1039 => 382,  1036 => 381,  1033 => 380,  1030 => 379,  1024 => 377,  1021 => 376,  1018 => 373,  1012 => 369,  1008 => 367,  999 => 365,  995 => 364,  992 => 363,  986 => 361,  984 => 360,  980 => 359,  977 => 358,  974 => 357,  971 => 356,  968 => 355,  964 => 351,  962 => 350,  960 => 349,  952 => 348,  949 => 347,  945 => 344,  943 => 343,  941 => 342,  933 => 341,  930 => 340,  926 => 337,  924 => 336,  921 => 335,  917 => 332,  915 => 331,  912 => 330,  908 => 327,  906 => 326,  903 => 325,  899 => 322,  897 => 321,  894 => 320,  890 => 317,  888 => 316,  882 => 315,  879 => 314,  870 => 308,  865 => 306,  861 => 304,  847 => 295,  841 => 294,  830 => 286,  825 => 283,  822 => 282,  820 => 281,  814 => 279,  811 => 278,  807 => 275,  801 => 273,  799 => 272,  797 => 270,  790 => 265,  784 => 264,  780 => 262,  778 => 261,  776 => 259,  774 => 258,  766 => 257,  764 => 256,  761 => 255,  755 => 249,  753 => 248,  751 => 247,  736 => 246,  733 => 245,  730 => 244,  727 => 243,  724 => 242,  721 => 241,  718 => 240,  715 => 239,  712 => 238,  709 => 237,  706 => 236,  704 => 235,  701 => 234,  697 => 231,  694 => 230,  690 => 227,  687 => 226,  683 => 223,  681 => 222,  678 => 220,  674 => 217,  672 => 216,  669 => 215,  664 => 209,  662 => 208,  660 => 207,  657 => 205,  655 => 204,  653 => 203,  650 => 202,  645 => 198,  643 => 197,  641 => 196,  638 => 194,  636 => 193,  634 => 192,  631 => 191,  626 => 187,  620 => 184,  619 => 183,  618 => 182,  614 => 181,  610 => 180,  607 => 178,  601 => 175,  600 => 174,  599 => 173,  595 => 172,  593 => 171,  591 => 170,  588 => 169,  579 => 163,  574 => 161,  570 => 159,  557 => 149,  552 => 146,  549 => 145,  547 => 144,  545 => 143,  543 => 142,  540 => 141,  534 => 136,  531 => 135,  523 => 134,  518 => 132,  516 => 131,  514 => 130,  511 => 128,  509 => 127,  506 => 126,  500 => 121,  498 => 120,  496 => 118,  495 => 117,  494 => 116,  493 => 115,  488 => 113,  486 => 112,  484 => 111,  481 => 109,  479 => 108,  476 => 107,  471 => 103,  469 => 102,  467 => 101,  465 => 100,  463 => 99,  459 => 98,  457 => 97,  454 => 95,  452 => 94,  449 => 93,  444 => 89,  442 => 88,  440 => 87,  437 => 86,  433 => 83,  427 => 81,  425 => 80,  423 => 79,  417 => 77,  414 => 76,  412 => 75,  409 => 74,  406 => 73,  402 => 70,  400 => 69,  397 => 68,  393 => 65,  391 => 64,  388 => 63,  384 => 60,  381 => 58,  379 => 57,  376 => 56,  367 => 50,  362 => 48,  358 => 46,  345 => 36,  340 => 33,  337 => 32,  335 => 31,  333 => 29,  330 => 28,  324 => 23,  322 => 21,  316 => 18,  314 => 17,  311 => 16,  308 => 15,  306 => 13,  305 => 12,  304 => 11,  303 => 9,  302 => 8,  301 => 7,  299 => 5,  297 => 4,  294 => 3,  290 => 595,  287 => 593,  285 => 588,  282 => 586,  280 => 582,  277 => 581,  275 => 571,  272 => 569,  270 => 529,  267 => 528,  265 => 489,  262 => 487,  260 => 460,  257 => 459,  255 => 447,  252 => 446,  250 => 424,  247 => 423,  245 => 419,  242 => 418,  240 => 397,  237 => 396,  235 => 392,  232 => 391,  230 => 386,  228 => 373,  226 => 355,  223 => 353,  221 => 347,  218 => 346,  216 => 340,  213 => 339,  211 => 335,  208 => 334,  206 => 330,  203 => 329,  201 => 325,  198 => 324,  196 => 320,  193 => 319,  191 => 314,  188 => 313,  186 => 278,  183 => 277,  181 => 255,  178 => 254,  175 => 252,  173 => 234,  170 => 233,  168 => 230,  165 => 229,  163 => 226,  160 => 225,  158 => 220,  155 => 219,  153 => 215,  150 => 214,  147 => 212,  145 => 202,  142 => 201,  140 => 191,  137 => 190,  135 => 169,  132 => 168,  130 => 141,  127 => 140,  125 => 126,  122 => 125,  120 => 107,  117 => 106,  115 => 93,  112 => 92,  110 => 86,  107 => 85,  105 => 73,  102 => 72,  100 => 68,  97 => 67,  95 => 63,  92 => 62,  90 => 56,  87 => 55,  85 => 28,  82 => 27,  79 => 25,  77 => 3,  74 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", "/Users/blorente/Sites/fpemplea/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
