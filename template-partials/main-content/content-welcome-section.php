<section class="welcome">
    <div class="main-container">           
                <h2><?php the_field('welcoming-header'); ?></h2>
                <p><?php the_field('welcoming-paragaph');?></p>
                
                <div class="delivery-info">     
                    <p><?php the_field('free-delivery-text');?></p>
                    <img src="<?php echo bloginfo('template_url') . './assets/icons/utility-icons/path-icon.svg'?>" alt="<?php the_field('free-delivery-text')[alt];?>" >    
                </div>

                <img src="<?php echo the_field('main-image', 38);?>" alt="<?php echo the_field('main-image-alt', 38);?>" class="welcome__img">
                
                
                
                <!-- <img src="<?php echo bloginfo('template_url') . './assets/vegetables/tomato@1x.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/cucumber@1x.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/mushroom@1x.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/blured-pepper@1x-1.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/blured-pepper@1x-3.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x-2.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x-4.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x-5.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x.png'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/pizza-icon.svg'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/mushroom-icon.svg'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/tomato-icon.svg'?>" alt="" class="absolute-class">
                <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/prawn-icon.svg'?>" alt="" class="absolute-class " /> -->
                

    </div>
</section>

