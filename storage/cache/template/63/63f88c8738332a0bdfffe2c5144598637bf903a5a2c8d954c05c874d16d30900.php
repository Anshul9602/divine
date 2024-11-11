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
class __TwigTemplate_5e402a93f123c4b5dfabca9f4c3af4cfdf2acb4ae963ecdfacf02dc6f3bf4c24 extends \Twig\Template
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
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\t\t\"></script>
<link href=\"
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\t\t\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"assets/css/plugins/theme.css\"/>

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

\t@media screen and(max-width:750px) {
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

\t@media screen and(min-width:751px) {
\t\t.hide-desktop {
\t\t\tdisplay: none !important;
\t\t}

\t}
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
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 116
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 117
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 117);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 117);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
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
        // line 131
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"padding:0px; max-width:200px; text-align:left\" class=\"col-sm-1 hide_phone\">
\t\t\t\t\t";
        // line 134
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 135
            echo "\t\t\t\t\t\t<ul class=\"slider slider-nav addi\">
\t\t\t\t\t\t\t";
            // line 136
            if (($context["thumb"] ?? null)) {
                // line 137
                echo "\t\t\t\t\t\t\t\t<li class='check_me' style=\"outline: none; width: 100%; display: inline-block;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 138
                echo ($context["thumb"] ?? null);
                echo "\" style=\"margin: auto -5px;\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 142
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t<li style=\" outline: none; width: 100%; display: inline-block;\" class=\"image-additional\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 144);
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
                // line 147
                echo "\t\t\t\t\t\t\t";
            }
            // line 148
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t";
        // line 152
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 153
            echo "\t\t\t\t\t\t<ul class=\"slider slider-for\">
