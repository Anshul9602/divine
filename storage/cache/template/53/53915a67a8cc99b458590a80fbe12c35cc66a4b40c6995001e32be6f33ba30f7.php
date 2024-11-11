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
class __TwigTemplate_0050feff3b900fdb7f3f0741a35328e4275dfe0eb7e109cc099c6b4fac5db0cd extends \Twig\Template
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
.main-menu ul li ul.dropdown1 {
    top: calc(100% - 1px);
    left: 0;
    width: 1000px;
    position: absolute;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
    background-color: #fff;
    opacity: 0;
    visibility: hidden;
    z-index: 99999;
    pointer-events: none;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
    border: 1px solid #efefef;
}
\t.dlogo {
\t\tdisplay: block !important;
\t}
</style>


";
        // line 26
        if (($context["categories"] ?? null)) {
            // line 27
            echo "\t<nav class=\"desktop-menu\">
\t\t<ul class=\"header-style-4 container\" style=\"justify-content: space-between;\">
\t\t\t<li class=\"logos\" style=\"display:none;\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a href=\"";
            // line 31
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 32
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" style=\"max-width:120px;\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37)) {
                    // line 38
                    echo "\t\t\t\t\t<li class=\" d-flex \" style=\"align-items: center;\">
\t\t\t\t\t\t";
                    // line 39
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 39);
                    // line 40
                    echo "
\t\t\t\t\t\t<a href=\"";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                    echo "\" >
\t\t\t\t\t\t<span class=\"dropdown-toggle \" >";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42);
                    echo "</span></a>
\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 44), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 44)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 44), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 46
                            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 47
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 47);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 47);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 50
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t\t<li class=\"dropdown d-flex\" style=\"align-items: center;\">
\t\t\t\t\t\t<a href=\"index.php?route=common/Furniture\"class=\"dropdown-toggle\" >";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55);
                    echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown1 dropdown \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 59
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                        // line 60
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 60)) {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t\t<li class=\"col-md-2 pr-0\" style=\"align-items: center;\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 62
                            $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 62);
                            // line 63
                            echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 64
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 64);
                            echo "\"  style=\"color:#0e212c;    font-weight: 800;\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 64);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"\" style=\"max-height:300px;overflow-y:scroll\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 66
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 66), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 66)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 66), 1, "ceil"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                // line 67
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["children"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 68
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 69
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 69);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 69);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 72
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t";
                        }
                        // line 78
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 85
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t</ul>
\t</nav>

";
        }
        // line 90
        echo "

<script>

\tfunction myFunction(myVariable) {
console.log(myVariable);
window.open(myVariable, \"_top\");
}
</script>
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
        return array (  240 => 90,  234 => 86,  228 => 85,  221 => 80,  214 => 78,  207 => 73,  201 => 72,  190 => 69,  187 => 68,  182 => 67,  178 => 66,  171 => 64,  168 => 63,  166 => 62,  163 => 61,  161 => 60,  158 => 59,  154 => 58,  148 => 55,  145 => 54,  140 => 51,  134 => 50,  123 => 47,  120 => 46,  115 => 45,  111 => 44,  106 => 42,  102 => 41,  99 => 40,  97 => 39,  94 => 38,  91 => 37,  87 => 36,  76 => 32,  72 => 31,  66 => 27,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
