<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
	<title>Pharmacovigilance</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/popup/magnific-popup.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container">
				<div class="float-left">
					<ul class="list header_social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
					</ul>
				</div>
				<style>
					/* Blink purple background for phone section Start*/
					.blink-phone {
						background-color: #7b2cbf;
						color: white;
						border-radius: 0px;
						padding: 0px 0px;
						animation: blink-bg 1s infinite;
						text-decoration: none;
						display: inline-flex;
						align-items: center;
						gap: 6px;
					}

					/* Blink animation for icon and text */
					@keyframes blink-bg {
						0% {
							background-color: #7b2cbf;
							color: black;
						}

						50% {
							background-color: transparent;
							color: black;
						}

						100% {
							background-color: #7b2cbf;
							color: white;
						}
					}

					/* Make the icon blink in sync with the text */
					.blink-phone i {
						animation: blink-bg 1s infinite;
					}
				</style>

				<div class="float-right">
					<a class="dn_btn blink-phone" href="tel:+917338899156">
						<i class="lnr lnr-phone-handset"></i> +91 73388 99156
					</a>
					&nbsp;&nbsp;
					<i class="lnr lnr-envelope"></i>
					<a class="dn_btn" href="mailto:cyntureglobal@gmail.com">cyntureglobal@gmail.com</a>
				</div>



			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a href="index.php" class="navbar-brand d-flex align-items-center">
						<img src="img/CYNTUREGLOBAL_logo.png"
							style="height:150px; width:150px; margin-right:10px; background-color:white; padding:5px; border-radius:5px;">
						<!-- <span class="logo-text">CYNTURE GLOBAL</span> -->
					</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'about-us.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="about-us.php">About Us</a>
							</li>
							<li class="nav-item submenu <?php echo (basename($_SERVER['PHP_SELF']) == 'courses.php' || basename($_SERVER['PHP_SELF']) == 'course-details.php' || strpos(basename($_SERVER['PHP_SELF']), 'course-') === 0) ? 'active' : ''; ?>">
								<a class="nav-link" href="courses.php">Courses</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="course-pharmacovigilance.php">Professional Certificate in Pharmacovigilance</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="course-clinical-research-diploma.php">Professional Diploma in Clinical Research</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="course-scientific-writing.php">Advanced Certificate in Scientific Writing</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="course-project-management.php">Project Management for Clinical Research</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="course-clinical-trial-management.php">Clinical Trial Management (CTM</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="course-regulatory-affairs.php">Regulatory Affairs in Pharma</a>
									</li>
								</ul>
							</li>
							<!-- <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="blog.php">Research Publications</a>
							</li>
							<li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'elements.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="elements.php">Career</a>
							</li> -->
							<li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->