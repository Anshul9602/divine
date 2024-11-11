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

/* default/template/extension/payment/ccavenue.twig */
class __TwigTemplate_1a368fadd17fd827538ebb30c6d24f1c6344ecf276f9b3a14ce13064c583bf0a extends \Twig\Template
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
        if ((($context["checkout_method"] ?? null) == "iframe")) {
            // line 2
            echo "\t<iframe name=\"hss_iframe\" width=\"100%\" height=\"450px\" style=\"border:0px solid #DDDDDD;\" src=\"";
            echo ($context["iframeaction"] ?? null);
            echo "\"></iframe>\t
";
        } else {
            // line 4
            echo "\t<form method=\"post\" action=\"";
            echo ($context["action"] ?? null);
            echo "\" id=\"ccavenueform\" name=\"ccavenueform\">\t\t
\t\t<input type=\"hidden\" name=\"encRequest\" value=\"";
            // line 5
            echo ($context["encrypted_data"] ?? null);
            echo "\"> 
\t\t<input type=\"hidden\" name=\"access_code\" value=\"";
            // line 6
            echo ($context["access_code"] ?? null);
            echo "\">
\t\t <div class=\"buttons\">
\t\t  <div class=\"pull-right\">
\t\t\t<input type=\"submit\" value=\"";
            // line 9
            echo ($context["button_confirm"] ?? null);
            echo "\" id=\"button-confirm\" class=\"btn btn-primary\" />
\t\t  </div>
\t\t</div>
\t</form>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/ccavenue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  54 => 6,  50 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/ccavenue.twig", "");
    }
}
