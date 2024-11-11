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
class __TwigTemplate_77f01fafbdf6db80760c76252d461e357c0217e885dd3abaa74039a698cc9d3f extends \Twig\Template
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
\t\t<div id=\"content\" class=\"col-sm-12\">";
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
\t\t\t\t\t<div class=\"col-md-11\">
\t\t\t\t\t\t<h2 class=\"text-capitalize\" style=\"font-weight: 600!important;font-family: 'Montserrat', sans-serif !important;\">";
        // line 102
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-1 text-end\" style=\"text-align: end;\">
\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
        // line 105
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t\t";
        // line 106
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 106)) {
            // line 107
            echo "
\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" style=\"color:#44b394; font-size:24px;\"></i>


\t\t\t\t\t\t\t";
        } else {
            // line 112
            echo "
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #44b394; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
        // line 119
        if (($context["price"] ?? null)) {
            // line 120
            echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled mt-4 mb-2\">
\t\t\t\t\t\t\t\t";
            // line 121
            if ( !($context["special"] ?? null)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4 style=\"font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 126
                echo ($context["price"] ?? null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } else {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration: line-through;\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 133
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4 style=\"    font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\t\t\t\t<span>INR
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 139
                echo ($context["special"] ?? null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<p>Free Worldwide Shipping
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t\t\t\t";
            if (($context["tax"] ?? null)) {
                // line 145
                echo "\t\t\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 146
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 149
                echo "\t\t\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 150
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 153
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 157);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 157);
                    echo "</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 160
            echo "\t\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\" id=\"product\">
\t\t\t\t\t\t";
        // line 166
        if (($context["options"] ?? null)) {
            // line 167
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<p>Size</p>
\t\t\t\t\t\t\t";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 170
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 170) == "select")) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 171)) {
                        echo " required ";
                    }
                    echo "\" style=\"max-width:210px;\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 174
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 175));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 176
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 176);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 176);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 177
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 177)) {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 178);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 178);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 185
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "radio")) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 189));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 190
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 192);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 193
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 193)) {
                            // line 194
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 194);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 194);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 194);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 196);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 197
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197)) {
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 198);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 198);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 200
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206) == "checkbox")) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 207)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 210));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 213
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 213);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 214
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 214)) {
                            // line 215
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 215);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 215);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 215);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 217);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 218
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 218)) {
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 219);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 219);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 227) == "text")) {
                    // line 228
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 228)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 229);
                    // line 230
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 231);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 231);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "textarea")) {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    // line 237
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 238);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 241
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 241) == "file")) {
                    // line 242
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 242)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 243);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 244);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 246
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 250
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 250) == "date")) {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 251)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 252);
                    // line 253
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
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
                // line 264
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 264) == "datetime")) {
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
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 269);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
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
                // line 278
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 278) == "time")) {
                    // line 279
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 279)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 280);
                    // line 281
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 283);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
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
                // line 292
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            echo "\t\t\t\t\t\t";
        }
        // line 294
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 295
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
            // line 296
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 299
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 301
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 301);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 301);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 307
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 309
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
        // line 324
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t<div id=\"main\" class=\"mt-3\">
\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<div class=\"card dropdown-toggle\" style=\"border-bottom: 1px solid rgba(0,0,0,.125); margin-bottom:10px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\" style=\"text-transform: uppercase;text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\"style=\"width:100%\">PRODUCT DETAILS </a>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse \" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 335
        if (twig_test_empty(($context["metal"] ?? null))) {
            // line 336
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 337
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Metal:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 340
            echo ($context["metal"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 343
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone"] ?? null))) {
            // line 344
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 345
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 348
            echo ($context["stone"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 351
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["stone_cut"] ?? null))) {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 353
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Stone Cut:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 356
            echo ($context["stone_cut"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 358
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Weight"] ?? null))) {
            // line 359
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 360
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Weight:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 363
            echo ($context["Weight"] ?? null);
            echo "g</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 365
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["width"] ?? null))) {
            // line 366
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 367
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Dimensions:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWidth :";
            // line 370
            echo ($context["width"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t, Length :
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 372
            echo ($context["length"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 374
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["Style"] ?? null))) {
            // line 375
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 376
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"details_span\">Style:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 379
            echo ($context["Style"] ?? null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 381
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t</ul>
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
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 395
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div class=\"row m-0\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:49%' id=\"button-cart\" data-loading-text=\"";
        // line 407
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block mob_text\">
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t";
        // line 409
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
        // line 418
        if ((($context["minimum"] ?? null) > 1)) {
            // line 419
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t";
            // line 421
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 424
        echo "\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>

\t\t\t";
        // line 431
        if (($context["products"] ?? null)) {
            // line 432
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
            // line 447
            $context["i"] = 0;
            // line 448
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 449
                echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 452
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 452);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 452);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 452);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 452);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption \" style=\"    text-transform: uppercase;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mt-10\" style=\"font-family: 'Montserrat', sans-serif !important;\">";
                // line 455
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 455);
                echo "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 456
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 456)) {
                    // line 457
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 458
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 459
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 459) < $context["j"])) {
                            // line 460
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 464
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 469
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 470
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 472
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 472)) {
                    // line 473
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 474
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 474)) {
                        // line 475
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 475);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 477
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 477);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 478
                        echo twig_get_attribute($this->env, $this->source,                         // line 479
$context["product"], "price", [], "any", false, false, false, 479);
                        // line 480
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 482
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 482)) {
                        // line 483
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 484
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 484);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 486
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 488
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                // line 491
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 492
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t";
        }
        // line 500
        echo "\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 501
            echo "\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t";
            // line 502
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 503
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    // line 504
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 504);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 504);
                    echo "</a>,
