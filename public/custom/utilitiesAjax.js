$(document).ready(function()
{
	url="/utilities";
	function successPrompt(){
		swal({
			title: "Utilities Updated!",
			type: "success",
			html: true,
			confirmButtonClass: "btn-success",
			confirmButtonText: "OK",
			closeOnConfirm: true,
			allowOutsideClick: true,
			closeOnCancel: true
		});
	}
	$('#btnSave').on('click',function(e)
	{
		if($('#myForm').parsley().isValid())
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
			var formData = $('#myForm').serialize();
			console.log(formData);
			$.ajax({
				type: type,
				url: my_url,
				data: formData,
				dataType: 'json',
				success: function (data) {
					console.log(data);
					$("#txtCUSA").val(data.dblCusa);
					$("#txtEWT").val(data.dblEwt);
					$("#txtSec").val(data.intSecurityDeposit);
					$("#txtVet").val(data.dblVettingFee);
					$("#txtEsca").val(data.dblEscalation);
					$("#txtVAT").val(data.dblVat);
					successPrompt();
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}
	}
	);
});