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

/* setting/setting.twig */
class __TwigTemplate_6e9a462f1d4516c7ce068eb0befeb1137cee90fd79654adc4fbafecf2f837d25 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 44
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 46
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 47
        if (($context["error_meta_title"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 49
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 52
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 54
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 58
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 60
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 64
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 68
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 68) == ($context["config_theme"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
                echo "</option>                    
                    ";
            } else {
                // line 70
                echo "                    
                    <option value=\"";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 71);
                echo "</option>                    
                    ";
            }
            // line 73
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 79
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 83
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 83) == ($context["config_layout_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 84
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 84);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 84);
                echo "</option>                    
                    ";
            } else {
                // line 85
                echo "                    
                    <option value=\"";
                // line 86
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 86);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 86);
                echo "</option>                    
                    ";
            }
            // line 88
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 95
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 97
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 98
        if (($context["error_name"] ?? null)) {
            // line 99
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 100
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 103
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 105
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 106
        if (($context["error_owner"] ?? null)) {
            // line 107
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 108
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 111
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 113
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 114
        if (($context["error_address"] ?? null)) {
            // line 115
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 116
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 119
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 121
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 125
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 127
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 128
        if (($context["error_email"] ?? null)) {
            // line 129
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 130
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 133
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 135
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 136
        if (($context["error_telephone"] ?? null)) {
            // line 137
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 138
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 141
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 143
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 147
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 148
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 149
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 153
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 155
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 159
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 161
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 164
        if (($context["locations"] ?? null)) {
            // line 165
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 168
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 169
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 169), ($context["config_location"] ?? null))) {
                    // line 170
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 170);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 171);
                    echo "
                      ";
                } else {
                    // line 173
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 173);
                    echo "\" />
                      ";
                    // line 174
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 174);
                    echo "
                      ";
                }
                // line 175
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo " </div>
              </div>
              ";
        }
        // line 179
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 182
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 186
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 186) == ($context["config_country_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 187);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 187);
                echo "</option>                    
                    ";
            } else {
                // line 188
                echo "                    
                    <option value=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 189);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 189);
                echo "</option>                    
                    ";
            }
            // line 191
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 196
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 203
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 207
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 207) == ($context["config_timezone"] ?? null))) {
                // line 208
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 208);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 208);
                echo "</option>
                      ";
            } else {
                // line 210
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 210);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 210);
                echo "</option>
                      ";
            }
            // line 212
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 217
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 221
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 221) == ($context["config_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 222);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
                echo "</option>                    
                    ";
            } else {
                // line 223
                echo "                    
                    <option value=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 224);
                echo "</option>                    
                    ";
            }
            // line 226
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 231
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 235
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 235) == ($context["config_admin_language"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 236);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 236);
                echo "</option>                    
                    ";
            } else {
                // line 237
                echo "                    
                    <option value=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 238);
                echo "</option>                    
                    ";
            }
            // line 240
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 245
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 249
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 249) == ($context["config_currency"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 250);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 250);
                echo "</option>                    
                    ";
            } else {
                // line 251
                echo "                    
                    <option value=\"";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 252);
                echo "</option>                    
                    ";
            }
            // line 254
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 259
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 261
        if (($context["config_currency_auto"] ?? null)) {
            // line 262
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 263
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 265
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 266
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 267
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 268
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 269
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 270
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 272
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 273
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 274
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 278
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 282
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 282) == ($context["config_length_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 283
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 283);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 283);
                echo "</option>                    
                    ";
            } else {
                // line 284
                echo "                    
                    <option value=\"";
                // line 285
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 285);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 285);
                echo "</option>                    
                    ";
            }
            // line 287
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 292
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 296
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 296) == ($context["config_weight_class_id"] ?? null))) {
                echo "                    
                    <option value=\"";
                // line 297
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 297);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 297);
                echo "</option>                    
                    ";
            } else {
                // line 298
                echo "                    
                    <option value=\"";
                // line 299
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 299);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 299);
                echo "</option>                    
                    ";
            }
            // line 301
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
";
        // line 307
        echo ($context["fbcapidyad_html"] ?? null);
        echo "
              <fieldset>
                <legend>";
        // line 309
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 311
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 313
        if (($context["config_product_count"] ?? null)) {
            // line 314
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 315
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 317
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 318
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 319
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 320
        if ( !($context["config_product_count"] ?? null)) {
            // line 321
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 322
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 324
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 325
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 326
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 330
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 332
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 333
        if (($context["error_limit_admin"] ?? null)) {
            // line 334
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 335
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 339
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 341
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 343
        if (($context["config_review_status"] ?? null)) {
            // line 344
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 345
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 347
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 348
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 349
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 350
        if ( !($context["config_review_status"] ?? null)) {
            // line 351
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 352
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 354
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 355
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 356
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 360
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 362
        if (($context["config_review_guest"] ?? null)) {
            // line 363
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 364
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 366
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 367
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 368
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 369
        if ( !($context["config_review_guest"] ?? null)) {
            // line 370
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 371
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 373
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 375
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 380
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 382
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 384
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 385
        if (($context["error_voucher_min"] ?? null)) {
            // line 386
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 387
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 390
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 392
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 393
        if (($context["error_voucher_max"] ?? null)) {
            // line 394
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 395
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 399
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 401
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 403
        if (($context["config_tax"] ?? null)) {
            // line 404
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 405
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 407
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 408
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 409
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 410
        if ( !($context["config_tax"] ?? null)) {
            // line 411
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 412
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 414
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 415
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 416
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 420
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 423
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 424
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 425
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 426
            echo "                      
                      <option value=\"shipping\">";
            // line 427
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 429
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 430
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 431
            echo "                      
                      <option value=\"payment\">";
            // line 432
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 433
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 438
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 441
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 442
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 443
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 444
            echo "                      
                      <option value=\"shipping\">";
            // line 445
            echo ($context["text_shipping"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 447
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 448
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 449
            echo "                      
                      <option value=\"payment\">";
            // line 450
            echo ($context["text_payment"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 451
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 457
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 459
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 461
        if (($context["config_customer_online"] ?? null)) {
            // line 462
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 463
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 465
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 466
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 467
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 468
        if ( !($context["config_customer_online"] ?? null)) {
            // line 469
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 470
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 472
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 473
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 474
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 478
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 480
        if (($context["config_customer_activity"] ?? null)) {
            // line 481
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 482
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 484
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 485
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 486
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 487
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 488
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 489
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 491
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 492
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 493
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 497
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 499
        if (($context["config_customer_search"] ?? null)) {
            // line 500
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 501
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 503
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 504
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 505
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 506
        if ( !($context["config_customer_search"] ?? null)) {
            // line 507
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 508
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 510
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 511
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 512
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 516
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 519
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 520
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 520) == ($context["config_customer_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 521
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 521);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 521);
                echo "</option>                      
                      ";
            } else {
                // line 522
                echo "                      
                      <option value=\"";
                // line 523
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 523);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 523);
                echo "</option>                      
                      ";
            }
            // line 525
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 530
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 531
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 532
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 533
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 533), ($context["config_customer_group_display"] ?? null))) {
                // line 534
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 534);
                echo "\" checked=\"checked\" />
                        ";
                // line 535
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 535);
                echo "
                        ";
            } else {
                // line 537
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 537);
                echo "\" />
                        ";
                // line 538
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 538);
                echo "
                        ";
            }
            // line 539
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 542
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 543
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 544
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 547
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 549
        if (($context["config_customer_price"] ?? null)) {
            // line 550
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 551
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 553
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 554
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 555
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 556
        if ( !($context["config_customer_price"] ?? null)) {
            // line 557
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 558
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 560
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 561
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 562
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 566
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 568
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 569
        if (($context["error_login_attempts"] ?? null)) {
            // line 570
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 571
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 574
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 577
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 579
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 579) == ($context["config_account_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 580
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 580);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 580);
                echo "</option>                      
                      ";
            } else {
                // line 581
                echo "                      
                      <option value=\"";
                // line 582
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 582);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 582);
                echo "</option>                      
                      ";
            }
            // line 584
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 590
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 592
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 594
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 598
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 600
        if (($context["config_cart_weight"] ?? null)) {
            // line 601
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 602
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 604
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 605
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 606
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 607
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 608
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 609
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 611
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 612
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 613
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 617
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 619
        if (($context["config_checkout_guest"] ?? null)) {
            // line 620
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 621
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 623
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 624
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 625
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 626
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 627
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 628
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 630
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 631
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 632
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 636
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 639
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 641
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 641) == ($context["config_checkout_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 642
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 642);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 642);
                echo "</option>                      
                      ";
            } else {
                // line 643
                echo "                      
                      <option value=\"";
                // line 644
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 644);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 644);
                echo "</option>                      
                      ";
            }
            // line 646
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 651
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 654
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 655
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 655) == ($context["config_order_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 656
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 656);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 656);
                echo "</option>                      
                      ";
            } else {
                // line 657
                echo "                      
                      <option value=\"";
                // line 658
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 658);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 658);
                echo "</option>                      
                      ";
            }
            // line 660
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 665
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 667
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 668
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 669
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 669), ($context["config_processing_status"] ?? null))) {
                // line 670
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 670);
                echo "\" checked=\"checked\" />
                          ";
                // line 671
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 671);
                echo "
                          ";
            } else {
                // line 673
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 673);
                echo "\" />
                          ";
                // line 674
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 674);
                echo "
                          ";
            }
            // line 675
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 677
        echo " </div>
                    ";
        // line 678
        if (($context["error_processing_status"] ?? null)) {
            // line 679
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 680
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 683
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 686
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 687
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 687), ($context["config_complete_status"] ?? null))) {
                // line 688
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 688);
                echo "\" checked=\"checked\" />
                          ";
                // line 689
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 689);
                echo "
                          ";
            } else {
                // line 691
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 691);
                echo "\" />
                          ";
                // line 692
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 692);
                echo "
                          ";
            }
            // line 693
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 695
        echo " </div>
                    ";
        // line 696
        if (($context["error_complete_status"] ?? null)) {
            // line 697
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 698
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 701
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 704
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 705
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 705) == ($context["config_fraud_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 706
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 706);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 706);
                echo "</option>                      
                      ";
            } else {
                // line 707
                echo "                      
                      <option value=\"";
                // line 708
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 708);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 708);
                echo "</option>                      
                      ";
            }
            // line 710
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 715
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 718
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 719
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 720
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 720) == ($context["config_api_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 721
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 721);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 721);
                echo "</option>                      
                      ";
            } else {
                // line 722
                echo "                      
                      <option value=\"";
                // line 723
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 723);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 723);
                echo "</option>                      
                      ";
            }
            // line 725
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 731
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 733
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 735
        if (($context["config_stock_display"] ?? null)) {
            // line 736
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 737
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 739
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 740
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 741
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 742
        if ( !($context["config_stock_display"] ?? null)) {
            // line 743
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 744
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 746
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 747
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 748
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 752
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 754
        if (($context["config_stock_warning"] ?? null)) {
            // line 755
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 756
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 758
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 759
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 760
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 761
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 762
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 763
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 765
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 766
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 767
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 771
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 773
        if (($context["config_stock_checkout"] ?? null)) {
            // line 774
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 775
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 777
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 778
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 779
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 780
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 781
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 782
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 784
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 785
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 786
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 791
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 793
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 796
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 797
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 797) == ($context["config_affiliate_group_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 798
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 798);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 798);
                echo "</option>                      
                      ";
            } else {
                // line 799
                echo "                      
                      <option value=\"";
                // line 800
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 800);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 800);
                echo "</option>                      
                      ";
            }
            // line 802
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 807
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 809
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 810
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 811
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 813
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 814
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 815
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 816
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 817
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 818
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 820
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 821
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 822
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 826
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 828
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 829
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 830
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 832
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 833
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 834
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 835
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 836
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 837
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 839
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 840
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 841
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 845
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 847
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 851
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 854
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 855
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 856
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 856) == ($context["config_affiliate_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 857
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 857);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 857);
                echo "</option>                      
                      ";
            } else {
                // line 858
                echo "                      
                      <option value=\"";
                // line 859
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 859);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 859);
                echo "</option>                      
                      ";
            }
            // line 861
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 867
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 869
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 872
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 873
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 874
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 874) == ($context["config_return_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 875
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 875);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 875);
                echo "</option>                      
                      ";
            } else {
                // line 876
                echo "                      
                      <option value=\"";
                // line 877
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 877);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 877);
                echo "</option>                      
                      ";
            }
            // line 879
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 884
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 887
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 888
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 888) == ($context["config_return_status_id"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 889
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 889);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 889);
                echo "</option>                      
                      ";
            } else {
                // line 890
                echo "                      
                      <option value=\"";
                // line 891
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 891);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 891);
                echo "</option>                      
                      ";
            }
            // line 893
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 899
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 901
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 904
        echo ($context["text_none"] ?? null);
        echo "</option>                      
                      ";
        // line 905
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 906
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 906) == ($context["config_captcha"] ?? null))) {
                echo "                      
                      <option value=\"";
                // line 907
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 907);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 907);
                echo "</option>                      
                      ";
            } else {
                // line 908
                echo "                      
                      <option value=\"";
                // line 909
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 909);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 909);
                echo "</option>                      
                      ";
            }
            // line 911
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 916
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 918
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 919
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 920
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 920), ($context["config_captcha_page"] ?? null))) {
                // line 921
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 921);
                echo "\" checked=\"checked\" />
                          ";
                // line 922
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 922);
                echo "
                          ";
            } else {
                // line 924
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 924);
                echo "\" />
                          ";
                // line 925
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 925);
                echo "
                          ";
            }
            // line 926
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 935
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 936
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 937
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 941
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 942
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 943
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 949
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 951
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 954
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 955
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 956
            echo "                      
                      <option value=\"mail\">";
            // line 957
            echo ($context["text_mail"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 959
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 960
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        } else {
            // line 961
            echo "                      
                      <option value=\"smtp\">";
            // line 962
            echo ($context["text_smtp"] ?? null);
            echo "</option>                      
                      ";
        }
        // line 963
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 968
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 970
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 974
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 976
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 980
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 982
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 986
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 988
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 992
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 994
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 998
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1000
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1005
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1007
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1009
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1010
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1011
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1011), ($context["config_mail_alert"] ?? null))) {
                // line 1012
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1012);
                echo "\" checked=\"checked\" />
                          ";
                // line 1013
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1013);
                echo "
                          ";
            } else {
                // line 1015
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1015);
                echo "\" />
                          ";
                // line 1016
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1016);
                echo "
                          ";
            }
            // line 1017
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1019
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1023
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1025
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1032
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1034
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1036
        if (($context["config_maintenance"] ?? null)) {
            // line 1037
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1038
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1040
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1041
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1042
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1043
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1044
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1045
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1047
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1048
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1049
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1053
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1055
        if (($context["config_seo_url"] ?? null)) {
            // line 1056
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1057
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1059
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1060
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1061
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1062
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1063
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1064
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1066
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1067
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1068
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1072
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1074
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1078
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1080
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1085
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1087
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1089
        if (($context["config_secure"] ?? null)) {
            // line 1090
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1091
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1093
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1094
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1095
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1096
        if ( !($context["config_secure"] ?? null)) {
            // line 1097
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1098
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1100
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1101
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1102
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1106
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1108
        if (($context["config_password"] ?? null)) {
            // line 1109
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1110
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1112
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1113
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1114
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1115
        if ( !($context["config_password"] ?? null)) {
            // line 1116
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1117
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1119
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1120
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1121
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1125
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1127
        if (($context["config_shared"] ?? null)) {
            // line 1128
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1129
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1131
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1132
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1133
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1134
        if ( !($context["config_shared"] ?? null)) {
            // line 1135
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1136
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1138
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1139
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1140
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1144
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1146
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1147
        if (($context["error_encryption"] ?? null)) {
            // line 1148
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1149
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1153
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1155
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1157
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1161
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1163
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1167
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1169
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1174
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1176
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1178
        if (($context["config_error_display"] ?? null)) {
            // line 1179
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1180
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1182
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1183
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1184
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1185
        if ( !($context["config_error_display"] ?? null)) {
            // line 1186
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1187
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1189
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1190
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1191
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1195
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1197
        if (($context["config_error_log"] ?? null)) {
            // line 1198
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1199
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1201
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1202
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1203
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1204
        if ( !($context["config_error_log"] ?? null)) {
            // line 1205
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1206
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1208
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1209
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1210
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1214
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1216
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1217
        if (($context["error_log"] ?? null)) {
            // line 1218
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1219
        echo " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1231
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1253
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1262
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1268
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1275
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1290
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3612 => 1290,  3594 => 1275,  3584 => 1268,  3575 => 1262,  3563 => 1253,  3538 => 1231,  3524 => 1219,  3518 => 1218,  3516 => 1217,  3510 => 1216,  3505 => 1214,  3499 => 1210,  3494 => 1209,  3491 => 1208,  3486 => 1206,  3483 => 1205,  3481 => 1204,  3478 => 1203,  3473 => 1202,  3470 => 1201,  3465 => 1199,  3462 => 1198,  3460 => 1197,  3455 => 1195,  3449 => 1191,  3444 => 1190,  3441 => 1189,  3436 => 1187,  3433 => 1186,  3431 => 1185,  3428 => 1184,  3423 => 1183,  3420 => 1182,  3415 => 1180,  3412 => 1179,  3410 => 1178,  3405 => 1176,  3400 => 1174,  3390 => 1169,  3383 => 1167,  3374 => 1163,  3367 => 1161,  3358 => 1157,  3351 => 1155,  3346 => 1153,  3340 => 1149,  3334 => 1148,  3332 => 1147,  3326 => 1146,  3319 => 1144,  3313 => 1140,  3308 => 1139,  3305 => 1138,  3300 => 1136,  3297 => 1135,  3295 => 1134,  3292 => 1133,  3287 => 1132,  3284 => 1131,  3279 => 1129,  3276 => 1128,  3274 => 1127,  3267 => 1125,  3261 => 1121,  3256 => 1120,  3253 => 1119,  3248 => 1117,  3245 => 1116,  3243 => 1115,  3240 => 1114,  3235 => 1113,  3232 => 1112,  3227 => 1110,  3224 => 1109,  3222 => 1108,  3215 => 1106,  3209 => 1102,  3204 => 1101,  3201 => 1100,  3196 => 1098,  3193 => 1097,  3191 => 1096,  3188 => 1095,  3183 => 1094,  3180 => 1093,  3175 => 1091,  3172 => 1090,  3170 => 1089,  3163 => 1087,  3158 => 1085,  3148 => 1080,  3141 => 1078,  3132 => 1074,  3125 => 1072,  3119 => 1068,  3114 => 1067,  3111 => 1066,  3106 => 1064,  3103 => 1063,  3101 => 1062,  3098 => 1061,  3093 => 1060,  3090 => 1059,  3085 => 1057,  3082 => 1056,  3080 => 1055,  3073 => 1053,  3067 => 1049,  3062 => 1048,  3059 => 1047,  3054 => 1045,  3051 => 1044,  3049 => 1043,  3046 => 1042,  3041 => 1041,  3038 => 1040,  3033 => 1038,  3030 => 1037,  3028 => 1036,  3021 => 1034,  3016 => 1032,  3004 => 1025,  2997 => 1023,  2991 => 1019,  2983 => 1017,  2978 => 1016,  2973 => 1015,  2968 => 1013,  2963 => 1012,  2961 => 1011,  2958 => 1010,  2954 => 1009,  2947 => 1007,  2942 => 1005,  2932 => 1000,  2927 => 998,  2918 => 994,  2913 => 992,  2904 => 988,  2897 => 986,  2888 => 982,  2883 => 980,  2874 => 976,  2867 => 974,  2858 => 970,  2851 => 968,  2844 => 963,  2839 => 962,  2836 => 961,  2831 => 960,  2826 => 959,  2821 => 957,  2818 => 956,  2813 => 955,  2809 => 954,  2801 => 951,  2796 => 949,  2787 => 943,  2781 => 942,  2775 => 941,  2768 => 937,  2762 => 936,  2758 => 935,  2749 => 928,  2741 => 926,  2736 => 925,  2731 => 924,  2726 => 922,  2721 => 921,  2719 => 920,  2716 => 919,  2712 => 918,  2707 => 916,  2695 => 911,  2688 => 909,  2685 => 908,  2678 => 907,  2673 => 906,  2669 => 905,  2665 => 904,  2657 => 901,  2652 => 899,  2639 => 893,  2632 => 891,  2629 => 890,  2622 => 889,  2617 => 888,  2613 => 887,  2605 => 884,  2593 => 879,  2586 => 877,  2583 => 876,  2576 => 875,  2571 => 874,  2567 => 873,  2563 => 872,  2555 => 869,  2550 => 867,  2537 => 861,  2530 => 859,  2527 => 858,  2520 => 857,  2515 => 856,  2511 => 855,  2507 => 854,  2499 => 851,  2490 => 847,  2483 => 845,  2477 => 841,  2472 => 840,  2469 => 839,  2464 => 837,  2461 => 836,  2459 => 835,  2456 => 834,  2451 => 833,  2448 => 832,  2443 => 830,  2440 => 829,  2438 => 828,  2431 => 826,  2425 => 822,  2420 => 821,  2417 => 820,  2412 => 818,  2409 => 817,  2407 => 816,  2404 => 815,  2399 => 814,  2396 => 813,  2391 => 811,  2388 => 810,  2386 => 809,  2379 => 807,  2367 => 802,  2360 => 800,  2357 => 799,  2350 => 798,  2345 => 797,  2341 => 796,  2335 => 793,  2330 => 791,  2323 => 786,  2318 => 785,  2315 => 784,  2310 => 782,  2307 => 781,  2305 => 780,  2302 => 779,  2297 => 778,  2294 => 777,  2289 => 775,  2286 => 774,  2284 => 773,  2277 => 771,  2271 => 767,  2266 => 766,  2263 => 765,  2258 => 763,  2255 => 762,  2253 => 761,  2250 => 760,  2245 => 759,  2242 => 758,  2237 => 756,  2234 => 755,  2232 => 754,  2225 => 752,  2219 => 748,  2214 => 747,  2211 => 746,  2206 => 744,  2203 => 743,  2201 => 742,  2198 => 741,  2193 => 740,  2190 => 739,  2185 => 737,  2182 => 736,  2180 => 735,  2173 => 733,  2168 => 731,  2155 => 725,  2148 => 723,  2145 => 722,  2138 => 721,  2133 => 720,  2129 => 719,  2125 => 718,  2117 => 715,  2105 => 710,  2098 => 708,  2095 => 707,  2088 => 706,  2083 => 705,  2079 => 704,  2071 => 701,  2066 => 698,  2060 => 697,  2058 => 696,  2055 => 695,  2047 => 693,  2042 => 692,  2037 => 691,  2032 => 689,  2027 => 688,  2025 => 687,  2022 => 686,  2018 => 685,  2011 => 683,  2006 => 680,  2000 => 679,  1998 => 678,  1995 => 677,  1987 => 675,  1982 => 674,  1977 => 673,  1972 => 671,  1967 => 670,  1965 => 669,  1962 => 668,  1958 => 667,  1951 => 665,  1939 => 660,  1932 => 658,  1929 => 657,  1922 => 656,  1917 => 655,  1913 => 654,  1905 => 651,  1893 => 646,  1886 => 644,  1883 => 643,  1876 => 642,  1871 => 641,  1867 => 640,  1863 => 639,  1855 => 636,  1849 => 632,  1844 => 631,  1841 => 630,  1836 => 628,  1833 => 627,  1831 => 626,  1828 => 625,  1823 => 624,  1820 => 623,  1815 => 621,  1812 => 620,  1810 => 619,  1803 => 617,  1797 => 613,  1792 => 612,  1789 => 611,  1784 => 609,  1781 => 608,  1779 => 607,  1776 => 606,  1771 => 605,  1768 => 604,  1763 => 602,  1760 => 601,  1758 => 600,  1751 => 598,  1742 => 594,  1735 => 592,  1730 => 590,  1717 => 584,  1710 => 582,  1707 => 581,  1700 => 580,  1695 => 579,  1691 => 578,  1687 => 577,  1679 => 574,  1674 => 571,  1668 => 570,  1666 => 569,  1660 => 568,  1653 => 566,  1647 => 562,  1642 => 561,  1639 => 560,  1634 => 558,  1631 => 557,  1629 => 556,  1626 => 555,  1621 => 554,  1618 => 553,  1613 => 551,  1610 => 550,  1608 => 549,  1601 => 547,  1596 => 544,  1590 => 543,  1587 => 542,  1579 => 539,  1574 => 538,  1569 => 537,  1564 => 535,  1559 => 534,  1557 => 533,  1554 => 532,  1550 => 531,  1544 => 530,  1532 => 525,  1525 => 523,  1522 => 522,  1515 => 521,  1510 => 520,  1506 => 519,  1498 => 516,  1492 => 512,  1487 => 511,  1484 => 510,  1479 => 508,  1476 => 507,  1474 => 506,  1471 => 505,  1466 => 504,  1463 => 503,  1458 => 501,  1455 => 500,  1453 => 499,  1448 => 497,  1442 => 493,  1437 => 492,  1434 => 491,  1429 => 489,  1426 => 488,  1424 => 487,  1421 => 486,  1416 => 485,  1413 => 484,  1408 => 482,  1405 => 481,  1403 => 480,  1396 => 478,  1390 => 474,  1385 => 473,  1382 => 472,  1377 => 470,  1374 => 469,  1372 => 468,  1369 => 467,  1364 => 466,  1361 => 465,  1356 => 463,  1353 => 462,  1351 => 461,  1344 => 459,  1339 => 457,  1331 => 451,  1326 => 450,  1323 => 449,  1318 => 448,  1313 => 447,  1308 => 445,  1305 => 444,  1300 => 443,  1296 => 442,  1292 => 441,  1284 => 438,  1277 => 433,  1272 => 432,  1269 => 431,  1264 => 430,  1259 => 429,  1254 => 427,  1251 => 426,  1246 => 425,  1242 => 424,  1238 => 423,  1230 => 420,  1224 => 416,  1219 => 415,  1216 => 414,  1211 => 412,  1208 => 411,  1206 => 410,  1203 => 409,  1198 => 408,  1195 => 407,  1190 => 405,  1187 => 404,  1185 => 403,  1180 => 401,  1175 => 399,  1169 => 395,  1163 => 394,  1161 => 393,  1155 => 392,  1148 => 390,  1143 => 387,  1137 => 386,  1135 => 385,  1129 => 384,  1122 => 382,  1117 => 380,  1110 => 375,  1105 => 374,  1102 => 373,  1097 => 371,  1094 => 370,  1092 => 369,  1089 => 368,  1084 => 367,  1081 => 366,  1076 => 364,  1073 => 363,  1071 => 362,  1064 => 360,  1058 => 356,  1053 => 355,  1050 => 354,  1045 => 352,  1042 => 351,  1040 => 350,  1037 => 349,  1032 => 348,  1029 => 347,  1024 => 345,  1021 => 344,  1019 => 343,  1012 => 341,  1007 => 339,  1001 => 335,  995 => 334,  993 => 333,  987 => 332,  980 => 330,  974 => 326,  969 => 325,  966 => 324,  961 => 322,  958 => 321,  956 => 320,  953 => 319,  948 => 318,  945 => 317,  940 => 315,  937 => 314,  935 => 313,  928 => 311,  923 => 309,  918 => 307,  905 => 301,  898 => 299,  895 => 298,  888 => 297,  883 => 296,  879 => 295,  873 => 292,  861 => 287,  854 => 285,  851 => 284,  844 => 283,  839 => 282,  835 => 281,  829 => 278,  823 => 274,  818 => 273,  815 => 272,  810 => 270,  807 => 269,  805 => 268,  802 => 267,  797 => 266,  794 => 265,  789 => 263,  786 => 262,  784 => 261,  777 => 259,  765 => 254,  758 => 252,  755 => 251,  748 => 250,  743 => 249,  739 => 248,  731 => 245,  719 => 240,  712 => 238,  709 => 237,  702 => 236,  697 => 235,  693 => 234,  687 => 231,  675 => 226,  668 => 224,  665 => 223,  658 => 222,  653 => 221,  649 => 220,  643 => 217,  637 => 213,  631 => 212,  623 => 210,  615 => 208,  612 => 207,  608 => 206,  602 => 203,  592 => 196,  580 => 191,  573 => 189,  570 => 188,  563 => 187,  558 => 186,  554 => 185,  548 => 182,  543 => 179,  538 => 177,  530 => 175,  525 => 174,  520 => 173,  515 => 171,  510 => 170,  508 => 169,  505 => 168,  501 => 167,  495 => 166,  492 => 165,  490 => 164,  482 => 161,  475 => 159,  466 => 155,  459 => 153,  452 => 149,  446 => 148,  442 => 147,  433 => 143,  428 => 141,  423 => 138,  417 => 137,  415 => 136,  409 => 135,  404 => 133,  399 => 130,  393 => 129,  391 => 128,  385 => 127,  380 => 125,  371 => 121,  364 => 119,  359 => 116,  353 => 115,  351 => 114,  345 => 113,  340 => 111,  335 => 108,  329 => 107,  327 => 106,  321 => 105,  316 => 103,  311 => 100,  305 => 99,  303 => 98,  297 => 97,  292 => 95,  278 => 88,  271 => 86,  268 => 85,  261 => 84,  256 => 83,  252 => 82,  246 => 79,  233 => 73,  226 => 71,  223 => 70,  216 => 69,  211 => 68,  207 => 67,  201 => 64,  192 => 60,  187 => 58,  178 => 54,  173 => 52,  168 => 49,  162 => 48,  160 => 47,  154 => 46,  149 => 44,  141 => 39,  137 => 38,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  106 => 28,  102 => 26,  94 => 22,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
