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
class __TwigTemplate_7faf450adda8908a761a28b113c538d65f8f0de77ed357f2dbed9adf0e654f19 extends \Twig\Template
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
<script src=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\"></script>
<link href=\"
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"assets/css/plugins/theme.css\" />

<style>
\t* {
\t\tbox-sizing: border-box;
\t}

\t.image-additional {
\t\tposition: relative;
\t}

\t.img-zoom-lens {
\t\tposition: absolute;
\t\tborder: 1px solid #d4d4d4;
\t\t/*set the size of the lens:*/
\t\twidth: 40px;
\t\theight: 40px;
\t}

\t.img-zoom-result {
\t\tborder: 1px solid #d4d4d4;
\t\t/*set the size of the result div:*/
\t\twidth: 100%;
\t\theight: 400px;
\t}
\t.hidden {
\t\tdisplay: none;
\t}
\t.pImageMain {
\t\twidth: 650px;
\t\theight:95vh;
\t}
\t/* // imagePopup */
\t.imagePopup {
\t\tposition: fixed;
\t\ttop: 50%;
\t\tleft: 50%;
\t\ttransform: translate(-50%, -50%);
\t\twidth: 100%;
\t\theight: 100vh;
\t\tz-index: 9000;
\t\ttransition: all 300ms ease-in-out;
\t\t
\t}

\t.imagePopupBg {
\t\tbackground: #1e1e1e;
\t\topacity: 0.87;
\t\tposition: absolute;
\t\tinset: 0;
\t\ttransition-timing-function: cubic-bezier(0.22,0.61,0.36,1);
\t\ttransition-property: opacity;
\t}


\t.imagePopupContainer .splide__arrow {
\t\ttop: 40%;
\t\tpadding: 8px;
\t\tbackground-color: rgba(255, 255, 255, 0.6);
\t}
.imagePopupContainer .splide__arrow {
\tz-index:99999;
\tcursor:pointer;
}
@media screen and (max-width:750px){
\t.hide_phone{
\t\tdisplay:none;
\t}
\t.btn-round.slick-arrow {
\t\tdisplay:none !important;
\t}
\t.mt-10{
\t\tmargin-top:10px;
\t}
}

@media screen and (min-width:751px){
\t.hide-desktop{
\t\tdisplay:none !important;
\t}
\t
}


</style>
<script src=\"https://cdn.shopify.com/s/files/1/2692/1794/files/image-zoom.min.js?v=1678864321\"></script>
<link
rel=\"stylesheet\" href=\"assets/css/product.css?v1.1\"/>


<!-- or link to the CDN -->
<link rel=\"stylesheet\" href=\"url-to-cdn/splide.min.css\">

<script src=\"assets/js/jquery.zoom.js\"></script>
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 111
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 112);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 112);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<div id=\"product-product mt-10\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">";
        // line 126
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1 hide_phone\">
\t\t\t\t\t";
        // line 129
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 130
            echo "\t\t\t\t\t\t<ul class=\"slider slider-nav addi\">
\t\t\t\t\t\t\t";
            // line 131
            if (($context["thumb"] ?? null)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t<li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 133
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t<li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 139);
                    echo "\" style=\"margin: auto -5px;\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "\t\t\t\t\t\t\t";
            }
            // line 143
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t";
        // line 147
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 148
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 149
            if (($context["thumb"] ?? null)) {
                // line 150
                echo "\t\t\t\t\t\t<li ><img class=\"mainImage\"src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 153
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 154
                    echo "\t\t\t\t\t\t<li class=\"image-additional \">
\t\t\t\t\t\t\t<img class=\"mainImage\" src=\"";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 155);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t\t\t\t\t\t";
            }
            // line 159
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 161
        echo "\t\t\t\t\t


