<?php get_header(); ?>


<section class="home-main" style="background-image: url(<?php the_field('home_main_background'); ?>);">
    <div class="home-main__block">
        <div class="row">
            <div class="col-md-4 col-10 mx-auto">
                <h1 class="home-main__title text-center"><?php the_field('home_main_title'); ?></h1>
                <div class="home-main__location text-center">
                    <span class="home-main__location-date">
                        <img src="<?php the_field('home_main_date_img'); ?>" alt="Date">
                        <?php the_field('home_main_date'); ?>
                    </span>
                    <span class="home-main__location-city">
                        <img src="<?php the_field('home_main_city_img'); ?>" alt="City">
                        <?php the_field('home_main_city'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="home-main__bottom">
        <div class="row">
            <div class="col-md-7 col-12 m-auto">
                <h2 class="home-main__bottom-title text-center"><?php the_field('home_main_form_title'); ?></h2>
                <div class="home-main__bottom-text text-center"><?php the_field('home_main_form_text'); ?></div>
                <div class="home-main__form">
                    <?php echo do_shortcode('[mc4wp_form id="67"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <div class="post__title">
            <div class="row">
                <div class="col-12">
                    <h2><?php the_field('post_title'); ?></h2>
                </div>
            </div>
        </div>

        <div class="post-home__item">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post_type_name',
                    'posts_per_page' => 6
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();
                ?>

                    <div class="col-lg-4 mb-30">
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

        <div class="post__button">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 col-12 m-auto">
                    <a class="form__btn" href="<?php the_field('post_button_link'); ?>" target="_blank">
                        <?php the_field('post_button_link_text'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="slider-section" style="background-image: url(<?php the_field('slider_background'); ?>);">
    <div class="container">
        <div class="home-owner">
            <div class="row">
                <div class="col-md-2">
                    <img class="home-owner__img" src="<?php the_field('home_owner_img'); ?>">
                </div>
                <div class="col-md-9">
                    <div class="home-owner__block">
                        <div class="home-owner__title"><?php the_field('home_owner_title'); ?></div>
                        <p class="home-owner__description"><?php the_field('home_owner_description'); ?></p>
                        <a class="home-owner__link white-btn" href="<?php the_field('home_owner_link'); ?>">
                            <?php the_field('home_owner_link_text'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section__title">
            <div class="row">
                <div class="col-12">
                    <h3><?php the_field('slider_title'); ?></h3>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                            if (have_rows('slider_content')) :
                            ?>

                                <?php foreach (get_field('slider_content') as $item) :
                                    $slider_photo = $item['slider_photo'];
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $slider_photo; ?>">
                                    </div>

                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row">
                <div class="col-12">
                    <div class="copiryght__text"><?php the_field('copyright'); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php get_footer(); ?>