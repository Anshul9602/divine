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
class __TwigTemplate_bf1e9f909bdefcbea1f445eeabee899f539ec5d7ff374e86451022a65ead3a2c extends \Twig\Template
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
\t\twidth: 100%;
\t}
</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"\">
\t\t<div class=\"row slide-row\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 106
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 106);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 107);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
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
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 127
        if (($context["new_products"] ?? null)) {
            // line 128
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 129
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 134);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 139
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 141);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 141);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 142);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 142);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 143);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 150
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 154);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 160
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160)) {
                    // line 161
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 162
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 162)) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 163);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 165);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source,                         // line 167
$context["product"], "price", [], "any", false, false, false, 167);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 169)) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 171
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 171);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 177);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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


<section class=\"cares separation mt-5 container\">
\t<div class=\"container new-font\">
\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Best Seller
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 210
        if (($context["pop_products"] ?? null)) {
            // line 211
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 212
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 217);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 218
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 218);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 218);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 219);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 223);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 224
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 224)) {
                    // line 225
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 226);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 227);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 227);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 228);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 228);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 229);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 234
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 239
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 244
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 244);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 245);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 250
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 252
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 252)) {
                        // line 253
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 253);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 255
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 255);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source,                         // line 257
$context["product"], "price", [], "any", false, false, false, 257);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 259)) {
                        // line 260
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 261
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 261);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 263
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 265
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 267
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 267);
                echo "% OFF</span>


\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "\t\t\t\t\t\t";
        }
        // line 282
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>










";
        // line 300
        if (($context["room_categories"] ?? null)) {
            // line 301
            echo "<section class=\"shopy_by_room separation mt-5 container\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-center \">Shop By Categories<span class=\"hb\"
\t\t\t\t\t\tstyle=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t";
            // line 312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 313
                echo "\t\t\t<div class=\"col-sm-2 col-6 text-center mt-2\">

\t\t\t\t<div class=\"card prod-card\">
\t\t\t\t\t<a href=\"";
                // line 316
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 316);
                echo "\"><img
\t\t\t\t\t\t\tdata-src=\"";
                // line 317
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 317);
                echo "\"
\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\tsrc=\"";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 319);
                echo "\">
\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 321);
                echo "</h6><span class=\"elastic-link\"
\t\t\t\t\t\t\t\tdata-labeltext=\"Explore\">&nbsp;</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a></div>


\t\t\t\t
\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "
\t\t</div>
\t</div>
</section>

<br />

";
        }
        // line 339
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
\t\t\t\t\t<h2 class=\"text-center \">Printed & Solid<span class=\"hb\"
\t\t\t\t\t\t\tstyle=\"display: flex;justify-content: center;\"></span>
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

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\"
\t\t\t\t\t\t\tclass=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-6 mt-3 p-0\" style=\"    background: black;\">
\t\t\t\t\t<div class=\"serv-name3\">

\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Best Seller</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"\">

\t\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\" alt=\"\" style=\"width:100%;opacity: 0.2;\"
\t\t\t\t\t\t\tclass=\"zoom serv-img\" title=\"\" />
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t</section>
</div>


<br />


";
        // line 414
        echo ($context["column_right"] ?? null);
        echo "


