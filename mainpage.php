<?php include("login.php"); 

	session_start();
	
	$query="SELECT diary FROM user WHERE id='".$_SESSION['id']."'";
	
	$result=mysqli_query($link,$query);
	
	$row= mysqli_fetch_array($result);
	
	$diary=$row['diary'];
	
?>

<!DOCTYPE html>
<html lang="en">
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"></link>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	<script src="https://use.fontawesome.com/edc0926b70.js"></script>
	
	<title>Secret Diary</title>
	
	
	<style type="text/css">
	
		.navbar-brand{
			font-size:1.8em;
			font-weight:bold;
		}
		
		#topContainer{
			background-image:url("19654_en_1.jpg");
			height:400px;
			background-size:cover;
			width:100%;
			margin-top:0px;
		}
		#topRow{
			margin-top:100px;
			text-align:center;
		}
		#topRow h1{
			font-size:3em;
		}
		.marginTop{
			margin-top:30px;
		}
		.center{
			text-align:center;
		}
		.containerHeight{
		
		}
		.title{
			margin-top:100px;
			font-size:3em;
		}
		
		#footer{
			background-image:url("19410_en_1.jpg");
			background-size:cover;
			width:100%;
		}
		.marginBottom{
			margin-bottom:60px;
		}
		.appstoreImage{
			width:300px;
		}
		

	</style>
	
 </head>
  
 <body data-spy="scroll" data-target=".navbar-nav">
 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

		<div class="container">
		
			<a class="navbar-brand" href="">Secret Diary</a>

			<div class="navbar-nav">
				<a class="nav-link" href="index.php?logout=1">Log Out</a>
			</div>
		</div>
		
	</nav>
<!-------------------------------------------------------------------------->
	
	<div class="container  containerHeight" id="topContainer">
	
		<div class="row">
		
			<div class="col-md-3"></div>
			
			<div class="col-md-6" id="topRow">
				
					<textarea name="diary" class="form-control"><?php
						echo $diary;
					?></textarea>
				
			</div>
			
		</div>
		
	</div>
	
	
	<script type="text/javascript">

		$(".containerHeight").css("min-height",$(window).height());
		
		$("textarea").css("min-height",$(window).height()*0.8);
		
		$("textarea").keyup(function(){
			$.post("updatediary.php",{diary:$("textarea").val()});
		});
		
		
	</script>	
	
</body>
</html>