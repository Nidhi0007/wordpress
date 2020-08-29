<?php
// create a post type

function university_post_types(){
register_post_type('event',array(


    'supports'=>array('title','editor','excerpt'),
    'rewrite'=> array('slug'=>'events'),
    'has_archive'=> true,
'public'=> true,

'labels'=> array( 
'name'=> 'Events',// name of the posts
'add_new_item'=> 'Add New Event',
'edit_item'=>'Edit Events',
'all_items'=> 'All Events',
'Singular_name'=>'Event'

),
'menu_icon'=> 'dashicons-calendar'
//wordpress deshicon

));
}
add_action('init', 'university_post_types');
?>