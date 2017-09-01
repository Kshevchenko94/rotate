////////////////////
$(function(){
	$("#registration-login_user").blur(function(e){
		if($("#registration-login_user").val() != ''){
			$.ajax({
			url:'/login/registration',
			type:'POST',
			dataType:"json",
			data:{login_user:$("#registration-login_user").val()},
			success:function(response){
				if(response.status == 'true'){
					$("#registration-login_user").parent().next().html("<p style='color:red'>Такой пользователь уже существует.</p>");
					$("button[name='save']").attr("disabled",true);
				}else if(response.status == 'false'){
					$("#registration-login_user").parent().next().html("");
					$("button[name='save']").attr("disabled",false);
				}
			},
			error:function(){
				alert('error');
			}
		}); 
		}
		
	});  
	
	$("input[type='radio']").change(function(){
		if($(this).val() == 0){
			$("#registration-proxi").val(0);
			$("#registration-proxi").attr("disabled",true);
		}else if($(this).val() == 1){
			$("#registration-proxi").attr("disabled",false);
		}
	});
});