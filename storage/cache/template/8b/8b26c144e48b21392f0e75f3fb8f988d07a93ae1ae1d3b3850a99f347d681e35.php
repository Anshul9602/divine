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
class __TwigTemplate_03007fad90b017b696a87c0772cbfa3536280c80f1cb6641c7a20a584b0d5af2 extends \Twig\Template
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
\t.exp-more{
\t\t
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\tborder-radius: 50%;
\t\t\tbackground: rgb(255, 255, 255, 0.5);
\t\t\tcursor: pointer;
\t\t\twidth: 37px;
\t\t\theight: 37px;
\t\t\ttext-align: center;
\t\t
\t}
\t

.btn.btn-secondary-3 {
    color: #832729;
    border: 0.01em solid #832729;
    background-color: #ffffff;
    border-radius: 0.325em;
    padding: 0.675em 1.275em;
    border-width: thin;
    font-weight: 600;
    white-space: nowrap;
    font-size: 0.75em;
}
.btn.btn-wide {
    min-width: 140px;
}


</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
\t<div class=\"\">
\t\t<div class=\"row slide-row\" style=\"width:100%;\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 223
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 223);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 224
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 224);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
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
        // line 244
        if (($context["new_products"] ?? null)) {
            // line 245
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 246
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 250);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 251
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 251);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 251);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 252);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a class=\"exp-more\" >
\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn-wide btn-secondary-3\">Explore More</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "\t\t\t\t\t\t";
        }
        // line 265
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
        // line 284
        if (($context["pop_products"] ?? null)) {
            // line 285
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 286
                echo "\t\t\t\t\t\t<div class=\"swiper-slide\">

\t\t\t\t\t\t\t<div class=\" p-card-holder\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 291
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 291);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 292
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 292);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 292);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 293);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"bestSeller_TT\">BEST SELLER</div>
\t\t\t\t\t\t\t\t\t<a class=\"wishlist_link \" onclick=\"wishlist.add('";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 297);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t";
                // line 298
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "wish", [], "any", false, false, false, 298)) {
                    // line 299
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
                    // line 300
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 300);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnname=\"";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 301);
                    echo "\" btnimg=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 301);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnhref=\"";
                    // line 302
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 302);
                    echo "\" btnprice=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 302);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tbtnsprice=\"";
                    // line 303
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 303);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tstyle=\"color: #f06639; font-size:24px;\"></i>


\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 308
                    echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\" style=\"color: #f06639; font-size:24px;\"
\t\t\t\t\t\t\t\t\t\t\taria-hidden=\"true\"></i>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 313
                echo "\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"product-card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 318
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 318);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 319
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 319);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 324
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 324)) {
                    // line 325
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 326
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 326)) {
                        // line 327
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 327);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 329
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 329);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 330
                        echo twig_get_attribute($this->env, $this->source,                         // line 331
$context["product"], "price", [], "any", false, false, false, 331);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 333
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 333)) {
                        // line 334
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 335
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 335);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 339
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"off_p\">";
                // line 341
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 341);
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
            // line 355
            echo "\t\t\t\t\t\t";
        }
        // line 356
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!---Shop by room------>










";
        // line 374
        if (($context["room_categories"] ?? null)) {
            // line 375
            echo "<section class=\"shopy_by_room separation mt-5 container\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-center  heading3 bold\">Shop By Categories<span class=\"hb\"
\t\t\t\t\t\tstyle=\"display: flex;justify-content: center;\"></span>
\t\t\t\t</h2>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row mt-4\">
\t\t\t";
            // line 386
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 387
                echo "\t\t\t<div class=\"col-sm-2 col-6 text-center mt-2\">

\t\t\t\t<div class=\"card prod-card\">
\t\t\t\t\t<a href=\"";
                // line 390
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 390);
                echo "\"><img
\t\t\t\t\t\t\tdata-src=\"";
                // line 391
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 391);
                echo "\"
\t\t\t\t\t\t\tclass=\"card-img-top\" alt=\"\"
\t\t\t\t\t\t\tsrc=\"";
                // line 393
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 393);
                echo "\">
\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t<h6 class=\"card-title text-center\">";
                // line 395
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 395);
                echo "</h6>
\t\t\t\t\t\t\t<h6 class=\" text-center elastic-link\">Explore <i class=\"fa fa-angle-right\"></i></h6>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</a></div>


\t\t\t\t
\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            echo "
\t\t</div>
\t</div>
</section>

<br />

";
        }
        // line 414
        echo "




<div style=\"background:#f1f1f1; padding:30px 0px\">
\t<section class=\" separation \">
\t\t<div class=\"\">
\t\t\t<div class=\" align-items-center heading  \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center heading3 bold\">Printed & Solid<span class=\"hb\"
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
        // line 466
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
        // line 572
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
        return array (  769 => 572,  660 => 466,  606 => 414,  596 => 406,  579 => 395,  574 => 393,  569 => 391,  565 => 390,  560 => 387,  556 => 386,  543 => 375,  541 => 374,  521 => 356,  518 => 355,  498 => 341,  494 => 339,  490 => 337,  485 => 335,  480 => 334,  477 => 333,  472 => 331,  471 => 330,  466 => 329,  460 => 327,  458 => 326,  455 => 325,  453 => 324,  445 => 319,  441 => 318,  434 => 313,  427 => 308,  419 => 303,  413 => 302,  407 => 301,  403 => 300,  400 => 299,  398 => 298,  394 => 297,  387 => 293,  381 => 292,  377 => 291,  370 => 286,  365 => 285,  363 => 284,  342 => 265,  339 => 264,  321 => 252,  315 => 251,  311 => 250,  305 => 246,  300 => 245,  298 => 244,  279 => 227,  270 => 224,  265 => 223,  261 => 222,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
