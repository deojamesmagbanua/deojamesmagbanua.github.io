<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
		<title>GeoLogic Systems Int'l. Inc.</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
		<!-- Animate on Scroll -->
		<link href="css/aos.css" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Styles -->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body class="bg-light">

		<?php include 'header.php';?>
		
		<div class="my-5">
			<div class="container py-5">
				<div class="row justify-content-center mb-5">
					<div class="col-md-12 text-center my-5">
						<h1 class="d-inline display-4 text-danger">Contact Us</h1>
						<h6 class="text-black-50">We'll get back to you as soon as we can!</h6>
					</div>
					<div class="col-md-12 text-center">
						<h3 class="d-inline"><i class="fas fa-mobile-alt"></i></h3> &nbsp;
						<h4 class="mt-5 text-danger d-inline">+63 (917) 5384</h4>
					</div>
					<div class="w-100"></div>
					<div class="col-md-12 text-center">
						<h3 class="d-inline"><i class="fas fa-at"></i></h3> 	&nbsp;
						<h4 class="mt-5 text-danger d-inline">geologicsystem@gmail.com</h4> 
					</div>
					<div class="w-100"></div>
					<div class="col-md-12 text-center">
						<h3 class="d-inline"><i class="fab fa-facebook-messenger"></i></h3> &nbsp;
						<h4 class="mt-5 text-danger d-inline">m.me/geologicsystem</h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="text-dark">
			
			<div class="container-fluid bg-dark">
				<div class="row position-relative justify-content-center border-top border-danger">
					<div class="col-xs-1 position-absolute" style="top: -85px">
						<img src="res/logo.png" width="150px">
					</div>
				</div>
				<div id="inquire" class="row py-5 justify-content-center">
					<div class="col-md-10 col-lg-5 mt-5" data-aos="fade-up" data-aos-duration="1500">
						<h1 class="text-light text-center">Inquire Now</h1>
						<h6 class="text-white-50 text-center">Let us help you reach your goals today.</h6>
						<form action="mail.php" method="POST">
							<div class="row mt-4">
								<div class="col-6 mb-4">
									<input type="text"  name="name" class="form-control" placeholder="Full Name*" aria-label="Full Name" aria-describedby="basic-addon1" required>
								</div>
								<div class="col-6 mb-4">
									<input type="email"  name="email" class="form-control" placeholder="Email Address*" aria-label="Email Address" aria-describedby="basic-addon1" required>
								</div>
								<div class="col-6 mb-4">
									<input type="text"  name="phone" class="form-control" placeholder="Contact Number" aria-label="Contact Number" aria-describedby="basic-addon1" required>
								</div>
								<div class="col-6 mb-4">
									<input type="text"  name="company" class="form-control" placeholder="Company Name" aria-label="Company Name" aria-describedby="basic-addon1">
								</div>
								<div class="col-6 mb-4">
									<input type="text"  name="position" class="form-control" placeholder="Your Position" aria-label="You Position" aria-describedby="basic-addon1">
								</div>
								<div class="col-6 mb-4">
									<select class="form-control" name="service" size="1" required>
										<option value="disabled" selected disabled>What service are you looking for? </option>
										<option value="Web Development">Web Development</option>
										<option value="IOS Development">IOS Development</option>
										<option value="Android Development">Android Development</option>
										<option value="Windows Development">Windows Development</option>
										<option value="Enterprise Solution">Enterprise Solution</option>
									</select>
								</div>
								<div class="col-12 mb-4">
									<textarea name="companydescription" class="form-control" rows="3" placeholder="What does your company do?"></textarea>
								</div>
								<div class="col-12 mb-4">
									<textarea name="projectdescription" class="form-control" rows="3" placeholder="Describe your project or the problems that your copmany is facing."></textarea>
								</div>
								<div class="col-12 mb-4 text-center">
									<input class="btn btn-danger" type="submit" value="Send"> &nbsp;<input class="btn btn-outline-danger" type="reset" value="Clear">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php';?>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<script defer src="js/fontawesome-all.js"></script>
		<script src="js/zenscroll-min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/particles.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>