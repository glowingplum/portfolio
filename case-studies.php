	<section class="case-studies" id="projects">
		<inner-column>
			
			<div>
				<h2 class="intro-voice">Projects</h2>

				<p class="calm-voice">
					From extensive to detailed requests, explore the projects I had the privilege to work on.
				</p>
			</div>

			<?php include('projects-data.php'); ?>

			<?php
				function buildCaseStudy($key,$title,$intro,$par1,$par2,$logo,$img1,$img2) {
			?>

			<section class="case-wrapper" id="<?=$key?>">

				<h3 class="small-intro-voice case-title" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-back"><?=$title?></h3>

				<flex-wrapper class="case-head">
					<picture data-aos="fade-up">
						<img src="<?=$logo?>" alt="">
					</picture>
					<div class="case-intro" data-aos="fade-up">
						<p class="calm-voice">
							<?=$intro?>
							<?php if ($par1) { ?>
							<br><a class="invite-voice" href='?page=<?=$key?>'><span>→ Read case study</span></a>
							<?php } ?>
						</p>
					</div>

				</flex-wrapper>

			</section>

			<?php } ?>

			<?php foreach ($projectsData as $project) {

				buildCaseStudy(
					$project["key"],
					$project["title"],
					$project["intro"],
					$project["par1"],
					$project["par2"],
					$project["logo"],
					$project["img1"],
					$project["img2"]
				);



			}

			?>

		</inner-column>
	</section>