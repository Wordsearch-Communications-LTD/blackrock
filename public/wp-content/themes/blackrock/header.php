<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php 
	$pageColor = get_field('page_color') ? get_field('page_color') : 'cream';
	$pageColorHex = '#FFFFFF';

	if($pageColor === 'cream'){
		$pageColorHex = '#F3EADF';
	}

	if($pageColor === 'black'){
		$pageColorHex = '#000000';
	}
?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- this is the part responsible for hidding the bottom bar -->
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/favicon.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicons/favicon.png" sizes="16x16">
	<style>
		#page-reveal-slicing {
			display:block;
			width: 100vw;
			height: 100vh;
			position: fixed;
			z-index: 10000;
			top: 0;
			left: 0;
			pointer-events: none;
		}

		#page-reveal-slicing .slice_contain .slice {
			background-color: <?= $pageColorHex ?>;
		}

		.home #page-reveal-slicing {
			display: none;
		}

	</style>
	<?php wp_head(); ?>

</head>
	

<body <?php body_class('page-' . $pageColor); ?>>

	