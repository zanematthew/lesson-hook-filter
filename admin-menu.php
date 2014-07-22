<?php

function lesson_filter_menu(){
    add_submenu_page(
        'options-general.php',
        __('Lesson Filter', 'lesson_filter' ),
        __('Lesson Filter','lesson_filter'),
        'manage_options',
        'lesson-filter',
        'lesson_filter_render' // see form.php
        );
}
add_action('admin_menu', 'lesson_filter_menu');