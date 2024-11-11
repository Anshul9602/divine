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
class __TwigTemplate_0a47b683138287b53fe22dbd3e88d3bb58805d7f6eda45de9bb5f36b9aa7175a extends \Twig\Template
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
   <div class=\"container-wide\">
      <div class=\"row\">
      <div class=\"slider_banner\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
            echo "\">
            <img src=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
      </div>
         <div class=\"side_banner\">
            <a href=\" ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 17);
        echo "\">
                  <img src=\" ";
        // line 18
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 18);
        echo "\" alt=\"\" />
            </a>
         </div>
      </div>
   </div>
</section>
<!-- hero slider area end -->

<!---Shop by room------>";
        // line 26
        if (($context["room_categories"] ?? null)) {
            // line 27
            echo "<section class=\"shopy_by_room separation mt-5\">
   <div class=\"container\">
   <div class=\" align-items-center heading \" >
      <div class=\"col-md-12\">
        <h2 class=\"text-center \">Shop By Room<span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
      </div>

    </div>
      <div class=\"row mt-4\">
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 38
                echo "         <div class=\"col-sm-4 text-center mt-2\">
            <a href=\"";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 39);
                echo "\" class=\"zoom-img\">
             <img src=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 40);
                echo " \"  width=\"100%\" alt=\"\"  class=\"serv-img\" title=\"\" />
             </a>
             <h5 class=\" mt-2 mb-2\"><span style=\"z-index:2;    position: relative;\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 42);
                echo "</span></h5> 
         </div>
       
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        
      </div>
   </div>
</section>

<br />

";
        }
        // line 54
        echo "<!---Shop by room------>
<!---Shop by style------>
";
        // line 56
        if (($context["style_categories"] ?? null)) {
            // line 57
            echo "<section class=\"shopy_by_room separation mt-5 container\">
   <div class=\"container\">
   <div class=\" align-items-center heading  \" >
      <div class=\"col-md-12\">
         <h2 class=\"text-center \">Shop By Style<span class=\"hb\" style=\"
            text-align: -webkit-center;\"></span></h2>
      </div>
   </div>
   <div class=\"row\" style=\"margin-top:3%;\">
      ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category2"]) {
                // line 67
                echo "         <div class=\"col-md-4 mt-3\">
            <a href=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "href", [], "any", false, false, false, 68);
                echo "\">
               <p class=\"serv-name2\">";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "name", [], "any", false, false, false, 69);
                echo " </p>
               <img src=\"";
                // line 70
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "thumb", [], "any", false, false, false, 70);
                echo "\" alt=\"\" style=\"width:100%\" class=\"zoom serv-img\" title=\"\" />
            </a>
         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "   </div>
</section>
";
        }
        // line 77
        echo "
<!---Shop by style------>


<!-- mid slider area mid -->
<section class=\"slider-area container separation mt-5\">
   <div class=\"container-wide\">
      <div class=\"row d-flex justify-content-center\">
      <div class=\"slider_banner\" style=\"width:95%\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mid_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 88
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 88);
            echo "\">
            <img src=\"";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 89);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
      </div>
        
      </div>
   </div>
</section>
<!-- mid slider area end -->

<section class=\"cares separation container\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">New Arrivals
        <span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 110
        if (($context["new_products"] ?? null)) {
            // line 111
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 112
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 115);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 116);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 116);
                echo "\"
                      title=\"";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 120);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 122);
                echo "
                  </h6>
                </a>
                ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 125)) {
                    // line 126
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 127
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 127)) {
                        // line 128
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 128);
                        echo "
                  ";
                    } else {
                        // line 129
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 131
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 131);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 132);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 134);
                        echo "% OFF</span>
                  ";
                    }
                    // line 136
                    echo "                </p>
                ";
                }
                // line 138
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "            ";
        }
        // line 142
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"cares separation mt-5 container\">
  <div class=\"container new-font\">
    <div class=\"row justify-content-around flex-xs-row-reverse\">
      <div class=\"col-12\">
        <h2 style=\"text-align: center; margin-bottom: 20px\">Popular On Woodpeel
        <span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
        <br />
        <div class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 160
        if (($context["pop_products"] ?? null)) {
            // line 161
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 162
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 165);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 166);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 166);
                echo "\"
                      title=\"";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 170);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 172);
                echo "
                  </h6>
                </a>
                ";
                // line 175
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 177
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 177)) {
                        // line 178
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178);
                        echo "
                  ";
                    } else {
                        // line 179
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 181);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 182
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 182);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 184);
                        echo "% OFF</span>
                  ";
                    }
                    // line 186
                    echo "                </p>
                ";
                }
                // line 188
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "            ";
        }
        // line 192
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

";
        // line 200
        echo ($context["column_right"] ?? null);
        echo "


<!-- News -->
<section class=\"cares separation container mt-5\" style=\"background:#2b4d64;\">
  <div class=\"container new-font\" style=\"padding:20px;\">
    <div class=\"row justify-content-around flex-xs-row-reverse\"style=\"color:white;\">
      <div class=\"col-md-3 col-lg-3\">
        <h2 style=\"color:white;\">Be A Woodpeel Insider</h2>
      </div>
      <div class=\"col-md-4 col-lg-4\"style=\"color:white;\">
        <h5 style=\"color:white;\">15% Off On Your 1st Order. Sign Up Now!</h5>
      </div>
      <div class=\"col-md-4 col-lg-4\">
       <form class=\"newsletter-inner mt-1\" id=\"mc-form\"style=\"color:white;\">
              <input  type=\"email\" style=\"color:white;\"class=\"news-field\" id=\"mc-email\" autocomplete=\"off\"
                placeholder=\"Enter your email address\">
              <button class=\"news-btn mb-3\"style=\"padding:0px 10px ;color:white; \" id=\"mc-submit\">Subscribe</button>
            </form>
      </div>
    </div>
  </div>
</section>






<script>
var swiper = new Swiper(\".topSwiper\", {
    pagination: {
      el: \".top-swiper-pagination\",
      clickable: true,
    },
    navigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\",
    },
    autoplay: false,
    // Default parameters
    slidesPerView: 4,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });
  


</script>

";
        // line 267
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
        return array (  503 => 267,  433 => 200,  423 => 192,  420 => 191,  412 => 188,  408 => 186,  403 => 184,  398 => 182,  394 => 181,  390 => 179,  384 => 178,  382 => 177,  379 => 176,  377 => 175,  371 => 172,  366 => 170,  360 => 167,  354 => 166,  350 => 165,  345 => 162,  340 => 161,  338 => 160,  318 => 142,  315 => 141,  307 => 138,  303 => 136,  298 => 134,  293 => 132,  289 => 131,  285 => 129,  279 => 128,  277 => 127,  274 => 126,  272 => 125,  266 => 122,  261 => 120,  255 => 117,  249 => 116,  245 => 115,  240 => 112,  235 => 111,  233 => 110,  213 => 92,  204 => 89,  199 => 88,  195 => 87,  183 => 77,  178 => 74,  168 => 70,  164 => 69,  160 => 68,  157 => 67,  153 => 66,  142 => 57,  140 => 56,  136 => 54,  126 => 46,  116 => 42,  111 => 40,  107 => 39,  104 => 38,  100 => 37,  88 => 27,  86 => 26,  75 => 18,  71 => 17,  66 => 14,  57 => 11,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
