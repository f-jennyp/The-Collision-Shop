<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php $this->helpers->analytics(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
	<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="header" class="header-small">
			<div class="header-con row flex">
				<div class="left logo-holder">
					<a href="home"><img src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="right">
					<div class="nav-holder">
						<nav>
							<a href="#" id="pull"><strong>MENU</strong></a>
							<ul>
								<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a>
								</li>
								<li <?php $this->helpers->isActiveMenu("about"); ?>><a
										href="<?php echo URL ?>about#content">ABOUT US</a></li>
								<li <?php $this->helpers->isActiveMenu("services"); ?>><a
										href="<?php echo URL ?>services#content">SERVICES</a></li>
								<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
										href="<?php echo URL ?>testimonials#content">TESTIMONIALS</a></li>
								<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
										href="<?php echo URL ?>gallery#content">GALLERY</a></li>
								<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
										href="<?php echo URL ?>contact#content">CONTACT US</a></li>
							</ul>
						</nav>
					</div>

					<div class="comp-info flex">
						<div class="address flex">
							<img src="public/images/content/ban-add.png" alt="address">
							<div class="text-left">
								<a>
									<?php $this->info("address"); ?>
								</a>
							</div>
						</div>

						<div class="email flex">
							CALL US!
							<div class="text-left">
								<a href="mailto:<?php $this->info("email"); ?>">
									<?php $this->info("email"); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="row banner-con">
			<div class="top">
				<div class="ban-title">We Pay Your Deductible* <br> Free Loaner Vehicle*</div>
				<span class="to-sm">*(some restrictions apply - please contact us for details)</span>

				<div class="btn-holder">
					<div class="btn">
						<a href="<?php echo URL ?>contact#content">Contact The Collision Shop Detroit</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="ban-bottom">
		<div class="bottom-con">
			<div class="content flex">
				<div class="box">
					<div class="img-holder img1">
						<img src="public/images/content/ban-img1.png" alt="">
					</div>
					<div>Serving The Detroit, MI Area</div>
				</div>

				<div class="box">
					<div class="img-holder img2">
						<img src="public/images/content/ban-img2.png" alt="">
					</div>
					<div>Insurance Repair Specialist</div>
				</div>

				<div class="box">
					<div class="img-holder img3">
						<img src="public/images/content/ban-img3.png" alt="">
					</div>
					<div>Lifetime Warranty</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <?php //endif; ?> -->