<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/jpg" href="favicon.ico" />
	<title>Pompadour PH</title>
	<!-- Fonts -->
	<link href="./res/fonts/metropolis/metropolis.css" rel="stylesheet">
	<link href="./res/fonts/opensans/opensans.css" rel="stylesheet">
	<!-- Animate on Scroll -->
	<link href="css/aos.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Styles -->
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<?php include 'header.php';?>

	<div class="bg-black">
		<div class="container py-5">
			<div class="row text-light py-5">
				<div class="col-6">
					<p class="display-4 font-weight-black">Join the the movement. <span
							class="text-pompadour">#CutFromHome</span></p>

					<p class="font-weight-normal">Get with the times and avoid long queues at the barbershop.</p>
					<a id="action-btn" class="btn btn-pompadour mt-2" href="#howitworks" role="button">How It Works <i
							class="fas fa-arrow-right ml-1"></i></a>

				</div>
				<div class="col-6 text-center">
					<video width="100%" autoplay loop style="border-radius: 10px;">
						<source src="./res/vid/atf.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
	</div>

	<div class="pb-5" style="background: url('./res/img/bg.png')">
		<div class="container pb-5">
			<div class="row text-black py-5">
				<div class="col-12 text-center py-5">
					<p class="font-weight-black text-pompadour display-4 m-0" id="howitworks">How It Works</p>
					<span class="text-black h5">Your living room is now your waiting lobby.</span>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-5">
					<div class="nav flex-column nav-pills" id="step-1-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active mb-3 shadow-lg" id="v-pills-home-tab" data-toggle="pill"
							href=".step-1" role="tab" aria-controls="step-1" aria-selected="true">
							<div class="row">
								<div class="col-3 text-center align-self-center">
									<i class="fas fa-user display-4 text-pompadour"></i>
								</div>
								<div class="col-9">
									<div class="row">
										<div class="col-12 text-metropolis p-3">
											<span class="font-weight-bold h5"><span
													class="badge badge-pompadour">1</span> Create an Account</span>
											<p class="font-weight-normal small mb-0 mt-1">It's fast and easy! Just enter
												your phone number and provide the 4 digit OTP code that's sent to your
												phone.</p>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a class="nav-link mb-3 shadow-lg" id="step-2-tab" data-toggle="pill" href=".step-2" role="tab"
							aria-controls="step-2" aria-selected="false">
							<div class="row">
								<div class="col-3 text-center align-self-center">
									<i class="fas fa-cut display-4 text-pompadour"></i>
								</div>
								<div class="col-9">
									<div class="row">
										<div class="col-12 text-metropolis p-3">
											<span class="font-weight-bold h5"><span
													class="badge badge-pompadour">2</span> Choose your Stylist</span>
											<p class="font-weight-normal small mb-0 mt-1">Browse through our catalog of
												professionals nearest to your location.</p>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a class="nav-link mb-3 shadow-lg" id="step-3-tab" data-toggle="pill" href=".step-3" role="tab"
							aria-controls="step-3" aria-selected="false">
							<div class="row">
								<div class="col-3 text-center align-self-center">
									<i class="far fa-calendar display-4 text-pompadour"></i>
								</div>
								<div class="col-9">
									<div class="row">
										<div class="col-12 text-metropolis p-3">
											<span class="font-weight-bold h5"><span
													class="badge badge-pompadour">3</span> Book your schedule</span>
											<p class="font-weight-normal small mb-0 mt-1">Select from the list of
												available schedules of your chosen stylist</p>
										</div>
									</div>
								</div>
							</div>
						</a>
						<a class="nav-link shadow-lg" id="step-4-tab" data-toggle="pill" href=".step-4" role="tab"
							aria-controls="step-4" aria-selected="false">
							<div class="row">
								<div class="col-3 text-center align-self-center">
									<i class="fas fa-check display-4 text-pompadour"></i>
								</div>
								<div class="col-9">
									<div class="row">
										<div class="col-12 text-metropolis p-3">
											<span class="font-weight-bold h5"><span
													class="badge badge-pompadour">4</span> Get your hair cut</span>
											<p class="font-weight-normal small mb-0 mt-1">Salon-quality service provided
												at the comforts of your own home.</p>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-7">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade step-1 show active text-center" role="tabpanel"
							aria-labelledby="step-1-tab">
							<img src="./res/img/steps/step1.png" width="270px">
						</div>
						<div class="tab-pane fade step-2 text-center" role="tabpanel" aria-labelledby="step-2-tab">
							<img src="./res/img/steps/step2.png" width="270px">
						</div>
						<div class="tab-pane fade step-3 text-center" role="tabpanel" aria-labelledby="step-3-tab">
							<img src="./res/img/steps/step3.png" width="270px">
						</div>
						<div class="tab-pane fade step-4 text-center" role="tabpanel" aria-labelledby="step-4-tab">
							<img src="./res/img/steps/step4.png" width="270px">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="py-5 bg-white">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="media py-5">
						<span class="align-self-center">
							<p class="font-weight-black text-black display-4 mr-5" id="howitworks">Latest
								News <br>and Stories</p><br>
								<a class="btn btn-pompadour text-black" href="#">Read More <i class="fa fa-arrow-right ml-2"></i></a>
						</span>
						<div class="media-body">
							<div class="row text-center">
								<div class="col shadow-hover py-3">
									<div class="card border-0" style="width: 100%;">
										<img src="./res/img/news/1.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title text-metropolis h5 font-weight-bold">Pompadour
												partners with TESDA to support local barbers.</h5>
											<p class="card-text">The company struck an exciting partnership with TESDA
												to train
												aspiring barbers and stylists.</p>
											<a href="#"
												class="btn btn-dark btn-block text-opensans font-weight-black">Read
												Post</a>
										</div>
									</div>
								</div>
								<div class="col shadow-hover py-3">
									<div class="card border-0" style="width: 100%;">
										<img src="./res/img/news/2.png" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title text-metropolis h5 font-weight-bold">Cebu City opens
												opportunities to barbers amidst COVID through app</h5>
											<p class="card-text">Mayor Labella has granted permission for apps providing
												necessity services amidst COVID pandemic.</p>
											<a href="#"
												class="btn btn-dark btn-block text-opensans font-weight-black">Read
												Post</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="py-5 bg-pompadour">
		<div class="container">
			<div class="row text-black py-5">
				<div class="col-12 text-center pt-5 pb-3">
					<p class="font-weight-black text-white display-4 m-0" id="howitworks">Get The App!</p>
					<span class="text-black h5">Available on IOS and Android.</span>
				</div>
				<div class="col-12 text-center pb-5">
					<a href="#"><img src="./res/img/appstore.png" width="200px"></a>
					<a href="#"><img src="./res/img/googleplay.png" width="200px"></a>
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
	<script src="https://kit.fontawesome.com/d8134c252f.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
</body>

</html>