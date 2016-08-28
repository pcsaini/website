<footer class="jx-footer-section jx-default-bg jx-container">
        <div class="container">
            <div class="sixteen columns">
                <div class="jx-footer-social">
                    <ul>
                        <?php if($event_details['event_fb']){ ?>
                        <li><a href="<?php echo $event_details['event_fb']; ?>">
                          <div class="hexagon-social social-color-1"><i class="fa fa-facebook"></i></div></a>
                        </li>
                      <?php } ?> 
                      <?php if($event_details['event_twitter']){ ?> 
                        <li><a href="<?php echo $event_details['event_fb']; ?>">
                          <div class="hexagon-social social-color-2"><i class="fa fa-twitter"></i></div></a>
                        </li>
                      <?php } ?> 
                      <?php if($event_details['event_blog_website']){ ?>
                        <li><a href="<?php echo $event_details['event_blog_website'] ?>">
                          <div class="hexagon-social social-color-3"><i class="fa fa-google-plus"></i></div></a>
                        </li>
                      <?php } ?>   
                    </ul>
                </div>
                
                <div class="jx-footer-copyright">
                    <a href="http://hubilo.com/">Powered By <img src="images/hubilo-logo.png"/> Hubilo</a>
                </div>
            </div>
        </div>  
    </footer>
     
    <!-- EOF Footer -->
    
        
    <!-- Footer -->