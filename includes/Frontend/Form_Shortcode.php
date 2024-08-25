<?php 

namespace ContactForm\Frontend;

class Form_Shortcode{
    public function __construct(){
        add_shortcode('rcf-form', array($this, 'rcf_contact_form_shortcode'));
    }

    public function rcf_contact_form_shortcode(){
        ob_start();

        include_once R_SIMPLE_FORM_PATH . '/includes/Frontend/views/Form.view.php';

        return ob_get_clean();
    }
}