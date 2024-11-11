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
class __TwigTemplate_6571c19cdaf2626b642c416f61c17786293be2cf3e1e37dae45f6f9ef500a425 extends \Twig\Template
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
\t* {
\t\tbox-sizing: border-box;
\t}

\t.img-zoom-container {
\t\tposition: relative;
\t}

\t.img-zoom-lens {
\t\tposition: absolute;
\t\tborder: 1px solid #d4d4d4;
\t\t/*set the size of the lens:*/
\t\twidth: 40px;
\t\theight: 40px;
\t}

\t.img-zoom-result {
\t\tborder: 1px solid #d4d4d4;
\t\t/*set the size of the result div:*/
\t\twidth: 300px;
\t\theight: 300px;
\t}
</style>
<link rel=\"stylesheet\" href=\"assets/css/product.css?v1.1\" />
<link rel=\"stylesheet\" href=\"assets/css/edit.css\" />
<script src=\"https://cdn.shopify.com/s/files/1/2692/1794/files/image-zoom.min.js?v=1678864321\"></script>
<script src=\"assets/js/jquery.zoom.js\"></script>
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 39);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 39);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<div id=\"product-product mt-10\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">";
        // line 53
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    justify-content: space-around;\">

\t\t\t\t<div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1\">
\t\t\t\t\t";
        // line 58
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 59
            echo "\t\t\t\t\t<ul class=\"slider slider-nav addi\">
