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

/* default/template/checkout/payment_address_new.twig */
class __TwigTemplate_902f3c40e41823f951deea4486b28867e70404020eec4d97233405f2197cf978 extends \Twig\Template
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
   label {
   font-size: 12px;
   text-transform: uppercase
   }
   select {
   -webkit-border-radius: 0px;
   }
   select option {
   border-radius: 0px
   }
   .address_card {
   padding: 10px;
   }
   .card_body {
   border: thin solid #f1f1f1;
   min-height: 148px;
   box-shadow: 1px 1px 1px #f1f1f1;
   padding: 10px;
   cursor: pointer;
   transition-duration: 100ms;
   -webkit-transition-duration: 100ms
   }
   .card_body:hover {
   -webkit-transform: scale(1.03);
   box-shadow: 2px 2px 2px #f1f1f1;
   transition-duration: 100ms;
   -webkit-transition-duration: 100ms
   }
   .card_body .fa-check-circle {
   color: green;
   position: absolute;
   top: 20px;
   right: 20px;
   display: none;
   list-style: none
   }
   .nice-select{
    width:100%;
   }
</style>
<div style=\" min-height:70vh\" class=\"container\">
   <div class=\"row\">
      <div class=\"col-sm-10 offset-sm-1 col-xs-10 offset-xs-1\">
         <div class=\"row text-center\">
            <div class=\"col-sm-12\">
               <br /><br />
               <h3 style=\"text-transform:uppercase\">Billing Information</h3>
               <h5>Please select address</h5>
               <hr />
            </div>
         </div>
         
         <div class=\"row\">
          <div class=\"col-sm-12\">
            <form class=\"form-horizontal\">
           
      <input style=\"display:none\" id='new_address_radio' type=\"radio\" name=\"payment_address\" value=\"new\" />
      
                ";
        // line 61
        if (($context["addresses"] ?? null)) {
            // line 62
            echo "                <div style=\"display:none\" class=\"radio\">
                    <input type=\"radio\" id=\"exising_btn\" name=\"payment_address\" value=\"existing\" checked />
                </div>
                
                <div id=\"payment-existing\">
                
                  <div class=\"row\">
                  
                      ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 71
                echo "                      <div class=\"col-sm-4 address_card\">
                          <div class=\"card_body\">
                            <li class=\"fa fa-check-circle\"></li>
                          <h4 style=\"text-transform:capitalize\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 74);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 74);
                echo "</h4>
                          <input type=\"hidden\" class=\"address_id\" value=\"";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 75);
                echo "\" />
                          
                            <p class='mt-10'>";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 77);
                echo ",<br /> ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 77);
                echo ", ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 77);
                echo ",<br /> ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 77);
                echo ", ";
                echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 77);
                echo "</p>
                          </div>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                      <input type=\"hidden\" name=\"address_id\" class=\"address_id\" id=\"a_id\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 81);
            echo "\" />
                          

                  <div class=\"col-sm-4 address_card\">
                      <div style=\"text-align:center\" id=\"add_new\" class=\"card_body\">
                        <li style=\"text-align:center; font-size:32px; margin-top:30px\" class=\"fa fa-plus-circle\"></li>
                        <h4 style=\"text-align:center\">Add New Addess</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div style=\"display:none\" class=\"radio\">
                  <label>
                  <input type=\"radio\" name=\"payment_address\" value=\"new\" />
                  ";
            // line 95
            echo ($context["text_address_new"] ?? null);
            echo "</label>
                </div>
                ";
        }
        // line 98
        echo "                <br />
                <div id=\"payment-new\" style=\"display:none\">
                  <div class=\"form-group required\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 103
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
                      </div>
                  
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 107
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
                      </div>
                      </div>
                  </div>
                  
                  <div class=\"form-group\">
                  <div class=\"row\">
                    <div style=\"display:none\" class=\"col-sm-6\">
                        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 115
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 118
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 121
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
                      </div>
                  </div>  
                  </div>
                  
                  <div class=\"form-group\">
                    <div class=\"row\">
                      
                        <div class=\"col-sm-6\">
                          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 130
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
                        </div>
                        <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 133
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
                      </div>
                        </div>
                  
                  </div>
                  
                  <div class=\"form-group required\">
                    <div class=\"row\">
                  
                      <div class=\"col-sm-6\">
                        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                            <option value=\"\">";
        // line 144
        echo ($context["text_select"] ?? null);
        echo "</option>
                            ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 146
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 146) == ($context["country_id"] ?? null))) {
                // line 147
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 147);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 147);
                echo "</option>
                            ";
            } else {
                // line 149
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 149);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 149);
                echo "</option>
                            ";
            }
            // line 151
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                        </select>
                      </div>
                    
                  
                    <div class=\"col-sm-6\">
                        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                        </select>
                      </div>
          
                    </div>
                    </div>
                  
                  ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 165
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 165) == "select")) {
                // line 166
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 166)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 166);
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 169);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "]\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-control\">
                            <option value=\"\">";
                // line 170
                echo ($context["text_select"] ?? null);
                echo "</option>
                            ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 171));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 172
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 172);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 172);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo "                        </select>
                      </div>
                  </div>
                  ";
            }
            // line 178
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 178) == "radio")) {
                // line 179
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 179)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 179);
                echo "\">
                      <label class=\"col-sm-2 control-label\">";
                // line 180
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-payment-custom-field";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\">
                            ";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 183));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 184
                    echo "                            <div class=\"radio\">
                              <label>
                              <input type=\"radio\" name=\"custom_field[";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 186);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 186);
                    echo "\" />
                              ";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 187);
                    echo "</label>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "                        </div>
                      </div>
                  </div>
                  ";
            }
            // line 194
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 194) == "checkbox")) {
                // line 195
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 195)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 195);
                echo "\">
                      <label class=\"col-sm-2 control-label\">";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-payment-custom-field";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                echo "\">
                            ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 199));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 200
                    echo "                            <div class=\"checkbox\">
                              <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 202);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 202);
                    echo "\" />
                              ";
                    // line 203
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 203);
                    echo "</label>
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "                        </div>
                      </div>
                  </div>
                  ";
            }
            // line 210
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 210) == "text")) {
                // line 211
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 211)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 211);
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 214);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 214);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 214);
                echo "\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\" class=\"form-control\" />
                      </div>
                  </div>
                  ";
            }
            // line 218
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "textarea")) {
                // line 219
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 219)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 219);
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 222);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 222);
                echo "\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 222);
                echo "</textarea>
                      </div>
                  </div>
                  ";
            }
            // line 226
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 226) == "file")) {
                // line 227
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 227)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 227);
                echo "\">
                      <label class=\"col-sm-2 control-label\">";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 228);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" id=\"button-payment-custom-field";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 231);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "]\" value=\"\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                echo "\" />
                      </div>
                  </div>
                  ";
            }
            // line 235
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 235) == "date")) {
                // line 236
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 236)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 236);
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 237);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group date\">
                            <input type=\"text\" name=\"custom_field[";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 240);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 240);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 240);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                        </div>
                      </div>
                  </div>
                  ";
            }
            // line 248
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 248) == "time")) {
                // line 249
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 249)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 249);
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 250);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group time\">
                            <input type=\"text\" name=\"custom_field[";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 253);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 253);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                        </div>
                      </div>
                  </div>
                  ";
            }
            // line 261
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 261) == "time")) {
                // line 262
                echo "                  <div class=\"form-group";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 262)) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 262);
                echo "\">
                      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 263);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 263);
                echo "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"custom_field[";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 266);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 266);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                        </div>
                      </div>
                  </div>
                  ";
            }
            // line 274
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "                </div>
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                      <input type=\"button\" value=\"";
        // line 278
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-payment-address\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\" />
                  </div>
                </div>
            </form>
          </div>
         </div>
      

      </div>
   </div>
