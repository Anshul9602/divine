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

/* default/template/common/slide_cart.twig */
class __TwigTemplate_bf7e7cc5b3b2a1c3777613bca42fc8c683f4db8c97264ade2d141d624868f3dd extends \Twig\Template
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
        echo "<style>
    .cart-body .cart-body{
        height:auto;
        overflow-y:auto;
    }
    .cart-checkout{
    
      width:100%;
    }
</style>
<div class=\"cart_backdrop\"></div>
<div class=\"cart\">
   <div class=\"cart-header\">
      <h5 style=\"color:#fff\"> Cart - <font class=\"cart-item\">  <span id=\"cart-total\">";
        // line 14
        echo ($context["text_items"] ?? null);
        echo "</span></font></h5>
      <li class=\"fa fa-close cart-close\"></li>
   </div>
   <div class=\"cart-body\">
      
   ";
        // line 19
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 21
                echo "       <div class=\"row m-0\">
        <div class=\"col-4\">
            ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23)) {
                    echo " 
              <img src=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "\" class=\"img-cart\" />
             ";
                }
                // line 26
                echo "        </div>
        <div class=\"col-8\" style=\"padding-right:20px; padding-left:5px\">
            <h4 class=\"text-capitalize\" style=\"margin-top:10px\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
                echo "</h4>
            ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "               ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 30));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
               - <small>";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 31);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 31);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "               ";
                }
                // line 33
                echo "               ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 33)) {
                    echo " <br />
               - <small>";
                    // line 34
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 34);
                    echo "</small> ";
                }
                // line 35
                echo "               <p style=\"color:#666; font-size:11px\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35);
                echo "</p>
               <p><font style=\"font-size:10px\"><i>Item Total</i></font> : ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 36);
                echo "</p>
               <li onclick=\"cart.remove('";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 37);
                echo "');\" class=\"fa fa-close remove-cart-item\"></li>
        </div>
       </div>
       <div class=\"row m-0\">
        <div class=\"col-sm-12\">
            <hr />
        </div>
       </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      ";
        } else {
            // line 47
            echo "
  
         <p class=\"text-center\">
           <img src=\"assets/img/cart_empty.jpg\" alt=\"\" class=\"img-empty-cart\">
           <br />
          ";
            // line 52
            echo ($context["text_empty"] ?? null);
            echo "
        </p>
      
      ";
        }
        // line 56
        echo "   </div>
   <div class=\"cart-footer\">
      <div style=\"padding:10px 10px 0px 10px; \" class=\"row\">
         <div class=\"col-6\">
            <h5>Total:</h5>
         </div>
         <div class=\"col-6 text-right\">
            <h5 class='slide-cart-total'>";
        // line 63
        echo ($context["final_total"] ?? null);
        echo "</h5>
         </div>
         
      </div>
      <a href=\"index.php?route=checkout/cart\">
         <button class=\"btn btn-primary view-cart-btn\">
            <li class=\"fa fa-shopping-bag\"></li>
            View Cart
         </button>
      </a>
      <a href=\"index.php?route=checkout/guest_new\">
      <button class=\"btn btn-primary cart-checkout\">Checkout Now</button>
      </a>
   </div>
</div>


<script>
   \$(document).ready(function(){
       \$('.cart-close,.cart_backdrop').click(function(){
        
           \$('.cart_backdrop').fadeOut();
           \$(\".cart\").animate({right:'-300px'})
       })
       \$('.minicart-btn').click(function(){
        
           \$('.cart_backdrop').fadeIn();
           \$(\".cart\").animate({right:'0px'})
       })
   })
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/common/slide_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 63,  167 => 56,  160 => 52,  153 => 47,  150 => 46,  135 => 37,  131 => 36,  124 => 35,  118 => 34,  113 => 33,  110 => 32,  101 => 31,  94 => 30,  92 => 29,  88 => 28,  84 => 26,  75 => 24,  71 => 23,  67 => 21,  62 => 20,  60 => 19,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/slide_cart.twig", "");
    }
}
