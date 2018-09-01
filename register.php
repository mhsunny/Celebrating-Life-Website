<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CELEBRATING LIFE BD</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css"/>
		<link rel="stylesheet" type="text/css" href="css/animate.css"/>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
		<link rel="stylesheet" type="text/css" href="css/fontello_1.css"/>
		<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>
		<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
		<link rel="stylesheet" type="text/css" href="css/bxslider.css"/>
		<link rel="stylesheet" type="text/css" href="css/settings.css"/>
		<link rel="stylesheet" type="text/css" href="css/preset.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
	</head>
	<body>
		<section class="topBar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p class="topDate">November 13, 2017</p>
					</div>
					<div class="col-sm-6">
						<p class="topHelp">For any query: celebratinglife.contest@gmail.com</p>
					</div>
				</div>
			</div>
		</section>
		<section class="logoBar">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-center">
						<img style="width: 160px;" src="images/new/main_logo.png" alt=""/>
					</div>
					<div class="col-md-4 text-center">
						<h1 class="celebrating-text">Celebrating Life</h1>
					</div>
					<div class="col-md-5 text-center">
						<div class="social text-right">
							<a class="fac" href="#"><i class="fa fa-facebook"></i></a>
							<a class="goo" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="ins" href="#"><i class="fa fa-instagram"></i></a>
							<a class="twi" href="#"><i class="fa fa-twitter"></i></a>
							<a class="pin" href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<?php include 'header.php'; ?>
				</div>
			</div>
		</header>
		<section class="djProfiles commonSection">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">
						<div class="sectionTitle">
							<h1><span>REGISTRATION</span></h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<form class="register">
							<div class="form-group">
								<label for="first name">First Name:</label>
								<input type="text" class="form-control" id="first name"  placeholder="Enter your first name">
							</div>
							<div class="form-group">
								<label for="last name">Last Name:</label>
								<input type="text" class="form-control" id="last name"  placeholder="Enter your last name">
							</div>
							<div class="form-group">
								<label for="age">Age:</label>
								<input type="number" class="form-control" id="age"  placeholder="Enter your age">
							</div>
							<div class="form-group">
								<label for="sel1">Gender:</label>
								<select class="form-control" id="gender">
									<option>Select your gender</option>
									<option>male</option>
									<option>female</option>
								</select>
							</div>
							<div class="form-group">
								<label for="sel1">Category:</label>
								<select class="form-control" id="category">
									<option>Select your Category</option>
									<option>Film</option>
									<option>Photography</option>
									<option>Lyrics</option>
									<option>Film Making workshop</option>
									<option>Lyrics Workshop</option>
									<option>Critics Workshop</option>
								</select>
							</div>
							<div class="form-group">
								<label for="mobile no">Mobile Number:</label>
								<input type="text" class="form-control" id="mobile no"  placeholder="Enter your mobile no">
							</div>
							<div class="form-group">
								<label for="email">Email address:</label>
								<input type="email" class="form-control" id="email" placeholder="Enter email address">
							</div>
							<div class="form-group">
								<label for="email">Postal address:</label>
								<textarea rows="5" cols="8" class="form-control" placeholder="postal address"></textarea>
							</div>
							
							<button type="submit" class="btn btn-primary">Register</button>
						</form>
					</div>
				</div>
			</section>
			<?php include 'footer.php';?>
		</body>
	</html>