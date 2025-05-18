<?php
get_header();
while ( have_posts() ) : the_post();
?>
	<div class="container-fluid">

		<div class="row">

			<div class="innerPage">

				<div class="container padding">

					<div class="col-lg-12">

						<div class="col-sm-12 aboutMarginBottom">

							<div class="aboutBox">

								<h1><?php the_title(); ?></h1>

								<?php the_content(); ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>
<?php 
endwhile;
get_footer();
?>