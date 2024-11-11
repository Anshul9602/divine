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
class __TwigTemplate_71531cb7902024e294909127ae6c24544fbb3cef4b4e5971c941f5ed5715505c extends \Twig\Template
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 35
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 35);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 35);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
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
        // line 49
        echo ($context["content_top"] ?? null);
        echo "
         <h1 class=\"text-center cart-heading\">";
        // line 50
        echo ($context["heading_title"] ?? null);
        echo " </h1>
         <br />
         <form id=\"cf\" action=\"";
        // line 52
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 79
            echo "                     <tr>
                        <td class=\"text-center\">";
            // line 80
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80)) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                echo "\">
                           <img src=\"";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 81);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "\" style=\"max-width:80px\" /></a> ";
            }
            // line 82
            echo "                        </td>
                        <td class=\"text-center\">
                           <a class=\"pt-10\" href=\"";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 84);
            echo "\">
                              <h5> ";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
            echo "</h5>
                           </a>
                           ";
            // line 87
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 87)) {
                echo " 
                           <span class=\"text-danger\">*(Out Of stock)</span> 
                           ";
            }
            // line 90
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 90)) {
                // line 91
                echo "                           ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                           <small>";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 92);
                    echo "</small> <br/>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                           ";
            }
            // line 94
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 94)) {
                echo " <br/>
                           <small>";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 95);
                echo "</small> ";
            }
            // line 96
            echo "                           ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 96)) {
                echo " <br/>
                           <span class=\"label label-info\">";
                // line 97
                echo ($context["text_recurring_item"] ?? null);
                echo "</span> <small>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 97);
                echo "</small> 
                           ";
            }
            // line 99
            echo "                        </td>
                        <td class=\"text-left\">
                           <div style=\"width:120px; margin:auto; margin-top:20px; \" class=\"row\">
                              <div style=\"cursor: pointer; text-align:center; padding-left:0px; padding-right:0px; height:34px; border:thin solid #ccc\" class=\"col-sm-4\">
                                 <li style=\" font-size:12px; margin:auto; text-align:center; margin-top:10px; width: 100%; height: 100%\" class=\"fa fa-minus less_quantity\"></li>
                              </div>
                              <div style=\" padding-left:0px; padding-right:0px;\" class=\"col-sm-4\">
                                 <input style=\"box-shadow:none; height:34px; text-align:center; border-radius:0px; width:100%; cursor:default\" class=\"input-quantity\" readonly name=\"quantity[";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 106);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 106);
            echo "\" class=\"form-control\" />
                              </div>
                              <div style=\" cursor: pointer; padding-left:0px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-sm-4 addqty\">
                                 <li style=\"font-size:12px; text-align:center; margin-top:10px; width: 100%; height: 100%;\" class=\"fa fa-plus add_quantity\"></li>
                              </div>
                           </div>
                        </td>
                        <td class=\"text-right\">";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 113);
            echo "</td>
                        <td class=\"text-right\">";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 114);
            echo "</td>
                        <td><button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 115
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 115);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                        </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                  </tbody>
               </table>
            </div>
         </form>
         <form action=\"";
        // line 123
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"table-responsive\" id=\"mobile_table\">
            <div class=\"col-xs-12\">
                       
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 128
            echo "                      
                        <div class=\"row m-0\">
                           <div class=\"col-3\">
                           ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 131)) {
                // line 132
                echo "                              <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 132);
                echo "\">
                              <img src=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 133);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "\" />
                              </a>
                              ";
            }
            // line 136
            echo "                           </div>
                           <div class=\"col-9\">
                           <a href=\"";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 138);
            echo "\">
                                 <h4 style=\"text-transform:uppercase \">";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 139);
            echo "</h4>
                                 ";
            // line 140
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 140)) {
                echo " 
                                
                                 <span class=\"text-danger\">*<i>(Out of stock) <br /></i>
                                 </span>
                                 ";
            }
            // line 145
            echo "                                 ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 145)) {
                // line 146
                echo "                                 ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 146));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " 
                                 <p style=\" color:#ccc; text-transform: capitalize\">
                                 ";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 148);
                    echo "
                                 </p>
                                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "                                 ";
            }
            // line 152
            echo "                              </a>
                              <p >
                                 Price : ";
            // line 154
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 154);
            echo "
                              </p>
                              <p style=\"margin-top: -7px;\">
                                 <button style=\"background-color: transparent; outline:none; margin:auto; padding:0px;  text-align:center; 
                                    border:none; box-shadow:none \" type=\"button\" onclick=\"cart.remove('";
            // line 158
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 158);
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
            // line 170
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 170);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 170);
            echo "\" class=\"form-control\" />
                                </div>
                                    <div style=\" cursor: pointer; padding-left:0px; width:30px; padding-right:0px; height:34px; text-align:center; border:thin solid #ccc\" class=\"col-xs-4\">
                                       <li style=\"font-size:12px; text-align:center; margin-top:10px;\" class=\"fa fa-plus add_quantity1\"></li>
                                    </div>

                                      </div>
                                    </div>
                                    <div class=\"col-4\">
                                      <h4 style=\"font-size:12px\">Total : ";
            // line 179
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 179);
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
        // line 191
        echo "                     </div>
            </div>
         </form>
         ";
        // line 194
        if (($context["modules1"] ?? null)) {
            // line 195
            echo "         <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
         <p>";
            // line 196
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
         <div class=\"panel-group\" id=\"accordion\"> ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 198
                echo "            ";
                echo $context["module"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo " 
         </div>
         ";
        }
        // line 201
        echo " <br/>
         <div class=\"row\">
            <div class=\"col-sm-4 offset-sm-8\">
               ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 205
            echo "               <div class=\"row mt-10\">
                  <div class=\"col-sm-6 text-uppercase\">
                     <h6><strong>";
            // line 207
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 207);
            echo ":</strong></h6>
                  </div>
                  <div class=\"col-sm-6 text-right \">
                     <p style=\"font-size:14px\">";
            // line 210
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 210);
            echo " </p>
                  </div>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "               </table>
            </div>
         </div>
         <br />

       
        ";
        // line 220
        echo ($context["coupon"] ?? null);
        echo "
        
       
        
         ";
        // line 224
        if (($context["logged"] ?? null)) {
            // line 225
            echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
                <a href=\"index.php?route=checkout/registered_payment\" class=\"btn btn-primary\">";
            // line 227
            echo ($context["button_checkout"] ?? null);
            echo "</a>
            </div>
         </div>
         ";
        } else {
            // line 231
            echo "         <div class=\"buttons clearfix\">
            <div class=\"pull-right\">
               <a href=\"index.php?route=account/account\" class=\"btn btn-primary btn-outline\">Login</a>
               &nbsp;&nbsp;&nbsp;
               <a href=\"index.php?route=checkout/guest_new\" class=\"btn btn-primary\">";
            // line 235
            echo ($context["button_checkout"] ?? null);
            echo "</a>
            </div>
         </div>
        ";
        }
        // line 239
        echo "
         ";
        // line 240
        echo ($context["content_bottom"] ?? null);
        echo "
      </div>
      ";
        // line 242
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
        // line 281
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
        return array (  560 => 281,  518 => 242,  513 => 240,  510 => 239,  503 => 235,  497 => 231,  490 => 227,  486 => 225,  484 => 224,  477 => 220,  469 => 214,  459 => 210,  453 => 207,  449 => 205,  445 => 204,  440 => 201,  435 => 199,  426 => 198,  422 => 197,  418 => 196,  413 => 195,  411 => 194,  406 => 191,  388 => 179,  374 => 170,  359 => 158,  352 => 154,  348 => 152,  345 => 151,  334 => 148,  326 => 146,  323 => 145,  315 => 140,  311 => 139,  307 => 138,  303 => 136,  293 => 133,  288 => 132,  286 => 131,  281 => 128,  277 => 127,  270 => 123,  264 => 119,  252 => 115,  248 => 114,  244 => 113,  232 => 106,  223 => 99,  216 => 97,  211 => 96,  207 => 95,  202 => 94,  199 => 93,  190 => 92,  183 => 91,  180 => 90,  174 => 87,  169 => 85,  165 => 84,  161 => 82,  153 => 81,  147 => 80,  144 => 79,  140 => 78,  111 => 52,  106 => 50,  102 => 49,  89 => 38,  77 => 35,  73 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}
