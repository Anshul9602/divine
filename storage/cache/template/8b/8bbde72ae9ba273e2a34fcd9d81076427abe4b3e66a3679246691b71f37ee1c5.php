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
class __TwigTemplate_ab37a4c4451f4b9c66b124b920b28090b9ec1db01cedd56b8383f9c19f67e20b extends \Twig\Template
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

\t.footer-heading {
\t\tcolor: #fff;
\t\tfont-size: 16px;
\t}

\t.hb1::after {
\t\tcontent: \"\";
\t\tposition: initial;
\t\tdisplay: block;
\t\twidth: 40px;
\t\theight: 2px;
\t\tmargin-top: 5px;
\t\tbackground: #f3f3f3;
\t\tbottom: 0;
\t\tleft: calc(50% - 20px);
\t}
\t.footer-row .col-sm-3 ul {
\t\tmargin-top: 15px;
\t}
\t.footer-row .col-sm-3 ul li a {
\t\tcolor: #f1f1f1;
\t}
\t.f1 {
\t\tfont-size: 22px;
\t}
</style>

<footer style=\"background-image:url('assets/img/back.jpg');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-size:cover;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-repete:no-repete;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t padding:40px 0px  10px; 0px\">
\t<div class=\"contanier\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row footer-row\">
\t\t\t\t<div class=\"col-sm-3 col-6 mt-2\">
\t\t\t\t\t<h5 class=\"footer-heading\">Useful links<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 42
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=information/about\">About Us</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"#\">Client Diaries</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-6 mt-2\">
\t\t\t\t\t<h5 class=\"footer-heading\">Categories<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/Furniture\">Furniture</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/category&path=82\">Living
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/category&path=83\">Bedroom</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/category&path=86\">Dining</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/category&path=85\">Study & Office</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/category&path=84\">Enteryway</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/category&path=81\">Decor & Accessories
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t";
        // line 87
        if (($context["informations"] ?? null)) {
            // line 88
            echo "\t\t\t\t\t<div class=\"col-sm-3 col-6\">
\t\t\t\t\t\t<h5 class=\"footer-heading\">Need Help?<span class=\"hb1\"></span>
\t\t\t\t\t\t</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 93
                echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 94);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 94);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 101
        echo "

\t\t\t\t<div class=\"col-sm-3 col-6 mt-2\">
\t\t\t\t\t<h5 class=\"footer-heading\">";
        // line 104
        echo ($context["text_account"] ?? null);
        echo "<span class=\"hb1\"></span>
\t\t\t\t\t</h5>
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 108
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 111
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 114
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 117
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"row mt-2\">
\t\t\t\t\t\t\t<div class=\"col-md-2 col-2\">
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/profile.php?id=100090183586367&mibextid=LQQJ4d\">

\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook f1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 col-2\">
\t\t\t\t\t\t\t\t<a href=\"https://instagram.com/woodpeel?igshid=YmMyMTA2M2Y=\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram f1 \"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 col-2\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter f1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2 col-2\">
\t\t\t\t\t\t\t\t<a href=\"https://pin.it/4JOe1ig\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pinterest f1\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<p id=\"demo\"></p>
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<p class=\"text-center mt-3\" style=\" font-size:12px; color:#f1f1f1; padding:5px;font-weight: 400;\">
\t\t\t\t\t\tCopyright © 2023, Woodpeel. All rights reserved.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>

\t<!--Start of Tawk.to Script-->
\t<script type=\"text/javascript\">
\t\tvar Tawk_API = Tawk_API || {},
Tawk_LoadStart = new Date();
(function () {
var s1 = document.createElement(\"script\"),
s0 = document.getElementsByTagName(\"script\")[0];
s1.async = true;
s1.src = 'https://embed.tawk.to/640f5c3c4247f20fefe5a90b/1gre00jd3';
s1.charset = 'UTF-8';
s1.setAttribute('crossorigin', '*');
s0.parentNode.insertBefore(s1, s0);
})();

\$(\"\").click(function () {
localStorage.setItem(\"product-id\",);
});


document.getElementById(\"demo\").innerHTML = localStorage.getItem(\"lastname\");
\t</script>
\t<!--End of Tawk.to Script-->

\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 183
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 183);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 183);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 183);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 186
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "

\t<!-- Modernizer JS -->
\t<script src=\"assets/js/vendor/modernizr-3.6.0.min.js\"></script>
\t<!-- Popper JS -->
\t<script src=\"assets/js/vendor/popper.min.js\"></script>
\t<!-- Bootstrap JS -->
\t<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
\t<!-- slick Slider JS -->
\t<script src=\"assets/js/plugins/slick.min.js\"></script>
\t<!-- Countdown JS -->
\t<script src=\"assets/js/plugins/countdown.min.js\"></script>
\t<!-- Nice Select JS -->
\t<script src=\"assets/js/plugins/nice-select.min.js\"></script>
\t<!-- jquery UI JS -->
\t<script src=\"assets/js/plugins/jqueryui.min.js\"></script>
\t<!-- Image zoom JS -->
\t<script src=\"assets/js/plugins/image-zoom.min.js\"></script>
\t<!-- Imagesloaded JS -->
\t<script src=\"assets/js/plugins/imagesloaded.pkgd.min.js\"></script>
\t<!-- Instagram feed JS -->
\t<script src=\"assets/js/plugins/instagramfeed.min.js\"></script>
\t<!-- mailchimp active js -->
\t<script src=\"assets/js/plugins/ajaxchimp.js\"></script>
\t<!-- contact form dynamic js -->
\t<script src=\"assets/js/plugins/ajax-mail.js\"></script>
\t<!-- google map api -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8\"></script>
\t<!-- google map active js -->
\t<script src=\"assets/js/plugins/google-map.js\"></script>
\t<!-- Main JS -->
\t<script src=\"assets/js/main.js?v1.1\"></script>

</body></html>
";
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
        return array (  304 => 188,  295 => 186,  290 => 185,  277 => 183,  273 => 182,  203 => 117,  195 => 114,  187 => 111,  179 => 108,  172 => 104,  167 => 101,  161 => 97,  150 => 94,  147 => 93,  143 => 92,  137 => 88,  135 => 87,  97 => 54,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
