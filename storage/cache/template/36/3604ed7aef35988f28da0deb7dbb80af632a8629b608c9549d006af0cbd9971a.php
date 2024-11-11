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

/* default/template/common/home.twig */
class __TwigTemplate_d0e9cd682f881fde9a40b36e4d9f7198aeef4fbcd0868514050fae3e219bf85c extends \Twig\Template
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
.section{
padding-top: 1.5rem; padding-bottom:0.5rem;
}
.take_img{
\tposition: absolute;
    top: -50px;
    height: 350px;
    left: 10%;

}

</style>
<script src=\"
\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\t\"></script>
<link href=\"
\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\t\" rel=\"stylesheet\">
<!-- hero slider area start -->
<section class=\"slider-area\">

\t<div class=\"row\">
\t\t<div class=\"slider_banner \"style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 28
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 28);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 29);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>
<!-- hero slider area end -->


<!--New arrivals -->
<section class=\"new-arrivals mt-4\">
\t<div class=\"\" style=\"padding:0 5%;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<br />
\t\t\t\t<h2>Shine. Sparkle. Succeed</h2>

\t\t\t\t<br />
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shine_img"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 55
            echo "
\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t<div class=\"product-card text-center\" style=\"height:100%;\">
\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
            echo "\">
\t\t\t\t\t\t
\t\t\t\t\t\t<img src=\"";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60);
            echo "\" alt=\"\" height=\"100%\" class=\"img-responsive\">
\t\t\t\t\t\t
\t\t\t\t\t</a>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</div>

\t</div>
</section>
<!--New arrivals -->
<section class=\"slider-area section\">
\t<div class=\"row\">
\t\t<div class=\"col-12 text-center\">
\t\t\t
\t\t\t<br />
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"slider_banner \" style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 83
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 83);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 84);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>


<!---Shop by room------>

<section class=\"section\">


\t<div class=\"container \">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center\">Shop By Category</h2>
\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 106
            echo "
\t\t\t\t\t<div class=\"col-md-3 col-6\" >
\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 109);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 110);
            echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"color: #729cb5 !important;\">";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
            echo "</h4>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!---Shop by room------>

<section class=\"section\">

\t<div class=\"\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center\">Customize Your Own Jewellery</h2>
\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t<img src=\"image/banner/Divine_Banner_2.jpg\" alt=\"\" width=\"100%\" class=\"img-responsive\">
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section\">

\t<div class=\"container mb-3\" >
\t\t<div class=\"row justify-content-space-around\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"image/banner/c2.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<img src=\"image/banner/c3.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-start mt-3\">
\t\t\t\t<h1 class=\"elementor-heading-title elementor-size-default text-start\" >Our
\t\t\t\t\tStory</h1>
\t\t\t\t\t<br>
\t\t\t\t<h4 class=\"elementor-heading-title elementor-size-default text-start mt-2\">Divine Jewel... story of a
\t\t\t\t\tjewel!</h4>
\t\t\t\t<p class=\"mt-3\">
\t\t\t\t\tWelcome to Divine, a premier jewellery shop that embodies elegance, craftsmanship, and a touch of the divine. At Divine, we curate and create exquisite jewellery pieces that exude timeless beauty and capture the essence of divine aesthetics.
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t\t<a href=\"index.php?route=common/aboutus\" style=\"color:#333;font-size: 16px;font-weight: 500;\">
\t\t\t\t\tRead More &#8594;

\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section container mt-5\">
\t<h2 class=\"elementor-heading-title elementor-size-default text-center mb-4\">Enter The World Of Divine</h2>
\t<div class=\" row  justify-content-center\">