\t\t\t\t\t\t\t";
            // line 154
            if (($context["thumb"] ?? null)) {
                // line 155
                echo "\t\t\t\t\t\t\t\t<li><img class=\"mainImage\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"/></li>
\t\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 158
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional \">
\t\t\t\t\t\t\t\t\t\t<img class=\"mainImage\" src=\"";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 160);
                    echo "\" title=\"";
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
                // line 163
                echo "\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 166
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"py-2 imagePopup hidden\">
\t\t\t\t\t<div class=\"imagePopupBg \"></div>
\t\t\t\t\t<div class=\"imagePopupClose absolute right-0 py-1 flex justify-end z-[9001] cursor-pointer\" style=\"top:50px;height:100px;width: 100px;z-index: 99999;  cursor: pointer;    text-align: end;right:30px;  position: absolute;\">
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
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"splide__list \" style=\"position: relative;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 182
            if (($context["images"] ?? null)) {
                // line 183
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"splide__slide min-h-[900px] d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pImageMain zoom d-flex\" style=\"    align-items: center;cursor: zoom-in !important;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 186);
                    echo "\" alt=\"\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 192
            echo "

\t\t\t\t\t\t\t\t\t</ul>
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
            echo "\t\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t<h3 id=\"p_pr\">";
                echo ($context["price"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t\t";
            } else {
                // line 228
                echo "\t\t\t\t\t\t\t\t\t<h6>MRP : &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<span style=\"text-decoration: line-through;\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<h5>Offer Price : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:#ED6940;font-size:20px;\">";
                // line 230
                echo ($context["special"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h6 class=\"mt-3\">Your Saving : &nbsp; &nbsp; &nbsp;<span style=\"COLOR:green;font-size:16px;font-weight: 600;\">₹
\t\t\t\t\t\t\t\t\t\t\t";
                // line 233
                echo ($context["save"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t(";
                // line 234
                echo ($context["percent1"] ?? null);
                echo "%)</span>
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t";
        }
        // line 239
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row mt-20 mlr-0\"></div>
\t\t\t\t\t\t";
        // line 241
        if (($context["options"] ?? null)) {
            // line 242
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 244
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 244) == "select")) {
                    // line 245
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 245));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 246
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\" style=\"display: inline-block;\">
\t\t\t\t\t\t\t\t\t\t\t<span style=\"background:url(";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 247);
                        echo ")\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 247);
                        echo "\" data-money=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 247);
                        echo "\" data-image=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_image", [], "any", false, false, false, 247);
                        echo "\" data-val=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 247);
                        echo "\" class=\"tab_options\"></span>
\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin-top: 0px; font-size:12px\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 249);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t<div style=\"display: none;\" class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 253)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 254
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 255
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 256
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 256));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 257
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 257);
                        echo "\" data-link=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "link", [], "any", false, false, false, 257);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 257);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 258
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 258);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 259
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 259)) {
                            // line 260
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 260);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 260);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 262
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 268
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 268) == "radio")) {
                    // line 269
                    echo "\t\t\t\t\t\t\t\t\t<div class=\" form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 269)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label style=\"float:left\" class=\"control-label float-r\">";
                    // line 270
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 270);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    // line 271
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 271));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 272
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio-custom\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class='sizes' name=\"option[";
                        // line 274
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 274);
                        echo "\" data-sign=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 274);
                        echo "\" data-price=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 274);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 275
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 275)) {
                            // line 276
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 276);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 276);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 276)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 276);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 276);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 278
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 279
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 279);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 286) == "checkbox")) {
                    // line 287
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 287)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 288);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 290
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 290));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 291
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 293
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 293);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 293);
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 294
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 294)) {
                            // line 295
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 295);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 295);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 295)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 295);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 295);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 297
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 297);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 298
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 298)) {
                            // line 299
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 299);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 299);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 304
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 307
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 307) == "text")) {
                    // line 308
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 308)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 309);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 309);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 310);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 310);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 310);
                    echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 313
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 313) == "textarea")) {
                    // line 314
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 314)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 315
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 315);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 315);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 316
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 316);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 316);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 319
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 319) == "file")) {
                    // line 320
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 320)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 321);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 322);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 324
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 325);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 325);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 328
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 328) == "date")) {
                    // line 329
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 329)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 330);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 330);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 332
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 332);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
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
                // line 341
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 341) == "datetime")) {
                    // line 342
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 342)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 343
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 343);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 343);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 345
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 345);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 345);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 345);
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
                // line 354
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 354) == "time")) {
                    // line 355
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 355)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 356);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 358
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 358);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 358);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 358);
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
                // line 367
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            echo "\t\t\t\t\t\t";
        }
        // line 369
        echo "\t\t\t\t\t\t<div class=\"row mt-30 mlr-0\">
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"width:100%;\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"";
        // line 371
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
        // line 383
        echo ($context["product_id"] ?? null);
        echo "\"/>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div class=\"row\" style=\"justify-content: space-around;\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" style='float:left; max-width:210px' id=\"button-cart\" data-loading-text=\"";
        // line 386
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn col-md-6 col-6 btn-primary btn-lg btn-block\">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-shopping-cart\"></li>
\t\t\t\t\t\t\t\t\t\t";
        // line 388
        echo ($context["button_cart"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-buy\" style='float:right; background-color:#ED6940' class=\"col-md-5 col-5 btn btn-primary btn-lg \">
\t\t\t\t\t\t\t\t\t\t<li class=\"fa fa-bolt\"></li>
\t\t\t\t\t\t\t\t\t\tBuy Now
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row w-100 mt-3\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<h4>Product Details</h4>
\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 405
        if (twig_test_empty(($context["sku_id"] ?? null))) {
            // line 406
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 408
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Sku ID:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 409
            echo ($context["sku_id"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 412
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["finish"] ?? null))) {
            // line 413
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 415
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Finish:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 416
            echo ($context["finish"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 419
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_test_empty(($context["primary_material"] ?? null))) {
            // line 420
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 422
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Primary Material:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 423
            echo ($context["primary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 426
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 428
        if (twig_test_empty(($context["secondary_material"] ?? null))) {
            // line 429
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 431
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Secondary Material:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 432
            echo ($context["secondary_material"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 435
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 437
        if (($context["attributes"] ?? null)) {
            // line 438
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 439
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 440
                echo "\t\t\t\t\t\t\t\t\t\t\t<b>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 440);
                echo ":</b>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 441
                echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 441);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t";
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
        // line 447
        if (twig_test_empty(($context["style"] ?? null))) {
            // line 448
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 450
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Style:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 451
            echo ($context["style"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 454
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 455
        if (twig_test_empty(($context["fabric"] ?? null))) {
            // line 456
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 458
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Fabric:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 459
            echo ($context["fabric"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 462
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 463
        if (twig_test_empty(($context["dimension_cm"] ?? null))) {
            // line 464
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 466
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Dimension In CM:
\t\t\t\t\t\t\t\t\t\t\t</b>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 469
            echo ($context["dimension_cm"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 472
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 473
        if (twig_test_empty(($context["Dimension_Inch"] ?? null))) {
            // line 474
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 476
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Dimension in Inch:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 477
            echo ($context["Dimension_Inch"] ?? null);
            echo "

\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t";
        }
        // line 481
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 483
        if (twig_test_empty(($context["weight"] ?? null))) {
            // line 484
            echo "
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 486
            echo "\t\t\t\t\t\t\t\t\t\t\t<b>Weight:</b>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 487
            echo ($context["weight"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
        }
        // line 489
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
        // line 505
        echo ($context["tab_description"] ?? null);
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 507
        if (($context["attribute_groups"] ?? null)) {
            // line 508
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 509
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 512
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 513
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-review\" data-toggle=\"tab\">";
            // line 514
            echo ($context["tab_review"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 517
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" style=\"padding:0px 20px; font-size:14px;\" id=\"tab-description\">
\t\t\t\t\t";
        // line 520
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 522
        if (($context["attribute_groups"] ?? null)) {
            // line 523
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t";
            // line 525
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 526
                echo "\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 529
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 529);
                echo "</strong>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
                // line 534
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 534));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 535
                    echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 536
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 536);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 537
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 537);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 540
                echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 542
            echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 545
        echo "\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 546
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t<h2>";
            // line 549
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t";
            // line 550
            if (($context["review_guest"] ?? null)) {
                // line 551
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 553
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 554
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 559
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 561
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 566
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
                // line 581
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 584
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 588
                echo "\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 590
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 593
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/><br/>

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
        // line 623
        echo ($context["description"] ?? null);
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-care\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t1. Regularly flick the furniture.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t2. Deterge the timbered surface with a neat, fine usually soft polyester fiber cloth
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a spill. Please
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmake sure you do not use rugged stuff or rub the spot pronto.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold items on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe timbered surface. Please do not keep extreme hot objects like baking dish, saucepan
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tor griddle even on a hot pad.</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture is not kept
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnext to windows or in open places, where it is exposed to upright sunlight, moisture &
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twater.</li>
\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your furniture,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tby keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly chemicals &
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talcohol, as it will harm the color finish, wood’s texture & durability of the furniture.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery\">
\t\t\t\t\t\t";
        // line 659
        echo ($context["product_delivery"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-warranty\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>This product comes with
\t\t\t\t\t\t\t\t";
        // line 664
        echo ($context["warranty1"] ?? null);
        echo "
\t\t\t\t\t\t\t\twarranty, limited warranty covers manufacturing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdefects, termites & wood borer infestations. As per the industry standards, unevenness
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tof up to 5mm is accepted widely, due to differences in floor & surface levels, this is
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnot covered in warranty.This limited warranty does not implement to the following
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tissues:</li>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcase of change of mind after placing an order, the time frame is 24hours to cancel an
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\torder (3% of the total amount paid by customer will be deducted as cancellation
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcharges). But customized products have no such policies meaning it can’t be cancelled.
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the order?<br>Yes, it
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis possible to cancel but, it can only be cancelled before the product is shipped from
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tour warehouse. Once the shipment is hand overed to our delivery team, we can’t cancel
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe order.</li>
\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling the order after
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t24hours?<br>A cancellation fee of 6% will be applied on the amount paid by you while
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprocessing the refund.</li>
\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount paid by
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcustomer? Or Can customer use the amount afterwards for placing a new order?<br>
\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit note of full
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tamount paid by you & You can use it to place a new order. Customer can place the new
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\torder only in the same financial year, in which previous order was placed or the credit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnote was issued. Same cancellation charges will be applicable if the customer asks for
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trefund, after the credit note is issued (on customer request) by Woodpeel team.<br>

\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned above in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcancellation policies section.<br><br>

\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a carpenter in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcase of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll replace.<br><br>

\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace. Eligibility for
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treplacement (e.g., imbalance or unevenness of more than 5mm, wooden joints opening,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttermites & wood borer infestations etc.).<br><br>
\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like appearance or
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttexture (especially for solid wood products) are not defects.<br><br>

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
        // line 738
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfiber cloth dewy in a timber-friendly cleanser.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t3. Forthwith deterge the wetness with an arid, mushy & sanctity cloth.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t4. Tidy the stain with a neat, arid cloth in a mild manner, in case of a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tspill. Please make sure you do not use rugged stuff or rub the spot pronto.
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t5. Make sure you use hot pad, mats & coasters before keeping any hot or cold
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\titems on the timbered surface. Please do not keep extreme hot objects like
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbaking dish, saucepan or griddle even on a hot pad.</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t6. To maintain its quality & lifespan in the long run, ensure that furniture
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tis not kept next to windows or in open places, where it is exposed to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tupright sunlight, moisture & water.</li>
\t\t\t\t\t\t\t\t\t\t<li>7. Avoid cuts & scratches which may impede the scenic looks & finish of your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfurniture, by keeping the sharp objects away from your furniture.
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t8. Ensure that the furniture is not in contact with timber-unfriendly
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchemicals & alcohol, as it will harm the color finish, wood’s texture &
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdurability of the furniture.</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-header\" id=\"faqhead3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-header-link collapsed\" data-toggle=\"collapse\" data-target=\"#faq3\" aria-expanded=\"true\" aria-controls=\"faq3\">Delivery &
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tInstallation</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"faq3\" class=\"collapse\" aria-labelledby=\"faqhead3\" data-parent=\"#faq\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>1. Shipping address can’t be changed, once the product is shipped from our
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twarehouse. Customer have to receive the product on the same address or the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tshipment will return to our warehouse.</li>
\t\t\t\t\t\t\t\t\t\t<li>2. Your shipment will be held for 2 days at the nearest delivery hub, if
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tyou’ve failed to receive the delivery. After this, Woodpeel reserve the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tright to change the location of the shipment.</li>
\t\t\t\t\t\t\t\t\t\t<li>3. In case of reshipping customer have to borne charges of both side
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttransportation.</li>
\t\t\t\t\t\t\t\t\t\t<li>4. Our team will stay in touch with you for a hassle-free delivery.</li>
\t\t\t\t\t\t\t\t\t\t<li>5. Only first attempt of delivery at your shipping address is free. Customer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thave to borne extra delivery charges for second attempt, if a customer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmisses’ delivery.</li>
\t\t\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t\t\t\t<li>6. In absence of a service lift, our delivery partner shall only make a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdelivery to the ground floor of your apartment. Customer have to borne extra
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcharges per floor on delivery, to the customer’s floor (on request) in such
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcases.</li>
\t\t\t\t\t\t\t\t\t\t<li>7. If customer want time-specific or weekend delivery, then extra delivery
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcharges will be applicable.</li>

\t\t\t\t\t\t\t\t\t\t<h3>Installation:</h3>

\t\t\t\t\t\t\t\t\t\t<li>1) Depending on the situation or condition, your product may or may not
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\trequire installation assistance upon delivery.</li>
\t\t\t\t\t\t\t\t\t\t<li>2) If the delivery condition is:</li>
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
\t\t\t\t\t\t\t\t\t\t\t<li>This product comes with
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 827
        echo ($context["warranty1"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\twarranty, limited warranty
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcovers
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmanufacturing defects, termites & wood borer infestations. As per the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tindustry standards, unevenness of up to 5mm is accepted widely, due to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdifferences in floor & surface levels, this is not covered in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twarranty.This limited warranty does not implement to the following
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tissues:</li>
\t\t\t\t\t\t\t\t\t\t\t<li>1. Normal depreciation of the product over elongated use.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>2. Scratches, cuts or damages due to wrong cleaning methods or
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\timpacts/accidents.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>3. Product gets damaged due to wrong installation or assembly by the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcustomer.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>4. Cracks developed due to dislocation, shifting or reshuffle of the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tproduct.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>5. Fading due to exposure to upright sunlight.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>6. Wood decaying due to consistent exposure to water or wetness.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>7. Upholstery fabrics such as seat covers have no warranty.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>8. Use of wood-unfriendly harsh chemicals or non-norm dry-cleaning
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprocedures.</li>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tan order?<br>In case of change of mind after placing an order, the time
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tframe is 24hours to cancel an order (3% of the total amount paid by
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcustomer will be deducted as cancellation charges). But customized
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tproducts have no such policies meaning it can’t be cancelled.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>2. What if the product is not customized, is it possible to cancel the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\torder?<br>Yes, it is possible to cancel but, it can only be cancelled
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbefore the product is shipped from our warehouse. Once the shipment is
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\thand overed to our delivery team, we can’t cancel the order.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>3. How much cancellation charges will be applicable, while cancelling
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe order after 24hours?<br>A cancellation fee of 6% will be applied on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tthe amount paid by you while processing the refund.</li>
\t\t\t\t\t\t\t\t\t\t\t<li>4) Is there any way to not get any charges deducted from the full amount
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tpaid by customer? Or Can customer use the amount afterwards for placing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ta new order?<br>
\t\t\t\t\t\t\t\t\t\t\t\tYes, it is possible through credit note, meaning we’ll give you a credit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnote of full amount paid by you & You can use it to place a new order.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCustomer can place the new order only in the same financial year, in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\twhich previous order was placed or the credit note was issued. Same
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcancellation charges will be applicable if the customer asks for refund,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tafter the credit note is issued (on customer request) by Woodpeel
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tteam.<br>

\t\t\t\t\t\t\t\t\t\t\t\tPlease Note: We don’t have refund policies except the policies mentioned
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tabove in cancellation policies section.<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t<h3>Return Policies:</h3><br>

\t\t\t\t\t\t\t\t\t\t\t\t1) What if the customer receives damaged product?<br>
\t\t\t\t\t\t\t\t\t\t\t\tWoodpeel takes full responsibility of damaged product & we’ll arrange a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcarpenter in case of minor damage (like chip-off/scratch/peel-off).
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tIf it is not possible to correct the damaged area good as new, we’ll
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treplace.<br><br>

\t\t\t\t\t\t\t\t\t\t\t\t2) What if the product is defective?<br>
\t\t\t\t\t\t\t\t\t\t\t\tIn case product delivered to you is defective, we’ll replace.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEligibility for replacement (e.g., imbalance or unevenness of more than
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t5mm, wooden joints opening, termites & wood borer infestations
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tetc.).<br><br>
\t\t\t\t\t\t\t\t\t\t\t\tPlease note that natural characteristics of the material used, like
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tappearance or texture (especially for solid wood products) are not
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdefects.<br><br>

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
</div></section>";
        // line 920
        if (($context["products"] ?? null)) {
            // line 921
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
            // line 932
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 933
                echo "\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t<div class=\" product-card transition text-center\">
\t\t\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t\t\t<a href=\"";
                // line 936
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 936);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 937
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 937);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 937);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 937);
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"caption text-capitalize\">
\t\t\t\t\t\t\t<p class=\"product_name mt-10 font-16 mt-10\">";
                // line 941
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 941);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 943
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 943)) {
                    // line 944
                    echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                    // line 945
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 945)) {
                        // line 946
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 946);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 948
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 948);
                        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"price-old\" style=\"text-decoration: line-through;\">";
                        // line 949
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 949);
                        echo "</span><br>
\t\t\t\t\t\t\t\t\t<span style=\"text-decoration:none; color: #67ad5b;font-weight: 600;font-size:16px;\" class=\"off_p\">";
                        // line 950
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 950);
                        echo "%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tOFF</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 953
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 953)) {
                        // line 954
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 955
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 955);
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 957
                    echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
                }
                // line 959
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 962
            echo "\t\t</div>
\t\t<br/>
\t</section>
";
        }
        // line 966
        echo ($context["column_right"] ?? null);
        echo "


<script type=\"text/javascript\">
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\$.ajax({
url: 'index.php?route=product/product/getRecurringDescription',
type: 'post',
data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
dataType: 'json',
beforeSend: function () {
\$('#recurring-description').html('');
},
success: function (json) {
\$('.alert-dismissible, .text-danger').remove();

if (json['success']) {
\$('#recurring-description').html(json['success']);
}
}
});
});
// -->
</script>
<script type=\"text/javascript\">
\t\$('#button-cart').on('click', function () {
if (!localStorage.getItem('pincode')) {
\$(\"#locationpopup\").modal('show');
} else {
\$.ajax({
url: 'index.php?route=checkout/cart/add',
type: 'post',
data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
dataType: 'json',
beforeSend: function () {
\$('#button-cart').button('loading');
},
complete: function () {
\$('#button-cart').button('reset');
},
success: function (json) {
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

setTimeout(function () {
\$(\"#cart-total\").html(json['total']);
let t = json['total'].split('-');
\$('.slide-cart-total').html(t[1]);
}, 100);

\$('.cart-body').load('index.php?route=common/slide_cart/info div.cart-body');


\$('.cart_backdrop').fadeIn();
\$(\".cart\").animate({right: '0px'})

}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}

});
\$('#button-buy').on('click', function () {
if (!localStorage.getItem('pincode')) {
\$(\"#locationpopup\").modal('show');
} else {
\$(\"#button-cart\").click();
setTimeout(function () {
window.location = \"index.php?route=checkout/cart\";
}, 200)
}
})
//
</script>
<script type=\"text/javascript\">
\t\$('.date').datetimepicker({language: '";
        // line 1067
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});

\$('.datetime').datetimepicker({language: '";
        // line 1069
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});

\$('.time').datetimepicker({language: '";
        // line 1071
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});

\$('button[id^=\\'button-upload\\']').on('click', function () {
var node = this;

\$('#form-upload').remove();

\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\$('#form-upload input[name=\\'file\\']').trigger('click');

if (typeof timer != 'undefined') {
clearInterval(timer);
}

timer = setInterval(function () {
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
beforeSend: function () {
\$(node).button('loading');
},
complete: function () {
\$(node).button('reset');
},
success: function (json) {
\$('.text-danger').remove();

if (json['error']) {
\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
}

if (json['success']) {
alert(json['success']);

\$(node).parent().find('input').val(json['code']);
}
},
error: function (xhr, ajaxOptions, thrownError) {
alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
}
});
}
}, 500);
});
//
</script>
<script type=\"text/javascript\">
\t\$('#review').delegate('.pagination a', 'click', function (e) {
e.preventDefault();

\$('#review').fadeOut('slow');

\$('#review').load(this.href);

\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=          ";
        // line 1137
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function () {
\$.ajax({
url: 'index.php?route=product/product/write&product_id=          ";
        // line 1141
        echo ($context["product_id"] ?? null);
        echo "',
type: 'post',
dataType: 'json',
data: \$(\"#form-review\").serialize(),
beforeSend: function () {
\$('#button-review').button('loading');
},
complete: function () {
\$('#button-review').button('reset');
},
success: function (json) {
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

\$(document).ready(function () {
var old_price = Number(\$(\"#p_pr\").text().replace(/[`~!@#\$%^&*()_|+\\-=?;:'\",<>\\{\\}\\[\\]\\\\\\/]/gi, ''));


\$('.sizes').change(function () {
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

\$(\"#add_quantity\").click(function () {

var b = Number(\$(\"#input-quantity\").val()) + 1;

\$(\".iq\").val(b);
})
\$(\"#less_quantity\").click(function () {
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


\$(document).ready(function (e) {
var link = getUrlParameter('a');


if (link) {
\$(\".tab_options\").each(function () {
if (\$.trim(\$(this).siblings().html()).toLocaleLowerCase() == link.toLocaleLowerCase()) {
\$(this).css('border', '2px solid #413B98');
\$(this).addClass('current');
var val = \$(this).attr(\"data-val\");

\$(\"select option\").each(function (index, element) {
if (\$(this).val() == val) {
\$(this).prop(\"selected\", true);
}

})

}
})
} else {
if (\$(\".tab_options\").length > 0) {

var val;

\$(\"select option\").each(function (index, element) {
if (\$(this).attr(\"data-link\") == \"\") {
\$(this).prop(\"selected\", true);
val = \$(this).val();
}
})

\$(\".tab_options\").each(function () {
if (\$(this).attr(\"data-val\") == val) {
\$(this).css('border', '2px solid #003B30');
}
})
}
}
\$(\".tab_options\").click(function () {
if (!\$(this).hasClass('current')) {
var val = \$(this).attr(\"data-val\");

\$(\"select option\").each(function (index, element) {
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
<script>
\tconst zoom = document.querySelector(\".zoom\");
zoom.addEventListener(\"click\", () => {
\$('.zoom').zoom({magnify: '2.5'});
});
</script>
<script>
\t// Initiate zoom effect:
imageZoom(\"myimage\", \"myresult\");
</script>

<script>
\tconst imagePopupClose = document.querySelector(\".imagePopupClose\");
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
</script>


";
        // line 1356
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
        return array (  2161 => 1356,  1943 => 1141,  1936 => 1137,  1867 => 1071,  1862 => 1069,  1857 => 1067,  1753 => 966,  1747 => 962,  1739 => 959,  1735 => 957,  1730 => 955,  1725 => 954,  1722 => 953,  1716 => 950,  1712 => 949,  1707 => 948,  1701 => 946,  1699 => 945,  1696 => 944,  1694 => 943,  1689 => 941,  1678 => 937,  1674 => 936,  1669 => 933,  1665 => 932,  1652 => 921,  1650 => 920,  1554 => 827,  1462 => 738,  1385 => 664,  1377 => 659,  1338 => 623,  1306 => 593,  1301 => 590,  1295 => 588,  1288 => 584,  1282 => 581,  1264 => 566,  1256 => 561,  1251 => 559,  1243 => 554,  1239 => 553,  1235 => 551,  1233 => 550,  1229 => 549,  1224 => 546,  1221 => 545,  1216 => 542,  1209 => 540,  1200 => 537,  1196 => 536,  1193 => 535,  1189 => 534,  1181 => 529,  1176 => 526,  1172 => 525,  1168 => 523,  1166 => 522,  1161 => 520,  1156 => 517,  1150 => 514,  1147 => 513,  1144 => 512,  1138 => 509,  1135 => 508,  1133 => 507,  1128 => 505,  1110 => 489,  1105 => 487,  1102 => 486,  1098 => 484,  1096 => 483,  1092 => 481,  1085 => 477,  1082 => 476,  1078 => 474,  1076 => 473,  1073 => 472,  1067 => 469,  1062 => 466,  1058 => 464,  1056 => 463,  1053 => 462,  1047 => 459,  1044 => 458,  1040 => 456,  1038 => 455,  1035 => 454,  1029 => 451,  1026 => 450,  1022 => 448,  1020 => 447,  1016 => 445,  1013 => 444,  1004 => 441,  999 => 440,  995 => 439,  992 => 438,  990 => 437,  986 => 435,  980 => 432,  977 => 431,  973 => 429,  971 => 428,  967 => 426,  961 => 423,  958 => 422,  954 => 420,  951 => 419,  945 => 416,  942 => 415,  938 => 413,  935 => 412,  929 => 409,  926 => 408,  922 => 406,  920 => 405,  900 => 388,  895 => 386,  889 => 383,  874 => 371,  870 => 369,  867 => 368,  861 => 367,  845 => 358,  838 => 356,  831 => 355,  828 => 354,  812 => 345,  805 => 343,  798 => 342,  795 => 341,  779 => 332,  772 => 330,  765 => 329,  762 => 328,  754 => 325,  750 => 324,  743 => 322,  739 => 321,  732 => 320,  729 => 319,  717 => 316,  711 => 315,  704 => 314,  701 => 313,  689 => 310,  683 => 309,  676 => 308,  673 => 307,  668 => 304,  660 => 301,  653 => 299,  651 => 298,  646 => 297,  630 => 295,  628 => 294,  622 => 293,  618 => 291,  614 => 290,  610 => 289,  606 => 288,  599 => 287,  596 => 286,  591 => 283,  581 => 279,  578 => 278,  562 => 276,  560 => 275,  550 => 274,  546 => 272,  542 => 271,  538 => 270,  531 => 269,  528 => 268,  522 => 264,  515 => 262,  508 => 260,  506 => 259,  502 => 258,  493 => 257,  489 => 256,  485 => 255,  479 => 254,  472 => 253,  462 => 249,  449 => 247,  446 => 246,  441 => 245,  438 => 244,  434 => 243,  431 => 242,  429 => 241,  425 => 239,  421 => 237,  415 => 234,  411 => 233,  405 => 230,  399 => 228,  393 => 226,  390 => 225,  388 => 224,  376 => 215,  371 => 213,  365 => 210,  356 => 204,  346 => 196,  340 => 192,  337 => 191,  326 => 186,  322 => 184,  317 => 183,  315 => 182,  312 => 181,  310 => 180,  294 => 166,  290 => 164,  287 => 163,  274 => 160,  271 => 159,  266 => 158,  263 => 157,  253 => 155,  251 => 154,  248 => 153,  246 => 152,  242 => 150,  238 => 148,  235 => 147,  222 => 144,  219 => 143,  214 => 142,  211 => 141,  201 => 138,  198 => 137,  196 => 136,  193 => 135,  191 => 134,  185 => 131,  173 => 121,  161 => 117,  158 => 116,  154 => 115,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
