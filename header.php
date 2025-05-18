<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(''); ?></title>

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body>

	<!-- Header Section Start -->
	<section class="header-section">
		<div class="container">
			<header class="header-main">

				<!-- Top Header Start-->
				<div class="top-header">
					<div class="container">
						<div class="row">

							<div class="col-md-6">
								<div class="top-header-left">
								</div>
							</div>

							<div class="col-md-6">
								<div class="top-header-right">
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

										<?php	$phone = get_field('phone_icon');
												if (!empty($phone)): ?>
													<img src="<?php echo esc_url($phone['url']); ?>" alt="<?php echo esc_attr($phone['alt']); ?>" />
												<?php endif; ?>

											<a href="tel:1234567890"><?php the_field('phone_number'); ?></a>
										</div>

										<div class="social-icons top-header-social-icons">

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
				<!-- Top Header End -->

				<div class="container">


					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">

							<?php
							$logo = get_field('greenlight_digital_logo');
							if ($logo) {
								echo '<img src="' . $logo['url'] . '" alt="Site Logo">';
							}
							?>


						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
								'depth' => 2,
							));
							?>
							<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<button class="btn btn-outline-success green-btn">Talk to us</button>
								</li>
							</ul>
						</div>
					</nav>

				</div>
			</header>
		</div>
		<!-- Hero Section Start -->
	</section>

	<section class="hero-section-main" id="hero-section-main">

		<div class="hero-content container">

			<div class="row">

				<div class="col-md-7 align-self-center">
					<div class="hero-sec-contents">

						<div class="hero-main-title py-3">
							<h1>
								<?php the_field('hero_main_title_h1'); ?>
							</h1>
							<h2>
								<?php the_field('hero_h2_subtitle'); ?>
							</h2>
						</div>

						<div class="hero-paragraphs pb-3">
							<p class="hero-para">
								<?php the_field('hero_small_paragraph'); ?></p>
							<p><strong> <?php the_field('hero_bold_paragraph'); ?> </strong></p>
						</div>

						<div class="hero-btns">

							<button class="btn get-strated">Get Started</button>
							<button class="btn trans-talk-to-us">Talk to us</button>

						</div>

						<div class="arrow-text d-flex pt-5">
							<span class="material-symbols-outlined">
								arrow_downward
							</span>
							<p><?php the_field('hero_affortable_option_text'); ?></p>
						</div>

					</div>
				</div>

				<div class="col-md-5">
					<div class="content-right">

						<?php
						$circle_img = get_field('hero_circle_image');
						$mobile_img = get_field('hero_mobile_image');
						?>

						<?php if ($circle_img): ?>
							<img src="<?php echo $circle_img['url']; ?>" alt="" class="circle-img">
						<?php endif; ?>

						<?php if ($mobile_img): ?>
							<img src="<?php echo $mobile_img['url']; ?>" alt="" class="mobile-img">
						<?php endif; ?>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Header Section End -->