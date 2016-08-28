<!-- Custom Screen section -->
<?php	
	if($mainvalue['data']){ 
?>
<section id="<?php echo $mainvalue["href"];?>" class="section">
            <div class="container">
                <div class="title large">
			       	<span>0<?php echo $n;?></span>
			      	<h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
			      	<p class="subtitle"></p>
			    </div>
				<?php 
					if(trim($mainvalue["tagline"]))
					{
					?>
					<div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
				<?php }?>
				<div class="container">
					<h4 class="" style=""><?php echo $mainvalue['data']['screen_html'] ;?></h4>
				
					<?php
					include('templates/customButton.php');
					?>

				</div>
					
			</div>
</section>
<?php } ?>
<!-- /Custom Screen section -->