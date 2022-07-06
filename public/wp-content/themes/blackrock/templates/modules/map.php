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
</section>