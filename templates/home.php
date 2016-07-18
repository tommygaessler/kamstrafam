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
					<div class="row">
						<h2><?php the_field('our_mission'); ?></h2>
						<!-- <div class="column half">
							<img src="<?php the_field('family_photo'); ?>">
						</div>
						<div class="column half">
							<p><?php the_field('our_mission_description'); ?></p>
						</div> -->
						<!-- <h2>Recent Blog Post</h2> -->

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

						<!-- <p class="monthly border-bottom">Monthly</p>

						<p class="single">Single</p>

						<div class="monthly-content">
							 -->

							<!-- <p> -->
							<?php
							// echo do_shortcode('[stripe name="KamstraFam" description="Prague Mission"][stripe_subscription][stripe_amount label="Monthly Donation Amount"][/stripe]');
							?>

							<!-- </p> -->
						<!-- </div>
						<div class="single-content display-none">

							<p>
							<?php
							// echo do_shortcode('[stripe name="KamstraFam" description="Prague Mission"][stripe_amount label="Single Donation Amount:"][/stripe]');
							?>
							</p>
						</div> -->

						<?php

						  // require_once('wp-content/plugins/wp-simple-pay-pro-for-stripe/vendor/stripe/stripe-php/init.php');

						  // \Stripe\Stripe::setApiKey("");

						  // $json = \Stripe\Balance::retrieve();


						  // $available = $json->available[0]->amount/100;
						  // $pending = $json->pending[0]->amount/100;
						  // // $balance = $available + $pending;
						  // $balance = 500000/100;
						  // $goal = 10000;
						  // $progress = $balance / $goal * 100;
						?>

						<!-- <div id="countdown-wrap">
						  <div id="goal"><span>Goal: </span>$<?php
						  // echo $goal;
						  ?></div>
						  <div id="glass">
						    <div id="progress" style="width: <?php
						    // echo $progress;
						    ?>%;">
						    </div>
						  </div>
						  <div class="goal-stat-funded">
						    <span class="goal-number"><?php
						    // echo $progress;
						    ?>%</span>
						    <span class="goal-label">Funded</span>
						  </div>
						  <div class="goal-stat-countdown">
						    <span class="goal-number"><div id="countdown">23</div></span>
						    <span class="goal-label">Days to Go</span>
						  </div>
						  <div class="goal-stat-raised">
						    <span class="goal-number">$<?php
						    // echo $balance;
						    ?></span>
						    <span class="goal-label">Raised</span>
						  </div>
						</div> -->

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
