<?php get_header(); ?>



<div class="about-owner">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-30">
                <div class="about-left">
                    <div class="about-left__img">
                        <img src="<?php the_field('about_owner_img'); ?>" alt="">
                    </div>

                    <div class="about-left__service">
                        <div class="about-left__service-wraper">
                            <h4 class="about-left__service-title"><?php the_field('about_owner_dress'); ?></h4>
                            <p><?php the_field('about_owner_dress_description'); ?></p>
                        </div>


                        <div class="about-left__service-wraper">
                            <h4 class="about-left__service-title"><?php the_field('about_owner_cost'); ?></h4>
                            <p><?php the_field('about_owner_cost_description'); ?></p>
                        </div>
                    </div>
                    <div class="about-left__form">
                        <h3 class="about-left__form-title"><?php the_field('about_left_form_title'); ?></h3>
                        <div><?php echo do_shortcode('[contact-form-7 id="70" title="About Form"]'); ?></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-right">
                    <div class="about-right__story">
                        <p><?php the_field('about_owner_create'); ?></p>
                        <p><?php the_field('about_owner_goal'); ?></p>
                    </div>

                    <div class="about-right__special">
                        <h4 class="about-right__special-title"><?php the_field('about_owner_right_list_title'); ?></h4>
                        <ul class="about-right__special-unlist">
                            <li><?php the_field('about_owner_right_list_one'); ?></li>
                            <li><?php the_field('about_owner_right_list_two'); ?></li>
                            <li><?php the_field('about_owner_right_list_three'); ?></li>
                        </ul>
                    </div>

                    <div class="about-right__description">
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_one'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_two'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_three'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_four'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_five'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_six'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_seven'); ?></p>
                        <p class="about-right__description-text"><?php the_field('about_right_description_text_seven'); ?></p>
                    </div>

                    <div class="about-right__company">
                        <p><?php the_field('about_right_company_text_one'); ?></p>
                        <a href="<?php the_field('about_right_company_link'); ?>">
                            <?php the_field('about_right_company_link_text'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider-section" style="background-image: url(<?php the_field('slider_background'); ?>);">
    <div class="container">
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