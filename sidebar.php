<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Index') ) : ?>
		<div id="search" class="widget">		
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="30" />
				<button type="submit"><?php _e("Search"); ?></button>
			</form>
		</div>
		<div class="widget">
			<h3><?php _e("Random Posts"); ?></h3>
			<ul>
    			<?php $rand_posts = get_posts('numberposts=10&orderby=rand');  foreach( $rand_posts as $post ) : ?>
    			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 42, '...'); ?></a></li>
    			<?php endforeach; ?>
			</ul>
		</div>
		<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&category_before=<div id=%id class="linkcat widget">&category_after=</div>'); ?>
	<?php endif; ?>
</div>
