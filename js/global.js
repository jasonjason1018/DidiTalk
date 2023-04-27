function ajaxFunction(functionName, domId, articleId = '', q = ''){
	$.ajax({
		url:"controller/frontEndController.php",
		type:"POST",
		data:{
			"functionName":functionName,
			"articleId":articleId,
			"q":q
		},
		success:function(resp){
			//console.log(resp);
			html = '';
			$.parseJSON(resp).forEach(function(value, index){
				html += value;
			});
			$("#" + domId).html(html);
		},
		error:function(xhr){
			console.log(xhr);
		}
	});
}

function registerFunction(functionName, arr = []){
	$.ajax({
		url:"controller/frontEndController.php",
		type:"POST",
		data:{
			"functionName":functionName,
			"arr":arr,
		},
		success:function(resp){
			resp = $.parseJSON(resp);
			if(resp["MSG"] == '0'){
				registerFailedFunction(resp);
			}
		},
		error:function(xhr){
			console.log(xhr);
		}
	});
}

function articleContentFunction(id){
	location.href="article.php?id="+id;
}

function registerFailedFunction(resp){
	$("#" + resp["column"] + "column").attr("style", "color:red").text(resp["ERR_MSG"]);
	return false;
}