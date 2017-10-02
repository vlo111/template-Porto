<?php get_header(); ?>
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="active"><?php single_cat_title(); ?></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1><?php single_cat_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts"><?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="post post-large">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail', array('class' => 'img-responsive')); ?>

                                <div class="post-date">
                                    <span class="day"> <?php echo get_the_time('d'); ?> </span>
                                    <span class="month"> <?php the_time('M'); ?> </span>
                                </div>

                                <div class="post-content">

                                    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
                                    <?php the_content(); ?>

                                    <div class="post-meta">
                                        <span><i class="fa fa-user"></i> By <a
                                                    href="#"> <?php the_author(); ?> </a> </span>
                                        <span><i class="fa fa-comments"></i> <a
                                                    href="#"> <?php $vp = wp_count_comments($post->ID);
                                                echo $vp->all; ?> Comments </a></span>
                                    </div>

                                </div>
                            </article>
                        <?php endwhile;?>
                        <?php custom_pagination(); ?>
<!--                        <ul class="pagination pagination-lg pull-right">-->
<!--                            <li><a href="#"> «</a></li>-->
<!--                            <li class="active"><a href="#"> 1</a></li>-->
<!--                            <li><a href="#"> 2</a></li>-->
<!--                            <li><a href="#"> 3</a></li>-->
<!--                            <li><a href="#"> »</a></li>-->
<!--                        </ul>-->

                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3">
                <aside class="sidebar">

                    <form>
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i
                                                        class="fa fa-search"></i></button>
										</span>
                        </div>
                    </form>
                </aside>
            </div>
        </div>

    </div>

<?php get_footer(); ?>