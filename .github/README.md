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

Tested with WordPress 5.8.1 and WooCommerce 5.8.0.

Requires [Advanced Custom Fields PRO](advancedcustomfields.com/), tested with 5.9.8.


## Developing With NPM, postCSS, Rollup, SASS and BrowserSync

This theme uses [sass](https://www.npmjs.com/package/sass) and [postCSS](https://postcss.org) to handle compiling all of the styles into one style sheet. The theme also includes [rollup.js](https://www.rollupjs.org/) to handle javascript compilation and minification. These choices are based on the same libraries and npm commands used in Bootstrap. In addition, it comes with [BrowserSync](http://browsersync.io) to handle live reloading while you develop.

### Confused by All the CSS, SCSS, and SASS Files?

Some basics about the files that come with Understrap:
- The theme itself uses the `/style.css` file only to identify the theme inside of WordPress. The file is not loaded by the theme and does not include any styles.
- The `/css/child-theme.css` and its minified little brother `/css/child-theme.min.css` file(s) provides all styles. It is composed of different SCSS sets and one variable file, all imported at `/src/sass/child-theme.scss`
- Your design goes into: `/src/sass/child-theme`.
  - Override Bootstrap by addind your variables to the `/src/sass/theme/_child_theme_variables.scss`
  - Add your custom styles to the `/src/sass/theme/_child_theme.scss` file
  - Or add other .scss files into it and `@import` it into `/src/sass/theme/_child_theme.scss`.

The same goes for Javascript. Just add your javascript to `/src/js/custom-javascript.js` and let rollup.js handle the rest.

### Installing Dependencies
- Make sure you have installed Node.js and BrowserSync on your computer globally
- Open your terminal and browse to the location of your Understrap copy
- Run: `$ npm install`

### Running
To work and compile your Sass files on the fly start:

```bash
npm run watch
```

Or, to run with BrowserSync:

First change the browser-sync options to reflect your environment in the file `/build/browser-sync.config.js` in the beginning of the file:
```javascript
module.exports = {
	"proxy": "localhost/",
	"notify": false,
	"files": ["./css/*.min.css", "./js/*.min.js", "./**/*.php"]
};
```

then run: 

```bash
npm run watch
```

