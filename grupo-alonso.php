<?php
/**
 * Plugin Name:     Grupo Alonso
 * Plugin URI:      https://github.com/kokonauta/Grupo-Alonso.git
 * Description:     Plugin para Grupo Alonso
 * Author:          Jorge Lluesma Gil
 * Author URI:      https://github.com/kokonauta
 * Text Domain:     grupo-alonso
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Grupo_Alonso
 */
//Actualizador de GitHub

add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {

	include_once( dirname( __FILE__ ) . '/inc/updater.php');

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'grupo-alonso',
			'api_url' => 'https://api.github.com/repos/kokonauta/Grupo-Alonso',
			'raw_url' => 'https://raw.github.com/kokonauta/Grupo-Alonso/master',
			'github_url' => 'https://github.com/kokonauta/Grupo-Alonso',
			'zip_url' => 'https://github.com/kokonauta/Grupo-Alonso/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'README.md',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}

// Cambiar el Logo del Login
function ga_login_logo() { 
?> 
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo plugin_dir_url( __FILE__ ); ?>/inc/img/grupo-alonso-logo.png);
            background-size: 320px !important;
            width: 320px !important;
        } 
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'ga_login_logo' );
