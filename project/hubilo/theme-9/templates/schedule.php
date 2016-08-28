<?php
if($mainvalue["data"])
{
?>
<!-- Schedule Tab-->
<div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding jx-grey-bg">
            <div class="container">
                
                <div class="jx-section-title-1">
                    <div class="jx-pre-title jx-short-border">
                        <div class="jx-title-border left"></div>
                        <div class="jx-title-icon"><i class="line-icon icon-calendar"></i></div>
                        <div class="jx-title-border right"></div> 
                    </div>
                    <div class="jx-title jx-uppercase"><?php echo $mainvalue["sname"];?></div>
                </div>
                <!-- Section Title -->

                
                <div class="row"></div>   
               <div class="row"></div> 
                <?php 
                    if(trim($mainvalue["tagline"]))
                    {
                    ?>
                        <div class="col-lg-12 tag_line"><h3><?php echo $mainvalue["tagline"];?></h3></div>
                    <?php
                }
                ?>            
                
                <?php   
                     $list = $mainvalue["data"];
                        $speaker_list = $agendaSpeaker_info['data'];
                        $count = count($list);
                        $i = 1;
                        $j = 1;
                    ?>
                <div class="shortcode_tab_e jx-white-tab jx-arrow-tab">
                    
                            
                              <div id="ParentTab">
                              <ul class="resp-tabs-list parenttab_1">
                              <?php
                                foreach ($list as $key => $value)
                                {
                                    if($count > 1)
                                    {
                                        if($i == 1)
                                        {
                                        ?>
                                        <li class="resp-tab-item">
                                            <!--<div class="jx-tab-date jx-uppercase">25 Jan</div>-->
                                            <div class="jx-tab-day jx-uppercase">day <?php echo $i ;?></div>
                                        </li> 
                                            
                                        <?php } 
                                        else
                                        {
                                            ?>
                                            <li class="resp-tab-item">
                                            <!--<div class="jx-tab-date jx-uppercase">25 Jan</div>-->
                                            <div class="jx-tab-day jx-uppercase">day <?php echo $i ;?></div>
                                        </li> 
                                        <?php }
                                        
                                    }
                                    else
                                    {?>
                                       <li class="resp-tab-item resp-tab-active">
                                            <!--<div class="jx-tab-date jx-uppercase">25 Jan</div>-->
                                            <div class="jx-tab-day jx-uppercase">day 1</div>
                                        </li> 
                                    <?php }
                                    $i++;
                                }   ?>
                            
                                                             
                              </ul>
                              <!-- Headings -->
                              
                              <div class="resp-tabs-container parenttab_1">
                                <?php 
                        foreach ($list as $key => $value)
                        {
                            $time = strtotime($key);
                            $d = date("jS M, Y", $time);
                            ?>
                                 <div>
                                     <div id="ChildTab-<?php echo $j-1;?>">
                                        
                                        <ul class="resp-tabs-list jx-subtab childtab_1">
                                            <li><div class="jx-tab-title"><?php echo $d;?></div></li>                       
                                        </ul>                            
                                        <!-- EOF Child Tab Head -->
                                        
                                        <div class="resp-tabs-container jx-event-schedule childtab_1">
                                        <?php 
                                        $k = 1;
                                        $prevalue   =   '';
                                        $valueArray1    =   array();
                                        $valueArray2    =   array();
                                        $index          =   0;
                                foreach ($value as $id => $name) 
                                {   
                                    $time = strtotime($key);
                                    $d = date("jS M, Y", $time);
                                    $datetime1 = new DateTime($name['agenda_start_time']);
                                    $datetime2 = new DateTime($name['agenda_end_time']);
                                    $interval = $datetime1->diff($datetime2);
                                    $hours   = $interval->format('%h');
                                    $minutes = $interval->format('%i');
                                    $agenda_start = substr($name["agenda_start_time"],0,5);
                                    $agenda_end = substr($name["agenda_end_time"],0,5); 
                                    ?>
                                            
                                            <div>
                                            <div id="accordion-1" data-accordion-group>
                                                
                                                    <div class="item"> 
                                                      
                                                        <div class="left-position">
                                                            <?php 
                                
                                                            if($index == 0)
                                                            { ?>
                                                                <div class="image"><i class="fa fa-calendar-o fa-3x" aria-hidden="true"></i>
                                                                </div>
                                                                    
                                                            <?php }
                                                            else
                                                            { 
                                                                if(($agenda_start_time == $valueArray1[$index-1]) && ($agenda_end_time == $valueArray2[$index-1]))
                                                                { ?>
                                                                    <div class="image">
                                                                    </div>
                                                                <?php
                                                                }
                                                                else
                                                                {   ?>
                                                                    <div class="image"><i class="fa fa-calendar-o fa-3x" aria-hidden="true"></i>
                                                                    </div>

                                                                <?php } 
                                                            } ?>


                                                        
                                                        <!-- Image -->
                                                        </div>
                                                        <!-- Left item Position -->
                                                        
                                                        <div class="right-position">
                                                        
                                                            <div data-accordion class="head">
                                                                <div class="date"><i class="fa fa-clock-o"></i><span><?php echo date('h:i a', strtotime($agenda_start)).' - '.date('h:i a', strtotime($agenda_end));?></span>
                                                                </div>
                                                                <div class="title" onclick="$('#schedule-<?php echo $i; ?>').slideToggle(400); $(this).toggleClass('faq-open')"><?php echo $name["agenda_name"];?>
                                                                    <?php if(isset($name["agenda_description"]) && $name['agenda_description'] != '') {?>
                                                                    <?php } ?>
                                                                </div>                        
                                                                <!-- Title -->
                                                                
                                                                
                                                                    <div class="content" id="schedule-<?php echo $i++ ;?>" style="display:none"><?php echo $name["agenda_description"];?>
                                                                    
                                                                    </div>
                                                            

                                                                <!-- Content -->
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
                                <?php include("templates/schedule-speakers-modal.php"); ?>
                            <div class="image" style="display:inline-block;" href="#schedule-speaker-modal-<?php echo $name['agenda_id']++; ?>" data-toggle="modal">
                                <img src="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_profile_img'];?>" alt="<?php echo $path;?>images/speaker/profile/thumb/<?php echo $s['speaker_name'];?>" title="<?php echo $s['speaker_name'];?>" ></div>
                              <?php }
                            }
                            ?>
                          
                          <!-- /Speakers -->
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <!-- Item # 1 -->                        
                                                    
                                                    
                                                </div>
                                            </div>
                                            <?php }?>
                                            
        
                                        </div>
                                     </div>
                                     <!-- Item#1 -->
                                 </div>
                                 <?php }?>
                                 <!-- Item#1 -->
                              <!-- Tab Contents -->
                              
                            </div>
                        <!-- Horizontal Tab -->
                        <div class="mb60"></div>
                        
                        </div>
                </div>
                <?php include('templates/customButton.php'); ?>
            <!-- EOF container -->
        </div>       
        </div>
        <!-- EOF Schedule tab -->



        
<?php }?>