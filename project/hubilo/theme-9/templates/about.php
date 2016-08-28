
<!-- BOF Services Box -->
<div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding">
    <div class="container">
        <div class="jx-section-title-1">
            <div class="jx-pre-title">
                <div class="jx-title-border left"></div>
                <div class="jx-title-icon"><i class="line-icon icon-diamond"></i></div>
                <div class="jx-title-border right"></div> 
            </div>
            <div class="jx-title"><?php echo $mainvalue["sname"];?></div>
        </div>
        <div class="row">
        <div class="container">
        <?php 
            if(trim($mainvalue["tagline"]))
            {
            ?>
                <div class="col-lg-12 tag_line"><h3><?php echo $mainvalue["tagline"];?></h3></div>
            <?php
        }
        ?>
            <div class="jx-subtitle" style="padding-left: 20px !important;"><p><?php echo $event_details['event_description']; ?></p></div>
        </div>
        </div>
        <?php include('templates/customButton.php'); ?>    
    </div>
    <!-- EOF container -->
    
    
</div>                
<!-- EOF Services Box -->
<?php include_once('templates/event-highlights.php');
?>