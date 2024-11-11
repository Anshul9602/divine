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

/* default/template/product/category.twig */
class __TwigTemplate_b9d91282ae69149e4fd25d97e71fa1cae349127695b4725425e4982162e8b741 extends \Twig\Template
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
.real_pro-img {
\tpadding: 3px;
}

.nice-select {
\tfloat: right;
\tbackground: transparent;
\tborder: none;
\tmax-width: 140px;
\tbackground: #fff;
}

.pagination li {
\tpadding: 5px 10px 2px;
\tfont-size: 12px;
}

.pagination li a {
\tcolor: #666;
}

.pagination li.active {
\tbackground: #003B30;
\tcolor: #fff;
}

.product-card {
\tmargin: auto;
\tbox-shadow: 0 4px 8px 0 rgba(131, 129, 129, 0.6);
\tborder-radius: 0px;
\tbackground:#fff;
\theight:auto;
\ttext-align:left;
}
.product-card-body{
\tpadding-left:5px;
}
.product_name{
\tmargin-top:7.5px;

\tfont-size:16px;
}
.sub-title{
\tcolor: #999;
    text-transform: uppercase;
    font-size: 10px;
    margin-top: -14px;
}



#mobile_filter {
\tdisplay: none;
}


.p-card-holder{
\tpadding:5px;
}

.wishlist_link{
\tposition: absolute;
\t top: 15px;
\tright: 15px;
\t border-radius:50%;
\t  background:rgb(255,255,255,0.5); 
\tcursor: pointer;
\twidth:37px;
\theight:37px;
\ttext-align:center;
}
.wishlist_link i{
\tline-height:38px;
}
@media screen and (max-width:789px) {
\t.product_name {
\t\tfont-size: 12px;
\t\tmargin-top: 5px;
\t}

\t#mobile_filter {
\t\tdisplay: inline;
\t\tfloat: right;
\t\tcursor: pointer;
\t\tcolor: #333;
\t}

\t.nice-select {
\t\tmargin-right: 30px;
\t\tmargin-top: -28px;
\t}

\t.p-card {
\t\tpadding: 2px !important;
\t}

\t.product-card {
\t\tbox-shadow: 0 2.5px 5px 0 rgba(131, 129, 129, 0.4);
\t\tborder-radius: 0px;
\t\theight: auto !important;
\t}

\t.mt-4 {
\t\tmargin-top: 5px;
\t}
}
</style>
<script>
   \$(document).ready(function () {
   \$(\"#mobile_filter\").click(function (e) {
   e.preventDefault();
   \$(\".backdrop-filter\").fadeIn();
   \$(\".filter-panel\").animate({left: '0px'})
   })
   \$(\".backdrop-filter\").click(function () {
   \$(\".backdrop-filter\").fadeOut();
   \$(\".filter-panel\").animate({left: '-260px'})
   })
   
   })
</script>
<section style=\"background:#fcfcfc\">
   <div id=\"product-category\" class=\"container\">
      <div class=\"row\">
         <div id=\"content\" style=\"min-height:600px\" class=\"col-12\">
            ";
        // line 128
        if (($context["products"] ?? null)) {
            // line 129
            echo "            <div class=\"row\">
               <div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
                  <div class=\"btn-group btn-group-sm\">
                     <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 132
            echo ($context["button_list"] ?? null);
            echo "\">
                     <i class=\"fa fa-th-list\"></i>
                     </button>
                     <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 135
            echo ($context["button_grid"] ?? null);
            echo "\">
                     <i class=\"fa fa-th\"></i>
                     </button>
                  </div>
               </div>
               <div style=\"display:none\" class=\"col-md-3 col-xs-6\">
                  <div class=\"form-group input-group input-group-sm\">
                     <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 142
            echo ($context["text_limit"] ?? null);
            echo "</label>
                     <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                        ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 145
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 145) == ($context["limit"] ?? null))) {
                    // line 146
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 146);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 146);
                    echo "</option>
                        ";
                } else {
                    // line 148
                    echo "                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 148);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 148);
                    echo "</option>
                        ";
                }
                // line 150
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                     </select>
                  </div>
               </div>
            </div>
            <div style=\"margin-top:20px\" class=\"row\">
               <div class=\"col-sm-12\">
                  <div class=\"row\">
                     <div style='padding-top:12px' class=\"col-sm-6 hide-phone\">
                        ";
            // line 159
            echo ($context["results"] ?? null);
            echo "
                     </div>
                     <div class=\"col-sm-6  text-right\">
                        <a id=\"mobile_filter\" href=\"#\">
                           <li class=\"fa fa-filter\"></li>
                        </a>
                        <select id=\"input-sort\" style='float:right' class=\"form-control\" onchange=\"location = this.value;\">
                           ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 167
                echo "                           ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 167) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 168
                    echo "                           <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 168);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 168);
                    echo "</option>
                           ";
                } else {
                    // line 170
                    echo "                           <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 170);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 170);
                    echo "</option>
                           ";
                }
                // line 172
                echo "                           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                        </select>
                     </div>
                  </div>
                  <hr class=\"mt-10\" />
                  <div style=\"margin-top:-20px\" class=\"row\">
                     ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 179
                echo "                     <div class=\"col-sm-4 col-6 mt-4 p-card-holder\">
                        <div class=\"product-card\">
                           <div class=\"image real_pro-img\">
                              <a target=\"_blank\" href=\"";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 182);
                echo "\">
                               <img src=\"";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 183);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 183);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 183);
                echo "\" class=\"img-responsive\"/>
                              </a>
                           </div>
