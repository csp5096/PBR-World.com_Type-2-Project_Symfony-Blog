<?php

/* BlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_5d8b942f32c58ff1b24d35451ffea2eff2505b570b30c83facb88bebb161d3f6 extends Twig_Template
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
        // line 1
        echo "<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : null));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "id", array()))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "blog", array()), "title", array()), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d h:iA"), "html", null, true);
            echo "</time></em>]
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
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</section>";
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
        return array (  105 => 34,  98 => 32,  89 => 28,  81 => 25,  76 => 23,  70 => 22,  66 => 21,  62 => 19,  57 => 18,  48 => 11,  41 => 9,  31 => 7,  26 => 6,  19 => 1,);
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
