<?php
/*
Theme Name: Geostad
Description: Description
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: geostad
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

*/
get_header();	?>

		<div class="index-post">
			<div class="sub-index-post">
				<?php  if ( have_posts()) : ?>
					<?php while (have_posts()): the_post(); ?>
						<article class="post">
								<h3>
									<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
								</h3>
								<div class="meta">
									Author: <php the_author(); ?> on <?php the_time('F j, g:i a'); ?>
								</div>
								<?php the_excerpt(); ?>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<?php echo wpautop('post error'); ?>
				<?php endif; ?>
		</div>
	</div>




<?php get_footer(); ?>
