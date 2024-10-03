# WordPress Custom Scripts Repository

This repository contains helpful scripts for customizing your WordPress site. Below are the details of the included files and their functionalities.

## PHP Code

### Custom Login Logo and URL

Add the following code to your `functions.php` file to customize the WordPress admin login logo and URL.

```php
// WP Admin Logo and URL
function custom_loginlogo() {
    echo '<style type="text/css">
    h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/new_logo.png) !important; }
    </style>';
}
add_action('login_head', 'custom_loginlogo');

add_filter('login_headerurl', 'my_custom_login_url');
function my_custom_login_url($url) {
    return 'http://example.com';
}
```

- **custom_loginlogo**: This function changes the login logo to a custom image located at `assets/images/new_logo.png` in your theme directory.
- **my_custom_login_url**: This function changes the URL of the login logo to `http://example.com`.

## robots.txt

The `robots.txt` file is used to manage and control the behavior of search engine crawlers on your site. Below are the contents and their descriptions:

```
User-agent: *
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Disallow: /wp-content/uploads/wpforms/
Allow: /*.js$
Allow: /*.css$

User-agent: Googlebot
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Allow: /*.js$
Allow: /*.css$

User-agent: Bingbot
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Allow: /*.js$
Allow: /*.css$

User-agent: DuckDuckBot
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Allow: /*.js$
Allow: /*.css$

User-agent: Amazonbot
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Allow: /*.js$
Allow: /*.css$

User-agent: PetalBot
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Allow: /*.js$
Allow: /*.css$

Sitemap: https://<sitename>/sitemap.xml
```

### Explanation

- **User-agent: \***: Applies to all web crawlers.
  - **Disallow: /wp-admin/**: Blocks access to the WordPress admin area.
  - **Allow: /wp-admin/admin-ajax.php**: Allows access to the admin-ajax.php file for AJAX requests.
  - **Disallow: /wp-content/uploads/wpforms/**: Blocks access to the wpforms uploads directory.
  - **Allow: /*.js$**: Allows access to all JavaScript files.
  - **Allow: /*.css$**: Allows access to all CSS files.

- **User-agent: Googlebot, Bingbot, DuckDuckBot, Amazonbot, PetalBot**: Specific rules for different search engine crawlers, similar to the general rules.

- **Sitemap**: Specifies the location of the sitemap for search engines.
