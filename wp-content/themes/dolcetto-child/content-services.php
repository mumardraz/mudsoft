<?php
/**
 * Template Name: Services
 *
 * @package Dolcetto
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="page-services">
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
                <h2>what we are good at ?</h2>
                <p>Almost everything !</p>
                <hr>
                <div class="col-services">
                    <?php echo do_shortcode('[WPSM_SERVICEBOX id=91]'); ?>
                </div>
            </div>
        </div>
        <div class="welcome-slider-block">
            <div class="wrapper">
                <div class="main-development">
                    <h4>THE MAIN PROCESS of development</h4>
                    <h5>This is how we do it!</h5>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam vel turpis. Duis sit amet lectus ac mauris porta viverra. Aliquam erat volutpat. Praesent ipsum pede, pretium sed, congue nec, pretium quis, urna. Suspendisse dignissim, elit in ultrices sollicitudin, nisl est accumsan orci, a venenatis dui mi porta pede. Aenean et pede quis est tincidunt varius.

                        Cras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna. Suspendisse dapibus ullamcorper pede. Vivamus ligula ipsum, faucibus at, tincidunt eget, porttitor non, dolor. Ut dui lectus, ultrices ut, sodales tincidunt, viverra sed, nisl.

                        Praesent ac quam vulputate felis ultrices scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In in arcu. Vestibulum eget nisi quis tellus elementum dapibus. Cras facilisis venenatis libero. Nunc accumsan viverra augue. Suspendisse potenti. Suspendisse eleifend. Maecenas sit amet justo.

                        Quisque quam nisi, mollis quis, sodales ut, rhoncus nec, risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin pede. Aliquam neque tortor, euismod ac, eleifend quis, tincidunt quis, neque.

                        Phasellus rhoncus. Donec urna nulla, vehicula et, consectetuer vel, condimentum quis, ipsum. Nulla quis neque eu sapien tincidunt faucibus. Donec eleifend, metus sed elementum lobortis, arcu elit luctus enim, sed vestibulum diam leo nec nunc. Suspendisse tempus.

                        Phasellus quis mauris. Integer eu justo. Fusce tortor enim, elementum ut, auctor non, accumsan quis, enim. Aenean posuere ante id odio. Nulla facilisi. Donec ac eros quis ipsum auctor blandit. Cras eleifend libero fringilla turpis. Integer sem. Curabitur commodo dapibus lacus.

                        Vivamus semper auctor turpis. Sed ipsum lacus, varius quis, iaculis at, mollis sagittis, arcu.
                    </p>
                </div>
            </div>
            <div class="triangle"></div>
        </div>
        <div class="development-service">
            <div class="wrapper">
                <div class="one-development">
                    <div class="image">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/post11.jpg" alt="Planning">
                    </div>
                    <div class="content-development">
                        <h5>Planning</h5>
                        <h6>Our team start writing all the requirements.</h6>
                        <p>
                            Phasellus elementum, libero ut tempus facilisis, nisi risus maximus tortor, ut imperdiet dui magna a tellus. Nulla at libero condimentum, dictum velit consectetur, dictum lacus. Nunc eu lorem condimentum, viverra mi vel, auctor magna. Nullam et auctor tortor. Suspendisse elementum placerat.
                        </p>
                    </div>
                </div>
                <div class="one-development">
                    <div class="image">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/post21.jpg" alt="Planning">
                    </div>
                    <div class="content-development">
                        <h5>Designing</h5>
                        <h6>Our team start writing all the requirements.</h6>
                        <p>
                            Phasellus elementum, libero ut tempus facilisis, nisi risus maximus tortor, ut imperdiet dui magna a tellus. Nulla at libero condimentum, dictum velit consectetur, dictum lacus. Nunc eu lorem condimentum, viverra mi vel, auctor magna. Nullam et auctor tortor. Suspendisse elementum placerat.
                        </p>
                    </div>
                </div>
                <div class="one-development">
                    <div class="image">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/post31.jpg" alt="Planning">
                    </div>
                    <div class="content-development">
                        <h5>Development</h5>
                        <h6>Our team start writing all the requirements.</h6>
                        <p>
                            Phasellus elementum, libero ut tempus facilisis, nisi risus maximus tortor, ut imperdiet dui magna a tellus. Nulla at libero condimentum, dictum velit consectetur, dictum lacus. Nunc eu lorem condimentum, viverra mi vel, auctor magna. Nullam et auctor tortor. Suspendisse elementum placerat.
                        </p>
                    </div>
                </div>
                <div class="one-development">
                    <div class="image">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/software-testing.png" alt="Planning">
                    </div>
                    <div class="content-development">
                        <h5>Testing</h5>
                        <h6>Our team start writing all the requirements.</h6>
                        <p>
                            Phasellus elementum, libero ut tempus facilisis, nisi risus maximus tortor, ut imperdiet dui magna a tellus. Nulla at libero condimentum, dictum velit consectetur, dictum lacus. Nunc eu lorem condimentum, viverra mi vel, auctor magna. Nullam et auctor tortor. Suspendisse elementum placerat.
                        </p>
                    </div>
                </div>
                <div class="one-development">
                    <div class="image">
                        <img src="<?php get_site_url(); ?>/wp-content/uploads/2017/12/MKT_Image_OnPremiseDeployment1.gif" alt="Planning">
                    </div>
                    <div class="content-development">
                        <h5>Deployment</h5>
                        <h6>Our team start writing all the requirements.</h6>
                        <p>
                            Phasellus elementum, libero ut tempus facilisis, nisi risus maximus tortor, ut imperdiet dui magna a tellus. Nulla at libero condimentum, dictum velit consectetur, dictum lacus. Nunc eu lorem condimentum, viverra mi vel, auctor magna. Nullam et auctor tortor. Suspendisse elementum placerat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>