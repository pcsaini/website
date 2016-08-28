<!-- Header Section -->
    <header>
      <!-- Logo -->
      <div class="logo">
        <a href="#content" class="scroll"><img src="<?php echo $path.'images/event/logo/thumb/'.$event_details['event_logo_img']; ?>" style="height:60px;" alt=""></a>
      </div>
      <!-- End Logo -->

      <a href="#" class="icon-trigger"><span class="burger"></span></a>

      <!-- Navigation -->
      <div class="navigation-container">
        <nav>
          <ul class="nav-inner simple">
          <?php 
            $i=0;
            foreach ($navArray as $key => $value)
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
          ?>
          </ul>
        </nav>
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
      <!-- End Navigation -->

    </header>
<!-- /Header Section -->
