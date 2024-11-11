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

/* default/template/checkout/confirm.twig */
class __TwigTemplate_a388bb874278102dedef05ecbcee998709925b1d2db9099241c59c446aaaa6fd extends \Twig\Template
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
        if ( !($context["redirect"] ?? null)) {
            // line 2
            echo "<style>
  .confirm-table thead tr td, .confirm-table tbody tr td, .confirm-table tfoot tr td{
    border-left:none;
    border-right:none;
  }
</style>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover confirm-table\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 12
            echo ($context["column_name"] ?? null);
            echo "</td>
       
       
        <td class=\"text-right\">";
            // line 15
            echo ($context["column_price"] ?? null);
            echo "</td>
        <td class=\"text-right\">";
            // line 16
            echo ($context["column_total"] ?? null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "    <tr>
      <td class=\"text-left\"><a style=\"color:#333\" href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
        &nbsp;<small> - ";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 25)) {
                    echo " <br/>
        <span class=\"label label-info\">";
                    // line 26
                    echo ($context["text_recurring_item"] ?? null);
                    echo "</span> <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26);
                    echo "</small> ";
                }
                echo "</td>
     
   
      <td class=\"text-right\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29);
                echo "</td>
      <td class=\"text-right\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 30);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 34
                echo "    <tr>
      <td class=\"text-left\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 35);
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 38);
                echo "</td>
      <td class=\"text-right\">";
                // line 39
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 39);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 47
                echo "    <tr>
      <td colspan=\"2\" class=\"text-right\"><strong>";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 48);
                echo ":</strong></td>
      <td class=\"text-right\">";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 49);
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 56
            echo ($context["payment"] ?? null);
            echo "
";
        } else {
            // line 57
            echo " 
<script type=\"text/javascript\"><!--
location = 'index.php?route=checkout/cart';
//--></script> 
";
        }
        // line 61
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  187 => 57,  182 => 56,  176 => 52,  167 => 49,  163 => 48,  160 => 47,  156 => 46,  150 => 42,  141 => 39,  137 => 38,  131 => 35,  128 => 34,  123 => 33,  114 => 30,  110 => 29,  100 => 26,  95 => 25,  86 => 24,  76 => 23,  73 => 22,  69 => 21,  61 => 16,  57 => 15,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/confirm.twig", "");
    }
}
