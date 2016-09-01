<?php 

require_once 'library/functions.php';
require_once 'library/config.php';

	if($_POST['ajax_mail'])
	{
		$email = $_POST['ajax_mail'];
		$id = $_POST['id'];
		echo check_email($email,$id);
	}
	elseif($_POST['auction_id'])
	{
			$data = array(
				'auction_id' => $_POST['auction_id'],
				'name'	=> $_POST['name'],
				'email' => $_POST['email'],
				'phone'	=> $_POST['tel'],
				'price' => $_POST['bid']
			);
			
			$id = insert_a_bid($data);
			if($id > 0)
			{
				echo "<script>
				alert('Your Bid has been Placed Successfully');
				window.location.href='".WEB_ROOT."';
				</script>";
			}
			else
			{
				echo "<script>
				alert('There was some problem in placing bid, please try again');
				window.location.href='".WEB_ROOT."';
				</script>";
			}
	}

?>