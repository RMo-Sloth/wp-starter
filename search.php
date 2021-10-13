<?php 

get_header();

print('<div class="container">');
    printf( '<h1>%s</h1>', __('Search results for: ') . get_search_query() );
    if( have_posts() ):
        get_template_part( 'partials/post-list' );
    else:
        echo '<h1>No results found</h1>';
    endif;
print('</div>');

get_footer();

