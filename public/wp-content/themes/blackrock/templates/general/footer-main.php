<section class="contact-module-container">
<?php 
    $contactIntro = get_field('title','options');
    $contacts = get_field('contacts','options');
    $logo = get_field('logo','options');
    $image = get_field('image','options');
?>

    <div class="contacts-container">
        <div class="left">
            <div class="copy">
                <?= $contactIntro ?>
                <?= wp_get_attachment_image( $logo['id'], 'full', '', ["class" => "contact-logo"] ); ?>
            </div>
            <div class="contacts">
                <?php foreach($contacts as $contact): ?>
                    <div class="contact">
                        <?= $contact['contact'] ?>
                    </div>
                <?php endforeach; ?>
            </div>    
        </div>
        <div class="image-container">
            <?= wp_get_attachment_image( $image['id'], 'full' ); ?>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="footer-content-main">
        <p class="copyright">© <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?></p>
            
        <?php 
            wp_nav_menu( array(
                'menu'           => 'footer',
                'theme_location' => 'footer',
                'fallback_cb'    => false // Do not fall back to wp_page_menu()
            ) );
        ?>
	</div>
</footer>
