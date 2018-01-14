<?php
/**
 * Template Name: Portfolio
 *
 * @package Dolcetto
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="page-about">
    <div class="mainContainer">
        <div class="top-page">
            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <?php the_post_thumbnail("full"); ?>
            <?php endif; ?>
            <div class="black-opacity"></div>
           <h5 class="subtitle"><?php the_title(); ?></h5>
        </div>
        <div class="content">
        	<div class="wrapper">
        		<h2>want to find diversified portfolio?</h2>
        		<p>Here is the place to find them!</p>
        		<hr>
        	</div>
	    	<div class="blog-posts">
				<div class="nav">
					<ul class="cat-posts">
						<li><a href="#" class="tags-item filter">All</a></li>
						<li><a href="#" class="tags-item filter">Wordpress</a></li>
						<li><a href="#" class="tags-item filter">Graphic</a></li>
						<li><a href="#" class="tags-item filter">Illustrator</a></li>
						<li><a href="#" class="tags-item filter">Web Design</a></li>
					</ul>
				</div>
				<div class="blog-posts-wrapp">
					<div class="wrapper">
						<?php echo do_shortcode('[tlpportfolio layout="1"]'); ?>
					</div>
				</div>
	    	</div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>