<?php get_header(); ?>
	<div id="nopage">
		<h2>对不起,你要访问的页面被蝎子吃掉了！</h2>
		<a href="<?php echo get_settings('home'); ?>"><img alt="返回首页" title="返回首页" src="<?php bloginfo('template_url');?>/images/logo.png" /></a>
		<div id="search">
			<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="30" />
				<button type="submit"><?php _e("Search"); ?></button>
			</form>
		</div>
	</div>
<?php get_footer(); ?>