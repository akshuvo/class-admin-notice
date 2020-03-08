<?php

/**
 *	Class Including
 */
require_once( dirname( __FILE__ ) . '/class-admin-notice.php' );

/**
 * Review Notice
 */
function am_post_grid_admin_notices($args){
	$args[] = array(
		'id' => "samplenotices",
		'text' => "We hope you're enjoying this plugin! Could you please give a 5-star rating on WordPress to inspire us?",
		'logo' => "https://ps.w.org/ajax-filter-posts/assets/icon-256x256.png",
		'border_color' => "#000",
		'is_dismissable' => "true",
		'dismiss_text' => "Dismiss",
		'buttons' => array(
			array(
				'text' => "Ok, you deserve it!",
				'link' => "#link",
				'target' => "_blank",
				'icon' => "dashicons dashicons-external",
				'class' => "button-primary",
			),
			array(
				'text' => "Maybe Later?",
				'link' => "#link",
				'icon' => "dashicons dashicons-external",
				'class' => "button-secondary",
			),
		)
	);

	return $args;
}
add_filter( 'addonmaster_admin_notice', 'am_post_grid_admin_notices' );
