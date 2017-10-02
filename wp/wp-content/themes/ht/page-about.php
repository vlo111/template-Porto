<?php get_header(); ?>
<?php
the_post();
//    if (have_posts()) :
//    while (have_posts()) : the_post(); ?>
<!---->
<?php //endwhile;
//endif;
?>

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo home_url();?>">Home</a></li>
                        <li class="active"><?php the_title();?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php the_content();?>
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-primary">
                    <div class="box-content">
                        <?php dynamic_sidebar('sidebar_index');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>