\t\t\t\t</div>
\t\t\t\t<div class=\"py-2 imagePopup hidden\">
\t\t\t\t\t<div class=\"imagePopupBg \"></div>
\t\t\t\t\t<div class=\"imagePopupClose absolute right-0 py-1 flex justify-end z-[9001] cursor-pointer\" style=\"height:100px;width: 100px;z-index: 99999;  cursor: pointer;    text-align: end;right:30px;  position: absolute;\">
\t\t\t\t\t\t<span class=\"\">
\t\t\t\t\t\t\t<i class=\"fa fa-times-circle\" style=\"color: aliceblue;font-size:50px;\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"imagePopupContainer py-2 z-[9111] relative mt-10\">
\t\t\t\t\t\t<div class=\"splide relative \" id=\"imagePopup\" role=\"group\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t\t\t<div class=\"splide__track max-w-[670px] mx-auto imagePopupClose\" style=\"z-index:9999;\">
\t\t\t\t\t\t\t\t";
        // line 176
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 177
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"splide__list \" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 178
            if (($context["images"] ?? null)) {
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide min-h-[900px] d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pImageMain zoom\"style=\"cursor: zoom-in !important;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 182
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 182);
                    echo "\" alt=\"\" style=\"height: -webkit-fill-available;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 188
            echo "

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t\t<h3 class=\"text-capitalize mt-10\">";
        // line 200
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t<span>(Wooden Finish)</span>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span style='background:#ED6940; font-size:11.5px; border-radius:6px; padding:3px 5px; color:#f1f1f1'>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>&nbsp;
\t\t\t\t\t\t\t\t";
        // line 206
        echo ($context["rating"] ?? null);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<a style=\"font-size:12px;\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">
