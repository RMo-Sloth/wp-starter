<?php 
get_header();

print( '<main class="container">' );
  if( have_posts() ):
    if( is_singular() ):
      get_template_part( 'partials/page' );
    else:
      get_template_part( 'partials/post-list' );
    endif;
  else:
    print('<p><b>No posts could be found</b></p>');
  endif;
print( '</main>' );

get_footer();