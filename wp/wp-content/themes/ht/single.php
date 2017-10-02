<?php get_header(); ?>
<?php the_post(); ?>
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="<?php the_permalink() ?>">Home</a></li>
                            <li class="active"><?php echo $post->post_name; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Full Width</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <h2><strong><?php the_title(); ?></strong></h2>

            <div class="row">
                <div class="col-md-12">
                    <p> Квартирные переезды. Переезды домашнего вида также предполагают перевозку бытовой, кухонной техники, сантехнического оборудования,
                        мебели, предметов декора (ковров, штор и прочего), хрупких предметов (посуды, сервантов, люстр), предметов искусства
                        (картины, скульптуры и прочие вещи), антикварную мебель. Наши профессиональные работники быстро и аккуратно погрузят и <a href="#">разгрузят машину</a>,
                        качественно упакуют предметы, сумеют максимально экономно расставить предметы в перевозочной машине.</p>
                    <?php the_post_thumbnail('category-thumb',['class' => 'pull-left img-responsive', 'alt' => 'Device']); ?>
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

    </div>
<?php get_footer(); ?>