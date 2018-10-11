/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//-----------------fun for update admin details
    $(function () {
        $("#adminProfileForm").submit(function () {
            dataString = $("#adminProfileForm").serialize();
            //$('#btnsubmit').html('<span class="w3-card w3-padding-small w3-margin-bottom w3-round"><i class="fa fa-spinner fa-spin w3-large"></i> <b>Adding PO. Hang on...</b></span>');
            //alert(dataString);
            $.ajax({
                type: "POST",
                url: BASE_URL + "admin/admin_profile/updateAdminDetails",
                data: dataString,
                return: false, //stop the actual form post !important!
                success: function (data) {
                    //$.alert(data);
                    console.log(data);
                    $('#message').html(data);
                }
            });
            return false;  //stop the actual form post !important!
        });
    });
