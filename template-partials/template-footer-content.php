<?php

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $custom_logo = $custom_logo_data[0];

?>

<footer class="page-footer">
    <div class="main-container">
    <h4><?php the_field('footer-copy', 50); ?></h4>
    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
        <?php if($custom_logo) : ?>
        <img src="<?php echo esc_url($custom_logo); ?>" alt="Here should be page logo, but it probably doesn't exist." class="footer__logo" />
        <?php else: ?>
        <p>Here should be page logo, but it probably doesn't exist.</p>
        <?php endif; ?>
    </a>
    <h4><?php the_field('footer-info', 50); ?><span class="bold"><a href="mailto: xxx@xxx.xx" title="<?php the_field('author', 50); ?>'s e-email"> <?php the_field('author', 50); ?></a></span></h4>
    </div>

    