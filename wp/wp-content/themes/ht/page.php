<?php get_header(); ?>

    <div role="main" class="main">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li class="active"><?php echo $post->post_name; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php
                            the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <h1 style="text-align: center"><?php the_title(); ?></h1>
        <?php
        if (have_posts()) : while (have_posts()) :
            the_post();
            the_content();
            ?>
        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>