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

/* default/template/common/about.twig */
class __TwigTemplate_f9d10ff3c0cc20808c2919ab3c1f053c7d068550def344fd3e1641e697a6724d extends \Twig\Template
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
\t.parallax {
\t\tbackground-image: url('image/divine/2.jpg');
\t\theight: 300px;
\t\twidth: 100%;
\t\tbackground-attachment: fixed;
\t\tbackground-position: center;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: cover;
\t}
   .mobile-banner {
\t\t\tdisplay: none;
\t\t}
\t@media only screen and(max-width: 850px) {
\t\t.parallax {
\t\t\tbackground-attachment: scroll;
\t\t}
      .mobile-banner {
\t\t\tdisplay: block !important;
\t\t}
\t\t.our_prod {
\t\t\ttext-align: center;
\t\t}
\t\t.desktop-banner {
\t\t\tdisplay: none;
\t\t}
\t}
</style>
<div class=\"row\" style=\"margin:0px;\">
\t<div class=\"col-sm-12 desktop-banner\" style=\"padding:0px\">
\t\t<img src=\"image/divine/1.jpg\" alt=\"\" class=\"img-responsive\"/>
\t</div>

\t<div class=\"col-sm-12 mobile-banner\" style=\"padding:0px\">
\t\t<img src=\"image/divine/1.jpg\" alt=\"\" class=\"img-responsive\"/>
\t</div>

</div>
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 offset-sm-3 text-center\">
\t\t\t<br/><br/><br/>
\t\t\t<p style=\"font-size:16px\">
\t\t\t\t
Welcome to Divine, a premier jewellery shop that embodies elegance, craftsmanship, and a touch of the divine. At Divine, we curate and create exquisite jewellery pieces that exude timeless beauty and capture the essence of divine aesthetics
\t\t\t\t<br/><br/>
\t\t\t\tOur collections at Divine have garnered accolades and recognition for their exceptional designs and captivating allure. We are honored to have our masterpieces adorned by leading celebrities, including Bollywood icons like Jhanvi Kapoor, Karishma Kapoor, Tara Sutaria, and many more. Our collaborations with prestigious events such as the Lakme Fashion Week and fashion designers' campaigns with renowned brands have placed Divine on the global map of exquisite jewellery.
\t\t\t</p>
\t\t\t<br/><br/><br/>
\t\t</div>
\t</div>
</div>
<div class=\"parallax\"></div>
<br/><br/>
<div class=\"container\">
\t<div class=\"row\" style=\"display:flex; align-items:center\">
\t\t<div class=\"col-sm-7\">

\t\t\t<p style=\"font-size:16px\" class=\"our_prod\">
\t\t\t\tStep into the world of Divine and explore a treasure trove of divine jewellery creations. Whether you seek a statement piece for a special occasion or a symbol of love and devotion. 
\t\t\t\t<br/>
\t\t\t\t<br/>
\t\t\t\tour knowledgeable and passionate team will guide you in finding the perfect piece that resonates with your unique style and captures the essence of divine beauty.
\t\t\t</p>

\t\t</div>
\t\t<div class=\"col-sm-5\">
\t\t\t<div style=\"border:4px solid #41586D\">
\t\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t\t<img src=\"image/cat1/Necklace_set_1/IMG_8288.jpg\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t<img src=\"image/cat1/Necklace_set_1/IMG_8290.jpg\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t<img src=\"image/cat1/Necklace_set_1/IMG_8293.jpg\" alt=\"\" class=\"img-response slider-img\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/><br/>
";
        // line 81
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/about.twig";
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
        return new Source("", "default/template/common/about.twig", "");
    }
}
