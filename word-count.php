<?php
/*
Plugin Name: Word Count
Plugin URI: 
Description: count words from any wordpress site
Version: 1.0
Author: sadat himel
Author URI: http://github.com/sadathimel/
License: GPLv2 or later
Text Domain: word-count
Domain Path: /languages
*/



// function wordcount_activition_hook(){

// }
// register_activation_hook(__FILE__,"wordcount_activition_hook");

// function wordcount_deactivition_hook(){

// }
// register_deactivation_hook(__FILE__,"wordcount_deactivition_hook");

function wordcount_load_textdomain(){
    load_plugin_textdomain('word-count',false,dirname(__FILE__)."/languages");
}
add_action( "plugins_loaded", 'wordcount_load_textdomain');
