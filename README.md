# A starter theme for Wordpress template development

This template is based on [the official Theme Handbook](https://developer.wordpress.org/themes/). If in doubt use this as reference. 

## Step 1: Setup

Before you start developing your website setup your development environment. Do not forget to turn php debugging on in the wp-config.php file!

### Update the wp-config.php
- [ ] ```define( 'WP_DEBUG', true );``` 

### Optionally add in the wp-config.php
- [ ] ```define( 'WP_DEBUG_LOG', true );```
- [ ] ```define( 'WP_DEBUG_DISPLAY', true );```

## Step 2: Add and enable this theme in your wordpress installation TODO!!!

After enabling this theme you will be prompted to install some plugins. These are [the plugins recommended for development use in the official wordpress developer handbook](https://developer.wordpress.org/themes/getting-started/setting-up-a-development-environment/).

## Step 3: Load the test-data

## Step 4: Customize the style.css file

Rename your folder to your themes name.

Use comments to let wordpress detect your template. More details in [Official Theme Handbook](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/). Please make sure to delete the comments you don't need and update the others.

Now enable the theme in wordpress.

## Header -> Navigation

There is a basic implementation for a navigation menu of a max of 2 depth. The menu s registered in the `functions.php` file, invoked in the `header.php` file and styled in `style.css` file. You should/could replace it with a more advanced implementation that suits your needs.

## Footer

## last

Add screenshot.png