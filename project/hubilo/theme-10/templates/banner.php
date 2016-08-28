<?php 
  $startdate = strtotime($event_details["event_date"]);
  $enddate =  strtotime($event_details["event_end_date"]); 
  $starttime = $event_details['event_start_time'];           
  $datediff = $enddate - $startdate;
  $days=floor($datediff/(60*60*24));
  if($days>1){
      $dateSpan=date("jS", strtotime($event_details["event_date"])) .' - '. date("jS", strtotime($event_details["event_end_date"]));
  }else{
      $dateSpan=date("jS", strtotime($event_details["event_date"]));
  }
?>

<div class="hero fullscreen parallax" data-background="<?php echo $path.'images/event/cover/facebook/thumb/'.$event_details['event_cover_img'];?>">

  <div class="content-section fixed-content" id="content">

    <!-- Slide -->
    <div class="slide overlay dark">
      <div class="slide-content">
        <div class="vertical-align">
          <div class="vertical-center">
            <div class="slider-inner">

              <div class="date">
                <span><?php echo $dateSpan; ?> <?php echo date("M Y", strtotime($event_details["event_date"])); ?>, Starts at <?php echo date('h:i a', strtotime($starttime)); ?>
              </div>

              <h1><?php echo $event_details['event_name']?></h1>

              <h3 id="about-tagline" style="color:#fff; font-weight:600;"></h3>

              <h3 style="color:#fff; font-weight:600;"> <?php echo $location['address']; ?></h3>

              <a href="#registration" class="btn large scroll">Register Online</a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Slide -->

  </div>
  <div class="countdown-section">
    <h5 class="bold uppercase">Event starts in</h5>
    <div class="countdown" data-seconds="true" data-end="<?php echo date('Y/m/d', $startdate); ?>"></div>
  </div>

</div>
    <!-- End Hero -->
