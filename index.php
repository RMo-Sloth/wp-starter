<?php 
get_header();

if( have_posts() ):
  if( is_singular() ):
    echo wpautop( 'This is a single post, should be rendered!' );
  else:
    get_template_part( 'partials/post-list' );
  endif;
else:
  print('<p><b>No posts could be found</b></p>');
endif;

get_footer();