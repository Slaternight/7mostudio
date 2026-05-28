<?php

if( !defined( 'ABSPATH' ) )
	exit; 

class Proactive_Admin_Templates extends Proactive_Base{

	public function __construct() {
		$this->add_action( 'admin_menu', 'register_page', 20 );
	}
 
	public function register_page() {
		add_submenu_page(
			'pxlart',
		    esc_html__( 'Templates', 'proactive' ),
		    esc_html__( 'Templates', 'proactive' ),
		    'manage_options',
		    'edit.php?post_type=pxl-template',
		    false
		);
	}
}
new Proactive_Admin_Templates;