\t\t\t\t\t\t   <a class=\"wishlist_link\" onclick=\"wishlist.add('";
                // line 186
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 186);
                echo "');\">
                               <i class=\"pe-7s-like\" style=\"color: #f06639; font-size:24px;\"></i>
                           </a>
\t\t\t\t\t\t   <div class=\"product-card-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-7\">
\t\t\t\t\t\t\t   <a target=\"_blank\"  href=\"";
                // line 192
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 192);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\">";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 193);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t<span class='sub-title'>By Woodpeel</span>
\t\t\t\t\t\t\t    </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t   ";
                // line 198
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "                                 <p class=\"price\">
                                    ";
                    // line 200
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 200)) {
                        // line 201
                        echo "                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 201);
                        echo "</span>
                                    ";
                    } else {
                        // line 203
                        echo "                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 203);
                        echo "</span>
                                    <span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 204
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 204);
                        echo "</span><br>
                                    ";
                    }
                    // line 206
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 206)) {
                        // line 207
                        echo "                                    <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                                    ";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 208);
                        echo "</span>
                                    ";
                    }
                    // line 210
                    echo "                                 </p>
                                 ";
                }
                // line 212
                echo "\t\t\t\t\t\t\t\t <span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:14px;\" class=\"off_p\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 212);
                echo "% OFF</span>
                                
                         
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t  
\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   
                        </div>
                     </div>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                  </div>
                  <br/>
                  <div class=\"row\">
                     <div class=\"col-sm-6 text-left\">";
            // line 227
            echo ($context["pagination"] ?? null);
            echo "</div>
                  </div>
               </div>
            </div>
            <br/><br/>
            ";
        }
        // line 233
        echo "            ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 234
            echo "            <p class=\"text-center d-flex justify-content-center\" style=\"min-height:300px;align-items: center;\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            <div class=\"buttons\">
               <div class=\"pull-right\">
                  <a href=\"";
            // line 237
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
               </div>
            </div>
            ";
        }
        // line 241
        echo "            ";
        echo ($context["content_bottom"] ?? null);
        echo "
         </div>
      </div>
   </div>
</section>
";
        // line 246
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 246,  416 => 241,  407 => 237,  400 => 234,  397 => 233,  388 => 227,  383 => 224,  364 => 212,  360 => 210,  355 => 208,  350 => 207,  347 => 206,  342 => 204,  337 => 203,  331 => 201,  329 => 200,  326 => 199,  324 => 198,  316 => 193,  312 => 192,  303 => 186,  293 => 183,  289 => 182,  284 => 179,  280 => 178,  273 => 173,  267 => 172,  259 => 170,  251 => 168,  248 => 167,  244 => 166,  234 => 159,  224 => 151,  218 => 150,  210 => 148,  202 => 146,  199 => 145,  195 => 144,  190 => 142,  180 => 135,  174 => 132,  169 => 129,  167 => 128,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
