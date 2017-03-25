
$(document).ready(function()
{
  var table = $('#myTable').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: dataurl,
    columns: [
    {data: 'intBuilTypeCode', name: 'intBuilTypeCode'},
    {data: 'strBuilTypeDesc', name: 'strBuilTypeDesc'},
    {data: 'boolIsActive', name: 'boolIsActive', searchable: false},
    {data: 'action', name: 'action', orderable: false, searchable: false}
    ]
  });
  function changeLabel()
  {
    btn='<span id="lblButton">SAVE CHANGES</span>';
    label=' <h1 id="label" class="modal-title align-center p-b-15">UPDATE BUILDING TYPE<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
    if($("#btnSave").val()=="Save")
    {
      btn='<span id="lblButton"> SAVE</span>';
      label=' <h1 id="label" class="modal-title align-center p-b-15">NEW BUILDING TYPE<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
    }    
    $('#lblButton').replaceWith(btn);
    $('#label').replaceWith(label);
  }
  var url = "/buildingtype";
  $(document).on('hidden.bs.modal','#myModal', function () {
    $("#myForm").trigger("reset");
    $('#txtBuilTypeDesc').parsley().removeError('ferror', {updateClass: false});
    $('#myForm').parsley().destroy();
  })

    //display modal form for task editing
    $('#myList').on('click', '.open-modal',function()
    { 

      var builType_id = $(this).val();
      $('#btnSave').val('Edit');
      changeLabel();
      $.get(url + '/' + builType_id + '/edit', function (data) {
            //success data
            console.log(data);
            $('#myForm').trigger("reset");
            $('#builType_id').val(data.intBuilTypeCode);
            $('#txtBuilTypeDesc').val(data.strBuilTypeDesc);
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
        $.notify(title, "The record has been deleted by another user!","warn");
        table.draw();
      }else{
        if(data[0]=="true"){
          $.notify(data[1].strBuilTypeDesc + " is in use.", "error");
        }else{
          table.draw();
          $.notify(data.strBuilTypeDesc + "successfully deleted!", "success");
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
      if($("#myForm").parsley().isValid())
      {
        $.ajaxSetup(
        {
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        })
        e.preventDefault(); 
        var my_url = url;
        var type="POST";
        var formData = $("#myForm").serialize();
        console.log(formData);
        if($('#btnSave').val()=="Edit")
        {
          var builType_id = $('#builType_id').val();
          type = "PUT";
          my_url += '/' + builType_id;
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
                      $('#txtBuilTypeDesc').parsley().removeError('ferror', {updateClass: false});
                      $('#txtBuilTypeDesc').parsley().addError('ferror', {message: data.responseText, updateClass: false});
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



