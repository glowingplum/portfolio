

        <section class="case-studies">
            <inner-column>

                <?php include('projects-data.php'); ?>
    
                <?php
 
                    function buildCaseStudy($key,$title,$intro,$par1,$par2,$logo,$img1,$img2) {
                ?>  

                <div>
                    <h2 class="intro-voice">Case Study: <?=$title?></h2>
                </div>
    

    
                <section class="case-wrapper" id="<?=$key?>">
    
                    <flex-wrapper class="case-head">
                        <picture data-aos="fade-up">
                            <img src="<?=$logo?>" alt="">
                        </picture>
                        <div class="case-intro" data-aos="fade-up" data-aos-duration="1500">
                            <p class="calm-voice">
                                <?=$intro?>
                            </p>
                        </div>
    
                    </flex-wrapper>
    
                <?php if ( $par1 ) { ?>
    
                    <flex-wrapper class="case-main1">
                        <picture data-aos="fade-up">
                            <img src="<?=$img1?>" alt="">
                        </picture>
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <p class="calm-voice"><?=$par1?></p>
                        </div>
                    </flex-wrapper>
    
                <?php } ?>
    
                <?php if ( $par2 ) { ?>
    
                    <flex-wrapper class="case-main2">
                        <picture data-aos="fade-up">
                            <img src="<?=$img2?>" alt="">
                        </picture>					
                        <div data-aos="fade-up" data-aos-duration="1500">
                            <p class="calm-voice"><?=$par2?></p>
                        </div>
                    </flex-wrapper>		
                    
                <?php } ?>
                </section>		
    
                <?php } ?>
                
                <?php buildCaseStudy(
					$projectsData[0]["key"],
                    $projectsData[0]["title"],
					$projectsData[0]["intro"],
					$projectsData[0]["par1"],
					$projectsData[0]["par2"],
					$projectsData[0]["logo"],
					$projectsData[0]["img1"],
					$projectsData[0]["img2"]
                ); ?>
              
    
            </inner-column>
        </section>

		<section class="contact" id="contact">
			<inner-column>
				
				<h2 class="intro-voice">Contact</h2>
				<p class="calm-voice">
					What should I build for you? Did you like what you just saw? No? Either way, let me know!</p>

				<a href="contact.html" target="_blank" class="button-primary">Contact Now</a>

			</inner-column>
		</section>        