<?php

/* :Frontend/profile:changeImg.html.twig */
class __TwigTemplate_6578ac164155c2ae5e0895a18350bd217a731c6dfd13df9795e519bd06142046 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => "edit_img")));
        echo "
\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imagen", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
\t";
        // line 5
        echo "\t<div class=\"text-center row\">
\t\t<p>
\t\t\tPrevisualización:
\t\t</p>
\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3\" style=\"position: relative;\">
\t\t\t<div alt=\"Avatar\" class=\"img-responsive\" id=\"image\" style=\"border-radius: 150px;width: 160px;height: 160px;background-position: 50%;background-size: cover; border: 3px dashed gray; margin:0 auto; background-image: url('";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . ($context["currentImg"] ?? null)))), "html", null, true);
        echo "')\"></div>
\t\t</div>
\t</div>
\t<div class=\"text-center row\">
\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
\t\t\t<p>
\t\t\t\t<button type=\"submit\" class=\"button cta-2\">
\t\t\t\t\tActualizar
\t\t\t\t</button>
\t\t\t</p>
\t\t</div>
\t</div>\t
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "




<!-- <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3\" style=\"position: relative;\">
\t\t\t<div style=\"position: absolute;background-color: rgba(0,0,0,.5);height: 260px;width: 260px;top: 50px;left: 0;z-index: 2;\"></div>
\t\t\t</div>
\t\t\t<div alt=\"Avatar\" class=\"img-responsive\" id=\"image\" style=\" top: 50px;left: 0; width: 160px;height: 160px; background-size:cover; position: absolute;z-index: 1;background-image: url('";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . ($context["currentImg"] ?? null)))), "html", null, true);
        echo "')\"></div>
\t\t</div> -->";
    }

    public function getTemplateName()
    {
        return ":Frontend/profile:changeImg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  53 => 22,  38 => 10,  31 => 5,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":Frontend/profile:changeImg.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/changeImg.html.twig");
    }
}
