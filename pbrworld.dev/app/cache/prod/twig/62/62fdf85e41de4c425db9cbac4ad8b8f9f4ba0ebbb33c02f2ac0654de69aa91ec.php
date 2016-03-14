<?php

/* BlogBundle:Page:about.html.twig */
class __TwigTemplate_6a1a734d5d52cb61dc43de40f038f88aa885256c0f3e69c6654de7cf83ef9314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:about.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <header>
        <h1>What is a Pebble Bed Reactor?</h1>
    </header>
    <article>
        <p>The pebble-bed reactor (PBR) is a graphite-moderated, gas-cooled nuclear reactor. 
\t\tIt is a type of very-high-temperature reactor (VHTR), one of the six classes of nuclear reactors in the Generation IV initiative. 
\t\tThe basic design of pebble-bed reactors features spherical fuel elements called pebbles. 
\t\tThese tennis ball-sized pebbles are made of pyrolytic graphite (which acts as the moderator), 
\t\tand they contain thousands of micro-fuel particles called TRISO particles. 
\t\tThese TRISO fuel particles consist of a fissile material (such as 235U) surrounded by a coated ceramic layer of silicon carbide 
\t\tfor structural integrity and fission product containment. In the PBR, thousands of pebbles are amassed to create a reactor core, 
\t\tand are cooled by a gas, such as helium, nitrogen or carbon dioxide, that does not react chemically with the fuel elements.
        </n>
        This type of reactor is claimed to be passively safe; that is, it removes the need for redundant, active safety systems. 
\t\tBecause the reactor is designed to handle high temperatures, it can cool by natural circulation and still survive in accident scenarios, 
\t\twhich may raise the temperature of the reactor to 1,600 °C. 
\t\tBecause of its design, its high temperatures allow higher thermal efficiencies than possible in traditional nuclear power plants (up to 50%) 
\t\tand has the additional feature that the gases do not dissolve contaminants or absorb neutrons as water does, 
\t\tso the core has less in the way of radioactive fluids.
        </n>
        The concept was first suggested by Farrington Daniels in the 1940s, s
\t\taid to have been inspired by the innovative design of the benghazi burner by British desert troops in WWII, 
\t\tbut commercial development did not take place until the 1960s in the German AVR reactor by Rudolf Schulten. 
\t\tbut this system was plagued with problems and political and economic decisions were made to abandon the technology.
\t\tThe AVR design was licensed to South Africa as the PBMR and China as the HTR-10, the latter currently the only such design operational. 
\t\tIn various forms, other designs are under development by MIT, University of California at Berkeley, General Atomics (U.S.), 
\t\tthe Dutch company Romawa B.V., Adams Atomic Engines, and Idaho National Laboratory.
\t\t</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'BlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}About{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>What is a Pebble Bed Reactor?</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>The pebble-bed reactor (PBR) is a graphite-moderated, gas-cooled nuclear reactor. */
/* 		It is a type of very-high-temperature reactor (VHTR), one of the six classes of nuclear reactors in the Generation IV initiative. */
/* 		The basic design of pebble-bed reactors features spherical fuel elements called pebbles. */
/* 		These tennis ball-sized pebbles are made of pyrolytic graphite (which acts as the moderator), */
/* 		and they contain thousands of micro-fuel particles called TRISO particles. */
/* 		These TRISO fuel particles consist of a fissile material (such as 235U) surrounded by a coated ceramic layer of silicon carbide */
/* 		for structural integrity and fission product containment. In the PBR, thousands of pebbles are amassed to create a reactor core, */
/* 		and are cooled by a gas, such as helium, nitrogen or carbon dioxide, that does not react chemically with the fuel elements.*/
/*         </n>*/
/*         This type of reactor is claimed to be passively safe; that is, it removes the need for redundant, active safety systems. */
/* 		Because the reactor is designed to handle high temperatures, it can cool by natural circulation and still survive in accident scenarios, */
/* 		which may raise the temperature of the reactor to 1,600 °C. */
/* 		Because of its design, its high temperatures allow higher thermal efficiencies than possible in traditional nuclear power plants (up to 50%) */
/* 		and has the additional feature that the gases do not dissolve contaminants or absorb neutrons as water does, */
/* 		so the core has less in the way of radioactive fluids.*/
/*         </n>*/
/*         The concept was first suggested by Farrington Daniels in the 1940s, s*/
/* 		aid to have been inspired by the innovative design of the benghazi burner by British desert troops in WWII, */
/* 		but commercial development did not take place until the 1960s in the German AVR reactor by Rudolf Schulten. */
/* 		but this system was plagued with problems and political and economic decisions were made to abandon the technology.*/
/* 		The AVR design was licensed to South Africa as the PBMR and China as the HTR-10, the latter currently the only such design operational. */
/* 		In various forms, other designs are under development by MIT, University of California at Berkeley, General Atomics (U.S.), */
/* 		the Dutch company Romawa B.V., Adams Atomic Engines, and Idaho National Laboratory.*/
/* 		</p>*/
/*     </article>*/
/* {% endblock %}*/