\t\t\t\t\t\t\t\t&nbsp;";
        // line 209
        echo ($context["reviews"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t<a style=\"font-size:12px; text-transform:uppercase ;cursor:pointer;\" onclick=\"wishlist.add('";
        // line 211
        echo ($context["product_id"] ?? null);
        echo "');\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart-o\"></i>
\t\t\t\t\t\t\t\tadd to wishlist
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"product\">
\t\t\t\t\t\t<div class=\" mt-20 mlr-0\">
\t\t\t\t\t\t\t";
        // line 220
        if (($context["price"] ?? null)) {
            // line 221
            echo "\t\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t<h3 id=\"p_pr\">";
                echo ($context["price"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t\t";
            } else {
                // line 224
                echo "\t\t\t\t\t\t\t\t\t<h6>MRP : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<h5>Offer Price : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:#ED6940;font-size:20px;\">";
                // line 226
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"mt-3\">Your Saving : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:green;font-size:16px;font-weight: 600;\">₹
\t\t\t\t\t\t\t\t\t\t\t";
                // line 229
                echo ($context["save"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t(";
                // line 230
                echo ($context["percent1"] ?? null);
                echo "%)</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-20 mlr-0\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 239
        if (($context["options"] ?? null)) {
            // line 240
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 242
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 242) == "select")) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 243));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 244
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"background:url(";
                        // line 245
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 245);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 245);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 245);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 245);
                        echo "\" class=\"tab_options\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin-top: 0px; font-size:12px\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 247);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t<div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 251)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 252
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 252);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 253
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 254));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 255
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 255);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 255);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 255);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 256
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 256);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 257
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 257)) {
                            // line 258
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 258);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 258);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 260
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 262
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 266) == "radio")) {
                    // line 267
                    echo "\t\t\t\t\t\t\t\t\t<div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 267)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label style=\"float:left\" class=\"control-label float-r\">";
                    // line 268
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 268);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    // line 269
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 269));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 270
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 272
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 272);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 272);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 272);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 273
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 273)) {
                            // line 274
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 274);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 274);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 274)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 274);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 274);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 276
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 277);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 284
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 284) == "checkbox")) {
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 285)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 286
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 286);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 287
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 287);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 288
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 288));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 289
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 291);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 291);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 292
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 292)) {
                            // line 293
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 293);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 293);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 293)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 293);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 293);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 295
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 295);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 296
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 297);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 297);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 299
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 302
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 305
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 305) == "text")) {
                    // line 306
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 306)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 307);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 307);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 308);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 308);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 308);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 311
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 311) == "textarea")) {
                    // line 312
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 312)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 313
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 313);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 314);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 314);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 314);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 314);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 317
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 317) == "file")) {
                    // line 318
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 318)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 319
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 319);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 322
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 323);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 323);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 326
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 326) == "date")) {
                    // line 327
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 327)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 328
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 328);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 328);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 330);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 330);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 330);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 339
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 339) == "datetime")) {
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 340)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 341);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 341);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 343
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 343);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 343);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 343);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 352
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 352) == "time")) {
                    // line 353
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 353)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 354
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 354);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 354);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 356);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 365
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "\t\t\t\t\t\t";
        }
        // line 367
        echo "\t\t\t\t\t\t<div class=\"row mt-30 mlr-0\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 369
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\"/>
\t\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:200px\" class=\"row\">
\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 381
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:210px' id=\"button-cart\" data-loading-text=\"";
        // line 384
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block\">
                     \t\t\t\t<li class=\"fa fa-shopping-cart\"></li>  ";
        // line 385
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" style='float:right; background-color:#ED6940' class=\"col-md-5 col-5 btn btn-primary btn-lg \">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>\tBuy Now
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row w-100 mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<h4>Product Details</h4>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 401
        if (twig_test_empty(($context["sku_id"] ?? null))) {
            // line 402
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 404
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Sku ID:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 405
            echo ($context["sku_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 408
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["finish"] ?? null))) {
            // line 409
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 411
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Finish:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 412
            echo ($context["finish"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 415
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["primary_material"] ?? null))) {
            // line 416
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 418
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Primary Material:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 419
            echo ($context["primary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 422
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 424
        if (twig_test_empty(($context["secondary_material"] ?? null))) {
            // line 425
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 427
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Secondary Material:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 428
            echo ($context["secondary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 431
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 433
        if (($context["attributes"] ?? null)) {
            // line 434
            echo "
\t\t\t\t\t\t\t\t\t    ";
            // line 435
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 436
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 436);
                echo ":</b>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 437
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 437);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 440
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 441
        echo "

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t";
        // line 445
        if (twig_test_empty(($context["style"] ?? null))) {
            // line 446
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 448
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Style:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 449
            echo ($context["style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 452
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 453
        if (twig_test_empty(($context["fabric"] ?? null))) {
            // line 454
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 456
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Fabric:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 457
            echo ($context["fabric"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 460
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 461
        if (twig_test_empty(($context["dimension_cm"] ?? null))) {
            // line 462
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 464
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Dimension In CM:
\t\t\t\t\t\t\t\t\t\t\t</b>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 467
            echo ($context["dimension_cm"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 470
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 471
        if (twig_test_empty(($context["Dimension_Inch"] ?? null))) {
            // line 472
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 474
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Dimension in Inch:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 475
            echo ($context["Dimension_Inch"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 479
        echo "
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t";
        // line 482
        if (twig_test_empty(($context["weight"] ?? null))) {
            // line 483
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 485
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Weight:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 486
            echo ($context["weight"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 488
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row d-none w-100 mt-10\">
\t\t<div class=\"col-sm-10 offset-sm-1\">
\t\t\t<ul class=\"nav nav-tabs tabs-ul de\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tab-description\" class=\"active\" data-toggle=\"tab\">";
        // line 504
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 506
        if (($context["attribute_groups"] ?? null)) {
            // line 507
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 508
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 511
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 512
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 513
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 516
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">";
        // line 518
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 519
        if (($context["attribute_groups"] ?? null)) {
            // line 520
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t";
            // line 522
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 523
                echo "\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 526
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 526);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 531
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 531));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 532
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 533
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 533);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 534
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 534);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 537
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 539
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 542
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 543
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t<h2>";
            // line 546
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t";
            // line 547
            if (($context["review_guest"] ?? null)) {
                // line 548
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 550
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 551
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 556
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 558
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 563
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<span class=\"star-rating star-5\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-1\" name=\"rating\" value=\"1\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-2\" name=\"rating\" value=\"2\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-3\" name=\"rating\" value=\"3\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-4\" name=\"rating\" value=\"4\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-5\" name=\"rating\" value=\"5\"/><i></i>
\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 578
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 581
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 585
                echo "\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 587
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 590
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/><br/>

<section  style=\"background:#f1f1f1; padding:20px 0px\">
\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 hide_phone\">
\t\t\t\t<ul class=\"nav nav-tabs tabs-ul des-tab\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-overview\" class=\"active\" data-toggle=\"tab\">Overview</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-care\" data-toggle=\"tab\">Care & Instruction</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-delivery\" data-toggle=\"tab\">Delivery & Installation</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-warranty\" data-toggle=\"tab\">Warranty</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-cancel\" data-toggle=\"tab\">Cancellations & Return</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div style=\"background:#fff;padding:10px 10px;max-height: 200px;overflow-y: scroll;\" class=\"tab-content des-con\">
\t\t\t\t\t<div class=\"tab-pane active p-10\" id=\"tab-overview\">
\t\t\t\t\t\t";
        // line 620
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-care\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. Regularly flick the furniture.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t2. Deterge the timbered surface with a neat, fine usually soft polyester fiber cloth dewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a spill. Please make sure you do not use rugged stuff or rub the spot pronto.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold items on the timbered surface. Please do not keep extreme hot objects like baking dish, saucepan or griddle even on a hot pad.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture is not kept next to windows or in open places, where it is exposed to upright sunlight, moisture & water.</li>
\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your furniture, by keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly chemicals & alcohol, as it will harm the color finish, wood’s texture & durability of the furniture.</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\" >
\t\t\t\t\t\t";
        // line 647
        echo ($context["product_delivery"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-warranty\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>This product comes with ";
        // line 651
        echo ($context["warranty1"] ?? null);
        echo " warranty, limited warranty covers manufacturing defects, termites & wood borer infestations. As per the industry standards, unevenness of up to 5mm is accepted widely, due to differences in floor & surface levels, this is not covered in warranty.This limited warranty does not implement to the following issues:</li>
\t\t\t\t\t\t\t<li>1. Normal depreciation of the product over elongated use.</li>
\t\t\t\t\t\t\t<li>2. Scratches, cuts or damages due to wrong cleaning methods or impacts/accidents.</li>
\t\t\t\t\t\t\t<li>3. Product gets damaged due to wrong installation or assembly by the customer.</li>
\t\t\t\t\t\t\t<li>4. Cracks developed due to dislocation, shifting or reshuffle of the product.</li>
\t\t\t\t\t\t\t<li>5. Fading due to exposure to upright sunlight.</li>
\t\t\t\t\t\t\t<li>6. Wood decaying due to consistent exposure to water or wetness.</li>
\t\t\t\t\t\t\t<li>7. Upholstery fabrics such as seat covers have no warranty.</li>
\t\t\t\t\t\t\t<li>8. Use of wood-unfriendly harsh chemicals or non-norm dry-cleaning procedures.</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-cancel\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<h3>Cancellation Policies:</h3>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. What are the policies if customer have a change of mind after placing an order?<br>In case of change of mind after placing an order, the time frame is 24hours to cancel an order (3% of the total amount paid by customer will be deducted as cancellation charges). But customized products have no such policies meaning it can’t be cancelled.</li>
\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the order?<br>Yes, it is possible to cancel but, it can only be cancelled before the product is shipped from our warehouse. Once the shipment is hand overed to our delivery team, we can’t cancel the order.</li>
\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling the order after 24hours?<br>A cancellation fee of 6% will be applied on the amount paid by you while processing the refund.</li>
\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount paid by customer? Or Can customer use the amount afterwards for placing a new order?<br>
\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit note of full amount paid by you & You can use it to place a new order. Customer can place the new order only in the same financial year, in which previous order was placed or the credit note was issued. Same cancellation charges will be applicable if the customer asks for refund, after the credit note is issued (on customer request) by Woodpeel team.<br>

\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned above in cancellation policies section.<br><br>

\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a carpenter in case of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll replace.<br><br>

\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace. Eligibility for replacement (e.g., imbalance or unevenness of more than 5mm, wooden joints opening, termites & wood borer infestations etc.).<br><br>
\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like appearance or texture (especially for solid wood products) are not defects.<br><br>

\t\t\t\t\t\t\t\t3) What if the received product is different?
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t<div class=\"col-sm-12 hide-desktop\">
\t\t\t<div id=\"main\">
                <div class=\"accordion\" id=\"faq\">
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"faqhead1\">
                            <a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq1\"
                            aria-expanded=\"true\" aria-controls=\"faq1\">Overview</a>
                        </div>

                        <div id=\"faq1\" class=\"collapse show\" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
                            <div class=\"card-body\">
\t\t\t\t\t\t\t";
        // line 702
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t    </div>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-header\" id=\"faqhead2\">
                            <a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq2\"
                            aria-expanded=\"true\" aria-controls=\"faq2\">Care & Instruction</a>
                        </div>

                        <div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\" data-parent=\"#faq\">
                            <div class=\"card-body\">
                    \t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. Regularly flick the furniture.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t2. Deterge the timbered surface with a neat, fine usually soft polyester fiber cloth dewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a spill. Please make sure you do not use rugged stuff or rub the spot pronto.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold items on the timbered surface. Please do not keep extreme hot objects like baking dish, saucepan or griddle even on a hot pad.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture is not kept next to windows or in open places, where it is exposed to upright sunlight, moisture & water.</li>
\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your furniture, by keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly chemicals & alcohol, as it will harm the color finish, wood’s texture & durability of the furniture.</li>
\t\t\t\t\t\t</ul>
\t\t\t\t        </div>
                        </div>
                    </div>
\t\t\t\t\t<div class=\"card\">
                        <div class=\"card-header\" id=\"faqhead3\">
                            <a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq3\"
                            aria-expanded=\"true\" aria-controls=\"faq3\">Delivery & Installation</a>
                        </div>

                        <div id=\"faq3\" class=\"collapse\" aria-labelledby=\"faqhead3\" data-parent=\"#faq\">
                            <div class=\"card-body\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>1. Shipping address can’t be changed, once the product is shipped from our warehouse. Customer have to receive the product on the same address or the shipment will return to our warehouse.</li>
\t\t\t\t\t\t\t<li>2. Your shipment will be held for 2 days at the nearest delivery hub, if you’ve failed to receive the delivery. After this, Woodpeel reserve the right to change the location of the shipment.</li>
\t\t\t\t\t\t\t<li>3. In case of reshipping customer have to borne charges of both side transportation.</li>
\t\t\t\t\t\t\t<li>4. Our team will stay in touch with you for a hassle-free delivery.</li>
\t\t\t\t\t\t\t<li>5. Only first attempt of delivery at your shipping address is free. Customer have to borne extra delivery charges for second attempt, if a customer misses’ delivery.</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>6. In absence of a service lift, our delivery partner shall only make a delivery to the ground floor of your apartment. Customer have to borne extra charges per floor on delivery, to the customer’s floor (on request) in such cases.</li>
\t\t\t\t\t\t\t<li>7. If customer want time-specific or weekend delivery, then extra delivery charges will be applicable.</li>

\t\t\t\t\t\t\t<h3>Installation:</h3>

\t\t\t\t\t\t\t<li>1) Depending on the situation or condition, your product may or may not require installation assistance upon delivery.</li>
\t\t\t\t\t\t\t<li>2) If the delivery condition is:
\t\t\t\t\t
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t        </div>
\t\t\t\t\t<div class=\"card\">
                        <div class=\"card-header\" id=\"faqhead4\">
                            <a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq4\"
                            aria-expanded=\"false\" aria-controls=\"faq4\">Warranty</a>
                        </div>

                        <div id=\"faq4\" class=\"collapse\" aria-labelledby=\"faqhead4\" data-parent=\"#faq4\">
                            <div class=\"card-body\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>This product comes with 1 year warranty, limited warranty covers manufacturing defects, termites & wood borer infestations. As per the industry standards, unevenness of up to 5mm is accepted widely, due to differences in floor & surface levels, this is not covered in warranty.This limited warranty does not implement to the following issues:</li>
\t\t\t\t\t\t\t<li>1. Normal depreciation of the product over elongated use.</li>
\t\t\t\t\t\t\t<li>2. Scratches, cuts or damages due to wrong cleaning methods or impacts/accidents.</li>
\t\t\t\t\t\t\t<li>3. Product gets damaged due to wrong installation or assembly by the customer.</li>
\t\t\t\t\t\t\t<li>4. Cracks developed due to dislocation, shifting or reshuffle of the product.</li>
\t\t\t\t\t\t\t<li>5. Fading due to exposure to upright sunlight.</li>
\t\t\t\t\t\t\t<li>6. Wood decaying due to consistent exposure to water or wetness.</li>
\t\t\t\t\t\t\t<li>7. Upholstery fabrics such as seat covers have no warranty.</li>
\t\t\t\t\t\t\t<li>8. Use of wood-unfriendly harsh chemicals or non-norm dry-cleaning procedures.</li>
\t\t\t\t\t    \t</ul>
\t\t\t\t\t
\t\t\t\t\t\t    </div>
                        </div>
                    </div>
                \t<div class=\"card\">
                        <div class=\"card-header\" id=\"faqhead5\">
                            <a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq5\"
                            aria-expanded=\"false\" aria-controls=\"faq5\">Cancellations & Return</a>
                        </div>

                        <div id=\"faq5\" class=\"collapse\" aria-labelledby=\"faqhead5\" data-parent=\"#faq5\">
                            <div class=\"card-body\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<h3>Cancellation Policies:</h3>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. What are the policies if customer have a change of mind after placing an order?<br>In case of change of mind after placing an order, the time frame is 24hours to cancel an order (3% of the total amount paid by customer will be deducted as cancellation charges). But customized products have no such policies meaning it can’t be cancelled.</li>
\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the order?<br>Yes, it is possible to cancel but, it can only be cancelled before the product is shipped from our warehouse. Once the shipment is hand overed to our delivery team, we can’t cancel the order.</li>
\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling the order after 24hours?<br>A cancellation fee of 6% will be applied on the amount paid by you while processing the refund.</li>
\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount paid by customer? Or Can customer use the amount afterwards for placing a new order?<br>
\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit note of full amount paid by you & You can use it to place a new order. Customer can place the new order only in the same financial year, in which previous order was placed or the credit note was issued. Same cancellation charges will be applicable if the customer asks for refund, after the credit note is issued (on customer request) by Woodpeel team.<br>

\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned above in cancellation policies section.<br><br>

\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a carpenter in case of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll replace.<br><br>

\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace. Eligibility for replacement (e.g., imbalance or unevenness of more than 5mm, wooden joints opening, termites & wood borer infestations etc.).<br><br>
\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like appearance or texture (especially for solid wood products) are not defects.<br><br>

\t\t\t\t\t\t\t\t3) What if the received product is different?
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t    </ul>
\t\t\t\t\t
\t\t\t\t\t\t    </div>
                        </div>
                    </div>
                
\t\t\t\t</div>
                </div>
            </div>
    
        </div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        // line 831
        if (($context["products"] ?? null)) {
            // line 832
            echo "\t<section class=' ptb-30'>
\t\t<div class=\"container\">
\t\t\t<div class=\"row text-center w-100\">
\t\t\t\t<div class=\"col-sm-12 w-100\">
\t\t\t\t\t<h3 style=\"text-align: center; margin-bottom: 20px\">Related Products
\t\t\t\t\t\t<span class=\"hb\" style=\"text-align: -webkit-center;\"></span>
\t\t\t\t\t</h3>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 843
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 844
                echo "\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div class=\"product-thumb product-card transition text-center\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 847
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 847);
                echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 848
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 848);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 848);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 848);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t\t\t<p class=\"product_name mt-10 font-16 mt-10\">";
                // line 852
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 852);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 854
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 854)) {
                    // line 855
                    echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t";
                    // line 856
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 856)) {
                        // line 857
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 857);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 859
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 859);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 860
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 860);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 861
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 861);
                        echo "% OFF</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 863
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 863)) {
                        // line 864
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 865
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 865);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 867
                    echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 869
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 872
            echo "\t\t\t</div>
\t\t\t<br/>
\t\t</section>
\t";
        }
        // line 876
        echo "\t";
        echo ($context["column_right"] ?? null);
        echo "


\t<script type=\"text/javascript\">
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
    \$.ajax({
        url: 'index.php?route=product/product/getRecurringDescription',
        type: 'post',
        data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
        dataType: 'json',
        beforeSend: function() {
            \$('#recurring-description').html('');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['success']) {
                \$('#recurring-description').html(json['success']);
            }
        }
    });
});
// -->
</script> 
<script type = \"text/javascript\">
   
