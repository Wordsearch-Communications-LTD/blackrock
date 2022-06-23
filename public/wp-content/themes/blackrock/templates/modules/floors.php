<?php 
    $keyColor_Available = get_sub_field('key_color_availible');
    $availableCopy = get_sub_field('availible_copy');
    $keyColor_Occupied = get_sub_field('key_color_occupied');
    $occupiedCopy = get_sub_field('occupied_copy');
    $toggleCopy = get_sub_field('toggle_copy');
    $floors = get_sub_field('floors');

?>
<section class="floors grid">
    <style>
        .floors {
            --availableColor: <?php echo $keyColor_Available ?>;
            --occupiedColor: <?php echo $keyColor_Occupied ?>;
        }
    </style>
    <div class="floor-toggle">
        <div class="legend available"><?php echo $availableCopy ?></div>
        <div class="legend occupied"><?php echo $occupiedCopy ?></div>
        <button><?php echo $toggleCopy ?></button>
    </div>    
    <div class="floor-list">
        <?php foreach($floors as $floor): ?>
            <div class="floor">
                <div class="floor-number"><?php echo $floor['floor_number']; ?></div>
                                
                <?php foreach($floor['units'] as $unit): ?>
                    <?php $availability = ($unit['availiable']) ? 'available' : 'occupied'; ?>
                    
                    <div class="unit <?php echo $availability ?>">
                        <?php echo $unit['unit_number']; ?>
                        <?php echo $unit['unit_square_footage']; ?>
                        
                        <div class="hidden">
                            <?php echo $unit['name']; ?>
                            <?php echo $unit['sqft_label']; ?>
                            <?php echo $unit['sqft_value']; ?>
                            <?php echo $unit['ceiling_height_label']; ?>
                            <?php echo $unit['ceiling_height_value']; ?>
                            <?php echo $unit['download_plans_label']; ?>
                            <?php echo $unit['download_plans_link']['url']; ?>
                            <?php echo $unit['test_fits_label']; ?>
                            <?php echo $unit['test_fits_link']['url']; ?>
                            <?php echo wp_get_attachment_image( $unit['image']['id'], 'full' ); ?>
                        </div>
                    </div>
                <?php endforeach; //units ?>
            </div>
        <?php endforeach; //$floors ?>
    </div>    
</section>