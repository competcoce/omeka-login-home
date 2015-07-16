<div id="arcaz-widget-login">
	<?php 
	if(!current_user()){ 	
		echo "<a href=\"".absolute_url("admin")."\">login</a>";
	}
	?>
</div>