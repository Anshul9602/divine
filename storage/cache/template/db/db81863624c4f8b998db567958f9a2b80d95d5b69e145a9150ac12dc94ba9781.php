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

/* default/template/common/search.twig */
class __TwigTemplate_90d6e57de27cf411f37aaaeca844589e202f549b58b92fc849908a2bee3ab0ea extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" 
  class=\"search-input form-control input-lg\" autocomplete=\"off\" data-toggle=\"dropdown\" />
  <ul class=\"dropdown-menu search-autofill\" role=\"menu\" aria-labelledby=\"menu1\">
                <h6 class=\"mtb-10\">Trending</h6>
                <li role=\"presentation\">
                 <a role=\"menuitem\" class=\"search-suggession-link\" tabindex=\"-1\" href=\"index.php?route=product/search&search=king%20size&description=true\">King Size Beds</a>
                </li>
                <div class=\"dropdown-divider\"></div>
                <li role=\"presentation\">
                  <a role=\"menuitem\" class=\"search-suggession-link\" tabindex=\"-1\" href=\"index.php?route=product/search&search=fabric%20sofas&description=true\">Fabric Sofas</a>
                </li>
                <div class=\"dropdown-divider\"></div>
                <li role=\"presentation\">
                 <a role=\"menuitem\" class=\"search-suggession-link\" tabindex=\"-1\" href=\"index.php?route=product/search&search=coffee%20tables&description=true\">Coffee Tables</a>
                </li>
            </ul>
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default btn-lg search-btn\">
     <i class=\"pe-7s-search\"></i>
    </button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search.twig", "");
    }
}
