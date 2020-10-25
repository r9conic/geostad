<?get_header();?>

<div class="index-post">
	<div class="sub-index-post">
		<?php  if ( have_posts()) : ?>
			<?php while (have_posts()): the_post(); ?>
				<article class="post">
						<h3>
							<?php the_title(); ?>
						</h3>
						<div class="meta">
							Author: <php the_author(); ?> on <?php the_time('F j, g:i a'); ?>
						</div>
						<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<?php echo wpautop('post error'); ?>
		<?php endif; ?>
</div>
</div>

<?
get_sidebar();
get_footer();
