<?php
/**
 * The template for displaying all pages.
 *
 * @package Amaryllo
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
            <div class="page-content">
                <div class="container margin-top-xl">
                    <div class="column-container clearfix">
                        <div class="column-9-12 column-md-8-12">
                            <div class="articles-container">
                                <div class="article article-inner">
									<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
									<div class="img-container">
										<?php the_post_thumbnail($post->ID, 'featured'); ?>	
									</div>
									<?php endif; ?>
                                    <div class="article-text singlepost">
                                        <h3><?php the_title(); ?></h3>
										<div class="meta-top">
											<span><?php _e( 'Posted by', 'amaryllo' ); ?> &nbsp;</span>
											<span class="color-gray"><?php the_author(); ?></span>
											<span>&nbsp; | &nbsp;</span>
											<span class="color-gray"><?php _e( 'Categories', 'amaryllo' ); ?> : &nbsp;</span>
											<span class="category-meta"><?php the_category(', '); ?></span>
										</div>
                                        <div class="text ">
                                            <?php the_content(); ?>
                                        </div>
										<p class="the-blog-item-general-info"><?php the_tags(); ?></p> 
                                        <div class="meta">
                                            <div class="column-container">
                                                <div class="column-4-12">
                                                    <p class="time"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                                </div>
                                            </div>
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