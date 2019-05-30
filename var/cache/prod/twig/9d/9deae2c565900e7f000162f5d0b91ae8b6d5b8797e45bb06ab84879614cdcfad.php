<?php

/* EasyAdminBundle:default/includes:_delete_form.html.twig */
class __TwigTemplate_87f80f143178e63793d3752be8c6e034090eccc27427b4e03ed11c2578baa092 extends Twig_Template
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
        echo         // line 2
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form', array("action" => ((($this->getAttribute($this->getAttribute(        // line 3
($context["delete_form"] ?? null), "vars", array()), "action", array()) . ((twig_in_filter("?", $this->getAttribute($this->getAttribute(($context["delete_form"] ?? null), "vars", array()), "action", array()))) ? ("&") : ("?"))) . "referer=") . ($context["referer"] ?? null)), "method" => "DELETE", "attr" => array("id" => "delete-form", "style" => "display: none")));
        // line 7
        echo "

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.content", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.cancel", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "
                </button>

                ";
        // line 21
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled(($context["view"] ?? null), "delete", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()))) {
            // line 22
            echo "                    ";
            $context["_delete_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration(($context["view"] ?? null), "delete", $this->getAttribute(($context["_entity_config"] ?? null), "name", array()));
            // line 23
            echo "                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" formtarget=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_delete_action"] ?? null), "target", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            if ($this->getAttribute(($context["_delete_action"] ?? null), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["_delete_action"] ?? null), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_modal.action", ($context["_trans_parameters"] ?? null), "EasyAdminBundle"), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default/includes:_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  64 => 25,  58 => 24,  53 => 23,  50 => 22,  48 => 21,  42 => 18,  35 => 14,  31 => 13,  23 => 7,  21 => 3,  20 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default/includes:_delete_form.html.twig", "/Users/blorente/Sites/fpemplea/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/includes/_delete_form.html.twig");
    }
}
