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

/* default/template/product/product.twig */
class __TwigTemplate_b9e606df5e82d2d2579e5a6af0fbf97eef90ebd04f93012b8d84dd811e1ad629 extends \Twig\Template
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
* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
}
</style>
 <link rel=\"stylesheet\" href=\"assets/css/product.css?v1.1\" />
 <link rel=\"stylesheet\" href=\"assets/css/edit.css\" />
 <script src=\"https://cdn.shopify.com/s/files/1/2692/1794/files/image-zoom.min.js?v=1678864321\"></script>
<script src=\"assets/js/jquery.zoom.js\"></script>
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 36
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 36);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 36);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div id=\"product-product mt-10\" class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-12\">";
        // line 49
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\" style=\"
    justify-content: space-around;\"> 
         
          <div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1\">
          ";
        // line 54
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 55
            echo "            <ul class=\"slider slider-nav addi\">
                ";
            // line 56
            if (($context["thumb"] ?? null)) {
                // line 57
                echo "                <li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
                <img src=\"";
                // line 58
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
                </li>
                ";
            }
            // line 61
            echo "                ";
            if (($context["images"] ?? null)) {
                // line 62
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 63
                    echo "                <li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
                  <img src=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 64);
                    echo "\" style=\"margin: auto -5px;\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                ";
            }
            // line 68
            echo "            </ul>
              ";
        }
        // line 70
        echo "          </div>
            <div class=\"col-sm-5\"> 
              ";
        // line 72
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 73
            echo "              <ul class=\"slider slider-for\">
                ";
            // line 74
            if (($context["thumb"] ?? null)) {
                // line 75
                echo "                <li class=\"zoom\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
                ";
            }
            // line 77
            echo "                ";
            if (($context["images"] ?? null)) {
                // line 78
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 79
                    echo "                <li class=\"image-additional zoom\"> <img id=\"myimage\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 79);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
              </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                ";
            }
            // line 83
            echo "              </ul>
              ";
        }
        // line 85
        echo "
               <div id=\"myresult\" class=\"img-zoom-result\"></div>
            </div>
        
            <div class=\"col-sm-4\">
            <h3 class=\"text-capitalize\">";
        // line 90
        echo ($context["heading_title"] ?? null);
        echo "</h3>
            <span>(Wooden Finish)</span>  
            <div class=\"rating\">
                <p>
                  <span style='background:#ED6940; font-size:11.5px; border-radius:6px; padding:3px 5px; color:#f1f1f1'>
                   <i class=\"fa fa-star\"></i>&nbsp;
                   ";
        // line 96
        echo ($context["rating"] ?? null);
        echo " 
                  </span>
                  <a style=\"font-size:12px;\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">
                    &nbsp;";
        // line 99
        echo ($context["reviews"] ?? null);
        echo "</a>
                    &nbsp;&nbsp;&nbsp;
                    <a style=\"font-size:12px; text-transform:uppercase\" onclick=\"wishlist.add('";
        // line 101
        echo ($context["product_id"] ?? null);
        echo "');\">
                      <i class=\"fa fa-heart-o\"></i> add to wishlist
                    </a>
                  </p>
            </div>

            <div id=\"product\">
              <div class=\" mt-20 mlr-0\">
               ";
        // line 109
        if (($context["price"] ?? null)) {
            // line 110
            echo "                  ";
            if ( !($context["special"] ?? null)) {
                // line 111
                echo "                      <h3 id=\"p_pr\">";
                echo ($context["price"] ?? null);
                echo "</h3>
                  ";
            } else {
                // line 113
                echo "                 <h6>MRP : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span> </h6> 
                      <h5>Offer Price :  &nbsp; &nbsp; &nbsp;<span STYLE=\"COLOR:#ED6940;font-size:20px;\">";
                // line 114
                echo ($context["special"] ?? null);
                echo "</span></h5>
                  ";
            }
            // line 116
            echo "                <br />
                ";
        }
        // line 118
        echo "              </div>
              <div class=\"row mt-20 mlr-0\">
                <p>Ships within <span style=\"\">4 Weeks</span> of order.</p>
              </div>
                ";
        // line 122
        if (($context["options"] ?? null)) {
            // line 123
            echo "                <hr>
                ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 125
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 125) == "select")) {
                    // line 126
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 126));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 127
                        echo "                <div class=\"text-center\" style=\"display: inline-block;\">
                  <span style=\"background:url(";
                        // line 128
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 128);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 128);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 128);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 128);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        echo "\" class=\"tab_options\">
                  </span>
                  <p style=\"margin-top: 0px; font-size:12px\"> ";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 130);
                        echo "</p>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo "                <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 133)) {
                        echo " required ";
                    }
                    echo "\">
                  <select name=\"option[";
                    // line 134
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 134);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 135
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 137
                        echo "                      <option 
                        data-sign=\"";
                        // line 138
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 138);
                        echo "\" 
                        data-link=\"";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 139);
                        echo "\" 
                        value=\"";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                        echo "\"
                        >
                        ";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 142);
                        echo "
                        ";
                        // line 143
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 143)) {
                            // line 144
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 144);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144);
                            echo ")
                        ";
                        }
                        // line 145
                        echo " 
                      </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                  </select>
                </div>
                <br /><br />
                ";
                }
                // line 152
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 152) == "radio")) {
                    // line 153
                    echo "                <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 153)) {
                        echo " required ";
                    }
                    echo "\">
                  <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 154
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154);
                    echo "</label>
                  ";
                    // line 155
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 155));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 156
                        echo "                  <div class=\"radio-custom\">
                      <label>
                      <input 
                        type=\"radio\"
                        class='sizes' 
                        name=\"option[";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                        echo "]\" 
                        value=\"";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 162);
                        echo "\"
                        data-sign=\"";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 163);
                        echo "\"
                        data-price=\"";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 164);
                        echo "\"
                        />
                      ";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 166)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 166);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 166);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 166);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                      <span> ";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 167);
                        echo "</span>
                      </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    echo " 
                </div>
                <br /><br />
                ";
                }
                // line 174
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 174) == "checkbox")) {
                    // line 175
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 175)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\">";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 176);
                    echo "</label>
                  <div id=\"input-option";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\">
                      ";
                    // line 178
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 178));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 179
                        echo "                      <div class=\"checkbox\">
                        <label>
                        <input type=\"checkbox\" name=\"option[";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 181);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 181);
                        echo "\" />
                        ";
                        // line 182
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 182);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 182);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 183
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                        echo "
                        ";
                        // line 184
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184)) {
                            // line 185
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                            echo ")
                        ";
                        }
                        // line 186
                        echo " </label>
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo " 
                  </div>
                </div>
                ";
                }
                // line 192
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 192) == "text")) {
                    // line 193
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 193)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 194);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 194);
                    echo "</label>
                  <input type=\"text\" name=\"option[";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 195);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\" class=\"form-control\" />
                </div>
                ";
                }
                // line 198
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 198) == "textarea")) {
                    // line 199
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 199)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 200);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 200);
                    echo "</label>
                  <textarea name=\"option[";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 201);
                    echo "</textarea>
                </div>
                ";
                }
                // line 204
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 204) == "file")) {
                    // line 205
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 205)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\">";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 206);
                    echo "</label>
                  <button type=\"button\" id=\"button-upload";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"option[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" />
                </div>
                ";
                }
                // line 211
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211) == "date")) {
                    // line 212
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 213);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
                  <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 215);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                  </div>
                </div>
                ";
                }
                // line 222
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222) == "datetime")) {
                    // line 223
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    echo "</label>
                  <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 226
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 226);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 226);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                  </div>
                </div>
                ";
                }
                // line 233
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 233) == "time")) {
                    // line 234
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                    echo "</label>
                  <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 237);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                  </div>
                </div>
                ";
                }
                // line 244
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            echo "                ";
        }
        // line 246
        echo "                <div class=\"row mt-30 mlr-0\">
                    <div class=\"form-group\">
                      <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 248
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\" />
                      <div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:300px\" class=\"row\">
                          <div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
                            <li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
                          </div>
                          <div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
                            <input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
                          </div>
                          <div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
                            <li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
                          </div>
                      </div>
                      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 260
        echo ($context["product_id"] ?? null);
        echo "\" />
                      <br/>
                      <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        // line 262
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
                    </div>
          
                </div>
                <div class=\"row w-100 mt-3\">
