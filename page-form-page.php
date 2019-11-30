<?php get_header(); ?>
<?php
global $wpdb;

// Set table name
$table = $wpdb->prefix . 'blog_user_info';

$charset_collate = $wpdb->get_charset_collate();
// Write creating query
$query =  "CREATE TABLE IF NOT EXISTS  ".$table." (
            id INT(11) AUTO_INCREMENT,
            email VARCHAR(255),
            PRIMARY KEY(id)
            )$charset_collate;";

// Execute the query
$wpdb->query( $query );
?>
<form type="post" action="" id="newCustomerForm">
<label for="email">Email:</label>
<input name="email" type="text" />
<input type="hidden" name="action" value="addCustomer"/>
<input type="submit">
</form>
<br/><br/>
<div id="feedback"></div>
<br/><br/>

<script type="text/javascript">
jQuery('#newCustomerForm').submit(ajaxSubmit);

function ajaxSubmit(){

var newCustomerForm = jQuery(this).serialize();

jQuery.ajax({
type:"POST",
url: "http://localhost/rasadin_elementor_plugin/wp-admin/admin-ajax.php",
data: newCustomerForm,
success:function(data){
// jQuery("#feedback").html(data);
jQuery("#feedback").html("sumitted");

}
});

return false;
}
</script>
