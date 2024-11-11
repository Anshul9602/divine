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

/* default/template/product/category.twig */
class __TwigTemplate_6016d955d0b24377372ec5818e3d4b9c3b0deb3f5f95e4bea73c982d6b05e220 extends \Twig\Template
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
  @media screen and (max-width: 1450px) {
   .image_1{
    height:250px !important;
   }
  }
  @media screen and (max-width: 950px) {
   .image_1{
    height:200px !important;
   }
  }
</style>




<div id=\"product-category\" style=\"padding:0 5%;\">
  <div class=\"row\">
    <div id=\"content\" style=\"min-height:600px\" class=\"col-12\">
      <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
          <br />
          <h1>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <br />
        </div>
      </div>
      ";
        // line 29
        if (($context["categories"] ?? null)) {
            // line 30
            echo "      <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      ";
            // line 31
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                echo " <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 35
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "          </ul>
        </div>
    </div>
    ";
            } else {
                // line 41
                echo "    <div class=\"row\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 42
                    echo "      <div class=\"col-sm-3\">
        <ul>
          ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 45
                        echo "          <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 45);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 45);
                        echo "</a></li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "        </ul>
      </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "    </div>
    <br />
    ";
            }
            // line 53
            echo "    ";
        }
        // line 54
        echo "    ";
        if (($context["products"] ?? null)) {
            // line 55
            echo "    <div class=\"row\">
      <div style=\"display:none\" class=\"col-md-2 col-sm-6 hidden-xs\">
        <div class=\"btn-group btn-group-sm\">
          <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
            title=\"";
            // line 59
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
          <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
            title=\"";
            // line 61
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
        </div>
      </div>

      <div class=\"col-md-2 col-xs-6\">
        <div class=\"form-group input-group input-group-sm\">
          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 69
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 69) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 70
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 70);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 70);
                    echo "</option>
            ";
                } else {
                    // line 72
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 72);
                    echo "</option>
            ";
                }
                // line 74
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "          </select>
        </div>
      </div>
      <div style=\"display:none\" class=\"col-md-3 col-xs-6\">
        <div class=\"form-group input-group input-group-sm\">
          <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 80
            echo ($context["text_limit"] ?? null);
            echo "</label>
          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 83
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 83) == ($context["limit"] ?? null))) {
                    // line 84
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 84);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 84);
                    echo "</option>
            ";
                } else {
                    // line 86
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 86);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 86);
                    echo "</option>
            ";
                }
                // line 88
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "          </select>
        </div>
      </div>
    </div>

    <div class=\"row\">
      
      ";
            // line 96
            echo ($context["column_left"] ?? null);
            echo "
    



      <div class=\"col-md-9\">
        <div class=\"row\"> ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 103
                echo "          <div class=\"col-md-4 col-6 mt-4\">
            <div class=\"product-thumb product-card text-center\">
              <div class=\"image image_1\" style=\"height:350px;overflow: hidden;\"><a href=\"";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 105);
                echo "\"><img
                    style=\"    margin-top: -25%;    margin-bottom: -25%;\" src=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                echo "\"
                    alt=\"";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 107);
                echo "\" class=\"img-responsive\" /></a></div>
              <div>
                <div class=\"caption\">
                  <a href=\"";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 110);
                echo "\">
                    <h6 class=\"product_name\" style=\"text-transform: uppercase;\">";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 111);
                echo "</h6>
                  </a>
                  ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                  <p class=\"price mt-2\" style=\"color:#44b394;    font-weight: 500;\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 114)) {
                        // line 115
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 115);
                        echo "
                    ";
                    } else {
                        // line 116
                        echo " <span class=\"price-new\" style=\"color:#44b394;    font-weight: 500;\"> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 116);
                        // line 117
                        echo "</span> <span class=\"price-old\" style=\"    text-decoration: line-through;\"> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 117);
                        // line 118
                        echo "</span> ";
                    }
                    // line 119
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 119)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 119);
                        echo "</span> ";
                    }
                    // line 120
                    echo "                  </p>
                  ";
                }
                // line 122
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 122)) {
                    // line 123
                    echo "                  <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 124
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 124) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i
                        class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            // line 125
                            echo " <span class=\"fa fa-stack\"><i
                          class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 127
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                  ";
                }
                // line 129
                echo "                </div>
              </div>
            </div>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-sm-6 text-left\">";
            // line 139
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-right\">";
            // line 140
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    <br /><br />
    ";
        }
        // line 144
        echo "    ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 145
            echo "    <p class=\"text-center\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    <div class=\"buttons\">
      <div class=\"pull-right\"><a href=\"";
            // line 147
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
    </div>
    ";
        }
        // line 150
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 152
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
";
        // line 155
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 155,  401 => 152,  395 => 150,  387 => 147,  381 => 145,  378 => 144,  371 => 140,  367 => 139,  360 => 134,  350 => 129,  341 => 127,  337 => 125,  331 => 124,  326 => 123,  323 => 122,  319 => 120,  310 => 119,  307 => 118,  304 => 117,  301 => 116,  295 => 115,  292 => 114,  290 => 113,  285 => 111,  281 => 110,  273 => 107,  269 => 106,  265 => 105,  261 => 103,  257 => 102,  248 => 96,  239 => 89,  233 => 88,  225 => 86,  217 => 84,  214 => 83,  210 => 82,  205 => 80,  198 => 75,  192 => 74,  184 => 72,  176 => 70,  173 => 69,  169 => 68,  159 => 61,  154 => 59,  148 => 55,  145 => 54,  142 => 53,  137 => 50,  129 => 47,  118 => 45,  114 => 44,  110 => 42,  105 => 41,  99 => 37,  88 => 35,  84 => 34,  78 => 31,  73 => 30,  71 => 29,  64 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
