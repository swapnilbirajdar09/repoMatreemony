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