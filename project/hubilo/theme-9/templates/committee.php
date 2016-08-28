<!-- Committee-Section -->
<?php

if($mainvalue["data"]) {
  $list = $mainvalue["data"];
  $committeeCount=count($list);
  $organizer_left=($committeeCount%5);
  if($organizer_left != 0 ){
    $organizerSpanActive=1;
  }else{
    $organizerSpanActive=0;                    
  }
  $in_one_line = 5;
  $i=0;
  $k=0;
?>
<!-- BOF Our Committee -->
        <div id="<?php echo $mainvalue["href"];?>" class="jx-container container-no-margin jx-padding jx-grey-bg">
                        <!-- Background Image -->
                        <!-- Background Icon -->
            <div class="container ">
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
                    <!-- Item Content Box-->

                <?php $i=0; 
                  foreach($list as $key => $val)
                  {
                     
                    /*$liClass="col-lg-2";
                    $speaker_margin ='';
                    if($organizerSpanActive && $committeeCount == $organizer_left)
                    {
                      if($committeeCount == 3){
                        $liClass="col-lg-2 col-md-offset-3 col-xs-12 ";
                        
                      }elseif($committeeCount == 2){
                        $liClass="col-lg-2 col-md-offset-4 col-xs-12";
                        
                      }elseif($committeeCount == 1){
                        $liClass="col-lg-2 col-lg-offset-5 col-xs-12";
                        
                      }                                
                    }*/
                
                  if($i%5==0)
                  {   
                    echo '<div class="row" style="text-align:center;">';
                  }
                 ?> 
                			
                <div class="jx-speaker-item" style="width:220px; display:inline-block; padding: 10px;"> 
                    <div class="jx-speaker-photo jx-image-wrapper"><img width="234" height="189" src="<?php echo $path.'/images/committee_member/profile/thumb/'.$val["committee_member_profile_img"] ?>" class="attachment-speaker-image wp-post-image" alt="" />
                        <div class="jx-speaker-overlayer"></div>
                        <div class="jx-image-hover-info" href="#organizer-modal-<?php echo $i; ?>" data-toggle="modal">
                            <div class="jx-speaker-name"><p style="text-align: center;"><?php echo $val["title_name"]; ?><br><?php echo $val["committee_member_name"]; ?></p></div>
                            <div class="jx-speaker-pos"></div>
                        </div>
                    </div>		
                </div>
                <!-- Item -->
                <?php 
                if(($i+1)%5==0 || $committeeCount==1){
                echo'</div>';    
                }
                    
                $i++;
                $committeeCount--; 
                }
               ?>
               <?php include('templates/customButton.php'); ?>
            </div>
            <?php $i=0; foreach($list as $key => $val){ ?>
            <?php include('templates/committee-modal.php'); ?>
            <?php $i++;} ?>
        </div>
		<!-- EOF Our Team -->
<?php } ?>
