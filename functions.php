function addCustomer(){
	global $wpdb;
	$email = $_POST['email'];
	$wpdb->insert($wpdb->prefix . 'blog_user_info', array(
		'email' => $_POST["email"],
	));
	}
	add_action('wp_ajax_addCustomer', 'addCustomer');
	add_action('wp_ajax_nopriv_addCustomer', 'addCustomer'); // not really needed
