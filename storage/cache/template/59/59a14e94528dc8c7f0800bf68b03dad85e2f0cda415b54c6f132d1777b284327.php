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

/* default/template/account/wishlist_guest.twig */
class __TwigTemplate_1081d2e627657e5534a28d5fd9f43209987f195895dd5cf9614e6a07f39e13aa extends \Twig\Template
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
\t.list-unstyled li {
\t\tcolor: #333;
\t\tfont-size: 14px;
\t\tletter-spacing: 1px;
\t\tmargin-top: 5px
\t}

\t.list-unstyled li a {
\t\tcolor: #ccc
\t}

\t.list-unstyled li a:hover {
\t\tcolor: #333
\t}
</style>

<!-- breadcrumb area start -->
<div style=\"background:#f1f1f1; border-bottom:thin solid #fff\" class=\"breadcrumb-area\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 28
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 29);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 29);
            echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- breadcrumb area end -->

<div style=\"min-height:50vh;\" class=\"container\">


\t<div class=\"row mbn-30\">

\t\t<div id=\"pro_card\" class=\"row mt-4\"></div>
\t</div>
\t<br><br><br><br>

</div>

<script>




\tconst product = JSON.parse(localStorage.getItem(\"wishdivine\"));



\tlet result = \"\";

\tfor (let i = 0; i < product.length; i++) {
\t\tvar card = `<div class=\"col-md-3 col-sm-6 mt-3 pl-2\">
\t\t<!-- product grid start -->
\t\t<div class=\" p-card-holder\">
\t\t\t<div class=\"product-card\">
\t\t\t\t<div class=\"image real_pro-img\">
\t\t\t\t\t<a target=\"_blank\" href=\"\${product[i].producturl}\">
\t\t\t\t\t\t<img src=\"\${product[i].productimg}\" class=\"img-responsive\" />
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<a href=\"\${product[i].producturl}\">
\t\t\t\t\t\t\t<h6 class=\"product_name\" style=\"text-transform: uppercase;\">\${product[i].productname}</h6>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<p class=\"price mt-2\" style=\"color:#44b394;    font-weight: 500;\">
\t\t\t\t\t\t\t\${product[i].productprice}
\t\t\t\t\t\t</p>
<button type=\"button\" btnid=\"\${product[i].productid}\" class=\"btn btn-primary remove_btn\">remove</button>
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
\t`
\t\tresult = result + card;
\t}

\tdocument.getElementById('pro_card').innerHTML = result;


const allProductBtns = document.querySelectorAll(\".remove_btn\");



allProductBtns.forEach((btn, index) => {
btn.addEventListener(\"click\", (e) => { 
\t

\t// alert(`You clicked on Product \${index + 1}`);
const productId = e.target.getAttribute(\"btnid\");
console.log(productId);

 let idToRemove = productId;
 console.log(\"idToRemove\",idToRemove);
let index = product.findIndex(obj => obj.productid === idToRemove);
if (index !== -1) {
 product.splice(index, 1);

}
console.log(\"productarray\",product);
 localStorage.setItem('wishdivine', JSON.stringify(product));






})} );
</script>
";
        // line 124
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist_guest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 124,  84 => 32,  73 => 29,  70 => 28,  66 => 27,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/wishlist_guest.twig", "");
    }
}
