<?php 
get_header();

if( is_active_sidebar( 'front-page-top' ) ):
  dynamic_sidebar( 'front-page-top' );
endif;

if( have_posts() ):
  if( $wp_query->post_count > 1 ):
    get_template_part( 'partials/post-list' );
  else:
    echo wpautop( 'This is a single post, should be rendered!' );
  endif;
else:
  print('<p><b>No posts could be found</b></p>');
endif;

get_footer();