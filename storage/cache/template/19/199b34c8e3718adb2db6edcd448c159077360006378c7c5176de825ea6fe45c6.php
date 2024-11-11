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
class __TwigTemplate_abb511537aa20444561d289c53457bf1223a317b870862ba93aa8ba747b523b0 extends \Twig\Template
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
\t.arrow {
\t\tdisplay: none;
\t}

\t.section {
\t\tpadding-left: 8%;
\t\tpadding-right: 8%;
\t}

\t.main-img .slick-list .slick-track .slick-slide div {
\t\tjustify-content: center;
\t\tdisplay: flex;
\t\theight: 50%;
\t}

\t.main-img .slick-list .slick-track .slick-slide div li {
\t\twidth: auto !important;

\t}
</style>
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 31
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 32);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 32);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 46
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t<div class=\"col-sm-1 mob_dnone\">
\t\t\t\t\t";
        // line 49
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 50
            echo "\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t";
            // line 51
            if (($context["thumb"] ?? null)) {
                // line 52
                echo "\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 55
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 56
                    echo "\t\t\t\t\t\t<li class=\"image-additional \">
\t\t\t\t\t\t\t<img src=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 57);
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
                // line 60
                echo "\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 63
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t";
        // line 66
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 67
            echo "\t\t\t\t\t<ul class=\"slider slider-for main-img\">
\t\t\t\t\t\t";
            // line 68
            if (($context["thumb"] ?? null)) {
                // line 69
                echo "\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" style=\"height:100%\"
\t\t\t\t\t\t\t\talt=\"";
                // line 70
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 73
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 74
                    echo "\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 75
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 75);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" style=\"height:100%\"
\t\t\t\t\t\t\t\talt=\"";
                    // line 76
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4 row\">
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<h2 class=\"text-capitalize\" style=\"    font-weight: 600!important;\">";
        // line 86
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\"><a class=\"wishlist_link \" onclick=\"wishlist.add('";
        // line 88
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t\t";
        // line 89
        if ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "wish", [], "any", false, false, false, 89)) {
            // line 90
            echo "
\t\t\t\t\t\t\t<i class=\"pe-7s-like\" style=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t";
        } else {
            // line 95
            echo "
\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t";
        }
        // line 99
        echo "\t\t\t\t\t\t</a></div>
\t\t\t\t\t<div class=\"col-md-10\">";
        // line 100
        if (($context["review_status"] ?? null)) {
            // line 101
            echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo " <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t\t\t<hr class=\"m-0\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<p>Add a touch of shimmer to your style with these stud earrings, crafted in 18 karat rose gold,
\t\t\t\t\t\t\tstudded with diamonds. Stone Clarity: I1</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t";
        // line 124
        if (($context["price"] ?? null)) {
            // line 125
            echo "\t\t\t\t\t\t<ul class=\"list-unstyled \">
\t\t\t\t\t\t\t";
            // line 126
            if ( !($context["special"] ?? null)) {
                // line 127
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4><span>Price </span> ";
                // line 128
                echo ($context["price"] ?? null);
                echo "</h4>
\t\t\t\t\t\t\t\t<p>Price inclusive of all taxes.See full Price Breakup</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } else {
                // line 132
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span style=\"text-decoration: line-through;\"> ";
                // line 133
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<h4><span>Price </span> ";
                // line 136
                echo ($context["special"] ?? null);
                echo "</h4>
\t\t\t\t\t\t\t\t<p>Price inclusive of all taxes.See full Price Breakup</p>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t";
            if (($context["tax"] ?? null)) {
                // line 141
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 142
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 145
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
                // line 146
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 149
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 153
                    echo "\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 153);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 153);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "\t\t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t\t</ul>


\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-md-10\" id=\"product\">
\t\t\t\t\t\t";
        // line 164
        if (($context["options"] ?? null)) {
            // line 165
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h3>";
            // line 166
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t\t\t\t";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 168
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "select")) {
                    // line 169
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    // line 171
                    echo "</label>
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "]\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 173
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 174
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 175
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 175));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 176
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 176);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 176);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 177
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 177)) {
                            // line 178
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 178);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 178);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 180
                        echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 185
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 185) == "radio")) {
                    // line 186
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 186)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 187);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 188
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 189
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 189));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 190
                        echo "\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 192);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 193);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 194
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 194)) {
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 195);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 196
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 196);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 196);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 196);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 199
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 199);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 200
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200)) {
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 201);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 201);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 203
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 206
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 209) == "checkbox")) {
                    // line 210
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 210)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 211);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 213
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 213));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 214
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 216
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                        echo "][]\"
\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 217);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 218
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 218)) {
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 219);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\talt=\"";
                            // line 220
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 220);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 220)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 220);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 220);
                                echo " ";
                            }
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 223);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 224
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 224)) {
                            // line 225
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 225);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 225);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 227
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 233) == "text")) {
                    // line 234
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                    // line 236
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 237);
                    echo "\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 242
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 242) == "textarea")) {
                    // line 243
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 243)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 244
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 244);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 244);
                    // line 245
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 246
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 246);
                    echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\tplaceholder=\"";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 247);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                    echo "\"