<div class=\"col-sm-12\">
<br /> 
<h4>Product Details</h4>
  <hr />
  <p>
  
    <b>Finish:</b> 
    <br />
    <b>Primary Material:</b> ";
        // line 275
        echo ($context["primary_material"] ?? null);
        echo "
    <br />
    <b>Secondary Material:</b>";
        // line 277
        echo ($context["secondary_material"] ?? null);
        echo " 
    <br />
    <b>Dimensions in Inch:</b> ";
        // line 279
        echo ($context["dimension_inch"] ?? null);
        echo "
    <br />
    <b>Warranty:</b>
    <br />
    <b>Seating Height:</b> 
    <br />
    <b>Hand Rest Height:</b> 
    <br />
    <b>Ground Clearance:</b> 
    <br />
    <b>Style:</b> ";
        // line 289
        echo ($context["style"] ?? null);
        echo "
    <br />
    <b>Fabric:</b> ";
        // line 291
        echo ($context["fabric"] ?? null);
        echo "
    <br />
    <b>Dimension In CM: </b> ";
        // line 293
        echo ($context["dimension_cm"] ?? null);
        echo "
    <br />
    <b>Sitting Dimension:</b> ";
        // line 295
        echo ($context["sitting_dimension"] ?? null);
        echo "
    
    <br />
    <b>Mattress Size:</b> 
    
    <br />
    <b>Weight:</b> ";
        // line 301
        echo ($context["weight"] ?? null);
        echo "
  </p>
