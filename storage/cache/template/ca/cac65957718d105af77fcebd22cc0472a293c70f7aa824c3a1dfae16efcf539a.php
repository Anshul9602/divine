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
class __TwigTemplate_8084744660b06e87c8f021487959c5e3b11185751e9757959cb93e2ebf541659 extends \Twig\Template
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
<div class=\"breadcrumb-area hidden-phone\">
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12\">
            <div class=\"breadcrumb-wrap\">
               <nav aria-label=\"breadcrumb\">
                  <ul class=\"breadcrumb\">
                     ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "                     <li class=\"ml-2\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
                     &nbsp;/
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                  </ul>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<br />
<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"contact-message\">
                    <h4 class=\"contact-title\">Send Us A Message</h4>
                    <form id=\"contact-form\" action=\"\" method=\"post\" class=\"contact-form\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"name\" name=\"first_name\" placeholder=\"Name *\" type=\"text\" required=\"\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"phone\" name=\"phone\" placeholder=\"Phone *\" type=\"tel\" maxlength=\"12\" required=\"\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"email\" name=\"email_address\" placeholder=\"Email *\" type=\"email\" required=\"\">
                            </div>
                            <div class=\"col-lg-6 col-md-6 col-sm-6\">
                                <input id=\"subject\" name=\"contact_subject\" placeholder=\"Subject *\" type=\"text\">
                            </div>
                            <div class=\"col-12\">
                                <div class=\"contact2-textarea text-center\">
                                    <textarea id=\"message\" placeholder=\"Message *\" name=\"message\" class=\"form-control2\" required=\"\"></textarea>
                                </div>
                                <div class=\"contact-btn1\">
                                    <button id=\"send_con\" class=\"btn btn-hero\" type=\"submit\">Send Message</button>
                               <br /><br />
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-info\">
                    <h4 class=\"contact-title\">Contact Info</h4>
                    <p>Get in touch with us over email or simply give us a call.</p>
                    <ul>
                        <li><i class=\"fa fa-phone\"></i> +91 98290 65718</li>
                        <li><i class=\"fa fa-envelope-o\"></i>abhinavdhadda@gmail.com</li>
                        <li><i class=\"fa fa-map-pin\"></i>Divine - The Jewellery Lounge<br>
                                    C-10, Prithviraj Road, C-Scheme, Jaipur. 302001 - India </li>
                 
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <script>
    \$(document).ready(function(e) {
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
            return regex.test(email);
        }

        \$(\"#send_con\").click(function(e) {
            e.preventDefault();
            if (\$(\"#email\").val() != \"\" && \$(\"#name\").val() != \"\" && \$(\"#message\").val() != \"\") {
                if (!isEmail(\$(\"#email\").val())) {
                    alert('Invalid Email');
                    return false;
                }
                \$.ajax({
                    url: 'index.php?route=common/contact/send_email',
                    method: 'POST',
                    data: {
                        \"email\": \$(\"#email\").val(),
                        \"phone\": \$(\"#phone\").val(),
                        \"name\": \$(\"#name\").val(),
                        \"message\": \$(\"#message\").val(),
                        \"subject\": \$(\"#subject\").val()
                    },

                    beforeSend: function() {
                        \$(\"#send_con\").attr('disabled', true);
                        \$(\"#send_con\").text('Sending Email . . .');
                    },

                    success: function(data) {

                        alert(\"Thank you for your message, we will be in touch!\");
                        \$(\"#email\").val(\"\");
                        \$(\"#name\").val(\"\");
                        \$(\"#message\").val(\"\");
                        \$(\"#phone\").val(\"\");
                        \$(\"#subject\").val(\"\");

                        \$(\"#send_con\").attr('disabled', false);
                        \$(\"#send_con\").text('Send Email');
                    }

                })
            } else {
                alert(\"Please fill the form completely\");
            }


        })
    });
</script>
";
        // line 123
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
        return array (  176 => 123,  64 => 13,  52 => 10,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/contact.twig", "");
    }
}
