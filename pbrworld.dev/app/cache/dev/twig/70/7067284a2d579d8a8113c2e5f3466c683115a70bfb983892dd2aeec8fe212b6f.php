<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_46228c82dc96328d4bea510b1e39528685849bd1271f17e8af6b1b85e2d11d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eb7cdbe920ee994950351eda2cf6f430e1def176630b2ee357ece567a514e18 = $this->env->getExtension("native_profiler");
        $__internal_8eb7cdbe920ee994950351eda2cf6f430e1def176630b2ee357ece567a514e18->enter($__internal_8eb7cdbe920ee994950351eda2cf6f430e1def176630b2ee357ece567a514e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb7cdbe920ee994950351eda2cf6f430e1def176630b2ee357ece567a514e18->leave($__internal_8eb7cdbe920ee994950351eda2cf6f430e1def176630b2ee357ece567a514e18_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59ee87aa0eaf011fddfc356f04a7216a8337f8de519e0d65bad81955a323464d = $this->env->getExtension("native_profiler");
        $__internal_59ee87aa0eaf011fddfc356f04a7216a8337f8de519e0d65bad81955a323464d->enter($__internal_59ee87aa0eaf011fddfc356f04a7216a8337f8de519e0d65bad81955a323464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_59ee87aa0eaf011fddfc356f04a7216a8337f8de519e0d65bad81955a323464d->leave($__internal_59ee87aa0eaf011fddfc356f04a7216a8337f8de519e0d65bad81955a323464d_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cea22b30cc6e40fb7965c19e02f003fe6db7c16b9a4bef4b4c0dc39657c09a01 = $this->env->getExtension("native_profiler");
        $__internal_cea22b30cc6e40fb7965c19e02f003fe6db7c16b9a4bef4b4c0dc39657c09a01->enter($__internal_cea22b30cc6e40fb7965c19e02f003fe6db7c16b9a4bef4b4c0dc39657c09a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BlogBundle:Page:sidebar"), array());
        
        $__internal_cea22b30cc6e40fb7965c19e02f003fe6db7c16b9a4bef4b4c0dc39657c09a01->leave($__internal_cea22b30cc6e40fb7965c19e02f003fe6db7c16b9a4bef4b4c0dc39657c09a01_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link href="{{ asset('bundles/bloggerblog/css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('bundles/bloggerblog/css/sidebar.css') }}" type="text/css" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {% render controller('BlogBundle:Page:sidebar') %}*/
/* {% endblock %}*/
