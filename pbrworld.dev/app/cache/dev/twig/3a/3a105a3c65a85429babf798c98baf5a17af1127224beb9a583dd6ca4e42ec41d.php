<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ef4a4aabde7e672ae0254aa6ee79252ab6cb27131c718c7263f962ddc64983d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e886987bc2c08bf51c64789da4bcd9167a564bdd724b2db3059d71cec008c48 = $this->env->getExtension("native_profiler");
        $__internal_9e886987bc2c08bf51c64789da4bcd9167a564bdd724b2db3059d71cec008c48->enter($__internal_9e886987bc2c08bf51c64789da4bcd9167a564bdd724b2db3059d71cec008c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e886987bc2c08bf51c64789da4bcd9167a564bdd724b2db3059d71cec008c48->leave($__internal_9e886987bc2c08bf51c64789da4bcd9167a564bdd724b2db3059d71cec008c48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9e7d2231a6936a7d140394dc4490f82d77baf7cbbcc825b7dd7989fb146d2fe = $this->env->getExtension("native_profiler");
        $__internal_f9e7d2231a6936a7d140394dc4490f82d77baf7cbbcc825b7dd7989fb146d2fe->enter($__internal_f9e7d2231a6936a7d140394dc4490f82d77baf7cbbcc825b7dd7989fb146d2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f9e7d2231a6936a7d140394dc4490f82d77baf7cbbcc825b7dd7989fb146d2fe->leave($__internal_f9e7d2231a6936a7d140394dc4490f82d77baf7cbbcc825b7dd7989fb146d2fe_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_382445e179945c3a309c2a96f71406f68e98e91d16e782a89a246ffcc20d08da = $this->env->getExtension("native_profiler");
        $__internal_382445e179945c3a309c2a96f71406f68e98e91d16e782a89a246ffcc20d08da->enter($__internal_382445e179945c3a309c2a96f71406f68e98e91d16e782a89a246ffcc20d08da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_382445e179945c3a309c2a96f71406f68e98e91d16e782a89a246ffcc20d08da->leave($__internal_382445e179945c3a309c2a96f71406f68e98e91d16e782a89a246ffcc20d08da_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0dac62d80bd594f852abbcab4b5f5bca972ac4141e722c5a6981910cf88a957 = $this->env->getExtension("native_profiler");
        $__internal_b0dac62d80bd594f852abbcab4b5f5bca972ac4141e722c5a6981910cf88a957->enter($__internal_b0dac62d80bd594f852abbcab4b5f5bca972ac4141e722c5a6981910cf88a957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b0dac62d80bd594f852abbcab4b5f5bca972ac4141e722c5a6981910cf88a957->leave($__internal_b0dac62d80bd594f852abbcab4b5f5bca972ac4141e722c5a6981910cf88a957_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
