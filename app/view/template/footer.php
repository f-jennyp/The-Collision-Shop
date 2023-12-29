<footer>
	<div id="footer">
		<div class="row">
			<div class="flex">
				<div class="logo-holder">
					<a href="home"><img src="public/images/content/logo.png" alt="Logo"></a>
				</div>

				<div class="comp-info">
					<div class="flex">
						<div class="phone content">
							<img src="public/images/content/ft-phone.png" alt="">
							<div class="text-left">
								<div class="label">Phone</div>
								<a href="tel:<?php $this->info("phone"); ?>">
									<?php $this->info("phone"); ?>
								</a>
							</div>
						</div>

						<div class="email content">
							<img src="public/images/content/ft-email.png" alt="">
							<div class="text-left">
								<div class="label">Email</div>
								<a href="mailto:<?php $this->info("email"); ?>">
									<?php $this->info("email"); ?>
								</a>
							</div>
						</div>
					</div>
					<div class="location content">
						<img src="public/images/content/ft-address.png" alt="">
						<div class="text-left">
							<div class="label">Location</div>
							<a>
								<?php $this->info("location"); ?>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="nav-holder">
				<div class="flex">
					<nav>
						<ul>
							<li <?php $this->helpers->isActiveMenu("home"); ?>><a 
									href="<?php echo URL ?>">Home</a></li>
							<li <?php $this->helpers->isActiveMenu("about"); ?>><a
									href="<?php echo URL ?>about#content">About Us</a></li>
							<li <?php $this->helpers->isActiveMenu("services"); ?>><a 
									href="<?php echo URL ?>services#content">Services</a></li>
							<li <?php $this->helpers->isActiveMenu("gallery"); ?>><a
									href="<?php echo URL ?>gallery#content">Gallery</a></li>
							<li <?php $this->helpers->isActiveMenu("testimonials"); ?>><a
									href="<?php echo URL ?>reviews#content">Reviews</a></li>
							<li <?php $this->helpers->isActiveMenu("contact"); ?>><a
									href="<?php echo URL ?>contact#content">Contact Us</a></li>
						</ul>
					</nav>
				</div>
				<nav>
			</div>
		</div>

		<a href="home" class="h-logo"><img src="public/images/common/logo.jpg" alt="Logo"></a>



		<div class="copyrights">
			<p class="copy">
				©
				<?php echo date("Y"); ?>.
				<?php $this->info("company_name"); ?> All Rights Reserved.
				<?php if ($this->siteInfo['policy_link']): ?>
					<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
				<?php endif ?>
			</p>
			<p class="techno">
				<img class="lazy loaded" src="public/images/hd-logo.png" alt=""><a
					href="http://technodreamoutsourcing.com/">Web Design</a> Done by <a
					href="http://technodreamoutsourcing.com/"> TechnoDream LLC</a>
			</p>
		</div>
	</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function () {
			$('.g-recaptcha').each(function (index, el) {
				var recaptcha = grecaptcha.render(el, { 'sitekey': '<?php $this->info("site_key"); ?>' });
				$('.destroy-on-load').remove();
			})
		};


		$('.consentBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function () {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

	</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
	<script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({ num_page_links_to_display: 3, items_per_page: 10 });
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
		style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>