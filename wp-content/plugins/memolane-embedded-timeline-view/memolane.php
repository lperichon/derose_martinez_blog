<?php
/*
Plugin Name: Memolane
Plugin URI: https://memolane.uservoice.com/knowledgebase/articles/8443-a-guide-to-embedding-your-memolane
Description: Embed the awesome Memolane media timeline view in your blog page.
Version: 1.2
Author: memolane
Author URI: http://memolane.com/site/support.html
License: GPL2
*/

global $wpdb;

/** version info **/
$new_version = 1.2;

if (!defined('MEMOLANE_VERSION_KEY'))
    define('MEMOLANE_VERSION_KEY', 'memolane_version');

if (!defined('MEMOLANE_VERSION_NUM'))
    define('MEMOLANE_VERSION_NUM', $new_version);
    
if (!defined('MEMOLANE_TABLE'))
	define('MEMOLANE_TABLE', $wpdb->prefix . 'memolane_lanes');
 
add_option(MEMOLANE_VERSION_KEY, MEMOLANE_VERSION_NUM);
	
/** db && update **/
if (get_option(MEMOLANE_VERSION_KEY) != $new_version) {
    // Execute your upgrade logic here
	memolane_create_database_table();
    // Then update the version value
    update_option(MEMOLANE_VERSION_KEY, $new_version);
}

function memolane_create_database_table() {
    global $wpdb;

    $sql = "CREATE TABLE " . MEMOLANE_TABLE . " (
              id INT NOT NULL AUTO_INCREMENT,
              username VARCHAR(100) NOT NULL DEFAULT 'memolane',
              title VARCHAR(100) NOT NULL DEFAULT '',
              width VARCHAR(100) NOT NULL DEFAULT '500',
              height VARCHAR(100) NOT NULL DEFAULT '500',
              background VARCHAR(100) NOT NULL DEFAULT 'default',
              border VARCHAR(100) NOT NULL DEFAULT 'default',
              date DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
              UNIQUE KEY id (id)
        	);";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__,'memolane_create_database_table');


/** redirect catch **/
function memolane_redirect() {
	if($_GET['action'] !== NULL) {
	    global $wpdb;
	    $location = $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	    if($_GET['action'] === 'trash') {
	    	$table = MEMOLANE_TABLE;
	    	$id = $_GET['lane'];
	    	$wpdb->query( 
				$wpdb->prepare( 
					"
        	        DELETE FROM $table
		 			WHERE id = $id
					"
        		)
			);
			wp_redirect( 'http://' . $location . '/admin.php?page=memolane', 301 );
	    }
	    elseif($_POST['memolane-hidden'] === 'Y') {
	    	
    	
    		$laneData = array(
    			'username'   => $_POST['memolane-username'],
				'title'      => $_POST['memolane-title'],
				'width'      => $_POST['memolane-width'],
				'height'     => $_POST['memolane-height'],
				'background' => $_POST['memolane-background'],
				'border'     => $_POST['memolane-border'],
				'date'       => date('Y-m-d g:i:s')
    		);
    	
    		foreach($laneData as $key => $data) {
				if($data === '' && $key !== 'title') {
					unset($laneData[$key]);
				}	
			}
		
    		if($_GET['action'] === 'save') {
    			$wpdb->insert( MEMOLANE_TABLE, $laneData );
    			$id = $wpdb->insert_id;
    			wp_redirect( 'http://' . $location . '/admin.php?page=memolane&save=true&lane=' . $id, 301 );
    		}
    		else if($_GET['action'] === 'update') {
    			$wpdb->update( MEMOLANE_TABLE, $laneData, array('id' => (int) $_POST['memolane-id']) );
    			wp_redirect( 'http://' . $location . '/admin.php?page=memolane&update=true&lane=' . (int) $_POST['memolane-id'], 301 );
    		}
	    }
    }
}
add_action('admin_init', 'memolane_redirect' );


