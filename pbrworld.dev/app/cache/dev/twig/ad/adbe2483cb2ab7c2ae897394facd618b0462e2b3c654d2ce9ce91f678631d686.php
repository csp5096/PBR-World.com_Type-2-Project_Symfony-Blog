<?php

/* BlogBundle:Blog:show.html.twig */
class __TwigTemplate_d232b781550e41b20bf278d3989d9cc0f0606ed5d2c97d524d0053892b99afc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1336c5516360906c33e7b0393077f0978ae333ec5c19b062abaa3b075eb5f01f = $this->env->getExtension("native_profiler");
        $__internal_1336c5516360906c33e7b0393077f0978ae333ec5c19b062abaa3b075eb5f01f->enter($__internal_1336c5516360906c33e7b0393077f0978ae333ec5c19b062abaa3b075eb5f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1336c5516360906c33e7b0393077f0978ae333ec5c19b062abaa3b075eb5f01f->leave($__internal_1336c5516360906c33e7b0393077f0978ae333ec5c19b062abaa3b075eb5f01f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb38be524dc45fe35707338e3cc80a929c5edfa439beb40fe8fdf308395b6003 = $this->env->getExtension("native_profiler");
        $__internal_cb38be524dc45fe35707338e3cc80a929c5edfa439beb40fe8fdf308395b6003->enter($__internal_cb38be524dc45fe35707338e3cc80a929c5edfa439beb40fe8fdf308395b6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_cb38be524dc45fe35707338e3cc80a929c5edfa439beb40fe8fdf308395b6003->leave($__internal_cb38be524dc45fe35707338e3cc80a929c5edfa439beb40fe8fdf308395b6003_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc1717dc31a81a2c7fc42e174dd1b2d6356721057c871ec84d57247c7a961a1 = $this->env->getExtension("native_profiler");
        $__internal_afc1717dc31a81a2c7fc42e174dd1b2d6356721057c871ec84d57247c7a961a1->enter($__internal_afc1717dc31a81a2c7fc42e174dd1b2d6356721057c871ec84d57247c7a961a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
\t
\t<section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 20
        $this->loadTemplate("BlogBundle:Comment:index.html.twig", "BlogBundle:Blog:show.html.twig", 20)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 21
        echo "\t\t</section>
\t\t
\t\t<h3>Add Comment</h3>
        ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
        echo "    
    </section>
";
        
        $__internal_afc1717dc31a81a2c7fc42e174dd1b2d6356721057c871ec84d57247c7a961a1->leave($__internal_afc1717dc31a81a2c7fc42e174dd1b2d6356721057c871ec84d57247c7a961a1_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 21,  85 => 20,  75 => 13,  68 => 11,  63 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ blog.title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <article class="blog">*/
/*         <header>*/
/*             <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*             <h2>{{ blog.title }}</h2>*/
/*         </header>*/
/*         <img src="{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/*         <div>*/
/*             <p>{{ blog.blog }}</p>*/
/*         </div>*/
/*     </article>*/
/* 	*/
/* 	<section class="comments" id="comments">*/
/*         <section class="previous-comments">*/
/*             <h3>Comments</h3>*/
/*             {% include 'BlogBundle:Comment:index.html.twig' with { 'comments': comments } %}*/
/* 		</section>*/
/* 		*/
/* 		<h3>Add Comment</h3>*/
/*         {{ render(controller('BlogBundle:Comment:new', { 'blog_id': blog.id })) }}    */
/*     </section>*/
/* {% endblock %}*/
