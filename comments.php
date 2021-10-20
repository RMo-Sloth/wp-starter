<?php 

if( comments_open() === false ) return;

print('<aside style="padding-top: 1rem; border-top: 2px solid black; margin-top: 2rem">');
    printf('<h1>%s</h1>', __('Comments', 'wp-starter') );
    print('<ul class="comments-list">');
    wp_list_comments();
    print( '</ul>' );
    print('<div class="comment-pagination" style="text-align: center;">');
        paginate_comments_links();
    print('</div>');
    comment_form();
print('</aside>');
