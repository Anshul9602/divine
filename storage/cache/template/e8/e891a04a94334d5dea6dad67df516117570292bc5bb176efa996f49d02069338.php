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

/* default/template/account/account.twig */
class __TwigTemplate_2fec008667eadca124f9b5402c0b90f8af070da35acd75689cbb06fd34e7d739 extends \Twig\Template
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
  .ac_menu .col-sm-3 {
    padding: 20px;
    margin: 0px;
    text-align: center;
  }

  .ac_menu .col-sm-3 .col-sm-12 {
    border: thin solid #ccc;
    padding: 10px;
    height: 228px
  }

  .col-sm-12 .atag {
    font-size: 18px;
    color: #525252
  }

  .ac_description {
    margin-top: 12px;
    font-weight: 300 !important;
    color: #333
  }
</style>
<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

<!-- breadcrumb area start -->
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 39);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 39);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- breadcrumb area end -->


<div style=\" width:100%; min-height: 600px;\" class=\"container\">



  <div style=\"margin:60px 0px\" class=\"row text-center\">

    <h1 style=\"text-align: center; margin: auto;\" class=\"big\">My Account</h1>


  </div>



  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">

      ";
        // line 69
        echo ($context["content_top"] ?? null);
        echo "



      <div class=\"row ac_menu\">




        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 79
        echo ($context["account"] ?? null);
        echo "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon1.png\" /><br />
            <p class=\"atag\">Account
              Details</p>
            <p class=\"ac_description\">Review your personal information.</p> <br />
          </a>
        </div>


        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 89
        echo ($context["wishlist"] ?? null);
        echo "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon3.png\" /><br />
            <p class=\"atag\">Wishlist</p>
            <p class=\"ac_description\">Don't lose sight of the articles you like most, access your wishlist here.
            </p>
          </a>
        </div>


        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 99
        echo ($context["order"] ?? null);
        echo "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon2.png\" /><br />
            <p class=\"atag\">Order History</p>
            <p class=\"ac_description\">Check the history and current status of your orders.</p>

          </a>

        </div>

        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"index.php?route=account/quotation\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon4.png\" /><br />
            <p class=\"atag\">Quotation History</p>
            <p class=\"ac_description\">Check the history of your quotations.</p>

          </a>

        </div>

        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"index.php?route=account/draft\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon5.png\" /><br />
            <p class=\"atag\">Saved Drafts</p>
            <p class=\"ac_description\">Check your saved drafts.</p>

          </a>

        </div>







      </div>






    </div>
  </div>

</div>
";
        // line 145
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 145,  162 => 99,  149 => 89,  136 => 79,  123 => 69,  95 => 43,  83 => 39,  80 => 38,  76 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/account.twig", "");
    }
}
