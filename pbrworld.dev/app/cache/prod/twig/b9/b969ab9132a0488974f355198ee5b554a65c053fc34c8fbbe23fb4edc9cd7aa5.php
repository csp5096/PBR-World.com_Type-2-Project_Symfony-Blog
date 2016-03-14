<?php

/* BlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_0a53b50deeb7c840c0b9c419b9994e491098ff35ff9b194535902c72d164bc3c extends Twig_Template
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
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 3
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "email", array());
        echo "
Subject: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "subject", array());
        echo "
Body:
";
        // line 6
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "body", array());
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
        return array (  36 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
/* A contact enquiry was made by {{ enquiry.name }} at {{ "now" | date("Y-m-d H:i") }}.*/
/* */
/* Reply-To: {{ enquiry.email }}*/
/* Subject: {{ enquiry.subject }}*/
/* Body:*/
/* {{ enquiry.body }}*/
