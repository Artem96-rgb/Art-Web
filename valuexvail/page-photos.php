<?php get_header(); ?>




<div class="photos">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('photos')) :
            ?>

                <?php foreach (get_field('photos') as $item) :
                    $photo_one = $item['photo_one'];
                    $photo_two = $item['photo_two'];
                    $photo_three = $item['photo_three'];
                ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-30 load-item">
                        <img src="<?php echo $photo_one; ?>">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-30 load-item">
                        <img src="<?php echo $photo_two; ?>">
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-30 load-item">
                        <img src="<?php echo $photo_three; ?>">
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <div class="row">
            <div class="col-6 col-md-3 col-lg-2 m-auto">
                <a href="#" id="loadMore" class="form__btn">Load more</a>
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