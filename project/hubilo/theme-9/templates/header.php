<!-- BOF Slider -->
    <div class="jx-slider" id=slider>
    	<div class="jx-top-black"></div>
    
        <!-- BOF Header -->    
        <header>
        	<div class="jx-header jx-sticky">            	
            	<div class="container">
                	<div class="sixteen columns">
                        <div class="jx-logo left"><a href="#top"><img style="height:50px;" src="<?php echo $path.'images/event/logo/thumb/'.$event_details['event_logo_img']; ?>" alt=""></a></div>
                        <nav class="jx-menu right">
                            <div id="jx-main-menu" class="main-menu">
                                <ul>
                                    <?php 
                                    $dropdown_start = false;
                                    $i=0;
                                    $limit = 6;
                                    foreach ($navArray as $key => $value)
                                    {
                                        if($i<$limit)
                                        {
                                            if(isset($value['check']) )
                                            {
                                                if( !empty($value['check']))
                                                {
                                                    echo '<li><a  href="#'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                  $i++;
                                                }
                                            }
                                            else
                                            {
                                                    echo '<li><a  href="#'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                    $i++;
                                            }

                                        }
                                        else
                                        {
                                            
                                            if($i==$limit && !isMobile() )
                                            {
                                                $dropdown_start = true;
                                                echo '<li><a>More +</a>
                                                <ul class="submenu">
                                                
                                                ';

                                                
                                                if(isset($value['check'])){
                                                    if( !empty($value['check']) ){
                                                        echo '<li><a  href="#'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                      $i++;
                                                    }
                                                }
                                                else
                                                {
                                                        echo '<li><a  href="#'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                        $i++;
                                                }

                                            }
                                            else
                                            {

                                                if(isset($value['check']) )
                                                {
                                                    if( !empty($value['check']) )
                                                    {
                                                        echo '<li><a  href="#'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                      $i++;
                                                    }
                                                }
                                                else
                                                {
                                                    echo '<li><a  href="#'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                    $i++;
                                                }
                                            }
                                        }

                                    }

                                    if($dropdown_start)
                                        echo '</ul></li>';
                                  
                            ?>
                                </ul>
                            </div>
                            
                        </nav>
                    </div>
                    <!-- EOF columns -->
                </div>
            </div>        
        </header>     
        <!-- EDF Header -->
        
        
        <?php 
        $startdate = strtotime($event_details["event_date"]);
        $starttime = $event_details['event_start_time'];
        $enddate =  strtotime($event_details["event_end_date"]);            
        $datediff = $enddate - $startdate;
        $days=floor($datediff/(60*60*24));
        if($days>1){
            $dateSpan=date("jS", strtotime($event_details["event_date"])) .' - '. date("jS", strtotime($event_details["event_end_date"]));
        }else{
            $dateSpan=date("jS", strtotime($event_details["event_date"]));
        }
        ?>
        
        <div id="home" class="jx-main-slider">
        
        	<div class="flexslider">
            	<ul class="slides">
                	<li class="jx-parallax-fullwidth" style="background-image:url('<?php echo $path.'images/event/cover/facebook/thumb/'.$event_details['event_cover_img'];?>');background-size:cover;">                    
                    
                    	<div class="jx-event-slide">                        	
                            <div class="jx-slider-content">
                            	<div class="container">
                                    <div class="jx-event-box">
                                        <div class="jx-event-date">
                                            <div class="jx-event-day">
                                                <?php 
                                                    if($days>1){
                                                        echo date("d", strtotime($event_details["event_date"]));?><span>- <?php echo
                                                         date("d", strtotime($event_details["event_end_date"]));?></span>
                                                         <?php
                                                    }else{
                                                        echo date("d", strtotime($event_details["event_date"]));
                                                    }
                                                ?>
                                            </div>
                                            <div class="jx-event-month jx-uppercase"><?php echo date("M Y", strtotime($event_details["event_date"])); ?></div>
                                        </div>
                                        <div class="jx-event-title-box">
                                            <div class="jx-event-pretitle"><?php echo $event_details['event_name']?></div>
                                            <!-- <div class="jx-event-title">Wordpress and Hackers</div> -->
                                            <div class="jx-event-location"><?php echo $location['address']; ?></div>
                                            <div id="about-tagline"></div>
                                        </div>
                                    
                                    </div> 
                                </div>
                                
                                <div class="jx-right-vertical-border">
                                    <div class="jx-date">
                                        <div class="jx-slider-day"><?php echo date("jS", strtotime($event_details["event_date"]));?></div>
                                        <div class="jx-slider-month jx-uppercase"><?php echo date("M", strtotime($event_details["event_date"])); ?></div>
                                    </div>
                                </div>
                                
                            </div>
                    	</div>            	            
                        
                    </li>
                    <!--item 01 -->
                    
                   
                    <li class="jx-parallax-fullwidth" style="background-image:url('<?php echo $path.'images/event/cover/facebook/thumb/'.$event_details['event_cover_img'];?>'); background-size:cover;">                   
                    
                    	<div class="jx-event-slide">                        	
                            <div class="jx-slider-content">
                            	<div class="container">
                                    <div class="jx-event-box">                                    
                                        
                                        <div class="jx-event-date" style="vertical-align:middle;">
                                            <div class="jx-event-day">
                                            <?php 
                                                if($days>1){
                                                    echo date("d", strtotime($event_details["event_date"]));?><span>- <?php echo
                                                     date("d", strtotime($event_details["event_end_date"]));?></span>
                                                     <?php
                                                }else{
                                                    echo date("d", strtotime($event_details["event_date"]));
                                                }
                                            ?>
                                            </div>
                                            <div class="jx-event-month jx-uppercase"><?php echo date("M Y", strtotime($event_details["event_date"])); ?></div>
                                        </div>
                                        
                                        <div class="jx-event-title-box">
                                            <div class="jx-event-pretitle"><?php echo $event_details['event_name'] ?></div>
                                            <!--<div class="jx-event-title">Wordpress and Hackers</div>-->
                                            <div class="jx-event-countdown">
                                                <div class="jx-countdown">
                                                    <div class="dsb-theme-wrapper countdown">
                                                        <div class="dsb-theme">
                                                            <div class="counter-wrapper">
                                                                <ul>
                                                                    <li>
                                                                        <div class="days count">00</div>
                                                                        <div class="textDays count-text">Days</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="hours count">00</div>
                                                                        <div class="textHours count-text">Hours</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="minutes count">00</div>
                                                                        <div class="textmins count-text">Mins</div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="seconds count">00</div>
                                                                        <div class="textSecs count-text">Secs</div>
                                                                    </li>
                                                                </ul>
                                                                <div class="jC-clear"></div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div> 
                                </div>
                                <div class="jx-right-vertical-border">
                                    <div class="jx-date">
                                        <div class="jx-slider-day"><?php echo date("jS", strtotime($event_details["event_date"]));?></div>
                                        <div class="jx-slider-month jx-uppercase"><?php echo date("M", strtotime($event_details["event_date"])); ?></div>
                                    </div>
                                </div>
                                
                            </div>
                    	</div>            	            
                        
                    </li>
                    <!--item 02 -->
                </ul>
                <!-- BOF Bottom Info Bar -->
                <div class="jx-slider-bottom-info">
                    <div class="container">
                        <ul style="padding: 15px 0px 0px !important;">
                            <li class="col-lg-3">
                                <div class="jx-info-icon"><i class="line-icon icon-calendar"></i></div>
                                <div class="jx-info-content">
                                    <div class="info-title">DATE</div>
                                    <div class="info-description"><?php echo $dateSpan; ?> <?php echo date("M Y", strtotime($event_details["event_date"])); ?></div>
                                </div>
                            </li>
                            <!-- Item 01 -->
                            
                            <li class="col-lg-6">
                                <div class="jx-info-icon"><i class="line-icon icon-location"></i></div>
                                <div class="jx-info-content">
                                    <div class="info-title">LOCATION</div>
                                    <div class="info-description"><?php echo $location['address']; ?></div>
                                </div>
                            </li>
                            <!-- Item 02 -->
                            
                            <li class="col-lg-3">
                                <div class="jx-info-icon"><i class="line-icon icon-clock"></i></div>
                                <div class="jx-info-content">
                                    <div class="info-title">Starts At</div> 
                                    <div class="info-description"><?php echo date('h:i a', strtotime($starttime)); ?></div>
                                </div>
                            </li>
                            <!-- Item 04 -->
                        </ul>
                    </div>
                </div>
                <!-- EOF Bottom Info Bar -->
            </div>
            <!-- EOF Slexslider -->
        </div>
    
    </div>    
    <!-- BOF Slider -->