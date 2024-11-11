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
class __TwigTemplate_2b021f224e23449ee87d84e4c79a446930e0440e2a25181f42a1d0cb6e18d232 extends \Twig\Template
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
/****radio css***/
 .radio-custom label {
  display: inline-block;
  margin-left:4px;
  cursor: pointer;
  font-weight: 500;
  position: relative;
  overflow: hidden;
  margin-bottom: 0.375em;
  float:left;
  margin-top:-9.5px;
}
.radio-custom label input {
  position: absolute;
  left: -9999px;
}
.radio-custom label input:checked + span {
  background-color:   #d97676;
 color:#fff;
}

.radio-custom label span {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  border-radius: 99em;
  transition: 0.25s ease;
  background-color: #fff;
   border:thin solid #333;
}


</style>
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 45);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 45);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 59
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-1\">
\t\t\t\t\t";
        // line 62
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 63
            echo "\t\t\t\t\t\t<ul class=\"slider slider-nav \">
\t\t\t\t\t\t\t";
            // line 64
            if (($context["thumb"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 70);
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
                // line 73
                echo "\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 76
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t";
        // line 79
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 80
            echo "\t\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t\t";
            // line 81
            if (($context["thumb"] ?? null)) {
                // line 82
                echo "\t\t\t\t\t\t\t\t<li><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 87);
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
                // line 90
                echo "\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t<h1 class=\"text-capitalize\">";
        // line 96
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t";
        // line 97
        if (($context["review_status"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t\t<div class=\"rating\" style=\"    line-height: 3.7;\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-1x\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 115
        echo "
\t\t\t\t\t";
        // line 116
        if (($context["price"] ?? null)) {
            // line 117
            echo "\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 118
            if ( !($context["special"] ?? null)) {
                // line 119
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h2>";
                // line 120
                echo ($context["price"] ?? null);
                echo "</h2>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } else {
                // line 123
                echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<h2>";
                // line 125
                echo ($context["special"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t&nbsp; &nbsp;<span style=\"text-decoration: line-through;font-size: 16px;\">";
                // line 126
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 130
            echo "              
\t\t\t\t\t\t\t";
            // line 131
            if (($context["tax"] ?? null)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 133
                echo ($context["tax"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 136
                echo "\t\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 137
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 140
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 144);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 144);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t\t\t\t\t\t\t";
            }
            // line 147
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<br>

\t\t\t\t\t";
        }
        // line 151
        echo "\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t";
        // line 152
        if (($context["options"] ?? null)) {
            // line 153
            echo "\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 156
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 156) == "select")) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 157)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"control-label\" for=\"input-option";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 158);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 158);
                    echo "</h3><br>
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 160
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 161));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 162);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 162);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 168
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 168) == "radio")) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t<div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 169)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label  class=\"control-label float-r\">";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 170);
                    echo " &nbsp; &nbsp; &nbsp;
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn size-chart\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-clothes-hanger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 style=\"    color: #d97676;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSize Chart</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span></label><br>
\t\t\t\t\t\t\t\t\t\t";
                    // line 178
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 178));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 179
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 181);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 181);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 181);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 182
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182)) {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 183);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 183);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 186
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 186);
                        echo "</span>

\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 195
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 196
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 196) == "checkbox")) {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 200));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 203
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 203);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 204
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 204)) {
                            // line 205
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 205);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 205);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 205)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 205);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 205);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 208
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208)) {
                            // line 209
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 209);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 217) == "text")) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 218)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 219);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 220);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 220);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "textarea")) {
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 226);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 229
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 229) == "file")) {
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 230)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 231);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 232
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 232);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 234
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 238
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 238) == "date")) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 239)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 240);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 242);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 242);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 242);
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
                // line 251
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 251) == "datetime")) {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 252)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 255
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
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
                // line 264
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 264) == "time")) {
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
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 268);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 268);
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
                // line 277
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "\t\t\t\t\t\t";
        }
        // line 279
        echo "\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 280
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
            // line 281
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 284
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 286);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 286);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 292
        echo "

\t\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t<img src=\"image/chart.webp\" style=\"width:100%;\" alt=\"placeholder\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group mt-5\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 312
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\"/>

\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:300px\" class=\"row\">
\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\"/></div>
\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 326
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 328
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\" style=\"max-width: 100%;\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 331
        if ((($context["minimum"] ?? null) > 1)) {
            // line 332
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t\t";
            // line 334
            echo ($context["text_minimum"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 336
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<section style=\"background:#f1f1f1; padding:20px 0px\">
\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 hide_phone\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs tabs-ul des-tab\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#tab-overview\" class=\"active\" data-toggle=\"tab\">Description</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div style=\"background:#fff;padding:10px 10px;max-height: 200px;overflow-y: scroll;\" class=\"tab-content des-con\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active p-10\" id=\"tab-overview\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 351
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 hide-desktop\">
\t\t\t\t\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\">Description</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse show\" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 367
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t  </section>
          <div class=\"mt-4\"><img src=\"assets/img/product-icon.webp\" alt=\"Product\" > </div>
        
</div>

\t\t\t</div>
\t\t</div>

\t\t";
        // line 387
        if (($context["products"] ?? null)) {
            // line 388
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
            // line 399
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 400
                echo "\t\t\t\t<div class=\"col-sm-3 col-6 mt-4\">
\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 404
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 404);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 405
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 405);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 405);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 405);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 408
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 408);
                echo "');\">
