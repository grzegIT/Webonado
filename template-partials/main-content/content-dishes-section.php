<section class="popular-dishes">
    <div class="main-container">           
        
        <h2><?php the_field('dishes-header', 50); ?></h2>
        
        <div class="product-list">
            
            <div class="product-list__categories">
                <?php 
                    $categories = get_categories(array (
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'hide_empty' => false
                    ));

                    foreach($categories as $category){ ?>
                       <a href="<?php echo esc_url( home_url( '/'.$category->name ));?>" title="<?php echo $category->name;?>">
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
                        
                        <?php 
                        $hit = get_field('hit');
                        if($hit): ?>
                                <p class="item__hit"><?php echo the_field('hit');?></p>
                        <?php endif;?>
                                                
                        <a href="<?php the_permalink();?>"><img class="item__img" src="<?php the_field('item-image'); ?>" title="<?php the_field('item-name')['alt']; ?>"></a>
                        
                        <div class="item__description">
                            <h4 class='item__title'><a href="<?php the_permalink();?>" title="<?php the_field('item-name')['alt']; ?>"><?php the_field('item-name'); ?></a></h4>
                            <h5><?php the_field('item-size');?></h5>    
                        </div>
                        <div class="item__ingredients">
                            <?php the_field('ingredients');?>
                        </div>
                        
                        <h3><?php the_field('price');?> USD</h3>
                        
                        <a href="<?php the_permalink(); ?>">
                            <div class="item__buy">
                                <img src="<?php echo bloginfo('template_url').'/assets/icons/utility-icons/buy-icon--active.svg'?>" title="Buy a delisious <?php echo the_title()?>" alt="<?php echo the_title()?>">
                            </div>
                        </a>
                        
                    </div>
                <?php
                    endwhile;
                ?>
                

            </div>
        </div>   

        
        <img src="<?php echo bloginfo('template_url').'/assets/icons/food-icons/meat-icon.svg'?>" alt="" class="absolute-class meat_icon">
        <img src="<?php echo bloginfo('template_url').'/assets/icons/food-icons/tongs-icon.svg'?>" alt="" class="absolute-class tongs_icon">
        <img src="<?php echo bloginfo('template_url').'/assets/icons/food-icons/broccoli-icon.svg'?>" alt="" class="absolute-class broccoli_icon">
    </div>
    <a href="<?php echo esc_url( home_url( '/more-products' ) );?>" title="More products">
        <img class="item-more" src="<?php echo bloginfo('template_url').'/assets/icons/utility-icons/more-icon.svg'; ?>" title="Get more information about our offer. Enjoy!"/>
    </a>
    
    
    
        
    
</section>

