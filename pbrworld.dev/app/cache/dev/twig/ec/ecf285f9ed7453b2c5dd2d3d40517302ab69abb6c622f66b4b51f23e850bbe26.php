<?php

/* ::base.html.twig */
class __TwigTemplate_28d22e9768f223bc78b7d12a99c36560502203716e789119329e30ad69562c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d9b8acc55bfa154d3416927761726c915bd9d1f2917b96cb9d28202fcdbfc2 = $this->env->getExtension("native_profiler");
        $__internal_39d9b8acc55bfa154d3416927761726c915bd9d1f2917b96cb9d28202fcdbfc2->enter($__internal_39d9b8acc55bfa154d3416927761726c915bd9d1f2917b96cb9d28202fcdbfc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - Pebble Bed Reactor Development News</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 30
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 33
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 34
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "            </div>
        </section>

        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "    </body>
</html>
";
        
        $__internal_39d9b8acc55bfa154d3416927761726c915bd9d1f2917b96cb9d28202fcdbfc2->leave($__internal_39d9b8acc55bfa154d3416927761726c915bd9d1f2917b96cb9d28202fcdbfc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32deed80ad48eb93be50adceb319c2f3931a4d64fb4c83160a6316e41d67b886 = $this->env->getExtension("native_profiler");
        $__internal_32deed80ad48eb93be50adceb319c2f3931a4d64fb4c83160a6316e41d67b886->enter($__internal_32deed80ad48eb93be50adceb319c2f3931a4d64fb4c83160a6316e41d67b886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PBR World";
        
        $__internal_32deed80ad48eb93be50adceb319c2f3931a4d64fb4c83160a6316e41d67b886->leave($__internal_32deed80ad48eb93be50adceb319c2f3931a4d64fb4c83160a6316e41d67b886_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11a5086f1862dcefceb4f39b8ffdee0f09cfa999f5fc5fc6e6efe509ca63a321 = $this->env->getExtension("native_profiler");
        $__internal_11a5086f1862dcefceb4f39b8ffdee0f09cfa999f5fc5fc6e6efe509ca63a321->enter($__internal_11a5086f1862dcefceb4f39b8ffdee0f09cfa999f5fc5fc6e6efe509ca63a321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_11a5086f1862dcefceb4f39b8ffdee0f09cfa999f5fc5fc6e6efe509ca63a321->leave($__internal_11a5086f1862dcefceb4f39b8ffdee0f09cfa999f5fc5fc6e6efe509ca63a321_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_dd2373b77ca79f94898973bc620740c59c87ec4753cdd695c33dd2368b7c93bf = $this->env->getExtension("native_profiler");
        $__internal_dd2373b77ca79f94898973bc620740c59c87ec4753cdd695c33dd2368b7c93bf->enter($__internal_dd2373b77ca79f94898973bc620740c59c87ec4753cdd695c33dd2368b7c93bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 22
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BlogBundle_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_dd2373b77ca79f94898973bc620740c59c87ec4753cdd695c33dd2368b7c93bf->leave($__internal_dd2373b77ca79f94898973bc620740c59c87ec4753cdd695c33dd2368b7c93bf_prof);

    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_c8aed9fcbeb991869dc5a14a221371a262e66356a3e78f291244ab487867e7c3 = $this->env->getExtension("native_profiler");
        $__internal_c8aed9fcbeb991869dc5a14a221371a262e66356a3e78f291244ab487867e7c3->enter($__internal_c8aed9fcbeb991869dc5a14a221371a262e66356a3e78f291244ab487867e7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">PBR World</a>";
        
        $__internal_c8aed9fcbeb991869dc5a14a221371a262e66356a3e78f291244ab487867e7c3->leave($__internal_c8aed9fcbeb991869dc5a14a221371a262e66356a3e78f291244ab487867e7c3_prof);

    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_a415f86ff12663f7174114786e0e4d256a22dc8da9c6d4841ff3c532bfc68628 = $this->env->getExtension("native_profiler");
        $__internal_a415f86ff12663f7174114786e0e4d256a22dc8da9c6d4841ff3c532bfc68628->enter($__internal_a415f86ff12663f7174114786e0e4d256a22dc8da9c6d4841ff3c532bfc68628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">Pebble Bed Reactor Development News</a>";
        
        $__internal_a415f86ff12663f7174114786e0e4d256a22dc8da9c6d4841ff3c532bfc68628->leave($__internal_a415f86ff12663f7174114786e0e4d256a22dc8da9c6d4841ff3c532bfc68628_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_f47619f64a52d7625842c20b5472677dbe19f03afc424fbb11ac0d9f9ede044f = $this->env->getExtension("native_profiler");
        $__internal_f47619f64a52d7625842c20b5472677dbe19f03afc424fbb11ac0d9f9ede044f->enter($__internal_f47619f64a52d7625842c20b5472677dbe19f03afc424fbb11ac0d9f9ede044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f47619f64a52d7625842c20b5472677dbe19f03afc424fbb11ac0d9f9ede044f->leave($__internal_f47619f64a52d7625842c20b5472677dbe19f03afc424fbb11ac0d9f9ede044f_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_804aadb2a69e3e0848f314ac8f7ac30f3ceed64586e411b246fb26d8f7519057 = $this->env->getExtension("native_profiler");
        $__internal_804aadb2a69e3e0848f314ac8f7ac30f3ceed64586e411b246fb26d8f7519057->enter($__internal_804aadb2a69e3e0848f314ac8f7ac30f3ceed64586e411b246fb26d8f7519057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_804aadb2a69e3e0848f314ac8f7ac30f3ceed64586e411b246fb26d8f7519057->leave($__internal_804aadb2a69e3e0848f314ac8f7ac30f3ceed64586e411b246fb26d8f7519057_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6ac1c470ee6e7bf77caeb0a7ac90d65360ad2320aa9b9787a0e702e6c903c91b = $this->env->getExtension("native_profiler");
        $__internal_6ac1c470ee6e7bf77caeb0a7ac90d65360ad2320aa9b9787a0e702e6c903c91b->enter($__internal_6ac1c470ee6e7bf77caeb0a7ac90d65360ad2320aa9b9787a0e702e6c903c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 47
        echo "                    Webmaster: <a href=\"https://github.com/csp5096\" target=\"_blank\">CS Powell</a>
                ";
        
        $__internal_6ac1c470ee6e7bf77caeb0a7ac90d65360ad2320aa9b9787a0e702e6c903c91b->leave($__internal_6ac1c470ee6e7bf77caeb0a7ac90d65360ad2320aa9b9787a0e702e6c903c91b_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed6a612ecfc09b1ac69af12dc2e54e1b9b37f79cbeed32a30728895b243c40c0 = $this->env->getExtension("native_profiler");
        $__internal_ed6a612ecfc09b1ac69af12dc2e54e1b9b37f79cbeed32a30728895b243c40c0->enter($__internal_ed6a612ecfc09b1ac69af12dc2e54e1b9b37f79cbeed32a30728895b243c40c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed6a612ecfc09b1ac69af12dc2e54e1b9b37f79cbeed32a30728895b243c40c0->leave($__internal_ed6a612ecfc09b1ac69af12dc2e54e1b9b37f79cbeed32a30728895b243c40c0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 52,  223 => 47,  217 => 46,  206 => 42,  195 => 39,  181 => 34,  167 => 33,  156 => 26,  152 => 25,  148 => 24,  144 => 22,  138 => 21,  129 => 12,  125 => 10,  119 => 9,  107 => 5,  98 => 53,  96 => 52,  91 => 49,  89 => 46,  84 => 43,  82 => 42,  78 => 40,  76 => 39,  68 => 34,  64 => 33,  59 => 30,  57 => 21,  46 => 14,  44 => 9,  37 => 5,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*         <title>{% block title %}PBR World{% endblock %} - Pebble Bed Reactor Development News</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="{{ path('BlogBundle_homepage') }}">Home</a></li>*/
/*                                 <li><a href="{{ path('BlogBundle_about') }}">About</a></li>*/
/*                                 <li><a href="{{ path('BlogBundle_contact') }}">Contact</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="{{ path('BlogBundle_homepage') }}">PBR World</a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="{{ path('BlogBundle_homepage') }}">Pebble Bed Reactor Development News</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Webmaster: <a href="https://github.com/csp5096" target="_blank">CS Powell</a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
