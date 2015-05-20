function selectState(country_id){
	if(country_id!="-1"){
		loadData('state',country_id);
		$("#city_dropdown").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select caste</option>");
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
		url: "http://localhost/soul/index.php/home/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select caste</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}



function selectState6(country_id){
	if(country_id!="-1"){
		loadData6('state',country_id);
		$("#city_dropdown6").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown6").html("<option value='-1'>Select caste</option>");
		$("#city_dropdown6").html("<option value='-1'>Select city</option>");		
	}
}

function loadData6(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/home/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown6").html("<option value='-1'>Select caste</option>");  
			$("#"+loadType+"_dropdown6").append(result);  
		}
	});
}


function selectState8(country_id){
	if(country_id!="-1"){
		loadData8('state',country_id);
		$("#city_dropdown8").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown8").html("<option value='-1'>Select caste</option>");
		$("#city_dropdown8").html("<option value='-1'>Select city</option>");		
	}
}


function loadData8(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/home/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown8").html("<option value='-1'>Select caste</option>");  
			$("#"+loadType+"_dropdown8").append(result);  
		}
	});
}


function selectState10(country_id){
	if(country_id!="-1"){
		loadData10('state',country_id);
		$("#city_dropdown10").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown10").html("<option value='-1'>Select caste</option>");
		$("#city_dropdown10").html("<option value='-1'>Select city</option>");		
	}
}


function loadData10(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/home/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown10").html("<option value='-1'>Select caste</option>");  
			$("#"+loadType+"_dropdown10").append(result);  
		}
	});
}




function loadData12(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://zillionit.org/soulmate/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://zillionit.org/soulmate/index.php/home/loadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown10").html("<option value='-1'>Select caste</option>");  
			$("#"+loadType+"_dropdown10").append(result);  
		}
	});
}