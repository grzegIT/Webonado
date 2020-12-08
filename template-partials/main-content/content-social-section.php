<section class="social-cta">
    <div class="fullwidth-container">
        <div class="social">
            <div class="social__photos">
               
                <img src="<?php echo get_field( 'social-photo-one', 38 ); ?>">
                <img src="<?php echo get_field( 'social-photo-two', 38 ); ?>">
                <img src="<?php echo get_field( 'social-photo-three', 38 ); ?>">
                <img src="<?php echo get_field( 'social-photo-four', 38 ); ?>">
                <img src="<?php echo get_field( 'social-photo-five', 38 ); ?>">
                <img src="<?php echo get_field( 'social-photo-six', 38 ); ?>">

            </div>
            <div class="social__info">
                <h5><?php the_field('social-media-name', 38); ?><span class="bold"><?php echo the_field('account-name', 38); ?></span></h5>
            </div>
        </div>
    </div>            
</section>
