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
class __TwigTemplate_cc5303d6dfdee1918d289aceccac5173d1fd8227cce6d5e5468e93793dbd4afb extends \Twig\Template
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
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 49
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 49);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 49);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div id=\"checkout-cart\" class=\"container\">
   <div class=\"row\">
      <div id=\"content\" class=\"col-sm-12\">
         ";
        // line 63
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 64
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 66
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
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 93
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 94
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 94)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 94);
                echo "\">
                           <img src=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 95);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 95);
                echo "\" style=\"max-width:80px\" /></a> ";
            }
            // line 96
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
            echo "\">
                              <h5> ";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 99);
            echo "</h5>
                           </a>
                           ";
            // line 101
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 101)) {
                echo " 
                           <span class=\"text-danger\">*(Out Of stock)</span> 
                           ";
            }
            // line 104
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 104)) {
                // line 105
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                           <small>";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 106);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 106);
                    echo "</small> <br/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                           ";
            }
            // line 108
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 108)) {
                echo " <br/>
                           <small>";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 109);
                echo "</small> ";
            }
            // line 110
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 110)) {
                echo " <br/>
                           <span class=\"label label-info\">";
                // line 111
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 111);
                echo "</small> 
                           ";
            }
            // line 113
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto;  \" class=\"row\">
                              <div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 120);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 120);
            echo "\" class=\"form-control\" />
                              </div>
                              <div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-right\">";
            // line 127
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 127);
            echo "</td>
                        <td class=\"text-right\">";
            // line 128
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 128);
            echo "</td>
                        <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 129
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 129);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 137
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
            <div class=\"col-xs-12\">
                       
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 142
            echo "                      
                        <div class=\"row m-0\">
                           <div class=\"col-3\">
                           ";
            // line 145
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 145)) {
                // line 146
                echo "                              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 146);
                echo "\">
                              <img src=\"";
                // line 147
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 147);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 147);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 147);
                echo "\" />
                              </a>
                              ";
            }
            // line 150
            echo "                           </div>
                           <div class=\"col-9\">
                           <a href=\"";
            // line 152
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
            echo "\">
                                 <h4 style=\"text-transform:uppercase \">";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 153);
            echo "</h4>
                                 ";
            // line 154
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 154)) {
                echo " 
                                
                                 <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                                 </span>
                                 ";
            }
            // line 159
            echo "                                 ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 159)) {
                // line 160
                echo "                                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 160));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                                 <p style=\" color:#ccc; text-transform: capitalize\">
                                 ";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 162);
                    echo "
                                 </p>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                                 ";
            }
            // line 166
            echo "                              </a>
                              <p >
                                 Price : ";
            // line 168
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 168);
            echo "
                              </p>
                              <p style=\"margin-top: -7px;\">
                                 <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\" onclick=\"cart.remove('";
            // line 172
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 172);
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
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 184);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 184);
            echo "\" class=\"form-control\" />
                                </div>
                                    <div style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\"font-size:12px; text-align:center; margin-top:10px;\" class=\"fa fa-plus add_quantity1\"></li>
                                    </div>

                                      </div>
                                    </div>
                                    <div class=\"col-4\">
                                      <h4 style=\"font-size:12px\">Total : ";
            // line 193
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 193);
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
        // line 205
        echo "                     </div>
            </div>
         </form>
         ";
        // line 208
        if (($context["modules1"] ?? null)) {
            // line 209
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 210
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 212
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo " 
         </div>
         ";
        }
        // line 215
        echo " <br/>
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 219
            echo "               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 text-uppercase\">
                     <h6><strong>";
            // line 221
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 221);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 text-right \">
                     <p style=\"font-size:14px\">";
            // line 224
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 224);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "               </table>
            </div>
         </div>
         <br />

       
        ";
        // line 234
        echo ($context["coupon"] ?? null);
        echo "
        
       
       ";
        // line 237
        if ( !($context["stock"] ?? null)) {
            // line 238
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 239
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <button class=\"btn btn-primary\" disabled>";
                // line 241
                echo ($context["button_checkout"] ?? null);
                // line 242
                echo "</button>
            </div>
         </div>
         ";
            } else {
                // line 246
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <button class=\"btn btn-primary\" disabled>";
                // line 250
                echo ($context["button_checkout"] ?? null);
                echo "</button>
            </div>
         </div>
         ";
            }
            // line 254
            echo "         ";
        } else {
            // line 255
            echo "         ";
            if (($context["logged"] ?? null)) {
                // line 256
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
                // line 258
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            } else {
                // line 262
                echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
                // line 266
                echo ($context["button_checkout"] ?? null);
                echo "</a>
            </div>
         </div>
         ";
            }
            // line 270
            echo "         ";
        }
        // line 271
        echo "
         ";
        // line 272
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 274
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
        // line 313
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
        return array (  610 => 313,  568 => 274,  563 => 272,  560 => 271,  557 => 270,  550 => 266,  544 => 262,  537 => 258,  533 => 256,  530 => 255,  527 => 254,  520 => 250,  514 => 246,  508 => 242,  506 => 241,  502 => 239,  499 => 238,  497 => 237,  491 => 234,  483 => 228,  473 => 224,  467 => 221,  463 => 219,  459 => 218,  454 => 215,  449 => 213,  440 => 212,  436 => 211,  432 => 210,  427 => 209,  425 => 208,  420 => 205,  402 => 193,  388 => 184,  373 => 172,  366 => 168,  362 => 166,  359 => 165,  348 => 162,  340 => 160,  337 => 159,  329 => 154,  325 => 153,  321 => 152,  317 => 150,  307 => 147,  302 => 146,  300 => 145,  295 => 142,  291 => 141,  284 => 137,  278 => 133,  266 => 129,  262 => 128,  258 => 127,  246 => 120,  237 => 113,  230 => 111,  225 => 110,  221 => 109,  216 => 108,  213 => 107,  204 => 106,  197 => 105,  194 => 104,  188 => 101,  183 => 99,  179 => 98,  175 => 96,  167 => 95,  161 => 94,  158 => 93,  154 => 92,  125 => 66,  120 => 64,  116 => 63,  103 => 52,  91 => 49,  87 => 48,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