\t\t<div class=\"col-md-10 pt-3\">
\t\t\t<div class=\"container d-flex\" style=\"background-color: #d9efe9; min-height:400px;\">
\t\t\t\t<div class=\"main \" style=\"background-color: #b3f0e0;margin: 80px;width:100%;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<img class=\"take_img\"src=\"image/banner/c3.jpg\" alt=\"\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8 row text-center\">
\t\t\t\t\t\t\t<img class=\"col-12 mt-2\" src=\"image/banner/take.png\"width=\"20\" alt=\"\">
\t\t\t\t\t\t\t<h4 class=\"mt-2 col-12\">Ancient Jewellery Collection</h4>
\t\t\t\t\t\t\t<div class=\"col-12 text-center mt-2\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary col-8\"> Take A Look</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row justify-content-space-around\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"image/banner/e1.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 text-start m-auto mob_mt\">
\t\t\t\t\t<h5 class=\"elementor-heading-title elementor-size-default \" style=\"font-weight: 600; width:100%;\">
\t\t\t\t\t\tCollaborations</h5>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<ul class=\"mt-4\">
\t\t\t\t\t\t\t<li>Lakme Fashion week</li>
\t\t\t\t\t\t\t<li>Tanya Ghavri</li>
\t\t\t\t\t\t\t<li>Audi Motors</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 mt-3\">
\t\t\t\t\t\t<a href=\"index.php?route=common/aboutus\" style=\"color:#333;font-size: 16px;font-weight: 500;\">
\t\t\t\t\t\t\tRead More &#8594;

\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t

\t\t\t<div class=\"row justify-content-space-around mt-5 mob_dnone\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-5 text-start m-auto \">
\t\t\t\t\t<h5 class=\"elementor-heading-title elementor-size-default \" style=\"font-weight: 600; width:100%;\">
\t\t\t\t\t\tCampaigns</h5>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<ul class=\"mt-4\">
\t\t\t\t\t\t\t<li>Masaba</li>
\t\t\t\t\t\t\t<li>Mahima Mahajan</li>
\t\t\t\t\t\t\t<li>House of Armuse</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 mt-3\">
\t\t\t\t\t\t<a href=\"index.php?route=common/aboutus\" style=\"color:#333;font-size: 16px;font-weight: 500;\">
\t\t\t\t\t\t\tRead More &#8594;

\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"image/banner/e2.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row justify-content-space-around mt-5\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<img src=\"image/banner/e3.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 text-center m-auto mob_mt\">
\t\t\t\t\t<h5 class=\"elementor-heading-title elementor-size-default \" style=\"font-weight: 600; width:100%;\">
\t\t\t\t\t\tAccolades</h5>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<p class=\"mt-3\"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
\t\t\t\t\t\t\tperspiciatis ipsa, corporis quam error accusantium aliquam eos iure mollitia quidem! </p>

\t\t\t\t\t\t</p>
\t\t\t\t\t</div>


\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"row justify-content-space-around mt-5\">

\t\t\t\t<div class=\"col-md-5 text-center m-auto\">
\t\t\t\t\t<h5 class=\"elementor-heading-title elementor-size-default \" style=\"font-weight: 600; width:100%;\">
\t\t\t\t\t\tWorkmanship</h5>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<p class=\"mt-3\"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
\t\t\t\t\t\t\tperspiciatis ipsa, corporis quam error accusantium aliquam eos iure mollitia quidem! </p>

\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 mt-3\">
\t\t\t\t\t\t<a href=\"index.php?route=common/aboutus\" style=\"color:#333;font-size: 16px;font-weight: 500;\">
\t\t\t\t\t\t\tRead More &#8594;

\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 mob_mt\">
\t\t\t\t\t<img src=\"image/banner/e4.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>


<!--instagram feed -->
<section>
\t<div class=\"container text-center mt-5\">
\t\t<h2 class=\"elementor-heading-title elementor-size-default \" style=\"font-weight: 600; width:100%;\">
\t\t\tFollow us on Instagram</h2>
\t\t<div class=\"row mt-3\">
\t\t\t<div class=\"col-12\" style=\"margin-top:10px\">
\t\t\t\t";
        // line 302
        echo "\t\t\t\t<img src=\"image/insta.png\" alt=\"\" class=\"img-responsive\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<br /><br />
