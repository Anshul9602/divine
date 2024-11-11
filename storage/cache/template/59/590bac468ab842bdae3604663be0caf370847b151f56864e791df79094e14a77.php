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
class __TwigTemplate_78d25d9497b52bcbd17396516c6f8b3a25d8974e110d7a99206acb6663992630 extends \Twig\Template
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
   
</style>
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 41
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 41);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 41);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        // line 55
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 56
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 58
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
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 85
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 86)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 86);
                echo "\">
                           <img src=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 87);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" style=\"max-width:80px\" /></a> ";
            }
            // line 88
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
            echo "\">
                              <h5> ";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 91);
            echo "</h5>
                           </a>
                           ";
            // line 93
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 93)) {
                echo " 
                           <span class=\"text-danger\">*(Out Of stock)</span> 
                           ";
            }
            // line 96
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 96)) {
                // line 97
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 97));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                           <small>";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 98);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 98);
                    echo "</small> <br/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                           ";
            }
            // line 100
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 100)) {
                echo " <br/>
                           <small>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 101);
                echo "</small> ";
            }
            // line 102
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 102)) {
                echo " <br/>
                           <span class=\"label label-info\">";
                // line 103
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 103);
                echo "</small> 
                           ";
            }
            // line 105
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
                              <div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 112);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 112);
            echo "\" class=\"form-control\" />
                              </div>
                              <div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-right\">";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 119);
            echo "</td>
                        <td class=\"text-right\">";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 120);
            echo "</td>
                        <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 121
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 121);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 129
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
            <div class=\"col-xs-12\">
                       
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 134
            echo "                      
                        <div class=\"row m-0\">
                           <div class=\"col-3\">
                           ";
            // line 137
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 137)) {
                // line 138
                echo "                              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 138);
                echo "\">
                              <img src=\"";
                // line 139
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 139);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 139);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 139);
                echo "\" />
                              </a>
                              ";
            }
            // line 142
            echo "                           </div>
                           <div class=\"col-9\">
                           <a href=\"";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 144);
            echo "\">
                                 <h4 style=\"text-transform:uppercase \">";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
            echo "</h4>
                                 ";
            // line 146
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 146)) {
                echo " 
                                
                                 <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                                 </span>
                                 ";
            }
            // line 151
            echo "                                 ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 151)) {
                // line 152
                echo "                                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 152));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                                 <p style=\" color:#ccc; text-transform: capitalize\">
                                 ";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 154);
                    echo "
                                 </p>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                                 ";
            }
            // line 158
            echo "                              </a>
                              <p >
                                 Price : ";
            // line 160
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 160);
            echo "
                              </p>
                              <p style=\"margin-top: -7px;\">
                                 <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\" onclick=\"cart.remove('";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 164);
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
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 176);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 176);
            echo "\" class=\"form-control\" />
                                </div>
                                    <div style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\"font-size:12px; text-align:center; margin-top:10px;\" class=\"fa fa-plus add_quantity1\"></li>
                                    </div>

                                      </div>
                                    </div>
                                    <div class=\"col-4\">
                                      <h4 style=\"font-size:12px\">Total : ";
            // line 185
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 185);
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
        // line 197
        echo "                     </div>
            </div>
         </form>
         ";
        // line 200
        if (($context["modules1"] ?? null)) {
            // line 201
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 202
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 204
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo " 
         </div>
         ";
        }
        // line 207
        echo " <br/>
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 211
            echo "               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 text-uppercase\">
                     <h6><strong>";
            // line 213
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 213);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 text-right \">
                     <p style=\"font-size:14px\">";
            // line 216
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 216);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "               </table>
            </div>
         </div>
         <br />

       
        ";
        // line 226
        echo ($context["coupon"] ?? null);
        echo "
        
       
        
         ";
        // line 230
        if (($context["logged"] ?? null)) {
            // line 231
            echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
                <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
            // line 233
            echo ($context["button_checkout"] ?? null);
            echo "</a>
            </div>
         </div>
         ";
        } else {
            // line 237
            echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
            // line 241
            echo ($context["button_checkout"] ?? null);
            echo "</a>
            </div>
         </div>
        ";
        }
        // line 245
        echo "
         ";
        // line 246
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 248
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
        // line 287
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
        return array (  566 => 287,  524 => 248,  519 => 246,  516 => 245,  509 => 241,  503 => 237,  496 => 233,  492 => 231,  490 => 230,  483 => 226,  475 => 220,  465 => 216,  459 => 213,  455 => 211,  451 => 210,  446 => 207,  441 => 205,  432 => 204,  428 => 203,  424 => 202,  419 => 201,  417 => 200,  412 => 197,  394 => 185,  380 => 176,  365 => 164,  358 => 160,  354 => 158,  351 => 157,  340 => 154,  332 => 152,  329 => 151,  321 => 146,  317 => 145,  313 => 144,  309 => 142,  299 => 139,  294 => 138,  292 => 137,  287 => 134,  283 => 133,  276 => 129,  270 => 125,  258 => 121,  254 => 120,  250 => 119,  238 => 112,  229 => 105,  222 => 103,  217 => 102,  213 => 101,  208 => 100,  205 => 99,  196 => 98,  189 => 97,  186 => 96,  180 => 93,  175 => 91,  171 => 90,  167 => 88,  159 => 87,  153 => 86,  150 => 85,  146 => 84,  117 => 58,  112 => 56,  108 => 55,  95 => 44,  83 => 41,  79 => 40,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
