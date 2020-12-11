<header class="page-header">
    <div class="main-container">

        <div class="page-header__logo">
                <?php if(has_custom_logo()):  ?>
                <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_data = wp_get_attachment_image_src($custom_logo_id , 'full');
                    $custom_logo = $custom_logo_data[0];
                ?>

                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                        <img src="<?php echo esc_url($custom_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name'));?>" class="logo" />
                    </a>
                    
                <?php else: ?>
                    <div class="site-name"><?php bloginfo('name'); ?></div>
                <?php endif; ?>
        </div>

        <button class="btn-hamburger" id="bth-ham" title="Menu button"></button>

        <div class="wrapper" id="menu-wrap">
            <!-- calling page navigation -->
            <nav class="page-header__navigation">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'page-navigation',
                )); 
                ?>
            </nav>
                        
            <!-- fast contact element -->
            <div class="page-header__fast-contact">
                <p><?php the_field('working_hours', 50);?></p>
                <div class="fast-contact__calling">
                    <a href="tel:<?php the_field('phone-number', 50);?>" title="Call back icon"><div class="icon-wrapper"><img class="phone-icon" src="<?php echo bloginfo('template_url').'/assets/icons/utility-icons/phone-icon.svg'; ?>" alt="<?php the_title(); ?>"></div></a>
                    <a href="tel:<?php the_field('phone-number', 50);?>" title="Phone number for calling back"><p><span class="bold"><?php the_field('quick-contact', 50);?></span></p></a>
                </div>
            </div>
        </div>
    </div>
</header>