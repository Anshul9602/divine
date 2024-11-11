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
class __TwigTemplate_af50fbdbe440765b90682db372ad30a9fd993c948ce8fbd845cad95e896d99b7 extends \Twig\Template
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
    width: 1100px;
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
\t.header-style-4 {
\t\tmargin-left:-25px
\t}
\t.is-sticky .header-style-4{
\t\tmargin:auto;
\t}
</style>


";
        // line 32
        if (($context["categories"] ?? null)) {
            // line 33
            echo "\t<nav class=\"desktop-menu\">
\t\t<ul class=\"header-style-4 container\" style=\"justify-content: space-between\">
\t\t\t<li class=\"logos\" style=\"display:none;\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a href=\"";
            // line 37
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 38
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
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 43
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43)) {
                    // line 44
                    echo "\t\t\t\t\t<li class=\" d-flex \" style=\"align-items: center;\">
\t\t\t\t\t\t";
                    // line 45
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 45);
                    // line 46
                    echo "
\t\t\t\t\t\t<a href=\"";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 47);
                    echo "\" >
\t\t\t\t\t\t<span class=\"dropdown-toggle \" >";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48);
                    echo "</span></a>
\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 50), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 50)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 50), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 52
                            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 53
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 53);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 53);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t\t<li class=\"dropdown d-flex\" style=\"align-items: center;\">
\t\t\t\t\t\t<a href=\"index.php?route=common/Furniture\"class=\"dropdown-toggle\" >";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61);
                    echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown1 dropdown \">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 65
                        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                        // line 66
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 66)) {
                            // line 67
                            echo "\t\t\t\t\t\t\t\t\t<li class=\"col-md-2 pr-0\" style=\"align-items: center;\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 68
                            $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 68);
                            // line 69
                            echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 70
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 70);
                            echo "\"  style=\"color:#0e212c;    font-weight: 800;\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 70);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"\" >
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 72
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 72), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 72)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 72), 1, "ceil"))));
                            foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                                // line 73
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($context["children"]);
                                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                    // line 74
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 75
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 75);
                                    echo "\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 75);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 78
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t";
                        }
                        // line 84
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 91
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t</ul>
\t</nav>

";
        }
        // line 96
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
        return array (  246 => 96,  240 => 92,  234 => 91,  227 => 86,  220 => 84,  213 => 79,  207 => 78,  196 => 75,  193 => 74,  188 => 73,  184 => 72,  177 => 70,  174 => 69,  172 => 68,  169 => 67,  167 => 66,  164 => 65,  160 => 64,  154 => 61,  151 => 60,  146 => 57,  140 => 56,  129 => 53,  126 => 52,  121 => 51,  117 => 50,  112 => 48,  108 => 47,  105 => 46,  103 => 45,  100 => 44,  97 => 43,  93 => 42,  82 => 38,  78 => 37,  72 => 33,  70 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
