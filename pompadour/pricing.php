<h1></h1><!DOCTYPE html>
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
				<div class="row justify-content-center">
					<div class="col-md-6 text-center">
						<h1 class="d-inline display-4 text-danger">Pricing</h1>
						<h6 class="text-black-50">Let us know what you need and we'll let you know how much it costs on average.</h6>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid mb-5 pb-5">
			<div class="container">
				<div class="row mb-5 pb-2">
					<div class="col-md-6 text-center">
						<div class="card">
							<div class="card-body shadow-sm">
								<p class="card-text text-black-50">Estimated Price</p>
								<h1 class="card-title my-0"><i class="fas fa-tags"></i> ₱ 1,000.00</h1><br>
								<a href="#" class="btn-lg btn btn-danger">Inquire Now</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<h5 class="text-danger mb-4">Select the features below, and we'll calculate the price for you.</h6>
							<div class="form-group col-md-6">
								<label for="pageCount"><small>How many pages do you need?</small></label>
								<div class="input-group">
									<input type="number" class="form-control" id="pageCount" value="5">
									<div class="input-group-prepend">
										<div class="input-group-text">Pages</div>
									</div>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="designComplexity"><small>How complex will the design be?</small></label>
								<select class="form-control" id="designComplexity">
									<option>Custom Design</option>
									<option>Template</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label><small>Responsive Design</small></label>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="mobileResponsiveness" id="mobileResponsiveness1" value="option1" checked>
								  <label class="form-check-label" for="mobileResponsiveness1">
									Yes
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="mobileResponsiveness" id="mobileResponsiveness2" value="option2">
								  <label class="form-check-label" for="mobileResponsiveness2">
									No
								  </label>
								</div>
							</div>
							<div class="form-group col-md-6">
								<label><small>eCommerce</small></label>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="eCommerce" id="eCommerce1" value="option1" checked>
								  <label class="form-check-label" for="eCommerce1">
									Yes
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="eCommerce" id="eCommerce2" value="option2">
								  <label class="form-check-label" for="eCommerce2">
									No
								  </label>
								</div>
							</div>
						</div>
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