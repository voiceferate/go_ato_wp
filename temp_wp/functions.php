<?php

	add_filter('show_admin_bar', '__return_false');
	
	add_action('wp_enqueue_scripts', 'my_simple_media');
	add_action('after_setup_theme', 'my_simple_after_setup');
	add_action('widgets_init', 'my_simple_sidebar');
	

	function my_simple_media() {
		wp_enqueue_style('stylesheet_main', get_stylesheet_uri());

		wp_enqueue_script('scripts_script_all', get_template_directory_uri() . '/assets/js/scripts.min.js');
		// wp_enqueue_script('scripts_common', get_template_directory_uri() . '/assets/js/common.js');
	}

	function my_simple_after_setup() {
		register_nav_menu( 'top', 'Для хедера' );
		register_nav_menu( 'bottom1', 'Нижнє меню_1' );
		register_nav_menu( 'bottom2', 'Реабілітація' );
		register_nav_menu( 'laws', 'Закони' );
		register_nav_menu( 'help', 'Допомога та Реабілітація' );

		

		add_theme_support('post-thumbnails');
		add_theme_support('title-tag');
		
	};

	function my_simple_sidebar() {
		
		register_sidebar(array(
			'name' => 'sidebar-right',
			'id' => 'sidebar-right',
			'description' => 'Права колонка',
			'before_widget' => '<div id="%1$s" class="sidebar-item">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="content-header">',
			'after_title' => '</h2>'
		));
	}