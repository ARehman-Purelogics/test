<div id="newsticker-demo">    
    <div class="title">Products you want to buy!</div>
    <div class="newsticker-jcarousellite">
		<ul>
			<?php
			$conList = sliderContent();
			for($i=0; $i<count($conList);$i++){
			extract($conList[$i]);

			?>
			<li style="overflow: hidden; float: none; width: 200px;">
				<div class="info">
					<a class="heading" href="<?php echo $url; ?>"><?php echo $pro_name; ?></a>
					<span class="cat">
					<b>Bank :</b><?php echo $bank_name; ?><br/>
					<b>City :</b><?php echo $city_name; ?><br/>
					<b>Reserved Price :</b><?php echo $res_price; ?><br/>
					<a href="<?php echo $url; ?>" class="readmore">More Details</a></span>
				</div>
				<div class="clear"></div>
			</li>
			<?php 
			} 
			?>
		</ul>
    </div>
    
</div>
<div id="proAdd">
<p><b>Search for things you Want!</b>
<br/>
<img src="<?php echo WEB_ROOT; ?>images/banglows.jpg" align="middle"/><br/>
This customized website provides you with the products of your own choice. You can check for the latest products updates in the section above. </p>
</div>
<br/><br/>	
</div>  