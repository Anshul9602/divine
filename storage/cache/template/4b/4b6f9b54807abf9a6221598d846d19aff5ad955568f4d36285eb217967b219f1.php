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
class __TwigTemplate_4390a2adcf9f184be5609ca3299133e2bae5acf34da53d2dd247af88c137e94c extends \Twig\Template
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
\t\theight: 95vh;
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

\t}

\t.imagePopupBg {
\t\tbackground: #1e1e1e;
\t\topacity: 0.87;
\t\tposition: absolute;
\t\tinset: 0;
\t\ttransition-timing-function: cubic-bezier(0.22, 0.61, 0.36, 1);
\t\ttransition-property: opacity;
\t}


\t.imagePopupContainer .splide__arrow {
\t\ttop: 40%;
\t\tpadding: 8px;
\t\tbackground-color: rgba(255, 255, 255, 0.6);
\t}

\t.imagePopupContainer .splide__arrow {
\t\tz-index: 99999;
\t\tcursor: pointer;
\t}

\t@media screen and (max-width:750px) {
\t\t.hide_phone {
\t\t\tdisplay: none;
\t\t}

\t\t.btn-round.slick-arrow {
\t\t\tdisplay: none !important;
\t\t}

\t\t.mt-10 {
\t\t\tmargin-top: 10px;
\t\t}
\t}

\t@media screen and (min-width:751px) {
\t\t.hide-desktop {
\t\t\tdisplay: none !important;
\t\t}

\t}
</style>
<script src=\"https://cdn.shopify.com/s/files/1/2692/1794/files/image-zoom.min.js?v=1678864321\"></script>
<link rel=\"stylesheet\" href=\"assets/css/product.css?v1.1\" />


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
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 115
            echo "\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 116);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 116);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br />
<div id=\"product-product mt-10\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">";
        // line 130
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1 hide_phone\">
\t\t\t\t\t";
        // line 133
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 134
            echo "\t\t\t\t\t<ul class=\"slider slider-nav addi\">
\t\t\t\t\t\t";
            // line 135
            if (($context["thumb"] ?? null)) {
                // line 136
                echo "\t\t\t\t\t\t<li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t<img src=\"";
                // line 137
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 141
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 142
                    echo "\t\t\t\t\t\t<li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 143);
                    echo "\" style=\"margin: auto -5px;\" title=\"";
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
                // line 146
                echo "\t\t\t\t\t\t";
            }
            // line 147
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 149
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 151
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 152
            echo "\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t";
            // line 153
            if (($context["thumb"] ?? null)) {
                // line 154
                echo "\t\t\t\t\t\t<li><img class=\"mainImage\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></li>
\t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 157
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 158
                    echo "\t\t\t\t\t\t<li class=\"image-additional \">
\t\t\t\t\t\t\t<img class=\"mainImage\" src=\"";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 159);
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
                // line 162
                echo "\t\t\t\t\t\t";
            }
            // line 163
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 165
        echo "


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
        // line 180
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 181
            echo "\t\t\t\t\t\t\t\t<ul class=\"splide__list \" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t";
            // line 182
            if (($context["images"] ?? null)) {
                // line 183
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"splide__slide min-h-[900px] d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"pImageMain zoom\" style=\"cursor: zoom-in !important;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 186);
                    echo "\" alt=\"\" style=\"height: -webkit-fill-available;\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 192
            echo "

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 196
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4\">

\t\t\t\t\t<h3 class=\"text-capitalize mt-10\">";
        // line 204
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t<span>(Wooden Finish)</span>
\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<span style='background:#ED6940; font-size:11.5px; border-radius:6px; padding:3px 5px; color:#f1f1f1'>
\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>&nbsp;
\t\t\t\t\t\t\t\t";
        // line 210
        echo ($context["rating"] ?? null);
        echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<a style=\"font-size:12px;\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">
\t\t\t\t\t\t\t\t&nbsp;";
        // line 213
        echo ($context["reviews"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t<a style=\"font-size:12px; text-transform:uppercase ;cursor:pointer;\" onclick=\"wishlist.add('";
        // line 215
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
        // line 224
        if (($context["price"] ?? null)) {
            // line 225
            echo "\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 226
                echo "\t\t\t\t\t\t\t<h3 id=\"p_pr\">";
                echo ($context["price"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t";
            } else {
                // line 228
                echo "\t\t\t\t\t\t\t<h6>MRP : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<h5>Offer Price : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:#ED6940;font-size:20px;\">";
                // line 230
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<h6 class=\"mt-3\">Your Saving : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:green;font-size:16px;font-weight: 600;\">₹
\t\t\t\t\t\t\t\t\t";
                // line 233
                echo ($context["save"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t(";
                // line 234
                echo ($context["percent1"] ?? null);
                echo "%)</span>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
        }
        // line 239
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-20 mlr-0\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 243
        if (($context["options"] ?? null)) {
            // line 244
            echo "\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 246
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 246) == "select")) {
                    // line 247
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 247));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 248
                        echo "\t\t\t\t\t\t<div class=\"text-center\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t<span style=\"background:url(";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 249);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 249);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 249);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 249);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 249);
                        echo "\" class=\"tab_options\"></span>
