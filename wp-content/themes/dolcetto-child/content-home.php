<?php 
/**
 * 
 * @package Dolcetto
 */
?>
<div class="mainContainer">
	<div class="slider">
		<?php echo do_shortcode('[smartslider3 slider=1]'); ?>	
	</div>
	<div class="content">
		<div class="wrapper">
			<h2>Dolcetto</h2>
			<h3>creative studio</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit vulputate, vehicula nisi vitae, lobortis antes raesent sodales iaculis ultricies</p>
			<div class="col-services">
				<div class="one-service">
					<a href="#"><i class="icon-graduation-cap"></i></a>
					<a href="#"><h4>experience</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at purus vulputate, vehicula nisi vitae, lobortis ante.</p>
				</div>
				<div class="one-service">
					<a href="#"><i class="icon-codeopen"></i></a>
					<a href="#"><h4>communication</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at purus vulputate, vehicula nisi vitae, lobortis ante.</p>
				</div>
				<div class="one-service">
					<a href="#"><i class="icon-desktop"></i></a>
					<a href="#"><h4>technologies</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at purus vulputate, vehicula nisi vitae, lobortis ante.</p>
				</div>
				<div class="one-service">
					<a href="#"><i class="icon-file-code"></i></a>
					<a href="#"><h4>commitment</h4></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at purus vulputate, vehicula nisi vitae, lobortis ante.</p>
				</div>								
			</div>
		</div>
	</div>
	<div class="portfolio">
		<h2>want to find diversified portfolio?</h2>
		<p>Here is the place to find them!</p>
		<hr>
		<div class="blog-posts">
			<div id="MixItUp2CC89D" class="blog-posts-wrapp">
				<div class="wrapper">
					<?php echo do_shortcode('[tlpportfolio layout="1" number="6"]'); ?>
				</div>
			</div>
		</div>
		<div class="view-portfolio">
			<div class="wrapper-portfolio">
				<h3>Do You Like What You See? View All Of Our Work</h3>
				<a href="/portfolio/">view portfolio</a>
			</div>
		</div>
	</div>
	<div class="team">
		<h2>meet our cool team</h2>
		<p>They alreade some cool guys!</p>
		<hr>
		<div class="block-team">
			<div class="slider-team owl-theme">
				<div class="owl-wrapper-outer">
					<div class="owl-wrapper">
						<?php  echo do_shortcode('[team-free id="61" ]'); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clients">
		<h2>Some of our clients</h2>
		<p>We love every single one</p>
		<hr>
		<div class="wrapper">
			<div class="slider-clients owl-theme">
				<div class="owl-wrapper-outer">
					<div class="owl-controls clickable">
						<?php echo do_shortcode('[logoshowcase]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="mainContainer">
	<div class="content">
		<div class="wrapper">
			<div class="content-container pagehomef">
				<div class="articles-container">
					<div class="article">
						<div class="article-text singlepost">
							<div class="text">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->