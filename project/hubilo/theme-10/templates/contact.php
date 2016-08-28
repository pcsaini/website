<!-- Contact Section -->
<?php 
$n--;
echo'
        <div id="'.$mainvalue["href"].'" class="section contact-section">
            <div class="container">
                    <!-- Section title -->';
                     $arr=array();
                    if($mainvalue["data"])
                    {
                        $list=$mainvalue["data"];
                        $contactCount=count($list);
                        if($contactCount==1)
                        {
                           $value=$list[0];
                            echo'<div class="title large">
                                    <span>0'.$n.'</span>
                                    <h1 class="uppercase">'.$mainvalue["sname"].'</h1>
                                    <p class="subtitle"></p>
                                </div>';
                        echo '
                        <div class="row">
                        <!---contact Detail--->
                            <div class="c-4">';
                            if($value['purpose_name'])
                            {   
                                echo'
                                <div class="contact-item">
                                    <h3>'.$value['purpose_name'].'</h3>
                                </div>';
                            }
                            if($value['contact_details_name']){

                                echo '
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-profile-male"></i></div>
                                    
                                    <p>'.$value['contact_details_name'].'</p>
                                </div>';
                            }    
                            
                            if($value['contact_details_phone']){

                                echo'
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-phone"></i></div>

                                    <p>'.$value['contact_details_phone'].'</p>
                                </div>';
                            }    

                            if($value['contact_details_emailid']){
                                echo'
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-envelope"></i></div>

                                    <p>'.$value['contact_details_emailid'].'</p>
                                </div>';
                            }

                            if($value['contact_details_address']){
                                echo'
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-map"></i></div>

                                    <p>'.$value['contact_details_address'].'</p>
                                </div>';
                            }

                            if($value['contact_details_check'])
                            {
                              $toemail=$value['contact_details_emailid'];
                                
                            }
                            else
                            {
                                $toemail=$event_details['emailid'];
                                
                            }
                        echo'
                        </div>  
                    <!---/contact Detail--->
                    <div class=" c-8">
                        <div class="contact-item">
                            <h3>Any questions? Drop us a note</h3>
                        </div>    
                        <div class="contact-form1">
                            <form action="#" method="post" class="contact-form"> 
                                <div class="row">
                                    <div class="c-12 nopadding">
                                        <div class="c-6">
                                            <input type="text" id="name" id="mail-name" class="c-12 required" name="name" placeholder="Name *">
                                        </div>
                                        <div class="c-6">
                                            <input type="email" id="email" id="mail-email" class="c-12 required" name="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="c-12">
                                        <input type="text" id="subject" id="mail-subject" class="c-12 required" name="subject" placeholder="Subject *">
                                    </div>
                                    <div class="c-12">
                                        <textarea name="message" id="message" id="mail-message" class="required" placeholder="Message *"></textarea>
                                    </div>

                                    <div class="c-12 align-right">
                                        <div class="c-6 nopadding">
                                            <input type="text" id="captcha" class="captcha required" name="captcha" data-math="5 + 1" placeholder="5 + 1 = ?">
                                        </div>

                                        <div class="c-6 nopadding">
                                            <button type="submit" id="mail-submit" class="btn medium" value="Send">Send</button>
                                        </div>
                                    </div>

                                    <span id="mail-text" style="margin-left:0px"></span>
                                    <input type="hidden" id="organizer-email" value="'.$toemail.'">
                                    <input type="hidden" id="eventName-email" value="'.$event_details['event_name'].'">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                    <!---/Row end--->';
                    }
                    else
                    {
                        echo'
                        <div class=" c-12">
                            <div class="contact-item">
                                <h3>Any questions? Drop us a note</h3>
                            </div> 
                            <div class="contact-form1">
                                <form class="contact-form"> 
                                    <div class="row">
                                        <div class="c-12 nopadding">
                                            <div class="c-6">
                                                <input type="text" id="name" class="c-12 required" name="name" placeholder="Name *">
                                            </div>
                                            <div class="c-6">
                                                <input type="email" id="email" class="c-12 required" name="email" placeholder="Email Address *">
                                            </div>
                                        </div>
                                        <div class="c-12">
                                            <input type="text" id="subject" class="c-12 required" name="subject" placeholder="Subject *">
                                        </div>
                                        <div class="c-12">
                                            <textarea name="message" id="message" class="required" placeholder="Message *"></textarea>
                                        </div>

                                        <div class="c-12 align-right">
                                            <div class="c-6 nopadding">
                                                <input type="text" id="captcha" class="captcha required" name="captcha" data-math="5 + 1" placeholder="5 + 1 = ?">
                                            </div>

                                            <div class="c-6">
                                                <button type="submit" id="send_mail_b" class="btn medium" onclick="send_mail();">Send</button>
                                            </div>  
                                        </div>

                                        <div class="col-lg-12 text-center" style="padding-top:2%;color:red">
                                        <span id="error" class="lead" style="color:red"></span>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>';
                        echo'
                        <!---contact Detail--->
                        <div class="row">
                            <h3 style="font-size: 42px;text-align:center;padding-bottom: 30px;">'.$mainvalue["sname"].'</h3>
                        </div>
                        <div class="row">
                        <div class="c-12">';
                            $i=0;
                            foreach ($list as $key => $value) 
                            {
                                if($i%3==0)
                                {
                                 echo'<div class="row">';
                                 
                                    if($contactCount>3)
                                    {
                                        $n='c-4';
                                    }
                                    else
                                    {
                                        if($contactCount==2){
                                            $n='c-6';
                                        }elseif($contactCount==3){
                                            $n='c-4';                                            
                                        }elseif($contactCount==1){
                                            $n='c-4';
                                        }                                            
                                    }
                                }
                        
                        echo'
                        <div class="'.$n.' main-contact">';
                            if($value['purpose_name'])
                            {   
                                echo'
                                <div class="contact-item">
                                    <h3>'.$value['purpose_name'].'</h3>
                                </div>';
                            }
                            if($value['contact_details_name']){

                                echo '
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-profile-male"></i></div>

                                    <p>'.$value['contact_details_name'].'</p>
                                </div>';
                            }    
                            
                            if($value['contact_details_phone']){

                                echo'
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-phone"></i></div>

                                    <p>'.$value['contact_details_phone'].'</p>
                                </div>';
                            }    

                            if($value['contact_details_emailid']){
                                echo'
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-envelope"></i></div>

                                    <p>'.$value['contact_details_emailid'].'</p>
                                </div>';
                            }

                            if($value['contact_details_address']){
                                echo'
                                <div class="contact-item">
                                    <div class="icon"><i class="icon-map"></i></div>

                                    <p>'.$value['contact_details_address'].'</p>
                                </div>';
                            }

                            if($value['contact_details_check'])
                            {
                              $toemail=$value['contact_details_emailid'];
                                
                            }
                            else
                            {
                                $toemail=$event_details['emailid'];
                                
                            }
                        echo'</div>';
                    
                            if(($i+1)%3==0 || $contactCount==1)
                            {
                                echo '</div>';
                            }
                             
                            $i++; 
                            $contactCount--;
                        }/*foreach loop ends*/ 
                        echo'
                        </div>
                        </div>
                        <!---/contact Detail--->'; 
                        if(count($arr)>0)
                        {
                            $toemail=$arr[0];
                        }
                        else
                        {
                            $toemail=$event_details['emailid'];
                        }
                        
                        echo'
                        <input type="hidden" id="organizer-email" value="'.$toemail.'">
                        <input type="hidden" id="eventName-email" value="'.$event_details['event_name'].'">';

                    }/*contactCount else*/
                }
                
                else
                {
                    echo'
                    <div class="c-12">
                        <div class="contact-item">
                            <h3>Any questions? Drop us a note</h3>
                        </div> 
                        <div class="contact-form1">
                            <form class="contact-form"> 
                                <div class="row">
                                    <div class="c-12 nopadding">
                                        <div class="c-6">
                                            <input type="text" id="name" id="name" class="c-12 required" name="name" placeholder="Name *">
                                        </div>
                                        <div class="c-6">
                                            <input type="email" id="email" class="c-12 required" name="email" placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="c-12">
                                        <input type="text" id="subject" class="c-12 required" name="subject" placeholder="Subject *">
                                    </div>
                                    <div class="c-12">
                                        <textarea name="message" id="message" class="required" placeholder="Message *"></textarea>
                                    </div>

                                    <div class="c-12 align-right">
                                        <div class="c-6 nopadding">
                                            <input type="text" id="captcha" class="captcha required" name="captcha" data-math="5 + 1" placeholder="5 + 1 = ?">
                                        </div>

                                        <div class="c-6">
                                            <button type="submit" id="send_mail_b" class="btn medium" onclick="send_mail();">Send</button>
                                        </div>  
                                    </div>

                                    <div class="col-lg-12 text-center" style="padding-top:2%;color:red">
                                        <span id="error" class="lead" style="color:red"></span>
                                    </div>  
                                    <input type="hidden" id="organizer-email" value="'.$event_details['emailid'].'">
                                    <input type="hidden" id="eventName-email" value="'.$event_details['event_name'].'">
                                </div>
                            </form>
                        </div>
                    </div>';
                }
                include('templates/customButton.php');     
    echo'  
    </div>
</div>';
?>
<!-- /Contact Section -->       