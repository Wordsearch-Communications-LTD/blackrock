<?php 
    $map = get_sub_field('map_svg');
    $layers = get_sub_field('map_layers');
?>
<section class="map">
        
    <nav class="map-layers-nav">
        <?php foreach($layers as $index => $layer): ?>
            <button data-layer-index="<?= $index ?>"><?= $layer['layer_title'] ?></button>
        <?php endforeach;  ?>
    </nav>

    <div class="maps">
        <div id="main-map">
            <?= wp_get_attachment_image( $map['id'], 'full' ); //this will be svg, as will ones below ?>
            <?php /*<img src="<?= $titleImage['url'] ?>" class="style-svg"> */?>
        </div>
        <?php foreach($layers as $index => $layer): ?>
            <div class="map-layer" data-layer-index="<?php $index ?>">
                <?= wp_get_attachment_image( $layer['layer_image']['id'], 'full' ); ?>
                <?php /*<img src="<?= $layer['layer_image']['url'] ?>" class="style-svg"> */?>
            </div>    
        <?php endforeach;  ?>
    </div>
</section>