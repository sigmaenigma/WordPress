// WP Admin Logo and URL
function custom_loginlogo() {
	echo '<style type="text/css">
	h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/new_logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_loginlogo');
add_filter( 'login_headerurl', 'my_custom_login_url' );
function my_custom_login_url($url) {
    return 'http://example.com';
}
