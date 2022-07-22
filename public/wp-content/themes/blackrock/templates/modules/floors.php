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
            --availableColor: <?= $keyColor_Available ?>;
            --occupiedColor: <?= $keyColor_Occupied ?>;
        }
    </style>
    <div class="floor-toggle">
        <div class="legend available"><?= $availableCopy ?></div>
        <div class="legend occupied"><?= $occupiedCopy ?></div>
        <div id="floor-toggle"><?= $toggleCopy ?></div>
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
                <!-- <div class="floor-number"><?= $floor['floor_number']; ?></div> -->
                                
                <?php foreach($floor['units'] as $unit): ?>
                    <?php $availability = ($unit['availiable']) ? 'available' : 'occupied'; ?>
                    
                    <div class="unit <?= $availability ?>">
                        <button class="close-unit"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_66_3961)"> <path d="M7.48535 24.4853L24.4559 7.51473" stroke="black" stroke-width="2"/> <path d="M24.4558 24.4853L7.48525 7.51473" stroke="black" stroke-width="2"/> </g> <defs> <clipPath id="clip0_66_3961"> <rect width="32" height="32" fill="white"/> </clipPath> </defs> </svg></button>
                        <header>
                            <span class="floor-header_floor-number"><?= $unit['unit_number']; ?></span>
                            <span class="floor-header_name-sqft"><?= $unit['unit_square_footage']; ?></span>
                        </header>

                        <article class="content">
                            
                            <ul class="data">
                                <li>
                                    <h3><?= $unit['name']; ?></h3>
                                </li>
                                <li>
                                    <span><?= $unit['sqft_label']; ?></span>
                                    <span><?= $unit['sqft_value']; ?></span>
                                </li>
                                <li>
                                    <span><?= $unit['ceiling_height_label']; ?></span>
                                    <span><?= $unit['ceiling_height_value']; ?></span>
                                </li>
                                <li>
                                    <span><?= $unit['download_plans_label']; ?></span>
                                    <span class="has-icon"><a href="<?= $unit['download_plans_link']['url']; ?>" target="blank"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 28L28 28" stroke="black" stroke-width="2"/> <path d="M15.5146 3L15.5146 21" stroke="black" stroke-width="2" class="anim"/> <path d="M7.02937 13.7861L15.5146 22.2713L23.9999 13.7861" stroke="black" stroke-width="2" class="anim"/> </svg></a></span>
                                </li>
                                <li>
                                    <span><?= $unit['test_fits_label']; ?></span>
                                    <span class="has-icon"><a href="<?= $unit['test_fits_link']['url']; ?>" target="blank"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M4 28L28 28" stroke="black" stroke-width="2"/> <path d="M15.5146 3L15.5146 21" stroke="black" stroke-width="2" class="anim"/> <path d="M7.02937 13.7861L15.5146 22.2713L23.9999 13.7861" stroke="black" stroke-width="2" class="anim"/> </svg></a></span>
                                </li>
                            </ul>
                            <div class="image">
                                <?= wp_get_attachment_image( $unit['image']['id'], 'full' ); ?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; //units ?>
            </div>
        <?php endforeach; //$floors ?>
    </div>    
</section>