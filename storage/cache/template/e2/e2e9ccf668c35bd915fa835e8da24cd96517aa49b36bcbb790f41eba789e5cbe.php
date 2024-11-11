<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/menu.twig */
class __TwigTemplate_db7c753e5d5254db3db6dfcf19cb71a052b8261d3af49e80e315ec405d1fc205 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<style>
.dlogo {
\t\tdisplay: block !important;
\t}</style>

";
        // line 6
        if (($context["categories"] ?? null)) {
            // line 7
            echo "\t<nav class=\"desktop-menu\">
\t\t<ul class=\"nav justify-content-space-around w-100\">
<li class=\"logos\" style=\"display:none;\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a href=\"";
            // line 11
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t<img src=\"\" title=\"";
            // line 12
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" style=\"max-width:120px;\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 17
                echo "

\t\t\t\t";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                    echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown row\" style=\"width:1350px;left:-300px;\">

\t\t\t\t\t\t\t";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 24), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 24)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 24), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 26
                            echo "

\t\t\t\t\t\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 29
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 29);
                            echo " \" style=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 29);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 31
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 31));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 32
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 33
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 33);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 33);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 36
                            echo "
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\" ";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 48);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 51
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t</li>
\t\t
\t</ul>
</nav>";
        }
        // line 55
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 55,  165 => 52,  159 => 51,  151 => 48,  148 => 47,  143 => 44,  137 => 43,  125 => 36,  114 => 33,  111 => 32,  107 => 31,  100 => 29,  95 => 26,  90 => 25,  86 => 24,  78 => 21,  75 => 20,  73 => 19,  69 => 17,  65 => 16,  56 => 12,  52 => 11,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
