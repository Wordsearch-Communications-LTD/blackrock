<?php 
    $copy = get_sub_field('copy'); 
    $images = get_sub_field('images');
?>
<section class="two-col-image">
    
    <?php echo $copy ?>
    
    <?php foreach($images as $image): ?>
        <?php echo wp_get_attachment_image( $image['image']['id'], 'full' ); ?>
           <?php echo $image['caption'] ?>
    <?php endforeach; ?>
</section>