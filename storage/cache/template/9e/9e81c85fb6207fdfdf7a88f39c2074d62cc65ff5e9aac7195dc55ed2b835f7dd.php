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
class __TwigTemplate_1aea989c80be28846defecbccfb045f0bd93457a744b68397c6523590388e10f extends \Twig\Template
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
  
</style>
<footer>
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-lg-3 \">
            <div class=\"widget-body\">
               <h4 class=\"widget-title mt-10\">Crafting luxury home decor items with love.</h4>
               <img src=\"image/payment.png\" alt=\"\" class=\"img-responsive\">    
            </div>
         </div>
         <div class=\"col-lg-3\">
            <div class=\"widget-item\">
               <h4 class=\"widget-title info-heading\">Information</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li> <a href=\"index.php?route=common/aboutus\">About</a></li>
                     <li> <a href=\"index.php?route=information/information&amp;information_id=6\">Shipping & Returns</a></li>
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
               <h4 class=\"widget-title\">Contact Us</h4>
               <div class=\"widget-body\">
                  <ul class=\"info-list\">
                     <li><i class=\"pe-7s-mail\"></i> <a href=\"mailto:info@merakielegance.com\">info@exam.com </a></li>
                     <br />
                     <li><i class=\"pe-7s-call\"></i> <a href=\"tel:+91 98298 66746\">+91 111111111</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class=\"col-lg-3 \">
            <div class=\"widget-item\">
               <h4 class=\"widget-title info-heading\">Subscribe</h4>
               <div class=\"widget-body social-link\">
                  <div class=\"row\">
                  <div class=\"col-sm-12 col-12\">
                    <input type=\"text\" placeholder=\"Your Email\" class=\"subscribe-box\">
                     <button class=\"subscribe-btn\"><li class=\"fa fa-arrow-right\"></li></button>
               
                  </div>
                  </div>
                  <div class=\"row\">
                     <div class=\"col-sm-12\">
                     <a target=\"_blank\" href=\"https://www.facebook.com/\" style=\"display: inline-grid;align-items: center;\"><i class=\"fa fa-facebook\"></i></a>
                     <a target=\"_blank\" href=\"https://www.instagram.com/\"style=\"display: inline-grid;align-items: center;\"><i class=\"fa fa-instagram\"></i></a>
                     <a target=\"_blank\" href=\"https://www.youtube.com/\"style=\"display: inline-grid;align-items: center;\"><i class=\"fa fa-youtube\"></i></a>
                
                     </div>
                   </div>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <p class=\"text-center\">All Rights Reserved - Meraki © 2023</p>
   </div>
</footer>
";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 75
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 75);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 75);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 75);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 78
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return array (  142 => 80,  133 => 78,  129 => 77,  116 => 75,  112 => 74,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
