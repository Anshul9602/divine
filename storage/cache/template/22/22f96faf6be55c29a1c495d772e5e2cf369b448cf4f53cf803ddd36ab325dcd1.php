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

/* default/template/account/login.twig */
class __TwigTemplate_a11f87ada232708ea8c25ca2af085643d22585ac739989cd64d888fe239e4876 extends \Twig\Template
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
<!-- breadcrumb area start -->
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
            echo "    <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>&nbsp;/
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>

          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<br />
<div style=\"width: 100%\" class=\"container\">
  ";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "    <style>
      .error_hand {
        border: thin solid #B15153
      }
    </style>
    ";
        }
        // line 30
        echo "

  <div style=\"margin-top: 40px;\" class=\"row\">
    <div class=\"col-sm-12\">

      <br /><br />
      <div style=\"text-align: center ; background: #f1f1f1; margin-bottom: 50px;padding: 20px;\" class=\"col-sm-4 offset-sm-4\">

        <div class=\"well\">


          <h2>Sign in to your account</h2>

          <br />
          <form action=\"";
        // line 44
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

            <div class=\"form-group\">
              <div class=\"row\">
                <div class=\"col-sm-10 offset-sm-1\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 49
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"Email *\" id=\"input-email\" class=\"form-control error_hand\" />
                </div>
              </div>
            </div>

            <div class=\"form-group\">
              <div class=\"row\">
                <div class=\"col-sm-10 offset-sm-1\">
                  <input type=\"password\" name=\"password\" value=\"";
        // line 57
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"Password *\" id=\"input-password\" class=\"form-control error_hand\" />

                </div>
              </div>

            </div>
            <div class=\"row\">
              <div class=\"col-sm-10 offset-sm-1\">
                <button style=\"margin-top:5px; width:100%\" class=\"btn btn-primary\" type=\"submit\">&nbsp;&nbsp;&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;&nbsp;</button>
              </div>
            </div>

            <br /><a style=\"color:#333\" href=\"";
        // line 69
        echo ($context["forgotten"] ?? null);
        echo "\"><u>FORGOTTEN YOUR PASSWORD ?</u></a>

            ";
        // line 71
        if (($context["redirect"] ?? null)) {
            // line 72
            echo "
              <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 73
            echo ($context["redirect"] ?? null);
            echo "\" />

              ";
        }
        // line 76
        echo "            <p style=\"text-transform:uppercase;\">Don't have an account? <a style=\"margin-top: 10px; text-decoration:underline; color:#4A4A4A\" href=\"";
        echo ($context["register"] ?? null);
        echo "\">Register Here</a> </p>




            ";
        // line 81
        echo ($context["content_bottom"] ?? null);
        echo "

          </form>

        </div>

      </div>
      <br /><br />
    </div>
   

  </div>
   ";
        // line 93
        if (($context["error_warning"] ?? null)) {
            // line 94
            echo "      <div style=\"text-align:center\" class=\"row\">
        <div class=\"col-sm-6 offset-sm-3\">
          <p style=\"color:#A44446; margin-top:-70px\">Your Email address or password is incorrect or not registered.</p>

        </div>

      </div>
      ";
        }
        // line 102
        echo "</div>
</div>

";
        // line 105
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 105,  188 => 102,  178 => 94,  176 => 93,  161 => 81,  152 => 76,  146 => 73,  143 => 72,  141 => 71,  136 => 69,  121 => 57,  110 => 49,  102 => 44,  86 => 30,  78 => 24,  76 => 23,  64 => 13,  53 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
