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

/* default/template/common/celebritie.twig */
class __TwigTemplate_7b88a4936d19b84c4818dbab341a52a19446c46483afbaf1f8d594f1085b605f extends \Twig\Template
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
\t\t\t\t<h2 style=\"text-transform: uppercase;\">Celebrities</h2>

\t\t\t\t<br />
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/5.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/2.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/3.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/6.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/7.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/11.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/10.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/9.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 mt-2\">
\t\t\t\t<img src=\"image/celebritie/12.jpeg\" style=\"width:100%;\">
\t\t\t</div>
\t\t\t
\t\t</div>

\t</div>
</section>


";
        // line 105
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/celebritie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 105,  101 => 51,  92 => 48,  89 => 47,  85 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/celebritie.twig", "");
    }
}
