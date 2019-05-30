<?php

/* :Frontend/profile:crudOferta.html.twig */
class __TwigTemplate_5e5f4c8eb08f6e2e3444fef6f28b4784cc6ae9c6a2f9b3d790609d1220933210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Frontend/profile:crudOferta.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudOferta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Frontend/profile:crudOferta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mofificar oferta";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-edit-header\">
                <h2>Editar oferta</h2>
                <hr> 
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-edit\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form-group\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tipo", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categoria", array()), 'row', array("attr" => array("class" => "form-control chosen-select")));
        echo "
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechainicio", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fechafin", array()), 'row', array("attr" => array("class" => "form-control datepicker")));
        echo "
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vacancies", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descripcion", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 28
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type=\"submit\" class=\"button cta-2\">
                        Guardar
                    </button>
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "#offers\" class=\"button cta-3\">Cancelar</a>
                </div>
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":Frontend/profile:crudOferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 38,  129 => 36,  117 => 28,  113 => 26,  107 => 23,  103 => 22,  99 => 21,  93 => 18,  89 => 17,  85 => 16,  77 => 11,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Mofificar oferta{% endblock %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-edit-header\">
                <h2>Editar oferta</h2>
                <hr> 
            </div>
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 offer-edit\">
                {{ form_start(form) }}
                <div class=\"form-group\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                {{ form_row(form.title, { 'attr': {'class': 'form-control'} }) }}
                                {{ form_row(form.tipo, { 'attr': {'class': 'form-control'} }) }}
                                {{ form_row(form.categoria, { 'attr': {'class': 'form-control chosen-select'} }) }}
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xs-12\">
                                {{ form_row(form.fechainicio, { 'attr': {'class': 'form-control datepicker'} }) }}
                                {{ form_row(form.fechafin, { 'attr': {'class': 'form-control datepicker'} }) }}
                                {{ form_row(form.vacancies, { 'attr': {'class': 'form-control'} }) }}
                            </div>
                            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                                {{ form_row(form.descripcion, { 'attr': {'class': 'form-control'} }) }}
                                {#{ form_row(form.idempresa, { 'attr': {'class': ''} }) }#}
                                {{ form_row(form._token) }}
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button type=\"submit\" class=\"button cta-2\">
                        Guardar
                    </button>
                    <a href=\"{{ path('profile', {'idUser': app.user.id}) }}#offers\" class=\"button cta-3\">Cancelar</a>
                </div>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}", ":Frontend/profile:crudOferta.html.twig", "/Users/blorente/Sites/fpemplea/app/Resources/views/Frontend/profile/crudOferta.html.twig");
    }
}
