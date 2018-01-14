<?php
/**
 * Template Name: About Us
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
        <div class="creative-studio">
            <div class="wrapper">
                <h4>welcome to our Creative Studio</h4>
                <hr>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit vulputate, vehicula nisi vitae lobortis antes raesent</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra. Aliquam erat volutpat. Praesent ipsum pede, pretium sed, congue nec, pretium quis, urna. Suspendisse dignissim, elit in ultrices sollicitudin, nisl est accumsan orci, a venenatis dui mi porta pede. Aenean et pede quis est tincidunt varius.
                </p>
                <p>
                    Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum, faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt, viverra sed, nisl.
                </p>
                <p>
                    Praesent ac quam vulputate felis ultrices scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In in arcu. Vestibulum eget nisi quis tellus elementum dapibus. Cras facilisis venenatis libero. Nunc accumsan viverra augue. Suspendisse potenti. Suspendisse eleifend. Maecenas sit amet justo.
                </p>
                <p>
                    Quisque quam nisi, mollis quis, sodales ut, rhoncus nec, risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin pede. Aliquam neque tortor, euismod ac, eleifend quis, tincidunt quis, neque.
                </p>
                <p>
                    Phasellus rhoncus. Donec urna nulla, vehicula et, consectetuer vel, condimentum quis, ipsum. Nulla quis neque eu sapien tincidunt faucibus. Donec eleifend, metus sed elementum lobortis, arcu elit luctus enim, sed vestibulum diam leo nec nunc. Suspendisse tempus.
                </p>
                <p>
                    Phasellus quis mauris. Integer eu justo. Fusce tortor enim, elementum ut, auctor non, accumsan quis, enim. Aenean posuere ante id odio. Nulla facilisi. Donec ac eros quis ipsum auctor blandit. Cras eleifend libero fringilla turpis. Integer sem. Curabitur commodo dapibus lacus.
                </p>
            </div>
        </div>
        <div class="welcome-slider-block">
            <div class="wrapper">
                <div class="welcome-slider owl-carousel owl-theme">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper">
                            <div class="owl-item">
                                <div class="one-welcome">
                                    <div class="circle">
                                        <img class="attachment-testimonial-box size-testimonial-box wp-post-image" src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/welcome1-172x176.jpg" alt="welcome" height="176px" width="172px">
                                    </div>
                                    <h4>White Grey</h4>
                                    <h5>CEO/Facebook Inc</h5>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available,but the  majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrassing hidden in the  middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="one-welcome">
                                    <div class="circle">
                                        <img class="attachment-testimonial-box size-testimonial-box wp-post-image" src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/welcome1-172x176.jpg" alt="welcome" height="176px" width="172px">
                                    </div>
                                    <h4>White Grey</h4>
                                    <h5>CEO/Twitter Inc</h5>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available,but the  majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrassing hidden in the  middle of text.
                                    </p>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="one-welcome">
                                    <div class="circle">
                                        <img class="attachment-testimonial-box size-testimonial-box wp-post-image" src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/welcome1-172x176.jpg" alt="welcome" height="176px" width="172px">
                                    </div>
                                    <h4>White Grey</h4>
                                    <h5>CEO/Google Inc</h5>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available,but the  majority have suffered alteration in some form, by injected humour,or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrassing hidden in the  middle of text.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls clickable">
                        <div class="owl-pagination">
                            <div class="owl-page">
                                <span class=""></span>
                            </div>
                            <div class="owl-page">
                                <span class=""></span>
                            </div>
                            <div class="owl-page">
                                <span class=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="triangle"></div>
        </div>
        <div class="content">
            <div class="wrapper">
                <h2>Why you choose us ?</h2>
                <p>Because we are the best!</p>
                <hr>
                <div class="col-services">
                    <?php echo do_shortcode('[WPSM_SERVICEBOX id=100]'); ?>
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
                            <?php echo do_shortcode('[team-free id="61"]'); ?>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>