<!-- Social Section   -->
<?php
    $twitter_display = false;
    $facebook_display = false;

if($event_details['event_twitter'] || $event_details['event_fb'])
{ ?>
<div class="jx-container jx-padding jx-black" id="section-blog">
    <div class="parallax-no-height jx-tint-black"></div>
    <div class="container">
        <div class="jx-section-title-1 jx-light">
            <div class="jx-pre-title jx-short-border">
                <div class="jx-title-border left"></div>
                <div class="jx-title-icon"><i class="line-icon icon-note"></i></div>
                <div class="jx-title-border right"></div> 
            </div>
            <div class="jx-title jx-uppercase">Social</div>
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
        
        <div class="jx-media-center">

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
                        $spantw='col-lg-4 col-md-4 col-sm-4 social-section';
                         $twitter_display = true;
                    }
                    elseif(trim($event_details['event_fb'])||trim($event_details['event_hashtag']))
                    {
                        $spantw='col-lg-6 col-md-6 col-sm-6 social-section';
                         $twitter_display = true;
                    }
                    else
                    {
                        $spantw='col-lg-12 col-md-12 col-sm-12 social-section';
                         $twitter_display = true;
                    }
                  
                } 
            }
            
            if($twitter_display == true)
            { 
            ?>
        
            <div class="<?= $spantw;?>" style="text-align:center">
                <div class="one-third columns">
                    <a class="twitter-timeline " href="<?php $event_details['event_twitter'];?>" data-widget-id="661486332787580928"  data-screen-name="<?php echo $twitterHandle ?>" width="350" height="405" data-chrome="noborders">Tweets by @<?php echo $twitterHandle ?>
                    </a>
                </div>
                <script type="text/javascript">
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                </script>
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
                        $spanfb='col-lg-4 col-md-4 col-sm-4 social-section';
                         $facebook_display = true;
                    }
                    elseif(trim($event_details['event_twitter'])||trim($event_details['event_hashtag'])){
                        $spanfb='col-lg-6 col-md-6 col-sm-6 social-section';
                         $facebook_display = true;
                    }
                    else
                    {
                        $spanfb='col-lg-12 col-md-12 col-sm-12 social-section';
                         $facebook_display = true;
                    }
                }
            }
            if( $facebook_display == true)
            { ?>
                
                <div class="<?= $spanfb;?>" style="text-align:center;">
                   <div class="one-third columns">
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
                $spantxt='col-lg-4 col-md-4 col-sm-4 social-section';
            }else{
                $spantxt='col-lg-6 col-md-6 col-sm-6 social-section';
            }
            ?>    
            
            <!-- Item # 2 -->
            <div class="<?= $spantxt;?> social_text" style="padding-top:14%;text-align: center;color: #fff;font-size: 28px;  line-height: 38px;">
                To stay updated,</br> follow <?php echo $event_details['event_hashtag']?>
            </div>
            
            
            <!-- Item # 3 -->
        
        </div>
        <?php include('templates/customButton.php'); ?>
        <div class="row"></div>
        <div class="row"></div>
    
    </div>        
</div>
<!-- EOF MEDIA CENTER -->
<?php } ?>