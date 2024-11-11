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
class __TwigTemplate_3adec125b4c383e6fc187102b493c1d640ef41d99e68336e79832df96ab16971 extends \Twig\Template
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
\t<div class=\"container-wide\">
\t\t<div class=\"row\">
\t\t\t<div class=\"slider_banner\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
 ";
        // line 21
        if (($context["style_categories"] ?? null)) {
            // line 22
            echo "<!---Shop by room------>
<section class=\"shopy_by_room separation mt-5\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-center \">";
            // line 27
            echo ($context["heading_title"] ?? null);
            echo "
\t\t\t\t\tRoom Furniture
\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t</h2>
\t\t\t</div>

\t\t</div>
   
\t\t<div class=\"row mt-4\" style=\"justify-content: space-around;\">
\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 38
                echo "\t\t\t\t<div class=\"col-sm-3 text-center mt-2 \" style=\"padding-right: 25px;
\t\t\t\t\t\t    padding-left: 25px;\">

\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 41);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t<img src=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 42);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<h5 class=\" mt-1 mb-3\">";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 44);
                echo "</h5>
\t\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
\t\t</div>
\t</div>
</section>

<br/>";
        }
        // line 53
        echo "<!---Shop by room------><!-- mid slider area mid --><!-- mid slider area end -->

<section class=\"cares separation\"> <div class=\"container new-font\">
\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t<div class=\"col-12\">
\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t</h2>
\t\t\t<br/>
\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
        // line 65
        if (($context["new_products"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 70);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 71);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 76);
                echo "
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 84
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 87
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 88);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div></section><section class=\"cares separation mt-5\">
<div class=\"container new-font\">
\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t<div class=\"col-12\">
\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Popular On Woodpeel
\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t</h2>
\t\t\t<br/>
\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
        // line 112
        if (($context["pop_products"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 117);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 118);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 121);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                echo "
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 126
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 128
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 128)) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 129);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 131
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 135
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 135);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div></section>";
        // line 148
        echo ($context["column_right"] ?? null);
        echo "<!-- News --><section class=\"cares separation mt-5\" style=\"background:#2b4d64;\">
<div class=\"container new-font\" style=\"padding:20px;\">
\t<div class=\"row justify-content-around flex-xs-row-reverse\" style=\"color:white;\">
\t\t<div class=\"col-md-3 col-lg-3\">
\t\t\t<h2 style=\"color:white;\">Be A Woodpeel Insider</h2>
\t\t</div>
\t\t<div class=\"col-md-4 col-lg-4\" style=\"color:white;\">
\t\t\t<h5 style=\"color:white;\">15% Off On Your 1st Order. Sign Up Now!</h5>
\t\t</div>
\t\t<div class=\"col-md-4 col-lg-4\">
\t\t\t<form class=\"newsletter-inner mt-1\" id=\"mc-form\" style=\"color:white;\">
\t\t\t\t<input type=\"email\" style=\"color:white;\" class=\"news-field\" id=\"mc-email\" autocomplete=\"off\" placeholder=\"Enter your email address\">
\t\t\t\t<button class=\"news-btn mb-3\" style=\"padding:0px 10px ;color:white; \" id=\"mc-submit\">Subscribe</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div></section><script>
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
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 3,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 40
}
}
});</script>";
        // line 195
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
        return array (  386 => 195,  336 => 148,  329 => 143,  326 => 142,  318 => 139,  314 => 137,  309 => 135,  305 => 134,  300 => 132,  297 => 131,  291 => 129,  289 => 128,  286 => 127,  284 => 126,  278 => 123,  273 => 121,  263 => 118,  259 => 117,  254 => 114,  249 => 113,  247 => 112,  229 => 96,  226 => 95,  218 => 92,  214 => 90,  209 => 88,  205 => 87,  200 => 85,  197 => 84,  191 => 82,  189 => 81,  186 => 80,  184 => 79,  178 => 76,  173 => 74,  163 => 71,  159 => 70,  154 => 67,  149 => 66,  147 => 65,  133 => 53,  125 => 48,  115 => 44,  110 => 42,  106 => 41,  101 => 38,  97 => 37,  84 => 27,  77 => 22,  75 => 21,  66 => 14,  57 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/category.twig", "");
    }
}
