<?php get_header(); ?>
	<div id="main">
		<h1><?php _e("Search"); ?>: <?php the_search_query(); ?></h1>
		<ul id="post_list" class="search_list">
			<?php while ( have_posts() ) : the_post(); ?>
			<li <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="meta"><?php the_time('Y-m-d'); ?> | <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?></div>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="navigation">
			<span class="alignleft"><?php previous_posts_link(__('<img src="http://www.zscorpio.com/wp-content/themes/prowerV4/images/left.gif" />')) ?></span>
			<span class="alignright"><?php next_posts_link(__('<img src="http://www.zscorpio.com/wp-content/themes/prowerV4/images/right.gif" />')) ?></span>
		</div>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>