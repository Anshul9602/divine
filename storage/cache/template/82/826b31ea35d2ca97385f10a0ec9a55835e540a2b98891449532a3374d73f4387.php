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

/* default/template/common/collection.twig */
class __TwigTemplate_1b403b7b6fa3adfbf36b5ba9c751cae3f4736b18798df431dcce0328603c2880 extends \Twig\Template
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
\t\tbackground: aliceblue;
\t\tcolor: #582254;
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
<section class=\"new-arrivals\" style=\"min-height:100vh;\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<br />
\t\t\t\t<h2>COLLECTIONS</h2>

\t\t\t\t<br />
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 54
            echo "
\t\t\t<div class=\"col-sm-4 col-6\">
\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
            echo "\" class=\"relative\">
\t\t\t\t\t\t<img src=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58);
            echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<div class=\"promobox__plate position-absolute pointer-events-none\">
\t\t\t\t\t\t\t<div class=\"promobox__content d-flex flex-column flex-center px-10 py-7\">
\t\t\t\t\t\t\t\t<p class=\"h5 position-relative m-0 text-uppercase\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"position-relative m-0\">";
            // line 62
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_total", [], "any", false, false, false, 62);
            echo "
\t\t\t\t\t\t\t\t\tProducts</p>
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
        // line 72
        echo "\t\t</div>

\t</div>
</section>


";
        // line 78
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/collection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 78,  131 => 72,  115 => 62,  111 => 61,  105 => 58,  101 => 57,  96 => 54,  92 => 53,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/collection.twig", "");
    }
}
