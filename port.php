<?php
	$error[0] = "Error occurred in Request";
	$error[1] = "Error occurred in Request for post";
	if($_POST['set'] == "educate")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "flash")
	{
		$arr[0] = "<div class='tit'> Cartoon Movie </div>";
		$arr[1] = '<div class="post"> <iframe width="520" height="310" src="http://www.youtube.com/embed/-Z5BB4Se5e0" frameborder="0" allowfullscreen></iframe><br/>
				   This is Application Developed for the Technical view of Ineractivity of Presentation </div>';
		
		$arr[2] = "<div class='tit'> IIM Cartoon AD </div>";
		$arr[3] = '<div class="post"> <iframe width="520" height="310" src="http://www.youtube.com/embed/oCyyHaYCoiI" frameborder="0" allowfullscreen></iframe><br/>
				   This is Application Developed for the Technical view of Ineractivity of Presentation </div>';
		
		$arr[4] = "<div class='tit'> Hypermedia Technical Application </div>";
		$arr[5] = '
					<div class="post"> <!-- <a id="fad">Kefex Flash Techno Application</a><br/> -->
					
				   Description : This is Application Developed for the Technical view of Ineractivity of Presentation <br/> 
				   Direct Link : <a href="ProAS3.swf">Kefex Flash Techno Application</a><br/>
				   
				   Download ZIP File : <a href="ProAS3.zip">Kefex Flash Techno Application</a> </div>';
		
		$arr[6] = "<div class='tit'> Kefex Flash Techno Application </div>";
		$arr[7] = ' 
					<div class="post"> <!-- <a id="fas">Kefex Flash Techno Application</a><br/> -->
					
				   Description : This is Application Developed for the Technical view of Ineractivity of Presentation <br/>
					
					Direct Link : <a href="Titlepage.swf">Kefex Flash Techno Application</a><br/> 
				   
				   Download ZIP File : <a href="Titlepage.zip">Kefex Flash Techno Application</a> </div>';
				   
		$arr[8] = "<div class='tit'> Flash Piano Techno Application </div>";
		$arr[9] = '
					<div class="post"> <!-- <a id="fae">Kefex Flash Techno Application</a><br/> -->
					
				   Description : This is Application Developed for the Technical view of Ineractivity of Presentation <br/> 
				   
				   Direct Link : <a href="Auth.swf">Kefex Flash Techno Application</a><br/> 
				   
				   Download ZIP File : <a href="Auth.zip">Kefex Flash Techno Application</a> </div>';
				  
		$arr[10] = "<div class='tit'> Flash Piano Techno Application </div>";
		$arr[11] = ' 
					<div class="post"> <!-- <a id="faf">Kefex Flash Techno Application</a><br/> -->
					
				   Description : This is Application Developed for the Technical view of Ineractivity of Presentation <br/> 
				   Direct Link : <a href="App.swf">Kefex Flash Techno Application</a><br/> 
				   
				  Download ZIP File : <a href="App.zip">Kefex Flash Techno Application</a> </div>';
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "project")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "git")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else if($_POST['set'] == "about")
	{
		$arr[0] = "<div class='tit'> JavaScript-1 </div>";
		$arr[1] = "<div class='post'> This is a Vast Technology-1 </div>";
		
		$arr[2] = "<div class='tit'> JavaScript-2 </div>";
		$arr[3] = "<div class='post'> This is a Vast Technology-2 </div>";
		
		$arr[4] = "<div class='tit'> JavaScript-3 </div>";
		$arr[5] = "<div class='post'> This is a Vast Technology-3 </div>";
		
		$arr[6] = "<div class='tit'> JavaScript-4 </div>";
		$arr[7] = "<div class='post'> This is a Vast Technology-4 </div>";
		
		echo json_encode($arr);
	}
	else
	{
		echo  json_encode($error);
	}
?>