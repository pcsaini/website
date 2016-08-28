<?php
if($mainvalue["data"])
{
    $list = $mainvalue["data"];
    $speakerCount=count($list);
    $speaker_left=($speakerCount%4);
    if($speaker_left != 0 ){
        $speakerSpanActive=1;
    }else{
        $speakerSpanActive=0;
    }
?>
<!-- BOF Our Team -->
        <div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding jx-grey-bg">
        
        	<div class="container">
            	
                <div class="jx-section-title-1">
                    <div class="jx-pre-title jx-short-border">
                        <div class="jx-title-border left"></div>
                        <div class="jx-title-icon"><i class="line-icon icon-megaphone"></i></div>
                        <div class="jx-title-border right"></div> 
                    </div>
                    <div class="jx-title jx-uppercase"><?php echo $mainvalue["sname"];?></div>
                </div>
                <!-- Section Title -->

            	
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
                <div class="jx-speakers">
                    <?php $i=0;
                    foreach($list as $key => $val)
                    {
                    $liClass="col-lg-3 col-xs-12";
                    $speaker_margin ='';
                    if($speakerSpanActive && $speakerCount == $speaker_left)
                    {
                        if($speakerCount == 3){
                            $liClass="col-lg-3 col-lg-offset-1 col-xs-12 ";

                        }elseif($speakerCount == 2){
                            $liClass="col-lg-3 col-lg-offset-3 col-xs-12";

                        }elseif($speakerCount == 1){
                            $liClass="col-lg-3 col-lg-offset-4 col-xs-12";

                        }
                    }
                    if($i%4==0)
                    {
                    echo '<div class="row">';
                    }
                    ?>
                	<div class="<?php echo $liClass;?> jx-speaker-item">
                    	<div class="jx-speaker-photo jx-image-wrapper" href="#speaker-modal-<?php echo $i; ?>" data-toggle="modal">
                        	<img src="<?php echo $path.'/images/speaker/profile/thumb/'.$val["speaker_profile_img"] ?>" alt="" style="width: 100% !important;">
                            
                            <div class="jx-speaker-details">                            
                            	<div class="speaker-name jx-uppercase" style="font-size: 20px !important;"><?php echo $val["title_name"]; ?> <?php echo $val["speaker_name"];?></div>
                                <div class="speaker-position"><?php echo $val["speaker_description"];?></div>
                            	
                                <?php if ($val["speaker_twitter_follow"] || $val["speaker_linkedin_link"]) { ?>
                                <div class="jx-speaker-social" style="text-align:center !important">
                                	
                                </div>
                                <?php } ?>
                            </div>                                                  	
                        
                        </div>
                    </div>
                    <?php
                    if(($i+1)%4==0 || $speakerCount==1){
                        echo'</div>';
                    }
                    $i++;
                    $speakerCount--;
                    }
                    ?>
                    <!-- Item 01 -->
                </div>
                <!-- EOF Speakers -->
                <?php include('templates/customButton.php'); ?>
            </div>    
            <!-- Modals -->
            <?php $i=0; foreach($list as $key => $val){ ?>
            <?php include("templates/speakers-modal.php"); ?>
            <?php $i++;} ?>   
        </div>
		<!-- EOF Our Team -->
<?php }?>