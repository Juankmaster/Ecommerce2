<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
        'before_widget' => '<div class="categories">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
?>