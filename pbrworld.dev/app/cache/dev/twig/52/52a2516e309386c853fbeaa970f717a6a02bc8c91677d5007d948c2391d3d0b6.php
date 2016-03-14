<?php

/* BlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_4173f4d7d8ec8d6d5d823f7d9f5b4f3e74335b03b60eef8699f466e9f4793bc7 extends Twig_Template
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
        $__internal_1e4742301c4cb0d7fe3f7df98dc2af9f778f7a63982f9fcb6f2cac441083144b = $this->env->getExtension("native_profiler");
        $__internal_1e4742301c4cb0d7fe3f7df98dc2af9f778f7a63982f9fcb6f2cac441083144b->enter($__internal_1e4742301c4cb0d7fe3f7df98dc2af9f778f7a63982f9fcb6f2cac441083144b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:sidebar.html.twig"));

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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : $this->getContext($context, "latestComments")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "id", array()))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "title", array()), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d h:iA"), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "comment", array()), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</section>";
        
        $__internal_1e4742301c4cb0d7fe3f7df98dc2af9f778f7a63982f9fcb6f2cac441083144b->leave($__internal_1e4742301c4cb0d7fe3f7df98dc2af9f778f7a63982f9fcb6f2cac441083144b_prof);

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
        return array (  109 => 35,  102 => 33,  93 => 29,  85 => 26,  80 => 24,  74 => 23,  70 => 22,  66 => 20,  61 => 19,  51 => 11,  44 => 9,  34 => 7,  29 => 6,  22 => 1,);
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
/* */
/* <section class="section">*/
/*     <header>*/
/*         <h3>Latest Comments</h3>*/
/*     </header>*/
/*     {% for comment in latestComments %}*/
/*         <article class="comment">*/
/*             <header>*/
/*                 <p class="small"><span class="highlight">{{ comment.user }}</span> commented on*/
/*                     <a href="{{ path('BlogBundle_blog_show', { 'id': comment.blog.id }) }}#comment-{{ comment.id }}">*/
/*                         {{ comment.blog.title }}*/
/*                     </a>*/
/*                     [<em><time datetime="{{ comment.created|date('c') }}">{{ comment.created|date('Y-m-d h:iA') }}</time></em>]*/
/*                 </p>*/
/*             </header>*/
/*             <p>{{ comment.comment }}</p>*/
/*             </p>*/
/*         </article>*/
/*     {% else %}*/
/*         <p>There are no recent comments</p>*/
/*     {% endfor %}*/
/* </section>*/
