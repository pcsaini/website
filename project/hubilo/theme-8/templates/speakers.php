<!-- Speaker section   -->
<?php
if($mainvalue["data"])
{
    $list = $mainvalue["data"];
    $speakerCount=count($list);
    $speaker_left=($speakerCount%4);
    if($speaker_left != 0 ){
        $speakerSpanActive=1;
    }else{
        $speakerSpanActive=0;
    }
    ?>
    <div class="top-speakers-section" id="section-<?php echo $mainvalue["href"];?>">
        <div class="container">
            <h2><?php echo $mainvalue["sname"];?></h2>
            <?php 
                    if(trim($mainvalue["tagline"]))
                    {
                    ?>
                        <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
                    <?php
                }
                ?>
            <?php $i=0;
            foreach($list as $key => $val)
            {

                $liClass="col-lg-3 col-xs-12";
                $speaker_margin ='';
                if($speakerSpanActive && $speakerCount == $speaker_left)
                {
                    if($speakerCount == 3){
                        $liClass="col-lg-3 col-lg-offset-1 col-xs-12 ";

                    }elseif($speakerCount == 2){
                        $liClass="col-lg-3 col-lg-offset-3 col-xs-12";

                    }elseif($speakerCount == 1){
                        $liClass="col-lg-3 col-lg-offset-4 col-xs-12";

                    }
                }
                if($i%4==0)
                {
                    echo '<div class="row">';
                }
                ?>
                <div class="<?php echo $liClass;?>">
                    <div class="box">
                        <div class="inner-box">
                            <div class="frame"><img src="<?php echo $path.'/images/speaker/profile/thumb/'.$val["speaker_profile_img"] ?>" alt="img09"/>
                                <div class="name-box"><strong class="name"><?php echo $val["title_name"]; ?> <?php echo $val["speaker_name"];?></strong></div>

                            </div>
                            <p class="description"><?php echo $val["speaker_description"];?></p>
                            <div class="caption"> <strong class="name"><?php echo $val["title_name"]; ?>
                                    <?php echo $val["speaker_name"]; ?></strong>
                                <p><?php echo $val["speaker_description"];?></p>
                                    

                                <a class="btn-style-1" href="#speaker-modal-<?php echo $i; ?>" data-toggle="modal">
                                    View Detail </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                if(($i+1)%4==0 || $speakerCount==1){
                    echo'</div>';
                }

                $i++;
                $speakerCount--;
            }
            ?>
            <?php include('templates/customButton.php'); ?>
        </div>
        <!-- Modals -->
        <?php $i=0; foreach($list as $key => $val){ ?>
            <?php include('templates/speakers-modal.php'); ?>
            <?php $i++;} ?>
    </div>
<?php } ?>
<!-- /Speaker section   -->