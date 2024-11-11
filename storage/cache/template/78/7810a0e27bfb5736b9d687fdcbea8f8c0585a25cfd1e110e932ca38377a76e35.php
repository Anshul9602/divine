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
class __TwigTemplate_a1101ddbf96d89236aec71b7688df1fb65551bf3fd854ed5daa2c600f6e0ec9c extends \Twig\Template
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
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
            echo "\">
\t\t\t\t\t\t\t<img src=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->
 ";
        // line 17
        if (($context["style_categories"] ?? null)) {
            // line 18
            echo "<!---Shop by room------>
<section class=\"shopy_by_room separation mt-5\">
\t<div class=\"container\">
\t\t<div class=\" align-items-center heading \">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<h2 class=\"text-center \">";
            // line 23
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
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 34
                echo "\t\t\t\t<div class=\"col-sm-3 text-center mt-2 \" style=\"padding-right: 25px;
\t\t\t\t\t\t    padding-left: 25px;\">

\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 37);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t<img src=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 38);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t</a>
\t\t\t\t\t<h5 class=\" mt-1 mb-3\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 40);
                echo "</h5>
\t\t\t\t</div>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
\t\t</div>
\t</div>
</section>

<br/>";
        }
        // line 49
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
        // line 61
        if (($context["new_products"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 63
                echo "\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 67);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 70);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 72);
                echo "
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 75
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 77
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 80
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 81
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 83);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 84
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 84);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t\t\t\t";
        }
        // line 92
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
        // line 108
        if (($context["pop_products"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 110
                echo "\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 113);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 114);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 114);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 117);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 119);
                echo "
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                // line 122
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 124
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 127
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 128);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 130);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 131
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 131);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div></section>";
        // line 144
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
        // line 191
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
        return array (  382 => 191,  332 => 144,  325 => 139,  322 => 138,  314 => 135,  310 => 133,  305 => 131,  301 => 130,  296 => 128,  293 => 127,  287 => 125,  285 => 124,  282 => 123,  280 => 122,  274 => 119,  269 => 117,  259 => 114,  255 => 113,  250 => 110,  245 => 109,  243 => 108,  225 => 92,  222 => 91,  214 => 88,  210 => 86,  205 => 84,  201 => 83,  196 => 81,  193 => 80,  187 => 78,  185 => 77,  182 => 76,  180 => 75,  174 => 72,  169 => 70,  159 => 67,  155 => 66,  150 => 63,  145 => 62,  143 => 61,  129 => 49,  121 => 44,  111 => 40,  106 => 38,  102 => 37,  97 => 34,  93 => 33,  80 => 23,  73 => 18,  71 => 17,  64 => 12,  55 => 9,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/category.twig", "");
    }
}
