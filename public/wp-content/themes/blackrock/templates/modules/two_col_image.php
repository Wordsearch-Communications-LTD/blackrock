<?php 
    $images = get_sub_field('images');
?>
<section class="two-col-image">

    <?php foreach($images as $image): ?>
        <div>
            <?php echo wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
            <?php echo $image['caption'] ?>
        </div>
    <?php endforeach; ?>
</section>