<?php 
$rows = getPropertyCategories();
?>
<div id="navcontainer">
<ul>
<?php 
for($i=0; $i<count($rows);$i++){
extract($rows[$i]);
?><li><a href="<?php echo $url; ?>" title="<?php echo $cname; ?>"><?php echo $cname; ?></a></li>
<?php } ?>
</ul>
</div>

<div id="proAdd">
<p><b>Best Quality Products</b>
<br/>
<img src="<?php echo WEB_ROOT; ?>images/res-houses.jpg" align="middle"/>We focus on selling the best quality products that are available in our stores. Best quality is our promise whether it is the field of education or things like this. <br/>
</p>
</div>
