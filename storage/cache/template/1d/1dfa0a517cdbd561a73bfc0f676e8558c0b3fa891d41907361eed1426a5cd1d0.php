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
class __TwigTemplate_0915a3ffed215d5bd41fff72325798ee1d58ecc74239ee5031381ebd21cd9f42 extends \Twig\Template
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
  @media screen and (max-width:750px) {
    .hide_phone{
      display:none;
    }
    .product-card{
      height:auto;
    }
    .slider_banner{
      width:100%;
    }
    .slide-row{
      margin:0px;
      margin-top:-20px;
    }
  }
</style>

<!-- hero slider area start -->
<section class=\"slider-area mt-20\">
   <div class=\"container-wide\">
      <div class=\"row slide-row\" style=\"width:100%;\">
      <div class=\"slider_banner\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 28
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 28);
            echo "\">
            <img src=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 29);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
      </div>
         <div class=\"side_banner hide_phone\">
            <a href=\" ";
        // line 35
        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["banner_side"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "link", [], "any", false, false, false, 35);
        echo "\">
                  <img src=\" ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["banner_side"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "image", [], "any", false, false, false, 36);
        echo "\" alt=\"\" />
            </a>
         </div>
      </div>
   </div>
</section>
<!-- hero slider area end -->

<!---Shop by room------>";
        // line 44
        if (($context["room_categories"] ?? null)) {
            // line 45
            echo "<section class=\"shopy_by_room separation mt-5 container\">
   <div class=\"container\">
   <div class=\" align-items-center heading \" >
      <div class=\"col-md-12\">
        <h2 class=\"text-center \">Shop By Room<span class=\"hb\" style=\"
    text-align: -webkit-center;\"></span></h2>
      </div>

    </div>
      <div class=\"row mt-4\">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 56
                echo "         <div class=\"col-sm-4 col-6 text-center mt-2\">
            <a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 57);
                echo "\" class=\"zoom-img\">
             <img src=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 58);
                echo " \"  width=\"100%\" alt=\"\"  class=\"serv-img\" title=\"\" />
             </a>
             <h5 class=\" mt-2 mb-2\"><span style=\"z-index:2;    position: relative;\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 60);
                echo "</span></h5> 
         </div>
       
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        
      </div>
   </div>
</section>

<br />

";
        }
        // line 72
        echo "<!---Shop by room------>
<!---Shop by style------>
";
        // line 74
        if (($context["style_categories"] ?? null)) {
            // line 75
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
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category2"]) {
                // line 85
                echo "         <div class=\"col-md-4 col-6 mt-3\">
            <a href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "href", [], "any", false, false, false, 86);
                echo "\">
               <p class=\"serv-name2\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "name", [], "any", false, false, false, 87);
                echo " </p>
               <img src=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "thumb", [], "any", false, false, false, 88);
                echo "\" alt=\"\" style=\"width:100%\" class=\"zoom serv-img\" title=\"\" />
            </a>
         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "   </div>
</section>
";
        }
        // line 95
        echo "
<!---Shop by style------>


<!-- mid slider area mid -->
<section class=\"slider-area container separation mt-5\">
   <div class=\"container-wide\">
      <div class=\"row d-flex justify-content-center\">
      <div class=\"slider_banner\" style=\"width:95%\">
        <div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mid_banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 106
            echo "            <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 106);
            echo "\">
            <img src=\"";
            // line 107
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 107);
            echo "\" alt=\"\" class=\"img-response slider-img\">
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
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
        // line 128
        if (($context["new_products"] ?? null)) {
            // line 129
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 130
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 134);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "\"
                      title=\"";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 135);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 138);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140);
                echo "
                  </h6>
                </a>
                ";
                // line 143
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 143)) {
                    // line 144
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 145
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 145)) {
                        // line 146
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 146);
                        echo "
                  ";
                    } else {
                        // line 147
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 149
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 149);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 150);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 152);
                        echo "% OFF</span>
                  ";
                    }
                    // line 154
                    echo "                </p>
                ";
                }
                // line 156
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "            ";
        }
        // line 160
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
        // line 178
        if (($context["pop_products"] ?? null)) {
            // line 179
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 180
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 183);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 184);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 184);
                echo "\"
                      title=\"";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 185);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 188);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 190);
                echo "
                  </h6>
                </a>
                ";
                // line 193
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 193)) {
                    // line 194
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 195
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 195)) {
                        // line 196
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 196);
                        echo "
                  ";
                    } else {
                        // line 197
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 199
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 199);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 200
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 200);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 202
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 202);
                        echo "% OFF</span>
                  ";
                    }
                    // line 204
                    echo "                </p>
                ";
                }
                // line 206
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "            ";
        }
        // line 210
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

";
        // line 218
        echo ($context["column_right"] ?? null);
        echo "


<!-- News -->
<section class=\"cares separation container mt-5\" style=\"background:#2b4d64;\">
  <div class=\"container new-font\" style=\"padding:20px;\">
    <div class=\"row justify-content-around flex-xs-row-reverse\"style=\"color:white;\">
      <div class=\"col-md-3 col-lg-3\">
        <h2 class=\"mobh\" style=\"color:white;\">Be A Woodpeel Insider</h2>
      </div>
      <div class=\"col-md-4 col-lg-4\"style=\"color:white;\">
        <h5 class=\"mobp\"style=\"color:white;\">Get exclusive offers. Sign Up Now!</h5>
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
        spaceBetween: 5,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      // when window width is >= 640px
      740: {
        slidesPerView: 2,
        spaceBetween: 5,
      },
    },
  });
  


</script>

";
        // line 285
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
        return array (  521 => 285,  451 => 218,  441 => 210,  438 => 209,  430 => 206,  426 => 204,  421 => 202,  416 => 200,  412 => 199,  408 => 197,  402 => 196,  400 => 195,  397 => 194,  395 => 193,  389 => 190,  384 => 188,  378 => 185,  372 => 184,  368 => 183,  363 => 180,  358 => 179,  356 => 178,  336 => 160,  333 => 159,  325 => 156,  321 => 154,  316 => 152,  311 => 150,  307 => 149,  303 => 147,  297 => 146,  295 => 145,  292 => 144,  290 => 143,  284 => 140,  279 => 138,  273 => 135,  267 => 134,  263 => 133,  258 => 130,  253 => 129,  251 => 128,  231 => 110,  222 => 107,  217 => 106,  213 => 105,  201 => 95,  196 => 92,  186 => 88,  182 => 87,  178 => 86,  175 => 85,  171 => 84,  160 => 75,  158 => 74,  154 => 72,  144 => 64,  134 => 60,  129 => 58,  125 => 57,  122 => 56,  118 => 55,  106 => 45,  104 => 44,  93 => 36,  89 => 35,  84 => 32,  75 => 29,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
