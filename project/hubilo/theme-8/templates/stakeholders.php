
<?php if($mainvalue["data"]){ 
    $stakeholder_list = $mainvalue["data"];
    $stakeCount=count($stakeholder_list);
    $i=0;
?>
<div class="program-section" id="<?php echo 'section-'.$mainvalue["href"]; ?>">
    <div class="container">
        <!-- Section title -->
        <h2>Stakeholders</h2>               
        <!-- /Section title -->
        <?php 
            if(trim($mainvalue["tagline"]))
            {
            ?>
                <div class="col-lg-12 tag_line"><h3 style="float:left"><?php echo $mainvalue["tagline"];?></h3></div>
            <?php
        }
        ?>
        <!-- FAQ list -->
        
        <div class="col-lg-12 schedule-list">
            <!-- FAQ item -->
            <div class="col-lg-12" style="text-align: center; padding:10px;">
            <?php 
            $i=0;
            $j=0;
            foreach ($stakeholder_list as $key => $value) 
            { ?>  
                <div id="customText" class="custom_btn schedule-item-content" style="display:inline-table; margin: 10px 30px;">
                    <dl class="customText" id="custom_button" style="padding: 1%;">
                        <dt style="text-align:center !important;" onclick="$('#stakeholder-<?php echo $i; ?>').slideToggle(400); $(this).toggleClass('faq-open')" class="customText-listing">           
                            <?php echo $value["stakeholder_name"]; ?>
                        </dt>
                        <dd id="stakeholder-<?php echo ($i++); ?>" class="custom_content"><?php echo $value["stakeholder_description"]; ?></dd>
                     </dl>
                </div>

            <?php $j++; } 
            include('templates/customButton.php');?>
            <!-- /FAQ item -->
            </div>
        </div>    
        <!-- /FAQ list -->
        
    </div>
</div>
<?php } ?>
       