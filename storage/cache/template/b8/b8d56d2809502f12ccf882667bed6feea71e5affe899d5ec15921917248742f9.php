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

/* default/template/extension/module/recently_viewed.twig */
class __TwigTemplate_aba5f65f959518cc45ad9b34709fdc24e0a845a90be9d11acaabe01adb6c97b5 extends \Twig\Template
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
        echo "
<!-- Recent viewed -->
<section style=\"background:#F1F7EF\" class=\"cares separation ptb-50\">
  <div class=\"container new-font\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <img src=\"image/elements/el.png\" alt=\"\" class=\"rose-element\" />
        <h2 style=\"text-align: center; margin-bottom: 20px\">Recently Viewed</h2>
        <br />
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-sm-12\">
            <div style=\"overflow-x:hidden\" class=\"swiper topSwiper\">
          <div class=\"swiper-wrapper\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "              <div class=\"swiper-slide\">
                <div class=\"product-card text-center\">
                  <a href=\"";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
            echo "\">
                  <img src=\"";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
            echo "\" alt=\"\" class=\"img-responsive\">
                  </a>
                  <h4 class=\"product_name\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
            echo "</h4>
                  <p class=\"product_price\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 24);
            echo "</p>
                </div>
              </div>  
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </div>
            <!-- If we need navigation buttons -->
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
       </div>
      </div>
     
      </div>
    </div>
  </div>
</section>
<!-- end Recent viewed -->";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/recently_viewed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  76 => 24,  72 => 23,  67 => 21,  63 => 20,  59 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/recently_viewed.twig", "");
    }
}
