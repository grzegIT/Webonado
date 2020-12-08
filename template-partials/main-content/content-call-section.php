<section class="calling-form">
    <div class="fullwidth-container">
        <header class="calling__header">
            <h2><?php echo the_field('footer-header', 23); ?></h2>
        </header>

        <!-- Contact form -->
        <div class="calling-form__contact-box">
            <form action="emailer.php" method="POST" name="contactform" class="form">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Your name">

                <label for="phone"></label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone number">

                
                <input type="submit" value="Call back" class="">
            </form>
        </div>
        
        <img src="<?php echo get_field( 'footer-image', 38 ); ?>" alt="<?php echo get_field( 'footer-image', 38 )['alt']; ?>"/>
        
    </div>

</section>