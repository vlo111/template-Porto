<?php get_header(); ?>

    <div role="main" class="main">
        <?php
        echo do_shortcode('[smartslider3 slider=2]');
        ?>
<!--                <div role="main" class="main shop">-->
<!--        -->
<!--                    <div class="container">-->
<!--        -->
<!--                        <div class="row">-->
<!--                            <div class="col-md-12">-->
<!--                                <hr class="tall">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-12">-->
<!--                                        <hr class="tall">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--                                    <div class="row">-->
<!--                                        <div class="col-md-12 center">-->
<!--                                            <h2 class="word-rotator-title mb-lg">-->
<!--                                                <strong class="inverted inverted-primary">-->
<!--                									<span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}">-->
<!--                										<span class="word-rotate-items">-->
<!--                											<span>--><?php //the_title(); ?><!--</span>-->
<!--                										</span>-->
<!--                									</span>-->
<!--                                                </strong>-->
<!--                                            </h2>-->
<!---->
<!--                                            <p class="lead">--><?php //the_content(); ?><!--</p>-->
<!---->
<!--                                            <hr class="tall">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                --><?php //endwhile; endif; ?>
        <div class="row">
            <div class="col-md-12 center">
                                                            <h2 class="word-rotator-title mb-lg">
                                                                <strong class="inverted inverted-primary">
                                									<span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
                                										<span class="word-rotate-items">
                                											<span>My Work</span>
                                										</span>
                                									</span>
                                                                </strong>
                                                            </h2>
<!--                <h1 style="text-align: center;" class="mb-none"><strong>My Work</strong></h1>-->
            </div>
        </div>
        <div class="row">
            <div class="masonry-loader masonry-loader-showing">
                <ul class="products product-thumb-info-list" data-plugin-masonry>
                    <?php $args = array(
                        'post_type' => 'post',
                        'meta_key' => 'order',
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'posts_per_page' => 8);
                    $page_index = new WP_Query($args);
                    if ($page_index->have_posts()) : while ($page_index->have_posts()) :
                        $page_index->the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </ul>

            </div>
        </div>


        <!--                <div class="row">-->
        <!--                    <div class="col-md-12">-->
        <!--                        <hr class="tall">-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="row">-->
        <!--                    <section class="section section-primary section-no-border m-none" data-plugin-parallax-->
        <!--                             data-plugin-options="{'speed': 6}"-->
        <!--                             data-image-src="-->
        <?php //bloginfo('template_url'); ?><!--/img/demos/hotel/parallax-hotel-map.png">-->
        <!--                        --><?php //$catID = 11;
        //                        $post_Protection = new WP_Query(array('cat' => $catID, 'posts_per_page' => 3)) ?>
        <!--                        --><?php //if ($post_Protection->have_posts()) : ?>
        <!--                            <div class="container">-->
        <!--                                <div class="row">-->
        <!--                                    <div class="col-md-12 center">-->
        <!--                                        <h3 class="mt-xl mb-none pb-none text-light text-uppercase">-->
        <?php // echo get_cat_name($catID);?><!--</h3>-->
        <!--                                        <div class="divider divider-light divider-small divider-small-center mb-xl mt-none">-->
        <!--                                            <hr class="mt-sm">-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="row">-->
        <!--                                --><?php //while ($post_Protection->have_posts()) : $post_Protection->the_post(); ?>
        <!--                                    <div class="col-md-4">-->
        <!--                                        <div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation"-->
        <!--                                             data-appear-animation="fadeInUp" data-appear-animation-delay="0">-->
        <!--                                            <blockquote class="box-shadow-custom">-->
        <!--                                                --><?php //the_content();?>
        <!--                                            </blockquote>-->
        <!--                                            <div class="testimonial-arrow-down"></div>-->
        <!--                                            <div class="testimonial-author">-->
        <!--                                                <p><strong>--><?php //the_title(); ?><!--</strong><span>-->
        <?php //the_excerpt(); ?><!--</span></p>-->
        <!--                                            </div>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                --><?php //endwhile; ?>
        <!--                                </div>-->

    </div>

<?php //endif; ?>


    <!--                            <div class="col-md-4">-->
    <!--                                <div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation"-->

    <!--                                     data-appear-animation="fadeInUp" data-appear-animation-delay="300">-->

    <!--                                    <blockquote class="box-shadow-custom">-->
    <!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus-->

    <!--                                            porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem-->

    <!--                                            ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque-->

    <!--                                            penatibus et magnis dis parturient montes.</p>-->
    <!--                                    </blockquote>-->
    <!--                                    <div class="testimonial-arrow-down"></div>-->
    <!--                                    <div class="testimonial-author">-->
    <!--                                        <p><strong>Brad Smith</strong><span>Porto Advisor</span></p>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-md-4">-->
    <!--                                <div class="testimonial testimonial-style-3 testimonial-style-custom appear-animation"-->

    <!--                                     data-appear-animation="fadeInUp" data-appear-animation-delay="600">-->

    <!--                                    <blockquote class="box-shadow-custom">-->
    <!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus-->

    <!--                                            porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem-->

    <!--                                            ipsum dolor sit amet.</p>-->
    <!--                                    </blockquote>-->
    <!--                                    <div class="testimonial-arrow-down"></div>-->
    <!--                                    <div class="testimonial-author">-->
    <!--                                        <p><strong>Paul Smith</strong><span>Porto Advisor</span></p>-->

    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                    </section>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
<!--    </div>-->
<?php get_footer(); ?>