<?php

/*###############################
Register 3 sidebars for header.php
*/
register_sidebar(array(
	'name' => __('Header 1'),
	'id' => 'header-widgets-1',
	'description' => __('Header Widgets 1'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('Header 2'),
	'id' => 'header-widgets-2',
	'description' => __('Header Widgets 2'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
register_sidebar(array(
	'name' => __('Header 3'),
	'id' => 'header-widgets-3',
	'description' => __('Header Widgets 3'),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));
