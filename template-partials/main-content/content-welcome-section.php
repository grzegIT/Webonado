<section class="welcome" id="welcome-id">
    <div class="main-container">  
        <div class="text-block__vertical">
            <h2><?php the_field('welcoming-header',38); ?></h2>
            <p><?php the_field('welcoming-paragaph',38);?></p>
        </div>                
                
        <div class="image-container">
            <img src="<?php echo the_field('main-image', 38);?>" alt="<?php echo the_field('main-image-alt', 38);?>" class="welcome__img">
            <div class="delivery-info">  
                <p>When ordering from <span class="bold theme-font_color"><?php the_field('free-delivery-text');?></span> USD, delivery is free</p>
                <img src="<?php echo bloginfo('template_url') . './assets/icons/utility-icons/path-icon.svg'?>" alt="<?php the_field('free-delivery-text')['alt'];?>" />
            </div>

            


        </div> 
                
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/tomato@1x.png'?>" alt="" class="absolute-class tomato" id="tomato-id">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/cucumber@1x.png'?>" alt="" class="absolute-class cucumber">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/mushroom@1x.png'?>" alt="" class="absolute-class mushroom">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/blured-pepper@1x-1.png'?>" alt="" class="absolute-class pepper-blured--left">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/blured-pepper@1x-3.png'?>" alt="" class="absolute-class pepper-blured--right">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x-2.png'?>" alt="" class="absolute-class pepper-one">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x-4.png'?>" alt="" class="absolute-class pepper-two">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x-5.png'?>" alt="" class="absolute-class pepper-double">
        <img src="<?php echo bloginfo('template_url') . './assets/vegetables/pepper@1x.png'?>" alt="" class="absolute-class pepper-tree">
        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/pizza-icon.svg'?>" alt="" class="absolute-class pizza_icon">
        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/mushroom-icon.svg'?>" alt="" class="absolute-class mushroom_icon">
        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/tomato-icon.svg'?>" alt="" class="absolute-class tomato_icon">
        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/prawn-icon.svg'?>" alt="" class="absolute-class prawn_icon" />
    
    </div>
</section>

