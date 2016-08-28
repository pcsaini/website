<!-- Schedule Section   -->
<?php
if($mainvalue["data"])
{
?>
<!--Program Schedule Section Start-->
<div class="program-section" id="section-<?php echo $mainvalue["href"];?>">
  <div class="container">
    <!-- Schedule Header -->
    <h2><?php echo $mainvalue["sname"];?></h2>
    <?php 
                if(trim($mainvalue["tagline"]))
                {
                ?>
                    <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
                <?php
            }
            ?>
    <!-- /Schedule Header -->
    <?php
    $list = $mainvalue["data"];
    $speaker_list = $agendaSpeaker_info['data'];
    $count = count($list);
    $i = 1;
    $j = 1;
    ?>

    <!--Tabs -->
    <div class="row">
      <div class="col-md-2">
        <ul class="nav nav-tabs" role="tablist" id="myTab">
          <?php
          foreach ($list as $key => $value)
          {

            if($count > 1)
            {
              if($i == 1)
              {
                ?>
                <li role="presentation" class="active"><a href="#tab-<?php echo $i ;?>" data-toggle="tab">
                    <div class="hexagon-style-5"><span><?php echo $i ;?><b>Day</b></span></div></a></li>
              <?php }
                else
                {
                  ?>
                <li role="presentation" ><a href="#tab-<?php echo $i ;?>" data-toggle="tab">
                    <div class="hexagon-style-5"><span><?php echo $i ;?><b>Day</b></span></div></a></li>
              <?php }

            }
            else
            {?>
              <li role="presentation" class="active"><a href="#tab-1" data-toggle="tab">
                  <div class="hexagon-style-5"><span>1 <b>Day</b></span></div></a></li>
            <?php }
            $i++;
          }   ?>
        </ul>
      </div>


      <!--  Schedule Tabs -->

      <div class="col-md-10">
        <div class="tab-content">
          <?php
          foreach ($list as $key => $value)
          {
          $time = strtotime($key);
          $d = date("jS M, Y", $time);
          
          if($count >1 )
          {
            if($j==1){
          ?>

          <!-- Schedule Tab -->
          <div role="tabpane" class="tab-pane active" id="tab-<?php echo $j;?>">
            <?php $j++;
            }
            else{
              ?>
                <div role="tabpane" class="tab-pane" id="tab-<?php echo $j;?>">
            <?php $j++;


            }
          }
            else
            {?>
            <div role="tabpane" class="tab-pane active" id="tab-1">
              <?php }?>

              <div class="tab-content-box">
                <div class="tab-head"><strong class="title"><span><?php echo $d ?></strong></div>
                <!-- Schedule Item -->
                <table class="color-tab" style="width: 100%;">
                  <?php
                  foreach ($value as $id => $name)
                  {
                    $datetime1 = new DateTime($name['agenda_start_time']);
                    $datetime2 = new DateTime($name['agenda_end_time']);
                    $interval = $datetime1->diff($datetime2);
                    $hours   = $interval->format('%h');
                    $minutes = $interval->format('%i');
                    $agenda_start = substr($name["agenda_start_time"],0,5);
                    $agenda_end = substr($name["agenda_end_time"],0,5); 
                    ?>
                    <!-- Schedule Items -->
                    <tr class="row m-0 p-r">
                      <td style="padding-bottom: 30px;">
                        <!-- Left Box -->
                        <div class="left-box">
                          <h3 ><?php echo $name["agenda_name"];?>
                          </h3>
                          <div id="tab-<?php echo $i++ ;?>" style="display: none;">
                            <?php echo $name["agenda_description"];?>
                          </div>
                          <!-- Speakers -->
                          
                            <?php
                            if(($speaker_list && array_key_exists($name['agenda_id'],$speaker_list)))
                            {

                              $speaker_count=count($speaker_list[$name['agenda_id']]);
                            }

                            else
                            {
                              $speaker_count = 0;

                            }

                            if($speaker_count)
                            {
                              foreach($speaker_list[$name['agenda_id']] as $s)
                              {?>
                            <div class="thumb">
                                <img src="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_profile_img'];?>" alt="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_name'];?>" title="<?php echo $s['speaker_name'];?>" ></div>
                              <?php }
                            }
                            ?>
                          
                          <!-- /Speakers -->
                        </div>
                        <!-- Left Box -->
                      </td>
                      <!-- Schedule Time -->
                      
                      <td class="color-right">
                        <div class="detail-col">
                          <ul>
                            <li><i class="fa fa-clock-o"></i><span><?php echo date('h:i a', strtotime($agenda_start)).' - '.date('h:i a', strtotime($agenda_end));?></span></li>
                          </ul>
                          <div onclick="$('#tab-<?php echo $i-1; ?>').slideToggle(400); $(this).toggleClass('faq-open')" style="text-align: center;">
                            <?php if(isset($name["agenda_description"]) && $name['agenda_description'] != '') {?>
                              <span>
                                      <a class="btn-1">view more</a>
                                      <a class="btn-2">view less</a>
                                      </span>
                            <?php } ?>
                            </div>
                          
                          
                        </div>
                      </td>
                      <!-- /Schedule Time -->                        
                    </tr>
                    <!-- /Schedule Items -->

                    <?php
                  }
                  ?>
                </table>
                <!--  /schedule items-->
              </div>
            </div>
            <!-- /Schedule Tab -->
            <?php
            }
            ?>
          </div>
        </div>
        <!-- /Schedule Tabs -->
      </div>
      <!--Tabs -->
    <?php include('templates/customButton.php'); ?>
    </div>


  </div>
  <?php
  }
  ?>


<!-- /Schedule Section   -->