/*elfinder by opencartboost */
$(document).ready(function() {  
	$('#addElfinderMultiOption, #addElfinderMultiProduct, #addElfinderMultiBanner').on('click', function() {
		
		var $button = $(this);
		var $icon   = $button.find('> i');
		
		var clicker = $button.attr('id');
		var elfinder_language_id;
		if(clicker == "addElfinderMultiOption"){
			var row_number = option_value_row;
			var multi_get = 'option';
		}else if(clicker == "addElfinderMultiProduct"){
			var row_number = image_row;
			var multi_get = 'product';
		}else if(clicker == "addElfinderMultiBanner"){
			var row_number = image_row;
			var multi_get = 'banner';
			elfinder_language_id = $button.attr('elfinder_language_id');
		}		
		
		$('#modal-image').remove();

		$.ajax({
			url: 'index.php?route=extension/module/elfinder/ui&multi=' + multi_get + '&thumb=multi&option_value_row=' + row_number + "&elfinder_language_id=" + elfinder_language_id + '&user_token=' + getURLVar('user_token'),
			dataType: 'html',
			getfile: {
				multiple: true,
			},
			beforeSend: function() {
				$button.prop('disabled', true);
				if ($icon.length) {
					$icon.attr('class', 'fa fa-circle-o-notch fa-spin');
				}
			},
			complete: function() {
				$button.prop('disabled', false);

				if ($icon.length) {
					$icon.attr('class', 'fa fa-upload');
				}
			},
			success: function(html) {
				$('body').append('<div id="modal-image" class="modal">' + html + '</div>');

				$('#modal-image').modal('show');
			}
		});
		//$element.popover('destroy');
	});
});
