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

/* default/template/information/about.twig */
class __TwigTemplate_f87cb16a577035d2d5605640738f0fed5d2fb9d6edba77be9db53570b280d90c extends \Twig\Template
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

<!-- breadcrumb area end -->
\t<div
\tclass=\"container\"> <!-- contact area start -->
\t<div class=\"contact-area section-padding pt-20\">
\t\t<div class=\"container\">
\t\t\t<h3 class=\"contact-title new-font\" style=\"color: black; font-family: 'newfont', sans-serif\">
\t\t\t\tAbout Us
\t\t\t</h3><br>
\t\t\t<h6 class=\"contact-title new-font\" style=\"color: black; font-family: 'newfont', sans-serif\">
\t\t\t\tWOODPEEL FURNITURE AND LIVINGSTYLES PRIVATE LIMITED
\t\t\t</h6>
\t\t\t<p class=\"new-font\">With the experience of 40 years in manufacturing of solid wood furniture and accessories, We were serving our customers with our top quality products through other retail chain and online platforms across the world.</p><br><br>
\t\t\t<p class=\"new-font\">Now We have launched our brand Woodpeel to sell our products directly to consumers, So that we can serve them better and long-time as our product last for long.

\t\t\t</p>
\t\t\t<p class=\"new-font\">Our vision is to be the first preference and trustful brand where an urban Indian shop furniture, furnishings and home décor products.<br>
\t\t\t\tWe are focused to earn the trust and work to provide customer satisfaction beyond the expectation. We offer handcrafted products with high quality material used and following the latest trend; hence each piece is personally checked for quality assurance. We provide best ever- hassle free experience of buying furniture online. Our support team is trained to assist the customer more than expectations.
\t\t\t\t<br><br>
\t\t\t\tHave a review of our product category and Experience product and service by purchasing
\t\t\t</p>

\t\t</div>
\t</div>
\t<!-- contact area end -->
\t<br/><br/>
</div>
";
        // line 30
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/about.twig", "");
    }
}
