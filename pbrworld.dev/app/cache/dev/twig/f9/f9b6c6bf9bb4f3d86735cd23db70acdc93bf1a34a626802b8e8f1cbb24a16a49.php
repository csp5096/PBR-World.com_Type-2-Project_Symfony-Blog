<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ac53d610fa6239985f6c9dc8420a17437e50dfb37987c0b1ee310f9524e4fe4a extends Twig_Template
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
        $__internal_c44a4c923c0ec16a3020dad27ae6e4ec9309d6adcc68d509a7434be8da9d77d5 = $this->env->getExtension("native_profiler");
        $__internal_c44a4c923c0ec16a3020dad27ae6e4ec9309d6adcc68d509a7434be8da9d77d5->enter($__internal_c44a4c923c0ec16a3020dad27ae6e4ec9309d6adcc68d509a7434be8da9d77d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c44a4c923c0ec16a3020dad27ae6e4ec9309d6adcc68d509a7434be8da9d77d5->leave($__internal_c44a4c923c0ec16a3020dad27ae6e4ec9309d6adcc68d509a7434be8da9d77d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8c95fe990a28f498f21ca814c21e46c93af4d939556f2d5b73ad2e26b0660a9 = $this->env->getExtension("native_profiler");
        $__internal_e8c95fe990a28f498f21ca814c21e46c93af4d939556f2d5b73ad2e26b0660a9->enter($__internal_e8c95fe990a28f498f21ca814c21e46c93af4d939556f2d5b73ad2e26b0660a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8c95fe990a28f498f21ca814c21e46c93af4d939556f2d5b73ad2e26b0660a9->leave($__internal_e8c95fe990a28f498f21ca814c21e46c93af4d939556f2d5b73ad2e26b0660a9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8b2c65a719e2464f467b56434c133e135ad9446538352c75ff8edf532d6a446 = $this->env->getExtension("native_profiler");
        $__internal_e8b2c65a719e2464f467b56434c133e135ad9446538352c75ff8edf532d6a446->enter($__internal_e8b2c65a719e2464f467b56434c133e135ad9446538352c75ff8edf532d6a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8b2c65a719e2464f467b56434c133e135ad9446538352c75ff8edf532d6a446->leave($__internal_e8b2c65a719e2464f467b56434c133e135ad9446538352c75ff8edf532d6a446_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_194ec14cc6afd7bb85777f74da6638095491bb9f6388d82e978b64bb92f7200f = $this->env->getExtension("native_profiler");
        $__internal_194ec14cc6afd7bb85777f74da6638095491bb9f6388d82e978b64bb92f7200f->enter($__internal_194ec14cc6afd7bb85777f74da6638095491bb9f6388d82e978b64bb92f7200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_194ec14cc6afd7bb85777f74da6638095491bb9f6388d82e978b64bb92f7200f->leave($__internal_194ec14cc6afd7bb85777f74da6638095491bb9f6388d82e978b64bb92f7200f_prof);

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
