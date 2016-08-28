<?php
  $starttime = $event_details['event_start_time'];
  {
?>
<!--Banner Start-->
  <div id="banner">
    <div id="home-slider">
      <div class="cover"> 
        <img class="image-responsive" src="<?php echo $path.'images/event/cover/facebook/thumb/'.$event_details['event_cover_img'];?>">
      </div>
      <div class="caption">
        <div class="container"> 
          <strong class="logo"><img src="<?php echo $path.'images/event/logo/thumb/'.$event_details['event_logo_img'];?>" alt="img"></strong>
          <strong class="title"><?php echo $event_details['event_name'] ?></strong>
          <p id="about-tagline" style="font-size:20px"></p>
          <ul>
              <li><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><?php echo $location['address']; ?></li>
              <li><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><?php echo $dateSpan; ?><br> Starts At <?php echo date('h:i a', strtotime($starttime)); ?> </li>
          </ul>
          <div class="timer-box margin-increase">
              <div class="countdown">
                  <div class="clock" id="countdown">
                      <div class="clock-item clock-days countdown-time-value">
                          <div class="inner">
                              <div id="canvas-days" class="clock-canvas"></div>
                              <div class="text">
                                  <p class="val">0</p>
                                  <p class="type-days type-time">DAYS</p>
                              </div>
                          </div>
                      </div>
                      <div class="clock-item clock-hours countdown-time-value">
                          <div class="inner">
                              <div id="canvas-hours" class="clock-canvas"></div>
                              <div class="text">
                                  <p class="val">0</p>
                                  <p class="type-hours type-time">HOURS</p>
                              </div>
                          </div>
                      </div>
                      <div class="clock-item clock-minutes countdown-time-value">
                          <div class="inner">
                              <div id="canvas-minutes" class="clock-canvas"></div>
                              <div class="text">
                                  <p class="val">0</p>
                                  <p class="type-minutes type-time">MINuteS</p>
                              </div>
                          </div>
                      </div>
                      <div class="clock-item clock-seconds countdown-time-value count-down-time-value-afternone">
                          <div class="inner">
                              <div id="canvas-seconds" class="clock-canvas"></div>
                              <div class="text">
                                  <p class="val">0</p>
                                  <p class="type-seconds type-time">Seconds</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!--Banner End-->
<?php }?>  