<?php 
get_header();

if( have_posts() ):
    while( have_posts() ): the_post();
        print('<div class="single container">');
            
            the_title('<h1>', '</h1>');

            get_template_part( 'partials/post-meta' );

            the_content();

            wp_link_pages([
                'before' => '<div class="nav-links">',
                'after' => '</div>'
            ]);

            comments_template();

        print('</div>');
    endwhile;
endif;
get_footer();

