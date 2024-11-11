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
class __TwigTemplate_b384e9cedee9a874f200ad941a5f66ea1cbed406b8095d6d504073f202680da7 extends \Twig\Template
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
\t.section {
\t\tpadding-top: 1.5rem;
\t\tpadding-bottom: 0.5rem;
\t}

\t.take_img {
\t\tposition: absolute;
\t\ttop: -55px;
\t\theight: 350px;
\t\tleft: 20%;

\t}

\t.main_img {
\t\tposition: absolute;
\t\ttop: -115px;
\t\tleft: 25%;

\t}

\t.margin_h {
\t\tmargin-top: 100px;
\t}
</style>
<script src=\"
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\t\t\"></script>
<link href=\"
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\t\t\" rel=\"stylesheet\">
<!-- hero slider area start -->
<section class=\"slider-area\">

\t<div class=\"row\" style=\"margin:0px;\">
\t\t<div class=\"slider_banner \" style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 40
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 40);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 41);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t</div>
\t\t\t<div class=\"mob-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bannersmob"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 47
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 47);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 48);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
\t\t\t\t<h2 class=\"new_font\">Radiate, Dazzle, Excel</h2>

\t\t\t\t<br />
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shine_img"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 74
            echo "
\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t<div class=\"product-card text-center\" >
\t\t\t\t\t<a href=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 77);
            echo "\">

\t\t\t\t\t\t<img src=\"";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 79);
            echo "\" alt=\"\"  class=\"img-responsive\">

\t\t\t\t\t</a>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t</div>

\t</div>
</section>
<!--New arrivals -->
<section class=\"slider-area section\">

\t<div class=\"row\" style=\"margin:0px;\">
\t\t<div class=\"slider_banner \" style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 97
            echo "\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 97);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 98);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>


<!---Shop by room------>

<section class=\"section\">


\t<div class=\"container \">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 \">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center new_font\">Shop By Category</h2>
\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default text-center new_font mt-4\">Diamond</h3>
\t\t\t\t<section class=\"splide splide1 mt-3\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t<ul class=\"splide__list\">


\t\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 125
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 125) == "View All Diamond Jewellery")) {
                // line 126
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 128
                echo "
\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 131);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 132);
                echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"color: #151515 !important;\">";
                // line 134
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "</h4>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "


\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default text-center new_font mt-3\">Polki</h3>

\t\t\t\t<section class=\"splide splide2 mt-3\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t<ul class=\"splide__list\">

\t\t\t\t\t\t\t";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 155
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 155) == "View All Polki Jewellery")) {
                // line 156
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 158
                echo "
\t\t\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 161);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 162);
                echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"color: #151515 !important;\">";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 164);
                echo "
\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</section>



\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!---Shop by room------>

<section class=\"section\">

\t<div class=\"\">
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-12 text-center p-0\">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center new_font\">You Flicker, We Amplify
\t\t\t\t</h2>
\t\t\t\t<div class=\"row mt-4 ml-0 mr-0\">
\t\t\t\t\t<a href=\"index.php?route=product/category&path=107_97\"><img src=\"image/banner/Divine_Banner_2_b.jpg\"
\t\t\t\t\t\t\talt=\"\" width=\"100%\" class=\"img-responsive\"></a>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section\">

\t<div class=\"container mb-3\">
\t\t<div class=\"row justify-content-space-around\">

\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"image/about.png\" alt=\"\" class=\"img-responsive\">

\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-start mt-3 mob_center\">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-start new_font\">Our
\t\t\t\t\tStory</h2>
\t\t\t\t<br>
\t\t\t\t<h4 class=\"elementor-heading-title elementor-size-default text-start mt-2 new_font\">Divine - The
\t\t\t\t\tJewellery Lounge... story of
\t\t\t\t\tjewels!</h4>
\t\t\t\t<p class=\"mt-3\">
\t\t\t\t\tWelcome to Divine, a premier jewellery lounge that embodies elegance, craftsmanship, and a touch of
\t\t\t\t\tthe divine. At Divine, we curate and create exquisite jewellery pieces that exude timeless beauty
\t\t\t\t\tand capture the essence of divine aesthetics.
\t\t\t\t</p>
\t\t\t\t<br>
\t\t\t\t<a href=\"index.php?route=common/aboutus\" style=\"color:#333;font-size: 16px;font-weight: 500;\">
\t\t\t\t\tDiscover More &#8594;

\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section  mt-5 \" style=\"padding:0 5%;\">
\t<h2 class=\"elementor-heading-title elementor-size-default text-center mb-4 new_font d-none\">Enter The World Of
\t\tDivine</h2>
\t<div class=\" row  justify-content-center\">

