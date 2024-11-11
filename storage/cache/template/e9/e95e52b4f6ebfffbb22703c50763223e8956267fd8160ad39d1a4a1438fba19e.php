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
class __TwigTemplate_88cc3f2c5b30c4f436581451eb7d9a8e1e18af8fedc4333d9c8755891efc40c7 extends \Twig\Template
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
            echo "\" alt=\"logo\" class=\"img-responsive\" style=\"max-width:120px;\"/>
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
                    echo " \">
\t\t\t\t\t\t\t<img src=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 49);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 50);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 53
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t</li>
\t\t
\t</ul>
</nav>";
        }
        // line 57
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
        return array (  175 => 57,  169 => 54,  163 => 53,  157 => 50,  153 => 49,  149 => 48,  146 => 47,  141 => 44,  135 => 43,  123 => 36,  112 => 33,  109 => 32,  105 => 31,  98 => 29,  93 => 26,  88 => 25,  84 => 24,  76 => 21,  73 => 20,  71 => 19,  67 => 17,  63 => 16,  56 => 12,  52 => 11,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
