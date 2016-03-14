<?php

/* BlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_83bfc1c96e1c0290c1960e7fb99b9f5e45faea79eb028333563ef2620d22991d extends Twig_Template
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
        $__internal_358a07c64e20f966a9a025248f02e0acf51d6b120154ac066b29ab1f686bb4e4 = $this->env->getExtension("native_profiler");
        $__internal_358a07c64e20f966a9a025248f02e0acf51d6b120154ac066b29ab1f686bb4e4->enter($__internal_358a07c64e20f966a9a025248f02e0acf51d6b120154ac066b29ab1f686bb4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:contactEmail.txt.twig"));

        // line 1
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 3
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array());
        echo "
Subject: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject", array());
        echo "
Body:
";
        // line 6
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body", array());
        
        $__internal_358a07c64e20f966a9a025248f02e0acf51d6b120154ac066b29ab1f686bb4e4->leave($__internal_358a07c64e20f966a9a025248f02e0acf51d6b120154ac066b29ab1f686bb4e4_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  30 => 3,  22 => 1,);
    }
}
/* A contact enquiry was made by {{ enquiry.name }} at {{ "now" | date("Y-m-d H:i") }}.*/
/* */
/* Reply-To: {{ enquiry.email }}*/
/* Subject: {{ enquiry.subject }}*/
/* Body:*/
/* {{ enquiry.body }}*/
