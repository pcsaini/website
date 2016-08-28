<!-- Attendee Section -->
<?php if($mainvalue["data"]) {
		    $list = $mainvalue["data"];
			 $communitySize = count($mainvalue["data"]);
			 if($communitySize<8)
			 {
				$attendees_span = 0;
				$text_span = 12;
			}
			else
			{
				$attendees_span = 6;
				$text_span = 6;
			}
 ?>
<div class="top-speakers-section" id="section-<?php echo $mainvalue["href"];?>" style="background-color: #fff;">
      <div class="container">
        <h2><?php echo $mainvalue["sname"];?></h2>
        <?php 
            if(trim($mainvalue["tagline"]))
            {
            ?>
                <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
            <?php
        }
        ?>
          <div class="row">
                <?php if($communitySize>=8){ ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0px; text-align:center;">
                        <?php 
                            foreach($list as $key => $value)
							{ 
								if($i==5)
								{
									break;
								}
								if(! $value["profile_img"])
								{
									$value["profile_img"] = "default.png";
								}
                        ?>
                            <div class="attende-img">
                                <div class="ih-item circle effect1"><a>
                                    <div class="spinner"></div>
                                    <div class="img">
                                        <img class="img-responsive" src="<?php echo $path . '/images/profile/thumb/'.$value["profile_img"]; ?>" alt="" style="width: 100%;height: 100%;"/>       
                                    </div>
                                    <div class="info" style="cursor: pointer">
                                        <div class="info-back">
                                            <p style="font-size: 16px; padding-top: 30px; color:#fff !important;"><?php echo ucfirst($value["firstname"]); ?></p> 
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
				<?php } ?>
                <div class="col-lg-<?php echo $text_span ?> col-xs-12 community-text" style="padding-left: 30px;padding-top: 40px;">
                    <p class="lead">Grab this opportunity to discover and connect with people coming to the event, sharing similar interests, industry or organisation and stay connected with them before, during and after the event.</p>
                    <div class="start-network">
                        <a class="btn-style-1" href="<?php echo $community_website ?>" target="_blank">Start Networking</a>
                    </div>
                </div>
          </div>
          <?php include('templates/customButton.php'); ?>
    </div>
</div>
<?php } ?>
<!-- /Attendee Section -->