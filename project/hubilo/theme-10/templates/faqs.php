<?php if($mainvalue["data"])
{
$list=$mainvalue["data"]; ?>
<!-- FAQ -->
<section id="<?php echo $mainvalue["href"];?>" class="section">
    <div class="container">

        <!-- Title -->
        <div class="title large">
          <span>0<?php echo $n;?></span>
          <h1 class="uppercase"><?php echo $mainvalue["sname"];?></h1>
          <p class="subtitle"></p>
        </div>
        <?php 
            if(trim($mainvalue["tagline"]))
            {
            ?>
            <div class="c-12 tag_line"><span><?php echo $mainvalue["tagline"]; ?></span></div>
        <?php }?>

                    
        <div class="row">
            <?php 
                    $i=0;
                    $j=1;
                    foreach ($list as $key => $value) { 
                ?>
            <!-- toggle -->
            <dl class="toggle">
                <dt>
                    <a href=""><?php echo $value["faq_question"]; ?></a>
                </dt>
                <dd>
                    <p><?php echo $value["faq_answer"]; ?></p>
                </dd>
            </dl>    
            <!-- EOF Accordion -->    
            <?php $j++;}
                include('templates/customButton.php');                  
            ?>
        </div>
        
   
    </div>
<!-- EOF Container -->
</section>
<?php } ?>
<!-- EOF FAQ -->        