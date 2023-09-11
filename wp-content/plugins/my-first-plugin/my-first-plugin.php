<?php

/*
 * Plugin Name:       My first Plugin
 * Plugin URI:        https://syedahsanraza.com
 * Description:       This is my first plugin
 * Version:           1.0.0
 * Author:            Syed Ahsan Raza
 * Author URI:        https://syedahsanraza.com
 * Text Domain:       my-first-plugin
 */

if (! defined('WPINC')){
    die;
}




function ahsan_dashboard_menu() {
    add_menu_page(
        'Ahsan Dashboard',
        'Ahsan',
        'manage_options',
        'ahsan-dashboard',
        'ahsan_dashboard_page',
        'dashicons-dashboard',
        10
        
    );


    // Add sub-menu pages
    add_submenu_page(
        'ahsan-dashboard',
        'Feature 1',
        'Feature 1',
        'manage_options',
        'ahsan-feature1',
        'ahsan_feature1_page',
        100
    );

    add_submenu_page(
        'ahsan-dashboard',
        'Feature 2',
        'Feature 2',
        'manage_options',
        'ahsan-feature2',
        'ahsan_feature2_page'
    );
}

// Function to display content on the dashboard submenu pages
function ahsan_dashboard_page() {
    ?>
    <div class="wrap">
        <h2>Ahsan Dashboard</h2>
        <p>Welcome to the Ahsan Dashboard! This is a custom dashboard menu created for Ahsan.</p>
        <p>You can add your content and functionality here.</p>
    </div>
    <?php
}

function ahsan_feature1_page() {
    ?>
    <div class="wrap">
        <h2>Feature 1</h2>
        <p>This is Feature 1 content. You can add your custom content and functionality here.</p>
    </div>
    <?php
}

function ahsan_feature2_page() {
    ?>
    <div class="wrap">
        <h2>Feature 2</h2>
        <p>This is Feature 2 content. You can add your custom content and functionality here.</p>
    </div>
    <?php
}

// Hook to add the dashboard menu and sub-menu pages
add_action('admin_menu', 'ahsan_dashboard_menu');