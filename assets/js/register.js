

	$(document).ready(function($){
		
		$("body").on("input","input[name='email']",function(event){
			
			var email= $(this).val();
			email=email.toLowerCase();
			var re =   /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   
			$(".emali-status").removeClass('success');
			if(re.test(email)){
				$.ajax({
					
					type:'POST',
					data:{
						'email':email
					},
					url:"http://localhost/hackaer_k/MVC/api/ajax-check-email%20valid.php",
					success:function(data){
					data =parseInt(data);
					if(data){
						
						$(".emali-status").addClass('success');
				$(".emali-status").text(" avilable  email");
						
					}
					else{
						$(".emali-status").text(" email already used");
					}
					}
				});
				
			}
			else if(email.length == 0){
				$(".emali-status").text("");
				}
			else{
				
				$(".emali-status").text("enter valid email");
			}
		})
		
	});