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

/* default/template/information/contact.twig */
class __TwigTemplate_0d92b7b1ce196422acf62f0fe9b487c683cb592be3aded0118cbf34177caf47e extends \Twig\Template
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
<div class=\"container\">
  <!-- contact area start -->
  <div class=\"contact-area section-padding pt-20\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"contact-message\">
            <h4 class=\"contact-title new-font\" style=\"color: black; font-family: 'newfont', sans-serif\">
              Tell Us Your Project
            </h4>
            <form action=\"index.php?route=information/thankyou\" method=\"post\" class=\"contact-form\">
              <div class=\"row\">
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"first_name\" placeholder=\"Name *\" type=\"text\" required />
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"phone\" placeholder=\"Phone *\" type=\"tel\" required />
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"email_address\" placeholder=\"Email *\" type=\"email\" required />
                </div>
                <div class=\"col-lg-6 col-md-6 col-sm-6\">
                  <input name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\" />
                </div>
                <div class=\"col-12\">
                  <div class=\"contact2-textarea text-center\">
                    <textarea placeholder=\"Message *\" name=\"message\" class=\"form-control2\" required=\"\"></textarea>
                  </div>
                  <div class=\"contact-btn\">
                    <button class=\"btn btn-sqr\" type=\"submit\" style=\"background-color: #304C5D;\">
                      <a style=\"color: white\">Send Message</a>
                    </button>
                  </div>
                </div>
                <div class=\"col-12 d-flex justify-content-center\">
                  <p class=\"form-messege\"></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class=\"col-lg-6\">
          <div class=\"contact-info\">
            <h4 class=\"contact-title new-font\" style=\"color: black\">
              Contact Us
            </h4>
            <p class=\"new-font\">
              Need to get in touch with us? Fill out the <br />form with your
              inquiry .
            </p>
            <ul>
              <li>
                <i class=\"fa fa-fax\"></i>
                <p class=\"new-font pb-1\">Address : G-76, ROAD NO. 5, RIICO, CHURU Churu
Rajasthan - 331001
India</p>
              </li>
              <li>
                <i class=\"fa fa-envelope-o\"> </i>
                <p class=\"new-font pb-1\">Email:  support@woodpeel.com</p>
              </li>
              <li>
                <i class=\"fa fa-phone\"></i>
                <p class=\"new-font pb-1\">
                  Customer Care: +91 8905154400 
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact area end -->
  <br /><br />
</div>
";
        // line 81
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 81,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
