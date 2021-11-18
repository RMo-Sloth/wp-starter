<?php 

function theme_css_colors() {
  print( 
    "<style>
      :root {
        --color-1: #000;
        --color-2: #FFF;
      }
      .has-color-1-color {
        color: #000;
      }
      .has-color-2-color {
        color: #FFF;
      }

      .has-color-1-background-color {
        background-color: #000;
      }
      .has-color-2-background-color {
          background-color: #FFF;
      }

      .has-gradient-1-gradient-background {
        background: linear-gradient( #000 33%, #000 100% );
      }
    </style>"
  );
}
add_action( 'wp_head', 'theme_css_colors');