\t\t<div class=\"col-md-10 pt-3\">
\t\t\t<div class=\" d-none main_height p-0\" style=\"background-color: #d9efe9; min-height:400px;\">
\t\t\t\t<div class=\"main main_mob\" style=\"background-color: #bde1d7;margin: 80px 110px;width:100%;\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-5 col-5\">
\t\t\t\t\t\t\t<img class=\"take_img\" src=\"image/banner/main_take.jpg\" alt=\"\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7 col-7 row text-center \">
\t\t\t\t\t\t\t<div class=\"col-12 mt-2\">
\t\t\t\t\t\t\t\t<img class=\"main_img\" src=\"image/banner/take2.png\" width=\"250\"
\t\t\t\t\t\t\t\t\tstyle=\"transform: rotate(45deg);\" alt=\"\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h4 class=\"margin_h col-12 mob_font \"
\t\t\t\t\t\t\t\tstyle=\"    font-family: 'Montserrat', sans-serif !important;\">Emerald Jewellery
\t\t\t\t\t\t\t\tCollection</h4>
\t\t\t\t\t\t\t<h6 class=\"mt-2 col-12 mob_font\"
\t\t\t\t\t\t\t\tstyle=\"font-size:15px;font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\tLife-affirming Stone with Healing Properties</h6>
\t\t\t\t\t\t\t<div class=\"col-12 text-center mt-4 mob_margin\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=94_95\"><button
\t\t\t\t\t\t\t\t\t\tclass=\"btn bg-white col-md-5 col-12 mob_padd\" style=\"font-size:14px\">
\t\t\t\t\t\t\t\t\t\tTake A Look</button>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
</section>




<section class=\"section\">

\t<div class=\"container\">
\t\t<div class=\"row m-0 desktop-slider\">
\t\t\t<div class=\"col-6 text-center p-0\">

\t\t\t\t<video autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\" src=\"image/celebritie/1.mp4\"></video>

\t\t\t</div>
\t\t\t<div class=\"col-6 text-center p-0\">

\t\t\t\t<video autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\" src=\"image/celebritie/2.mp4\"></video>

\t\t\t</div>
\t\t</div>
\t\t<section class=\"splide splide3 mob-slider\" aria-label=\"Splide Basic HTML Example\">
\t\t\t<div class=\"splide__track\">
\t\t\t\t<ul class=\"splide__list\">
\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t<video autoplay=\"\" loop=\"\"style=\"width:100%;\" muted=\"\" playsinline=\"\" src=\"image/celebritie/1.mp4\"></video>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"splide__slide\">
\t\t\t\t\t\t<video autoplay=\"\" loop=\"\"style=\"width:100%;\" muted=\"\" playsinline=\"\" src=\"image/celebritie/2.mp4\"></video>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</section>
\t</div>
</section>
<section class=\"section\">

\t<div class=\"\">
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-12 text-center p-0\">

\t\t\t\t<div class=\"row mt-4 ml-0 mr-0\">
\t\t\t\t\t<a href=\"index.php?route=common/celebrities\"><img src=\"image/banner/Divine_Banner_10.jpg\" alt=\"\"
\t\t\t\t\t\t\twidth=\"100%\" class=\"img-responsive\"></a>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!--instagram feed -->
<section>
\t<div class=\"container text-center mt-5\">
\t\t<h2 class=\"elementor-heading-title elementor-size-default new_font\" style=\" width:100%;\">
\t\t\tFollow us on Instagram</h2>
\t\t<div class=\"row mt-3\">
\t\t\t<div class=\"col-12\" style=\"margin-top:10px\">
\t\t\t\t";
        // line 333
        echo "\t\t\t\t<img src=\"image/insta.png\" alt=\"\" class=\"img-responsive\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<br /><br />
<script>

\tvar splide = new Splide('.splide1', {

\t\tperPage: 5,
\t\tperMove: 2,
\t\tbreakpoints: {
\t\t\t640: {
\t\t\t\tperPage: 2,

\t\t\t},
\t\t\t767: {
\t\t\t\tperPage: 3,

\t\t\t},
\t\t\t1024: {
\t\t\t\tperPage: 5,

\t\t\t},
\t\t},

\t\tgap: '3em',
\t});

\tsplide.mount();
\tvar splide = new Splide('.splide3', {

\t\tperPage: 1,
\t\tperMove: 1,
\t\tbreakpoints: {
\t\t\t640: {
\t\t\t\tperPage: 1,

\t\t\t},
\t\t\t767: {
\t\t\t\tperPage: 1,

\t\t\t},
\t\t\t1024: {
\t\t\t\tperPage: 1,

\t\t\t},
\t\t},

\t\tgap: '3em',
\t});

\tsplide.mount();
\tvar splide = new Splide('.splide2', {

\t\tperPage: 4,
\t\tperMove: 2,
\t\tbreakpoints: {
\t\t\t640: {
\t\t\t\tperPage: 2,

\t\t\t},
\t\t\t767: {
\t\t\t\tperPage: 3,

\t\t\t},
\t\t\t1024: {
\t\t\t\tperPage: 4,

\t\t\t},
\t\t},

\t\tgap: '3em',
\t});

\tsplide.mount();





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


\t});


\t/**
\t\t  Update the large current image when a thumbnail button is activated.
\t\t*/
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
        // line 473
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
        return array (  622 => 473,  480 => 333,  320 => 172,  314 => 171,  304 => 164,  299 => 162,  295 => 161,  290 => 158,  286 => 156,  283 => 155,  279 => 154,  264 => 141,  258 => 140,  249 => 134,  244 => 132,  240 => 131,  235 => 128,  231 => 126,  228 => 125,  224 => 124,  199 => 101,  190 => 98,  185 => 97,  181 => 96,  169 => 86,  156 => 79,  151 => 77,  146 => 74,  142 => 73,  118 => 51,  109 => 48,  104 => 47,  100 => 46,  96 => 44,  87 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
