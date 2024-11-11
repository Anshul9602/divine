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

/* default/template/checkout/cart.twig */
class __TwigTemplate_7ea6abd4d2bfdd1db529a2fb88eef84c458707cf9c5cf66f4eee427813f9c70f extends \Twig\Template
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
   .btn-outline {
    border: thin solid #94cabc;
    background-color: #fff;
    border: thin solid #94cabc;
    color: #222222;
}
   @media screen and (max-width:650px) {
      #mobile_table{
         display: block !important;
      }
     
      #desktop_table{
         display:none !important;
      }
      .cart-heading{
         font-size:28px;
      }
   }
.collapse:not(.show) {
    display: block;
    width:50%;
}
.control-label{
   display:none;
}
   @media screen and (min-width:651px) {
      #mobile_table{
         display: none !important;
      }
     
      #desktop_table{
         display:block !important;
      }
   }
   .table td, .table th {
    padding: 0.75rem;
    vertical-align: middle !important;}
</style>

<br />
<div id=\"checkout-cart\" class=\"container mb-3\" >
   <div class=\"row\">
      <div id=\"content\" class=\"col-sm-12 mb-3 \" style=\"min-height:600px;\">
         ";
        // line 46
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 47
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 49
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"desktop_table\">
               <table class=\"table cart-table\">
                  <thead>
                     <tr>
                        <td class=\"text-center\">
                           <p>Image</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Name</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Quantity</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Price</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Total</p>
                        </td>
                        <td class=\"text-center\">
                           <p>Remove</p>
                        </td>
                     </tr>
                  </thead>
                  <tbody>
                     ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 76
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 77
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 77)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
                echo "\">
                           <img src=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
                echo "\" style=\"max-width:80px\" /></a> ";
            }
            // line 79
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 81);
            echo "\">
                              <h5> ";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
            echo "</h5>
                           </a>
                           ";
            // line 84
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 84)) {
                echo " 
                           <span class=\"text-danger\">*(Out Of stock)</span> 
                           ";
            }
            // line 87
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 87)) {
                // line 88
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 88));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                           <small>";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 89);
                    echo "</small> <br/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                           ";
            }
            // line 91
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 91)) {
                echo " <br/>
                           <small>";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 92);
                echo "</small> ";
            }
            // line 93
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 93)) {
                echo " <br/>
                           <span class=\"label label-info\">";
                // line 94
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 94);
                echo "</small> 
                           ";
            }
            // line 96
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto;  \" class=\"row\">
                              <div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 103);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 103);
            echo "\" class=\"form-control\" />
                              </div>
                              <div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-right\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 110);
            echo "</td>
                        <td class=\"text-right\">";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 111);
            echo "</td>
                        <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 112
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 112);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 120
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
            <div class=\"col-xs-12\">
                       
            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 125
            echo "                      
                        <div class=\"row m-0\">
                           <div class=\"col-3\">
                           ";
            // line 128
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 128)) {
                // line 129
                echo "                              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 129);
                echo "\">
                              <img src=\"";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 130);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                echo "\" />
                              </a>
                              ";
            }
            // line 133
            echo "                           </div>
                           <div class=\"col-9\">
                           <a href=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 135);
            echo "\">
                                 <h4 style=\"text-transform:uppercase \">";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 136);
            echo "</h4>
                                 ";
            // line 137
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 137)) {
                echo " 
                                
                                 <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                                 </span>
                                 ";
            }
            // line 142
            echo "                                 ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 142)) {
                // line 143
                echo "                                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 143));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                                 <p style=\" color:#ccc; text-transform: capitalize\">
                                 ";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 145);
                    echo "
                                 </p>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "                                 ";
            }
            // line 149
            echo "                              </a>
                              <p >
                                 Price : ";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 151);
            echo "
                              </p>
                              <p style=\"margin-top: -7px;\">
                                 <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\" onclick=\"cart.remove('";
            // line 155
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 155);
            echo "');\" class=\"btn remove-btn\">
                                 Remove
                                 </button>
                              </p>

                                <div style=\" margin:auto; margin-top:20px; margin-left:0px \" class=\"row\">
                                    <div class=\"col-8\">
                                      <div class=\"row\">
                                      <div style=\"cursor: pointer; text-align:center; width:30px; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px;\" class=\"fa fa-minus less_quantity1\"></li>
                                    </div>
                                    <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-xs-4\">
                                    <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:30px; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 167);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 167);
            echo "\" class=\"form-control\" />
                                </div>
                                    <div style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\"font-size:12px; text-align:center; margin-top:10px;\" class=\"fa fa-plus add_quantity1\"></li>
                                    </div>

                                      </div>
                                    </div>
                                    <div class=\"col-4\">
                                      <h4 style=\"font-size:12px\">Total : ";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 176);
            echo "
                                      </h4>
                                    </div>
                                   
                                 </div>
                                
                           </div>
                          
                        </div>
                        <hr class=\"product_underline\" />
                      
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                     </div>
            </div>
         </form>
         ";
        // line 191
        if (($context["modules1"] ?? null)) {
            // line 192
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 193
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 195
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo " 
         </div>
         ";
        }
        // line 198
        echo " <br/>
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 202
            echo "               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 text-uppercase\">
                     <h6><strong>";
            // line 204
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 204);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 text-right \">
                     <p style=\"font-size:14px\">";
            // line 207
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 207);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "               </table>
            </div>
         </div>
         <br />

       
        ";
        // line 217
        echo ($context["coupon"] ?? null);
        echo "
        
       
       ";
        // line 220
        if ( !($context["stock"] ?? null)) {
            // line 221
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 222
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <button class=\"btn btn-primary\" disabled>";
                // line 224
                echo ($context["button_checkout"] ?? null);
                // line 225
                echo "</button>
            </div>
         </div>
         ";
            } else {
                // line 229
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <button class=\"btn btn-primary\" disabled>";
                // line 233
                echo ($context["button_checkout"] ?? null);
                echo "</button>
            </div>
         </div>
         ";
            }
            // line 237
            echo "         ";
        } else {
            // line 238
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 239
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
                // line 241
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            } else {
                // line 245
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
                // line 249
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            }
            // line 253
            echo "         ";
        }
        // line 254
        echo "
         ";
        // line 255
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 257
        echo ($context["column_right"] ?? null);
        echo "
   </div>
