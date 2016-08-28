<?php 
if($highlight_info['data'])
{
$days_between='';
$days_between='';
$session='';
$speaker='';
$sponsor='';
$exhibitor='';
$attendee='';  
$ishighlight=0; 

$highlightCount = count(array_filter($highlight_info['data'][0]));

if($highlightCount > 0)
{
$number     = 100/$highlightCount;
}
foreach ($highlight_info['data'][0] as $key => $value) 
{
if($key=='days'){
  if($value ==1){
    $day = 'Day';
    $days_between = '1';
    $ishighlight=1; 
  }
  elseif($value >1){
    $day = 'Days';
    $days_between = $value;
     $ishighlight=1; 
  }   
  else{
    $day = 'Day';
  }    
}
elseif($key=='sessions'){
  if($value ==1){
    $session = '1';
     $ishighlight=1; 
  }
  if($value >1){
    $session = $value;
    $ishighlight=1; 
  }       
}
elseif($key=='speakers'){
  if($value ==1){
    $speaker = '1';
    $ishighlight=1; 
  }
  if($value >1){
    $speaker = $value;
    $ishighlight=1; 
  }       
}
elseif($key=='sponsors'){
  if($value ==1){
    $sponsor = '1';
    $ishighlight=1; 
  }
  if($value >1){
    $sponsor = $value;
    $ishighlight=1; 
  }       
}
elseif($key=='exhibitors'){
  if($value ==1){
    $exhibitor = '1';
    $ishighlight=1; 
  }
  if($value >1){
    $exhibitor = $value;
    $ishighlight=1; 
  }       
}
elseif($key=='attendees'){
  if($value ==1){
    $attendee = '1';
    $ishighlight=1; 
  }
  if($value >1){
    $attendee = $value;
    $ishighlight=1; 
  }       
}
}
$event_highlights = array(
        array(
            'item' => $day,
            'number' => $days_between,
            'icon_class' => 'line-icon icon-calendar',
            'color' => 'orange'
        ),
        array(
            'item' => 'Sessions',
            'number' => $session,
            'icon_class' => 'line-icon icon-clock',
            'color' => 'yellow'
        ),
        array(
            'item' => 'Speakers',
            'number' => $speaker,
            'icon_class' => 'line-icon icon-mic',
            'color' => 'blue'
        ),
        array(
            'item' => 'Exhibitors',
            'number' => $exhibitor,
            'icon_class' => 'line-icon icon-globe',
            'color' => 'orange'
        ),
        array(
            'item' => 'Sponsors',
            'number' => $sponsor,
            'icon_class' => 'line-icon icon-wallet',
            'color' =>'orange'
        ),
        array(
            'item' => 'Attendees',
            'number' => $attendee,
            'icon_class' => 'line-icon icon-profile-male',
            'color' =>'orange'
        ),
    );


if($ishighlight)
{ ?>
  <!-- Section -->
  <section class="grey section">
    <div class="container">
      <div class="row">
        <div class="c-12">
          <?php if ($highlightCount<=4) { ?>
            <div class="event-highlight">
              <?php foreach($event_highlights as $key => $value)
              { 
                if($value['number'])
                { 
              ?>
                <div class="item">
                  <!-- Counter -->
                  <div class="counter light">
                    <i class="<?php echo $value['icon_class'];?>"></i>
                    <h1 class="counter-number"><?php echo $value['number'];?></h1>
                    <p class="counter-info"><?php echo $value['item']; ?></p>
                  </div>
                <!-- End Counter -->
                </div>
                <?php } ?>
              <?php } ?>
            </div>
          <?php }
          else{
          ?>
            <div class="slider testimonials event-high" data-items="4" data-navigation="true">
              <?php foreach($event_highlights as $key => $value)
              { 
                if($value['number'])
                { 
              ?>
                <div class="item">
                  <!-- Counter -->
                  <div class="">
                    <div class="counter light">
                      <i class="<?php echo $value['icon_class'];?>"></i>
                      <h1 class="counter-number"><?php echo $value['number'];?></h1>
                      <p class="counter-info"><?php echo $value['item']; ?></p>
                    </div>
                  </div>
                <!-- End Counter -->
                </div>
                <?php } ?>
              <?php } ?>
            </div>
          <?php } ?>  
        </div>
      </div>
    </div>
  </section>
  <!-- End Section -->
  
<?php } 
}?>
                        









      


      