\t\t\t\t\t\t\t<p style=\"margin-top: 0px; font-size:12px\">
\t\t\t\t\t\t\t\t";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 251);
                        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "\t\t\t\t\t\t<div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 255)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<select name=\"option[";
                    // line 256
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 257
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 258));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 259
                        echo "\t\t\t\t\t\t\t\t<option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 259);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 259);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 259);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 260
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 260);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 261
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 261)) {
                            // line 262
                            echo "\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 262);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 262);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 264
                        echo "\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 266
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t";
                }
                // line 270
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 270) == "radio")) {
                    // line 271
                    echo "\t\t\t\t\t\t<div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 271)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label style=\"float:left\" class=\"control-label float-r\">";
                    // line 272
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 272);
                    echo "</label>
\t\t\t\t\t\t\t";
                    // line 273
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 273));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 274
                        echo "\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 276
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 276);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 276);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 276);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 276);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 277
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 277)) {
                            // line 278
                            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 278);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 278);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 278)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 278);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 278);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 280
                        echo "\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 281);
                        echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 285
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t";
                }
                // line 288
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 288) == "checkbox")) {
                    // line 289
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 289)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 290
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 290);
                    echo "</label>
\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 291
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 291);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 292
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 292));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 293
                        echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 295
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 295);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        // line 296
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 297);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 297);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 297)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 297);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 297);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 299
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 299);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 300
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 300)) {
                            // line 301
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 301);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 301);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 306
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 309
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 309) == "text")) {
                    // line 310
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 310)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 311);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 311);
                    echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 312);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 312);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 312);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 312);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 315
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 315) == "textarea")) {
                    // line 316
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 316)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 317
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 317);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 317);
                    echo "</label>
