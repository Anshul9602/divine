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

/* default/template/product/category.twig */
class __TwigTemplate_7a1ebace7bc2734a1900359601224e3b14e8bb514d9cda0e8ace53a4040ce950 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<style>
\t@media screen and(max-width: 1450px) {
\t\t.image_1 {
\t\t\theight: 250px !important;
\t\t}
\t}

\t@media screen and(max-width: 950px) {
\t\t.image_1 {
\t\t\theight: 200px !important;
\t\t}
\t}
</style>


<div id=\"product-category\" style=\"padding:0 5%;\">
\t<div class=\"row\">



\t\t<div  style=\"min-height:600px\" class=\"col-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t<br />
\t\t\t\t\t<h1>";
        // line 27
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t<br />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 31
        if (($context["categories"] ?? null)) {
            // line 32
            echo "\t\t\t<h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
\t\t\t";
            // line 33
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                echo " <div class=\"row\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 37
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38);
                    echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t</div>
\t\t";
            } else {
                // line 45
                echo "\t\t<div class=\"row\">
\t\t\t";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 47
                    echo "\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 50
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 51);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 51);
                        echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t</div>
\t\t<br />
\t\t";
            }
            // line 60
            echo "\t\t";
        }
        // line 61
        echo "\t\t";
        if (($context["products"] ?? null)) {
            // line 62
            echo "\t\t<div class=\"row\">
\t\t\t<div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
\t\t\t\t\t\ttitle=\"";
            // line 66
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
\t\t\t\t\t\ttitle=\"";
            // line 70
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div style=\"display:none\" class=\"col-md-3 col-xs-6\">
\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 79
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 82
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 82) == ($context["limit"] ?? null))) {
                    // line 83
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 83);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 83);
                    echo "</option>
\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 85);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 85);
                    echo "</option>
\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">

\t\t\t";
            // line 95
            echo ($context["column_left"] ?? null);
            echo "


\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"col-md-12 col-xs-6 d-flex justify-content-end\">
\t\t\t\t\t<div class=\"col-md-3 form-group input-group input-group-sm mb-0\">
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 103
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 103) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 104
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 104);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 104);
                    echo "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 106
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 106);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 106);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                // line 108
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 115
                echo "
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-4 col-6 mt-4\">

\t\t\t\t\t\t<figure class=\"product-thumb\">
            <a href=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 120);
                echo "\">
              <img class=\"pri-img\" src=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 121);
                echo "\" alt=\"product\">
              <img class=\"sec-img\" src=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image11", [], "any", false, false, false, 122);
                echo "\" alt=\"product\">
            </a>

          
          </figure>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 134
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 135
            echo ($context["results"] ?? null);
            echo "</div>
\t\t</div>
\t\t<br /><br />
\t\t";
        }
        // line 139
        echo "\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 140
            echo "\t\t<p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t<div class=\"buttons\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"javascript:history.back(1)\" class=\"btn btn-primary\">";
            // line 143
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 147
        echo "\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t</div>
\t";
        // line 149
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
";
        // line 152
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 152,  345 => 149,  339 => 147,  332 => 143,  325 => 140,  322 => 139,  315 => 135,  311 => 134,  304 => 129,  291 => 122,  287 => 121,  283 => 120,  276 => 115,  272 => 114,  265 => 109,  259 => 108,  251 => 106,  243 => 104,  240 => 103,  236 => 102,  226 => 95,  217 => 88,  211 => 87,  203 => 85,  195 => 83,  192 => 82,  188 => 81,  183 => 79,  171 => 70,  164 => 66,  158 => 62,  155 => 61,  152 => 60,  147 => 57,  139 => 54,  128 => 51,  125 => 50,  121 => 49,  117 => 47,  113 => 46,  110 => 45,  104 => 41,  93 => 38,  90 => 37,  86 => 36,  80 => 33,  75 => 32,  73 => 31,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
