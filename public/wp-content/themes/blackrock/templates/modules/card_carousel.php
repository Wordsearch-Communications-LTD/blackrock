<?php 
    $images = get_sub_field('cards_carousel');
    $randClass = 'cc' . substr(md5(microtime()),rand(0,26), 8);
?>
<section class="card-carousel">
    <div class="swiper <?= $randClass ?>" data-carousel-class=".<?= $randClass ?>">

        <div class="swiper-wrapper">
            <?php foreach($images as $image): ?>
    
                <div class="swiper-slide">
                    <?= wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
                    <?= $image['caption'] ?>
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>
</section>