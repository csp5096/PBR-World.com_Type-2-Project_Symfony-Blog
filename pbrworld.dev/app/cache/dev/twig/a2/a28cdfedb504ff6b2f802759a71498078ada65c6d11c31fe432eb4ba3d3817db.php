<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_5c107e783790b37f0552188e7ad0e55dacd437ece00a168a61ed2ccb84ab1b18 extends Twig_Template
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
        $__internal_3e6d504a9ac63168e43abec229a73f059949ccf3126390f6fda2407157550f07 = $this->env->getExtension("native_profiler");
        $__internal_3e6d504a9ac63168e43abec229a73f059949ccf3126390f6fda2407157550f07->enter($__internal_3e6d504a9ac63168e43abec229a73f059949ccf3126390f6fda2407157550f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e6d504a9ac63168e43abec229a73f059949ccf3126390f6fda2407157550f07->leave($__internal_3e6d504a9ac63168e43abec229a73f059949ccf3126390f6fda2407157550f07_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a5e6cb629416f0c03b4db66c5e1221df6440c8e7fbf24e6576edd752f69eb23 = $this->env->getExtension("native_profiler");
        $__internal_5a5e6cb629416f0c03b4db66c5e1221df6440c8e7fbf24e6576edd752f69eb23->enter($__internal_5a5e6cb629416f0c03b4db66c5e1221df6440c8e7fbf24e6576edd752f69eb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5a5e6cb629416f0c03b4db66c5e1221df6440c8e7fbf24e6576edd752f69eb23->leave($__internal_5a5e6cb629416f0c03b4db66c5e1221df6440c8e7fbf24e6576edd752f69eb23_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_674abc05d7005a5d3b3b7d6a28847c65559ef92e6b1a61bb08a2b85c5b8c31eb = $this->env->getExtension("native_profiler");
        $__internal_674abc05d7005a5d3b3b7d6a28847c65559ef92e6b1a61bb08a2b85c5b8c31eb->enter($__internal_674abc05d7005a5d3b3b7d6a28847c65559ef92e6b1a61bb08a2b85c5b8c31eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("BlogBundle:Page:sidebar"), array());
        
        $__internal_674abc05d7005a5d3b3b7d6a28847c65559ef92e6b1a61bb08a2b85c5b8c31eb->leave($__internal_674abc05d7005a5d3b3b7d6a28847c65559ef92e6b1a61bb08a2b85c5b8c31eb_prof);

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
