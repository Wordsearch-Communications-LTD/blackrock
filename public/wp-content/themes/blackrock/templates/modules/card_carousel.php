<?php 
    $images = get_sub_field('cards_carousel');
?>
<section class="card-carousel">

    <?php foreach($images as $image): ?>
        <?php echo wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
           <?php echo $image['caption'] ?>
    <?php endforeach; ?>

</section>