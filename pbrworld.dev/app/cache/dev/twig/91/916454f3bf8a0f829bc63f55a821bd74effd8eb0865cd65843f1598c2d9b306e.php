<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9efc72bf81369a77a9038d1e3e860b60e809fc1959bfbddaea87ca690963ef0c extends Twig_Template
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
        $__internal_64359ec4a9a574f2aaaf2e482ae5584ce98525f722e3e4db0f3ca5ab1f518c6b = $this->env->getExtension("native_profiler");
        $__internal_64359ec4a9a574f2aaaf2e482ae5584ce98525f722e3e4db0f3ca5ab1f518c6b->enter($__internal_64359ec4a9a574f2aaaf2e482ae5584ce98525f722e3e4db0f3ca5ab1f518c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_64359ec4a9a574f2aaaf2e482ae5584ce98525f722e3e4db0f3ca5ab1f518c6b->leave($__internal_64359ec4a9a574f2aaaf2e482ae5584ce98525f722e3e4db0f3ca5ab1f518c6b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
