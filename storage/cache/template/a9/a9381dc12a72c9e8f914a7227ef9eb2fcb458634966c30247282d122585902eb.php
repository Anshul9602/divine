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
class __TwigTemplate_7ce2d09f69e33443e5f6d1ab7573d4c90bfacfe0916059102098c72e31d517e3 extends \Twig\Template
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
                      <h6 class=\"mt-3\">Your Saving :  &nbsp; &nbsp; &nbsp;<span STYLE=\"COLOR:black;font-size:20px;\">";
                // line 115
                echo ($context["special"] ?? null);
                echo "</span></h6>
                  ";
            }
            // line 117
            echo "                <br />
                ";
        }
        // line 119
        echo "              </div>
              <div class=\"row mt-20 mlr-0\">
                <p>Ships within <span style=\"font-size: 16px;font-weight: 600;\">4 Weeks</span> of order.</p>
              </div>
                ";
        // line 123
        if (($context["options"] ?? null)) {
            // line 124
            echo "                <hr>
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 126
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 126) == "select")) {
                    // line 127
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 128
                        echo "                <div class=\"text-center\" style=\"display: inline-block;\">
                  <span style=\"background:url(";
                        // line 129
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 129);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 129);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 129);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 129);
                        echo "\" class=\"tab_options\">
                  </span>
                  <p style=\"margin-top: 0px; font-size:12px\"> ";
                        // line 131
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 131);
                        echo "</p>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "                <div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 134)) {
                        echo " required ";
                    }
                    echo "\">
                  <select name=\"option[";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 135);
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 136
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                      ";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 137));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 138
                        echo "                      <option 
                        data-sign=\"";
                        // line 139
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 139);
                        echo "\" 
                        data-link=\"";
                        // line 140
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 140);
                        echo "\" 
                        value=\"";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 141);
                        echo "\"
                        >
                        ";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 143);
                        echo "
                        ";
                        // line 144
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 144)) {
                            // line 145
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 145);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 145);
                            echo ")
                        ";
                        }
                        // line 146
                        echo " 
                      </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "                  </select>
                </div>
                <br /><br />
                ";
                }
                // line 153
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "radio")) {
                    // line 154
                    echo "                <div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 154)) {
                        echo " required ";
                    }
                    echo "\">
                  <label style=\"float:left\" class=\"control-label float-r\">";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    echo "</label>
                  ";
                    // line 156
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 156));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 157
                        echo "                  <div class=\"radio-custom\">
                      <label>
                      <input 
                        type=\"radio\"
                        class='sizes' 
                        name=\"option[";
                        // line 162
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 162);
                        echo "]\" 
                        value=\"";
                        // line 163
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 163);
                        echo "\"
                        data-sign=\"";
                        // line 164
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 164);
                        echo "\"
                        data-price=\"";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 165);
                        echo "\"
                        />
                      ";
                        // line 167
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 167)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 167);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 167);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 167);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 167);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                      <span> ";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                        echo "</span>
                      </label>
                  </div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo " 
                </div>
                <br /><br />
                ";
                }
                // line 175
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 175) == "checkbox")) {
                    // line 176
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 176)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 177);
                    echo "</label>
                  <div id=\"input-option";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "\">
                      ";
                    // line 179
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 179));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 180
                        echo "                      <div class=\"checkbox\">
                        <label>
                        <input type=\"checkbox\" name=\"option[";
                        // line 182
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 182);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                        echo "\" />
                        ";
                        // line 183
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 183)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 183);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 183);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 183);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 184
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 184);
                        echo "
                        ";
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185)) {
                            // line 186
                            echo "                        (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 186);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 186);
                            echo ")
                        ";
                        }
                        // line 187
                        echo " </label>
                      </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo " 
                  </div>
                </div>
                ";
                }
                // line 193
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "text")) {
                    // line 194
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "</label>
                  <input type=\"text\" name=\"option[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 196);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 196);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                    echo "\" class=\"form-control\" />
                </div>
                ";
                }
                // line 199
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "textarea")) {
                    // line 200
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
                  <textarea name=\"option[";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 202);
                    echo "</textarea>
                </div>
                ";
                }
                // line 205
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "file")) {
                    // line 206
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\">";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label>
                  <button type=\"button\" id=\"button-upload";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"option[";
                    // line 209
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    echo "\" />
                </div>
                ";
                }
                // line 212
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 212) == "date")) {
                    // line 213
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 213)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 214);
                    echo "</label>
                  <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 216
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 216);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                  </div>
                </div>
                ";
                }
                // line 223
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "datetime")) {
                    // line 224
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 225
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    echo "</label>
                  <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 227
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 227);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                  </div>
                </div>
                ";
                }
                // line 234
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234) == "time")) {
                    // line 235
                    echo "                <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        echo " required ";
                    }
                    echo "\">
                  <label class=\"control-label\" for=\"input-option";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    echo "</label>
                  <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 238
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 238);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </span>
                  </div>
                </div>
                ";
                }
                // line 245
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                ";
        }
        // line 247
        echo "                <div class=\"row mt-30 mlr-0\">
                    <div class=\"form-group\">
                      <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 249
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
        // line 261
        echo ($context["product_id"] ?? null);
        echo "\" />
                      <br/>
                      <button type=\"button\" style='float:left' id=\"button-cart\" data-loading-text=\"";
        // line 263
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
        // line 276
        echo ($context["primary_material"] ?? null);
        echo "
    <br />
    <b>Secondary Material:</b>";
        // line 278
        echo ($context["secondary_material"] ?? null);
        echo " 
    <br />
    <b>Dimensions in Inch:</b> ";
        // line 280
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
        // line 290
        echo ($context["style"] ?? null);
        echo "
    <br />
    <b>Fabric:</b> ";
        // line 292
        echo ($context["fabric"] ?? null);
        echo "
    <br />
    <b>Dimension In CM: </b> ";
        // line 294
        echo ($context["dimension_cm"] ?? null);
        echo "
    <br />
    <b>Sitting Dimension:</b> ";
        // line 296
        echo ($context["sitting_dimension"] ?? null);
        echo "
    
    <br />
    <b>Mattress Size:</b> 
    
    <br />
    <b>Weight:</b> ";
        // line 302
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
        // line 317
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 318
        if (($context["attribute_groups"] ?? null)) {
            // line 319
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 321
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 322
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 324
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 326
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 327
        if (($context["attribute_groups"] ?? null)) {
            // line 328
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 331
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 333
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 333);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 337
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 337));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 338
                    echo "                <tr>
                  <td>";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 339);
                    echo "</td>
                  <td>";
                    // line 340
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 340);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 345
            echo "              </table>
            </div>
            ";
        }
        // line 348
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 349
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 352
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 353
            if (($context["review_guest"] ?? null)) {
                // line 354
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 356
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 357
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 362
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 364
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 369
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
                // line 384
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 387
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
                  </div>
                </div>
                ";
            } else {
                // line 391
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 393
            echo "              </form>
            </div>
            ";
        }
        // line 396
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
        // line 417
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
        // line 472
        if (($context["products"] ?? null)) {
            // line 473
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
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 485
                echo "        <div class=\"col-sm-3\">
           <div class=\"product-thumb product-card transition text-center\">
              <div class=\"image\">
                <a href=\"";
                // line 488
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 488);
                echo "\">
                  <img src=\"";
                // line 489
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 489);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 489);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 489);
                echo "\" class=\"img-responsive\" />
                </a>
              </div>
              <div class=\"caption text-capitalize\">
                <p class=\"product_name mt-10 font-16 mt-10\">";
                // line 493
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 493);
                echo "</p>
              </div>
              ";
                // line 495
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 495)) {
                    // line 496
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 497
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 497)) {
                        // line 498
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 498);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 500
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 500);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 501
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 501);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 502
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 502);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 504
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 504)) {
                        // line 505
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 506
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 506);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 508
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 510
                echo "           </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 512
            echo "  
   </div>
 <br /> 
