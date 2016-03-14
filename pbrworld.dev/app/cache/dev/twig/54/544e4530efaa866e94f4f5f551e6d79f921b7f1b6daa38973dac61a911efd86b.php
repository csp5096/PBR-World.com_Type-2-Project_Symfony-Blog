<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1ba7dfabf096efd95555dc9e1e84301af43539f857482be50081d52809cd2e31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4d8ae793441786a9b508c8f4d1a96d21b632b2ef0605d4f17a2ba9965a05eea5 = $this->env->getExtension("native_profiler");
        $__internal_4d8ae793441786a9b508c8f4d1a96d21b632b2ef0605d4f17a2ba9965a05eea5->enter($__internal_4d8ae793441786a9b508c8f4d1a96d21b632b2ef0605d4f17a2ba9965a05eea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d8ae793441786a9b508c8f4d1a96d21b632b2ef0605d4f17a2ba9965a05eea5->leave($__internal_4d8ae793441786a9b508c8f4d1a96d21b632b2ef0605d4f17a2ba9965a05eea5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1eb613b1cddbd0d758f15e2212a8fbe71f36c2be8f1d724bf7e852529be72b3e = $this->env->getExtension("native_profiler");
        $__internal_1eb613b1cddbd0d758f15e2212a8fbe71f36c2be8f1d724bf7e852529be72b3e->enter($__internal_1eb613b1cddbd0d758f15e2212a8fbe71f36c2be8f1d724bf7e852529be72b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1eb613b1cddbd0d758f15e2212a8fbe71f36c2be8f1d724bf7e852529be72b3e->leave($__internal_1eb613b1cddbd0d758f15e2212a8fbe71f36c2be8f1d724bf7e852529be72b3e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_891de442030a65e17323a9864f7f72d7bf99dac0f1f6175d39ecb5dc7e2c1489 = $this->env->getExtension("native_profiler");
        $__internal_891de442030a65e17323a9864f7f72d7bf99dac0f1f6175d39ecb5dc7e2c1489->enter($__internal_891de442030a65e17323a9864f7f72d7bf99dac0f1f6175d39ecb5dc7e2c1489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_891de442030a65e17323a9864f7f72d7bf99dac0f1f6175d39ecb5dc7e2c1489->leave($__internal_891de442030a65e17323a9864f7f72d7bf99dac0f1f6175d39ecb5dc7e2c1489_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa38c49b5167e7335ce1976f76ae5833ef9ba64172c0e72d7f275992ca3008be = $this->env->getExtension("native_profiler");
        $__internal_aa38c49b5167e7335ce1976f76ae5833ef9ba64172c0e72d7f275992ca3008be->enter($__internal_aa38c49b5167e7335ce1976f76ae5833ef9ba64172c0e72d7f275992ca3008be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aa38c49b5167e7335ce1976f76ae5833ef9ba64172c0e72d7f275992ca3008be->leave($__internal_aa38c49b5167e7335ce1976f76ae5833ef9ba64172c0e72d7f275992ca3008be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
