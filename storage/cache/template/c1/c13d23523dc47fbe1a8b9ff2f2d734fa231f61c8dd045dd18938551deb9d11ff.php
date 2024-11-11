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

/* default/template/common/mobile_menu.twig */
class __TwigTemplate_79222a702f1f2eda8dda8c89bfbe5f9cc40b093d1c9e1287ff00bd4b0c33328d extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<style>
\t\t.mobile_menu .col-12 hr {
\t\t\tmargin: 7px 0;
\t\t}
\t\t.mobile-navigation {
\t\t\tmax-height: 500px;
\t\t}
\t\t.mobile_menu .col-12 a {
\t\t\ttext-transform: uppercase;
\t\t\tcolor: #333;
\t\t\tfont-size: 12px;
\t\t}
\t\t.collapse-span {
\t\t\tdisplay: none;
\t\t}
\t</style>
\t<div class=\"row mobile_menu\">
\t\t<br/>
\t\t<br/>
\t\t<div class=\"col-12\" style='margin-top:10px'>
\t\t\t<a href=\"index.php?route=common/home\">Home</a>
\t\t\t<hr/>
\t\t</div>
\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"#\" class=\"collapse-toggle\">";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
                    echo "</a>
\t\t\t\t\t<hr/>
\t\t\t\t\t<span class=\"collapse-span\">
\t\t\t\t\t\t";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 31), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 32
                        echo "\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 34
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 34);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 34);
                            echo "</a>
\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "\t\t\t\t\t\t<span></div>
\t\t\t\t\t";
                } else {
                    // line 41
                    echo "\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41) == "Diamonds") || (twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41) == "diamonds"))) {
                        // line 42
                        echo "\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/diamonds\">";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 43);
                        echo "</a>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 48);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                        echo "</a>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t
\t\t\t";
        }
        // line 56
        echo "\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$(\".collapse-toggle\").click(function (e) {
e.preventDefault();
\$(\".collapse-span\").slideToggle();
})
})
\t\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/mobile_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  148 => 54,  142 => 53,  139 => 52,  130 => 48,  127 => 47,  120 => 43,  117 => 42,  114 => 41,  110 => 39,  104 => 38,  92 => 34,  89 => 33,  84 => 32,  80 => 31,  74 => 28,  71 => 27,  68 => 26,  64 => 25,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
