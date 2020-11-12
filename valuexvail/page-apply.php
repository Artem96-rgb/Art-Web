<?php get_header(); ?>

<div class="aplly-top">
    <div class="container-custom">
        <div class="row">
            <div class="col-12">
                <div class="aplly-top__content">
                    <p class="aplly-top__content-text"><?php the_field('apply_paragraph_one'); ?></p>
                    <p class="aplly-top__content-text"><?php the_field('apply_paragraph_two'); ?></p>
                    <p class="aplly-top__content-text"><?php the_field('apply_paragraph_three'); ?></p>
                    <p class="aplly-top__content-text"><?php the_field('apply_paragraph_four'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apply-contact">
    <div class="container-custom">
        <div class="apply-contact__wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="apply-form__title">
                        <h3><?php the_field('apply_form_tilte'); ?></h3>
                    </div>
                </div>
            </div>

            <div>
                <?php echo do_shortcode('[contact-form-7 id="131" title="Apply Form"]'); ?>
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