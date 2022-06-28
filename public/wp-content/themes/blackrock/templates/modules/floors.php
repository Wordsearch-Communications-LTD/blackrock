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
        <button id="floor-toggle"><?php echo $toggleCopy ?></button>
    </div>    
    <div class="floor-list">
        <?php foreach($floors as $floor): ?>
            <?php $hasActiveUnit = false ?>
            <?php foreach($floor['units'] as $unit): ?>
                <?php
                    $hasActiveUnit = ($unit['availiable']) ? 'floor-available' : 'floor-occupied';
                    if($hasActiveUnit === 'floor-available') {
                        break;
                    }
                ?>
            <?php endforeach; ?>
            <div class="floor <?= $hasActiveUnit ?>">
                <div class="floor-number"><?php echo $floor['floor_number']; ?></div>
                                
                <?php foreach($floor['units'] as $unit): ?>
                    <?php $availability = ($unit['availiable']) ? 'available' : 'occupied'; ?>
                    
                    <div class="unit <?php echo $availability ?>">
                        <button class="close-unit">Close</button>
                        <header>
                            <?php echo $unit['unit_number']; ?>
                            <?php echo $unit['unit_square_footage']; ?>
                        </header>

                        <article class="content">
                            
                            <ul class="data">
                                <li>
                                    <h3><?php echo $unit['name']; ?></h3>
                                </li>
                                <li>
                                    <span><?php echo $unit['sqft_label']; ?></span>
                                    <span><?php echo $unit['sqft_value']; ?></span>
                                </li>
                                <li>
                                    <span><?php echo $unit['ceiling_height_label']; ?></span>
                                    <span><?php echo $unit['ceiling_height_value']; ?></span>
                                </li>
                                <li>
                                    <span><?php echo $unit['download_plans_label']; ?></span>
                                    <span><?php echo $unit['download_plans_link']['url']; ?></span>
                                </li>
                                <li>
                                    <span><?php echo $unit['test_fits_label']; ?></span>
                                    <span><?php echo $unit['test_fits_link']['url']; ?></span>
                                </li>
                            </ul>
                            <div class="image">
                                <?php echo wp_get_attachment_image( $unit['image']['id'], 'full' ); ?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; //units ?>
            </div>
        <?php endforeach; //$floors ?>
    </div>    
</section>