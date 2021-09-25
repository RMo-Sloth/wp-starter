<?php 
get_header();

if( have_posts() ):
  get_template_part( 'partials/post-list' );
else:
  print('<p><b>No posts could be found</b></p>');
endif;

get_footer();