  <?php 
  print('<ul class="post-list">');
  while( have_posts() ): the_post();
    printf(
      '<li id="post-%s" class="%s">',
      get_the_ID(),
      esc_attr( implode( ' ', get_post_class() ) )
    );
    if( has_post_thumbnail() ):
      the_post_thumbnail();
    else:
      printf('<img src="%s" width="400" height="400" alt="">', get_stylesheet_directory_uri() . '/assets/400x400.png' );
    endif;
    the_title( '<h2>', '</h2>' );
    printf( '<p class="the-excerpt">%s</p>',get_the_excerpt());
    printf( 
      '<div class="bottom"><a href="%s" class="read-more-btn">Read More...</a></div>',
      get_the_permalink() 
    );
    print('</li>');
  endwhile;
  print('</ul>');

  the_posts_pagination([
    'class' => 'pagination',
    'prev_next' => false,
    'show_all' => true
  ]);

