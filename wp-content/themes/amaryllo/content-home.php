<?php 
/**
 * 
 * @package Amaryllo 
 */
?>
<?php while (have_posts()) : the_post(); ?>
<div class="page-content">
	<div class="container margin-top-xl">
		<div class="column-container clearfix">
			<div class="column-12-12 column-md-12-12">
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
<?php endwhile; ?>