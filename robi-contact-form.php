<?php

/**
 * Plugin Name:       Simple Contact Form
 * Description:       Simple contact form plugin for learn ajax
 * Plugin URI:        #
 * Version:           1.0.0
 * Author:            Robiul Islam
 * Author URI:        https://robiul-islam.netlify.app
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path:       /languages
 * Text Domain:      simple-contact-form
 */

require_once __DIR__ . 'vendor/autoload.php';

 // check if anyone try to access our plugin
if ( !defined( 'ABSPATH' ) ) {
    header( 'Location: /' );
    exit();
}