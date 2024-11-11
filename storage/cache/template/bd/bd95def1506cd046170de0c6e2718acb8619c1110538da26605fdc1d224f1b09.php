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
class __TwigTemplate_0237c7eae84b0a03f444a70fa1380af5c9da8d5eb82a58f4e014d30f32679474 extends \Twig\Template
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
<div style=\"background:#f1f1f1; border-bottom:thin solid #fff\" class=\"breadcrumb-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"breadcrumb-wrap\">
          <nav aria-label=\"breadcrumb\">
            <ul class=\"breadcrumb\">
             ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 28);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->

<div style=\"min-height:50vh;\" class=\"container\">



  <div class=\"row mbn-30\">
    
       ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "      <!-- product single item start -->
      <div class=\"col-md-4 col-sm-6\">
        <!-- product grid start -->
        <div class=\"product-item\">";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 51)) {
                // line 52
                echo "          <figure class=\"product-thumb\">
            <a href=\"";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                echo "\">
              <img class=\"pri-img\" src=\"";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                echo "\" alt=\"product\">
              <img class=\"sec-img\" src=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55);
                echo "\" alt=\"product\">
            </a>

            <div class=\"cart-hover\">
              <a href=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
                echo "\">
                <button class=\"btn btn-cart\">View Product</button>
              </a>
            </div>
          </figure>
          ";
            }
            // line 65
            echo "          <div class=\"product-caption text-center\">
            <h6 class=\"product-name\">
              <a href=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 67);
            echo "\">
               ";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
            echo "
              </a>
            </h6>
           ";
            // line 71
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71)) {
                // line 72
                echo "              ";
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "                
                <div class=\"price-box\">
                  <span class=\"price-regular\">
                    ";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                    echo "
                  </span>
                </div>
                ";
                } else {
                    // line 80
                    echo "                <div class=\"price-box\">
                  <span class=\"price-regular\">";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 81);
                    echo "</span>
                  <span class=\"price-old\"><del>";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                    echo "</del></span>
                </div>
              ";
                }
                // line 85
                echo "            ";
            }
            // line 86
            echo "            <a style=\"color:#333\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 86);
            echo "\" data-toggle=\"tooltip\" title=\"";
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
        // line 93
        echo "  </div>
  <br><br><br><br>

</div>



";
        // line 100
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
        return array (  210 => 100,  201 => 93,  185 => 86,  182 => 85,  176 => 82,  172 => 81,  169 => 80,  162 => 76,  157 => 73,  154 => 72,  152 => 71,  146 => 68,  142 => 67,  138 => 65,  129 => 59,  122 => 55,  118 => 54,  114 => 53,  111 => 52,  109 => 51,  104 => 48,  100 => 47,  81 => 30,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist.twig", "");
    }
}
