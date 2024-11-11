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
class __TwigTemplate_ed63384ac795daf5742670767c18fd13eab09cda76eb9899e65d4a969f6f166b extends \Twig\Template
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
</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"container-wide\">
\t\t<div class=\"row slide-row\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 89
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 89);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 90);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        // line 110
        if (($context["new_products"] ?? null)) {
            // line 111
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 112
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 116);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 117);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 122);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 122);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 122);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 122);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 131);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 132);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 137
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137)) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 139
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139)) {
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 142);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 143);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 145)) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 147
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 147);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 151);
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
            // line 164
            echo "\t\t\t\t\t\t";
        }
        // line 165
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
        // line 184
        if (($context["pop_products"] ?? null)) {
            // line 185
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 191);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 192);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 192);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 192);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 196);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 197
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 197)) {
                    // line 198
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 199);
                    echo "\" btnname=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 199);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 199);
                    echo "\" btnhref=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 199);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 199);
                    echo "\" btnsprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 199);
                    echo "\" style=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 203
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\" aria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 212);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 213);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 218
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 218)) {
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 220
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 220)) {
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 221);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 223);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 224
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 224);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 226)) {
                        // line 227
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 228
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 228);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 232);
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
            // line 246
            echo "\t\t\t\t\t\t";
        }
        // line 247
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>
";
        // line 255
        if (($context["room_categories"] ?? null)) {
            // line 256
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
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 267
                echo "\t\t\t\t\t<div class=\"col-sm-4 col-6 text-center mt-2\">
\t\t\t\t\t\t<a href=\"";
                // line 268
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 268);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t\t<img src=\"";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 269);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5 class=\" mt-2 mb-2\">
\t\t\t\t\t\t\t<span style=\"z-index:2;    position: relative;\">";
                // line 272
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 272);
                echo "</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<br/>

";
        }
        // line 285
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

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.4;\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t<div class=\"serv-name3\">

\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Best Seller</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.4;\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t</div>


\t<br/>


\t";
        // line 357
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
\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\" src=\"https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">ceo</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\" src=\"https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.&rdquo;</div>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\" src=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\" alt=\"\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</section>


\t\t\t<script>
\t\t\t\tvar swiper = new Swiper(\".topSwiper\", {
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
\t\t\t</script>

\t\t\t";
        // line 443
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
        return array (  689 => 443,  600 => 357,  526 => 285,  516 => 277,  505 => 272,  499 => 269,  495 => 268,  492 => 267,  488 => 266,  476 => 256,  474 => 255,  464 => 247,  461 => 246,  440 => 232,  436 => 230,  431 => 228,  426 => 227,  423 => 226,  418 => 224,  413 => 223,  407 => 221,  405 => 220,  402 => 219,  400 => 218,  392 => 213,  388 => 212,  381 => 207,  375 => 203,  358 => 199,  355 => 198,  353 => 197,  349 => 196,  338 => 192,  334 => 191,  327 => 186,  322 => 185,  320 => 184,  299 => 165,  296 => 164,  276 => 151,  272 => 149,  267 => 147,  262 => 146,  259 => 145,  254 => 143,  249 => 142,  243 => 140,  241 => 139,  238 => 138,  236 => 137,  228 => 132,  224 => 131,  218 => 127,  213 => 124,  197 => 122,  195 => 121,  191 => 120,  181 => 117,  177 => 116,  171 => 112,  166 => 111,  164 => 110,  145 => 93,  136 => 90,  131 => 89,  127 => 88,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
