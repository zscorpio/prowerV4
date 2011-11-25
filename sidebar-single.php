<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Single') ) : ?>
		<div id="search" class="widget">		
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="30" />
				<button type="submit"><?php _e("Search"); ?></button>
			</form>
		</div>
		<div id="related_post" class="widget">
			<h3><?php $category = get_the_category(); echo $category[0]->cat_name; ?> 下的最新文章</h3>
			<?php
    			if(is_single()){
    	        	$cats = get_the_category();
    	    	}
    	       	foreach($cats as $cat){
    	        	$posts = get_posts(array(
        	        	'category' => $cat->cat_ID,
            	       	'exclude' => $post->ID,
                	   	'showposts' => 10,
             		));
				echo '<ul>';
				foreach($posts as $post){
					echo '<li><a href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></li>';
        	    }
				echo '</ul>';
	        	}
			?>
		</div>
	<?php endif; ?>
</div>