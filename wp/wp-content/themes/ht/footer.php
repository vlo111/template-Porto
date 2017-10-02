<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>
            <div class="col-md-3">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img alt="Porto Website Template" class="img-responsive"
                         src="<?php bloginfo('template_url'); ?>/img/logo-footer.png">
                </a>
            </div>
            <div class="col-md-3">
                <h4>Contact Us</h4>
                <ul class="contact">
                    <li><p><i class="fa fa-map-marker"></i>
                            <strong>Address:</strong><?php echo get_option('my_address'); ?></p></li>
                    <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> <?php echo get_option('my_phone'); ?>
                        </p></li>
                    <li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a
                                    href="mailto:<?php bloginfo('admin_email') ?>"><?php bloginfo('admin_email') ?></a>
                        </p></li>
                </ul>

            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h4></h4>
                </div>
            </div>
            <div class="col-md-2">
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal">
                    Contact
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title" style="text-align: center; color: #777; font-weight: bold;">
                                    Contact</h5>
                            </div>
                                <div class="modal-body">
                                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                                        <strong>Success!</strong> Your message has been sent to us.
                                    </div>

                                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                                        <strong>Error!</strong> There was an error sending your message.
                                        <span class="font-size-xs mt-sm display-block"
                                              id="mailErrorMessage"></span>
                                    </div>

                                    <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
                                    <?php $args = array(
                                        'post_type' => 'page',
                                        'meta_key' => 'con',
                                        'orderby' => 'meta_value_num',
                                        'order' => 'ASC',
                                        'posts_per_page' => 1);
                                    $page_index = new WP_Query($args);
                                    if ($page_index->have_posts()) : while ($page_index->have_posts()) :
                                        $page_index->the_post(); ?>
                                        <?php the_content(); ?>
                                    <?php endwhile; endif; ?>
                                </div>
                                <div class="modal-footer">
<!--                                    <div class="row">-->
<!--                                        <div class="col-md-1">-->
<!--                                            <button style="text-align: left;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                                        </div>-->
<!--                                        <div class="col-md-11">-->
<!--                                            <input type="submit" name="send" value="Send Message"-->
<!--                                                   class="btn btn-primary btn-lg mb-xlg"-->
<!--                                                   data-loading-text="Loading...">-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>








<!-- Vendor -->
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/common/common.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/vide/vide.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/theme.js"></script>

<script src="<?php bloginfo('template_url'); ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/views/view.home.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/theme.init.js"></script>

<?php wp_footer(); ?>
</body>
</html>