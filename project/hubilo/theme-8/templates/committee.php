<!-- Committee-Section -->
<?php

if($mainvalue["data"]) {
  $list = $mainvalue["data"];
  $committeeCount=count($list);
  $organizer_left=($committeeCount%6);
  if($organizer_left != 0 ){
    $organizerSpanActive=1;
  }else{
    $organizerSpanActive=0;                    
  }
  $in_one_line = 5;
  $i=0;
  $k=0;
?>
 <!-- SECTION: Organizer committee
    ================================================== -->
<div class="top-speakers-section" id="section-<?php echo $mainvalue["href"];?>">
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
              <?php $i=0; 
              foreach($list as $key => $val)
              {
                 
                $liClass="col-lg-2 col-xs-12";
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
                }
            
              if($i%6==0)
              {   
                echo '<div class="row">';
              }
             ?>
             <div class="<?php echo $liClass;?>">
                <div class="box">
                  <div class="inner-box">
                    <div class="frame"><img src="<?php echo $path.'/images/committee_member/profile/thumb/'.$val["committee_member_profile_img"] ?>" alt="img09"/>
                    </div>
                    <div class="caption" href="#organizer-modal-<?php echo $i; ?>" data-toggle="modal"><strong class="name" style="font-size:14px !important;"><?php echo $val["title_name"]; ?><br><?php echo $val["committee_member_name"]; ?></strong>
                    </div>
                  </div>
                </div>
              </div>
              <?php 
              if(($i+1)%6==0 || $committeeCount==1){
                echo'</div>';    
              }
                    
            $i++;
            $committeeCount--; 
            }
           ?>
           <?php include('templates/customButton.php'); ?>
            </div>
<!-- End Speakers -->
<?php $i=0; foreach($list as $key => $val){ ?>
<?php include('templates/committee-modal.php'); ?>
<?php $i++;} ?>
</div>
<?php } ?>
<!-- /Committee-Section -->
