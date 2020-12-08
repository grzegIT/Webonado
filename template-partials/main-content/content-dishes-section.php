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
            
            <div class="product-list__items" style="display: flex; flex-direction: row; flex-wrap: wrap;">
                
                <?php
                    query_posts('cat=1');
                    while (have_posts()) : the_post(); 
                ?>
                    <div class='item'>
                        
                        <a href="<?php the_field('item-name');?>?>">
                            <?php the_post_thumbnail(); ?>
                        </a>

                        <!-- HIT -->
                        <?php if(the_field('hit')) : ?>
                                <span class="item--hit"><?php the_field('hit');?></span>
                        <?php endif; ?>

                        <div class="item_description">
                            <a href="<?php esc_url(the_field('item-name'));?>">
                                <h4 class='item__title'>
                                    <?php the_field('item-name'); ?>
                                </h4>
                            </a>
                            <p>
                                <?php the_field('item-size');?>
                            </p>
                        </div>
                        <div class="item_ingredients">
                            <?php the_field('ingredients');?>
                        </div>
                        <h3>
                            <?php the_field('price');?> USD
                        </h3>
                        
                    </div>
                <?php
                    endwhile;
                   ?>
                

            </div>
        </div>   

        <a href="<?php echo esc_url( home_url( '/more_products' ) );?>">
            <img src="<?php echo bloginfo('template_url') . './assets/icons/utility-icons/more-icon.svg' ?>" alt="<?php echo the_title();?>">
        </a>
    </div>
</section>

