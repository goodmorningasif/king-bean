# KING BEAN
Copyright 2017 SDCO Partners

1. Getting Started 
  * Folder Structure
  * Starting with [INIT]
  * Initializing New Project
  * Editing Current Project
  * Deploying To Server
  * Updates
  * Feature Documentation
2. Dev Environment
  * Gulp config
  * SASS
  * Javascript 
  * Components & Subcomponents
  * Functions.PHP
3. Known Bugs 
4. Team


## Getting Started

### Folder Structer

```
|--/king-bean/
|  |
|  |--/assets/
|  |
|  |--/components/
|  |
|  |--/prod/
|  |  └-- script.js
|  |  └-- styles.css
|  |
|  |--/src/
|  |  | 
|  |  |--/js/
|  |  |  └-- a.js
|  |  |
|  |  |--/sass/
|  |  |  └-- _mixins.sass
|  |  |  └-- _reset.sass
|  |  |  └-- _variables.sass
|  |  |  └-- styles.sass
|  |  | 
└-- 404.php
└-- config.php
└-- footer.php
└-- function.php
└-- header.php
└-- index.php
└-- sidebar.php
└-- README.txt
└-- style.css 
```

### Starting With [INIT]
1. CREATE NEW BLANK REPOSITORY
  * [x]  Create new blank repo. Do not initiate with a README file.
  * [x]  Clone repo to local environment 
2. CREATE A INIT REMOTE & PULL DOWN INIT FILES
  * [x]  Run `git remote add init` + INIT repo url
  * [x]  Run `git pull init master`
3. PULL DOWN WORDPRESS SUBMODULE FILES
  * [x]  Run `git submodule update --init`

### Initializing New Project
Follow these steps to configure your install to your specific project.

1. WP-CONFIG.PHP
  * [x]  set var $local_path 
  * [x]  set var $table_prefix  
2. LOCAL-CONFIG-EXAMPLE.PHP
  * [x]  remove '-example' from end of filepath
  * [x]  set DB_NAME 
  * [x]  set DB_USER 
  * [x]  set DB_PASSWORD
3. PACKAGE.JSON
  * [x]  set 'name' 
  * [x]  set 'description' 
  * [x]  set 'url' for both 'repository' and 'bugs'
  * [x]  set 'homepage' 
4. GULPFILE.JS
  * [x]  set var uri in line 75
5. .GITIGNORE
  * [x]  set filepath to inner CONFIG.PHP on line 75
6. THEME FILES & FOLDERS
  * [x]  rename folder 'INIT' 
  * [x]  set 'Theme Name' and 'Theme URI' in STYLE.CSS
  * [x]  set var $GLOBALS['root'] and $GLOBALS['docpath'] in FUNCTIONS.PHP
  * [x]  set @link and @package notes on all template files.
7. SET UP DUMMY DATABE
  * [x]  create db and user
  * [x]  import dummy wordpress db
8. INSTALL DEPENDENCIES 
  * [x]  Run `npm install`


### Editing Current Project
Follow these steps to edit a current project. This will set up the repository and compile your JS and Sass files for your.

1. In Terminal ...
  * [ ]  Run `git clone` + your repo url
  * [ ]  Run `git submodule update --init`
  * [ ]  Run `npm install` 
  * [ ]  Run `gulp`
2. Get config files/folders from server
  * [ ]  Download `wp-config.php`
  * [ ]  Download `local-config.php`
  * [ ]  Download `config.php`
3. Setup Local Server DB 
  * [ ]  create db and user
5. Install Wordpress
  * [ ]  Follow prompts 
4. Use Migrate DB to fetch content from server
  * [ ]  Follow prompts 

### Deploying to Server
1. In Liquid Web ...
  * [x]  Create account for new site
