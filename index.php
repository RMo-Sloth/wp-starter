<?php 
get_header();

print( '<main class="container">' );
  if( have_posts() && is_singular() ):
    while( have_posts() ): the_post();
      the_title('<h1>', '</h1>');
      the_content();
      comments_template();
    endwhile;
  elseif( have_posts() ):
    get_template_part( 'partials/post-list' );
  else:
    print('<p><b>No posts could be found</b></p>');
  endif;
print( '</main>' );

get_footer();