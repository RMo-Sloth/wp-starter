  <?php 
  print('<ul class="post-list">');
  while( have_posts() ): the_post();
    printf(
      '<li id="post-%s" class="%s">',
      get_the_ID(),
      implode( " ", get_post_class() )
    );
    if( has_post_thumbnail() ):
      the_post_thumbnail();
    endif;
    the_title( '<h2>', '</h2>' );
    the_excerpt();
    printf( 
      '<div class="bottom"><a href="%s" class="read-more-btn">Read More...</a></div>',
      get_the_permalink() 
    );
    print('</li>');
  endwhile;
  print('</ul>');