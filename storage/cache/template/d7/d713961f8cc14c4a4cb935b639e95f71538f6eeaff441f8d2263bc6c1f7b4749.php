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
class __TwigTemplate_9c6922fbcf05edd1a5e7bd9d0dc1980ecd74e2b33d38f956b6383b4a2746d29a extends \Twig\Template
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
\t.home-testimonial {
\t\tbackground-color: #231834;
\t\theight: 380px
\t}
\t.home-testimonial-bottom {
\t\tbackground-color: #f8f8f8;
\t\ttransition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
\t\tmargin-top: 20px;
\t\tmargin-bottom: 0;
\t\tposition: relative;
\t\theight: 130px;
\t\ttop: 190px
\t}
\t.home-testimonial h3 {
\t\tcolor: var(--orange);
\t\tfont-size: 14px;
\t\tfont-weight: 500;
\t\ttext-transform: uppercase
\t}
\t.home-testimonial h2 {
\t\tcolor: white;
\t\tfont-size: 28px;
\t\tfont-weight: 700
\t}
\t.testimonial-inner {
\t\tposition: relative;
\t\ttop: -174px
\t}
\t.testimonial-pos {
\t\tposition: relative;
\t\ttop: 24px
\t}
\t.testimonial-inner .tour-desc {
\t\tborder-radius: 5px;
\t\tpadding: 40px
\t}
\t.color-grey-3 {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}
\t.testimonial-inner img.tm-people {
\t\twidth: 60px;
\t\theight: 60px;
\t\t-webkit-border-radius: 50%;
\t\tborder-radius: 50%;
\t\t-o-object-fit: cover;
\t\tobject-fit: cover;
\t\tmax-width: none
\t}
\t.link-name {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 14px;
\t\tcolor: #6c83a2
\t}
\t.link-position {
\t\tfont-family: \"Montserrat\", Sans-serif;
\t\tfont-size: 12px;
\t\tcolor: #6c83a2
\t}


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
\t.slider_banner {
    width:100%;
}
</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"\">
\t\t<div class=\"row slide-row\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 92
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 92);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 93);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
<section class=\"cares separation container mt-4\">
\t<div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br/>
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 113
        if (($context["new_products"] ?? null)) {
            // line 114
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 115
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 119);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 120);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 120);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 120);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 124
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 125);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 125);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 125);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 125);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 134);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 140
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 142
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 143);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 145
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 145);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 146
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 146);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 148)) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 150);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 154);
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
            // line 167
            echo "\t\t\t\t\t\t";
        }
        // line 168
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<section class=\"cares separation mt-5 container\">
\t<div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Best Seller
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br/>
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 187
        if (($context["pop_products"] ?? null)) {
            // line 188
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 189
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 194);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 195);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 199
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 199);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 200
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 200)) {
                    // line 201
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 202);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 202);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 202);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 202);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 202);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 202);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 206
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 215);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 216
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 216);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 221
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 223
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 223)) {
                        // line 224
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 224);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 226);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 227);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 229
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 229)) {
                        // line 230
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 231);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 233
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 235
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 235);
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
            // line 249
            echo "\t\t\t\t\t\t";
        }
        // line 250
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>
";
        // line 258
        if (($context["room_categories"] ?? null)) {
            // line 259
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
            // line 269
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 270
                echo "\t\t\t\t\t<div class=\"col-sm-4 col-6 text-center mt-2\">
\t\t\t\t\t\t<a href=\"";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 271);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t\t<img src=\"";
                // line 272
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 272);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5 class=\" mt-2 mb-2\">
\t\t\t\t\t\t\t<span style=\"z-index:2;    position: relative;\">";
                // line 275
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 275);
                echo "</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<br/>

";
        }
        // line 288
        echo "

<style>
\t.serv-name3 {
\t\tposition: absolute;
\t\tfont-weight: 800;

\t\tcolor: white;
\t\tpadding: 5px 35px;
\t\tfont-family: 'Work Sans', sans-serif;
\t\tfont-size: 18px;
\t\ttop: auto;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tdisplay: flex;
\t\twidth: 100%;
\t\theight: 100%;
\t}

\t.btn-primary {
\t\tbackground: #fff;
\t\tcolor: #000;
\t\tfont-weight: 800;
\t\tborder-radius: 33px;
\t}
</style>


<div style=\"background:#f1f1f1; padding:30px 0px\">
\t<section class=\" separation \">
\t\t<div class=\"\">
\t\t\t<div class=\" align-items-center heading  \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Printed & Solid<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"margin-top:3%;\">

\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t<div class=\"serv-name3\">

\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">New Arrivals</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t<div class=\"serv-name3\">

\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Best Seller</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t</div>


\t<br/>


\t";
        // line 360
        echo ($context["column_right"] ?? null);
        echo "


\t<!-- News -->
\t<section class=\"home-testimonial\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row d-flex justify-content-center testimonial-pos\">
\t\t\t\t<div class=\"col-md-12 pt-4 d-flex justify-content-center\">
\t\t\t\t\t<h3>Testimonials</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t\t<h2>Explore the  experience</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<section class=\"home-testimonial-bottom\">
\t\t\t\t<div class=\"container testimonial-inner\">
\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum deleniti adipisci molestias illum quia voluptate error quam sunt similique impedit.
\t\t\t\t\t\t\t\t\t&rdquo;</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\" src=\"https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Eng.</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique eligendi odit nesciunt sunt! Saepe est ipsam nobis quia impedit. Nemo.&rdquo;</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\" src=\"https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat voluptatibus nostrum unde pariatur deserunt enim, id cupiditate facere similique sunt.&rdquo;</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\" src=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</section>


\t\t\t<div class=\"fb-card mt-5\" style=\"background: #fff; margin-top:10px; padding:10px; max-height: 550px; overflow-y: auto;\">
                            
                            <script src=\"\" defer></script>
                            <div class=\"elfsight-app-7f65417f-5c88-4573-b789-68eed13537d5\"></div>
                        </div>


<script>
var swiper = new Swiper(\".topSwiper\", {
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
</script>

";
        // line 454
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
        return array (  700 => 454,  603 => 360,  529 => 288,  519 => 280,  508 => 275,  502 => 272,  498 => 271,  495 => 270,  491 => 269,  479 => 259,  477 => 258,  467 => 250,  464 => 249,  443 => 235,  439 => 233,  434 => 231,  429 => 230,  426 => 229,  421 => 227,  416 => 226,  410 => 224,  408 => 223,  405 => 222,  403 => 221,  395 => 216,  391 => 215,  384 => 210,  378 => 206,  361 => 202,  358 => 201,  356 => 200,  352 => 199,  341 => 195,  337 => 194,  330 => 189,  325 => 188,  323 => 187,  302 => 168,  299 => 167,  279 => 154,  275 => 152,  270 => 150,  265 => 149,  262 => 148,  257 => 146,  252 => 145,  246 => 143,  244 => 142,  241 => 141,  239 => 140,  231 => 135,  227 => 134,  221 => 130,  216 => 127,  200 => 125,  198 => 124,  194 => 123,  184 => 120,  180 => 119,  174 => 115,  169 => 114,  167 => 113,  148 => 96,  139 => 93,  134 => 92,  130 => 91,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
