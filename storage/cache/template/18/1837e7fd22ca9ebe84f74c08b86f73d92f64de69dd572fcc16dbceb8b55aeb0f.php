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
class __TwigTemplate_b1669cccb77cc18a256bbe28c47ab345fc68c69d7fff54638cf1a43766f6adfb extends \Twig\Template
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
    <link rel=\"stylesheet\" href=\"assets/css/plugins/slick-theme.css\" />
   
    <!-- animate css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/animate.css\" />
    <!-- Nice Select css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\" />
    <!-- jquery UI css -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\" />
    <!-- main style css -->
    <link rel=\"stylesheet\" href=\"assets/css/style.css?v1.125\" />
    <!-- jQuery JS -->
    <script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>
<script src=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\"></script>
<link href=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\" rel=\"stylesheet\">
<style>


.splide__pagination__page.is-active {
   border-color: #44b394 !important;
    background-color: #44b394 !important;
}


.btn{
  padding: 14px 30px;
}
";
        // line 63
        echo ".section{
  margin-top:2rem;
  margin-bottom:1.5rem;
}
@media screen and (max-width:650px){
.desktop-header{
  display:none;
}
.swiper-button-prev,.swiper-button-next{
  display:none;
}
.col-6{
  padding:0px;
}
.product_name{
  font-size:16px;
}
}
.wishlist_link {
    position: absolute;
    top: 15px;
    right: 15px;
    border-radius: 50%;
    background: #d9efe9;
    cursor: pointer;
    width: 37px;
    height: 37px;
    text-align: center;
}
.wishlist_link i {
    line-height: 38px;
}
</style>


    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 99
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 99);
            echo "\"
        type=\"text/css\"
        rel=\"";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 101);
            echo "\"
        media=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 102);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 105
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    <script src=\"catalog/view/javascript/common.js\"
      type=\"text/javascript\"></script>
    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 110
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 110);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 110);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 113
            echo "      ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
    <link rel=\"stylesheet\" href=\"assets/css/edit.css\" />

  </head>
  <body>
   

    <!-- Start Header Area -->
    <header class=\"header-area\">
      <!-- main header start -->
      <div class=\"main-header desktop-header sticky d-lg-block \">
        <!-- header middle area start -->
        <div class=\"header-main-area\">
    
         <div class=\"\"style=\"padding:0 5%;\">
        
          <div class=\"row align-items-center  justify-content-space-around\">
              <!-- start logo area -->
              <div class=\"col-md-2\">
                 <div id=\"logo\">
                  <a href=\"";
        // line 135
        echo ($context["home"] ?? null);
        echo "\">
                  <img src=\"";
        // line 136
        echo ($context["logo"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive logo-home\" style=\"width:80px;\" />
                  </a>
                </div>
              </div>
              <!-- start logo area -->
              <div class=\"col-md-6\">
                  <div class=\"main-menu-area\">
                  <div class=\"main-menu\">
                   ";
        // line 144
        echo ($context["menu"] ?? null);
        echo "  
                  </div>
                </div>
              </div>
             <div class=\"col-md-3\">
             <div class=\"header-right d-flex align-items-center justify-content-end w-100\">
                  <div class=\"header-configure-area w-100\">
                    <ul class=\"nav justify-content-space-around w-100\">
                     <li class=\"header-search-container mr-0\">
                                    <button class=\"search-trigger d-block\">
                                    <i class=\"pe-7s-search\"></i>
                                    </button>
                                    <div class=\"header-search-box d-none animated fadeInLeft\">
                                       <input type=\"text\" id=\"search_top\" name=\"search\" placeholder=\"Search\" class=\"header-search-field\">
                                       <button class=\"search_icon_top header-search-btn\"><i class=\"pe-7s-search\"></i></button>
                                    </div>
                                 </li>
                                
                      <li class=\"user-hover\">
                        <a href=\"";
        // line 163
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\"><i class=\"pe-7s-user\"></i></a>
                        <ul class=\"dropdown-list\">
                        ";
        // line 165
        if (($context["logged"] ?? null)) {
            // line 166
            echo "                          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 167
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                           <li><a href=\"";
            // line 168
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                          ";
        } else {
            // line 170
            echo "                          <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 171
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                          ";
        }
        // line 173
        echo "                        </ul>
                      </li>
                      <li>
                      <a href=\"";
        // line 176
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                          <i class=\"pe-7s-like\"></i>
                        </a>
                      </li>
                      <li>
                        <a href=\"javascript:;\" onclick=\"return false;\" title=\"";
        // line 181
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                          <i class=\"pe-7s-shopbag\"></i>
                          <div class=\"notification cart-counter-header\">
                            ";
        // line 184
        echo ($context["cart_total"] ?? null);
        echo "
                          </div>
                        </a>
                      </li>
                       <li>";
        // line 188
        echo ($context["currency"] ?? null);
        echo "</li>
                    </ul>
                  </div>
                </div>
             </div>
            </div>
            
          </div>
        </div>
        <!-- header middle area end -->
      </div>
      <!-- main header start -->

       <!-- mobile header start -->
         <div class=\"mobile-header d-lg-none d-md-block sticky\">
            <!-- mobile header top start -->
            <div class=\"container-fluid\">
               <div class=\"row align-items-center\">
                  <div class=\"col-12\">
                     <div class=\"mobile-main-header\">
                        <div class=\"mobile-logo\">
                           <a href=\"";
        // line 209
        echo ($context["home"] ?? null);
        echo "\">
                           <img src=\"";
        // line 210
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" style=\"width:60px;\" />
                           </a>
                        </div>
                        <div class=\"mobile-menu-toggler\">
                           <div class=\"mini-cart-wrap\">
                              <a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 215
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                                       <i style=\"margin-top:-5px\" class=\"pe-7s-cart\"></i>
                                       <div class=\"notification cart-counter-header\">
                                          ";
        // line 218
        echo ($context["cart_total"] ?? null);
        echo "
                                       </div>
                                    </a>
                           </div>
                           &nbsp;&nbsp;&nbsp;
                           <a style=' color:#003B30' href=\"index.php?route=account/wishlist\">
                           <i style=\"font-size:24px;\" class=\"pe-7s-like\"></i>
                           </a>
                            &nbsp;&nbsp;&nbsp;
                           <button style='margin-top:-5px' class=\"mobile-menu-btn\">
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

      <!-- offcanvas mobile menu start -->
      <!-- off-canvas menu start -->
      <aside class=\"off-canvas-wrapper\">
        <div class=\"off-canvas-overlay\"></div>
        <div class=\"off-canvas-inner-content\">
          <div class=\"btn-close-off-canvas\">
            <i class=\"pe-7s-close\"></i>
          </div>

          <div class=\"off-canvas-inner\">
            <!-- search box start -->
           <div class=\"search-box-offcanvas\">
\t\t\t\t\t\t\t";
        // line 253
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t</div>
            <!-- search box end -->

            <!-- mobile menu start -->
               <div class=\"mobile-navigation\">
                  <!-- mobile menu navigation start -->
                  <nav>
                 
                     ";
        // line 262
        echo ($context["mobile_menu"] ?? null);
        echo "
                  </nav>
                  <!-- mobile menu navigation end -->
               </div>
               <!-- mobile menu end -->

            <div class=\"mobile-settings\">
              <ul class=\"nav\">
                ";
        // line 270
        echo ($context["currency"] ?? null);
        echo "
                <li>
                                <div class=\"dropdown mobile-top-dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" id=\"myaccount\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        MY ACCOUNT
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <div style=\"width:200px; padding:15px 0px\" class=\"dropdown-menu\" aria-labelledby=\"myaccount\">
                                     
                                     ";
        // line 279
        if (($context["logged"] ?? null)) {
            // line 280
            echo "                                      <a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 281
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 282
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                                       ";
        } else {
            // line 284
            echo "                                      <a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 285
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
                                       ";
        }
        // line 287
        echo "                                    </div>
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
                    <a href=\"#\">+91 98290 65718</a>
                  </li>
                  <li>
                    <i class=\"fa fa-envelope-o\"></i>
                    <a href=\"#\">abhinavdhadda@gmail.com</a>
                  </li>
                </ul>
              </div>
            
            <!-- offcanvas widget area end -->
          </div>
        </div>
      </aside>
   ";
        // line 312
        echo ($context["slide_cart"] ?? null);
        echo "    
    </header>
   

     <script>
      \$(document).ready(function(){
        \$(\".close-offer-strip\").click(function(){
         \$(\".top-strip\").slideUp();
        })
      })
     </script>
   <script>
                                \$('.search-btn-mobile').click(function(e) {
                                    e.preventDefault();
                                    if (\$(this).prev().val() != \"\") {
                                        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(this).prev().val()) + '&description=true';
                                    }
                                })

                                 \$('.header-search-btn').click(function(e) {
                                    e.preventDefault();
                                    if (\$(\"#search_top\").val() != \"\") {
                                        location = 'index.php?route=product/search' + '&search=' + encodeURIComponent(\$(\"#search_top\").val()) + '&description=true';
                                    }
                                })


";
        // line 357
        echo "


                            </script>
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
        return array (  580 => 357,  550 => 312,  523 => 287,  516 => 285,  509 => 284,  502 => 282,  496 => 281,  489 => 280,  487 => 279,  475 => 270,  464 => 262,  452 => 253,  414 => 218,  408 => 215,  400 => 210,  396 => 209,  372 => 188,  365 => 184,  359 => 181,  349 => 176,  344 => 173,  337 => 171,  330 => 170,  323 => 168,  317 => 167,  310 => 166,  308 => 165,  301 => 163,  279 => 144,  264 => 136,  260 => 135,  238 => 115,  229 => 113,  224 => 112,  213 => 110,  209 => 109,  205 => 107,  196 => 105,  191 => 104,  183 => 102,  179 => 101,  173 => 99,  169 => 98,  132 => 63,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
