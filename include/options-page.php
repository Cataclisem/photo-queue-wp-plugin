<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'load_carbon_fields');

add_action( 'carbon_fields_register_fields', 'create_options_page' );

function load_carbon_fields() {
    \Carbon_Fields\Carbon_Fields::boot();

}

function create_options_page() {
    Container::make( 'theme_options', __( 'Photo Queue Options' ) )
    ->add_fields( array(
        Field::make( 'checkbox', 'plugin_is_active', __( 'Vis photo køen' ) ) 
        -> set_help_text('Hvis denne er slået fra, vil køen ikke blive vist på siden, og i stedet vil teksten i "Hilsen til næste år..." blive vist.'), 
        Field::make( 'textarea', 'next_year_greeting', __( 'Hilsen til næste år, hvis siden ikke er aktiv: ' ) ) 
        -> set_help_text('Denne tekst vil blive vist ved shortcode [photo_queue_table] hvis siden ikke er aktiv.'),
    ) );
}
?>