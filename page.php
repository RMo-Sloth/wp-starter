<?php
get_header();

print( '<main class="container">' );
if( have_posts() ):
    while( have_posts() ): the_post();
        the_title('<h1>', '</h1>');
        the_content();
        wp_link_pages([
            'before' => '<div class="nav-links">',
            'after' => '</div>'
        ]);
        comments_template();
    endwhile;
endif;
print( '</main>' );

get_footer();