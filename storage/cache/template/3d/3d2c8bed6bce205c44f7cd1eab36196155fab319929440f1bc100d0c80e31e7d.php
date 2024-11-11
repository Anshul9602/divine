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
class __TwigTemplate_a26ceea306c210c6c87249680f092cee20542dee6917ffb9fcd7f4ce4b475852 extends \Twig\Template
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
<link
href=\"
\t\t\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\t\t\" rel=\"stylesheet\">
<!-- hero slider area start -->
<section class=\"slider-area\">

\t<div class=\"row\" style=\"margin:0px;\">
\t\t<div class=\"slider_banner \" style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 38
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 38);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 39);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>
\t\t\t<div class=\"mob-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bannersmob"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 45
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 45);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 46);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
\t\t\t\t<br/>
\t\t\t\t<h2 class=\"new_font\">Radiate, Dazzle, Excel</h2>

\t\t\t\t<br/>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shine_img"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 72
            echo "
\t\t\t\t<div class=\"col-md-4 col-4\">
\t\t\t\t\t<div class=\"product-card text-center\" style=\"height:100%;\">
\t\t\t\t\t\t<a href=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
            echo "\">

\t\t\t\t\t\t\t<img src=\"";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 77);
            echo "\" alt=\"\" height=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t</div>

\t</div>
</section>
<!--New arrivals -->
<section class=\"slider-area section\">

\t<div class=\"row\" style=\"margin:0px;\">
\t\t<div class=\"slider_banner \" style=\"width:100%;\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 95
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 95);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 96);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
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
\t\t\t\t<section class=\"splide\" aria-label=\"Splide Basic HTML Example\">
\t\t\t\t\t<div class=\"splide__track\">
\t\t\t\t\t\t  <ul class=\"splide__list\">
\t\t\t\t\t\t\t  <li class=\"splide__slide\">Slide 01</li>
\t\t\t\t\t\t\t  <li class=\"splide__slide\">Slide 02</li>
\t\t\t\t\t\t\t  <li class=\"splide__slide\">Slide 03</li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t</div>
\t\t\t\t  </section>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 131
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 131) == "View All Diamond Jewellery")) {
                // line 132
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 134
                echo "
\t\t\t\t\t\t\t\t<div class=\"col mx-1 \">
\t\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 137);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 138);
                echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"color: #151515 !important;\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 140);
                echo "</h4>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t</div>
\t\t\t\t<h3 class=\"elementor-heading-title elementor-size-default text-center new_font mt-3\">Polki</h3>
\t\t\t\t<div class=\"row mt-4\">
\t\t\t\t\t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_categories2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 151
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 151) == "View All Polki Jewellery")) {
                // line 152
                echo "
\t\t\t\t\t\t\t";
            } else {
                // line 154
                echo "
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-6\">
\t\t\t\t\t\t\t\t\t<div class=\"product-card text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 157);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 158);
                echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"product_name\" style=\"color: #151515 !important;\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 160);
                echo "</h4>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            // line 166
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!---Shop by room------>

<section class=\"section\">

\t<div class=\"\">
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-12 text-center p-0\">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center new_font\">You Flicker, We Amplify</h2>
\t\t\t\t<div class=\"row mt-4 ml-0 mr-0\">
\t\t\t\t<a href=\"index.php?route=product/category&path=107_97\"><img src=\"image/banner/Divine_Banner_2_b.jpg\" alt=\"\" width=\"100%\" class=\"img-responsive\"></a>
\t\t\t\t\t
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
\t\t\t<div class=\"col-md-6 text-start mt-3 \">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-start new_font\">Our
\t\t\t\t\t\t\t\t\t\tStory</h2>
\t\t\t\t<br>
\t\t\t\t<h4 class=\"elementor-heading-title elementor-size-default text-start mt-2 new_font\">Divine - The Jewellery Lounge... story of 
\t\t\t\t\t\t\t\t\t\tjewels!</h4>
\t\t\t\t<p class=\"mt-3\">
\t\t\t\t\tWelcome to Divine, a premier jewellery lounge that embodies elegance, craftsmanship, and a touch of the divine. At Divine, we curate and create exquisite jewellery pieces that exude timeless beauty and capture the essence of divine aesthetics.
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
\t<h2 class=\"elementor-heading-title elementor-size-default text-center mb-4 new_font d-none\">Enter The World Of Divine</h2>
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
\t\t\t\t\t\t\t\t<img class=\"main_img\" src=\"image/banner/take2.png\" width=\"250\" style=\"transform: rotate(45deg);\" alt=\"\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<h4 class=\"margin_h col-12 mob_font \" style=\"    font-family: 'Montserrat', sans-serif !important;\">Emerald Jewellery Collection</h4>
\t\t\t\t\t\t\t<h6 class=\"mt-2 col-12 mob_font\" style=\"font-size:15px;font-family: 'Montserrat', sans-serif !important;\">
\t\t\t\t\t\t\t\tLife-affirming Stone with Healing Properties</h6>
\t\t\t\t\t\t\t<div class=\"col-12 text-center mt-4 mob_margin\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&path=94_95\"><button class=\"btn bg-white col-md-5 col-12 mob_padd\" style=\"font-size:14px\">
\t\t\t\t\t\t\t\t\tTake A Look</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
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
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-6 text-center p-0\">
\t\t\t\t
\t\t\t\t<video  autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\" src=\"image/celebritie/1.mp4\"></video>

\t\t\t</div>
\t\t\t<div class=\"col-6 text-center p-0\">
\t\t\t\t
\t\t\t\t<video  autoplay=\"\" loop=\"\" muted=\"\" playsinline=\"\" src=\"image/celebritie/2.mp4\"></video>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"section\">

\t<div class=\"\">
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-12 text-center p-0\">
\t\t\t\t
\t\t\t\t<div class=\"row mt-4 ml-0 mr-0\">
\t\t\t\t<a href=\"index.php?route=common/celebrities\"><img src=\"image/banner/Divine_Banner_10.jpg\" alt=\"\" width=\"100%\" class=\"img-responsive\"></a>
\t\t\t\t\t
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
\t\t\t<div
\t\t\t\tclass=\"col-12\" style=\"margin-top:10px\">
\t\t\t\t";
        // line 300
        echo "\t\t\t\t<img src=\"image/insta.png\" alt=\"\" class=\"img-responsive\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<br/><br/>
<script>

\tvar splide = new Splide( '.splide', {
\t\tperPage: 2,
\t\trewind : true,
\t  } );
\t  
\t  splide.mount();



















\tvar swiper = new Swiper(\".topSwiper\", {
grabCursor: true,
centeredSlides: true,
slidesPerView: 3,
spaceBetween: 20,
loop: true,

navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev'
}
});


