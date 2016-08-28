<!-- Event Highlight Section -->
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
        $number         = 100/$highlightCount;
    }
    foreach ($highlight_info['data'][0] as $key => $value)
    {
        if($key=='days'){
            if($value ==1){
                $days_between = '1';
                $ishighlight=1;
            }
            if($value >1){
                $days_between = $value;
                $ishighlight=1;
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
                $exhibitor = '1 ';
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
                'item' => 'Days',
                'number' => $days_between,
                'icon_class' => 'pe-7s-date pe-4x pe-va',
                'color' => '#04cd8f'
            ),
            array(
                'item' => 'Sessions',
                'number' => $session,
                'icon_class' => 'pe-7s-clock pe-4x pe-va',
                'color' => '#04cd8f'
            ),
            array(
                'item' => 'Speakers',
                'number' => $speaker,
                'icon_class' => 'pe-7s-micro pe-4x pe-va',
                'color' => '#04cd8f'
            ),
            array(
                'item' => 'Exhibitors',
                'number' => $exhibitor,
                'icon_class' => 'pe-7s-global pe-4x pe-va',
                'color' => '#04cd8f'
            ),
            array(
                'item' => 'Sponsors',
                'number' => $sponsor,
                'icon_class' => 'pe-7s-cash pe-4x pe-va',
                'color' =>'#04cd8f'
            ),
            array(
                'item' => 'Attendees',
                'number' => $attendee,
                'icon_class' => 'pe-7s-user pe-4x pe-va',
                'color' =>'#04cd8f'
            ),
        );

    if($ishighlight)
    {
        echo'
        <!-- SECTION: Event Highlights
        ================================================== -->
        <section class="event-section">
            <div class="container">
                <div class="row">
                    <!-- date -->
                    <ul class="event-highlight">';
                        foreach($event_highlights as $key => $value)
                        {
                            if($value['number'])
                            {
                                echo'<li>
                                    <i class="'.$value['icon_class'].'"></i>
                                  <p>
                                    <span class="highlights-number">'.$value['number'].'</span>
                                  </p>
                                  <p class="item">
                                     '.$value['item'].'
                                  </p>
                                </li>';
                            }
                        }

                    echo'</ul>
                </div>
            </div>
        </section>  
        <!-- SECTION: /Event Highlights
        ================================================== -->';

    }
}
?>
<!-- /Event Highlight Section -->