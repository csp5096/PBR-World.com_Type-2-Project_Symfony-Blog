<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c73fa260fa3f8be799baa6841d0ff278863ea5f7ff1e429a2f7ce0c0a64238cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25356fadf2afd1696d43b83c718066ea7657ca1dfa33371722fcb00fe069b3b6 = $this->env->getExtension("native_profiler");
        $__internal_25356fadf2afd1696d43b83c718066ea7657ca1dfa33371722fcb00fe069b3b6->enter($__internal_25356fadf2afd1696d43b83c718066ea7657ca1dfa33371722fcb00fe069b3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25356fadf2afd1696d43b83c718066ea7657ca1dfa33371722fcb00fe069b3b6->leave($__internal_25356fadf2afd1696d43b83c718066ea7657ca1dfa33371722fcb00fe069b3b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97df9caa76a70ec0cac397210275b83f69e0a7c33d23e4b546b1db345bc4946e = $this->env->getExtension("native_profiler");
        $__internal_97df9caa76a70ec0cac397210275b83f69e0a7c33d23e4b546b1db345bc4946e->enter($__internal_97df9caa76a70ec0cac397210275b83f69e0a7c33d23e4b546b1db345bc4946e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97df9caa76a70ec0cac397210275b83f69e0a7c33d23e4b546b1db345bc4946e->leave($__internal_97df9caa76a70ec0cac397210275b83f69e0a7c33d23e4b546b1db345bc4946e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f96ee37108f3296e9bc067c318e5ae24906974f73f9ba814addc242402a30e87 = $this->env->getExtension("native_profiler");
        $__internal_f96ee37108f3296e9bc067c318e5ae24906974f73f9ba814addc242402a30e87->enter($__internal_f96ee37108f3296e9bc067c318e5ae24906974f73f9ba814addc242402a30e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f96ee37108f3296e9bc067c318e5ae24906974f73f9ba814addc242402a30e87->leave($__internal_f96ee37108f3296e9bc067c318e5ae24906974f73f9ba814addc242402a30e87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65eae8d557e6e9e3ee0b45867447d6a9b08c241e418d12a4352ecc98b18db8b3 = $this->env->getExtension("native_profiler");
        $__internal_65eae8d557e6e9e3ee0b45867447d6a9b08c241e418d12a4352ecc98b18db8b3->enter($__internal_65eae8d557e6e9e3ee0b45867447d6a9b08c241e418d12a4352ecc98b18db8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65eae8d557e6e9e3ee0b45867447d6a9b08c241e418d12a4352ecc98b18db8b3->leave($__internal_65eae8d557e6e9e3ee0b45867447d6a9b08c241e418d12a4352ecc98b18db8b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
