<?php

/* BlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_f32e79a7e9e04f87f21e47dc12fcfb0522b6ef8e683dd6f1b44e7b332a735407 extends Twig_Template
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
        $__internal_6f60e425f3ec732271e235244e7a3e5ed23d32ba26cc2b3aeae103d8d2b75fcb = $this->env->getExtension("native_profiler");
        $__internal_6f60e425f3ec732271e235244e7a3e5ed23d32ba26cc2b3aeae103d8d2b75fcb->enter($__internal_6f60e425f3ec732271e235244e7a3e5ed23d32ba26cc2b3aeae103d8d2b75fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:sidebar.html.twig"));

        // line 1
        echo "<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 7
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, $context["weight"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 9
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </p>
</section>

<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 19
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "id", array()), "slug" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "slug", array()))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
    \t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "title", array()), "html", null, true);
            echo "
\t\t\t\t\t</a>
                    <em><time datetime=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('blogger_blog_extension')->createdAgo($this->getAttribute($context["comment"], "created", array())), "html", null, true);
            echo "</time></em>
                </p>
            </header>
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <p>There are no comments for this post. Be the first to comment...</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</section>";
        
        $__internal_6f60e425f3ec732271e235244e7a3e5ed23d32ba26cc2b3aeae103d8d2b75fcb->leave($__internal_6f60e425f3ec732271e235244e7a3e5ed23d32ba26cc2b3aeae103d8d2b75fcb_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  101 => 32,  92 => 28,  84 => 25,  79 => 23,  73 => 22,  69 => 21,  65 => 19,  60 => 18,  51 => 11,  44 => 9,  34 => 7,  29 => 6,  22 => 1,);
    }
}
/* <section class="section">*/
/*     <header>*/
/*         <h3>Tag Cloud</h3>*/
/*     </header>*/
/*     <p class="tags">*/
/*         {% for tag, weight in tags %}*/
/*             <span class="weight-{{ weight }}">{{ tag }}</span>*/
/*         {% else %}*/
/*             <p>There are no tags</p>*/
/*         {% endfor %}*/
/*     </p>*/
/* </section>*/
/* */
/* <section class="section">*/
/*     <header>*/
/*         <h3>Latest Comments</h3>*/
/*     </header>*/
/*     {% for comment in latestComments %}*/
/*         <article class="comment">*/
/*             <header>*/
/*                 <p class="small"><span class="highlight">{{ comment.user }}</span> commented on*/
/*                     <a href="{{ path('BlogBundle_blog_show', { 'id': comment.blog.id, 'slug': comment.blog.slug }) }}#comment-{{ comment.id }}">*/
/*     					{{ comment.blog.title }}*/
/* 					</a>*/
/*                     <em><time datetime="{{ comment.created|date('c') }}">{{ comment.created|created_ago }}</time></em>*/
/*                 </p>*/
/*             </header>*/
/*             <p>{{ comment.comment }}</p>*/
/*             </p>*/
/*         </article>*/
/*     {% else %}*/
/*         <p>There are no comments for this post. Be the first to comment...</p>*/
/*     {% endfor %}*/
/* </section>*/
