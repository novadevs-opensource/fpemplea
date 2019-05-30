<?php

/* :Frontend/profile:changeImg.html.twig */
class __TwigTemplate_a0901441d1e849ffce9431829b290e475e3d9a870e8a7b51c9c81ccdfa4df030 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:changeImg.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:changeImg.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "edit_img")));
        echo "
\t";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imagen", array()), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . ($context["currentImg"] ?? $this->getContext($context, "currentImg"))))), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "




<!-- <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3\" style=\"position: relative;\">
\t\t\t<div style=\"position: absolute;background-color: rgba(0,0,0,.5);height: 260px;width: 260px;top: 50px;left: 0;z-index: 2;\"></div>
\t\t\t</div>
\t\t\t<div alt=\"Avatar\" class=\"img-responsive\" id=\"image\" style=\" top: 50px;left: 0; width: 160px;height: 160px; background-size:cover; position: absolute;z-index: 1;background-image: url('";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/profileavatar/" . ($context["currentImg"] ?? $this->getContext($context, "currentImg"))))), "html", null, true);
        echo "')\"></div>
\t\t</div> -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  70 => 30,  59 => 22,  44 => 10,  37 => 5,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': 'edit_img' } } ) }}
\t{{ form_row(form.imagen) }}
    {{ form_row(form._token) }}
\t{# {{ form_errors(form) }} #}
\t<div class=\"text-center row\">
\t\t<p>
\t\t\tPrevisualización:
\t\t</p>
\t\t<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3\" style=\"position: relative;\">
\t\t\t<div alt=\"Avatar\" class=\"img-responsive\" id=\"image\" style=\"border-radius: 150px;width: 160px;height: 160px;background-position: 50%;background-size: cover; border: 3px dashed gray; margin:0 auto; background-image: url('{{absolute_url(asset('uploads/profileavatar/' ~  currentImg)) }}')\"></div>
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
{{ form_end(form,{'render_rest':false}) }}




<!-- <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3\" style=\"position: relative;\">
\t\t\t<div style=\"position: absolute;background-color: rgba(0,0,0,.5);height: 260px;width: 260px;top: 50px;left: 0;z-index: 2;\"></div>
\t\t\t</div>
\t\t\t<div alt=\"Avatar\" class=\"img-responsive\" id=\"image\" style=\" top: 50px;left: 0; width: 160px;height: 160px; background-size:cover; position: absolute;z-index: 1;background-image: url('{{absolute_url(asset('uploads/profileavatar/' ~  currentImg)) }}')\"></div>
\t\t</div> -->", ":Frontend/profile:changeImg.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/changeImg.html.twig");
    }
}
