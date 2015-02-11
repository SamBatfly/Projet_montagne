<?php
add_action('init', 'theme_add_menu');
function theme_add_menu()
{
    register_nav_menu('main_menu', 'Menu principal');
}