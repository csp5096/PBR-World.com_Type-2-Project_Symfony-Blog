<?php

/* BlogBundle:Page:contact.html.twig */
class __TwigTemplate_9d31a1ec10a75de26c061a42bbab622647651332fae3031aaaad855c4801efb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:contact.html.twig", 1);
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
        $__internal_ce233fd98792f72d311967e87122ad9750e6c37e591681e51b7479372570f5a4 = $this->env->getExtension("native_profiler");
        $__internal_ce233fd98792f72d311967e87122ad9750e6c37e591681e51b7479372570f5a4->enter($__internal_ce233fd98792f72d311967e87122ad9750e6c37e591681e51b7479372570f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce233fd98792f72d311967e87122ad9750e6c37e591681e51b7479372570f5a4->leave($__internal_ce233fd98792f72d311967e87122ad9750e6c37e591681e51b7479372570f5a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d704473853f6aa79fba550c83e1f5c31a1be9d0ce3b0f56b6cda87b2eee36294 = $this->env->getExtension("native_profiler");
        $__internal_d704473853f6aa79fba550c83e1f5c31a1be9d0ce3b0f56b6cda87b2eee36294->enter($__internal_d704473853f6aa79fba550c83e1f5c31a1be9d0ce3b0f56b6cda87b2eee36294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_d704473853f6aa79fba550c83e1f5c31a1be9d0ce3b0f56b6cda87b2eee36294->leave($__internal_d704473853f6aa79fba550c83e1f5c31a1be9d0ce3b0f56b6cda87b2eee36294_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b1afe7191c095d96737e1e4c1c866fbdc0172f414e51081c8aed2a5cc997f0 = $this->env->getExtension("native_profiler");
        $__internal_c9b1afe7191c095d96737e1e4c1c866fbdc0172f414e51081c8aed2a5cc997f0->enter($__internal_c9b1afe7191c095d96737e1e4c1c866fbdc0172f414e51081c8aed2a5cc997f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <h1>Contact PBR World</h1>
    </header>
\t
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "blogger-notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "\t\t<div class=\"blogger-notice\">
\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <p>Want to contact PBR World?</p>
\t
\t<form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("BlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
        
        $__internal_c9b1afe7191c095d96737e1e4c1c866fbdc0172f414e51081c8aed2a5cc997f0->leave($__internal_c9b1afe7191c095d96737e1e4c1c866fbdc0172f414e51081c8aed2a5cc997f0_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 26,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  86 => 19,  80 => 18,  75 => 15,  66 => 12,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contact PBR World</h1>*/
/*     </header>*/
/* 	*/
/* 	{% for flashMessage in app.session.flashbag.get('blogger-notice') %}*/
/* 		<div class="blogger-notice">*/
/* 			{{ flashMessage }}*/
/* 		</div>*/
/* 	{% endfor %}*/
/* */
/*     <p>Want to contact PBR World?</p>*/
/* 	*/
/* 	<form action="{{ path('BlogBundle_contact') }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.name) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.subject) }}*/
/*         {{ form_row(form.body) }}*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         <input type="submit" value="Submit" />*/
/*     </form>*/
/* {% endblock %}*/
