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
class __TwigTemplate_31e4c49472d9df49d226d462c335cae19f42c24e275bb3aa807cfe30f6b34ad6 extends \Twig\Template
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
      <button id=\"currency_btn\" class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 26
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 26) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26) == ($context["code"] ?? null)))) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 26);
                    echo " ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 26) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26) == ($context["code"] ?? null)))) {
                    echo " <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 26);
                    echo "</strong> ";
                }
                // line 27
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_currency"] ?? null);
            echo "</span>&nbsp; <i class=\"fa fa-angle-down\"></i></button>
      <ul class=\"dropdown-menu curr_drop\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 30
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "        <li style='text-align:left'>
          <button style=\"margin-top:10px\" class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 32);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 32);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 32);
                    echo "</button>
        </li>

        ";
                } else {
                    // line 36
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 37);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 37);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 37);
                    echo "</button>
        </li>
        ";
                }
                // line 40
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 44
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
  </li>
";
        }
        // line 47
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
        return array (  145 => 47,  138 => 44,  133 => 41,  127 => 40,  117 => 37,  114 => 36,  103 => 32,  100 => 31,  97 => 30,  93 => 29,  82 => 27,  71 => 26,  67 => 25,  62 => 23,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/currency.twig", "");
    }
}
