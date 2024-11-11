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

/* default/template/product/product.twig */
class __TwigTemplate_a7f47cd192ca464682be92c46132b485879a1e38796df9a18fb0948ee5c0613f extends \Twig\Template
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
\t.splide__pagination--ltr{
\t\tdisplay:none !important;
\t}
\t.arrow {
\t\tdisplay: none;
\t}

  @media screen and (max-width: 650px) {
   .mob_text{
    font-size:12px !important;
\t    padding: 10px 10px !important;
   }

  }
\t.section {
\t\tpadding-left: 8%;
\t\tpadding-right: 8%;
\t}
\t.details_span {
\t\tfont-weight: 600;
\t}

\t.card-header {
\t\tpadding: 0 !important;
\t\tmargin-bottom: 0;
\t\tbackground-color: #fff !important;
\t\tborder-bottom: none !important;
\t}
</style>

<script src=\"
\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\"></script>
<link href=\"
\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\" rel=\"stylesheet\">


<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 49
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 50);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 50);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<div id=\"product-product mt-10\" class=\"section\">
\t<div class=\"row\">
\t\t<div  class=\"col-sm-12\">";
        // line 64
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 67
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 68
            echo "\t\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t\t";
            // line 69
            if (($context["thumb"] ?? null)) {
                // line 70
                echo "\t\t\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 73
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 75);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 81
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 84
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 85
            echo "\t\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t\t";
            // line 86
            if (($context["thumb"] ?? null)) {
                // line 87
                echo "\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-center\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" style=\"max-height:700px;\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 90
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 92);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" style=\"max-height:700px;\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "\t\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 row\" style=\"    height: fit-content;\">
\t\t\t\t\t<div class=\"col-md-10 col-10\">
\t\t\t\t\t\t<h2 class=\"text-capitalize\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
        // line 102
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-2 text-end pl-0\" style=\"text-align: end;\">
\t\t\t\t\t\t<a class=\"wishlist_link \"style=\"top:0px;\" onclick=\"wishlist.add('";
        // line 105
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 105);
        echo "');\">
