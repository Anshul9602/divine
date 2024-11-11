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

/* default/template/common/FURNITURE.twig */
class __TwigTemplate_1522648a3dee8640c81761267e17735105fd93c872d84630faf318ef1fa7cecd extends \Twig\Template
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

<!-- hero slider area end -->

<!---Shop by room------>";
        // line 7
        if (($context["room_categories"] ?? null)) {
            // line 8
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
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category1"]) {
                // line 19
                echo "         <div class=\"col-sm-4 text-center mt-2\">
            <a href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "href", [], "any", false, false, false, 20);
                echo "\" class=\"zoom-img\">
             <img src=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "thumb", [], "any", false, false, false, 21);
                echo " \"  width=\"100%\" alt=\"\"  class=\"serv-img\" title=\"\" />
             </a>
             <h5 class=\" mt-2 mb-2\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["category1"], "name", [], "any", false, false, false, 23);
                echo "</h5> 
         </div>
       
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        
      </div>
   </div>
</section>

<br />

";
        }
        // line 35
        echo "<!---Shop by room------>
<!---Shop by style------>
";
        // line 37
        if (($context["style_categories"] ?? null)) {
            // line 38
            echo "<section class=\"shopy_by_room separation mt-5\">
   <div class=\"container\">
   <div class=\" align-items-center heading  \" >
      <div class=\"col-md-12\">
         <h2 class=\"text-center \">Shop By Style<span class=\"hb\" style=\"
            text-align: -webkit-center;\"></span></h2>
      </div>
   </div>
   <div class=\"row\" style=\"margin-top:3%;\">
      ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category2"]) {
                // line 48
                echo "         <div class=\"col-md-4 mt-3\">
            <a href=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "href", [], "any", false, false, false, 49);
                echo "\">
               <p class=\"serv-name2\">";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "name", [], "any", false, false, false, 50);
                echo " </p>
               <img src=\"";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["category2"], "thumb", [], "any", false, false, false, 51);
                echo "\" alt=\"\" style=\"width:100%\" class=\"zoom serv-img\" title=\"\" />
            </a>
         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "   </div>
</section>
";
        }
        // line 58
        echo "
<!---Shop by style------>


<!-- mid slider area mid -->

<!-- mid slider area end -->

<section class=\"cares separation\">
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
        // line 76
        if (($context["new_products"] ?? null)) {
            // line 77
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["new_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 81);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 82);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                echo "\"
                      title=\"";
                // line 83
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                echo "
                  </h6>
                </a>
                ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 93
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 94);
                        echo "
                  ";
                    } else {
                        // line 95
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 97
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 97);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 98
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 98);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 100
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 100);
                        echo "% OFF</span>
                  ";
                    }
                    // line 102
                    echo "                </p>
                ";
                }
                // line 104
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "            ";
        }
        // line 108
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class=\"cares separation mt-5\">
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
        // line 126
        if (($context["pop_products"] ?? null)) {
            // line 127
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pop_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 128
                echo "            <div class=\"swiper-slide\">
              <div class=\"product-card\">
                <div class=\"image\">
                  <a onclick=\"\" href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 131);
                echo "\">
                    <img onclick=\"\" style=\"z-index: 99999999\" src=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 132);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 132);
                echo "\"
                      title=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "\" class=\"img-responsive pthumb\" />
                  </a>
                </div>
                <a onclick=\"\" href=\"";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 136);
                echo "\">
                  <h6 class=\"product_name mt-2\" style=\"color: black\">
                    ";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 138);
                echo "
                  </h6>
                </a>
                ";
                // line 141
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 141)) {
                    // line 142
                    echo "                <p class=\"price mt-1\">
                  ";
                    // line 143
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 143)) {
                        // line 144
                        echo "                  ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 144);
                        echo "
                  ";
                    } else {
                        // line 145
                        echo "   

                 <span style=\"white-space:nowrap;font-weight: 600;color: #ff7c47;font-size:18px;\" class=\"price-new\">";
                        // line 147
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 147);
                        echo "&nbsp; </span>
              <span style=\"white-space:nowrap;text-decoration: line-through;\" class=\"price-old\">";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 148);
                        echo "</span><br>
              <span
                  style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 150
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 150);
                        echo "% OFF</span>
                  ";
                    }
                    // line 152
                    echo "                </p>
                ";
                }
                // line 154
                echo "              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "            ";
        }
        // line 158
        echo "          </div>

        </div>
      </div>
    </div>
  </div>
</section>

";
        // line 166
        echo ($context["column_right"] ?? null);
        echo "


<!-- News -->
<section class=\"cares separation mt-5\" style=\"background:#2b4d64;\">
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
        // line 233
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/FURNITURE.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 233,  363 => 166,  353 => 158,  350 => 157,  342 => 154,  338 => 152,  333 => 150,  328 => 148,  324 => 147,  320 => 145,  314 => 144,  312 => 143,  309 => 142,  307 => 141,  301 => 138,  296 => 136,  290 => 133,  284 => 132,  280 => 131,  275 => 128,  270 => 127,  268 => 126,  248 => 108,  245 => 107,  237 => 104,  233 => 102,  228 => 100,  223 => 98,  219 => 97,  215 => 95,  209 => 94,  207 => 93,  204 => 92,  202 => 91,  196 => 88,  191 => 86,  185 => 83,  179 => 82,  175 => 81,  170 => 78,  165 => 77,  163 => 76,  143 => 58,  138 => 55,  128 => 51,  124 => 50,  120 => 49,  117 => 48,  113 => 47,  102 => 38,  100 => 37,  96 => 35,  86 => 27,  76 => 23,  71 => 21,  67 => 20,  64 => 19,  60 => 18,  48 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/FURNITURE.twig", "");
    }
}
