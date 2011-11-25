<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Category') ) : ?>
		<div id="search" class="widget">
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="30" />
				<button type="submit"><?php _e("Search"); ?></button>
			</form>
		</div>
		<div class="widget widget_text">
			<div class="textwidget">
				<h3><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h3>
				<?php echo category_description( $category_id ); ?>
			</div>
		</div>
		<div class="widget">
			<h3><?php _e("Random Posts"); ?></h3>
			<ul>
    			<?php $rand_posts = get_posts('numberposts=10&orderby=rand');  foreach( $rand_posts as $post ) : ?>
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 42, '...'); ?></a></li>
    			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
</div>
