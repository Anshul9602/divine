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
class __TwigTemplate_a6a99f81b9d205befe80ff08605a2069faab330d333f9e6a9782fd8bc6bd79cb extends \Twig\Template
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
</style>
<div class=\"cart_backdrop\"></div>
<div class=\"cart\">
   <div class=\"cart-header\">
      <h5 style=\"color:#fff !important;\"> Cart - <font class=\"cart-item\"style=\"color:#fff;\">  <span id=\"cart-total\"style=\"color:#fff;\">";
        // line 10
        echo ($context["text_items"] ?? null);
        echo "</span></font></h5>
      <li class=\"fa fa-close cart-close\"></li>
   </div>
   <div class=\"cart-body\">
      
   ";
        // line 15
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "       <div class=\"row m-0\">
        <div class=\"col-4\">
            ";
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19)) {
                    echo " 
              <img src=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "\" class=\"img-cart\" />
             ";
                }
                // line 22
                echo "        </div>
        <div class=\"col-8\" style=\"padding-right:20px; padding-left:5px\">
            <h4 class=\"text-capitalize\" style=\"margin-top:10px\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "</h4>
            ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "               ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
               - <small>";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 27);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 27);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "               ";
                }
                // line 29
                echo "               ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 29)) {
                    echo " <br />
               - <small>";
                    // line 30
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 30);
                    echo "</small> ";
                }
                // line 31
                echo "               <p style=\"color:#666; font-size:11px\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31);
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
                echo "</p>
               <p><font style=\"font-size:10px\"><i>Item Total</i></font> : ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 32);
                echo "</p>
               <li onclick=\"cart.remove('";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
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
            // line 42
            echo "      ";
        } else {
            // line 43
            echo "
  
         <p class=\"text-center\">
           <img src=\"assets/img/cart_empty.jpg\" alt=\"\" class=\"img-empty-cart\">
           <br />
          ";
            // line 48
            echo ($context["text_empty"] ?? null);
            echo "
        </p>
      
      ";
        }
        // line 52
        echo "   </div>
   <div class=\"cart-footer\">
      <div style=\"padding:10px 10px 0px 10px; margin:0px \" class=\"row\">
         <div class=\"col-6\">
            <h5>Total:</h5>
         </div>
         <div class=\"col-6 text-right\">
            <h5 class='slide-cart-total'>";
        // line 59
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
      <button class=\"btn btn-primary cart-checkout\" style=\"margin:0 10px 10px 10px;width:280px !important;\">Checkout Now</button>
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
        return array (  172 => 59,  163 => 52,  156 => 48,  149 => 43,  146 => 42,  131 => 33,  127 => 32,  120 => 31,  114 => 30,  109 => 29,  106 => 28,  97 => 27,  90 => 26,  88 => 25,  84 => 24,  80 => 22,  71 => 20,  67 => 19,  63 => 17,  58 => 16,  56 => 15,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/slide_cart.twig", "");
    }
}
