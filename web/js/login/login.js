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
					$("#registration-login_user").parent().next().find(".help-block-error").text('Такой пользователь уже существует.');
					//$(".help-block").addClass('.help-block-error');
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
			$("#loginform-proxi").val(0);
			$("#loginform-proxi").attr("disabled",true);
		}else if($(this).val() == 1){
			$("#loginform-proxi").attr("disabled",false);
		}
	});
});