var currentImage;
var splide;
var previousButton,
nextButton;
var thumbnails,
thumbnailButtons;

window.addEventListener('DOMContentLoaded', function (e) {
currentImage = document.querySelector('.current-image');
previousButton = document.querySelector('.carousel .previous-button');
nextButton = document.querySelector('.carousel .next-button');
thumbnails = document.querySelectorAll('.carousel .thumbnail');
thumbnailButtons = document.querySelectorAll('.carousel .thumbnail-button');

thumbnailButtons.forEach(function (thumbnailButton) {
thumbnailButton.addEventListener('click', function (e) {
activateThumbnail(thumbnailButton);
});
});

splide = new Splide('.splide', {
gap: '1px',
padding: {
left: '25px',
right: '25px'
},
arrows: false,
perPage: 3,
pagination: false,
keyboard: false, // Splide listens to key events at the document level and moves ALL carousels when arrow keys are used. Also, keyboard controls are not expected by real users.
slideFocus: false, // removes tabindex=\"0\" from each slide wrapper, since we only want our links inside each slide to receive focus.
}).mount();

// To prevent animation issues, let's make every slide visible before a transition happens. Splide will then automatically remove the `.is-visible` class from non-visible slides once the transition is finished.
splide.on('move', function () {
var slides = document.querySelectorAll('.splide .splide__slide');

slides.forEach(function (slide) {
slide.classList.add('is-visible');
});
});

// Go to the previous slide when the Previous button is activated
previousButton.addEventListener('click', function (e) {
splide.go('<');
});

// Go to the next slide when the Next button is activated
nextButton.addEventListener('click', function (e) {
splide.go('>');
});
});


/**
\t  Update the large current image when a thumbnail button is activated.
\t*/
function activateThumbnail(thumbnailButton) {
// Swap the current image based to match the thumbnail
// - If you'd like to use separate images, like higher-res versions, consider using the index to pick an appropriate src string from an array, or storing the URI of the higher-res image in a custom data attribute on the thumbnail.
var newImageSrc = thumbnailButton.querySelector('img').getAttribute('src');
var newImageAlt = thumbnailButton.querySelector('img').getAttribute('data-full-alt');
currentImage.querySelector('img').setAttribute('src', newImageSrc);
currentImage.querySelector('img').setAttribute('alt', newImageAlt);

// Remove aria-current from any previously-activated thumbnail
thumbnailButtons.forEach(function (button) {
button.removeAttribute('aria-current');
});

// Indicate to screen readers which thumbnail is selected using aria-current
thumbnailButton.setAttribute('aria-current', true);
}
</script>
";
        // line 421
        echo ($context["footer"] ?? null);
        echo "
";
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
        return array (  571 => 421,  448 => 300,  315 => 167,  309 => 166,  300 => 160,  295 => 158,  291 => 157,  286 => 154,  282 => 152,  279 => 151,  275 => 150,  270 => 147,  264 => 146,  255 => 140,  250 => 138,  246 => 137,  241 => 134,  237 => 132,  234 => 131,  230 => 130,  197 => 99,  188 => 96,  183 => 95,  179 => 94,  167 => 84,  154 => 77,  149 => 75,  144 => 72,  140 => 71,  116 => 49,  107 => 46,  102 => 45,  98 => 44,  94 => 42,  85 => 39,  80 => 38,  76 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
