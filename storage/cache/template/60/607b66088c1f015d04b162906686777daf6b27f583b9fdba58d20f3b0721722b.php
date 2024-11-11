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

/* default/template/account/forgotten.twig */
class __TwigTemplate_8194742a922bde64578928b1d07573b5a1f8e53bf8cf83be866902cb182c314d extends \Twig\Template
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
<div id=\"account-forgotten\" class=\"container\">
  <div class=\"breadcrumb-area hidden-phone\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"breadcrumb-wrap\">
            <nav aria-label=\"breadcrumb\">
              <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                <li class=\"ml-2\">
                  <a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a>
                </li>
                &nbsp;/
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 26
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 27
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 29
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 30
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 33
            echo "    ";
        }
        // line 34
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "  text-center\" style=\"min-height: 600px;margin-top:10%;\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h4>";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</h4>

      <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>

          <div class=\"form-group required d-flex justify-content-space-around\">

            <div class=\"col-md-8\">
              <label class=\" control-label\" for=\"input-email\">";
        // line 43
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"
                class=\"form-control\" />
            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 50
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 52
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 56
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
  </div>
</div>
";
        // line 60
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 60,  160 => 56,  153 => 52,  146 => 50,  135 => 44,  131 => 43,  122 => 37,  117 => 35,  110 => 34,  107 => 33,  104 => 32,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  90 => 27,  85 => 26,  79 => 24,  77 => 23,  68 => 16,  56 => 12,  53 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/forgotten.twig", "");
    }
}
