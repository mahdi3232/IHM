<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_1bd9436fa5af2e65f0367624df592b3e9334c3929063e64f2b8c4b1a077750b5 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 13,  35 => 4,  26 => 5,  87 => 20,  80 => 19,  55 => 13,  46 => 7,  44 => 10,  36 => 7,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  85 => 19,  75 => 17,  68 => 14,  64 => 12,  50 => 8,  41 => 9,  27 => 4,  24 => 4,  22 => 2,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  32 => 12,  19 => 1,  57 => 16,  54 => 21,  43 => 8,  40 => 7,  33 => 10,  30 => 3,  116 => 56,  112 => 42,  109 => 52,  102 => 43,  89 => 20,  83 => 37,  79 => 18,  76 => 35,  72 => 16,  59 => 23,  56 => 9,  45 => 11,  42 => 14,  39 => 6,  34 => 5,  31 => 5,);
    }
}
