<section class="calling-form">
    <div class="fullwidth-container">
        <header class="calling-form__header">
            <h2><?php echo the_field('footer-header', 50); ?></h2>
        </header>

        <!-- Contact form -->
        <div class="calling-form__contact-box">
            <form action="emailer.php" method="POST" name="contactform" class="form">
                <label for="name"></label>
                <input type="text" id="name" name="name" placeholder="Your name" title="Type your full name">

                <label for="phone"></label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone number" title="Type your phone number">

                
                <button type="submit" value="Call back " class="call-back__btn" title="Click to get call back from Classic Pizza!">
                    Call back
                    <img src="<?php echo bloginfo('template_url').'/assets/icons/utility-icons/call-back-icon.svg'?>"/>
                </button>
            </form>
        </div>
        
        <img src="<?php echo get_field('footer-image', 50); ?>" alt="" class="calling-form__car"/>
        
    </div>

</section>