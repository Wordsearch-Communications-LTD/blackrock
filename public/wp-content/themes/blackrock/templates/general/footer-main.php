<footer id="footer">
	<div>
		<p>© <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?></p>
	</div>

	<nav>
	<?php 
		wp_nav_menu( array(
			'menu'           => 'Main Menu',
			'theme_location' => 'main-menu',
			'fallback_cb'    => false // Do not fall back to wp_page_menu()
		) );
		?>
	</nav>
</footer>
