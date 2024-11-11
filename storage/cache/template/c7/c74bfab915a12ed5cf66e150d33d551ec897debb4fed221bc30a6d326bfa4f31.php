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
class __TwigTemplate_62bccf56f79199eb3898a9c287ea39fcbb7f3795a5838ee65523478ff32d3cd9 extends \Twig\Template
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
\t\t<div id=\"content\" style=\"min-height:600px\" class=\"col-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t<br/>
\t\t\t\t\t<h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 27
        if (($context["categories"] ?? null)) {
            // line 28
            echo "\t\t\t\t<h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
\t\t\t\t";
            // line 29
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 30
                echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 48);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 48);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t";
            }
            // line 57
            echo "\t\t\t";
        }
        // line 58
        echo "\t\t\t";
        if (($context["products"] ?? null)) {
            // line 59
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 62
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 65
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div style=\"display:none\" class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 74
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 77) == ($context["limit"] ?? null))) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 78);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 78);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 80);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 80);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">

\t\t\t\t\t";
            // line 90
            echo ($context["column_left"] ?? null);
            echo "


\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"col-md-12 col-xs-6 d-flex justify-content-end\">
\t\t\t\t\t\t\t<div class=\"col-md-3 form-group input-group input-group-sm mb-0\">
\t\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 98) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 99);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 99);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 101);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 101);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 109
                echo "\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-6 mt-4\">
\t\t\t\t\t\t\t\t\t<div class=\"product-thumb product-card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image image_1\" style=\"height:350px;overflow: hidden;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
                echo "\"><img style=\"    margin-top: -25%;    margin-bottom: -25%;\" src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 112);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 115
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 118);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 120
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 120);
                    echo "\"btnpercent=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 120);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 125
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\" style=\"text-transform: uppercase;\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 136
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;    font-weight: 500;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 138
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\" style=\"color:#44b394;    font-weight: 500;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 142);
                        // line 143
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"    text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145);
                        // line 146
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 148)) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 150);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 156
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 157) < $context["i"])) {
                            // line 158
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 180
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 181
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<br/><br/>
\t\t\t";
        }
        // line 185
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 186
            echo "\t\t\t\t<p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<a href=\"";
            // line 189
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 193
        echo "\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 195
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
";
        // line 198
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  482 => 198,  476 => 195,  470 => 193,  461 => 189,  454 => 186,  451 => 185,  444 => 181,  440 => 180,  433 => 175,  423 => 170,  419 => 168,  413 => 167,  406 => 162,  400 => 158,  397 => 157,  393 => 156,  390 => 155,  387 => 154,  383 => 152,  378 => 150,  373 => 149,  370 => 148,  366 => 146,  364 => 145,  360 => 143,  358 => 142,  355 => 141,  349 => 139,  347 => 138,  344 => 137,  342 => 136,  337 => 134,  333 => 133,  328 => 130,  321 => 125,  311 => 120,  305 => 119,  299 => 118,  295 => 117,  292 => 116,  290 => 115,  286 => 114,  275 => 112,  270 => 109,  266 => 108,  260 => 104,  254 => 103,  246 => 101,  238 => 99,  235 => 98,  231 => 97,  221 => 90,  212 => 83,  206 => 82,  198 => 80,  190 => 78,  187 => 77,  183 => 76,  178 => 74,  166 => 65,  160 => 62,  155 => 59,  152 => 58,  149 => 57,  144 => 54,  136 => 51,  125 => 48,  122 => 47,  118 => 46,  114 => 44,  110 => 43,  107 => 42,  101 => 38,  90 => 35,  87 => 34,  83 => 33,  78 => 30,  76 => 29,  71 => 28,  69 => 27,  62 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
