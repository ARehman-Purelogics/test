<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$parentId = (isset($_GET['parentId']) && $_GET['parentId'] > 0) ? $_GET['parentId'] : 0;
?> 
<script>
function checkCategoryForm()
{
	$('#city_error').hide();
	var form = $( "#frmCategory" );
	form.validate();
	if (form.valid()) {
		var txtName = $('#txtName').val();
		var txtState = $('#txtState').val();
			$.ajax({
							type: "POST",
							url: "<?php echo WEB_ROOT; ?>" + "admin/city/processCategory.php?action=check",
							dataType: 'json',
							data: {
								txtName: txtName,
								txtState: txtState
								},
							success: function(res) {
								if(res == 1)
									$('#city_error').show();
								else
								  form.submit();
							}
							});
			//submit();
	}
}
</script>
<form action="processCategory.php?action=add" method="post" enctype="multipart/form-data" name="frmCategory" id="frmCategory">
 <p align="center" class="formTitle">Add City </p>
 
 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
   <td width="150" class="label">City Name</td>
   <td class="content"> <input name="txtName" type="text" class="box" id="txtName" size="30" maxlength="50" required></td>
  </tr>
  <tr> 
   <td width="150" class="label">State</td>
   <td class="content"><input name="txtState" type="text" class="box" id="txtState" value="" size="30" maxlength="50" required /></td>
  </tr>
  <tr>
  <label id="city_error" for="email" style="display:none;color:red;font-size:16px">Already Added</label>
  </tr>
 </table>
 <p align="center"> 
  <input name="btnAddCategory" type="button" id="btnAddCategory" value="Add City" onClick="checkCategoryForm();">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php?cId=<?php echo $parentId; ?>';">  
 </p>
</form>