\t\t\t\t\t\t\t\tclass=\"form-control\">";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 248);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 251
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 251) == "file")) {
                    // line 252
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 252)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    echo "\"
\t\t\t\t\t\t\t\tdata-loading-text=\"";
                    // line 255
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 257
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 258);
                    echo "]\" value=\"\"
\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 262
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 262) == "date")) {
                    // line 263
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 263)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 264);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 264);
                    // line 265
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 267
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 268);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 269
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 269);
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
                // line 278
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 278) == "datetime")) {
                    // line 279
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 279)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 280);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 280);
                    // line 281
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 283
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 284
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 284);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 285
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 285);
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
                // line 294
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 294) == "time")) {
                    // line 295
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 295)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 296
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 296);
                    // line 297
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 299
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 299);
                    echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 300
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 300);
                    echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 301);
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
                // line 310
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            echo "\t\t\t\t\t\t";
        }
        // line 312
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 313
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<h3>";
            // line 314
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 317
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 319
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 319);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 319);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 325
        echo "
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 327
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\"
\t\t\t\t\t\t\t\tclass=\"form-control iq\" />

\t\t\t\t\t\t\t<div id=\"counter-btn\"
\t\t\t\t\t\t\t\tstyle=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:300px\" class=\"row\">
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
        // line 350
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 352
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\t\t\t\t\tclass=\"btn btn-primary btn-lg btn-block\">";
        // line 353
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 356
        if ((($context["minimum"] ?? null) > 1)) {
            // line 357
            echo "\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t";
            // line 359
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 362
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<h4>Description</h4>
\t\t\t\t\t\t";
        // line 365
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t<hr />
\t\t\t\t\t\t";
        // line 367
        echo ($context["meta_desc"] ?? null);
        echo "
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 374
        if (($context["products"] ?? null)) {
            // line 375
            echo "
\t\t\t<div class=\"row pt-5\">
\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t<h3>You May Also Like</h3>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr />
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 384
            $context["i"] = 0;
            // line 385
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 386
                echo "
\t\t\t\t<div class=\"col-md-3 col-6 text-center\">
\t\t\t\t\t<div class=\"product-thumb transition text-center\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                // line 390
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 390);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 390);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 390);
                echo "\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 391
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 391);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t\t<h4 class=\"mt-10\">";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 394);
                echo "</h4>
\t\t\t\t\t\t\t";
                // line 395
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 395)) {
                    // line 396
                    echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t";
                    // line 397
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 398
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 398) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 402
                            echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 407
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 408
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 410
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 410)) {
                    // line 411
                    echo "\t\t\t\t\t\t\t<p class=\"price\" style=\"\">
\t\t\t\t\t\t\t\t";
                    // line 412
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 412)) {
                        // line 413
                        echo "\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 413);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 415
                        echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 415);
                        echo "</span>
\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"    text-decoration: line-through;\">";
                        // line 416
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 416);
                        // line 417
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 419
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 419)) {
                        // line 420
                        echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 421
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 421);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 423
                    echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 425
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                // line 428
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 429
                    echo "\t\t\t\t<div class=\"clearfix visible-md visible-sm\"></div>
