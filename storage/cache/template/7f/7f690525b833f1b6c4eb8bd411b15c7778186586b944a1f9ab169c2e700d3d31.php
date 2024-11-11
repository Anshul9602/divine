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
class __TwigTemplate_0fb47f7939f48e093c018698ef5f8a1ed2dfa2cbb1a04e7040977f94e48cd379 extends \Twig\Template
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

\t.dropdown-toggle {
\t\twhite-space: inherit !important;
\t}

\t@media screen and (max-width: 650px) {
\t\t.mob_text {
\t\t\tfont-size: 12px !important;
\t\t\tpadding: 10px 10px !important;
\t\t}

\t\t.breadcrumb li:nth-child(-n+2) {
\t\t\tdisplay: none;
\t\t}

\t\t.breadcrumb li a {
\t\t\tfont-size: 10px;
\t\t\tmargin: 0px 2px;
\t\t}

\t\t.breadcrumb-wrap {
\t\t\tpadding: 10px 0px;
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 69
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 70);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 70);
            echo "
\t\t\t\t\t\t\t\t\t/</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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
        // line 88
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 91
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 92
            echo "\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t";
            // line 93
            if (($context["thumb"] ?? null)) {
                // line 94
                echo "\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 97
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 98
                    echo "\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 99);
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
                // line 102
                echo "\t\t\t\t\t\t";
            }
            // line 103
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 105
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 108
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 109
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 110
            if (($context["thumb"] ?? null)) {
                // line 111
                echo "\t\t\t\t\t\t<li class=\"d-flex justify-content-center\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\tstyle=\"max-height:700px;\" alt=\"";
                // line 112
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 115
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 116
                    echo "\t\t\t\t\t\t<li class=\"image-additional d-flex justify-content-center\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 117);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" style=\"max-height:700px;\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 118
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 124
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 row\" style=\"height: fit-content;\">
\t\t\t\t\t<div class=\"col-md-10 col-10\">
\t\t\t\t\t\t<h2 class=\"text-capitalize\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
        // line 128
        echo         // line 129
($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-2 text-end pl-0\" style=\"text-align: end;\">
\t\t\t\t\t\t<a class=\"wishlist_link \" style=\"top:0px;\" onclick=\"wishlist.add('";
        // line 132
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 132);
        echo "');\">
\t\t\t\t\t\t\t";
        // line 133
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 133)) {
            // line 134
            echo "
\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
            // line 135
            echo ($context["product_id"] ?? null);
            echo "\" btnname=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
            // line 136
            echo ($context["thumb"] ?? null);
            echo "\" btnhref=\"";
            echo ($context["href1"] ?? null);
            echo "\" btnprice=\"";
            echo ($context["price"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
            // line 137
            echo ($context["special"] ?? null);
            echo "\" btnpercent=\"";
            echo ($context["percent1"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tstyle=\"color: #44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t";
        } else {
            // line 142
            echo "
\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 149
        if (($context["price"] ?? null)) {
            // line 150
            echo "\t\t\t\t\t\t";
            if ((($context["price"] ?? null) == "₹0")) {
                // line 151
                echo "


\t\t\t\t\t\t";
            } elseif ((            // line 154
($context["price"] ?? null) == "\$0")) {
                // line 155
                echo "
\t\t\t\t\t\t";
            } else {
                // line 157
                echo "\t\t\t\t\t\t<ul class=\"list-unstyled mt-4 mb-2\">
\t\t\t\t\t\t\t";
                // line 158
                if ( !($context["special"] ?? null)) {
                    // line 159
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4 style=\"font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                    // line 163
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                } else {
                    // line 169
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t";
                    // line 171
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4 style=\"    font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                    // line 177
                    echo ($context["special"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 183
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 184
                    echo "\t\t\t\t\t\t\t<li>";
                    echo ($context["text_tax"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 185
                    echo ($context["tax"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t";
                if (($context["points"] ?? null)) {
                    // line 188
                    echo "\t\t\t\t\t\t\t<li>";
                    echo ($context["text_points"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 189
                    echo ($context["points"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t\t\t\t";
                if (($context["discounts"] ?? null)) {
                    // line 192
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    // line 195
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                        // line 196
                        echo "\t\t\t\t\t\t\t<li>";
                        echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 196);
                        echo ($context["text_discount"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 196);
                        echo "</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "\t\t\t\t\t\t\t";
                }
                // line 199
                echo "\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
            }
            // line 203
            echo "\t\t\t\t\t\t";
        }
        // line 204
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\" id=\"product\">
\t\t\t\t\t\t";
        // line 206
        if ((($context["price"] ?? null) == "₹0")) {
            // line 207
            echo "\t\t\t\t\t\t   <div class=\"row mt-5 pb-3\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t  <a href=\"index.php?route=information/contact\"><button type=\"button\"
\t\t\t\t\t\t\t\t\tstyle='float:left; max-width:100%'
\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\tRequest for Price
\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } elseif ((        // line 214
($context["price"] ?? null) == "\$0")) {
            // line 215
            echo "\t\t\t\t\t\t\t\t<div class=\"row mt-5 pb-3\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\"><button type=\"button\"
\t\t\t\t\t\t\t\t\t\t\tstyle='float:left; max-width:100%'
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t\t\tRequest for Price
\t\t\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 223
            echo "\t\t\t\t\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 224
                echo "\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<p>Size</p>
\t\t\t\t\t\t\t\t";
                // line 226
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 227) == "select")) {
                        // line 228
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 228)) {
                            echo " required ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\tstyle=\"max-width:210px;\">

\t\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 232
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 232);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 233
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        // line 234
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 234));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 235
                            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 235);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 235);
                            // line 236
                            echo "
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 237
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 237)) {
                                // line 238
                                echo "\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 238);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 238);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 240
                            echo "\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 242
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 245
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 245) == "radio")) {
                        // line 246
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 246)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 247);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 248);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 249
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 249));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 250
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                            // line 252
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
                            echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 253
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 253);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 254
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 254)) {
                                // line 255
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 255);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                                // line 256
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 256);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 256)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 256);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 256);
                                    echo " ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 259
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 259);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 260
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 260)) {
                                // line 261
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 261);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 261);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 263
                            echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 266
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 269
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 269) == "checkbox")) {
                        // line 270
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 270)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 271);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 272
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 273
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 273));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 274
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                            // line 276
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 276);
                            echo "][]\"
