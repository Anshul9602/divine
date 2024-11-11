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

/* default/template/account/register.twig */
class __TwigTemplate_609f72fbcff3a4dec34f7346c4370b7a1568583f5cdc8054998f27a61cf3f236 extends \Twig\Template
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
\t@media screen and(max-width: 650px) {
\t\t.col-12 {
\t\t\tmargin-top: 10px;
\t\t}
\t}
</style>
<!-- breadcrumb area start -->
<div class=\"breadcrumb-area hidden-phone\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"breadcrumb-wrap\">
\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<li class=\"ml-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\" style=\"text-transform: uppercase;\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t&nbsp;/
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<br/>
<div class=\"container\">
\t";
        // line 32
        if (($context["error_warning"] ?? null)) {
            // line 33
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 35
            echo ($context["error_warning"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 38
        echo "
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"col-sm-8 offset-sm-2\">
\t\t\t<h1 class=\"text-center\">";
        // line 41
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t
\t\t\t<form action=\"";
        // line 43
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t<legend style=\"padding: 0px 15px;text-align: center;\">
\t\t\t\t\t\t";
        // line 46
        echo ($context["text_your_details"] ?? null);
        echo "
\t\t\t\t\t\t<hr/>
\t\t\t\t\t</legend>

\t\t\t\t\t<div class=\"form-group required\" style=\"display:";
        // line 50
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 53
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source,             // line 54
$context["customer_group"], "customer_group_id", [], "any", false, false, false, 54) == ($context["customer_group_id"] ?? null))) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 57);
                echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 58);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 63);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 64);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 73
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 74
        if (($context["error_firstname"] ?? null)) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 81
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["error_lastname"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 91
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 92
        if (($context["error_email"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 97
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 98
        if (($context["error_telephone"] ?? null)) {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 106
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "select")) {
                // line 107
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 107);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 110
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 110);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 111
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)))) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 116);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
                // line 122
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 130) == "radio")) {
            // line 131
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 131);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 131);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\">";
            // line 132
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 132);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 135));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t";
                // line 137
                if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 137)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 137) == (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["register_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)))) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 139);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 139);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139);
                    echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 143);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 143);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 143);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 144);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 149
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null)) {
                // line 150
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 151
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 154
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 157
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 157) == "checkbox")) {
            // line 158
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 158);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 158);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\">";
            // line 159
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 159);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t";
                // line 164
                if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 164), (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["register_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null)))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 166);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 166);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 166);
                    echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 167);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 170);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 170);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 170);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 171);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 173
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 176
            if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) {
                // line 177
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 178
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 178)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 184) == "text")) {
            // line 185
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 185);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 185);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 186
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 186);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 186);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 188
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 188);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 188);
            echo "]\" value=\"";
            if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                echo " ";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["register_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null);
            } else {
                echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 188);
                echo " ";
            }
            echo "\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 188);
            echo "\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 188);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
            // line 189
            if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null)) {
                // line 190
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 191
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["error_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 197
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 197) == "textarea")) {
            // line 198
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 198);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 198);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 199
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 199);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 199);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
            // line 201
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 201);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 201);
            echo "]\" rows=\"5\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 201);
            echo "\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 201);
            echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 202
            if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null)) {
                // line 203
                echo "\t\t\t\t\t\t\t\t\t";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 =                 // line 204
($context["register_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 204)] ?? null) : null);
                // line 205
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 207);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t";
            // line 210
            if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) {
                // line 211
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 212
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 218
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 218) == "file")) {
            // line 219
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 219);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 219);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\">";
            // line 220
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 220);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-custom-field";
            // line 222
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 222);
            echo "\" data-loading-text=\"<?php echo \$text_loading; ?>\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
            // line 224
            echo ($context["button_upload"] ?? null);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
            // line 226
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 226);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 226);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : ''); ?>\"/>
\t\t\t\t\t\t\t";
            // line 227
            if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["error_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)) {
                // line 228
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 229
                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 229)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 235) == "date")) {
            // line 236
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 236);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 236);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 237
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 237);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 237);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 240
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 240);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 240);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : \$custom_field['value']); ?>\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 240);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 240);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 247
            if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 247)] ?? null) : null)) {
                // line 248
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 249
                echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 249)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 252
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 255
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 255) == "time")) {
            // line 256
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 256);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 256);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 257
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 257);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 257);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 260
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 260);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 260);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : \$custom_field['value']); ?>\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 260);
            echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 260);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 267
            if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 267)] ?? null) : null)) {
                // line 268
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 269
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 272
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 275
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 275) == "datetime")) {
            // line 276
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 276);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 276);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 277
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 277);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 277);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 280
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 280);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 280);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : \$custom_field['value']); ?>\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 280);
            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 280);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 287
            if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 287)] ?? null) : null)) {
                // line 288
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 289
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 289)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 292
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t";
        }
        // line 297
        echo "\t\t\t</fieldset>

