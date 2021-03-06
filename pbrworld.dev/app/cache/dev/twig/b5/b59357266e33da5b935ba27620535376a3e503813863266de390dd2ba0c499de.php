<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_112d3d3e85409cfa60c3f66dda0e4adb20dd6306104e3df1be4edcd796d616a0 extends Twig_Template
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
        $__internal_ebd7d59b5e1669aeb24e996a1b10503f541e537391ddec6d6fd55c690f03ca9b = $this->env->getExtension("native_profiler");
        $__internal_ebd7d59b5e1669aeb24e996a1b10503f541e537391ddec6d6fd55c690f03ca9b->enter($__internal_ebd7d59b5e1669aeb24e996a1b10503f541e537391ddec6d6fd55c690f03ca9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd7d59b5e1669aeb24e996a1b10503f541e537391ddec6d6fd55c690f03ca9b->leave($__internal_ebd7d59b5e1669aeb24e996a1b10503f541e537391ddec6d6fd55c690f03ca9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e0479e9db1684a0e73808ce2911881225a962b00ade78cafe3fd968f8e3415e = $this->env->getExtension("native_profiler");
        $__internal_8e0479e9db1684a0e73808ce2911881225a962b00ade78cafe3fd968f8e3415e->enter($__internal_8e0479e9db1684a0e73808ce2911881225a962b00ade78cafe3fd968f8e3415e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e0479e9db1684a0e73808ce2911881225a962b00ade78cafe3fd968f8e3415e->leave($__internal_8e0479e9db1684a0e73808ce2911881225a962b00ade78cafe3fd968f8e3415e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cf6e1588b427f53b046aa9354494bd46cfbd6c934936a8639e37b8a91668878 = $this->env->getExtension("native_profiler");
        $__internal_9cf6e1588b427f53b046aa9354494bd46cfbd6c934936a8639e37b8a91668878->enter($__internal_9cf6e1588b427f53b046aa9354494bd46cfbd6c934936a8639e37b8a91668878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9cf6e1588b427f53b046aa9354494bd46cfbd6c934936a8639e37b8a91668878->leave($__internal_9cf6e1588b427f53b046aa9354494bd46cfbd6c934936a8639e37b8a91668878_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4dc6b5109ef843af03526fa7b019c8dc511fda180b0538fdff39228e3649651 = $this->env->getExtension("native_profiler");
        $__internal_b4dc6b5109ef843af03526fa7b019c8dc511fda180b0538fdff39228e3649651->enter($__internal_b4dc6b5109ef843af03526fa7b019c8dc511fda180b0538fdff39228e3649651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b4dc6b5109ef843af03526fa7b019c8dc511fda180b0538fdff39228e3649651->leave($__internal_b4dc6b5109ef843af03526fa7b019c8dc511fda180b0538fdff39228e3649651_prof);

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