\t\t\t\t\t\t\t\t";
                // line 409
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 409)) {
                    // line 410
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 410);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 410);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 410);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 410);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 410);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 410);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 412
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t";
                }
                // line 415
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 419
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 419);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 420
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 420);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t";
                // line 425
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 425)) {
                    // line 426
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 427
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 427)) {
                        // line 428
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 428);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 430
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 430);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 431
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 431);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 433
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 433)) {
                        // line 434
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 435
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 435);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 437
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 439
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 439) == null)) {
                    // line 440
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 441
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 441);
                    echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 443
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "\t\t</div>
\t\t<br/>
\t</section>
";
        }
        // line 458
        echo "\t</div>
</div></div><br/><br/><script type=\"text/javascript\">

\$('#myModal').on('shown.bs.modal', function () {
\$('#myInput').trigger('focus')
})


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
// --></script><script
type=\"text/javascript\">
<!--
\$('#button-cart').on('click', function () {
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
//--></script><script
type=\"text/javascript\">
<!--
\$('.date').datetimepicker({language: '";
        // line 547
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 549
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 551
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
//--></script><script
type=\"text/javascript\">
<!--
\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id= ";
        // line 617
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id= ";
        // line 621
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
nextArrow: '<button style=\"width: 25px;top: 150px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
prevArrow: '<button style=\"width: 25px;top: 150px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

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
\tconst zoom = document.querySelector(\".zoom\");
zoom.addEventListener(\"click\", () => {
\$('.zoom').zoom({magnify: '2.5'});
});
</script>
<script>
\t// Initiate zoom effect:
imageZoom(\"myimage\", \"myresult\");
</script>

<script>
\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
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
        // line 801
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
        return array (  1450 => 801,  1267 => 621,  1260 => 617,  1191 => 551,  1186 => 549,  1181 => 547,  1090 => 458,  1084 => 454,  1068 => 443,  1062 => 441,  1059 => 440,  1056 => 439,  1052 => 437,  1047 => 435,  1042 => 434,  1039 => 433,  1034 => 431,  1029 => 430,  1023 => 428,  1021 => 427,  1018 => 426,  1016 => 425,  1008 => 420,  1004 => 419,  998 => 415,  993 => 412,  977 => 410,  975 => 409,  971 => 408,  961 => 405,  957 => 404,  951 => 400,  947 => 399,  934 => 388,  932 => 387,  909 => 367,  890 => 351,  873 => 336,  868 => 334,  864 => 332,  862 => 331,  854 => 328,  849 => 326,  832 => 312,  810 => 292,  804 => 288,  793 => 286,  789 => 285,  785 => 284,  779 => 281,  776 => 280,  773 => 279,  770 => 278,  764 => 277,  748 => 268,  741 => 266,  734 => 265,  731 => 264,  715 => 255,  708 => 253,  701 => 252,  698 => 251,  682 => 242,  675 => 240,  668 => 239,  665 => 238,  657 => 235,  653 => 234,  646 => 232,  642 => 231,  635 => 230,  632 => 229,  620 => 226,  614 => 225,  607 => 224,  604 => 223,  592 => 220,  586 => 219,  579 => 218,  576 => 217,  571 => 214,  563 => 211,  556 => 209,  554 => 208,  549 => 207,  533 => 205,  531 => 204,  525 => 203,  521 => 201,  517 => 200,  513 => 199,  509 => 198,  502 => 197,  500 => 196,  497 => 195,  491 => 191,  480 => 186,  477 => 185,  461 => 183,  459 => 182,  449 => 181,  445 => 179,  441 => 178,  430 => 170,  423 => 169,  420 => 168,  415 => 165,  403 => 162,  399 => 161,  395 => 160,  389 => 159,  383 => 158,  376 => 157,  373 => 156,  369 => 155,  365 => 153,  363 => 152,  360 => 151,  354 => 147,  351 => 146,  340 => 144,  336 => 143,  331 => 140,  328 => 139,  323 => 137,  318 => 136,  315 => 135,  310 => 133,  305 => 132,  303 => 131,  300 => 130,  293 => 126,  289 => 125,  285 => 123,  279 => 120,  276 => 119,  274 => 118,  271 => 117,  269 => 116,  266 => 115,  261 => 112,  255 => 111,  248 => 106,  242 => 102,  239 => 101,  235 => 100,  231 => 98,  229 => 97,  225 => 96,  220 => 93,  216 => 91,  213 => 90,  200 => 87,  197 => 86,  192 => 85,  189 => 84,  179 => 82,  177 => 81,  174 => 80,  172 => 79,  167 => 76,  163 => 74,  160 => 73,  147 => 70,  144 => 69,  139 => 68,  136 => 67,  126 => 65,  124 => 64,  121 => 63,  119 => 62,  113 => 59,  101 => 49,  89 => 45,  86 => 44,  82 => 43,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
