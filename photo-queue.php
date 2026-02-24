<?php

/**
 * Plugin Name: Photo Queue
 * Description: A plugin to manage the queue when taking photos of groups. Made for Sønderborg Samfundet.
 * Version: 1.0
 * date: 2025-02-24
 * Author: Christopher Kristiansen  
 * Author URI: kristensen.com
 */

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}


if(!class_exists('photoQueue')) {
    
    class photoQueue {

        public function __construct() {
            define('PLUGIN_DIR', plugin_dir_path( __FILE__ ));
            require_once(PLUGIN_DIR . '/vendor/autoload.php');
        }

        public function activate() {
            include_once(PLUGIN_DIR . '/include/options-page.php');
        }
    }
}

$photoQueuePlugIn = new photoQueue();

$photoQueuePlugIn->activate();
?>