<?php

        /*for merging text into section*/
        if($mainvalue['dataCustom'])
		{
            foreach ($mainvalue['dataCustom'] as $key => $value)
			{
                if($value['action']=='section'){
                    echo'<div class="row">
                   		<div class="entry-contents">
                            <div class="c-12">
                                '.$value['file_name'].'
                            </div>
                        </div>
					</div>';
                }
            }
        }?>


        
        <div class="c-12" style="text-align: center; cursor:pointer;">
        <?php
        if($mainvalue['dataCustom'])
		{
			$customText_list	=	$mainvalue['dataCustom'];
			$customText_count	=	count($customText_list);
           
			$i = 0;
            foreach ($mainvalue['dataCustom'] as $key => $value) 
			{

                if($value['action']=='text')
				{ ?>
					<div class="accordin-toggle">
						<dl class="toggle" style="padding: 1%;">
							<dt>
								<a href="#customText_btn_<?php echo $i ; ?>">
									<?php echo strtoupper($value["button_name"]); ?>
								</a>
							</dt>
							<dd id="customText_btn_<?php echo $i ;?>"><?php echo $value["file_name"]; ?></dd>
						 </dl>
					</div>
						
                <?php  }
        	$i++;
        	$customText_count--;
        	}
            
   		}?>
   		</div>

   		<?php


        /*for all the buttons*/
        if($mainvalue['dataCustom'])
		{
		 	$custombtn_list		=	$mainvalue['dataCustom'];
			$custombtn_count	=	count($custombtn_list);
              
		 echo'<div class="c-12" style="padding-bottom:3%;padding-top:2%"><ul class="btn_list">';
					
			$k = 0;
           foreach ($mainvalue['dataCustom'] as $key => $value) 
		   {


			    if($value['action']=='file')
				{
					echo'<li>
                       <a href="' . $path . '/custom_files/'.$value['file_name'].'" target="_blank" class="btn medium">'.$value['button_name'].'</a>
						</li>';
				}
                if($value['action']=='link')
				{
					echo'<li>
						<a href="'.$value['file_name'].'" target="_blank" class="btn medium">'.$value['button_name'].'</a></li>
					';
				}
			}
				echo '</ul></div>';
					
			}
        ?>
<!-- /Custom Btton section -->