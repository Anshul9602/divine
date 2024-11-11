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

/* default/template/checkout/checkout_new.twig */
class __TwigTemplate_a355c39914b88fecdb54f133424a99abbb10f61a6aa03d84d4a613fa666270d4 extends \Twig\Template
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
   h4.font-18{
    font-size:18px;
    margin-bottom:20px;
   } 
</style>
<div class=\"content\">
    <div class=\"container ptb-50\">
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <h3>Secure Checkout</h3>
                <hr />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3\">
               <h4 class='font-18'>Billing Address</h4> 
               <p class='text-capitalize'>";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_firstname", [], "any", false, false, false, 19);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_lastname", [], "any", false, false, false, 19);
        echo "<br />
                ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_address_1", [], "any", false, false, false, 20);
        echo "  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_address_2", [], "any", false, false, false, 20);
        echo " <br />
                ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_city", [], "any", false, false, false, 21);
        echo ",  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_zone", [], "any", false, false, false, 21);
        echo "<br />
                ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_country", [], "any", false, false, false, 22);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "payment_postcode", [], "any", false, false, false, 22);
        echo "</p>
            </div>
            
            <div class=\"col-sm-3\">
            <h4 class='font-18'>Shipping Address</h4> 
                <p class='text-capitalize'>";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_firstname", [], "any", false, false, false, 27);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_lastname", [], "any", false, false, false, 27);
        echo "<br />
                ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_address_1", [], "any", false, false, false, 28);
        echo "  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_address_2", [], "any", false, false, false, 28);
        echo " <br />
                ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_city", [], "any", false, false, false, 29);
        echo ",  ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_zone", [], "any", false, false, false, 29);
        echo "<br />
                ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_country", [], "any", false, false, false, 30);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["order_data"] ?? null), "shipping_postcode", [], "any", false, false, false, 30);
        echo "</p>
            </div>
            <div class=\"col-sm-3\">
            <h4 class='font-18'>Shipping Methods</h4> 
            <p>Standard Shipping</p>
                <div class='d-none' id=\"shipping-body\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
            // line 37
            echo "                  <p><strong>";
            echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 37);
            echo "</strong></p>
                  ";
            // line 38
            if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 38)) {
                // line 39
                echo "                  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                    // line 40
                    echo "                  <div class=\"radio\">
                    <label> ";
                    // line 41
                    if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 41) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                        // line 42
                        echo "                      ";
                        $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 42);
                        // line 43
                        echo "                      <input type=\"radio\" name=\"shipping_method\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 43);
                        echo "\" checked=\"checked\" />
                      ";
                    } else {
                        // line 45
                        echo "                      <input type=\"radio\" name=\"shipping_method\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 45);
                        echo "\" />
                      ";
                    }
                    // line 47
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 47);
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 47);
                    echo "</label>
                  </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                  ";
            } else {
                // line 51
                echo "                  <div class=\"alert alert-danger alert-dismissible\">";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 51);
                echo "</div>
                  ";
            }
            // line 53
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                  <textarea name=\"comment\" style=\"display:none\" rows=\"8\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
                  </div>
                </div>
            <div class=\"col-sm-3\">
              <span id=\"payment_appen\">

              </span>
            </div>
        </div>
        <div class=\"row\">
        <div style=\"margin-top:30px; padding-right:20px\" class=\"col-sm-4\">
          <div class=\"col-sm-12\" style=\"background-color:#f1f1f1\">
           <h4>NEED HELP ORDERING?</h4>
            <p style=\"padding:20px; font-size:14px\">
              
              EMAIL: abhinavdhadda@gmail.com</br>
              PHONE:+91 98290 65718
              </p>
            <hr style=\"margin:0\">
            <h4>SHIPPING &amp; FULFILLMENT></h4>
            <p style=\"padding:20px; font-size:14px\">
              
             EXPECTED DELIVERY TIME (For in-stock products) -<br>
INDIA: 3-14 Days<br>
OTHER COUNTRIES: 10-30 Days<br>
              <a href=\"index.php?route=information/contact\">CONTACT US</a> FOR OUT OF STOCK PRODUCTS
            </p>
          </div>
        </div>
        <div style=\"margin-top:30px; background-color:#fff; padding:10px\" class=\"col-sm-8 col-xs-12\">
          <span id=\"confirm_box\">

          </span>
        </div>
        </div>
    </div>
</div>
<script>
  \$(document).ready(function(e) {
    \$.ajax({
      url: 'index.php?route=checkout/shipping_method/save',
      type: 'post',
      data: \$('input[name=\\'shipping_method\\']:checked, textarea'),
      dataType: 'json',
      success: function(data) {
        console.log(\"api1\");
        console.log(data);
        \$.ajax({
          url: 'index.php?route=checkout/payment_method',
          dataType: 'html',
          complete: function() {
            \$('#button-shipping-method').button('reset');
          },
          success: function(html) {
            console.log(html);
            \$('#payment_appen').html(html);

            \$.ajax({
              url: 'index.php?route=checkout/payment_method/save',
              type: 'post',
              data: \$('input[name=\\'payment_method\\']:checked, textarea'),
              dataType: 'json',
              beforeSend: function() {
                \$('#button-payment-method').button('loading');
              },
              success: function(json) {
                \$.ajax({
                  url: 'index.php?route=checkout/confirm',
                  dataType: 'html',
                  complete: function() {
                    \$('#button-payment-method').button('reset');
                  },
                  success: function(html) {
                    \$('#confirm_box').html(html);
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr
                      .responseText);
                  }
                })
                console.log(json);
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }

            })


          }
        })
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }

    })
  });

  \$(\"body\").on(\"change\", \"input[name=\\'payment_method\\']\", function() {
    \$.ajax({
      url: 'index.php?route=checkout/payment_method/save',
      type: 'post',
      data: \$('input[name=\\'payment_method\\']:checked, textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-payment-method').button('loading');
      },
      success: function(json) {
        \$.ajax({
          url: 'index.php?route=checkout/confirm',
          dataType: 'html',
          complete: function() {
            \$('#button-payment-method').button('reset');
          },
          success: function(html) {
            \$('#confirm_box').html(html);
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        })
        console.log(json);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }

    })

  })
</script> 
            
            
      

   

";
        // line 192
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout_new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 192,  178 => 54,  172 => 53,  166 => 51,  163 => 50,  151 => 47,  145 => 45,  139 => 43,  136 => 42,  134 => 41,  131 => 40,  126 => 39,  124 => 38,  119 => 37,  115 => 36,  104 => 30,  98 => 29,  92 => 28,  86 => 27,  76 => 22,  70 => 21,  64 => 20,  58 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout_new.twig", "");
    }
}
