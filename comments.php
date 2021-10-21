<?php 

if( comments_open() === false ) return;

print('<aside class="comments">');
    printf('<h1>%s</h1>', __('Comments', 'wp-starter') );
    print('<ul class="comments-list">');
    wp_list_comments([ 'avatar_size' => '64' ]);
    print( '</ul>' );
    print('<div class="comment-pagination" style="text-align: center;">');
        paginate_comments_links([
            'show_all' => true
        ]);
    print('</div>');
    comment_form();
print('</aside>');
