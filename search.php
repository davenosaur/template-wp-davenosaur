<?php
/**
 * The template for displaying search results pages.
 *
 * @package davenosaur
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<h2>Resultados  <?php the_search_query(); ?> </h2>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
			</a>
				<?php the_excerpt(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
