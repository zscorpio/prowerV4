<?php
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Sidebar Index',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'name' => 'Sidebar Category',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'name' => 'Sidebar Single',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
	}
	register_nav_menus(
		array(
			'header-menu' => __( 'header-menu' )
		)
	);
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
		set_post_thumbnail_size( 200, 150, true );
	}
?>
