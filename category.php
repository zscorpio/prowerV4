<?php get_header(); ?>
	<div id="main">
		<ul id="post_list">
			<?php while ( have_posts() ) : the_post(); ?>
			<li <?php post_class(); ?>>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="meta"><?php the_time('Y-m-d'); ?></div>
				<div class="excerpt">
					<?php if (has_post_thumbnail()) { ?>
						<div class="thumbnail"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
					<?php } ?>
					<!--下面这段代码是为了实现文章摘录，之前没有用过more标签。-->
					<?php
					if(has_excerpt())
					{the_excerpt();?>
					<a rel="more-link" href="<?php the_permalink() ?>"  title="<?php the_title(); ?>">&gt;&gt;阅读全文&lt;&lt;</a>
					<?php }
					else {
					echo mb_strimwidth(strip_tags(apply_filters(‘the_content’, $post->post_content)), 0, 500,"……"); ?>
					<a rel="more-link" href="<?php the_permalink() ?>"  title="<?php the_title(); ?>">&gt;&gt;阅读全文&lt;&lt;</a>
					<?php }//end else ?>
					<!--上面这段代码是为了实现文章摘录，之前没有用过more标签。-->
					<div class="meta"><?php _e("Categories:"); ?><?php the_category('、') ?> | <?php _e("Tags:"); ?><?php the_tags(__(' '), '、'); ?> | <?php if(function_exists('the_views')) {the_views();} ?></div>
					<div class="comments_num"><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?></div>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
		<div class="navigation">
			<span class="alignleft"><?php previous_posts_link(__('<img src="http://www.zscorpio.com/wp-content/themes/prowerV4/images/left.gif" />')) ?></span>
			<span class="alignright"><?php next_posts_link(__('<img src="http://www.zscorpio.com/wp-content/themes/prowerV4/images/right.gif" />')) ?></span>
		</div>
	</div>
	<?php get_sidebar('category'); ?>
<?php get_footer(); ?>