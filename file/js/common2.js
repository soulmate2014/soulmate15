function selectState1(country_id){
	if(country_id!="-1"){
		loadData1('state',country_id);
		$("#city_dropdown1").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown1").html("<option value='-1'>Select state</option>");
		$("#city_dropdown1").html("<option value='-1'>Select city</option>");		
	}
}
function selectState2(country_id){
	if(country_id!="-1"){
		loadData2('state',country_id);
		$("#city_dropdown2").html("<option value='-1'>Select city</option>");	
	}else{
		$("#state_dropdown2").html("<option value='-1'>Select state</option>");
		$("#city_dropdown2").html("<option value='-1'>Select city</option>");		
	}
}
function selectCity1(state_id){
	if(state_id!="-1"){
		loadData1('city',state_id);
	}else{
		$("#city_dropdown1").html("<option value='-1'>Select city</option>");		
	}
}

function loadData1(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/Upload_Controller/loadData1",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown1").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown1").append(result);  
		}
	});
}

function loadData2(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="http://localhost/soul/file/img/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "http://localhost/soul/index.php/Upload_Controller/loadData1",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown2").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown2").append(result);  
		}
	});
}