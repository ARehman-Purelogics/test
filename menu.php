<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<div ng-app="myapp" ng-controller="myctrl">
<div class="span-24">
   <div id="underlinemenu">
	<ul>
		
		<li><a href="<?php echo WEB_ROOT; ?>index.html" title="Home">Home</a></li>
		<!--
		<li><a href="<?php echo WEB_ROOT; ?>Search-Auction.html" title="Search Auction">Search Auction</a></li>
		-->
		<li><a href="<?php echo WEB_ROOT; ?>About-Us.html" title="About Us">About Us</a></li>
		
		<li><a href="<?php echo WEB_ROOT; ?>Bank-List.html" title="Bank List">Available through: Banks</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>City-List.html" title="City List">Available in: Cities</a></li>
			
		<li><a href="<?php echo WEB_ROOT; ?>Contact-Us.html" title="Contact Us">Contact Us</a></li>
		
		<li>
        <form action="<?php echo WEB_ROOT; ?>search.php" method="get">
		<input type=search results=5 autosave=some_unique_value name=s style="float:right; margin:3px 20px 0px 0px;" ng-model="search">
        </form>
        </li>
	</ul>
	
	
	
	
	</div>
</div>



