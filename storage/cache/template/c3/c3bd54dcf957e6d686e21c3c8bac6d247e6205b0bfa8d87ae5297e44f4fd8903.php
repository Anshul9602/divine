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

/* default/template/common/menu.twig */
class __TwigTemplate_d0d53a850e82ceb004dc72b87d86940f473cd604698e71f73e1f7457d6f43a9a extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<nav class=\"desktop-menu text-center\">
  <ul class=\"header-style-4 text-center justify-content-center\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "    <li class=\"dropdown\" style=\"padding:35px 0px;\">
      <a href=\"\" class=\"dropdown-toggle \">";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 7);
                    echo "</a>
      <ul class=\"dropdown\">
        <div class=\"row\" style=\"width: 100%;\">
          <div class=\"col-md-6 p-3 text-start\">
            ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 11), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 12
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 13
                            echo "            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 13) == "View All")) {
                                // line 14
                                echo "            <li class=\"text-start\" style=\"text-align: start;\"><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 14);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 14);
                                echo "&#8594</a></li>
            ";
                            } else {
                                // line 16
                                echo "            <li class=\"text-start\" style=\"text-align: start;\"><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 16);
                                echo "</a></li>
            ";
                            }
                            // line 18
                            echo "            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 19
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "          </div>
          <div class=\"col-md-6 p-3\" style=\"margin-bottom:15px;margin-top:15px;\">
            <img src=\"";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 22);
                    echo "\" alt=\"\" style=\"width:100%;\">
          </div>
        </div>

      </ul>
    </li>
    ";
                } else {
                    // line 29
                    echo "    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                    echo "</a></li>
    ";
                }
                // line 31
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
  </ul>
</nav>

";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  122 => 31,  114 => 29,  104 => 22,  100 => 20,  94 => 19,  88 => 18,  80 => 16,  72 => 14,  69 => 13,  64 => 12,  60 => 11,  53 => 7,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
