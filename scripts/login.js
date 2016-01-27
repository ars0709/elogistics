$(function () {


    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    $('#frmLogin').on('submit', function (e) {
        console.log('login');
    	e.preventDefault();
        e.stopPropagation();
        var username = $('#x_login_username').val();
        var password = $('#x_login_password').val();
        var data = {"email": username, "password": password};
        ajxPostData('login',data,function(r){
        	console.log(r);
        	if (!r.s){
        		console.log('gagal');
        		// $('#notif-failed').foundation('reveal', 'open');
                // $('#sc-messages-failed').html('<strong>Wrong User or Password</strong>');
        	}else{
                console.log(r.data[0].api_key);

                jQuery('#x_session_write').load(hostUrl+'sessionwrite.php?session_comp='+r.data[0].il_company_acc+'&session_api_key='+r.data[0].api_key+'&session_user_name='+r.data[0].name+'');
                window.location.href=hostUrl +'?page=home';

            }

        });

    });

});