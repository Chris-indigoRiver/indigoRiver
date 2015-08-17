<div id="pageLocator">
	<div class="textContainer">
		<div class="locatorText">
	    	<p class="animated slideInRight">HELLO</p>
	    </div>
	</div>
	<div class="pagination">
		<?php $slug = get_the_title(); 
			if ($slug == "Home") { ?>
	        <div class="locatorLine animated slideInRight" id="LLOne" style="background: rgb(0, 0, 0);"></div>
	        <div class="locatorLine animated slideInRight" id="LLTwo" style="background: rgb(204, 204, 204);"></div>
	        <div class="locatorLine animated slideInRight" id="LLThree" style="background: rgb(204, 204, 204);"></div>
	        <div class="locatorLine animated slideInRight" id="LLFour" style="background: rgb(204, 204, 204);"></div>
			<?php }
			else if ($slug == "Work") {?>
			<div class="locatorLine animated slideInRight" id="LLOne" style="background: rgb(0, 0, 0);"></div>
	        <div class="locatorLine animated slideInRight" id="LLTwo" style="background: rgb(204, 204, 204);"></div>
			<?php}
		?>
	</div>
</div>