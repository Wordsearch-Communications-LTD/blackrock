<?php 
    $images = get_sub_field('images');
?>
<section class="image-carousel">
    <div class="carousel">
    <?php foreach($images as $image): ?>
        <div class="slide">
            <?= wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
            <?= $image['caption'] ?>
        </div>
    <?php endforeach; ?>
    </div>
</section>