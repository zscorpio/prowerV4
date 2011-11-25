<?php get_header(); ?>
	<div id="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<div id="post_content"><?php the_content(); ?></div>
			</div>
		<?php endwhile; ?>
		<?php comments_template(); ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>