</div>
</div>
</div>

              </div>
            
      </div>
   </div>
  </div>
  
  <div class=\"row d-none w-100 mt-10\">
    <div class=\"col-sm-10 offset-sm-1\">
          <ul class=\"nav nav-tabs tabs-ul de\">
            <li ><a href=\"#tab-description\" class=\"active\" data-toggle=\"tab\">";
        // line 316
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 317
        if (($context["attribute_groups"] ?? null)) {
            // line 318
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 320
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 321
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 323
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 325
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 326
        if (($context["attribute_groups"] ?? null)) {
            // line 327
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 330
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 332
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 332);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 336
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 336));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 337
                    echo "                <tr>
                  <td>";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 338);
                    echo "</td>
                  <td>";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 339);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 342
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "              </table>
            </div>
            ";
        }
        // line 347
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 348
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 351
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 352
            if (($context["review_guest"] ?? null)) {
                // line 353
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 355
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 356
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 361
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 363
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 368
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    <span class=\"star-rating star-5\">
                    <input type=\"radio\" id=\"rating-1\"  name=\"rating\" value=\"1\" /><i></i>
                    &nbsp;
                    <input type=\"radio\" id=\"rating-2\" name=\"rating\" value=\"2\" /><i></i>
                    &nbsp;
                    <input type=\"radio\" id=\"rating-3\" name=\"rating\" value=\"3\" /><i></i>
                    &nbsp;
                    <input type=\"radio\" id=\"rating-4\" name=\"rating\" value=\"4\" /><i></i>
                    &nbsp;
                    <input type=\"radio\" id=\"rating-5\" name=\"rating\" value=\"5\" /><i></i>
                    &nbsp;
                    </span>
                   </div>
                </div>
                ";
                // line 383
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 386
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                  </div>
                </div>
                ";
            } else {
                // line 390
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 392
            echo "              </form>
            </div>
            ";
        }
        // line 395
        echo "          </div>
    </div>
   </div>
</div>
<br /><br />

