<!-- Speaker Modal   -->
<?php

if($mainvalue["data"]) 
{
  ?>
<div id="schedule-speaker-modal-<?php echo $name['agenda_id']; ?>" class="speaker-modal modal fade eventime_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        &times; </button>
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
      </div>
      <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
          <?php echo $s["speaker_long_description"]; ?>
      </div>
      <?php if ($s["speaker_twitter_follow"] || $s["speaker_linkedin_link"]) { ?>
      <div class="modal-footer">
        <div class="jx-btn-center">
        <div style="display: inline-block;">
        <?php if ($s["speaker_linkedin_link"]) { ?>
          <a href="<?php echo $s["speaker_linkedin_link"]; ?>" class="jx-btn-default jx-outline" style="padding: 0px !important; width: 50px;"><i class="fa fa-linkedin" aria-hidden="true" style="padding-left: 9px;"></i>
          </a>
        <?php } ?>
        </div>
        <div style="display: inline-block;">
        <?php if($s["speaker_twitter_follow"] ){ ?>
          <a href="<?php echo $s["speaker_twitter_follow"]?>" class="jx-btn-default jx-outline" style="padding: 0px !important; width: 50px;"><i class="fa fa-twitter" aria-hidden="true" style="padding-left: 9px;"></i>
          </a>
        <?php } ?>
      </div>
      </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
<!-- Speaker Modal   -->
