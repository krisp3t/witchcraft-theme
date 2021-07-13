# Witchcraft Theme

A theme for witches and wizards.
Made for WordPress blogs and WooCommerce stores.

Based on UnderStrap Child. https://github.com/understrap/understrap-child

## Features

- Full Bootstrap 4 support

- Customizable Hero Image

![Hero Image](https://i.ibb.co/Dp39dBr/hero.jpg)

- Feature Columns with Font Awesome support, integrated into Gutenberg

![Feature Columns](https://i.ibb.co/HY0CYxT/columns.jpg)

- Feature Containers, integrated into Gutenberg

![Feature Containers](https://i.ibb.co/7CnQzYx/container.jpg)

- Dynamic cart in navigation bar 
![Dynamic cart](https://i.ibb.co/82CQKNf/cart.jpg)
  - Use fa fa-shopping-cart as a custom link in your main menu to activate it
  ![Custom menu link](https://i.ibb.co/VJFBnFg/Screenshot-2021-07-13-at-17-07-03.png)



## Installation

1. Install the parent theme UnderStrap first: `https://github.com/understrap/understrap` or `https://wordpress.org/themes/understrap/`
   - IMPORTANT: If you download UnderStrap from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Install [Advanced Custom Fields PRO](advancedcustomfields.com/) plugin.
1. Upload the witchcraft-theme folder to your wp-content/themes directory.
1. Go into your WP admin backend .
1. Go to "Appearance -> Themes".
1. Activate the Witchcraft Theme.

## Editing

Add your own Sass styles to `/sass/theme/_child_theme.scss`
or import your own files into `/sass/theme/child-theme.scss`.

To overwrite Bootstrap's or UnderStrap's/Witchcraft Theme's base variables change:
`/sass/theme/_child_theme_variables.scss`

It will be outputted into:
`/css/understrap-child.min.css` and `/css/understrap-child.css`

So you have one clean CSS file at the end and just one request.

Add your own JS files to `src/js/` to have them bundled into child-theme.js.

## Compatibility

Tested with WordPress 5.7.2 and WooCommerce 5.4.1.

Requires [Advanced Custom Fields PRO](advancedcustomfields.com/), tested with 5.9.8.

## Developing With NPM, Gulp, SASS and Browser Sync

### Installing Dependencies

- Make sure you have installed Node.js, Gulp, and Browser-Sync [1] on your computer globally
- Open your terminal and browse to the location of your UnderStrap copy
- Run: `$ npm install` then: `$ gulp copy-assets`

### Running

To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:

```javascript
  "browserSyncOptions" : {
    "proxy": "localhost/",
    "notify": false,
	"files": ["./css/*.min.css", "./js/*.min.js", "./**/*.php"]
  }
};
```

- then run: `$ gulp watch-bs`

[1] Visit [https://browsersync.io/](https://browsersync.io/) for more information on Browser Sync
