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
class __TwigTemplate_d67095bb63e35e62cc57e7aef4cfe01a5e93faf2121c2f5004a0eba4f48183cc extends \Twig\Template
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
\t.nice-select {
\t\tfloat: right;
\t\tbackground: transparent;
\t\tborder: none;
\t\tmax-width: 140px;
\t\tbackground: #fff;
\t}
\t.pagination li {
\t\tpadding: 5px 10px 2px;
\t\tfont-size: 12px;
\t}
\t.pagination li a {
\t\tcolor: #666;
\t}
\t.pagination li.active {
\t\tbackground: #003B30;
\t\tcolor: #fff;
\t}
\t.product-card {
\t\tmargin: auto;
\t\tbox-shadow: 0 4px 8px 0 rgba(131, 129, 129, 0.6);
\t\tborder-radius: 6px;


\t}
\t.product_name {
\t\tmax-width: 300px;
\t\tmargin-top: 10px;
\t\tfont-size: 14px;
\t}
\t.price {
\t\tfont-size: 12px;
\t\tmargin-top: 5px;
\t}
\t#mobile_filter {
\t\tdisplay: none;

\t}
\t.price-filter {
\t\tpadding: 10px;
\t}
\t@media screen and(max-width:789px) {
\t\t.product_name {
\t\t\tfont-size: 12px;
\t\t\tmargin-top: 5px;
\t\t}
\t\t#mobile_filter {
\t\t\tdisplay: inline;
\t\t\tfloat: right;
\t\t\tcursor: pointer;
\t\t\tcolor: #333;

\t\t}
\t\t.nice-select {
\t\t\tmargin-right: 30px;
\t\t\tmargin-top: -28px;
\t\t}
\t}
</style>
<script>
\t\$(document).ready(function () {
\$(\"#mobile_filter\").click(function (e) {
e.preventDefault();
\$(\".backdrop-filter\").fadeIn();
\$(\".filter-panel\").animate({left: '0px'})
})
\$(\".backdrop-filter\").click(function () {
\$(\".backdrop-filter\").fadeOut();
\$(\".filter-panel\").animate({left: '-260px'})
})

})
</script>
<section>


\t<div id=\"product-category\" class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div id=\"content\" style=\"min-height:600px\" class=\"col-12\">

\t\t\t\t";
        // line 83
        if (($context["products"] ?? null)) {
            // line 84
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 87
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 90
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 99
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 102) == ($context["limit"] ?? null))) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 103);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 103);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 105);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 105);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:30px\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div style='padding-top:12px' class=\"col-sm-6 hide-phone\">
\t\t\t\t\t\t\t\t\t";
            // line 116
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6  text-right\">


\t\t\t\t\t\t\t\t\t<a id=\"mobile_filter\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-filter\"></li>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 127) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 128);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 128);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 130);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 130);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"mt-10\"/>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 140
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-4\">

\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb product-card \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image relative\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 144);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 145);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"font-size:14px;text-transform:uppercase;position: absolute;margin-top: -20px;right: 10px;    cursor: pointer;\" onclick=\"wishlist.add('";
                // line 149
                echo ($context["product_id"] ?? null);
                echo "');\"><img src=\"assets/img/w22-wishlist-empty.svg\" style=\"width:40px;\"/>

\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption container text-start \" style=\"text-align: start;padding-bottom:20px;\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 155);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"height:46px;overflow:hidden;\">";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                echo "</h4>


\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 160
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160)) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 162
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 162)) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 165);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 166);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 167);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 169)) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 171);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 177
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 178) < $context["i"])) {
                            // line 179
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 199
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<br/><br/>
\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 208
            echo "\t\t\t\t\t<p class=\"text-center d-flex justify-content-center\" style=\"min-height:300px;align-items: center;\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
            // line 211
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</section>
";
        // line 219
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
        return array (  419 => 219,  411 => 215,  402 => 211,  395 => 208,  392 => 207,  381 => 199,  376 => 196,  366 => 191,  362 => 189,  356 => 188,  349 => 183,  343 => 179,  340 => 178,  336 => 177,  333 => 176,  330 => 175,  326 => 173,  321 => 171,  316 => 170,  313 => 169,  308 => 167,  304 => 166,  299 => 165,  293 => 163,  291 => 162,  288 => 161,  286 => 160,  279 => 156,  275 => 155,  266 => 149,  255 => 145,  251 => 144,  245 => 140,  241 => 139,  233 => 133,  227 => 132,  219 => 130,  211 => 128,  208 => 127,  204 => 126,  191 => 116,  181 => 108,  175 => 107,  167 => 105,  159 => 103,  156 => 102,  152 => 101,  147 => 99,  135 => 90,  129 => 87,  124 => 84,  122 => 83,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
