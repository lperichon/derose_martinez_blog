<?php
/**
 * Template Name: Full width Template
 * Description: A Page Template that makes pages expand to the full width
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since SwáSthya en Martinez 1.0
 */

get_header(); ?>

  <div class="contact-middle full-width">
		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
  </div>
<?php get_footer(); ?>