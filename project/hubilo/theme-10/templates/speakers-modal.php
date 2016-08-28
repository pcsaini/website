<!-- Speaker Modal   -->
<?php

if($mainvalue["data"]) 
  $agenda_list  = $agendaSpeaker_info['data1'];
  $speaker_list = $agendaSpeaker_info['data'];
{?>

<div class="remodal speaker-modal eventime_modal" data-remodal-id="speaker-modal-<?php echo $i; ?>" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="modal-contant">
    <div class="modal-header">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <h4 class="modal-title">
        <?php echo $val["title_name"]?> <small><?php echo $val['speaker_name'] ?></small> </h4>
        <?php if($val["speaker_description"]) echo '<h5>'.$val["speaker_description"].'</h5>'; ?>
        <?php if($val['category_name']) echo "<h5>".$val['category_name']."</h5>"; ?>
        <?php if($val['speaker_assigned_speaker_display_emailid']){ ?>
          <h5><i class="fa fa-envelope-o" style="margin-right:5px;"></i><?php _e($val['speaker_emailid']) ?></h5>
        <?php } ?>
    </div>

    <div class="modal-body">
      <img src="<?php echo $path.'/images/speaker/profile/thumb/'.$val["speaker_profile_img"] ?>" alt="img10"/>
      <div class="speaker-modal-description mCustomScrollbar" data-mcs-theme="dark">
          <?php echo $val["speaker_long_description"]; ?>
      </div>
     

    <?php

    $r = 0;
    if(isset($agenda_list[$val['speaker_id']]))
    {

      foreach ($agenda_list[$val['speaker_id']] as $ag)
      { 
          $theagendaId = $ag['agenda_id'];
          $agenda_start_time  =   substr($ag["agenda_start_time"],0,5);
          $agenda_end_time    =   substr($ag["agenda_end_time"],0,5);
          $datetime1 = new DateTime($ag['agenda_start_time']);
          $datetime2 = new DateTime($ag['agenda_end_time']);
          $interval = $datetime1->diff($datetime2);
          $hours   = $interval->format('%h');
          $minutes = $interval->format('%i');
      ?>
      <div class="row">  
        <div class="c-12 agenda">
          <p><i class="fa fa-clock-o"></i><?php echo ($agenda_start_time); ?> - <?php echo ($agenda_end_time);  ?></p>
          <h4><?php echo $ag["agenda_name"]; ?></h4>  
      
            <?php
            if(isset($speaker_list[$ag['agenda_id']]))
            { 
                foreach ($speaker_list[$ag['agenda_id']] as $speaker_id => $s_info) 
                {
                  if(!$s_info['speaker_profile_img']){
                    $s_info['speaker_profile_img'] = "default.png";
                  }?>
                    <img class="image-responsive" style="height:60px; width:60px" src="<?php echo $path.'images/speaker/profile/thumb/'.$s_info['speaker_profile_img'] ?>" alt="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_name'];?>" alt="" title="<?php echo $s['speaker_name'];?>">
                <?php }
             } ?>

    
        </div> 
      </div> 
      <?php $r++; 
      } 
    } ?>
  </div> 
    <?php if ($val["speaker_twitter_follow"] || $val["speaker_linkedin_link"]) { ?>
      <div class="modal-footer">
        <nav class="social-icons align-center">
          <?php if ($val["speaker_linkedin_link"]) { ?>
            <a href="<?php echo $val["speaker_linkedin_link"]; ?>" class="fa fa-linkedin btn"></a>
          <?php } ?>
          <?php if($val["speaker_twitter_follow"] ){ ?>
            <a href="<?php echo $val["speaker_twitter_follow"]?>" class="fa fa-twitter btn"></a>
         <?php } ?>
        </nav>
      </div>
    <?php } ?>  
  </div>
</div>
<?php }?>