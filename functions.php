<?php



require_once(get_template_directory().'/inc/enqueue.php');


function theme_setpu()
{
	load_theme_textdomain('imran',get_template_directory_uri(),'/language');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails' ,array('slider'));



	register_nav_menus(array(
		'primary_menu'				=> __('Primary Menu','imran'),
		'footer_menu'				=> __('Footer Menu','imran')
	));
}
add_action('after_setup_theme','theme_setpu');


// custom post

function imran_custom_posts()
{
	register_post_type('slider',array(
		'labels'			=> array(
			'name'				=> __('Slider','imran'),
		   'singular_name'	    => __('Slider','imran')
		),
		'public'				=> true,
		'supports'				=> array('title', 'editor', 'author', 'thumbnail')
	));

	register_post_type('Services',array(
		'labels'			=> array(
			'name'				=> __('Services','imran'),
		   'singular_name'	    => __('Services','imran')
		),
		'public'				=> true,
		'supports'				=> array('title', 'editor', 'author')
	));
}
add_action('init','imran_custom_posts');



?>