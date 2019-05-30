<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_38e87b4b84a3f56a784f07087701b0be15fe4c10237f0e8c8bf9d5210900a5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('submit_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('reset_row', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !(isset($context["expanded"]) || array_key_exists("expanded", $context)) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 18
        echo "col-sm-2";
    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        // line 24
        if (((isset($context["expanded"]) || array_key_exists("expanded", $context)) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            // line 31
            echo "</div>
    ";
            // line 32
            echo "</div>";
        }
    }

    // line 36
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        // line 37
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 38
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 40
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 42
        echo "</div>
        </div>
";
        // line 44
        echo "</fieldset>";
    }

    // line 47
    public function block_submit_row($context, array $blocks = array())
    {
        // line 48
        echo "<div class=\"form-group row\">";
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 50
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 52
        echo "</div>";
        // line 53
        echo "</div>";
    }

    // line 56
    public function block_reset_row($context, array $blocks = array())
    {
        // line 57
        echo "<div class=\"form-group row\">";
        // line 58
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 61
        echo "</div>";
        // line 62
        echo "</div>";
    }

    // line 65
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 66
        echo "col-sm-10";
    }

    // line 69
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 70
        echo "<div class=\"form-group row\">";
        // line 71
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 72
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 75
        echo "</div>";
        // line 76
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  241 => 76,  239 => 75,  237 => 74,  235 => 73,  231 => 72,  227 => 71,  225 => 70,  222 => 69,  218 => 66,  215 => 65,  211 => 62,  209 => 61,  207 => 60,  203 => 59,  199 => 58,  197 => 57,  194 => 56,  190 => 53,  188 => 52,  186 => 51,  182 => 50,  178 => 49,  176 => 48,  173 => 47,  169 => 44,  165 => 42,  163 => 41,  159 => 40,  157 => 39,  152 => 38,  149 => 37,  146 => 36,  141 => 32,  138 => 31,  136 => 30,  132 => 29,  130 => 28,  124 => 27,  121 => 25,  119 => 24,  116 => 23,  112 => 18,  109 => 17,  104 => 13,  102 => 12,  99 => 10,  97 => 9,  92 => 7,  90 => 6,  87 => 5,  83 => 69,  80 => 68,  78 => 65,  75 => 64,  73 => 56,  70 => 55,  68 => 47,  65 => 46,  63 => 36,  60 => 35,  58 => 23,  55 => 22,  52 => 20,  50 => 17,  47 => 16,  45 => 5,  42 => 4,  39 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_horizontal_layout.html.twig", "/Users/blorente/Sites/fpemplea/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