\t\t\t\t";
                } elseif ((                // line 430
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 431
                    echo "\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t";
                } elseif ((((                // line 432
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 433
                    echo "\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t";
                }
                // line 435
                echo "\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 436
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 437
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 439
        echo "\t\t\t";
        if (($context["tags"] ?? null)) {
            // line 440
            echo "\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 442
                echo "\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 442);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 442);
                    echo "</a>,
\t\t\t\t\t";
                } else {
                    // line 444
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 444);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 444);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 446
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "\t\t\t</p>
\t\t\t";
        }
        // line 449
        echo "\t\t</div>
\t</div>
</div>
<br /><br />
<script type=\"text/javascript\">


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
\t<!-
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
//--></script>
<script type=\"text/javascript\">
\t<!-
\t\$('.date').datetimepicker({language: '";
        // line 538
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 540
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 542
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
//--></script>
<script type=\"text/javascript\">
\t<!-
\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id= ";
        // line 608
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id= ";
        // line 612
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
//--></script>


<script>
\t\$(document).ready(function () {
\t\t\$(\"#add_quantity\").click(function () {
\t\t\tconsole.log('Adding quantity');
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;

\t\t\t\$(\".iq\").val(b);
\t\t})
\t\t\$(\"#less_quantity\").click(function () {
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) - 1;
\t\t\tif (b < 0) {
\t\t\t\tb = 0;
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

\t}</script>";
        // line 822
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
        return array (  1547 => 822,  1334 => 612,  1327 => 608,  1258 => 542,  1253 => 540,  1248 => 538,  1157 => 449,  1153 => 447,  1147 => 446,  1139 => 444,  1129 => 442,  1125 => 441,  1120 => 440,  1117 => 439,  1113 => 437,  1107 => 436,  1104 => 435,  1100 => 433,  1098 => 432,  1095 => 431,  1093 => 430,  1090 => 429,  1088 => 428,  1083 => 425,  1079 => 423,  1074 => 421,  1069 => 420,  1066 => 419,  1062 => 417,  1060 => 416,  1055 => 415,  1049 => 413,  1047 => 412,  1044 => 411,  1041 => 410,  1037 => 408,  1031 => 407,  1024 => 402,  1016 => 398,  1012 => 397,  1009 => 396,  1007 => 395,  1003 => 394,  997 => 391,  989 => 390,  983 => 386,  978 => 385,  976 => 384,  965 => 375,  963 => 374,  953 => 367,  948 => 365,  943 => 362,  937 => 359,  933 => 357,  931 => 356,  925 => 353,  921 => 352,  916 => 350,  890 => 327,  886 => 325,  880 => 321,  869 => 319,  865 => 318,  861 => 317,  855 => 314,  852 => 313,  849 => 312,  846 => 311,  840 => 310,  828 => 301,  824 => 300,  820 => 299,  816 => 297,  812 => 296,  805 => 295,  802 => 294,  790 => 285,  786 => 284,  782 => 283,  778 => 281,  774 => 280,  767 => 279,  764 => 278,  752 => 269,  748 => 268,  744 => 267,  740 => 265,  736 => 264,  729 => 263,  726 => 262,  720 => 259,  716 => 258,  712 => 257,  707 => 255,  703 => 254,  699 => 253,  692 => 252,  689 => 251,  683 => 248,  677 => 247,  673 => 246,  670 => 245,  666 => 244,  659 => 243,  656 => 242,  647 => 238,  641 => 237,  638 => 236,  634 => 235,  627 => 234,  624 => 233,  619 => 230,  611 => 227,  604 => 225,  602 => 224,  597 => 223,  583 => 220,  578 => 219,  576 => 218,  572 => 217,  568 => 216,  564 => 214,  560 => 213,  556 => 212,  552 => 211,  545 => 210,  542 => 209,  537 => 206,  529 => 203,  522 => 201,  520 => 200,  515 => 199,  501 => 196,  496 => 195,  494 => 194,  490 => 193,  486 => 192,  482 => 190,  478 => 189,  474 => 188,  470 => 187,  463 => 186,  460 => 185,  455 => 182,  448 => 180,  441 => 178,  439 => 177,  432 => 176,  428 => 175,  424 => 174,  420 => 173,  416 => 172,  413 => 171,  409 => 170,  402 => 169,  399 => 168,  395 => 167,  391 => 166,  388 => 165,  386 => 164,  380 => 160,  374 => 156,  371 => 155,  360 => 153,  356 => 152,  351 => 149,  348 => 148,  343 => 146,  338 => 145,  335 => 144,  330 => 142,  325 => 141,  322 => 140,  315 => 136,  309 => 133,  306 => 132,  299 => 128,  296 => 127,  294 => 126,  291 => 125,  289 => 124,  280 => 117,  275 => 114,  269 => 113,  262 => 108,  254 => 104,  250 => 103,  246 => 101,  244 => 100,  241 => 99,  235 => 95,  228 => 90,  226 => 89,  222 => 88,  217 => 86,  211 => 82,  207 => 80,  204 => 79,  195 => 76,  189 => 75,  186 => 74,  181 => 73,  178 => 72,  173 => 70,  166 => 69,  164 => 68,  161 => 67,  159 => 66,  154 => 63,  150 => 61,  147 => 60,  134 => 57,  131 => 56,  126 => 55,  123 => 54,  113 => 52,  111 => 51,  108 => 50,  106 => 49,  100 => 46,  88 => 36,  76 => 32,  73 => 31,  69 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
