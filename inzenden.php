<!DOCTYPE html>
<html>
		
<head>
		<meta charset="UTF-8">
		<meta name="description" content="Scrum Opdracht DG1">
		<meta name="keywords" content="">
		<meta name="author" content="Falco Hospes">
		
		<title>TechNews| Inzenden</title>
		
		<link rel="stylesheet" href="css/footer.css">
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
				<center><img src="images/news.jpg" width="auto" height="auto" alt="news" title=""></center>
				</div>
					<div class="col-sm-12 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <center><h3>Nieuws inzenden</h3></center>
                                <center><p>Is u wat opgevallen in de ICT sector en wilt u dit publiceren? Dan staan wij uiteraard 
								           open om u van dienst te zijn met onze eigen Nieuws-Inzendingsdienst! Als u hieronder het
										   formulier invult, zullen wij dit artikel binnen een uur op onze website publiseren!:</p></center>
                            </div>
                            <div class="form-bottom contact-form">
                                <form role="form" action="assets/contact.php" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-email">Email</label>
                                        <input type="text" name="email" placeholder="E-mail adres..." class="contact-email form-control" id="contact-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-subject">Subject</label>
                                        <input type="text" name="subject" placeholder="Nieuws onderwerp..." class="contact-subject form-control" id="contact-subject">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact-message">Message</label>
                                        <textarea name="message" placeholder="Nieuws bericht..." class="contact-message form-control" id="contact-message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact-antispam">Antispam vraag: 7 + 5 = ?</label>
                                        <input type="text" name="antispam" placeholder="Wat is uw antwoord?" class="contact-antispam form-control" id="contact-antispam">
                                    </div>
                                    <a href="#" class="btn btn-primary">Verzenden</a>
                                </form>
								<br />
                            </div>
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