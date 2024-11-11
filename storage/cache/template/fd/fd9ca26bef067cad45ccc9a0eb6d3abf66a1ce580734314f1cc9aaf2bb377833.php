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

/* default/template/common/header.twig */
class __TwigTemplate_70d75acb9196d7e8af4f510e128e2a61cda8ffb05bf9d815f8c0f8460df256f8 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!-- [if IE]><![endif] -->
<!-- [if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif] -->
<!-- [if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif] -->
<!-- [if (gt IE 9)|!(IE)]><! -->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
  <!-- <![endif] -->
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>
      ";
        // line 13
        echo ($context["title"] ?? null);
        echo "
    </title>
    <base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "      <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
    ";
        }
        // line 19
        echo "    ";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "      <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
    ";
        }
        // line 22
        echo "    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
    <!-- Pe-icon-7-stroke CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\" />
    <!-- Font-awesome CSS -->
    <link rel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\" />
    <!-- Slick slider css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\" />
    <!-- animate css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/animate.css\" />
    <!-- Nice Select css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\" />
    <!-- jquery UI css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\" />
    <!-- main style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css?v1.123\" />
    <!-- jQuery JS -->
    <script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>

 <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display&display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.1\" />
<!-- Swiper Slider CSS-->
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\" />
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\" />
<!-- Swiper JS -->
<script src=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js\"></script>

<!-- Link to the file hosted on your server, -->
<link rel=\"stylesheet\" href=\"path-to-the-file/splide.min.css\">


