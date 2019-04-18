<?php
/**
 * Plugin Name:     Grupo Alonso
 * Plugin URI:      https://github.com/kokonauta/Grupo-Alonso.git
 * Description:     Plugin para Grupo Alonso
 * Author:          Jorge Lluesma Gil
 * Author URI:      https://github.com/kokonauta
 * Text Domain:     grupo-alonso
 * Domain Path:     /languages
 * Version:         0.0.0
 *
 * @package         Grupo_Alonso
 */
//Actualizador de GitHub
require_once( 'inc/BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'kokonauta', "Grupo-Alonso" );
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