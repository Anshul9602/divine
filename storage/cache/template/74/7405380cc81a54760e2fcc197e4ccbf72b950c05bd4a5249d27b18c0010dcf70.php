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

/* default/template/common/header.twig */
class __TwigTemplate_c24b55e3ee5e82e5f8ad24a6c696587262f61d5734d32c94502dd6ce4ed9ebb2 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!-- [if IE]><![endif] -->
<!-- [if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif] -->
<!-- [if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif] -->
<!-- [if (gt IE 9)|!(IE)]><! -->
\t<html
\tdir=\"";
        // line 7
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\"> <!-- <![endif] -->
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<title>
\t\t\t";
        // line 13
        echo ($context["title"] ?? null);
        echo "
\t\t</title>
\t\t<base href=\"";
        // line 15
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 16
        if (($context["description"] ?? null)) {
            // line 17
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 19
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 20
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 22
        echo "\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\"/>
\t\t<!-- Pe-icon-7-stroke CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/pe-icon-7-stroke.css\"/>
\t\t<!-- Font-awesome CSS -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/vendor/font-awesome.min.css\"/>
\t\t<!-- Slick slider css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/slick.min.css\"/>
\t\t<!-- animate css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/animate.css\"/>
\t\t<!-- Nice Select css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/nice-select.css\"/>
\t\t<!-- jquery UI css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/plugins/jqueryui.min.css\"/>
\t\t<!-- main style css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/style.css?v1.123\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/testi.css?v1.123\"/>
\t\t<!-- jQuery JS -->
\t\t<script src=\"assets/js/vendor/jquery-3.3.1.min.js\"></script>

\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display&display=swap\" rel=\"stylesheet\">

\t\t<link
\t\trel=\"stylesheet\" href=\"assets/css/edit.css?v1.1\"/>
\t\t<!-- Swiper Slider CSS-->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css\"/>
\t\t<!-- Swiper JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js\"></script>


\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 66
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 66);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 66);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 66);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 69
            echo "\t\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t<script src=\"catalog/view/javascript/common.js?v1.12\" type=\"text/javascript\"></script>
\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 73
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 73);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 73);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 76
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t<link rel=\"stylesheet\" href=\"assets/css/edit.css?v1.19558\"/>
\t\t

\t</head>
\t<body>

\t\t<style>
.search-btn {
\t    padding: 9px 10px;
}
.main-menu ul li a {
    
    padding: 9px 15px;}
\t\t\t.top-strip span {
\t\t\t\tfont-weight: 700 !important;
\t\t\t}
\t\t\t.product-card-body .product_name {
\t           height:39px !important;
\t            overflow: hidden;
            }
\t\t</style>
\t\t<!-- Start Header Area -->
\t\t<header
\t\t\tclass=\"header-area\">
\t\t\t<!-- main header start -->
\t\t\t<div
\t\t\t\tclass=\"main-header d-none d-lg-block\">
\t\t\t\t<!-- header middle area start -->
\t\t\t\t<div class=\"header-main-area\">
\t\t\t\t\t<div class=\"top-strip\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
        // line 116
        echo "\t\t\t\t\t\t\t\t<div class=\"col-sm-8 text-center\">

