<?php//create a post type

function university_post_types(){
register_post_type('event',array(
'public'=> true,

'labels'=> array( 
'name'=> 'Events',// name of the posts
),
'menu_icon'=> 'dashicons-calendar'
//wordpress deshicon

));
}
add_action('init', 'university_post_types');
