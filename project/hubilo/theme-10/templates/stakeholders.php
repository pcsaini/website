
<?php if($mainvalue["data"]){ 
    $stakeholder_list = $mainvalue["data"];
    $stakeCount=count($stakeholder_list);
    $i=0;
?>
<div id="<?php echo $mainvalue["href"];?>" class="section">
    <div class="container">
        
        <!-- Title -->
	    <div class="title large">
	      <span>0<?php echo $n;?></span>
	      <h1 class="uppercase">Stakeholders</h1>
	      <p class="subtitle"></p>
	    </div>
	    <!-- End Title -->
	    <?php 
			if(trim($mainvalue["tagline"]))
			{
			?>
			<div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
		<?php }?>
    		
		<div class="c-12" style="text-align: center; cursor:pointer;">
			<!-- FAQ item -->
			<?php 
				$i=0;
				$j=0;
				foreach ($stakeholder_list as $key => $value) 
				{ ?>
				<div class="accordin-toggle">
					<dl class="toggle" style="padding: 1%;">
						<dt>			
							<a href="#stakeholder-<?php echo $i; ?>">
								<?php echo $value["stakeholder_name"]; ?>
							</a>
						</dt>
						<dd id="stakeholder-<?php echo ($i++); ?>">
							<?php echo $value["stakeholder_description"]; ?>
						</dd>
					</dl>
				</div>	
				<?php
             $j++;
           } 
			include('templates/customButton.php');?>
			<!-- /FAQ item -->
		<!-- /FAQ list -->
		</div>
	</div>
</div>
<?php } ?>