<!-- Footer -->
<footer class="dark">
  <div class="container">
    <div class="row">
      <div class="copyright">

        
        <div class="c-6 ">
          <!-- Social Icons -->
          <nav class="social-icons">
            <?php if($event_details['event_fb']){ ?>
            <a href="<?php echo $event_details['event_fb']; ?>" class="fa fa-facebook btn"></a>
            <?php } ?> 
            <?php if($event_details['event_twitter']){ ?> 
            <a href="<?php echo $event_details['event_twitter']; ?>" class="fa fa-twitter btn"></a>
            <?php } ?> 
            <?php if($event_details['event_blog_website']){ ?>
            <a href="<?php echo $event_details['event_blog_website'] ?>" class="fa fa-google-plus btn"></a>
            <?php } ?> 
          </nav>
          <!-- End Social Icons -->
        </div>

         <div class="c-6 align-right">
          <a href="http://hubilo.com/" style="color:white !important;">Powered By <img src="images/hubilo-logo.png"/> Hubilo</a>
        </div>

      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->