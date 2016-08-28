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
<div class="jx-container jx-padding jx-grey-bg" id="<?php echo $mainvalue["href"];?>">
      <div class="container">
        <div class="jx-section-title-1">
            <div class="jx-pre-title jx-short-border">
                <div class="jx-title-border left"></div>
                <div class="jx-title-icon"><i class="line-icon icon-user"></i></div>
                <div class="jx-title-border right"></div> 
            </div>
            <div class="jx-title jx-uppercase"><?php echo $mainvalue["sname"];?></div>
        </div>
        <div class="row"></div>
        <div class="row"></div>
        <?php 
            if(trim($mainvalue["tagline"]))
            {
            ?>
                <div class="col-lg-12 tag_line"><h3><?php echo $mainvalue["tagline"];?></h3></div>
            <?php
        }
        ?>
          <div class="row">
            <div class="col-lg-<?php echo $text_span ?> col-xs-12 community-text">
                    <p>Grab this opportunity to discover and connect with people coming to the event, sharing similar interests, industry or organisation and stay connected with them before, during and after the event.</p>
                    <div style="text-align:center;">
                        <a class="jx-btn-default jx-outline" href="<?php echo $community_website ?>" target="_blank">Start Networking</a>
                    </div>
                </div>
                <?php if($communitySize>=8){ ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:0px; list-style:inline-block !important;">
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
                            <div class="col-lg-3 col-xs-6 attendee" style="padding:5px;">
                                <div class="ih-item square effect12 jx-image-wrapper"><a href="#">
                                    <div class="img">
                                    <img class="img-responsive" src="<?php echo $path . '/images/profile/thumb/'.$value["profile_img"]; ?>" alt="" style="width: 100%;height: 100%;"/></div>
                                    <div class="info"><div class="jx-image-overlayer"></div>
                                        <p style="font-size:16px !important; top:35px; color: #fff;"><?php echo ucfirst($value["firstname"]); ?><p>
                                    </div></a>
                                </div>
                            </div> 
                        <?php } ?>
                    </div>
                <?php } ?>
                
          </div>
          <?php include('templates/customButton.php'); ?>
        </div>
    </div>
<?php } ?>
<!-- /Attendee Section -->