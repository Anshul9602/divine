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
class __TwigTemplate_6f59739b9685a91c27de17e76be102f1cded3da635db2c7b166ecd794589f596 extends \Twig\Template
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
.promobox__plate {
       min-height: 45px;
    bottom: 10%;
    left: 25px;
    right: 25px;
    background: aliceblue;
\tcolor:#582254;
}
.position-absolute {
    position: absolute!important;
}
.css-theme-loaded .promobox:not(.promobox--is-slider) .promobox__content, .css-theme-loaded .slick-active .promobox__content {
    transform: none;
    opacity: 1;
}
.promobox:not(.promobox--is-slider) .promobox__content {
    transition-duration: 0.5s !important;
}
</style>


<script src=\"
\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\t\"></script>
<link href=\"
\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\t\" rel=\"stylesheet\">
<!-- hero slider area start -->

<!-- hero slider area end -->


<!--New arrivals -->
\t<section class=\"new-arrivals\"> <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<br/>
\t\t\t\t<h2>COLLECTIONS</h2>

\t\t\t\t<br/>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "
\t\t\t\t<div class=\"col-sm-4 col-6\">
\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
            echo "\" class=\"relative\">
\t\t\t\t\t\t\t<img src=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 53);
            echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t<div class=\"promobox__plate position-absolute pointer-events-none\">
\t\t\t\t\t\t\t<div class=\"promobox__content d-flex flex-column flex-center px-10 py-7\">
\t\t\t\t\t\t\t\t<p class=\"h5 position-relative m-0 text-uppercase\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56);
            echo "</p>
\t\t\t\t\t\t\t\t<p class=\"position-relative m-0\">";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_total", [], "any", false, false, false, 57);
            echo " Products</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</div>

\t</div>
</section>





";
        // line 76
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  137 => 76,  126 => 67,  110 => 57,  106 => 56,  100 => 53,  96 => 52,  91 => 49,  87 => 48,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/collection.twig", "");
    }
}
