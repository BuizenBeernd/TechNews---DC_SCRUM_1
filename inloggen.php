<!DOCTYPE html>
<html>
		
<head>
		<meta charset="UTF-8">
		<meta name="description" content="Scrum Opdracht DG1">
		<meta name="keywords" content="">
		<meta name="author" content="Falco Hospes">
		
		<title>TechNews| Inloggen</title>
		
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/signin.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

		<!--Header-->
		<?php include 'config/header.php';?>
		<!--End Header-->
		
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<center><h2>Door in te loggen heeft u zoveel voordelen...</h2></center>
						<center><p>Hier vind u een aantal voorbeelden van voordelen die u heeft door in te loggen:</p></center>
					</div>
						<div class="col-sm-3"></div>
						<div class="col-sm-5">
						<ul>
						<li><i>U leest het laatste nieuws nog voordat het voor iedereen toegankelijk is!</i></li>
						<li><i>U kunt gratis meespelen aan acties en prijsvragen!</i></li>
						<li><i>U ontvangt tevens het laatste nieuws in uw postvak in!</i></li>
						<li><i>U krijgt elke dag kortingen voor veel producten!</i></li>
						</ul>
						</div>
						<div class="col-sm-3"></div>
					</div>
					<div class="col-sm-12">
						<div class="login-form">
							<form action="/examples/actions/confirmation.php" method="post">
							<h2 class="text-center">Log in</h2>       
								<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required="required">
								</div>
									<div class="form-group">
									<input type="password" class="form-control" placeholder="Password" required="required">
									</div>
										<div class="form-group">
										<button type="submit" class="btn btn-primary btn-block">Log in</button>
										</div>
											<div class="clearfix">
											<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
											<a href="#" class="pull-right">Forgot Password?</a>
											</div>        
							</form>
							<p class="text-center"><a href="#">Create an Account</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Footer-->
		<?php include 'config/footer.php';?>
		<!--End Footer-->
	
		
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>