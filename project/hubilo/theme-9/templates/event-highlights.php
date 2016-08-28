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
  if($value >1){
    $day = 'Days';
    $days_between = $value;
     $ishighlight=1; 
  }    
  else{
    $day = 'Days';        
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
            'icon_class' => 'line-icon icon-megaphone',
            'color' => 'blue'
        ),
        array(
            'item' => 'Exhibitors',
            'number' => $exhibitor,
            'icon_class' => 'line-icon icon-diamond',
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
            'icon_class' => 'line-icon icon-user',
            'color' =>'orange'
        ),
    );


if($ishighlight)
{ ?>
  <div class="jx-container jx-default-bg">
      <div class="container">
        <div class="jx-countup"> <div class="row">
        <div class="col-lg-12" style="text-align:center !important;">
        <?php foreach($event_highlights as $key => $value)
        { 
          if($value['number'])
          { 
        ?>
            <div class="count-item" style="padding: 30px 0;">
                <div class="count-number jx-count-up"><?php echo $value['number'];?></div>
                <div class="count-border"></div>
                <div class="count-text"><?php echo $value['item']; ?></div>
            </div>
            <?php } ?>
        <?php } ?>
        </div></div>
        </div>
    </div>
  </div>
<?php } 
}?>
                        