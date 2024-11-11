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
class __TwigTemplate_22e90284e58b5605ed9c2f2238bc3b35ebdfc0490d8df4c2843347216c2541e7 extends \Twig\Template
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
\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "\t\t\t<!-- product single item start -->
\t\t\t<div
\t\t\t\tclass=\"col-md-4 col-sm-6\">
\t\t\t\t<!-- product grid start -->
\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55)) {
                // line 56
                echo "\t\t\t\t\t\t<figure class=\"product-thumb\">
\t\t\t\t\t\t\t<a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"pri-img\" src=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 58);
                echo "\" alt=\"product\">
\t\t\t\t\t\t\t\t<img class=\"sec-img\" src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 59);
                echo "\" alt=\"product\">
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<div class=\"cart-hover\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 63);
                echo "\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-cart\">View Product</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t<div class=\"product-caption text-center\">
\t\t\t\t\t\t<h6 class=\"product-name\">
\t\t\t\t\t\t\t<a href=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 72);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</h6>
\t\t\t\t\t\t";
            // line 75
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75)) {
                // line 76
                echo "\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "
\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t<span class=\"price-regular\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                    echo "
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t<span class=\"price-regular\">";
                    // line 85
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85);
                    echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"price-old\">
\t\t\t\t\t\t\t\t\t\t<del>";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
                    echo "</del>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t<a style=\"color:#333\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 92);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\">Remove</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- product grid end -->
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t</div>
\t<br><br><br><br>

</div>


";
        // line 105
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
        return array (  216 => 105,  208 => 99,  192 => 92,  189 => 91,  182 => 87,  177 => 85,  174 => 84,  167 => 80,  162 => 77,  159 => 76,  157 => 75,  151 => 72,  147 => 71,  143 => 69,  134 => 63,  127 => 59,  123 => 58,  119 => 57,  116 => 56,  114 => 55,  107 => 50,  103 => 49,  84 => 32,  73 => 29,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist_guest.twig", "");
    }
}
