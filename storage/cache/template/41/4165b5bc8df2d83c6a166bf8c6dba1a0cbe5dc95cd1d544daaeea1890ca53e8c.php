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

/* extension/module/elfinder_ui.twig */
class __TwigTemplate_aa80666ec6eab5c0a9e5b14868ba101c143499ae7231563619bc9a046e7dacc6 extends \Twig\Template
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
        // line 9
        echo "<div class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 13
        echo ($context["heading_title_mtitle"] ?? null);
        echo "</h4>
\t    <!--h5 class=\"modal-title\" style=\"overflow-wrap:break-word\">";
        // line 14
        echo ($context["connector_url"] ?? null);
        echo "</h5-->
      </div>
      <div class=\"modal-body\">
        <div class=\"row\">
          <div id=\"elfinder\" data-connector-url=\"";
        // line 18
        echo ($context["connector_url"] ?? null);
        echo "\">";
        echo ($context["test"] ?? null);
        echo "</div>
        </div>
\t  </div>
\t  <div class=\"modal-footer\">
\t\t<span class=\"insert_image_span\"></span>
\t\t<input type=\"hidden\" name=\"insert_image_input\" value=\"\" id=\"insert_image_input\">
\t\t<button disabled type=\"button\" class=\"insert_image\" data-dismiss=\"modal\" aria-hidden=\"true\" value=\"\" disabled style=\"color:#a5a5a5;\">";
        // line 24
        echo ($context["insert_image"] ?? null);
        echo "</button>
