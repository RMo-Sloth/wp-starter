<?php 
get_header();

if( have_posts() ):
    while( have_posts() ): the_post();
        print('<div class="single container">');
            
            the_title('<h1>', '</h1>');

            printf('
            <div class="meta">
                <span>%s</span>
            </div>
            ',
            __('By: ') . get_the_author_posts_link()
            );

            the_content();

        print('</div>');
    endwhile;
endif;
get_footer();