<!-- News -->
<section class=\"home-testimonial\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row d-flex justify-content-center testimonial-pos\">
\t\t\t<div class=\"col-md-12 pt-4 d-flex justify-content-center\">
\t\t\t\t<h3>Testimonials</h3>
\t\t\t</div>
\t\t\t<div class=\"col-md-12 d-flex justify-content-center\">
\t\t\t\t<h2>Explore the experience</h2>
\t\t\t</div>
\t\t</div>
\t\t<section class=\"home-testimonial-bottom\">
\t\t\t<div class=\"container testimonial-inner\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Dolorum deleniti adipisci molestias illum quia
\t\t\t\t\t\t\t\t\tvoluptate error quam sunt similique impedit.
\t\t\t\t\t\t\t\t\t&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Eng.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Similique eligendi odit nesciunt sunt! Saepe est ipsam
\t\t\t\t\t\t\t\t\tnobis quia impedit. Nemo.&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 style-3\">
\t\t\t\t\t\t<div class=\"tour-item \">
\t\t\t\t\t\t\t<div class=\"tour-desc bg-white\">
\t\t\t\t\t\t\t\t<div class=\"tour-text color-grey-3 text-center\">&ldquo;Lorem ipsum dolor sit amet,
\t\t\t\t\t\t\t\t\tconsectetur adipisicing elit. Placeat voluptatibus nostrum unde pariatur deserunt
\t\t\t\t\t\t\t\t\tenim, id cupiditate facere similique sunt.&rdquo;</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center pt-2 pb-2\"><img class=\"tm-people\"
\t\t\t\t\t\t\t\t\t\tsrc=\"https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500\"
\t\t\t\t\t\t\t\t\t\talt=\"\"></div>
\t\t\t\t\t\t\t\t<div class=\"link-name d-flex justify-content-center\">Balbir Kaur</div>
\t\t\t\t\t\t\t\t<div class=\"link-position d-flex justify-content-center\">Student</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
</section>


<div class=\"fb-card mt-5\" style=\"background: #fff; margin-top:10px; padding:10px; max-height: 550px; overflow-y: auto;\">

\t<script src=\"\" defer></script>
\t<div class=\"elfsight-app-7f65417f-5c88-4573-b789-68eed13537d5\"></div>
</div>


<script>
\tvar swiper = new Swiper(\".topSwiper\", {
\t\tpagination: {
\t\t\tel: \".top-swiper-pagination\",
\t\t\tclickable: true
\t\t},
\t\tnavigation: {
\t\t\tnextEl: \".swiper-button-next\",
\t\t\tprevEl: \".swiper-button-prev\"
\t\t},
\t\tautoplay: false,
\t\t// Default parameters
\t\tslidesPerView: 4,
\t\tspaceBetween: 10,
\t\t// Responsive breakpoints
\t\tbreakpoints: { // when window width is >= 320px
\t\t\t320: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 480px
\t\t\t480: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t},
\t\t\t// when window width is >= 640px
\t\t\t740: {
\t\t\t\tslidesPerView: 2,
\t\t\t\tspaceBetween: 5
\t\t\t}
\t\t}
\t});
</script>

";
        // line 520
        echo ($context["footer"] ?? null);
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
        return array (  779 => 520,  670 => 414,  593 => 339,  583 => 331,  567 => 321,  562 => 319,  557 => 317,  553 => 316,  548 => 313,  544 => 312,  531 => 301,  529 => 300,  509 => 282,  506 => 281,  486 => 267,  482 => 265,  478 => 263,  473 => 261,  468 => 260,  465 => 259,  460 => 257,  459 => 256,  454 => 255,  448 => 253,  446 => 252,  443 => 251,  441 => 250,  433 => 245,  429 => 244,  422 => 239,  415 => 234,  407 => 229,  401 => 228,  395 => 227,  391 => 226,  388 => 225,  386 => 224,  382 => 223,  375 => 219,  369 => 218,  365 => 217,  358 => 212,  353 => 211,  351 => 210,  330 => 191,  327 => 190,  308 => 177,  304 => 175,  300 => 173,  295 => 171,  290 => 170,  287 => 169,  282 => 167,  281 => 166,  276 => 165,  270 => 163,  268 => 162,  265 => 161,  263 => 160,  255 => 155,  251 => 154,  245 => 150,  239 => 146,  233 => 143,  227 => 142,  221 => 141,  216 => 140,  214 => 139,  210 => 138,  204 => 135,  198 => 134,  194 => 133,  188 => 129,  183 => 128,  181 => 127,  162 => 110,  153 => 107,  148 => 106,  144 => 105,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
