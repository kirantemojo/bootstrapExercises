$(document).ready(function(){
	$('.form-log').delegate("#submit","click",function(e){
		e.preventDefault();
		$user = $('#user').val();
		$userpass = $('#userpass').val();
		if($user!="" && $userpass!="")
		{
			$.get('Loginviewa.php',{user:$user,userpass:$userpass},function(data){
				$('.form-log').html(data);
			});
		}
		else
		{
			$('#user').addClass('tip');
			$('#userpass').addClass('tip');
		}
	});
	$('.form-log').delegate("#userlogout","click",function(e){
		e.preventDefault();
		$.get('Loginviewa.php',{out:"out"},function(data){
			$('.form-log').html(data);
		});
		
	});
});