\t\t\t\t\t\t\t\t";
        // line 106
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 106)) {
            // line 107
            echo "
\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
            // line 108
            echo ($context["product_id"] ?? null);
            echo "\" btnname=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
            // line 109
            echo ($context["thumb"] ?? null);
            echo "\" btnhref=\"";
            echo ($context["href1"] ?? null);
            echo "\" btnprice=\"";
            echo ($context["price"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
            // line 110
            echo ($context["special"] ?? null);
            echo "\"btnpercent=\"";
            echo ($context["percent1"] ?? null);
            echo "\"  style=\"color: #44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t";
        } else {
            // line 114
            echo "
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 121
        if (($context["price"] ?? null)) {
            // line 122
            echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled mt-4 mb-2\">
\t\t\t\t\t\t\t\t";
            // line 123
            if ( !($context["special"] ?? null)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4 style=\"font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 128
                echo ($context["price"] ?? null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 135
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4 style=\"    font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 141
                echo ($context["special"] ?? null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t\t\t";
            if (($context["tax"] ?? null)) {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 148
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 152
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 155
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 159);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 159);
                    echo "</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
        }
        // line 166
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\" id=\"product\">
\t\t\t\t\t\t";
        // line 168
        if (($context["options"] ?? null)) {
            // line 169
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>Size</p>
\t\t\t\t\t\t\t";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 172
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 172) == "select")) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 173)) {
                        echo " required ";
                    }
                    echo "\" style=\"max-width:210px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 175);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 176
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 177
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 177));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 178);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 178);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 179
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 179)) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 180);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 180);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 187) == "radio")) {
                    // line 188
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 188)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 189
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 189);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 190);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 191
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 191));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 194);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 195
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 195)) {
                            // line 196
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 196);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 196);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 196);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 198
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 198);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 199
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199)) {
                            // line 200
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 200);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 208
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 208) == "checkbox")) {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 209)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 212
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 212));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 213
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 215
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 215);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 216
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 216)) {
                            // line 217
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 217);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 217);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 217)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 217);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 217);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 219);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 220
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 220)) {
                            // line 221
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 221);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 221);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 229
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 229) == "text")) {
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 230)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 231);
                    // line 232
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 233
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 233);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 233);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 233);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 236
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 236) == "textarea")) {
                    // line 237
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 237)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    // line 239
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 240);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 240);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 243
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 243) == "file")) {
                    // line 244
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 244)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 245
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 245);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 246
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 246);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 248
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 249
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 249);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 252
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 252) == "date")) {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 253)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 254);
                    // line 255
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 257
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 257);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 257);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 257);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 266) == "datetime")) {
                    // line 267
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 267)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 268);
                    // line 269
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 271);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 280
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 280) == "time")) {
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 281)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 282
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 282);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 282);
                    // line 283
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 285
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 285);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 294
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "\t\t\t\t\t\t";
        }
        // line 296
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 297
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
            // line 298
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 301
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 303);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 303);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 309
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 311
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\"/>
\t\t\t\t\t\t\t<p>Quantity</p>
\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px;max-width:300px\" class=\"row m-0\">
\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 326
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t<div id=\"main\" class=\"mt-3\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"card dropdown-toggle\" style=\"border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\" style=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\"style=\"width:100%\">PRODUCT DESCRIPTION </a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse \" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 336
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header dropdown-toggle\" id=\"faqhead2\" style=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq2\" aria-expanded=\"true\" aria-controls=\"faq2\" style=\"width:100%\">MATERIAL & DETAILS</span>
  </a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 350
        if (twig_test_empty(($context["metal"] ?? null))) {
            // line 351
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Metal:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 355
            echo ($context["metal"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 358
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone"] ?? null))) {
            // line 359
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 360
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 363
            echo ($context["stone"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 366
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone_cut"] ?? null))) {
            // line 367
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 368
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone Cut:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 371
            echo ($context["stone_cut"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 373
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Weight"] ?? null))) {
            // line 374
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 375
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Weight:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 378
            echo ($context["Weight"] ?? null);
            echo "g</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 380
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["width"] ?? null))) {
            // line 381
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 382
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Dimensions:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWidth :";
            // line 385
            echo ($context["width"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t, Length :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 387
            echo ($context["length"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 389
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Style"] ?? null))) {
            // line 390
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 391
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Style:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 394
            echo ($context["Style"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 396
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\" data-loading-text=\"";
        // line 410
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 412
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" style='max-width:49%;float:right; background-color:#000000;color:#fff;' class=\"col-md-6 col-6 btn btn-primary btn-lg mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 421
        if ((($context["minimum"] ?? null) > 1)) {
            // line 422
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t";
            // line 424
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 427
        echo "\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>

\t\t\t";
        // line 434
        if (($context["products"] ?? null)) {
            // line 435
            echo "

\t\t\t\t<div class=\"row pt-5\">

\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t<h3>You May Also Like</h3>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br>

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"splide\" role=\"group\" aria-label=\"Splide Basic HTML Example\" style=\"width:100%;\">
\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t\t";
            // line 450
            $context["i"] = 0;
            // line 451
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 452
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 455
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 455);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 455);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 455);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 455);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption \" style=\"    text-transform: uppercase;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-10\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
                // line 458
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 458);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 459
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 459)) {
                    // line 460
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 461
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 462
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 462) < $context["j"])) {
                            // line 463
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 467
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 472
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 473
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 475
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 475)) {
                    // line 476
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 477
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 477)) {
                        // line 478
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 478);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 480
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 480);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 481
                        echo twig_get_attribute($this->env, $this->source,                         // line 482
$context["product"], "price", [], "any", false, false, false, 482);
                        // line 483
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 485
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 485)) {
                        // line 486
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 487
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 487);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 489
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 491
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                // line 494
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 495
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 496
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t";
        }
        // line 503
        echo "\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 504
            echo "\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t";
            // line 505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 506
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 507
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 507);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 507);
                    echo "</a>,
