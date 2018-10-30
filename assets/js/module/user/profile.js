// script to load edit section
function edit_section(section)
{
	$('#view_'+section).hide();
	$('#edit_'+section).show();
}

// script to view section
function load_section(section)
{

	$('#view_'+section).show();
	$('#edit_'+section).hide();
}

// script to check marital status value and show children div
$(function() {
	$('#children_div').hide(); 
	$('#marital_status').change(function(){
		if($('#marital_status').val() != 'Never Married' && $('#marital_status').val() != '0' ) {
			$('#children_div').show(); 
		} else {
			$('#children_div').hide(); 
		} 
	});
});

// script to add multiple divs for relatives
$(document).ready(function () {
	var max_fields = 3;
	var wrapper = $("#multiple_relativeDiv");
	var add_button = $("#add_moreRelative");
	var x = $('#totalrelative').val();
	$(add_button).click(function (e) {
		e.preventDefault();
		if (x < max_fields) {
			x++;
			$(wrapper).append('<div id="relativeDiv_'+x+'">\n\
				<div class="row w3-margin-top">\n\
				<div class="col-md-12 w3-text-white">\n\
				<div class=" w3-padding-small" style="background:#5E32E1">Relative No.'+x+'\n\
				<a href="#" style="padding:1px" class="delete btn w3-text-white w3-right" title="remove relative"><i class="ion-close"></i></a>\n\
				</div>\n\
				</div>\n\
				</div>\n\
				<div class="row">\n\
				<div class="col-md-12">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_name_'+x+'" class="text-uppercase c-gray-light">Relative Full Name</label>\n\
				<input type="text" class="form-control no-resize" id="relative_name_'+x+'" name="relative_name[]" required>  \n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				</div>\n\
				<div class="row">\n\
				<div class="col-md-6">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_contact_'+x+'" class="text-uppercase c-gray-light">Relative Contact Number</label>\n\
				<input type="text" class="form-control no-resize" id="relative_contact_'+x+'" name="relative_contact[]" required>\n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				<div class="col-md-6">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_relation_'+x+'" class="text-uppercase c-gray-light">Relation with you</label>\n\
				<input type="text" class="form-control no-resize" id="relative_relation_'+x+'" name="relative_relation[]" required>\n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				</div>\n\
				<div class="row">\n\
				<div class="col-md-12">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_address_'+x+'" class="text-uppercase c-gray-light">Relative Address</label>\n\
				<textarea id="relative_address_'+x+'" name="relative_address[]" required class="form-control no-resize" rows="5"></textarea> \n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				</div>\n\
        </div>'); //add input box
		} 
		else 
		{
      $.alert('<label class="w3-label w3-text-red w3-medium"><i class="fa fa-warning w3-large"></i> You Reached the maximum limit of adding ' + max_fields + ' relatives</label>');   //alert when added more than 4 input fields
  }
});
	$(wrapper).on("click", ".delete", function (e) {
		e.preventDefault();
		$(this).parent().parent().parent().parent('div').remove();
		x--;
	})
});

// angular js script
var app = angular.module("profileSectionApp", ['ngSanitize']);
app.controller("profileSectionCtrl", function ($scope, $http, $window) { 

	$scope.getCountryState = function () {
		var country = $("#country").val();
		$.ajax({
			type: "GET",
			url: BASE_URL + "user/search/advance_search/getCountryState",
			data: {
				country: country
			},
			cache: false,
			success: function (data) {
                //alert(data);
                var stateData = '';
                //console.log(JSON.parse(data));
                stateData = JSON.parse(data);
                var i;

                var state = $('#state');
                state.find('option:not(:first-child)').remove();

                for (i = 0; i < stateData.length; i++) {
                	$('#state').append('<option value="' + stateData[i].name + '/' + stateData[i].id + '">' + stateData[i].name + '</option>');
                }
            }
        });
	};

	$scope.getStateCity = function () {
		var state = $("#state").val();
		$.ajax({
			type: "GET",
			url: BASE_URL + "user/search/advance_search/getStateCity",
			data: {
				state: state
			},
			cache: false,
			success: function (data) {
                //alert(data);
                var cityData = '';
                //console.log(JSON.parse(data));
                cityData = JSON.parse(data);
                var i;

                var city = $('#native_place');
                city.find('option:not(:first-child)').remove();

                for (i = 0; i < cityData.length; i++) {
                	$('#native_place').append('<option value="' + cityData[i].name + '">' + cityData[i].name + '</option>');
                }
            }
        });
	};

});

