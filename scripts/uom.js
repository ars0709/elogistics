/**
 * Created by aris on 1/27/16.
 */
$(function () {
   

    $('#btnSaveUom').on('click',function(e) {
        console.log('save uom');
        e.preventDefault();

        var data ={
            "uom_id":$("#x_uom_id").val(),
            "uom_desc":$("#x_uom_desc").val()
        }
        if (gComp){
            ajxPostData('uom/'+gComp,data,function(o){
            if (o.s){
                console.log('sukces');
                $('#modalSuccess').modal('toggle');
                $('#ModalSuccess').modal('show');
                $('#fMessage').text(o.message);

                $("#x_uom_id").val('');
                $("#x_uom_desc").val('');

            }else{
                $('#modalFailed').modal('toggle');
                $('#ModalFailed').modal('show');
                $('#fMessage').text(o.message);
            }
        });
        }else{
                $('#modalFailed').modal('toggle');
                $('#ModalFailed').modal('show');
                

        }
        

    });



});

