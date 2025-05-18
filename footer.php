<?php

/**
 * The template for displaying the footer
 */
?>

<!-- Footer code start -->
<section class="contact-container">
	<footer>
		<div class="container-fluid">

			<div class="contact-section">
				<div class="container">
					<div class="row">

						<!-- Left side content -->
						<div class="col-lg-5 mb-4 mb-lg-0">
							<div class="footer-content">


								<h2><?php the_field('footer_title'); ?></h2>
								<p class="footer-para"><?php the_field('footer_paragraph'); ?></p>
								<p class="footer-para"><?php the_field('footer_subtitle'); ?></p>

								<div class="footer-social">
									<p class="footer-icons">
										<?php
										$mail = get_field('mail_icon');
										if (!empty($mail)): ?>
											<img src="<?php echo esc_url($mail['url']); ?>" alt="<?php echo esc_attr($mail['alt']); ?>" />
										<?php endif; ?>

										<a href="mailto:info@greenlight-digital.co.uk" class="footer-para"><?php the_field('type_email_here'); ?>
										</a>
									</p>

									<p class="footer-icons">
										<?php
										$phone = get_field('phone_icon');
										if (!empty($phone)): ?>
											<img src="<?php echo esc_url($phone['url']); ?>" alt="<?php echo esc_attr($phone['alt']); ?>" />
										<?php endif; ?>
										<span class="footer-phone"><?php the_field('phone_number'); ?></span>
									</p>

								</div>

								<div class="social-icons mt-3 top-header-social-icons">
									<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
									<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
									<a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

								</div>
							</div>
						</div>

						<!-- Right side form -->
						<div class="col-lg-7">
							<form class="contact-form">

								<div class="footer-contact-form">
									<div class="form-fields">
										<div class="name-field mb-3">
											<label for="">Name</label>
											<input type="text" class="form-control">
										</div>

										<div class="email-field mb-3">
											<label for="">Email</label>
											<input type="email" class="form-control">
										</div>

										<div class="phone-field mb-3">
											<label for="">Telephone</label>
											<input type="tel" class="form-control">
										</div>
									</div>
								</div>

								<div class="footer-form-textfield">
									<div class="text-field mb-3">
										<label for="">Message</label>
										<textarea class="form-control" rows="4"></textarea>
									</div>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>

							</form>
						</div>
					</div>

					<!-- Footer Links -->
					<div class="row mt-5">

						<div class="col-lg-6">
							<div class="footer-logo">
								<?php
								$logo = get_field('greenlight_digital_logo');
								if ($logo) {
									echo '<img src="' . $logo['url'] . '" alt="Site Logo">';
								}
								?>
							</div>
						</div>

						<div class="col-lg-6 text-lg-end">
							<div class="footer-links">

								<div class="site-short-links">

									<a href="#">Our Websites</a>
									<a href="#">About Us</a>
									<a href="#">Giving Back</a>
									<a href="#">Reviews</a>
									<a href="#">Talk To Us</a>

								</div>

								<div class="footer-solical-links">
									<div class="site-info">
										<div class="email">

											<?php
											$mail = get_field('mail_icon');
											if (!empty($mail)): ?>
												<img src="<?php echo esc_url($mail['url']); ?>" alt="<?php echo esc_attr($mail['alt']); ?>" />
											<?php endif; ?>

											<a href="mailto:info@greenlight-digital.co.uk"><?php the_field('type_email_here'); ?></a>
										</div>

										<div class="phone">
											<span class="material-symbols-outlined">
												<?php
												$phone = get_field('phone_icon');
												if (!empty($phone)): ?>
													<img src="<?php echo esc_url($phone['url']); ?>" alt="<?php echo esc_attr($phone['alt']); ?>" />
												<?php endif; ?>
											</span>
											<a href="tel:1234567890"><?php the_field('phone_number'); ?></a>
										</div>

										<div class="social-icons">
											<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
											<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
											<a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</footer>
	</div>

</section>

<!-- Footer Bottom -->
<section class="bottom-footer" style="background-color: #011010;">

	<div class="container">

		<div class="row footer-bottom mt-3">
			<div class="col-lg-6">

				<div class="footer-left-sec">
					<a href="#"><?php the_field('bottom_footer'); ?></a>
				</div>

			</div>
			<div class="col-lg-6 text-lg-end">

				<div class="footer-right-sec">
					<p><?php the_field('green_light_digital_text'); ?></p>
				</div>

			</div>
		</div>

	</div>

	</div>
</section>

<!-- End -->

<?php wp_footer(); ?>

</body>
</html>