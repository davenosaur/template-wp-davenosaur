<?php
/*
Template Name: Home Page
@package davenosaur
*/
get_header(); ?>
<?php 
echo do_shortcode("[metaslider id=40]"); 
?> 
<div id="mainContent">
	<h2>Proyectos Recientes</h2>
	<ul id="recentProyects">
		<?php $the_logos = new WP_Query( 'cat=3&showposts=3' ); ?>
		<?php while ($the_logos -> have_posts()) : $the_logos -> the_post(); ?>
			<li class=" clearfix">
				<h3><?php the_title(); ?></h3>
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('small-thumnail'); ?>	</a> 
					<?php if ($post->post_excerpt){ ?>
					<p>
						<?php echo get_the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read more
						</a> 
					</p>
					<?php } else  {
						the_content();
					} ?>
				</li>
			<?php endwhile;?>
		</ul>
	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
