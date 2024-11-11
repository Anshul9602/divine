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

/* default/template/product/search.twig */
class __TwigTemplate_062dd91ff435779197796114d56d97fe775baa9217fa810cc64ecccf723caaf4 extends \Twig\Template
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
<div id=\"product-search\" class=\"container\">
\t
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"col-sm-12\">";
        // line 5
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<label class=\"control-label\" for=\"input-search\">";
        // line 7
        echo ($context["entry_search"] ?? null);
        echo "</label>
\t\t\t<div style=\"display:none\" class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 10
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\">";
        // line 14
        echo ($context["text_category"] ?? null);
        echo "</option>
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 16
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 16) == ($context["category_id"] ?? null))) {
                // line 17
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 17);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 17);
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 19);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 22) == ($context["category_id"] ?? null))) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 23);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 23);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 25);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 25);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 28) == ($context["category_id"] ?? null))) {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 29);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 29);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 31);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 31);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t";
        // line 40
        if (($context["sub_category"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>
\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<p style=\"display:none\">
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t";
        // line 50
        if (($context["description"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>
\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>
\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t";
        echo ($context["entry_description"] ?? null);
        echo "</label>
\t\t\t</p>
\t\t\t<input style=\"display:none\" type=\"button\" value=\"";
        // line 57
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"/>
\t\t\t
\t\t\t";
        // line 59
        if (($context["products"] ?? null)) {
            // line 60
            echo "\t\t\t\t<div style=\"display:none\" class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a href=\"";
            // line 73
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
            // line 78
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 81
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 81) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 82);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 82);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 84);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 92
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 95) == ($context["limit"] ?? null))) {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 96);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 96);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 98);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 98);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 107
                echo "\t\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-4 p-card\" style=\"padding-left:5px;padding-right:5px;\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 112);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 113);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 116);
                echo "');\">
\t\t\t\t\t\t\t\t";
                // line 117
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 118);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 118);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 118);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 118);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 118);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 127);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t";
                // line 133
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 133)) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 135
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 135)) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 141)) {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 143);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 147) == null)) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 149);
                    echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 166
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 167
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 170
            echo "\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t";
        }
        // line 172
        echo "\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 173
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script
\ttype=\"text/javascript\">
\t<!--
\t\$('#button-search').bind('click', function () {
url = 'index.php?route=product/search';

var search = \$('#content input[name=\\'search\\']').prop('value');

if (search) {
url += '&search=' + encodeURIComponent(search);
}

var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

if (category_id > 0) {
url += '&category_id=' + encodeURIComponent(category_id);
}

var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

if (sub_category) {
url += '&sub_category=true';
}

var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

if (filter_description) {
url += '&description=true';
}

location = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function (e) {
if (e.keyCode == 13) {
\$('#button-search').trigger('click');
}
});

\$('select[name=\\'category_id\\']').on('change', function () {
if (this.value == '0') {
\$('input[name=\\'sub_category\\']').prop('disabled', true);
} else {
\$('input[name=\\'sub_category\\']').prop('disabled', false);
}
});

\$('select[name=\\'category_id\\']').trigger('change');
\t-->
</script>
";
        // line 225
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  541 => 225,  486 => 173,  481 => 172,  475 => 170,  469 => 167,  465 => 166,  459 => 162,  443 => 151,  437 => 149,  434 => 148,  431 => 147,  427 => 145,  422 => 143,  417 => 142,  414 => 141,  409 => 139,  404 => 138,  398 => 136,  396 => 135,  393 => 134,  391 => 133,  383 => 128,  379 => 127,  373 => 123,  368 => 120,  352 => 118,  350 => 117,  346 => 116,  336 => 113,  332 => 112,  325 => 107,  321 => 106,  314 => 101,  308 => 100,  300 => 98,  292 => 96,  289 => 95,  285 => 94,  280 => 92,  273 => 87,  267 => 86,  259 => 84,  251 => 82,  248 => 81,  244 => 80,  239 => 78,  229 => 73,  219 => 66,  213 => 63,  208 => 60,  206 => 59,  201 => 57,  195 => 55,  191 => 53,  187 => 51,  185 => 50,  176 => 45,  172 => 43,  168 => 41,  166 => 40,  160 => 36,  154 => 35,  148 => 34,  142 => 33,  134 => 31,  126 => 29,  123 => 28,  118 => 27,  110 => 25,  102 => 23,  99 => 22,  94 => 21,  86 => 19,  78 => 17,  75 => 16,  71 => 15,  67 => 14,  58 => 10,  52 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/search.twig", "");
    }
}
