<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';		
		$pageTitle 	= 'Admin Control Panel - View Bids';
		break;
		
	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'Admin Control Panel - View bids';
}




$script    = array('bids.js','jquery.min.js');

require_once '../include/template.php';
?>
