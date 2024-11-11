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

/* default/template/account/wishlist.twig */
class __TwigTemplate_92a953324bfd14c8e385e09d9f484a9e211b4ff6582dfae95009d644391dd024 extends \Twig\Template
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
  .list-unstyled li {
    color: #333;
    font-size: 14px;
    letter-spacing: 1px;
    margin-top: 5px
  }

  .list-unstyled li a {
    color: #ccc
  }

  .list-unstyled li a:hover {
    color: #333
  }
</style>

<!-- breadcrumb area start -->
<div class=\"breadcrumb-area hidden-phone\">
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
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- breadcrumb area end -->

<div style=\"min-height:50vh;\" class=\"container\">



  <div class=\"row mbn-30\">
    
       ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "      <!-- product single item start -->
      <div class=\"col-md-4 col-sm-6\">
        <!-- product grid start -->
        <div class=\"product-item\">";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52)) {
                // line 53
                echo "          <figure class=\"product-thumb\">
            <a href=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 54);
                echo "\">
              <img class=\"pri-img\" src=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55);
                echo "\" alt=\"product\">
              <img class=\"sec-img\" src=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image11", [], "any", false, false, false, 56);
                echo "\" alt=\"product\">
            </a>

          
          </figure>
          ";
            }
            // line 62
            echo "          <div class=\"product-caption text-center\">
            <h6 class=\"product-name\">
              <a href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
            echo "\">
               ";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
            echo "
              </a>
            </h6>
           ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68)) {
                // line 69
                echo "              ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "                
                <div class=\"price-box\">
                  <span class=\"price-regular\">
                    ";
                    // line 73
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73);
                    echo "
                  </span>
                </div>
                ";
                } else {
                    // line 77
                    echo "                <div class=\"price-box\">
                  <span class=\"price-regular\">";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78);
                    echo "</span>
                  <span class=\"price-old\"><del>";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                    echo "</del></span>
                </div>
              ";
                }
                // line 82
                echo "            ";
            }
            // line 83
            echo "            <a style=\"color:#333\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 83);
            echo "\" class=\"btn btn-primary mt-2\"data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\">Remove</a>

          </div>
        </div>
        <!-- product grid end -->
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "  </div>
  <br><br><br><br>

</div>



";
        // line 97
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 97,  196 => 90,  180 => 83,  177 => 82,  171 => 79,  167 => 78,  164 => 77,  157 => 73,  152 => 70,  149 => 69,  147 => 68,  141 => 65,  137 => 64,  133 => 62,  124 => 56,  120 => 55,  116 => 54,  113 => 53,  111 => 52,  106 => 49,  102 => 48,  85 => 33,  73 => 29,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist.twig", "");
    }
}