\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 318);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 318);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 318);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 318);
                    echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 321
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 321) == "file")) {
                    // line 322
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 322)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 323);
                    echo "</label>
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 324);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
                    // line 326
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 327
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 327);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 327);
                    echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 330
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 330) == "date")) {
                    // line 331
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 331)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 332
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 332);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 334
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 334);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 334);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 334);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 343
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 343) == "datetime")) {
                    // line 344
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 344)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 345
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 345);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 345);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 347
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 347);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 347);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 347);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 356
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 356) == "time")) {
                    // line 357
                    echo "\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 357)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 358
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 358);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 358);
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 360
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 360);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 360);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 360);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 369
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "\t\t\t\t\t\t";
        }
        // line 371
        echo "\t\t\t\t\t\t<div class=\"row mt-30 mlr-0\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 373
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t<div id=\"counter-btn\" style=\"padding: 0px; padding-left:10px; margin-top:-12px; max-width:200px\" class=\"row\">
\t\t\t\t\t\t\t\t\t<div style=\"cursor: pointer; height: 40px; text-align:center;   border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\" font-size:12px; margin:auto; line-height:40px; text-align:center\" id=\"less_quantity\" class=\"fa fa-minus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" padding-left:0px; height: 40px; padding-right:0px;\" class=\"col-sm-3 col-4\">
\t\t\t\t\t\t\t\t\t\t<input name=\"quantity\" type=\"text\" style=\"box-shadow:none; text-align:center; border-radius:0px; width:100%; height: 40px; background-color: transparent; cursor:default\" id=\"input-quantity\" value=\"1\" class=\"form-control iq\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\" cursor: pointer;  height: 40px; text-align:center; border:thin solid #ccc\" class=\"col-sm-2 col-4 minus-icon\">
\t\t\t\t\t\t\t\t\t\t<li style=\"font-size:12px; height: 50px; line-height:40px; text-align:center\" id=\"add_quantity\" class=\"fa fa-plus\"></li>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 385
        echo ($context["product_id"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:210px' id=\"button-cart\" data-loading-text=\"";
        // line 388
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li> ";
        // line 389
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" style='float:right; background-color:#ED6940' class=\"col-md-5 col-5 btn btn-primary btn-lg \">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li> Buy Now
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row w-100 mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<h4>Product Details</h4>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 405
        if (twig_test_empty(($context["sku_id"] ?? null))) {
            // line 406
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 408
            echo "\t\t\t\t\t\t\t\t\t<b>Sku ID:</b>
\t\t\t\t\t\t\t\t\t";
            // line 409
            echo ($context["sku_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 412
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["finish"] ?? null))) {
            // line 413
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 415
            echo "\t\t\t\t\t\t\t\t\t<b>Finish:</b>
\t\t\t\t\t\t\t\t\t";
            // line 416
            echo ($context["finish"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 419
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["primary_material"] ?? null))) {
            // line 420
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 422
            echo "\t\t\t\t\t\t\t\t\t<b>Primary Material:</b>
\t\t\t\t\t\t\t\t\t";
            // line 423
            echo ($context["primary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 426
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 428
        if (twig_test_empty(($context["secondary_material"] ?? null))) {
            // line 429
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 431
            echo "\t\t\t\t\t\t\t\t\t<b>Secondary Material:</b>
\t\t\t\t\t\t\t\t\t";
            // line 432
            echo ($context["secondary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 435
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 437
        if (($context["attributes"] ?? null)) {
            // line 438
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 439
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 440
                echo "\t\t\t\t\t\t\t\t\t<b>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 440);
                echo ":</b>
\t\t\t\t\t\t\t\t\t";
                // line 441
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 441);
                echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "\t\t\t\t\t\t\t\t\t";
        }
        // line 445
        echo "



\t\t\t\t\t\t\t\t\t";
        // line 449
        if (twig_test_empty(($context["style"] ?? null))) {
            // line 450
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 452
            echo "\t\t\t\t\t\t\t\t\t<b>Style:</b>
\t\t\t\t\t\t\t\t\t";
            // line 453
            echo ($context["style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 456
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 457
        if (twig_test_empty(($context["fabric"] ?? null))) {
            // line 458
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 460
            echo "\t\t\t\t\t\t\t\t\t<b>Fabric:</b>
\t\t\t\t\t\t\t\t\t";
            // line 461
            echo ($context["fabric"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 464
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 465
        if (twig_test_empty(($context["dimension_cm"] ?? null))) {
            // line 466
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 468
            echo "\t\t\t\t\t\t\t\t\t<b>Dimension In CM:
\t\t\t\t\t\t\t\t\t</b>

\t\t\t\t\t\t\t\t\t";
            // line 471
            echo ($context["dimension_cm"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 474
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 475
        if (twig_test_empty(($context["Dimension_Inch"] ?? null))) {
            // line 476
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 478
            echo "\t\t\t\t\t\t\t\t\t<b>Dimension in Inch:</b>
\t\t\t\t\t\t\t\t\t";
            // line 479
            echo ($context["Dimension_Inch"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        // line 483
        echo "


\t\t\t\t\t\t\t\t\t";
        // line 486
        if (twig_test_empty(($context["weight"] ?? null))) {
            // line 487
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 489
            echo "\t\t\t\t\t\t\t\t\t<b>Weight:</b>
\t\t\t\t\t\t\t\t\t";
            // line 490
            echo ($context["weight"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 492
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
        // line 508
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 510
        if (($context["attribute_groups"] ?? null)) {
            // line 511
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 512
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 515
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 516
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 517
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        // line 520
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">
\t\t\t\t\t";
        // line 523
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 525
        if (($context["attribute_groups"] ?? null)) {
            // line 526
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
            // line 528
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 529
                echo "\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t<strong>";
                // line 532
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 532);
                echo "</strong>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                // line 537
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 537));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 538
                    echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                    // line 539
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 539);
                    echo "</td>
\t\t\t\t\t\t\t\t<td>";
                    // line 540
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 540);
                    echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 543
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 545
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 548
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 549
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t<h2>";
            // line 552
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t";
            // line 553
            if (($context["review_guest"] ?? null)) {
                // line 554
                echo "\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 556
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 557
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 562
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 564
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 569
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t<span class=\"star-rating star-5\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-1\" name=\"rating\" value=\"1\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-2\" name=\"rating\" value=\"2\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-3\" name=\"rating\" value=\"3\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-4\" name=\"rating\" value=\"4\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"rating-5\" name=\"rating\" value=\"5\" /><i></i>
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 584
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 587
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 591
                echo "\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t";
            }
            // line 593
            echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 596
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br /><br />

<section style=\"background:#f1f1f1; padding:20px 0px\">
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
        // line 626
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-care\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. Regularly flick the furniture.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t2. Deterge the timbered surface with a neat, fine usually soft polyester fiber cloth
\t\t\t\t\t\t\t\tdewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a spill. Please
\t\t\t\t\t\t\t\tmake sure you do not use rugged stuff or rub the spot pronto.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold items on
\t\t\t\t\t\t\t\tthe timbered surface. Please do not keep extreme hot objects like baking dish, saucepan
\t\t\t\t\t\t\t\tor griddle even on a hot pad.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture is not kept
\t\t\t\t\t\t\t\tnext to windows or in open places, where it is exposed to upright sunlight, moisture &
\t\t\t\t\t\t\t\twater.</li>
\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your furniture,
\t\t\t\t\t\t\t\tby keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly chemicals &
\t\t\t\t\t\t\t\talcohol, as it will harm the color finish, wood’s texture & durability of the furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\">
\t\t\t\t\t\t";
        // line 662
        echo ($context["product_delivery"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-warranty\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>This product comes with ";
        // line 666
        echo ($context["warranty1"] ?? null);
        echo " warranty, limited warranty covers manufacturing
\t\t\t\t\t\t\t\tdefects, termites & wood borer infestations. As per the industry standards, unevenness
\t\t\t\t\t\t\t\tof up to 5mm is accepted widely, due to differences in floor & surface levels, this is
\t\t\t\t\t\t\t\tnot covered in warranty.This limited warranty does not implement to the following
\t\t\t\t\t\t\t\tissues:</li>
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

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-cancel\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<h3>Cancellation Policies:</h3>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. What are the policies if customer have a change of mind after placing an order?<br>In
\t\t\t\t\t\t\t\tcase of change of mind after placing an order, the time frame is 24hours to cancel an
\t\t\t\t\t\t\t\torder (3% of the total amount paid by customer will be deducted as cancellation
\t\t\t\t\t\t\t\tcharges). But customized products have no such policies meaning it can’t be cancelled.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the order?<br>Yes, it
\t\t\t\t\t\t\t\tis possible to cancel but, it can only be cancelled before the product is shipped from
\t\t\t\t\t\t\t\tour warehouse. Once the shipment is hand overed to our delivery team, we can’t cancel
\t\t\t\t\t\t\t\tthe order.</li>
\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling the order after
\t\t\t\t\t\t\t\t24hours?<br>A cancellation fee of 6% will be applied on the amount paid by you while
\t\t\t\t\t\t\t\tprocessing the refund.</li>
\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount paid by
\t\t\t\t\t\t\t\tcustomer? Or Can customer use the amount afterwards for placing a new order?<br>
\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit note of full
\t\t\t\t\t\t\t\tamount paid by you & You can use it to place a new order. Customer can place the new
\t\t\t\t\t\t\t\torder only in the same financial year, in which previous order was placed or the credit
\t\t\t\t\t\t\t\tnote was issued. Same cancellation charges will be applicable if the customer asks for
\t\t\t\t\t\t\t\trefund, after the credit note is issued (on customer request) by Woodpeel team.<br>

\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned above in
\t\t\t\t\t\t\t\tcancellation policies section.<br><br>

\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a carpenter in
\t\t\t\t\t\t\t\tcase of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll replace.<br><br>

\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace. Eligibility for
\t\t\t\t\t\t\t\treplacement (e.g., imbalance or unevenness of more than 5mm, wooden joints opening,
\t\t\t\t\t\t\t\ttermites & wood borer infestations etc.).<br><br>
\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like appearance or
\t\t\t\t\t\t\t\ttexture (especially for solid wood products) are not defects.<br><br>

\t\t\t\t\t\t\t\t3) What if the received product is different?
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 hide-desktop\">
\t\t\t\t<div id=\"main\">
\t\t\t\t\t<div class=\"accordion\" id=\"faq\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead1\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq1\" aria-expanded=\"true\" aria-controls=\"faq1\">Overview</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"faq1\" class=\"collapse show\" aria-labelledby=\"faqhead1\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t";
        // line 739
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead2\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq2\" aria-expanded=\"true\" aria-controls=\"faq2\">Care & Instruction</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"faq2\" class=\"collapse\" aria-labelledby=\"faqhead2\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t1. Regularly flick the furniture.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t2. Deterge the timbered surface with a neat, fine usually soft polyester
\t\t\t\t\t\t\t\t\t\t\tfiber cloth dewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a
\t\t\t\t\t\t\t\t\t\t\tspill. Please make sure you do not use rugged stuff or rub the spot pronto.
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold
\t\t\t\t\t\t\t\t\t\t\titems on the timbered surface. Please do not keep extreme hot objects like
\t\t\t\t\t\t\t\t\t\t\tbaking dish, saucepan or griddle even on a hot pad.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture
\t\t\t\t\t\t\t\t\t\t\tis not kept next to windows or in open places, where it is exposed to
\t\t\t\t\t\t\t\t\t\t\tupright sunlight, moisture & water.</li>
\t\t\t\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your
\t\t\t\t\t\t\t\t\t\t\tfurniture, by keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly
\t\t\t\t\t\t\t\t\t\t\tchemicals & alcohol, as it will harm the color finish, wood’s texture &
\t\t\t\t\t\t\t\t\t\t\tdurability of the furniture.</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq3\" aria-expanded=\"true\" aria-controls=\"faq3\">Delivery &
\t\t\t\t\t\t\t\t\tInstallation</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"faq3\" class=\"collapse\" aria-labelledby=\"faqhead3\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>1. Shipping address can’t be changed, once the product is shipped from our
\t\t\t\t\t\t\t\t\t\t\twarehouse. Customer have to receive the product on the same address or the
\t\t\t\t\t\t\t\t\t\t\tshipment will return to our warehouse.</li>
\t\t\t\t\t\t\t\t\t\t<li>2. Your shipment will be held for 2 days at the nearest delivery hub, if
\t\t\t\t\t\t\t\t\t\t\tyou’ve failed to receive the delivery. After this, Woodpeel reserve the
\t\t\t\t\t\t\t\t\t\t\tright to change the location of the shipment.</li>
\t\t\t\t\t\t\t\t\t\t<li>3. In case of reshipping customer have to borne charges of both side
\t\t\t\t\t\t\t\t\t\t\ttransportation.</li>
\t\t\t\t\t\t\t\t\t\t<li>4. Our team will stay in touch with you for a hassle-free delivery.</li>
\t\t\t\t\t\t\t\t\t\t<li>5. Only first attempt of delivery at your shipping address is free. Customer
\t\t\t\t\t\t\t\t\t\t\thave to borne extra delivery charges for second attempt, if a customer
\t\t\t\t\t\t\t\t\t\t\tmisses’ delivery.</li>
\t\t\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t\t\t\t<li>6. In absence of a service lift, our delivery partner shall only make a
\t\t\t\t\t\t\t\t\t\t\tdelivery to the ground floor of your apartment. Customer have to borne extra
\t\t\t\t\t\t\t\t\t\t\tcharges per floor on delivery, to the customer’s floor (on request) in such
\t\t\t\t\t\t\t\t\t\t\tcases.</li>
\t\t\t\t\t\t\t\t\t\t<li>7. If customer want time-specific or weekend delivery, then extra delivery
\t\t\t\t\t\t\t\t\t\t\tcharges will be applicable.</li>

\t\t\t\t\t\t\t\t\t\t<h3>Installation:</h3>

\t\t\t\t\t\t\t\t\t\t<li>1) Depending on the situation or condition, your product may or may not
\t\t\t\t\t\t\t\t\t\t\trequire installation assistance upon delivery.</li>
\t\t\t\t\t\t\t\t\t\t<li>2) If the delivery condition is:

\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq4\" aria-expanded=\"false\" aria-controls=\"faq4\">Warranty</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"faq4\" class=\"collapse\" aria-labelledby=\"faqhead4\" data-parent=\"#faq4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>This product comes with 1 year warranty, limited warranty covers
\t\t\t\t\t\t\t\t\t\t\t\tmanufacturing defects, termites & wood borer infestations. As per the
\t\t\t\t\t\t\t\t\t\t\t\tindustry standards, unevenness of up to 5mm is accepted widely, due to
\t\t\t\t\t\t\t\t\t\t\t\tdifferences in floor & surface levels, this is not covered in
\t\t\t\t\t\t\t\t\t\t\t\twarranty.This limited warranty does not implement to the following
\t\t\t\t\t\t\t\t\t\t\t\tissues:</li>
\t\t\t\t\t\t\t\t\t\t\t<li>1. Normal depreciation of the product over elongated use.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>2. Scratches, cuts or damages due to wrong cleaning methods or
\t\t\t\t\t\t\t\t\t\t\t\timpacts/accidents.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>3. Product gets damaged due to wrong installation or assembly by the
\t\t\t\t\t\t\t\t\t\t\t\tcustomer.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>4. Cracks developed due to dislocation, shifting or reshuffle of the
\t\t\t\t\t\t\t\t\t\t\t\tproduct.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>5. Fading due to exposure to upright sunlight.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>6. Wood decaying due to consistent exposure to water or wetness.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>7. Upholstery fabrics such as seat covers have no warranty.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>8. Use of wood-unfriendly harsh chemicals or non-norm dry-cleaning
\t\t\t\t\t\t\t\t\t\t\t\tprocedures.</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead5\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link\" data-toggle=\"collapse\" data-target=\"#faq5\" aria-expanded=\"false\" aria-controls=\"faq5\">Cancellations & Return</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div id=\"faq5\" class=\"collapse\" aria-labelledby=\"faqhead5\" data-parent=\"#faq5\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<h3>Cancellation Policies:</h3>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t1. What are the policies if customer have a change of mind after placing
\t\t\t\t\t\t\t\t\t\t\t\tan order?<br>In case of change of mind after placing an order, the time
\t\t\t\t\t\t\t\t\t\t\t\tframe is 24hours to cancel an order (3% of the total amount paid by
\t\t\t\t\t\t\t\t\t\t\t\tcustomer will be deducted as cancellation charges). But customized
\t\t\t\t\t\t\t\t\t\t\t\tproducts have no such policies meaning it can’t be cancelled.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the
\t\t\t\t\t\t\t\t\t\t\t\torder?<br>Yes, it is possible to cancel but, it can only be cancelled
\t\t\t\t\t\t\t\t\t\t\t\tbefore the product is shipped from our warehouse. Once the shipment is
\t\t\t\t\t\t\t\t\t\t\t\thand overed to our delivery team, we can’t cancel the order.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling
\t\t\t\t\t\t\t\t\t\t\t\tthe order after 24hours?<br>A cancellation fee of 6% will be applied on
\t\t\t\t\t\t\t\t\t\t\t\tthe amount paid by you while processing the refund.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount
\t\t\t\t\t\t\t\t\t\t\t\tpaid by customer? Or Can customer use the amount afterwards for placing
\t\t\t\t\t\t\t\t\t\t\t\ta new order?<br>
\t\t\t\t\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit
\t\t\t\t\t\t\t\t\t\t\t\tnote of full amount paid by you & You can use it to place a new order.
\t\t\t\t\t\t\t\t\t\t\t\tCustomer can place the new order only in the same financial year, in
\t\t\t\t\t\t\t\t\t\t\t\twhich previous order was placed or the credit note was issued. Same
\t\t\t\t\t\t\t\t\t\t\t\tcancellation charges will be applicable if the customer asks for refund,
\t\t\t\t\t\t\t\t\t\t\t\tafter the credit note is issued (on customer request) by Woodpeel
\t\t\t\t\t\t\t\t\t\t\t\tteam.<br>

\t\t\t\t\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned
\t\t\t\t\t\t\t\t\t\t\t\tabove in cancellation policies section.<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a
\t\t\t\t\t\t\t\t\t\t\t\tcarpenter in case of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll
\t\t\t\t\t\t\t\t\t\t\t\treplace.<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace.
\t\t\t\t\t\t\t\t\t\t\t\tEligibility for replacement (e.g., imbalance or unevenness of more than
\t\t\t\t\t\t\t\t\t\t\t\t5mm, wooden joints opening, termites & wood borer infestations
\t\t\t\t\t\t\t\t\t\t\t\tetc.).<br><br>
\t\t\t\t\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like
\t\t\t\t\t\t\t\t\t\t\t\tappearance or texture (especially for solid wood products) are not
\t\t\t\t\t\t\t\t\t\t\t\tdefects.<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t3) What if the received product is different?
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
</section>
";
        // line 921
        if (($context["products"] ?? null)) {
            // line 922
            echo "<section class=' ptb-30'>
\t<div class=\"container\">
\t\t<div class=\"row text-center w-100\">
\t\t\t<div class=\"col-sm-12 w-100\">
\t\t\t\t<h3 style=\"text-align: center; margin-bottom: 20px\">Related Products
\t\t\t\t\t<span class=\"hb\" style=\"text-align: -webkit-center;\"></span>
\t\t\t\t</h3>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
            // line 933
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 934
                echo "\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t<div class=\" product-card transition text-center\">
\t\t\t\t\t<div class=\"image\" style=\"height: 50%;\">
\t\t\t\t\t\t<a href=\"";
                // line 937
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 937);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 938
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 938);
                echo "\" style=\"width: 100%;height: 100%;\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 938);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 938);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t<p class=\"product_name mt-10 font-16 mt-10\">";
                // line 942
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 942);
                echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 944
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 944)) {
                    // line 945
                    echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                    // line 946
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 946)) {
                        // line 947
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 947);
                        echo "
\t\t\t\t\t\t";
                    } else {
                        // line 949
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 949);
                        echo "</span>
\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 950
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 950);
                        echo "</span><br>
\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\">";
                        // line 951
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 951);
                        echo "%
\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t";
                    }
                    // line 954
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 954)) {
                        // line 955
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t";
                        // line 956
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 956);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 958
                    echo "\t\t\t\t\t</p>
\t\t\t\t\t";
                }
                // line 960
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 963
            echo "\t\t</div>
\t\t<br />
</section>
";
        }
        // line 967
        echo ($context["column_right"] ?? null);
        echo "


<script type=\"text/javascript\">
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t// -->
</script>
<script type=\"text/javascript\">
\t\$('#button-cart').on('click', function() {
\t\tif (!localStorage.getItem('pincode')) {
\t\t\t\$(\"#locationpopup\").modal('show');
\t\t} else {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\t\ttype: 'post',
\t\t\t\tdata: \$(
\t\t\t\t\t'#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'
\t\t\t\t),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-cart').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-cart').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {

\t\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\t\t\talert(json['error']['option'][i]);
\t\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error'][
\t\t\t\t\t\t\t\t\t\t'option'
\t\t\t\t\t\t\t\t\t][i] + '</div>');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][
\t\t\t\t\t\t\t\t\t\ti
\t\t\t\t\t\t\t\t\t] + '</div>');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json[
\t\t\t\t\t\t\t\t'error']['recurring'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {

\t\t\t\t\t\t\$('.cart-counter-header').html(json['total'][0]);

\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\$(\"#cart-total\").html(json['total']);
\t\t\t\t\t\t\tlet t = json['total'].split('-');
\t\t\t\t\t\t\t\$('.slide-cart-total').html(t[1]);
\t\t\t\t\t\t}, 100);

\t\t\t\t\t\t\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\t\t\t\t\t\t\$('.cart_backdrop').fadeIn();
\t\t\t\t\t\t\$(\".cart\").animate({
\t\t\t\t\t\t\tright: '0px'
\t\t\t\t\t\t})

\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}

\t});
\t\$('#button-buy').on('click', function() {
\t\tif (!localStorage.getItem('pincode')) {
\t\t\t\$(\"#locationpopup\").modal('show');
\t\t} else {
\t\t\t\$(\"#button-cart\").click();
\t\t\tsetTimeout(function() {
\t\t\t\twindow.location = \"index.php?route=checkout/cart\";
\t\t\t}, 200)
\t\t}
\t})
\t//
</script>
<script type=\"text/javascript\">
\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1078
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
\t});

\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 1083
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
\t});

