<?php

/**
 *  Template Name: Home Page Template
 */

get_header();
wp_head();
?>

<!------------------------------------ Slider start --------------------------------------------->
<section class="owl-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="slider-header">
					<div class="left-title">
						<h2><?php the_field('slider_section_title'); ?></h2>
					</div>
					<div class="owl-btn">
						<button class="see-more-btn">See More Websites</button>
					</div>
				</div>

				<div id="news-slider" class="owl-carousel">

					<?php if (have_rows('slider_content')) : ?>
						<?php while (have_rows('slider_content')) : the_row(); ?>

							<?php
							$image = get_sub_field('slider_image');
							$title = get_sub_field('slider_title');
							$paragraph = get_sub_field('slider_paragraph');
							?>

							<div class="post-slide">
								<div class="post-img">
									<?php if ($image): ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
									<?php endif; ?>
								</div>

								<div class="post-content">
									<h3 class="post-title">
										<a href="#"><?php echo esc_html($title); ?></a>
									</h3>
									<p class="post-description"><?php echo esc_html($paragraph); ?></p>
								</div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>

			</div>
		</div>
	</div>
</section>

<!-- End -->


<!------------------------------------ GET YOUR WEBSITE SECTION CODE START ---------------------->
<div class="getYourWebsite">

	<div class="left">
		<?php
		$mobile_img = get_field('get_your_website_left_image');
		if ($mobile_img) {
			echo '<img src="' . $mobile_img['url'] . '" alt="Site Logo">';
		}
		?>
	</div>
	<div class="right">
		<h2><?php the_field('get_your_website_title'); ?></h2>

		<?php if (have_rows('steps')) : ?>
			<?php
			$total_steps = count(get_field('steps'));
			$step_index = 0;
			?>
			<?php while (have_rows('steps')) : the_row(); ?>
				<?php
				$step_index++;
				$step_image = get_sub_field('step_image');
				$step_title = get_sub_field('step_title');
				$step_paragraph = get_sub_field('step_paragraph');
				?>
				<div class="text">
					<div>
						<?php if ($step_image) : ?>
							<img src="<?php echo esc_url($step_image['url']); ?>" alt="<?php echo esc_attr($step_image['alt']); ?>">
						<?php endif; ?>
					</div>
					<div>
						<h3><?php echo esc_html($step_title); ?></h3>
						<p><?php echo esc_html($step_paragraph); ?></p>
					</div>
				</div>
				<?php if ($step_index < $total_steps) : ?>
					<div class="line"></div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>


		<div class="textLast">
			<svg width="32" height="49" viewBox="0 0 32 49" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M31.9932 47.1226H9.51074H1.5V0.729004" stroke="#240D4B" stroke-width="2" stroke-linejoin="round" />
			</svg>
			<button>Talk To Us</button>
		</div>
		<!-- <img src="/assets/images/greenlight.png" class="greenLight" alt=""> -->
		<?php
		$image_spinner = get_field('image_spinner');
		if ($image_spinner) {
			echo '<img src="' . $image_spinner['url'] . '" alt="Site Logo" class="greenLight">';
		}
		?>

	</div>

</div>

<!--  END -->


<!------------------------------------ WE ARE ALL ABOUT SIMPLICITY START ------------------------->
<div class="simplicity">
	<div></div>
	<div>
		<?php
		$about_simplicity_bg_image = get_field('about_simplicity_bg_image');
		if ($about_simplicity_bg_image) {
			echo '<img src="' . $about_simplicity_bg_image['url'] . '" alt="">';
		}
		?>

	</div>

	<div class="inner">
		<h2><?php the_field('about_simplicity_title', get_the_ID()); ?></h2>
			
		<p>
			<?php the_field('about_simplicity_paragraph_one'); ?>
			<?php the_field('about_simplicity_paragrpah_two'); ?>
		</p>
		<div class="buttonContainer">
			<button>Find Out more</button><button>Talk To Us</button>
		</div>
	</div>
</div>
<!-- END -->


<!------------------------------------ HERE'S WHAT TO EXPECT START ------------------------------->
<div class="expect">

	<div>
		<h3>
			<?php the_field('expect_title'); ?>
		</h3>

		<ul>
			<?php if (have_rows('expect_steps')) : ?>
				<?php while (have_rows('expect_steps')) : the_row(); ?>

					<?php
					$expect_image = get_sub_field('expect_image');
					$expect_title = get_sub_field('expect_title');
					$expect_paragraph = get_sub_field('expect_paragraph');
					?>

					<li>

						<?php if ($expect_image): ?>
							<img src="<?php echo esc_url($expect_image['url']); ?>" alt="<?php echo esc_attr($expect_image['alt']); ?>">
						<?php endif; ?>

						<div>
							<h2><?php echo esc_html($expect_title); ?></h2>
							<p><?php echo esc_html($expect_paragraph); ?></p>
						</div>
					</li>

				<?php endwhile; ?>
			<?php endif; ?>


		</ul>

	</div>

</div>

<!-- END -->

