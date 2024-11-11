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
class __TwigTemplate_e5aae7af10c125045f1df190c57a2f351c55dd184ffd0c8f116cd61a7ced2477 extends \Twig\Template
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
\t.dropdown-toggle {
\t\twhite-space: inherit !important;
\t}
  @media screen and (max-width: 650px) {
   .mob_text{
    font-size:12px !important;
\t    padding: 10px 10px !important;
   }
   .breadcrumb li:nth-child(-n+2){
\t\t\tdisplay: none; 
   }
   .breadcrumb li a{
\tfont-size:10px;
\tmargin:0px 2px;
   }
   .breadcrumb-wrap{
\tpadding:10px 0px;
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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 61
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 62);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 62);
            echo " /</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<div id=\"product-product mt-10\" class=\"section\">

\t

\t<div class=\"row\">
\t\t<div  class=\"col-sm-12\">";
        // line 79
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 82
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 83
            echo "\t\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t\t";
            // line 84
            if (($context["thumb"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 88
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 90);
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
                // line 93
                echo "\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 96
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 99
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 100
            echo "\t\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t\t";
            // line 101
            if (($context["thumb"] ?? null)) {
                // line 102
                echo "\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-center\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" style=\"max-height:700px;\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 105
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 107);
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
                // line 110
                echo "\t\t\t\t\t\t\t";
            }
            // line 111
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 113
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5 row\" style=\"height: fit-content;\">
\t\t\t\t\t<div class=\"col-md-10 col-10\">
\t\t\t\t\t\t<h2 class=\"text-capitalize\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
        // line 117
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-2 text-end pl-0\" style=\"text-align: end;\">
\t\t\t\t\t\t<a class=\"wishlist_link \"style=\"top:0px;\" onclick=\"wishlist.add('";
        // line 120
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 120);
        echo "');\">
