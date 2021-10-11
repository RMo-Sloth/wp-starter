<?php 
get_header();

print('<div class="page container">');
    printf(
        '<h1>%s</h1>',
        __( '404: Page Not Found', 'wp-test' )
    );
    printf(
        '<p>%s</p>',
        __( "We couldn't find the webpage you are looking for. Maybe you can find what you are looking for by using the navigation", 'wp-test' )
    );
    get_search_form(); 
print('</div>');

get_footer();