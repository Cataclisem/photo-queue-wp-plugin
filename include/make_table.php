<?php

add_action('wp_enqueue_scripts', 'enqueue_photo_queue_styles');

add_shortcode('photo_queue_table', 'render_photo_queue_public_table');



function render_photo_queue_public_table() {
    ?>
    <table class="photo_queue_public_table">
        <thead>
            <tr>
                <th>Klasse</th>
                <th>Årgang</th>
                <th>Tidspunkt</th>
            </tr>
        </thead>
        
        <tbody id="displayTable">
            <td> Hello </td>
            <td> Hello1 </td>
            <td> Hello2 </td>
        </tbody>
    </table>

    <?php
}


function enqueue_photo_queue_styles() {
    
    wp_enqueue_style('photo-queue-table-styles', plugin_dir_path(__FILE__) . 'css/photo-queue-table-styles.css', array(), '1.0', 'all');
}
?>