<!------------------------------------ GREENLIGHT WAS CREATED START ------------------------------>
<div class="expectContainer">

	<div>

		<?php
		$sign_image = get_field('greenlight_founder_message_founder_image');
		if ($sign_image) {
			echo '<img src="' . $sign_image['url'] . '" alt="">';
		}
		?>

		<span><?php the_field('greenlight_founder_message_subtitle'); ?></span>
		<h2>
			<?php the_field('greenlight_founder_message_title'); ?>
		</h2>

		<div class="details">
			<p>
				<?php the_field('greenlight_founder_message_paragraph'); ?>
				<br /><br />
				<b><?php the_field('greenlight_founder_message_paragraph_bold'); ?>
				</b>
			</p>
			<h3>
				<?php
				$founder_sign_image = get_field('founder_image');
				if ($founder_sign_image) {
					echo '<img src="' . $founder_sign_image['url'] . '" alt="">';
				}
				?>
			</h3>
			<div>
				<div>
					<p><b><?php the_field('greenlight_founder_message_name'); ?></b></p>
					<p><?php the_field('greenlight_founder_message_designation'); ?></p>
				</div>
				<button>
					Get Started
				</button>
			</div>
		</div>

	</div>

</div>

<!-- END -->


<!---------------------------------- GREENLIGH GIVING BACK START ---------------------------------->
<section class="giving-back-section">
	<div class="container">

		<div class="d-flex justify-content-between align-items-start flex-wrap">
			<div class="mb-3">
				<h2><?php the_field('greenlight_giving_back_title'); ?></h2>
				<p class="mb-1"><?php the_field('greenlight_blog_paragraph'); ?></p>
			</div>
			<button class="find-out-btn mb-3">Find Out More</button>
		</div>

		<div class="row g-4">
			<?php if (have_rows('greenlight_blogs_')) : ?>
				<?php while (have_rows('greenlight_blogs_')) : the_row(); ?>

					<?php
					$blog_image = get_sub_field('blog_image');
					$blog_title = get_sub_field('blog_title');
					$blog_paragraph = get_sub_field('blog_paragraph');
					?>

					<div class="col-md-4">
						<div class="card-box">

							<?php if (!empty($blog_image)) : ?>
								<img src="<?php echo esc_url($blog_image['url']); ?>" alt="<?php echo esc_attr($blog_image['alt']); ?>">
							<?php endif; ?>

							<h3 class="card-title mt-3 fw-bold"><?php echo esc_html($blog_title); ?></h3>
							<p><?php echo esc_html($blog_paragraph); ?></p>

						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
</section>
<!-- End -->

<!--------------------------- What our clients say Slider start  ---------------------------------->
<section class="owl-slider owl-slider-dup" id="clients-testimonials">

	<div class="container">

		<div class="row">
			<div class="col-md-12">

				<div class="slider-header">
					<div class="left-title">
						<h2><?php the_field('client_section_title'); ?></h2>
					</div>
					<div class="owl-btn">
						<button class="see-more-btn">Read More Reviews</button>
					</div>
				</div>

				<?php if (have_rows('client_reviews')) : ?>
					<div id="news-slider-2" class="owl-carousel">

						<?php while (have_rows('client_reviews')) : the_row();
							$star_image = get_sub_field('rating');
							$client_review_paragraph = get_sub_field('client_review_paragraph');
						?>

							<div class="post-slide"
								style="background-color: #240D4B; padding: 50px; border-radius: 20px; color: white;">

								<!-- Stars -->
								<div class="stars" style="text-align: left; margin-bottom: 10px; color: #AEE9B6;">
									<?php
									if ($star_image) {
										echo '<img src="' . esc_url($star_image['url']) . '" alt="Rating Stars">';
									}
									?>
								</div>

								
									<div class="fir-slider-content" style="text-align: left; margin-top: 10px;">
									<div class="post-description" style="margin: 10px 0; color: white;">
										<?php echo $client_review_paragraph; ?>
								</div>
							</div>

					</div>

				<?php endwhile; ?>

			</div>
		<?php endif; ?>

		</div>

	</div>
	</div>

</section>

<!-- End -->


<!-------------------------- Follow us on social media section start ------------------------------->
<section class="social-media-section" id="social-media-section">
	<div class="container">

		<div class="social-header">
			<h2><?php the_field('social_media_title'); ?></h2>
			<div class="social-icons">

				<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
				<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>

			</div>

		</div>

		<div class="social-cards">

			<div class="social-card">

				<?php
				$image_one = get_field('social_media_image_one');
				if (!empty($image_one)): ?>
					<img src="<?php echo esc_url($image_one['url']); ?>" alt="<?php echo esc_attr($image_one['alt']); ?>" />
				<?php endif; ?>

			</div>

			<div class="social-card">

				<?php
				$image_two = get_field('social_media_image_two');
				if (!empty($image_two)): ?>
					<img src="<?php echo esc_url($image_two['url']); ?>" alt="<?php echo esc_attr($image_two['alt']); ?>" />
				<?php endif; ?>

			</div>

			<div class="social-card">

				<?php
				$image_three = get_field('social_media_image_three');
				if (!empty($image_three)): ?>
					<img src="<?php echo esc_url($image_three['url']); ?>" alt="<?php echo esc_attr($image_three['alt']); ?>" />
				<?php endif; ?>

			</div>

			<div class="social-card">

				<?php
				$image_four = get_field('social_media_image_four');
				if (!empty($image_four)): ?>
					<img src="<?php echo esc_url($image_four['url']); ?>" alt="<?php echo esc_attr($image_four['alt']); ?>" />
				<?php endif; ?>

			</div>

		</div>
	</div>
</section>
<!-- End -->

<?php
get_footer();
?>