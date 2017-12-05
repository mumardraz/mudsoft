<?php
/**
 * The template for displaying all pages.
 *
 * @package Amaryllo
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
            <div class="page-content">
                <div class="banner contact-banner" <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?> style="background-image: url('<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id($post->ID))); ?>')"  <?php  endif; ?>>
                    <div class="container">
						<h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <div class="container margin-top-xl">
                    <div class="column-container clearfix">
                        <div class="column-9-12 column-md-8-12">
                            <div class="articles-container">
                                <div class="article article-inner">
                                    <div class="article-text singlepost">
                                        <div class="text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
									<p><?php posts_nav_link(); ?></p>
									<?php amaryllo_paginate_page(); ?> 
                                    <div class="comments-container">
									    <?php comments_template(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php  get_sidebar(); ?>
                    </div>
                </div>
            </div>
<?php endwhile; ?>
<?php get_footer(); ?>