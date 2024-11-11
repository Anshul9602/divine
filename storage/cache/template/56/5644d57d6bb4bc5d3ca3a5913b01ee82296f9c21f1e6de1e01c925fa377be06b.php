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
class __TwigTemplate_cc51a217e0a8a61fb04db4ffedc5e38dacc4a41c16c4bd35036436eb6f4ab16b extends \Twig\Template
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
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
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
        // line 31
        if (($context["error_warning"] ?? null)) {
            // line 32
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t";
            // line 34
            echo ($context["error_warning"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 37
        echo "
\t<div class=\"row\">
\t\t<div id=\"content\" class=\"col-sm-8 offset-sm-2\">
\t\t\t<h1 class=\"text-center\">";
        // line 40
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t
\t\t\t<form action=\"";
        // line 42
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t<legend style=\"padding: 0px 15px;text-align: center;\">
\t\t\t\t\t\t";
        // line 45
        echo ($context["text_your_details"] ?? null);
        echo "
\t\t\t\t\t\t<hr/>
\t\t\t\t\t</legend>

\t\t\t\t\t<div class=\"form-group required\" style=\"display:";
        // line 49
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 52
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source,             // line 53
$context["customer_group"], "customer_group_id", [], "any", false, false, false, 53) == ($context["customer_group_id"] ?? null))) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 56);
                echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 57);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            } else {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 62);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 63);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 72
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 73
        if (($context["error_firstname"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 80
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 81
        if (($context["error_lastname"] ?? null)) {
            // line 82
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 90
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 91
        if (($context["error_email"] ?? null)) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 96
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 97
        if (($context["error_telephone"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 105
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 105) == "select")) {
                // line 106
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 106);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 109
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 109);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 110
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["register_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 112)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112) == (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["register_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null)))) {
                        // line 113
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 113);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "

\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
                // line 121
                if ((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 129) == "radio")) {
            // line 130
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 130);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 130);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\">";
            // line 131
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 131);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t";
                // line 136
                if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["register_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 136)] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 136) == (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["register_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 136)] ?? null) : null)))) {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 138);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 138);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
                    echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 139);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 142);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 142);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 142);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 143);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 145
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 148
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)) {
                // line 149
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 150
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 150)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 156) == "checkbox")) {
            // line 157
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 157);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 157);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\">";
            // line 158
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 158);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_value", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t";
                // line 163
                if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 163), (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["register_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)))) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 165);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 165);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 165);
                    echo "\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 166);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 169);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 169);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 169);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 170);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 175
            if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["error_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) {
                // line 176
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 177
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 183) == "text")) {
            // line 184
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 184);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 184);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 185
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 185);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 185);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 187
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 187);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 187);
            echo "]\" value=\"";
            if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["register_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) {
                echo " ";
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["register_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null);
            } else {
                echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 187);
                echo " ";
            }
            echo "\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 187);
            echo "\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 187);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
            // line 188
            if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["error_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null)) {
                // line 189
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 190
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["error_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 190)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 196
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 196) == "textarea")) {
            // line 197
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 197);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 197);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 198
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 198);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 198);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
            // line 200
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 200);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 200);
            echo "]\" rows=\"5\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 200);
            echo "\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 200);
            echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 201
            if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["register_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null)) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 =                 // line 203
($context["register_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                // line 204
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 206
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "value", [], "any", false, false, false, 206);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t";
            // line 209
            if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["error_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 209)] ?? null) : null)) {
                // line 210
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 211
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["error_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 214
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 217) == "file")) {
            // line 218
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 218);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 218);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\">";
            // line 219
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 219);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-custom-field";
            // line 221
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 221);
            echo "\" data-loading-text=\"<?php echo \$text_loading; ?>\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t";
            // line 223
            echo ($context["button_upload"] ?? null);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
            // line 225
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 225);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 225);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : ''); ?>\"/>
\t\t\t\t\t\t\t";
            // line 226
            if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["error_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                // line 227
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 228
                echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 231
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 234
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 234) == "date")) {
            // line 235
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 235);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 235);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 236
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 236);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 236);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 239
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 239);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 239);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : \$custom_field['value']); ?>\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 239);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 239);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 246
            if ((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["error_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null)) {
                // line 247
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 248
                echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["error_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 248)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 254
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 254) == "time")) {
            // line 255
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 255);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 255);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 256
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 256);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 256);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 259
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 259);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 259);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : \$custom_field['value']); ?>\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 259);
            echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 259);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 266
            if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["error_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) {
                // line 267
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 268
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 268)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 271
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 274
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "type", [], "any", false, false, false, 274) == "datetime")) {
            // line 275
            echo "\t\t\t\t\t<div id=\"custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 275);
            echo "\" class=\"form-group custom-field\" data-sort=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "sort_order", [], "any", false, false, false, 275);
            echo "\">
\t\t\t\t\t\t<label class=\"col-2 control-label\" for=\"input-custom-field";
            // line 276
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 276);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 276);
            echo "</label>
