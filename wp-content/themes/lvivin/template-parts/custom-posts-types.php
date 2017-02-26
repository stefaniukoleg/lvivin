<?php

// register custom posts types
    function register_cpt_excursions() {
        $labels = array( 
            'name' => _x( 'Екскурсії', 'excursions' ),
            'singular_name' => _x( 'Екскурсія', 'excursions' ),
            'add_new' => _x( 'Додати екскурсії', 'excursions' ),
            'add_new_item' => _x( 'Додати нові екскурсії ', 'excursions' ),
            'edit_item' => _x( 'Редагувати екскурсії', 'excursions' ),
            'new_item' => _x( 'Нові екскурсії', 'excursions' ),
            'view_item' => _x( 'Переглянути', 'excursions' ),
            'search_items' => _x( 'Пошук', 'excursions' ),
            'not_found' => _x( 'Екскурсій не знайдено', 'excursions' ),
            'not_found_in_trash' => _x( 'Екскурсій в корзині не знайдено', 'excursions' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'excursions' ),
            'all_items' => _x( 'Всі екскурсії', 'excursions' ),
            'name_admin_bar' => _x( 'Екскурсії', 'excursions'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Екскурсії',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'excursion',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_excursion',
                'read_post' => 'read_excursion',
                'delete_post' => 'delete_excursion',
                'edit_posts' => 'edit_excursions',
                'edit_others_posts' => 'edit_other_excursions',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_excursions',
                'read_private_posts' => 'read_private_excursions',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'excursions', $args );
    }
    add_action( 'init', 'register_cpt_excursions' );


    function register_cpt_bus_excursions() {
        $labels = array(
            'name' => _x( 'Автобусні екскурсії', 'bus_excursions' ),
            'singular_name' => _x( 'Автобусна екскурсія', 'bus_excursions' ),
            'add_new' => _x( 'Додати автобусні екскурсії', 'bus_excursions' ),
            'add_new_item' => _x( 'Додати нові автобусні екскурсії ', 'bus_excursions' ),
            'edit_item' => _x( 'Редагувати автобусні екскурсії', 'bus_excursions' ),
            'new_item' => _x( 'Нові автобусні екскурсії', 'bus_excursions' ),
            'view_item' => _x( 'Переглянути', 'bus_excursions' ),
            'search_items' => _x( 'Пошук', 'bus_excursions' ),
            'not_found' => _x( 'Автобусних екскурсій не знайдено', 'bus_excursions' ),
            'not_found_in_trash' => _x( 'Автобусних екскурсій в корзині не знайдено', 'bus_excursions' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'bus_excursions' ),
            'all_items' => _x( 'Всі автобусні екскурсії', 'bus_excursions' ),
            'name_admin_bar' => _x( 'Автобусні екскурсії', 'bus_excursions'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Автобусні екскурсії',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'bus_excursion',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_bus_excursion',
                'read_post' => 'read_bus_excursion',
                'delete_post' => 'delete_bus_excursion',
                'edit_posts' => 'edit_bus_excursions',
                'edit_others_posts' => 'edit_other_bus_excursions',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_bus_excursions',
                'read_private_posts' => 'read_private_bus_excursions',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'bus_excursions', $args );
    }
    add_action( 'init', 'register_cpt_bus_excursions' );

// end register custom posts types


/*
// add custom fields for custom posts types
    add_action( 'add_meta_boxes', function() {
        add_meta_box(
            'video_info',    //id атрибут HTML тега, контейнера блоку
            'Посилання на відео:',    //Заголовок/назва блоку(видно користувачам)
            'video_info_cb',    //Функція, яка виводить на екран HTML вміст блоку. Повинна виводити результат на екран.
            'video',    //Назва типу публікації для якої додається блок(може бути масив)
            'normal',    //Місце де буде видно блок: normal, advanced або side.
            'high'    //Пріоритет блоку для показу вище або нижче інших блоків: high або low.
        );
    });

    function video_info_cb() {
        global $post;
        $url = get_post_meta( $post->ID, 'video_url', true );

        //unique identifier, name of hidden field
        wp_nonce_field( __FILE__, 'video_nonce' );
    ?>
        <label for"video_url">URL: </label>
        <input type="text" name="video_url" id="video_url" class="widefat" value="<?php echo $url; ?>" />
    <?php
    }

    add_action('save_post', function() {
        global $post;
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return;

        //security check - nonce
        //verify this came from the our screen and with proper authorization,
        //because save_post can be triggered at other times
        if ( $_POST && wp_verify_nonce( $_POST['video_nonce'], __FILE__ ) ) {
            if ( isset($_POST['video_url']) ) {
                update_post_meta( $post->ID, 'video_url', $_POST['video_url'] );
            }
        }
    });



    
// end add custom fields for custom posts types
*/
?>