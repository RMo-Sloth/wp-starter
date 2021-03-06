# A starter theme for Wordpress template development

This template is based on [the official Theme Handbook](https://developer.wordpress.org/themes/). If in doubt use this as reference. 

## Environment Setup

Before you start developing your website set up your local wordpress environment for development.

### Update the wp-config.php
- [ ] ```define( 'WP_DEBUG', true );``` 

### Optionally add in the wp-config.php
- [ ] ```define( 'WP_DEBUG_LOG', true );```
- [ ] ```define( 'WP_DEBUG_DISPLAY', true );```

## Install this theme

If you are reading this you probably already have this theme installed. Nevertheless there are 2 recommended ways to install this theme.

1. Download from the wordpress repository.
2. Navigate to the `wp-content/themes` folder using the cli. Clone the theme in a folder to `git clone https://github.com/RMo-Sloth/wp-starter.git theme_name`. Where `theme_name` is the name of your theme.

## Set up version control

If you are using git you probably want to set up version control.

1. Create an empty repository on e.g. GitHub
2. Navigate into the root folder of your theme
3. Connect your theme to that repository: `git remote set-url origin repository_url`. Where `repository_url` is the url of the repository you just created.
4. Push your theme to your repository: `git push`.

The rest of the documentation does not mention git anymore. But you'd do well to make frequent commits.

## Load the test-data

Import the unit test data. More details here: [ https://codex.wordpress.org/Theme_Unit_Test ]( https://codex.wordpress.org/Theme_Unit_Test )

## Setup your text-domain

For translations wordpress requires a text-domain. In this template it is `wp-starter`. You want to find and replace all occurences of `wp-starter` with the text domain you want to use. Naming it something like your theme name is a good idea.

## Update the comments in `style.css`

Make sure to edit the relevant fields. Note that you arleady set the `Text Domain` in the previous step. It may end up looking something like this:

```
Theme Name: MyThemeName
Theme URI: https://example.com/my-theme
Author: MyName
Author URI: https://example.com
Description: Description of my theme shown in the theme preview.
Version: 1.0
Requires at least: 5.6.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: my-theme-name
Tags: theme-options
Domain Path: /languages
```
Enable the theme from inside wordpress.

## Load your assets

### fonts

*static*

Load the relevant fonts for your theme in `register-css.php`. You could also import it in your `style.css` using `@import`. However loading using `@import` is commonly discouraged; it delays the http request to retreive the fonts a little.
```
wp_enqueue_style( 'theme-fonts',
    'https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap',
    []
);
```
If you want to preconnect to the external domain hosting the fonts, add them as highest priority to the `wp_head` hook. This will load the code in the `wp_head()` call in the `header.php`.
```
function theme_preconnect() {
  print('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>');
  print('<link rel="preconnect" href="https://fonts.googleapis.com">');
}
add_action( 'wp_head', 'theme_preconnect', 0 );
```


*dynamic*
 Add an implementation using the customizer during the `customize_register` hook. [ More about setting up the customizer ]( https://developer.wordpress.org/themes/customize-api/).

 You can add the fonts just like the static approach ( above ) Load the relevant font using a switch statement, checking against the setting you created in the customizer.

### colors

*static:*

Load the relevant colors to the `style.css` file. This theme has a default implementation the `style.css` file. Add your colr scheme to it.
```
:root {
  --color-1: #000;
  --color-2: #FFF;
}
```
Keep these default variables. They are being used in this template. You will replace them later in the process.

*dynamic:*

If you want dynamic colors add an implementation using the customizer during the `customize_register` hook. [ More about setting up the customizer ]( https://developer.wordpress.org/themes/customize-api/ ).



Load the dynamic colors during the `wp_head` hook.

## style html
Setup:
* `body`: background or background-image, default font, font-color.
* `headers`: fonts, color, font-size, etc.
* `p`: font-size 
* `ul`, `ol`, `li`: 
* `table`, `tr`, `th`, `tbody`, `thead`, `tfoot`, `td`, `caption`: 
* `form`, `textarea`, all `input`-types: 
* `button`: 

## Header -> Navigation
There is a basic implementation for a navigation menu of a max of 2 depth. The menu s registered in the `functions.php` file, invoked in the `header.php` file and styled in `style.css` file. You should/could replace it with a more advanced implementation that suits your needs.

## Footer
There is a basic implementation of a footer. Sidebars have been registered in `functions.php` (called: footer-1, footer-2 and footer-3). They are loaded in the footer template `footer.php`. Note that the sidebars are formatted in a block-editor friendly output. 

## index.php
Note that this theme has a `404.php`, `archive.php`, `front-page.php`, `single.php`, `page.php` and `single.php` already have implementations. They override `index.php`, so disable them by adding `__` before these file names. For details [ read more about the template hierarchy ](https://developer.wordpress.org/themes/basics/template-hierarchy/)

`index.php` is a fallback for all pages. Make sure it implements a solution that works for both singular pages/posts and archives.

## page.php

## post.php

## 404.php

## front-page.php

## Cleanup

### css
Remove the global variables from style.css. Ensure they are no longer in use by searching the theme ( `CTR+SHIFT+F` in vs-code ).

## Add a theme screenshot

Replace the screenshot called `screenshot.png` in the root of the template folder. The size should be 1200x900. You could get it from your design files. Or just take a screenshot from your browser. In Chrome: Hit `F12`. Hit `CTR + SHIFT + M`. Set the preview dimensions to responsive. Resize the preview window to 1200x900.Click `Capture Screenshot`. This screenshot will be 2400x1800, but that works as well ( apparently ).