\t\t\t\t\t\t<div class=\"col-10\">
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
            // line 279
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "location", [], "any", false, false, false, 279);
            echo "][";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 279);
            echo "]\" value=\"<?php echo (isset(\$register_custom_field[\$custom_field['custom_field_id']]) ? \$register_custom_field[\$custom_field['custom_field_id']] : \$custom_field['value']); ?>\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "name", [], "any", false, false, false, 279);
            echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
            echo twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 279);
            echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 286
            if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["error_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 286)] ?? null) : null)) {
                // line 287
                echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 288
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "custom_field_id", [], "any", false, false, false, 288)] ?? null) : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t";
        }
        // line 296
        echo "\t\t\t</fieldset>

\t\t\t<fieldset>
\t\t\t\t
\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 303
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 304
        if (($context["error_password"] ?? null)) {
            // line 305
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 307
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-sm-6\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 309
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 310
        if (($context["error_confirm"] ?? null)) {
            // line 311
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 313
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-md-12 text-center\">";
        // line 321
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 322
        if (($context["text_agree"] ?? null)) {
            // line 323
            echo "\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t";
            // line 325
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 326
            if (($context["agree"] ?? null)) {
                // line 327
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 329
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t\t\t\t\t\t\t";
            }
            // line 331
            echo "\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 332
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-hero\" />
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 337
            echo "\t\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 339
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-hero\" />
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 344
        echo "           
\t\t\t\t\t</div>
          
          
\t\t\t\t</div><br>

\t\t\t</fieldset>
      <div class=\"text-center\">
      ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["text_account_already"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
            // line 353
            echo "
\t\t\t\t\t\t\tAlready Registered?
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 355
            echo twig_get_attribute($this->env, $this->source, $context["login"], "href", [], "any", false, false, false, 355);
            echo "\">Login Now</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 358
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
        // line 457
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.time').datetimepicker({language: '";
        // line 459
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$('.datetime').datetimepicker({language: '";
        // line 461
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t//--></script>";
        // line 462
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
        return array (  1063 => 462,  1059 => 461,  1054 => 459,  1049 => 457,  948 => 358,  939 => 355,  935 => 353,  931 => 352,  921 => 344,  913 => 339,  909 => 337,  901 => 332,  898 => 331,  894 => 329,  890 => 327,  888 => 326,  884 => 325,  880 => 323,  878 => 322,  874 => 321,  864 => 313,  858 => 311,  856 => 310,  850 => 309,  846 => 307,  840 => 305,  838 => 304,  832 => 303,  823 => 296,  816 => 291,  810 => 288,  807 => 287,  805 => 286,  789 => 279,  781 => 276,  774 => 275,  771 => 274,  766 => 271,  760 => 268,  757 => 267,  755 => 266,  739 => 259,  731 => 256,  724 => 255,  721 => 254,  716 => 251,  710 => 248,  707 => 247,  705 => 246,  689 => 239,  681 => 236,  674 => 235,  671 => 234,  666 => 231,  660 => 228,  657 => 227,  655 => 226,  649 => 225,  644 => 223,  639 => 221,  634 => 219,  627 => 218,  624 => 217,  619 => 214,  613 => 211,  610 => 210,  608 => 209,  605 => 208,  599 => 206,  595 => 204,  593 => 203,  591 => 202,  589 => 201,  579 => 200,  572 => 198,  565 => 197,  562 => 196,  557 => 193,  551 => 190,  548 => 189,  546 => 188,  528 => 187,  521 => 185,  514 => 184,  511 => 183,  506 => 180,  500 => 177,  497 => 176,  495 => 175,  492 => 174,  485 => 172,  480 => 170,  472 => 169,  469 => 168,  464 => 166,  456 => 165,  453 => 164,  451 => 163,  448 => 162,  444 => 161,  438 => 158,  431 => 157,  428 => 156,  423 => 153,  417 => 150,  414 => 149,  412 => 148,  409 => 147,  402 => 145,  397 => 143,  389 => 142,  386 => 141,  381 => 139,  373 => 138,  370 => 137,  368 => 136,  365 => 135,  361 => 134,  355 => 131,  348 => 130,  345 => 129,  339 => 128,  333 => 124,  327 => 122,  325 => 121,  320 => 118,  314 => 117,  306 => 115,  298 => 113,  295 => 112,  291 => 111,  287 => 110,  279 => 109,  272 => 107,  265 => 106,  262 => 105,  258 => 104,  252 => 100,  246 => 98,  244 => 97,  238 => 96,  234 => 94,  228 => 92,  226 => 91,  220 => 90,  212 => 84,  206 => 82,  204 => 81,  198 => 80,  192 => 76,  186 => 74,  184 => 73,  178 => 72,  171 => 67,  165 => 66,  159 => 63,  155 => 62,  151 => 60,  145 => 57,  141 => 56,  137 => 54,  135 => 53,  133 => 52,  129 => 51,  120 => 49,  113 => 45,  107 => 42,  102 => 40,  97 => 37,  91 => 34,  87 => 32,  85 => 31,  74 => 22,  63 => 19,  60 => 18,  56 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
