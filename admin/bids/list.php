<?php
if (!defined('WEB_ROOT')) {
	exit;
}


if (isset($_GET['catId']) && (int)$_GET['catId'] > 0) {
	$catId = (int)$_GET['catId'];
	$sql2 = " AND a.cat_id = $catId";
	$queryString = "catId=$catId";
} else {
	$catId = 0;
	$sql2  = '';
	$queryString = '';
}

// for paging
// how many rows to show per page
$rowsPerPage = 4;

$sql = "SELECT b.id, b.email , b.price as bid_price , a.pdetails , a.res_price as actual_price
        FROM tbl_auctions a inner join tbl_bids as b
		WHERE a.id = b.auction_id
		ORDER BY b.date_created DESC";
$result     = dbQuery(getPagingQuery($sql, $rowsPerPage));
$pagingLink = getPagingLink($sql, $rowsPerPage, $queryString);

$categoryList = buildCategoryOptions($catId);

?> 
<p>&nbsp;</p>
<br>
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td width="676">Item Detail </td>
   <td width="171">Actual Price</td>
   <td width="166">Bider Email </td>
   <td width="208">Bider Price</td>
   <td width="70">Delete</td>
  </tr>
  <?php
$parentId = 0;
if (dbNumRows($result) > 0) {
	$i = 0;
	
	while($row = dbFetchAssoc($result)) {
		extract($row);
		
		if ($i%2) {
			$class = 'row1';
		} else {
			$class = 'row2';
		}
		
		$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td style="padding-left:10px;" valign="top"><?php echo $pdetails; ?></td>
   <td width="171" align="center"><?php echo $actual_price; ?>&nbsp;Rs.</td>
   <td width="166" align="center"><b><?php echo $email; ?></b></td>
   <td width="208" align="center"><?php echo $bid_price; ?>&nbsp;Rs.</td>
   <td width="70" align="center"><a href="javascript:deleteProperty(<?php echo $id; ?>);">Delete</a></td>
  </tr>
  <?php
	} // end while
?>
  <tr> 
   <td colspan="5" align="center">
   <?php 
echo $pagingLink;
   ?></td>
  </tr>
<?php	
} else {
?>
  <tr> 
   <td colspan="5" align="center">No auction item Yet</td>
  </tr>
  <?php
}
?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
 </table>
 <p>&nbsp;</p>