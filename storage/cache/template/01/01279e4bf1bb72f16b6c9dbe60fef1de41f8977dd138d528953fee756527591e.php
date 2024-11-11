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

/* default/template/common/category.twig */
class __TwigTemplate_a337934201e3ddba9c8652ed499bb7a95dd524afc3b3aa76ba8600b1702e342d extends \Twig\Template
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

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"\">
\t\t<div class=\"row\">
\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
";
        // line 17
        if (($context["style_categories"] ?? null)) {
            // line 18
            echo "\t<!---Shop by room------>
\t<section class=\"shopy_by_room separation mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\" align-items-center heading \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">";
            // line 23
            echo ($context["heading_title"] ?? null);
            echo "
\t\t\t\t\t\tRoom Furniture
\t\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row mt-4\" style=\"justify-content: space-around;\">
\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 34
                echo "\t\t\t\t\t<div class=\"col-sm-3 col-6 text-center mt-2 \" style=\"padding-right: 25px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    padding-left: 25px;\">

\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 37);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t\t<img src=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 38);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5 class=\" mt-1 mb-3\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 40);
                echo "</h5>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<br/>
";
        }
        // line 50
        echo "<!---Shop by room------><!-- mid slider area mid -->
<!-- mid slider area end -->

\t<section class=\"cares separation\"> <div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br/>
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 63
        if (($context["new_products"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 70);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 73);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 74
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 75);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 75);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 85
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 90
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 92
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 92)) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 93);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 95);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 96
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 98)) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 100);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 104);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"cares separation mt-5\">
\t<div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Popular On Woodpeel
\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br/>
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 136
        if (($context["pop_products"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 138
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 142);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 143);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 143);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 147
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 147)) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 148);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 148);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 148);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 148);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 150
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 157);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 158);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 163
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 165
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 166);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 168);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 169);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 171)) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 173);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 177);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t\t\t";
        }
        // line 191
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 198
        echo ($context["column_right"] ?? null);
        echo "<!-- News --><section class=\"cares separation mt-5\" style=\"background:#2b4d64;\">
\t<div class=\"container new-font\" style=\"padding:20px;\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\" style=\"color:white;\">
\t\t\t<div class=\"col-md-3 col-lg-3\">
\t\t\t\t<h2 style=\"color:white;\">Be A Woodpeel Insider</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-lg-4\" style=\"color:white;\">
\t\t\t\t<h5 style=\"color:white;\">15% Off On Your 1st Order. Sign Up Now!</h5>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 col-lg-4\">
\t\t\t\t<form class=\"newsletter-inner mt-1\" id=\"mc-form\" style=\"color:white;\">
\t\t\t\t\t<input type=\"email\" style=\"color:white;\" class=\"news-field\" id=\"mc-email\" autocomplete=\"off\" placeholder=\"Enter your email address\">
\t\t\t\t\t<button class=\"news-btn mb-3\" style=\"padding:0px 10px ;color:white; \" id=\"mc-submit\">Subscribe</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<script>
\tvar swiper = new Swiper(\".topSwiper\", {
pagination: {
el: \".top-swiper-pagination\",
clickable: true
},
navigation: {
nextEl: \".swiper-button-next\",
prevEl: \".swiper-button-prev\"
},
autoplay: false,
// Default parameters
slidesPerView: 4,
spaceBetween: 10,
// Responsive breakpoints
breakpoints: { // when window width is >= 320px
320: {
slidesPerView: 2,
spaceBetween: 5
},
// when window width is >= 480px
480: {
slidesPerView: 2,
spaceBetween: 5
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 20
}
}
});
</script>
";
        // line 249
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 249,  444 => 198,  435 => 191,  432 => 190,  412 => 177,  408 => 175,  403 => 173,  398 => 172,  395 => 171,  390 => 169,  385 => 168,  379 => 166,  377 => 165,  374 => 164,  372 => 163,  364 => 158,  360 => 157,  354 => 153,  349 => 150,  333 => 148,  331 => 147,  327 => 146,  317 => 143,  313 => 142,  307 => 138,  302 => 137,  300 => 136,  280 => 118,  277 => 117,  257 => 104,  253 => 102,  248 => 100,  243 => 99,  240 => 98,  235 => 96,  230 => 95,  224 => 93,  222 => 92,  219 => 91,  217 => 90,  209 => 85,  205 => 84,  199 => 80,  194 => 77,  178 => 75,  176 => 74,  172 => 73,  162 => 70,  158 => 69,  152 => 65,  147 => 64,  145 => 63,  130 => 50,  121 => 44,  111 => 40,  106 => 38,  102 => 37,  97 => 34,  93 => 33,  80 => 23,  73 => 18,  71 => 17,  64 => 12,  55 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/category.twig", "");
    }
}
