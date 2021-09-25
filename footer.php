<footer>
  <div class="container">
  <?php 
  if( is_active_sidebar('footer-1') ):
    dynamic_sidebar( 'footer-1' );
  endif;

  if( is_active_sidebar('footer-2') ):
    dynamic_sidebar( 'footer-2' );
  endif;
  
  if( is_active_sidebar('footer-3') ):
    dynamic_sidebar( 'footer-3' );
  endif;
  
  ?>
  </div>
  <div class="container">
    <p class='disclaimer'>This theme has been provided by <a href='https://waardwebsites.nl'>waardwebsites.nl</a></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>