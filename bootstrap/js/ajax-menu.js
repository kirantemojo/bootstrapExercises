(function($)
			{
				$.fn.loady = function(options)
				{
					if(!options)
					{
						$(this).on('click',function(){
							$.ajax({
								type:"POST",
								dataType:"json",
								url:$(this).attr("file"),
								data:{set: $(this).attr("roll")}	
							}).done(function(data){
								$('.inner-container .containment').empty();
								var list = 20;
								var odd = false;
								for(var i=0,j=1;i<=list,j<=list;i=i+2,j=j+2)
								{
									if((data[i] != "") && (odd))
									{
										$('.inner-container .containment.even').append(data[i]);
										$('.inner-container .containment.even').append(data[j]);
										odd = !odd;
									}
									else if((data[i] != "") && (!odd))
									{
										$('.inner-container .containment.odd').append(data[i]);
										$('.inner-container .containment.odd').append(data[j]);
										odd = !odd;
									}
									
								}
							});
						});
					}
					else
					{
						$(this).on('click',options,function(e){
							e.preventDefault();
							$.ajax({
								type:"POST",
								//dataType:"json",
								url:$(this).attr("file"),
								data:{set: $(this).attr("roll")}	
							}).done(function(data){
								$('.inner-container .containment').empty();
								$('.inner-container .containment:first-child').html("Content Wiil be placed here :"+data);
							});
						});
					}
				}
			})(jQuery);