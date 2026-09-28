<?php
/**
 * BrokriO Nexus theme functions.
 *
 * @package BrokriO_Nexus
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set up theme features.
 *
 * @return void
 */
function brokrio_nexus_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'brokrio_nexus_setup' );
