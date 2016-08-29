<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kamstra_Fam
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="row">
			<div class="bible-verse">
					<blockquote><?php the_field('bible_verse'); ?></blockquote>
					<i><?php the_field('bible_verse_author'); ?></i>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/min/jquery-min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
