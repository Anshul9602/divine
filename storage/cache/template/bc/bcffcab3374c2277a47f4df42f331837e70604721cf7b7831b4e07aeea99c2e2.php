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

/* default/template/common/jewellery.twig */
class __TwigTemplate_00cb6a2bf76ee7b87c440087aef171e19aeea07a02c486648ff15ccaa32b4475 extends \Twig\Template
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
\t.promobox__plate {
\t\tmin-height: 45px;
\t\tbottom: 10%;
\t\tleft: 25px;
\t\tright: 25px;
\t\tbackground: #bde1d7;
\t\tcolor: #222222;
\t}

\t.position-absolute {
\t\tposition: absolute !important;
\t}

\t.css-theme-loaded .promobox:not(.promobox--is-slider) .promobox__content,
\t.css-theme-loaded .slick-active .promobox__content {
\t\ttransform: none;
\t\topacity: 1;
\t}

\t.promobox:not(.promobox--is-slider) .promobox__content {
\t\ttransition-duration: 0.5s !important;
\t}
</style>


<script src=\"
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\t\t\"></script>
<link href=\"
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\t\t\" rel=\"stylesheet\">
<!-- hero slider area start -->

<!-- hero slider area end -->


<!--New arrivals -->
<section class=\"slider-area\">

\t<div class=\"row\"style=\"margin:0px;\">
\t\t<div class=\"slider_banner \"style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 47
            echo "\t\t\t\t
\t\t\t\t\t<img src=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 48);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>
<section class=\"new-arrivals\" style=\"min-height:100vh;\">

\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center mt-5\">
\t\t\t\t
\t\t\t\t<h2 style=\"text-transform: uppercase;\">Jewellery</h2>

\t\t\t\t<br />
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 71
            echo "
\t\t\t<div class=\"col-sm-4 col-6\">
\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t<a href=\"";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
            echo "\" class=\"relative\">
\t\t\t\t\t\t<img src=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
            echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<div class=\"promobox__plate position-absolute pointer-events-none\">
\t\t\t\t\t\t\t<div class=\"promobox__content d-flex flex-column flex-center px-10 py-7\">
\t\t\t\t\t\t\t\t<p class=\"h5 position-relative  text-uppercase\" style=\"margin: 10px;\">";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 78);
            echo "</p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>


\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t</div>

\t</div>
</section>


";
        // line 94
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/jewellery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 94,  157 => 88,  141 => 78,  135 => 75,  131 => 74,  126 => 71,  122 => 70,  101 => 51,  92 => 48,  89 => 47,  85 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/jewellery.twig", "");
    }
}
