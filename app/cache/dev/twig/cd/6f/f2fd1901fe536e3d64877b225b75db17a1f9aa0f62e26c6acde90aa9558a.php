<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_cd6ff2fd1901fe536e3d64877b225b75db17a1f9aa0f62e26c6acde90aa9558a extends Twig_Template
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
        return array (  42 => 14,  38 => 13,  26 => 5,  55 => 13,  31 => 5,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  56 => 9,  24 => 4,  201 => 92,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  156 => 66,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  36 => 7,  27 => 4,  22 => 2,  57 => 16,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  244 => 98,  241 => 97,  234 => 94,  231 => 93,  223 => 88,  219 => 86,  214 => 83,  205 => 79,  199 => 91,  188 => 73,  180 => 68,  176 => 67,  167 => 64,  158 => 67,  155 => 60,  151 => 63,  147 => 57,  142 => 59,  140 => 55,  125 => 42,  122 => 40,  113 => 31,  105 => 40,  98 => 40,  95 => 26,  87 => 20,  81 => 23,  77 => 21,  64 => 12,  60 => 18,  54 => 21,  50 => 8,  44 => 10,  41 => 9,  35 => 4,  32 => 12,);
    }
}
