<!-- Speaker Modal   -->
<?php

if($mainvalue["data"]) 
{?>

<div class="remodal speaker-modal eventime_modal" data-remodal-id="schedule-speaker-modal-<?php echo $l; ?>" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="modal-contant">
    <div class="modal-header">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <h4 class="modal-title">
        <?php echo $s["title_name"]?> <small><?php echo $s['speaker_name'] ?></small> </h4>
        <?php if($s["speaker_description"]) echo '<h5>'.$s["speaker_description"].'</h5>'; ?>
        <?php if($s['category_name']) echo "<h5>".$s['category_name']."</h5>"; ?>
        <?php if($s['speaker_assigned_speaker_display_emailid']){ ?>
          <h5><i class="fa fa-envelope-o" style="margin-right:5px;"></i><?php _e($s['speaker_emailid']) ?></h5>
        <?php } ?>
    </div>

    <div class="modal-body">
      <img src="<?php echo $path.'/images/speaker/profile/thumb/'.$s["speaker_profile_img"] ?>" alt="img10"/>
      <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
          <?php echo $s["speaker_long_description"]; ?>
      </div>
    </div>  

    <?php if ($s["speaker_twitter_follow"] || $s["speaker_linkedin_link"]) { ?>
      <div class="modal-footer">
        <nav class="social-icons align-center">
          <?php if ($s["speaker_linkedin_link"]) { ?>
            <a href="<?php echo $s["speaker_linkedin_link"]; ?>" class="fa fa-linkedin btn"></a>
          <?php } ?>
          <?php if($s["speaker_twitter_follow"] ){ ?>
            <a href="<?php echo $s["speaker_twitter_follow"]?>" class="fa fa-twitter btn"></a>
         <?php } ?>
        </nav>
      </div>
    <?php } ?>  
  </div>
</div>
<?php }?>