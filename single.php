<?php get_header(); ?>
	<div id="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<div class="meta"><?php the_time('Y-m-d'); ?></div>
				<div id="post_content"><?php the_content(); ?></div>
				<div class="meta"><?php _e("Author:"); ?><a href="http://card.zscorpio.com/"><?php the_author(); ?></a> | <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?></div>
			</div>
		<?php endwhile; ?>
		<?php comments_template(); ?>
	</div>
	<?php get_sidebar('single'); ?>
<?php get_footer(); ?>