$(function()
{
	$('.javas').loady();
	$('.ajaxas').loady();
	$('.jqueres').loady();
	$('.css3').loady();
	$('.phpas').loady();
	$('.portas').loady();
	$('.containment').loady(".posty");
	
	$('.containment').on('click','#fad',function(e){
		e.preventDefault();
		$('#fla').html("Loading");
		$.get('ProAS3.html',function(data){
			$('#fla').html(data);
			$('.parent').addClass('overlay');
			$('#back').show();
		}).fail(function(e){
			alert("status : "+ e.statusText);
		});
	});
	
	
	$('.containment').on('click','#fas',function(e){
		e.preventDefault();
			$('#fla').html("Loading");
		$.get('Titlepage.html',function(data){
			$('#fla').html(data);
			$('.parent').addClass('overlay');
			$('#back').show();
		}).fail(function(e){
			alert("status : "+ e.statusText);
		});
	});
	
	
	$('.containment').on('click','#fae',function(e){
		e.preventDefault();
			$('#fla').html("Loading");
		$.get('Auth.html',function(data){
			$('#fla').html(data);
			$('.parent').addClass('overlay');
			$('#back').show();
		}).fail(function(e){
			alert("status : "+ e.statusText);
		});
	});
	
	$('.containment').on('click','#faf',function(e){
		e.preventDefault();
			$('#fla').html("Loading");
		$.get('App.html',function(data){
			$('#fla').html(data);
			$('.parent').addClass('overlay');
			$('#back').show();
		}).fail(function(e){
			alert("status : "+ e.statusText);
		});
	});
	
	$(document).keydown(function(e){
		if(e.keyCode == 27)
		{
			e.preventDefault();
			$('#fla').empty();
			$('.parent').removeClass('overlay');
			$('#back').hide();
		}
	});
	
	$(document).on('click','#back',function(){
			$('#fla').empty();
			$('.parent').removeClass('overlay');
			$('#back').hide();
	});
});