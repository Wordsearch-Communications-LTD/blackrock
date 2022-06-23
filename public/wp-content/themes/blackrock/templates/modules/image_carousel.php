<?php 
    $images = get_sub_field('images');
?>
<section class="image-carousel">
    <h1>image carousel</h1>
    <?php foreach($images as $image): ?>
        <?php echo wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
        <?php echo $image['caption'] ?>
    <?php endforeach; ?>
</section>