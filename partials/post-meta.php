<?php 
printf('
<div class="meta">
    <span>%s</span><br>
    <span>%s</span><br>
    <span>%s</span>
</div>
',
__('Author: ', 'wp-tester') . get_the_author_posts_link(),
__('Categories: ', 'wp-tester') . get_the_category_list( ', ' ),
__('Date: ', 'wp-tester' ) . get_the_date('jS \of F Y')
);