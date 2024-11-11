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

/* default/template/common/home.twig */
class __TwigTemplate_20c059b3314cdc11555f7cd691417d3e1606d405c783aa324c6432ec771f3966 extends \Twig\Template
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
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap\" rel=\"stylesheet\">
<style>
\t@media screen and(max-width:750px) {
\t\t.hide_phone {
\t\t\tdisplay: none;
\t\t}
\t\t.product-card {
\t\t\theight: auto;
\t\t}
\t\t.slider_banner {
\t\t\twidth: 100%;
\t\t}
\t\t.slide-row {
\t\t\tmargin: -20px 0 0;
\t\t}
\t}
</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"container-wide\">
\t\t<div class=\"row slide-row\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 27
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 27);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 28);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"cares separation container mt-4\">
\t\t<div class=\"container new-font\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
        // line 48
        if (($context["new_products"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 58);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 59
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 60);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 60);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 77
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 81
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 83)) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 85);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 89);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t\t<section class=\"cares separation mt-5 container\">
\t\t<div class=\"container new-font\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Best Seller
\t\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
        // line 122
        if (($context["pop_products"] ?? null)) {
            // line 123
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 129);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 130);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 134);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 135
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 135)) {
                    // line 136
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 137);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 137);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 137);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 137);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 145
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 150);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 151);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 156
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 158)) {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 159);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 161);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 162);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 164)) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 166);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 170);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t\t\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
<!---Shop by room------>
";
        // line 193
        if (($context["room_categories"] ?? null)) {
            // line 194
            echo "\t<section class=\"shopy_by_room separation mt-5 container\">
\t\t<div class=\"container\">
\t\t\t<div class=\" align-items-center heading \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Shop By Room<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 205
                echo "\t\t\t\t\t<div class=\"col-sm-4 col-6 text-center mt-2\">
\t\t\t\t\t\t<a href=\"";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 206);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t\t<img src=\"";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 207);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5 class=\" mt-2 mb-2\">
\t\t\t\t\t\t\t<span style=\"z-index:2;    position: relative;\">";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 210);
                echo "</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<br/>

";
        }
        // line 223
        echo "


<style>
.serv-name3 {
    position: absolute;
    font-weight: 800;
   
    color: white;
    padding: 5px 35px;
    font-family: 'Work Sans', sans-serif;
    font-size: 18px;
    top: auto;
    align-items: center;
    justify-content: center;
    display: flex;
\twidth: 100%;
    height: 100%;
}

.btn-primary{
background:#fff;
color:#000;
font-weight: 800;
border-radius: 33px;
}
</style>

\t
\t<div style=\"background:#f1f1f1; padding:30px 0px\">
\t\t<section class=\" separation \">
\t\t\t<div class=\"\">
\t\t\t\t<div class=\" align-items-center heading  \">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<h2 class=\"text-center \">Printed & Solid<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\" style=\"margin-top:3%;\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t\t<div class=\"serv-name3\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"\"><button class=\"btn btn-primary\" >New Arrivals</button></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.4;\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t\t<div class=\"serv-name3\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"\"><button class=\"btn btn-primary\" >Best Seller</button></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.4;\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>



\t<br/>








\t";
        // line 299
        echo ($context["column_right"] ?? null);
        echo "


\t<!-- News -->
\t<div class=\"container\">
<section id=\"testim\" class=\"testim\">
         <div class=\"testim-cover\">
            <div class=\"wrap\">

                <span id=\"right-arrow\" class=\"arrow right fa fa-chevron-right\"></span>
                <span id=\"left-arrow\" class=\"arrow left fa fa-chevron-left \"></span>
                <ul id=\"testim-dots\" class=\"dots\">
                    <li class=\"dot active\"></li><!--
                    --><li class=\"dot\"></li><!--
                    --><li class=\"dot\"></li><!--
                    --><li class=\"dot\"></li><!--
                    --><li class=\"dot\"></li>
                </ul>
                <div id=\"testim-content\" class=\"cont\">
                    
                    <div class=\"active\">
                        <div class=\"img\"><img src=\"https://in.bmscdn.com/iedb/artist/images/website/poster/large/kartik-aaryan-1045198-08-12-2017-06-34-11.jpg\" alt=\"\"></div>
                        <h2>Lorem P. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class=\"img\"><img src=\"https://timesofindia.indiatimes.com/thumb/msid-75752690,width-800,height-600,resizemode-4/75752690.jpg\" alt=\"\"></div>
                        <h2>Mr. Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class=\"img\"><img src=\"https://p16.muscdn.com/img/musically-maliva-obj/1627333501517830~c5_720x720.jpeg\" alt=\"\"></div>
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class=\"img\"><img src=\"https://p16-sg-default.akamaized.net/aweme/1080x1080/tiktok-obj/1666413671597057.jpeg\" alt=\"\"></div>
                        <h2>Lorem De Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class=\"img\"><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSKLJe1Lrz2N3ufVSwQokSJ79jGBbIptXuVnsdxMmNUlE14ohwp&usqp=CAU\" alt=\"\"></div>
                        <h2>Ms. Lorem R. Ipsum</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                </div>

            </div>
         </div>
    </section>
