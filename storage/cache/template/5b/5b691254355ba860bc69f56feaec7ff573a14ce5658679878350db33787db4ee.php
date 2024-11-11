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
class __TwigTemplate_eeda14857abbe1846583abbc14c4f49e0552b23ebda67ddd9c9a0811a19b155a extends \Twig\Template
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
\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 12px;
\t\ttop: 22px;
\t\tbackground: #832729;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 25px 0px 15px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}
\t.bestSeller_TT {
\t\tposition: absolute;
\t\tfont-size: 12px;
\t\ttop: 22px;
\t\tbackground: #832729;
\t\tcolor: #fff;
\t\tfont-family: 'Nunito', sans-serif;
\t\tfont-weight: 700;
\t\tletter-spacing: 0.03rem;
\t\tpadding: 0px 25px 0px 15px;
\t\tclip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0 100%, 0% 50%, 0 0);
\t}
\t.heading3.bold {
\t\tfont-weight: 800;
\t\tletter-spacing: 0.5px;
\t}
\t
\t.heading3.bold {
\t\tfont-weight: 700;
\t}
\t.heading3.bold {
\t\tfont-weight: 800;
\t\tletter-spacing: 0.5px;
\t}
\t.heading3 {
\t\tfont-size: 40px;
\t\tline-height: 40px;
\t\tcolor: #832729;
\t\tfont-weight: 400;
\t}
\t.elastic-link {
\t\tposition: relative;
\t\ttext-align: center;
\t\tpadding: 0;
\t\tfont-size: 14px;
\t\tdisplay: inline-block;
\t\twidth: auto;
\t\theight: 1.25em;
\t\tfont-weight: 600;
\t\t-moz-transition: width 0.3s ease-out;
\t\t-o-transition: width 0.3s ease-out;
\t\t-webkit-transition: width 0.3s ease-out;
\t\ttransition: width 0.3s ease-out;
\t\tz-index: 0;
\t}
\t.card .card-title {
\t\tfont-size: 14px;
\t\tline-height: 14px;
\t\tcolor: #832729;
\t\tfont-weight: bold;
\t}
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
<section class=\"slider-area \">
\t<div class=\"\">
\t\t<div class=\"row slide-row m-0\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 192
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 192);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 193);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
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
\t\t\t\t<h2 class=\"heading3 bold\"style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 213
        if (($context["new_products"] ?? null)) {
            // line 214
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 215
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 219);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 220);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 220);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 221
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 221);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 224);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 225
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 225)) {
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
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
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 236
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7 product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 240);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 241
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 241);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 246
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 246)) {
                    // line 247
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 248
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 248)) {
                        // line 249
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 249);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 251
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 251);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 252
                        echo twig_get_attribute($this->env, $this->source,                         // line 253
$context["product"], "price", [], "any", false, false, false, 253);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 255
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 255)) {
                        // line 256
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 257);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 261
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 263);
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
            // line 276
            echo "\t\t\t\t\t\t";
        }
        // line 277
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
\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\" class=\"heading3 bold\">Best Seller
\t\t\t\t\t<span class=\"hb\" style=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br />
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 296
        if (($context["pop_products"] ?? null)) {
            // line 297
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 298
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 303
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 303);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 304
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 304);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 304);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 305
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 305);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"bestSeller_TT\">BEST SELLER</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 309
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 309);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 310
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 310)) {
                    // line 311
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 312);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 313);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 313);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 314);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 314);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 315);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 320
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 325
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 330
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 330);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 331
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 331);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 336
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 336)) {
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 338
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 338)) {
                        // line 339
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 339);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 341
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 341);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 342
                        echo twig_get_attribute($this->env, $this->source,                         // line 343
$context["product"], "price", [], "any", false, false, false, 343);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 345
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 345)) {
                        // line 346
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 347
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 347);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 349
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 351
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 353
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 353);
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
            // line 367
            echo "\t\t\t\t\t\t";
        }
        // line 368
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>










";
        // line 386
        if (($context["room_categories"] ?? null)) {
            // line 387
            echo "<section class=\"shopy_by_room separation mt-5 \" style=\"background: #fde4e0;\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12 pt-3\">
\t\t\t\t<h2 class=\"text-center  heading3 bold\">Shop By Categories
\t\t\t\t</h2>
\t\t\t\t<p class=\"section-header__title mt-3 text-center\">
          A royal fusion of modern and ethnic wear for all occasions.
        </p>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row mt-4 pb-3\">
\t\t\t";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 401
                echo "\t\t\t<div class=\"col-sm-4 col-6 text-center mt-2\">

\t\t\t\t<div class=\"card prod-card\">
\t\t\t\t\t<a href=\"";
                // line 404
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 404);
                echo "\"><img
\t\t\t\t\t\t\tdata-src=\"";
                // line 405
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 405);
                echo "\"
\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\tsrc=\"";
                // line 407
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 407);
                echo "\">
\t\t\t\t\t\t
\t\t\t\t\t</a></div>


\t\t\t\t
\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo "
\t\t</div>
\t</div>
</section>



";
        }
        // line 424
        echo "




<div style=\"background:#f1f1f1; padding:30px 0px\">
\t<section class=\" separation \">
\t\t<div class=\"\">
\t\t\t
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





";
        // line 470
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


<div class=\"container mb-4 mt-4\">
\t<div class=\"row\">
\t  <div class=\"col-12\" style=\"margin-top:10px\">
\t   <script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
\t\t<div class=\"elfsight-app-8674d6d0-1d23-4bf6-a003-4f998062b560\"></div>
\t  </div>
\t</div>
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
        // line 579
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
        return array (  835 => 579,  723 => 470,  675 => 424,  665 => 416,  650 => 407,  645 => 405,  641 => 404,  636 => 401,  632 => 400,  617 => 387,  615 => 386,  595 => 368,  592 => 367,  572 => 353,  568 => 351,  564 => 349,  559 => 347,  554 => 346,  551 => 345,  546 => 343,  545 => 342,  540 => 341,  534 => 339,  532 => 338,  529 => 337,  527 => 336,  519 => 331,  515 => 330,  508 => 325,  501 => 320,  493 => 315,  487 => 314,  481 => 313,  477 => 312,  474 => 311,  472 => 310,  468 => 309,  461 => 305,  455 => 304,  451 => 303,  444 => 298,  439 => 297,  437 => 296,  416 => 277,  413 => 276,  394 => 263,  390 => 261,  386 => 259,  381 => 257,  376 => 256,  373 => 255,  368 => 253,  367 => 252,  362 => 251,  356 => 249,  354 => 248,  351 => 247,  349 => 246,  341 => 241,  337 => 240,  331 => 236,  325 => 232,  319 => 229,  313 => 228,  307 => 227,  302 => 226,  300 => 225,  296 => 224,  290 => 221,  284 => 220,  280 => 219,  274 => 215,  269 => 214,  267 => 213,  248 => 196,  239 => 193,  234 => 192,  230 => 191,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
