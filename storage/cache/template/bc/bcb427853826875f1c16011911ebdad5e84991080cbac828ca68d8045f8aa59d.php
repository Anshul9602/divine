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
class __TwigTemplate_54ec4a91de56c45959fd6f2e0e3e3f9bcff5472df1bdae484e1beb36554731d1 extends \Twig\Template
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
\t\t
\t\t<div class=\"col-12\">
\t\t\t<a href=\"index.php?route=common/collection&path=78\">COLLECTION</a>
\t\t\t<hr/>
\t\t</div>
\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"#\" class=\"collapse-toggle\">";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "</a>
\t\t\t\t\t<hr/>
\t\t\t\t\t<span class=\"collapse-span\">
\t\t\t\t\t\t";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 36), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 36)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 36), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 37
                        echo "\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 38
                            echo "\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 39
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 39);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 39);
                            echo "</a>
\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "\t\t\t\t\t\t<span></div>
\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46) == "Diamonds") || (twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46) == "diamonds"))) {
                        // line 47
                        echo "\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/diamonds\">";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                        echo "</a>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    } else {
                        // line 52
                        echo "\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 53
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 53);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                        echo "</a>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t
\t\t\t";
        }
        // line 61
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
        return array (  157 => 61,  153 => 59,  147 => 58,  144 => 57,  135 => 53,  132 => 52,  125 => 48,  122 => 47,  119 => 46,  115 => 44,  109 => 43,  97 => 39,  94 => 38,  89 => 37,  85 => 36,  79 => 33,  76 => 32,  73 => 31,  69 => 30,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/mobile_menu.twig", "");
    }
}