\t\t\t\t\t\t";
                } else {
                    // line 509
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 509);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 509);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 511
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 512
            echo "\t\t\t\t</p>
\t\t\t";
        }
        // line 514
        echo "\t\t</div>
\t</div>
</div>
<br/><br/>
<script type=\"text/javascript\">


\tvar splide = new Splide('.splide', {
perPage: 4,
rewind: true,
gap    : '1rem',
perMove: 1,
breakpoints: {
240: {
perPage: 2
},
640: {
perPage: 2
},
767: {
perPage: 3
},
1024: {
perPage: 4
}
}
});

splide.mount();

\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\$.ajax({
url: 'index.php?route=product/product/getRecurringDescription',
type: 'post',
data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
dataType: 'json',
beforeSend: function () {
\$('#recurring-description').html('');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();

if (json['success']) {
\$('#recurring-description').html(json['success']);
}
}
});
});
// -->
</script>
<script type=\"text/javascript\">

\t\$('#button-cart').on('click', function () {
\$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
dataType: 'json',
beforeSend: function () {
\$('#button-cart').button('loading');
},
complete: function () {
\$('#button-cart').button('reset');
},
success: function (json) {
if (json['error']) {
if (json['error']['option']) {
for (i in json['error']['option']) {
var element = \$('#input-option' + i.replace('_', '-'));

if (element.parent().hasClass('input-group')) {
element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
} else {
element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
}
}
}

if (json['error']['recurring']) {
\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
}

// Highlight any found errors
\$('.text-danger').parent().addClass('has-error');
}

if (json['success']) {

\$('.cart-counter-header').html(json['total'][0]);

setTimeout(function () {
\$(\"#cart-total\").html(json['total']);
let t = json['total'].split('-');
\$('.slide-cart-total').html(t[1]);
}, 100);

\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\$('.cart_backdrop').fadeIn();
\$(\".cart\").animate({right: '0px'})

}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
});
// buy now
\$('#button-buy').on('click', function () {


\$(\"#button-cart\").click();
setTimeout(function () {

window.location = \"index.php?route=checkout/cart\";
}, 200)

})
//

// -->
</script>
<script type=\"text/javascript\">

\t\$('.date').datetimepicker({language: '";
        // line 640
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 642
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 644
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\$('button[id^=\\'button-upload\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
if (\$('#form-upload input[name=\\'file\\']').val() != '') {
clearInterval(timer);

\$.ajax({
url: 'index.php?route=tool/upload',
type: 'post',
dataType: 'json',
data: new FormData(\$('#form-upload')[0]),
cache: false,
contentType: false,
processData: false,
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
// -->
</script>
<script type=\"text/javascript\">

\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=  ";
        // line 711
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=  ";
        // line 715
        echo ($context["product_id"] ?? null);
        echo "',
type: 'post',
dataType: 'json',
data: \$(\"#form-review\").serialize(),
beforeSend: function () {
\$('#button-review').button('loading');
},
complete: function () {
\$('#button-review').button('reset');
},
success: function (json) {
\$('.alert-dismissible').remove();

if (json['error']) {
\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
}

if (json['success']) {
\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\$('input[name=\\'name\\']').val('');
\$('textarea[name=\\'text\\']').val('');
\$('input[name=\\'rating\\']:checked').prop('checked', false);
}
}
});
});

\$(document).ready(function () {


var slides_to_show = 3;
\$('.slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: true,
fade: false,
infinite: true,
asNavFor: '.slider-nav',
nextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
prevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

});
\$('.slider-nav').slick({
slidesToShow: slides_to_show,
vertical: true,
slidesToScroll: 1,
asNavFor: '.slider-for',
dots: false,
arrows: false,

focusOnSelect: true

});

\$('.thumbnails').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled: true
}
});
});
// -->
</script>


<script>
\t\$(document).ready(function () {
var updatedValue=0;
var b = Number(\$(\"#input-quantity\").val());
updatedValue=updatedValue+b;
\t\tconsole.log(\"updatedValue =\",updatedValue);
\$(\"#add_quantity\").click(function () {
console.log('Adding quantity');
var b = Number(\$(\"#input-quantity\").val()) + 1;

updatedValue=updatedValue+1;
console.log(\"updatedValue +\",updatedValue);
\$(\".iq\").val(b);
})
\$(\"#less_quantity\").click(function () {
var b = Number(\$(\"#input-quantity\").val()) - 1;
updatedValue=updatedValue-1;
console.log(\"updatedValue - \",updatedValue);
if (b < 0) {
b = 0;
}
 
\$(\".iq\").val(b);
})


var slides_to_show = 3;
\$('.slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: true,
fade: false,
infinite: true,
asNavFor: '.slider-nav',
nextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
prevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

});
\$('.slider-nav').slick({
slidesToShow: slides_to_show,
vertical: true,
slidesToScroll: 1,
asNavFor: '.slider-for',
dots: false,
arrows: false,

focusOnSelect: true

});

\$('.thumbnails').magnificPopup({
type: 'image',
delegate: 'a',
gallery: {
enabled: true
}
});
});
//
const zoom = document.querySelector(\".zoom\");
zoom.addEventListener(\"click\", () => {
\$('.zoom').zoom({magnify: '2.5'});
});

// Initiate zoom effect:
imageZoom(\"myimage\", \"myresult\");
const imagePopupClose = document.querySelector(\".imagePopupClose\");
const imagePopup = document.querySelector(\".imagePopup\");
const mainImages = document.querySelectorAll(\".mainImage\");


mainImages.forEach(eImage => {
eImage.addEventListener(\"click\", () => {
let dataIndex = 0;

let Index = eImage.closest(\"li\").getAttribute(\"data-index\");
dataIndex = Number(Index);

if (imagePopup.classList.contains(\"hidden\")) {
imagePopup.classList.remove(\"hidden\");
const imagePopupSlider = new Splide(\"#imagePopup\", {
perPage: 1,
type: 'loop',
start: dataIndex
});
imagePopupSlider.mount();
}
});
});

imagePopupClose.addEventListener(\"click\", () => {
imagePopup.classList.add(\"hidden\");
});


var fade_state = false;
let add = document.getElementsByClassName(\"add\");
for (i = 0; i < add.length; i ++) {
add[i].style.display = 'none';
}
let remove = document.getElementsByClassName(\"remove\");
for (i = 0; i < remove.length; i ++) {
remove[i].style.display = 'block';
}
// on btn click
function fade() { // get the button and div

let add = document.getElementsByClassName(\"add\");
for (i = 0; i < add.length; i ++) {
add[i].style.display = 'none';
}
let remove = document.getElementsByClassName(\"remove\");
for (i = 0; i < remove.length; i ++) {
remove[i].style.display = 'block';
}


let btn = document.getElementById(\"fade\");
// if faded in or out

console.log(fade_state)

if (fade_state == true) { // trigers animation
for (i = 0; i < add.length; i ++) {
add[i].style.display = 'none';
}

for (i = 0; i < add.length; i ++) {
remove[i].style.display = 'block';
}
// sets the text

// sets fade_state
fade_state = false;
console.log(fade_state);

} else if (fade_state == false) { // trigers animation
for (i = 0; i < remove.length; i ++) {
remove[i].style.display = 'none';
}

for (i = 0; i < add.length; i ++) {
add[i].style.display = 'block';
}

// sets the text

// sets fade_state
fade_state = true;


}

}
</script>
";
        // line 937
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1676 => 937,  1451 => 715,  1444 => 711,  1374 => 644,  1369 => 642,  1364 => 640,  1236 => 514,  1232 => 512,  1226 => 511,  1218 => 509,  1210 => 507,  1207 => 506,  1203 => 505,  1198 => 504,  1195 => 503,  1186 => 496,  1180 => 495,  1178 => 494,  1173 => 491,  1169 => 489,  1164 => 487,  1159 => 486,  1156 => 485,  1152 => 483,  1150 => 482,  1149 => 481,  1144 => 480,  1138 => 478,  1136 => 477,  1133 => 476,  1130 => 475,  1126 => 473,  1120 => 472,  1113 => 467,  1107 => 463,  1104 => 462,  1100 => 461,  1097 => 460,  1095 => 459,  1091 => 458,  1079 => 455,  1074 => 452,  1069 => 451,  1067 => 450,  1050 => 435,  1048 => 434,  1039 => 427,  1033 => 424,  1029 => 422,  1027 => 421,  1015 => 412,  1010 => 410,  994 => 396,  989 => 394,  984 => 391,  981 => 390,  978 => 389,  973 => 387,  968 => 385,  963 => 382,  960 => 381,  957 => 380,  952 => 378,  947 => 375,  944 => 374,  941 => 373,  936 => 371,  931 => 368,  928 => 367,  925 => 366,  919 => 363,  914 => 360,  911 => 359,  908 => 358,  902 => 355,  897 => 352,  894 => 351,  892 => 350,  875 => 336,  862 => 326,  844 => 311,  840 => 309,  834 => 305,  823 => 303,  819 => 302,  815 => 301,  809 => 298,  806 => 297,  803 => 296,  800 => 295,  794 => 294,  778 => 285,  774 => 283,  770 => 282,  763 => 281,  760 => 280,  744 => 271,  740 => 269,  736 => 268,  729 => 267,  726 => 266,  710 => 257,  706 => 255,  702 => 254,  695 => 253,  692 => 252,  684 => 249,  680 => 248,  673 => 246,  669 => 245,  662 => 244,  659 => 243,  647 => 240,  644 => 239,  640 => 238,  633 => 237,  630 => 236,  618 => 233,  615 => 232,  611 => 231,  604 => 230,  601 => 229,  596 => 226,  588 => 223,  581 => 221,  579 => 220,  574 => 219,  558 => 217,  556 => 216,  550 => 215,  546 => 213,  542 => 212,  538 => 211,  534 => 210,  527 => 209,  524 => 208,  519 => 205,  511 => 202,  504 => 200,  502 => 199,  497 => 198,  481 => 196,  479 => 195,  473 => 194,  469 => 192,  465 => 191,  461 => 190,  457 => 189,  450 => 188,  447 => 187,  442 => 184,  435 => 182,  428 => 180,  426 => 179,  419 => 178,  415 => 177,  411 => 176,  405 => 175,  397 => 173,  394 => 172,  390 => 171,  386 => 169,  384 => 168,  380 => 166,  374 => 162,  371 => 161,  360 => 159,  356 => 158,  351 => 155,  348 => 154,  343 => 152,  338 => 151,  335 => 150,  330 => 148,  325 => 147,  322 => 146,  314 => 141,  305 => 135,  301 => 133,  293 => 128,  287 => 124,  285 => 123,  282 => 122,  280 => 121,  275 => 118,  269 => 114,  260 => 110,  252 => 109,  246 => 108,  243 => 107,  241 => 106,  237 => 105,  231 => 102,  225 => 98,  221 => 96,  218 => 95,  205 => 92,  202 => 91,  197 => 90,  194 => 89,  184 => 87,  182 => 86,  179 => 85,  177 => 84,  172 => 81,  168 => 79,  165 => 78,  152 => 75,  149 => 74,  144 => 73,  141 => 72,  131 => 70,  129 => 69,  126 => 68,  124 => 67,  118 => 64,  106 => 54,  94 => 50,  91 => 49,  87 => 48,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
