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
class __TwigTemplate_69742c064f636959f28a590bee388e920af6588a6b470f75824df3f1111ec5d8 extends \Twig\Template
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
\t.splide__pagination--ltr {
\t\tdisplay: none !important;
\t}

\t.arrow {
\t\tdisplay: none;
\t}

\t@media screen and (max-width: 650px) {
\t\t.mob_text {
\t\t\tfont-size: 12px !important;
\t\t\tpadding: 10px 10px !important;
\t\t}

\t}

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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 52
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 53);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 53);
            // line 54
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<div id=\"product-product mt-10\" class=\"section\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">";
        // line 68
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 71
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 72
            echo "\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t";
            // line 73
            if (($context["thumb"] ?? null)) {
                // line 74
                echo "\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 77
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 78
                    echo "\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 79);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 88
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 89
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 90
            if (($context["thumb"] ?? null)) {
                // line 91
                echo "\t\t\t\t\t\t<li class=\"d-flex justify-content-center\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"max-height:700px;\" alt=\"";
                // line 92
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 95
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 96
                    echo "\t\t\t\t\t\t<li class=\"image-additional d-flex justify-content-center\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 97);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" style=\"max-height:700px;\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 98
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 row\" style=\"    height: fit-content;\">
\t\t\t\t\t<div class=\"col-md-10 col-10\">
\t\t\t\t\t\t<h2 class=\"text-capitalize\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
        // line 108
        echo         // line 109
($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-2 text-end pl-0\" style=\"text-align: end;\">
\t\t\t\t\t\t<a class=\"wishlist_link \" style=\"top:0px;\" onclick=\"wishlist.add('";
        // line 112
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 112);
        echo "');\">
\t\t\t\t\t\t\t";
        // line 113
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 113)) {
            // line 114
            echo "
\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
            // line 115
            echo ($context["product_id"] ?? null);
            echo "\" btnname=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
            // line 116
            echo ($context["thumb"] ?? null);
            echo "\" btnhref=\"";
            echo ($context["href1"] ?? null);
            echo "\" btnprice=\"";
            echo ($context["price"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
            // line 117
            echo ($context["special"] ?? null);
            echo "\" btnpercent=\"";
            echo ($context["percent1"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tstyle=\"color: #44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t";
        } else {
            // line 122
            echo "
\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 129
        if (($context["price"] ?? null)) {
            // line 130
            echo "\t\t\t\t\t\t<ul class=\"list-unstyled mt-4 mb-2\">
\t\t\t\t\t\t\t";
            // line 131
            if ( !($context["special"] ?? null)) {
                // line 132
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4 style=\"font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                // line 136
                echo ($context["price"] ?? null);
                echo "
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } else {
                // line 142
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t";
                // line 144
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4 style=\"    font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                // line 150
                echo ($context["special"] ?? null);
                echo "
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t\t\t";
            if (($context["tax"] ?? null)) {
                // line 157
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 158
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 161
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 162
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 165
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 169
                    echo "\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 169);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 169);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "\t\t\t\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\" id=\"product\">
\t\t\t\t\t\t";
        // line 178
        if (($context["options"] ?? null)) {
            // line 179
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<p>Size</p>
\t\t\t\t\t\t";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 182
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "select")) {
                    // line 183
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\" style=\"max-width:210px;\">

\t\t\t\t\t\t\t<select name=\"option[";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 185);
                    echo "]\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 187
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 188));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 189
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 189);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 189);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190)) {
                            // line 191
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 191);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 191);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 193
                        echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 198
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 198) == "radio")) {
                    // line 199
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 199)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 200);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 202
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 202));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 203
                        echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 205
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 206);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 207
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 207)) {
                            // line 208
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 208);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 209
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 209);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 209);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 212);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 213
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 213)) {
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 214);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 214);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222) == "checkbox")) {
                    // line 223
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 226
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 226));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 227
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 229
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                        echo "][]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 230
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 230);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 231
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 231)) {
                            // line 232
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 232);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 233
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 233);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 233)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 233);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 233);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 236
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 236);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 237
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 237)) {
                            // line 238
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 238);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 238);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 240
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 243
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 246
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 246) == "text")) {
                    // line 247
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 247)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 248);
                    // line 249
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 250);
                    echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 251);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 255
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "textarea")) {
                    // line 256
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 256)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 257
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 257);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 257);
                    // line 258
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 260);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\">";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 261);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 264
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 264) == "file")) {
                    // line 265
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 265)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 266);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    echo "\"
\t\t\t\t\t\t\t\tdata-loading-text=\"";
                    // line 268
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 270
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 271
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                    echo "]\" value=\"\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 275
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 275) == "date")) {
                    // line 276
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 276)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 277);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 277);
                    // line 278
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 281
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 281);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 282
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 282);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 291
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 291) == "datetime")) {
                    // line 292
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 292)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 293
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 293);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 293);
                    // line 294
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 296
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 297);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 298);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 307
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 307) == "time")) {
                    // line 308
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 308)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 309);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 309);
                    // line 310
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 312);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 313);
                    echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 314);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 323
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            echo "\t\t\t\t\t\t";
        }
        // line 325
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 326
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h3>";
            // line 327
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 330
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 332
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 332);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 332);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 338
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 340
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
\t\t\t\t\t\t\t\tclass=\"form-control iq\" />
\t\t\t\t\t\t\t<p>Quantity</p>
\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px;max-width:300px\" class=\"row m-0\">
\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\tid=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\"
\t\t\t\t\t\t\t\t\t\tstyle=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\"
\t\t\t\t\t\t\t\t\t\tid=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\tid=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 362
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<div id=\"main\" class=\"mt-3\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"card dropdown-toggle\"
\t\t\t\t\t\t\t\t\t\tstyle=\"border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:100%\">PRODUCT DESCRIPTION </a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse \" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 376
        echo ($context["description"] ?? null);
        echo "

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header dropdown-toggle\" id=\"faqhead2\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq2\" aria-expanded=\"true\" aria-controls=\"faq2\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:100%\">MATERIAL & DETAILS</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 393
        if (twig_test_empty(($context["metal"] ?? null))) {
            // line 394
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 395
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Metal:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 398
            echo ($context["metal"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 401
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone"] ?? null))) {
            // line 402
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 403
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 406
            echo ($context["stone"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 409
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone_cut"] ?? null))) {
            // line 410
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 411
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone Cut:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 414
            echo ($context["stone_cut"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 417
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Weight"] ?? null))) {
            // line 418
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 419
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Weight:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 422
            echo ($context["Weight"] ?? null);
            echo "g
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 425
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["width"] ?? null))) {
            // line 426
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 427
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Dimensions:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tWidth :";
            // line 430
            echo ($context["width"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t, Length :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 432
            echo ($context["length"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 435
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Style"] ?? null))) {
            // line 436
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 437
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Style:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 440
            echo ($context["Style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 443
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\"
\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
        // line 458
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 461
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\"
\t\t\t\t\t\t\t\t\tstyle='max-width:49%;float:right; background-color:#000000;color:#fff;'
\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-6 btn btn-primary btn-lg mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 472
        if ((($context["minimum"] ?? null) > 1)) {
            // line 473
            echo "\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t";
            // line 475
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 478
        echo "\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>

\t\t\t";
        // line 485
        if (($context["products"] ?? null)) {
            // line 486
            echo "

\t\t\t<div class=\"row pt-5\">

\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t<h3>You May Also Like</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"splide\" role=\"group\" aria-label=\"Splide Basic HTML Example\" style=\"width:100%;\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t";
            // line 501
            $context["i"] = 0;
            // line 502
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 503
                echo "\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 506
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 506);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 506);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 507
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 507);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 507);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"caption \" style=\"    text-transform: uppercase;\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-10\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
                // line 511
                echo twig_get_attribute($this->env, $this->source,                 // line 512
$context["product"], "name", [], "any", false, false, false, 512);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t";
                // line 513
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 513)) {
                    // line 514
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 515
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 516
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 516) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 520
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 525
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 526
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 528
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 528)) {
                    // line 529
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 530
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 530)) {
                        // line 531
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 531);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 533
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 533);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 534
                        echo twig_get_attribute($this->env, $this->source,                         // line 535
$context["product"], "price", [], "any", false, false, false, 535);
                        // line 536
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 538
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 538)) {
                        // line 539
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 540
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 540);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 542
                    echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 544
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                // line 547
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 548
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 549
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t\t";
        }
        // line 556
        echo "\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 557
            echo "\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t";
            // line 558
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 559
                echo "\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 559);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 559);
                    echo "</a>,
