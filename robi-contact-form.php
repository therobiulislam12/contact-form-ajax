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

require_once __DIR__ . '/vendor/autoload.php';

// check if anyone try to access our plugin
if ( !defined( 'ABSPATH' ) ) {
    header( 'Location: /' );
    exit();
}

// create final class
final class R_Contact_Form {

    const version = '1.0.0';

    // $_instance variable
    public static $_instance = null;

    /**
     * Main Constructor Method
     */
    public function __construct() {
        // call all constant
        $this->define_constant();

        // after plugin loaded hook
        add_action( 'plugin_loaded', array( $this, 'rsf_init_plugin' ) );

        // admin menu action hook call
        add_action( 'admin_menu', array( $this, 'rcf_admin_menu_register' ) );

    }

    /**
     * This function call after plugins loaded
     *
     * @return void
     */
    public function rsf_init_plugin() {

        if ( is_admin() ) {
           
        } else {

        }

    }

    /**
     * Define all constant
     * @return void
     */
    public function define_constant() {
        define( 'R_SIMPLE_FORM_VERSION', self::version );
        define( 'R_SIMPLE_FORM_FILE', __FILE__ );
        define( 'R_SIMPLE_FORM_PATH', __DIR__ );
        define( 'R_SIMPLE_FORM_URL', plugins_url( '', R_SIMPLE_FORM_FILE ) );
        define( 'R_SIMPLE_FORM_ASSETS', R_SIMPLE_FORM_URL . '/assets' );
    }
    /**
     * Create a Instance here
     * @return R_Contact_Form
     */
    public static function getInstance() {
        if ( !self::$_instance ) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Menu Register
     * 
     * @return void
     */
    public function rcf_admin_menu_register(){
        $menu = new ContactForm\Admin\Menu;
        $menu->rcf_admin_menu_register_func();
    }
}

/**
 * Call the class
 * @return R_Contact_Form
 */
function r_contact_form() {
    return R_Contact_Form::getInstance();
}

// kick of the function
r_contact_form();
