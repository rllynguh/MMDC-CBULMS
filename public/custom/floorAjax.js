
$(document).ready(function()
{
  var table = $('#myTable').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: dataurl,
    columns: [
    {data: 'strBuilDesc', name: 'strBuilDesc'},
    {data: 'intFloorNum', name: 'intFloorNum'},
    {data: 'intNumOfUnit', name: 'intNumOfUnit'},
    {data: 'boolIsActive', name: 'boolIsActive', searchable: false},
    {data: 'action', name: 'action', orderable: false, searchable: false}
    ]
  });
  function changeLabel()
  {
    btn='<span id="lblButton">SAVE CHANGES</span>';
    label=' <h1 id="label" class="modal-title align-center p-b-15">UPDATE FLOOR<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
    if($("#btnSave").val()=="Save")
    {
      btn='<span id="lblButton"> SAVE</span>';
      label=' <h1 id="label" class="modal-title align-center p-b-15">NEW FLOOR<a href="javascript:void(0);" class="pull-right" data-dismiss="modal"><i class="mdi-navigation-close"></i></a></h1>';
    }    
    $('#lblButton').replaceWith(btn);
    $('#label').replaceWith(label);
  }
  var url = "/floor";
  getBuilding();
  function getLatest()
  {
    if($("#btnSave").val()!="Edit")         
    {
      $.get(url + '/getFloor/' + $("#comBuilding").val(), function (data) 
      {
       console.log(data);
       $("#txtFNum").val(data.current);
     });
    }
  }
  function getBuilding()
  {
    $.get(url + '/get/building', function (data) {
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
        $.notify("No building available", "warn");
        $("#myModal").modal("hide");
      }
      getLatest();
    });
  }

  $(document).on('hidden.bs.modal','#myModal', function () {
    $("#myForm").trigger('reset');
    $('#myForm').parsley().destroy();
    $("#comBuilding").removeAttr("disabled");
  });
  $(document).on('hidden.bs.modal','#modalUnit', function () {
    $("#frmUnit").trigger('reset');
    $('#frmUnit').parsley().destroy();
  });
  $("#comBuilding").change(function(data){
    getLatest();
  });
    //display modal form for task editing
    $('#myList').on('click', '.open-modal',function()
    { 
      $('#btnSave').val('Edit');
      changeLabel();
      var myId = $(this).val();
      getBuilding();
      $.get(url + '/' + myId + '/edit', function (data) {
            //success data
            console.log("Edit Data:");
            console.log(data);
            value="";
            if(parseInt(data.current)<1)
              {value="1";
          }
          else
            {value=data.current;}
          var exists = false;
          $('#comBuilding').each(function(){
            if (this.value == data.intBuilCode) {
              exists = true;
              return false;
            }
          });
          if(!exists)
          { 
            $('#comBuilding').append($('<option>', {value: data.intBuilCode, text: data.strBuilDesc}));
            $('#comBuilding').val(data.intBuilCode);
          }
          $("#comBuilding").attr("disabled","");
          $('#myId').val(data.intFloorCode);
          $('#comBuilding').val(data.intBuilCode);
          $('#txtFNum').val(data.intFloorNum);
          $('#txtUNum').val(data.intNumOfUnit);
          $("#txtUNum").attr("min",value);
          $('#myModal').modal('show');
        }) 
    });


    //create new task / update existing task
    $('#btnSave').on('click',function(e)
    { 
      if($("#myForm").parsley().isValid())
        {$.ajaxSetup(
          {
            headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
          })
      e.preventDefault(); 
      var my_url = url;
      var formData = $("#myForm").serialize();
      type="POST";
      if($("#btnSave").val()=="Edit")
        {myId = $('#myId').val();
      type = "PUT";
      my_url += '/' + myId;
    }
               //for updating existing resource
               
               console.log(formData);
               $.ajax({
                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                  table.draw();    
                  successPrompt();
                  if($("#btnSave").val()=="Save")     
                   { getBuilding();      
                    $('#txtVUNum').val(""); 
                    $("#txtUNum").val("");             
                  }         
                  else
                    $('#myModal').modal('hide');
                },
                error: function (data) {
                  console.log('Error:', data);
                }
              });
             }});

    $('#btnAddModal').on('click',function(e)
    { 
      $('#btnSave').val('Save');
      changeLabel();
      $('#txtUNum').attr('min','1');
      getBuilding();
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

    $('#myList').on('click', '.showModal',function()
    { 
      $('#myId').val($(this).val());
      var myId = $(this).val();
      $.get(url + '/' + myId + '/edit', function (data) {
            //success data
            console.log(data.strBuilDesc);
            $('#txtVBuilDesc').val(data.strBuilDesc);
            $('#txtVFNum').val(data.intFloorNum);
            $('#txtVUNum').val(data.intNumOfUnit);
          });
      $.get(url + '/' + myId, function (data)
      {
        console.log(data);
        $('#txtVActual').val(data.count);
        console.log($('#txtVActual').val() + " " + $('#txtVUNum').val());
        console.log($('#txtVActual').val()< ($('#txtVUNum').val()));
        if(parseInt($('#txtVActual').val()) < parseInt($('#txtVUNum').val()))
        {
          $('#btnAddUnit').removeAttr('disabled');
          $("#btnAddUnit").val($("#showBuilCode").val());
        }
        else
        {
          $('#btnAddUnit').attr('disabled','disabled');
        }
        $('#modalView').modal('show');
      }); 

    });
    function successPrompt(){
      title="Record Successfully Updated!";
      if($("#btnSave").val()=="Save")
        title="Record Successfully Stored!";
      $.notify(title, "success");
    }

    function getLatestUnit()
    {
      $.get('unit/getLatest/' + $("#comFloor").val(),function(data)
      {
        if(parseInt(data.max)<parseInt(data.number))
        {
          $.notify("Number of units at Maximum!", "error");
          $("#modalUnit").modal("hide");
        }
        else
        {
          console.log(data);
          $("#txtUUNum").val(data.number);
        }
      });
    }

    $('#myList').on('click', '#btnAddUnit',function()
    {
      $("#modalUnit").modal("show");
      $("#myId").val($(this).val());
      $("#comFloor").val($(this).val());
      getLatestUnit();
      $.get(url + '/' + $(this).val() + '/edit', function (data) {
        $("#txtFBuilDesc").val(data.strBuilDesc);
        $("#txtUFNum").val(data.intFloorNum);
        console.log(data);
      });
    });

    $('#btnSaveUnit').on('click',function(e)
    { 
      if($('#frmUnit').parsley().isValid())
      {
        $.ajaxSetup(
        {
          headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
        })
        e.preventDefault(); 

        var formData = $("#frmUnit").serialize();
               //for updating existing resource
               
               console.log(formData);
               $.ajax({
                type: "POST",
                url: "/unit",
                data: formData,
                dataType: 'json',
                success: function (data) {
                  console.log(data);
                  $.notify("The record has been successfully stored!", "success");
                  getLatestUnit();
                  $("#txtArea").val("");
                },
                error: function (data) {
                  console.log('Error:', data);
                }
              });
             }});
  });



