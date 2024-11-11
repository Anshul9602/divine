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
class __TwigTemplate_166b961e0d9a9f14c617583be25e90b50db504822290c4dc0a66253b48085051 extends \Twig\Template
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
\t\t.p-card {
\t\t\tpadding: 2px !important;
\t\t}
\t\t.product-card {
\t\t\tbox-shadow: 0 2px 4px 0 rgba(131, 129, 129, 0.6);
\t\t\tborder-radius: 0;
\t\t\theight: auto !important;
\t\t}
\t\t.mt-4 {
\t\t\tmargin-top: 5px;
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
        // line 94
        if (($context["products"] ?? null)) {
            // line 95
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 98
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 101
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 110
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 113) == ($context["limit"] ?? null))) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 114);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 114);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 116);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 116);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:30px\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div style='padding-top:12px' class=\"col-sm-6 hide-phone\">
\t\t\t\t\t\t\t\t\t";
            // line 127
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6  text-right\">


\t\t\t\t\t\t\t\t\t<a id=\"mobile_filter\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-filter\"></li>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 138) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 139);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 139);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 141);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 141);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"mt-10\"/>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-4 p-card\" style=\"padding-left:5px;padding-right:5px;\">

\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb product-card \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image relative real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 155);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 156);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 156);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"font-size:14px;text-transform:uppercase;position: absolute;top: 10px;right: 10px;    cursor: pointer;\" onclick=\"wishlist.add('";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
                echo "');\"><img src=\"assets/img/w22-wishlist-empty.svg\" style=\"width:40px;\"/>

\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption container text-start \" style=\"text-align: start;padding-bottom:20px;\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 166);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"height:46px;overflow:hidden;display: flex;align-items: center;\">";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                echo "</h4>


\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 171
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 171)) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 173
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 173)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 174);
                        echo "</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 177);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 178
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\" class=\"off_p\">";
                        // line 179
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 179);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 181)) {
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 183
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 183);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 190) < $context["i"])) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 211
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<br/><br/>
\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 220
            echo "\t\t\t\t\t<p class=\"text-center d-flex justify-content-center\" style=\"min-height:300px;align-items: center;\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
            // line 223
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 227
        echo "\t\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t</div>
\t</div>
</section>


";
        // line 233
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
        return array (  433 => 233,  423 => 227,  414 => 223,  407 => 220,  404 => 219,  393 => 211,  388 => 208,  378 => 203,  374 => 201,  368 => 200,  361 => 195,  355 => 191,  352 => 190,  348 => 189,  345 => 188,  342 => 187,  338 => 185,  333 => 183,  328 => 182,  325 => 181,  320 => 179,  316 => 178,  311 => 177,  304 => 174,  302 => 173,  299 => 172,  297 => 171,  290 => 167,  286 => 166,  277 => 160,  266 => 156,  262 => 155,  256 => 151,  252 => 150,  244 => 144,  238 => 143,  230 => 141,  222 => 139,  219 => 138,  215 => 137,  202 => 127,  192 => 119,  186 => 118,  178 => 116,  170 => 114,  167 => 113,  163 => 112,  158 => 110,  146 => 101,  140 => 98,  135 => 95,  133 => 94,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
