<?php
/**
 * Template Name: Home Page
 *
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			?>

				<div class="hero" style="background-image: url(<?php the_field('background_image'); ?>);">
				    <h1><?php the_field('headline'); ?></h1>
					<p><?php the_field('subheadline'); ?></p>
				</div>
				<div id='nav-bg'></div>
				<a class="arrow-wrap" href="#mission">
					<span class="arrow"></span>
				</a>

				<div id="mission">

					<div class="blogPostRow">
						<h2><?php the_field('our_mission'); ?></h2>
						<?php the_field('video'); ?>
					</div>
					<div class="row">
						<div class="column half">
							<img src="<?php the_field('family_photo'); ?>">
						</div>
						<div class="column half">
							<p><?php the_field('our_mission_description'); ?></p>
						</div>
					</div>
					<div class="blogPostRow">
						<h2>Recent Blog Post</h2>

						<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>

						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

						<a href="<?php the_permalink(); ?>"><img src="<?php echo the_field('background_image'); ?>"></a>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


						<?php the_content('Continue Reading') ?>

						<?php
						endwhile;
						wp_reset_postdata();
						?>

					</div>
				</div>
				<div id="donate">
					<div class="row">
						<h2><?php the_field('donations_title'); ?></h2>
						<p><?php the_field('donation_description'); ?></p>

						<div class="column half">
							<p><?php the_field('donation_progress'); ?></p>
						</div>

						<div class="column half">
							<img src="<?php the_field('puzzle_photo'); ?>">
						</div>
					</div>
				</div>
				<div id="contact">
					<div class="row">
						<h2><?php the_field('contact_title'); ?></h2>
						<p><?php the_field('contact_description'); ?></p>
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }; ?>
					</div>
				</div>
				<div id="newsletter">
					<div class="row">
						<div class="column half">
							<h2><?php the_field('newsletter_title'); ?></h2>
							<p><?php the_field('newsletter_description'); ?></p>
						</div>
						<div class="column half">
							<?php
							 // if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); };
							 ?>
							<?php es_subbox( $namefield = "YES", $desc = "", $group = "" ); ?>
						</div>
					</div>
				</div>


			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