</div>
<br /><br />

<script>
 \$(\".add_quantity\").click(function() {
     var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) + 1;
     \$(this).parent().siblings().find(\".input-quantity\").val(b);
     \$(\"#cf\").submit();
   })
   
   \$(\".less_quantity\").click(function() {
   
     var b = Number(\$(this).parent().siblings().find(\".input-quantity\").val()) - 1;
     if (b <= 0) {
       b = 1;
     }
     \$(this).parent().siblings().find(\".input-quantity\").val(b);
     \$(\"#cf\").submit();
   })
   
   
   \$(\".add_quantity1\").click(function() {
     var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) + 1;
     \$(this).parent().siblings().find(\".input-quantity1\").val(b);
     \$(\"#cf1\").submit();
   })
   
   \$(\".less_quantity1\").click(function() {
   
     var b = Number(\$(this).parent().siblings().find(\".input-quantity1\").val()) - 1;
     if (b <= 0) {
       b = 1;
     }
     \$(this).parent().siblings().find(\".input-quantity1\").val(b);
     \$(\"#cf1\").submit();
   })
</script>
";
        // line 296
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 296,  537 => 257,  532 => 255,  529 => 254,  526 => 253,  519 => 249,  513 => 245,  506 => 241,  502 => 239,  499 => 238,  496 => 237,  489 => 233,  483 => 229,  477 => 225,  475 => 224,  471 => 222,  468 => 221,  466 => 220,  460 => 217,  452 => 211,  442 => 207,  436 => 204,  432 => 202,  428 => 201,  423 => 198,  418 => 196,  409 => 195,  405 => 194,  401 => 193,  396 => 192,  394 => 191,  389 => 188,  371 => 176,  357 => 167,  342 => 155,  335 => 151,  331 => 149,  328 => 148,  317 => 145,  309 => 143,  306 => 142,  298 => 137,  294 => 136,  290 => 135,  286 => 133,  276 => 130,  271 => 129,  269 => 128,  264 => 125,  260 => 124,  253 => 120,  247 => 116,  235 => 112,  231 => 111,  227 => 110,  215 => 103,  206 => 96,  199 => 94,  194 => 93,  190 => 92,  185 => 91,  182 => 90,  173 => 89,  166 => 88,  163 => 87,  157 => 84,  152 => 82,  148 => 81,  144 => 79,  136 => 78,  130 => 77,  127 => 76,  123 => 75,  94 => 49,  89 => 47,  85 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
