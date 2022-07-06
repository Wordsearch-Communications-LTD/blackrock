<?php 
    $images = get_sub_field('images');
    $randClass = 'ic' . substr(md5(microtime()),rand(0,26), 8);
?>
<section class="image-carousel">
    <div class="swiper <?= $randClass ?>" data-carousel-class=".<?= $randClass ?>">

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-wrapper">
        
            <?php foreach($images as $image): ?>
                
                <div class="swiper-slide">
                    <?= wp_get_attachment_image( $image['image']['id'], 'full'); ?>
                    <div class="caption"><?= $image['caption'] ?></div>
                </div>
            
            <?php endforeach; ?>
        </div>
    </div>
    <div class="<?= $randClass ?>-pagination"></div>
</section>