\$('#button-cart').on('click', function() {
\tif(!localStorage.getItem('pincode')){
\t\t\$(\"#locationpopup\").modal('show');
\t}else{
 \$.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            if (json['error']) {

                if (json['error']['option']) {
                    for (i in json['error']['option']) {
                        var element = \$('#input-option' + i.replace('_', '-'));
                        alert(json['error']['option'][i]);
                        if (element.parent().hasClass('input-group')) {
                            element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                        } else {
                            element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                        }
                    }
                }

                if (json['error']['recurring']) {
                    \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                }

                // Highlight any found errors
                \$('.text-danger').parent().addClass('has-error');
            }

            if (json['success']) {

                \$('.cart-counter-header').html(json['total'][0]);

                setTimeout(function() {
                    \$(\"#cart-total\").html(json['total']);
                    let t = json['total'].split('-');
                    \$('.slide-cart-total').html(t[1]);
                }, 100);

                \$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


                \$('.cart_backdrop').fadeIn();
                \$(\".cart\").animate({
                    right: '0px'
                })

            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
\t}
   
});
\$('#button-buy').on('click', function() {
     if(!localStorage.getItem('pincode')){
\t\t\$(\"#locationpopup\").modal('show');
\t}else{
\t    \$(\"#button-cart\").click();
        setTimeout(function() {
            window.location = \"index.php?route=checkout/cart\";
        }, 200)
\t }
    })
    //
  
    </script> 
\t<script type=\"text/javascript\">
    
\$('.date').datetimepicker({
    language: '";
        // line 983
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
});

\$('.datetime').datetimepicker({
    language: '";
        // line 988
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
});

\$('.time').datetimepicker({
    language: '";
        // line 994
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if (\$('#form-upload input[name=\\'file\\']').val() != '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=tool/upload',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$(node).button('loading');
                },
                complete: function() {
                    \$(node).button('reset');
                },
                success: function(json) {
                    \$('.text-danger').remove();

                    if (json['error']) {
                        \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                    }

                    if (json['success']) {
                        alert(json['success']);

                        \$(node).parent().find('input').val(json['code']);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});
//

</script> 
<script type = \"text/javascript\" >
    
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=       ";
        // line 1064
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
    \$.ajax({
        url: 'index.php?route=product/product/write&product_id=       ";
        // line 1068
        echo ($context["product_id"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        data: \$(\"#form-review\").serialize(),
        beforeSend: function() {
            \$('#button-review').button('loading');
        },
        complete: function() {
            \$('#button-review').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
            }

            if (json['success']) {
                \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                \$('input[name=\\'name\\']').val('');
                \$('textarea[name=\\'text\\']').val('');
                \$('input[name=\\'rating\\']:checked').prop('checked', false);
            }
        }
    });
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
        dots: true,
        infinite: true,
        asNavFor: '.slider-nav',
        nextArrow: '<button style=\"width: 25px;top: 220px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
        prevArrow: '<button style=\"width: 25px;top: 220px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

    });
    \$('.slider-nav').slick({
        slidesToShow: slides_to_show,
        vertical: true,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,

        focusOnSelect: true
    });

    \$('.thumbnails').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
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


//

</script> 
<script >
    const zoom = document.querySelector(\".zoom\");
zoom.addEventListener(\"click\", () => {
    \$('.zoom').zoom({
        magnify: '2.5'
    });
}); 
</script> 
<script >
    // Initiate zoom effect:
    imageZoom(\"myimage\", \"myresult\"); 
</script>

<script >
    const imagePopupClose = document.querySelector(\".imagePopupClose\");
const imagePopup = document.querySelector(\".imagePopup\");
const mainImages = document.querySelectorAll(\".mainImage\");


mainImages.forEach(eImage => {
    eImage.addEventListener(\"click\", () => {
        let dataIndex = 0;

        let Index = eImage.closest(\"li\").getAttribute(\"data-index\");
        dataIndex = Number(Index);

        if (imagePopup.classList.contains(\"hidden\")) {
            imagePopup.classList.remove(\"hidden\");
            const imagePopupSlider = new Splide(\"#imagePopup\", {
                perPage: 1,
                type: 'loop',
                start: dataIndex
            });
            imagePopupSlider.mount();
        }
    });
});

imagePopupClose.addEventListener(\"click\", () => {
    imagePopup.classList.add(\"hidden\");
});
\t</script>


\t";
        // line 1286
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
        return array (  2089 => 1286,  1868 => 1068,  1861 => 1064,  1788 => 994,  1779 => 988,  1771 => 983,  1660 => 876,  1654 => 872,  1646 => 869,  1642 => 867,  1637 => 865,  1632 => 864,  1629 => 863,  1624 => 861,  1620 => 860,  1615 => 859,  1609 => 857,  1607 => 856,  1604 => 855,  1602 => 854,  1597 => 852,  1586 => 848,  1582 => 847,  1577 => 844,  1573 => 843,  1560 => 832,  1558 => 831,  1426 => 702,  1372 => 651,  1365 => 647,  1335 => 620,  1303 => 590,  1298 => 587,  1292 => 585,  1285 => 581,  1279 => 578,  1261 => 563,  1253 => 558,  1248 => 556,  1240 => 551,  1236 => 550,  1232 => 548,  1230 => 547,  1226 => 546,  1221 => 543,  1218 => 542,  1213 => 539,  1206 => 537,  1197 => 534,  1193 => 533,  1190 => 532,  1186 => 531,  1178 => 526,  1173 => 523,  1169 => 522,  1165 => 520,  1163 => 519,  1159 => 518,  1155 => 516,  1149 => 513,  1146 => 512,  1143 => 511,  1137 => 508,  1134 => 507,  1132 => 506,  1127 => 504,  1109 => 488,  1104 => 486,  1101 => 485,  1097 => 483,  1095 => 482,  1090 => 479,  1083 => 475,  1080 => 474,  1076 => 472,  1074 => 471,  1071 => 470,  1065 => 467,  1060 => 464,  1056 => 462,  1054 => 461,  1051 => 460,  1045 => 457,  1042 => 456,  1038 => 454,  1036 => 453,  1033 => 452,  1027 => 449,  1024 => 448,  1020 => 446,  1018 => 445,  1012 => 441,  1009 => 440,  1000 => 437,  995 => 436,  991 => 435,  988 => 434,  986 => 433,  982 => 431,  976 => 428,  973 => 427,  969 => 425,  967 => 424,  963 => 422,  957 => 419,  954 => 418,  950 => 416,  947 => 415,  941 => 412,  938 => 411,  934 => 409,  931 => 408,  925 => 405,  922 => 404,  918 => 402,  916 => 401,  897 => 385,  893 => 384,  887 => 381,  872 => 369,  868 => 367,  865 => 366,  859 => 365,  843 => 356,  836 => 354,  829 => 353,  826 => 352,  810 => 343,  803 => 341,  796 => 340,  793 => 339,  777 => 330,  770 => 328,  763 => 327,  760 => 326,  752 => 323,  748 => 322,  741 => 320,  737 => 319,  730 => 318,  727 => 317,  715 => 314,  709 => 313,  702 => 312,  699 => 311,  687 => 308,  681 => 307,  674 => 306,  671 => 305,  666 => 302,  658 => 299,  651 => 297,  649 => 296,  644 => 295,  628 => 293,  626 => 292,  620 => 291,  616 => 289,  612 => 288,  608 => 287,  604 => 286,  597 => 285,  594 => 284,  589 => 281,  579 => 277,  576 => 276,  560 => 274,  558 => 273,  548 => 272,  544 => 270,  540 => 269,  536 => 268,  529 => 267,  526 => 266,  520 => 262,  513 => 260,  506 => 258,  504 => 257,  500 => 256,  491 => 255,  487 => 254,  483 => 253,  477 => 252,  470 => 251,  460 => 247,  447 => 245,  444 => 244,  439 => 243,  436 => 242,  432 => 241,  429 => 240,  427 => 239,  421 => 235,  417 => 233,  411 => 230,  407 => 229,  401 => 226,  395 => 224,  389 => 222,  386 => 221,  384 => 220,  372 => 211,  367 => 209,  361 => 206,  352 => 200,  342 => 192,  336 => 188,  333 => 187,  322 => 182,  318 => 180,  313 => 179,  311 => 178,  308 => 177,  306 => 176,  289 => 161,  285 => 159,  282 => 158,  269 => 155,  266 => 154,  261 => 153,  258 => 152,  248 => 150,  246 => 149,  243 => 148,  241 => 147,  237 => 145,  233 => 143,  230 => 142,  217 => 139,  214 => 138,  209 => 137,  206 => 136,  196 => 133,  193 => 132,  191 => 131,  188 => 130,  186 => 129,  180 => 126,  168 => 116,  156 => 112,  153 => 111,  149 => 110,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
