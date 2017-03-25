
$(document).ready(function()
{ 
	comGetCity();
	conGetCity();
	function comGetCity()
	{
		$.get('custom/getCity/' + $("#comComProvince").val(), function (data) {
			console.log(data);
			$('#comComCity').children('option').remove();
			$.each(data,function(index,value)
			{
				$('#comComCity').append($('<option>', {value:value.intCityCode, text:value.strCityDesc}));
			});
		});
	}
	function conGetCity()
	{
		$.get('custom/getCity/' + $("#conComProvince").val(), function (data) {
			console.log(data);
			$('#conComCity').children('option').remove();
			$.each(data,function(index,value)
			{
				$('#conComCity').append($('<option>', {value:value.intCityCode, text:value.strCityDesc}));
			});
		});
	}
	$("#comComProvince").change(function(){
		comGetCity();
	});
	$("#conComProvince").change(function(){
		conGetCity();
	});
});


