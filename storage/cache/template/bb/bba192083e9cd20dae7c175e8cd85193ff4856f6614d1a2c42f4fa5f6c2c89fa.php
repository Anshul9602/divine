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
class __TwigTemplate_c5942f0e7b195ee2a1b5c6144e34bab9bfc090a778b458a55abc82e9e9c34348 extends \Twig\Template
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
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
\t<div class=\"row\">";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 13
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 15
            echo "\t\t";
        } else {
            // line 16
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 17
            echo "\t\t";
        }
        // line 18
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<label class=\"control-label\" for=\"input-search\">";
        // line 20
        echo ($context["entry_search"] ?? null);
        echo "</label>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 23
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\">";
        // line 27
        echo ($context["text_category"] ?? null);
        echo "</option>
\t\t\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 29) == ($context["category_id"] ?? null))) {
                // line 30
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 30);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 30);
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 32);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 35) == ($context["category_id"] ?? null))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 36);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 36);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 38);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 38);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 41) == ($context["category_id"] ?? null))) {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 42);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 42);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 44);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 44);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t\t";
        // line 53
        if (($context["sub_category"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\"/>
\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t";
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<p>
\t\t\t\t<label class=\"checkbox-inline\">
\t\t\t\t\t";
        // line 63
        if (($context["description"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\"/>
\t\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\"/>
\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t";
        echo ($context["entry_description"] ?? null);
        echo "</label>
\t\t\t</p>
\t\t\t<input type=\"button\" value=\"";
        // line 70
        echo ($context["button_search"] ?? null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"/>
\t\t\t<h2>";
        // line 71
        echo ($context["text_search"] ?? null);
        echo "</h2>
\t\t\t";
        // line 72
        if (($context["products"] ?? null)) {
            // line 73
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 76
            echo ($context["button_list"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 79
            echo ($context["button_grid"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
            // line 91
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 94) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 95);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 95);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 97);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 97);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 105
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 108) == ($context["limit"] ?? null))) {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 109);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 109);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 111);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 111);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 120
                echo "\t\t\t\t\t\t<div class=\"col-sm-3 col-6 mt-4 p-card\" style=\"padding-left:5px;padding-right:5px;\">

\t\t\t\t\t\t\t<div class=\" product-card \">
\t\t\t\t\t\t\t\t<div class=\"image relative real_pro-img\">
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 124);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 125);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a style=\"font-size:14px;text-transform:uppercase;position: absolute;top: 10px;right: 10px;    cursor: pointer;\" onclick=\"wishlist.add('";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "');\"><img src=\"assets/img/w22-wishlist-empty.svg\" style=\"width:40px;\"/>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"caption text-start \" style=\"text-align: start;padding-bottom:20px;\">

\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 135);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"height:46px;overflow:hidden;display: flex;align-items: center;\">";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 136);
                echo "</h4>


\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 140
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 142
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 143);
                        echo "</span>

\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 146);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 147
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
                        echo "</span><br>

\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 150)) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 152);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 159) < $context["i"])) {
                            // line 160
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 181
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 182
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 185
            echo "\t\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t";
        }
        // line 187
        echo "\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t\t";
        // line 188
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
        // line 240
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
        return array (  586 => 240,  531 => 188,  526 => 187,  520 => 185,  514 => 182,  510 => 181,  504 => 177,  494 => 172,  490 => 170,  484 => 169,  477 => 164,  471 => 160,  468 => 159,  464 => 158,  461 => 157,  458 => 156,  454 => 154,  449 => 152,  444 => 151,  441 => 150,  435 => 147,  430 => 146,  423 => 143,  421 => 142,  418 => 141,  416 => 140,  409 => 136,  405 => 135,  396 => 129,  385 => 125,  381 => 124,  375 => 120,  371 => 119,  364 => 114,  358 => 113,  350 => 111,  342 => 109,  339 => 108,  335 => 107,  330 => 105,  323 => 100,  317 => 99,  309 => 97,  301 => 95,  298 => 94,  294 => 93,  289 => 91,  279 => 86,  269 => 79,  263 => 76,  258 => 73,  256 => 72,  252 => 71,  248 => 70,  242 => 68,  238 => 66,  234 => 64,  232 => 63,  223 => 58,  219 => 56,  215 => 54,  213 => 53,  207 => 49,  201 => 48,  195 => 47,  189 => 46,  181 => 44,  173 => 42,  170 => 41,  165 => 40,  157 => 38,  149 => 36,  146 => 35,  141 => 34,  133 => 32,  125 => 30,  122 => 29,  118 => 28,  114 => 27,  105 => 23,  99 => 20,  95 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  68 => 11,  64 => 10,  61 => 9,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/search.twig", "");
    }
}
