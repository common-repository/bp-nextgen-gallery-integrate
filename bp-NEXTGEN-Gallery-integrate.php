<?php
/*
Plugin Name: BP + NEXTGEN Gallery Integrate
Description: Integrate NEXTGEN Gallery with Buddypress profiles
Version: 1.0
Author: Nickolas Klue aka 'Scaylos'
License: GPL2
*/

// Setup the navigation
// From here... ->
function my_setup_nav() {
    global $bp;
 
    bp_core_new_nav_item( array( 
        'name' => __( 'My Gallery', 'buddypress' ), 
        'slug' => 'my-gallery', 
        'position' => 75,
        'screen_function' => 'my_gallery_link',
        'show_for_displayed_user' => true,
        'default_subnav_slug' => 'my-gallery',
        'item_css_id' => 'my-gallery'
    ) );
}
 
add_action( 'bp_setup_nav', 'my_setup_nav', 1000 );
 
// Print gallery title
function my_gallery_title() {
    echo 'My Gallery';
}
// <- ...to here not mine
// Print NEXTGEN gallery content
function my_gallery_content() {
    global $bp;
    global $wpdb;
// Grab the id for the currently displayed user and turn it into a string             
    $dispvar = strval($bp->displayed_user->id);
// Query NEXTGEN Gallery table for all galleries where displayed user is author 
    $gallery_array = $wpdb->get_results(
        "SELECT * FROM ".$wpdb->prefix."ngg_gallery WHERE author = $dispvar");

// Get ready for while loop!
    $gallery_id = 0;
    $i = 0;
    $max = count($gallery_array);
// And go! - Print each gallery's slug and feed gallery id into shortcode magic
    while ($i < $max) {
        $gallery_id = $gallery_array[$i]->gid;
        echo '<h4>' . $gallery_array[$i]->slug . '</h4>';
        echo do_shortcode( "[nggallery id=" . $gallery_id . "]" );
        $i++;
    };
}
 
// Setup gallery link
function my_gallery_link () {
    add_action( 'bp_template_title', 'my_gallery_title' );
    add_action( 'bp_template_content', 'my_gallery_content' );
    bp_core_load_template( apply_filters( 'bp_core_template_plugin', 'members/single/plugins' ) );
}
 
?>