\t\t\t\t\t\t";
            // line 60
            if (($context["thumb"] ?? null)) {
                // line 61
                echo "\t\t\t\t\t\t<li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 66
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 67
                    echo "\t\t\t\t\t\t<li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 68);
                    echo "\" style=\"margin: auto -5px;\" title=\"";
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
                // line 71
                echo "\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 76
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 77
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 78
            if (($context["thumb"] ?? null)) {
                // line 79
                echo "\t\t\t\t\t\t<li class=\"zoom\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 82
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 83
                    echo "\t\t\t\t\t\t<li class=\"image-additional zoom\">
\t\t\t\t\t\t\t<img id=\"myimage\" src=\"";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 84);
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
                // line 87
                echo "\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 90
        echo "
\t\t\t\t\t<div id=\"myresult\" class=\"img-zoom-result\"></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<h3 class=\"text-capitalize\">";
        // line 95
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t<span>(Wooden Finish)</span>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span style='background:#ED6940; font-size:11.5px; border-radius:6px; padding:3px 5px; color:#f1f1f1'>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>&nbsp;
\t\t\t\t\t\t\t\t";
        // line 101
        echo ($context["rating"] ?? null);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<a style=\"font-size:12px;\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">
\t\t\t\t\t\t\t\t&nbsp;";
        // line 104
        echo ($context["reviews"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t<a style=\"font-size:12px; text-transform:uppercase\" onclick=\"wishlist.add('";
        // line 106
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i>
\t\t\t\t\t\t\t\tadd to wishlist
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t<div class=\" mt-20 mlr-0\">
\t\t\t\t\t\t\t";
        // line 115
        if (($context["price"] ?? null)) {
            // line 116
            echo "\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 117
                echo "\t\t\t\t\t\t\t<h3 id=\"p_pr\">";
                echo ($context["price"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t";
            } else {
                // line 119
                echo "\t\t\t\t\t\t\t<h6>MRP : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<h5>Offer Price : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:#ED6940;font-size:20px;\">";
                // line 121
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<h6 class=\"mt-3\">Your Saving : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:green;font-size:16px;font-weight: 600;\">₹
\t\t\t\t\t\t\t\t\t";
                // line 124
                echo ($context["save"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t(";
                // line 125
                echo ($context["percent1"] ?? null);
                echo "%)</span>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-20 mlr-0\">
\t\t\t\t\t\t\t<p>Ships within
\t\t\t\t\t\t\t\t4 Weeks
\t\t\t\t\t\t\t\tof order.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 136
        if (($context["options"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 139
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 139) == "select")) {
                    // line 140
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 140));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 141
                        echo "\t\t\t\t\t\t<div class=\"text-center\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t<span style=\"background:url(";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 142);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 142);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 142);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 142);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 142);
                        echo "\" class=\"tab_options\"></span>
\t\t\t\t\t\t\t<p style=\"margin-top: 0px; font-size:12px\">
\t\t\t\t\t\t\t\t";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "\t\t\t\t\t\t<div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 148)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 150
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 151));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 152
                        echo "\t\t\t\t\t\t\t\t<option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 152);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 152);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 152);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 153
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 153);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 154
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) {
                            // line 155
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 155);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 155);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 157
                        echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 159
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "radio")) {
                    // line 164
                    echo "\t\t\t\t\t\t<div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 164)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label style=\"float:left\" class=\"control-label float-r\">";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                    echo "</label>
\t\t\t\t\t\t\t";
                    // line 166
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 166));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 167
                        echo "\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 169);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 169);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 169);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 170
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 170)) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 171);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 171);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 171);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 171);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 174
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 174);
                        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 178
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t";
                }
                // line 181
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 181) == "checkbox")) {
                    // line 182
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 182)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 185
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 185));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 186
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 188
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 188);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 188);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 189
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 189)) {
                            // line 190
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 190);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 192);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 193
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 193)) {
                            // line 194
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 194);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 194);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 196
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 202
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 202) == "text")) {
                    // line 203
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 205);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 205);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 208
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 208) == "textarea")) {
                    // line 209
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 209)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 211);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 211);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 214
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 214) == "file")) {
                    // line 215
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 215)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 216);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 219
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "date")) {
                    // line 224
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 227);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
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
                // line 236
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 236) == "datetime")) {
                    // line 237
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 237)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 238);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 240);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
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
                // line 249
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 249) == "time")) {
                    // line 250
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 250)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 251
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 251);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 251);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 253);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
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
                // line 262
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "\t\t\t\t\t\t";
        }
        // line 264
        echo "\t\t\t\t\t\t<div class=\"row mt-30 mlr-0\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 266
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:300px\" class=\"row\">
\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 278
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        // line 280
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row w-100 mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<h4>Product Details</h4>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 290
        if (twig_test_empty(($context["finish"] ?? null))) {
            // line 291
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 293
            echo "\t\t\t\t\t\t\t\t\t<b>Finish:</b>
\t\t\t\t\t\t\t\t\t";
            // line 294
            echo ($context["finish"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 297
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["primary_material"] ?? null))) {
            // line 298
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 300
            echo "\t\t\t\t\t\t\t\t\t<b>Primary Material:</b>
\t\t\t\t\t\t\t\t\t";
            // line 301
            echo ($context["primary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 304
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 306
        if (twig_test_empty(($context["secondary_material"] ?? null))) {
            // line 307
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 309
            echo "\t\t\t\t\t\t\t\t\t<b>Secondary Material:</b>
\t\t\t\t\t\t\t\t\t";
            // line 310
            echo ($context["secondary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 313
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 315
        if (twig_test_empty(($context["dimension_inch"] ?? null))) {
            // line 316
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 318
            echo "\t\t\t\t\t\t\t\t\t<b>Dimensions in Inch:</b>
\t\t\t\t\t\t\t\t\t";
            // line 319
            echo ($context["dimension_inch"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 322
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 324
        if (twig_test_empty(($context["warranty"] ?? null))) {
            // line 325
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 327
            echo "\t\t\t\t\t\t\t\t\t<b>Warranty:</b>
\t\t\t\t\t\t\t\t\t";
            // line 328
            echo ($context["warranty"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 331
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 333
        if (twig_test_empty(($context["seating_hight"] ?? null))) {
            // line 334
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 336
            echo "\t\t\t\t\t\t\t\t\t<b>Seating Height:</b>
\t\t\t\t\t\t\t\t\t";
            // line 337
            echo ($context["seating_hight"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 340
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 341
        if (twig_test_empty(($context["hand_rest"] ?? null))) {
            // line 342
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 344
            echo "\t\t\t\t\t\t\t\t\t<b>Hand Rest Height:</b>
\t\t\t\t\t\t\t\t\t";
            // line 345
            echo ($context["hand_rest"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 348
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 349
        if (twig_test_empty(($context["ground_cle"] ?? null))) {
            // line 350
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t<b>Ground Clearance:</b>
\t\t\t\t\t\t\t\t\t";
            // line 353
            echo ($context["ground_cle"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 356
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 357
        if (twig_test_empty(($context["style"] ?? null))) {
            // line 358
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 360
            echo "\t\t\t\t\t\t\t\t\t<b>Style:</b>
\t\t\t\t\t\t\t\t\t";
            // line 361
            echo ($context["style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 364
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 365
        if (twig_test_empty(($context["fabric"] ?? null))) {
            // line 366
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 368
            echo "\t\t\t\t\t\t\t\t\t<b>Fabric:</b>
\t\t\t\t\t\t\t\t\t";
            // line 369
            echo ($context["fabric"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 372
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 373
        if (twig_test_empty(($context["dimension_cm"] ?? null))) {
            // line 374
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 376
            echo "\t\t\t\t\t\t\t\t\t<b>Dimension In CM:
\t\t\t\t\t\t\t\t\t</b>

\t\t\t\t\t\t\t\t\t";
            // line 379
            echo ($context["dimension_cm"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 382
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 383
        if (twig_test_empty(($context["sitting_dimension"] ?? null))) {
            // line 384
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 386
            echo "\t\t\t\t\t\t\t\t\t<b>Sitting Dimension:</b>
\t\t\t\t\t\t\t\t\t";
            // line 387
            echo ($context["sitting_dimension"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 391
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 392
        if (twig_test_empty(($context["mattress"] ?? null))) {
            // line 393
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 395
            echo "\t\t\t\t\t\t\t\t\t<b>Mattress Size:</b>
\t\t\t\t\t\t\t\t\t";
            // line 396
            echo ($context["mattress"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 400
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 401
        if (twig_test_empty(($context["weight"] ?? null))) {
            // line 402
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 404
            echo "\t\t\t\t\t\t\t\t\t<b>Weight:</b>
\t\t\t\t\t\t\t\t\t";
            // line 405
            echo ($context["weight"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 407
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row d-none w-100 mt-10\">
\t\t<div class=\"col-sm-10 offset-sm-1\">
\t\t\t<ul class=\"nav nav-tabs tabs-ul de\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tab-description\" class=\"active\" data-toggle=\"tab\">";
        // line 423
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 425
        if (($context["attribute_groups"] ?? null)) {
            // line 426
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 427
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 430
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 431
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 432
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 435
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 437
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 438
        if (($context["attribute_groups"] ?? null)) {
            // line 439
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 442
                echo "\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<strong>";
                // line 445
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 445);
                echo "</strong>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                // line 450
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 450));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 451
                    echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                    // line 452
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 452);
                    echo "</td>
\t\t\t\t\t\t\t\t<td>";
                    // line 453
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 453);
                    echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 456
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 461
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 462
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t<h2>";
            // line 465
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t";
            // line 466
            if (($context["review_guest"] ?? null)) {
                // line 467
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 469
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 470
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 475
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 477
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 482
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<span class=\"star-rating star-5\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-1\" name=\"rating\" value=\"1\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-2\" name=\"rating\" value=\"2\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-3\" name=\"rating\" value=\"3\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-4\" name=\"rating\" value=\"4\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-5\" name=\"rating\" value=\"5\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 497
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 500
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 504
                echo "\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t";
            }
            // line 506
            echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 509
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br /><br />

<section style=\"background:#f1f1f1; padding:20px 0px\">
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<ul class=\"nav nav-tabs tabs-ul des-tab\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-overview\" class=\"active\" data-toggle=\"tab\">Overview</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-care\" data-toggle=\"tab\">Care & Instruction</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-delivery\" data-toggle=\"tab\">Delivery & Installation</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-warranty\" data-toggle=\"tab\">Warranty</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-cancel\" data-toggle=\"tab\">Cancellations & Return</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div style=\"background:#fff;padding:10px 10px;max-height: 200px;overflow-y: scroll;\" class=\"tab-content des-con\">
\t\t\t\t\t<div class=\"tab-pane active p-10\" id=\"tab-overview\">
\t\t\t\t\t\t";
        // line 539
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-care\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. Regularly flick the furniture.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t2. Deterge the timbered surface with a neat, fine usually soft polyester fiber cloth dewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a spill. Please make sure you do not use rugged stuff or rub the spot pronto.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold items on the timbered surface. Please do not keep extreme hot objects like baking dish, saucepan or griddle even on a hot pad.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture is not kept next to windows or in open places, where it is exposed to upright sunlight, moisture & water.</li>
\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your furniture, by keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly chemicals & alcohol, as it will harm the color finish, wood’s texture & durability of the furniture.</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\" style=\"\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>1. Shipping address can’t be changed, once the product is shipped from our warehouse. Customer have to receive the product on the same address or the shipment will return to our warehouse.</li>
\t\t\t\t\t\t\t<li>2. Your shipment will be held for 2 days at the nearest delivery hub, if you’ve failed to receive the delivery. After this, Woodpeel reserve the right to change the location of the shipment.</li>
\t\t\t\t\t\t\t<li>3. In case of reshipping customer have to borne charges of both side transportation.</li>
\t\t\t\t\t\t\t<li>4. Our team will stay in touch with you for a hassle-free delivery.</li>
\t\t\t\t\t\t\t<li>5. Only first attempt of delivery at your shipping address is free. Customer have to borne extra delivery charges for second attempt, if a customer misses’ delivery.</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>6. In absence of a service lift, our delivery partner shall only make a delivery to the ground floor of your apartment. Customer have to borne extra charges per floor on delivery, to the customer’s floor (on request) in such cases.</li>
\t\t\t\t\t\t\t<li>7. If customer want time-specific or weekend delivery, then extra delivery charges will be applicable.</li>

\t\t\t\t\t\t\t<h3>Installation:</h3>

\t\t\t\t\t\t\t<li>1) Depending on the situation or condition, your product may or may not require installation assistance upon delivery.</li>
\t\t\t\t\t\t\t<li>2) If the delivery condition is:

\t\t\t\t\t\t\t\tPre-assembled – no installation is required, the product comes fully-assembled & ready to use.

\t\t\t\t\t\t\t\tAssembly Required – expert assistance is required, for which Woodpeel provide carpenters to carry out proper installation, only in urban cities. If our carpenter is not available at your location, we’ll refund our standard installation charges (charges will be decided by Woodpeel as per the product’s condition & situation).</li>


\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-warranty\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>This product comes with 1 year warranty, limited warranty covers manufacturing defects, termites & wood borer infestations. As per the industry standards, unevenness of up to 5mm is accepted widely, due to differences in floor & surface levels, this is not covered in warranty.This limited warranty does not implement to the following issues:</li>
\t\t\t\t\t\t\t<li>1. Normal depreciation of the product over elongated use.</li>
\t\t\t\t\t\t\t<li>2. Scratches, cuts or damages due to wrong cleaning methods or impacts/accidents.</li>
\t\t\t\t\t\t\t<li>3. Product gets damaged due to wrong installation or assembly by the customer.</li>
\t\t\t\t\t\t\t<li>4. Cracks developed due to dislocation, shifting or reshuffle of the product.</li>
\t\t\t\t\t\t\t<li>5. Fading due to exposure to upright sunlight.</li>
\t\t\t\t\t\t\t<li>6. Wood decaying due to consistent exposure to water or wetness.</li>
\t\t\t\t\t\t\t<li>7. Upholstery fabrics such as seat covers have no warranty.</li>
\t\t\t\t\t\t\t<li>8. Use of wood-unfriendly harsh chemicals or non-norm dry-cleaning procedures.</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-cancel\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<h3>Cancellation Policies:</h3>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. What are the policies if customer have a change of mind after placing an order?<br>In case of change of mind after placing an order, the time frame is 24hours to cancel an order (3% of the total amount paid by customer will be deducted as cancellation charges). But customized products have no such policies meaning it can’t be cancelled.</li>
\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the order?<br>Yes, it is possible to cancel but, it can only be cancelled before the product is shipped from our warehouse. Once the shipment is hand overed to our delivery team, we can’t cancel the order.</li>
\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling the order after 24hours?<br>A cancellation fee of 6% will be applied on the amount paid by you while processing the refund.</li>
\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount paid by customer? Or Can customer use the amount afterwards for placing a new order?<br>
\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit note of full amount paid by you & You can use it to place a new order. Customer can place the new order only in the same financial year, in which previous order was placed or the credit note was issued. Same cancellation charges will be applicable if the customer asks for refund, after the credit note is issued (on customer request) by Woodpeel team.<br>

\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned above in cancellation policies section.<br><br>

\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a carpenter in case of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll replace.<br><br>

\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace. Eligibility for replacement (e.g., imbalance or unevenness of more than 5mm, wooden joints opening, termites & wood borer infestations etc.).<br><br>
\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like appearance or texture (especially for solid wood products) are not defects.<br><br>

\t\t\t\t\t\t\t\t3) What if the received product is different?
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 632
        if (($context["products"] ?? null)) {
            // line 633
            echo "<section class=' ptb-30'>
\t<div class=\"container\">
\t\t<div class=\"row text-center w-100\">
\t\t\t<div class=\"col-sm-12 w-100\">
\t\t\t\t<h3 style=\"text-align: center; margin-bottom: 20px\">Related Products
\t\t\t\t\t<span class=\"hb\" style=\"text-align: -webkit-center;\"></span>
\t\t\t\t</h3>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
            // line 644
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 645
                echo "\t\t\t<div class=\"col-sm-3\">
\t\t\t\t<div class=\"product-thumb product-card transition text-center\">
\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t<a href=\"";
                // line 648
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 648);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 649
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 649);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 649);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 649);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t<p class=\"product_name mt-10 font-16 mt-10\">";
                // line 653
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 653);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 655
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 655)) {
                    // line 656
                    echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                    // line 657
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 657)) {
                        // line 658
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 658);
                        echo "
\t\t\t\t\t\t";
                    } else {
                        // line 660
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 660);
                        echo "</span>
\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 661
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 661);
                        echo "</span><br>
\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 662
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 662);
                        echo "% OFF</span>
\t\t\t\t\t\t";
                    }
                    // line 664
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 664)) {
                        // line 665
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t";
                        // line 666
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 666);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 668
                    echo "\t\t\t\t\t</p>
\t\t\t\t\t";
                }
                // line 670
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 673
            echo "\t\t</div>
\t\t<br />
</section>
";
        }
        // line 677
        echo ($context["column_right"] ?? null);
        echo "


<script type=\"text/javascript\">
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t// -->
</script>
<script type=\"text/javascript\">
\t<!--
\t\$('#button-cart').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {

\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\t\talert(json['error']['option'][i]);
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

\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\t\t\t\t\t\$('.cart_backdrop').fadeIn();
\t\t\t\t\t\$(\".cart\").animate({
\t\t\t\t\t\tright: '0px'
\t\t\t\t\t})

\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t//
\t-->
</script>
<script type=\"text/javascript\">
\t<!--
\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 769
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
\t});

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 774
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
\t});

\t\$('.time').datetimepicker({
\t\tlanguage: '";
        // line 780
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
\t});

\t\$('button[id^=\\'button-upload\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function() {
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
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
\t//
\t-->
</script>
<script type=\"text/javascript\">
\t<!--
\t\$('#review').delegate('.pagination a', 'click', function(e) {
\t\te.preventDefault();

\t\t\$('#review').fadeOut('slow');

\t\t\$('#review').load(this.href);

\t\t\$('#review').fadeIn('slow');
\t});

\t\$('#review').load('index.php?route=product/product/review&product_id=    ";
        // line 850
        echo ($context["product_id"] ?? null);
        echo "');

\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=    ";
        // line 854
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
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

\t\$(document).ready(function() {
\t\tvar old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));


\t\t\$('.sizes').change(function() {
\t\t\tvar p = \$(this).attr('data-price');
\t\t\tvar sig = \$(this).attr('data-sign');
\t\t\tvar q = p.replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, '');
\t\t\tvar x = Number(q);

\t\t\tif (sig == \"+\") {
\t\t\t\tvar new_p = old_price + x;
\t\t\t} else {
\t\t\t\tvar new_p = old_price - x;
\t\t\t}


\t\t\t// \$(\"#p_pr\").text('\$' + new_p);

\t\t});

\t\t\$(\"#add_quantity\").click(function() {

\t\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;

\t\t\t\$(\".iq\").val(b);
\t\t})
\t\t\$(\"#less_quantity\").click(function() {
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
\t\t\tnextArrow: '<button style=\"width: 25px;top: 220px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 220px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

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


\t\$(document).ready(function(e) {
\t\tvar link = getUrlParameter('a');


\t\tif (link) {
\t\t\t\$(\".tab_options\").each(function() {
\t\t\t\tif (\$.trim(\$(this).siblings().html()).toLocaleLowerCase() == link.toLocaleLowerCase()) {
\t\t\t\t\t\$(this).css('border', '2px solid #413B98');
\t\t\t\t\t\$(this).addClass('current');
\t\t\t\t\tvar val = \$(this).attr(\"data-val\");

\t\t\t\t\t\$(\"select option\").each(function(index, element) {
\t\t\t\t\t\tif (\$(this).val() == val) {
\t\t\t\t\t\t\t\$(this).prop(\"selected\", true);
\t\t\t\t\t\t}

\t\t\t\t\t})

\t\t\t\t}
\t\t\t})
\t\t} else {
\t\t\tif (\$(\".tab_options\").length > 0) {

\t\t\t\tvar val;

\t\t\t\t\$(\"select option\").each(function(index, element) {
\t\t\t\t\tif (\$(this).attr(\"data-link\") == \"\") {
\t\t\t\t\t\t\$(this).prop(\"selected\", true);
\t\t\t\t\t\tval = \$(this).val();
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t\$(\".tab_options\").each(function() {
\t\t\t\t\tif (\$(this).attr(\"data-val\") == val) {
\t\t\t\t\t\t\$(this).css('border', '2px solid #003B30');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t}
\t\t\$(\".tab_options\").click(function() {
\t\t\tif (!\$(this).hasClass('current')) {
\t\t\t\tvar val = \$(this).attr(\"data-val\");

\t\t\t\t\$(\"select option\").each(function(index, element) {
\t\t\t\t\tif (\$(this).val() == val) {
\t\t\t\t\t\tif (\$(this).attr(\"data-link\")) {
\t\t\t\t\t\t\t\$(this).prop(\"selected\", true);
\t\t\t\t\t\t\twindow.location = \$(this).attr(\"data-link\") + '?a=' + \$.trim(\$(this).html());

\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t})

\t});

\tvar getUrlParameter = function getUrlParameter(sParam) {
\t\tvar sPageURL = window.location.search.substring(1),
\t\t\tsURLVariables = sPageURL.split('&'),
\t\t\tsParameterName,
\t\t\ti;

\t\tfor (i = 0; i < sURLVariables.length; i++) {
\t\t\tsParameterName = sURLVariables[i].split('=');

\t\t\tif (sParameterName[0] === sParam) {
\t\t\t\treturn sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
\t\t\t}
\t\t}
\t};


\t//
\t-->
</script>
<script>
\tfunction imageZoom(imgID, resultID) {
\t\tvar img,
\t\t\tlens,
\t\t\tresult,
\t\t\tcx,
\t\t\tcy;
\t\timg = document.getElementById(imgID);
\t\tresult = document.getElementById(resultID);
\t\t/*create lens:*/
\t\tlens = document.createElement(\"DIV\");
\t\tlens.setAttribute(\"class\", \"img-zoom-lens\");
\t\t/*insert lens:*/

\t\timg.parentElement.insertBefore(lens, img);

\t\t/*calculate the ratio between result DIV and lens:*/
\t\tcx = result.offsetWidth / lens.offsetWidth;
\t\tcy = result.offsetHeight / lens.offsetHeight;

\t\t/*set background properties for the result DIV:*/
\t\tresult.style.backgroundImage = \"url('\" + img.src + \"')\";
\t\tresult.style.backgroundSize = (img.width * cx) + \"px \" + (
\t\t\timg.height * cy
\t\t) + \"px\";
\t\t/*execute a function when someone moves the cursor over the image, or the lens:*/
\t\tlens.addEventListener(\"mousemove\", moveLens);
\t\timg.addEventListener(\"mousemove\", moveLens);
\t\t/*and also for touch screens:*/
\t\tlens.addEventListener(\"touchmove\", moveLens);
\t\timg.addEventListener(\"touchmove\", moveLens);

\t\tfunction moveLens(e) {
\t\t\tvar pos,
\t\t\t\tx,
\t\t\t\ty;
\t\t\t/*prevent any other actions that may occur when moving over the image:*/
\t\t\te.preventDefault();
\t\t\t/*get the cursor's x and y positions:*/
\t\t\tpos = getCursorPos(e);
\t\t\t/*calculate the position of the lens:*/
\t\t\tx = pos.x - (lens.offsetWidth / 2);
\t\t\ty = pos.y - (lens.offsetHeight / 2);
\t\t\t/*prevent the lens from being positioned outside the image:*/
\t\t\tif (x > img.width - lens.offsetWidth) {
\t\t\t\tx = img.width - lens.offsetWidth;
\t\t\t}
\t\t\tif (x < 0) {
\t\t\t\tx = 0;
\t\t\t}
\t\t\tif (y > img.height - lens.offsetHeight) {
\t\t\t\ty = img.height - lens.offsetHeight;
\t\t\t}
\t\t\tif (y < 0) {
\t\t\t\ty = 0;
\t\t\t}
\t\t\t/*set the position of the lens:*/
\t\t\tlens.style.left = x + \"px\";
\t\t\tlens.style.top = y + \"px\";
\t\t\t/*display what the lens \"sees\":*/
\t\t\tresult.style.backgroundPosition = \"-\" + (
\t\t\t\tx * cx
\t\t\t) + \"px -\" + (
\t\t\t\ty * cy
\t\t\t) + \"px\";
\t\t}

\t\tfunction getCursorPos(e) {
\t\t\tvar a,
\t\t\t\tx = 0,
\t\t\t\ty = 0;
\t\t\te = e || window.event;
\t\t\t/*get the x and y positions of the image:*/
\t\t\ta = img.getBoundingClientRect();
\t\t\t/*calculate the cursor's x and y coordinates, relative to the image:*/
\t\t\tx = e.pageX - a.left;
\t\t\ty = e.pageY - a.top;
\t\t\t/*consider any page scrolling:*/
\t\t\tx = x - window.pageXOffset;
\t\t\ty = y - window.pageYOffset;
\t\t\treturn {
\t\t\t\tx: x,
\t\t\t\ty: y
\t\t\t};
\t\t}
\t}
</script>
<script>
\t// Initiate zoom effect:
\timageZoom(\"myimage\", \"myresult\");
</script>
";
        // line 1118
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
        return array (  1919 => 1118,  1652 => 854,  1645 => 850,  1572 => 780,  1563 => 774,  1555 => 769,  1460 => 677,  1454 => 673,  1446 => 670,  1442 => 668,  1437 => 666,  1432 => 665,  1429 => 664,  1424 => 662,  1420 => 661,  1415 => 660,  1409 => 658,  1407 => 657,  1404 => 656,  1402 => 655,  1397 => 653,  1386 => 649,  1382 => 648,  1377 => 645,  1373 => 644,  1360 => 633,  1358 => 632,  1262 => 539,  1230 => 509,  1225 => 506,  1219 => 504,  1212 => 500,  1206 => 497,  1188 => 482,  1180 => 477,  1175 => 475,  1167 => 470,  1163 => 469,  1159 => 467,  1157 => 466,  1153 => 465,  1148 => 462,  1145 => 461,  1140 => 458,  1133 => 456,  1124 => 453,  1120 => 452,  1117 => 451,  1113 => 450,  1105 => 445,  1100 => 442,  1096 => 441,  1092 => 439,  1090 => 438,  1086 => 437,  1082 => 435,  1076 => 432,  1073 => 431,  1070 => 430,  1064 => 427,  1061 => 426,  1059 => 425,  1054 => 423,  1036 => 407,  1031 => 405,  1028 => 404,  1024 => 402,  1022 => 401,  1019 => 400,  1012 => 396,  1009 => 395,  1005 => 393,  1003 => 392,  1000 => 391,  993 => 387,  990 => 386,  986 => 384,  984 => 383,  981 => 382,  975 => 379,  970 => 376,  966 => 374,  964 => 373,  961 => 372,  955 => 369,  952 => 368,  948 => 366,  946 => 365,  943 => 364,  937 => 361,  934 => 360,  930 => 358,  928 => 357,  925 => 356,  919 => 353,  916 => 352,  912 => 350,  910 => 349,  907 => 348,  901 => 345,  898 => 344,  894 => 342,  892 => 341,  889 => 340,  883 => 337,  880 => 336,  876 => 334,  874 => 333,  870 => 331,  864 => 328,  861 => 327,  857 => 325,  855 => 324,  851 => 322,  845 => 319,  842 => 318,  838 => 316,  836 => 315,  832 => 313,  826 => 310,  823 => 309,  819 => 307,  817 => 306,  813 => 304,  807 => 301,  804 => 300,  800 => 298,  797 => 297,  791 => 294,  788 => 293,  784 => 291,  782 => 290,  767 => 280,  762 => 278,  747 => 266,  743 => 264,  740 => 263,  734 => 262,  718 => 253,  711 => 251,  704 => 250,  701 => 249,  685 => 240,  678 => 238,  671 => 237,  668 => 236,  652 => 227,  645 => 225,  638 => 224,  635 => 223,  627 => 220,  623 => 219,  616 => 217,  612 => 216,  605 => 215,  602 => 214,  590 => 211,  584 => 210,  577 => 209,  574 => 208,  562 => 205,  556 => 204,  549 => 203,  546 => 202,  541 => 199,  533 => 196,  526 => 194,  524 => 193,  519 => 192,  503 => 190,  501 => 189,  495 => 188,  491 => 186,  487 => 185,  483 => 184,  479 => 183,  472 => 182,  469 => 181,  464 => 178,  454 => 174,  451 => 173,  435 => 171,  433 => 170,  423 => 169,  419 => 167,  415 => 166,  411 => 165,  404 => 164,  401 => 163,  395 => 159,  388 => 157,  381 => 155,  379 => 154,  375 => 153,  366 => 152,  362 => 151,  358 => 150,  352 => 149,  345 => 148,  335 => 144,  322 => 142,  319 => 141,  314 => 140,  311 => 139,  307 => 138,  304 => 137,  302 => 136,  294 => 130,  290 => 128,  284 => 125,  280 => 124,  274 => 121,  268 => 119,  262 => 117,  259 => 116,  257 => 115,  245 => 106,  240 => 104,  234 => 101,  225 => 95,  218 => 90,  214 => 88,  211 => 87,  198 => 84,  195 => 83,  190 => 82,  187 => 81,  177 => 79,  175 => 78,  172 => 77,  170 => 76,  166 => 74,  162 => 72,  159 => 71,  146 => 68,  143 => 67,  138 => 66,  135 => 65,  125 => 62,  122 => 61,  120 => 60,  117 => 59,  115 => 58,  107 => 53,  95 => 43,  83 => 39,  80 => 38,  76 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
