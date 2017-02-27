<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row container popular-content fix-row-bot">
        <div style="margin-top: 100px;" class="col l12">
            <div class="sign-line white-text">ПРОЖИВАННЯ</div>
            <div class="line-main">
                <div class="block-line"></div>
            </div>
        </div>
        <div class="col l6 m3 s12">
            <div id="popular-slider">
                <div id="gallery">
                    <div id="panel">
                        <img id="largeImage" src="<?php echo get_template_directory_uri(); ?>/img/popular-slider/image_01_large.jpg" alt="popular" />
                    </div>
                    <div id="thumbs">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/popular-slider/image_01_thumb.jpg" alt="1st image description" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/popular-slider/image_02_thumb.jpg" alt="2nd image description" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/popular-slider/image_03_thumb.jpg" alt="3rd image description" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col l6 m9 s12 ">
            <div class="popular-content-text white-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur quas nobis iure eligendi aliquid alias sint nesciunt dicta libero, neque atque illum, a culpa earum voluptates ex magni et dignissimos!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus minus ea, doloribus omnis corporis, provident doloremque molestias quas voluptatem illo itaque temporibus vero autem perspiciatis id voluptatibus dolorum suscipit facilis?
            </div>
        </div>
        <div class="row booking">
            <div class="col l12">
                <div id="contactform-comment-acom">
                    <?php echo do_shortcode( '[contact-form-7 id="63" title="Форма для замовлення екскурсії по критеріям"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- /main-backgroung -->

<div style=" background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/fifth-bg.jpg);" class="fifth-block">
    <?php
        //our-partners
        get_template_part('/template-parts/our', 'partners');
    ?>
    <div class="six-content">
        <div class="sign-line white-text center contact-sign">КОНТАКТИ</div>
    </div>
    <div id='mapkit-9997'></div>
</div>

<?php get_footer(); ?>