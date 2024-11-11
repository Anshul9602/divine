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
class __TwigTemplate_5411333a23311c8de0f839db1b2c318e893d060df69d462fc6ab301843979e0a extends \Twig\Template
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
  .ac_menu .col-sm-4 {
    padding: 20px;
    margin: 0px;
    text-align: center;
  }

  .ac_menu .col-sm-4 .col-sm-12 {
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
<div style=\"background:#f1f1f1; border-bottom:thin solid #fff\" class=\"breadcrumb-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"breadcrumb-wrap\">
          <nav aria-label=\"breadcrumb\">
            <ul class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"index.php?route=common/home\"><i class=\"fa fa-home\"></i></a>
              </li>
              <li class=\"breadcrumb-item active\" aria-current=\"page\">account</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->


<div style=\" width:100%; min-height: 600px;\" class=\"container\">



  <div style=\"margin:60px 0px\" class=\"row text-center\">

    <h1 style=\"text-align: center; margin: auto;\" class=\"big\">My Account</h1>


  </div>



  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">

      ";
        // line 66
        echo ($context["content_top"] ?? null);
        echo "



      <div class=\"row ac_menu\">




        <div class=\"col-sm-4\">
          <a class=\"col-sm-12\" href=\"";
        // line 76
        echo ($context["account"] ?? null);
        echo "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon1.png\" /><br />
            <p class=\"atag\">Account
              Details</p>
            <p class=\"ac_description\">Review your personal information.</p> <br />
          </a>
        </div>


        <div class=\"col-sm-4\">
          <a class=\"col-sm-12\" href=\"";
        // line 86
        echo ($context["wishlist"] ?? null);
        echo "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon3.png\" /><br />
            <p class=\"atag\">Wishlist</p>
            <p class=\"ac_description\">Don't lose sight of the articles you like most, access your wishlist here.
            </p>
          </a>
        </div>


        <div class=\"col-sm-4\">
          <a class=\"col-sm-12\" href=\"";
        // line 96
        echo ($context["order"] ?? null);
        echo "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon2.png\" /><br />
            <p class=\"atag\">Order History</p>
            <p class=\"ac_description\">Check the history and current status of your orders.</p>

          </a>

        </div>

       

       







      </div>






    </div>
  </div>

</div>
";
        // line 126
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
        return array (  177 => 126,  144 => 96,  131 => 86,  118 => 76,  105 => 66,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/account.twig", "");
    }
}
