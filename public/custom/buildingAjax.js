
$(document).ready(function()
{
 var table = $('#myTable').DataTable({
  responsive: true,
  processing: true,
  serverSide: true,
  ajax: dataurl,
  columns: [
  {data: 'strBuilCode', name: 'strBuilCode'},
  {data: 'strBuilDesc', name: 'strBuilDesc'},
  {data: 'strCityDesc', name: 'strCityDesc'},
  {data: 'boolIsActive', name: 'boolIsActive', searchable: false},
  {data: 'action', name: 'action', orderable: false, searchable: false}
  ]
});

 function getLatest()
 {
  $.get('floor/getFloor/' + $("#comBuilding").val(), function (data) 
  {
    if(parseInt(data.max)<parseInt(data.current))
    {
      $.notify("Number of floors at maximum!", "error");
      $("#modalFloor").modal("hide");
    }
    else
    {
      console.log(data);
      $("#txtFNum").val(data.current);
    }
  });

}
function changeLabel()
{
  btn='<span id="lblButton">SAVE CHANGES</span>';
  label=' <h1 id="label" class="modal-title align-center p-b-15">UPDATE BUILDING<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
  if($("#btnSave").val()=="Save")
  {
    btn='<span id="lblButton"> SAVE</span>';
    label=' <h1 id="label" class="modal-title align-center p-b-15">NEW BUILDING<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
  }    
  $('#lblButton').replaceWith(btn);
  $('#label').replaceWith(label);
}
getCity();

var url = "/building";
function getCity()
{
  $.get('custom/getCity/' + $("#comProvince").val(), function (data) {
    console.log(data);
    $('#comCity').children('option').remove();
    $.each(data,function(index,value)
    {
      $('#comCity').append($('<option>', {value:value.intCityCode, text:value.strCityDesc}));
    });
  });
}
$("#comProvince").change(function(data){
  getCity();
});

    //display modal form for task editing
    $(document).on('hidden.bs.modal','#myModal', function () {
      $('#txtBuilDesc').parsley().removeError('ferror', {updateClass: false});
      $('#myForm').parsley().destroy();
      $("#myForm").trigger('reset');
      $("#comBuilType").removeAttr("disabled");
      $("#txtBFNum").attr("min","1");
    });
    $(document).on('hidden.bs.modal','#modalAddFloor', function () {
      $('#frmFloor').parsley().destroy();
      $("#frmFloor").trigger('reset');
    });

    $('#myList').on('click', '#btnAddFloor',function()
    { 
      $("#comBuilding").val($(this).val());
      $.get(url + '/' + $(this).val() + '/edit', function (data) {
        $("#txtFBuilDesc").val(data.strBuilDesc);
        getLatest();
        $("#modalFloor").modal("show");  
      });
      
    });

    $('#btnSaveFloor').on('click',function(e)
    { 
      if($('#frmFloor').parsley().isValid())
      {
        $.ajaxSetup(
        {
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        })
        e.preventDefault(); 

        var formData = $("#frmFloor").serialize();
               //for updating existing resource
               
               console.log(formData);
               $.ajax({
                type: "POST",
                url: "/floor",
                data: formData,
                dataType: 'json',
                success: function (data) {
                  console.log(data);
                  getLatest();
                  $.notify("Record Successfully Stored!", "success");
                  $("#txtUNum").val("");
                },
                error: function (data) {
                  console.log('Error:', data);
                }
              });
             }});
    $('#myList').on('click', '.open-modal',function()
    { 
      var myId = $(this).val();
      $.get(url + '/' + myId + '/edit', function (data) {
            //success data
            $('#btnSave').val('Edit');
            changeLabel();
            console.log(data);
            if(parseInt(data.current)==0)
              value="1";
            else
              value=data.current;
            $("#txtBFNum").attr("min",value);
            $("#comBuilType").attr("disabled","");
            $('#myId').val(data.intBuilCode);
            var exists = false;
            $('#comBuilType').each(function(){
              if (this.value == data.intBuilTypeCode) {
                exists = true;
                return false;
              }
            });
            if(!exists)
            { 
              $('#comBuilType').append($('<option>', {value: data.intBuilTypeCode, text: data.strBuilTypeDesc}));
              $('#comBuilType').val(data.intBuilTypeCode);
            }
            $('#comBuilType').val(data.intBuilTypeCode);
            $('#txtBuilDesc').val(data.strBuilDesc);
            $('#txtBFNum').val(data.intBuilNumOfFloor);
            $('#txtSNum').val(data.strAddrNum);
            $('#txtStreet').val(data.strAddrStreet);
            $('#txtDistrict').val(data.strAddrDistrict);
            $('#comCity').val(data.intCityCode);
            $('#comProvince').val(data.intProvinceCode);
            $('#myModal').modal('show');
          }) 
    });
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
   })

     e.preventDefault(); 
     var builType_id = $(this).val();
     $.ajax({
      url: url + '/' + builType_id,
      type: "delete",
      success: function (data) {
        if(data=="Deleted"){
          $.notify("The record has been deleted by another user!", "boom");
          table.draw();
        }else{
          if(data[0]=="true"){
            $.notify(data[1].strBuilDesc + " is in use!", "boom");
          }else{
            table.draw();
            $.notify(data.strBuilDesc + " successfully deleted.", "boom");
          }
        }
        $("#modalDelete").modal("hide");
      },
      error: function (data) {
       console.log('Error:', data);
     }
   });
   });
    xhrPool=[];
    //create new task / update existing task
    $('#btnSave').on('click',function(e)
    { 
      if($('#myForm').parsley().isValid())
        {$.ajaxSetup(
          {
            headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
          })
      e.preventDefault(); 
      var my_url = url;
      var type="POST";
      var formData = $("#myForm").serialize();
      if($('#btnSave').val()=="Edit")
      {
        var myId = $('#myId').val();
        type = "PUT";
        my_url += '/' + myId;
      }
               //for updating existing resource
               
               console.log(formData);
               $.ajax({
                 beforeSend: function (jqXHR, settings) {
                  xhrPool.push(jqXHR);
                },
                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                  console.log(data);
                  table.draw();
                  successPrompt();
                  $('#myModal').modal('hide');
                },
                error: function (data) {
                  console.log('Error:', data.responseText);
                  try{
                    $('#txtBuilDesc').parsley().removeError('ferror', {updateClass: false});
                    $('#txtBuilDesc').parsley().addError('ferror', {message: data.responseText, updateClass: false});
                  }catch(err){}
                  finally{
                    $.each(xhrPool, function(idx, jqXHR) {
                      jqXHR.abort();
                    });
                  }
                }
              });
             }});

    $('#btnAddModal').on('click',function(e)
    { 
      $('#btnSave').val('Save');
      changeLabel();
      $('#myModal').modal('show');
    });

    $('#myList').on('change', '#IsActive',function(e)
    { 
      $.ajaxSetup(
      {
        headers: {
         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       }
     })
      e.preventDefault(); 
      var id = $(this).val();
      $.ajax(
      {
        url: url + '/softDelete/' + id,
        type: "POST",
        success: function (data) 
        {
         console.log(id);
       },
       error: function (data) 
       {
        console.log('Error:', data);
      }
    });
    });
    function successPrompt(){
     title="Record Successfully Updated!";
     if($("#btnSave").val()=="Save")
      title="Record Successfully Stored!";
    $.notify(title, "success");
  }
});



