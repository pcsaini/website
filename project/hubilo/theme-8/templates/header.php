<!--Header Start-->
  <header id="header">
    <div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo-box"> <a href="#banner" class="logo smoothScroll"><img src="<?php echo $path.'images/event/logo/thumb/'.$event_details['event_logo_img']; ?>" alt=""/></a> </div>
          </div>
          <div class="col-md-8">
            <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Conferences <span>WP THEME</span></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div class="collapse navbar-collapse" id="navbar">
                <ul id="nav" class="nav navbar-nav">
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
                                                echo '<li><a class="smoothScroll" href="#section-'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                $i++;
                                            }
                                        }
                                        else
                                        {
                                            echo '<li><a class="smoothScroll" href="#section-'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                            $i++;
                                        }

                                    }
                                    else
                                    {

                                        if($i==$limit && !isMobile() )
                                        {
                                            $dropdown_start = true;
                                            echo '<li><a  data-toggle="elementscroll">More +</a>
                                    <ul class="sub-menu">';

                                            if(isset($value['check'])){
                                                if( !empty($value['check']) ){
                                                    echo '<li><a class="smoothScroll" href="#section-'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                    $i++;
                                                }
                                            }
                                            else
                                            {
                                                echo '<li><a class="smoothScroll" href="#section-'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                $i++;
                                            }

                                        }
                                        else
                                        {

                                            if(isset($value['check']) )
                                            {
                                                if( !empty($value['check']) )
                                                {
                                                    echo '<li><a class="smoothScroll" href="#section-'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                    $i++;
                                                }
                                            }
                                            else
                                            {
                                                echo '<li><a class="smoothScroll" href="#section-'.$value['href'].'" target="_parent">'.$value['name'].'</a></li>';
                                                $i++;
                                            }
                                        }
                                    }

                                }

                                if($dropdown_start)
                                    echo '</ul>';

                                ?>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Header End-->
