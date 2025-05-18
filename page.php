<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
while ( have_posts() ) : the_post();
?>

<div class="container-fluid">
	<div class="row">
		<div class="innerPage">
			<div class="container">
				<div class="col-sm-12">
					<h1><?php the_title(); ?></h1>	
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
endwhile;
get_footer();
?>