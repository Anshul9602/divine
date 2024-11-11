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

/* default/template/extension/module/filter.twig */
class __TwigTemplate_44a668b0fbeef51e43ea8e1db9336bfd63978f1d134d27ed5507db1c131d67b7 extends \Twig\Template
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
        echo "<style>
  .list-group-item{
    background:transparent;
    border:none;
  }
   @media screen and (max-width:650px) {
       .filter-panel {
         position: fixed;
         background: #fff;
         width: 260px;
         left: -260px;
         height: 100vh;
         overflow-y: auto;
         padding: 20px;
         z-index: 999999999999;
         top: 0px;

       }
       .backdrop-filter{
          position: fixed;
          top: 0px;
          left:0px;
          width:100%;
          height:100vh;
          background:rgb(0,0,0,0.5);
          z-index: 99999999;
          display:none;
       }
   }
</style>
<div class=\"backdrop-filter\"></div>
<div class=\"panel panel-default filter-panel\">
 
  <div class=\"list-group\"> ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            echo " 
    <h5>";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 35);
            echo "  </h5>
   
    <div class=\"list-group-item\">
      <div id=\"filter-group";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 38);
            echo "\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 39
                echo "        <div class=\"checkbox\">
          <label>";
                // line 40
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 40), ($context["filter_category"] ?? null))) {
                    // line 41
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 41);
                    echo "\" checked=\"checked\" />
            ";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 42);
                    echo "
            ";
                } else {
                    // line 44
                    echo "            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 44);
                    echo "\" />
            ";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 45);
                    echo "
            ";
                }
                // line 46
                echo "</label>
        </div>
       
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        <hr class=\"mt-0\"/>
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</div>
  <div class=\"panel-footer text-center mt-20\">
    <button type=\"button\" style='display:none' id=\"button-filter\" class=\"btn btn-primary\">";
        // line 55
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 66
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});

\$('input[name^=\\'filter\\']').change(function() {
    
       \$('#button-filter').click()
    
});
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 66,  137 => 55,  133 => 53,  124 => 50,  115 => 46,  110 => 45,  105 => 44,  100 => 42,  95 => 41,  93 => 40,  90 => 39,  84 => 38,  78 => 35,  72 => 34,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter.twig", "");
    }
}