</div>

<script src=\"https://use.fontawesome.com/1744f3f671.js\"></script>
\t<script>
\t\tvar swiper = new Swiper(\".topSwiper\", {
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
740: {
slidesPerView: 2,
spaceBetween: 5
}
}
});



// testi 
// vars
'use strict'
var\ttestim = document.getElementById(\"testim\"),
\t\ttestimDots = Array.prototype.slice.call(document.getElementById(\"testim-dots\").children),
    testimContent = Array.prototype.slice.call(document.getElementById(\"testim-content\").children),
    testimLeftArrow = document.getElementById(\"left-arrow\"),
    testimRightArrow = document.getElementById(\"right-arrow\"),
    testimSpeed = 4500,
    currentSlide = 0,
    currentActive = 0,
    testimTimer,
\t\ttouchStartPos,
\t\ttouchEndPos,
\t\ttouchPosDiff,
\t\tignoreTouch = 30;
;

window.onload = function() {

    // Testim Script
    function playSlide(slide) {
        for (var k = 0; k < testimDots.length; k++) {
            testimContent[k].classList.remove(\"active\");
            testimContent[k].classList.remove(\"inactive\");
            testimDots[k].classList.remove(\"active\");
        }

        if (slide < 0) {
            slide = currentSlide = testimContent.length-1;
        }

        if (slide > testimContent.length - 1) {
            slide = currentSlide = 0;
        }

        if (currentActive != currentSlide) {
            testimContent[currentActive].classList.add(\"inactive\");            
        }
        testimContent[slide].classList.add(\"active\");
        testimDots[slide].classList.add(\"active\");

        currentActive = currentSlide;
    
        clearTimeout(testimTimer);
        testimTimer = setTimeout(function() {
            playSlide(currentSlide += 1);
        }, testimSpeed)
    }

    testimLeftArrow.addEventListener(\"click\", function() {
        playSlide(currentSlide -= 1);
    })

    testimRightArrow.addEventListener(\"click\", function() {
        playSlide(currentSlide += 1);
    })    

    for (var l = 0; l < testimDots.length; l++) {
        testimDots[l].addEventListener(\"click\", function() {
            playSlide(currentSlide = testimDots.indexOf(this));
        })
    }

    playSlide(currentSlide);

    // keyboard shortcuts
    document.addEventListener(\"keyup\", function(e) {
        switch (e.keyCode) {
            case 37:
                testimLeftArrow.click();
                break;
                
            case 39:
                testimRightArrow.click();
                break;

            case 39:
                testimRightArrow.click();
                break;

            default:
                break;
        }
    })
\t\t
\t\ttestim.addEventListener(\"touchstart\", function(e) {
\t\t\t\ttouchStartPos = e.changedTouches[0].clientX;
\t\t})
\t
\t\ttestim.addEventListener(\"touchend\", function(e) {
\t\t\t\ttouchEndPos = e.changedTouches[0].clientX;
\t\t\t
\t\t\t\ttouchPosDiff = touchStartPos - touchEndPos;
\t\t\t
\t\t\t\tconsole.log(touchPosDiff);
\t\t\t\tconsole.log(touchStartPos);\t
\t\t\t\tconsole.log(touchEndPos);\t

\t\t\t
\t\t\t\tif (touchPosDiff > 0 + ignoreTouch) {
\t\t\t\t\t\ttestimLeftArrow.click();
\t\t\t\t} else if (touchPosDiff < 0 - ignoreTouch) {
\t\t\t\t\t\ttestimRightArrow.click();
\t\t\t\t} else {
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t
\t\t})
}

\t</script>

\t";
        // line 505
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  751 => 505,  542 => 299,  464 => 223,  454 => 215,  443 => 210,  437 => 207,  433 => 206,  430 => 205,  426 => 204,  414 => 194,  412 => 193,  402 => 185,  399 => 184,  378 => 170,  374 => 168,  369 => 166,  364 => 165,  361 => 164,  356 => 162,  351 => 161,  345 => 159,  343 => 158,  340 => 157,  338 => 156,  330 => 151,  326 => 150,  319 => 145,  313 => 141,  296 => 137,  293 => 136,  291 => 135,  287 => 134,  276 => 130,  272 => 129,  265 => 124,  260 => 123,  258 => 122,  237 => 103,  234 => 102,  214 => 89,  210 => 87,  205 => 85,  200 => 84,  197 => 83,  192 => 81,  187 => 80,  181 => 78,  179 => 77,  176 => 76,  174 => 75,  166 => 70,  162 => 69,  156 => 65,  151 => 62,  135 => 60,  133 => 59,  129 => 58,  119 => 55,  115 => 54,  109 => 50,  104 => 49,  102 => 48,  83 => 31,  74 => 28,  69 => 27,  65 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
