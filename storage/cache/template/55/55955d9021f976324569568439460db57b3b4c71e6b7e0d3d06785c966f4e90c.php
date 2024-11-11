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

/* default/template/common/footer.twig */
class __TwigTemplate_5aa71de7dd7b38d529669dd09c8a5360afb9ae743b6c0f3dedbfedbf4d718eac extends \Twig\Template
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
        echo "<style>
   @media screen and (max-width:650px) {
      .info-heading{
      margin-top:20px;
   }
   }
  .widget-title {
   
   color:#729cb5 !important;
  }
  
  .new_fot .widget-title{
       border-bottom: 1px solid #e6e6e6;
       padding-bottom:10px;
      
  }
  .info-list {
    display: grid;
    grid-template-columns: none;
}
  .info-list nav ul li{
padding:0px !important;
}
  .info-list nav ul li a:first-child{
    margin-left: 0px!important;
}
</style>
<footer>
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-lg-3\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title info-heading\">About Divine</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li> <a href=\"index.php?route=common/aboutus\">About Us</a></li>
                     <li><a href=\"index.php?route=information/information&amp;information_id=3\">privacy
                        policy</a>
                     </li>
                     <li><a href=\"index.php?route=information/contact\">contact</a></li>
                   
                     <br> <br>
                  </ul>
               </div>
            </div>
         </div>
         <div class=\"col-lg-3\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title\">Client Services</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li> <a href=\"\">Payment</a></li>
                    <li> <a href=\"index.php?route=information/information&amp;information_id=6\">Shipping & Returns</a></li>
                     
                     <li><a href=\"\">In Store Pick Up</a>
                     </li>
                     <li><a href=\"\">Complimentary Packaging</a></li>
                     <li><a href=\"\">Wholesale Orders</a></li>
                     <li><a href=\"\">Customization/Personalization</a></li>
                   
                     <br> <br>
                  </ul>
               </div>
            </div>
         </div>
         <div class=\"col-lg-3\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title\">Terms & Conditions</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li> <a href=\"\">Insurance & Shipping In India</a></li>
                    <li> <a href=\"\">International Shipping & Insurance</a></li>
                     
                     <li><a href=\"\">Wholesale Orders Policy</a>
                     </li>
                     <li><a href=\"\">Lifetime Exchange Policy</a></li>
                     <li><a href=\"\">Cancellation Policy</a></li>

                   
                     <br> <br>
                  </ul>
               </div>
            </div>
         </div>
         
      </div>
      <hr>
      <p class=\"text-center\">All Rights Reserved - Divine © 2023</p>
   </div>
</footer>
";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 92
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 92);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 92);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 92);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 95
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "<!-- Modernizer JS -->
<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>
<!-- Popper JS -->
<script src=\"assets/js/vendor/popper.min.js\"></script>
<!-- Bootstrap JS -->
<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
<!-- slick Slider JS -->
<script src=\"assets/js/plugins/slick.min.js\"></script>
<!-- Countdown JS -->
<script src=\"assets/js/plugins/countdown.min.js\"></script>
<!-- Nice Select JS -->
<script src=\"assets/js/plugins/nice-select.min.js\"></script>
<!-- jquery UI JS -->
<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
<!-- Image zoom JS -->
<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
<!-- Imagesloaded JS -->
<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
<!-- Instagram feed JS -->
<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
<!-- mailchimp active js -->
<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
<!-- contact form dynamic js -->
<script src=\"assets/js/plugins/ajax-mail.js\"></script>
<!-- google map api -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
<!-- google map active js -->
<script src=\"assets/js/plugins/google-map.js\"></script>
<!-- Main JS -->
<script src=\"assets/js/main.js\"></script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 97,  150 => 95,  146 => 94,  133 => 92,  129 => 91,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
