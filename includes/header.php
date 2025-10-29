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
				<div class="float-right">
					<a class="dn_btn" href="tel:+4400123654896">+91 73388 99156</a>
					<a class="dn_btn" href="mailto: cyntureglobal@gmail.com">cyntureglobal@gmail.com</a>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a href="index.php" class="navbar-brand d-flex align-items-center">
						<img src="img/cynture_global.png" style="height:50px; width:50px; margin-right: 10px;">
						<span class="logo-text">CYNTURE GLOBAL</span>
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
							<li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'blog.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="blog.php">Research Publications</a>
							</li>
							<li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'elements.php') ? 'active' : ''; ?>">
								<a class="nav-link" href="elements.php">Career</a>
							</li>
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