<?php

/* BlogBundle:Comment:form.html.twig */
class __TwigTemplate_fcd873304d911321bc7eb111ff62a015e53741ff4cd9eaf7982744c4216c2c21 extends Twig_Template
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
        $__internal_1a3eae9397a554be8038ac7336f5fd34806f1e3255234444cfbe8217544bae59 = $this->env->getExtension("native_profiler");
        $__internal_1a3eae9397a554be8038ac7336f5fd34806f1e3255234444cfbe8217544bae59->enter($__internal_1a3eae9397a554be8038ac7336f5fd34806f1e3255234444cfbe8217544bae59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Comment:form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
        
        $__internal_1a3eae9397a554be8038ac7336f5fd34806f1e3255234444cfbe8217544bae59->leave($__internal_1a3eae9397a554be8038ac7336f5fd34806f1e3255234444cfbe8217544bae59_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('BlogBundle_comment_create', { 'blog_id' : comment.blog.id } ) }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p>*/
/* </form>*/
