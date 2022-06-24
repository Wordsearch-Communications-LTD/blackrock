<?php 
    $images = get_sub_field('images');
?>
<section class="two-col-image">
    
    <?php foreach($images as $image): ?>
        <div>
            <?= wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
            <?= $image['caption'] ?>
        </div>
    <?php endforeach; ?>
    
</section>