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
class __TwigTemplate_f6f7b29e7e08e0ca6f0ceb507c43f204f4a5a42456c699723d8e6e1f86422196 extends \Twig\Template
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
\t.real_pro-img {
\t\tpadding: 3px;
\t}

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
\t\tborder-radius: 0;
\t\tbackground: #fff;
\t\theight: auto;
\t\ttext-align: left;
\t}
\t.product-card-body {
\t\tpadding-left: 5px;
\t}
\t.product_name {
\t\tmargin-top: 7.5px;

\t\tfont-size: 16px;
\t}
\t.sub-title {
\t\tcolor: #999;
\t\ttext-transform: uppercase;
\t\tfont-size: 10px;
\t\tmargin-top: -14px;
\t}


\t#mobile_filter {
\t\tdisplay: none;
\t}


\t.p-card-holder {
\t\tpadding: 5px;
\t}

\t.wishlist_link {
\t\tposition: absolute;
\t\ttop: 15px;
\t\tright: 15px;
\t\tborder-radius: 50%;
\t\tbackground: rgb(255, 255, 255, 0.5);
\t\tcursor: pointer;
\t\twidth: 37px;
\t\theight: 37px;
\t\ttext-align: center;
\t}
\t.wishlist_link i {
\t\tline-height: 38px;
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
\t\t\tbox-shadow: 0 2.5px 5px 0 rgba(131, 129, 129, 0.4);
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
<section style=\"background:#fcfcfc\">
\t<div id=\"product-category\" class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div id=\"content\" style=\"min-height:600px\" class=\"col-12\">
\t\t\t\t";
        // line 127
        if (($context["products"] ?? null)) {
            // line 128
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 131
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 134
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display:none\" class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 141
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 144) == ($context["limit"] ?? null))) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 145);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 145);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 147);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 147);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"margin-top:20px\" class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div style='padding-top:12px' class=\"col-sm-6 hide-phone\">
\t\t\t\t\t\t\t\t\t";
            // line 158
            echo ($context["results"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6  text-right\">
\t\t\t\t\t\t\t\t\t<a id=\"mobile_filter\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-filter\"></li>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 166) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 167);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 167);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 169);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 169);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr class=\"mt-10\"/>
\t\t\t\t\t\t\t<div style=\"margin-top:-20px\" class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 col-6 mt-4 p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 181
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 181);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 182);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 182);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 185);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 186
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 186)) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 187);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 187);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 187);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 187);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 187);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 187);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 189
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 196);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 197);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 202
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 202)) {
                    // line 203
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 204
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 204)) {
                        // line 205
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 205);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 207);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 208);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 210)) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 212
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 212);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 216);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 231
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br/><br/>
\t\t\t\t";
        }
        // line 237
        echo "\t\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 238
            echo "\t\t\t\t\t<p class=\"text-center d-flex justify-content-center\" style=\"min-height:300px;align-items: center;\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<a href=\"";
            // line 241
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 245
        echo "\t\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 250
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
        return array (  448 => 250,  439 => 245,  430 => 241,  423 => 238,  420 => 237,  411 => 231,  406 => 228,  387 => 216,  383 => 214,  378 => 212,  373 => 211,  370 => 210,  365 => 208,  360 => 207,  354 => 205,  352 => 204,  349 => 203,  347 => 202,  339 => 197,  335 => 196,  329 => 192,  324 => 189,  308 => 187,  306 => 186,  302 => 185,  292 => 182,  288 => 181,  283 => 178,  279 => 177,  272 => 172,  266 => 171,  258 => 169,  250 => 167,  247 => 166,  243 => 165,  233 => 158,  223 => 150,  217 => 149,  209 => 147,  201 => 145,  198 => 144,  194 => 143,  189 => 141,  179 => 134,  173 => 131,  168 => 128,  166 => 127,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