<script>
\tvar swiper = new Swiper(\".topSwiper\", {
\t\tgrabCursor: true,
\t\tcenteredSlides: true,
\t\tslidesPerView: 3,
\t\tspaceBetween: 20,
\t\tloop: true,

\t\tnavigation: {
\t\t\tnextEl: '.swiper-button-next',
\t\t\tprevEl: '.swiper-button-prev'
\t\t}
\t});


\tvar currentImage;
\tvar splide;
\tvar previousButton,
\t\tnextButton;
\tvar thumbnails,
\t\tthumbnailButtons;

\twindow.addEventListener('DOMContentLoaded', function (e) {
\t\tcurrentImage = document.querySelector('.current-image');
\t\tpreviousButton = document.querySelector('.carousel .previous-button');
\t\tnextButton = document.querySelector('.carousel .next-button');
\t\tthumbnails = document.querySelectorAll('.carousel .thumbnail');
\t\tthumbnailButtons = document.querySelectorAll('.carousel .thumbnail-button');

\t\tthumbnailButtons.forEach(function (thumbnailButton) {
\t\t\tthumbnailButton.addEventListener('click', function (e) {
\t\t\t\tactivateThumbnail(thumbnailButton);
\t\t\t});
\t\t});

\t\tsplide = new Splide('.splide', {
\t\t\tgap: '1px',
\t\t\tpadding: {
\t\t\t\tleft: '25px',
\t\t\t\tright: '25px'
\t\t\t},
\t\t\tarrows: false,
\t\t\tperPage: 3,
\t\t\tpagination: false,
\t\t\tkeyboard: false, // Splide listens to key events at the document level and moves ALL carousels when arrow keys are used. Also, keyboard controls are not expected by real users.
\t\t\tslideFocus: false, // removes tabindex=\"0\" from each slide wrapper, since we only want our links inside each slide to receive focus.
\t\t}).mount();

\t\t// To prevent animation issues, let's make every slide visible before a transition happens. Splide will then automatically remove the `.is-visible` class from non-visible slides once the transition is finished.
\t\tsplide.on('move', function () {
\t\t\tvar slides = document.querySelectorAll('.splide .splide__slide');

\t\t\tslides.forEach(function (slide) {
\t\t\t\tslide.classList.add('is-visible');
\t\t\t});
\t\t});

\t\t// Go to the previous slide when the Previous button is activated
\t\tpreviousButton.addEventListener('click', function (e) {
\t\t\tsplide.go('<');
\t\t});

\t\t// Go to the next slide when the Next button is activated
\t\tnextButton.addEventListener('click', function (e) {
\t\t\tsplide.go('>');
\t\t});
\t});


\t/**
\t  Update the large current image when a thumbnail button is activated.
\t*/
\tfunction activateThumbnail(thumbnailButton) {
\t\t// Swap the current image based to match the thumbnail
\t\t// - If you'd like to use separate images, like higher-res versions, consider using the index to pick an appropriate src string from an array, or storing the URI of the higher-res image in a custom data attribute on the thumbnail.
\t\tvar newImageSrc = thumbnailButton.querySelector('img').getAttribute('src');
\t\tvar newImageAlt = thumbnailButton.querySelector('img').getAttribute('data-full-alt');
\t\tcurrentImage.querySelector('img').setAttribute('src', newImageSrc);
\t\tcurrentImage.querySelector('img').setAttribute('alt', newImageAlt);

\t\t// Remove aria-current from any previously-activated thumbnail
\t\tthumbnailButtons.forEach(function (button) {
\t\t\tbutton.removeAttribute('aria-current');
\t\t});

\t\t// Indicate to screen readers which thumbnail is selected using aria-current
\t\tthumbnailButton.setAttribute('aria-current', true);
\t}
</script>
";
        // line 397
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 397,  404 => 302,  219 => 117,  208 => 112,  203 => 110,  199 => 109,  194 => 106,  190 => 105,  170 => 87,  161 => 84,  156 => 83,  152 => 82,  135 => 67,  122 => 60,  117 => 58,  112 => 55,  108 => 54,  84 => 32,  75 => 29,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}