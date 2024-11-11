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

/* default/template/account/wishlist_guest.twig */
class __TwigTemplate_105984acc892d941333bbcf3523b5a3d525370d82531af0ec14d39ae4f383d2d extends \Twig\Template
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
\t.list-unstyled li {
\t\tcolor: #333;
\t\tfont-size: 14px;
\t\tletter-spacing: 1px;
\t\tmargin-top: 5px
\t}

\t.list-unstyled li a {
\t\tcolor: #ccc
\t}

\t.list-unstyled li a:hover {
\t\tcolor: #333
\t}
</style>

<!-- breadcrumb area start -->
<div style=\"background:#f1f1f1; border-bottom:thin solid #fff\" class=\"breadcrumb-area\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- breadcrumb area end -->

<div style=\"min-height:50vh;\" class=\"container\">


\t<div class=\"row mbn-30\">
\t\t<h1>Guest
\t\t</h1>
\t\t<div id=\"pro_card\" class=\"row\"></div>
\t</div>
\t<br><br><br><br>

</div>

<script>
\tconst product = JSON.parse(localStorage.getItem(\"wishlist1\"));
console.log(product);

let result = \"\";

for (let i = 0; i < product.length; i++) {
var card = `\t<div
\t\t\t\tclass=\"col-md-4 col-sm-6\">
\t\t\t\t<!-- product grid start -->
\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t
\t\t\t\t\t\t<figure class=\"product-thumb\">
\t\t\t\t\t\t\t<a href=\"\${
product[i].producthref
} \">
\t\t\t\t\t\t\t\t<img class=\"pri-img\" src=\"\${
product[i].productimg
}\" alt=\"product\">
\t\t\t\t\t\t\t\t<img class=\"sec-img\" src=\"\${
product[i].productimg
}\" alt=\"product\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"cart-hover\">
\t\t\t\t\t\t\t\t<a href=\"\${
product[i].producthref
}\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-cart\">View Product</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t\t<div class=\"product-caption text-center\">
\t\t\t\t\t\t<h6 class=\"product-name\">
\t\t\t\t\t\t\t<a href=\"\${
product[i].producthref
}\">
\t\t\t\t\t\t\t\t\${
product[i].productname
}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</h6>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t<span class=\"price-regular\">
\t\t\t\t\t\t\t\t\t\t\${
product[i].productprice
}
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- product grid end -->
\t\t\t</div>
\t`
result = result + card;
}

document.getElementById('pro_card').innerHTML = result;
</script>
";
        // line 121
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist_guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 121,  84 => 32,  73 => 29,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist_guest.twig", "");
    }
}
