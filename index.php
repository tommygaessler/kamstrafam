<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kamstra_Fam
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
				<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
				<?php
						endif;

							/* Start the Loop */
							while ( have_posts() ) : the_post();
							?>

								<article>

								<a href="<?php the_permalink(); ?>"><img src="<?php echo the_field('background_image'); ?>"></a>

								<header class="entry-header">
									<?php
										if ( is_single() ) {
											the_title( '<h1 class="entry-title">', '</h1>' );
										} else {
											the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
										}

									if ( 'post' === get_post_type() ) : ?>

									<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://<?php the_permalink(); ?>" data-hashtags="kamstrafam">Tweet</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

									<div class="fb-share-button" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="<?php the_permalink(); ?>">Share</a></div>


									<div class="entry-meta">
									 	<!-- <?php kamstrafam_posted_on(); ?> -->
										<span class="posted-on">Posted on <?php echo my_entry_published_link(); ?> by <?php the_author_posts_link(); ?></span>
									</div><!-- .entry-meta -->
									<?php
									endif; ?>
								</header>
							

								
								<div class="entry-content">

								<?php the_content('Continue Reading') ?>

								</div>

								<footer class="entry-footer">
									<?php kamstrafam_entry_footer(); ?>
								</footer>

								</article>

							<?php
							endwhile;

							the_posts_navigation();
						else :

							get_template_part( 'template-parts/content', 'none' );
					endif; 
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
