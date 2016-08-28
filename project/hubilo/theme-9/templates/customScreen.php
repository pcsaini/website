<!-- Custom Screen section -->
<?php	
	if($mainvalue['data']){
?>
<div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding">
            <div class="container">
                <div class="jx-section-title-1">
                    <div class="jx-pre-title">
                        <div class="jx-title-border left"></div>
                        <div class="jx-title-icon"><i class="line-icon icon-diamond"></i></div>
                        <div class="jx-title-border right"></div> 
                    </div>
                    <div class="jx-title"><?php echo $mainvalue["sname"];?></div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
				<?php 
				if(trim($mainvalue["tagline"]))
				{
				?>
				<div class="col-lg-12 tag_line jx-subtitle"><span style="float:left; color:#000 !important;"><?php echo $mainvalue["tagline"]; ?></span></div>
				<?php
				}
				?>
							<div class="container event-desc jx-subtitle">
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