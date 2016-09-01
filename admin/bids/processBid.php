<?php
require_once '../../library/config.php';
require_once '../library/functions.php';


checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	

		
	case 'deleteBid' :
		deleteProperty();
		break;
	

    

	default :
	    // if action is not defined or unknown
		// move to main product page
		header('Location: index.php');
}


/*
	Remove a property
*/
function deleteProperty()
{
	if (isset($_GET['proId']) && (int)$_GET['proId'] > 0) {
		$proId = (int)$_GET['proId'];
	} else {
		header('Location: index.php');
	}
	
	// remove the property from database;
	$sql = "DELETE FROM tbl_bids
	        WHERE id = $proId";
	dbQuery($sql);
	
	header('Location: index.php?view=list');
}






?>