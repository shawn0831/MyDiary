<?php include("login.php"); ?>

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

			<button class="navbar-toggler" 
				data-toggle="collapse" 
				data-target=".navbar-collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse">
				
				<form class="form-inline" method="post">

					<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']);?>"></input>

					<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']);?>"></input>
						
					<input type="submit" name="submit" class="btn btn-success" value="Log In"></input>
					
				</form>
				
			</div>
			
		</div>
		
	</nav>
<!-------------------------------------------------------------------------->
	
	<div class="container  containerHeight" id="topContainer">
	
		<div class="row">
		
			<div class="col-md-3"></div>
			
			<div class="col-md-6" id="topRow">
			
				<h1 class="marginTop">Secret Diary</h1>
				
				<p class="lead font-weight-bold marginTop">Your own private diary, with you where ever you go.</p>
				
				<?php
					if($error){
						echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
					}
					if($message){
						echo '<div class="alert alert-success">'.addslashes($message).'</div>';
					}
				?>
				
				<p class=" font-weight-bold">Interested? Sign Up Below!</p>
				
				<form class="form marginTop" method="post">
				
					<div class="form-group">
					
						<label for="email">Email Address</label>
						
						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>"></input>
						
						<label for="password">Password</label>
						
						<input type="password" name="password" class="form-control" placeholder="Your password" value="<?php echo addslashes($_POST['password']); ?>"></input>
						
					</div>
					
					<input type="submit" name="submit" class="btn btn-success" value="Sign Up"></input>
					
				</form>
				
			</div>
			
		</div>
		
	</div>
	
	
	<script type="text/javascript">

		$(".containerHeight").css("min-height",$(window).height());
		
	</script>	
	
</body>
</html>