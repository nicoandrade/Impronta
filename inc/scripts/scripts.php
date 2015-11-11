<?php

	wp_enqueue_script( 'jquery' );
	
	//hoverIntent Plugin ==============================================
	wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/js/jquery.hoverIntent.js', array('jquery'), '6.0', true );
	//=================================================================

	//Modernizr Plugin ================================================
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.67069.js', '2.8.3', true );
	//=================================================================
	
	//Pace  ===========================================================
	wp_enqueue_script('pace', get_template_directory_uri() . '/js/pace.js', array(), '0.2.0', true);
	//=================================================================
	
	//Bootstrap JS ========================================
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true);
	//=================================================================
	
	//Comment Reply ===================================================
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//=================================================================


	
	//Customs Scripts =================================================
	wp_enqueue_script('theme-custom', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap'), '1.0', true );
	//=================================================================

?>