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
class __TwigTemplate_b7397bff0a7f5d6d209f809b1a453466dfbc2c1fe974b9117b40fa5a1af83264 extends \Twig\Template
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
\t\t\t<div class=\"side_banner hide_phone\">
\t\t\t\t<a href=\" ";
        // line 34
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 34);
        echo "\">
\t\t\t\t\t<img src=\" ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 35);
        echo "\" alt=\"\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- hero slider area end -->

<!---Shop by room------>
";
        // line 44
        if (($context["room_categories"] ?? null)) {
            // line 45
            echo "\t<section class=\"shopy_by_room separation mt-5 container\">
\t\t<div class=\"container\">
\t\t\t<div class=\" align-items-center heading \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Shop By Room<span class=\"hb\" style=\"
\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row mt-4\">
\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 57
                echo "\t\t\t\t\t<div class=\"col-sm-4 col-6 text-center mt-2\">
\t\t\t\t\t\t<a href=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 58);
                echo "\" class=\"zoom-img\">
\t\t\t\t\t\t\t<img src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 59);
                echo " \" width=\"100%\" alt=\"\" class=\"serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<h5 class=\" mt-2 mb-2\">
\t\t\t\t\t\t\t<span style=\"z-index:2;    position: relative;\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 62);
                echo "</span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</div>

\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
\t\t\t</div>
\t\t</div>
\t</section>

\t<br/>

";
        }
        // line 75
        echo "<!---Shop by room------>
<!---Shop by style------>
";
        // line 77
        if (($context["style_categories"] ?? null)) {
            // line 78
            echo "\t<section class=\"shopy_by_room separation mt-5 container\">
\t\t<div class=\"container\">
\t\t\t<div class=\" align-items-center heading  \">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h2 class=\"text-center \">Shop By Style<span class=\"hb\" style=\"
\t\t\t\t\t\t            text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"margin-top:3%;\">
\t\t\t\t";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category2"]) {
                // line 89
                echo "\t\t\t\t\t<div class=\"col-md-4 col-6 mt-3\">
\t\t\t\t\t\t<a href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "href", [], "any", false, false, false, 90);
                echo "\">
\t\t\t\t\t\t\t<p class=\"serv-name2\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "name", [], "any", false, false, false, 91);
                echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<img src=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "thumb", [], "any", false, false, false, 93);
                echo "\" alt=\"\" style=\"width:100%\" class=\"zoom serv-img\" title=\"\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t</div>
\t\t</section>
\t";
        }
        // line 100
        echo "
\t<!---Shop by style------>


\t<!-- mid slider area mid -->
\t<section class=\"slider-area container separation mt-5\">
\t\t<div class=\"container-wide\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"slider_banner\" style=\"width:95%\">
\t\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mid_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 111
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 111);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 112);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- mid slider area end -->

\t<section class=\"cares separation container\">
\t\t<div class=\"container new-font\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
\t\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
        // line 134
        if (($context["new_products"] ?? null)) {
            // line 135
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 139);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 140);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 148
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 150
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 150)) {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 151);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 153
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 154
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 154);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 156
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 156);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 157
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 157);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "\t\t\t\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"cares separation mt-5 container\">
\t\t<div class=\"container new-font\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h2 style=\"text-align: center; margin-bottom: 20px\">Popular On Woodpeel
\t\t\t\t\t\t<span class=\"hb\" style=\"
\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t\t\t</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"swiper topSwiper\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
        // line 184
        if (($context["pop_products"] ?? null)) {
            // line 185
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 189);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 190);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 190);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 190);
                echo "\" class=\"img-responsive pthumb\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\" href=\"";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 193);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"product_name mt-2\" style=\"color: black\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 198
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price mt-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 200)) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 201);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 203
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 204);
                        echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 206
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 206);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 207);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 223
        echo ($context["column_right"] ?? null);
        echo "


\t<!-- News -->
\t<section class=\"cares separation container mt-5\" style=\"background:#2b4d64;\">
\t\t<div class=\"container new-font\" style=\"padding:20px;\">
\t\t\t<div class=\"row justify-content-around flex-xs-row-reverse\" style=\"color:white;\">
\t\t\t\t<div class=\"col-md-3 col-lg-3\">
\t\t\t\t\t<h2 class=\"mobh\" style=\"color:white;\">Be A Woodpeel Insider</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-lg-4\" style=\"color:white;\">
\t\t\t\t\t<h5 class=\"mobp\" style=\"color:white;\">Get exclusive offers. Sign Up Now!</h5>
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
spaceBetween: 20,
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
spaceBetween: 10
}
}
});
\t</script>

\t";
        // line 281
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
        return array (  513 => 281,  452 => 223,  442 => 215,  439 => 214,  431 => 211,  427 => 209,  422 => 207,  418 => 206,  413 => 204,  410 => 203,  404 => 201,  402 => 200,  399 => 199,  397 => 198,  391 => 195,  386 => 193,  376 => 190,  372 => 189,  367 => 186,  362 => 185,  360 => 184,  339 => 165,  336 => 164,  328 => 161,  324 => 159,  319 => 157,  315 => 156,  310 => 154,  307 => 153,  301 => 151,  299 => 150,  296 => 149,  294 => 148,  288 => 145,  283 => 143,  273 => 140,  269 => 139,  264 => 136,  259 => 135,  257 => 134,  236 => 115,  227 => 112,  222 => 111,  218 => 110,  206 => 100,  201 => 97,  191 => 93,  186 => 91,  182 => 90,  179 => 89,  175 => 88,  163 => 78,  161 => 77,  157 => 75,  147 => 67,  136 => 62,  130 => 59,  126 => 58,  123 => 57,  119 => 56,  106 => 45,  104 => 44,  92 => 35,  88 => 34,  83 => 31,  74 => 28,  69 => 27,  65 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
