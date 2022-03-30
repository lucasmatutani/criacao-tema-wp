<?php 

function pagina_intercambios_adicionando_recursos_ao_tema(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'pagina_intercambios_adicionando_recursos_ao_tema');

function pagina_intercambios_registrando_menu(){
    register_nav_menu('menu-navegacao', 'Menu navegação'); 
}

add_action('init', 'pagina_intercambios_registrando_menu');
?>

