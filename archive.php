<?php 
get_header();

if( have_posts() ):
    print( '<main>' );
        the_archive_title('<h1>', '</h1>');
        get_template_part( 'partials/post-list' );
    print( '</main>' );
endif;

get_footer();
