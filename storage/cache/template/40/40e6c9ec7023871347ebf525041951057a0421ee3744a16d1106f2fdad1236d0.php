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
class __TwigTemplate_512513c3f7a9cb555beedd54a2ab6e44cd90c9092743bb0d9bf1560cc9f44f6c extends \Twig\Template
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
\t\t\t<div class=\"side_banner\">
\t\t\t\t<a href=\" ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 17);
        echo "\">
\t\t\t\t\t<img src=\" ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 18);
        echo "\" alt=\"\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->

<!---Shop by room------>
";
        // line 27
        if (($context["room_categories"] ?? null)) {
            // line 28
            echo "\t<section class=\"shopy_by_room separation mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\" align-items-center heading \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Shop By Room<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 40
                echo "\t\t\t\t\t<div class=\"col-sm-4 text-center mt-2\">
\t\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 41);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t\t<img src=\"";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 42);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5 class=\" mt-2 mb-2\">
\t\t\t\t\t\t\t<span style=\"z-index:2;    position: relative;\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 45);
                echo "</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<br/>

";
        }
        // line 58
        echo "<!---Shop by room------>
<!---Shop by style------>
";
        // line 60
        if (($context["style_categories"] ?? null)) {
            // line 61
            echo "\t<section class=\"shopy_by_room separation mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\" align-items-center heading  \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Shop By Style<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t            text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"margin-top:3%;\">
\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category2"]) {
                // line 72
                echo "\t\t\t\t\t<div class=\"col-md-4 mt-3\">
\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "href", [], "any", false, false, false, 73);
                echo "\">
\t\t\t\t\t\t\t<p class=\"serv-name2\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "name", [], "any", false, false, false, 74);
                echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<img src=\"";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "thumb", [], "any", false, false, false, 76);
                echo "\" alt=\"\" style=\"width:100%\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t</div>
\t\t</section>
\t";
        }
        // line 83
        echo "
\t<!---Shop by style------>


\t<!-- mid slider area mid -->
\t<section class=\"slider-area  separation mt-5\">
\t\t<div class=\"container-wide\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"slider_banner\" style=\"width:95%\">
\t\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t\t";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mid_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 94
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 94);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 95);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- mid slider area end -->

\t<section class=\"cares separation\">
\t\t<div class=\"container new-font\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"swiper newSwiper\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
        // line 117
        if (($context["new_products"] ?? null)) {
            // line 118
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 122);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 123);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 123);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 126);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 131)) {
                    // line 132
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 133
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 133)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 136
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 137);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 140);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t\t\t\t\t\t\t";
        }
        // line 148
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"cares separation mt-5\">
\t\t<div class=\"container new-font\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Popular On Woodpeel
\t\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"splide \" id=\"shapeSlider\" role=\"group\" aria-label=\"Splide Basic HTML Example\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t\t\t\t";
        // line 168
        if (($context["pop_products"] ?? null)) {
            // line 169
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 173);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 174);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 174);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 174);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 177);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 179);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 182
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 182)) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 184
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 184)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 185);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 187
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 188
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 188);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 190
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 190);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 191
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 191);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 193
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 200
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 209
        echo ($context["column_right"] ?? null);
        echo "


\t<!-- News -->
\t<section class=\"cares separation mt-5\" style=\"background:#2b4d64;\">
\t\t<div class=\"container new-font\" style=\"padding:20px;\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\" style=\"color:white;\">
\t\t\t\t<div class=\"col-md-3 col-lg-3\">
\t\t\t\t\t<h2 style=\"color:white;\">Be A Woodpeel Insider</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-lg-4\" style=\"color:white;\">
\t\t\t\t\t<h5 style=\"color:white;\">15% Off On Your 1st Order. Sign Up Now!</h5>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-lg-4\">
\t\t\t\t\t<form class=\"newsletter-inner mt-1\" id=\"mc-form\" style=\"color:white;\">
\t\t\t\t\t\t<input type=\"email\" style=\"color:white;\" class=\"news-field\" id=\"mc-email\" autocomplete=\"off\" placeholder=\"Enter your email address\">
\t\t\t\t\t\t<button class=\"news-btn mb-3\" style=\"padding:0px 10px ;color:white; \" id=\"mc-submit\">Subscribe</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t>
\t<script>

\t\tnew Splide(\"#shapeSlider\", {
mediaQuery: \"min\",
type: \"loop\",
breakpoints: {
640: {
perPage: 1
},
767: {
perPage: 3
},
1024: {
perPage: 4
}
},
focus: \"center\"
}).mount();


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
slidesPerView: 3,
spaceBetween: 10,
// Responsive breakpoints
breakpoints: { // when window width is >= 320px
320: {
slidesPerView: 1,
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 1,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 40
}
}
});

var swiper = new Swiper(\".newSwiper\", {
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
slidesPerView: 1,
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 1,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 40
}
}
});

var swiper = new Swiper(\".popSwiper\", {
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
slidesPerView: 1,
spaceBetween: 20
},
// when window width is >= 480px
480: {
slidesPerView: 1,
spaceBetween: 30
},
// when window width is >= 640px
640: {
slidesPerView: 4,
spaceBetween: 40
}
}
});
\t</script>

\t";
        // line 351
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
        return array (  583 => 351,  438 => 209,  427 => 200,  424 => 199,  415 => 195,  411 => 193,  406 => 191,  402 => 190,  397 => 188,  394 => 187,  388 => 185,  386 => 184,  383 => 183,  381 => 182,  375 => 179,  370 => 177,  360 => 174,  356 => 173,  351 => 170,  346 => 169,  344 => 168,  322 => 148,  319 => 147,  311 => 144,  307 => 142,  302 => 140,  298 => 139,  293 => 137,  290 => 136,  284 => 134,  282 => 133,  279 => 132,  277 => 131,  271 => 128,  266 => 126,  256 => 123,  252 => 122,  247 => 119,  242 => 118,  240 => 117,  219 => 98,  210 => 95,  205 => 94,  201 => 93,  189 => 83,  184 => 80,  174 => 76,  169 => 74,  165 => 73,  162 => 72,  158 => 71,  146 => 61,  144 => 60,  140 => 58,  130 => 50,  119 => 45,  113 => 42,  109 => 41,  106 => 40,  102 => 39,  89 => 28,  87 => 27,  75 => 18,  71 => 17,  66 => 14,  57 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
