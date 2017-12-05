<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Dolcetto
 */
get_header(); ?>
    <div class="mainContainer">
        <div class="content">
            <div class="wrapper">
                <h4><?php _e( 'Not found', 'dolcetto' ); ?></h4>
                <hr>
                <p><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'dolcetto' ); ?></p>
            </div>
        </div>
    </div>
<?php get_footer(); ?>