/** shortcode **/
function memolane_func( $atts ) {
	extract( shortcode_atts( array(
		'id' => null
	), $atts ) ) ;
	
	global $wpdb;

	if($id !== null) {
		$res = $wpdb->get_results("SELECT * FROM " . MEMOLANE_TABLE . " WHERE id=" . $id);
	}
	
	if($res === null || count($res) === 0) {
		$res = array(
			'username'   => 'memolane',
			'title'      => '',
			'width'      => '500',
			'height'     => '500',
			'background' => 'default',
			'border'     => 'default'
		);
		$res = (object) $res;
	}
	else {
		$res = $res[0];
	}
	
	$width = $res->width;
	$height = $res->height;
	$border = $res->border;
	$username = $res->username;
	$title = $res->title;
	$background = str_replace( '#', '', $res->background );
	
	// figure out the lane
	if ($username != preg_replace( '/[^A-Za-z0-9_]+/', '', $username ) ) {
		$lane = 'memolane';
	}
	elseif($title === '' || $title != preg_replace( '/[^A-Za-z0-9_\s]+/', '', $title )) {
		$lane = urlencode($username);
	}
	else {
		$lane = urlencode($username) . '/' . urlencode($title);
	}
	
	// figure out the background
	if($background[0] === '#') {
		if ( $background != preg_replace( '/[^A-Fa-f0-9]+/', '', $background ) )
			$background = 'default';
		else
			$background = urlencode( "#{$background}" );
	}
	
	// figure out the border
	if ( $border != preg_replace( '/[^A-Za-z0-9\s#]+/', '', $border ) ) {
		$border = 'default';
	}
	else {
		$border = urlencode( $border );
	}
	
	// figure out the width and the height
	if( $width != preg_replace( '/[^0-9%]+/', '', $width ) ) {
		$width = 500;
	}
	if( $height != preg_replace( '/[^0-9%]+/', '', $height ) ) {
		$height = 500;
	}
	if( strpos($width, '%') === false ) {
		$width = (int) $width;
	}
	if( strpos($height, '%') === false ) {
		$height = (int) $height;
	}

	return "<script src='http://memolane.com/{$lane}.js?&width={$width}&height={$height}&background={$background}&border={$border}'></script>";
}
add_shortcode( 'memolane', 'memolane_func' );


/**** admin ****/
function memolane_admin_actions() {
    $capability = 'manage_options';
    $menu_slug  = 'memolane';

	add_menu_page('Memolane Embedded Lanes', 'Memolane', $capability, $menu_slug, 'memolane_admin');
	
	add_submenu_page($menu_slug, 'Add New Memolane Lane', 'Add New', $capability, 'memolane-new', 'memolane_admin_lane');

	add_submenu_page($menu_slug, 'Memolane Embed Help', 'Help', $capability, 'memolane-help', 'memolane_help');
	
	//add_menu_page("Memolane", "Memolane", 1, "Memolane", "memolane_admin_lane");
}
add_action('admin_menu', 'memolane_admin_actions');


function memolane_help() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    // Render the HTML for the Help page or include a file that does
    include('memolane_help.php');
}

function memolane_admin() {
	if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }  

    if( $_GET['lane'] !== NULL ) {
    	memolane_admin_lane();
    }
    else {
    	global $wpdb;
    	
    	if($_GET['orderby'] !== NULL) {
    		$order = $_GET['orderby'];
    	}
    	else {
    		$order = 'id';
    	}
    	
    	$lanes = $wpdb->get_results("SELECT * FROM " . MEMOLANE_TABLE . " ORDER BY " . $order);
    	$location = 'admin.php?page=memolane&lane=';

    	// Render the HTML for the Settings page or include a file that does
		include('memolane_main.php');
    }

    
}

function memolane_admin_lane() {
	if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }
    
    global $wpdb;
    
    $location = 'admin.php?page=memolane&lane=';

    $pageData = array(
    	'lane' => array(
    		'username'   => '',
			'title'      => '',
			'width'      => '',
			'height'     => '',
			'background' => '',
			'border'     => ''
    	),
    	'update'    => false,
    	'pageTitle' => 'Embedded Lane Info',
    	'submit'    => 'Update Embedded Lane',
    	'id'		=> NULL,
    	'action'    => preg_replace('/\?.*/','',$_SERVER['REQUEST_URI'])
    );

    
    if($_GET['page'] === 'memolane-new') {
		$pageData['pageTitle'] = "New Embedded Lane";
		$pageData['submit'] = 'Save Embedded Lane';
	}
    else {
    	$pageData['id'] = $_GET['lane'];
    	if($_GET['update'] !== NULL) {
    		$pageData['update'] = true;
    		$pageData['updateText'] = "Lane Updated";
    	}
    	elseif($_GET['save'] !== NULL) {
    		$pageData['update'] = true;
    		$pageData['updateText'] = "Lane Saved";	
    	}
    	
		$res = $wpdb->get_results("SELECT * FROM " . MEMOLANE_TABLE . " WHERE id=" . $pageData['id']);

		$pageData['lane']['username']   = $res[0]->username; 
		$pageData['lane']['title']      = $res[0]->title;
		$pageData['lane']['width']      = $res[0]->width;
		$pageData['lane']['height']     = $res[0]->height;
		$pageData['lane']['background'] = $res[0]->background;
		$pageData['lane']['border']     = $res[0]->border;
	}

    // Render the HTML for the Settings page or include a file that does
	include('memolane_lane.php');
}

?>
