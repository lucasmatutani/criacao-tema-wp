<?php

function pagina_intercambios_registrando_taxonomia(){
    register_taxonomy(
        'paises',
        'destinos',
        array(
            'labels' => array('name' => 'Países'),
            'hierarchical' => true
        )
    ); 
}
add_action('init', 'pagina_intercambios_registrando_taxonomia');

function pagina_intercambios_registrando_post_customizado()
{
    register_post_type(
        'destinos',
        array(
            'labels' => array('name' => 'Destinos'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )
    );
}
add_action('init', 'pagina_intercambios_registrando_post_customizado');

function pagina_intercambios_adicionando_recursos_ao_tema()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'pagina_intercambios_adicionando_recursos_ao_tema');

function pagina_intercambios_registrando_menu()
{
    register_nav_menu('menu-navegacao', 'Menu navegação');
}

add_action('init', 'pagina_intercambios_registrando_menu');
