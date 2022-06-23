<?php 
    $image = get_sub_field('image');
    $copy = get_sub_field('copy');
?>
<section class="one-col-copy-image">
    
    <div class="copy">
        <?php echo $copy ?>
    </div>
    
    <?php echo wp_get_attachment_image( $image['id'], 'full', "", ["class" => "image"] ); ?>
</section>