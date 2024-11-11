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
class __TwigTemplate_58b13c4df367c45d9c52323e0e81e5448531d64bc0e326fc5d82b4c0b2a5dd41 extends \Twig\Template
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

<style>
.btn{
  padding: 14px 30px;
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

</style>


    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 66
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 66);
            echo "\"
        type=\"text/css\"
        rel=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 68);
            echo "\"
        media=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 69);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 72
            echo "      <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    <script src=\"catalog/view/javascript/common.js\"
      type=\"text/javascript\"></script>
    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 77
            echo "      <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 77);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 77);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 80
            echo "      ";
            echo $context["analytic"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
    <link rel=\"stylesheet\" href=\"assets/css/edit.css\" />

  </head>
  <body>
   

    <!-- Start Header Area -->
    <header class=\"header-area\">
      <!-- main header start -->
      <div class=\"main-header desktop-header sticky d-lg-block\">
        <!-- header middle area start -->
        <div class=\"header-main-area\">
         <div class=\"top-strip text-center\">
          <p style=\"display:inline-block\">
            <span style=\"text-transform:capitalize;\">";
        // line 97
        echo ($context["coupon_name"] ?? null);
        echo "</span> 
             | Flat ";
        // line 98
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_split_filter($this->env, ($context["discount"] ?? null), ".")) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        echo "% Off | Use Code: 
             <span style=\"text-transform:uppercase;\">";
        // line 99
        echo ($context["code"] ?? null);
        echo "</span>  
             <i class=\"pe-7s-close close-offer-strip\"></i> 
             
             </p>
         </div> 
       
         <div class=\"\"style=\"padding:0 5%;\">
        
          <div class=\"row align-items-center ptb-20\">
              <!-- start logo area -->
              <div class=\"col-md-2\">
                 <div id=\"logo\">
                  <a href=\"";
        // line 111
        echo ($context["home"] ?? null);
        echo "\">
                  <img src=\"";
        // line 112
        echo ($context["logo"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive logo-home\" />
                  </a>
                </div>
              </div>
              <!-- start logo area -->
              <div class=\"col-md-7\">
                  <div class=\"main-menu-area\">
                  <div class=\"main-menu\">
                   ";
        // line 120
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
        // line 138
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\"><i class=\"pe-7s-user\"></i></a>
                        <ul class=\"dropdown-list\">
                        ";
        // line 140
        if (($context["logged"] ?? null)) {
            // line 141
            echo "                          <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 142
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                           <li><a href=\"";
            // line 143
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                          ";
        } else {
            // line 145
            echo "                          <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                          <li><a href=\"";
            // line 146
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                          ";
        }
        // line 148
        echo "                        </ul>
                      </li>
                      <li>
                      <a href=\"";
        // line 151
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                          <i class=\"pe-7s-like\"></i>
                        </a>
                      </li>
                      <li>
                        <a href=\"javascript:;\" onclick=\"return false;\" title=\"";
        // line 156
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                          <i class=\"pe-7s-shopbag\"></i>
                          <div class=\"notification cart-counter-header\">
                            ";
        // line 159
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
        // line 184
        echo ($context["home"] ?? null);
        echo "\">
                           <img src=\"";
        // line 185
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\" />
                           </a>
                        </div>
                        <div class=\"mobile-menu-toggler\">
                           <div class=\"mini-cart-wrap\">
                              <a href=\"javascript:;\" onclick=\"somefunction(); return false;\" title=\"";
        // line 190
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
                                       <i style=\"margin-top:-5px\" class=\"pe-7s-cart\"></i>
                                       <div class=\"notification cart-counter-header\">
                                          ";
        // line 193
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
        // line 240
        echo ($context["mobile_menu"] ?? null);
        echo "
                  </nav>
                  <!-- mobile menu navigation end -->
               </div>
               <!-- mobile menu end -->

            <div class=\"mobile-settings\">
              <ul class=\"nav\">
                ";
        // line 248
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
        // line 257
        if (($context["logged"] ?? null)) {
            // line 258
            echo "                                      <a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 259
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 260
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
                                       ";
        } else {
            // line 262
            echo "                                      <a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
                                       <a class=\"dropdown-item\" href=\"";
            // line 263
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
                                       ";
        }
        // line 265
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
                    <a href=\"#\">+91 98298 66746</a>
                  </li>
                  <li>
                    <i class=\"fa fa-envelope-o\"></i>
                    <a href=\"#\">Info@Merakielegance.Com</a>
                  </li>
                </ul>
              </div>
            
            <!-- offcanvas widget area end -->
          </div>
        </div>
      </aside>
   ";
        // line 290
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
        return array (  532 => 290,  505 => 265,  498 => 263,  491 => 262,  484 => 260,  478 => 259,  471 => 258,  469 => 257,  457 => 248,  446 => 240,  396 => 193,  390 => 190,  382 => 185,  378 => 184,  350 => 159,  344 => 156,  334 => 151,  329 => 148,  322 => 146,  315 => 145,  308 => 143,  302 => 142,  295 => 141,  293 => 140,  286 => 138,  265 => 120,  250 => 112,  246 => 111,  231 => 99,  227 => 98,  223 => 97,  206 => 82,  197 => 80,  192 => 79,  181 => 77,  177 => 76,  173 => 74,  164 => 72,  159 => 71,  151 => 69,  147 => 68,  141 => 66,  137 => 65,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