\t\$('.time').datetimepicker({
\t\tlanguage: '";
        // line 1089
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
\t});

\t\$('button[id^=\\'button-upload\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend(
\t\t\t'<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>'
\t\t);

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' +
\t\t\t\t\t\t\t\tjson['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr
\t\t\t\t\t\t\t.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
\t//
</script>
<script type=\"text/javascript\">
\t\$('#review').delegate('.pagination a', 'click', function(e) {
\t\te.preventDefault();

\t\t\$('#review').fadeOut('slow');

\t\t\$('#review').load(this.href);

\t\t\$('#review').fadeIn('slow');
\t});

\t\$('#review').load('index.php?route=product/product/review&product_id=       ";
        // line 1161
        echo ($context["product_id"] ?? null);
        echo "');

\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=       ";
        // line 1165
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$(\"#form-review\").serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review').after(
\t\t\t\t\t\t'<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' +
\t\t\t\t\t\tjson['error'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#review').after(
\t\t\t\t\t\t'<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' +
\t\t\t\t\t\tjson['success'] + '</div>');

\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function() {
\t\tvar old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));


\t\t\$('.sizes').change(function() {
\t\t\tvar p = \$(this).attr('data-price');
\t\t\tvar sig = \$(this).attr('data-sign');
\t\t\tvar q = p.replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, '');
\t\t\tvar x = Number(q);

\t\t\tif (sig == \"+\") {
\t\t\t\tvar new_p = old_price + x;
\t\t\t} else {
\t\t\t\tvar new_p = old_price - x;
\t\t\t}


\t\t\t// \$(\"#p_pr\").text('\$' + new_p);

\t\t});

\t\t\$(\"#add_quantity\").click(function() {

\t\t\tvar b = Number(\$(\"#input-quantity\").val()) + 1;

\t\t\t\$(\".iq\").val(b);
\t\t})
\t\t\$(\"#less_quantity\").click(function() {
\t\t\tvar b = Number(\$(\"#input-quantity\").val()) - 1;
\t\t\tif (b < 0) {
\t\t\t\tb = 0;
\t\t\t}
\t\t\t\$(\".iq\").val(b);
\t\t})

\t\tvar slides_to_show = 3;
\t\t\$('.slider-for').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: false,
\t\t\tdots: true,
\t\t\tinfinite: true,
\t\t\tasNavFor: '.slider-nav',
\t\t\tnextArrow: '<button style=\"width: 25px;top: 220px;position: absolute;right: -25px;z-index: 99;\" class=\"btn-round left\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\" transform=\"translate(100, 100) rotate(180) \"></path></svg></button>',
\t\t\tprevArrow: '<button style=\"width: 25px;top: 220px;position: absolute;left: -25px;z-index: 99;\" class=\"btn-round right\"><svg viewBox=\"0 0 100 100\"><path d=\"M 20,50 L 60,90 L 60,85 L 25,50  L 60,15 L 60,10 Z\" class=\"arrow\"></path></svg></button>'

\t\t});
\t\t\$('.slider-nav').slick({
\t\t\tslidesToShow: slides_to_show,
\t\t\tvertical: true,
\t\t\tslidesToScroll: 1,
\t\t\tasNavFor: '.slider-for',
\t\t\tdots: false,
\t\t\tarrows: false,

\t\t\tfocusOnSelect: true
\t\t});

\t\t\$('.thumbnails').magnificPopup({
\t\t\ttype: 'image',
\t\t\tdelegate: 'a',
\t\t\tgallery: {
\t\t\t\tenabled: true
\t\t\t}
\t\t});
\t});


\t\$(document).ready(function(e) {
\t\tvar link = getUrlParameter('a');


\t\tif (link) {
\t\t\t\$(\".tab_options\").each(function() {
\t\t\t\tif (\$.trim(\$(this).siblings().html()).toLocaleLowerCase() == link.toLocaleLowerCase()) {
\t\t\t\t\t\$(this).css('border', '2px solid #413B98');
\t\t\t\t\t\$(this).addClass('current');
\t\t\t\t\tvar val = \$(this).attr(\"data-val\");

\t\t\t\t\t\$(\"select option\").each(function(index, element) {
\t\t\t\t\t\tif (\$(this).val() == val) {
\t\t\t\t\t\t\t\$(this).prop(\"selected\", true);
\t\t\t\t\t\t}

\t\t\t\t\t})

\t\t\t\t}
\t\t\t})
\t\t} else {
\t\t\tif (\$(\".tab_options\").length > 0) {

\t\t\t\tvar val;

\t\t\t\t\$(\"select option\").each(function(index, element) {
\t\t\t\t\tif (\$(this).attr(\"data-link\") == \"\") {
\t\t\t\t\t\t\$(this).prop(\"selected\", true);
\t\t\t\t\t\tval = \$(this).val();
\t\t\t\t\t}
\t\t\t\t})

\t\t\t\t\$(\".tab_options\").each(function() {
\t\t\t\t\tif (\$(this).attr(\"data-val\") == val) {
\t\t\t\t\t\t\$(this).css('border', '2px solid #003B30');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t}
\t\t\$(\".tab_options\").click(function() {
\t\t\tif (!\$(this).hasClass('current')) {
\t\t\t\tvar val = \$(this).attr(\"data-val\");

\t\t\t\t\$(\"select option\").each(function(index, element) {
\t\t\t\t\tif (\$(this).val() == val) {
\t\t\t\t\t\tif (\$(this).attr(\"data-link\")) {
\t\t\t\t\t\t\t\$(this).prop(\"selected\", true);
\t\t\t\t\t\t\twindow.location = \$(this).attr(\"data-link\") + '?a=' + \$.trim(\$(this)
\t\t\t\t\t\t\t\t.html());

\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t})

\t});

\tvar getUrlParameter = function getUrlParameter(sParam) {
\t\tvar sPageURL = window.location.search.substring(1),
\t\t\tsURLVariables = sPageURL.split('&'),
\t\t\tsParameterName,
\t\t\ti;

\t\tfor (i = 0; i < sURLVariables.length; i++) {
\t\t\tsParameterName = sURLVariables[i].split('=');

\t\t\tif (sParameterName[0] === sParam) {
\t\t\t\treturn sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
\t\t\t}
\t\t}
\t};


\t//
</script>
<script>
\tconst zoom = document.querySelector(\".zoom\");
\tzoom.addEventListener(\"click\", () => {
\t\t\$('.zoom').zoom({
\t\t\tmagnify: '2.5'
\t\t});
\t});
</script>
<script>
\t// Initiate zoom effect:
\timageZoom(\"myimage\", \"myresult\");
</script>

<script>
\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
\tconst imagePopup = document.querySelector(\".imagePopup\");
\tconst mainImages = document.querySelectorAll(\".mainImage\");


\tmainImages.forEach(eImage => {
\t\teImage.addEventListener(\"click\", () => {
\t\t\tlet dataIndex = 0;

\t\t\tlet Index = eImage.closest(\"li\").getAttribute(\"data-index\");
\t\t\tdataIndex = Number(Index);

\t\t\tif (imagePopup.classList.contains(\"hidden\")) {
\t\t\t\timagePopup.classList.remove(\"hidden\");
\t\t\t\tconst imagePopupSlider = new Splide(\"#imagePopup\", {
\t\t\t\t\tperPage: 1,
\t\t\t\t\ttype: 'loop',
\t\t\t\t\tstart: dataIndex
\t\t\t\t});
\t\t\t\timagePopupSlider.mount();
\t\t\t}
\t\t});
\t});

\timagePopupClose.addEventListener(\"click\", () => {
\t\timagePopup.classList.add(\"hidden\");
\t});
</script>


";
        // line 1387
        echo ($context["footer"] ?? null);
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
        return array (  2189 => 1387,  1964 => 1165,  1957 => 1161,  1882 => 1089,  1873 => 1083,  1865 => 1078,  1751 => 967,  1745 => 963,  1737 => 960,  1733 => 958,  1728 => 956,  1723 => 955,  1720 => 954,  1714 => 951,  1710 => 950,  1705 => 949,  1699 => 947,  1697 => 946,  1694 => 945,  1692 => 944,  1687 => 942,  1676 => 938,  1672 => 937,  1667 => 934,  1663 => 933,  1650 => 922,  1648 => 921,  1463 => 739,  1387 => 666,  1380 => 662,  1341 => 626,  1309 => 596,  1304 => 593,  1298 => 591,  1291 => 587,  1285 => 584,  1267 => 569,  1259 => 564,  1254 => 562,  1246 => 557,  1242 => 556,  1238 => 554,  1236 => 553,  1232 => 552,  1227 => 549,  1224 => 548,  1219 => 545,  1212 => 543,  1203 => 540,  1199 => 539,  1196 => 538,  1192 => 537,  1184 => 532,  1179 => 529,  1175 => 528,  1171 => 526,  1169 => 525,  1164 => 523,  1159 => 520,  1153 => 517,  1150 => 516,  1147 => 515,  1141 => 512,  1138 => 511,  1136 => 510,  1131 => 508,  1113 => 492,  1108 => 490,  1105 => 489,  1101 => 487,  1099 => 486,  1094 => 483,  1087 => 479,  1084 => 478,  1080 => 476,  1078 => 475,  1075 => 474,  1069 => 471,  1064 => 468,  1060 => 466,  1058 => 465,  1055 => 464,  1049 => 461,  1046 => 460,  1042 => 458,  1040 => 457,  1037 => 456,  1031 => 453,  1028 => 452,  1024 => 450,  1022 => 449,  1016 => 445,  1013 => 444,  1004 => 441,  999 => 440,  995 => 439,  992 => 438,  990 => 437,  986 => 435,  980 => 432,  977 => 431,  973 => 429,  971 => 428,  967 => 426,  961 => 423,  958 => 422,  954 => 420,  951 => 419,  945 => 416,  942 => 415,  938 => 413,  935 => 412,  929 => 409,  926 => 408,  922 => 406,  920 => 405,  901 => 389,  897 => 388,  891 => 385,  876 => 373,  872 => 371,  869 => 370,  863 => 369,  847 => 360,  840 => 358,  833 => 357,  830 => 356,  814 => 347,  807 => 345,  800 => 344,  797 => 343,  781 => 334,  774 => 332,  767 => 331,  764 => 330,  756 => 327,  752 => 326,  745 => 324,  741 => 323,  734 => 322,  731 => 321,  719 => 318,  713 => 317,  706 => 316,  703 => 315,  691 => 312,  685 => 311,  678 => 310,  675 => 309,  670 => 306,  662 => 303,  655 => 301,  653 => 300,  648 => 299,  632 => 297,  630 => 296,  624 => 295,  620 => 293,  616 => 292,  612 => 291,  608 => 290,  601 => 289,  598 => 288,  593 => 285,  583 => 281,  580 => 280,  564 => 278,  562 => 277,  552 => 276,  548 => 274,  544 => 273,  540 => 272,  533 => 271,  530 => 270,  524 => 266,  517 => 264,  510 => 262,  508 => 261,  504 => 260,  495 => 259,  491 => 258,  487 => 257,  481 => 256,  474 => 255,  464 => 251,  451 => 249,  448 => 248,  443 => 247,  440 => 246,  436 => 245,  433 => 244,  431 => 243,  425 => 239,  421 => 237,  415 => 234,  411 => 233,  405 => 230,  399 => 228,  393 => 226,  390 => 225,  388 => 224,  376 => 215,  371 => 213,  365 => 210,  356 => 204,  346 => 196,  340 => 192,  337 => 191,  326 => 186,  322 => 184,  317 => 183,  315 => 182,  312 => 181,  310 => 180,  293 => 165,  289 => 163,  286 => 162,  273 => 159,  270 => 158,  265 => 157,  262 => 156,  252 => 154,  250 => 153,  247 => 152,  245 => 151,  241 => 149,  237 => 147,  234 => 146,  221 => 143,  218 => 142,  213 => 141,  210 => 140,  200 => 137,  197 => 136,  195 => 135,  192 => 134,  190 => 133,  184 => 130,  172 => 120,  160 => 116,  157 => 115,  153 => 114,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
