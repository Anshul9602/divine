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
class __TwigTemplate_fb95566df56df140240503ccef95afe3287ba55134ceaf0a17394708aa01b977 extends \Twig\Template
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
<script src=\"
\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
\t\"></script>
<link
href=\"
\thttps://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
\t\" rel=\"stylesheet\">
<!-- hero slider area start -->
<section class=\"slider-area\">

\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 16
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 16);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 17);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>
<!-- hero slider area end -->


<!--New arrivals -->
<section class=\"new-arrivals\">
\t<div class=\"\" style=\"padding:0 5%;\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<br/>
\t\t\t\t<h2>SHINE. SPARKLE. SUCCEED</h2>
\t\t\t\t
\t\t\t\t<br/>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shine_img"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 43
            echo "
\t\t\t\t<div class=\"col-sm-4 col-6\">
\t\t\t\t\t<div class=\"product-card text-center\" style=\"height:100%;\">
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 46);
            echo "\">
\t\t\t\t\t\t";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 47) == "img2")) {
                // line 48
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 48);
                echo "\" alt=\"\" style=\"height:80%;\" class=\"img-responsive\">
\t\t\t\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 50);
                echo "\" alt=\"\" height=\"100%\" class=\"img-responsive\">
\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t</div>
\t\t
\t</div>
</section>
<!--New arrivals -->
<section class=\"slider-area\">
<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t<br/>
\t\t\t\t<h2>STAR - STYLING</h2>
\t\t\t\t
\t\t\t\t<br/>
\t\t\t</div>
\t\t</div>
\t<div class=\"row\">
\t\t<div class=\"slider_banner col-12\">
\t\t\t<div class=\"desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style\">
\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners1"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 75
            echo "\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 75);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 76);
            echo "\" alt=\"\" class=\"img-response slider-img\">
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t</div>
\t\t</div>

\t</div>

</section>

<!---Shop by room------>
<section class=\"shop_by_category mt-50 \">
\t<div class=\"container \">
\t\t<div class=\"row v-center\">
\t\t\t<div class=\"col-sm-4 col-12\">
\t\t\t\t<br/>
\t\t\t\t<h2>An Oasis Of Luxury</h2>
\t\t\t\t<p class=\"description\">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
\t\t\t\t<button class=\"btn btn-primary\">Explore Now</button>

\t\t\t\t<br/>
\t\t\t\t<br/>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 text-center\">
\t\t\t\t<img src=\"image/elements/b1.png\" alt=\"\" class=\"img-responsive b1\">
\t\t\t</div>
\t\t\t<div class=\"col-sm-4 col-6 text-center\">
\t\t\t\t<img src=\"image/elements/b2.jpg\" alt=\"\" class=\"img-responsive b2\">
\t\t\t</div>

\t\t</div>

\t</div>
</section>
<!---Shop by room------>






<section>

\t<div class=\"container mt-4\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center\">CUSTOMIZE YOUR OWN JEWELLERY</h2>
\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t<img src=\"image/catalog/banners/b5.jpg\" alt=\"\" class=\"img-responsive\">
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section>

\t<div class=\"container mt-4 mb-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"image/catalog/banners/b5.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<h5 class=\"elementor-heading-title elementor-size-default text-center\">OUR STORY</h5>
\t\t\t\t<h6 class=\"elementor-heading-title elementor-size-default text-center mt-2\">Jewel Saga... story of a jewel!</h6>
\t\t\t\t<p class=\"mt-3\">Brand jewel Saga owned by the duo Sonal Sawansukha and Abhinay Sawansukha is based out of jaipur and works on a strong design philosophy of creating masterpieces in gold and diamonds .
\t\t\t\t</p>
\t\t\t\t<a href=\"index.php?route=common/aboutus\">
\t\t\t\t\t<button class=\"btn btn-primary\">Read More &#8594;</button>

\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section>

\t<div class=\"container mt-5\">
\t\t<h2 class=\"elementor-heading-title elementor-size-default text-center mb-4\">ENTER THE WORLD OF JEWELSAGA</h2>
\t\t<div class=\"container\"><div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"assets/img/collaboration.jpg\" alt=\"\" class=\"img-responsive\">

\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t<h5 class=\"elementor-heading-title elementor-size-default text-center\">
\t\t\t\t\tCOLLABORATIONS</h5>
\t\t\t\t
\t\t\t\t<p class=\"mt-3\">Brand jewel Saga owned by the duo Sonal Sawansukha and Abhinay Sawansukha is based out of jaipur and works on a strong design philosophy of creating masterpieces in gold and diamonds .
\t\t\t\t</p>
\t\t\t\t<a href=\"index.php?route=common/aboutus\">
\t\t\t\t\t<button class=\"btn btn-primary\">Read More &#8594;</button>

\t\t\t\t</a>
\t\t\t</div>
\t\t</div></div>
\t</div>
</section>


<!--instagram feed -->
<section>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\" style=\"margin-top:10px\">
\t\t\t\t<script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>
\t\t\t\t<div class=\"elfsight-app-8674d6d0-1d23-4bf6-a003-4f998062b560\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<br/><br/>
<script>
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
  Update the large current image when a thumbnail button is activated.
*/
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
        // line 278
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
        return array (  371 => 278,  170 => 79,  161 => 76,  156 => 75,  152 => 74,  133 => 57,  123 => 52,  117 => 50,  111 => 48,  109 => 47,  105 => 46,  100 => 43,  96 => 42,  72 => 20,  63 => 17,  58 => 16,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
