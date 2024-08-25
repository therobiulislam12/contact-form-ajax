<?php

namespace ContactForm\Admin;

class Menu {

    /**
     * Register admin menu page
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function rcf_admin_menu_register_func(){
        $capability = 'manage_options';
        $parent_slug = 'rcf_form';

        add_menu_page(
            __('RCF Form', 'simple-contact-form'),
            __('RCF Form', 'simple-contact-form'),
            $capability,
            $parent_slug,
            array($this,'rcf_form_menu'),
            'dashicons-format-aside',
            59
        );
        add_submenu_page(
            $parent_slug,
            __('Contact List', 'simple-contact-form'),
            __('Contact List', 'simple-contact-form'),
            $capability,
            $parent_slug,
            array($this,'rcf_form_menu'),
        );
        add_submenu_page(
            $parent_slug,
            __('General Setting', 'simple-contact-form'),
            __('General Setting', 'simple-contact-form'),
            $capability,
            'rcf_details',
            array($this,'rcf_form_menu_details'),
        );
    }

    /**
     * 
     * Show front end code here
     * 
     * @return void
     */
    public function rcf_form_menu(){
        require_once R_SIMPLE_FORM_PATH . '/includes/Admin/views/contact-list.view.php';
    }

    /**
     * 
     * Contact details
     * 
     * @return void
     */
    public function rcf_form_menu_details(){
        require_once R_SIMPLE_FORM_PATH . '/includes/Admin/views/general-settings.view.php';
    }
}