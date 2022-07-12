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
