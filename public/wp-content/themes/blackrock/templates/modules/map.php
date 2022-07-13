<?php 
		$mapTitle = get_sub_field('map_title');
		$map = get_sub_field('map_svg');
		$mapNavTitle = get_sub_field('map_nav_title');
		$layers = get_sub_field('map_layers');
?>
<section class="map">
	<div class="map-title">
		<?= $mapTitle ?>
	</div>
	<div class="map-container">
		<nav class="map-layers-nav">
			<?= $mapNavTitle ?>
			<?php foreach($layers as $index => $layer): ?>
				<div class="toggle <?= ($index == 0) ? 'active' : ''; ?>" data-layer-index="<?= $index ?>"><?= $layer['layer_title'] ?></div>
			<?php endforeach;  ?>
		</nav>

		<div class="maps">
			<div class="scroll-map-info">Drag map <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M17.5107 15.0159L26.0333 6.4933" stroke="white" stroke-width="2"/> <path d="M26.0614 12.4082L26.0612 6.38786L20.0409 6.38772" stroke="white" stroke-width="2"/> <path d="M14.6484 17.8784L6.12587 26.401" stroke="white" stroke-width="2"/> <path d="M12.0392 26.428L6.01931 26.4278L6.01917 20.4079" stroke="white" stroke-width="2"/> <path d="M14.6494 14.9359L6.12647 6.41297" stroke="white" stroke-width="2"/> <path d="M12.0428 6.38638L6.02114 6.38625L6.02127 12.4079" stroke="white" stroke-width="2"/> <path d="M17.5127 17.7987L26.0356 26.3217" stroke="white" stroke-width="2"/> <path d="M26.0619 20.3646L26.0621 26.4266L20.0001 26.4264" stroke="white" stroke-width="2"/> </svg> </div>
			<div class="maps-scrollable-container">
				<div id="main-map">
					<?= wp_get_attachment_image( $map['id'], 'full' ); //this will be svg, as will ones below ?>
					<?php /*<img src="<?= $titleImage['url'] ?>" class="style-svg"> */?>
				</div>
				<?php foreach($layers as $index => $layer): ?>
					<div class="map-layer <?= ($index == 0) ? 'show' : '' ?>" data-layer-index="<?= $index ?>">
						<?= wp_get_attachment_image( $layer['layer_image']['id'], 'full' ); ?>
						<?php /*<img src="<?= $layer['layer_image']['url'] ?>" class="style-svg"> */?>
					</div>    
				<?php endforeach;  ?>
			</div>
		</div>

	</div>
</section>