<section style=\"background:#f1f1f1; padding:20px 0px\">
  <div class=\"container\">
  
    <div class=\"row\">
      <div class=\"col-sm-12\">
         <ul class=\"nav nav-tabs tabs-ul des-tab\">
            <li><a href=\"#tab-overview\" class=\"active\" data-toggle=\"tab\">Overview</a></li>
            <li><a href=\"#tab-care\" data-toggle=\"tab\">Care & Instruction</a></li>
            <li><a href=\"#tab-delivery\" data-toggle=\"tab\">Delivery & Installation</a></li>
            <li><a href=\"#tab-warranty\" data-toggle=\"tab\">Warranty</a></li>
            <li><a href=\"#tab-cancel\" data-toggle=\"tab\">Cancellations & Return</a></li>
          </ul>
          <div style=\"background:#fff; padding:10px 0px;\" class=\"tab-content des-con\">
          <div class=\"tab-pane active p-10\"  
            id=\"tab-overview\">
            ";
        // line 416
        echo ($context["description"] ?? null);
        echo "
          </div>
          
            <div class=\"tab-pane\" id=\"tab-care\">
              <ul>
                <li> 1. Regularly flick the furniture.</li>
                <li> 2. Deterge the timbered surface with a neat, fine usually soft polyester fiber cloth dewy in a timber-friendly cleanser.</li>
                <li> 3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
                <li> 4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a spill. Please make sure you do not use rugged stuff or rub the spot pronto.</li>
                <li> 5. Make sure you use hot pad, mats & coasters before keeping any hot or cold items on the timbered surface. Please do not keep extreme hot objects like baking dish, saucepan or griddle even on a hot pad.</li>
                <li> 6. To maintain its quality & lifespan in the long run, ensure that furniture is not kept next to windows or in open places, where it is exposed to upright sunlight, moisture & water.</li>
                <li> 7. Avoid cuts & scratches which may impede the scenic looks & finish of your furniture, by keeping the sharp objects away from your furniture.<li>
                <li> 8. Ensure that the furniture is not in contact with timber-unfriendly chemicals & alcohol, as it will harm the color finish, wood’s texture & durability of the furniture.</li>
              </ul>
            </div>

           
            <div class=\"tab-pane\" id=\"tab-delivery\">
            <ul>
              <li>1. Shipping address can’t be changed, once the product is shipped from our warehouse. Customer have to receive the product on the same address or the shipment will return to our warehouse.</li>
              <li>2. Your shipment will be held for 2 days at the nearest delivery hub, if you’ve failed to receive the delivery. After this, Woodpeel reserve the right to change the location of the shipment.</li>
              <li>3. In case of reshipping customer have to borne charges of both side transportation.</li>
              <li>4. Our team will stay in touch with you for a hassle-free delivery.</li>
              <li>5. Only first attempt of delivery at your shipping address is free. Customer have to borne extra delivery charges for second attempt, if a customer misses’ delivery.<li>
              <li>6. In absence of a service lift, our delivery partner shall only make a delivery to the ground floor of your apartment. Customer have to borne extra charges per floor on delivery, to the customer’s floor (on request) in such cases.</li>
                <li>7. If customer want time-specific or weekend delivery, then extra delivery charges will be applicable.</li>
            </ul>
            </div>
            <div class=\"tab-pane\" id=\"tab-warranty\">
              <ul>
                <li>This product comes with 1 year warranty, limited warranty covers manufacturing defects, termites & wood borer infestations. As per the industry standards, unevenness of up to 5mm is accepted widely, due to differences in floor & surface levels, this is not covered in warranty.This limited warranty does not implement to the following issues:</li>
                <li>1. Normal depreciation of the product over elongated use.</li>
                <li>2. Scratches, cuts or damages due to wrong cleaning methods or impacts/accidents.</li>
                <li>3. Product gets damaged due to wrong installation or assembly by the customer.</li>
                <li>4. Cracks developed due to dislocation, shifting or reshuffle of the product.</li>
                <li>5. Fading due to exposure to upright sunlight.</li>
                <li>6. Wood decaying due to consistent exposure to water or wetness.</li>
                <li>7. Upholstery fabrics such as seat covers have no warranty.</li>
                <li>8. Use of wood-unfriendly harsh chemicals or non-norm dry-cleaning procedures.</li>
              </ul>
            </div>
            <div class=\"tab-pane\" id=\"tab-cancel\">
              <ul>
                <li>Cancellation Policies:</li>
               <li> 1. What are the policies if customer have a change of mind after placing an order?In case of change of mind after placing an order, the time frame is 24hours to cancel an order (3% of the total amount paid by customer will be deducted as cancellation charges). But customized products have no such policies meaning it can’t be cancelled.</li>
               <li>2. What if the product is not customized, is it possible to cancel the order?Yes, it is possible to cancel but, it can only be cancelled before the product is shipped from our warehouse. Once the shipment is hand overed to our delivery team, we can’t cancel the order.</li>
               <li>3. How much cancellation charges will be applicable, while cancelling the order after 24hours?A cancellation fee of 6% will be applied on the amount paid by you while processing the refund.</li>
               <li>4. Is there any way to not get any charges deducted from the full amount paid by customer? Or Can customer use the amount afterwards for placing a new order?Yes, it is possible through credit note, meaning we’ll give you a credit note of full am</li>
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
";
        // line 471
        if (($context["products"] ?? null)) {
            // line 472
            echo "<section class=' ptb-30'>
   <div class=\"container\">
       <div class=\"row text-center w-100\">
        <div class=\"col-sm-12 w-100\">
          <h3 style=\"text-align: center; margin-bottom: 20px\">Related Products
            <span class=\"hb\" style=\"text-align: -webkit-center;\"></span>
          </h3>
        </div>
        
       </div>
       <div class=\"row\" >
       ";
            // line 483
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 484
                echo "        <div class=\"col-sm-3\">
           <div class=\"product-thumb product-card transition text-center\">
              <div class=\"image\">
                <a href=\"";
                // line 487
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 487);
                echo "\">
                  <img src=\"";
                // line 488
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 488);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 488);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 488);
                echo "\" class=\"img-responsive\" />
                </a>
              </div>
              <div class=\"caption text-capitalize\">
                <p class=\"product_name mt-10 font-16 mt-10\">";
                // line 492
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 492);
                echo "</p>
              </div>
              ";
                // line 494
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 494)) {
                    // line 495
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 496
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 496)) {
                        // line 497
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 497);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 499
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 499);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 500
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 500);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 501
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 501);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 503
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 503)) {
                        // line 504
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 505
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 505);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 507
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 509
                echo "           </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "  
   </div>
 <br /> 
