<!-- Custom Screen section -->
<?php	
	if($mainvalue['data']){
?>
<div class="section-gallery" id="<?php echo'section-'.$mainvalue["href"];?>">
				<div class="container"> 
					
					<h2><?php echo $mainvalue["sname"]; ?></h2>
					<?php 
			            if(trim($mainvalue["tagline"]))
			            {
			            ?>
			                <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
			            <?php
			        }
			        ?>
							<?php 
							if(trim($mainvalue["tagline"]))
							{
							?>
							<div class="col-lg-12 tag_line"><span style="float:left; color:#000 !important;"><?php echo $mainvalue["tagline"]; ?></span></div>
							<?php
							}
							?>
							<div class="container event-desc" style="padding-top:3%; ">
								<h4 class="event-description" style="color:#777 !important;"><?php echo $mainvalue['data']['screen_html'] ;?></h4>
							
								<?php
								include('templates/customButton.php');
								?>

							</div>
					
				</div>
</div>

 <?php
}
?>
<!-- /Custom Screen section -->