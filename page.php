<?php
get_header();

print( '<main class="container">' );
if( have_posts() ):
    the_title('<h1>', '</h1>');
    the_content();
    comments_template();
endif;
print( '</main>' );

get_footer();