<?php
   
//Event Post type
function university_post_types () {
register_post_type('event', array(
'capability_type' => 'event',
'map_meta_cap' => true,
'supports' => array('title', 'editor', 'excerpt'),
'rewrite' => array ('slug' => 'events'),
'has_archive' => true,
'public' => true,
'show_in_rest' =>true,
'menu_icon' => 'dashicons-calendar',
'labels' => array (
    'name' => "Events",
    "add_new_item" =>"Add New Event",
    'edit-item' => "Edit Event",
    'all_items' => 'All Events',
    'singular_name' => "Event"
)
));

//campuses post type
register_post_type('campus', array(
    'capability_type' => 'campus',
    'map_meta_cap' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array ('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' =>true,
    'menu_icon' => 'dashicons-location-alt',
    'labels' => array (
        'name' => "Campuses",
        "add_new_item" =>"Add New Campus",
        'edit-item' => "Edit Campus",
        'all_items' => 'All Campuses',
        'singular_name' => "Campus"
    )
    ));
//Program post type

register_post_type('program', array(
    'supports' => array('title'),
    'rewrite' => array ('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' =>true,
    'menu_icon' => 'dashicons-awards',
    'labels' => array (
        'name' => "Programs",
        "add_new_item" =>"Add New Program",
        'edit-item' => "Edit Program",
        'all_items' => 'All Programs',
        'singular_name' => "Program"
    )
    ));
//Professor Post Type
    register_post_type('professor', 
    array(
        'show_in_rest' => 
    true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array (
            'name' => "Professors",
            "add_new_item" =>"Add New Professor",
            'edit-item' => "Edit Professor",
            'all_items' => 'All Professors',
            'singular_name' => "Professor"
        )
        ));

    //my-notes post type
    register_post_type('note', 
    array(
        'capability_type' => 'note',
        'map_meta_cap' => true,
        'show_in_rest' => 
    true,
        'supports' => array('title', 'editor'),
        'public' => false,
        'show_ui' =>  true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'labels' => array (
            'name' => "Note",
            "add_new_item" =>"Add New Note",
            'edit-item' => "Edit Note",
            'all_items' => 'All Notes',
            'singular_name' => "Note"
        )
        ));

    //Like post type
    register_post_type('like', 
    array(
        'supports' => array('title',),
        'public' => false,
        'show_ui' =>  true,
        'menu_icon' => 'dashicons-heart',
        'labels' => array (
            'name' => "Like",
            "add_new_item" =>"Add New Like",
            'edit-item' => "Edit Like",
            'all_items' => 'All Likes',
            'singular_name' => "Like"
        )
        ));
    }
    add_action('init', 'university_post_types');
 
?>