<!-- or link to the CDN -->
<link rel=\"stylesheet\" href=\"url-to-cdn/splide.min.css\">

    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 60
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 60);
            echo "\"
        type=\"text/css\"
        rel=\"";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 62);
            echo "\"
        media=\"";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 63);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 66
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    <script src=\"catalog/view/javascript/common.js\"
      type=\"text/javascript\"></script>
    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 71
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 71);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 71);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 74
            echo "      ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        <link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.19558\" />
  
  </head>
  <body>
   

    <!-- Start Header Area -->
    <header class=\"header-area\">
      <!-- main header start -->
      <div class=\"main-header d-none d-lg-block\">
        <!-- header middle area start -->
        <div class=\"header-main-area\">
         <div class=\"top-strip\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <a data-toggle=\"modal\" data-target=\"#locationpopup\" id=\"hathdakhwa\">
                 <li class=\"pe-7s-map-marker\"></li> Select City / Enter Pincode
                </a>
              </div>
              <div class=\"col-sm-6 text-right\">
                <li class=\"pe-7s-call\"></li> +91 8905154400
                &nbsp;&nbsp;
                <li class=\"fa fa-envelope-o\"></li> support@woodpeel.com
              </div>
            </div>
          </div>
          
         </div> 
       
         <div class=\"container\">
        
          <div class=\"row align-items-center ptb-20\">
              <!-- start logo area -->
              <div class=\"col-lg-3\" style=\"max-width:230px;\">
                 <div id=\"logo\">
                  <a href=\"";
        // line 112
        echo ($context["home"] ?? null);
        echo "\">
                  <img src=\"";
        // line 113
        echo ($context["logo"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive\" />
                  </a>
                </div>
              </div>
              <!-- start logo area -->
              <div class=\"col-lg-6\">
                  <div class=\"search-wrap\">
                  ";
        // line 120
        echo ($context["search"] ?? null);
        echo "
                  </div>
              </div>
             <div class=\"col-lg-3\">
             <div class=\"header-right d-flex align-items-center justify-content-end w-100\">
                  <div class=\"header-configure-area w-100\">
                    <ul class=\"nav justify-content-space-around w-100\">
                     
                      <li class=\"user-hover\">
                        <a href=\"";
        // line 129
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\"><i class=\"pe-7s-user\" style=\"color: #f06639;
font-size:35px;\"></i></a>
                        <ul class=\"dropdown-list\">
                        ";
        // line 132
        if (($context["logged"] ?? null)) {
            // line 133
            echo "                          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 134
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                           <li><a href=\"";
            // line 135
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                          ";
        } else {
            // line 137
            echo "                          <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 138
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                          ";
        }
        // line 140
        echo "                        </ul>
                      </li>
                      <li>
                      <a href=\"";
        // line 143
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                          <i class=\"pe-7s-like\"style=\"color: #f06639;
font-size:35px;\"></i>
                        </a>
                      </li>
                      <li>
                        <a href=\"javascript:;\" onclick=\" return false;\" title=\"";
        // line 149
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                                       <i class=\"pe-7s-cart\"style=\"color: #f06639;
font-size:35px;\"></i>
                                       <div class=\"notification cart-counter-header\">
                                          ";
        // line 153
        echo ($context["cart_total"] ?? null);
        echo "
                                       </div>
                                    </a>
                      </li>
                      
                    </ul>
                  </div>
                </div>
             </div>
            </div>
            <div class=\"row\">
              <!-- main menu area start -->
              <div class=\"col-12\">
                <div class=\"main-menu-area sticky\">
                  <div class=\"main-menu\">
                   ";
        // line 168
        echo ($context["menu"] ?? null);
        echo "  
                  </div>
                </div>
              </div>
              <!-- main menu area end -->
            </div>
          </div>
        </div>
        <!-- header middle area end -->
      </div>
      <!-- main header start -->

      <!-- mobile header start -->
      <!-- mobile header start -->
      <div class=\"mobile-header d-lg-none d-md-block sticky\">
        <!-- mobile header top start -->
        <div class=\"container-fluid\">
          <div class=\"row align-items-center\">
            <div class=\"col-12\">
              <div class=\"mobile-main-header\">
                <div class=\"mobile-logo\">
                  <a href=\"";
        // line 189
        echo ($context["home"] ?? null);
        echo "\">
                    <img src=\"";
        // line 190
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" />
                  </a>
                </div>
                <div class=\"mobile-menu-toggler\">
                  
                 <div class=\"mini-cart-wrap\">
                             <a href=\"javascript:;\" onclick=\" return false;\" title=\"";
        // line 196
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                                       <i class=\"pe-7s-cart\"></i>
                                       <div class=\"notification cart-counter-header\">
                                          ";
        // line 199
        echo ($context["cart_total"] ?? null);
        echo "
                                       </div>
                                    </a>
                           </div>
                  <button class=\"mobile-menu-btn\">
                    <span></span>
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- mobile header top start -->
      </div>
      <!-- mobile header end -->
      <!-- mobile header end -->

      <!-- offcanvas mobile menu start -->
      <!-- off-canvas menu start -->
      <aside  class=\"off-canvas-wrapper\">
        <div class=\"off-canvas-overlay\"></div>
        <div class=\"off-canvas-inner-content\">
          <div class=\"btn-close-off-canvas\">
            <i class=\"pe-7s-close\"></i>
          </div>

          <div class=\"off-canvas-inner\">
            <!-- search box start -->
            <div class=\"search-box-offcanvas\">
              <form>
                <input type=\"text\" placeholder=\"Search Here...\" />
                <button class=\"search-btn\"><i class=\"pe-7s-search\"></i></button>
              </form>
            </div>
            <!-- search box end -->

            <!-- mobile menu start -->
            <div class=\"mobile-navigation\">
              <!-- mobile menu navigation start -->
              <nav>
                ";
        // line 241
        if (($context["menu_categories"] ?? null)) {
            // line 242
            echo "                <ul class=\"mobile-menu\">
                  ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 244
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 244)) {
                    // line 245
                    echo "                  <li class=\"menu-item-has-children\">
                    <a href=\"";
                    // line 246
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 246);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 246);
                    echo "</a>
                    <ul class=\"dropdown\">
                      ";
                    // line 248
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 248), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 248)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 248), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 249
                        echo "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 250
                            echo "                      <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 250);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 250);
                            echo "</a></li>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 252
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "                    </ul>
                  </li>
                   ";
                } else {
                    // line 256
                    echo "                   <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 256);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 256);
                    echo "</a></li>
                          ";
                }
                // line 258
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "                       
                </ul>
                 ";
        }
        // line 262
        echo "              </nav>
              <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->

            <div class=\"mobile-settings\">
              <ul class=\"nav\">
                
                  <div class=\"dropdown mobile-top-dropdown\">
                    <a href=\"#\"
                      class=\"user-hover\"
                      id=\"myaccount\"
                      data-toggle=\"dropdown\"
                      aria-haspopup=\"true\" style=\"color:black;\"
                      aria-expanded=\"false\">
                      My Account
                      <i class=\"fa fa-angle-down\"></i>
                    </a>
                    
                    <div class=\"dropdown-list\" aria-labelledby=\"myaccount\">
                       ";
        // line 282
        if (($context["logged"] ?? null)) {
            // line 283
            echo "                      <a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\"> ";
            echo ($context["text_account"] ?? null);
            echo "</a>
                      <a class=\"dropdown-item\" href=\"";
            // line 284
            echo ($context["order"] ?? null);
            echo "\"> ";
            echo ($context["text_order"] ?? null);
            echo "</a>
                      <a class=\"dropdown-item\" href=\"";
            // line 285
            echo ($context["logout"] ?? null);
            echo "\"> ";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                      ";
        } else {
            // line 287
            echo "                       <a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\"> ";
            echo ($context["text_register"] ?? null);
            echo "</a>
                       <a class=\"dropdown-item\" href=\"";
            // line 288
            echo ($context["login"] ?? null);
            echo "\"> ";
            echo ($context["text_login"] ?? null);
            echo "</a>
                         ";
        }
        // line 290
        echo "                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <!-- offcanvas widget area start -->
            <div class=\"offcanvas-widget-area\">
              <div class=\"off-canvas-contact-widget\">
                <ul>
                  <li>
                    <i class=\"fa fa-mobile\"></i>
                    <a href=\"#\">0123456789</a>
                  </li>
                  <li>
                    <i class=\"fa fa-envelope-o\"></i>
                    <a href=\"#\">info@yourdomain.com</a>
                  </li>
                </ul>
              </div>
            
            <!-- offcanvas widget area end -->
          </div>
        </div>
      </aside>
     ";
        // line 315
        echo ($context["slide_cart"] ?? null);
        echo "  
    </header>
   

     <script>
      \$(document).ready(function(){
        \$(\".close-offer-strip\").click(function(){
         \$(\".top-strip\").slideUp();
        })
      })
    //  document.addEventListener('contextmenu', event => event.preventDefault());
     </script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 315,  571 => 290,  564 => 288,  557 => 287,  550 => 285,  544 => 284,  537 => 283,  535 => 282,  513 => 262,  508 => 259,  502 => 258,  494 => 256,  489 => 253,  483 => 252,  472 => 250,  467 => 249,  463 => 248,  456 => 246,  453 => 245,  450 => 244,  446 => 243,  443 => 242,  441 => 241,  396 => 199,  390 => 196,  381 => 190,  377 => 189,  353 => 168,  335 => 153,  328 => 149,  317 => 143,  312 => 140,  305 => 138,  298 => 137,  291 => 135,  285 => 134,  278 => 133,  276 => 132,  268 => 129,  256 => 120,  242 => 113,  238 => 112,  200 => 76,  191 => 74,  186 => 73,  175 => 71,  171 => 70,  167 => 68,  158 => 66,  153 => 65,  145 => 63,  141 => 62,  135 => 60,  131 => 59,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
