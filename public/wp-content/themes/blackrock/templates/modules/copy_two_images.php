<?php 
    $copy = get_sub_field('copy'); 
    $images = get_sub_field('images');
?>
<section class="copy-two-images">
    <div class="copy">
        <?= $copy ?>
    </div>
    <div class="images-container">
        <?php foreach($images as $image): ?>
            <div>
                <?= wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
                <?= $image['caption'] ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>