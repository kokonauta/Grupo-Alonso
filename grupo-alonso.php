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

// Cambiar el Logo del Login
function ga_login_logo() { 
?> 
    <style type="text/css"> 
        body.login div#login h1 a {
            background-image: url(<?php dirname( __FILE__ ); ?>/inc/img/grupo-alonso-logo.png);
            padding-bottom: 30px; 
        } 
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'ga_login_logo' );