\t\t\t\t\t\t\t\t\t<p class=\"offer_text\">GET ADDITIONAL 5% DISCOUNT ON YOUR FIRST PURCHASE. USE CODE:
\t\t\t\t\t\t\t\t\t\t<span class=\"color:black;font-weight: 600;font-size: 16px;\">FIRST5</span>
\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-4 text-right\">
\t\t\t\t\t\t\t\t\t<li style=\"font-size:11.5px\" class=\"pe-7s-call\"></li>
\t\t\t\t\t\t\t\t\t<a class=\"header_contact\" href=\"tel:+91 \">+91 11111111</a>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;
\t\t\t\t\t\t\t\t\t<li class=\"fa fa-envelope-o\"></li>
\t\t\t\t\t\t\t\t\t<a href=\"mailto: support@woodpeel.com\">support@exam.com</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row align-items-center ptb-20\">
\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-lg-3\" style=\"max-width:230px;\">
\t\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 142
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 143
        echo ($context["logo"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- start logo area -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<div class=\"search-wrap\">
\t\t\t\t\t\t\t\t\t";
        // line 150
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t\t<div class=\"header-right d-flex align-items-center justify-content-end w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"header-configure-area w-100\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav justify-content-space-around w-100\">

\t\t\t\t\t\t\t\t\t\t\t<li class=\"user-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 159
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-user\" style=\"color: #f06639;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size:35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 164
        if (($context["logged"] ?? null)) {
            // line 165
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 166
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 169
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 172
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 176
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 179
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 185
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-like\" btnid=\"";
        // line 186
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 186);
        echo "\" btnname=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 186);
        echo "\" btnimg=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 186);
        echo "\" btnhref=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 186);
        echo "\" btnprice=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 186);
        echo "\" btnsprice=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 186);
        echo "\" style=\"color: #f06639;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size:35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\" return false;\" title=\"";
        // line 191
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\" style=\"color: #f06639;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfont-size:35px;\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 195
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t<!-- main menu area start -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<div class=\"main-menu-area sticky\">
\t\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 211
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- main menu area end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- header middle area end -->
\t\t\t</div>
\t\t\t<!-- main header start -->

\t\t\t<!-- mobile header start -->
\t\t\t<!-- mobile header start -->
\t\t\t\t<div
\t\t\t\tclass=\"mobile-header d-lg-none d-md-block sticky\"> <!-- mobile header top start -->
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t\t\t\t\t<p class=\"\" style=\"font-size:12px;\">GET ADDITIONAL 5% DISCOUNT ON YOUR FIRST PURCHASE. USE CODE:
\t\t\t\t\t\t\t\t\t<span class=\"color:black;font-weight: 600;font-size: 16px;\">FIRST5</span>
\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t</div><hr>
\t\t\t\t\t\t\t<div class=\"mobile-main-header\">
\t\t\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 239
        echo ($context["home"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 240
        echo ($context["logo"] ?? null);
        echo "\" alt=\"Brand Logo\"/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mobile-menu-toggler\">

\t\t\t\t\t\t\t\t\t<div class=\"mini-cart-wrap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" onclick=\" return false;\" title=\"";
        // line 246
        echo ($context["text_shopping_cart"] ?? null);
        echo "\" class=\"minicart-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"pe-7s-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification cart-counter-header\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 249
        echo ($context["cart_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button class=\"mobile-menu-btn\">
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- mobile header top start -->
\t\t\t</div>
\t\t\t<!-- mobile header end -->
\t\t\t<!-- mobile header end -->

\t\t\t<!-- offcanvas mobile menu start -->
\t\t\t<!-- off-canvas menu start -->
\t\t\t\t<aside class=\"off-canvas-wrapper\"> <div class=\"off-canvas-overlay\"></div>
\t\t\t\t<div class=\"off-canvas-inner-content\">
\t\t\t\t\t<div class=\"btn-close-off-canvas\">
\t\t\t\t\t\t<i class=\"pe-7s-close\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"off-canvas-inner\">
\t\t\t\t\t\t<!-- search box start -->

\t\t\t\t\t\t<div class=\"search-wrap\">
\t\t\t\t\t\t\t";
        // line 281
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- search box end -->

\t\t\t\t\t\t<!-- mobile menu start -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"mobile-navigation\">
\t\t\t\t\t\t\t<!-- mobile menu navigation start -->
\t\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t\t";
        // line 291
        if (($context["menu_categories"] ?? null)) {
            // line 292
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"mobile-menu\">

\t\t\t\t\t\t\t\t\t\t";
            // line 294
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 295
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 295)) {
                    // line 296
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 297
                    $context["myVariable"] = twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 297);
                    // line 298
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 298);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 298);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 300
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 300), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 300)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 300), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 301
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 302
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 303
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 303);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 303);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 306
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 310
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown d-flex\" style=\"align-items: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 311);
                    echo "\" class=\"\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 311);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 315
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 319
        echo "\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<!-- mobile menu navigation end -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- mobile menu end -->

\t\t\t\t\t\t<div class=\"mobile-settings\">
\t\t\t\t\t\t\t<ul class=\"nav\">

\t\t\t\t\t\t\t\t<div class=\"dropdown mobile-top-dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-hover\" id=\"myaccount\" data-toggle=\"dropdown\" aria-haspopup=\"true\" style=\"color:black;\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\tMy Account
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list\" aria-labelledby=\"myaccount\">
\t\t\t\t\t\t\t\t\t\t";
        // line 334
        if (($context["logged"] ?? null)) {
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["account"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 336
            echo ($context["text_account"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 337
            echo ($context["order"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 338
            echo ($context["text_order"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 339
            echo ($context["logout"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 340
            echo ($context["text_logout"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 342
            echo "\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 343
            echo ($context["text_register"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 344
            echo ($context["login"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 345
            echo ($context["text_login"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 347
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- offcanvas widget area start -->
\t\t\t\t\t<div class=\"offcanvas-widget-area\">
\t\t\t\t\t\t<div class=\"off-canvas-contact-widget\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-mobile\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+91 8905154400\">+91 8905154400</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"mailto: support@woodpeel.com\">support@woodpeel.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- offcanvas widget area end -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</aside>
\t\t\t";
        // line 372
        echo ($context["slide_cart"] ?? null);
        echo "
\t\t</header>


\t\t<script>
\t\t\t\$(document).ready(function () {
\$(\".close-offer-strip\").click(function () {
\$(\".top-strip\").slideUp();
})
if (localStorage.getItem('current_city')) {
\$(\"#city_selected\").text(localStorage.getItem('current_city'))
} else {
\$(\"#city_selected\").text('Select City')
}
})
// document.addEventListener('contextmenu', event => event.preventDefault());
\t\t</script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 372,  649 => 347,  644 => 345,  640 => 344,  636 => 343,  631 => 342,  626 => 340,  622 => 339,  618 => 338,  614 => 337,  610 => 336,  605 => 335,  603 => 334,  586 => 319,  581 => 316,  575 => 315,  566 => 311,  563 => 310,  558 => 307,  552 => 306,  541 => 303,  538 => 302,  533 => 301,  529 => 300,  521 => 298,  519 => 297,  516 => 296,  513 => 295,  509 => 294,  505 => 292,  503 => 291,  490 => 281,  455 => 249,  449 => 246,  440 => 240,  436 => 239,  405 => 211,  386 => 195,  379 => 191,  361 => 186,  355 => 185,  350 => 182,  342 => 179,  334 => 176,  331 => 175,  323 => 172,  315 => 169,  307 => 166,  304 => 165,  302 => 164,  292 => 159,  280 => 150,  266 => 143,  262 => 142,  234 => 116,  200 => 78,  191 => 76,  186 => 75,  175 => 73,  171 => 72,  168 => 71,  159 => 69,  154 => 68,  141 => 66,  137 => 65,  92 => 22,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  71 => 15,  66 => 13,  55 => 7,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
