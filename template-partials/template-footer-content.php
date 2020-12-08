<?php

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $custom_logo = $custom_logo_data[0];

?>

<footer class="page-footer">
    <div class="main-container">
    <h4><?php the_field('footer-copy', 23); ?></h4>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
        <?php if($custom_logo ) : ?>
        <img src="<?php echo esc_url( $custom_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) );?>" class="footer__logo" />
        <?php else: ?>
        <p>Here should be the page logo.</p>
        <?php endif; ?>
    </a>
    <h4><?php the_field('footer-info', 23); ?><span class="bold"><?php the_field('author', 23); ?></span></h4>
    </div>

    