
$(function () {
	 function createTableUom(url,elId,tblid,cb){
    $(elId).empty();
    var colData =['Uom Id','Description'];
    var rowData=[];
     ajxGetData(url,function(o){
        s= o.data||{};
        for(var i = 0; i < s.length; i++) {
            rowData.push([
                cekNull(s[i]['il_uom_Id']),
                cekNull(s[i]['il_uom_desc'])
            ]);
        }
         var data = {"Cols":colData, "Rows":rowData};
         var table = $('<table/>').attr("id", tblid).addClass("table table-bordered table-striped");
         var tr = $('<tr/>');
         table.append('<thead>').children('thead').append(tr);
         for (var i=0; i< data.Cols.length; i++) {
             tr.append('<td>'+data.Cols[i]+'</td>');
         }
         for(var r=0; r < data.Rows.length; r++){
             var tr = $('<tr/>');
             table.append(tr);
             for(var c=0; c < data.Cols.length; c++){
                 tr.append('<td>'+data.Rows[r][c]+'</td>');
             }
         }
         return cb({s:true,tbl:table});
     });

    return cb({s:false,msg:'error'});
    }
    if (gComp){
    createTableUom('uom/'+gComp,'dtUomList','tbUomList',function(o){
         if (o.s){
                $('#dtUomList').append(o.tbl);
                $('#tbUomList').dataTable(dtTable);
            }

    });    
    }
});