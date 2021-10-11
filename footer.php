<?php
  print('<footer><div class="container">');

    if( is_active_sidebar('footer-1') ):
      dynamic_sidebar( 'footer-1' );
    endif;

    if( is_active_sidebar('footer-2') ):
      dynamic_sidebar( 'footer-2' );
    endif;
    
    if( is_active_sidebar('footer-3') ):
      dynamic_sidebar( 'footer-3' );
    endif;
    
  print('</div></footer>');
  wp_footer();
print('</body></html>');