\t\t\t\t\t\t\t\t";
        // line 121
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 121)) {
            // line 122
            echo "
\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
            // line 123
            echo ($context["product_id"] ?? null);
            echo "\" btnname=\"";
            echo ($context["heading_title"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnimg=\"";
            // line 124
            echo ($context["thumb"] ?? null);
            echo "\" btnhref=\"";
            echo ($context["href1"] ?? null);
            echo "\" btnprice=\"";
            echo ($context["price"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\tbtnsprice=\"";
            // line 125
            echo ($context["special"] ?? null);
            echo "\"btnpercent=\"";
            echo ($context["percent1"] ?? null);
            echo "\"  style=\"color: #44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t";
        } else {
            // line 129
            echo "
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t";
        }
        // line 133
        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 136
        if (($context["price"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t    ";
            if ((($context["price"] ?? null) == "₹0")) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t 

\t\t\t\t\t\t\t\t\t   
                                     ";
            } elseif ((            // line 141
($context["price"] ?? null) == "\$0")) {
                echo " 
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled mt-4 mb-2\">
\t\t\t\t\t\t\t\t";
                // line 145
                if ( !($context["special"] ?? null)) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4 style=\"font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 150
                    echo ($context["price"] ?? null);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 157
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4 style=\"    font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 163
                    echo ($context["special"] ?? null);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo ($context["text_tax"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 170
                    echo ($context["tax"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t";
                if (($context["points"] ?? null)) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo ($context["text_points"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 174
                    echo ($context["points"] ?? null);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                // line 176
                echo "\t\t\t\t\t\t\t\t";
                if (($context["discounts"] ?? null)) {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t\t<li>";
                        echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 181);
                        echo ($context["text_discount"] ?? null);
                        echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 181);
                        echo "</li>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 184
                echo "\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
            }
            // line 188
            echo "\t\t\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\" id=\"product\">
\t\t\t\t\t\t";
        // line 191
        if ((($context["price"] ?? null) == "₹0")) {
            // line 192
            echo "\t\t\t\t\t\t\t\t\t    
                                     ";
        } elseif ((        // line 193
($context["price"] ?? null) == "\$0")) {
            echo " 
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t\t\t   ";
            if (($context["options"] ?? null)) {
                // line 197
                echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>Size</p>
\t\t\t\t\t\t\t";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 200
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 200) == "select")) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 201)) {
                            echo " required ";
                        }
                        echo "\" style=\"max-width:210px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 204
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 205
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 205));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 206
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 206);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 206);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 207
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 207)) {
                                // line 208
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 208);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 210
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 215
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 215) == "radio")) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 217);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 218
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 218);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 219
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 219));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                            // line 222
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 222);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 223
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 223)) {
                                // line 224
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 224);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 224);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 224)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 224);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 224);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 226
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 226);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 227
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 227)) {
                                // line 228
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 228);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 228);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 230
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 233
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 236
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 236) == "checkbox")) {
                        // line 237
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 237)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 238
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 239
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 240
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 240));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 241
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                            // line 243
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 243);
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 244
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 244)) {
                                // line 245
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 245);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 245);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 245);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 247
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 247);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 248
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248)) {
                                // line 249
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 249);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 249);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 251
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 254
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 257
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 257) == "text")) {
                        // line 258
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 258)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 259
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 259);
                        // line 260
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 261
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 261);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 261);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 261);
                        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 264
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 264) == "textarea")) {
                        // line 265
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 265)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 266
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 266);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 266);
                        // line 267
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                        // line 268
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                        echo "]\" rows=\"5\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 268);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                        echo "\" class=\"form-control\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 268);
                        echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 271
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 271) == "file")) {
                        // line 272
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 272)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 273
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 273);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                        echo "\" data-loading-text=\"";
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 276
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 277);
                        echo "]\" value=\"\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 277);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 280
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 280) == "date")) {
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
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 285
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 285);
                        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
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
                    // line 294
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 294) == "datetime")) {
                        // line 295
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 295)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 296
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 296);
                        // line 297
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 299
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 299);
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
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
                    // line 308
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 308) == "time")) {
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 309)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 310
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 310);
                        // line 311
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 313
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 313);
                        echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
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
                    // line 322
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "\t\t\t\t\t\t   ";
            }
            // line 324
            echo "\t\t\t\t\t\t   ";
            if (($context["recurrings"] ?? null)) {
                // line 325
                echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
                // line 326
                echo ($context["text_payment_recurring"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 329
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 330
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 331);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 331);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t   ";
            }
            // line 337
            echo "\t\t\t\t\t\t";
        }
        // line 338
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 340
        if ((($context["price"] ?? null) == "₹0")) {
            echo "   
                                     ";
        } elseif ((        // line 341
($context["price"] ?? null) == "\$0")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 343
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
            // line 344
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
                        ";
        }
        // line 358
        echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t<div id=\"main\" class=\"mt-3\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"card dropdown-toggle\" style=\"border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\" style=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\"style=\"width:100%\">PRODUCT DESCRIPTION 
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-angle-down arr\" style=\"float: right;    margin-top: -10px;    height: 24px;    font-size: 35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse \" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 371
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card \">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header dropdown-toggle\" id=\"faqhead2\" style=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq2\" aria-expanded=\"true\" aria-controls=\"faq2\" style=\"width:100%\">MATERIAL & DETAILS<i class=\"pe-7s-angle-down\" style=\"float: right;margin-top: -10px;    height: 24px;    font-size: 35px;\"></i>
                                         </a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 385
        if (twig_test_empty(($context["metal"] ?? null))) {
            // line 386
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 387
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Metal:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 390
            echo ($context["metal"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 393
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone"] ?? null))) {
            // line 394
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 395
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 398
            echo ($context["stone"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 401
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone_cut"] ?? null))) {
            // line 402
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 403
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone Cut:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 406
            echo ($context["stone_cut"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 408
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Weight"] ?? null))) {
            // line 409
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 410
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Weight:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 413
            echo ($context["Weight"] ?? null);
            echo "g</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 415
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["width"] ?? null))) {
            // line 416
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 417
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Dimensions:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWidth :";
            // line 420
            echo ($context["width"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t, Length :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 422
            echo ($context["length"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 424
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Style"] ?? null))) {
            // line 425
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 426
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Style:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 429
            echo ($context["Style"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 431
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        // line 444
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 444) == "₹0")) {
            // line 445
            echo "\t\t\t\t\t\t\t\t\t   <div class=\"row mt-2\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\"><button type=\"button\" style='float:left; max-width:100%'  class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t\t\tRequest for Price
\t\t\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t    </div>
                                     ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 451
($context["product"] ?? null), "price", [], "any", false, false, false, 451) == "\$0")) {
            echo " 
\t\t\t\t\t\t\t\t\t <div class=\"row mt-2\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\"><button type=\"button\" style='float:left; max-width:100%'  class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t\t\tRequest for Price
\t\t\t\t\t\t\t\t\t\t</button></a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 459
            echo "\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\" data-loading-text=\"";
            // line 460
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
            // line 462
            echo ($context["button_cart"] ?? null);
            echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" style='max-width:49%;float:right; background-color:#000000;color:#fff;' class=\"col-md-6 col-6 btn btn-primary btn-lg mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 470
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 472
        if ((($context["minimum"] ?? null) > 1)) {
            // line 473
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t";
            // line 475
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
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
            // line 501
            $context["i"] = 0;
            // line 502
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 503
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 506
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 506);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 506);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 506);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 506);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption \" style=\"    text-transform: uppercase;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-10\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
                // line 509
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 509);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 510
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 510)) {
                    // line 511
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 512
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 513
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 513) < $context["j"])) {
                            // line 514
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 518
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 523
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 524
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 526
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 526)) {
                    // line 527
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 528
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 528)) {
                        // line 529
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 529);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 531
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 531);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 532
                        echo twig_get_attribute($this->env, $this->source,                         // line 533
$context["product"], "price", [], "any", false, false, false, 533);
                        // line 534
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 536
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 536)) {
                        // line 537
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 538
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 538);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 540
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 542
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                // line 545
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 546
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 547
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t";
        }
        // line 554
        echo "\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 555
            echo "\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t";
            // line 556
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 557
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 558
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 558);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 558);
                    echo "</a>,