\t  </div>
    </div>
  </div>

  <!--script src=\"view/javascript/elfinder/js/elfinder.min.js\"></script-->
  <script src=\"view/javascript/elfinder/js/extras/editors.default.min.js\"></script>
  <script type=\"text/javascript\" charset=\"utf-8\">

  // Documentation for client options:
  // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
  \$(document).ready(function() {
    var elfinder = \$('#elfinder');
    var elfinderConnectorUrl = elfinder.data('connector-url');
\t
    elfinder.elfinder({
      url: elfinderConnectorUrl,
\t  getfile: {multiple: ";
        // line 41
        if (($context["multi"] ?? null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",},
\t  handlers:{
\t\tselect: function (event, elfinderInstance) {
\t\t\t";
        // line 44
        if (($context["multi"] ?? null)) {
            echo "\t\t\t
\t\t\t  //for multi\t\t\t
\t\t\t  var fileInfo = elfinderInstance.file(event.data.selected);\t\t
\t\t\t  var fileUrls = event.data.selected;
\t\t\t  var multiselect = [];
\t\t\t  \$.each(fileUrls, function(index, value){
\t\t\t\t  multiselect.push(elfinderInstance.url(value));
\t\t\t  });
\t\t\t  \$('.insert_image_span').html('');
\t\t\t
\t\t\t  if (fileUrls.length === 0) {
\t\t\t    \$('.insert_image_span').html('');
\t\t\t\t\$('#insert_image_input').val('');
\t\t\t\t\$('button.insert_image').prop('disabled', true);
\t\t\t\t\$('button.insert_image').prop('style', 'color:#a5a5a5;');
\t\t\t  } else {
\t\t\t\t\$.each(multiselect,function(index,value){
\t\t\t\t\t\$('.insert_image_span').append(\"<span class='badge badge-secondary mr-2'>\"+value+\"</span>\");
\t\t\t\t});\t\t\t\t
\t\t\t\t\$('#insert_image_input').val(multiselect.join());
\t\t\t\t\$('button.insert_image').prop('disabled', false);
\t\t\t\t\$('button.insert_image').prop('style', '');
\t\t\t  }
\t\t\t  console.log(multiselect);
\t\t\t
\t\t\t";
        } else {
            // line 70
            echo "\t\t\t  //for single
\t\t\t  fileInfo = elfinderInstance.file(event.data.selected);
\t\t\t  fileUrl = elfinderInstance.url(event.data.selected);
\t\t\t  
\t\t\t  if (fileInfo && fileInfo.mime != 'directory') {
\t\t\t\t\$('.insert_image_span').html(\"<span class='badge badge-secondary mr-2'>\"+fileUrl+\"</span>\");
\t\t\t\t\$('#insert_image_input').val(fileUrl);
\t\t\t\t\$('button.insert_image').prop('disabled', false);
\t\t\t\t\$('button.insert_image').prop('style', '');
\t\t\t  } else {
\t\t\t\t\$('.insert_image_span').html('');
\t\t\t\t\$('#insert_image_input').val('');
\t\t\t\t\$('button.insert_image').prop('disabled', true);
\t\t\t\t\$('button.insert_image').prop('style', 'color:#a5a5a5;');
\t\t\t  }
\t\t\t";
        }
        // line 86
        echo "\t\t  }
\t    }
      });
    });
  </script>
  <!--insert image to target-->
  <script type=\"text/javascript\"><!--
  ";
        // line 93
        if (($context["target"] ?? null)) {
            // line 94
            echo "    \$('.insert_image').on('click', function(e) {
\t  //var img_url = \$('.insert_image_span').text();
\t  var img_url = \$('#insert_image_input').val();
\t
\t  var target_img_url = img_url.replace(/\\.\\.\\/image\\/(.+)\$/i,'\$1');
\t  //var abs_img_url = \"";
            // line 99
            echo ($context["path"] ?? null);
            echo "\" + img_url;

\t  ";
            // line 101
            if (($context["thumb"] ?? null)) {
                // line 102
                echo "\t    \$.ajax({
\t\t  url:'index.php?route=extension/module/elfinder/thumb&user_token=";
                // line 103
                echo ($context["user_token"] ?? null);
                echo "&img_url='+target_img_url,
  \t\t  type: 'post',
\t\t  dataType: 'html',
\t\t  cache: false,
\t\t  success: function(thumb_img) {
\t\t\t//alert(\$.parseJSON(thumb));
\t\t\t\$('#";
                // line 109
                echo ($context["thumb"] ?? null);
                echo "').find('img').attr('src', \$.parseJSON(thumb_img));
\t\t  }\t
\t    });\t
\t  ";
            }
            // line 113
            echo "\t
\t  \$('#";
            // line 114
            echo ($context["target"] ?? null);
            echo "').val(target_img_url);
    });
  ";
        }
        // line 117
        echo "  
  ";
        // line 118
        if (($context["multi"] ?? null)) {
            // line 119
            echo "    \$('.insert_image').on('click', function(e) {
\t  ";
            // line 120
            if ((($context["multi"] ?? null) == "option")) {
                // line 121
                echo "\t    console.log('o');
\t  ";
            } elseif ((            // line 122
($context["multi"] ?? null) == "product")) {
                // line 123
                echo "\t    console.log('p');
\t  ";
            } elseif ((            // line 124
($context["multi"] ?? null) == "banner")) {
                // line 125
                echo "\t    console.log('b');
\t  ";
            }
            // line 127
            echo "\t
\t  var option_value_row = ";
            // line 128
            echo ($context["option_value_row"] ?? null);
            echo ";
\t  var elfinder_language_id = ";
            // line 129
            echo ($context["elfinder_language_id"] ?? null);
            echo ";
\t  
\t  //alert(";
            // line 131
            echo ($context["elfinder_language_id"] ?? null);
            echo ");
\t  //populate the rows with ajax
\t  var img_url = \$('#insert_image_input').val();
\t  var img_url_arr = img_url.split(\",\");\t
\t  
\t  jQuery.each(img_url_arr, function(index, value){
\t\t";
            // line 137
            if ((($context["multi"] ?? null) == "option")) {
                // line 138
                echo "\t\t  addOptionValue();
\t\t";
            } elseif ((            // line 139
($context["multi"] ?? null) == "product")) {
                // line 140
                echo "\t\t  addImage();
\t\t";
            } elseif ((            // line 141
($context["multi"] ?? null) == "banner")) {
                // line 142
                echo "\t\t  addImage(elfinder_language_id);
\t\t";
            }
            // line 144
            echo "\t\t
\t\tvar target_img_url = value.replace(/\\.\\.\\/image\\/(.+)\$/i,'\$1');
\t\t\$.ajax({
\t\t  url:'index.php?route=extension/module/elfinder/thumb&user_token=";
            // line 147
            echo ($context["user_token"] ?? null);
            echo "&img_url='+target_img_url,
\t\t  type: 'post',
\t\t  dataType: 'html',
\t\t  cache: false,
\t\t  success: function(thumb_img) {\t\t\t\t
\t\t\tvar selector_img = \"#thumb-image\"+option_value_row;
\t\t\tvar selector_inp = \"#input-image\"+option_value_row;
\t\t\t\$(selector_img).find('img').attr('src', \$.parseJSON(thumb_img));
\t\t\t\$(selector_inp).val(target_img_url);
\t\t\t  option_value_row++;
\t\t  }\t
\t\t});
      });
\t});
  ";
        }
        // line 162
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/elfinder_ui.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 162,  261 => 147,  256 => 144,  252 => 142,  250 => 141,  247 => 140,  245 => 139,  242 => 138,  240 => 137,  231 => 131,  226 => 129,  222 => 128,  219 => 127,  215 => 125,  213 => 124,  210 => 123,  208 => 122,  205 => 121,  203 => 120,  200 => 119,  198 => 118,  195 => 117,  189 => 114,  186 => 113,  179 => 109,  170 => 103,  167 => 102,  165 => 101,  160 => 99,  153 => 94,  151 => 93,  142 => 86,  124 => 70,  95 => 44,  85 => 41,  65 => 24,  54 => 18,  47 => 14,  43 => 13,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/elfinder_ui.twig", "");
    }
}
