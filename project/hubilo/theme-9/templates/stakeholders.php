
<?php if($mainvalue["data"]){ 
    $stakeholder_list = $mainvalue["data"];
    $stakeCount=count($stakeholder_list);
    $i=0;
?>
<div id="<?php echo $mainvalue["href"];?>" class="jx-container jx-padding jx-grey-bg">
    <div class="container">
        
        <div class="jx-section-title-1">
            <div class="jx-pre-title jx-short-border">
                <div class="jx-title-border left"></div>
                <div class="jx-title-icon"><i class="line-icon icon-paper-plane"></i></div>
                <div class="jx-title-border right"></div> 
            </div>
            <div class="jx-title jx-uppercase">Stakeholders</div>
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
		<div class="col-lg-12 schedule-list">
			<!-- FAQ item -->
			<div class="row" style="text-align: center; cursor:pointer;">
			<?php 
				$i=0;
				$j=0;
				foreach ($stakeholder_list as $key => $value) 
				{ ?>
				<div id="customText" class="jx-servicebox-2" style="display:inline-table;">
					<dl class="service-title" id="custom_button" style="">
						<dt style="text-align:center !important; color: #fff !important;
						font-size: 18px !important; padding:10px;" onclick="$('#stakeholder-<?php echo $i; ?>').slideToggle(400); $(this).toggleClass('faq-open')" class="customText-listing">			<?php echo $value["stakeholder_name"]; ?>
							
						</dt>
						<dd id="stakeholder-<?php echo ($i++); ?>" class="custom_content" style="text-align:left !important; color:#fff !important;display:none;"><?php echo $value["stakeholder_description"]; ?></dd>
					 </dl>
				</div>
				
				<?php	  
           		} 
				include('templates/customButton.php');?>
			<!-- /FAQ item -->
		</div></div>
	</div>
</div>
<?php } ?>