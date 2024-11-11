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

/* default/template/common/currency.twig */
class __TwigTemplate_295be81cefa7dc7cffe785e650611e6a453cb66e69f7588a974e652b3dc3e9f7 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<style>
  #currency_btn{
    margin-top:-5px;
  }
 #currency_btn,.currency-select {
    padding: 0px;
    text-transform: uppercase;
    font-size: 12px;
    text-align:left;
  }
  #currency_btn:after{
    content:\"\"
  }
  .dropdown-toggle::after{
    display:none;
  }
  .curr_drop{
    width:200px; padding:15px
  }
</style>
 <li>
  <form action=\"";
            // line 23
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button id=\"currency_btn\" class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" style=\"padding-top:15px;\">";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 26
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 26) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26) == ($context["code"] ?? null)))) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 26);
                    echo " 
      <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 27);
                    echo "</span>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 28
$context["currency"], "symbol_right", [], "any", false, false, false, 28) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 28) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 28);
                    echo "</strong> ";
                }
                // line 29
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " &nbsp; <i class=\"fa fa-angle-down\"></i></button>
      <ul class=\"dropdown-menu curr_drop\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 32
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "        <li style='text-align:left'>
          <button style=\"margin-top:10px\" class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 34);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 34);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 34);
                    echo "</button>
        </li>

        ";
                } else {
                    // line 38
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 39);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 39);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 39);
                    echo "</button>
        </li>
        ";
                }
                // line 42
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 46
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
  </li>
";
        }
        // line 49
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  142 => 46,  137 => 43,  131 => 42,  121 => 39,  118 => 38,  107 => 34,  104 => 33,  101 => 32,  97 => 31,  88 => 29,  82 => 28,  78 => 27,  71 => 26,  67 => 25,  62 => 23,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/currency.twig", "");
    }
}
