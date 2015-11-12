<?php

/**
*	Plugin Name: CGC Core Markets
*	Description: Markets Core plugin that pulls functionality from CGC Core base plugin
*	Version: 0.1 super duper corndog beta
*
*
*
*	Notes: - the theme constants need to be moved into the autoloader so that they're available when we load cgcfive js on markets
*			- the style enqueued for  edu needs to be moved into the theme
*			- cgc-core needs to be site activated on main site and not network wide
*			- cgc-activity probably needs to be network activated
*/

class cgcCoreMarkets {

	public function __construct(){

		//require( CGC5_CORE_DIR.'/includes/class.api-route-factory.php' );
		//require( CGC5_CORE_DIR.'/includes/functions--rest-api.php' );
		//require( CGC5_CORE_DIR.'/includes/class.process-live-notify.php' );
		//require( CGC5_CORE_DIR.'/includes/class.live-notify-script.php' );
		require( CGC5_CORE_DIR.'/includes/class.user-api.php' );
		//require( CGC5_CORE_DIR.'/public/includes/class.assets.php' );
		require( CGC5_CORE_DIR.'/public/includes/user-functions.php' );

		/*
		*	Load actions need for live notifications from cgc core
		*	currently not in use
		*/
		//add_action( 'wp_footer', 				array( 'cgcLiveNotifyScript', 'script' ) );
		//add_action( 'wp_head', 					array( 'cgcFiveAssets', 'typekit' ) );
		//add_action( 'wp_enqueue_scripts',	 	array( 'cgcFiveAssets', 'scripts' ) );
		//add_action( 'rest_api_init', 			array( 'cgcApiRouteFactory', 'register_routes' ) );
		//add_action( 'rest_api_init', 			array($this, 'rest_api'), 5 );

		/*
		*	Load custom login actions from the custom login class in cgc core
		*/
		//add_action( 'wp_enqueue_scripts',	 					array( 'cgcFiveAssets', 'scripts' ) );
	}

	public static function rest_api() {

		cgcApiRouteFactory::create( 'cgcProcessLiveNotify', array( 'GET', 'POST') );
	}
}
new cgcCoreMarkets();





