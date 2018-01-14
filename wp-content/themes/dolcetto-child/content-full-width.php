<?php
/**
 * Template Name: Full Width Template
 *
 * @package Dolcetto
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
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
                <div class="content-container">
                    <div class="articles-container">
                        <div class="article article-inner">
                            <div class="text">
                                <?php the_content(); ?>
								<div class="clear"></div>
                            </div>
                            <!-- <p><?php posts_nav_link(); ?></p>
                            <div class="padinate-page"><?php wp_link_pages(); ?></div> 	
                            <div class="comments-container">
                                <?php comments_template(); ?>
                            </div>
							<div class="clear"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>