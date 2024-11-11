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
class __TwigTemplate_4dd5bdcbdeafe20a3c9a239dcd9c307a0dda6395f19dd671eb20a767a2cb676f extends \Twig\Template
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
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "
\t\t\t\t\t<div class=\"product-thumb\">
            <a href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                echo "\">
              <img class=\"pri-img\" src=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 117);
                echo "\" alt=\"product\">
              <img class=\"sec-img\" src=\"\" alt=\"product\">
            </a>

          
          </div>
\t\t\t\t\t<div class=\"col-md-4 col-6 mt-4\">

\t\t\t\t\t\t<div class=\"product-thumb product-card text-center\">
\t\t\t\t\t\t\t<div class=\"image image_1\" style=\"height:350px;overflow: hidden;\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 127);
                echo "\">
\t\t\t\t\t\t\t\t<img style=\"margin-top: -25%;margin-bottom: -25%;\"src=\"";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 128);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                echo "\"class=\"img-responsive pri-img\" />
\t\t\t\t\t\t\t\t<img style=\"margin-top: -25%;margin-bottom: -25%;\"src=\"";
                // line 129
                echo ($context["img2"] ?? null);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                echo "\"class=\"img-responsive sec-img\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                echo "');\">
\t\t\t\t\t\t\t\t";
                // line 133
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 133)) {
                    // line 134
                    echo "
\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 135);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                    echo "\"
\t\t\t\t\t\t\t\t\tbtnimg=\"";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 136);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 136);
                    echo "\"
\t\t\t\t\t\t\t\t\tbtnprice=\"";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137);
                    echo "\"
\t\t\t\t\t\t\t\t\tbtnpercent=\"";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 138);
                    echo "\" style=\"color: #44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t";
                } else {
                    // line 142
                    echo "
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 149);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name\" style=\"text-transform: uppercase;\">";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 150);
                echo "
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 153
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 153)) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;    font-weight: 500;\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 155
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 155)) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 156);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\" style=\"color:#44b394;    font-weight: 500;\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 159
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 159);
                        // line 160
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"    text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 162);
                        // line 163
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 167);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 171)) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 173
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 174) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 183
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 186
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 196
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 197
            echo ($context["results"] ?? null);
            echo "</div>
\t\t</div>
\t\t<br /><br />
\t\t";
        }
        // line 201
        echo "\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 202
            echo "\t\t<p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t<div class=\"buttons\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"javascript:history.back(1)\" class=\"btn btn-primary\">";
            // line 205
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 209
        echo "\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t</div>
\t";
        // line 211
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
";
        // line 214
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
        return array (  510 => 214,  504 => 211,  498 => 209,  491 => 205,  484 => 202,  481 => 201,  474 => 197,  470 => 196,  463 => 191,  453 => 186,  449 => 184,  443 => 183,  436 => 178,  428 => 174,  424 => 173,  421 => 172,  418 => 171,  414 => 169,  409 => 167,  404 => 166,  401 => 165,  397 => 163,  395 => 162,  391 => 160,  389 => 159,  386 => 158,  380 => 156,  378 => 155,  375 => 154,  373 => 153,  367 => 150,  363 => 149,  358 => 146,  352 => 142,  345 => 138,  339 => 137,  333 => 136,  327 => 135,  324 => 134,  322 => 133,  318 => 132,  308 => 129,  300 => 128,  296 => 127,  283 => 117,  279 => 116,  275 => 114,  271 => 113,  265 => 109,  259 => 108,  251 => 106,  243 => 104,  240 => 103,  236 => 102,  226 => 95,  217 => 88,  211 => 87,  203 => 85,  195 => 83,  192 => 82,  188 => 81,  183 => 79,  171 => 70,  164 => 66,  158 => 62,  155 => 61,  152 => 60,  147 => 57,  139 => 54,  128 => 51,  125 => 50,  121 => 49,  117 => 47,  113 => 46,  110 => 45,  104 => 41,  93 => 38,  90 => 37,  86 => 36,  80 => 33,  75 => 32,  73 => 31,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
