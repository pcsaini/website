<?php
if($mainvalue["data"])
{
?>
<!-- Section -->
<section id="<?php echo $mainvalue["href"];?>" class="section">
  <div class="container">

    <!-- Title -->
    <div class="title large">
      <span>0<?php echo $n;?></span>
      <h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
    </div>
    <!-- End Title -->
    <?php 
          if(trim($mainvalue["tagline"]))
          {
          ?>
          <div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
        <?php }?>

    <div class="row">
      <div class="c-12">
        
        <!-- Tabs List -->
        <?php   
          $list = $mainvalue["data"];
          $speaker_list = $agendaSpeaker_info['data'];
          $count = count($list);
          $i = 1;
          $j = 1;
        ?>
        <ul class="tabs">
        <?php
          foreach ($list as $key => $value)
          {
            $time = strtotime($key);
            $d = date("jS M, Y", $time);
            if($count > 1)
            {
              if($i == 1)
              { ?>
                <li><a class="active" href="#tab<?php echo $i ;?>"><?php echo $d;?></a></li>
             <?php } 
              else
              { ?>
                <li><a href="#tab<?php echo $i ;?>"><?php echo $d;?></a></li>
              <?php }      
            }
            else
            {?>
                 <li><a class="active" href="#tab1"><?php echo $d;?></a></li>
              <?php 
            }
            $i++; } ?>
        </ul>
        <!-- End Tabs List -->

        <!-- Tabs Content -->
        <div class="tabs-content">
          <?php
          foreach ($list as $key => $value)
          {
          $time = strtotime($key);
          $d = date("jS M, Y", $time);
          
          if($count >1 )
          {
            if($j==1){?>
              <!-- Tab -->
              <div class="active tab" id="tab<?php echo $j;?>">
              <?php $j++;
            }
            else{
              ?>
              <div class="tab" id="tab<?php echo $j;?>">
              <?php $j++;
            }
          }
          else
          {?>
            <!-- Tab -->
            <div class="active tab" id="tab1">
            <?php 
          }?>
          

            <?php
            foreach ($value as $id => $name)
            {
              $agenda_start_time  = substr($name["agenda_start_time"],0,5);
              $agenda_end_time  = substr($name["agenda_end_time"],0,5);
              $datetime1 = new DateTime($name['agenda_start_time']);
              $datetime2 = new DateTime($name['agenda_end_time']);
              $interval = $datetime1->diff($datetime2);
              $hours   = $interval->format('%h');
              $minutes = $interval->format('%i');
              $description = $name["agenda_description"];
              
              if(($speaker_list && array_key_exists($name['agenda_id'],$speaker_list)))
                    {

                      $speaker_count=count($speaker_list[$name['agenda_id']]);
                    }

                    else
                    {
                      $speaker_count = 0;

                    }
            ?>
            <!-- Body Tab -->
            <div class="tab-body">
              <div class="row">  
              <div class="c-2 post-date">
                <p><?php echo substr($name["agenda_start_time"],0,5).' - '.substr($name["agenda_end_time"],0,5) ;?></p>
              </div>

              <div class="c-10 offset-2 post-body">
                <div class="row">
                  <div class="c-12">
                  <div class="post-title">
                    <h4><?php echo $name["agenda_name"];?></h4>  
                  </div>
                  <div class="post-excerpt">
                    <div class="minimize">
                      <?php echo $name["agenda_description"];?>
                    </div>     
                  </div>
 
                  
                  <div class="post-meta">
                    <i class="fa fa-clock-o"></i> <span><?php echo $hours * 60 + $minutes; ?> min </span>
                  </div>
                  </div>
                </div>
                <div class="row" style="padding-top: 10px;"> 
                  <div class="c-12">
                  <!-- Speakers -->     
                    <?php
                    

                    if($speaker_count)
                    {
                      
                      
                      foreach($speaker_list[$name['agenda_id']] as $s)
                      {
                        
                        
                        ?>
                         <?php include("templates/schedule-speakers-modal.php"); ?>
                        <div class="post-media" style="display:inline-block;">
                          <img class="image-responsive" style="height:80px; width:80px" src="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_profile_img'];?>" alt="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_name'];?>" alt="" title="<?php echo $s['speaker_name'];?>">
                        </div>
                      <?php }
                    }
                    ?>
                      
                      <!-- /Speakers -->
                    
                  </div>
                </div>
              </div>  
              </div>

            </div>
            <!-- End Body Tab -->
            <?php  }?>
          </div>
          <!-- End Tab -->
          <?php }?>
        </div>
        <!-- End Tabs Content -->

      </div>
    </div>
    <?php include('templates/customButton.php'); ?>
  </div>
</section>
<!-- End Section -->
<?php }?>