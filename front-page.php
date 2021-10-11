<?php 
get_header();

if( is_active_sidebar( 'front-page-top' ) ):
  dynamic_sidebar( 'front-page-top' );
endif;

if( have_posts() ):
  if( is_singular() ):
    get_template_part( 'partials/page' );
  else:
    get_template_part( 'partials/post-list' );
  endif;
else:
  printf('<p><b>%s</b></p>', __( 'No posts could be found', 'wp-starter' ) );
endif;

get_footer();