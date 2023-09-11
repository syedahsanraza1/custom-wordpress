</php

/*
 * Plugin Name:       My first Plugin
 * Plugin URI:        https://syedahsanraza.com
 * Description:       This is my first plugin
 * Version:           1.0.0
 * Author:            Syed Ahsan Raza
 * Author URI:        https://syedahsanraza.com
 * Text Domain:       my-first-plugin
 */


 if ( is_admin() ) {
    // we are in admin mode
    require_once __DIR__ . '/admin/plugin-name-admin.php';
}