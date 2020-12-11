<section class="social-cta">
    <div class="fullwidth-container">
        <div class="social">
            <div class="social__photos">
                <img src="<?php echo get_field( 'social-photo-one', 50 ); ?>" alt="">
                <img src="<?php echo get_field( 'social-photo-two', 50 ); ?>" alt="">
                <img src="<?php echo get_field( 'social-photo-three', 50 ); ?>" alt="">
                <img src="<?php echo get_field( 'social-photo-four', 50 ); ?>" alt="">
                <img src="<?php echo get_field( 'social-photo-five', 50 ); ?>" alt="">
                <img src="<?php echo get_field( 'social-photo-six', 50 ); ?>" alt="">
            </div>
            <div class="social__info">
                <div class="social__info__child">
                    <h5><?php the_field('social-media-name', 50); ?><a href="mail:insta@insta.com" alt="Directly link to <?php echo the_field('account-name', 50); ?>'s email"><span class="bold"><?php echo the_field('account-name', 50); ?></span></a></h5>
                </div>
            </div>
        </div>
    </div>            
</section>
