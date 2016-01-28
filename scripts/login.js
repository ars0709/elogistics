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

         $.ajax({
                url: apiUrl +'login',
                crossDomain: true,
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function (data) {
                    if (data.s) {
                        r=data;
                         console.log(r.data[0].api_key);

                        jQuery('#x_session_write').load(hostUrl+'sessionwrite.php?session_comp='+r.data[0].il_company_acc+'&session_api_key='+r.data[0].api_key+'&session_user_name='+r.data[0].name+'');
                        window.location.href=hostUrl +'?page=home';
                        
                    } else {
                        $('#modalFailed').modal('toggle');
                        $('#ModalFailed').modal('show');
                        $('#fMessage').text('Incorect user / password!');
                    }
                },
                error: function () {
                    //console.log('err');
                    $('#modalFailed').modal('toggle');
                        $('#ModalFailed').modal('show');
                    $('#fMessage').text('connection timeout');
                }

            });



    });

});