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
class __TwigTemplate_e1828b5763161582ceb2e5258880eebf3904e612d85de5d7c3c71cbad9e0c05c extends \Twig\Template
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


\t.new-font {
\t\tfont-size: 16px;
\t\tline-height: 2;
\t}
\t@media only screen and(max-width: 769.98px) {
\t\t.new-font {
\t\t\tfont-size: 14px !important;
\t\t}
\t}
</style>

<!-- breadcrumb area start -->
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<!-- breadcrumb area end -->
<div
\tclass=\"container\">
\t<!-- contact area start -->
\t<div class=\"contact-area section-padding pt-20\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"contact-title \" style=\"color:#f06639; font-family: 'newfont', sans-serif;\">
\t\t\t\tAbout Us<span class=\"hb\" style=\"\"></span>
\t\t\t</h1><br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 mt-3\" style=\"  \">

\t\t\t\t\t<h6 class=\"contact-title new-font \" style=\" line-height: 1.5;font-weight: 600;color: black; font-family: 'newfont', sans-serif\">
\t\t\t\t\t\tWOODPEEL FURNITURE AND LIVINGSTYLES PRIVATE LIMITED
\t\t\t\t\t</h6>
\t\t\t\t\t<p class=\"new-font \">With the experience of 40 years in manufacturing of solid wood furniture and accessories, We were serving our customers with our top quality products through other retail chain and online platforms across the world.</p><br>
\t\t\t\t\t<p class=\"new-font\">Now We have launched our brand Woodpeel to sell our products directly to consumers, So that we can serve them better and long-time as our product last for long.</p>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 mt-3\">
\t\t\t\t<img src=\"assets/img/about-us-image.jpg\">
\t\t\t</div>
\t\t</div>
\t\t<h2 class=\"contact-title\" style=\"color:black; font-family: 'newfont', sans-serif;\">
\t\t\tVision<span class=\"hb\" style=\"\"></span>
\t\t</h2>
\t\t<p class=\"new-font mt-5\">Our vision is to be the first preference and trustful brand where an urban Indian shop furniture, furnishings and home décor products.<br>
\t\t\tWe are focused to earn the trust and work to provide customer satisfaction beyond the expectation. We offer handcrafted products with high quality material used and following the latest trend; hence each piece is personally checked for quality assurance. We provide best ever- hassle free experience of buying furniture online. Our support team is trained to assist the customer more than expectations.
\t\t\t<br><br>

\t\t</p>

\t</div>
</div>
<!-- contact area end -->
<br/><br/></div>";
        // line 73
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
        return array (  127 => 73,  82 => 30,  70 => 26,  67 => 25,  63 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/about.twig", "");
    }
}