</div>
<script type=\"text/javascript\">
   <!--
   \$('input[name=\\'payment_address\\']').on('change', function() {
     if (this.value == 'new') {
       \$('#payment-existing').hide();
       \$('#payment-new').show();
     } else {
       \$('#payment-existing').show();
       \$('#payment-new').hide();
     }
   });
   
   \$(\".sticky-header\").addClass(\"header_disabled\");
   \$(\".sticky-header\").css(\"background-color\", '#fff');
   \$(\".sticky-header\").css(\"border-bottom\", '#f1f1f1 thin solid');
   \$(\".sticky-header #navigation a\").css(\"color\", \"#181818\");
   \$(\".main_logo\").attr(\"src\", \"img/logo-blue.png\");
   
   
   //
   -->
</script>
<script type=\"text/javascript\">
  
   \$('select[name=\\'country_id\\']').on('change', function() {
     \$.ajax({
       url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
       dataType: 'json',
       beforeSend: function() {
         \$('select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
       },
       complete: function() {
         \$('.fa-spin').remove();
       },
       success: function(json) {
         if (json['postcode_required'] == '1') {
           \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
         } else {
           \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
         }
   
         html = '<option value=\"\"><?php echo \$text_select; ?></option>';
   
         if (json['zone'] && json['zone'] != '') {
           for (i = 0; i < json['zone'].length; i++) {
             html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
   
             if (json['zone'][i]['zone_id'] == '<?php echo \$zone_id; ?>') {
               html += ' selected=\"selected\"';
             }
   
             html += '>' + json['zone'][i]['name'] + '</option>';
           }
         } else {
           html += '<option value=\"0\" selected=\"selected\"><?php echo \$text_none; ?></option>';
         }
   
         \$('select[name=\\'zone_id\\']').html(html);
            \$('select[name=\\'zone_id\\']').niceSelect('update');
   
       },
       error: function(xhr, ajaxOptions, thrownError) {
         alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
       }
     });
   });
   
   \$('select[name=\\'country_id\\']').trigger('change');
   
   \$(document).delegate('#button-payment-address', 'click', function() {
   
     \$.ajax({
       url: 'index.php?route=checkout/registered_payment/save',
       type: 'post',
       data: \$('input[type=\\'text\\'],input[type=\\'checkbox\\']:checked, input[type=\\'radio\\']:checked, input[type=\\'hidden\\'], select'),
       dataType: 'json',
       beforeSend: function() {
         \$('#button-payment-address').button('loading');
       },
       complete: function() {
         \$('#button-payment-address').button('reset');
       },
       success: function(json) {
        console.log(json);
         \$('.alert, .text-danger').remove();
       
   
         if (json['redirect']) {
           location = json['redirect'];
         } else if (json['error']) {
        
           if (json['error']['warning']) {
            alert(json['error']['warning']);
             \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
           }
   
           for (i in json['error']) {
             var element = \$('#input-payment-' + i.replace('_', '-'));
   
             if (\$(element).parent().hasClass('input-group')) {
               \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
             } else {
               \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
             }
           }
   
           // Highlight any found errors
           \$('.text-danger').parent().parent().addClass('has-error');
         } else {
           window.location = 'index.php?route=checkout/registered_shipping';
         }
       },
       error: function(xhr, ajaxOptions, thrownError) {
         alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
       }
     });
   });
   
   \$(\".card_body\").not(\".card_body#add_new\").click(function() {
     \$(\"#button-payment-address\").prop(\"disabled\", false);
   
     \$(\"#a_id\").val(\$(this).find('.address_id').val());
   
     \$(\".card_body\").not(\".card_body#add_new\").find(\".fa\").fadeOut();
   
     \$(this).find(\".fa\").fadeIn();
   })
   
   \$(\".card_body#add_new\").click(function() {
     \$(\"#button-payment-address\").prop(\"disabled\", false);
     \$(\"#exising_btn\").prop(\"disabled\", false);
   
   
     \$(\"#new_address_radio\").prop(\"checked\", true);
     \$('#payment-existing').hide();
     \$('#payment-new').show();
   })
   
   
   
   //
   -->
</script>
";
        // line 432
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_address_new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  841 => 432,  682 => 278,  677 => 275,  671 => 274,  652 => 266,  644 => 263,  635 => 262,  632 => 261,  613 => 253,  605 => 250,  596 => 249,  593 => 248,  574 => 240,  566 => 237,  557 => 236,  554 => 235,  543 => 231,  535 => 230,  530 => 228,  521 => 227,  518 => 226,  503 => 222,  496 => 220,  487 => 219,  484 => 218,  469 => 214,  462 => 212,  453 => 211,  450 => 210,  444 => 206,  435 => 203,  427 => 202,  423 => 200,  419 => 199,  415 => 198,  410 => 196,  401 => 195,  398 => 194,  392 => 190,  383 => 187,  375 => 186,  371 => 184,  367 => 183,  363 => 182,  358 => 180,  349 => 179,  346 => 178,  340 => 174,  329 => 172,  325 => 171,  321 => 170,  313 => 169,  306 => 167,  297 => 166,  294 => 165,  290 => 164,  276 => 152,  270 => 151,  262 => 149,  254 => 147,  251 => 146,  247 => 145,  243 => 144,  229 => 133,  223 => 130,  211 => 121,  205 => 118,  199 => 115,  188 => 107,  181 => 103,  174 => 98,  168 => 95,  150 => 81,  132 => 77,  127 => 75,  121 => 74,  116 => 71,  112 => 70,  102 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/payment_address_new.twig", "");
    }
}
