<!-- Social Section   -->
<?php
    $twitter_display = false;
    $facebook_display = false;

if($event_details['event_twitter'] || $event_details['event_fb'])
{ ?>
        <Section class="section grey" id="section-blog">
        	<div class="container">
            <?php 
                    if(trim($mainvalue["tagline"]))
                    {
                    ?>
                    <div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
                <?php }?>
                    
                <div class="row">

                    <!-- blog-item -->
                    <?php if($event_details['event_twitter'])
                    { 
                        $arr= explode('.com/', $event_details['event_twitter']);
            
                        if(count($arr)==2)
                        {
                            $twitterHandle=$arr[1];
                            $twitterHandle=rtrim($twitterHandle,'/');
                            
                            if(trim($event_details['event_fb'])&&trim($event_details['event_hashtag']))
                            {
                                $spantw='c-4';
                                 $twitter_display = true;
                            }
                            elseif(trim($event_details['event_fb'])||trim($event_details['event_hashtag']))
                            {
                                $spantw='c-6';
                                 $twitter_display = true;
                            }
                            else
                            {
                                $spantw='c-12';
                                 $twitter_display = true;
                            }
                          
                        } 
                    }
                    
                    if($twitter_display == true)
                    { 
                    ?>
                
                    <div class="<?= $spantw;?>" style="text-align:center">
                        <div class="">
                            <a class="twitter-timeline" style="margin-top: 10px !important;" href="<?php $event_details['event_twitter'];?>" data-widget-id="661486332787580928"  data-screen-name="<?php echo $twitterHandle ?>" width="350" height="400" data-chrome="noborders">Tweets by @<?php echo $twitterHandle ?>
                            </a>
                        
                        <script type="text/javascript">
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                        </script>
                        </div>
                    </div>
                    <?php 
                    } ?>
                    
                    <!-- Item # 1 -->
                    <!-- /blog-item -->
                    <?php if($event_details['event_fb'])
                    { 
                        $arr2= explode('.com/', $event_details['event_fb']);

                        if(count($arr2) == 2)
                        {
                            $fbHandle=$arr2[1];
                            $fbHandle=rtrim($fbHandle,'/');
                            if(trim($event_details['event_twitter'])&&trim($event_details['event_hashtag'])){
                                $spanfb='c-4';
                                 $facebook_display = true;
                            }
                            elseif(trim($event_details['event_twitter'])||trim($event_details['event_hashtag'])){
                                $spanfb='c-6';
                                 $facebook_display = true;
                            }
                            else
                            {
                                $spanfb='c-12';
                                 $facebook_display = true;
                            }
                        }
                    }
                    if( $facebook_display == true)
                    { ?>
                        
                        <div class="<?= $spanfb;?>" style="text-align:center;">
                           <div class="">
                                <div class="fb-page" data-href="<?= $event_details['event_fb'];?>"width="350" height="405"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true">
                                    <div class="fb-xfbml-parse-ignore">
                                        <blockquote cite="<?= $event_details['event_fb'];?>">
                                            <a href="<?= $event_details['event_fb'];?>"
                                                <?php echo $fbHandle ?> >
                                            </a>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <script src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.2" async></script>  
                        
                    <?php 
                    } ?>

                    <?php 
                    if(trim($event_details['event_twitter']) && trim($event_details['event_hashtag'])){
                        $spantxt='c-4';
                    }else{
                        $spantxt='c-6';
                    }
                    ?>    
                    
                    <!-- Item # 2 -->
                    <div class="<?= $spantxt;?> social_text" style="padding-top:14%;text-align: center;color: #A1B1BC;font-size: 28px;  line-height: 38px;">
                    To stay updated,</br>
                    follow <?php echo $event_details['event_hashtag']?>
                    </div>
                    
                    
                    <!-- Item # 3 -->
                
                </div>
                
                <div class="row"></div>
                <div class="row"></div>
                
                
                <!-- Read More Button -->
                <?php include('templates/customButton.php'); ?>
            </div>        
        </Section>
		<!-- EOF MEDIA CENTER -->
        <?php } ?>