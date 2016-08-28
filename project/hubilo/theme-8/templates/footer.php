<!-- Footer  -->
<footer>
    <div class="footer-section-3">
      <div class="container">
            <ul class="footer-social">
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
            <strong class="copy"><a href="http://hubilo.com/">Powered By <img src="images/hubilo-logo.png"/> Hubilo</a>
            </strong>
      </div>
    </div>
</footer>
<!-- Footer  -->