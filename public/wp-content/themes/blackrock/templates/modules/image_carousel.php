<?php 
    $images = get_sub_field('images');
    $randClass = 'ic' . substr(md5(microtime()),rand(0,26), 8);
?>
<section class="image-carousel">
    <div class="swiper <?= $randClass ?>" data-carousel-class=".<?= $randClass ?>">

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-wrapper">
        <div class="mobile-swipe-prompt">Swipe <svg width="128" height="71" viewBox="0 0 128 71" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;">
    <g transform="matrix(0.977099,0,0,0.977099,0,0)">
        <path d="M0,36.571L127.399,36.571" style="fill:none;fill-rule:nonzero;stroke:white;stroke-width:4px;"/>
    </g>
    <g transform="matrix(0.977099,0,0,0.977099,0,0)">
        <path d="M93.758,70.484L128,36.242L93.758,2" style="fill:none;fill-rule:nonzero;stroke:white;stroke-width:4px;"/>
    </g>
</svg></div>
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