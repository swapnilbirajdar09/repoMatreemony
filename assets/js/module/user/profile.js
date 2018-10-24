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
	var x = 1;
	$(add_button).click(function (e) {
		e.preventDefault();
		if (x < max_fields) {
			x++;
			$(wrapper).append('<div id="relativeDiv_'+x+'">\n\
				<div class="row w3-margin-top">\n\
				<div class="col-md-12 w3-text-white">\n\
				<div class=" w3-padding-small" style="background:#5E32E1">Relative No.'+x+'\n\
				<a href="#" style="padding:1px" class="delete btn w3-text-white w3-right" title="remove image"><i class="ion-close"></i></a>\n\
				</div>\n\
				</div>\n\
				</div>\n\
				<div class="row">\n\
				<div class="col-md-12">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_name_'+x+'" class="text-uppercase c-gray-light">Relative Full Name</label>\n\
				<input type="text" class="form-control no-resize" name="relative_name_'+x+'">  \n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				</div>\n\
				<div class="row">\n\
				<div class="col-md-6">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_contact_'+x+'" class="text-uppercase c-gray-light">Relative Contact Number</label>\n\
				<input type="text" class="form-control no-resize" name="relative_contact_'+x+'">\n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				<div class="col-md-6">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_relation_'+x+'" class="text-uppercase c-gray-light">Relation with you</label>\n\
				<input type="text" class="form-control no-resize" name="relative_relation_'+x+'">\n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				</div>\n\
				<div class="row">\n\
				<div class="col-md-12">\n\
				<div class="form-group has-feedback">\n\
				<label for="relative_address_'+x+'" class="text-uppercase c-gray-light">Relative Address</label>\n\
				<textarea name="relative_address_'+x+'" class="form-control no-resize" rows="5"></textarea> \n\
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>\n\
				<div class="help-block with-errors"></div>\n\
				</div>\n\
				</div>\n\
				</div>\n\
        </div>'); //add input box
		} 
		else 
		{
      alert('<label class="w3-label w3-text-red"><i class="fa fa-warning w3-xxlarge"></i> You Reached the maximum limit of adding ' + max_fields + ' fields</label>');   //alert when added more than 4 input fields
  }
});
	$(wrapper).on("click", ".delete", function (e) {
		e.preventDefault();
		$(this).parent().parent().parent().parent('div').remove();
		x--;
	})
});

// script to submit sectional forms
function save_section(section)
{   
            // For Safety Disabling Section Elements for Slow Internet Connections
            $('#section_'+section).find('.form-control').prop('readonly', true);
            $('#section_'+section).find('.btn').prop('disabled', true);
            
            $.ajax({
            	type: "POST",
            	url: "http://activeitzone.com/demo/matrimonial/home/profile/update_"+section,
            	cache: false,
            	data: $('#form_'+section).serialize(),
            	success: function(response) {
                    // alert($('#form_'+section).serialize());

                    if (IsJsonString(response)) {
                        // Re_Enabling the Elements
                        $('#section_'+section).find('.form-control').prop('readonly', false);
                        $('#section_'+section).find('.btn').prop('disabled', false);
                        // Displaying Validation Error for ajax submit
                        // alert('TRUE');
                        var JSONArray = $.parseJSON(response);
                        var html = "";
                        $.each(JSONArray, function(row, fields) {
                            // alert(fields['ajax_error']);
                            html = fields['ajax_error'];
                        });
                        $('#validation_info').html(html);
                        $('#ajax_validation_alert').show();
                        setTimeout(function() {
                        	$('#ajax_validation_alert').fadeOut('fast');
                        }, 5000); // <-- time in milliseconds
                    }
                    else{
                        // Loading the specific Section Area
                        // alert('FALSE');
                        $('#section_'+section).html(response);
                        $('#ajax_alert').show();
                        setTimeout(function() {
                        	$('#ajax_alert').fadeOut('fast');
                        }, 5000); // <-- time in milliseconds
                    }
                    
                },
                fail: function (error) {
                	alert(error);
                }
            });
        }