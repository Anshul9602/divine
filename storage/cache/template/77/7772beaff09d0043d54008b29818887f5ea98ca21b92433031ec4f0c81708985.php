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
class __TwigTemplate_81d26419e9fdeaa822d5c0f8f717a40899835b5fc7a2bcdd13a9c9f20c1aefce extends \Twig\Template
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
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
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
\t\t\t<h1 class=\"contact-title new-font\" style=\"color:#f06639; font-family: 'newfont', sans-serif;\">
\t\t\t\tAbout Us<span class=\"hb\" style=\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    text-align: -webkit-center;\"></span>
\t\t\t</h1><br>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\" style=\"    margin: auto;\">

\t\t\t\t\t<h6 class=\"contact-title new-font\" style=\"font-weight: 600;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcolor: black; font-family: 'newfont', sans-serif\">
\t\t\t\t\t\tWOODPEEL FURNITURE AND LIVINGSTYLES PRIVATE LIMITED
\t\t\t\t\t</h6>
\t\t\t\t\t<p class=\"new-font\">With the experience of 40 years in manufacturing of solid wood furniture and accessories, We were serving our customers with our top quality products through other retail chain and online platforms across the world.</p><br><br>
\t\t\t\t\t<p class=\"new-font\">Now We have launched our brand Woodpeel to sell our products directly to consumers, So that we can serve them better and long-time as our product last for long.</p>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"assets/img/about-us-image.jpg\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</p>
\t\t<p class=\"new-font mt-5\">Our vision is to be the first preference and trustful brand where an urban Indian shop furniture, furnishings and home décor products.<br>
\t\t\tWe are focused to earn the trust and work to provide customer satisfaction beyond the expectation. We offer handcrafted products with high quality material used and following the latest trend; hence each piece is personally checked for quality assurance. We provide best ever- hassle free experience of buying furniture online. Our support team is trained to assist the customer more than expectations.
\t\t\t<br><br>

\t\t</p>

\t</div>
</div>
<!-- contact area end -->
<br/><br/></div>";
        // line 59
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
        return array (  113 => 59,  68 => 16,  56 => 12,  53 => 11,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/about.twig", "");
    }
}
