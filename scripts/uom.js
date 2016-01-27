/**
 * Created by aris on 1/27/16.
 */
$(function () {

     $('#dtUomList').dataTable();

    $('#btnSaveUom').on('click',function(e) {
        e.preventDefault();

        var data ={
            "uom_id":$("#x_uom_id").val(),
            "uom_desc":$("#x_uom_desc").val()
        }
        console.log('uom/'+ gComp);
        ajxPostData('uom/'+gComp,data,function(o){

            if (o.s){
                console.log('sukces');
            }else{
                $('#modalFailed').modal('toggle');
                $('#ModalFailed').modal('show');
                $('#fMessage').text(o.message);
            }
        });

    });



});