// script to submit sectional forms
function save_section(section)
{   
	$.ajax({
		type: "POST",
		url: BASE_URL+"user/user_profile/update_"+section,
		cache: false,
		data: $('#form_'+section).serialize(),
		beforeSend: function () {
            // For Safety Disabling Section Elements for Slow Internet Connections
            $('#section_'+section).find('.form-control').prop('readonly', true);
            $('#section_'+section).find('.btn').prop('disabled', true);
        },
        success: function (response) {
        	// console.log(response);return false;
        	var data=JSON.parse(response);

        	// Re_Enabling the Elements
        	$('#section_'+section).find('.form-control').prop('readonly', false);
        	$('#section_'+section).find('.btn').prop('disabled', false);

        	// response message
        	switch(data.status){
        		case 'success':
        		$('#ajax_success_alert').show();
        		$('.ajax_success_alert').html(data.message);
        		setTimeout(function() {
        			window.location.reload();
                        }, 1500); // <-- time in milliseconds 
        		break;

        		case 'error':
        		$('#ajax_danger_alert').show();
        		$('.ajax_danger_alert').html(data.message);
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        		break;

        		case 'validation':
        		$('#ajax_validation_alert').show();
        		$('.ajax_validation_alert').html(data.message);
        		$("input[name='"+data.field+"']").focus();
        		$("input[id='"+data.field+"']").focus();
        		$("select[name='"+data.field+"']").focus();
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        		break;
        	}
        	
        },
        error: function (response) {
            // Re_Enabling the Elements
            $('#section_'+section).find('.form-control').prop('readonly', false);
            $('#section_'+section).find('.btn').prop('disabled', false);
            $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and Save again.');
            setTimeout(function() {
            	$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        }
    });
}

// script to verify email and mobile form
function verify(entity,value)
{   
	$.ajax({
		type: "POST",
		url: BASE_URL+"user/user_profile/verify_"+entity,
		cache: false,
		data: {entity: value},
		beforeSend: function () {
            // For Safety Disabling Section Elements for Slow Internet Connections
            $('#btn_verify_'+entity).prop('disabled', true);
        },
        success: function (response) {
        	console.log(response);return false;
        	var data=JSON.parse(response);

        	// Re_Enabling the Elements
        	$('#btn_verify_'+entity).prop('disabled', false);

        	// response message
        	switch(data.status){
        		case 'success':
        		$('#ajax_success_alert').show();
        		$('.ajax_success_alert').html(data.message);
        		setTimeout(function() {
        			window.location.reload();
                        }, 1500); // <-- time in milliseconds 
        		break;

        		case 'error':
        		$('#ajax_danger_alert').show();
        		$('.ajax_danger_alert').html(data.message);
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        		break;

        		case 'validation':
        		$('#ajax_validation_alert').show();
        		$('.ajax_validation_alert').html(data.message);
        		$("input[name='"+data.field+"']").focus();
        		$("input[id='"+data.field+"']").focus();
        		$("select[name='"+data.field+"']").focus();
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        		break;
        	}
        	
        },
        error: function (response) {
            // Re_Enabling the Elements
            $('#btn_verify_'+entity).prop('disabled', false);
            $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and Save again.');
            setTimeout(function() {
            	$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        }
    });
}


// script to delete document
function delDocument(doc_id)
{   
	$.confirm({
		title: '<h5 class="w3-text-red w3-medium"><i class="fa fa-warning"></i> Are you sure you want to delete this document?</h5>',
		content: '',
		type: 'red',
		buttons: {
			confirm: function () {
				var dataS = 'doc_id=' + doc_id;
				$.ajax({
					url: BASE_URL+"user/user_profile/delDocument",
					type: "POST",
					data: dataS,
					cache: false,
					success: function (response) {
        			// console.log(response);return false;
        			var data=JSON.parse(response);
        			// response message
        			switch(data.status){
        				case 'success':
        				$('#ajax_success_alert').show();
        				$('.ajax_success_alert').html(data.message);
        				setTimeout(function() {
        					window.location.reload();
                        }, 1500); // <-- time in milliseconds 
        				break;

        				case 'error':
        				$('#ajax_danger_alert').show();
        				$('.ajax_danger_alert').html(data.message);
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        				break;

        				case 'validation':
        				$('#ajax_validation_alert').show();
        				$('.ajax_validation_alert').html(data.message);
        				$("input[name='"+data.field+"']").focus();
        				$("select[name='"+data.field+"']").focus();
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        				break;
        			}

        		},
        		error: function (response) {
        			$('#ajax_danger_alert').show();
        			$('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and Save again.');
        			setTimeout(function() {
        				$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        		}
        	});
			},
			cancel: function () {
			}
		}
	});
}

// script to upload files
$(function () {
	$("#form_documents").submit(function () {
		$.ajax({
			type: "POST",
			url: BASE_URL+"user/user_profile/update_documents",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function () {
            // For Safety Disabling Section Elements for Slow Internet Connections
            $('#section_documents').find('.form-control').prop('readonly', true);
            $('#section_documents').find('.btn').prop('disabled', true);
        },
        success: function (response) {
        	// console.log(response);return false;
        	var data=JSON.parse(response);

        	// Re_Enabling the Elements
        	$('#section_documents').find('.form-control').prop('readonly', false);
        	$('#section_documents').find('.btn').prop('disabled', false);

        	// response message
        	switch(data.status){
        		case 'success':
        		$('#ajax_success_alert').show();
        		$('.ajax_success_alert').html(data.message);
        		setTimeout(function() {
        			window.location.reload();
                        }, 1500); // <-- time in milliseconds 
        		break;

        		case 'error':
        		$('#ajax_danger_alert').show();
        		$('.ajax_danger_alert').html(data.message);
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        		break;

        		case 'validation':
        		$('#ajax_validation_alert').show();
        		$('.ajax_validation_alert').html(data.message);
        		$("input[name='"+data.field+"']").focus();
        		$("select[name='"+data.field+"']").focus();
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        		break;
        	}
        	
        },
        error: function (response) {
            // Re_Enabling the Elements
            $('#section_documents').find('.form-control').prop('readonly', false);
            $('#section_documents').find('.btn').prop('disabled', false);
            $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and upload again.');
            setTimeout(function() {
            	$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        }
    });
    return false;  //stop the actual form post !important!

});
});

// script to upload image in gallery
$(function () {
	$("#gallery_upload_form").submit(function () {
		$.ajax({
			type: "POST",
			url: BASE_URL+"user/user_profile/upload_image",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function () {
            // For Safety Disabling Section Elements for Slow Internet Connections
            $('#gallery_upload_form').find('.form-control').prop('readonly', true);
            $('#gallery_upload_form').find('.btn').prop('disabled', true);
        },
        success: function (response) {
        	// console.log(response);return false;
        	var data=JSON.parse(response);

        	// Re_Enabling the Elements
        	$('#gallery_upload_form').find('.form-control').prop('readonly', false);
        	$('#gallery_upload_form').find('.btn').prop('disabled', false);

        	// response message
        	switch(data.status){
        		case 'success':
        		$('#ajax_success_alert').show();
        		$('.ajax_success_alert').html(data.message);
        		$("#gallery_upload_form").trigger('reset');
        		$('#previewImage').attr('src', BASE_URL+'assets/client/img/default_image.jpg');
        		$('#galleryImages').load(location.href + " #galleryImages>*", "");
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 1500); // <-- time in milliseconds
        		break;

        		case 'error':
        		$('#ajax_danger_alert').show();
        		$('.ajax_danger_alert').html(data.message);
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        		break;

        		case 'validation':
        		$('#ajax_validation_alert').show();
        		$('.ajax_validation_alert').html(data.message);
        		$("input[name='"+data.field+"']").focus();
        		$("select[name='"+data.field+"']").focus();
        		setTimeout(function() {
        			$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        		break;
        	}
        	
        },
        error: function (response) {
            // Re_Enabling the Elements
            $('#gallery_upload_form').find('.form-control').prop('readonly', false);
            $('#gallery_upload_form').find('.btn').prop('disabled', false);
            $('#ajax_danger_alert').show();
            $('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and Upload again.');
            setTimeout(function() {
            	$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        }
    });
    return false;  //stop the actual form post !important!

});
});

// script to delete image
function delImage(img_path)
{   
	$.confirm({
		title: '<h5 class="w3-text-red w3-medium"><i class="fa fa-warning"></i> Are you sure you want to delete this image from gallery?</h5>',
		content: '',
		type: 'red',
		buttons: {
			confirm: function () {
				var dataS = 'img_path=' + img_path;
				$.ajax({
					url: BASE_URL+"user/user_profile/delImage",
					type: "POST",
					data: dataS,
					cache: false,
					success: function (response) {
        			// console.log(response);return false;
        			var data=JSON.parse(response);
        			// response message
        			switch(data.status){
        				case 'success':
        				$('#ajax_success_alert').show();
        				$('.ajax_success_alert').html(data.message);
        				$('#galleryImages').load(location.href + " #galleryImages>*", "");
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 1500); // <-- time in milliseconds
        				break;

        				case 'error':
        				$('#ajax_danger_alert').show();
        				$('.ajax_danger_alert').html(data.message);
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        				break;

        				case 'validation':
        				$('#ajax_validation_alert').show();
        				$('.ajax_validation_alert').html(data.message);
        				$("input[name='"+data.field+"']").focus();
        				$("select[name='"+data.field+"']").focus();
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        				break;
        			}

        		},
        		error: function (response) {
        			$('#ajax_danger_alert').show();
        			$('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and Save again.');
        			setTimeout(function() {
        				$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        		}
        	});
			},
			cancel: function () {
			}
		}
	});
}

// script to set profile image
function setProfilePicture(img_path)
{   
	$.confirm({
		title: '<h5 class="w3-text-green w3-medium"><i class="fa fa-check"></i> Are you sure set this as Profile Picture?</h5>',
		content: '',
		type: 'green',
		buttons: {
			confirm: function () {
				var dataS = 'img_path=' + img_path;
				$.ajax({
					url: BASE_URL+"user/user_profile/setProfilePicture",
					type: "POST",
					data: dataS,
					cache: false,
					success: function (response) {
        			// console.log(response);return false;
        			var data=JSON.parse(response);
        			// response message
        			switch(data.status){
        				case 'success':
        				$('#ajax_success_alert').show();
        				$('.ajax_success_alert').html(data.message);
        				setTimeout(function() {
        					window.location.reload();
                        }, 1500); // <-- time in milliseconds 
        				break;

        				case 'error':
        				$('#ajax_danger_alert').show();
        				$('.ajax_danger_alert').html(data.message);
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 10000); // <-- time in milliseconds
        				break;

        				case 'validation':
        				$('#ajax_validation_alert').show();
        				$('.ajax_validation_alert').html(data.message);
        				$("input[name='"+data.field+"']").focus();
        				$("select[name='"+data.field+"']").focus();
        				setTimeout(function() {
        					$('.alert_message').fadeOut('fast');
                        }, 8000); // <-- time in milliseconds
        				break;
        			}

        		},
        		error: function (response) {
        			$('#ajax_danger_alert').show();
        			$('.ajax_danger_alert').html(' Something went wrong! Try refreshing page and Save again.');
        			setTimeout(function() {
        				$('.alert_message').fadeOut('fast');
                        }, 4000); // <-- time in milliseconds  
        		}
        	});
			},
			cancel: function () {
			}
		}
	});
}


// ----function to preview selected image for profile------//
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#previewImage').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}
// ------------function preview image end------------------//

//-------------------fucntion to check confirm password---------------
    function checkPassword() {
        if ($('#new_password').val() == $('#confirm_password').val()) {
            $('#btn_change_password').prop("disabled", false);
            $('#confirm_password').css('border-color', '');
            $('#passwordErr').html('');

        } else {
            $('#passwordErr').html('<label>Password Not Matching</label>').css('color', 'red');
            $('#confirm_password').css('border-color', 'red');
            $('#btn_change_password').prop("disabled", true);
        }
    }
//-----------function ends------------------------