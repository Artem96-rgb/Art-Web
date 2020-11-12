<?php get_header(); ?>




<div class="presentations">
    <div class="container">
        <div class="presentations-tabs">
            <div class="row">
                <div class="col-12">
                    <div class="presentations-tabs__content">
                        <?php
                            if (have_rows('tabs')) :
                            ?>
                                <?php foreach (get_field('tabs') as $item) :
                                    $tabs_all = $item['tabs_all'];
                                    $tabs_2019 = $item['tabs_2019'];
                                    $tabs_2018 = $item['tabs_2018'];
                                    $tabs_2017 = $item['tabs_2017'];
                                    $tabs_2016 = $item['tabs_2016'];
                                    $tabs_2015 = $item['tabs_2015'];
                                    $tabs_2014 = $item['tabs_2014'];
                                    $tabs_2013 = $item['tabs_2013'];
                                    $tabs_2012 = $item['tabs_2012'];
                                    $tabs_2011 = $item['tabs_2011'];
                                ?>
                                    <a class="presentations-tabs__link" data-filter=".all" href="#"><?php echo $tabs_all; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2019" href="#"><?php echo $tabs_2019; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2018" href="#"><?php echo $tabs_2018; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2017" href="#"><?php echo $tabs_2017; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2016" href="#"><?php echo $tabs_2016; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2015" href="#"><?php echo $tabs_2015; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2014" href="#"><?php echo $tabs_2014; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2013" href="#"><?php echo $tabs_2013; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2012" href="#"><?php echo $tabs_2012; ?></a>
                                    <a class="presentations-tabs__link" data-filter=".2011" href="#"><?php echo $tabs_2011; ?></a>
                                 <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="post-item">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post_type_name',
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                ?>

                    <div class="col-lg-4 mb-30 <?php foreach (get_the_category() as $category) { ?><?php echo $category->name; ?><?php; }?> s all">
                        <div class="post-item__content">
                            <h4 class="post-item__title"><?php the_title(); ?></h4>
                            <?php the_post_thumbnail(); ?>                               
                        </div>
                    </div>
                <?php
                endwhile;

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>

<section class="bottom-section" style="background-image: url(<?php the_field('form_bottom_background'); ?>);">
    <div class="bottom-section__top text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="bottom-section__top-title"><?php the_field('form_bottom_title'); ?></h2>
                    <div class="bottom-section__top-text"><?php the_field('form_bottom_text'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-section__form">
        <div class="container">
            <?php echo do_shortcode('[contact-form-7 id="236" title="Bottom Form"]'); ?>
            </p>
        </div>
    </div>

    <div class="bottom-section__copiryght">
        <div class="row">
            <div class="col-12">
                <div class="copiryght__text text-center"><?php the_field('form_bottom_copyright'); ?></div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>