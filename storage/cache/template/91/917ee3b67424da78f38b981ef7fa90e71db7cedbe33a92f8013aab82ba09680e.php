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
class __TwigTemplate_4d373fbbb2e6de4ae17ea8f89ae694c2d55195d1b921c1fd0e990ab18813403c extends \Twig\Template
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
<link rel=\"stylesheet\" href=\"assets/css/product.css?v1.1\"/>
<link rel=\"stylesheet\" href=\"assets/css/edit.css\"/>
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
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 39);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 39);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
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
<br/>
<div id=\"product-product mt-10\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">";
        // line 53
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    justify-content: space-around;\">

\t\t\t\t<div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1\">
\t\t\t\t\t";
        // line 58
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 59
            echo "\t\t\t\t\t\t<ul class=\"slider slider-nav addi\">
\t\t\t\t\t\t\t";
            // line 60
            if (($context["thumb"] ?? null)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t<li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 62
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 66
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t<li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 68);
                    echo "\" style=\"margin: auto -5px;\" title=\"";
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
                // line 71
                echo "\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 76
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 77
            echo "\t\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t\t";
            // line 78
            if (($context["thumb"] ?? null)) {
                // line 79
                echo "\t\t\t\t\t\t\t\t<li class=\"zoom\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional zoom\">
\t\t\t\t\t\t\t\t\t\t<img id=\"myimage\" src=\"";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 84);
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
                // line 87
                echo "\t\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t\t</ul>
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
            echo "\t\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t<h3 id=\"p_pr\">";
                echo ($context["price"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t\t";
            } else {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t<h6>MRP : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<h5>Offer Price :  &nbsp; &nbsp; &nbsp;<span style=\"COLOR:#ED6940;font-size:20px;\">";
                // line 121
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"mt-3\">Your Saving :  &nbsp; &nbsp; &nbsp;<span style=\"COLOR:green;font-size:16px;font-weight: 600;\">₹
\t\t\t\t\t\t\t\t\t\t\t";
                // line 124
                echo ($context["save"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t(";
                // line 125
                echo ($context["percent1"] ?? null);
                echo "%)</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-20 mlr-0\">
\t\t\t\t\t\t\t<p>Ships within
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t4 Weeks
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tof order.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 136
        if (($context["options"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 139
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 139) == "select")) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 140));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"background:url(";
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
\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin-top: 0px; font-size:12px\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 144);
                        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t<div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 147)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 149
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 150));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 151);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 151);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 151);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 152);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 153
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 153)) {
                            // line 154
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 154);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 156
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 158
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 162
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 162) == "radio")) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t<div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 163)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label style=\"float:left\" class=\"control-label float-r\">";
                    // line 164
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 165));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 168);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 168);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 168);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 169
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 169)) {
                            // line 170
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 170);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 170);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 170)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 170);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 170);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 173);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 180) == "checkbox")) {
                    // line 181
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 181)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 182);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 183
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 183);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 184
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 184));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 187
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 187);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 187);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 188
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 188)) {
                            // line 189
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 189);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 189);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 189);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 189);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 191);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 192
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192)) {
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 193);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 193);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 198
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 201
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "text")) {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 204);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 207) == "textarea")) {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 208)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 209);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 210);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 210);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 213
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 213) == "file")) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 214)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 215);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 218
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 222
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222) == "date")) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 226);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
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
                // line 235
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 235) == "datetime")) {
                    // line 236
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 236)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 237);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 239);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
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
                // line 248
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 248) == "time")) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 249)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 250);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 250);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 252);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
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
                // line 261
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "\t\t\t\t\t\t";
        }
        // line 263
        echo "\t\t\t\t\t\t<div class=\"row mt-30 mlr-0\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 265
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\"/>
\t\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:300px\" class=\"row\">
\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 277
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        // line 279
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:right' id=\"button-cart\" data-loading-text=\"";
        // line 280
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\"><a href=\"";
        echo ($context["cart"] ?? null);
        echo "\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
        echo ($context["text_cart"] ?? null);
        echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
        echo ($context["checkout"] ?? null);
        echo "\"><strong><i class=\"fa fa-share\"></i> ";
        echo ($context["text_checkout"] ?? null);
        echo "</strong></a></button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row w-100 mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<h4>Product Details</h4>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 290
        if (twig_test_empty(($context["finish"] ?? null))) {
            // line 291
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 293
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Finish:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 294
            echo ($context["finish"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 297
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["primary_material"] ?? null))) {
            // line 298
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 300
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Primary Material:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 301
            echo ($context["primary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 304
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 306
        if (twig_test_empty(($context["secondary_material"] ?? null))) {
            // line 307
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 309
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Secondary Material:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 310
            echo ($context["secondary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 313
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 315
        if (twig_test_empty(($context["dimension_inch"] ?? null))) {
            // line 316
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 318
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Dimensions in Inch:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 319
            echo ($context["dimension_inch"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 322
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 324
        if (twig_test_empty(($context["warranty"] ?? null))) {
            // line 325
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 327
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Warranty:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 328
            echo ($context["warranty"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 331
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 333
        if (twig_test_empty(($context["seating_hight"] ?? null))) {
            // line 334
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 336
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Seating Height:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 337
            echo ($context["seating_hight"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 340
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 341
        if (twig_test_empty(($context["hand_rest"] ?? null))) {
            // line 342
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 344
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Hand Rest Height:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 345
            echo ($context["hand_rest"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 348
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 349
        if (twig_test_empty(($context["ground_cle"] ?? null))) {
            // line 350
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Ground Clearance:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 353
            echo ($context["ground_cle"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 356
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 357
        if (twig_test_empty(($context["style"] ?? null))) {
            // line 358
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 360
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Style:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 361
            echo ($context["style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 364
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 365
        if (twig_test_empty(($context["fabric"] ?? null))) {
            // line 366
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 368
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Fabric:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 369
            echo ($context["fabric"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 372
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 373
        if (twig_test_empty(($context["dimension_cm"] ?? null))) {
            // line 374
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 376
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Dimension In CM:
\t\t\t\t\t\t\t\t\t\t\t</b>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 379
            echo ($context["dimension_cm"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 382
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 383
        if (twig_test_empty(($context["sitting_dimension"] ?? null))) {
            // line 384
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 386
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Sitting Dimension:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 387
            echo ($context["sitting_dimension"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 391
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 392
        if (twig_test_empty(($context["mattress"] ?? null))) {
            // line 393
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 395
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Mattress Size:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 396
            echo ($context["mattress"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 400
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 401
        if (twig_test_empty(($context["weight"] ?? null))) {
            // line 402
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 404
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Weight:</b>
\t\t\t\t\t\t\t\t\t\t\t";
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
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 427
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 430
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 431
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 432
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
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
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t";
            // line 441
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 442
                echo "\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 445
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 445);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 450
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 450));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 451
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 452
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 452);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 453
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 453);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 456
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 461
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 462
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t<h2>";
            // line 465
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t";
            // line 466
            if (($context["review_guest"] ?? null)) {
                // line 467
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 469
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 470
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 475
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 477
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 482
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<span class=\"star-rating star-5\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-1\" name=\"rating\" value=\"1\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-2\" name=\"rating\" value=\"2\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-3\" name=\"rating\" value=\"3\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-4\" name=\"rating\" value=\"4\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-5\" name=\"rating\" value=\"5\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 497
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 500
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 504
                echo "\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 506
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 509
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/><br/>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPre-assembled – no installation is required, the product comes fully-assembled & ready to use.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAssembly Required – expert assistance is required, for which Woodpeel provide carpenters to carry out proper installation, only in urban cities. If our carpenter is not available at your location, we’ll refund our standard installation charges (charges will be decided by Woodpeel as per the product’s condition & situation).</li>


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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll replace.<br><br>

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
            echo "\t<section class=' ptb-30'>
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center w-100\">
\t\t\t\t<div class=\"col-sm-12 w-100\">
\t\t\t\t\t<h3 style=\"text-align: center; margin-bottom: 20px\">Related Products
\t\t\t\t\t\t<span class=\"hb\" style=\"text-align: -webkit-center;\"></span>
\t\t\t\t\t</h3>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 644
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 645
                echo "\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"product-thumb product-card transition text-center\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 648
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 648);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 649
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 649);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 649);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 649);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t\t\t<p class=\"product_name mt-10 font-16 mt-10\">";
                // line 653
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 653);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 655
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 655)) {
                    // line 656
                    echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t";
                    // line 657
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 657)) {
                        // line 658
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 658);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 660
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 660);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 661
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 661);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 662
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 662);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 664
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 664)) {
                        // line 665
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 666
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 666);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 668
                    echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 670
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 673
            echo "\t\t\t</div>
\t\t\t<br/>
\t\t</section>
\t";
        }
        // line 677
        echo "\t";
        echo ($context["column_right"] ?? null);
        echo "


\t<script type=\"text/javascript\">


\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
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
\t</script>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#button-cart').on('click', function () {
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
alert(json['error']['option'][i]);
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
//
\t\t-->
\t</script>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('.date').datetimepicker({language: '";
        // line 770
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 772
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 774
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
//
\t\t-->
\t</script>
\t<script
\t\ttype=\"text/javascript\">
\t\t<!--
\t\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=   ";
        // line 843
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=   ";
        // line 847
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
var old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));


\$('.sizes').change(function () {
var p = \$(this).attr('data-price');
var sig = \$(this).attr('data-sign');
var q = p.replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, '');
var x = Number(q);

if (sig == \"+\") {
var new_p = old_price + x;
} else {
var new_p = old_price - x;
}


// \$(\"#p_pr\").text('\$' + new_p);

});

\$(\"#add_quantity\").click(function () {

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
nextArrow: '<button style=\"width: 25px;top: 220px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
prevArrow: '<button style=\"width: 25px;top: 220px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

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


\$(document).ready(function (e) {
var link = getUrlParameter('a');


if (link) {
\$(\".tab_options\").each(function () {
if (\$.trim(\$(this).siblings().html()).toLocaleLowerCase() == link.toLocaleLowerCase()) {
\$(this).css('border', '2px solid #413B98');
\$(this).addClass('current');
var val = \$(this).attr(\"data-val\");

\$(\"select option\").each(function (index, element) {
if (\$(this).val() == val) {
\$(this).prop(\"selected\", true);
}

})

}
})
} else {
if (\$(\".tab_options\").length > 0) {

var val;

\$(\"select option\").each(function (index, element) {
if (\$(this).attr(\"data-link\") == \"\") {
\$(this).prop(\"selected\", true);
val = \$(this).val();
}
})

\$(\".tab_options\").each(function () {
if (\$(this).attr(\"data-val\") == val) {
\$(this).css('border', '2px solid #003B30');
}
})
}
}
\$(\".tab_options\").click(function () {
if (!\$(this).hasClass('current')) {
var val = \$(this).attr(\"data-val\");

\$(\"select option\").each(function (index, element) {
if (\$(this).val() == val) {
if (\$(this).attr(\"data-link\")) {
\$(this).prop(\"selected\", true);
window.location = \$(this).attr(\"data-link\") + '?a=' + \$.trim(\$(this).html());

}
}
});
}

})

});

var getUrlParameter = function getUrlParameter(sParam) {
var sPageURL = window.location.search.substring(1),
sURLVariables = sPageURL.split('&'),
sParameterName,
i;

for (i = 0; i < sURLVariables.length; i++) {
sParameterName = sURLVariables[i].split('=');

if (sParameterName[0] === sParam) {
return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
}
}
};


//
\t\t-->
\t</script>
\t<script>
\t\tfunction imageZoom(imgID, resultID) {
var img,
lens,
result,
cx,
cy;
img = document.getElementById(imgID);
result = document.getElementById(resultID);
/*create lens:*/
lens = document.createElement(\"DIV\");
lens.setAttribute(\"class\", \"img-zoom-lens\");
/*insert lens:*/

img.parentElement.insertBefore(lens, img);

/*calculate the ratio between result DIV and lens:*/
cx = result.offsetWidth / lens.offsetWidth;
cy = result.offsetHeight / lens.offsetHeight;

/*set background properties for the result DIV:*/
result.style.backgroundImage = \"url('\" + img.src + \"')\";
result.style.backgroundSize = (img.width * cx) + \"px \" + (
img.height * cy
) + \"px\";
/*execute a function when someone moves the cursor over the image, or the lens:*/
lens.addEventListener(\"mousemove\", moveLens);
img.addEventListener(\"mousemove\", moveLens);
/*and also for touch screens:*/
lens.addEventListener(\"touchmove\", moveLens);
img.addEventListener(\"touchmove\", moveLens);
function moveLens(e) {
var pos,
x,
y;
/*prevent any other actions that may occur when moving over the image:*/
e.preventDefault();
/*get the cursor's x and y positions:*/
pos = getCursorPos(e);
/*calculate the position of the lens:*/
x = pos.x -(lens.offsetWidth / 2);
y = pos.y -(lens.offsetHeight / 2);
/*prevent the lens from being positioned outside the image:*/
if (x > img.width - lens.offsetWidth) {
x = img.width - lens.offsetWidth;
}
if (x < 0) {
x = 0;
}
if (y > img.height - lens.offsetHeight) {
y = img.height - lens.offsetHeight;
}
if (y < 0) {
y = 0;
}
/*set the position of the lens:*/
lens.style.left = x + \"px\";
lens.style.top = y + \"px\";
/*display what the lens \"sees\":*/
result.style.backgroundPosition = \"-\" + (
x * cx
) + \"px -\" + (
y * cy
) + \"px\";
}
function getCursorPos(e) {
var a,
x = 0,
y = 0;
e = e || window.event;
/*get the x and y positions of the image:*/
a = img.getBoundingClientRect();
/*calculate the cursor's x and y coordinates, relative to the image:*/
x = e.pageX - a.left;
y = e.pageY - a.top;
/*consider any page scrolling:*/
x = x - window.pageXOffset;
y = y - window.pageYOffset;
return {x: x, y: y};
}
}
\t</script>
\t<script>
\t\t// Initiate zoom effect:
imageZoom(\"myimage\", \"myresult\");
\t</script>
\t";
        // line 1106
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
        return array (  1919 => 1106,  1657 => 847,  1650 => 843,  1578 => 774,  1573 => 772,  1568 => 770,  1471 => 677,  1465 => 673,  1457 => 670,  1453 => 668,  1448 => 666,  1443 => 665,  1440 => 664,  1435 => 662,  1431 => 661,  1426 => 660,  1420 => 658,  1418 => 657,  1415 => 656,  1413 => 655,  1408 => 653,  1397 => 649,  1393 => 648,  1388 => 645,  1384 => 644,  1371 => 633,  1369 => 632,  1273 => 539,  1241 => 509,  1236 => 506,  1230 => 504,  1223 => 500,  1217 => 497,  1199 => 482,  1191 => 477,  1186 => 475,  1178 => 470,  1174 => 469,  1170 => 467,  1168 => 466,  1164 => 465,  1159 => 462,  1156 => 461,  1151 => 458,  1144 => 456,  1135 => 453,  1131 => 452,  1128 => 451,  1124 => 450,  1116 => 445,  1111 => 442,  1107 => 441,  1103 => 439,  1101 => 438,  1097 => 437,  1093 => 435,  1087 => 432,  1084 => 431,  1081 => 430,  1075 => 427,  1072 => 426,  1070 => 425,  1065 => 423,  1047 => 407,  1042 => 405,  1039 => 404,  1035 => 402,  1033 => 401,  1030 => 400,  1023 => 396,  1020 => 395,  1016 => 393,  1014 => 392,  1011 => 391,  1004 => 387,  1001 => 386,  997 => 384,  995 => 383,  992 => 382,  986 => 379,  981 => 376,  977 => 374,  975 => 373,  972 => 372,  966 => 369,  963 => 368,  959 => 366,  957 => 365,  954 => 364,  948 => 361,  945 => 360,  941 => 358,  939 => 357,  936 => 356,  930 => 353,  927 => 352,  923 => 350,  921 => 349,  918 => 348,  912 => 345,  909 => 344,  905 => 342,  903 => 341,  900 => 340,  894 => 337,  891 => 336,  887 => 334,  885 => 333,  881 => 331,  875 => 328,  872 => 327,  868 => 325,  866 => 324,  862 => 322,  856 => 319,  853 => 318,  849 => 316,  847 => 315,  843 => 313,  837 => 310,  834 => 309,  830 => 307,  828 => 306,  824 => 304,  818 => 301,  815 => 300,  811 => 298,  808 => 297,  802 => 294,  799 => 293,  795 => 291,  793 => 290,  772 => 280,  766 => 279,  761 => 277,  746 => 265,  742 => 263,  739 => 262,  733 => 261,  717 => 252,  710 => 250,  703 => 249,  700 => 248,  684 => 239,  677 => 237,  670 => 236,  667 => 235,  651 => 226,  644 => 224,  637 => 223,  634 => 222,  626 => 219,  622 => 218,  615 => 216,  611 => 215,  604 => 214,  601 => 213,  589 => 210,  583 => 209,  576 => 208,  573 => 207,  561 => 204,  555 => 203,  548 => 202,  545 => 201,  540 => 198,  532 => 195,  525 => 193,  523 => 192,  518 => 191,  502 => 189,  500 => 188,  494 => 187,  490 => 185,  486 => 184,  482 => 183,  478 => 182,  471 => 181,  468 => 180,  463 => 177,  453 => 173,  450 => 172,  434 => 170,  432 => 169,  422 => 168,  418 => 166,  414 => 165,  410 => 164,  403 => 163,  400 => 162,  394 => 158,  387 => 156,  380 => 154,  378 => 153,  374 => 152,  365 => 151,  361 => 150,  357 => 149,  351 => 148,  344 => 147,  335 => 144,  322 => 142,  319 => 141,  314 => 140,  311 => 139,  307 => 138,  304 => 137,  302 => 136,  294 => 130,  290 => 128,  284 => 125,  280 => 124,  274 => 121,  268 => 119,  262 => 117,  259 => 116,  257 => 115,  245 => 106,  240 => 104,  234 => 101,  225 => 95,  218 => 90,  214 => 88,  211 => 87,  198 => 84,  195 => 83,  190 => 82,  187 => 81,  177 => 79,  175 => 78,  172 => 77,  170 => 76,  166 => 74,  162 => 72,  159 => 71,  146 => 68,  143 => 67,  138 => 66,  135 => 65,  125 => 62,  122 => 61,  120 => 60,  117 => 59,  115 => 58,  107 => 53,  95 => 43,  83 => 39,  80 => 38,  76 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
