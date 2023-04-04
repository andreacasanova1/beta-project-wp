<?php

//  CARGAR JS Y CSS

    function my_scripts_and_css()
    {
        // REMOVE GUTENBERG CSS

        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        // MY STUFF

        if ( !is_admin() )
        {
            if ( is_page ( 'Contact' ) )
            {
                wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );
            }

            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );        
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );




//  ELIMINAR TAMAÑOS DE IMÁGENES QUE NO NECESITE MI SITIO WEB

    remove_image_size ( '1536x1536' );
    remove_image_size ( '2048x2048' );

    update_option ( 'medium_large_size_w', '0' ); // Esta y la siguiente línea sirven para eliminar el tamaño 'medium_large'
    update_option ( 'medium_large_size_h', '0' );



//  AÑADIR SOPORTE PARA...

    add_theme_support ( 'title-tag' );
    add_theme_support ( 'post-thumbnails' );
    add_post_type_support ( 'page', 'excerpt' );



//  REGISTRO DE MENÚS

    register_nav_menu ( 'header-menu', 'Cabecera del sitio' );
    register_nav_menu ( 'footer-menu-left', 'Pie de página a la izquierda' );
    register_nav_menu ( 'footer-menu-right', 'Pie de página a la derecha' );



//  REGISTRO DE SIDEBARS


//  REGISTRO DE TIPOS DE ENTRADA Y TAXONOMÍAS

    function my_custom_post_types_and_taxonomies()
    {
        register_post_type ( 'fotofolio', array
        (
            'public' => true,
            'exclude_from_search' => false,
            'hierarchical' => false,
            'menu_position' => 2,
            'supports' => array
            (
                'title',
                'editor',
                'author',
                'thumbnail',
                //'excerpt',
                'revisions',
                'custom-fields'
            ),
            'show_in_rest' => true, // Habilita Gutenberg
            'labels' => array
            (
                'name' => __( 'Fotofolio', 'loosing' ), // Si queremos internacionalizar estas cadenas...
                'singular_name' => 'Foto',
                'add_new' => 'Añadir nueva foto',
                'add_new_item' => 'Añadir nueva foto',
                'all_items' => 'Todas los fotos',
                'edit_item' => 'Editar foto',
                'new_item' => 'Nueva foto',
                'view_item' => 'Ver foto',
                'search_items' => 'Buscar fotos',
                'not_found' =>  'No se han encontrado fotos',
                'not_found_in_trash' => 'No se han encontrado fotos en la papelera'
            )
        ));

        register_taxonomy ( 'place', 'fotofolio', array
        (
            'show_admin_column' => true,
            'hierarchical' => false,
            'show_in_rest' => true,
            'labels' => array
            (
                'name' => 'Lugares',
                'singular_name' => 'Lugar',
                'search_items' => 'Buscar lugares',
                'all_items' => 'Todos los lugares',
                'view_item' => 'Ver lugar',
                'edit_item' => 'Editar lugar',
                'update_item' => 'Actualizar lugar',
                'add_new' => 'Añadir nuevo lugar',
                'add_new_item' => 'Añadir nuevo lugar',
                'new_item_name' => 'Nuevo nombre de lugar',
                'not_found' => 'No se han encontrado lugares.',
                'back_to_items' => __( 'Volver a Lugares', 'loosing' ),
                'menu_name' => __( 'Lugares', 'loosing' )
            )
        ));
    }

    add_action ( 'init', 'my_custom_post_types_and_taxonomies' );

    //  ACTIVACIÓN DE LAS PÁGINAS DE OPCIONES DE ACF
    acf_add_options_page ( array
    (
        'page_title' => 'Configuración del sitio web',
        'menu_slug' => 'config'
    ));

    acf_add_options_sub_page ( array
    (
        'page_title' => 'Personalización',
        'parent_slug' => 'config',
    ));

    acf_add_options_sub_page ( array
    (
        'page_title' => 'Scripts',
        'parent_slug' => 'config',
    ));

?>