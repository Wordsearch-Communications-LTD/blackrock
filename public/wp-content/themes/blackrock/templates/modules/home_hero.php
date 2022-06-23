<?php 
    $titleImage =  get_sub_field('title_image');
    $subtitle = get_sub_field('subtitle');
    $image = get_sub_field('image');
    $copy = get_sub_field('copy');
?>
<section class="home-hero column-reveal">
    <img src="<?php echo $titleImage['url'] ?>" class="style-svg">
    <?php echo $subtitle ?>
    <?php echo wp_get_attachment_image( $image, 'full' ) ?>
    <?php echo $copy ?>
</section>