</section>
";
        }
        // line 517
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
        // line 604
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 609
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 615
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
        // line 682
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 686
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
        // line 922
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
        return array (  1611 => 922,  1372 => 686,  1365 => 682,  1295 => 615,  1286 => 609,  1278 => 604,  1188 => 517,  1181 => 512,  1173 => 510,  1169 => 508,  1164 => 506,  1159 => 505,  1156 => 504,  1151 => 502,  1147 => 501,  1142 => 500,  1136 => 498,  1134 => 497,  1131 => 496,  1129 => 495,  1124 => 493,  1113 => 489,  1109 => 488,  1104 => 485,  1100 => 484,  1087 => 473,  1085 => 472,  1027 => 417,  1004 => 396,  999 => 393,  993 => 391,  986 => 387,  980 => 384,  962 => 369,  954 => 364,  949 => 362,  941 => 357,  937 => 356,  933 => 354,  931 => 353,  927 => 352,  922 => 349,  919 => 348,  914 => 345,  907 => 343,  898 => 340,  894 => 339,  891 => 338,  887 => 337,  880 => 333,  876 => 331,  872 => 330,  868 => 328,  866 => 327,  862 => 326,  858 => 324,  852 => 322,  849 => 321,  843 => 319,  841 => 318,  837 => 317,  819 => 302,  810 => 296,  805 => 294,  800 => 292,  795 => 290,  782 => 280,  777 => 278,  772 => 276,  754 => 263,  749 => 261,  734 => 249,  730 => 247,  727 => 246,  721 => 245,  707 => 238,  700 => 236,  693 => 235,  690 => 234,  676 => 227,  669 => 225,  662 => 224,  659 => 223,  645 => 216,  638 => 214,  631 => 213,  628 => 212,  620 => 209,  612 => 208,  608 => 207,  601 => 206,  598 => 205,  586 => 202,  580 => 201,  573 => 200,  570 => 199,  558 => 196,  552 => 195,  545 => 194,  542 => 193,  536 => 189,  528 => 187,  521 => 186,  519 => 185,  514 => 184,  498 => 183,  492 => 182,  488 => 180,  484 => 179,  480 => 178,  476 => 177,  469 => 176,  466 => 175,  460 => 171,  450 => 168,  432 => 167,  427 => 165,  423 => 164,  419 => 163,  415 => 162,  408 => 157,  404 => 156,  400 => 155,  393 => 154,  390 => 153,  384 => 149,  376 => 146,  369 => 145,  367 => 144,  363 => 143,  358 => 141,  354 => 140,  350 => 139,  347 => 138,  343 => 137,  339 => 136,  333 => 135,  326 => 134,  317 => 131,  304 => 129,  301 => 128,  296 => 127,  293 => 126,  289 => 125,  286 => 124,  284 => 123,  278 => 119,  274 => 117,  269 => 115,  265 => 114,  260 => 113,  254 => 111,  251 => 110,  249 => 109,  238 => 101,  233 => 99,  227 => 96,  218 => 90,  211 => 85,  207 => 83,  204 => 82,  190 => 79,  185 => 78,  182 => 77,  172 => 75,  170 => 74,  167 => 73,  165 => 72,  161 => 70,  157 => 68,  154 => 67,  141 => 64,  138 => 63,  133 => 62,  130 => 61,  120 => 58,  117 => 57,  115 => 56,  112 => 55,  110 => 54,  102 => 49,  90 => 39,  78 => 36,  74 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
