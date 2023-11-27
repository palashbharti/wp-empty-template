<?php
function emptytemplate_register_styles() {
    wp_enqueue_style('emptytemplate-styles', get_template_diretory_uri() ."/style.css", array(), '1.0', 'all') ;
}

add_action('wp_enqueue_scripts', 'emptytemplate_register_styles');

?>