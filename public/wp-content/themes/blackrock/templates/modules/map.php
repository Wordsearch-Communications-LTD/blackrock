<?php 
    $map = get_sub_field('map_svg');
    $layers = get_sub_field('map_layers');
    
?>
<section class="map">
    <hr>
    <h1>map</h1>
    <nav class="map-layers-nav">
        <?php foreach($layers as $index => $layer): ?>
            <button data-layer-index="<?php echo $index ?>"><?php echo $layer['layer_title'] ?></button>
        <?php endforeach;  ?>
    </nav>
        
        <?php echo wp_get_attachment_image( $image, 'full' ); //this will be svg, as will ones below ?>
        <?php /*<img src="<?php echo $titleImage['url'] ?>" class="style-svg"> */?>

        <?php foreach($layers as $index => $layer): ?>
            <div class="map-layer" data-layer-index="<?php $index ?>">
                <?php echo wp_get_attachment_image( $layer['layer_image']['id'], 'full' ); ?>
                <?php /*<img src="<?php echo $layer['layer_image']['url'] ?>" class="style-svg"> */?>
            </div>    
        <?php endforeach;  ?>
    
</section>