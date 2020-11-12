<?php get_header(); ?>


<div class="contact-page">
    <div id="map"></div>
    <div class="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <div class="contact-form__title">
                                <h3><?php the_field('contact_form_title'); ?></h3>
                            </div>
                            <div><?php echo do_shortcode('[contact-form-7 id="92" title="Contact form"]'); ?></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-information">
                            <div class="contact-information__title">
                                <h3><?php the_field('contact_information_title'); ?></h3>
                            </div>
                            <div class="contact-information__item">
                                <div class="contact-information__item-title"><?php the_field('contact_information_adress_title'); ?></div>
                                <p class="contact-information__item-adress"><?php the_field('contact_information_adress'); ?></p>
                            </div>
                            <div class="contact-information__item">
                                <div class="contact-information__item-title"><?php the_field('contact_information_email_title'); ?></div>
                                <a class="contact-information__item-email line-for-link" href="<?php the_field('contact_information_email_link'); ?>"><?php the_field('contact_information_email_text'); ?></a>
                            </div>
                            <div class="contact-information__item">
                                <div class="contact-information__item-title"><?php the_field('contact_information_phone_title'); ?></div>
                                <a class="contact-information__item-phone line-for-link" href="<?php the_field('contact_information_phone_link'); ?>"><?php the_field('contact_information_phone_text'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>



























<script defer src="https://maps.googleapis.com/maps/api/js?&callback=initMap"></script>
<?php get_footer(); ?>