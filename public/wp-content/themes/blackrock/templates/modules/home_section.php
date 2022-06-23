<?php 
    $copy = get_sub_field('copy');
    $cta = get_sub_field('cta');
    $image = get_sub_field('image');
    
?>
<section class="home-section column-reveal">
    <?php echo $copy ?>
    <?php echo wp_get_attachment_image( $image, 'full' ) ?>
    <?php return_afc_link($cta, 'button light') ?>
</section>