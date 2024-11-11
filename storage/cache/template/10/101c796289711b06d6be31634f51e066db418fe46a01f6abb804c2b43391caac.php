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
class __TwigTemplate_f2c2b5c911aad4baf5c1f5fc5edd128063b9b92183aa3f28990a9bd284307bc1 extends \Twig\Template
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
   
   color:#fff !important;
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
.footer1 .fa{
  background-color:#fff;
  color: black;
  margin: 20px;
    padding: 10px;
    border-radius: 20px;
}
</style>
<footer>
   <div class=\"container\">
      <div class=\"row justify-content-space-around\">
         <div class=\"col-lg-3 col-6\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title \">USEFUL LINKS</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li> <a href=\"index.php?route=common/aboutus\">About Us</a></li>                    
                     <li><a href=\"index.php?route=information/contact\">Shop With Us</a></li>
                     <li><a href=\"index.php?route=information/contact\">Contact</a></li>
                   
                     <br> <br>
                  </ul>
               </div>
            </div>
         </div>
         <div class=\"col-lg-3 col-6\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title\">MY ACCOUNT</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     
                    <li> <a href=\"index.php?route=information/information&amp;information_id=6\">My Account</a></li>
                     
                     <li><a href=\"\">Order History</a></li>
                     <li><a href=\"\">Wishlist</a></li>
                   
                     <br> <br>
                  </ul>
               </div>
            </div>
         </div>
       
         <div class=\"col-lg-3 col-8\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title\">NEED HELP?  </h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\"> 
                     <li><a href=\"\">Returns & Cancellations</a></li>
                     <li><a href=\"index.php?route=information/information&amp;information_id=3\">Privacy Policy</a>
                     </li>
                     <li><a href=\"index.php?route=information/information&amp;information_id=3\">Terms & Conditions</a>
                     </li>
                     <li> <a href=\"index.php?route=information/information&amp;information_id=6\">Shipping Policy</a></li>      
                     <br> <br>
                  </ul>
               </div>
            </div>
         </div>
         <div class=\"col-md-12 col-4 text-center footer1\">
         
            <a target=\"_blank\" href=\"https://www.facebook.com/people/Divine-Jewellery-Lounge/100054199823805/\"><i class=\"fa fa-facebook\"style=\"margin-top: 10px;\"></i></a>
                     <a target=\"_blank\" href=\"https://instagram.com/divinejewellerylounge?igshid=MzRlODBiNWFlZA==\"><i class=\"fa fa-instagram\"style=\"margin-top: 10px;\"></i></a>
                     
         </div>
      </div>

      <hr>
      <p class=\"text-center\">All Rights Reserved - Divine © 2023</p>
   </div>
</footer>
";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 98
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 98);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 98);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 98);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 101
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
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
        return array (  165 => 103,  156 => 101,  152 => 100,  139 => 98,  135 => 97,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
