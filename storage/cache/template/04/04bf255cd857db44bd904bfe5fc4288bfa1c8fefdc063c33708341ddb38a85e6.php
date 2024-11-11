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
class __TwigTemplate_625fe955d9edb0672d60ea65641159b4f16979e7abc91f58c14cd6c86fac378e extends \Twig\Template
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    padding-left: 25px;\">

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
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
\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 69);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 69);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 72);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 77
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 79
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79)) {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 82
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 85);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 86);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t\t\t";
        }
        // line 94
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t</h2>
\t\t\t\t<br/>
\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 112
        if (($context["pop_products"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 114
                echo "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 117);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 118);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 118);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 121);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                echo "
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 126
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 128
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 128)) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 129);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 131
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 135
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 135);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 139
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t\t\t\t";
        }
        // line 143
        echo "\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 150
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
        // line 201
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
        return array (  392 => 201,  338 => 150,  329 => 143,  326 => 142,  318 => 139,  314 => 137,  309 => 135,  305 => 134,  300 => 132,  297 => 131,  291 => 129,  289 => 128,  286 => 127,  284 => 126,  278 => 123,  273 => 121,  263 => 118,  259 => 117,  254 => 114,  249 => 113,  247 => 112,  227 => 94,  224 => 93,  216 => 90,  212 => 88,  207 => 86,  203 => 85,  198 => 83,  195 => 82,  189 => 80,  187 => 79,  184 => 78,  182 => 77,  176 => 74,  171 => 72,  161 => 69,  157 => 68,  152 => 65,  147 => 64,  145 => 63,  130 => 50,  121 => 44,  111 => 40,  106 => 38,  102 => 37,  97 => 34,  93 => 33,  80 => 23,  73 => 18,  71 => 17,  64 => 12,  55 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/category.twig", "");
    }
}