\t\t\t\t\t\t";
                } else {
                    // line 506
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 506);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 506);
                    echo "</a>
\t\t\t\t\t\t";
                }
                // line 508
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            echo "\t\t\t\t</p>
\t\t\t";
        }
        // line 511
        echo "\t\t</div>
\t</div>
</div>
<br/><br/>
<script type=\"text/javascript\">


\tvar splide = new Splide('.splide', {
perPage: 4,
rewind: true,
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
        // line 636
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 638
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 640
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
        // line 707
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=  ";
        // line 711
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
\$(\"#add_quantity\").click(function () {
console.log('Adding quantity');
var b = Number(\$(\"#input-quantity\").val()) + 1;

\$(\".iq\").val(b);
})
\$(\"#less_quantity\").click(function () {
var b = Number(\$(\"#input-quantity\").val()) - 1;
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
        // line 924
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
        return array (  1646 => 924,  1430 => 711,  1423 => 707,  1353 => 640,  1348 => 638,  1343 => 636,  1216 => 511,  1212 => 509,  1206 => 508,  1198 => 506,  1190 => 504,  1187 => 503,  1183 => 502,  1178 => 501,  1175 => 500,  1166 => 493,  1160 => 492,  1158 => 491,  1153 => 488,  1149 => 486,  1144 => 484,  1139 => 483,  1136 => 482,  1132 => 480,  1130 => 479,  1129 => 478,  1124 => 477,  1118 => 475,  1116 => 474,  1113 => 473,  1110 => 472,  1106 => 470,  1100 => 469,  1093 => 464,  1087 => 460,  1084 => 459,  1080 => 458,  1077 => 457,  1075 => 456,  1071 => 455,  1059 => 452,  1054 => 449,  1049 => 448,  1047 => 447,  1030 => 432,  1028 => 431,  1019 => 424,  1013 => 421,  1009 => 419,  1007 => 418,  995 => 409,  990 => 407,  975 => 395,  959 => 381,  954 => 379,  949 => 376,  946 => 375,  943 => 374,  938 => 372,  933 => 370,  928 => 367,  925 => 366,  922 => 365,  917 => 363,  912 => 360,  909 => 359,  906 => 358,  901 => 356,  896 => 353,  893 => 352,  890 => 351,  884 => 348,  879 => 345,  876 => 344,  873 => 343,  867 => 340,  862 => 337,  859 => 336,  857 => 335,  843 => 324,  825 => 309,  821 => 307,  815 => 303,  804 => 301,  800 => 300,  796 => 299,  790 => 296,  787 => 295,  784 => 294,  781 => 293,  775 => 292,  759 => 283,  755 => 281,  751 => 280,  744 => 279,  741 => 278,  725 => 269,  721 => 267,  717 => 266,  710 => 265,  707 => 264,  691 => 255,  687 => 253,  683 => 252,  676 => 251,  673 => 250,  665 => 247,  661 => 246,  654 => 244,  650 => 243,  643 => 242,  640 => 241,  628 => 238,  625 => 237,  621 => 236,  614 => 235,  611 => 234,  599 => 231,  596 => 230,  592 => 229,  585 => 228,  582 => 227,  577 => 224,  569 => 221,  562 => 219,  560 => 218,  555 => 217,  539 => 215,  537 => 214,  531 => 213,  527 => 211,  523 => 210,  519 => 209,  515 => 208,  508 => 207,  505 => 206,  500 => 203,  492 => 200,  485 => 198,  483 => 197,  478 => 196,  462 => 194,  460 => 193,  454 => 192,  450 => 190,  446 => 189,  442 => 188,  438 => 187,  431 => 186,  428 => 185,  423 => 182,  416 => 180,  409 => 178,  407 => 177,  400 => 176,  396 => 175,  392 => 174,  386 => 173,  378 => 171,  375 => 170,  371 => 169,  367 => 167,  365 => 166,  361 => 164,  355 => 160,  352 => 159,  341 => 157,  337 => 156,  332 => 153,  329 => 152,  324 => 150,  319 => 149,  316 => 148,  311 => 146,  306 => 145,  303 => 144,  295 => 139,  286 => 133,  282 => 131,  274 => 126,  268 => 122,  266 => 121,  263 => 120,  261 => 119,  256 => 116,  250 => 112,  243 => 107,  241 => 106,  237 => 105,  231 => 102,  225 => 98,  221 => 96,  218 => 95,  205 => 92,  202 => 91,  197 => 90,  194 => 89,  184 => 87,  182 => 86,  179 => 85,  177 => 84,  172 => 81,  168 => 79,  165 => 78,  152 => 75,  149 => 74,  144 => 73,  141 => 72,  131 => 70,  129 => 69,  126 => 68,  124 => 67,  118 => 64,  106 => 54,  94 => 50,  91 => 49,  87 => 48,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
