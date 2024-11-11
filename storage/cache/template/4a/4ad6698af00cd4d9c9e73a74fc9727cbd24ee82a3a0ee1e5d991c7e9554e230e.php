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
class __TwigTemplate_9caf242b4d48ce13f3ed258090a6b33fb1427198c9d8ca21c3993ed5d7b128ff extends \Twig\Template
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

  .footer-heading {
  color:#fff;
  font-size:16px;
  }

    .hb1::after {
        content: \"\";
        position: initial;
        display: block;
        width: 40px;
        height: 2px;
        margin-top: 5px;
        background:#f3f3f3;
        bottom: 0;
        left: calc(50% - 20px);
    }
    .footer-row .col-sm-3 ul{
      margin-top:15px;
    }
    .footer-row .col-sm-3 ul li a{
      color:#f1f1f1;
    }
    .f1{
      font-size:22px;
    }
</style>

<footer style=\"background-image:url('assets/img/back.jpg'); padding:40px 0px  10px; 0px\">
<div  >
  <div class=\"container\">
    <div class=\"row footer-row\">
       <div class=\"col-sm-3 col-6\">
        <h5 class=\"footer-heading\">Useful links<span class=\"hb1\"></span></h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 37
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"#\">About Us</a></li>
          
         
          <li><a href=\"#\">Client Diaries</a></li>

          <li><a href=\"";
        // line 43
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3 col-6\">
        <h5 class=\"footer-heading\">Categories<span class=\"hb1\" ></span></h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"index.php?route=common/Furniture\">Furniture</a></li>
          <li><a href=\"index.php?route=common/category&path=82\">Living </a></li>
          <li><a href=\"index.php?route=common/category&path=83\">Bedroom</a></li>
          <li><a href=\"index.php?route=common/category&path=86\">Dining</a></li>
          <li><a href=\"index.php?route=common/category&path=85\">Study & Office</a></li>
          <li><a href=\"index.php?route=common/category&path=84\">Enteryway</a></li>
          <li><a href=\"index.php?route=common/category&path=81\">Decor & Accessories </a></li>
        </ul>
      </div>
      ";
        // line 58
        if (($context["informations"] ?? null)) {
            // line 59
            echo "      <div class=\"col-sm-3 col-6\">
        <h5 class=\"footer-heading\">Need Help?<span class=\"hb1\" ></span></h5>
        <ul class=\"list-unstyled\">
         ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 63
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 63);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 63);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    
        </ul>
      </div>
      ";
        }
        // line 69
        echo "      
      
      <div class=\"col-sm-3 col-6\">
        <h5 class=\"footer-heading\">";
        // line 72
        echo ($context["text_account"] ?? null);
        echo "<span class=\"hb1\" ></span></h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 74
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 75
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 76
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 77
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          <li class=\"row mt-2\">
           <div class=\"col-md-2\">
           <a href=\"#\" >

           <i class=\"fa fa-facebook f1\" aria-hidden=\"true\"></i></a>
           </div>
           <div class=\"col-md-2\">
           <a href=\"#\" >
           <i class=\"fa fa-instagram f1 \"></i></a>
           </div>
           <div class=\"col-md-2\">
           <a href=\"#\" >
           <i class=\"fa fa-twitter f1\"></i></a>
           </div>
           <div class=\"col-md-2\">
           <a href=\"#\" >
           <i class=\"fa fa-pinterest f1\"></i></a>
           </div>


          </li>
        </ul>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-sm-12\">
      <p class=\"text-center mt-3\" style=\" font-size:12px; color:#f1f1f1; padding:5px;font-weight: 400;\">
      Copyright © 2023, Woodpeel. All rights reserved. 
      </p>
      </div>
    </div>

</div>
</footer>

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/640f5c3c4247f20fefe5a90b/1gre00jd3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 128
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 128);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 128);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 128);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 131
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "

 <!-- Modernizer JS -->
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
    <script src=\"assets/js/main.js?v1.1\"></script>

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
        return array (  247 => 133,  238 => 131,  234 => 130,  221 => 128,  217 => 127,  162 => 77,  156 => 76,  150 => 75,  144 => 74,  139 => 72,  134 => 69,  128 => 65,  117 => 63,  113 => 62,  108 => 59,  106 => 58,  86 => 43,  75 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