\t\t\t<fieldset>
\t\t\t\t
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 304
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 305
        if (($context["error_password"] ?? null)) {
            // line 306
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 308
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 310
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 311
        if (($context["error_confirm"] ?? null)) {
            // line 312
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 314
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-12 text-center\">";
        // line 322
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 323
        if (($context["text_agree"] ?? null)) {
            // line 324
            echo "\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
            // line 326
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 327
            if (($context["agree"] ?? null)) {
                // line 328
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 330
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 332
            echo "\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 333
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-hero\" />
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 338
            echo "\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 340
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-hero\" />
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 345
        echo "           
\t\t\t\t\t</div>
          
          
\t\t\t\t</div><br>

\t\t\t</fieldset>
      <div class=\"text-center\">
      ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["text_account_already"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
            // line 354
            echo "
\t\t\t\t\t\t\tAlready Registered?
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 356
            echo twig_get_attribute($this->env, $this->source, $context["login"], "href", [], "any", false, false, false, 356);
            echo "\">Login Now</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "      </div><br><br>
 
\t\t</form>
\t</div>
</div></div><script type=\"text/javascript\"><!--// Sort the custom fields
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group[data-sort]').detach().each(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:last').after(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:last').after(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#account .form-group:first').before(this);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'customer_group_id\\']').on('change', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.custom-field').hide();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.custom-field').removeClass('required');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfor (i = 0; i < json.length; i ++) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcustom_field = json[i];
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t//--></script><scripttype=\"text/javascript\"><!--\$('button[id^=\\'button-custom-field\\']').on('click', function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvar element = this;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#form-upload').remove();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (typeof timer != 'undefined') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclearInterval(timer);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttimer = setInterval(function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclearInterval(timer);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcache: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcontentType: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprocessData: false,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).button('loading');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).button('reset');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).parent().find('.text-danger').remove();
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t}, 500);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t//--></script><scripttype=\"text/javascript\"><!--\$('.date').datetimepicker({language: '";
        // line 458
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.time').datetimepicker({language: '";
        // line 460
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.datetime').datetimepicker({language: '";
        // line 462
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t//--></script>";
        // line 463
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1064 => 463,  1060 => 462,  1055 => 460,  1050 => 458,  949 => 359,  940 => 356,  936 => 354,  932 => 353,  922 => 345,  914 => 340,  910 => 338,  902 => 333,  899 => 332,  895 => 330,  891 => 328,  889 => 327,  885 => 326,  881 => 324,  879 => 323,  875 => 322,  865 => 314,  859 => 312,  857 => 311,  851 => 310,  847 => 308,  841 => 306,  839 => 305,  833 => 304,  824 => 297,  817 => 292,  811 => 289,  808 => 288,  806 => 287,  790 => 280,  782 => 277,  775 => 276,  772 => 275,  767 => 272,  761 => 269,  758 => 268,  756 => 267,  740 => 260,  732 => 257,  725 => 256,  722 => 255,  717 => 252,  711 => 249,  708 => 248,  706 => 247,  690 => 240,  682 => 237,  675 => 236,  672 => 235,  667 => 232,  661 => 229,  658 => 228,  656 => 227,  650 => 226,  645 => 224,  640 => 222,  635 => 220,  628 => 219,  625 => 218,  620 => 215,  614 => 212,  611 => 211,  609 => 210,  606 => 209,  600 => 207,  596 => 205,  594 => 204,  592 => 203,  590 => 202,  580 => 201,  573 => 199,  566 => 198,  563 => 197,  558 => 194,  552 => 191,  549 => 190,  547 => 189,  529 => 188,  522 => 186,  515 => 185,  512 => 184,  507 => 181,  501 => 178,  498 => 177,  496 => 176,  493 => 175,  486 => 173,  481 => 171,  473 => 170,  470 => 169,  465 => 167,  457 => 166,  454 => 165,  452 => 164,  449 => 163,  445 => 162,  439 => 159,  432 => 158,  429 => 157,  424 => 154,  418 => 151,  415 => 150,  413 => 149,  410 => 148,  403 => 146,  398 => 144,  390 => 143,  387 => 142,  382 => 140,  374 => 139,  371 => 138,  369 => 137,  366 => 136,  362 => 135,  356 => 132,  349 => 131,  346 => 130,  340 => 129,  334 => 125,  328 => 123,  326 => 122,  321 => 119,  315 => 118,  307 => 116,  299 => 114,  296 => 113,  292 => 112,  288 => 111,  280 => 110,  273 => 108,  266 => 107,  263 => 106,  259 => 105,  253 => 101,  247 => 99,  245 => 98,  239 => 97,  235 => 95,  229 => 93,  227 => 92,  221 => 91,  213 => 85,  207 => 83,  205 => 82,  199 => 81,  193 => 77,  187 => 75,  185 => 74,  179 => 73,  172 => 68,  166 => 67,  160 => 64,  156 => 63,  152 => 61,  146 => 58,  142 => 57,  138 => 55,  136 => 54,  134 => 53,  130 => 52,  121 => 50,  114 => 46,  108 => 43,  103 => 41,  98 => 38,  92 => 35,  88 => 33,  86 => 32,  75 => 23,  63 => 19,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