\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 277
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 277);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 278
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 278)) {
                                // line 279
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 279);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                                // line 280
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 280);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 280)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 280);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 280);
                                    echo " ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 283
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 283);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 284
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 284)) {
                                // line 285
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 285);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 285);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 287
                            echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 290
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 293
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "text")) {
                        // line 294
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 294)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 295
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 296
$context["option"], "name", [], "any", false, false, false, 296);
                        // line 297
                        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 298
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 298);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 299
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 299);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 299);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 300
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 300);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 303
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 303) == "textarea")) {
                        // line 304
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 304)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 305
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 305);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 306
$context["option"], "name", [], "any", false, false, false, 306);
                        // line 307
                        echo "</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                        // line 308
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                        echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\t\t\tplaceholder=\"";
                        // line 309
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 309);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 309);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"form-control\">";
                        // line 310
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 310);
                        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 313
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 313) == "file")) {
                        // line 314
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 314)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 315
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 315);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                        // line 316
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                        echo "\"
\t\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
                        // line 317
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t";
                        // line 319
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        // line 320
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                        echo "]\" value=\"\"
\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 321
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 321);
                        echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 324
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 324) == "date")) {
                        // line 325
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 325)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 326
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 326);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 327
$context["option"], "name", [], "any", false, false, false, 327);
                        // line 328
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 330
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 330);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 331
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 331);
                        echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 332
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 341
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 341) == "datetime")) {
                        // line 342
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 342)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 343
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 343);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 344
$context["option"], "name", [], "any", false, false, false, 344);
                        // line 345
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 347
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 347);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 348
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 348);
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 349
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 349);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 358
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 358) == "time")) {
                        // line 359
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 359)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 360
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 360);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 361
$context["option"], "name", [], "any", false, false, false, 361);
                        // line 362
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 364
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 364);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 365
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 365);
                        echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 366
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 375
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 376
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 377
            echo "\t\t\t\t\t\t\t\t";
            if (($context["recurrings"] ?? null)) {
                // line 378
                echo "\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h3>";
                // line 379
                echo ($context["text_payment_recurring"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 382
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 383
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 384
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 384);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 384);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 386
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 390
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 391
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 393
        if ((($context["price"] ?? null) == "₹0")) {
            // line 394
            echo "\t\t\t\t\t\t\t\t\t";
        } elseif ((($context["price"] ?? null) == "\$0")) {
            // line 395
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 396
            echo "
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
            // line 397
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\"
\t\t\t\t\t\t\t\t\t\tid=\"input-quantity\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t\t<p>Quantity</p>
\t\t\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px;max-width:300px\" class=\"row m-0\">
\t\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\t\t\tid=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\"
\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\"
\t\t\t\t\t\t\t\t\t\t\t\tid=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 419
        echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t<div id=\"main\" class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card dropdown-toggle\"
\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"width:100%\">PRODUCT DESCRIPTION
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-angle-down arr\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"float: right;    margin-top: -10px;    height: 24px;    font-size: 35px;\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse \" aria-labelledby=\"faqhead1\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 438
        echo ($context["description"] ?? null);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header dropdown-toggle\" id=\"faqhead2\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-toggle=\"collapse\" data-target=\"#faq2\" aria-expanded=\"true\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\taria-controls=\"faq2\" style=\"width:100%\">MATERIAL & DETAILS<i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"pe-7s-angle-down\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"float: right;margin-top: -10px;    height: 24px;    font-size: 35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 458
        if (twig_test_empty(($context["metal"] ?? null))) {
            // line 459
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 460
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Metal:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 463
            echo ($context["metal"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 466
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone"] ?? null))) {
            // line 467
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 468
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 471
            echo ($context["stone"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 474
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone_cut"] ?? null))) {
            // line 475
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 476
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone Cut:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 479
            echo ($context["stone_cut"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 482
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Weight"] ?? null))) {
            // line 483
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 484
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Weight:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 487
            echo ($context["Weight"] ?? null);
            echo "g
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 490
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["width"] ?? null))) {
            // line 491
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 492
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Dimensions:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWidth :";
            // line 495
            echo ($context["width"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t, Length :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 497
            echo ($context["length"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 500
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Style"] ?? null))) {
            // line 501
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 502
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Style:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 505
            echo ($context["Style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 508
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        // line 521
        if ((($context["price"] ?? null) == "₹0")) {
            // line 522
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        } elseif ((        // line 523
($context["price"] ?? null) == "\$0")) {
            // line 524
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 526
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\"
\t\t\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
            // line 528
            echo ($context["text_loading"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 531
            echo ($context["button_cart"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\"
\t\t\t\t\t\t\t\t\t\t\tstyle='max-width:49%;float:right; background-color:#000000;color:#fff;'
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-6 col-6 btn btn-primary btn-lg mob_text\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 541
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 543
        if ((($context["minimum"] ?? null) > 1)) {
            // line 544
            echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 546
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 549
        echo "\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>

\t\t\t\t\t";
        // line 556
        if (($context["products"] ?? null)) {
            // line 557
            echo "

\t\t\t\t\t<div class=\"row pt-5\">

\t\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t\t<h3>You May Also Like</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>

\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"splide\" role=\"group\" aria-label=\"Splide Basic HTML Example\" style=\"width:100%;\">
\t\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t\t\t";
            // line 572
            $context["i"] = 0;
            // line 573
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 574
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 577
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 577);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 577);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 578
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 578);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 578);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption \" style=\"    text-transform: uppercase;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-10\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"font-family: 'Montserrat', sans-serif !important;\">";
                // line 583
                echo twig_get_attribute($this->env, $this->source,                 // line 584
$context["product"], "name", [], "any", false, false, false, 584);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 585
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 585)) {
                    // line 586
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 587
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 588
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 588) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 592
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 597
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 598
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 600
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 600)) {
                    // line 601
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 602
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 602)) {
                        // line 603
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 603);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 605
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 605);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 606
                        echo twig_get_attribute($this->env, $this->source,                         // line 607
$context["product"], "price", [], "any", false, false, false, 607);
                        // line 608
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 610
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 610)) {
                        // line 611
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 612
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 612);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 614
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 616
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                // line 619
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 620
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 621
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 628
        echo "\t\t\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 629
            echo "\t\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 630
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 631
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 631);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 631);
                    echo "</a>,
\t\t\t\t\t\t\t";
                } else {
                    // line 633
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 633);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 633);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 635
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 636
            echo "\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 638
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<br /><br />
\t\t<script type=\"text/javascript\">


\t\t\tvar splide = new Splide('.splide', {
\t\t\t\tperPage: 4,
\t\t\t\trewind: true,
\t\t\t\tgap: '1rem',
\t\t\t\tperMove: 1,
\t\t\t\tbreakpoints: {
\t\t\t\t\t240: {
\t\t\t\t\t\tperPage: 1
\t\t\t\t\t},
\t\t\t\t\t640: {
\t\t\t\t\t\tperPage: 1
\t\t\t\t\t},
\t\t\t\t\t767: {
\t\t\t\t\t\tperPage: 2
\t\t\t\t\t},
\t\t\t\t\t1024: {
\t\t\t\t\t\tperPage: 4
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tsplide.mount();

\t\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$('#recurring-description').html('');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
// -->
\t\t</script>
\t\t<script type=\"text/javascript\">

\t\t\t\$('#button-cart').on('click', function () {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$('#button-cart').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$('#button-cart').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {

\t\t\t\t\t\t\t\$('.cart-counter-header').html(json['total'][0]);

\t\t\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t\t\t\t}, 100);

\t\t\t\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\t\t\t\t\t\t\t\$('.cart_backdrop').fadeIn();
\t\t\t\t\t\t\t\$(\".cart\").animate({ right: '0px' })

\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t// buy now
\t\t\t\$('#button-buy').on('click', function () {


\t\t\t\t\$(\"#button-cart\").click();
\t\t\t\tsetTimeout(function () {

\t\t\t\t\twindow.location = \"index.php?route=checkout/cart\";
\t\t\t\t}, 200)

\t\t\t})
//

// -->
\t\t</script>
\t\t<script type=\"text/javascript\">

\t\t\t\$('.date').datetimepicker({ language: '";
        // line 764
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false });

\t\t\t\$('.datetime').datetimepicker({ language: '";
        // line 766
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true });

\t\t\t\$('.time').datetimepicker({ language: '";
        // line 768
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false });

\t\t\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\t\t\tvar node = this;

\t\t\t\t\$('#form-upload').remove();

\t\t\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\t\t\tif (typeof timer != 'undefined') {
\t\t\t\t\tclearInterval(timer);
\t\t\t\t}

\t\t\t\ttimer = setInterval(function () {
\t\t\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\t\t\tclearInterval(timer);

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\t\t\tcache: false,
\t\t\t\t\t\t\tcontentType: false,
\t\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}, 500);
\t\t\t});
// -->
\t\t</script>
\t\t<script type=\"text/javascript\">

\t\t\t\$('#review').delegate('.pagination a', 'click', function (e) {
\t\t\t\te.preventDefault();

\t\t\t\t\$('#review').fadeOut('slow');

\t\t\t\t\$('#review').load(this.href);

\t\t\t\t\$('#review').fadeIn('slow');
\t\t\t});

\t\t\t\$('#review').load('index.php?route=product/product/review&product_id=  ";
        // line 835
        echo ($context["product_id"] ?? null);
        echo "');

\t\t\t\$('#button-review').on('click', function () {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=product/product/write&product_id=  ";
        // line 839
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$('#button-review').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$('#button-review').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\t\$(document).ready(function () {


\t\t\t\tvar slides_to_show = 3;
\t\t\t\t\$('.slider-for').slick({
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tarrows: true,
\t\t\t\t\tfade: false,
\t\t\t\t\tinfinite: true,
\t\t\t\t\tasNavFor: '.slider-nav',
\t\t\t\t\tnextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\t\t\tprevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t\t\t});
\t\t\t\t\$('.slider-nav').slick({
\t\t\t\t\tslidesToShow: slides_to_show,
\t\t\t\t\tvertical: true,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tasNavFor: '.slider-for',
\t\t\t\t\tdots: false,
\t\t\t\t\tarrows: false,

\t\t\t\t\tfocusOnSelect: true

\t\t\t\t});

\t\t\t\t\$('.thumbnails').magnificPopup({
\t\t\t\t\ttype: 'image',
\t\t\t\t\tdelegate: 'a',
\t\t\t\t\tgallery: {
\t\t\t\t\t\tenabled: true
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
// -->
\t\t</script>


\t\t<script>

\t\t\t\$(document).ready(function () {

\t\t\t\tvar prod_que = '";
        // line 910
        echo ($context["total_products1"] ?? null);
        echo "';


\t\t\t\tvar b = Number(\$(\"#input-quantity\").val());


\t\t\t\t\$(\"#add_quantity\").click(function () {

\t\t\t\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;
\t\t\t\t\tif (b <= prod_que) {

\t\t\t\t\t} else {
\t\t\t\t\t\tdocument.getElementById(\"button-cart\").disabled = true;
\t\t\t\t\t\tdocument.getElementById(\"button-buy\").disabled = true;
\t\t\t\t\t}


\t\t\t\t\t\$(\".iq\").val(b);
\t\t\t\t})
\t\t\t\t\$(\"#less_quantity\").click(function () {
\t\t\t\t\tvar b = Number(\$(\"#input-quantity\").val()) - 1;


\t\t\t\t\tif (b <= 1) {
\t\t\t\t\t\tb = 1;

\t\t\t\t\t}
\t\t\t\t\tif (b <= prod_que) {
\t\t\t\t\t\tdocument.getElementById(\"button-cart\").disabled = false;
\t\t\t\t\t\tdocument.getElementById(\"button-buy\").disabled = false;
\t\t\t\t\t}
\t\t\t\t\t\$(\".iq\").val(b);
\t\t\t\t})


\t\t\t\tvar slides_to_show = 3;
\t\t\t\t\$('.slider-for').slick({
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tarrows: true,
\t\t\t\t\tfade: false,
\t\t\t\t\tinfinite: true,
\t\t\t\t\tasNavFor: '.slider-nav',
\t\t\t\t\tnextArrow: '<button style=\"width: 25px;top: 45%;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\t\t\tprevArrow: '<button style=\"width: 25px;top: 45%;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t\t\t});
\t\t\t\t\$('.slider-nav').slick({
\t\t\t\t\tslidesToShow: slides_to_show,
\t\t\t\t\tvertical: true,
\t\t\t\t\tslidesToScroll: 1,
\t\t\t\t\tasNavFor: '.slider-for',
\t\t\t\t\tdots: false,
\t\t\t\t\tarrows: false,

\t\t\t\t\tfocusOnSelect: true

\t\t\t\t});

\t\t\t\t\$('.thumbnails').magnificPopup({
\t\t\t\t\ttype: 'image',
\t\t\t\t\tdelegate: 'a',
\t\t\t\t\tgallery: {
\t\t\t\t\t\tenabled: true
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t\t//
\t\t\tconst zoom = document.querySelector(\".zoom\");
\t\t\tzoom.addEventListener(\"click\", () => {
\t\t\t\t\$('.zoom').zoom({ magnify: '2.5' });
\t\t\t});

\t\t\t// Initiate zoom effect:
\t\t\timageZoom(\"myimage\", \"myresult\");
\t\t\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
\t\t\tconst imagePopup = document.querySelector(\".imagePopup\");
\t\t\tconst mainImages = document.querySelectorAll(\".mainImage\");


\t\t\tmainImages.forEach(eImage => {
\t\t\t\teImage.addEventListener(\"click\", () => {
\t\t\t\t\tlet dataIndex = 0;

\t\t\t\t\tlet Index = eImage.closest(\"li\").getAttribute(\"data-index\");
\t\t\t\t\tdataIndex = Number(Index);

\t\t\t\t\tif (imagePopup.classList.contains(\"hidden\")) {
\t\t\t\t\t\timagePopup.classList.remove(\"hidden\");
\t\t\t\t\t\tconst imagePopupSlider = new Splide(\"#imagePopup\", {
\t\t\t\t\t\t\tperPage: 1,
\t\t\t\t\t\t\ttype: 'loop',
\t\t\t\t\t\t\tstart: dataIndex
\t\t\t\t\t\t});
\t\t\t\t\t\timagePopupSlider.mount();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});

\t\t\timagePopupClose.addEventListener(\"click\", () => {
\t\t\t\timagePopup.classList.add(\"hidden\");
\t\t\t});


\t\t\tvar fade_state = false;
\t\t\tlet add = document.getElementsByClassName(\"add\");
\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\tadd[i].style.display = 'none';
\t\t\t}
\t\t\tlet remove = document.getElementsByClassName(\"remove\");
\t\t\tfor (i = 0; i < remove.length; i++) {
\t\t\t\tremove[i].style.display = 'block';
\t\t\t}
\t\t\t// on btn click
\t\t\tfunction fade() { // get the button and div

\t\t\t\tlet add = document.getElementsByClassName(\"add\");
\t\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\t\tadd[i].style.display = 'none';
\t\t\t\t}
\t\t\t\tlet remove = document.getElementsByClassName(\"remove\");
\t\t\t\tfor (i = 0; i < remove.length; i++) {
\t\t\t\t\tremove[i].style.display = 'block';
\t\t\t\t}


\t\t\t\tlet btn = document.getElementById(\"fade\");
\t\t\t\t// if faded in or out

\t\t\t\tconsole.log(fade_state)

\t\t\t\tif (fade_state == true) { // trigers animation
\t\t\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\t\t\tadd[i].style.display = 'none';
\t\t\t\t\t}

\t\t\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\t\t\tremove[i].style.display = 'block';
\t\t\t\t\t}
\t\t\t\t\t// sets the text

\t\t\t\t\t// sets fade_state
\t\t\t\t\tfade_state = false;
\t\t\t\t\tconsole.log(fade_state);

\t\t\t\t} else if (fade_state == false) { // trigers animation
\t\t\t\t\tfor (i = 0; i < remove.length; i++) {
\t\t\t\t\t\tremove[i].style.display = 'none';
\t\t\t\t\t}

\t\t\t\t\tfor (i = 0; i < add.length; i++) {
\t\t\t\t\t\tadd[i].style.display = 'block';
\t\t\t\t\t}

\t\t\t\t\t// sets the text

\t\t\t\t\t// sets fade_state
\t\t\t\t\tfade_state = true;


\t\t\t\t}

\t\t\t}
\t\t</script>
\t\t";
        // line 1074
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
        return array (  1872 => 1074,  1705 => 910,  1631 => 839,  1624 => 835,  1554 => 768,  1549 => 766,  1544 => 764,  1416 => 638,  1412 => 636,  1406 => 635,  1398 => 633,  1388 => 631,  1384 => 630,  1379 => 629,  1376 => 628,  1367 => 621,  1361 => 620,  1359 => 619,  1354 => 616,  1350 => 614,  1345 => 612,  1340 => 611,  1337 => 610,  1333 => 608,  1331 => 607,  1330 => 606,  1325 => 605,  1319 => 603,  1317 => 602,  1314 => 601,  1311 => 600,  1307 => 598,  1301 => 597,  1294 => 592,  1286 => 588,  1282 => 587,  1279 => 586,  1277 => 585,  1273 => 584,  1272 => 583,  1262 => 578,  1256 => 577,  1251 => 574,  1246 => 573,  1244 => 572,  1227 => 557,  1225 => 556,  1216 => 549,  1210 => 546,  1206 => 544,  1204 => 543,  1200 => 541,  1187 => 531,  1181 => 528,  1177 => 526,  1173 => 524,  1171 => 523,  1168 => 522,  1166 => 521,  1151 => 508,  1145 => 505,  1140 => 502,  1137 => 501,  1134 => 500,  1128 => 497,  1123 => 495,  1118 => 492,  1115 => 491,  1112 => 490,  1106 => 487,  1101 => 484,  1098 => 483,  1095 => 482,  1089 => 479,  1084 => 476,  1081 => 475,  1078 => 474,  1072 => 471,  1067 => 468,  1064 => 467,  1061 => 466,  1055 => 463,  1050 => 460,  1047 => 459,  1045 => 458,  1022 => 438,  999 => 419,  974 => 397,  971 => 396,  968 => 395,  965 => 394,  963 => 393,  959 => 391,  956 => 390,  950 => 386,  939 => 384,  935 => 383,  931 => 382,  925 => 379,  922 => 378,  919 => 377,  916 => 376,  910 => 375,  898 => 366,  894 => 365,  890 => 364,  886 => 362,  884 => 361,  881 => 360,  874 => 359,  871 => 358,  859 => 349,  855 => 348,  851 => 347,  847 => 345,  845 => 344,  842 => 343,  835 => 342,  832 => 341,  820 => 332,  816 => 331,  812 => 330,  808 => 328,  806 => 327,  803 => 326,  796 => 325,  793 => 324,  787 => 321,  783 => 320,  779 => 319,  774 => 317,  770 => 316,  766 => 315,  759 => 314,  756 => 313,  750 => 310,  744 => 309,  740 => 308,  737 => 307,  735 => 306,  732 => 305,  725 => 304,  722 => 303,  716 => 300,  710 => 299,  706 => 298,  703 => 297,  701 => 296,  698 => 295,  691 => 294,  688 => 293,  683 => 290,  675 => 287,  668 => 285,  666 => 284,  661 => 283,  647 => 280,  642 => 279,  640 => 278,  636 => 277,  632 => 276,  628 => 274,  624 => 273,  620 => 272,  616 => 271,  609 => 270,  606 => 269,  601 => 266,  593 => 263,  586 => 261,  584 => 260,  579 => 259,  565 => 256,  560 => 255,  558 => 254,  554 => 253,  550 => 252,  546 => 250,  542 => 249,  538 => 248,  534 => 247,  527 => 246,  524 => 245,  519 => 242,  512 => 240,  505 => 238,  503 => 237,  500 => 236,  495 => 235,  491 => 234,  487 => 233,  483 => 232,  479 => 231,  470 => 228,  467 => 227,  463 => 226,  459 => 224,  456 => 223,  446 => 215,  444 => 214,  435 => 207,  433 => 206,  429 => 204,  426 => 203,  420 => 199,  417 => 198,  406 => 196,  402 => 195,  397 => 192,  394 => 191,  389 => 189,  384 => 188,  381 => 187,  376 => 185,  371 => 184,  368 => 183,  359 => 177,  350 => 171,  346 => 169,  337 => 163,  331 => 159,  329 => 158,  326 => 157,  322 => 155,  320 => 154,  315 => 151,  312 => 150,  310 => 149,  305 => 146,  299 => 142,  289 => 137,  281 => 136,  275 => 135,  272 => 134,  270 => 133,  266 => 132,  260 => 129,  259 => 128,  253 => 124,  249 => 122,  246 => 121,  237 => 118,  231 => 117,  228 => 116,  223 => 115,  220 => 114,  215 => 112,  208 => 111,  206 => 110,  203 => 109,  201 => 108,  196 => 105,  192 => 103,  189 => 102,  176 => 99,  173 => 98,  168 => 97,  165 => 96,  155 => 94,  153 => 93,  150 => 92,  148 => 91,  142 => 88,  127 => 75,  114 => 70,  111 => 69,  107 => 68,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
