<?php get_header(); ?>
	<div id="main">
		<?php if ( is_day() ) : ?>
			<h1><?php printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' ); ?></h1>
		<?php elseif ( is_month() ) : ?>
			<h1><?php printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?></h1>
		<?php elseif ( is_year() ) : ?>
			<h1><?php printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?></h1>
		<?php elseif ( is_tag() ) : ?>
			<h1><?php printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
		<?php else : ?>
			<h1><?php _e( 'Blog Archives' ); ?></h1>
		<?php endif; ?>
		<ul id="post_list" class="archive_list">
			<?php while ( have_posts() ) : the_post(); ?>
			<li <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="meta"><?php the_time('Y-m-d'); ?> | <?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?> | <?php if(function_exists('the_views')) {the_views();} ?></div>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="navigation">
			<span class="alignleft"><?php previous_posts_link(__('&laquo; Previous Page')) ?></span>
			<span class="alignright"><?php next_posts_link(__('Next Page &raquo;')) ?></span>
		</div>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>