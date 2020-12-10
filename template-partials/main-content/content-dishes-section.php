<section class="popular-dishes">
    <div class="main-container">           
        
        <h2><?php the_field('dishes-header'); ?></h2>
        
        <div class="product-list">
            
            <div class="product-list__categories">
                <?php 
                    $categories = get_categories(array (
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => false
                    ));

                    foreach($categories as $category){ ?>
                       <a href="<?php echo esc_url( home_url( '/'.$category->name ));?>">
                            <?php echo $category->name;?>
                       </a>
                    <?php 
                    }
                    ?> 
                   <?php 
                ?>  
            </div>
            
            <div class="product-list__items">
                
                <?php
                    query_posts('cat=1');
                    while (have_posts()) : the_post(); 
                ?>
                    <div class='list__item'>

                        <!-- HIT -->
                        
                        <?php 
                        $hit = get_field('hit');
                        if($hit): ?>
                                <p class="item__hit"><?php echo the_field('hit');?></p>
                        <?php endif;?></p>
                        
                        
                        <a href="<?php the_permalink();?>">
                           <img class="item__img" src="<?php the_field('item-image'); ?>" alt="<?php the_field('item-image')['alt']; ?>">
                        </a>

                        
                        <div class="item__description">
                            
                            <h4 class='item__title'>
                                <a href="<?php the_permalink();?>">
                                    <?php the_field('item-name'); ?>
                                </a>
                            </h4>
                            
                            <h5>
                                <?php the_field('item-size');?>
                            </h5>
                            
                        </div>
                        <div class="item__ingredients">
                            <?php the_field('ingredients');?>
                        </div>
                        
                        <h3><?php the_field('price');?> USD</h3>
                        
                        <a href="<?php the_permalink(); ?>">
                            <div class="item__buy">
                                <img src="<?php echo bloginfo('template_url').'/assets/icons/utility-icons/buy-icon--active.svg'?>">
                            </div>
                        </a>
                        
                    </div>
                <?php
                    endwhile;
                ?>
                

            </div>
        </div>   

        <a href="<?php echo esc_url( home_url( '/more_products' ) );?>">
            <img class="item-more" src="<?php echo bloginfo('template_url') . './assets/icons/utility-icons/more-icon.svg' ?>" alt="<?php echo the_title();?>">
        </a>

        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/meat-icon.svg'?>" alt="" class="absolute-class meat_icon">
    
        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/tongs-icon.svg'?>" alt="" class="absolute-class tongs_icon">
    
        <img src="<?php echo bloginfo('template_url') . './assets/icons/food-icons/broccoli-icon.svg'?>" alt="" class="absolute-class broccoli_icon">
    </div>
    
    
    
    
        
    
</section>