\t\t\t\t\t\t";
                } else {
                    // line 560
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 560);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 560);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 562
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 563
            echo "\t\t\t\t</p>
\t\t\t";
        }
        // line 565
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
perPage: 1
},
640: {
perPage: 1
},
767: {
perPage: 2
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
        // line 691
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 693
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 695
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
        // line 762
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=  ";
        // line 766
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
\t
\t\$(document).ready(function () {

\t\tvar prod_que = '";
        // line 837
        echo ($context["total_products1"] ?? null);
        echo "';
\t

var b = Number(\$(\"#input-quantity\").val());

\t\t
\$(\"#add_quantity\").click(function () {

var b = Number(\$(\"#input-quantity\").val()) + 1;
if(b <= prod_que ){
\t
}else{
\tdocument.getElementById(\"button-cart\").disabled = true;
\tdocument.getElementById(\"button-buy\").disabled = true;
}


\$(\".iq\").val(b);
})
\$(\"#less_quantity\").click(function () {
var b = Number(\$(\"#input-quantity\").val()) - 1;


if (b <= 1) {
b = 1;

}
if(b <= prod_que ){
\tdocument.getElementById(\"button-cart\").disabled = false;
\tdocument.getElementById(\"button-buy\").disabled = false;
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
        // line 1001
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
        return array (  1780 => 1001,  1613 => 837,  1539 => 766,  1532 => 762,  1462 => 695,  1457 => 693,  1452 => 691,  1324 => 565,  1320 => 563,  1314 => 562,  1306 => 560,  1298 => 558,  1295 => 557,  1291 => 556,  1286 => 555,  1283 => 554,  1274 => 547,  1268 => 546,  1266 => 545,  1261 => 542,  1257 => 540,  1252 => 538,  1247 => 537,  1244 => 536,  1240 => 534,  1238 => 533,  1237 => 532,  1232 => 531,  1226 => 529,  1224 => 528,  1221 => 527,  1218 => 526,  1214 => 524,  1208 => 523,  1201 => 518,  1195 => 514,  1192 => 513,  1188 => 512,  1185 => 511,  1183 => 510,  1179 => 509,  1167 => 506,  1162 => 503,  1157 => 502,  1155 => 501,  1138 => 486,  1136 => 485,  1127 => 478,  1121 => 475,  1117 => 473,  1115 => 472,  1111 => 470,  1100 => 462,  1095 => 460,  1092 => 459,  1081 => 451,  1073 => 445,  1071 => 444,  1056 => 431,  1051 => 429,  1046 => 426,  1043 => 425,  1040 => 424,  1035 => 422,  1030 => 420,  1025 => 417,  1022 => 416,  1019 => 415,  1014 => 413,  1009 => 410,  1006 => 409,  1003 => 408,  998 => 406,  993 => 403,  990 => 402,  987 => 401,  981 => 398,  976 => 395,  973 => 394,  970 => 393,  964 => 390,  959 => 387,  956 => 386,  954 => 385,  937 => 371,  920 => 358,  903 => 344,  900 => 343,  895 => 341,  891 => 340,  887 => 338,  884 => 337,  878 => 333,  867 => 331,  863 => 330,  859 => 329,  853 => 326,  850 => 325,  847 => 324,  844 => 323,  838 => 322,  822 => 313,  818 => 311,  814 => 310,  807 => 309,  804 => 308,  788 => 299,  784 => 297,  780 => 296,  773 => 295,  770 => 294,  754 => 285,  750 => 283,  746 => 282,  739 => 281,  736 => 280,  728 => 277,  724 => 276,  717 => 274,  713 => 273,  706 => 272,  703 => 271,  691 => 268,  688 => 267,  684 => 266,  677 => 265,  674 => 264,  662 => 261,  659 => 260,  655 => 259,  648 => 258,  645 => 257,  640 => 254,  632 => 251,  625 => 249,  623 => 248,  618 => 247,  602 => 245,  600 => 244,  594 => 243,  590 => 241,  586 => 240,  582 => 239,  578 => 238,  571 => 237,  568 => 236,  563 => 233,  555 => 230,  548 => 228,  546 => 227,  541 => 226,  525 => 224,  523 => 223,  517 => 222,  513 => 220,  509 => 219,  505 => 218,  501 => 217,  494 => 216,  491 => 215,  486 => 212,  479 => 210,  472 => 208,  470 => 207,  463 => 206,  459 => 205,  455 => 204,  449 => 203,  441 => 201,  438 => 200,  434 => 199,  430 => 197,  427 => 196,  421 => 193,  418 => 192,  416 => 191,  412 => 189,  409 => 188,  403 => 184,  400 => 183,  389 => 181,  385 => 180,  380 => 177,  377 => 176,  372 => 174,  367 => 173,  364 => 172,  359 => 170,  354 => 169,  351 => 168,  343 => 163,  334 => 157,  330 => 155,  322 => 150,  316 => 146,  314 => 145,  311 => 144,  305 => 141,  300 => 138,  297 => 137,  295 => 136,  290 => 133,  284 => 129,  275 => 125,  267 => 124,  261 => 123,  258 => 122,  256 => 121,  252 => 120,  246 => 117,  240 => 113,  236 => 111,  233 => 110,  220 => 107,  217 => 106,  212 => 105,  209 => 104,  199 => 102,  197 => 101,  194 => 100,  192 => 99,  187 => 96,  183 => 94,  180 => 93,  167 => 90,  164 => 89,  159 => 88,  156 => 87,  146 => 85,  144 => 84,  141 => 83,  139 => 82,  133 => 79,  118 => 66,  106 => 62,  103 => 61,  99 => 60,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
