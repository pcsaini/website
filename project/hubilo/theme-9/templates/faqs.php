<?php if($mainvalue["data"])
{
$list=$mainvalue["data"]; ?>
<!-- FAQ -->
        <div class="jx-container jx-padding" id="<?php echo $mainvalue['href'];?>">
        	<div class="container">
            	<div class="sixteen columns">
               		<div class="jx-faq">
                	<div class="jx-faq-head">
                    	<div class="jx-faq-title">FAQ</div>
                    </div>
                    <!-- Title Section -->
                    <div class="row"></div>
                    <?php 
                        if(trim($mainvalue["tagline"]))
                        {
                        ?>
                            <div class="col-lg-12 tag_line"><h3><?php echo $mainvalue["tagline"];?></h3></div>
                        <?php
                    }
                    ?>
                
                <?php 
                        $i=0;
                        $j=1;
                        foreach ($list as $key => $value) { 
                    ?>
                <!-- Accordion -->
                <div class="jx-accordion">                  
                    <div id="accordion-13" data-accordion-group>
                        <div data-accordion class="head">
                            <div class="title" data-control>Q<?php echo $j;?>: <?php echo $value["faq_question"]; ?></div>
                            <!-- According Title -->
                            <div data-content>
                            <div class="description"><?php echo $value["faq_answer"]; ?></div>
                            </div>
                            <!-- According Content -->
                            <div class="accordion-border"></div>
                        </div>                                 
                    </div>
                </div>
                <!-- EOF Accordion -->    
                <?php $j++;}
                    include('templates/customButton.php');                  
                ?>
                    
                    
                </div>                
                </div>
            </div>
            <!-- EOF Container -->
        </div>
        <!-- EOF FAQ -->
<?php } ?>        