</section>
";
        }
        // line 516
        echo ($context["column_right"] ?? null);
        echo "


<script type=\"text/javascript\">


\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
       
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
             alert(json['error']['option'][i]);
\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t
\t\t\t\t\$('.cart-counter-header').html(json['total'][0]);
        
        setTimeout(function () {
\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t}, 100);

\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');

       
           \$('.cart_backdrop').fadeIn();
           \$(\".cart\").animate({right:'0px'})
      
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 603
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 608
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 614
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 681
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 685
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
  var old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));


    \$('.sizes').change(function() {
        var p = \$(this).attr('data-price');
        var sig = \$(this).attr('data-sign');
        var q = p.replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, '');
        var x = Number(q);

        if (sig == \"+\") {
            var new_p = old_price + x;
        } else {
            var new_p = old_price - x;
        }


       // \$(\"#p_pr\").text('\$' + new_p);

    }); 

  \$(\"#add_quantity\").click(function() {
   
      var b = Number(\$(\"#input-quantity\").val()) + 1;

      \$(\".iq\").val(b);
  })
  \$(\"#less_quantity\").click(function() {
      var b = Number(\$(\"#input-quantity\").val()) - 1;
      if (b < 0) {
          b = 0;
      }
    \$(\".iq\").val(b);
  })

var slides_to_show = 3;
    \$('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        infinite:true,
        asNavFor: '.slider-nav',
        nextArrow: '<button style=\"width: 25px;top: 220px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
        prevArrow: '<button style=\"width: 25px;top: 220px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

    });
    \$('.slider-nav').slick({
        slidesToShow: slides_to_show,
        vertical:true,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
     
        focusOnSelect: true
    });
  
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});


\$(document).ready(function(e) {
    var link = getUrlParameter('a');

 
    if (link) {
        \$(\".tab_options\").each(function() {
            if (\$.trim(\$(this).siblings().html()).toLocaleLowerCase() == link.toLocaleLowerCase()) {
                \$(this).css('border', '2px solid #413B98');
                \$(this).addClass('current');
                var val = \$(this).attr(\"data-val\");

                \$(\"select option\").each(function(index, element) {
                    if (\$(this).val() == val) {
                        \$(this).prop(\"selected\", true);
                    }

                })

            }
        })
    } else {
        if (\$(\".tab_options\").length > 0) {

            var val;

            \$(\"select option\").each(function(index, element) {
                if (\$(this).attr(\"data-link\") == \"\") {
                    \$(this).prop(\"selected\", true);
                    val = \$(this).val();
                }
            })

            \$(\".tab_options\").each(function() {
                if (\$(this).attr(\"data-val\") == val) {
                    \$(this).css('border', '2px solid #003B30');
                }
            })
        }
    }
    \$(\".tab_options\").click(function() {
        if (!\$(this).hasClass('current')) {
            var val = \$(this).attr(\"data-val\");

            \$(\"select option\").each(function(index, element) {
                if (\$(this).val() == val) {
                    if (\$(this).attr(\"data-link\")) {
                        \$(this).prop(\"selected\", true);
                        window.location = \$(this).attr(\"data-link\") + '?a=' + \$.trim(\$(this).html());

                    }
                }
            });
        }

    })

});

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};



//--></script> 
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement(\"DIV\");
  lens.setAttribute(\"class\", \"img-zoom-lens\");
  /*insert lens:*/

  img.parentElement.insertBefore(lens, img);
  
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
 
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = \"url('\" + img.src + \"')\";
  result.style.backgroundSize = (img.width * cx) + \"px \" + (img.height * cy) + \"px\";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener(\"mousemove\", moveLens);
  img.addEventListener(\"mousemove\", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener(\"touchmove\", moveLens);
  img.addEventListener(\"touchmove\", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + \"px\";
    lens.style.top = y + \"px\";
    /*display what the lens \"sees\":*/
    result.style.backgroundPosition = \"-\" + (x * cx) + \"px -\" + (y * cy) + \"px\";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
<script>
// Initiate zoom effect:
imageZoom(\"myimage\", \"myresult\");
</script>
";
        // line 921
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1607 => 921,  1368 => 685,  1361 => 681,  1291 => 614,  1282 => 608,  1274 => 603,  1184 => 516,  1177 => 511,  1169 => 509,  1165 => 507,  1160 => 505,  1155 => 504,  1152 => 503,  1147 => 501,  1143 => 500,  1138 => 499,  1132 => 497,  1130 => 496,  1127 => 495,  1125 => 494,  1120 => 492,  1109 => 488,  1105 => 487,  1100 => 484,  1096 => 483,  1083 => 472,  1081 => 471,  1023 => 416,  1000 => 395,  995 => 392,  989 => 390,  982 => 386,  976 => 383,  958 => 368,  950 => 363,  945 => 361,  937 => 356,  933 => 355,  929 => 353,  927 => 352,  923 => 351,  918 => 348,  915 => 347,  910 => 344,  903 => 342,  894 => 339,  890 => 338,  887 => 337,  883 => 336,  876 => 332,  872 => 330,  868 => 329,  864 => 327,  862 => 326,  858 => 325,  854 => 323,  848 => 321,  845 => 320,  839 => 318,  837 => 317,  833 => 316,  815 => 301,  806 => 295,  801 => 293,  796 => 291,  791 => 289,  778 => 279,  773 => 277,  768 => 275,  750 => 262,  745 => 260,  730 => 248,  726 => 246,  723 => 245,  717 => 244,  703 => 237,  696 => 235,  689 => 234,  686 => 233,  672 => 226,  665 => 224,  658 => 223,  655 => 222,  641 => 215,  634 => 213,  627 => 212,  624 => 211,  616 => 208,  608 => 207,  604 => 206,  597 => 205,  594 => 204,  582 => 201,  576 => 200,  569 => 199,  566 => 198,  554 => 195,  548 => 194,  541 => 193,  538 => 192,  532 => 188,  524 => 186,  517 => 185,  515 => 184,  510 => 183,  494 => 182,  488 => 181,  484 => 179,  480 => 178,  476 => 177,  472 => 176,  465 => 175,  462 => 174,  456 => 170,  446 => 167,  428 => 166,  423 => 164,  419 => 163,  415 => 162,  411 => 161,  404 => 156,  400 => 155,  396 => 154,  389 => 153,  386 => 152,  380 => 148,  372 => 145,  365 => 144,  363 => 143,  359 => 142,  354 => 140,  350 => 139,  346 => 138,  343 => 137,  339 => 136,  335 => 135,  329 => 134,  322 => 133,  313 => 130,  300 => 128,  297 => 127,  292 => 126,  289 => 125,  285 => 124,  282 => 123,  280 => 122,  274 => 118,  270 => 116,  265 => 114,  260 => 113,  254 => 111,  251 => 110,  249 => 109,  238 => 101,  233 => 99,  227 => 96,  218 => 90,  211 => 85,  207 => 83,  204 => 82,  190 => 79,  185 => 78,  182 => 77,  172 => 75,  170 => 74,  167 => 73,  165 => 72,  161 => 70,  157 => 68,  154 => 67,  141 => 64,  138 => 63,  133 => 62,  130 => 61,  120 => 58,  117 => 57,  115 => 56,  112 => 55,  110 => 54,  102 => 49,  90 => 39,  78 => 36,  74 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
