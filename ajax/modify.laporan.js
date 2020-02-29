function edit_row(id)
{
  var saldo_awal=document.getElementById("saldo_awal"+id).innerHTML;
  var saldo_akhir=document.getElementById("saldo_akhir"+id).innerHTML;
  var status=document.getElementById("status"+id).innerHTML;


 document.getElementById("saldo_awal"+id).innerHTML="<input class='form-control' type='text' id='saldo_awal_val"+id+"' value='"+saldo_awal+"' size='10'>";
 document.getElementById("saldo_akhir"+id).innerHTML="<input class='form-control' type='text' id='saldo_akhir_val"+id+"' value='"+saldo_akhir+"' size='10'>";
 document.getElementById("status"+id).innerHTML="<select class='form-control' name='status' id='status_val"+id+"' ><option value='"+status+"'> "+status+" </option><option value='open'>open</option><option value='close'>close</option></select>";


 document.getElementById("edit_row"+id).style.display="none";
 document.getElementById("save_row"+id).style.display="block";
}


// save saldo

function save_row(id)
{
  var saldo_awal=document.getElementById("saldo_awal_val"+id).value;
  var saldo_akhir=document.getElementById("saldo_akhir_val"+id).value;
  var status=document.getElementById("status_val"+id).value;


 $.ajax
 ({
  type:'post',
  url:'control/modify.laporan.php',
  data:{
   edit_row:'edit_row',
   saldo_awal:saldo_awal,
   saldo_akhir:saldo_akhir,
   status:status,
   row_id:id


  },
  success:function(response) {
   if(response=="success")
   {
     document.getElementById("saldo_awal"+id).innerHTML=saldo_awal;
     document.getElementById("saldo_akhir"+id).innerHTML=saldo_akhir;
     document.getElementById("status"+id).innerHTML=status;
     document.getElementById("edit_row"+id).style.display="block";
     document.getElementById("save_row"+id).style.display="none";
   }
  }
 });
}




function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.penjualan-laporan.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}
//
function delete_menu(id)
{
 $.ajax
 ({
  type:'post',
  url:'control/modify.menu.php',
  data:{
   delete_menu:'delete_menu',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("rowmenu"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}

function insert_row()
{
 var name=document.getElementById("new_name").value;
 var age=document.getElementById("new_age").value;

 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   insert_row:'insert_row',
   name_val:name,
   age_val:age
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("user_table");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='name_val"+id+"'>"+name+"</td><td id='age_val"+id+"'>"+age+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";

    document.getElementById("new_name").value="";
    document.getElementById("new_age").value="";
   }
  }
 });
}