\t\t\t\t\t";
                } else {
                    // line 561
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 561);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 561);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 563
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 564
            echo "\t\t\t</p>
\t\t\t";
        }
        // line 566
        echo "\t\t</div>
\t</div>
</div>
<br /><br />
<script type=\"text/javascript\">


\tvar splide = new Splide('.splide', {
\t\tperPage: 4,
\t\trewind: true,
\t\tgap: '1rem',
\t\tperMove: 1,
\t\tbreakpoints: {
\t\t\t240: {
\t\t\t\tperPage: 2
\t\t\t},
\t\t\t640: {
\t\t\t\tperPage: 2
\t\t\t},
\t\t\t767: {
\t\t\t\tperPage: 3
\t\t\t},
\t\t\t1024: {
\t\t\t\tperPage: 4
\t\t\t}
\t\t}
\t});

\tsplide.mount();

\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
// -->
</script>
<script type=\"text/javascript\">

\t\$('#button-cart').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t}

\t\t\t\tif (json['success']) {

\t\t\t\t\t\$('.cart-counter-header').html(json['total'][0]);

\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\t\t\t\t\t\$('.cart_backdrop').fadeIn();
\t\t\t\t\t\$(\".cart\").animate({ right: '0px' })

\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t// buy now
\t\$('#button-buy').on('click', function () {


\t\t\$(\"#button-cart\").click();
\t\tsetTimeout(function () {

\t\t\twindow.location = \"index.php?route=checkout/cart\";
\t\t}, 200)

\t})
//

// -->
</script>
<script type=\"text/javascript\">

\t\$('.date').datetimepicker({ language: '";
        // line 692
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false });

\t\$('.datetime').datetimepicker({ language: '";
        // line 694
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true });

\t\$('.time').datetimepicker({ language: '";
        // line 696
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false });

\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function () {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
// -->
</script>
<script type=\"text/javascript\">

\t\$('#review').delegate('.pagination a', 'click', function (e) {
\t\te.preventDefault();

\t\t\$('#review').fadeOut('slow');

\t\t\$('#review').load(this.href);

\t\t\$('#review').fadeIn('slow');
\t});

\t\$('#review').load('index.php?route=product/product/review&product_id=  ";
        // line 763
        echo ($context["product_id"] ?? null);
        echo "');

\t\$('#button-review').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=  ";
        // line 767
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function () {


\t\tvar slides_to_show = 3;
\t\t\$('.slider-for').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: false,
\t\t\tinfinite: true,
\t\t\tasNavFor: '.slider-nav',
\t\t\tnextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t});
\t\t\$('.slider-nav').slick({
\t\t\tslidesToShow: slides_to_show,
\t\t\tvertical: true,
\t\t\tslidesToScroll: 1,
\t\t\tasNavFor: '.slider-for',
\t\t\tdots: false,
\t\t\tarrows: false,

\t\t\tfocusOnSelect: true

\t\t});

\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});
// -->
</script>


<script>

\t\$(document).ready(function () {



\t\tvar b = Number(\$(\"#input-quantity\").val());
\t\tupdatedValue = updatedValue + b;

\t\t\$(\"#add_quantity\").click(function () {
\t\t\tconsole.log('Adding quantity');
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;

\t\t\t
\t\t\tconsole.log(b);
\t\t\t\$(\".iq\").val(b);
\t\t})
\t\t\$(\"#less_quantity\").click(function () {
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) - 1;
\t\t\tupdatedValue = updatedValue - 1;

\t\t\tif (b <= 1) {
\t\t\t\tb = 1;
\t\t\t\tupdatedValue = 1;
\t\t\t\t//console.log(\"updatedValue =1 \",updatedValue);
\t\t\t}

\t\t\t\$(\".iq\").val(b);
\t\t})


\t\tvar slides_to_show = 3;
\t\t\$('.slider-for').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: false,
\t\t\tinfinite: true,
\t\t\tasNavFor: '.slider-nav',
\t\t\tnextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t});
\t\t\$('.slider-nav').slick({
\t\t\tslidesToShow: slides_to_show,
\t\t\tvertical: true,
\t\t\tslidesToScroll: 1,
\t\t\tasNavFor: '.slider-for',
\t\t\tdots: false,
\t\t\tarrows: false,

\t\t\tfocusOnSelect: true

\t\t});

\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});
\t//
\tconst zoom = document.querySelector(\".zoom\");
\tzoom.addEventListener(\"click\", () => {
\t\t\$('.zoom').zoom({ magnify: '2.5' });
\t});

\t// Initiate zoom effect:
\timageZoom(\"myimage\", \"myresult\");
\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
\tconst imagePopup = document.querySelector(\".imagePopup\");
\tconst mainImages = document.querySelectorAll(\".mainImage\");


\tmainImages.forEach(eImage => {
\t\teImage.addEventListener(\"click\", () => {
\t\t\tlet dataIndex = 0;

\t\t\tlet Index = eImage.closest(\"li\").getAttribute(\"data-index\");
\t\t\tdataIndex = Number(Index);

\t\t\tif (imagePopup.classList.contains(\"hidden\")) {
\t\t\t\timagePopup.classList.remove(\"hidden\");
\t\t\t\tconst imagePopupSlider = new Splide(\"#imagePopup\", {
\t\t\t\t\tperPage: 1,
\t\t\t\t\ttype: 'loop',
\t\t\t\t\tstart: dataIndex
\t\t\t\t});
\t\t\t\timagePopupSlider.mount();
\t\t\t}
\t\t});
\t});

\timagePopupClose.addEventListener(\"click\", () => {
\t\timagePopup.classList.add(\"hidden\");
\t});


\tvar fade_state = false;
\tlet add = document.getElementsByClassName(\"add\");
\tfor (i = 0; i < add.length; i++) {
\t\tadd[i].style.display = 'none';
\t}
\tlet remove = document.getElementsByClassName(\"remove\");
\tfor (i = 0; i < remove.length; i++) {
\t\tremove[i].style.display = 'block';
\t}
\t// on btn click
\tfunction fade() { // get the button and div

\t\tlet add = document.getElementsByClassName(\"add\");
\t\tfor (i = 0; i < add.length; i++) {
\t\t\tadd[i].style.display = 'none';
\t\t}
\t\tlet remove = document.getElementsByClassName(\"remove\");
\t\tfor (i = 0; i < remove.length; i++) {
\t\t\tremove[i].style.display = 'block';
\t\t}


\t\tlet btn = document.getElementById(\"fade\");
\t\t// if faded in or out

\t\tconsole.log(fade_state)

\t\tif (fade_state == true) { // trigers animation
\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'none';
\t\t\t}

\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tremove[i].style.display = 'block';
\t\t\t}
\t\t\t// sets the text

\t\t\t// sets fade_state
\t\t\tfade_state = false;
\t\t\tconsole.log(fade_state);

\t\t} else if (fade_state == false) { // trigers animation
\t\t\tfor (i = 0; i < remove.length; i++) {
\t\t\t\tremove[i].style.display = 'none';
\t\t\t}

\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'block';
\t\t\t}

\t\t\t// sets the text

\t\t\t// sets fade_state
\t\t\tfade_state = true;


\t\t}

\t}
</script>
";
        // line 994
        echo ($context["footer"] ?? null);
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
        return array (  1752 => 994,  1522 => 767,  1515 => 763,  1445 => 696,  1440 => 694,  1435 => 692,  1307 => 566,  1303 => 564,  1297 => 563,  1289 => 561,  1279 => 559,  1275 => 558,  1270 => 557,  1267 => 556,  1258 => 549,  1252 => 548,  1250 => 547,  1245 => 544,  1241 => 542,  1236 => 540,  1231 => 539,  1228 => 538,  1224 => 536,  1222 => 535,  1221 => 534,  1216 => 533,  1210 => 531,  1208 => 530,  1205 => 529,  1202 => 528,  1198 => 526,  1192 => 525,  1185 => 520,  1177 => 516,  1173 => 515,  1170 => 514,  1168 => 513,  1164 => 512,  1163 => 511,  1154 => 507,  1148 => 506,  1143 => 503,  1138 => 502,  1136 => 501,  1119 => 486,  1117 => 485,  1108 => 478,  1102 => 475,  1098 => 473,  1096 => 472,  1082 => 461,  1076 => 458,  1059 => 443,  1053 => 440,  1048 => 437,  1045 => 436,  1042 => 435,  1036 => 432,  1031 => 430,  1026 => 427,  1023 => 426,  1020 => 425,  1014 => 422,  1009 => 419,  1006 => 418,  1003 => 417,  997 => 414,  992 => 411,  989 => 410,  986 => 409,  980 => 406,  975 => 403,  972 => 402,  969 => 401,  963 => 398,  958 => 395,  955 => 394,  953 => 393,  933 => 376,  916 => 362,  891 => 340,  887 => 338,  881 => 334,  870 => 332,  866 => 331,  862 => 330,  856 => 327,  853 => 326,  850 => 325,  847 => 324,  841 => 323,  829 => 314,  825 => 313,  821 => 312,  817 => 310,  813 => 309,  806 => 308,  803 => 307,  791 => 298,  787 => 297,  783 => 296,  779 => 294,  775 => 293,  768 => 292,  765 => 291,  753 => 282,  749 => 281,  745 => 280,  741 => 278,  737 => 277,  730 => 276,  727 => 275,  721 => 272,  717 => 271,  713 => 270,  708 => 268,  704 => 267,  700 => 266,  693 => 265,  690 => 264,  684 => 261,  678 => 260,  674 => 259,  671 => 258,  667 => 257,  660 => 256,  657 => 255,  648 => 251,  642 => 250,  639 => 249,  635 => 248,  628 => 247,  625 => 246,  620 => 243,  612 => 240,  605 => 238,  603 => 237,  598 => 236,  584 => 233,  579 => 232,  577 => 231,  573 => 230,  569 => 229,  565 => 227,  561 => 226,  557 => 225,  553 => 224,  546 => 223,  543 => 222,  538 => 219,  530 => 216,  523 => 214,  521 => 213,  516 => 212,  502 => 209,  497 => 208,  495 => 207,  491 => 206,  487 => 205,  483 => 203,  479 => 202,  475 => 201,  471 => 200,  464 => 199,  461 => 198,  456 => 195,  449 => 193,  442 => 191,  440 => 190,  433 => 189,  429 => 188,  425 => 187,  421 => 186,  417 => 185,  409 => 183,  406 => 182,  402 => 181,  398 => 179,  396 => 178,  392 => 176,  386 => 172,  383 => 171,  372 => 169,  368 => 168,  363 => 165,  360 => 164,  355 => 162,  350 => 161,  347 => 160,  342 => 158,  337 => 157,  334 => 156,  325 => 150,  316 => 144,  312 => 142,  303 => 136,  297 => 132,  295 => 131,  292 => 130,  290 => 129,  285 => 126,  279 => 122,  269 => 117,  261 => 116,  255 => 115,  252 => 114,  250 => 113,  246 => 112,  240 => 109,  239 => 108,  233 => 104,  229 => 102,  226 => 101,  217 => 98,  211 => 97,  208 => 96,  203 => 95,  200 => 94,  195 => 92,  188 => 91,  186 => 90,  183 => 89,  181 => 88,  176 => 85,  172 => 83,  169 => 82,  156 => 79,  153 => 78,  148 => 77,  145 => 76,  135 => 74,  133 => 73,  130 => 72,  128 => 71,  122 => 68,  110 => 58,  101 => 54,  97 => 53,  94 => 52,  90 => 51,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
