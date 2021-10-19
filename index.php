<?php 
get_header();

print( '<main class="container">' );
  if( have_posts() ):
    while( have_posts() ): the_post();
      if( is_singular() ):
        the_title('<h1>', '</h1>');
        the_content();
        comments_template();
      else:
        get_template_part( 'partials/post-list' );
      endif;
    endwhile;
  else:
    print('<p><b>No posts could be found</b></p>');
  endif;
print( '</main>' );

get_footer();