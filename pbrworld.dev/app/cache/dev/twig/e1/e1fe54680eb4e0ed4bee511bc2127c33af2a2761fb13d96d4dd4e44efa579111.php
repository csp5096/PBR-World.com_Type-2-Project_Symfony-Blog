<?php

/* ::base.html.twig */
class __TwigTemplate_d9fc5eb8a13cd2014b44ab37207ae92278189eaa873c2bc589df892a7154fd47 extends Twig_Template
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
        $__internal_86f9305cd7e65d9962f1f2745745a7ee88bbfdd49177bc5819213549107b7f2c = $this->env->getExtension("native_profiler");
        $__internal_86f9305cd7e65d9962f1f2745745a7ee88bbfdd49177bc5819213549107b7f2c->enter($__internal_86f9305cd7e65d9962f1f2745745a7ee88bbfdd49177bc5819213549107b7f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_86f9305cd7e65d9962f1f2745745a7ee88bbfdd49177bc5819213549107b7f2c->leave($__internal_86f9305cd7e65d9962f1f2745745a7ee88bbfdd49177bc5819213549107b7f2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_94adfb7d1e05f3e2e0c8a36a2248e3e471b6437e7aefb6b282d290669905526a = $this->env->getExtension("native_profiler");
        $__internal_94adfb7d1e05f3e2e0c8a36a2248e3e471b6437e7aefb6b282d290669905526a->enter($__internal_94adfb7d1e05f3e2e0c8a36a2248e3e471b6437e7aefb6b282d290669905526a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PBR World";
        
        $__internal_94adfb7d1e05f3e2e0c8a36a2248e3e471b6437e7aefb6b282d290669905526a->leave($__internal_94adfb7d1e05f3e2e0c8a36a2248e3e471b6437e7aefb6b282d290669905526a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b95af7692d0697bf3e366e8747ea80bbd2d9730d1c92555ec01d6fd43eb4e84 = $this->env->getExtension("native_profiler");
        $__internal_1b95af7692d0697bf3e366e8747ea80bbd2d9730d1c92555ec01d6fd43eb4e84->enter($__internal_1b95af7692d0697bf3e366e8747ea80bbd2d9730d1c92555ec01d6fd43eb4e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_1b95af7692d0697bf3e366e8747ea80bbd2d9730d1c92555ec01d6fd43eb4e84->leave($__internal_1b95af7692d0697bf3e366e8747ea80bbd2d9730d1c92555ec01d6fd43eb4e84_prof);

    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ad78ab1615eb0eb66b61f505cf8b08057069027c8400b4c814853bab5e91c97b = $this->env->getExtension("native_profiler");
        $__internal_ad78ab1615eb0eb66b61f505cf8b08057069027c8400b4c814853bab5e91c97b->enter($__internal_ad78ab1615eb0eb66b61f505cf8b08057069027c8400b4c814853bab5e91c97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_ad78ab1615eb0eb66b61f505cf8b08057069027c8400b4c814853bab5e91c97b->leave($__internal_ad78ab1615eb0eb66b61f505cf8b08057069027c8400b4c814853bab5e91c97b_prof);

    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_54c7d33fff564eae0fd3af5e143b4138ab111c501e5496a3e79a6616476c64ea = $this->env->getExtension("native_profiler");
        $__internal_54c7d33fff564eae0fd3af5e143b4138ab111c501e5496a3e79a6616476c64ea->enter($__internal_54c7d33fff564eae0fd3af5e143b4138ab111c501e5496a3e79a6616476c64ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">PBR World</a>";
        
        $__internal_54c7d33fff564eae0fd3af5e143b4138ab111c501e5496a3e79a6616476c64ea->leave($__internal_54c7d33fff564eae0fd3af5e143b4138ab111c501e5496a3e79a6616476c64ea_prof);

    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_c2e3e8f7b3162b84b544a30ef143699472bfc636d10dea5817e0b7940fccf119 = $this->env->getExtension("native_profiler");
        $__internal_c2e3e8f7b3162b84b544a30ef143699472bfc636d10dea5817e0b7940fccf119->enter($__internal_c2e3e8f7b3162b84b544a30ef143699472bfc636d10dea5817e0b7940fccf119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BlogBundle_homepage");
        echo "\">Pebble Bed Reactor Development News</a>";
        
        $__internal_c2e3e8f7b3162b84b544a30ef143699472bfc636d10dea5817e0b7940fccf119->leave($__internal_c2e3e8f7b3162b84b544a30ef143699472bfc636d10dea5817e0b7940fccf119_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_4efbd08cf29b630ca407c4c7afbb658511b55be62be9b78d656ef4e9c90a55bb = $this->env->getExtension("native_profiler");
        $__internal_4efbd08cf29b630ca407c4c7afbb658511b55be62be9b78d656ef4e9c90a55bb->enter($__internal_4efbd08cf29b630ca407c4c7afbb658511b55be62be9b78d656ef4e9c90a55bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4efbd08cf29b630ca407c4c7afbb658511b55be62be9b78d656ef4e9c90a55bb->leave($__internal_4efbd08cf29b630ca407c4c7afbb658511b55be62be9b78d656ef4e9c90a55bb_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2589fd21e8038d257bdcb58b89d2094a9123915d2b01c82bfbfa63ba85f61307 = $this->env->getExtension("native_profiler");
        $__internal_2589fd21e8038d257bdcb58b89d2094a9123915d2b01c82bfbfa63ba85f61307->enter($__internal_2589fd21e8038d257bdcb58b89d2094a9123915d2b01c82bfbfa63ba85f61307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2589fd21e8038d257bdcb58b89d2094a9123915d2b01c82bfbfa63ba85f61307->leave($__internal_2589fd21e8038d257bdcb58b89d2094a9123915d2b01c82bfbfa63ba85f61307_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6a985c1efcaa7ba625db75c8bfd62e38357af787c93eb8419de0b2c9da76a384 = $this->env->getExtension("native_profiler");
        $__internal_6a985c1efcaa7ba625db75c8bfd62e38357af787c93eb8419de0b2c9da76a384->enter($__internal_6a985c1efcaa7ba625db75c8bfd62e38357af787c93eb8419de0b2c9da76a384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 47
        echo "                    Webmaster: <a href=\"https://github.com/csp5096\" target=\"_blank\">CS Powell</a>
                ";
        
        $__internal_6a985c1efcaa7ba625db75c8bfd62e38357af787c93eb8419de0b2c9da76a384->leave($__internal_6a985c1efcaa7ba625db75c8bfd62e38357af787c93eb8419de0b2c9da76a384_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7ed4c795e28ae676a30b9a1ebdfbf3bdebc0da483ddfb80a2b10b3508d85ebd = $this->env->getExtension("native_profiler");
        $__internal_d7ed4c795e28ae676a30b9a1ebdfbf3bdebc0da483ddfb80a2b10b3508d85ebd->enter($__internal_d7ed4c795e28ae676a30b9a1ebdfbf3bdebc0da483ddfb80a2b10b3508d85ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7ed4c795e28ae676a30b9a1ebdfbf3bdebc0da483ddfb80a2b10b3508d85ebd->leave($__internal_d7ed4c795e28ae676a30b9a1ebdfbf3bdebc0da483ddfb80a2b10b3508d85ebd_prof);

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
