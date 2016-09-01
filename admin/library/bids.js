// JavaScript Document

function deleteProperty(proId)
{
	if (confirm('Delete this Property?')) {
		window.location.href = 'processBid.php?action=deleteBid&proId=' + proId ;
	}
}
