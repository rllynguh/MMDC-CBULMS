$(document).ready(function()
{
 var table = $('#myTable').DataTable({
  responsive: true,
  processing: true,
  serverSide: true,
  ajax: dataurl,
  columns: [
  {data: 'strBuilDesc', name: 'tblBuilding.strBuilDesc'},
  {data: 'intFloorNum', name: 'tblFloor.intFloorNum'},
  {data: 'strUnitCode', name: 'tblUnit.strUnitCode'},
  {data: 'intUnitType', name: 'intUnitType'},
  {data: 'intUnitNumber', name: 'tblUnit.intUnitNumber'},
  {data: 'dblUnitArea', name: 'dblUnitArea'},
  {data: 'boolIsActive', name: 'boolIsActive', searchable: false},
  {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});
 function changeLabel()
 {
  btn='<span id="lblButton">SAVE CHANGES</span>';
  label=' <h1 id="label" class="modal-title align-center p-b-15">UPDATE UNIT<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
  if($("#btnSave").val()=="Save")
  {
    btn='<span id="lblButton"> SAVE</span>';
    label=' <h1 id="label" class="modal-title align-center p-b-15">NEW UNIT<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
  }    
  $('#lblButton').replaceWith(btn);
  $('#label').replaceWith(label);
}
var url = "/unit";
$(document).on('hidden.bs.modal','#myModal', function () 
{
  $('#myForm').parsley().destroy();
  $("#myForm").trigger('reset');
  $("#comBuilding").removeAttr("disabled");
  $("#comFloor").removeAttr("disabled");
});
//display modal form for task editing
$('#myList').on('click', '.open-modal',function(e)
{      
  var myId = $(this).val();
  $.get(url + '/' + myId + '/edit', function (data) 
  {
    //success data
    $("#btnSave").val("Edit");
    changeLabel();
    console.log(data);
    $("#comBuilding").attr("disabled","disabled");
    $("#comFloor").attr("disabled","disabled");
    var exists = false;
    $('#comBuilding').each(function()
    {
      if (this.value == data.intBuilCode) {
        exists = true;
        return false;
      }});
    if(!exists)
    {
      $('#comBuilding').append($('<option>', {value: data.intBuilCode, text: data.strBuilDesc}));
    }
    $('#comBuilding').val(data.intBuilCode);
    var exists = false;
    $('#comFloor').each(function(){
      if (this.value == data.intFloorCode) 
      {
        exists = true;
        return false;
      }});
    if(!exists)
    {
      $('#comFloor').append($('<option>', {value: data.intFloorCode, text: data.intFloorNum}));
    }
    $('#comFloor').val(data.intFloorCode);
    $('#myId').val(data.intUnitCode);
    $('#txtUNum').val(data.intUnitNumber);
    $('#txtArea').val(data.dblUnitArea);
    $('#comUnitType').val(data.intUnitType);
  }); 
  $('#myModal').modal('show');
});
$('#btnAddModal').on('click',function(e)
{ 
  $('#btnSave').val('Save');
  getBuilding();
  changeLabel();
  $('#myModal').modal('show');
});
function getBuilding()
{
  $.get(url + '/get/building', function (data) 
  {
    console.log(data);
    selected=$("#comBuilding").val();
    $('#comBuilding').children('option').remove();
    $.each(data,function(index,value)
    {
      $('#comBuilding').append($('<option>', {value:value.intBuilCode, text:value.strBuilDesc}));
    });
    $("#comBuilding").val(selected);
    if( !$('#comBuilding').has('option').length > 0  && $("#btnSave").val()=="Save" ) 
    { 
      alert("No building available.")
      $("#myModal").modal("hide");
    }
    getFloor();
  });
}
$("#comBuilding").change(function(data)
{
  getFloor();
});
$("#comFloor").change(function(data)
{
  getLatest();
});
function getFloor()
{
  $.get(url + '/getFloor/' + $("#comBuilding").val(), function (data) 
  {
    console.log(data);
    selected=$("#comFloor").val();
    $('#comFloor').children('option').remove();
    $.each(data,function(index,value)
    {
      $('#comFloor').append($('<option>', {value:value.intFloorCode, text:value.intFloorNum}));
    });
    $("#comFloor").val(selected);
    getLatest();
  });
}
function getLatest()
{
  $.get(url + '/getLatest/' + $("#comFloor").val(),function(data)
  {
    console.log(data);
    $("#txtUNum").val(data.number);
  });
}

  //display modal form for creating new task

  //delete task and remove it from list
  $('#myList').on('click', '.deleteRecord',function(e)
  {
    $("#modalDelete").modal("show");
    $("#btnDelete").val($(this).val());
  });
  $('#btnDelete').on('click',function(e)
  {
   $.ajaxSetup({
    headers: {
     'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
   }
 });

   e.preventDefault(); 
   var builType_id = $(this).val();
   $.ajax({
    url: url + '/' + builType_id,
    type: "delete",
    success: function (data) {
     if(data=="Deleted"){
       $.notify("The record has been deleted by another user.", error);
       table.draw();
     }else{
      if(data[0]=="true"){
        $.notify(data.strUnitCode[1] + " is in use.",error);
      }else{
        table.draw();
        $.notify("Record successfully deleted.","success");
      }
    }
    $("#modalDelete").modal("hide");
  },
  error: function (data) {
   console.log('Error:', data);
 }
});
 });

  //create new task / update existing task
  $("#btnSave").click(function (e) {
    if($("#myForm").parsley().isValid())
    {
      myId=$("#myId").val();
      console.log(myId);
      my_url=url;
      $("#btnSave").attr('disabled','disabled');
      setTimeout(function(){
        $("#btnSave").removeAttr('disabled');
      }, 1000);
      $.ajaxSetup(
      {
        headers: 
        {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
      e.preventDefault(); 
      var formData = $("#myForm").serialize();
      console.log(formData);
    type = "PUT"; //for updating existing resource
    my_url += '/' + myId;
    if($("#btnSave").val()=="Save")
    {
      type="POST";
      my_url=url;
    }
    $.ajax(
    {
      type: type,
      url: my_url,
      data: formData,
      dataType: 'json',
      success: function (data) 
      {
        console.log(data);
        table.draw();
        successPrompt();
        if($("#btnSave").val()=="Save")
        {
          getBuilding();
          $("#txtArea").val("");
        }
        else
        {
          $('#myModal').modal('hide');
        }              
      },
      error: function (data) 
      {
        console.log('Error:', data);
      }
    });
  }
});

  $('#myList').on('change', '#IsActive',function(e)
  { 
    $.ajaxSetup(
    {
      headers: 
      {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });
    e.preventDefault(); 
    var id = $(this).val();
    $.ajax(
    {
      url: url + '/softDelete/' + id,
      type: "POST",
      success: function (data) 
      {
        console.log(data);
      },
      error: function (data) 
      {
        console.log('Error:', data);
      }
    })
  });
  function successPrompt(){
   title="Record Successfully Updated!";
   if($("#btnSave").val()=="Save")
    title="Record Successfully Stored!";
  $.notify(title, "success",
  {
    timer:1000
  });
}
});