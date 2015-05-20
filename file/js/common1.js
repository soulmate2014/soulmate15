function selectState(country_id){
	if(country_id!="-1"){
		loadData('state',country_id);
		$("#city_dropdown").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select state</option>");
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function selectCity(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}

function loadData(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/insert_reg/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}



/*popup details*/

function selectState4(country_id){
	if(country_id!="-1"){
		loadData4('state',country_id);
		$("#city_dropdown4").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown4").html("<option value='-1'>Select state</option>");
		$("#city_dropdown4").html("<option value='-1'>Select city</option>");		
	}
}

function selectCity4(state_id){
	if(state_id!="-1"){
		loadData4('city',state_id);
	}else{
		$("#city_dropdown4").html("<option value='-1'>Select city</option>");		
	}
}

function loadData4(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/insert_reg/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown4").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown4").append(result);  
		}
	});
}