2. Connect to Server
  * [x]  Upload folder `/wordpress/` to `/public_html/`
  * [x]  Upload folder `/content/` to `/public_html/`
  * [x]  Upload file `wp-config.php` to `/public_html/`
  * [x]  Upload file `local-config.php` to `/public_html/`
  * [x]  Upload file `index.php` to `/public_html/`
  * [ ]  Optional -> Upload file `README.md` to `/public_html/`
3. Adjust Database
  * [x]  Make a copy of the local site db 
  * [x]  IF USING DATED MYSQL -> Convert to UTF8
  * [x]  Find and replace local path to server path
4. In cPanel ...
  * [x]  Create new db
  * [x]  Create new user 
  * [x]  Add user to db
  * [x]  Upload adjusted local site db to server db
5. Update config files
  * [x]  Update db credentials in `local-config.php`
  * [x]  Set var $local_path to new path in `wp-config.php`
  * [x]  Turn off debugger in `wp-config.php`
6. Update theme files of custom 
  * [x] Update $GLOBALS['root'] in `functions.php`
  * [x] Comment out Live Reload on line 22 in `header.php`
6. Proof and Inspect your work
  * [x] Run spell checker on every page
  * [x] Inspect page optimizations


If you choose not to follow these steps, you will be unable to keep the repository up-to-date, and you will have to deal with minified and uglified JS and CSS files. See notes under DEV ENVIRONMENT for more info.


### Updates

If updating SASS files ...

  * Compile files using GULP.
  * Replace the `styles.css` file on server with your compiled file.

If updating JS files ...

  * Compile files using GULP.
  * Replace the `scripts.js` file on server with your compiled file.

For All other files ...

  * Replace server file with your changed file.
  * Git commit and git push to server

### Feature Documentation
King Bean is relatively bare-bones site with not a lot going on in it's feature department. The exception is the navigation controller, an email submission confirmation script, and a couple of functions that handle creating and reading cookies.

#### Navigation
The default navigation bar is a fixed bar with a background. However, on certain pages with a feature image the background is transparent and the text color is white. This is handled mainly by the css style `newsletter-opacity`. Even the animation is handled by native css properties. The javascript navigation controller adds the style `newsletter-opacity` if the current page has a feature image, and removes it if the scroll position is below the feature image. 


#### Cookies
`cookie.js` handles creating, reading, and deleting cookies. The newsletter popup looks for a specific cookie to determine whether it should display or not.


#### Submission Confirmation 
Upon email submission, the email script will remove the form fields and inject text. 



## Dev Environment
The overall goal with the site's architecture is to continually break down files into smaller components. Our Gulp config file helps stitch those components together. Abstract out functions when possible. Observer DRY.

### GULP Config
The gulp config file primarily compiles the sass files and javascript files into `styles.css` and `scripts.js` and places them in the `prod` folder. It also watches the files for changes and triggers Live Reload, prints scripting errors out to the command line, minifies the css and javascript files, and can run a check for modernizr.js if you enable it.

### SASS
Sass files are broken down into modules to makeit easier to find the styles you need to edit. The primary gateway is the file `styles.sass`, which is where all other sass files are imported into. `_reset.sass` resets the base css styles. `_variables.sass`, and `_mixins.sass` contain global styles used across all pages. The remaining sass files are broken into styles for positioning and styles for styling. See instructions inside those files for more details. 

### Javascript
All js files are broken into feature-based files. `a.js` is the first file compiled, so if you need to declare a function before all others do it here. `a,js` is also where document.ready is declared. Don't write entire functions here; instead, write a separate file then invoke that function within document.ready.

### Components & Subcomponents
Each php page is broken down into components. Each component can be broken down into further sub-components. The folder structure here is reflected in the SASS structure.

### Functions.php
For most Wordpress Developers, Functions.php can become a catch-all bag for all PHP scropts. We should probably break down functions into a scripts folder like our javascript. This will be included in projects moving forward.

## Known Bugs


## Team 
  
  * PROJECT MANAGER   :   
  * UX/UI DESIGNER    :   
  * DEVELOPER         :   

