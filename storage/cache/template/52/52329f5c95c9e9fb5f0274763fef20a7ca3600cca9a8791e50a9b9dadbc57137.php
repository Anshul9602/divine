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

/* default/template/common/menu.twig */
class __TwigTemplate_1b233590ce661df6f25d274c7ae7dba8ec8f135232e2a619cfda96d9ccd8206c extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "\t<nav class=\"desktop-menu\">
\t\t<ul class=\"nav justify-content-space-around w-100\">

\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 6
                echo "

\t\t\t\t";
                // line 8
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
                    echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown row\" style=\"width:1350px;left:-300px;\">

\t\t\t\t\t\t\t";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 13), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 14
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 15
                            echo "

\t\t\t\t\t\t\t\t\t<li class=\" col-md-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 18
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                            echo " \" style=\" color:#05b59d;font-weight: 800;    text-transform: uppercase; \">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                            echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 20
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "childrens", [], "any", false, false, false, 20));
                            foreach ($context['_seq'] as $context["_key"] => $context["child1"]) {
                                // line 21
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 22
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "href", [], "any", false, false, false, 22);
                                echo "\" style=\"    font-size: 13px;\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child1"], "name", [], "any", false, false, false, 22);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child1'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 25
                            echo "
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\" ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 40
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</li>
\t\t
\t</ul>
</nav>";
        }
        // line 44
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  144 => 41,  138 => 40,  130 => 37,  127 => 36,  122 => 33,  116 => 32,  104 => 25,  93 => 22,  90 => 21,  86 => 20,  79 => 18,  74 => 15,  69 => 14,  65 => 13,  57 => 10,  54 => 9,  52 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
