<?php 

/*

Plugin Name: Testphase Plugin
Author: Faisal

*/


add_action('init', 'something_code');
function something_code(){


		    register_post_type('portfolio', array(

			  	'labels' => array(

			  		'name' => ('Portfolio'),
			  		'add_new' => ('Add New Portfolio'),
			  		'add_new_item' => ('Add New Portfolio'),
			  	),
			  	'public' => true,
			  	'menu_icon'	=> 'dashicons-admin-site'
			  ));

		    register_post_type('project', array(

			  	'labels' => array(

			  		'name' => ('Project'),
			  		'add_new' => ('Add New Project'),
			  		'add_new_item' => ('Add New Project'),
			  	),
			  	'public' 	=> true,
			  	'menu_icon'	=>'dashicons-welcome-learn-more'
			  	
			  ));


}



add_action('wp_enqueue_scripts', 'assignment_submit');

function assignment_submit(){

	// css link custom.css
	wp_enqueue_style('custom', plugins_url( 'custom.css' , __FILE__));

}

